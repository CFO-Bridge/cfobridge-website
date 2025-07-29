<header class="inner-banner sec"
    style="background:url('<?=base_url('uploads/images/').$pserv['image_banner']?>') center/cover no-repeat;">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-6 col-12">
                <div class="sec-head white">
                    <h1>
                        <?=$pserv['heading_banner']?>
                    </h1>
                </div>
                <div class="para white mt-30">
                <?=$pserv['description_banner']?>
                </div>
                <div class="tes-swiper mt-30 swiper">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <div class="tes-card">
                                <div class="det">
                                    <img src="<?=base_url()?>assets/images/quote-icon.svg" alt="">
                                    <p class="para">
                                    CFO Bridge is simply outstanding. Their financial expertise and personalized approach have made a significant difference in my business. We are highly impressed with their Financial Planning & Analysis Services.
                                    </p>
                                </div>
                                <div class="btm">
                                    <div class="prof">
                                        <img src="<?=base_url()?>uploads/images/user.png" alt="<?=$row['alt_text']?>">
                                    </div>
                                    <div>
                                        <h3>Dhaval Pandya</h3>
                                        <img src="<?=base_url()?>assets/images/five-star.svg" alt="">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-pagination"></div>
                </div>
                <?php if(!empty($pserv['bannerCounterArr']))
                {
                    $bannerCounterArr = $pserv['bannerCounterArr'];
                    ?>
                    <div class="vf-container">
                        <?php  foreach($bannerCounterArr as $arr){
                   ?>
 <div class="vf-wrap">
                        <img src="<?=base_url("uploads/images/{$arr['image']}")?>" alt="<?=$arr['alt_text']?>">
                        <div>
                            <h3><?=$arr['label']?></h3>
                            <p><?=$arr['count']?></p>
                        </div>
                    </div>
                    <?php } ?>
                    </div>
               <?php } ?>
                
                   
                    
               
            </div>
            <div class="col-lg-5 offset-lg-1 col-12">
                <div class="head-form">
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
                                        <input type="tel" id="phone"class="form-control phone-input-tel"
                                            placeholder="Phone Number" name="phone">
                                    </div>
                                     <div id="output" style="font-size: 14px;margin-top:5px"></div>
                                </div>
                            </div>
                            <!-- <div class="col-lg-12 col-12">
                                <div class="form-group">
                                    <label fosr="" class="label-text">Organization</label>
                                    <div class="inp-grp">
                                        <input type="text" name="company">
                                    </div>
                                </div>
                            </div> -->
                            <div class="col-lg-12 col-12">
                                <div class="form-group">
                                    <label fosr="" class="label-text">Need assistance for</label>
                                    <div class="inp-grp">
                                        <div class="select-grp">
                                            <select name="type" id="">
                                                <option value="">Purpose Of Enquiry</option>
                                                <option value="Virtual CFO Service">Virtual CFO Service </option>
                                                <option value="Interim CFO Services">Interim CFO Services </option>
                                                <option value="Financial Planning &amp; Analysis">Financial Planning
                                                    &amp; Analysis </option>
                                                <option value="Working Capital Management">Working Capital Management
                                                </option>
                                                <option value="Mergers &amp; Acquisitions">Mergers &amp; Acquisitions
                                                </option>
                                                <option value="Taxation Advisory">Taxation Advisory </option>
                                            </select>
                                            <img src="assets/images/arrow.svg" alt="">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-12 col-12">
                                <div class="form-group">
                                    <label fosr="" class="label-text">Message</label>
                                    <div class="inp-grp">
                                        <textarea name="message" id="" rows="3"></textarea>
                                    </div>
                                </div>
                                <input type="hidden" name="download" value="0">
                            </div>
                            <div class="col-12">
                                <div class="cus-rd-container">
                                    <div class="cus-check">
                                        <input type="checkbox" class="cus-check-inp-er" value="1" id="privacy"
                                            name="privacychecked" />
                                        <label for="privacy">
                                            I have read the <a href="<?=base_url('privacy-policy')?>">Privacy Policy</a>
                                        </label>
                                    </div>
                                    <div class="cus-check">
                                        <input type="checkbox" class="cus-check-inp-er" value="1" id="whatsapp"
                                            name="whatsappchecked" />
                                        <label for="whatsapp">
                                            Send updates on WhatsApp
                                        </label>
                                    </div>
                                    <div class="cus-check">
                                        <input type="checkbox" class="cus-check-inp-er" value="1" id="app"
                                            name="notjobchecked" />
                                        <label for="app">
                                            This is not a Job Application
                                        </label>
                                    </div>
                                </div>
                                <div id="cus-check-inp-er-el" class="mb-30"></div>
                            </div>
                            <div class="col-12">
                                <input type="hidden" name="url"
                                    value="<?=(empty($_SERVER['HTTPS']) ? 'http' : 'https') . "://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]"?>" />
                                <button type="submit" class="main-btn with-icon mt-10">
                                    <span>Get In Touch</span>
                                    <img src="assets/images/blue-arrow.svg" alt="Blue Arrow Icon">
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</header>

<!-- 
    <section class="sec">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="sec-head center">
                        <h2>sdfafa</h2>
                    </div>
                </div>
            </div>
            <div class="row row-gap-25 mt-50">
                <div class="col-lg-4 col-md-6 col-12">
                    <div class="service-card-one">
                        <div class="row">
                            <div class="col-auto d-flex justify-content-center align-items-center  service_card_icon">
                                <i class="bi bi-bullseye"></i>
                            </div>
                            <div class="col service_card_content">
                                <div class="service_card_title">
                                    <h3>Strategic Financial Planning</h3>
                                    <hr class="service_card_title_underline">
                                </div>
                                <div class="service_card_desc">
                                    <p>Tailoring financial strategies to align with your business goals, ensuring sustainable growth and long-term profitability.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>
-->
<section class="sec">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="sec-head center">
                    <h2><?=$pserv['keybenefits_heading']?></h2>
                    </div>
                </div>
            </div>
            <div class="row row-gap-25 mt-50">
            <?php if(!empty($pserv['keybenefitsArr']))
                    {
                        $keybenefitsArr = json_decode($pserv['keybenefitsArr'],true);
                        foreach($keybenefitsArr as $row)
                        {
                            ?>
                <div class="col-lg-4 col-md-6 col-12">
                    <div class="service-card-one">
                        <div class="row">
                            <div class="col-auto d-flex justify-content-center align-items-center  service_card_icon">
                            <img src="<?=base_url("uploads/images/{$row['heading']}.png")?>" width="40px" alt="">
                            </div>
                            <div class="col service_card_content">
                                <div class="service_card_title">
                                    <h3><?=$row['heading']?></h3>
                                    <hr class="service_card_title_underline">
                                </div>
                                <div class="service_card_desc">
                                    <p><?=$row['description']?></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                
           <?php }}?>

            </div>
        </div>
    </section>

<section class="sec">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="sec-head center">
                    <h2><?=$pserv['serviceworks_heading']?></h2>
                </div>
            </div>
        </div>
    </div>
</section>
<div class="">
    <img src="<?=base_url("uploads/images/{$pserv['serviceworks_image']}")?>" class="img-full" alt="<?=$pserv['serviceworks_alt_text']?>">
</div>
<section class="sec">
    <div class="container">
        <div class="row row-gap-25 mt-50">
        <?php if(!empty($pserv['serviceworksArr']))
                    {
                        $serviceworksArr = json_decode($pserv['serviceworksArr'],true);
                        $srcounter=1;
                        foreach($serviceworksArr as $row)
                        {
                            ?>
            <div class="col-lg-4 col-md-6 col-12">
                <div class="service-card-two">
                    <div class="row">
                        <div class="d-flex justify-content-center align-items-center "> 
                            <div class="service_card_two_icon  d-flex justify-content-center align-items-center  ">
                                <img src="<?=base_url("uploads/images/{$row['heading']}.png")?>" width="50px" alt="">
                            </div>
                        </div>
                       
                        <div class="col service_card_two_content">
                            
                            <div class="service_card_two_title">
                                <h3><?=$row['heading']?></h3>
                            </div>
                            <div class="service_card_two_desc">
                                <p><?=$row['description']?></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
            <?php }}?>
        </div>
    </div>
</section>

<section class="ind-sec bg-grey">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-5 col-12">
                <div class="ind-con py-5">
                    <div class="sec-head mb-30">
                        <h2>
                            <?=$pserv['heading_about']?>
                        </h2>
                    </div>
                    <p class="para">
                        <?=$pserv['description_about']?>
                    </p>
                    <a href="javascript:void(0) " data-bs-toggle="modal" data-bs-target="#download-brochure"
                        class="main-btn with-icon dw-btn">
                        <span>Download The Brochure</span>
                        <img src="<?=base_url('assets/images/blue-arrow.svg')?>" alt="Blue Arrow Icon">
                    </a>
                </div>
            </div>
            <div class="col-lg-6 offset-lg-1 col-12">
                <div class="ind-img">
                    <img src="<?=base_url('uploads/images/').$pserv['image_about']?>" class="img-full"
                        alt="<?=$pserv['alt_text_about']?>">
                </div>
            </div>
        </div>
    </div>
</section>

<section class="what-sec sec">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-10 col-12">
                <div class="sec-head center mb-30">
                    <h2>
                        <?=$pserv['heading_we_do']?>
                    </h2>
                </div>
                <div class="row">
                    <div class="col-lg-6 col-12">
                        <p class="para">
                            <?=$pserv['description_left_we_do']?>
                        </p>
                    </div>
                    <div class="col-lg-6 col-12">
                        <p class="para">
                            <?=$pserv['description_right_we_do']?>
                        </p>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <div class="help-points-grid grid-4">
                    <?php if(!empty($pserv['card_json_we_do']))
                    {
                        $cardsounique = ($pserv['card_json_we_do']);
                        foreach($cardsounique as $row)
                        {
                            ?>
                    <div class="h-card">
                        <div class="ic">
                            <img src="<?=base_url('uploads/images/').$row['image']?>" alt="">
                        </div>
                        <h3>
                            <?=$row['heading']?>
                        </h3>
                        <p class="para">
                            <?=$row['description']?>
                        </p>
                    </div>
                    <?php
                        }
                    }?>
                </div>
            </div>
        </div>
    </div>
</section>



<section class="sec uni-sec light-bg">
    <img src="<?=base_url('assets/images/path.svg')?>" alt="">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="sec-head center">
                    <h2>
                        <?=$pserv['heading_so_unique']?>
                    </h2>
                </div>
            </div>
            <div class="col-12">
                <div class="uni-container">
                    <?php if(!empty($pserv['card_json_so_unique']))
                    {
                        $cardsounique = ($pserv['card_json_so_unique']);
                        foreach($cardsounique as $row)
                        {
                            ?>
                    <div class="uni-card">
                        <img src="<?=base_url('uploads/images/').$row['image']?>" alt="">
                        <div class="det">
                            <h3><?=$row['heading']?></h3>
                            <p>
                                <?=$row['description']?>
                            </p>
                        </div>
                    </div>
                    <?php
                        }
                    }?>


                </div>
            </div>
        </div>
    </div>
</section>

<?php include_once 'common/clientlogo.php'; ?>
<div class="container">
    <hr>
</div>
<?php include_once 'common/testimonial.php'; ?>

<section class="sec">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6 col-12">
                <div class="fn-img">
                    <img src="<?=base_url()?>assets/images/finance-image.svg" />
                </div>
            </div>
            <div class="col-lg-5 offset-lg-1 col-12">
                <div class="sec-head">
                    <div class="f-con">
                        <h2>
                            Assess Financial Preparedness
                        </h2>
                    </div>
                    <p class="para">
                        Use this free tool to check your financial preparedness in under 2 minutes.
                    </p>
                    <a href="<?=base_url('finance-tool')?>" class="main-btn with-icon mt-10">
                        <span>Take the Assessment</span>
                        <img src="<?=base_url()?>assets/images/blue-arrow.svg" alt="Blue Arrow Icon">
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>
<div class="container">
    <hr>
</div>

<?php include_once 'common/blogs.php'; ?>
<section class="faq-sec sec light-bg">
    <div class="container">
        <div class="row">
            <div class="col-12 mb-30">
                <div class="sec-head center">
                    <h2>
                        <?=$pserv['heading_faq']?>
                    </h2>
                </div>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-lg-8 col-12">
                <div class="a-cc accordion" id="accordionExample">
                    <?php if(!empty($pserv['card_json_faq']))
                    {
                        $i=0;
                        $faqs = json_decode($pserv['card_json_faq'],true);
                        if(is_array($faqs))
                        foreach($faqs as $row)
                        {
                            ?>

                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingOne-<?=$i?>">
                            <button class="accordion-button <?=$i!=0?"collapsed":""?>" type="button"
                                data-bs-toggle="collapse" data-bs-target="#collapse<?=$i?>" aria-expanded="true"
                                aria-controls="collapseOne">
                                <?=$row['heading']?>
                            </button>
                        </h2>
                        <div id="collapse<?=$i?>" class="accordion-collapse collapse <?=$i==0?"show":""?>"
                            aria-labelledby="headingOne-<?=$i?>" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <p class="para">
                                    <?=$row['description']?>
                                </p>
                            </div>
                        </div>
                    </div>
                    <?php
                    
                    $i++;  
                    }
                    }
                    ?>
                </div>
            </div>
        </div>
    </div>
</section>


<!-- <section class="demo-sec sec" id="gt-sec">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6 col-12">
                <div class="sec-head mb-30">
                    <h2>
                        Get In <span>Touch</span>
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
                                
                                    <input type="text" class="form-control phone-input-tel" placeholder="Phone Number"
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
                            <div class="form-group">
                                <label fosr="" class="label-text">Need assistance for</label>
                                <div class="inp-grp">
                                    <div class="select-grp">
                                        <select name="type" id="">
                                            <option value="">Purpose Of Enquiry</option>
                                            <option value="Virtual CFO Service">Virtual CFO Service </option>
                                            <option value="Interim CFO Services">Interim CFO Services </option>
                                            <option value="Financial Planning &amp; Analysis">Financial Planning &amp;
                                                Analysis </option>
                                            <option value="Working Capital Management">Working Capital Management
                                            </option>
                                            <option value="Mergers &amp; Acquisitions">Mergers &amp; Acquisitions
                                            </option>
                                            <option value="Taxation Advisory">Taxation Advisory </option>
                                        </select>
                                        <img src="assets/images/arrow.svg" alt="">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-12 col-12">
                            <div class="form-group">
                                <label fosr="" class="label-text">Message</label>
                                <div class="inp-grp">
                                    <textarea name="message" id="" rows="3"></textarea>
                                </div>
                            </div>
                            <input type="hidden" name="download" value="0">
                        </div>
                        <div class="col-12">
                            <div class="cus-rd-container">
                                <div class="cus-check">
                                    <input type="checkbox" class="cus-check-inp-er" value="1" id="privacy"
                                        name="privacychecked" />
                                    <label for="privacy">
                                        I have read the <a href="<?=base_url('privacy-policy')?>">Privacy Policy</a>
                                    </label>
                                </div>
                                <div class="cus-check">
                                    <input type="checkbox" class="cus-check-inp-er" value="1" id="whatsapp"
                                        name="whatsappchecked" />
                                    <label for="whatsapp">
                                        Send updates on WhatsApp
                                    </label>
                                </div>
                                <div class="cus-check">
                                    <input type="checkbox" class="cus-check-inp-er" value="1" id="app"
                                        name="notjobchecked" />
                                    <label for="app">
                                        This is not a Job Application
                                    </label>
                                </div>
                            </div>
                            <div id="cus-check-inp-er-el" class="mb-30"></div>
                        </div>
                        <div class="col-12">
                            <input type="hidden" name="url"
                                value="<?=(empty($_SERVER['HTTPS']) ? 'http' : 'https') . "://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]"?>" />
                            <button type="submit" class="main-btn with-icon mt-10">
                                <span>Get In Touch</span>
                                <img src="assets/images/blue-arrow.svg" alt="">
                            </button>
                        </div>
                    </div>
                </form>
            </div>
            <div class="col-lg-5 offset-lg-1 col-12">
                <div class="demo-img">
                    <img src="<?=base_url()?>assets/images/demo-img.jpg" alt="" />
                </div>
            </div>
        </div>
    </div>
</section> -->


<!-- Button trigger modal -->
<!-- <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
  Launch demo modal
</button> -->
<script>
$(document).ready(function() {
    $("#download-brochure-btn").addClass("d-none");
})
</script>