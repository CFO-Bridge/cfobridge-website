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

    .video-card:hover {
        transform: translateY(-2px);
        border-radius: 16px;
        box-shadow: 0 14px 28px rgba(0, 0, 0, 0.25), 0 10px 10px rgba(0, 0, 0, 0.22);
    }

    .video-card img {
        width: 100%;
        height: 100%;
        border-radius: 16px;
        object-fit: cover;
    }

    .video-card .content {
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
    .video-card .title {
        margin: 0;
    }

    .video-card .date {
        font-size: 12px;
        color: rgba(255, 255, 255, 1);
        margin-bottom: 4px;
    }

    .video-card .title {
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
</style>
<header class="inner-banner sec" style="height:100px;background:url('https://t3.ftcdn.net/jpg/04/42/44/98/360_F_442449827_ispo2oI83ffX0TSax4Pgdd7xkqCA5ThA.jpg') center/cover no-repeat;">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-8 col-12">
                <div class="sec-head center white">
                    <h1>Videos</h1>
                </div>
            </div>
        </div>
    </div>
</header>

<div class="team-sec sec blue-gr">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-8 col-12">
                <div class="sec-head center white">
                    <h2>CFO MahaKumbh 2024</h2>
                    <p>CFO MahaKumbh 2024 at Bangalore.</p>
                </div>
            </div>
            
            <div class="col-12" style="margin-top:30px;">
                
                <div class="swiper-container">
                    <diV class="swiper-wrapper">
                        <?php 
                        $jsonData = '[
                        {
                        "date": "Streamed live on Apr 26, 2024",
                        "title": "CFO Mahakumbh 2024",
                        "vcode": "gh4HIZaUx7Q"
                        },
                        {
                        "date": "Jun 5, 2024",
                        "title": "Tech for the CFO’s Office – Current State and Need ",
                        "vcode": "LwP0-M-7sa0"
                        },
                        {
                        "date": "May 16, 2024",
                        "title": "CFO Bridge Mahakumbh 2024 II V Srinivasan- CEO & Founder",
                        "vcode": "PAcmZ9s1_lo"
                        }
                        ]';
                        $slides = json_decode($jsonData, true);
                        foreach ($slides as $slide) 
                        {
                            echo '<div class="swiper-slide">';
                            echo '<a href="https://www.youtube.com/watch?v=' . $slide['vcode'] . '" target="_blank" class="team-card style-2" data-faitracker-click-bind="true">';
                            echo '<div class="video-slider">';
                            echo '<div class="video-card">';
                            echo '<div class="content">';
                            echo '<p class="date">' . $slide['date'] . '</p>';
                            echo '<p class="title">' . $slide['title'] . '</p>';
                            echo '</div>';
                            echo '<img src="https://img.youtube.com/vi/' . $slide['vcode'] . '/maxresdefault.jpg" alt="video-cover" />';
                            echo '</div>';
                            echo '</div>';
                            echo '</a>';
                            echo '</div>';
                        }
                        ?>
                    </div>
                </div>
            </div>
        </div>

        <div class="row justify-content-center" style="margin-top:70px;">
            <div class="col-lg-8 col-12">
                <div class="sec-head center white">
                    <h2>Latest Videos</h2>
                    <p>CFOBridge Latest Videos.</p>
                </div>
            </div>
            
            <div class="col-12" style="margin-top:30px;">
                
                <div class="swiper-container2">
                    <diV class="swiper-wrapper">
                        <?php 
                        $jsonData = '[
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
                        "title": "CFO Partner -Prabhu R Mangaluru Technovanza 3.0",
                        "vcode": "5XSVYB_eSwg"
                        },
                        {
                        "date": "Oct 27, 2023",
                        "title": "Unveiling the Our Newest Launch: CTO Bridge",
                        "vcode": "N4wExDzRO-o"
                        }
                        ]';
                        $slides = json_decode($jsonData, true);
                        foreach ($slides as $slide) 
                        {
                            echo '<div class="swiper-slide">';
                            echo '<a href="https://www.youtube.com/watch?v=' . $slide['vcode'] . '" target="_blank" class="team-card style-2" data-faitracker-click-bind="true">';
                            echo '<div class="video-slider">';
                            echo '<div class="video-card">';
                            echo '<div class="content">';
                            echo '<p class="date">' . $slide['date'] . '</p>';
                            echo '<p class="title">' . $slide['title'] . '</p>';
                            echo '</div>';
                            echo '<img src="https://img.youtube.com/vi/' . $slide['vcode'] . '/maxresdefault.jpg" alt="video-cover" />';
                            echo '</div>';
                            echo '</div>';
                            echo '</a>';
                            echo '</div>';
                        }
                        ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
<script>
    document.addEventListener('DOMContentLoaded', function() {
        var swiper = new Swiper('.swiper-container', {
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
        var swiper = new Swiper('.swiper-container2', {
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