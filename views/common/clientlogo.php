<?php
$clientlogo = $this->home_model->getclientbycatid();
?>
<section class="lg-sec sec">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-12 col-12">
                <div class="sec-head center mb-40">
                    <h2>
                        We have empowered 500+ SMEs & Startups<br> to grow with
                        tailored financial solutions
                    </h2>
                </div>
            </div>
            <div class="col-12">
                <?php if (!empty($clientlogo)) { ?>
                <div class="cl-logo-track" style="<?=count($clientlogo) < 20 ? '--anim: slideLoop 25s linear infinite': '--anim: slideLoop 25s linear infinite'?>">
                    
                    <?php if ($clientlogo) {
                        $count = 0;
                        $count2 = 0;
                        $max = 20;
                            foreach ($clientlogo as $row) {
                                if($count < $max){
                        ?>
                                
                            <div class="lg-l">
                                <a href="<?=urldecode($row['link'])?>" target="blank"><img src="<?= base_url('uploads/images/') . $row['image'] ?>" alt="<?= $row['alt_text']??$row['image'] ?>" loading="lazy"></a>
                            </div>
                                
                    <?php } $count++;}
                    } ?>
                    <?php 
                            foreach ($clientlogo as $row) {
                                if($count2 < $max){
                        ?>
                                
                            <div class="lg-l">
                                <a href="<?=urldecode($row['link'])?>" target="blank"><img src="<?= base_url('uploads/images/') . $row['image'] ?>" alt="<?= $row['alt_text']??$row['image'] ?>" loading="lazy"></a>
                            </div>
                                
                    <?php } $count2++;
                    } ?>
                    
                </div>
                <?php }?>
                <!-- <div class="swiper lg-swiper mb-30">
                    <div class="swiper-wrapper">
                        
                    </div>
                </div> -->
                <a href="<?=base_url('/clients')?>" class="main-btn with-icon center">
                    <span>View All</span>
                    <img src="<?=base_url()?>assets/images/blue-arrow.svg" alt="blue arrow" />
                </a>
            </div>
        </div>
    </div>
</section>