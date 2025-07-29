<?php
// Enable error reporting
error_reporting(E_ALL);
ini_set('display_errors', 1);
?>

<style>
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
        background-color: #014293;
        color: #fff;
    }

    .dropdown-arrow {
        margin-left: 6px;
        font-size: 12px;
    }

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

    .inner-header {
        padding-bottom: 0px;
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
        <div class="filter-container mb-3 position-relative" style="margin-top: 5.5rem;">
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
        <div id="data-container">
            <div class="row g-3" id="clientGrid"></div>
        </div>

        <div class="text-center mt-4">
            <div id="pagination-container"></div>
        </div>

    </div>
</section>
<script>
    $(document).ready(function () {
        function updateScrollButtons(wrapperSelector, leftBtnSelector, rightBtnSelector) {
            const container = $(wrapperSelector)[0];
            const $leftBtn = $(leftBtnSelector);
            const $rightBtn = $(rightBtnSelector);

            if (!container) return;

            const scrollLeft = container.scrollLeft;
            const scrollWidth = container.scrollWidth;
            const clientWidth = container.clientWidth;

            if (scrollWidth > clientWidth) {
                $leftBtn.toggle(scrollLeft > 0);
                $rightBtn.toggle(scrollLeft + clientWidth < scrollWidth - 1);
            } else {
                $leftBtn.hide();
                $rightBtn.hide();
            }
        }

        function scrollFilter(wrapperSelector, direction, leftBtn, rightBtn) {
            const container = $(wrapperSelector)[0];
            const scrollAmount = 200;
            container.scrollBy({
                left: direction === 'left' ? -scrollAmount : scrollAmount,
                behavior: 'smooth'
            });

            setTimeout(() => {
                updateScrollButtons(wrapperSelector, leftBtn, rightBtn);
            }, 300);
        }

        $('.cat-left').on('click', () => scrollFilter('.category-filter-wrapper', 'left', '.cat-left', '.cat-right'));
        $('.cat-right').on('click', () => scrollFilter('.category-filter-wrapper', 'right', '.cat-left', '.cat-right'));
        $('.subcat-left').on('click', () => scrollFilter('.subcategory-filter-wrapper', 'left', '.subcat-left', '.subcat-right'));
        $('.subcat-right').on('click', () => scrollFilter('.subcategory-filter-wrapper', 'right', '.subcat-left', '.subcat-right'));

        let currentPage = 1;
        const limit = 18;

        function loadClients(postData = {}, isPagination = false) {
            postData.page = currentPage;
            postData.limit = limit;

            $("#clientGrid").fadeOut(200);
            $.ajax({
                type: "POST",
                url: site_url + "home/getclientslogos",
                data: postData,
                dataType: "json",
                success: function (res) {
                    let temp = "";
                    const clients = res.clients || [];
                    const totalClients = res.total || 0;

                    if (clients.length) {
                        clients.forEach((e, index) => {
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

                    const totalPages = Math.ceil(totalClients / limit);
                    if (totalPages > 1) {
                        $("#pagination-container").show();
                        if (!isPagination) {
                            $("#pagination-container").pagination('destroy').pagination({
                                items: totalClients,
                                itemsOnPage: limit,
                                currentPage: currentPage,
                                prevText: '&#10094;',  // ‹
                                nextText: '&#10095;',  // ›
                                displayedPages: 0,     // hide all numbered pages
                                edges: 0,
                                onPageClick: function (pageNumber, event) {
                                    currentPage = pageNumber;
                                    loadClients(getCurrentFilters(), true);
                                }
                            });

                            // Hide all numeric page buttons (including current)
                            $('.pagination li').each(function () {
                                if (!$(this).hasClass('prev') && !$(this).hasClass('next')) {
                                    $(this).hide();
                                }
                            });
                        }
                    } else {
                        $("#pagination-container").hide();
                    }


                },
                error: function () {
                    $("#clientGrid").html('<div class="col-12 text-center">Error loading clients</div>').fadeIn(200);
                }
            });
        }


        // Helper to get current filters
        function getCurrentFilters() {
            const catId = $('.cat-btn.active').data('id');
            const subcatId = $('.subcat-btn.active').data('id');
            let filters = {};
            if (catId) filters.category_id = catId;
            if (subcatId) filters.subcategory_id = subcatId;
            return filters;
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
                $('.subcategory-wrapper').slideDown(200, () => {
                    updateScrollButtons('.subcategory-filter-wrapper', '.subcat-left', '.subcat-right');
                });
            } else {
                $('.subcategory-filter').html('');
                $('.subcategory-wrapper').slideUp(200);
            }
        }

        $(document).on('click', '.cat-btn', function () {
            currentPage = 1;
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
            currentPage = 1;
            const subcatId = $(this).data('id');
            $('.subcat-btn').removeClass('active');
            $(this).addClass('active');

            const catId = $('.cat-btn.active').data('id');
            loadClients({
                category_id: catId,
                subcategory_id: subcatId
            });
        });

        // Initial load
        $('.cat-btn[data-id=""]').trigger('click');

        // Scroll checks on load and resize
        setTimeout(() => {
            updateScrollButtons('.category-filter-wrapper', '.cat-left', '.cat-right');
        }, 100);

        $(window).on('resize', () => {
            updateScrollButtons('.category-filter-wrapper', '.cat-left', '.cat-right');
            updateScrollButtons('.subcategory-filter-wrapper', '.subcat-left', '.subcat-right');
        });
    });
</script>

