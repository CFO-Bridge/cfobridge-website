<?php

$filename = 'https://ctobridge.com/data/staffs.json';

$jsonData = file_get_contents($filename);


$data_partners = json_decode($jsonData, true);

?>


<style>
    .inner-banner {
        position: relative;
        display: flex;
        align-items: center;
        justify-content: center;
        min-height: 400px;
        box-sizing: border-box;
        font-family: "Open Sans", sans-serif;
    }

    .inner-banner .elementor-background-overlay {
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background: rgb(1 66 147 / 0%);
        /* Semi-transparent overlay */
        z-index: 1;
    }

    .inner-banner .elementor-container {
        position: relative;
        z-index: 2;
        display: flex;
        flex-wrap: wrap;
        justify-content: space-between;
        align-items: center;
    }

    /* Column Styles */
    .elementor-column {
        flex: 1 1 33.3333%;
        padding: 15px;
        box-sizing: border-box;
    }

    .elementor-hidden-mobile {
        display: none;
        /* Default hidden on mobile */
    }

    @media (min-width: 768px) {
        .elementor-hidden-mobile {
            display: block;
            /* Show on tablets and larger screens */
        }
    }

    /* Heading Styles */
    .elementor-heading-title {
        font-size: 2.5rem;
        line-height: 1.2;
        margin: 0;
        text-align: left;
        color: #9EC9FF;
        padding: 20px;
    }

    #vert-line {
        border-left: 5px solid #fff;
    }

    .elementor-heading-title span {
        color: #fff;
    }

    /* Spacer with Vertical Line */
    .elementor-spacer {
        position: relative;
        height: 100%;
        display: flex;
        justify-content: center;
        align-items: center;
    }

    .elementor-spacer .vertical-line {
        background-color: #fff;
        width: 6px;
        height: 213px;
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
    }

    @media (max-width: 433px) {
        #vert-line {
            border-left: none;
            /* Remove the left border */
        }

    }
</style>

<section
    class="inner-banner  elementor-section elementor-top-section elementor-element elementor-element-8ce00f9 elementor-section-height-min-height elementor-section-boxed elementor-section-height-default elementor-section-items-middle"
    data-id="8ce00f9" data-element_type="section"
    data-settings="{&quot;background_background&quot;:&quot;classic&quot;}"
    style="background:url('https://kayoneconsulting.com/wp-content/uploads/2023/12/CFO-Services-Meaning.jpg') center/cover no-repeat;">

    <div class="elementor-background-overlay"></div>
    <div class="elementor-container elementor-column-gap-default">
        <div class="elementor-column elementor-col-33 elementor-top-column elementor-element elementor-element-ce38398"
            data-id="ce38398" data-element_type="column">
            <div class="elementor-widget-wrap elementor-element-populated">
                <div class="elementor-element elementor-element-c55d838 elementor-widget-mobile__width-initial elementor-widget elementor-widget-heading"
                    data-id="c55d838" data-element_type="widget" data-widget_type="heading.default">
                    <div class="elementor-widget-container">
                        <h1 class="elementor-heading-title elementor-size-default" style="color:#9EC9FF;">WE MAKE IT
                            SUPER <span style="color:#fff">FAST</span> </h1>
                    </div>
                </div>
            </div>
        </div>
        <div class="elementor-column elementor-col-33 elementor-top-column elementor-element elementor-element-98eef6a"
            data-id="98eef6a" data-element_type="column">
            <div class="elementor-widget-wrap elementor-element-populated">
                <div class="elementor-element elementor-element-06a9cec elementor-widget elementor-widget-heading"
                    data-id="06a9cec" data-element_type="widget" data-widget_type="heading.default">
                    <div class="elementor-widget-container">
                        <h2 class="elementor-heading-title elementor-size-default" style="color:#9EC9FF" id="vert-line">
                            <span style="color:#fff">F</span>RACTIONAL <br>
                            <span style="color:#fff">A</span>DOPTION<br>
                            <span style="color:#fff">S</span>EAMLESS<br>
                            <span style="color:#fff">T</span>ECHNOLOGY
                        </h2>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<style>
    @media (max-width: 768px) {
        .vertical-line {
            display: none;
        }

        .elementor-heading-title {
            font-size: 28px;
        }
    }
</style>

<!--
<header class="inner-banner sec" style="background:url('https://kayoneconsulting.com/wp-content/uploads/2023/12/CFO-Services-Meaning.jpg') center/cover no-repeat;">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-8 col-12">
                <div class="sec-head center white">
                    <h1>
                    CTO Bridge
                    </h1>
                </div>
            </div>
        </div>
    </div>
</header>-->

<style>
    .lg-head .logo-box {
        display: flex;
        align-items: center;
        justify-content: center;
        width: 60px;
        height: 60px;
        background: #f4f4f4;
        border: 2px solid #fff;
        border-radius: 10px;
        box-shadow: 2px 2px 6px rgba(0, 0, 0, 0.1);
        padding: 5px;
    }

    .lg-head .logo-box img {
        max-width: 100%;
        max-height: 100%;
    }

    .lg-head h2 {
        display: flex;
        align-items: center;
        justify-content: left;
        gap: 15px;
        /* Space between box and text */
    }

    .btn.style3{
        background-color: #014293;
        color: #fff;
    }
</style>

<section class="ind-sec bg-grey">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-5 col-12">
                <div class="ind-con py-5">
                    <div class="sec-head lg-head mb-30">
                        <h2>
                            <span class="logo-box"><a href="https://ctobridge.com/">
                                    <img src="https://cfobridge.com/uploads/images/cto-logo-c.png"
                                        alt="CTO Bridge Logo"></a>
                            </span>
                            CTO Bridge
                        </h2>
                    </div>
                    <p class="para">
                        CTO Bridge is a specialized initiative designed to provide top-tier technology leadership on
                        a fractional, part-time, or interim basis. As the pace of technological advancement
                        accelerates, organizations of all sizes face the challenge of integrating and managing
                        technology effectively. CTO Bridge bridges this gap by offering seasoned technology leaders
                        who can drive your tech strategy and implementation without the overhead of full-time
                        executive costs.
                    </p>
                    <a href="https://ctobridge.com/" target="_blank" class=" btn style3" style="margin-top:20px;"
                            data-faitracker-click-bind="true">Read More</a>
                </div>
            </div>
            <div class="col-lg-6 offset-lg-1 col-12">
                <div class="ind-img">
                    <img src="https://cfobridge.com/assets/images/cto_why_img.webp" class="img-full"
                        alt="<?= $pserv['alt_text_about'] ?>">
                </div>
            </div>
        </div>
    </div>
</section>
<section class="sec blue-bg">
    <div class="container">
        <div class="row">
            <div class="col-lg-5 col-12">
                <div class="sec-head white">
                    <h2>
                        Who Are We? </h2>
                </div>
                <p class="para white">
                    CTO Bridge brings the expertise of seasoned Chief Technology Officers (CTOs), Chief
                    Information Officers (CIOs), and Chief Information Security Officers (CISOs) in a flexible
                    manner. Our team consists of technology leaders with extensive experience across diverse
                    fields, prepared to steer your business through its digital transformation journey. </p>
                <div class="acc-img">
                    <img src="https://ctobridge.com/assets/images/page/banner/portfolio-3-3.jpg" class="img-full"
                        alt="CTO Bridge">
                </div>
            </div>
            <div class="col-lg-6 offset-lg-1 col-12">
                <ul class="point-list style-65 white">
                    <li>

                        Architecture and Technology </li>
                    <li>

                        Products and Solutions </li>
                    <li>

                        Performance and Digital Experience</li>
                    <li>

                        Strategy, Innovation, and Business Disruption </li>
                    <li>

                        Modern Applications and Automation </li>
                    <li>Efficiency and Business Visibility</li>
                </ul>
            </div>
        </div>
    </div>
</section>
<section class="sec service-al">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="sec-head center">
                    <h2>Services provided by the CTO Bridge.</h2>
                </div>
            </div>
        </div>
        <div class="row row-gap-25 mt-50">
            <div class="col-lg-4 col-md-6 col-12">
                <div class="service-card-one">
                    <div class="row">
                        <div class="col-auto d-flex justify-content-center align-items-center  service_card_icon">
                            <img src="https://cfobridge.com/uploads/images/M&amp;A Integration Expertise.png"
                                width="40px" alt="M & A Logo">
                        </div>
                        <div class="col service_card_content">
                            <div class="service_card_title">
                                <h3>Specialized Expertise on Tap</h3>
                                <hr class="service_card_title_underline">
                            </div>
                            <div class="service_card_desc">
                                <p>Access to a diverse pool of skills and experiences from leaders who have worked with
                                    global and Indian giants, disruptors, and innovators. Extended technology ecosystem
                                    of vendors accessible to SMEs.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-6 col-12">
                <div class="service-card-one">
                    <div class="row">
                        <div class="col-auto d-flex justify-content-center align-items-center  service_card_icon">
                            <img src="https://cfobridge.com/uploads/images/Special Initiative Assistance.png"
                                width="40px" alt="Assistance logo">
                        </div>
                        <div class="col service_card_content">
                            <div class="service_card_title">
                                <h3>Change Management & Risk Mitigation</h3>
                                <hr class="service_card_title_underline">
                            </div>
                            <div class="service_card_desc">
                                <p>Our partners are well-versed in risk management, helping SMEs proactively address
                                    potential threats and vulnerabilities associated with technology adoption.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-12">
                <div class="service-card-one">
                    <div class="row">
                        <div class="col-auto d-flex justify-content-center align-items-center  service_card_icon">
                            <img src="https://cfobridge.com/uploads/images/New Acquisition Support.png" width="40px"
                                alt="change management logo">
                        </div>
                        <div class="col service_card_content">
                            <div class="service_card_title">
                                <h3>Focus on Core Business</h3>
                                <hr class="service_card_title_underline">
                            </div>
                            <div class="service_card_desc">
                                <p>By outsourcing technology leadership to us, SMEs can redirect internal resources and
                                    leadership attention towards core business activities, fostering overall business
                                    growth.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-12">
                <div class="service-card-one">
                    <div class="row">
                        <div class="col-auto d-flex justify-content-center align-items-center  service_card_icon">
                            <img src="https://cfobridge.com/uploads/images/Stop-Gap Role.png" width="40px" alt="core business icon">
                        </div>
                        <div class="col service_card_content">
                            <div class="service_card_title">
                                <h3>Aligning Technology with Business Goals</h3>
                                <hr class="service_card_title_underline">
                            </div>
                            <div class="service_card_desc">
                                <p>We bring a strategic vision to help SMEs align technology initiatives with overall
                                    business goals, providing a roadmap for technology adoption that supports growth and
                                    innovation.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-12">
                <div class="service-card-one">
                    <div class="row">
                        <div class="col-auto d-flex justify-content-center align-items-center  service_card_icon">
                            <img src="https://cfobridge.com/uploads/images/Navigating New Business Operations.png"
                                width="40px" alt="business icon">
                        </div>
                        <div class="col service_card_content">
                            <div class="service_card_title">
                                <h3>Outcome/Impact Focused</h3>
                                <hr class="service_card_title_underline">
                            </div>
                            <div class="service_card_desc">
                                <p>CTO Bridge seamlessly integrates its deliverables and outputs to measurable business
                                    impact and outcomes.</p>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
            <div class="col-lg-4 col-md-6 col-12">
                <div class="service-card-one">
                    <div class="row">
                        <div class="col-auto d-flex justify-content-center align-items-center  service_card_icon">
                            <img src="https://cfobridge.com/uploads/images/Strategic%20Financial%20Planning.png"
                                width="40px" alt="planning icon">
                        </div>
                        <div class="col service_card_content">
                            <div class="service_card_title">
                                <h3>Cost-Effective</h3>
                                <hr class="service_card_title_underline">
                            </div>
                            <div class="service_card_desc">
                                <p>Fractional model ensures a cost-effective and affordable alternative to hiring a
                                    full-time
                                    executive.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<script>
    function equalizeHeight() {
        let maxHeight = 0;
        let elements = document.querySelectorAll('.service-al  .service_card_content');

        elements.forEach(el => {
            el.style.height = 'auto'; // Reset height first
            maxHeight = Math.max(maxHeight, el.offsetHeight);
        });

        elements.forEach(el => el.style.height = maxHeight + 'px');
        elements_b.forEach(el => el.style.height = maxHeight + 'px');
    }

    // Run on page load and resize
    window.addEventListener('load', equalizeHeight);
    window.addEventListener('resize', equalizeHeight);
</script>

<section class="sec uni-sec light-bg">
    <img src="https://cfobridge.com/assets/images/path.svg" alt="background icon">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="sec-head center">
                    <h2>
                        Why CTO Bridge?</h2>
                </div>
            </div>
            <div class="col-12">
                <div class="uni-container">
                    <div class="uni-card">
                        <img src="https://cfobridge.com/uploads/images/asset-231-28.png.webp" alt="why choose icon">
                        <div class="det">
                            <h3>Fast Track Access to World-Class Talent and Expertise</h3>
                            <p>
                                Immediate access to experienced technology leaders who can provide guidance and
                                leadership. </p>
                        </div>
                    </div>
                    <div class="uni-card">
                        <img src="https://cfobridge.com/uploads/images/asset-238-28.png.webp" alt="talent icon">
                        <div class="det">
                            <h3>Flexible and Affordable Model</h3>
                            <p>
                                Pay per usage, ensuring you only pay for the expertise you need without the full-time
                                costs.</p>
                        </div>
                    </div>
                    <div class="uni-card">
                        <img src="https://cfobridge.com/uploads/images/asset-234-28.png.webp" alt="modal icon">
                        <div class="det">
                            <h3>Strategic Technology Planning</h3>
                            <p>
                                Aligning technology initiatives with your business goals, growth, and challenges.</p>
                        </div>
                    </div>
                    <div class="uni-card">
                        <img src="https://cfobridge.com/uploads/images/asset-241-281.png.webp" alt="tech plan icon">
                        <div class="det">
                            <h3>Support for Transformation and Innovation</h3>
                            <p>Expert guidance in navigating digital transformation and fostering innovation to ensure
                                scalability and business growth.</p>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</section>

<div class="team-sec sec blue-gr">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-8 col-12">
                <div class="sec-head center white">
                    <h2>
                        Pillars of <span>CTO Bridge</span>
                    </h2>
                    <p>
                        CFO Bridge has an experienced team of Industry CFOs and Consultants
                    </p>
                </div>
            </div>
            <div class="col-12">
                <div class="team-swiper swiper mb-30 swiper-initialized swiper-horizontal swiper-pointer-events">
                    <div class="swiper-wrapper" id="swiper-wrapper-d2b091d97988c31f" aria-live="off"
                        style="transform: translate3d(-1670.67px, 0px, 0px); transition-duration: 0ms;">
                        <?php foreach ($data_partners['partners'] as $partner): ?>
                        <div class="swiper-slide" role="group" aria-label="1 / 6" style="width: 218.667px; margin-right: 20px;" data-swiper-slide-index="0">
                            <a href="https://ctobridge.com/staff/<?= $partner['slug']; ?>/" target="_blank" class="team-card style-2" data-faitracker-click-bind="true">
                                <div class="over">
                                    <span></span>
                                    <div class="con">
                                        <span class="tit">
                                            <h3><?= htmlspecialchars($partner['name']); ?></h3>
                                        </span>
                                        <p><?= htmlspecialchars($partner['department']); ?></p>
                                        <span class="linked-in">
                                            <img src="https://cfobridge.com/assets/images/linkedin.svg" alt="Linkedin">
                                        </span>
                                    </div>
                                </div>
                                <div class="m-wrap">
                                    <img src="https://ctobridge.com/assets/images/staffs/<?= htmlspecialchars($partner['img']); ?>" alt="Image of <?= htmlspecialchars($partner['name']); ?>">
                                </div>
                            </a>
                        </div>
                        <?php endforeach; ?>
                    </div>
                    <span class="swiper-notification" aria-live="assertive" aria-atomic="true"></span>
                </div>
            </div>
        </div>
    </div>
</div>


<section class="srv-sec sec">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="sec-head center">
                    <h2>
                        Our <span>Solutions</span>
                    </h2>
                    <p class="para mt-20">Our prime focus is to enable small-medium organizations to avail premium
                        technology skills at affordable cost models by leveraging fractional availability of our CTO
                        partners. This comes in as a shot-in-the-arm in their endeavour to tap the array of strengths
                        offered by effective technological adoption.
                        CTO Bridge has partners with wide ranging technological expertise and proven leadership which
                        empowers us to offer fractional CTO, CIO or CISO to our clients based on their business needs.
                    </p>
                </div>
            </div>

        </div>
        <div class="row justify-content-center srv-grid mt-50">

            <div class="col-lg-3 col-md-4 col-12">
                <div class="srv-card">
                    <div>
                        <h3 class="mb-0">
                            Fractional CTO/CIO
                        </h3>
                        <p class="para mt-20">The current mix of applications running (bespoke, COTS, SaaS) and their
                            ability to meet the needs of the organization in terms of automation and associated
                            productivity gains, meeting customer expectations, competitive strength....</p>
                    </div>
                    <a href="https://ctobridge.com/solutions/fractional-cto-cio/" target="_blank"
                        class="main-btn link-blue-btn" data-faitracker-click-bind="true">
                        <span>Read More</span>
                        <img src="assets/images/blue-arrow.svg" alt="Blue Arrow Icon">
                    </a>
                </div>
            </div>

            <div class="col-lg-3 col-md-4 col-12">
                <div class="srv-card">
                    <div>
                        <h3 class="mb-0">
                            Fractional CIO (Cloud & Infra)
                        </h3>
                        <p class="para mt-20">At the foundation of digital innovation lies the cloud, providing
                            enterprises with boundless opportunities for growth and ingenuity. Embracing a Smart Cloud
                            strategy is essential for enterprises aiming to scale their business, as it unlocks the
                            advantages of enhanced....</p>
                    </div>
                    <a href="https://ctobridge.com/solutions/fractional-cio-cloud-infra/" target="_blank"
                        class="main-btn link-blue-btn" data-faitracker-click-bind="true">
                        <span>Read More</span>
                        <img src="assets/images/blue-arrow.svg" alt="Blue Arrow Icon">
                    </a>
                </div>
            </div>

            <div class="col-lg-3 col-md-4 col-12">
                <div class="srv-card">
                    <div>
                        <h3 class="mb-0">
                            Fractional CISO
                        </h3>
                        <p class="para mt-20">Considering the exponential increase in the number of the Infosec threats
                            and the potential crippling effect it can have on a business, it has become critical to
                            evolve the security policy and facilitate the integration of the same into the business
                            strategy, process and culture....</p>
                    </div>
                    <a href="https://ctobridge.com/solutions/fractional-ciso/" target="_blank"
                        class="main-btn link-blue-btn" data-faitracker-click-bind="true">
                        <span>Read More</span>
                        <img src="assets/images/blue-arrow.svg" alt="Blue Arrow Icon">
                    </a>
                </div>
            </div>

            <div class="col-lg-3 col-md-4 col-12">
                <div class="srv-card">
                    <div>
                        <h3 class="mb-0">
                            Fractional Special Services
                        </h3>
                        <p class="para mt-20">At the foundation of digital Businesses come across situations where the
                            technological requirements and expertise are composite i.e. not exclusively applications,
                            cloud/infrastructure or cybersecurity. Also, such requirements may have significant
                            components of program or project management....</p>
                    </div>
                    <a href="https://ctobridge.com/solutions/fractional-special-services/" target="_blank"
                        class="main-btn link-blue-btn" data-faitracker-click-bind="true">
                        <span>Read More</span>
                        <img src="assets/images/blue-arrow.svg" alt="Blue Arrow Icon">
                    </a>
                </div>
            </div>

        </div>
    </div>
    </div>
</section>

<section class="sec ct-sec blue-gr">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-7 col-12">
                <div class="sec-head center white">
                    <h2 data-aos="fade-up" data-aos-once="true" data-aos-duration="1000">
                        Ready to elevate your <br><span>technology department to a cosmic shift?</span>

                    </h2>
                    <p class="para" data-aos-once="true" data-aos="fade-up" data-aos-duration="1000"
                        data-aos-delay="200">
                        Let's talk! Book your free consultation today
                    </p>
                </div>
                <a href="https://ctobridge.com" target="_blank" class="main-btn with-icon center" data-aos="fade-up"
                    data-aos-duration="1000" data-aos-once="true" data-aos-delay="300">
                    <span> Get In Touch</span>
                    <img data-src="<?= base_url() ?>assets/images/blue-arrow.svg" alt="Blue Arrow Icon">
                </a>
            </div>
        </div>
    </div>
</section>
<footer class="main-footer">
    <div class="container">
        <div class="row">
            <div class="col-lg-4 col-12">
                <a href="javascript:void(0)" class="ft-logo" data-aos-once="true" data-aos="fade-left"
                    data-aos-duration="1000">
                    <img data-src="<?= base_url() ?>assets/images/logo.png" alt="Logo">
                </a>
                <!--<h3 class="ft-head" data-aos="fade-left" data-aos-duration="1000"  data-aos-delay="100">-->
                <!--    SUBSCRIBE-->
                <!--</h3>-->
                <p class="para" data-aos-once="true" data-aos="fade-left" data-aos-duration="1000" data-aos-delay="200">
                    Stay current with our latest insights
                </p>
                <div class="sub-container" data-aos-once="true" data-aos="fade-up" data-aos-duration="1000"
                    data-aos-delay="300">
                    <form class=" form" data-aos-once="true" data-form="subscribeformsubmit">
                        <div class="sbs-form">
                            <div class="sub-wrap">
                                <div>
                                    <input type="text" placeholder="Email Address" name="email">
                                </div>
                                <button type="submit" class="main-btn">
                                    <span>SUBSCRIBE</span>
                                </button>
                            </div>
                        </div>
                        <div class="sbs-msg"></div>
                    </form>
                </div>
                <ul class="ft-soc">
                    <li data-aos="fade-up" data-aos-once="true" data-aos-duration="1000" data-aos-delay="600">
                        <a href="https://www.linkedin.com/company/cfo-bridge/" target="_blank">
                            <img data-src="<?= base_url() ?>assets/images/linked.svg" alt="Linkedin">
                        </a>
                    </li>
                    <li data-aos="fade-up" data-aos-once="true" data-aos-duration="1000" data-aos-delay="400">
                        <a href="https://youtube.com/@cfobridge2654" target="_blank">
                            <img data-src="<?= base_url() ?>assets/images/youtube.svg" alt="youtube icon">
                        </a>
                    </li>
                    <li data-aos="fade-up" data-aos-once="true" data-aos-duration="1000" data-aos-delay="500">
                        <a href="https://www.instagram.com/cfo.bridge/" target="_blank">
                            <img data-src="<?= base_url() ?>assets/images/insta.svg" alt="instagram icon">
                        </a>
                    </li>
                </ul>
            </div>
            <div class="col-lg-2 offset-lg-1 col-12">
                <h3 class="ft-head" data-aos-once="true" data-aos="fade-left" data-aos-duration="1000"
                    data-aos-delay="400">
                    Quick links
                </h3>
                <div class="row">
                    <div class="col-lg-6 col-12">
                        <ul class="ft-list" data-aos-once="true" data-aos="fade-left" data-aos-duration="1000"
                            data-aos-delay="500">
                            <li>
                                <a href="<?= base_url('services') ?>">
                                    Services
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
                            <li>
                                <a href="<?= base_url('clients') ?>">
                                    Clients
                                </a>
                            </li>
                            <li>
                                <a href="<?= base_url('testimonials') ?>">
                                    Testimonials
                                </a>
                            </li>

                            <li>
                                <a href="<?= base_url('career') ?>">
                                    Careers
                                </a>
                            </li>
                            <li>
                                <a href="<?= base_url('contact') ?>">
                                    Contact Us
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-lg-2  col-12">
                <h3 class="ft-head" data-aos="fade-left" data-aos-duration="1000" data-aos-delay="600">
                    Locations
                </h3>
                <ul class="ft-list" data-aos-once="true" data-aos="fade-left" data-aos-duration="1000"
                    data-aos-delay="500">
                    <li>
                        <a href="<?= base_url('location/cfo-services-in-bangalore') ?>">
                            Bangalore
                        </a>
                    </li>
                    <li>
                        <a href="<?= base_url('location/cfo-services-in-chennai') ?>">
                            Chennai
                        </a>
                    </li>
                    <li>
                        <a href="<?= base_url('location/cfo-services-in-mumbai') ?>">
                            Mumbai
                        </a>
                    </li>
                    <li>
                        <a href="<?= base_url('location/cfo-services-in-hyderabad') ?>">
                            Hyderabad
                        </a>
                    </li>
                    <li>
                        <a href="<?= base_url('location/cfo-services-in-delhi') ?>">
                            Delhi
                        </a>
                    </li>
                </ul>
            </div>
            <!--<div class="col-lg-2  col-12">
                <h3 class="ft-head" data-aos="fade-left" data-aos-duration="1000" data-aos-delay="600">
                    Services
                </h3>
                <ul class="ft-list" data-aos="fade-left" data-aos-duration="1000" data-aos-delay="700">
                <?php $servicehomecard = $this->home_model->getservicehomecard(); ?>
                <?php if (!empty($servicehomecard)) {
                    foreach ($servicehomecard as $row) {
                        ?>
                                    <li>
                                        <a href="<?= base_url('service/') . $row['slug'] ?>" class="srv-link">
                                            
                                        <?= $row['title_home_card'] ?>
                                        </a>
                                    </li>
                                    <?php }
                }
                ?>
                </ul>
            </div> -->
            <div class="col-lg-3 col-12">
                <h3 class="ft-head" data-aos-once="true" data-aos="fade-left" data-aos-duration="1000"
                    data-aos-delay="800">
                    Contact Details
                </h3>
                <!-- <ul class="ft-list">
                    <li>
                        <a href="javascript:void(0)">
                            Local langage information
                        </a>
                    </li>
                    <li>
                        <a href="javascript:void(0)">
                            Accessibility statement
                        </a>
                    </li>
                </ul> -->
                <ul class="con-det-list" data-aos-once="true" data-aos="fade-left" data-aos-duration="1000"
                    data-aos-delay="900">
                    <!--<li>-->
                    <!--    <a href="tel:917200425025">-->
                    <!--        <img src="assets/images/ph.svg" alt="">-->
                    <!--        <span>+91 7200425025</span>-->
                    <!--    </a>-->
                    <!--</li>-->
                    <li>
                        <a href="tel:918422853313">
                            <img data-src="<?= base_url() ?>assets/images/ph.svg" alt="phone icon">
                            <span>+91 84228 53313</span>
                        </a>
                    </li>
                    <li>
                        <a href="mailto:vidya@cfobridge.com">
                            <img data-src="<?= base_url() ?>assets/images/ml.svg" alt="mail icon">
                            <span>vidya@cfobridge.com</span>
                        </a>
                    </li>
                    <li>
                        <a href="javascript:void(0)">
                            <img data-src="<?= base_url() ?>assets/images/loc.svg" alt="location">
                            <span>
                                <!-- 91 Spring Board, Godrej & Boyce, Gate No 2, Plant No, 6, Lal Bahadur Shastri Rd, opposite Vikhroli, Vikhroli West, Mumbai, Maharashtra 400079 -->
                                AWFIS, 10th Floor, R-city Mall, LBS Marg, Ghatkopar West, Mumbai, 400086
                            </span>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
        <div class="ft-bottom">
            <p>
                © CFO Bridge Pvt. Ltd | <a target="_blank" href="https://dimerse.com">Code & Design Credits</a>
            </p>
            <ul class="term-list">
                <!--<li>-->
                <!--    <a href="javascript:void(0)">-->
                <!--        terms & Conditions-->
                <!--    </a>-->
                <!--</li>-->
                <li>
                    <a href="<?= base_url('privacy-policy') ?>">
                        Privacy Policy
                    </a>
                </li>
                <!--<li>-->
                <!--    <a href="javascript:void(0)">-->
                <!--        Disclaimer-->
                <!--    </a>-->
                <!--</li>-->
            </ul>
        </div>
    </div>
</footer>


<!-- Modal -->
<div class="modal fade c-modal" id="download-brochure" tabindex="-1" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-body">
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                <div class="sec-head mb-30">
                    <h2>
                        <span>Contact Us</span>
                    </h2>
                </div>
                <form data-form="insertcontact" method="post" class="contact-form form">
                    <div class="row">
                        <div class="col-lg-6 col-12">
                            <div class="form-group">
                                <label for="" class="label-text">Your Name <span>*</span></label>
                                <div class="inp-grp">
                                    <input type="text" name="name">
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-12">
                            <div class="form-group">
                                <label fosr="" class="label-text">Business Email <span>*</span></label>
                                <div class="inp-grp">
                                    <input type="email" name="email">
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-12 col-12">
                            <div class="form-group">
                                <label fosr="" class="label-text">Mobile <span>*</span></label>
                                <div class="inp-grp">
                                    <!--<input type="text" name="phone">-->
                                    <input type="text" id="mobile_code" class="form-control" placeholder="Phone Number"
                                        name="phone">
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-12 col-12">
                            <div class="form-group">
                                <label fosr="" class="label-text">Organization</label>
                                <div class="inp-grp">
                                    <input type="text" name="company">
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-12 col-12">
                            <!--  <div class="form-group">
                        <label fosr="" class="label-text">Message</label>
                        <div class="inp-grp">
                            <textarea name="message" id="" rows="3"></textarea>
                        </div>
                    </div> -->
                            <input type="hidden" name="download" value="1">
                            <input type="hidden" name="url"
                                value="<?= (empty($_SERVER['HTTPS']) ? 'http' : 'https') . "://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]" ?>" />
                            <button type="submit" class="main-btn with-icon mt-10">
                                <span>Download Now</span>
                                <img src="assets/images/blue-arrow.svg" alt="Blue Arrow Icon">
                            </button>
                        </div>
                    </div>
                </form>
            </div>

        </div>
    </div>
</div>
<a href="https://ctobridge.com/contact-us/" class=" main-btn with-icon sf-btn dw-btn">
    <span>CONTACT US</span>
</a>
<!--<a href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#download-brochure" id="download-brochure-btn" class=" main-btn with-icon sf-btn dw-btn">
    <span>Download The Brochure</span>
</a>-->

<!-- <style>
    .float-btn{
        display: none;
    }
    .main-footer .container > .row{
        display: none !important;
    }
    .ft-bottom{
        margin-top: 0px !important;
    }
</style> -->

<!-- validate cdn -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-steps/1.1.0/jquery.steps.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.5/jquery.validate.min.js"></script>


<!-- bootstrap -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.2/js/bootstrap.bundle.min.js"></script>
<!-- swiper -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/Swiper/8.4.4/swiper-bundle.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.js"></script>
<script src="<?= base_url('assets/js/form.js') ?>"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.13/js/intlTelInput-jquery.min.js"
    defer></script>
<script src="<?= base_url() ?>assets/js/step.js"></script>
<!-- Zipme widget begin 
<link href="https://scripts.zipteams.com/v2.0/index.css" rel="stylesheet" />
<script type="text/javascript" id="zt-script-loader" defer src="https://scripts.zipteams.com/v2.0/index.js"></script>
<script type="text/javascript">


  window.onload = function() {
    setTimeout(() => {
        window.ZipteamsWidget.InitWidgetButton({
    url: "https://zipme.at/cfobridge/instant",
    color: "#31667f",
    calloutText: "Let's meet and solve your need now!",
    position: "bottomright",
    ctaText: "Meet Now"
  })
    }, 5000);
    };
</script>
 Zipme widget end -->

<!-- custom js -->
<script type="text/javascript">
    _linkedin_partner_id = "5591585";
    window._linkedin_data_partner_ids = window._linkedin_data_partner_ids || [];
    window._linkedin_data_partner_ids.push(_linkedin_partner_id);
</script>
<script type="text/javascript">
    (function (l) {
        if (!l) {
            window.lintrk = function (a, b) { window.lintrk.q.push([a, b]) };
            window.lintrk.q = []
        }
        var s = document.getElementsByTagName("script")[0];
        var b = document.createElement("script");
        b.type = "text/javascript"; b.async = true;
        b.src = "https://snap.licdn.com/li.lms-analytics/insight.min.js";
        s.parentNode.insertBefore(b, s);
    })(window.lintrk);
</script>

<script>

    $(document).ready(function () {
        // Function to check if an element is in the viewport
        function isElementInViewport(el) {
            var rect = el.getBoundingClientRect();
            return (
                rect.top >= 0 &&
                rect.left >= 0 &&
                rect.bottom <= (window.innerHeight || document.documentElement.clientHeight) &&
                rect.right <= (window.innerWidth || document.documentElement.clientWidth)
            );
        }

        // Function to load the image
        function loadImages() {
            $('img[data-src]').each(function () {
                if (isElementInViewport(this)) {
                    $(this).attr('src', $(this).data('src'));
                    $(this).removeAttr('data-src');
                }
            });
        }

        // Load images on initial page load
        loadImages();

        // Load images on scroll or resize
        $(window).on('scroll resize', function () {
            loadImages();
        });
    });
    var pageLink = window.location.href;
    var pageTitle = String(document.title).replace(/\&/g, '%26');

    function fbs_click() {
        window.open(`http://www.facebook.com/sharer.php?u=${pageLink}&quote=${pageTitle}`, 'sharer',
            'toolbar=0,status=0,width=626,height=436');
        return false;
    }

    function twi_click() {
        window.open(`https://twitter.com/intent/tweet?text=${pageTitle}&url=${pageLink}`, 'sharer',
            'toolbar=0,status=0,width=626,height=436');
        return false;
    }

    function wht_click() {
        window.open(`https://wa.me/918928493972?text=Hi`);
        return false;
    }
    function link_click() {
        window.open(`https://www.linkedin.com/sharing/share-offsite/?url=${pageLink}`, 'sharer',
            'toolbar=0,status=0,width=626,height=436');
        return false;
    }
    $('.ca-btn').click(function () {
        $('.ca-inp').val($(this).attr('data-name'));
    })

    $(document).ready(function () {
        $("#mobile_code").intlTelInput({
            initialCountry: "in",
            separateDialCode: true,
            // utilsScript: "https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/11.0.4/js/utils.js"
        });
        $(".phone-input-tel").each(function () {
            $(this).intlTelInput({
                initialCountry: "in",
                separateDialCode: true,
            });
        })
    })

    AOS.init();
    $('.menu-btn').click(function () {
        $('.mobile-nav').addClass('active');
    })
    $('.menu-close').click(function () {
        $('.mobile-nav').removeClass('active');
    })
    var bnswiper = new Swiper(".banner-swiper", {
        loop: false,
        slidesPerView: 1,
        lazy: true,
        autoplay: {
            delay: 5000
        },
        spaceBetween: 0,
        pagination: {
            el: ".swiper-pagination",
            clickable: true
        },
    });
    var bnswiper = new Swiper(".tes-swiper", {
        loop: false,
        slidesPerView: 1,
        autoplay: {
            delay: 5000
        },
        spaceBetween: 0,
        pagination: {
            el: ".swiper-pagination",
            clickable: true
        },
    });
    var bnswiper = new Swiper(".cs-swiper", {
        loop: false,
        lazy: true,
        slidesPerView: 4,
        autoplay: {
            delay: 5000
        },
        spaceBetween: 0,
        pagination: {
            el: ".swiper-pagination",
            clickable: true
        },
        breakpoints: {
            0: {
                slidesPerView: 1,
                spaceBetween: 15,
            },
            640: {
                slidesPerView: 2,
                spaceBetween: 15,
            },
            768: {
                slidesPerView: 3,
                spaceBetween: 20,
            },
            1024: {
                slidesPerView: 4,
                spaceBetween: 20,
            },
        },
    });
    var dswiper = new Swiper(".d-swiper", {
        loop: false,
        slidesPerView: 1,
        autoplay: {
            delay: 5000
        },
        spaceBetween: 0,
        pagination: {
            el: ".swiper-pagination",
            clickable: true
        },
        breakpoints: {
            0: {
                slidesPerView: 1,
                spaceBetween: 15,
            },
            640: {
                slidesPerView: 2,
                spaceBetween: 15,
            },
            768: {
                slidesPerView: 4,
                spaceBetween: 20,
            },
            1024: {
                slidesPerView: 4,
                spaceBetween: 20,
            },
        },
    });
    bnswiper.on('slideChange', function (e) {
        var con = $(this.slides[this.realIndex]).find('.banner-content h1').hasClass('white')
        if (con) {
            $('.banner-swiper .swiper-pagination').addClass('white')
        } else {
            $('.banner-swiper .swiper-pagination').removeClass('white')
        }
    });
    var swiper = new Swiper(".lg-swiper", {
        loop: true,
        autoplay: {
            delay: 1500
        },
        breakpoints: {
            0: {
                slidesPerView: 2,
                spaceBetween: 15,
            },
            640: {
                slidesPerView: 2,
                spaceBetween: 15,
            },
            768: {
                slidesPerView: 4,
                spaceBetween: 20,
            },
            1024: {
                slidesPerView: 5,
                spaceBetween: 40,
            },
        },
    });
    var swiper = new Swiper(".cc-swiper", {
        loop: true,
        centeredSlides: true,
        autoplay: {
            delay: 1500
        },
        breakpoints: {
            0: {
                slidesPerView: 1,
                spaceBetween: 10,
            },
            640: {
                slidesPerView: 1.5,
                spaceBetween: 10,
            },
            768: {
                slidesPerView: 2.5,
                spaceBetween: 15,
            },
            1024: {
                slidesPerView: 3.5,
                spaceBetween: 20,
            },
        },
    });
    var swiper = new Swiper(".test-swiper", {
        loop: false,
        breakpoints: {
            0: {
                slidesPerView: 1,
                spaceBetween: 15,
            },
            640: {
                slidesPerView: 1,
                spaceBetween: 15,
            },
            768: {
                slidesPerView: 3,
                spaceBetween: 20,
            },
            1024: {
                slidesPerView: 4,
                spaceBetween: 40,
            },
        },
    });
    var swiper = new Swiper(".ind-swiper", {
        loop: false,
        breakpoints: {
            0: {
                slidesPerView: 1.3,
                spaceBetween: 5,
            },
            640: {
                slidesPerView: 3,
                spaceBetween: 15,
            },
            768: {
                slidesPerView: 4,
                spaceBetween: 20,
            },
            1024: {
                slidesPerView: 4,
                spaceBetween: 20,
            },
        },
    });
    var swiper = new Swiper(".team-swiper", {
        loop: true,
        autoplay: {
            delay: 1500,
        },
        breakpoints: {
            0: {
                slidesPerView: 1,
                spaceBetween: 15,
            },
            640: {
                slidesPerView: 2,
                spaceBetween: 15,
            },
            768: {
                slidesPerView: 3,
                spaceBetween: 20,
            },
            1024: {
                slidesPerView: 4,
                spaceBetween: 40,
            },
        },
    });
    var swiper = new Swiper(".team2-swiper", {
        loop: false,
        autoplay: {
            delay: 1500,
        },
        breakpoints: {
            0: {
                slidesPerView: 1,
                spaceBetween: 15,
            },
            640: {
                slidesPerView: 2,
                spaceBetween: 15,
            },
            768: {
                slidesPerView: 4,
                spaceBetween: 20,
            },
            1024: {
                slidesPerView: 5,
                spaceBetween: 40,
            },
        },
    });
    var swiper = new Swiper(".test-l-swiper", {
        loop: false,
        autoplay: {
            delay: 1500,
        },
        breakpoints: {
            0: {
                slidesPerView: 1,
                spaceBetween: 15,
            },
            640: {
                slidesPerView: 2,
                spaceBetween: 15,
            },
            768: {
                slidesPerView: 3,
                spaceBetween: 20,
            },
            1024: {
                slidesPerView: 3,
                spaceBetween: 30,
            },
        },
    });
    var swiper = new Swiper(".bl-swiper", {
        loop: false,
        breakpoints: {
            0: {
                slidesPerView: 1,
                spaceBetween: 15,
            },
            640: {
                slidesPerView: 2,
                spaceBetween: 15,
            },
            768: {
                slidesPerView: 3,
                spaceBetween: 20,
            },
            1024: {
                slidesPerView: 4,
                spaceBetween: 30,
            },
        },
    });

    var tooltipTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="tooltip"]'))
    var tooltipList = tooltipTriggerList.map(function (tooltipTriggerEl) {
        return new bootstrap.Tooltip(tooltipTriggerEl)
    })

    $('#res').change(function (e) {
        var pDiv = $(this).parent();
        var file = e.target.files[0].name;
        pDiv.find('label span').text(file);
        pDiv.find('label span').addClass('active');
        pDiv.find('button').css('display', 'block');
    })
    $('#d-res').click(function (e) {
        var pDiv = $(this).parent().parent();
        //console.log(pDiv, "ssx");
        pDiv.find('input').val('');
        pDiv.find('label span').text('Upload Resume Here');
        pDiv.find('label span').removeClass('active');
        pDiv.find('button').css('display', 'none');
    });

    // counter
    const stats = document.querySelectorAll(".counter");
    if ($('.counter').length) {
        stats.forEach(stat => {
            const patt = /(\D+)?(\d+)(\D+)?(\d+)?(\D+)?/;
            const time = 1000;
            // let result = [...patt.exec(stat.textContent)];
            let result = stat.textContent.split('');
            let fresh = true;
            let ticks;
            // result.shift();
            // result = result.filter(res => res != null);
            while (stat.firstChild) {
                stat.removeChild(stat.firstChild);
            }
            for (let res of result) {


                // } else {
                for (let i = 0; i < res.length; i++) {
                    if (isNaN(res[i]) || res[i] == " ") {
                        stat.insertAdjacentHTML("beforeend", `<span>${res}</span>`);
                    } else {

                        stat.insertAdjacentHTML(
                            "beforeend",
                            `<span data-value="${res[i]}">
                        <span>0</span>
                        ${Array(parseInt(res[i]) + 1)
                                .join(0)
                                .split(0)
                                .map(
                                    (x, j) => `
                            <span>${j}</span>
                        `
                                )
                                .join("")}
                    </span>`
                        );
                    }
                }
                // }
            }

            ticks = [...stat.querySelectorAll("span[data-value]")];

            let activate = () => {
                let top = stat.getBoundingClientRect().top;
                let offset = window.innerHeight * 0.8;

                setTimeout(() => {
                    fresh = false;
                }, time);

                if (top < offset) {
                    setTimeout(() => {
                        for (let tick of ticks) {
                            let dist = parseInt(tick.getAttribute("data-value")) + 1;
                            tick.style.transform = `translateY(-${dist * 100}%)`;
                        }
                    }, fresh ? time : 0);
                    window.removeEventListener("scroll", activate);
                }
            };
            window.addEventListener("scroll", activate);
            activate();
        });
    }

    /* $('.vid-play-btn').click(function(){
        var vid = $(this).data('video');
        var temp = `<video autoplay controls src="${vid}" class="test-vid"></video>`;
        $(this).parent().append(temp)
        $(this).fadeOut('slow', function(){
            $(this).remove()
        })
        stopOtherVideo()
    })
    function stopOtherVideo() {
        $('video.test-vid').each(function (e) {
            var currentVid = $(this);
            $(this).on('play', function () {
                $('video.test-vid').each(function (e) {
                    if ($(this).attr('src') != currentVid.attr('src')) {
                        $(this)[0].pause();
                    }
                });
            })
        })
    } */


    if ($('.play-btn.video').length) {

        // $('.play-btn').each(function(){
        //     $('.play-btn').data('src')
        // })

        $('.play-btn.video').click(function () {
            var playBtn = $(this);
            var wrap = playBtn.parent();
            var src = playBtn.data('url');
            //console.log(src);
            var temp = `<video src="${src}" playinline autoplay muted controls="true"></video>`;
            wrap.append(temp);
            // console.log("cddcd", capture(wrap.find('video')[0]));

            var snapshot = function () {
                var canvas = document.createElement('canvas');
                var ctx = canvas.getContext('2d');
                ctx.drawImage(wrap.find('video')[0], 0, 0, canvas.width, canvas.height);
                //console.log("bhbh", canvas.toDataURL('image/png'));
                wrap.find('video')[0].removeEventListener('canplay', snapshot);
            };
            wrap.find('video')[0].addEventListener('canplay', snapshot);

            wrap.find('img').fadeOut('slow', function () {
                wrap.find('img').remove()
            });
            wrap.find('button').fadeOut('slow', function () {
                wrap.find('button').remove()
            });
            stopOtherVideo()
        })
    }

    function stopOtherVideo() {
        $('.cook-swiper video').each(function (e) {
            var currentVid = $(this);
            $(this).on('play', function () {
                $('.cook-swiper video').each(function (e) {
                    if ($(this).attr('src') != currentVid.attr('src')) {
                        $(this)[0].pause();
                    }
                });
            })
        })
    }


    $(window).scroll(function () {
        if ($(window).scrollTop() > 300) {
            $('.main-nav').addClass('sticky');
        } else {
            $('.main-nav').removeClass('sticky');
        }
    })

    var pageLink = window.location.href;
    var pageTitle = String(document.title).replace(/\&/g, '%26');

    function fbs_click() {
        window.open(`http://www.facebook.com/sharer.php?u=${pageLink}&quote=${pageTitle}`, 'sharer',
            'toolbar=0,status=0,width=626,height=436');
        return false;
    }

    function twi_click() {
        window.open(`https://twitter.com/intent/tweet?text=${pageTitle}&url=${pageLink}`, 'sharer',
            'toolbar=0,status=0,width=626,height=436');
        return false;
    }

    function wht_click() {
        window.open(`https://wa.me/918928493972?text=Hi`);
        return false;
    }
    // $(".sbs-form").submit(function(e){
    //     e.preventDefault();
    //     let data = $(this).serialize();
    //     $.ajax({
    //         type: "method",
    //         url: site_url+'home/subscribeformsubmit',
    //         data: data,
    //         dataType: "dataType",
    //         beforeSend: function(){
    //         $('.sbs-form').find('button').addClass('loading');
    //         },
    //         success: function (response) {
    //             $(".sbs-msg").html(res.msg);
    //             $('.sbs-form').find('button').removeClass('loading');
    //         }
    //     })
    // })

    $('.ft-toggle').click(function () {
        $('.ft-card').addClass('active');
    })
    $('.ft-close').click(function () {
        $('.ft-card').removeClass('active');
    })

    // cookie popup

    var cookieNotice = document.getElementById("cookieNotice");

    function setCookie(cname, cvalue, exdays) {
        const d = new Date();
        d.setTime(d.getTime() + (exdays * 24 * 60 * 60 * 1000));
        let expires = "expires=" + d.toUTCString();
        document.cookie = cname + "=" + cvalue + ";" + expires + ";path=/";
    }

    // Delete cookie
    function deleteCookie(cname) {
        const d = new Date();
        d.setTime(d.getTime() + (24 * 60 * 60 * 1000));
        let expires = "expires=" + d.toUTCString();
        document.cookie = cname + "=;" + expires + ";path=/";
    }

    // Read cookie
    function getCookie(cname) {
        let name = cname + "=";
        let decodedCookie = decodeURIComponent(document.cookie);
        let ca = decodedCookie.split(';');
        for (let i = 0; i < ca.length; i++) {
            let c = ca[i];
            while (c.charAt(0) == ' ') {
                c = c.substring(1);
            }
            if (c.indexOf(name) == 0) {
                return c.substring(name.length, c.length);
            }
        }
        return "";
    }

    // Set cookie consent
    function acceptCookieConsent() {
        deleteCookie('user_cookie_consent');
        setCookie('user_cookie_consent', 1, 30);
        cookieNotice.style.display = "none";
    }

    let cookie_consent = getCookie("user_cookie_consent");
    if (cookie_consent != "") {
        cookieNotice.style.display = "none";
    } else {
        cookieNotice.style.display = "block";
        // setCookie('user_cookie_consent', 2, 1)
    }

    $('.allow-cookie').click(acceptCookieConsent);
    $('.close-cookie').click(function () {
        cookieNotice.style.display = "none";
    });


    // lazy loading youtube video 

    var video_wrapper = $('.youtube-video-place');

    //  Check to see if youtube wrapper exists

    if (video_wrapper.length) {
        video_wrapper.each(function () {
            var video = $(this);
            // console.log(video);
            if (video.data('url').match(/youtube\.com.*(\?v=|\/embed\/)(.{11})/) && video.data('url')) {
                var youtube_video_id = video.data('url').match(/youtube\.com.*(\?v=|\/embed\/)(.{11})/).pop();
                if (youtube_video_id.length == 11) {
                    var video_thumbnail = $('<img src="//img.youtube.com/vi/' + youtube_video_id + '/0.jpg">');
                    // appending img tag
                    video.html(
                        `<img class="yt-thumb-img" src="//img.youtube.com/vi/${youtube_video_id}/0.jpg"/>
                    <button class="vid-play-btn play-btn" ><img src="assets/images/play.svg" alt="video play" /></button>`
                    );
                }
                var playBtn = video.find('.vid-play-btn');
                playBtn.on('click', function () {

                    playBtn.fadeOut("slow");
                    video.addClass('remove-after');
                    setTimeout(() => {
                        video.html(
                            '<iframe allowfullscreen frameborder="0" class="embed-responsive-item" src="' +
                            video.data('url') + '?autoplay=1&mute=0"></iframe>');
                    }, 500);
                });
            }
        })
    }

</script>
</body>

</html>