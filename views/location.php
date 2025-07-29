<header class="loc-banner sec">
    <img src="<?=base_url('assets/images/pt-cfo.svg')?>" alt="background image">
    <div class="container">
        <div class="row row-gap-25 align-items-center justify-content-center">
            <div class="col-lg-5 col-12">
                <div class="sec-head mb-30">
                    <h1>
                    <?=$pserv['heading_s1']?>
                    </h1>
                </div>
                <p class="para">
                <?=$pserv['description_s1']?>
                </p>
            </div>
            <div class="col-lg-6 offset-lg-1 col-12">
                <div class="loc-banner-img">
                    <img src="<?=base_url("uploads/images/{$pserv['image_s1']}")?>" alt="<?=$pserv['image_s1_alttext']?>">
                </div>
            </div>
        </div>
    </div>
</header>

<section class="sec">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-7 text-center col-12">
                <div class="sec-head">
                    <h2>
                    <?=$pserv['heading_s3']?>
                    </h2>
                </div>
                <p class="para mt-30">
                <?=$pserv['description_s3']?>
                </p>
            </div>
        </div>
        <div class="row row-gap-25 mt-30">
        <?php if(!empty($pserv['repeater_s3']))
                    {
                        $repeater_s3 = json_decode($pserv['repeater_s3'],true);
                        foreach($repeater_s3 as $row)
                        {
                            ?>
            <div class="col-lg-4 col-12">
                <div class="srv-card style-2">
                    <div>
                        <h3 class="mb-0">
                       <?=$row['heading']?>
                        </h3>
                        <p class="para mt-20">
                        <?=$row['description']?> </p>
                    </div>
                    <?php if(!empty($row['btnlink'])){?>
                    <a href="<?=urldecode($row['btnlink'])?>" class="main-btn link-blue-btn"
                        data-faitracker-click-bind="true">
                        <span><?=$row['btnlabel']?></span>
                        <img src="<?=base_url()?>assets/images/blue-arrow.svg" alt="Blue Arrow Icon">
                    </a>
                    <?php }?>
                   
                </div>
            </div>
            <?php
                        }
                    }?>
        </div>
    </div>
</section>

<?php include_once 'common/clientlogo.php'; ?>

<?php include_once 'common/testimonial.php'; ?>

<section class="sec">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-7 text-center col-12">
                <div class="sec-head">
                    <h2>
                    <?=$pserv['heading_s2']?>
                    </h2>
                </div>
                <p class="para mt-30">
                <?=$pserv['description_s2']?>
                 </p>
            </div>
        </div>
        <div class="row row-gap-25">
        <?php if(!empty($pserv['repeater_s2']))
                    {
                        $repeater_s2 = json_decode($pserv['repeater_s2'],true);
                        foreach($repeater_s2 as $row)
                        {
                            ?>
        <div class="col-lg-4 col-12">
                <div class="cv-card">
                    <h3><?=$row['heading']?></h3>
                    <p class="para">
                    <?=$row['description']?></p>
                </div>
            </div>
            <?php
                        }
                    }?>
        </div>
    </div>
</section>

<section class="sec">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-7 text-center col-12">
                <div class="sec-head">
                    <h2>
                    <?=$pserv['heading_s5']?>
                    </h2>
                </div>
            </div>
        </div>
        <div class="row row-gap-25 mt-30">
        <?php if(!empty($pserv['repeater_s5']))
                    {
                        $repeater_s5 =$pserv['repeater_s5'];
                        foreach($repeater_s5 as $row)
                        {
                            ?>
        <div class="col-lg-4 col-12">
                <div class="cb-card style-2">
                    <img src="<?=base_url("uploads/images/{$row['image']}")?>" alt="<?=$row['image']?>">
                    <h3>  <?=$row['heading']?></h3>
                    <p class="para">
                    <?=$row['description']?>  </p>
                </div>
            </div>
            <?php
                        }
                    }?>
           
        </div>
    </div>
</section>
<section class="sec">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-9 text-center col-12">
                <div class="sec-head">
                    <h2>
                    Check Out Our Office And <span>Join Our Events</span>
                    </h2>
                </div>
            </div>
        </div>
        
    </div>
    <div class="cc-img-container">
        <div class="cc-swiper style-2 swiper">
            <div class="swiper-wrapper">
            <?php if(!empty($gallery))
            foreach($gallery as $row)
            {
                ?>  
                <div class="swiper-slide">
                    <div class="cc-gal-img">
                        <img src="<?=base_url('uploads/images/').$row['image']?>" alt="<?=$row['alt_text']?>">
                    </div>
                </div>
             <?php } ?>
                
              
            </div>
        </div>
    </div>
</section>
<?php include_once 'common/blogs.php'; ?>



<section class="faq-sec sec light-bg">
    <div class="container">
        <div class="row">
            <div class="col-12 mb-30">
                <div class="sec-head center">
                    <h2>
                    <?=$pserv['faq_heading']?>
                    </h2>
                </div>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-lg-8 col-12">
                <div class="a-cc accordion" id="accordionExample">
                    <?php if(!empty($pserv['faqArr']))
                    {
                        $i=0;
                        $faqs = json_decode($pserv['faqArr'],true);
                        if(is_array($faqs))
                        foreach($faqs as $row)
                        {
                            ?>
                        
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingOne-<?=$i?>">
                            <button class="accordion-button <?=$i!=0?"collapsed":""?>" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapse<?=$i?>" aria-expanded="true" aria-controls="collapseOne">
                                <?=$row['heading']?>
                            </button>
                        </h2>
                        <div id="collapse<?=$i?>" class="accordion-collapse collapse <?=$i==0?"show":""?>" aria-labelledby="headingOne-<?=$i?>"
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
                    }
                    ?>
                </div>
            </div>
        </div>
    </div>
</section>

