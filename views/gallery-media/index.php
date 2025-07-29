<style>
    .video-card {
        width: auto;
        height: 240px;
        border-radius: 16px;
        overflow: hidden;
        position: relative;
        font-family: Arial, Helvetica, sans-serif;
        box-shadow: 0 1px 3px rgba(0, 0, 0, 0.12), 0 1px 2px rgba(0, 0, 0, 0.24);
        transition: all 300ms;
    }

    .video-card img {
        width: 100%;
        height: 100%;
        border-radius: 16px;
        object-fit: cover;
    }

    .video-card .content,
    .vcard-content {
        box-sizing: border-box;
        border-radius: 16px;
        width: 100%;
        position: absolute;
        padding: 60px 20px 20px 20px;
        height: auto;
        bottom: 0;
        background: linear-gradient(transparent, rgba(0, 0, 0, 0.9));
    }

    .video-card .date,
    .vcard-content .date,
    .video-card .title,
    .vcard-content .title {
        margin: 0;
    }

    .video-card .date,
    .vcard-content .date {
        font-size: 12px;
        color: rgba(255, 255, 255, 1);
        margin-bottom: 4px;
    }

    .video-card .title,
    .vcard-content .title {
        font-size: 17px;
        color: #fff;
    }

    .swiper-container {
        width: 100%;
    }

    .swiper-slide {
        display: flex;
        justify-content: center;
    }

    .gallery-card {
        width: auto;
        height: 240px;
        border-radius: 16px;
        overflow: hidden;
        position: relative;
        font-family: Arial, Helvetica, sans-serif;
        box-shadow: 0 1px 3px rgba(0, 0, 0, 0.12), 0 1px 2px rgba(0, 0, 0, 0.24);
        transition: all 300ms;
    }


    .gallery-card .content {
        box-sizing: border-box;
        border-radius: 16px;
        width: 100%;
        position: absolute;
        padding: 60px 20px 20px 20px;
        height: auto;
        bottom: 0;
        background: linear-gradient(transparent, rgba(0, 0, 0, 0.9));
    }

    .gallery-card .date,
    .gallery-card .title {
        margin: 0;
    }

    .gallery-card .date {
        font-size: 12px;
        color: rgba(255, 255, 255, 1);
        margin-bottom: 4px;
    }

    .gallery-card .title {
        font-size: 17px;
        color: #fff;
    }


    .gallery-card:hover {
        transform: translateY(-5px) scale(1.02);
        box-shadow: 0 10px 20px rgba(0, 0, 0, 0.2);
    }

    .galleryfullimg {
        width: 100%;
        height: 100%;
        object-fit: cover;
        transition: transform 0.5s cubic-bezier(0.4, 0, 0.2, 1);
    }

    .gallery-card:hover .galleryfullimg {
        transform: scale(1.1);
    }

    .full-img {
        position: fixed;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background: rgba(0, 0, 0, 0.8);
        display: none;
        justify-content: center;
        align-items: center;
        z-index: 999999;
    }

    .full-img img {
        width: 90%;
        max-width: 500px;
    }

    .full-img span {
        position: absolute;
        top: 5%;
        right: 5%;
        font-size: 30px;
        color: #fff;
        cursor: pointer;
    }

    .img-gallery {
        width: 100%;
        margin: 50px auto 50px;
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
        gap: 30px;
    }

    .imgtag {
        width: 100%;
        cursor: pointer;
        transition: transform 0.3s ease, box-shadow 0.3s ease;
    }


    @media (max-width: 768px) {
        .img-gallery {
            width: 90%;
            margin: 50px auto;
            gap: 20px;
        }
    }
</style>


<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);


$folderName1 = "uploads/bangalore-photoshoot";
$folderPath1 = FCPATH . $folderName1;
$imageURL1 = base_url() . $folderName1;

$imageFiles1 = is_dir($folderPath1) ? array_diff(scandir($folderPath1), ['.', '..']) : [];


?>


<div class="full-img" id="fullImgBox">
    <img src="" id="fullImg" alt="">
    <span onclick="closeFullImg()">&times;</span>
</div>


<header class="inner-banner sec"
    style="height:100px;background:url('https://t3.ftcdn.net/jpg/04/42/44/98/360_F_442449827_ispo2oI83ffX0TSax4Pgdd7xkqCA5ThA.jpg') center/cover no-repeat;">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-8 col-12">
                <div class="sec-head center white">
                    <h1>Videos & Gallery</h1>
                </div>
            </div>
        </div>
    </div>
</header>

<div class="team-sec sec blue-gr">
    <div class="container">
        <div class="row justify-content-center" style="margin-top:70px;">
            <div class="col-lg-8 col-12">
                <div class="sec-head center white">
                    <h2>Latest Videos</h2>
                    <p>CFOBridge Latest Videos.</p>
                </div>
            </div>
            <div class="col-12" style="margin-top:30px;">
                <div class="swiper-container" id="swiper-container">
                    <div class="swiper-wrapper">
                        <?php
                        $jsonData = '[
                        {
                        "date": "Jun 21, 2024",
                        "title": "Cliental Testimonial II CFO Bridge Maha kumbh 2024",
                        "vcode": "NJX0I3yR0dU"
                        },
                        {
                        "date": "Jun 21, 2024",
                        "title": "Fractional CXOs- An idea whose time has come II CFO Bridge Maha kumbh 2024",
                        "vcode": "I22MR7C-tOM"
                        },
                        {
                        "date": "Jun 5, 2024",
                        "title": "Tech for the CFO’s Office – Current State and Need II CFO Bridge Maha kumbh 2024",
                        "vcode": "LwP0-M-7sa0"
                        },
                        {
                        "date": "May 16, 2024",
                        "title": "CFO Bridge Mahakumbh 2024 II V Srinivasan- CEO & Founder",
                        "vcode": "PAcmZ9s1_lo"
                        },
                        {
                        "date": "Apr 26, 2024",
                        "title": "CFO Mahakumbh 2024",
                        "vcode": "gh4HIZaUx7Q"
                        },
                        {
                        "date": "Apr 2, 2024 ",
                        "title": "The Art of Handling Dislike & Disagreement for Professionals and CFOs- A Guide",
                        "vcode": "4gWCkeJ4FWA"
                        },
                        {
                        "date": "Apr 2, 2024 ",
                        "title": "What drives your Decision-Emotions or Logic?",
                        "vcode": "LdWgw22yzoQ"
                        },
                        {
                        "date": "Mar 4, 2024",
                        "title": "What is Arbitrage ? Why do you need to know about it?",
                        "vcode": "KvM4aV3JZ6o"
                        },
                        {
                        "date": "Mar 4, 2024",
                        "title": "Why do CFOs need Leverage in Business?",
                        "vcode": "yjKZw9VDOys"
                        },
                        {
                        "date": "Feb 19, 2024",
                        "title": "CFO Bridge: Expert Financial Talent for SME Success",
                        "vcode": "ethrb2wZiNQ"
                        },
                        {
                        "date": "Feb 3, 2024",
                        "title": "CFO Partner -Prabhu R, Mangaluru Technovanza 3.0",
                        "vcode": "5XSVYB_eSwg"
                        },
                        {
                        "date": "Oct 27, 2023",
                        "title": "Unveiling the Our Newest Launch: CTO Bridge",
                        "vcode": "N4wExDzRO-o"
                        },
                        {
                        "date": "Aug 2, 2023",
                        "title": "Amit Rajpal, Founder and CEO ,Rioga Premium",
                        "vcode": "hNHPNMVLScw"
                        },
                        {
                        "date": "Aug 2, 2023",
                        "title": "Siddhi Milap Shah, Founder and Owner , PrintStop India pvt ltd",
                        "vcode": "YCwHcGIQRnU"
                        },
                        {
                        "date": "Aug 2, 2023",
                        "title": "Best investment in CFO Bridge. A testimonial by Vishal Gondal, CEO & Founder, GOQii",
                        "vcode": "IxJ2KXqpuZI"
                        },
                        {
                        "date": "Jul 27, 2023",
                        "title": "Why do you need a CFO ?",
                        "vcode": "KRpP3YqrUZU"
                        },
                        {
                        "date": "Jul 12, 2023",
                        "title": "Akhilesh Bhargava, MD, AVI Global Plast",
                        "vcode": "XdywA4yig3o"
                        },
                        {
                        "date": "Jul 12, 2023",
                        "title": "Gautam Rajani - CEO- TM Printers",
                        "vcode": "ibVJSXTpHS0"
                        },
                        {
                        "date": "Jul 12, 2023",
                        "title": "Janos Vaczi Group- CEO -EXTROVIS SWITZERLAND",
                        "vcode": "j7jQeLp0emY"
                        },
                        {
                        "date": "Jul 12, 2023",
                        "title": "Sanjay Ghoshal - Co Founder & Chief Customer Officer--WORXOGO SOLUTIONS",
                        "vcode": "O6ZIMCd3FIE"
                        },
                        {
                        "date": "Jul 5, 2023",
                        "title": "Networking for 21st Century by Srinivasan.V",
                        "vcode": "Mt38Upkxkwc"
                        },
                        {
                        "date": "Jul 4, 2023",
                        "title": "CFO Bridge: Unlocking Financial Excellence for Businesses",
                        "vcode": "t6gVl949muo"
                        },
                        {
                        "date": "Jul 3, 2023",
                        "title": "Budgeting Beyond Numbers: Decoding the Significance of Variance in Budget",
                        "vcode": "SYW90C0ACDg"
                        },
                        {
                        "date": "Jun 30, 2023",
                        "title": "Empowering Your Business\'s Future: Budget Planning and Business Planning strategies Unleashed",
                        "vcode": "YwdcVKDYpTo"
                        },
                        {
                        "date": "Jun 30, 2023",
                        "title": "From Vision to Reality: Unveiling the Secrets and Strategies for Effective Budgeting",
                        "vcode": "0WoJmc3aWOc"
                        },
                        {
                        "date": "Jun 26, 2023",
                        "title": "How to conquer Inflation? - Practical Tips for Business Planning and Growth by Srinivasan.V",
                        "vcode": "Kds-fweSFbA"
                        },
                        {
                        "date": "Mar 1, 2023",
                        "title": "Business planning for SMEs - Inflation (Part 2) | CFO Bridge Podcast by Srinivasan V Swamy",
                        "vcode": "uq4921M1xQo"
                        },
                        {
                        "date": "Feb 21, 2023",
                        "title": "Business planning for SMEs (Part 1) | CFO Bridge Podcast by Srinivasan V Swamy",
                        "vcode": "2U0dU1M08H8"
                        },
                        {
                        "date": "Aug 16, 2022",
                        "title": "Anil Lamba (Director - Lamcon & Best Selling Author) on \'How Much Profit Is Enough?\'",
                        "vcode": "wyNJTaKWEQ4"
                        },
                        {
                        "date": "Aug 2, 2022",
                        "title": "V C Karthic (Founder - Buzzworks) Speaks About \'How To Build Scale\'",
                        "vcode": "M71QJRTKCyQ"
                        },
                        {
                        "date": "Jul 27, 2022",
                        "title": "C N Ram (MD & CEO - FYNDNA TechCorp) on \'Emerging Technologies for SMEs\'",
                        "vcode": "vgGlui9b97s"
                        },
                        {
                        "date": "Jul 27, 2022",
                        "title": "Akhilesh Bhargava (MD - AVI Global Plast) Speaks About His Failures And How He Endured Through Them",
                        "vcode": "e_lWNooFB_0"
                        },
                        {
                        "date": "Jul 27, 2022",
                        "title": "Mitesh Shah (Founder - IP Ventures) on \'Recent Developments for Start-ups & What Investors Look For\'",
                        "vcode": "hyRK-NiwArs"
                        },
                        {
                        "date": "Jul 27, 2022",
                        "title": "Srinivasan V. (Founder & CFO Partner - CFO Bridge) on CFO Bridge\'s 10 Year Journey",
                        "vcode": "6def-qTYkL4"
                        },
                        {
                        "date": "Jul 21, 2022",
                        "title": "CFO Bridge - 10 year Celebrations",
                        "vcode": "sgkBmr7zd1E"
                        },
                        {
                        "date": "Jul 18, 2022",
                        "title": "Core Inflation vs Headline Inflation | CPI vs Wholesale Inflation | Go Beyond The Jargons",
                        "vcode": "AZr64yt_3Gk"
                        },
                        {
                        "date": "Jul 6, 2022",
                        "title": "Types of Inflation | Cyclical & Contractual Inflation | What is Happening In Zimbabwe & Sri Lanka?",
                        "vcode": "Pq6H4sLDe2Q"
                        },
                        {
                        "date": "Jun 24, 2022",
                        "title": "Inflation Explained | Causes, Mechanism & Ways To Manage It! | CFO Bridge Podcast - Part #1",
                        "vcode": "PuN4AMkZB3Q"
                        },
                        {
                        "date": "Jun 22, 2022",
                        "title": "How Does Our Outsourced CFO Solution Work? | Virtual CFO Services by CFO Bridge",
                        "vcode": "xO2StpCJCCI"
                        },
                        {
                        "date": "Oct 25, 2021",
                        "title": "Empowering Businesses for 10 Years",
                        "vcode": "aBIN6fOXHiY"
                        },
                        {
                        "date": "Oct 11, 2021",
                        "title": "Celebrating 10 years of being growth partners",
                        "vcode": "FOzuZucrBTQ"
                        },
                        {
                        "date": "Sep 2, 2021",
                        "title": "Celebrating 10 years of being growth partners",
                        "vcode": "JgZQkcUdL5w"
                        },
                        {
                        "date": "Aug 24, 2021",
                        "title": "Welcome to CFO Bridge – India’s largest CFO Partner Institution",
                        "vcode": "B1TXaycF5nQ"
                        },
                        {
                        "date": "Aug 5, 2021",
                        "title": "Celebrating 10 years of being growth partners",
                        "vcode": "mRX_t-WKopo"
                        }
                        ]';
                        $slides = json_decode($jsonData, true);
                        foreach ($slides as $slide) {
                            echo '<div class="swiper-slide">';
                            echo '<a href="https://www.youtube.com/watch?v=' . $slide['vcode'] . '" target="_blank" class="team-card style-2" data-faitracker-click-bind="true">';
                            echo '<div class="video-slider">';
                            echo '<div class="video-card">';
                            echo '<div class="content">';
                            echo '<p class="date">' . $slide['date'] . '</p>';
                            echo '<p class="title">' . $slide['title'] . '</p>';
                            echo '</div>';
                            echo '<img src="https://img.youtube.com/vi/' . $slide['vcode'] . '/hqdefault.jpg" alt="video-cover" />';
                            echo '</div>';
                            echo '</div>';
                            echo '</a>';
                            echo '</div>';
                        }
                        ?>
                    </div>
                </div>
            </div>
            <a href="#" class="main-btn with-icon center mt-4" id="loadMoreVideo" data-faitracker-click-bind="true">
                <span>View All</span>
                <img src="http://localhost/application/assets/images/blue-arrow.svg" alt="blue arrow">
            </a>

            <div id="videoFull" class="img-gallery" style="display: none;">
                <div class="row">
                    <?php
                    foreach ($slides as $slide) {
                        echo '<div class="col-lg-4 col-md-6 col-12 mb-4">';
                        echo '<a href="https://www.youtube.com/watch?v=' . $slide['vcode'] . '" target="_blank" class="team-card style-2" data-faitracker-click-bind="true">';
                        echo '<div class="video-card" style="position:relative;">'; 
                        echo '<img src="https://img.youtube.com/vi/' . $slide['vcode'] . '/hqdefault.jpg" alt="video-cover" />';
                        echo '<div class="vcard-content">';
                        echo '<p class="date">' . $slide['date'] . '</p>';
                        echo '<p class="title">' . $slide['title'] . '</p>';
                        echo '</div>'; 
                        echo '</div>'; 
                        echo '</a>';
                        echo '</div>';
                    } ?>
                </div>

                <a href="#" class="main-btn with-icon center mt-4" id="viewLessVideo" data-faitracker-click-bind="true">
                    <span>View less</span>
                    <img src="http://localhost/application/assets/images/blue-arrow.svg" alt="blue arrow">
                </a>
            </div>

        </div>
        <div class="row justify-content-center" style="margin-top:70px;">
            <div class="col-lg-8 col-12">
                <div class="sec-head center white">
                    <h2>Captured Moments</h2>
                </div>
            </div>
            <div class="col-12" style="margin-top:30px;">
                <div class="swiper-container2" id="swiper-container2">
                    <div class="swiper-wrapper">
                        <?php foreach ($imageFiles1 as $file): ?>
                            <div class="swiper-slide">
                                <div class="video-slider">
                                    <div class="gallery-card">
                                        <img src="<?= $imageURL1 . '/' . htmlspecialchars($file) ?>" class="galleryfullimg"
                                            alt="Gallery Image" onclick="openFullImg(this.src)" />
                                    </div>
                                </div>
                            </div>
                        <?php endforeach; ?>
                    </div>
                </div>
                <a href="#" class="main-btn with-icon center mt-4" id="loadMoreGallery"
                    data-faitracker-click-bind="true">
                    <span>View All</span>
                    <img src="http://localhost/application/assets/images/blue-arrow.svg" alt="blue arrow">
                </a>

                <div id="galleryFull" class="img-gallery" style="display: none;">
                    <div class="row">
                        <?php foreach ($imageFiles1 as $file): ?>
                            <div class="col-lg-4 col-md-6 col-12 mb-4">
                                <img src="<?= $imageURL1 . '/' . htmlspecialchars($file) ?>" class="imgtag"
                                    alt="Gallery Image" onclick="openFullImg(this.src)" />
                            </div>
                        <?php endforeach; ?>
                    </div>

                    <a href="#" class="main-btn with-icon center mt-4" id="viewLessGallery"
                        data-faitracker-click-bind="true">
                        <span>View less</span>
                        <img src="http://localhost/application/assets/images/blue-arrow.svg" alt="blue arrow">
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
<script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
<script>
    document.addEventListener('DOMContentLoaded', function () {
        var swiper1 = new Swiper('.swiper-container', {
            slidesPerView: 1, // Default number of slides per view
            spaceBetween: 20,
            loop: true,
            autoplay: {
                delay: 1800, // Delay between slides in milliseconds
                disableOnInteraction: true, // Continue autoplay after interaction
            },
            pagination: {
                el: '.swiper-pagination',
                clickable: true,
            },
            navigation: {
                nextEl: '.swiper-button-next',
                prevEl: '.swiper-button-prev',
            },
            breakpoints: {
                480: {
                    slidesPerView: 1,
                    spaceBetween: 10,
                },
                768: {
                    slidesPerView: 2,
                    spaceBetween: 20,
                },
                1024: {
                    slidesPerView: 3,
                    spaceBetween: 20,
                }
            },
            centeredSlides: true
        });
        var swiper2 = new Swiper('.swiper-container2', {
            slidesPerView: 1, // Default number of slides per view
            spaceBetween: 20,
            loop: true,
            autoplay: {
                delay: 2000, // Delay between slides in milliseconds
                disableOnInteraction: true, // Continue autoplay after interaction
            },
            pagination: {
                el: '.swiper-pagination',
                clickable: true,
            },
            navigation: {
                nextEl: '.swiper-button-next',
                prevEl: '.swiper-button-prev',
            },
            breakpoints: {
                480: {
                    slidesPerView: 1,
                    spaceBetween: 10,
                },
                768: {
                    slidesPerView: 2,
                    spaceBetween: 20,
                },
                1024: {
                    slidesPerView: 3,
                    spaceBetween: 20,
                }
            },
            centeredSlides: true
        });
    });
</script>



<script>
    var fullImgBox = document.getElementById("fullImgBox");
    var fullImg = document.getElementById("fullImg");

    function openFullImg(pic) {
        fullImgBox.style.display = "flex";
        fullImg.src = pic;
    }

    function closeFullImg() {
        fullImgBox.style.display = "none";
    }

    fullImgBox.addEventListener('click', function (event) {
        if (event.target === fullImgBox) {
            closeFullImg();
        }
    });
</script>

<script>
    function setupGalleryToggle(btnMoreId, sliderId, galleryId, btnLessId) {
        const buttonMore = document.getElementById(btnMoreId);
        const buttonLess = document.getElementById(btnLessId);
        const slider = document.getElementById(sliderId);
        const gallery = document.getElementById(galleryId);

        if (buttonMore && slider && gallery && buttonLess) {
            // Apply .main-btn.center classes
            buttonMore.classList.add('main-btn', 'center');
            buttonLess.classList.add('main-btn', 'center');

            buttonMore.addEventListener('click', function () {
                slider.style.display = 'none';
                gallery.style.display = 'block';
                buttonMore.style.display = 'none';
                buttonLess.style.display = 'flex'; // because your button uses flex now
            });

            buttonLess.addEventListener('click', function () {
                gallery.style.display = 'none';
                slider.style.display = 'block';
                buttonMore.style.display = 'flex'; // same here
                buttonLess.style.display = 'none';
            });
        }
    }

    // Initialize for both gallery and video
    setupGalleryToggle('loadMoreVideo', 'swiper-container', 'videoFull', 'viewLessVideo');
    setupGalleryToggle('loadMoreGallery', 'swiper-container2', 'galleryFull', 'viewLessGallery');
</script>