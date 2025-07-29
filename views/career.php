<header class="career-header">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-6 col-12">
                <div class="sec-head center">
                    <h1>
                        Think out of the box… <br><span>Evolve your career</span>
                    </h1>
                    <p class="para">
                        At CFO Bridge, people come first. We believe that the success of our various CFO services depend
                        on attracting, retaining, and developing top talent. Our CFO partners and consultants are the
                        backbone of our business structure.
                    </p>
                </div>
                <a href="#ca-sec" class="main-btn center border-btn with-icon">
                    <span>Join Us Now</span>
                    <img src="assets/images/blue-arrow.svg" alt="Blue Arrow Icon">
                </a>
            </div>
        </div>
    </div>
    <div class="cc-img-container">
        <div class="cc-swiper swiper">
            <div class="swiper-wrapper">
                <?php if (!empty($gallery))
                    foreach ($gallery as $row) {
                        ?>
                        <div class="swiper-slide">
                            <div class="cc-gal-img">
                                <img src="<?= base_url('uploads/images/') . $row['image'] ?>" alt="<?= $row['alt_text'] ?>">
                            </div>
                        </div>
                    <?php } ?>
            </div>
        </div>
    </div>
</header>

<section class="job-sec blue-bg sec">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="sec-head white center ">
                    <h2>
                        Current <span>openings</span>
                    </h2>
                </div>
            </div>
        </div>
        <div class="row mt-50">
            <?php if (!empty($jobs))
                foreach ($jobs as $row) {
                    ?>

                    <div class="col-lg-4 col-12">
                        <div class="job-card">
                            <h3>
                                <?= $row['title'] ?>
                            </h3>
                            <p class="para">
                                <?= $row['description'] ?>
                            </p>
                            <div class="bt-flex">
                                <a href="javascript:void(0)" class="open-j-modal" data-id="<?= $row['id'] ?>">
                                    <span>Know More</span>
                                </a>
                                <a href="#ca-sec" class="main-btn with-icon white-border-btn ca-btn"
                                    data-name="<?= $row['title'] ?>">
                                    <span>Apply Now</span>
                                    <img src="assets/images/blue-arrow.svg" alt="Blue Arrow Icon">
                                </a>
                            </div>
                        </div>
                    </div>
                    <?php
                }
            ?>
        </div>
    </div>
</section>

<section class="career-form-sec sec bg-light-gr" id="ca-sec">
    <img src="assets/images/path.svg" alt="">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="sec-head center">
                    <h2>
                        Ready to take <span>on a new role?</span>
                    </h2>
                </div>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-lg-8 col-12">
                <div class="job-form">
                    <form action="post" class="form" data-form="insertcareer">

                        <div class="row">
                            <div class="col-lg-6 col-12">
                                <div class="form-group style-2">
                                    <label for="" class="label-text">
                                        Name
                                    </label>
                                    <div class="inp-grp">
                                        <input type="text" name="name">
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 col-12">
                                <div class="form-group style-2">
                                    <label for="" class="label-text">
                                        Email Address
                                    </label>
                                    <div class="inp-grp">
                                        <input type="email" name="cemail">
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 col-12">
                                <div class="form-group style-2">
                                    <label for="" class="label-text">
                                        Phone Number
                                    </label>
                                    <div class="inp-grp">
                                        <input type="text" id="mobile_code" class="form-control"
                                            placeholder="Phone Number" name="phone">
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 col-12">
                                <div class="form-group style-2">
                                    <label for="" class="label-text">
                                        City
                                    </label>
                                    <div class="inp-grp">
                                        <input type="text" name="city">
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-12">
                                <div class="form-group style-2">
                                    <label for="" class="label-text">
                                        Years of Experience
                                    </label>
                                    <div class="inp-grp">
                                        <input type="number" min="0" name="experience">
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-4 col-12">
                                <div class="form-group style-2">
                                    <label for="" class="label-text">
                                        Previous Job Title
                                    </label>
                                    <div class="inp-grp">
                                        <input type="text" name="last_role">
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-4 col-12">
                                <div class="form-group style-2">
                                    <label for="" class="label-text">
                                        Previous Employer
                                    </label>
                                    <div class="inp-grp">
                                        <input type="text" name="last_company">
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-8 col-12">
                                <div class="form-group style-2">
                                    <label for="" class="label-text">
                                        Job Role You’re interested in
                                    </label>
                                    <div class="inp-grp">
                                        <input type="text" class="ca-inp" name="position">
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-12">
                                <div class="form-group">
                                    <label for="" class="label-text">
                                        Resume <span class="txt">( File Up to 5MiB)</span>
                                    </label>
                                    <div class="resume-selector">
                                        <input type="file" accept="application/pdf" id="res" name="resume">
                                        <label for="res">
                                            <span>
                                                Upload Resume Here
                                            </span>
                                            <button type="button" id="d-res">
                                                <img src="assets/images/cross.svg" alt="">
                                            </button>
                                        </label>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-12 col-12">
                                <div class="form-group style-2">
                                    <label for="" class="label-text">
                                        LinkedIn Profile
                                    </label>
                                    <div class="inp-grp">
                                        <input type="text" name="linkedin">
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-12 col-12">
                                <div class="form-group style-2">
                                    <label for="" class="label-text">
                                        Cover Letter
                                    </label>
                                    <div class="inp-grp">
                                        <textarea name="coverletter" id="" rows="3"></textarea>
                                    </div>
                                </div>

                                <button type="submit" class="main-btn center with-icon">
                                    <span>Submit Your Profile</span>
                                    <img src="assets/images/blue-arrow.svg" alt="Blue Arrow Icon">
                                </button>
                            </div>
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </div>
</section>

<div class="modal fade cc-modal" id="ca-model" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Consultant</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="job-des-wrapper">

                </div>
            </div>

        </div>
    </div>
</div>

<script>
    $(document).ready(function () {
        $(".open-j-modal").click(function () {
            let id = $(this).data("id");

            $.ajax({
                type: "post",
                url: site_url + "home/getjobcontents",
                data: { id: id },
                dataType: "json",
                success: function (res) {
                    if (res.status) {
                        $(".job-des-wrapper").html(res.content);
                        $("#ca-model").modal("show");

                    }
                }
            });
        })
    })
</script>