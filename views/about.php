<header class="inner-banner sec" style="background: url(<?=base_url()?>assets/images/about-banner.png) center/cover no-repeat !important;">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8 col-12">
                    <div class="sec-head center white" >
                        <h1 data-aos="fade-up" data-aos-duration="1000" >
                            Unlocking financial potential through <span>expert guidance</span>
                        </h1>
                        <p class="para" data-aos="fade-up" data-aos-duration="1000"  data-aos-delay="100">
                            Let 50+ cfo consultants help you unlock the door to financial success with India's best shared CFO services for Startups & SMEs
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <section class="sec ab-sec">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-5 col-12">
                    <div class="ab-con">
                        <div class="sec-head mb-30" data-aos="fade-right" data-aos-duration="1000">
                            <h2>
                                Our <span>Story</span>
                            </h2>
                        </div>
                        <p class="para" data-aos="fade-right" data-aos-duration="1000"  data-aos-delay="100">
                            The story of CFO Bridge began when our founder V Srinivasan heard his close friends from successful startups struggling to hire top financial management talent during his daily morning walks.
                            <br><br>
                            Upon realising start-ups and SMEs’ struggle to match the salary offered by the bigger players, Srinivasan started CFO Bridge in 2012 to create a premium team of CFO consultants.
                            <br><br>
                            Fast forward to 2023, CFO Bridge is India’s largest and most sought-after virtual CFO consulting and financial services provider.
                        </p>
                    </div>
                </div>
                <div class="col-lg-6 col-12 offset-lg-1">
                    <div class="ab-img-1" data-aos="fade-left" data-aos-duration="1000"  data-aos-delay="100">
                        <img src="assets/images/ab011.png" alt="">
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="counter-sec sec blue-bg">
        <img src="assets/images/pt.svg" alt="">
        <div class="container">
            <div class="row">
                <div class="col-lg-7">
                    <div class="sec-head white" data-aos="fade-up" data-aos-duration="1000" >
                        <h2>
                            India’s premier CFO <span>services provider</span>
                        </h2>
                    </div>
                </div>
                <div class="col-12">
                    <div class="counter-container">
                        <?php if(!empty($counters))
                        foreach($counters as $ct)
                        {
?>
<div class="count-wrap">
                            <h2 class="counter"><?=$ct['count']?></h2>
                            <p>
                                <?=$ct['title']?>
                            </p>
                        </div>
<?php
                        }?>
                        
                        
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="vl-sec sec light-bg">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="sec-head center mb-50" data-aos="fade-up" data-aos-duration="1000" >
                        <h2>
                            Our <span>Values</span>
                        </h2>
                    </div>
                </div>
            </div>
            <div class="row vl-row">
                <div class="col-lg-3 col-12">
                    <div class="vl-card" data-aos="zoom-in" data-aos-duration="1000" >
                        <img src="assets/images/vl01.svg" alt="">
                        <h3>
                            Integrity
                        </h3>
                        <p>
                            Integrity, reliability, and accountability are our three pillars of foundation.
                        </p>
                    </div>
                </div>
                <div class="col-lg-3 col-12">
                    <div class="vl-card" data-aos="zoom-in" data-aos-duration="1000"  data-aos-delay="100">
                        <img src="assets/images/respect.svg" alt="">
                        <h3>
                            Respect
                        </h3>
                        <p>
                            We earn respect through honesty, trust, and valuing individual differences, reinforcing passion in all that we do.
                        </p>
                    </div>
                </div>
                <div class="col-lg-3 col-12">
                    <div class="vl-card" data-aos="zoom-in" data-aos-duration="1000"  data-aos-delay="200">
                        <img src="assets/images/empathy.svg" alt="">
                        <h3>
                            Empathy
                        </h3>
                        <p>
                       As CFO consultants, We connect better with our partners and stakeholders through empathy. It requires the ability to connect and listen.
                        </p>
                    </div>
                </div>
                <div class="col-lg-3 col-12">
                    <div class="vl-card" data-aos="zoom-in" data-aos-duration="1000"  data-aos-delay="300">
                        <img src="assets/images/transparacy.svg" alt="">
                        <h3>
                            Transparency
                        </h3>
                        <p>
                            We communicate with honesty, respect, and openness, promoting trust and better decision-making.
                        </p>
                    </div>
                </div>
                <div class="col-lg-3 col-12">
                    <div class="vl-card" data-aos="zoom-in" data-aos-duration="1000"  data-aos-delay="400">
                        <img src="assets/images/accountability.svg" alt="">
                        <h3>
                            Accountability
                        </h3>
                        <p>
                            We take ownership and solve problems with good judgement, without the need for excessive policies and procedures in our cfo consulting.
                        </p>
                    </div>
                </div>
                <div class="col-lg-3 col-12">
                    <div class="vl-card" data-aos="zoom-in" data-aos-duration="1000"  data-aos-delay="500">
                        <img src="assets/images/partnership.svg" alt="">
                        <h3>
                            Partnership
                        </h3>
                        <p>
                            We build strong relationships with our clients based on trust, ability to listen and reflect, effective collaboration, and a commitment to their success.
                        </p>
                    </div>
                </div>
                <div class="col-lg-3 col-12">
                    <div class="vl-card" data-aos="zoom-in" data-aos-duration="1000"  data-aos-delay="600">
                        <img src="assets/images/stakeholder.svg" alt="">
                        <h3>
                            Add value to stakeholders
                        </h3>
                        <p>
                            Our clients are at the centre of our  cfo services. We are attentive to their needs and committed to helping them succeed.
                        </p>
                    </div>
                </div>
            </div>
        </div>

    </section>

    <section class="mv-sec blue-bg ">
        <div class="row align-items-center">
            <div class="col-lg-5 col-12">
                <div class="container-left">
                    <div class="sec-head white mb-20" data-aos="fade-up" data-aos-duration="1000">
                        <h2>
                            Our vision
                        </h2>
                    </div>
                    <p class="para white" data-aos="fade-up" data-aos-duration="1000"  data-aos-delay="100">
                        Our vision is to be the preferred CFO consulting partner for SMEs and startups to strengthen their overall financial governance and be a platform for finance professionals to pursue their entrepreneurial ambitions.
                    </p>
                </div>
            </div>
            <div class="col-lg-6 offset-lg-1 col-12">
                <div class="mv-img">
                    <img src="assets/images/mv-img.png" alt="">
                </div>
            </div>
        </div>
    </section>
    
    <section class="sec timeline-sec">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-7 col-12">
                    <div class="sec-head center">
                        <h2>
                            Helping businesses navigate the road to <span>financial success</span>
                        </h2>
                    </div>
                </div>
                <div class="col-12">
                    <ul class="timeline">
                        <li>
                            <h3 data-aos="fade-right" data-aos-duration="1000">
                                2012
                            </h3>
                            <div class="tm-cn" data-aos="fade-left" data-aos-duration="1000">
                                <h3>
                                    Laying the Foundation
                                </h3>
                                <p class="para">
                                    We open for business, bag a micro-finance company as our first client on day one.
                                </p>
                            </div>
                        </li>
                        <li>
                            <h3 data-aos="fade-left" data-aos-duration="1000">
                                2014
                            </h3>
                            <div class="tm-cn" data-aos="fade-right" data-aos-duration="1000">
                                <h3>
                                    A Stronger Start
                                </h3>
                                <p class="para">
                                    We reached a client base of 20 with a core team of 10.
                                </p>
                            </div>
                        </li>
                        <li>
                            <h3 data-aos="fade-right" data-aos-duration="1000">
                                2016
                            </h3>
                            <div class="tm-cn" data-aos="fade-left" data-aos-duration="1000">
                                <h3>
                                    Increasing Capabilities
                                </h3>
                                <p class="para">
                                    We expanded across multiple sectors (Service, Manufacturing, E-comm, Agri & PE)
                                </p>
                            </div>
                        </li>
                        <li>
                            <h3 data-aos="fade-left" data-aos-duration="1000">
                                2018
                            </h3>
                            <div class="tm-cn" data-aos="fade-right" data-aos-duration="1000">
                                <h3>
                                    Exponential Growth
                                </h3>
                                <p class="para">
                                    We expanded our CFO services to Pune, Bangalore and Chennai.
                                </p>
                            </div>
                        </li>
                        <li>
                            <h3 data-aos="fade-left" data-aos-duration="1000">
                                2020
                            </h3>
                            <div class="tm-cn" data-aos="fade-right" data-aos-duration="1000">
                                <h3>
                                    Institutionalization
                                </h3>
                                <p class="para">
                                    PAN India presence, Managing 60+ clients, 15+ CFO partners , 50+ team size with wide network of experts. 
                                </p>
                            </div>
                        </li>
                        <li>
                            <h3 data-aos="fade-left" data-aos-duration="1000">
                                2021 
                            </h3>
                            <div class="tm-cn" data-aos="fade-right" data-aos-duration="1000">
                                <!--<h3>-->
                                <!--    Institutionalization-->
                                <!--</h3>-->
                                <p class="para">
                                    Started Training Services vertical. <br>
                                    Started Debt Funding Vertical.<br>
                                    Started CFO Tech Services vertical.<br>
                                    Launched CFO Bridge UAE with an on-ground CFO partner to serve Dubai, Abu Dhabi, and Other N.Emirates. 
                                </p>
                            </div>
                        </li>
                        <li>
                            <h3 data-aos="fade-left" data-aos-duration="1000">
                                2022
                            </h3>
                            <div class="tm-cn" data-aos="fade-right" data-aos-duration="1000">
                                <!--<h3>-->
                                <!--    Institutionalization-->
                                <!--</h3>-->
                                <p class="para">
                                    Completed a large M&A deal as a lead representative from the seller side.
                                </p>
                            </div>
                        </li>
                        <li>
                            <h3 data-aos="fade-left" data-aos-duration="1000">
                                2023
                            </h3>
                            <div class="tm-cn" data-aos="fade-right" data-aos-duration="1000">
                                <!--<h3>-->
                                <!--    Institutionalization-->
                                <!--</h3>-->
                                <p class="para">
                                    Launched Robotic Automation Services for Finance.<br>
                                    Started CFO Bridge Kolkata operations.<br>
                                    Started CFO Bridge Incl. in USA.<br>
                                    <!--Our 30+ strong Industry CFOs led teams serving about 100+ clients from all across India with presence in Mumbai, Pune, NCR, Bangalore, Chennai, Hyderabad, Kolkata & USA<br>-->
                                    <!--Having experience of providing CFO services to 500+ companies from manufacturing, services, agritech, engineering, fintech, health & wellness, logistics, warehousing, education, Financial Services, Large Corporates, Private Equity, e-commerce, travel, food & fragrance sectors-->
                                </p>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <section class="sec pp-sec">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8 col-12">
                    <div class="sec-head white center">
                        <h2>
                            Redefining business success with <span>Panchsheel Framework</span>
                        </h2>
                        <p class="para white">
                            Our 5-pronged delivery framework is at the core of our every operation to ensure the highest standard in CFO consulting.
                        </p>
                    </div>
                    <div class="vid-wrap " data-url="https://www.youtube.com/embed/xO2StpCJCCI?si=UUBw9Z9IfgIBz0Dz" id="ppk" data-aos="fade-right" data-aos-duration="1000">
                        <!-- <button class="play-btn">
                            <img src="assets/images/play.svg" alt="" />
                        </button>
                        <img src="<?=base_url()?>assets/images/ab-im.jpg" /> -->
                        <iframe width="560" height="315" src="https://www.youtube.com/embed/xO2StpCJCCI?si=HqQqU8IMILBW58Og" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
                    </div>
                    <!-- <a href="https://youtu.be/xO2StpCJCCI" target="_blank" class="main-btn center">
                        <span>Watch A Video.</span>
                        <img src="assets/images/blue-arrow.svg" alt="">
                    </a> -->
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-lg-12 col-12">
                    <div class="icc-container">
                        <div class="icc">
                            <img src="assets/images/p01.svg" alt="">
                            <p><span>M</span>IS & Analysis</p>
                        </div>

                        <div class="icc">
                             <img src="assets/images/p02.svg" alt="">
                            <p><span>D</span>rivers of Profit</p>
                        </div>
                        <div class="icc">
                            <img src="assets/images/p03.svg" alt="">
                            <p><span>C</span>ash Flow Management</p>
                        </div>
                        <div class="icc">
                            <img src="assets/images/p04.svg" alt="">
                            <p><span>T</span>raining</p>
                        </div>
                        <div class="icc">
                            <img src="assets/images/p05.svg" alt="">
                            <p><span>C</span>ompliance </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

   <?php include_once 'common/clientlogo.php';
   ?>
