<style>
    .main-footer .container > .row{
        display: none !important;
    }
    .ft-bottom{
        margin-top: 0px !important;
    }
</style>
<header class="inner-banner sec" style="background:url('<?=base_url('uploads/images/').$pserv['image_banner']?>') center/cover no-repeat;">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-9 col-12">
                <div class="sec-head center white">
                    <h1>
                    <?=$pserv['heading_banner']?>
                    </h1>
                </div>
            </div>
        </div>
    </div>
</header>

<section class="ind-sec">
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

<section class="bg-grey sec help-sec">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="sec-head center">
                    <h2>
                    <?=$pserv['heading_help']?>
                    </h2>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <div class="help-points-grid">
                <?php if(!empty($pserv['card_json_help']))
                    {
                        $cardhelp = ($pserv['card_json_help']);
                        foreach($cardhelp as $row)
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
                    </div>  <?php
                        }
                    }?>
                </div>

            </div>
        </div>
    </div>
</section>
<?php 
include_once 'common/clientlogo.php';
?>

<?php
include_once 'common/testimonial.php';
?>

<section class="faq-sec sec light-bg">
    <div class="container">
        <div class="row">
            <div class="col-12 mb-30">
                <div class="sec-head center">
                    <h2>
                        FAQ
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

