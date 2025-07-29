<section class="sec ct-sec blue-gr">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-7 col-12">
                <div class="sec-head center white">
                    <h2 data-aos="fade-up" data-aos-once="true" data-aos-duration="1000">
                        Ready to take your <br><span>finances to the next orbit? </span>
                        
                    </h2>
                    <p class="para" data-aos-once="true" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="200">
                        Let's talk! Book your free consultation today
                    </p>
                </div>
                <a href="<?=base_url('contact')?>" class="main-btn with-icon center" data-aos="fade-up" data-aos-duration="1000" data-aos-once="true" data-aos-delay="300">
                    <span> Get In Touch</span>
                    <img data-src="<?=base_url()?>assets/images/blue-arrow.svg" alt="Blue arrow icon">
                </a>
            </div>
        </div>
    </div>
</section>
<footer class="main-footer">
    <div class="container">
        <div class="row">
            <div class="col-lg-4 col-12">
                <a href="javascript:void(0)" class="ft-logo" data-aos-once="true" data-aos="fade-left" data-aos-duration="1000">
                    <img data-src="<?=base_url()?>assets/images/logo.png" alt="">
                </a>
                
                <p class="para" data-aos-once="true" data-aos="fade-left" data-aos-duration="1000" data-aos-delay="200">
                    Stay current with our latest insights
                </p>
                <div class="sub-container" data-aos-once="true" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="300">
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
                <ul class="ft-soc" >
                    <li data-aos="fade-up" data-aos-once="true" data-aos-duration="1000" data-aos-delay="600">
                        <a href="https://www.linkedin.com/company/cfo-bridge/" target="_blank" aria-label="Follow us on LinkedIn">
                            <img data-src="<?=base_url()?>assets/images/linked.svg" alt="">
                        </a>
                    </li>
                    <li data-aos="fade-up" data-aos-once="true" data-aos-duration="1000" data-aos-delay="400" aria-label="Visit our YouTube Channel">
                        <a href="https://youtube.com/@cfobridge2654" target="_blank">
                            <img data-src="<?=base_url()?>assets/images/youtube.svg" alt="">
                        </a>
                    </li>
                    <li data-aos="fade-up" data-aos-once="true" data-aos-duration="1000" data-aos-delay="500" aria-label="Follow us on Instagram">
                        <a href="https://www.instagram.com/cfo.bridge/" target="_blank">
                            <img data-src="<?=base_url()?>assets/images/insta.svg" alt="">
                        </a>
                    </li>
                </ul>
            </div>
            <div class="col-lg-2 offset-lg-1 col-12">
                <h3 class="ft-head" data-aos-once="true" data-aos="fade-left" data-aos-duration="1000" data-aos-delay="400">
                    Quick links
                </h3>
                <div class="row">
                    <div class="col-lg-6 col-12">
                        <ul class="ft-list" data-aos-once="true" data-aos="fade-left" data-aos-duration="1000" data-aos-delay="500">
                            <li>
                                <a href="<?=base_url('services')?>">
                                    Services
                                </a>
                            </li>
                            <li>
                                <a href="<?=base_url('about')?>">
                                    About Us
                                </a>
                            </li>
                            <li>
                                <a href="<?=base_url('team')?>">
                                    CFO Team
                                </a>
                            </li>
                            <li>
                                <a href="<?=base_url('clients')?>">
                                    Clients
                                </a>
                            </li>
                            <li>
                                <a href="<?=base_url('testimonials')?>">
                                    Testimonials
                                </a>
                            </li>
                         
                            <li>
                                <a href="<?=base_url('career')?>">
                                    Careers
                                </a>
                            </li>
                            <li>
                                <a href="<?=base_url('contact')?>">
                                    Contact Us
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-lg-2  col-12">
                <h3 class="ft-head" data-aos="fade-left" data-aos-duration="1000" data-aos-delay="400">
                    Locations
                </h3>
                <ul class="ft-list" data-aos-once="true" data-aos="fade-left" data-aos-duration="1000" data-aos-delay="500">
                            <li>
                                <a href="<?=base_url('location/cfo-services-in-bangalore')?>">
                                    Bangalore
                                </a>
                            </li>
                            <li>
                                <a href="<?=base_url('location/cfo-services-in-chennai')?>">
                                    Chennai
                                </a>
                            </li>
                            <li>
                                <a href="<?=base_url('location/cfo-services-in-mumbai')?>">
                                    Mumbai
                                </a>
                            </li>
                            <li>
                                <a href="<?=base_url('location/cfo-services-in-hyderabad')?>">
                                    Hyderabad
                                </a>
                            </li>
                            <li>
                                <a href="<?=base_url('location/cfo-services-in-delhi')?>">
                                    Delhi NCR
                                </a>
                            </li>
                            </ul>
            </div> 
            <!--<div class="col-lg-2  col-12">
                <h3 class="ft-head" data-aos="fade-left" data-aos-duration="1000" data-aos-delay="600">
                    Services
                </h3>
                <ul class="ft-list" data-aos="fade-left" data-aos-duration="1000" data-aos-delay="700">
                <?php $servicehomecard = $this->home_model->getservicehomecard();?>
                <?php if (!empty($servicehomecard)) {
                    foreach ($servicehomecard as $row) {
                ?>
                                    <li>
                                        <a href="<?=base_url('service/').$row['slug']?>" class="srv-link">
                                            
                                        <?=$row['title_home_card']?>
                                        </a>
                                    </li>
                                    <?php }
                                }
                                ?>
                </ul>
            </div> -->
            <div class="col-lg-3 col-12">
                <h3 class="ft-head" data-aos-once="true" data-aos="fade-left" data-aos-duration="1000" data-aos-delay="800">
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
                <ul class="con-det-list" data-aos-once="true" data-aos="fade-left" data-aos-duration="1000" data-aos-delay="900">
                    <!--<li>-->
                    <!--    <a href="tel:917200425025">-->
                    <!--        <img src="assets/images/ph.svg" alt="">-->
                    <!--        <span>+91 7200425025</span>-->
                    <!--    </a>-->
                    <!--</li>-->
                    <li>
                        <a href="tel:918422853313">
                            <img data-src="<?=base_url()?>assets/images/ph.svg" alt="">
                            <span>+91  84228 53313</span>
                        </a>
                    </li>
                    <li>
                        <a href="mailto:vidya@cfobridge.com">
                            <img data-src="<?=base_url()?>assets/images/ml.svg" alt="">
                            <span>vidya@cfobridge.com</span>
                        </a>
                    </li>
                    <li>
                        <a href="javascript:void(0)">
                            <img data-src="<?=base_url()?>assets/images/loc.svg" alt="">
                            <span>
                                <!-- 91 Spring Board, Godrej & Boyce, Gate No 2, Plant No, 6, Lal Bahadur Shastri Rd, opposite Vikhroli, Vikhroli West, Mumbai, Maharashtra 400079 -->
                                AWFIS, 10th Floor, R-city Mall, <br> LBS Marg, Ghatkopar West,<br> Mumbai -  400086.
                            </span>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
        <div class="ft-bottom">
            <p style="color:#000; font-weight: 500;">
                Copyright © 2025 by CFO Bridge Pvt. Ltd | <a target="_blank" href="https://dimerse.com" style="color:#000;  font-weight: 500;">Code & Design Credits</a>
            </p>
            <ul class="term-list">
                <!--<li>-->
                <!--    <a href="javascript:void(0)">-->
                <!--        terms & Conditions-->
                <!--    </a>-->
                <!--</li>-->
                <li>
                    <a href="<?=base_url('privacy-policy')?>" style="color:#000; font-weight: 500;">
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
                Download The <span>Brochure</span>
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
                         <!--<label fosr="" class="label-text">Mobile <span>*</span></label>
                       <div class="inp-grp">
                            <!--<input type="text" name="phone">
                            <input type="text" id="mobile_code" class="form-control" placeholder="Phone Number" name="phone">
                        </div>-->
                        
                            <div class="form-group">
                                <label fosr="" class="label-text">Mobile <span>*</span></label>
                                <div class="inp-grp">
                                    <!--<input type="text" name="phone">-->
                                    <input type="tel" id="phone" class="form-control" placeholder="Mobile" name="phone">
                                </div>
                                <div id="output" style="font-size: 14px;margin-top:5px"></div>
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
                    <input type="hidden" name="url" value="<?=(empty($_SERVER['HTTPS']) ? 'http' : 'https') . "://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]"?>" />
                    <button type="submit" class="main-btn with-icon mt-10">
                        <span>Download Now</span>
                    </button>
                </div>
            </div>
        </form>
      </div>
     
    </div>
  </div>
</div>
<a href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#download-brochure" id="download-brochure-btn" class=" main-btn with-icon sf-btn dw-btn">
    <span>Download The Brochure</span>
</a>

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

<!-- Load jQuery plugins that depend on jQuery -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.5/jquery.validate.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-steps/1.1.0/jquery.steps.min.js"></script>

<!-- Load Bootstrap, Swiper, and AOS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.2/js/bootstrap.bundle.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/Swiper/8.4.4/swiper-bundle.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.js"></script>

<!-- Load intlTelInput AFTER jQuery -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/23.0.8/js/intlTelInput.min.js"></script>


<!-- Custom Script for intlTelInput -->
<script>
    document.addEventListener('DOMContentLoaded', function() {
        const input = document.querySelector("#phone");
        const output = document.querySelector("#output");

        if (input) { // Ensure the element exists before initializing
            const iti = window.intlTelInput(input, {
                initialCountry: "in",
                nationalMode: true,
                utilsScript: "https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/23.0.8/js/utils.js"
            });

            const handleChange = () => {
                let text;
                if (input.value) {
                    text = iti.isValidNumber()
                        ? "Valid number! " 
                        : "Invalid number - please try again";
                } else {
                    text = "Please enter a valid number below";
                }
                if (output) output.textContent = text; // Check if output exists before updating
            };

            input.addEventListener('change', handleChange);
            input.addEventListener('keyup', handleChange);
        }
    });
</script>

<!-- Load Custom Scripts -->
<script src="<?=base_url('assets/js/iform.js')?>"></script>
<script src="<?=base_url()?>assets/js/step.js"></script>  
<!-- Zipme widget begin -->
<!--
<link rel="stylesheet" href="<?=base_url()?>assets/css/zipteams.css">
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
</script>-->
<!-- Zipme widget end-->

<!-- custom js -->
<script type="text/javascript">
_linkedin_partner_id = "5591585";
window._linkedin_data_partner_ids = window._linkedin_data_partner_ids || [];
window._linkedin_data_partner_ids.push(_linkedin_partner_id);
</script><script type="text/javascript">
(function(l) {
if (!l){window.lintrk = function(a,b){window.lintrk.q.push([a,b])};
window.lintrk.q=[]}
var s = document.getElementsByTagName("script")[0];
var b = document.createElement("script");
b.type = "text/javascript";b.async = true;
b.src = "https://snap.licdn.com/li.lms-analytics/insight.min.js";
s.parentNode.insertBefore(b, s);})(window.lintrk);
</script>

<script>

$(document).ready(function() {
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
        $('img[data-src]').each(function() {
            if (isElementInViewport(this)) {
                $(this).attr('src', $(this).data('src'));
                $(this).removeAttr('data-src');
            }
        });
    }

    // Load images on initial page load
    loadImages();

    // Load images on scroll or resize
    $(window).on('scroll resize', function() {
        loadImages();
});
});
var pageLink = window.location.href;
    var pageTitle = String(document.title).replace(/\&/g, '%26');

    function fbs_click() {
        window.open(`https://www.facebook.com/sharer.php?u=${pageLink}&quote=${pageTitle}`, 'sharer',
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
$('.ca-btn').click(function(){
    $('.ca-inp').val($(this).attr('data-name'));
})




AOS.init();
$('.menu-btn').click(function() {
    $('.mobile-nav').addClass('active');
})
$('.menu-close').click(function() {
    $('.mobile-nav').removeClass('active');
})
var bnswiper = new Swiper(".banner-swiper", {
    loop: false,
    slidesPerView: 1,
    lazy:true,
    autoplay:{
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
    autoplay:{
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
    lazy:true,
    slidesPerView: 4,
    autoplay:{
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
    autoplay:{
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
    if(con){
        $('.banner-swiper .swiper-pagination').addClass('white')
    }else{
        $('.banner-swiper .swiper-pagination').removeClass('white')
    }
});
var swiper = new Swiper(".lg-swiper", {
    loop: true,
    autoplay:{
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
    autoplay:{
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
var tooltipList = tooltipTriggerList.map(function(tooltipTriggerEl) {
    return new bootstrap.Tooltip(tooltipTriggerEl)
})

$('#res').change(function(e) {
    var pDiv = $(this).parent();
    var file = e.target.files[0].name;
    pDiv.find('label span').text(file);
    pDiv.find('label span').addClass('active');
    pDiv.find('button').css('display', 'block');
})
$('#d-res').click(function(e) {
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

    var snapshot = function() {
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


$(window).scroll(function(){
    if($(window).scrollTop() > 300){
        $('.main-nav').addClass('sticky');
    }else{
        $('.main-nav').removeClass('sticky');
    }
})

var pageLink = window.location.href;
var pageTitle = String(document.title).replace(/\&/g, '%26');

function fbs_click() {
    window.open(`https://www.facebook.com/sharer.php?u=${pageLink}&quote=${pageTitle}`, 'sharer',
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

$('.ft-toggle').click(function(){
    $('.ft-card').addClass('active');
})
$('.ft-close').click(function(){
    $('.ft-card').removeClass('active');
})
const video_wrapper = $('.youtube-video-place');
const shortsThumbnails = {
  'wo_Nadi2VQM': 'assets/images/thumbs/short-wo_Nadi2VQM.webp',
  '5WPy2nDbuHQ': 'assets/images/thumbs/short-5WPy2nDbuHQ.webp',
  'NvbiH1FhAWI': 'assets/images/thumbs/short-NvbiH1FhAWI.webp',
  'dyagUZz3NNM': 'assets/images/thumbs/short-dyagUZz3NNM.webp',
  'iHvHQ_Ws9lY': 'assets/images/thumbs/short-iHvHQ_Ws9lY.webp',
  '7xKZeIp56I0': 'assets/images/thumbs/short-7xKZeIp56I0.webp',
  'ff-dDNNJ6F8': 'assets/images/thumbs/short-ff-dDNNJ6F8.webp',
  'ou9da0J0LOA': 'assets/images/thumbs/short-ou9da0J0LOA.webp',
  'JbXrMzIZR7U': 'assets/images/thumbs/short-JbXrMzIZR7U.webp'
};

if (video_wrapper.length) {
  video_wrapper.each(function () {
    const video = $(this);
    const url = video.data('url');

    const match = url.match(/\/embed\/([a-zA-Z0-9_-]{11})/);
    const videoId = match ? match[1] : null;

    if (videoId) {
      // If it's a Shorts, use full custom URL; otherwise, use YouTube's thumbnail
      const thumbnail = shortsThumbnails[videoId]
        ? site_url + shortsThumbnails[videoId]
        : `https://img.youtube.com/vi/${videoId}/0.jpg`;

      video.html(`
        <img class="yt-thumb-img" src="${thumbnail}" alt="yt-thmb"/>
        <button class="vid-play-btn play-btn">
          <img src="${site_url}assets/images/play.svg" alt="play" />
        </button>
      `);

      const playBtn = video.find('.vid-play-btn');
      playBtn.on('click', function () {
        playBtn.fadeOut("slow");
        video.addClass('remove-after');
        setTimeout(() => {
          video.html(
            `<iframe allowfullscreen frameborder="0" class="embed-responsive-item" src="${url}?autoplay=1&mute=0"></iframe>`
          );
        }, 500);
      });
    }
  });
}

</script>
</body>

</html>