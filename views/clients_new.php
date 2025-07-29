<style>
    /* Container and layout */
    .section-container {
        max-width: 1200px;
        margin: 0 auto;
        position: relative;
    }

    .filter-container {
        position: relative;
        overflow: hidden;
        padding: 0 40px;
        z-index: 10;
    }

    .filter-scroll {
        display: flex;
        gap: 12px;
        overflow-x: auto;
        white-space: nowrap;
        scrollbar-width: none;
        -ms-overflow-style: none;
        padding-bottom: 6px;
    }

    .filter-scroll::-webkit-scrollbar {
        display: none;
    }

    /* Scroll buttons */
    .scroll-btn {
        position: absolute;
        top: 50%;
        transform: translateY(-50%);
        width: 32px;
        height: 32px;
        border: none;
        background: #fff;
        border: 1px solid #014293;
        color: #014293;
        border-radius: 50%;
        z-index: 2;
        cursor: pointer;
        transition: all 0.2s ease;
    }

    .scroll-btn:hover {
        background: #014293;
        color: #fff;
    }

    .scroll-btn.left {
        left: 5px;
    }

    .scroll-btn.right {
        right: 5px;
    }

    /* Category Button */
    .cat-btn {
        background: #fff;
        color: #014293;
        border: 1px solid #014293;
        border-radius: 4px;
        padding: 10px 24px;
        font-size: 15px;
        font-weight: 600;
        white-space: nowrap;
        cursor: pointer;
        transition: all 0.2s ease;
        margin-right: 10px;
        position: relative;
    }

    .cat-btn.active,
    .cat-btn:hover {
        background-color: #014293;
        color: #fff;
    }

    /* Subcategory Button */
    .subcat-btn {
        background: #f0f2fe;
        color: #000;
        border: 1px solid #014293;
        border-radius: 4px;
        padding: 10px 24px;
        font-size: 15px;
        font-weight: 600;
        white-space: nowrap;
        cursor: pointer;
        transition: all 0.2s ease;
        margin-right: 10px;
    }

    .subcat-btn.active,
    .subcat-btn:hover {
        background-color: #f0f2fe;
        color: #000;
    }

    .subcat-left,
    .subcat-right {
        background: #f0f2fe;
        color: #000;
    }

    .subcat-btn:hover,
    .subcat-btn.active {
        background: #014293;
        color: #fff;
    }

    /* Dropdown arrow (for category with subcategories) */
    .dropdown-arrow {
        margin-left: 6px;
        font-size: 12px;
    }

    /* Client Logo Grid */
    #clientGrid {
        position: relative;
    }

    .client-logo {
        padding: 20px;
        border: 1px solid #D9D9D9;
        background-color: #fff;
        height: 100%;
        display: flex;
        align-items: center;
        justify-content: center;
        border-radius: 10px;
        transition: transform 0.3s ease;
    }


    .client-logo:hover {
        box-shadow: 4px 4px 0 #D9D9D9;
        border-radius: 0;
    }

    .client-logo img {
        max-width: 75%;
        height: auto;
        display: block;
        margin: 0 auto;
    }
</style>

<header class="inner-header team-banner sec">
    <img src="assets/images/team-bg.jpg" alt="">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-6 col-12">
                <div class="sec-head center">
                    <h1>Our <span>Clients</span></h1>


                </div>
            </div>
        </div>
        <!-- Category Filter -->
        <div class="filter-container mt-5 mb-3 position-relative">
            <button class="scroll-btn left cat-left">&#10094;</button>

            <div class="filter-scroll category-filter-wrapper">
                <div class="category-filter d-flex align-items-center">
                    <button class="cat-btn active" data-id="">All</button>
                    <?php foreach ($category as $cat): ?>
                        <?php
                        $hasSub = false;
                        foreach ($subcategories as $sub) {
                            if ($sub['category_id'] == $cat['id']) {
                                $hasSub = true;
                                break;
                            }
                        }
                        ?>
                        <button class="cat-btn" data-id="<?= $cat['id'] ?>">
                            <?= htmlspecialchars($cat['name']) ?>
                            <?php if ($hasSub): ?>
                                <span class="dropdown-arrow">&#9662;</span>
                            <?php endif; ?>
                        </button>
                    <?php endforeach; ?>
                </div>

            </div>
            <button class="scroll-btn right cat-right">&#10095;</button>
        </div>

        <!-- Subcategory Filter -->
        <div class="filter-container subcategory-wrapper mb-4 position-relative" style="display: none;">
            <button class="scroll-btn left subcat-left">&#10094;</button>
            <div class="filter-scroll subcategory-filter-wrapper">
                <div class="subcategory-filter d-flex align-items-center"></div>
            </div>
            <button class="scroll-btn right subcat-right">&#10095;</button>
        </div>

    </div>
</header>

<section class="sec clients-sec py-5">
    <div class="container section-container">





        <!-- Client Grid -->
        <div class="row g-3" id="clientGrid"></div>
    </div>
</section>

<script>
    $(document).ready(function () {
        function scrollFilter(wrapperSelector, direction) {
            const container = $(wrapperSelector)[0];
            const scrollAmount = 200;
            container.scrollBy({
                left: direction === 'left' ? -scrollAmount : scrollAmount,
                behavior: 'smooth'
            });
        }

        $('.cat-left').on('click', () => scrollFilter('.category-filter-wrapper', 'left'));
        $('.cat-right').on('click', () => scrollFilter('.category-filter-wrapper', 'right'));
        $('.subcat-left').on('click', () => scrollFilter('.subcategory-filter-wrapper', 'left'));
        $('.subcat-right').on('click', () => scrollFilter('.subcategory-filter-wrapper', 'right'));

        function loadClients(postData = {}) {
            $("#clientGrid").fadeOut(200);
            $.ajax({
                type: "POST",
                url: site_url + "home/getclientslogos",
                data: postData,
                dataType: "json",
                success: function (res) {
                    let temp = "";
                    if (res.length) {
                        res.forEach((e, index) => {
                            temp += `
                        <div class="col-6 col-sm-4 col-md-2" data-aos="zoom-in" data-aos-delay="${index * 50}">
                            <div class="client-logo">
                                <a href="${e.link}" target="_blank" rel="noopener">
                                    <img src="${site_url + 'uploads/images/' + e.image}" alt="${e.title || e.image.split('.')[0]}">
                                </a>
                            </div>
                        </div>`;
                        });
                    } else {
                        temp = '<div class="col-12 text-center">No clients found</div>';
                    }
                    $("#clientGrid").html(temp).fadeIn(200);
                    if (typeof AOS !== 'undefined') AOS.refresh();
                },
                error: function () {
                    $("#clientGrid").html('<div class="col-12 text-center">Error loading clients</div>').fadeIn(200);
                }
            });
        }

        function loadSubcategories(catId) {
            const allSubcats = <?= json_encode($subcategories) ?>;
            const filtered = allSubcats.filter(sub => sub.category_id == catId);

            if (filtered.length) {
                let html = '';
                filtered.forEach(sub => {
                    html += `<button class="subcat-btn" data-id="${sub.id}">${sub.name}</button>`;
                });
                $('.subcategory-filter').html(html);
                $('.subcategory-wrapper').slideDown(200);
            } else {
                $('.subcategory-filter').html('');
                $('.subcategory-wrapper').slideUp(200);
            }
        }

        $(document).on('click', '.cat-btn', function () {
            const catId = $(this).data('id');
            $('.cat-btn').removeClass('active');
            $(this).addClass('active');
            $('.subcat-btn').removeClass('active');

            if (catId) {
                loadSubcategories(catId);
                loadClients({ category_id: catId });
            } else {
                $('.subcategory-wrapper').slideUp(200);
                loadClients({});
            }
        });

        $(document).on('click', '.subcat-btn', function () {
            const subcatId = $(this).data('id');
            $('.subcat-btn').removeClass('active');
            $(this).addClass('active');

            const catId = $('.cat-btn.active').data('id');
            loadClients({
                category_id: catId,
                subcategory_id: subcatId
            });
        });

        $('.cat-btn[data-id=""]').trigger('click');
    });
</script>