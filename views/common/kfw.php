<link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
<style>
    .page-wrapper {
        overflow-x: hidden;
    }

    .pb-75 {
        padding-bottom: 75px;
    }

    .bg-clay {
        background-color: #014293;
    }

    .bg-black {
        background-color: #000;
    }

    .op-8 {
        opacity: 0.8;
    }

    .br-1 {
        background-image: url(<?= base_url() ?>assets/kfw/herobanner.jpg);
    }

    .ptb-100 {
        padding-top: 100px;
        padding-bottom: 100px;
    }

    .overlay {
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        z-index: 0;
    }

    .feature-item-wrap .feature-item {
        margin-bottom: 25px;
    }

    .feature-item-wrap .feature-item:last-child {
        margin-bottom: 0;
    }

    .feature-item-wrap .feature-item .feature-icon {
        width: 55px;
        position: relative;
        z-index: 1;
    }

    .breadcrumb-wrap {
        position: relative;
        width: 100%;
        height: 100%;
        padding: 130px 0;
        overflow: hidden;
    }

    .breadcrumb-title {
        position: relative;
        z-index: 1;
        width: 100%;
        text-align: center;
    }

    .breadcrumb-title h2 {
        font-size: 40px;
        font-weight: 600;
        margin: 0 0 15px;
        color: #fff;
    }

    .breadcrumb-img img {
        display: block;
        margin-right: auto;
        max-height: 420px;
    }

    .about-bg-one {
        background-image: url(<?= base_url() ?>assets/kfw/aboutbanner.jpg);
    }

    .btn.style1,
    .btn.style3,
    .btn.style5 {
        background-color: #014293;
        color: #fff;
    }

    .section-title,
    .content-title {
        position: relative;
    }

    .section-title h2,
    .content-title h2 {
        font-size: 40px;
        margin: 0;
    }

    .section-title p,
    .content-title p {
        margin: 12px 0 0;
    }

    .section-title span,
    .content-title span {
        display: inline-block;
        font-weight: 500;
        letter-spacing: 4px;
        margin: 0 0 13px;
        position: relative;
        z-index: 1;
        line-height: 1;
        padding: 10px 5px 5px 9px;
    }

    .section-title span:after,
    .content-title span:after {
        position: absolute;
        top: 0;
        left: 0;
        content: "";
        width: 40%;
        height: 100%;
        background-color: rgba(255, 251, 246, 0.25);
        z-index: -1;
    }

    .section-title.style1 span,
    .content-title.style1 span {
        color: #014293;
    }

    .section-title.style1 span:after,
    .content-title.style1 span:after {
        background-color: rgba(7, 0, 202, 0.25);
    }

    .section-title.style1 p,
    .content-title.style1 p {
        margin: 10px auto 0;
    }

    .section-title {
        line-height: 1;
    }

    .body_overlay {
        position: fixed;
        top: 0;
        left: 0;
        content: "";
        background-color: rgba(0, 0, 0, 0.7);
        width: 100%;
        height: 100%;
        z-index: 999;
        visibility: hidden;
        opacity: 0;
        transition: all 0.4s ease-in-out;
    }

    .body_overlay.open {
        visibility: visible;
        opacity: 1;
    }

    .overlay {
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        z-index: 0;
    }

    .op-1 {
        opacity: 0.1;
    }

    .op-2 {
        opacity: 0.2;
    }

    .op-3 {
        opacity: 0.3;
    }

    .op-4 {
        opacity: 0.4;
    }

    .op-5 {
        opacity: 0.5;
    }

    .op-6 {
        opacity: 0.6;
    }

    .op-7 {
        opacity: 0.7;
    }

    .op-75 {
        opacity: 0.75;
    }

    .op-8 {
        opacity: 0.8;
    }

    .op-85 {
        opacity: 0.85;
    }

    .op-9 {
        opacity: 0.9;
    }

    .op-95 {
        opacity: 0.95;
    }

    .op-10 {
        opacity: 1;
    }

    .bg-f {
        background-position: center center;
        background-size: cover;
        background-repeat: no-repeat;
        background-color: #ddd;
    }

    .about-wrap.style2 .about-img-wrap .about-bg-one,
    .about-wrap.style2 .about-img-wrap .about-bg-three {
        height: 530px;
        border-radius: 10px;
    }

    .about-wrap.style2 .about-content .feature-item-wrap {
        margin: 30px 0px;
    }

    .feature-item-wrap.style2 .feature-item .feature-icon {
        width: 55px;
        height: 55px;
        border-radius: 50%;
        background-color: rgba(205, 148, 83, 0.15);
        overflow: hidden;
        text-align: center;
    }

    .feature-item-wrap.style2 .feature-item .feature-icon i {
        font-size: 24px;
        line-height: 0.7;
        margin: 0 auto;
    }

    .feature-item-wrap.style2 .feature-item .feature-text {
        width: calc(100% - 80px);
        margin-left: 20px;
    }

    .product-features.feature-item-wrap .feature-item {
        margin-bottom: 0;
        transition: 0.4s;
    }

    .product-features.feature-item-wrap .feature-item:nth-child(odd) {
        background-color: #014293;
    }

    .product-features.feature-item-wrap .feature-item:nth-child(odd) .feature-icon {
        background: rgb(7, 88, 187);
    }

    .product-features.feature-item-wrap .feature-item:nth-child(odd):hover {
        background-color: rgb(0, 65, 144);
    }

    .product-features.feature-item-wrap .feature-item:nth-child(even) {
        background-color: rgb(2, 78, 170);
    }

    .product-features.feature-item-wrap .feature-item:nth-child(even) .feature-icon {
        background: rgb(9, 98, 207);
    }

    .product-features.feature-item-wrap .feature-item:nth-child(even):hover {
        background-color: rgb(0, 65, 144);
    }

    .product-features.feature-item-wrap .feature-item:first-child {
        border-radius: 10px 0 0 0;
    }

    .product-features.feature-item-wrap .feature-item:first-child .feature-icon {
        border-radius: 10px 0 0 0;
    }

    .product-features.feature-item-wrap .feature-item:last-child {
        border-radius: 0 0 0 10px;
    }

    .product-features.feature-item-wrap .feature-item:last-child .feature-icon {
        border-radius: 0 0 0 10px;
    }

    .product-features.feature-item-wrap .feature-item .feature-icon {
        border-radius: 0;
        box-shadow: none;
        background-color: transparent;
        padding: 25px;
        height: auto;
        width: 110px;
        top: 0;
        text-align: center;
        transition: 0.4s;
    }

    .product-features.feature-item-wrap .feature-item .feature-icon i {
        color: #fff;
        font-size: 48px;
        margin: 0 auto;
        transition: 0.4s;
    }

    .product-features.feature-item-wrap .feature-item .feature-icon:after {
        display: none;
    }

    .product-features.feature-item-wrap .feature-item .feature-text {
        padding: 25px 25px 20px;
        width: calc(100% - 110px);
        margin-left: 0;
    }

    .product-features.feature-item-wrap .feature-item .feature-text h3,
    .product-features.feature-item-wrap .feature-item .feature-text p {
        color: #fff;
    }

    .feature-item-wrap .feature-item {
        margin-bottom: 25px;
    }

    .feature-item-wrap .feature-item:last-child {
        margin-bottom: 0;
    }

    .feature-item-wrap .feature-item .feature-icon {
        width: 55px;
        position: relative;
        z-index: 1;
    }

    .feature-item-wrap .feature-item .feature-icon i {
        font-size: 28px;
        line-height: 0.8;
        color: #CD9453;
        transition: 0.4s;
    }

    .feature-item-wrap .feature-item .feature-icon:after {
        position: absolute;
        bottom: 0;
        left: 0;
        content: "";
        width: 100%;
        height: 0;
        background-color: #CD9453;
        transition: 0.4s;
        visibility: hidden;
        opacity: 0;
        z-index: -1;
    }

    .product-feature-bg {
        background-image: url(<?= base_url() ?>assets/kfw/herobanner.jpg);
        height: 100%;
        border-radius: 0 10px 10px 0;
    }

    .feature-item-wrap .feature-item .feature-text {
        width: calc(100% - 75px);
        margin-left: 20px;
    }

    .feature-item-wrap .feature-item .feature-text h3 {
        font-size: 24px;
        margin: 0 0 10px;
        transition: 0.4s;
    }

    .feature-item-wrap .feature-item .feature-text p {
        margin: 0;
    }

    .feature-item-wrap .feature-item:hover .feature-icon i {
        color: #fff;
    }

    .feature-item-wrap .feature-item:hover .feature-icon:after {
        height: 100%;
        visibility: visible;
        opacity: 1;
    }

    .feature-item-wrap .feature-item:hover .feature-text h3 {
        color: #CD9453;
    }

    .feature-item-wrap.style1 .feature-item,
    .feature-item-wrap.style4 .feature-item {
        background-color: transparent;
        padding: 0;
    }

    .feature-item-wrap.style1 .feature-item .feature-icon,
    .feature-item-wrap.style4 .feature-item .feature-icon {
        position: relative;
        width: 55px;
        border-radius: 0;
        background-color: transparent;
        top: 0px;
        box-shadow: none;
        box-shadow: none;
    }

    .feature-item-wrap.style1 .feature-item .feature-icon i,
    .feature-item-wrap.style4 .feature-item .feature-icon i {
        font-size: 46px;
    }

    .feature-item-wrap.style1 .feature-item .feature-icon:after,
    .feature-item-wrap.style4 .feature-item .feature-icon:after {
        display: none;
    }

    .feature-item-wrap.style1 .feature-item:hover .feature-icon i,
    .feature-item-wrap.style4 .feature-item:hover .feature-icon i {
        color: #fff;
    }

    .feature-item-wrap.style2 .feature-item .feature-icon {
        width: 55px;
        height: 55px;
        border-radius: 50%;
        background-color: rgba(205, 148, 83, 0.15);
        overflow: hidden;
        text-align: center;
    }

    .feature-item-wrap.style2 .feature-item .feature-icon i {
        font-size: 24px;
        line-height: 0.7;
        margin: 0 auto;
    }

    .feature-item-wrap.style2 .feature-item .feature-text {
        width: calc(100% - 80px);
        margin-left: 20px;
    }

    .feature-item-wrap.style3 .feature-item,
    .feature-item-wrap.style5 .feature-item {
        margin-bottom: 25px;
        width: 33.33%;
        position: relative;
    }

    .feature-item-wrap.style3 .feature-item:after,
    .feature-item-wrap.style5 .feature-item:after {
        position: absolute;
        top: 0;
        right: 25px;
        content: "";
        background: rgba(205, 148, 83, 0.3);
        width: 1px;
        height: 100%;
    }

    .feature-item-wrap.style3 .feature-item:last-child:after,
    .feature-item-wrap.style5 .feature-item:last-child:after {
        display: none;
    }

    .feature-item-wrap.style3 .feature-item .feature-icon,
    .feature-item-wrap.style5 .feature-item .feature-icon {
        width: 65px;
        height: 65px;
        border-radius: 50%;
        background-color: rgba(205, 148, 83, 0.15);
        overflow: hidden;
        text-align: center;
    }

    .feature-item-wrap.style3 .feature-item .feature-icon:after,
    .feature-item-wrap.style5 .feature-item .feature-icon:after {
        width: 0;
        height: 100%;
    }

    .feature-item-wrap.style3 .feature-item .feature-icon i,
    .feature-item-wrap.style5 .feature-item .feature-icon i {
        font-size: 28px;
        line-height: 0.7;
        margin: 0 auto;
        color: #CD9453;
        position: relative;
        top: 1px;
        transition: 0.4s;
    }

    .feature-item-wrap.style3 .feature-item .feature-text,
    .feature-item-wrap.style5 .feature-item .feature-text {
        width: calc(100% - 85px);
        margin-left: 20px;
        padding-right: 25px;
    }

    .feature-item-wrap.style3 .feature-item .feature-text h3,
    .feature-item-wrap.style5 .feature-item .feature-text h3 {
        transition: 0.4s;
    }

    .feature-item-wrap.style3 .feature-item .feature-text p,
    .feature-item-wrap.style5 .feature-item .feature-text p {
        margin: 0;
    }

    .feature-item-wrap.style3 .feature-item:hover .feature-icon i,
    .feature-item-wrap.style5 .feature-item:hover .feature-icon i {
        color: #fff;
    }

    .feature-item-wrap.style3 .feature-item:hover .feature-icon:after,
    .feature-item-wrap.style5 .feature-item:hover .feature-icon:after {
        width: 100%;
        visibility: visible;
        opacity: 1;
    }

    .feature-item-wrap.style3 .feature-item:hover .feature-text h3,
    .feature-item-wrap.style5 .feature-item:hover .feature-text h3 {
        color: #CD9453;
    }

    .feature-item-wrap.style4 .feature-item .feature-icon i {
        color: #333333;
    }

    .feature-item-wrap.style4 .feature-item:hover .feature-icon i {
        color: #CD9453;
    }

    .feature-item-wrap.style3 .feature-item:hover .feature-icon:after,
    .feature-item-wrap.style5 .feature-item:hover .feature-icon:after {
        background-color: #;
    }
</style>
<style>
    @media only screen and (max-width: 767px) {

        .about-wrap.style2 .about-img-wrap .about-bg-one,
        .about-wrap.style2 .about-img-wrap .about-bg-three {
            height: 350px;
        }
    }

    @media only screen and (min-width: 768px) and (max-width: 991px) {

        .about-wrap.style2 .about-img-wrap .about-bg-one,
        .about-wrap.style2 .about-img-wrap .about-bg-three {
            height: 550px;
        }
    }

    @media only screen and (min-width: 992px) and (max-width: 1199px) {

        .about-wrap.style2 .about-img-wrap .about-bg-one,
        .about-wrap.style2 .about-img-wrap .about-bg-three {
            height: 660px;
        }
    }

    .team-card-bg {
        padding: 10px;
        transition: transform 0.3s ease-in-out;
        overflow: hidden;
        position: relative;
    }


    .team-img-bg {
        overflow: hidden;
    }

    .team-img-bg img {
        transition: transform 0.3s ease-in-out;
    }

    .team-card-bg:hover .team-img-bg img {
        transform: scale(1.1);
        /* Zoom-in effect on hover */
    }
    
    @media (max-width: 767.98px) {
    .team-img-bg {
        display: flex
;
        justify-content: center;
    }
    
}

    .team-content h2 {
        font-size: 24px;
        font-family: "sequelbook", sans-serif;
        font-weight: 500;
        padding-top: 5px;
        font-style: normal;
        color: #000;
        position: relative;
        display: inline-block;
    }

    .team-content h2::after {
        content: "";
        position: absolute;
        bottom: -3px;
        left: 0;
        width: 0;
        height: 3px;
        background-color: #000;
        transition: width 0.3s ease-in-out;
    }

    .team-card-bg:hover .team-content h2::after {
        width: 100%;
        /* Underline expands from left to right */
    }

    .team-content h3 {
        font-size: 16px;
        line-height: 18px;
        font-style: normal;
        color: #000;
        font-family: "sequelbook", sans-serif;
    }
</style>

<style>
    .lg-head .logo-box {
        display: flex;
        align-items: center;
        justify-content: center;
        width: 127px;
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

    .service_card_desc p {
        line-height: 16px;
    }

    .service-card-one img {
        color: #014293;
    }

    .service-al {
        background-color: #014293
    }

    .service-card-one {
        background-color: #014293
    }

    .service_card_icon::after {
        border: 3px dotted #fff;
    }

    .service_card_content {
        position: relative;
        background: rgba(96, 91, 227, 0.25);
        color: #fff;
        z-index: 2;
    }

    .service_card_title h3 {
        color: #fff;
    }

    .service_card_title_underline {
        border: none;
        height: 3px;
        background-color: white;
    }

    .service_card_desc p {
        color: #fff;
    }

    .service_card_content:after {
        position: absolute;
        bottom: 0;
        left: 0;
        content: "";
        width: 100%;
        height: 0;
        background-color: rgba(255, 255, 255, 0.2);
        transition: 0.4s;
        visibility: hidden;
        opacity: 0;
        z-index: -1;
    }

    .service_card_content:hover:after {
        height: 100%;
        visibility: visible;
        opacity: 1;
    }

    .service_card_content:hover .service_card_title h3,
    .service_card_content:hover .service_card_desc p {
        color: #fff;
    }
</style>


<section
    class="inner-banner elementor-section elementor-top-section elementor-element elementor-element-8ce00f9 elementor-section-height-min-height elementor-section-boxed elementor-section-height-default elementor-section-items-middle d-flex align-items-center justify-content-center text-center"
    data-id="8ce00f9" data-element_type="section"
    data-settings="{&quot;background_background&quot;:&quot;classic&quot;}"
    style="background:url(<?= base_url() ?>assets/kfw/herobanner.jpg) center/cover no-repeat; min-height: 300px;">

    <div class="elementor-background-overlay"></div>
    <div class="container d-flex align-items-center justify-content-center text-center">
        <div class="breadcrumb-title">
            <h2 class="text-center">KFW | The CHRO Bridge</h2>
        </div>
    </div>
</section>

<div class="page-wrapper">
    <section class="about-wrap style2 ptb-100" style="background-color: #fafafa">
        <div class="container">
            <div class="row gx-5 align-items-center">
                <div class="col-lg-6">
                    <div class="about-img-wrap">
                        <div class="about-bg-one bg-f"></div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="ind-con py-5">
                        <div class="sec-head lg-head mb-30">
                            <h2>
                                <span class="logo-box"><a href="https://kfwcorp.com/">
                                        <img src="https://cfobridge.com/uploads/images/kfw-logo-c.png"
                                            alt="CTO Bridge Logo"></a>
                                </span>KFW - The CHRO Bridge
                            </h2>
                        </div>
                        <p class="para">We are a Talent consulting firm focused on enabling organizations in their
                            growth and
                            transformational journey by designing talent practices to build Capacity, Capability and
                            Culture.</p>
                        <p class="para">We believe that talent transformation is essential for business success and
                            it needs to
                            be anchored, nurtured, and developed. With a keen focus on client needs, we craft and
                            deliver tailored talent offerings to drive organizational growth and foster a Culture of
                            Excellence.</p>
                        <p class="para">Our team of experienced consultants bring a wealth of knowledge in
                            strategic talent
                            management, helping organizations meet the current and future talent requirements.</p>
                        <a href="https://kfwcorp.com" target="_blank" class=" btn style3" style="margin-top:20px;"
                            data-faitracker-click-bind="true">Read More</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="sec service-al">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="sec-head center">
                        <h2 class="text-white">Our Services</h2>
                    </div>
                </div>
            </div>
            <div class="row row-gap-25 mt-50">
                <div class="col-lg-4 col-md-6 col-12">
                    <div class="service-card-one">
                        <div class="row">
                            <div class="col-auto d-flex justify-content-center align-items-center  service_card_icon">
                                <svg xmlns="http://www.w3.org/2000/svg" width="30px" height="30px" fill="#fff"
                                    viewBox="0 0 16 16">
                                    <path xmlns="http://www.w3.org/2000/svg"
                                        d="M11 5a3 3 0 1 1-6 0 3 3 0 0 1 6 0m-9 8c0 1 1 1 1 1h5.256A4.5 4.5 0 0 1 8 12.5a4.5 4.5 0 0 1 1.544-3.393Q8.844 9.002 8 9c-5 0-6 3-6 4m9.886-3.54c.18-.613 1.048-.613 1.229 0l.043.148a.64.64 0 0 0 .921.382l.136-.074c.561-.306 1.175.308.87.869l-.075.136a.64.64 0 0 0 .382.92l.149.045c.612.18.612 1.048 0 1.229l-.15.043a.64.64 0 0 0-.38.921l.074.136c.305.561-.309 1.175-.87.87l-.136-.075a.64.64 0 0 0-.92.382l-.045.149c-.18.612-1.048.612-1.229 0l-.043-.15a.64.64 0 0 0-.921-.38l-.136.074c-.561.305-1.175-.309-.87-.87l.075-.136a.64.64 0 0 0-.382-.92l-.148-.045c-.613-.18-.613-1.048 0-1.229l.148-.043a.64.64 0 0 0 .382-.921l-.074-.136c-.306-.561.308-1.175.869-.87l.136.075a.64.64 0 0 0 .92-.382zM14 12.5a1.5 1.5 0 1 0-3 0 1.5 1.5 0 0 0 3 0" />
                                </svg>
                            </div>
                            <div class="col service_card_content">
                                <div class="service_card_title">
                                    <h3>HR Process</h3>
                                    <hr class="service_card_title_underline">
                                </div>
                                <div class="service_card_desc">
                                    <p>HR Policies</p>
                                    <p>Hire to Retire Process design (Onboarding to Separation)</p>
                                    <p>Performance Management</p>
                                    <p>Compensation & Benefits</p>
                                    <p>Employee Engagement</p>
                                    <p>Rewards & Recognition</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 col-12">
                    <div class="service-card-one">
                        <div class="row">
                            <div class="col-auto d-flex justify-content-center align-items-center  service_card_icon">
                                <svg xmlns="http://www.w3.org/2000/svg" width="30px" height="30px" fill="#fff"
                                    viewBox="0 0 16 16">
                                    <path
                                        d="M6.705 8.139a.25.25 0 0 0-.288-.376l-1.5.5.159.474.808-.27-.595.894a.25.25 0 0 0 .287.376l.808-.27-.595.894a.25.25 0 0 0 .287.376l1.5-.5-.159-.474-.808.27.596-.894a.25.25 0 0 0-.288-.376l-.808.27z" />
                                    <path
                                        d="M8 16A8 8 0 1 0 8 0a8 8 0 0 0 0 16m-6.202-4.751 1.988-1.657a4.5 4.5 0 0 1 7.537-4.623L7.497 6.5l1 2.5 1.333 3.11c-.56.251-1.18.39-1.833.39a4.5 4.5 0 0 1-1.592-.29L4.747 14.2a7.03 7.03 0 0 1-2.949-2.951M12.496 8a4.5 4.5 0 0 1-1.703 3.526L9.497 8.5l2.959-1.11q.04.3.04.61" />
                                </svg>
                            </div>
                            <div class="col service_card_content">
                                <div class="service_card_title">
                                    <h3>Organization Development</h3>
                                    <hr class="service_card_title_underline">
                                </div>
                                <div class="service_card_desc">
                                    <p>Organization Design</p>
                                    <p>Job Architecture</p>
                                    <p>Career Management</p>
                                    <p>Managerial Enablement</p>
                                    <p>Culture audit</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-12">
                    <div class="service-card-one">
                        <div class="row">
                            <div class="col-auto d-flex justify-content-center align-items-center  service_card_icon">
                                <svg xmlns="http://www.w3.org/2000/svg" width="30px" height="30px" fill="#fff"
                                    viewBox="0 0 16 16">
                                    <path
                                        d="M6.5 1A1.5 1.5 0 0 0 5 2.5V3H1.5A1.5 1.5 0 0 0 0 4.5v1.384l7.614 2.03a1.5 1.5 0 0 0 .772 0L16 5.884V4.5A1.5 1.5 0 0 0 14.5 3H11v-.5A1.5 1.5 0 0 0 9.5 1zm0 1h3a.5.5 0 0 1 .5.5V3H6v-.5a.5.5 0 0 1 .5-.5" />
                                    <path
                                        d="M0 12.5A1.5 1.5 0 0 0 1.5 14h13a1.5 1.5 0 0 0 1.5-1.5V6.85L8.129 8.947a.5.5 0 0 1-.258 0L0 6.85z" />
                                </svg>
                            </div>
                            <div class="col service_card_content">
                                <div class="service_card_title">
                                    <h3>Talent Supply Chain</h3>
                                    <hr class="service_card_title_underline">
                                </div>
                                <div class="service_card_desc">
                                    <p>Workforce Planning</p>
                                    <p>Skill Transformation</p>
                                    <p>Talent Supply Chain effectiveness</p>
                                    <p>Talent Marketplace</p>
                                    <p>Power KPIs</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-12">
                    <div class="service-card-one">
                        <div class="row">
                            <div class="col-auto d-flex justify-content-center align-items-center  service_card_icon">
                                <svg xmlns="http://www.w3.org/2000/svg" width="30px" height="30px" fill="#fff"
                                    viewBox="0 0 16 16">
                                    <path
                                        d="M2 1a1 1 0 0 1 1-1h10a1 1 0 0 1 1 1v6.5a.5.5 0 0 1-1 0V1H3v14h3v-2.5a.5.5 0 0 1 .5-.5H8v4H3a1 1 0 0 1-1-1z" />
                                    <path
                                        d="M4.5 2a.5.5 0 0 0-.5.5v1a.5.5 0 0 0 .5.5h1a.5.5 0 0 0 .5-.5v-1a.5.5 0 0 0-.5-.5zm3 0a.5.5 0 0 0-.5.5v1a.5.5 0 0 0 .5.5h1a.5.5 0 0 0 .5-.5v-1a.5.5 0 0 0-.5-.5zm3 0a.5.5 0 0 0-.5.5v1a.5.5 0 0 0 .5.5h1a.5.5 0 0 0 .5-.5v-1a.5.5 0 0 0-.5-.5zm-6 3a.5.5 0 0 0-.5.5v1a.5.5 0 0 0 .5.5h1a.5.5 0 0 0 .5-.5v-1a.5.5 0 0 0-.5-.5zm3 0a.5.5 0 0 0-.5.5v1a.5.5 0 0 0 .5.5h1a.5.5 0 0 0 .5-.5v-1a.5.5 0 0 0-.5-.5zm3 0a.5.5 0 0 0-.5.5v1a.5.5 0 0 0 .5.5h1a.5.5 0 0 0 .5-.5v-1a.5.5 0 0 0-.5-.5zm-6 3a.5.5 0 0 0-.5.5v1a.5.5 0 0 0 .5.5h1a.5.5 0 0 0 .5-.5v-1a.5.5 0 0 0-.5-.5zm3 0a.5.5 0 0 0-.5.5v1a.5.5 0 0 0 .5.5h1a.5.5 0 0 0 .5-.5v-1a.5.5 0 0 0-.5-.5zm4.386 1.46c.18-.613 1.048-.613 1.229 0l.043.148a.64.64 0 0 0 .921.382l.136-.074c.561-.306 1.175.308.87.869l-.075.136a.64.64 0 0 0 .382.92l.149.045c.612.18.612 1.048 0 1.229l-.15.043a.64.64 0 0 0-.38.921l.074.136c.305.561-.309 1.175-.87.87l-.136-.075a.64.64 0 0 0-.92.382l-.045.149c-.18.612-1.048.612-1.229 0l-.043-.15a.64.64 0 0 0-.921-.38l-.136.074c-.561.305-1.175-.309-.87-.87l.075-.136a.64.64 0 0 0-.382-.92l-.148-.045c-.613-.18-.613-1.048 0-1.229l.148-.043a.64.64 0 0 0 .382-.921l-.074-.136c-.306-.561.308-1.175.869-.87l.136.075a.64.64 0 0 0 .92-.382zM14 12.5a1.5 1.5 0 1 0-3 0 1.5 1.5 0 0 0 3 0" />
                                </svg>
                            </div>
                            <div class="col service_card_content">
                                <div class="service_card_title">
                                    <h3>Fractional CHRO Services</h3>
                                    <hr class="service_card_title_underline">
                                </div>
                                <div class="service_card_desc">
                                    <p>CXO Level executive to help the firm’s growth</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-12">
                    <div class="service-card-one">
                        <div class="row">
                            <div class="col-auto d-flex justify-content-center align-items-center  service_card_icon">
                                <svg xmlns="http://www.w3.org/2000/svg" width="30px" height="30px" fill="#fff"
                                    viewBox="0 0 16 16">
                                    <path d="M8 3a1.5 1.5 0 1 0 0-3 1.5 1.5 0 0 0 0 3" />
                                    <path
                                        d="m5.93 6.704-.846 8.451a.768.768 0 0 0 1.523.203l.81-4.865a.59.59 0 0 1 1.165 0l.81 4.865a.768.768 0 0 0 1.523-.203l-.845-8.451A1.5 1.5 0 0 1 10.5 5.5L13 2.284a.796.796 0 0 0-1.239-.998L9.634 3.84a.7.7 0 0 1-.33.235c-.23.074-.665.176-1.304.176-.64 0-1.074-.102-1.305-.176a.7.7 0 0 1-.329-.235L4.239 1.286a.796.796 0 0 0-1.24.998l2.5 3.216c.317.316.475.758.43 1.204Z" />
                                </svg>
                            </div>
                            <div class="col service_card_content">
                                <div class="service_card_title">
                                    <h3>Executive & Leadership Search</h3>
                                    <hr class="service_card_title_underline">
                                </div>
                                <div class="service_card_desc">
                                    <p>CXO and Senior Management Roles</p>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
                <div class="col-lg-4 col-md-6 col-12">
                    <div class="service-card-one">
                        <div class="row">
                            <div class="col-auto d-flex justify-content-center align-items-center  service_card_icon">
                                <svg xmlns="http://www.w3.org/2000/svg" width="30px" height="30px" fill="#fff"
                                    viewBox="0 0 16 16">
                                    <path
                                        d="M2 6a6 6 0 1 1 10.174 4.31c-.203.196-.359.4-.453.619l-.762 1.769A.5.5 0 0 1 10.5 13h-5a.5.5 0 0 1-.46-.302l-.761-1.77a2 2 0 0 0-.453-.618A5.98 5.98 0 0 1 2 6m3 8.5a.5.5 0 0 1 .5-.5h5a.5.5 0 0 1 0 1l-.224.447a1 1 0 0 1-.894.553H6.618a1 1 0 0 1-.894-.553L5.5 15a.5.5 0 0 1-.5-.5" />
                                </svg>
                            </div>
                            <div class="col service_card_content">
                                <div class=" service_card_title">
                                    <h3>HRMS Support</h3>
                                    <hr class="service_card_title_underline">
                                </div>
                                <div class="service_card_desc">
                                    <p>Process Design & Automation</p>
                                    <p>Technology Roadmap and Solution Building</p>
                                    <p>Program Success Office</p>
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
            let elements = document.querySelectorAll('.service-card-one .service_card_content');

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

    <section class="product-features-wrap ptb-100">
        <div class="container">
            <div class="row">
                <div class="col-xl-8 offset-xl-2 col-lg-10 offset-lg-1 col-md-10 offset-md-1">
                    <div class="section-title style1 text-center mb-40">
                        <div class="sec-head center">
                            <h2>Engagement Model </h2>
                            <p class="para">Our co-create approach integrates our deep expertise in building talent solutions and
                                sharp
                                focus on addressing the key priorities for our clients.approach integrates our deep
                                expertise in building talent solutions and sharp focus on addressing the key priorities
                                for
                                our clients. </p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row gx-0">
                <div class="col-lg-6 col-md-12 col-12 order-lg-1 order-md-2 order-2">
                    <div class="product-features feature-item-wrap">
                        <div class="feature-item" style="display:flex;">
                            <div class="feature-icon">
                                <i class='bx bxs-badge-check'></i>
                            </div>
                            <div class="feature-text">
                                <h3>Discover</h3>
                                <p>Problem & Opportunity identification.</br>Defining the scope and approach of the
                                    engagement.</p>
                            </div>
                        </div>
                        <div class="feature-item" style="display:flex;">
                            <div class="feature-icon">
                                <i class='bx bxs-badge-check'></i>
                            </div>
                            <div class="feature-text">
                                <h3>Design</h3>
                                <p>Target Operating Model, Point of Departure.</br>Solutions Component and Design.</p>
                            </div>
                        </div>
                        <div class="feature-item" style="display:flex;">
                            <div class="feature-icon">
                                <i class='bx bxs-badge-check'></i>
                            </div>
                            <div class="feature-text">
                                <h3>Implement</h3>
                                <p>Implementation Support.</br>Program Management.</br>Organizational Change Management.
                                </p>
                            </div>
                        </div>
                        <div class="feature-item" style="display:flex;">
                            <div class="feature-icon">
                                <i class='bx bxs-badge-check'></i>
                            </div>
                            <div class="feature-text">
                                <h3>Diagnose</h3>
                                <p>Data Gathering.</br>Process, Organization and System Study.</br>Current State
                                    Analysis.</p>
                            </div>
                        </div>
                        <div class="feature-item" style="display:flex;">
                            <div class="feature-icon">
                                <i class='bx bxs-badge-check'></i>
                            </div>
                            <div class="feature-text">
                                <h3>Validate</h3>
                                <p>Stakeholder Inputs.</br>Use case Validation.</br>Market Practices.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-12 col-12 order-lg-2 order-md-1 order-1">
                    <div class="product-feature-bg bg-f"></div>
                </div>
            </div>
        </div>
    </section>
    <?php
    $json = file_get_contents('http://kfwcorp.com/assets/data/staffs.json');
    $data_partners = json_decode($json, true);

    ?>





    <!--<div class="sec teams-bg">
        <div class="container">
            <div class="row">
                <div class="col-12 mb-30">
                    <div class="sec-head center">
                        <h2>Meet Our Advisors</h2>
                    </div>
                </div>

                <?php foreach ($advisors as $advisors): ?>
                    <div class="col-lg-3 col-md-6 col-sm-6">
                        <a href="http://demo.kfwcorp.com/staff/<?php echo urlencode($advisors['slug']); ?>">
                            <div class="team-card-bg">
                                <div class="team-img-bg">
                                    <img src="https://cfobridge.com/uploads/images/<?php echo $advisors['img']; ?>"
                                        alt="<?php echo $advisors['name']; ?>" class="img-fluid">
                                </div>
                                <div class="team-content">
                                    <h2><?php echo $advisors['name']; ?></h2>
                                    <h3><?php echo $advisors['title']; ?></h3>
                                </div>
                            </div>
                        </a>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    </div>-->

    <div class="team-sec sec blue-gr">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8 col-12">
                    <div class="sec-head center white">
                        <h2>
                            Pillars of <span>CHRO Bridge</span>
                        </h2>

                    </div>
                </div>
                <div class="col-12">
                    <div class="team-swiper swiper mb-30 swiper-initialized swiper-horizontal swiper-pointer-events">
                        <div class="swiper-wrapper" id="swiper-wrapper-d2b091d97988c31f" aria-live="off"
                            style="transform: translate3d(-1670.67px, 0px, 0px); transition-duration: 0ms;">
                            <?php foreach ($data_partners['partners'] as $partner): ?>
                                <div class="swiper-slide" role="group" aria-label="1 / 6"
                                    style="width: 218.667px; margin-right: 20px;" data-swiper-slide-index="0">
                                    <a href="<?= $partner['linkedin']; ?>" target="_blank" class="team-card style-2"
                                        data-faitracker-click-bind="true">
                                        <div class="over">
                                            <span></span>
                                            <div class="con">
                                                <span class="tit">
                                                    <h3><?= htmlspecialchars($partner['name']); ?></h3>
                                                </span>
                                                <p><?= htmlspecialchars($partner['title']); ?></p>
                                                <span class="linked-in">
                                                    <img src="https://cfobridge.com/assets/images/linkedin.svg" alt="">
                                                </span>
                                            </div>
                                        </div>
                                        <div class="m-wrap">
                                            <img src="https://kfwcorp.com/assets/uploads/teams/<?= htmlspecialchars($partner['img']); ?>"
                                                alt="Image of <?= htmlspecialchars($partner['name']); ?>">
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
</div>

</div>
</div>


<section class="sec ct-sec blue-gr">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-7 col-12">
                <div class="sec-head center white">
                    <h2 data-aos="fade-up" data-aos-once="true" data-aos-duration="1000">
                        Ready to elevate your <br><span>talent strategy to next level</span>

                    </h2>
                    <p class="para" data-aos-once="true" data-aos="fade-up" data-aos-duration="1000"
                        data-aos-delay="200">
                        Let's talk! Book your free consultation today
                    </p>
                </div>
                <a href="https://ctobridge.com" target="_blank" class="main-btn with-icon center" data-aos="fade-up"
                    data-aos-duration="1000" data-aos-once="true" data-aos-delay="300">
                    <span> Get In Touch</span>
                    <img data-src="<?= base_url() ?>assets/images/blue-arrow.svg" alt="">
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
                    <img data-src="<?= base_url() ?>assets/images/logo.png" alt="">
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
                            <img data-src="<?= base_url() ?>assets/images/linked.svg" alt="">
                        </a>
                    </li>
                    <li data-aos="fade-up" data-aos-once="true" data-aos-duration="1000" data-aos-delay="400">
                        <a href="https://youtube.com/@cfobridge2654" target="_blank">
                            <img data-src="<?= base_url() ?>assets/images/youtube.svg" alt="">
                        </a>
                    </li>
                    <li data-aos="fade-up" data-aos-once="true" data-aos-duration="1000" data-aos-delay="500">
                        <a href="https://www.instagram.com/cfo.bridge/" target="_blank">
                            <img data-src="<?= base_url() ?>assets/images/insta.svg" alt="">
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
                            <img data-src="<?= base_url() ?>assets/images/ph.svg" alt="">
                            <span>+91 84228 53313</span>
                        </a>
                    </li>
                    <li>
                        <a href="mailto:vidya@cfobridge.com">
                            <img data-src="<?= base_url() ?>assets/images/ml.svg" alt="">
                            <span>vidya@cfobridge.com</span>
                        </a>
                    </li>
                    <li>
                        <a href="javascript:void(0)">
                            <img data-src="<?= base_url() ?>assets/images/loc.svg" alt="">
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
                                <img src="assets/images/blue-arrow.svg" alt="">
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
<script src="<?= base_url('assets/js/form.js?v=4567812563225') ?>"></script>
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
<noscript>
    <img height="1" width="1" style="display:none;" alt=""
        src="https://px.ads.linkedin.com/collect/?pid=5591585&fmt=gif" />
</noscript>
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
                    <button class="vid-play-btn play-btn" ><img src="assets/images/play.svg" alt="" /></button>`
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