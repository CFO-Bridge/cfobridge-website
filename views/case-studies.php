<style>
    .ct-sec {
        display: none;
    }
</style>
<header class="inner-banner sec" style="background: url(<?= base_url() ?>assets/images/case_banner.png) center/cover no-repeat !important;">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-7 col-12">
                <div class="sec-head center white">
                    <h1>
                        <?= $heading ?>
                    </h1>
                </div>
                <?php if (!empty($bbtype)) { ?>
                    <form method="get" 
                          action="<?= $heading == 'Blogs' ? base_url('blogs') : base_url('case-studies') ?>" 
                          class="bl-search-form">
                        <div class="search-bar-wrapper">
                            <input type="text" 
                                   name="search" 
                                   placeholder="<?= $heading == 'Blogs' ? 'Search Blog Here' : 'Search Case Studies Here' ?>" />
                            <button type="submit">
                                <img src="<?= base_url('assets/images/search-icon.svg') ?>" alt="">
                            </button>
                        </div>
                    </form>
                <?php } ?>
            </div>
        </div>
    </div>
</header>


<section class="bll-sec sec">
    <div class="container">
        <div class="row">
            
                <?php if (!empty($data)) {
                    echo '<div class="bll-grid">';
                    foreach ($data as $row) {
                ?>

                        <a href="<?= base_url('resources/') . $row['slug'] ?>" class="bll-card">
                            <div class="im">
                                <img src="<?= base_url('uploads/images/') . $row['image'] ?>" alt="<?=$row['alt_text']??$row['image']?>">
                            </div>
                            <div class="det">
                                <h3>
                                    <?= $row['title'] ?>
                                </h3>
                                <button class="main-btn link-blue-btn">
                                    <span>Learn More</span>
                                    <img src="<?=base_url("assets/images/blue-arrow.svg")?>" alt="Blue Arrow Icon">
                                </button>
                            </div>
                        </a>

                <?php }
                    echo " </div>";
                } else {
                    echo "<p class='text-center py-5 h5'>No Result Found</p>";
                } ?>


            </div>
            </div>
</section>