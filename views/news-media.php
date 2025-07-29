<header class="inner-banner sec" style="background: url(<?= base_url() ?>assets/images/news-banner.png) center/cover no-repeat;">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-8 col-12">
                <div class="sec-head center white">
                    <h1><?= $heading ?></h1>
                </div>
            </div>
        </div>
    </div>
</header>

<section class="card-section" style="margin: 50px 0;">
    <div class="container">
        <div class="row justify-content-center">
            <?php if (!empty($data)) {
                foreach ($data as $row) { ?>
                    <div class="col-lg-4 col-md-10 col-sm-12 card-item mb-4">
                        <div class="card-block p-4 rounded shadow-sm">
                            <!-- Image Section -->
                            <div class="card-image-wrapper mb-3">
                                <a href="<?= urldecode($row['link']) ?>" target="_blank" class="d-block">
                                    <img src="<?= base_url('uploads/images/') . $row['image'] ?>"   
                                         alt="<?= $row['title'] ?>" 
                                         class="img-fluid rounded">
                                </a>
                            </div>
                            <!-- Content Section -->
                            <div class="card-content">
                                <h6 class="text-muted mb-2"><?= date('d-M-Y', strtotime($row['posted'])) ?></h6>
                                <h2 class="heading-style-h4 mb-2"><?= $row['title'] ?></h2>
                                <p class="text-muted mb-3 text-style-3lines"><?= $row['description'] ?></p>
                                <a href="<?= urldecode($row['link']) ?>" target="_blank" class="btn btn-outline-dark btn-sm">Read More</a>
                            </div>
                        </div>
                    </div>
                <?php }
            } ?>
        </div>
    </div>
</section>


<style>
   /* General Card Styles */
.card-section {
    margin: 50px 0;
}

.card-item {
    padding: 5px;
}

.card-block {
    border: 1px solid #eaeaea;
    border-radius: 10px;
    overflow: hidden;
    transition: box-shadow 0.3s, transform 0.3s;
    background-color: #fff;
}

.card-block:hover {
    box-shadow: 0 6px 12px rgba(0, 0, 0, 0.1);
    transform: translateY(-3px);
}

/* Image Section */
.card-image-wrapper img {
    width: 100%;
    height: 150px;
    object-fit: cover;
    border-radius: 5px;
}

/* Content Section */
.card-content {
    text-align: left;
}

.heading-style-h4 {
    font-size: 1.5rem;
    font-weight: bold;
    display: -webkit-box;
    line-height: 1.3;
    margin: 10px 0;overflow: hidden;
    -webkit-line-clamp: 3; /* Limits text to 3 lines */
    -webkit-box-orient: vertical;
    color: #555;
}

.text-style-3lines {
    display: -webkit-box;
    overflow: hidden;
    -webkit-line-clamp: 3; /* Limits text to 3 lines */
    -webkit-box-orient: vertical;
    color: #555;
}

/* Button Styling */
.btn-outline-dark {
    border: 1px solid #333;
    color: #333;
    transition: background-color 0.3s, color 0.3s;
}

.btn-outline-dark:hover {
    background-color: #333;
    color: #fff;
}

/* Responsive Styles */
@media (max-width: 991px) {
    .card-item {
        margin-bottom: 2rem;
    }
    .heading-style-h4 {
        font-size: 1.25rem;
    }
    .card-content {
        text-align: center;
    }
}

@media (max-width: 767px) {
    .card-content {
        margin-top: 1rem;
        text-align: center;
    }
    .btn-outline-dark {
        width: 100%;
    }
}

</style>