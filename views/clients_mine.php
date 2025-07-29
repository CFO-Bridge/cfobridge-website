<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

?>


<style>
    .tag-wrapper {
        display: flex;
        flex-wrap: wrap;
        gap: 10px;
        margin-bottom: 20px;
    }

    .tag-group {
        position: relative;
    }

    .tag {
        background-color: #f1f1f1;
        color: #333;
        padding: 6px 12px;
        border-radius: 4px;
        display: inline-block;
        cursor: pointer;
        font-size: 14px;
        transition: background 0.3s, color 0.3s;
    }

    .tag:hover {
        background-color: #e0e0e0;
    }

    .tag.active {
        background-color: #007bff;
        color: #fff;
    }

    .tag .arrow {
        font-size: 12px;
        margin-left: 5px;
    }

    .tag-wrapper span.active .arrow {
        color: #000;
    }

    .subcat-list {
        display: none;
        position: absolute;
        top: 110%;
        left: 0;
        background-color: #ffffff;
        border: 1px solid #ccc;
        border-radius: 4px;
        padding: 6px 10px;
        min-width: 150px;
        z-index: 9999;
        box-shadow: 0 2px 6px rgba(0, 0, 0, 0.15);
    }

    .subcat-list .tag {
        display: block;
        width: 100%;
        margin: 5px 0;
        padding: 6px 10px;
        font-size: 13px;
        border-radius: 4px;
        background-color: #f9f9f9;
        text-align: left;
    }

    .subcat-list .tag:hover {
        background-color: #f1f1f1;
    }

    .filter-bar {
        display: none;
        /* Hidden initially */
        margin-bottom: 20px;
        padding: 10px;
        background: #fff;
        border: 1px solid #ddd;
        border-radius: 8px;
    }

    .filter-bar,
    .tag-wrapper {
        position: relative;
        overflow: visible;
        z-index: 1;
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
    </div>
</header>

<section class="sec clients-sec">
    <div class="container">
        <div class="row">
            <div class="col-12">

                <button class="filter-toggle-btn main-btn with-icon justify-content-center" type="submit">
                    <span>Filter by Industry</span>
                    <img src="<?= base_url() ?>assets/images/blue-arrow.svg" alt="Blue Arrow Icon">
                </button>

                <div class="filter-bar">
                    <div class="tag-wrapper">
                        <span class='tag client-cat' data-id=''>All</span>

                        <?php
                        usort($category, fn($a, $b) => strcmp($a['name'], $b['name']));
                        foreach ($category as $cat) {
                            echo "<div class='tag-group'>";
                            echo "<span class='tag client-cat main-cat' data-category-id='" . $cat['id'] . "'>" . $cat['name'] . " <span class='arrow'>&#9662;</span></span>";

                            echo "<div class='subcat-list'>";
                            foreach ($subcategories as $sub) {
                                if ($sub['category_id'] == $cat['id']) {
                                    echo "<span class='tag client-subcat' data-id='" . $sub['id'] . "'>" . $sub['name'] . "</span>";
                                }
                            }
                            echo "</div>";
                            echo "</div>"; // close tag-group
                        }
                        ?>
                    </div>
                </div>


                <div class="clients-grid"></div>
            </div>
        </div>
    </div>
</section>

<script>

    $(document).ready(function () {
        console.log("✅ Document Ready - Script Loaded");

        // Toggle subcategory dropdown
        $(".tag-group .main-cat").on("click", function (e) {
            e.stopPropagation();

            const catId = $(this).data("category-id");
            console.log("📦 Main Category Clicked:", catId);

            $(".subcat-list").not($(this).next()).slideUp(); // close others
            $(this).next(".subcat-list").slideToggle();

            loadClients({ category_id: catId });

            $(".client-cat, .client-subcat").removeClass('active');
            $(this).addClass('active');
        });

        // Subcategory click
        $(document).on("click", ".client-subcat", function () {
            const subcatId = $(this).data("id");
            const catId = $(this).closest(".tag-group").find(".main-cat").data("category-id");

            console.log("📂 Subcategory Clicked - Subcat ID:", subcatId, "Category ID:", catId);

            loadClients({
                category_id: catId,
                subcategory_id: subcatId
            });

            $(".client-cat, .client-subcat").removeClass('active');
            $(this).addClass('active');
        });

        // "All" button click
        $(document).on("click", ".client-cat[data-id='']", function () {
            console.log("🌐 'All' Category Clicked");

            loadClients({});
            $(".client-cat, .client-subcat").removeClass('active');
            $(this).addClass('active');
        });

        // Toggle Filter Bar
        $(".filter-toggle-btn").on("click", function () {
            $(".filter-bar").slideToggle(200);
        });

        // Load clients function
        function loadClients(postData = {}) {
            console.log("📨 AJAX Call Initiated - Data Sent:", postData);
            $(".clients-grid").fadeOut();

            $.ajax({
                type: "POST",
                url: site_url + "home/getclientslogos",
                data: postData,
                dataType: "json",
                success: function (res) {
                    console.log("✅ AJAX Success - Response Received:", res);
                    let temp = "";

                    if (res.length) {
                        res.forEach(e => {
                            temp += `<a href="${e.link}" target="_blank" class="clt">
                                <img src="${site_url + 'uploads/images/' + e.image}" alt="${e.alt_text || e.image.split('.').slice(0, -1).join('.')}">
                            </a>`;
                        });
                    } else {
                        temp = 'Not Found';
                    }

                    $(".clients-grid").fadeIn().html(temp);
                },
                error: function (xhr, status, error) {
                    console.error("❌ AJAX Error:", status, error);
                }
            });
        }

        // Click outside closes all dropdowns
        $(document).on("click", function () {
            $(".subcat-list").slideUp();
        });

        // Load all clients initially
        $(".client-cat[data-id='']").trigger("click");
    });
</script>
