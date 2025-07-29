<header class="inner-banner sec" style="background:url('<?=base_url('uploads/images/').$pserv['image_banner']?>') center/cover no-repeat;">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-8 col-12">
                <div class="sec-head center white">
                    <h1>
                        <?=$pserv['heading_banner']?>
                    </h1>
                </div>
            </div>
        </div>
    </div>
</header>

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
                </div>
            </div>
            <div class="col-lg-6 offset-lg-1 col-12">
                <div class="ind-img">
                    <img src="<?=base_url('uploads/images/').$pserv['image_about']?>" class="img-full" alt="<?=$pserv['image_about']?>">
                </div>
            </div>
        </div>
    </div>
</section>

<section class="srv-sec sec">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="sec-head center">
                    <h2>
                        Our <span>Services</span>
                    </h2>
                </div>
            </div>

        </div>
        <div class="row justify-content-center srv-grid mt-50">
            <?php if(!empty($services))
            foreach($services as $row)
            {
                ?>
            
            <div class="col-lg-3 col-md-4 col-12">
                <div class="srv-card">
                    <div>
                        <h3 class="mb-0">
                            <?=$row['title']?> 
                        </h3>
                        <span class="d-inline-block mt-10"><?=$row['heading']?></span>
                        <p class="para mt-20">
                        <?=$row['description']?>
                        </p>
                    </div>
                    <a href="<?=base_url('service/').$row['slug']?>" class="main-btn link-blue-btn">
                        <span>Learn More</span>
                        <img src="assets/images/blue-arrow.svg" alt="Blue Arrow Icon">
                    </a>
                </div>
            </div>
<?php }?>
<?php if(!empty($exservices))
            foreach($exservices as $row)
            {
                ?>
            
            <div class="col-lg-3 col-md-4 col-12">
                <div class="srv-card">
                    <div>
                        <h3 class="mb-0">
                            <?=$row['title']?> 
                        </h3>
                        <span class="d-inline-block mt-10"><?=$row['heading']?></span>
                        <p class="para mt-20">
                        <?=$row['description']?>
                        </p>
                    </div>
                    <a href="<?=base_url('services/').$row['slug']?>" class="main-btn link-blue-btn">
                        <span>Learn More</span>
                        <img src="assets/images/blue-arrow.svg" alt="Blue Arrow Icon">
                    </a>
                </div>
            </div>
<?php }?>
        </div>
    </div>
</section>

<section class="sec uni-sec light-bg">
    <img src="<?=base_url('assets/images/path.svg')?>" alt="icon">
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
                        <div class="uni-icon">
                            <img src="<?=base_url('uploads/images/').$row['image']?>" alt="<?=$row['image']?>">
                        </div>
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

<section class="sec pp-sec">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-8 col-12">
                <div class="sec-head white center">
                    <h2>
                        Redefining business success with <span>Panchsheel Framework</span>
                    </h2>
                    <p class="para white">
                        Our 5-pronged delivery framework is at the core of our every operation to ensure the highest
                        standard.
                    </p>
                </div>
               <a href="https://youtu.be/xO2StpCJCCI" target="_blank" class="main-btn center">
                    <span>Watch A Video.</span>
                    <img src="assets/images/blue-arrow.svg" alt="Blue Arrow Icon">
                </a>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-lg-11 col-12">
                <div class="icc-container">
                    <div class="icc">
                        <img src="assets/images/p01.svg" alt="process icon 1">
                        <p><span>MIS</span> & Analysis</p>
                    </div>

                    <div class="icc">
                        <img src="assets/images/p02.svg" alt="process icon 2">
                        <p><span>D</span>rivers of Profit</p>
                    </div>
                    <div class="icc">
                        <img src="assets/images/p03.svg" alt="process icon 3">
                        <p><span>C</span>ash Flow Management</p>
                    </div>
                    <div class="icc">
                        <img src="assets/images/p04.svg" alt="process icon 4">
                        <p><span>T</span>raining</p>
                    </div>
                    <div class="icc">
                        <img src="assets/images/p05.svg" alt="process icon 5">
                        <p><span>C</span>ompliance</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<?php include_once 'common/testimonial.php'; ?>

<div class="container">
    <hr>
</div>


<?php include_once 'common/blogs.php'; ?>
<?php if(!empty($pserv['card_json_faq']))
                    {?>
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
        <?php
        $i=0;
        $faqs = json_decode($pserv['card_json_faq'],true);
        if($faqs){
        ?>
        <div class="row justify-content-center">
            <div class="col-lg-8 col-12">
                <div class="a-cc accordion" id="accordionExample">
                     <?php
                        foreach($faqs as $row)
                        {
                            ?>
                        
                    <div class="accordion-item">
                        <h2 class="accordion-header" >
                            <button class="accordion-button <?=$i!=0?'collapsed':''?>" type="button" data-bs-toggle="collapse"
                                data-bs-target="#headingOne-<?=$i?>" aria-expanded="true" aria-controls="collapseOne">
                                <?=$row['heading']?>
                            </button>
                        </h2>
                        <div id="headingOne-<?=$i?>" class="accordion-collapse collapse <?=$i==0?'show':''?>" aria-labelledby="headingOne-<?=$i?>"
                            data-bs-parent="#accordionExample">
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
        
                    
                    ?>
                </div>
            </div>
        </div>
        <?php } ?>
    </div>
</section>
<?php }?>


