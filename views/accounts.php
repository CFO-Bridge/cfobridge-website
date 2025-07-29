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
                <img src="<?=base_url('uploads/images/').$pserv['image_about']?>" class="img-full" alt="<?=$pserv['alt_text_about']?>">
              </div>
            </div>
        </div>
    </div>
</section>

<section class="sec">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 justify-content-center">
                    <div class="sec-head center mb-30">
                        <h2>
                        <?=$pserv['heading_we_do']?>
                        </h2>
                    </div>
            </div>
        </div>
        <div class="row justify-content-center srv-grid mt-50">
        <?php if(!empty($pserv['card_json_we_do']))
                    {
                        $cardsounique = json_decode($pserv['card_json_we_do'],true);
                        if(!empty($cardsounique))
                        foreach($cardsounique as $row)
                        {
                            ?>
            <div class="col-lg-3 col-md-4 col-12">
                <div class="srv-card style-5">
                    <div>
                        <h3>
                        <?=$row['point']?>
                        </h3>
                    </div>
                </div>
            </div>
            <?php
                        }
                    }?>
        </div>
    </div>
</section>

<section class="sec blue-bg">
    <div class="container">
        <div class="row">
            <div class="col-lg-5 col-12">
                <div class="sec-head white">
                    <h2>
                    <?=$pserv['task_heading']?>
                    </h2>
                </div>
                <p class="para white">
                <?=$pserv['task_description']?>  </p>
                <div class="acc-img">
                <img src="<?=base_url('uploads/images/').$pserv['task_image']?>" class="img-full" alt="<?=$pserv['alt_text_task']?>">
          
                </div>
            </div>
            <div class="col-lg-6 offset-lg-1 col-12">
                <ul class="point-list style-65 white">
                <?php if(!empty($pserv['task_json']))
                    {
                        $cardsounique = json_decode($pserv['task_json'],true);
                        foreach($cardsounique as $row)
                        {
                            ?>
                    <li>
                        <!-- <img src="<?=base_url()?>assets/images/tick.svg"> -->
                        <?=$row['point']?>
                    </li>
                    <?php
                        }
                    }?>
                  
                </ul>
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


<section class="sec pp-sec style-65">
    <div class="container">
        
        <div class="row justify-content-center">
            <div class="col-12">
                <div class="sec-head center">
                    <h2>
                        <?=$pserv['outcomes_heading']?>
                    </h2>
                </div>
            </div>
            <div class="col-lg-11 col-12">
                <div class="icc-container style-65">
                <?php if(!empty($pserv['outcomes_json']))
                    {
                        $cardsounique = $pserv['outcomes_json'];
                        foreach($cardsounique as $row)
                        {
                            ?>
                    <div class="icc">
                    <img src="<?=base_url('uploads/images/').$row['image']?>" alt="">
                        <p><?=$row['heading']?></p>
                    </div>
                    <?php
                        }
                    }?>
                </div>
            </div>
        </div>
    </div>
</section>