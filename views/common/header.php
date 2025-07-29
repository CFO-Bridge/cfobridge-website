<!DOCTYPE html>

<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="google-site-verification" content="gaCTHgZgqVItuEvu6LE182zXedNrJhMptjqeCe2nOp0" />
    <link rel="canonical" href="<?= base_url($_SERVER['REQUEST_URI']) ?>" />

    <!-- Google Tag Manager -->
    <script>
        (function (w, d, s, l, i) {
            w[l] = w[l] || [];
            w[l].push({
                'gtm.start': new Date().getTime(),
                event: 'gtm.js'
            });
            var f = d.getElementsByTagName(s)[0],
                j = d.createElement(s),
                dl = l != 'dataLayer' ? '&l=' + l : '';
            j.async = true;
            j.src =
                'https://www.googletagmanager.com/gtm.js?id=' + i + dl;
            f.parentNode.insertBefore(j, f);
        })(window, document, 'script', 'dataLayer', 'GTM-PRSDPD4');
    </script>
    <!-- End Google Tag Manager -->

    <!-- favicon -->
    <link rel="shortcut icon" href="<?= base_url() ?>assets/images/favicon.png">



    <!--<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Swiper/8.4.4/swiper-bundle.css" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.css" rel="stylesheet">-->
    <link rel="stylesheet" href="<?= base_url() ?>assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?= base_url() ?>assets/css/swiper-bundle.css" />

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
    <link href="https://fonts.googleapis.com/css?family=Merriweather:400,900,900i" rel="stylesheet">

    <!--<link rel="stylesheet" href="<?= base_url() ?>assets/css/bootstrap-icons.min.css">-->
    <link rel="stylesheet" href="<?= base_url() ?>bootstrap-icons.min.css" media="print"
        onload="this.onload=null;this.media='all';">
    <noscript>
        <link rel="stylesheet" href="<?= base_url() ?>bootstrap-icons.min.css">
    </noscript>
    <!--<link href="<?= base_url() ?>assets/css/aos.css" rel="stylesheet">-->
    <link rel="stylesheet" href="<?= base_url() ?>assets/css/aos.css" media="print"
        onload="this.onload=null;this.media='all';">
    <noscript>
        <link rel="stylesheet" href="<?= base_url() ?>assets/css/aos.css">
    </noscript>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/23.0.8/css/intlTelInput.css">
  <!-- Add this to your <head> -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Swiper/8.4.4/swiper-bundle.min.css" />
    <link rel="stylesheet" href="<?= base_url() ?>assets/css/main-style.css">
    <link rel="stylesheet" href="<?= base_url('assets/css/res.css') ?>">
    <!--<link rel="stylesheet" href="<?= base_url('assets/css/step.css') ?>">-->

    <link rel="stylesheet" href="<?= base_url() ?>assets/css/step.css" media="print"
        onload="this.onload=null;this.media='all';">
    <noscript>
        <link rel="stylesheet" href="<?= base_url() ?>assets/css/step.css">
    </noscript>

    <!-- jquery -->
    <!--<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>-->
    <script src="<?= base_url() ?>assets/js/jquery.min.js"></script>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/simplePagination.js/1.6/simplePagination.css" />
    <script
        src="https://cdnjs.cloudflare.com/ajax/libs/simplePagination.js/1.6/jquery.simplePagination.min.js"></script>

    <script>
        var site_url = "<?= base_url() ?>";
    </script>
    <?= !empty($head_foot['header']) ? html_entity_decode($head_foot['header']) : '' ?>
    <?= !empty($page_header) ? html_entity_decode($page_header) : '' ?>
    <?= !empty($blogschema) ? html_entity_decode($blogschema) : '' ?>
    <?= !empty($page_schema) ? html_entity_decode($page_schema) : '' ?>
    <?= !empty($faq_schema) ? html_entity_decode($faq_schema) : '' ?>
    <?php if (!empty($author)): ?>
        <meta name="author" content="<?= htmlspecialchars($author) ?>">
    <?php endif; ?>

    <?php if (!empty($publisher)): ?>
        <meta name="publisher" content="<?= htmlspecialchars($publisher) ?>">
    <?php endif; ?>
    <?php if (!empty($rec['image'])): ?>

        <!-- Facebook Meta Tags -->
        <meta property="og:url" content="<?= base_url($_SERVER['REQUEST_URI']) ?>">
        <meta property="og:type" content="website">
        <meta property="og:image" content="https://cfobridge.com/assets/images/logo.png">

        <link rel="dns-prefetch" href="https://fonts.googleapis.com">
        <link rel="dns-prefetch" href="https://fonts.gstatic.com">
        <link rel="preconnect" href="https://fonts.googleapis.com" crossorigin>
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

        <meta property="og:description" content="<?= $rec['title'] ?>">
        <meta property="og:site_name" content="CFO Bridge">
        <meta property="og:locale" content="en_US">

        <!-- Twitter Meta Tags -->
        <meta name="twitter:card" content="summary_large_image">
        <meta property="twitter:domain" content="<?= base_url() ?>">
        <meta property="twitter:url" content="<?= base_url($_SERVER['REQUEST_URI']) ?>">
        <meta name="twitter:image" content="https://cfobridge.com/assets/images/logo.png">
        <meta name="twitter:site" content="<?= base_url($_SERVER['REQUEST_URI']) ?>">
        <meta name="twitter:description" content="<?= $rec['title'] ?>">


    <?php endif; ?>

    <?php if (!empty($rec['title'])): ?>

        <meta property="og:title" content="<?= $rec['title'] ?>">
        <meta name="twitter:title" content="<?= $rec['title'] ?>">

    <?php endif; ?>
    <!-- Google Tag Manager -->
    <script>(function (w, d, s, l, i) {
            w[l] = w[l] || []; w[l].push({
                'gtm.start':
                    new Date().getTime(), event: 'gtm.js'
            }); var f = d.getElementsByTagName(s)[0],
                j = d.createElement(s), dl = l != 'dataLayer' ? '&l=' + l : ''; j.async = true; j.src =
                    'https://www.googletagmanager.com/gtm.js?id=' + i + dl; f.parentNode.insertBefore(j, f);
        })(window, document, 'script', 'dataLayer', 'GTM-N63TNDF');</script>
    <!-- End Google Tag Manager -->


    <script>
        window.factors = window.factors || function () { this.q = []; var i = new CustomEvent("FACTORS_QUEUED_EVENT"), n = function (t, e) { this.q.push({ k: t, a: e }), window.dispatchEvent(i) }; return this.track = function (t, e, i) { n("track", arguments) }, this.init = function (t, e, i) { this.TOKEN = t, this.INIT_PARAMS = e, this.INIT_CALLBACK = i, window.dispatchEvent(new CustomEvent("FACTORS_INIT_EVENT")) }, this.reset = function () { n("reset", arguments) }, this.page = function (t, e) { n("page", arguments) }, this.updateEventProperties = function (t, e) { n("updateEventProperties", arguments) }, this.identify = function (t, e) { n("identify", arguments) }, this.addUserProperties = function (t) { n("addUserProperties", arguments) }, this.getUserId = function () { n("getUserId", arguments) }, this.call = function () { var t = { k: "", a: [] }; if (arguments && 1 <= arguments.length) { for (var e = 1; e < arguments.length; e++)t.a.push(arguments[e]); t.k = arguments[0] } this.q.push(t), window.dispatchEvent(i) }, this.init("thwkp49ljocp6l0o1lzr2z4jli8faubu"), this }(), function () { var t = document.createElement("script"); t.type = "text/javascript", t.src = "https://app.factors.ai/assets/v1/factors.js", t.async = !0, d = document.getElementsByTagName("script")[0], d.parentNode.insertBefore(t, d) }();
    </script>
    <!-- Google tag (gtag.js) -->
    <script src="https://www.googletagmanager.com/gtag/js?id=G-WQPV0RPRBR" defer></script>
    <script>
        $(document).ready(function () {
            window.dataLayer = window.dataLayer || [];
            function gtag() { dataLayer.push(arguments); }
            gtag('js', new Date());

            gtag('config', 'G-WQPV0RPRBR');


            //clarity
            (function (c, l, a, r, i, t, y) {
                c[a] = c[a] || function () { (c[a].q = c[a].q || []).push(arguments) };
                t = l.createElement(r); t.async = 1; t.src = "https://www.clarity.ms/tag/" + i;
                y = l.getElementsByTagName(r)[0]; y.parentNode.insertBefore(t, y);
            })(window, document, "clarity", "script", "k9row2qokk");
        })

    </script>
</head>

<?php
$servicehomecard = $this->home_model->getservicehomecard();
$exservicehomecard = $this->home_model->getexservicehomecard();
$industry = $this->home_model->getindustriescard();
$location = $this->home_model->getlocationlistforheader();
?>
<!-- <a href="<?= base_url('contact') ?>" class="float-btn main-btn with-icon block-btn">
    <span>Get In Touch</span>
    <img src="<?= base_url() ?>assets/images/blue-arrow.svg" alt="">
</a> -->

<body style="background: white !important;">
    <!-- Google Tag Manager (noscript) -->
    <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-N63TNDF" height="0" width="0"
            style="display:none;visibility:hidden"></iframe></noscript>
    <!-- End Google Tag Manager (noscript) -->

    <div class="cookie-modal" id="cookieNotice">
        <button class="m-close close-cookie">
            <img src="<?= base_url() ?>assets/images/m-close.svg" alt="close-img" />
        </button>
        <div class="cookie-inner">
            <img src="<?= base_url() ?>assets/images/cookie.webp" alt="Cookie icon" />
            <p style="font-size:28px; font-weight:600;">Allow Cookies ?</p>
            <p class="para">
                To enhance your browsing experience on our website, we utilize cookies. For more detailed information
                regarding our use of cookies, kindly refer to our <a href="<?= base_url('privacy-policy') ?>"
                    target="_blank">privacy policy.</a>
            </p>
            <a href="javascriot:void(0)" class="main-btn with-icon allow-cookie">
                <span>Allow Cookies</span>
            </a>
        </div>
    </div>

    <!-- Google Tag Manager (noscript) -->
    <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-PRSDPD4" height="0" width="0"
            style="display:none;visibility:hidden"></iframe></noscript>
    <!-- End Google Tag Manager (noscript) -->
    <nav class="main-nav">
        <div class="">
            <div class="inner-nav" style="margin-right: 100px;">
                <div class="l-part">

                </div>
                <div class="m-part" style="z-index: 100; margin-bottom: 10px;">
                    <ul class="nav-list">
                        <li class="has-drop-down">
                            <a href="javascript:void(0)" class="collapsed">
                                <img src="<?= base_url('assets/images/india-flag-icon.svg') ?>" alt="India"
                                    style="width: 20px; vertical-align: middle;"> India
                            </a>
                            <div class="drop-mega">
                                <ul>
                                    <?php if (!empty($location)) {
                                        foreach ($location as $row) {
                                            ?>
                                            <li>
                                                <a href="<?= base_url('location/') . $row['slug'] ?>" class="srv-link">
                                                    <div class="ic">
                                                        <img src="<?= base_url('assets/images/srv01.svg') ?>" alt="Icon">
                                                    </div>
                                                    <span><?= $row['title'] ?></span>
                                                </a>
                                            </li>
                                        <?php }
                                    } ?>
                                </ul>
                            </div>
                        </li>
                        <li>
                            <a href="<?= base_url('usa') ?>">
                                <img src="<?= base_url('assets/images/united-states-flag-icon.svg') ?>" alt="USA"
                                    style="width: 20px; vertical-align: middle;"> USA
                            </a>
                        </li>
                        <!--<li>
                            <a href="#">
                                <img src="<?= base_url('assets/images/united-arab-emirates-flag-icon.svg') ?>" alt="UAE"
                                    style="width: 20px; vertical-align: middle;"> UAE
                            </a>
                        </li>-->


                    </ul>
                </div>
            </div>
            <div class="inner-nav">
                <div class="l-part">
                    <button class="menu-btn" aria-label="Open menu">
                        <img src="<?= base_url('assets/images/menu.svg') ?>" alt="Open menu">
                    </button>
                    <a href="<?= base_url() ?>" class="logo">
                        <img src="<?= base_url('assets/images/logo.png') ?>" alt="CFO Bridge Home">
                    </a>
                </div>
                <div class="m-part">
                    <ul class="nav-list">
                        <li class="has-drop-down">
                            <a href="<?= base_url('services') ?>" class="collapsed">
                                CFO Services
                            </a>
                            <div class="drop-mega">
                                <ul>
                                    <?php if (!empty($servicehomecard)) {
                                        foreach ($servicehomecard as $row) {
                                            ?>
                                            <li>
                                                <a href="<?= base_url('service/') . $row['slug'] ?>" class="srv-link">
                                                    <div class="ic">
                                                        <img src="<?= base_url('assets/images/srv01.svg') ?>" alt="Icon">
                                                    </div>
                                                    <span><?= $row['title_home_card'] ?></span>
                                                </a>
                                            </li>
                                        <?php }
                                    }
                                    ?>

                                    <?php if (!empty($exservicehomecard)) {
                                        foreach ($exservicehomecard as $row) {
                                            ?>
                                            <li>
                                                <a href="<?= base_url('services/') . $row['slug'] ?>" class="srv-link">
                                                    <div class="ic">
                                                        <img src="<?= base_url('assets/images/srv01.svg') ?>" alt="Icon">
                                                    </div>
                                                    <span><?= $row['title_home_card'] ?></span>
                                                </a>
                                            </li>
                                        <?php }
                                    }
                                    ?>
                                </ul>
                            </div>
                        </li>
                        <li>
                            <a href="<?= base_url('ctobridge') ?>">
                                CTO Bridge
                            </a>
                        </li>
                        <li>
                            <a href="<?= base_url('kfwcorp') ?>">
                                CHRO Bridge
                            </a>
                        </li>
                        <li>
                            <a href="<?= base_url('about') ?>">
                                About Us
                            </a>
                        </li>
                        <li>
                            <a href="<?= base_url('team') ?>">
                                CFO Team
                            </a>
                        </li>
                        <!--<li class="has-drop-down">
                            <a href="javascript:void(0)" class="collapsed">
                                Locations
                            </a>
                            <div class="drop-mega">
                                <ul>
                                    <?php if (!empty($location)) {
                                        foreach ($location as $row) {
                                            ?>
                                    <li>
                                        <a href="<?= base_url('location/') . $row['slug'] ?>" class="srv-link">
                                            <div class="ic">
                                                <img src="<?= base_url('assets/images/srv01.svg') ?>" alt="Service icon">
                                            </div>
                                            <span><?= $row['title'] ?></span>
                                        </a>
                                    </li>
                                    <?php }
                                    } ?>
                                </ul>
                            </div>
                        </li>-->



                        <!--<li class="has-drop-down">
                            <a href="javascript:void(0)" class="collapsed">
                                Industries
                            </a>
                            <div class="drop-mega">
                                <ul>
                                    <?php if (!empty($industry)) {
                                        foreach ($industry as $row) {
                                            ?>
                                            <li>
                                                <a href="<?= base_url('industry/') . $row['slug'] ?>" class="srv-link">
                                                    <div class="ic">
                                                        <img src="<?= base_url('assets/images/srv01.svg') ?>" alt="">
                                                    </div>
                                                    <span><?= $row['title_home_card'] ?></span>
                                                </a>
                                            </li>
                                        <?php }
                                    } ?>
                                </ul>
                            </div>
                        </li>-->
                        <li>
                            <a href="<?= base_url('clients') ?>">
                                Clients
                            </a>
                        </li>

                        <li class="has-drop-down">
                            <a href="javascript:void(0)" class="collapsed">
                                Resources
                            </a>
                            <div class="drop-mega">
                                <ul>
                                    <li>
                                        <a href="<?= base_url('testimonials') ?>" class="srv-link">
                                            <div class="ic">
                                                <img src="<?= base_url('assets/images/srv01.svg') ?>" alt="Icon">
                                            </div>
                                            <span>Testimonials</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="<?= base_url('blogs') ?>" class="srv-link">
                                            <div class="ic">
                                                <img src="<?= base_url('assets/images/srv01.svg') ?>" alt="Icon">
                                            </div>
                                            <span>Blogs</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="<?= base_url('case-studies') ?>" class="srv-link">
                                            <div class="ic">
                                                <img src="<?= base_url('assets/images/srv01.svg') ?>" alt="Icon">
                                            </div>
                                            <span>Case Studies</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="<?= base_url('news-media') ?>" class="srv-link">
                                            <div class="ic">
                                                <img src="<?= base_url('assets/images/srv01.svg') ?>" alt="Icon">
                                            </div>
                                            <span>News & Media</span>
                                        </a>
                                    </li>
                                    <!---li>
                                        <a href="<?= base_url('events') ?>" class="srv-link">
                                            <div class="ic">
                                                <img src="<?= base_url('assets/images/srv01.svg') ?>" alt="">
                                            </div>
                                            <span>Events</span>
                                        </a>
                                    </li>--->
                                    <li>
                                        <a href="<?= base_url('insights') ?>" class="srv-link">
                                            <div class="ic">
                                                <img src="<?= base_url('assets/images/srv01.svg') ?>" alt="Icon">
                                            </div>
                                            <span>Insights</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="<?= base_url('gallery-media') ?>" class="srv-link">
                                            <div class="ic">
                                                <img src="<?= base_url('assets/images/srv01.svg') ?>" alt="Icon">
                                            </div>
                                            <span>Gallery</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="<?= base_url('career') ?>" class="srv-link">
                                            <div class="ic">
                                                <img src="<?= base_url('assets/images/srv01.svg') ?>" alt="Icon">
                                            </div>
                                            <span>Careers</span>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </li>

                        <!--<li>
                            <a href="<?= base_url('career') ?>">
                                Careers
                            </a>
                        </li>-->

                    </ul>
                    <ul class="ot-list">
                        <li>
                            <a href="<?= base_url('contact') ?>" class="main-btn white-btn">
                                <span>Contact Us</span>
                            </a>
                        </li>
                    </ul>
                </div>
                <!-- <div class="r-part">
                </div> -->
            </div>
        </div>
    </nav>

    <!--<div class="mobile-nav">
        <div class="menu-head">
            <a href="" class="logo">
                <img src="<?= base_url('assets/images/logo.png') ?>" alt="CFO Bridge Home">
            </a>
            <button class="menu-close" aria-label="Close menu">
                <img src="<?= base_url('assets/images/close.svg') ?>" alt="Close menu">
            </button>
        </div>
        <ul class="nav-list">
            <li>
                <a class="collapsed" data-bs-toggle="collapse" href="#services-links" role="button">
                    <span>Services</span>
                    <img src="<?= base_url('assets/images/c-plus.svg') ?>" alt="C+ logo">
                </a>
                <div class="collapse" id="services-links">
                    <div class="drop-mega">
                        <ul>
                            <?php if ($servicehomecard) {
                                foreach ($servicehomecard as $row) {
                                    ?>
                            <li>
                                <a href="<?= base_url('service/') . $row['slug'] ?>" class="srv-link">
                                    <div class="ic">
                                        <img src="<?= base_url('assets/images/srv01.svg') ?>" alt="Service icon">
                                    </div>
                                    <span><?= $row['title_home_card'] ?></span>
                                </a>
                            </li>
                            <?php }
                            }
                            ?>
                        </ul>
                    </div>
                </div>
            </li>
            
            <li>
                            <a href="<?= base_url('ctobridge') ?>">
                            <span>CTO Bridge</span>
                            </a>
                        </li>
            <li>
                <a class="collapsed" data-bs-toggle="collapse" href="#location-links" role="button">
                    <span>Location</span>
                    <img src="<?= base_url('assets/images/c-plus.svg') ?>" alt="C+ logo">
                </a>
                <div class="collapse" id="location-links">
                    <div class="drop-mega">
                        <ul>
                            <?php if (!empty($location)) {
                                foreach ($location as $row) {
                                    ?>
                            <li>
                                <a href="<?= base_url('location/') . $row['slug'] ?>" class="srv-link">
                                    <div class="ic">
                                        <img src="<?= base_url('assets/images/srv01.svg') ?>" alt="Service icon">
                                    </div>
                                    <span><?= $row['title'] ?></span>
                                </a>
                            </li>
                            <?php }
                            } ?>
                        </ul>
                    </div>
                </div>
            </li>
            <li>
                <a href="<?= base_url('about') ?>">
                    <span>About Us</span>
                </a>
            </li>
            


            <li>
                <a href="<?= base_url('team') ?>">
                    <span>CFO Team</span>
                </a>
            </li>
            <li>
                <a class="collapsed" data-bs-toggle="collapse" href="#indistries-links" role="button">
                    <span>Industries</span>
                    <img src="<?= base_url('assets/images/c-plus.svg') ?>" alt="C+ logo">
                </a>
                <div class="collapse" id="indistries-links">
                    <div class="drop-mega">
                        <ul>
                            <?php if (!empty($industry)) {
                                foreach ($industry as $row) {
                                    ?>
                            <li>
                                <a href="<?= base_url('industry/') . $row['slug'] ?>" class="srv-link">
                                    <div class="ic">
                                        <img src="<?= base_url('assets/images/srv01.svg') ?>" alt="Service icon">
                                    </div>
                                    <span><?= $row['title_home_card'] ?></span>
                                </a>
                            </li>
                            <?php }
                            } ?>
                        </ul>
                    </div>
                </div>
            </li>


            <li>
            <a href="<?= base_url('clients') ?>">
            <span>Clients </span>
            </a>
            </li>

            <li>
                <a href="<?= base_url('testimonials') ?>">
                    <span>Testimonials </span>
                </a>
            </li>
            
            <li>
                <a href="<?= base_url('downloads') ?>">
                    <span>Insights</span>
                </a>
            </li>

            <li>
                <a class="collapsed" data-bs-toggle="collapse" href="#resources-links" role="button">
                    <span>Resources</span>
                    <img src="<?= base_url('assets/images/c-plus.svg') ?>" alt="C+ logo">
                </a>
                <div class="collapse" id="resources-links">
                    <div class="drop-mega">
                        <ul>
                            <li>
                                <a href="<?= base_url('blogs') ?>" class="srv-link">
                                    <div class="ic">
                                        <img src="<?= base_url('assets/images/srv01.svg') ?>" alt="Service icon">
                                    </div>
                                    <span>Blogs</span>
                                </a>
                            </li>
                            <li>
                                <a href="<?= base_url('case-studies') ?>" class="srv-link">
                                    <div class="ic">
                                        <img src="<?= base_url('assets/images/srv01.svg') ?>" alt="Service icon">
                                    </div>
                                    <span>Case Studies</span>
                                </a>
                            </li>
                            <li>
                                <a href="<?= base_url('news-media') ?>" class="srv-link">
                                    <div class="ic">
                                        <img src="<?= base_url('assets/images/srv01.svg') ?>" alt="Service icon">
                                    </div>
                                    <span>News & Media</span>
                                </a>
                            </li>
                        
                            
                            <li>
                                <a href="<?= base_url('videos') ?>" class="srv-link">
                                    <div class="ic">
                                        <img src="<?= base_url('assets/images/srv01.svg') ?>" alt="Service icon">
                                    </div>
                                    <span>Videos</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </li>

            <li>
                <a href="<?= base_url('career') ?>">
                    <span>Careers </span>
                </a>
            </li>

            <li>
                <a href="<?= base_url('contact') ?>">
                    <span>Contact Us </span>
                </a>
            </li>


        </ul>
    </div>-->

    <div class="mobile-nav">
        <div class="menu-head">
            <a href="" class="logo">
                <img src="<?= base_url('assets/images/logo.png') ?>" alt="CFO Bridge Home">
            </a>
            <button class="menu-close" aria-label="Close menu">
                <img src="<?= base_url('assets/images/close.svg') ?>" alt="Close menu">
            </button>
        </div>
        <ul class="nav-list">
            <li>
                <a class="collapsed" data-bs-toggle="collapse" href="#services-links" role="button">
                    <span>CFO Services</span>
                    <img src="<?= base_url('assets/images/c-plus.svg') ?>" alt="C+ logo">
                </a>
                <div class="collapse" id="services-links">
                    <div class="drop-mega">
                        <ul>
                            <?php if (!empty($servicehomecard)) {
                                foreach ($servicehomecard as $row) {
                                    ?>
                                    <li>
                                        <a href="<?= base_url('service/') . $row['slug'] ?>" class="srv-link">
                                            <div class="ic">
                                                <img src="<?= base_url('assets/images/srv01.svg') ?>" alt="Icon">
                                            </div>
                                            <span><?= $row['title_home_card'] ?></span>
                                        </a>
                                    </li>
                                <?php }
                            } ?>

                            <?php if (!empty($exservicehomecard)) {
                                foreach ($exservicehomecard as $row) {
                                    ?>
                                    <li>
                                        <a href="<?= base_url('services/') . $row['slug'] ?>" class="srv-link">
                                            <div class="ic">
                                                <img src="<?= base_url('assets/images/srv01.svg') ?>" alt="Icon">
                                            </div>
                                            <span><?= $row['title_home_card'] ?></span>
                                        </a>
                                    </li>
                                <?php }
                            } ?>
                        </ul>
                    </div>
                </div>
            </li>

            <li>
                <a href="<?= base_url('ctobridge') ?>">
                    <span>CTO Bridge</span>
                </a>
            </li>

            <li>
                <a href="<?= base_url('kfwcorp') ?>">
                    <span>CHRO Bridge</span>
                </a>
            </li>

            <li>
                <a href="<?= base_url('about') ?>">
                    <span>About Us</span>
                </a>
            </li>

            <li>
                <a href="<?= base_url('team') ?>">
                    <span>CFO Team</span>
                </a>
            </li>

            <li>
                <a href="<?= base_url('clients') ?>">
                    <span>Clients</span>
                </a>
            </li>
            <li>
                <a class="collapsed" data-bs-toggle="collapse" href="#country-links" role="button">
                    <span><img src="<?= base_url('assets/images/india-flag-icon.svg') ?>" alt="India"
                            style="width: 20px; vertical-align: middle; transform: rotate(0deg) !important;">
                        India</span>
                    <img src="<?= base_url('assets/images/c-plus.svg') ?>" alt="C+ logo">
                </a>
                <div class="collapse" id="country-links">
                    <div class="drop-mega">
                        <ul>
                            <?php if (!empty($location)) {
                                foreach ($location as $row) {
                                    ?>
                                    <li>
                                        <a href="<?= base_url('location/') . $row['slug'] ?>" class="srv-link">
                                            <div class="ic">
                                                <img src="<?= base_url('assets/images/srv01.svg') ?>" alt="Arrow Image">
                                            </div>
                                            <span><?= $row['title'] ?></span>
                                        </a>
                                    </li>
                                <?php }
                            } ?>

                        </ul>
                    </div>
                </div>
            </li>

            <li>
                <a href="<?= base_url('usa') ?>" class="srv-link">
                    <div class="ic">
                        <img src="<?= base_url('assets/images/united-states-flag-icon.svg') ?>" alt="Icon">
                    </div>
                    <span> USA</span>
                </a>
            </li>
            <li>
                <a class="collapsed" data-bs-toggle="collapse" href="#resources-links" role="button">
                    <span>Resources</span>
                    <img src="<?= base_url('assets/images/c-plus.svg') ?>" alt="C+ logo">
                </a>
                <div class="collapse" id="resources-links">
                    <div class="drop-mega">
                        <ul>
                            <li>
                                <a href="<?= base_url('testimonials') ?>" class="srv-link">
                                    <div class="ic">
                                        <img src="<?= base_url('assets/images/srv01.svg') ?>" alt="Icon">
                                    </div>
                                    <span>Testimonials</span>
                                </a>
                            </li>
                            <li>
                                <a href="<?= base_url('blogs') ?>" class="srv-link">
                                    <div class="ic">
                                        <img src="<?= base_url('assets/images/srv01.svg') ?>" alt="Icon">
                                    </div>
                                    <span>Blogs</span>
                                </a>
                            </li>
                            <li>
                                <a href="<?= base_url('case-studies') ?>" class="srv-link">
                                    <div class="ic">
                                        <img src="<?= base_url('assets/images/srv01.svg') ?>" alt="Icon">
                                    </div>
                                    <span>Case Studies</span>
                                </a>
                            </li>
                            <li>
                                <a href="<?= base_url('news-media') ?>" class="srv-link">
                                    <div class="ic">
                                        <img src="<?= base_url('assets/images/srv01.svg') ?>" alt="Icon">
                                    </div>
                                    <span>News & Media</span>
                                </a>
                            </li>
                            <li>
                                <a href="<?= base_url('insights') ?>" class="srv-link">
                                    <div class="ic">
                                        <img src="<?= base_url('assets/images/srv01.svg') ?>" alt="Icon">
                                    </div>
                                    <span>Insights</span>
                                </a>
                            </li>
                            <li>
                                <a href="<?= base_url('gallery-media') ?>" class="srv-link">
                                    <div class="ic">
                                        <img src="<?= base_url('assets/images/srv01.svg') ?>" alt="Icon">
                                    </div>
                                    <span>Gallery</span>
                                </a>
                            </li>
                            <li>
                                <a href="<?= base_url('career') ?>" class="srv-link">
                                    <div class="ic">
                                        <img src="<?= base_url('assets/images/srv01.svg') ?>" alt="Icon">
                                    </div>
                                    <span>Careers</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </li>

            <li>
                <a href="<?= base_url('contact') ?>">
                    <span>Contact Us</span>
                </a>
            </li>
        </ul>
    </div>