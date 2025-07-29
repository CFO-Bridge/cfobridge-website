<header class="inner-banner sec" style="background: url(<?=base_url()?>assets/images/news-banner.jpg) center/cover no-repeat !important;">
    <div class="container">
        <div class="row align-items-center justify-content-center">
            <div class="col-lg-8 col-12">
                <div class="sec-head center white">
                    <h1>
                        Events
                    </h1>
                </div>
            </div>
        </div>
    </div>
</header>

<section class="bll-sec sec">
    <div class="container">
        <div class="row">
            <div class="bll-grid">
                <?php if(!empty($events))
                {
                    foreach($events as $er){?>
 <a href="<?=base_url('event-inner/').$er['slug']?>" target="blank" class="bll-card">
                    <div class="im">
                        <img src="<?=base_url('uploads/images/').$er['image']?>" alt="">
                    </div>
                    <div class="det">
                        <div class="dt">
                            <img src="<?=base_url()?>assets/images/cal.svg" alt="" />
                            <span><?=date('d-M-Y',strtotime($er['date']))?> | <?=date('h:i A',strtotime($er['time']))?></span>
                        </div>
                        <h3>
                        <?=$er['title']?>
                        </h3>
                        <p class="para">
                         
                    <?=$er['description']?></p>
                        <button class="main-btn link-blue-btn">
                            <span>Learn More</span>
                            <img src="<?=base_url()?>assets/images/blue-arrow.svg" alt="Blue Arrow Icon">
                        </button>
                    </div>
                </a>
                  <?php  }
                }
               ?>
                
            </div>
        </div>
    </div>
</section>