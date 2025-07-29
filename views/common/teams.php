<?php 
$team = $this->home_model->getteamlist(6);
?>
<div class="team-sec sec blue-gr">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-8 col-12">
                <div class="sec-head center white">
                    <h2>
                        Pillars of CFO Bridge
                    </h2>
                    <p>
                        CFO Bridge has an experienced team of Industry CFOs and Consultants
                    </p>
                </div>
            </div>
            <div class="col-12">
                <div class="team-swiper swiper mb-30">
                    <div class="swiper-wrapper">
                        <?php if ($team) {
                            foreach ($team as $row) {
                        ?>
                                <div class="swiper-slide">
                                    <a href="<?=base_url('team/').$row['slug']?>" class="team-card style-2">
                                        <div class="over">
                                            <span></span>
                                            <div class="con">
                                                <span  class="tit">
                                                    <h3>
                                                        <?= $row['name'] ?>
                                                    </h3>
                                                </span>
                                                <p> <?= $row['title'] ?></p>
                                                <span class="linked-in">
                                                    <img src="<?=base_url('assets/images/linkedin.svg')?>" alt="Linkedin Icon">
                                                </span>
                                            </div>
                                        </div>
                                        <div class="m-wrap">
                                            <img src="<?= base_url('uploads/images/') . $row['image'] ?>" alt="<?= $row['alt_text']??$row['image'] ?>" loading="lazy">
                                        </div>
                                    </a>
                                </div>
                        <?php
                            }
                        }
                        ?>
                    </div>
                </div>
                <a href="<?=base_url('team')?>" target="_blank" class="main-btn center with-icon">
                    <span>Meet All</span>
                    <img src="<?=base_url('assets/images/blue-arrow.svg')?>" alt="Blue Arrow Icon">
                </a>
            </div>
        </div>
    </div>
</div>