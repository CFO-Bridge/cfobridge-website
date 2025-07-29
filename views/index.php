<style>
    .ct-sec {
        display: none !important;
    }
    
    .banner-content h2 {
    font-size: 42px;
}
</style>
<header class="main-header">
    <div class="header-inner">
        <div class="swiper banner-swiper">
            <div class="swiper-wrapper">
                <?php if ($banners) {
                    foreach ($banners as $row) {
                ?>
                        <div class="swiper-slide">
                            <div class="main-banner">
                                <div class="bg-img">
                                    <picture>
                                        <source media="(min-width:600px)" srcset="<?= base_url('uploads/images/') . $row['image'] ?>">
                                        <img src="<?= base_url('uploads/images/') . $row['mob_image'] ?>" alt="<?= $row['alt_text']??$row['image'] ?>">
                                    </picture>
                                </div>
                                <div class="container">
                                    <div class="banner-inner">
                                        <div class="banner-content">
    <?php static $firstH1 = true; ?> 
    
    <?php if ($firstH1): ?>
        <h1 class="<?= $row['theme'] == 1 ? 'white' : '' ?>">
            <?= $row['title'] ?>
        </h1>
        <?php $firstH1 = false; ?> 
    <?php else: ?>
        <h2 class="<?= $row['theme'] == 1 ? 'white' : '' ?>">
            <?= $row['title'] ?>
        </h2>
    <?php endif; ?>

    <p class="para <?= $row['theme'] == 1 ? 'white' : '' ?>">
        <?= $row['short_description'] ?>
    </p>

    <?php if (!empty($row['ctl'])): ?>
        <a href="<?= urldecode($row['ctl']) ?>" target="_blank" class="main-btn with-icon <?= $row['theme'] == 1 ? 'white-btn' : '' ?>">
            <span><?= $row['ctb'] ?></span>
            <img src="<?= base_url() ?>assets/images/blue-arrow.svg" alt="blue arrow">
        </a>
    <?php endif; ?>
</div>

                                    </div>
                                </div>
                            </div>
                        </div>
                <?php }
                } ?>
            </div>
            <div class="swiper-pagination white vertical"></div>
        </div>
    </div>
</header>
<?php include_once 'common/clientlogo.php'; ?>
<section class="sec vid-wr-sec">
    <div class="container">
        <div class="row justify-content-end">
            <div class="col-lg-6 col-12">
                <div class="sec-head mb-30">
                    <h2>
                        Empowering your <br>financial future
                    </h2>
                </div>
            </div>
        </div>
        <div class="row ">
            <div class="col-lg-6 col-12">
                <div class="vid-wrap youtube-video-place" data-url="https://www.youtube.com/embed/t6gVl949muo" id="ppk" data-aos="fade-right" data-aos-duration="1000">
                    <!-- <button class="play-btn">
                        <img data-src="assets/images/play.svg" alt="" />
                    </button>
                    <img data-src="<?= base_url() ?>assets/images/ab-im.jpg" /> -->
                    <!-- <iframe width="560" height="315" src="https://www.youtube.com/embed/t6gVl949muo?si=NLcqUazTKm3Z7XIy" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe> -->
                </div>
            </div>
            <div class="col-lg-6 col-12">
                <div class="vid-con" data-aos="fade-left" data-aos-duration="1000">
                    <div class="para text-jus">
                        <strong style="">
                            Are you facing financial challenges in your growing business and seeking a professional partner to improve your finance department's efficiency and reliability in decision-making?
                        </strong> <br><br>
                        In that case, CFO Bridge is your ideal solution. We provide access to top-tier CFO talent in India, delivering on-demand CFO consulting services to streamline accounting, taxation, fundraising strategies, financial planning, analysis, decision support, M&A, and process automation. Allow our seasoned CFOs to help elevate your business to the next level.
                    </div>
                    <a href="<?= base_url('about') ?>" target="_blank" class="main-btn mt-30 with-icon">
                        <span>Know More</span>
                        <img data-src="<?= base_url() ?>assets/images/blue-arrow.svg" alt="blue arrow">
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>
<?php
include_once 'common/teams.php';
?>
<section class="sec srv-sec">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="sec-head cscap center mb-50" data-aos="fade-up" data-aos-duration="1000">
                    <h2>
                        CFO Services that Makes Us Unique
                    </h2>
                </div>
                <?php if (!empty($servicehomecard)) {
                    $count = 1;
                    foreach ($servicehomecard as $row) {
                ?>
                        <div class="srv-row-p" data-aos="<?= $count % 2 == 0 ? "fade-right" : "fade-left" ?>" data-aos-duration="1000">
                            <a href="<?= base_url('service/') . $row['slug'] ?>" class="srv-row">
                                <div class="l-part">
                                    <div class="ic">
                                        <img data-src="<?= base_url('uploads/images/') . $row['image'] ?>" alt="<?= $row['image'] ?>">
                                    </div>
                                    <h3>
                                        <?= $row['title_home_card'] ?>
                                    </h3>
                                </div>
                                <div class="r-part">
                                    <p class="para">
                                        <?= $row['description_home_card'] ?>
                                    </p>
                                    <span class="main-btn link-blue-btn with-icon">
                                        <span>Learn More</span>
                                        <img data-src="<?= base_url() ?>assets/images/blue-arrow.svg" alt="blue arrow">
                                    </span>
                                </div>
                            </a>
                        </div>
                <?php $count++;
                    }
                }
                ?>
                <?php if (!empty($exservicehomecard)) {
                    $count = 1;
                    foreach ($exservicehomecard as $row) {
                ?>
                        <div class="srv-row-p" data-aos="<?= $count % 2 == 0 ? "fade-right" : "fade-left" ?>" data-aos-duration="1000">
                            <a href="<?= base_url('services/') . $row['slug'] ?>" class="srv-row">
                                <div class="l-part">
                                    <div class="ic">
                                        <img data-src="<?= base_url('uploads/images/') . $row['image'] ?>" alt="<?= $row['image'] ?>">
                                    </div>
                                    <h3>
                                        <?= $row['title_home_card'] ?>
                                    </h3>
                                </div>
                                <div class="r-part">
                                    <p class="para">
                                        <?= $row['description_home_card'] ?>
                                    </p>
                                    <span class="main-btn link-blue-btn with-icon">
                                        <span>Learn More</span>
                                        <img data-src="<?= base_url() ?>assets/images/blue-arrow.svg" alt="blue arrow">
                                    </span>
                                </div>
                            </a>
                        </div>
                <?php $count++;
                    }
                }
                ?>
            </div>
        </div>
    </div>
</section>



<section class="sec pt-0">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-5 col-12">
                <div class="fn-img">
                    <img data-src="<?= base_url() ?>assets/images/finance-image.svg" alt="finance" />
                </div>
            </div>
            <div class="col-lg-6 offset-lg-1 col-12">
                <div class="sec-head">
                    <div class="f-con">
                        <h2>
                            Assess Financial Preparedness
                        </h2>
                    </div>
                    <p class="para">
                        Use this free tool to check your financial preparedness in under 2 minutes.
                    </p>
                    <a href="<?= base_url('finance-tool') ?>" class="main-btn with-icon mt-10">
                        <span>Take the Assessment</span>
                        <img data-src="<?= base_url() ?>assets/images/blue-arrow.svg" alt="blue arrow">
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>

<?php 
include_once 'common/backed.php';

?>
<section class="in-sec">
    <div class="container">
        <div class="ind-inner">
            <div class="row">
                <div class="col-lg-8 col-23">
                    <div class="sec-head white" data-aos="fade-up" data-aos-duration="1000">
                        <h2>
                            Industry-specific financial services for accelerated growth
                        </h2>
                    </div>
                    <p class="para white bd" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="200">
                        Tailored shared CFO services best for your industries. Currently, we are serving businesses from
                        the below sectors.
                    </p>
                </div>
                <div class="col-12">
                    <div class="swiper ind-swiper" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="300">
                        <div class="swiper-wrapper">
                            <?php if ($industry) {
                                foreach ($industry as $row) {
                            ?>
                                    <div class="swiper-slide">
                                        <a href="<?= base_url('industry/') . $row['slug'] ?>" class="ind">
                                            <img src="<?= base_url('uploads/images/') . $row['image'] ?>" alt="<?= $row['image'] ?>">
                                            <span><?= $row['title_home_card'] ?></span>
                                        </a>
                                    </div>
                            <?php }
                            } ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<?php include_once 'common/testimonial.php';
include_once 'common/blogs.php';
if (!empty($casestudies)) {
?>
    <section class="testi-sec sec">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="sec-head center">
                        <h2>
                            Case Studies
                        </h2>
                        <div class="row justify-content-center">
                            <div class="col-lg-8 col-12">
                                <p class="para">
                                    Still unsure about onboarding a virtual CFO? Hear it from our esteemed clients
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="swiper cs-swiper mt-30">
                        <div class="swiper-wrapper">
                            <?php
                            foreach ($casestudies as $row) {
                            ?>
                                <div class="swiper-slide">
                                    <a href="<?= base_url('resources/') . $row['slug'] ?>" class="bll-card">
                                        <div class="im">
                                            <img src="<?= base_url('uploads/images/') . $row['image'] ?>" loading="lazy" alt="<?=$row['image']?>">
                                        </div>
                                        <div class="det">
                                            <h3>
                                                <?= $row['title'] ?>
                                            </h3>
                                            <button class="main-btn link-blue-btn">
                                                <span>Learn More</span>
                                                <img data-src="<?= base_url("assets/images/blue-arrow.svg") ?>" alt="blue arrow">
                                            </button>
                                        </div>
                                    </a>
                                </div>
                            <?php } ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
<?php } ?>


<!-- <?php if (!empty($homefaq)) { ?>
<section class="faq-sec sec light-bg">
    <div class="container">
        <div class="row">
            <div class="col-12 mb-30">
                <div class="sec-head center">
                    <h2>
                    FAQ
                    </h2>
                </div>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-lg-8 col-12">
                <div class="a-cc accordion" id="accordionExample">
                     <?php
                        $i = 0;
                        foreach ($homefaq as $row) {
                        ?>
                    <div class="accordion-item">
                        <h2 class="accordion-header" >
                            <button class="accordion-button <?= $i != 0 ? 'collapsed' : '' ?>" type="button" data-bs-toggle="collapse"
                                data-bs-target="#headingOne-<?= $i ?>" aria-expanded="true" aria-controls="collapseOne">
                                <?= $row['heading'] ?>
                            </button>
                        </h2>
                        <div id="headingOne-<?= $i ?>" class="accordion-collapse collapse <?= $i == 0 ? 'show' : '' ?>" aria-labelledby="headingOne-<?= $i ?>"
                            data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <p class="para">
                                <?= $row['description'] ?>
                                </p>
                            </div>
                        </div>
                    </div>
                    <?php
                            $i++;
                        }
                    ?>
                </div>
            </div>
        </div>
    </div>
</section>
<?php } ?> -->