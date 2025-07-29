<style>
.test-card {
    display: flex;
    flex-direction: column;
    justify-content: space-between;
    height: 100%; 
    background: #fff;
    border-radius: 10px;
    overflow: hidden;
    position: relative;
    box-shadow: 0 4px 8px rgba(0,0,0,0.1);
}

.test-area {
    flex-grow: 1;
    padding: 20px;
    position: relative;
    display: flex;
    align-items: center;
    justify-content: center;
}

.test-card .test-area {
  position: relative;
  padding-top: 49%;
  background: grey;
  border-bottom-left-radius: 16px;
  border-bottom-right-radius: 16px;
}

.audio-player {
    width: 100%;
    height: 100%;
}

.audio-player audio {
    width: 100%;
    max-width: 300px;
    z-index: 1;
}

.audio-player.with-bg {
    position: relative;
    height: 100%;
    display: flex;
    align-items: center;
    justify-content: center;
    overflow: hidden;
    border-radius: 10px;
}

.audio-player.with-bg .audio-bg {
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background-size: cover;
    background-position: center;
    z-index: 0;
    filter: brightness(0.7);
}

.test-dt {
    padding: 20px;
    background: #fff;
}

.test-dt h2 {
    margin: 0;
    font-size: 18px;
    color: #333;
}

.test-dt p {
    margin: 5px 0 0;
    font-size: 14px;
    color: #666;
}

.test-dt.fl {
    display: flex;
    align-items: center;
    gap: 15px;
}

.test-dt.fl img {
    width: 50px;
    height: 50px;
    border-radius: 50%;
    object-fit: cover;
}

.testimonial-row {
    margin-bottom: 40px;
}

.testimonial-row h3.section-title {
    text-align: center;
    margin-bottom: 20px;
    color: #333;
    font-size: 24px;
}

.swiper-container {
    padding: 20px 0;
}

.swiper-slide {
    height: auto;
    padding: 0 10px;
}

.para {
    line-height: 1.6;
    color: #555;
}

/* Responsive adjustments */
@media (max-width: 768px) {
    .testimonial-row h3.section-title {
        font-size: 20px;
    }
}
</style>

<!-- Add Swiper JS and CSS -->
<link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css">
<script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>

<header class="inner-banner sec">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-8 col-12">
                <div class="sec-head center white">
                    <h1>Our testament of service well-served</h1>
                    <p class="para">
                        CFO Bridge is composed of 30+ CFOs with 400+ years of combined experience. From startups,
                        insurance, IT, agriculture, and healthcare to financial services and automobiles - their
                        expertise in managing finance spans various industries. Our CFOs are further supported by a
                        dedicated group of 20+ consultants. 
                    </p>
                </div>
            </div>
        </div>
    </div>
</header>

<section class="testi-sec sec">
    <div class="container">
        <!-- Video Testimonials Row -->
        <div class="testimonial-row">
            <h3 class="section-title">Video Testimonials</h3>
            <div class="swiper-container video-swiper">
                <div class="swiper-wrapper">
                    <?php if ($testimonials): ?>
                        <?php foreach ($testimonials as $row): ?>
                            <?php if (!empty($row['video'])): ?>
                                <div class="swiper-slide">
                                    <div class="test-card">
                                        <div class="test-area youtube-video-place" data-url="<?= urldecode($row['video']) ?>"></div>
                                        <div class="test-dt">
                                            <div>
                                                <h2><?= $row['title'] ?></h2>
                                                <p><?= $row['detail'] ?></p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            <?php endif; ?>
                        <?php endforeach; ?>
                    <?php endif; ?>
                </div>
                <div class="swiper-pagination"></div>
            </div>
        </div>

        <!-- Text Testimonials Row -->
        <div class="testimonial-row">
            <h3 class="section-title">What Our Clients Say</h3>
            <div class="swiper-container text-swiper">
                <div class="swiper-wrapper">
                    <?php if ($testimonials): ?>
                        <?php foreach ($testimonials as $row): ?>
                            <?php if (empty($row['video']) && empty($row['audio'])): ?>
                                <div class="swiper-slide">
                                    <div class="test-card">
                                        <div class="test-area fl custom-scroll">
                                            <p class="para"><?= $row['description'] ?></p>
                                        </div>
                                        <div class="test-dt fl">
                                            <img src="<?= base_url('uploads/images/') . $row['image'] ?>"
                                                alt="<?= $row['alt_text'] ?>">
                                            <div>
                                                <h2><?= $row['title'] ?></h2>
                                                <p><?= $row['detail'] ?></p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            <?php endif; ?>
                        <?php endforeach; ?>
                    <?php endif; ?>
                </div>
                <div class="swiper-pagination"></div>
            </div>
        </div>

        <!-- Audio Testimonials Row -->
        <div class="testimonial-row">
            <h3 class="section-title">Audio Testimonials</h3>
            <div class="swiper-container audio-swiper">
                <div class="swiper-wrapper">
                    <?php if ($testimonials): ?>
                        <?php foreach ($testimonials as $row): ?>
                            <?php if (!empty($row['audio'])): ?>
                                <div class="swiper-slide">
                                    <div class="test-card">
                                        <div class="test-area audio-player <?= empty($row['image']) ? '' : 'with-bg' ?>">
                                            <?php if (!empty($row['image'])): ?>
                                                <div class="audio-bg" style="background-image: url('<?= base_url('uploads/images/') . $row['image'] ?>');"></div>
                                            <?php endif; ?>
                                            <audio controls controlsList="nodownload">
                                                <source src="<?= base_url('uploads/audio/') . $row['audio'] ?>" type="audio/mpeg">
                                                Your browser does not support the audio element.
                                            </audio>
                                        </div>
                                        <div class="test-dt">
                                            <div>
                                                <h2><?= $row['title'] ?></h2>
                                                <p><?= $row['detail'] ?></p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            <?php endif; ?>
                        <?php endforeach; ?>
                    <?php endif; ?>
                    
                    <!-- Hardcoded example -->
                    <div class="swiper-slide">
                        <div class="test-card">
                            <div class="test-area audio-player with-bg">
                                <div class="audio-bg" style="background-image: url('https://cfobridge.com/uploads/images/juheejain-dibiaa.webp');"></div>
                                <audio controls controlsList="nodownload">
                                    <source src="https://cfobridge.com/uploads/audio/Juhee_Jain-Dibiaa.mp3" type="audio/mpeg">
                                    Your browser does not support the audio element.
                                </audio>
                            </div>
                            <div class="test-dt">
                                <div>
                                    <h2>Juhee Jain</h2>
                                    <p>Co Founder - Dibiaa</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="swiper-pagination"></div>
            </div>
        </div>
    </div>
</section>

<script>
document.addEventListener('DOMContentLoaded', function() {
    // Initialize Video Swiper
    var videoSwiper = new Swiper('.video-swiper', {
        slidesPerView: 1,
        spaceBetween: 20,
        loop: true,
        autoplay: {
            delay: 5000,
            disableOnInteraction: false,
        },
        pagination: {
            el: '.video-swiper .swiper-pagination',
            clickable: true,
        },
        breakpoints: {
            768: {
                slidesPerView: 2,
            },
            1024: {
                slidesPerView: 3,
            }
        }
    });

    // Initialize Text Swiper
    var textSwiper = new Swiper('.text-swiper', {
        slidesPerView: 1,
        spaceBetween: 20,
        loop: true,
        autoplay: {
            delay: 6000,
            disableOnInteraction: false,
        },
        pagination: {
            el: '.text-swiper .swiper-pagination',
            clickable: true,
        },
        breakpoints: {
            768: {
                slidesPerView: 2,
            },
            1024: {
                slidesPerView: 3,
            }
        }
    });

    // Initialize Audio Swiper
    var audioSwiper = new Swiper('.audio-swiper', {
        slidesPerView: 1,
        spaceBetween: 20,
        loop: true,
        autoplay: {
            delay: 7000,
            disableOnInteraction: false,
        },
        pagination: {
            el: '.audio-swiper .swiper-pagination',
            clickable: true,
        },
        breakpoints: {
            768: {
                slidesPerView: 2,
            },
            1024: {
                slidesPerView: 3,
            }
        }
    });
});
</script>