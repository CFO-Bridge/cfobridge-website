<?php 
$blogs = $this->home_model->getblogs(1,4);
?>
<section class="blog-sec sec">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="sec-head center">
                    <h2>
                        Insights
                    </h2>
                    <!-- <p class="para">
                        Still unsure about onboarding a virtual CEO? Hear it from our esteemed clients
                    </p> -->
                </div>
                <div class="bl-grid mb-30">
                    <?php if ($blogs) {
                        $count = 1;
                        foreach ($blogs as $row) {
                    ?>
                            <a class="bl-card style-2" target="_blank" href="<?=base_url('resources/').$row['slug']?>">
                                <div class="img-area">
                                    <img loading="lazy" src="<?= base_url('uploads/images/') . $row['image'] ?>" alt="<?= $row['image'] ?>">
                                </div>
                                <div class="det">
                                    <h3>
                                        <?= $row['title'] ?>
                                    </h3>
                                    
                                    <p class="para <?=$count==2|| $count == 3 ? "d-none" : ""?>">
                                        <?= $row['description'] ?></p>
                                </div>
                            </a>
                    <?php $count++; }
                    } ?>
                </div>
                <a href="<?=base_url('blogs')?>" target="_blank" class="main-btn center with-icon ">
                    <span>View All</span>
                    <img src="<?=base_url('assets/images/blue-arrow.svg')?>" alt="Blue Arrow Icon">
                </a>
            </div>
        </div>
    </div>
</section>