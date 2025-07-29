<style>
.main-nav,
.main-footer,
.ct-sec {
    display: none;
}

.play-btn {
  width: 100px;
  height: 100px;
  border-radius: 50%;
  background: var(--blue);
  display: flex;
  align-items: center;
  justify-content: center;
  outline: none !important;
  border: none !important;
  transition: 0.3s cubic-bezier(0.175, 0.885, 0.32, 1.275);
  position: relative;
  animation: flo 0.650s ease-in-out infinite alternate;
}

.play-btn::after {
  content: "";
  position: absolute;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
  border-radius: 50%;
  border: 1px solid var(--blue);
  transition: none !important;
  transition-delay: none !important;
  animation: flo2 0.650s ease-in-out infinite alternate;
  animation-delay: 0.350s !important;
}
.play-btn:hover {
  box-shadow: 0px 0px 0px 20px rgba(1, 66, 147, 0.2);
  transform: scale(1.15);
}
.play-btn:hover:after {
  transform: scale(1.5);
}
.play-btn:hover img {
  transform: scale(1.15);
}
.play-btn img {
  width: 30px;
  transition: 0.3s cubic-bezier(0.175, 0.885, 0.32, 1.275);
  animation: flo3 0.650s ease-in-out infinite alternate;
}

.banner-content .para {
    color: black;
    font-size: 16px;
    max-width: 400px;
    margin-bottom: 1.5em;
}
@keyframes flo {
    0%{
        box-shadow: 0px 0px 0px 0px rgba(1, 66, 147, 0.2);
        transform: translate(-50%,-50%) scale(1);
    }
    100%{
        box-shadow: 0px 0px 0px 20px rgba(1, 66, 147, 0.2);
        transform: translate(-50%,-50%) scale(1.15);
    }
}
@keyframes flo2 {
    0%{
        transform: scale(1);
    }
    100%{
        transform: scale(1.5);
    }
}
@keyframes flo3 {
    0%{
        transform: scale(1);
    }
    100%{
        transform: scale(1.15);
    }
}
</style>
<a href="#book-a-free-consultation" class="main-btn circle fx-btn">
    <span>Book a free consultation</span>
</a>
<nav class="l-nav">
    <div class="l-part">
        <a href="" class="l-logo">
            <img src="<?=base_url()?>assets/images/logo.png" alt="">
        </a>

    </div>
    <div class="r-part">
        
    </div>
</nav>
<header class="main-header style-2">
    <img src="assets/images/purple-spot.svg" class="spot" alt="">
    <img src="assets/images/form-bg.svg" class="form-bg" alt="">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-5 col-12">
                <div class="banner-content style-2">
                    <h1>
                        Meet India's <span>TOP</span> Virtual CFO’s
                    </h1>
                    <p class="para">
                        Elevate your business with unparalleled financial expertise.
                    </p>
                    <!-- <a href="" target="blank" class="main-btn with-icon circle">
                        <span>Discover the difference</span>
                        <img src="<?=base_url()?>assets/images/blue-arrow.svg" alt="">
                    </a> -->
                    <div class="re-wrap">
                        <img src="<?=base_url()?>assets/images/re-img.png" alt="">
                        <div class="det">
                            <h3>
                                250+
                            </h3>
                            <div class="five-stars">
                            ⭐⭐⭐⭐⭐
                            </div>
                            <p>Reviews</p>
                        </div>
                    </div>
                    <div class="vid-wrap youtube-video-place mt-30" data-url="https://www.youtube.com/embed/ethrb2wZiNQ?si=nuVTKao-h1u7FvGd" id="ppk" >
                    </div>
                </div>
            </div>
            <div class="col-lg-6 offset-lg-1 col-12" id="book-a-free-consultation">
                <div class="header-form">
                    <form data-form="insertcontact" data-form-type="landing-page" action="" class="form">
                        <div class="row">
                            <input type="hidden" name="page_url" value="">
                            <div class="col-12">
                                <div class="secu-wrap">
                                    <img src="<?=base_url()?>assets/images/lock.svg" alt="">
                                    <span>We don’t spam you, using your details</span>
                                </div>
                            </div>
                            <!-- <div class="col-lg-6 col-12">
                                <div class="form-group">
                                    <div class="inp-grp">
                                        <input type="text" name="f-name" placeholder="First Name">
                                    </div>
                                </div>
                            </div> -->
                            <div class="col-lg-6 col-12">
                                <div class="form-group">
                                    <div class="inp-grp">
                                        <input type="text" name="name" placeholder="Full Name">
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 col-12">
                                <div class="form-group">
                                    <div class="inp-grp">
                                        <input type="email" name="email" placeholder="Business Email">
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-12 col-12">
                                <div class="form-group">
                                    <div class="inp-grp">
                                        <input type="tel" id="phone" name="phone"  placeholder="Enter Phone Number">
                                    </div>
                                     <div id="output" style="font-size: 14px;margin-top:5px"></div>
                                </div>
                            </div>
                            <div class="col-lg-12 col-12">
                                <div class="form-group">
                                    <div class="inp-grp">
                                        <input type="text" name="company" placeholder="Organisation">
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-12 col-12">
                                <div class="form-group">
                                    <div class="inp-grp">
                                        <div class="select-group">
                                            <select name="type" id="">
                                                <option value="">Purpose Of Enquiry</option>
                                                <option value="Virtual CFO Service">Virtual CFO Service </option>
                                                <option value="Interim CFO Services">Interim CFO Services </option>
                                                <option value="Financial Planning & Analysis">Financial Planning & Analysis </option>
                                                <option value="Working Capital Management">Working Capital Management </option>
                                                <option value="Mergers & Acquisitions">Mergers & Acquisitions </option>
                                                <option value="Taxation Advisory">Taxation Advisory </option>
                                            </select>
                                            <img src="<?=base_url()?>assets/images/drop-select-arrow.svg" alt="">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-12 col-12">
                                <div class="form-group">
                                    <div class="inp-grp">
                                        <textarea name="message" id="" rows="5" placeholder="Message"></textarea>
                                    </div>
                                </div>
                            </div>
                            <input type="hidden" name="formt" value="leform">
                            <div class="col-12">
                                <div class="cus-rd-container">
                                    <div class="cus-check">
                                        <input type="checkbox" class="cus-check-inp-er" value="1" id="privacy" name="privacychecked" />
                                        <label for="privacy">
                                        I have read the <a href="<?=base_url('privacy-policy')?>">Privacy Policy</a>
                                        </label>
                                    </div>
                                    <div class="cus-check">
                                        <input type="checkbox" class="cus-check-inp-er" value="1" id="whatsapp" name="whatsappchecked" />
                                        <label for="whatsapp">
                                        Send updates on WhatsApp 
                                        </label>
                                    </div>
                                    <div class="cus-check">
                                        <input type="checkbox" class="cus-check-inp-er" value="1" id="app" name="notjobchecked" />
                                        <label for="app">
                                        This is not a Job Application
                                        </label>
                                    </div>
                                </div>
                                <div id="cus-check-inp-er-el" class="mb-30"></div>
                            </div>
                            <div class="col-12">
                                <button type="submit" class="main-btn with-icon circle">
                                    <span>Submit</span>
                                    <img src="<?=base_url()?>assets/images/blue-arrow.svg" alt="Blue Arrow Icon">
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</header>

<section class="lg-sec sec">
    <div class="container">
        <div class="row justify-content-center">

            <div class="col-12">
                <div class="cl-logo-track" style="--anim: slideLoop 25s linear infinite">
                    <div class="lg-l">
                        <a href="https://www.3c3.in/" target="blank" data-faitracker-click-bind="true"><img
                                src="https://cfobridge.com/uploads/images/110.png.webp" alt=""></a>
                    </div>
                    <div class="lg-l">
                        <a href="https://www.42cards.com/" target="blank" data-faitracker-click-bind="true"><img
                                src="https://cfobridge.com/uploads/images/27.jpg.webp" alt=""></a>
                    </div>
                    <div class="lg-l">
                        <a href="https://www.99corporates.com/Company-Overview/70MM-DIGIVERSE-PRIVATE-LIMITED/CIN/U72900TN2021PTC148674"
                            target="blank" data-faitracker-click-bind="true"><img
                                src="https://cfobridge.com/uploads/images/38.png.webp" alt=""></a>
                    </div>
                    <div class="lg-l">
                        <a href="https://www.a-1fenceproducts.com/" target="blank"
                            data-faitracker-click-bind="true"><img src="https://cfobridge.com/uploads/images/57.jpeg.webp"
                                alt=""></a>
                    </div>
                    <div class="lg-l">
                        <a href="https://www.linkedin.com/company/abilities-india-pistons-and-rings-limited/"
                            target="blank" data-faitracker-click-bind="true"><img
                                src="https://cfobridge.com/uploads/images/untitleddesign40-removebg-preview.png.webp"
                                alt=""></a>
                    </div>
                    <div class="lg-l">
                        <a href="https://www.dnb.com/business-directory/company-profiles.acalpo_pte_ltd.55f441652ac5696d9f06865b0cbe2275.html"
                            target="blank" data-faitracker-click-bind="true"><img
                                src="https://cfobridge.com/uploads/images/untitleddesign41-removebg-preview.png.webp"
                                alt=""></a>
                    </div>
                    <div class="lg-l">
                        <a href="https://actgrants.in/" target="blank" data-faitracker-click-bind="true"><img
                                src="https://cfobridge.com/uploads/images/untitleddesign42-removebg-preview.png.webp"
                                alt=""></a>
                    </div>
                    <div class="lg-l">
                        <a href="https://www.agdbio.com/" target="blank" data-faitracker-click-bind="true"><img
                                src="https://cfobridge.com/uploads/images/untitleddesign43-removebg-preview.png.webp"
                                alt=""></a>
                    </div>
                    <div class="lg-l">
                        <a href="https://ana-intl.com/aboutus.html" target="blank"
                            data-faitracker-click-bind="true"><img
                                src="https://cfobridge.com/uploads/images/untitled-design-44.png.webp" alt=""></a>
                    </div>
                    <div class="lg-l">
                        <a href="https://www.anjalitprecision.com/" target="blank"
                            data-faitracker-click-bind="true"><img
                                src="https://cfobridge.com/uploads/images/untitled-design-45.png.webp" alt=""></a>
                    </div>
                    <div class="lg-l">
                        <a href="https://www.annovasolutions.com/" target="blank" data-faitracker-click-bind="true"><img
                                src="https://cfobridge.com/uploads/images/106.png.webp" alt=""></a>
                    </div>
                    <div class="lg-l">
                        <a href="https://www.anpg.in/" target="blank" data-faitracker-click-bind="true"><img
                                src="https://cfobridge.com/uploads/images/88.png.webp" alt=""></a>
                    </div>
                    <div class="lg-l">
                        <a href="https://arsgroup.in/energy.html" target="blank" data-faitracker-click-bind="true"><img
                                src="https://cfobridge.com/uploads/images/63.png.webp" alt=""></a>
                    </div>
                    <div class="lg-l">
                        <a href="https://ashokiron.com/" target="blank" data-faitracker-click-bind="true"><img
                                src="https://cfobridge.com/uploads/images/155.png.webp" alt=""></a>
                    </div>
                    <div class="lg-l">
                        <a href="https://avigloplast.com/" target="blank" data-faitracker-click-bind="true"><img
                                src="https://cfobridge.com/uploads/images/710.png.webp" alt=""></a>
                    </div>
                    <div class="lg-l">
                        <a href="https://www.brandmusiq.com/" target="blank" data-faitracker-click-bind="true"><img
                                src="https://cfobridge.com/uploads/images/165.png.webp" alt=""></a>
                    </div>
                    <div class="lg-l">
                        <a href="https://www.chesadentalcare.com/" target="blank" data-faitracker-click-bind="true"><img
                                src="https://cfobridge.com/uploads/images/205.png.webp" alt=""></a>
                    </div>
                    <div class="lg-l">
                        <a href="https://www.zaubacorp.com/company/CR-HEALTHCARE-SERVICES-PRIVATE-LIMITED/U85110TG2021PTC153300"
                            target="blank" data-faitracker-click-bind="true"><img
                                src="https://cfobridge.com/uploads/images/175.png.webp" alt=""></a>
                    </div>
                    <div class="lg-l">
                        <a href="https://blowhorn.com/termsofservice" target="blank"
                            data-faitracker-click-bind="true"><img src="https://cfobridge.com/uploads/images/195.png.webp"
                                alt=""></a>
                    </div>
                    <div class="lg-l">
                        <a href="http://deviprojects.com/" target="blank" data-faitracker-click-bind="true"><img
                                src="https://cfobridge.com/uploads/images/226.png.webp" alt=""></a>
                    </div>
                    <div class="lg-l">
                        <a href="https://www.3c3.in/" target="blank" data-faitracker-click-bind="true"><img
                                src="https://cfobridge.com/uploads/images/110.png.webp" alt=""></a>
                    </div>
                    <div class="lg-l">
                        <a href="https://www.42cards.com/" target="blank" data-faitracker-click-bind="true"><img
                                src="https://cfobridge.com/uploads/images/27.jpg.webp" alt=""></a>
                    </div>
                    <div class="lg-l">
                        <a href="https://www.99corporates.com/Company-Overview/70MM-DIGIVERSE-PRIVATE-LIMITED/CIN/U72900TN2021PTC148674"
                            target="blank" data-faitracker-click-bind="true"><img
                                src="https://cfobridge.com/uploads/images/38.png.webp" alt=""></a>
                    </div>
                    <div class="lg-l">
                        <a href="https://www.a-1fenceproducts.com/" target="blank"
                            data-faitracker-click-bind="true"><img src="https://cfobridge.com/uploads/images/57.jpeg.webp"
                                alt=""></a>
                    </div>
                    <div class="lg-l">
                        <a href="https://www.linkedin.com/company/abilities-india-pistons-and-rings-limited/"
                            target="blank" data-faitracker-click-bind="true"><img
                                src="https://cfobridge.com/uploads/images/untitleddesign40-removebg-preview.png.webp"
                                alt=""></a>
                    </div>
                    <div class="lg-l">
                        <a href="https://www.dnb.com/business-directory/company-profiles.acalpo_pte_ltd.55f441652ac5696d9f06865b0cbe2275.html"
                            target="blank" data-faitracker-click-bind="true"><img
                                src="https://cfobridge.com/uploads/images/untitleddesign41-removebg-preview.png.webp"
                                alt=""></a>
                    </div>
                    <div class="lg-l">
                        <a href="https://actgrants.in/" target="blank" data-faitracker-click-bind="true"><img
                                src="https://cfobridge.com/uploads/images/untitleddesign42-removebg-preview.png.webp"
                                alt=""></a>
                    </div>
                    <div class="lg-l">
                        <a href="https://www.agdbio.com/" target="blank" data-faitracker-click-bind="true"><img
                                src="https://cfobridge.com/uploads/images/untitleddesign43-removebg-preview.png.webp"
                                alt=""></a>
                    </div>
                    <div class="lg-l">
                        <a href="https://ana-intl.com/aboutus.html" target="blank"
                            data-faitracker-click-bind="true"><img
                                src="https://cfobridge.com/uploads/images/untitled-design-44.png.webp" alt=""></a>
                    </div>
                    <div class="lg-l">
                        <a href="https://www.anjalitprecision.com/" target="blank"
                            data-faitracker-click-bind="true"><img
                                src="https://cfobridge.com/uploads/images/untitled-design-45.png.webp" alt=""></a>
                    </div>
                    <div class="lg-l">
                        <a href="https://www.annovasolutions.com/" target="blank" data-faitracker-click-bind="true"><img
                                src="https://cfobridge.com/uploads/images/106.png.webp" alt=""></a>
                    </div>
                    <div class="lg-l">
                        <a href="https://www.anpg.in/" target="blank" data-faitracker-click-bind="true"><img
                                src="https://cfobridge.com/uploads/images/88.png.webp" alt=""></a>
                    </div>
                    <div class="lg-l">
                        <a href="https://arsgroup.in/energy.html" target="blank" data-faitracker-click-bind="true"><img
                                src="https://cfobridge.com/uploads/images/63.png.webp" alt=""></a>
                    </div>
                    <div class="lg-l">
                        <a href="https://ashokiron.com/" target="blank" data-faitracker-click-bind="true"><img
                                src="https://cfobridge.com/uploads/images/155.png.webp" alt=""></a>
                    </div>
                    <div class="lg-l">
                        <a href="https://avigloplast.com/" target="blank" data-faitracker-click-bind="true"><img
                                src="https://cfobridge.com/uploads/images/710.png.webp" alt=""></a>
                    </div>
                    <div class="lg-l">
                        <a href="https://www.brandmusiq.com/" target="blank" data-faitracker-click-bind="true"><img
                                src="https://cfobridge.com/uploads/images/165.png.webp" alt=""></a>
                    </div>
                    <div class="lg-l">
                        <a href="https://www.chesadentalcare.com/" target="blank" data-faitracker-click-bind="true"><img
                                src="https://cfobridge.com/uploads/images/205.png.webp" alt=""></a>
                    </div>
                    <div class="lg-l">
                        <a href="https://www.zaubacorp.com/company/CR-HEALTHCARE-SERVICES-PRIVATE-LIMITED/U85110TG2021PTC153300"
                            target="blank" data-faitracker-click-bind="true"><img
                                src="https://cfobridge.com/uploads/images/175.png.webp" alt=""></a>
                    </div>
                    <div class="lg-l">
                        <a href="https://blowhorn.com/termsofservice" target="blank"
                            data-faitracker-click-bind="true"><img src="https://cfobridge.com/uploads/images/195.png.webp"
                                alt=""></a>
                    </div>
                    <div class="lg-l">
                        <a href="http://deviprojects.com/" target="blank" data-faitracker-click-bind="true"><img
                                src="https://cfobridge.com/uploads/images/226.png.webp" alt=""></a>
                    </div>
                </div>

            </div>
        </div>
    </div>
</section>

<section class="mvc-sec sec">
    <div class="container">
        <div class="row row-gap-25">
            <div class="col-lg-3 col-12">
                <div class="mvc-wrap">
                    <img src="<?=base_url()?>assets/images/mv1.svg" alt="">
                    <h3>MIS for Tracking & Decision Making</h3>
                    <p class="para">Integrity, reliability, and accountability are our three pillars of foundation.
                    </p>
                </div>
            </div>
            <div class="col-lg-3 col-12">
                <div class="mvc-wrap">
                    <img src="<?=base_url()?>assets/images/cash-flow.svg" alt="">
                    <h3>Cash Flow Management</h3>
                    <p class="para">
                        Our deep dive into receivables, inventory and payables helps businesses manage cash flows
                        effectively
                    </p>
                </div>
            </div>
            <div class="col-lg-3 col-12">
                <div class="mvc-wrap">
                    <img src="<?=base_url()?>assets/images/bottom-line.svg" alt="">
                    <h3>Top & Bottom Line Improvement</h3>
                    <p class="para">
                        360 degree Analysis of Competition, Costs and effective Tax planning to improve profitability
                    </p>
                </div>
            </div>
            <div class="col-lg-3 col-12">
                <div class="mvc-wrap">
                    <img src="<?=base_url()?>assets/images/investor.svg" alt="">
                    <h3>Investor Relationship & Reporting</h3>
                    <p class="para">
                        Presenting timely insightful reports to shareholders reflecting objectively the direction of
                        business growth and insights on performance
                    </p>
                </div>
            </div>
            <div class="col-lg-3 col-12">
                <div class="mvc-wrap">
                    <img src="<?=base_url()?>assets/images/account.svg" alt="">
                    <h3>Manage Accounting Policies & Procedures</h3>
                    <p class="para">
                        Streamlining accounting by establishing clear financial policies and procedures.
                    </p>
                </div>
            </div>
            <div class="col-lg-3 col-12">
                <div class="mvc-wrap">
                    <img src="<?=base_url()?>assets/images/control.svg" alt="">
                    <h3>Internal Control</h3>
                    <p class="para">
                        Tailored financial controls for reliable accounting and risk management.
                    </p>
                </div>
            </div>
            <div class="col-lg-3 col-12">
                <div class="mvc-wrap">
                    <img src="<?=base_url()?>assets/images/compliance.svg" alt="">
                    <h3>Compliance</h3>
                    <p class="para">
                        Ensuring timely adherence to all laws and regulations.
                    </p>
                </div>
            </div>
            <div class="col-lg-3 col-12">
                <div class="mvc-wrap">
                    <img src="<?=base_url()?>assets/images/erp.svg" alt="">
                    <h3>ERP Implementation</h3>
                    <p class="para">
                        Ensuring proper implementation of ERP
                    </p>
                </div>
            </div>
            <div class="col-12 mt-40">
                <a href="#book-a-free-consultation" class="main-btn circle with-icon center">
                    <span>Schedule our call</span>
                    <img src="<?=base_url()?>assets/images/blue-arrow.svg" alt="Blue Arrow Icon">
                </a>
            </div>
        </div>
    </div>
</section>

<div class="team-sec bg-blue sec blue-gr">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-8 col-12">
                <div class="sec-head style-55 center white mb-40">
                    <h2>
                        Meet Our CFO Partners
                    </h2>
                </div>
            </div>
            <div class="col-12">
                <div class="team2-swiper swiper mb-30">
                    <div class="swiper-wrapper"
                        style="transform: translate3d(-3340px, 0px, 0px); transition-duration: 0ms;"
                        id="swiper-wrapper-b5f535114fed7fc2" aria-live="off">

                        <div class="swiper-slide ">
                            <a href="javascript:void(0)" class="team-card style-2 style-55"
                                data-faitracker-click-bind="true">
                                <div class="over">
                                    <span></span>
                                    <div class="con">
                                        <span class="tit">
                                            <h3>
                                                Srinivasan V
                                            </h3>
                                        </span>
                                        <p>
                                         CEO of CFO Bridge with over 30 years of experience in the fields of oil, gas, and e-commerce. A Chartered Accountant based in Mumbai.
                                        </p>
                                    </div>
                                </div>
                                <div class="m-wrap">
                                    <img src="<?=base_url()?>assets/images/srinivasan.jpg" alt="">
                                </div>
                            </a>
                        </div>
                        <div class="swiper-slide ">
                            <a href="javascript:void(0)" class="team-card style-2 style-55"
                                data-faitracker-click-bind="true">
                                <div class="over">
                                    <span></span>
                                    <div class="con">
                                        <span class="tit">
                                            <h3>
                                                Shilpa Desai
                                            </h3>
                                        </span>
                                        <p>
                                        Bringing 24 years of financial expertise to the table, Shilpa has a background in e-commerce, logistics, and hospitality. She is a Chartered Accountant hailing from Mumbai .
                                        </p>
                                    </div>
                                </div>
                                <div class="m-wrap">
                                    <img src="<?=base_url()?>assets/images/shilpa.jpg" alt="">
                                </div>
                            </a>
                        </div>
                        <div class="swiper-slide ">
                            <a href="javascript:void(0)" class="team-card style-2 style-55"
                                data-faitracker-click-bind="true">
                                <div class="over">
                                    <span></span>
                                    <div class="con">
                                        <span class="tit">
                                            <h3>
                                                Rajneesh Jain
                                            </h3>
                                        </span>
                                        <p>
                                        With 23 years of experience in the fields of pharma, real estate, manufacturing, and IT, Rajneesh is a seasoned Chartered Accountant based in Mumbai.
                                        </p>
                                    </div>
                                </div>
                                <div class="m-wrap">
                                    <img src="<?=base_url()?>assets/images/rajneesh.jpg" alt="">
                                </div>
                            </a>
                        </div>
                        <div class="swiper-slide ">
                            <a href="javascript:void(0)" class="team-card style-2 style-55"
                                data-faitracker-click-bind="true">
                                <div class="over">
                                    <span></span>
                                    <div class="con">
                                        <span class="tit">
                                            <h3>
                                                Ramnarayan V
                                            </h3>
                                        </span>
                                        <p>
                                        Based in Chennai, Ramnarayan is a Chartered Accountant and CMA with 32 years of experience in food and beverage, IT, and manufacturing.
                                        </p>
                                    </div>
                                </div>
                                <div class="m-wrap">
                                    <img src="<?=base_url()?>assets/images/ramnarayan.jpg" alt="">
                                </div>
                            </a>
                        </div>
                        <div class="swiper-slide ">
                            <a href="javascript:void(0)" class="team-card style-2 style-55"
                                data-faitracker-click-bind="true">
                                <div class="over">
                                    <span></span>
                                    <div class="con">
                                        <span class="tit">
                                            <h3>Hitesh Kothari</h3>
                                        </span>
                                        <p>
                                            A Mumbai-based professional with an MBA in Finance and 12 years of experience, Hitesh excels in logistics, startups, manufacturing, and real estate.
                                        </p>

                                    </div>
                                </div>
                                <div class="m-wrap">
                                    <img src="<?=base_url()?>uploads/images/untitled-design-17.png.webp" alt="">
                                </div>
                            </a>
                        </div>



                    </div>
                    <span class="swiper-notification" aria-live="assertive" aria-atomic="true"></span>
                </div>
            </div>
        </div>
    </div>
</div>

<section class="sec pp-sec style-55">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12">
                <div class="sec-head center style-55 mb-30">
                    <h2>
                        The New Age Solution: Virtual CFO for SMEs
                    </h2>
                </div>
            </div>
            <div class="col-lg-12 col-12">
                <div class="icc-container style-55">
                    <div class="icc style-55">
                        <img src="assets/images/p01.svg" alt="">
                        <p>Cost-Effective Solution</p>
                        <p class="para">
                            Access high-level financial expertise without the overheads of a full-time salary.
                        </p>
                    </div>
                    <div class="icc style-55">
                        <img src="assets/images/p02.svg" alt="">
                        <p>Flexible Engagement</p>
                        <p class="para">
                            Tailored services to fit the unique needs and growth stages of SMEs.
                        </p>
                    </div>
                    <div class="icc style-55">
                        <img src="assets/images/p03.svg" alt="">
                        <p>Strategic Financial Guidance</p>
                        <p class="para">
                            Navigate complex financial landscapes with insights from seasoned professionals.
                        </p>
                    </div>
                    <div class="icc style-55">
                        <img src="assets/images/p04.svg" alt="">
                        <p>On-Demand Expertise</p>
                        <p class="para">
                             Get timely financial advice and support whenever your business requires it.
                        </p>
                    </div>

                </div>
            </div>
        </div>
    </div>
</section>

<section class="sec uni-sec style-55 ">
    <img src="https://cfobridge.com/assets/images/path.svg" alt="">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="sec-head style-55 center">
                    <h2>Our Proven Process</h2>
                    <p class="para">
                    Journey with CFO Bridge: From Understanding to Continuous Guidance
                    </p>
                </div>
            </div>
            <div class="col-12">
                <div class="uni-container ">
                    <div class="uni-card">
                        <img src="https://cfobridge.com/uploads/images/asset-231-28.png.webp" alt="">
                        <div class="det">
                            <h3>Understand Client Needs</h3>
                        </div>
                    </div>
                    <div class="uni-card">
                        <img src="https://cfobridge.com/uploads/images/asset-238-28.png.webp" alt="">
                        <div class="det">
                            <h3>Assign Suitable CFO Partner</h3>
                        </div>
                    </div>
                    <div class="uni-card">
                        <img src="https://cfobridge.com/uploads/images/asset-234-28.png.webp" alt="">
                        <div class="det">
                            <h3>Detailed Financial Analysis Strategic Planning & Implementation</h3>
                        </div>
                    </div>
                    <div class="uni-card">
                        <img src="https://cfobridge.com/uploads/images/asset-241-281.png.webp" alt="">
                        <div class="det">
                            <h3>Regular Monitoring & Reporting</h3>
                        </div>
                    </div>
                    <div class="uni-card">
                        <img src="https://cfobridge.com/uploads/images/asset-254-281.png.webp" alt="">
                        <div class="det">
                            <h3>Continuous Support & Guidance</h3>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="test-sec sec">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="sec-head center test-head style-55">
                    <h2>Testimonials</h2>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <div class="test-l-swiper-container">
                    <img src="<?=base_url()?>assets/images/p-spot.svg" alt="">
                    <div class="test-l-swiper swiper">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide">
                                <div class="test-l-card">
                                    <div class="test-l-det">
                                        <img src="<?=base_url()?>assets/images/vishal.png" alt="">
                                        <div class="det">
                                            <h3>Vishal Gondal</h3>
                                            <p>CEO and Founder - Goqii</p>
                                        </div>
                                    </div>
                                    <p class="para">
                                    CFO Bridge has been a game changer for us; they have transformed our finance function.
                                    </p>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="test-l-card">
                                    <div class="test-l-det">
                                        <img src="<?=base_url()?>assets/images/sidhi.png" alt="">
                                        <div class="det">
                                            <h3>Siddhi Shah</h3>
                                            <p>Founder & Owner - Printstop India Pvt Ltd</p>
                                        </div>
                                    </div>
                                    <p class="para">
                                    Beyond mere tools, it's the minds that wield them that truly matter.
                                    </p>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="test-l-card">
                                    <div class="test-l-det">
                                        <img src="<?=base_url()?>assets/images/akhiles.png" alt="">
                                        <div class="det">
                                            <h3>Akhilesh Bhargava</h3>
                                            <p>MD - AVI Global Plast </p>
                                        </div>
                                    </div>
                                    <p class="para">
                                    This platform has truly transformed the way we do business
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="ctt-sec">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="ctt-wrap">
                    <div class="row align-items-end">
                        <div class="col-lg-6 col-12">
                            <div class="ctt-img">
                                <img src="<?=base_url()?>assets/images/ct-lp.png" alt="">
                            </div>
                        </div>
                        <div class="col-lg-6 col-12">
                            <div class="ctt-con">
                                <div class="sec-head text-center white style-55 white">
                                    <h2 class="mb-30">Ready to Elevate Your Financial Strategy?</h2>
                                </div>
                                <a href="#book-a-free-consultation" class="main-btn circle with-icon white-btn center">
                                    <span>Book a free consultation</span>
                                    <img src="<?=base_url()?>assets/images/blue-arrow.svg" alt="Blue Arrow Icon">
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<footer class="l-footer">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <a href="#book-a-free-consultation" class="ft-l-logo">
                    <img src="<?=base_url()?>assets/images/logo.png" alt="">
                </a>
                <div class="ft-bottom ft-l-bottom">
                    <p>© CFO Bridge Pvt. Ltd | <a href="https://dimerse.com/" target="_blank">Code & Design Credits</a></p>
                </div>
            </div>
        </div>
    </div>
</footer>
<script>
    $('input[name=page_url]').val(window.location.href)

    $(window).scroll(function(){
        if($(window).scrollTop() > 1000 && $(window).innerWidth() < 600){
            $('.fx-btn').fadeIn();
        }else{
            $('.fx-btn').fadeOut();
        }
    }).trigger('scroll');
</script>