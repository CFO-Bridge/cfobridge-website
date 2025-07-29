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
    </div>
</header>

<section class="sec clients-sec py-5">
    <div class="container section-container">
        <div class="filter-container">
            <div class="category-slider-container">
                <button class="cat-scroll-btn left" type="button">&#10094;</button>
                <div class="category-slider">
                    <div class="category-slider-inner">
                        <div class="category-filter">
                            <button class="cat-btn<?php if ($active)
                                echo ' active'; ?>" data-id="">All</button>
                            <?php foreach ($category as $row): ?>
                                <div class="cat-dropdown">
                                    <button class="cat-btn main-cat" data-category-id="<?= $row['id'] ?>">
                                        <?= htmlspecialchars($row['name']) ?>
                                        <?php
                                        $hasSub = false;
                                        foreach ($subcategories as $sub) {
                                            if ($sub['category_id'] == $row['id']) {
                                                $hasSub = true;
                                                break;
                                            }
                                        }
                                        if ($hasSub)
                                            echo '<span class="dropdown-arrow">&#9662;</span>';
                                        ?>
                                    </button>
                                    <?php if ($hasSub): ?>
                                        <div class="subcat-dropdown">
                                            <?php foreach ($subcategories as $sub): ?>
                                                <?php if ($sub['category_id'] == $row['id']): ?>
                                                    <div class="subcat-item client-subcat" data-id="<?= $sub['id'] ?>">
                                                        <?= htmlspecialchars($sub['name']) ?>
                                                    </div>
                                                <?php endif; ?>
                                            <?php endforeach; ?>
                                        </div>
                                    <?php endif; ?>
                                </div>
                            <?php endforeach; ?>
                        </div>
                    </div>
                </div>
                <button class="cat-scroll-btn right" type="button">&#10095;</button>
            </div>
        </div>

        <!-- Clients Grid -->
        <div class="row g-3" id="clientGrid">
            <!-- Logos will be loaded here -->
        </div>
    </div>
</section>

<style>
    .section-container {
    max-width: 1200px;
    margin: 0 auto;
    position: relative;
    z-index: 1;
}

/* --- Filter Layout --- */
.filter-container {
    position: relative;
    z-index: 10;
    margin-bottom: 20px;
}

.category-slider-container {
    display: flex;
    align-items: center;
    position: relative;
    overflow: hidden; /* Only this container scrolls */
}

/* --- Scroll Arrows --- */
.cat-scroll-btn {
    background: #fff;
    color: #014293;
    border: 1px solid #014293;
    border-radius: 50%;
    width: 36px;
    height: 36px;
    font-size: 22px;
    cursor: pointer;
    display: flex;
    align-items: center;
    justify-content: center;
    margin: 0 8px;
    opacity: 0.85;
    z-index: 2;
    position: relative;
}

.cat-scroll-btn:hover {
    background: #014293;
    color: #fff;
}

/* --- Slider Area --- */
.category-slider {
    overflow-x: auto;
    white-space: nowrap;
    scroll-behavior: smooth;
    flex: 1;
    scrollbar-width: none;
    -ms-overflow-style: none;
    position: relative;
    z-index: 1;
}

.category-slider::-webkit-scrollbar {
    display: none;
}

.category-slider-inner {
    display: flex;
    gap: 16px;
    min-width: max-content;
    padding: 10px 0;
    position: relative;
}

/* --- Category Buttons --- */
.cat-btn {
    background: #fff;
    color: #014293;
    border: 1px solid #014293;
    border-radius: 4px;
    padding: 10px 24px;
    font-size: 16px;
    font-weight: 600;
    min-width: 150px;
    cursor: pointer;
    transition: background 0.2s, color 0.2s;
    white-space: nowrap;
    position: relative;
    z-index: 1;
}

.cat-btn.active,
.cat-btn:hover {
    background: #014293;
    color: #fff;
}

/* --- Dropdown Styling --- */
.cat-dropdown {
    position: relative;
    display: inline-block;
    z-index: 20;
}

.dropdown-arrow {
    margin-left: 8px;
    font-size: 12px;
}

/* --- Subcategory Dropdown --- */
.subcat-dropdown {
    display: none;
    position: absolute;
    top: calc(100% + 8px);
    left: 0;
    min-width: 200px;
    background: #fff;
    border: 1px solid #014293;
    border-radius: 4px;
    box-shadow: 0 8px 24px rgba(1, 66, 147, 0.12);
    padding: 8px 0;
    z-index: 999;
}

.cat-dropdown.open .subcat-dropdown {
    display: block;
}

.subcat-item {
    padding: 10px 20px;
    font-size: 15px;
    color: #014293;
    cursor: pointer;
    transition: background 0.2s, color 0.2s;
    white-space: nowrap;
}

.subcat-item:hover,
.subcat-item.active {
    background: #014293;
    color: #fff;
}

/* --- Client Grid --- */
#clientGrid {
    position: relative;
    z-index: 1;
}

.client-logo {
    padding: 20px;
    border: 1px solid #D9D9D9;
    background-color: #fff;
    transition: transform 0.3s ease;
    height: 100%;
    display: flex;
    align-items: center;
    justify-content: center;
    border-radius: 10px;
    position: relative;
}

.client-logo:hover {
    box-shadow: 4px 4px 0 #D9D9D9;
    border-radius: 0;
}

.client-logo img {
    max-width: 70%;
    height: auto;
}

</style>

<script>
    $(document).ready(function () {
        // Slider scroll
        $('.cat-scroll-btn.left').on('click', function () {
            $('.category-slider').animate({ scrollLeft: '-=200' }, 300);
        });
        $('.cat-scroll-btn.right').on('click', function () {
            $('.category-slider').animate({ scrollLeft: '+=200' }, 300);
        });



        // Category button click (dropdown)
        $('.main-cat').on('click', function (e) {
            e.stopPropagation();
            var $dropdown = $(this).closest('.cat-dropdown');
            $('.cat-dropdown').not($dropdown).removeClass('open');
            $dropdown.toggleClass('open');
        });

        // Subcategory click
        $(document).on('click', '.subcat-item', function (e) {
            e.stopPropagation();
            var subcatId = $(this).data('id');
            var catId = $(this).closest('.cat-dropdown').find('.main-cat').data('category-id');
            loadClients({
                category_id: catId,
                subcategory_id: subcatId
            });
            $('.subcat-item').removeClass('active');
            $(this).addClass('active');
            $('.cat-btn').removeClass('active');
            $(this).closest('.cat-dropdown').find('.main-cat').addClass('active');
            $('.cat-dropdown').removeClass('open');
        });

        // "All" button click
        $('.cat-btn[data-id=""]').on('click', function () {
            loadClients({});
            $('.cat-btn').removeClass('active');
            $(this).addClass('active');
            $('.subcat-item').removeClass('active');
            $('.cat-dropdown').removeClass('open');
        });

        // Click outside closes dropdowns
        $(document).on('click', function () {
            $('.cat-dropdown').removeClass('open');
        });

        // Load clients function
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
                                        <img src="${site_url + 'uploads/images/' + e.image}" alt="${e.alt_text || e.image.split('.')[0]}">
                                    </a>
                                </div>
                            </div>`;
                        });
                    } else {
                        temp = '<div class="col-12 text-center">No clients found</div>';
                    }
                    $("#clientGrid").html(temp).fadeIn(200);
                    if (typeof AOS !== 'undefined') {
                        AOS.refresh();
                    }
                },
                error: function (xhr, status, error) {
                    $("#clientGrid").html('<div class="col-12 text-center">Error loading clients</div>').fadeIn(200);
                }
            });
        }

        // Initial load
        $('.cat-btn[data-id=""]').trigger('click');
    });
</script>