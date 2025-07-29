
<section class="blog-inner-sec sec">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-1">
             <ul class="ft-soc bl">
                    <li>
                        <a href="javascript:void(0)" onclick="fbs_click()">
                            <img src="<?=base_url('assets/images/facebook.svg')?>" alt="Facebook Icon">
                        </a>
                    </li>
                    <!--<li>-->
                    <!--    <a href="javascript:void(0)">-->
                    <!--        <img src="<?=base_url('assets/images/maile.svg')?>" alt="">-->
                    <!--    </a>-->
                    <!--</li>-->
                    <li>
                        <a href="javascript:void(0)" onclick="link_click()">
                            <img src="<?=base_url('assets/images/linked.svg')?>" alt="Linkedin Icon">
                        </a>
                    </li>
                    <li>
                        <a href="javascript:void(0)" onclick="twi_click()">
                            <img src="<?=base_url('assets/images/twitter.svg')?>" alt="Twitter icon">
                        </a>
                    </li>
                </ul>
            </div>
            <div class="col-lg-8 col-12">
                <div class="sec-head">
                    <h1>
                       <?=$rec['title']?>
                    </h1>
                </div>
                <div class="bl-inner-img">
                    <img src="<?=base_url('uploads/images/').$rec['image']?>" alt="<?=$rec['image']?>">
                </div>
                <div class="blog-inner-ht">
                    <p>
                        <strong>Posted On</strong>
                        <span><?=$rec['posted']?></span> 
                    </p>
                    <p>
                        <strong>Author</strong>
                        <span><a href="<?=urldecode($rec['authorprofile'])?>" target="blank"><?=$rec['author']?></a></span> 
                    </p>
                </div>
                <div class="blog-inner-det-area">
                    <p class="para">
                    <?=html_entity_decode($rec['content'])?> </p>
                </div>
            </div>
            
        </div>
    </div>
</section>

<?php if (!empty($rec['heading_faq'])): ?>
<section class="faq-sec sec light-bg">
    <div class="container">
        <div class="row">
            <div class="col-12 mb-30">
                <div class="sec-head center">
                    <h2>
                        <?= $rec['heading_faq'] ?>
                    </h2>
                </div>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-lg-8 col-12">
                <div class="a-cc accordion" id="accordionExample">
                    <?php 
                    if (!empty($rec['card_json_faq'])) {
                        $i = 0;
                        $faqs = json_decode($rec['card_json_faq'], true);
                        if (is_array($faqs)) {
                            foreach ($faqs as $row) {
                    ?>
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="headingOne-<?= $i ?>">
                                        <button class="accordion-button <?= $i != 0 ? "collapsed" : "" ?>" type="button"
                                            data-bs-toggle="collapse" data-bs-target="#collapse<?= $i ?>" aria-expanded="true"
                                            aria-controls="collapseOne">
                                            <?= $row['heading'] ?>
                                        </button>
                                    </h2>
                                    <div id="collapse<?= $i ?>" class="accordion-collapse collapse <?= $i == 0 ? "show" : "" ?>"
                                        aria-labelledby="headingOne-<?= $i ?>" data-bs-parent="#accordionExample">
                                        <div class="accordion-body">
                                            <p class="para">
                                                <?= $row['description'] ?>
                                            </p>
                                        </div>
                                    </div>
                                </div>
                    <?php
                                $i++;
                            }
                        }
                    }
                    ?>
                </div>
            </div>
        </div>
    </div>
</section>
<?php endif; ?>


<section class="col-12 bg-grey sec">
     <div class="container">
        <div class="row">
            <div class="col-12 mb-30">
                <div class="sec-head center">
                    <h2>
                        Recent <span>Blogs</span>
                    </h2>
                </div>
            </div>
            <div class="col-12">
                <div class="swiper bl-swiper">
                    <div class="swiper-wrapper">
                    <?php if (!empty($blogs)) {
                        foreach ($blogs as $row) {
                    ?>
                    <div class="swiper-slide <?=$rec['id']==$row['id']?'d-none':''?>">
                            <a href="<?=base_url('resources/').$row['slug']?>" class="bll-card">
                                <div class="im">
                                    <img src="<?=base_url('uploads/images/').$row['image']?>" alt="<?=$row['image']?>">
                                </div>
                                <div class="det">
                                    <h3>
                                    <?= $row['title'] ?>
                                    </h3>
                                    <button class="main-btn link-blue-btn">
                                        <span>Learn More</span>
                                        <img src="<?=base_url()?>assets/images/blue-arrow.svg" alt="Blue Arrow Icon">
                                    </button>
                                </div>
                            </a>
                        </div>
                        <?php }
                    } ?>
                    </div>
                </div>
            </div>
        </div>
     </div>
</section>


