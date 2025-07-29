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
        scroll-behavior: smooth;
        margin-left: 120px;
    }

    .filter-scroll::-webkit-scrollbar {
        display: none;
    }

    .category-filter-wrapper {
        position: relative;
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
        flex-shrink: 0;
    }

    .cat-btn.active,
    .cat-btn:hover {
        background-color: #014293;
        color: #fff;
    }

    #clientGrid {
        padding: 50px 0;
        position: relative;
    }

    .client-logo {
        padding: 20px;
        border: 1px solid var(--blue);
        background-color: #fff;
        height: 100%;
        display: flex;
        align-items: center;
        justify-content: center;
        border-radius: 10px;
        transition: transform 0.3s ease;
    }

    .client-logo:hover {
        box-shadow: 4px 4px 0 var(--blue);
        border-radius: 0;
    }

    .client-logo img {
        max-width: 75%;
        height: auto;
        display: block;
        margin: 0 auto;
    }

    .all-clients-view {
        display: none;
    }

    .all-clients-view.active {
        display: block;
    }

    .category-view {
        display: none;
    }

    .category-view.active {
        display: block;
    }

    .subcategory-section {
        margin-bottom: 30px;
        padding: 20px;
        border-radius: 8px;
    }

    .subcategory-section:nth-child(even) {
        background-color: rgba(1, 66, 147, 0.03);
    }

    .subcategory-header {
        margin-bottom: 20px;
        padding-bottom: 10px;
        border-bottom: 1px solid rgba(1, 66, 147, 0.1);
        display: flex;
        justify-content: space-between;
        align-items: center;
    }

    .subcategory-title {
        font-size: 18px;
        color: #014293;
        font-weight: 600;
        margin: 0;
    }

    .header-buttons {
        display: flex;
        gap: 10px;
    }

    .view-all-btn {
        background-color: transparent;
        color: var(--blue);
        border: none;
        padding: 6px 12px;
        border-radius: 4px;
        cursor: pointer;
        font-size: 13px;
        font-weight: 600;
        transition: background-color 0.2s;
        white-space: nowrap;
    }

    .view-all-btn:hover {
        background-color: transparent;
    }

    .close-view-all {
        background-color: transparent;
        display: none;
    }

    .close-view-all:hover {
        background-color: transparent;
    }

    .subcategory-full-view {
        display: none;
        margin-top: 20px;
    }

    .subcategory-full-view.active {
        display: block;
    }

    .subcategory-slider-view {
        display: block;
    }

    .subcategory-slider-view.hidden {
        display: none;
    }

    #scrollToTopButton {
        display: inline-block;
        background-color: #014293;
        width: 50px;
        height: 50px;
        text-align: center;
        border-radius: 4px;
        position: fixed;
        bottom: 30px;
        right: 30px;
        transition: background-color .3s, opacity .5s, visibility .5s;
        opacity: 0;
        visibility: hidden;
        z-index: 1000;
        border: none;
        cursor: pointer;
    }

    #scrollToTopButton::after {
        content: "\f077";
        font-family: FontAwesome;
        font-weight: normal;
        font-style: normal;
        font-size: 1.5em;
        line-height: 50px;
        color: #fff;
    }

    #scrollToTopButton:hover {
        background-color: #012f6b;
        cursor: pointer;
    }

    #scrollToTopButton.show {
        opacity: 1;
        visibility: visible;
    }

    .show-all-btn {
        position: absolute;
        left: 40px;
        top: 0;
        z-index: 3;
        background: #014293;
        color: #fff;
        border: 1px solid #014293;
        border-radius: 4px;
        padding: 10px 24px;
        font-size: 15px;
        font-weight: 600;
        white-space: nowrap;
        cursor: pointer;
        transition: all 0.2s ease;
    }

    .show-all-btn:hover {
        background: #012f6b;
        border-color: #012f6b;
    }

    .client-swiper {
        padding: 20px 0;
        position: relative;
        overflow: hidden;
    }

    .client-swiper .swiper-slide {
        height: auto;
        display: flex;
    }

    .client-swiper .client-logo {
        width: 100%;
    }

    .clients-sec {
        padding-top: 0;
    }

    @media only screen and (max-width: 1200px) {
        .filter-container {
            padding: 0 !important;
        }
    }

    /* Responsive slider adjustments */
    @media (max-width: 575.98px) {
        .client-swiper .swiper-slide {
            width: 50% !important;
        }
    }

    @media (min-width: 576px) and (max-width: 767.98px) {
        .client-swiper .swiper-slide {
            width: 33.33% !important;
        }
    }

    @media (min-width: 768px) and (max-width: 991.98px) {
        .client-swiper .swiper-slide {
            width: 25% !important;
        }
    }

    @media (min-width: 992px) {
        .client-swiper .swiper-slide {
            width: 16.66% !important;
        }
    }
</style>

<header class="inner-header team-banner sec">
    <img src="assets/images/team-bg.jpg" alt="">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-6 col-12">
                <div class="sec-head center">
                    <h1>Our Clients</h1>
                </div>
            </div>
        </div>
    </div>
</header>

<div class="container">
    <div class="row justify-content-center">
        <div class="filter-container mt-5 position-relative">
            <div class="category-filter-wrapper">
                <button class="show-all-btn active">All</button>
                <div class="filter-scroll">
                    <div class="category-filter d-flex align-items-center">
                        <!-- Category buttons will be inserted here by JavaScript -->
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<section class="sec clients-sec pb-5">
    <div class="container section-container">
        <div id="data-container">
            <div id="clientGrid"></div>
        </div>
    </div>
</section>

<button id="scrollToTopButton" title="Go to top"></button>
<link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />
<script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
<script>
    $(document).ready(function () {
        let swiperInstances = [];
        let autoScrollInterval;
        const scrollSpeed = 1;
        const scrollInterval = 30;

        function startAutoScroll() {
            const container = $('.filter-scroll')[0];
            if (!container) return;

            if (autoScrollInterval) {
                clearInterval(autoScrollInterval);
            }

            autoScrollInterval = setInterval(() => {
                if ($('.filter-scroll:hover').length > 0) return;

                if (container.scrollLeft + container.clientWidth >= container.scrollWidth - 1) {
                    container.scrollTo({
                        left: 0,
                        behavior: 'smooth'
                    });
                } else {
                    container.scrollLeft += scrollSpeed;
                }
            }, scrollInterval);
        }

        function stopAutoScroll() {
            if (autoScrollInterval) {
                clearInterval(autoScrollInterval);
            }
        }

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

            let targetScroll;
            if (direction === 'left') {
                targetScroll = Math.max(container.scrollLeft - scrollAmount, 0);
            } else {
                targetScroll = container.scrollLeft + scrollAmount;
            }

            container.scrollTo({
                left: targetScroll,
                behavior: 'smooth'
            });

            setTimeout(() => {
                updateScrollButtons(wrapperSelector, leftBtn, rightBtn);
            }, 300);
        }

        $('.cat-left').on('click', () => scrollFilter('.filter-scroll', 'left', '.cat-left', '.cat-right'));
        $('.cat-right').on('click', () => scrollFilter('.filter-scroll', 'right', '.cat-left', '.cat-right'));

        let allClients = [];
        let categories = <?= json_encode($category) ?>;
        let subcategories = <?= json_encode($subcategories) ?>;
        let organizedData = {};
        let categoriesWithClients = [];

        const subcategoryMap = {};
        subcategories.forEach(sub => {
            subcategoryMap[sub.id] = sub;
        });

        function loadAllClients() {
            $.ajax({
                type: "POST",
                url: site_url + "home/getclientslogos",
                data: { all: true, no_pagination: true },
                dataType: "json",
                success: function (res) {
                    if (res.clients && res.clients.length > 0) {
                        allClients = res.clients;
                        allClients.forEach(client => {
                            client.categoryid = client.categoryid || client.category_id || 0;
                            client.subcategoryid = client.subcategoryid || client.subcategory_id || 0;
                        });
                        organizeClientsByCategory();
                    } else {
                        $("#clientGrid").html('<div class="col-12 text-center">No clients found</div>');
                    }
                },
                error: function (xhr, status, error) {
                    $("#clientGrid").html('<div class="col-12 text-center">Error loading clients</div>');
                }
            });
        }

        function organizeClientsByCategory() {
            organizedData = {};
            categoriesWithClients = [];

            categories.forEach(cat => {
                organizedData[cat.id] = {
                    name: cat.name,
                    subcategories: {}
                };
            });

            subcategories.forEach(sub => {
                if (organizedData[sub.category_id]) {
                    organizedData[sub.category_id].subcategories[sub.id] = {
                        name: sub.name,
                        clients: []
                    };
                }
            });

            allClients.forEach(client => {
                const catId = client.categoryid;
                const subcatId = client.subcategoryid;

                if (organizedData[catId] && organizedData[catId].subcategories[subcatId]) {
                    organizedData[catId].subcategories[subcatId].clients.push(client);
                }
            });

            Object.keys(organizedData).forEach(catId => {
                const category = organizedData[catId];
                Object.keys(category.subcategories).forEach(subcatId => {
                    if (category.subcategories[subcatId].clients.length === 0) {
                        delete category.subcategories[subcatId];
                    }
                });

                if (Object.keys(category.subcategories).length === 0) {
                    delete organizedData[catId];
                } else {
                    const matchingCategory = categories.find(cat => cat.id == catId);
                    if (matchingCategory) {
                        categoriesWithClients.push(matchingCategory);
                    }
                }
            });

            renderCategoryButtons();
            renderClientViews();
        }

        function renderCategoryButtons() {
            const $categoryFilter = $('.category-filter');
            $categoryFilter.find('.cat-btn').remove();

            categoriesWithClients.forEach(cat => {
                $categoryFilter.append(`
                    <button class="cat-btn" data-id="${cat.id}">
                        ${htmlEscape(cat.name)}
                    </button>
                `);
            });

            setTimeout(() => {
                updateScrollButtons('.filter-scroll', '.cat-left', '.cat-right');
                startAutoScroll();
            }, 100);

            $('.filter-scroll')
                .on('mouseenter', stopAutoScroll)
                .on('mouseleave', startAutoScroll);
        }

        function htmlEscape(str) {
            return str.replace(/&/g, '&amp;')
                .replace(/</g, '&lt;')
                .replace(/>/g, '&gt;')
                .replace(/"/g, '&quot;')
                .replace(/'/g, '&#39;');
        }

        function initializeSwipers() {
            swiperInstances.forEach(swiper => {
                if (swiper && swiper.destroy) {
                    swiper.destroy(true, true);
                }
            });
            swiperInstances = [];

            $('.client-swiper').each(function() {
                try {
                    const swiperInstance = new Swiper(this, {
                        slidesPerView: 'auto',
                        spaceBetween: 15,
                        loop: true,
                        autoplay: {
                            delay: 1000,
                            pauseOnMouseEnter: true,
                            disableOnInteraction: false,
                        },
                        breakpoints: {
                            320: {
                                slidesPerView: 2,
                                spaceBetween: 10
                            },
                            576: {
                                slidesPerView: 3,
                                spaceBetween: 15
                            },
                            768: {
                                slidesPerView: 4,
                                spaceBetween: 20
                            },
                            992: {
                                slidesPerView: 6,
                                spaceBetween: 20
                            }
                        }
                    });
                    swiperInstances.push(swiperInstance);
                } catch (e) {
                    console.error('Swiper initialization error:', e);
                }
            });
        }

        function renderClientViews() {
            let html = `
                <div class="all-clients-view active">
                    <div class="row g-3">`;

            allClients.forEach((client, index) => {
                let imagePath = client.image;
                if (!imagePath.startsWith('http') && !imagePath.startsWith('/')) {
                    imagePath = site_url + 'uploads/images/' + imagePath;
                }

                html += `
                    <div class="col-6 col-sm-4 col-md-2" data-aos="zoom-in" data-aos-delay="${index * 50}">
                        <div class="client-logo">
                            <a href="${client.link || '#'}" target="_blank" rel="noopener">
                                <img src="${imagePath}" alt="${client.title || client.alt_text || 'Client logo'}">
                            </a>
                        </div>
                    </div>`;
            });

            html += `</div></div>`;

            categoriesWithClients.forEach(cat => {
                const catId = cat.id;
                const category = organizedData[catId];
                const subcatKeys = Object.keys(category.subcategories);

                html += `<div class="category-view" id="category-${catId}" data-category="${catId}">`;

                subcatKeys.forEach(subcatId => {
                    const subcategory = category.subcategories[subcatId];
                    const clientCount = subcategory.clients.length;

                    html += `
                        <div class="subcategory-section" data-aos="fade-up">
                            <div class="subcategory-header">
                                <h3 class="subcategory-title">${subcategory.name}</h3>
                                <div class="header-buttons">`;

                    if (clientCount > 6) {
                        html += `
                                    <button class="view-all-btn" data-subcategory="${subcatId}">View All</button>
                                    <button class="view-all-btn close-view-all" data-subcategory="${subcatId}">View Less</button>
                                </div>
                            </div>
                            <div class="subcategory-slider-view">
                                <div class="swiper-container client-swiper">
                                    <div class="swiper-wrapper">`;

                        subcategory.clients.forEach(client => {
                            let imagePath = client.image;
                            if (!imagePath.startsWith('http') && !imagePath.startsWith('/')) {
                                imagePath = site_url + 'uploads/images/' + imagePath;
                            }

                            html += `
                                        <div class="swiper-slide">
                                            <div class="client-logo">
                                                <a href="${client.link || '#'}" target="_blank" rel="noopener">
                                                    <img src="${imagePath}" alt="${client.title || client.alt_text || 'Client logo'}">
                                                </a>
                                            </div>
                                        </div>`;
                        });

                        html += `</div></div>
                            </div>
                            <div class="subcategory-full-view" id="full-view-${subcatId}">
                                <div class="row g-3">`;

                        subcategory.clients.forEach((client, clientIndex) => {
                            let imagePath = client.image;
                            if (!imagePath.startsWith('http') && !imagePath.startsWith('/')) {
                                imagePath = site_url + 'uploads/images/' + imagePath;
                            }

                            html += `
                                    <div class="col-6 col-sm-4 col-md-2" data-aos="zoom-in" data-aos-delay="${clientIndex * 50}">
                                        <div class="client-logo">
                                            <a href="${client.link || '#'}" target="_blank" rel="noopener">
                                                <img src="${imagePath}" alt="${client.title || client.alt_text || 'Client logo'}">
                                            </a>
                                        </div>
                                    </div>`;
                        });

                        html += `</div></div>`;
                    } else {
                        html += `
                                </div>
                            </div>
                            <div class="row g-3">`;

                        subcategory.clients.forEach((client, clientIndex) => {
                            let imagePath = client.image;
                            if (!imagePath.startsWith('http') && !imagePath.startsWith('/')) {
                                imagePath = site_url + 'uploads/images/' + imagePath;
                            }

                            html += `
                                    <div class="col-6 col-sm-4 col-md-2" data-aos="zoom-in" data-aos-delay="${clientIndex * 50}">
                                        <div class="client-logo">
                                            <a href="${client.link || '#'}" target="_blank" rel="noopener">
                                                <img src="${imagePath}" alt="${client.title || client.alt_text || 'Client logo'}">
                                            </a>
                                        </div>
                                    </div>`;
                        });
                        html += `</div>`;
                    }

                    html += `</div>`;
                });

                html += `</div>`;
            });

            $("#clientGrid").html(html);
            initializeSwipers();
            $('.close-view-all').hide();

            if (typeof AOS !== 'undefined') {
                AOS.init({
                    duration: 600,
                    once: true
                });
                AOS.refresh();
            }
        }

        $(document).on('click', '.view-all-btn', function() {
            const subcatId = $(this).data('subcategory');
            const $subcategorySection = $(this).closest('.subcategory-section');
            const $swiperContainer = $subcategorySection.find('.client-swiper');
            
            if ($(this).hasClass('close-view-all')) {
                $subcategorySection.find('.subcategory-full-view').removeClass('active');
                $subcategorySection.find('.subcategory-slider-view').removeClass('hidden');
                $subcategorySection.find('.view-all-btn:not(.close-view-all)').show();
                $subcategorySection.find('.close-view-all').hide();
                
                setTimeout(() => {
                    const swiperInstance = $swiperContainer[0].swiper;
                    if (swiperInstance) {
                        swiperInstance.destroy(true, true);
                        
                        new Swiper($swiperContainer[0], {
                            slidesPerView: 'auto',
                            spaceBetween: 15,
                            loop: true,
                            autoplay: {
                                delay: 1000,
                                pauseOnMouseEnter: true,
                                disableOnInteraction: false,
                            },
                            breakpoints: {
                                320: {
                                    slidesPerView: 2,
                                    spaceBetween: 10
                                },
                                576: {
                                    slidesPerView: 3,
                                    spaceBetween: 15
                                },
                                768: {
                                    slidesPerView: 4,
                                    spaceBetween: 20
                                },
                                992: {
                                    slidesPerView: 6,
                                    spaceBetween: 20
                                }
                            }
                        });
                    }
                }, 50);
            } else {
                $subcategorySection.find('.subcategory-slider-view').addClass('hidden');
                $subcategorySection.find('.subcategory-full-view').addClass('active');
                $subcategorySection.find('.view-all-btn:not(.close-view-all)').hide();
                $subcategorySection.find('.close-view-all').show();
                
                $('html, body').animate({
                    scrollTop: $subcategorySection.offset().top - 100
                }, 300);
            }
        });

        function filterSectionsByCategory(catId) {
            if (catId === 'all') {
                $('.all-clients-view').addClass('active');
                $('.category-view').removeClass('active');
                $('.show-all-btn').addClass('active');
                $('.cat-btn').removeClass('active');
            } else {
                $('.all-clients-view').removeClass('active');
                $('.category-view').removeClass('active');
                $(`#category-${catId}`).addClass('active');
                $('.cat-btn').removeClass('active');
                $(`.cat-btn[data-id="${catId}"]`).addClass('active');
                $('.show-all-btn').removeClass('active');
            }
            
            setTimeout(initializeSwipers, 50);
        }

        $(document).on('click', '.cat-btn', function() {
            const catId = $(this).data('id');
            filterSectionsByCategory(catId);
        });

        $(document).on('click', '.show-all-btn', function() {
            filterSectionsByCategory('all');
        });

        const scrollToTopBtn = $('#scrollToTopButton');
        $(window).scroll(function() {
            if ($(this).scrollTop() > 300) {
                scrollToTopBtn.addClass('show');
            } else {
                scrollToTopBtn.removeClass('show');
            }
        });

        scrollToTopBtn.click(function() {
            $('html, body').animate({
                scrollTop: $('.container').offset().top - 100
            }, 300);
            return false;
        });

        loadAllClients();

        $(window).on('resize', () => {
            updateScrollButtons('.filter-scroll', '.cat-left', '.cat-right');
        });
    });
</script>