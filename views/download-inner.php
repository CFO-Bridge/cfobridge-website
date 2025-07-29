<section class="blog-inner-sec sec ev-header">
    <header class="main-header ">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-7 col-12">
                    <div class="sec-head">
                        <h1>
                            <?=$doc['title']?>
                        </h1>
                    </div>
                </div>
                <div class="col-lg-4 offset-lg-1 col-12">
                <div class="ev-img">
  <?php
    $fileExtension = pathinfo($doc['file'], PATHINFO_EXTENSION);
    $imageFileName = 'default-icon.jpg';
    
    if ($fileExtension === 'pdf') {
      $imageFileName = 'pdf-icon.jpg';
    } elseif ($fileExtension === 'excel') {
      $imageFileName = 'excel-icon.jpg';
    } elseif ($fileExtension === 'doc') {
      $imageFileName = 'doc-icon.jpg';
    }

    echo '<img src="' . base_url() . 'assets/images/' . $imageFileName . '" class="img-full" alt="">';
  ?>
</div>

                </div>
            </div>
        </div>
    </header>
</section>

<section class="sec">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-8 col-12">
                <div class="html">
                   <?=html_entity_decode($doc['description'])?>
                    <a href="#con-sec" class="main-btn">
                        <span>Download Now</span>
                    </a>
                </div>
            </div>

        </div>
    </div>
</section>

<section class="sec" id="con-sec" style="background: #f4f8ff !important">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-8 col-12">
                    <div class="sec-head">
                        <h2>Download Form</h2>
                    </div>
                    <p class="para">
                        Fill a form to get download link
                    </p>
                    <form data-form="insertcontact" data-file-name="<?=$doc['title']?>" data-download="<?=base_url('uploads/pdf/').$doc['file']?>" method="post" class="contact-form form">
                        <div class="row">
                            <div class="col-lg-6 col-12">
                                <div class="form-group">
                                    <label for="" class="label-text">Name <span>*</span></label>
                                    <div class="inp-grp">
                                        <input type="text" name="name">
                                    </div>
                                </div>
                            </div>
                            <!-- <div class="col-lg-6 col-12">
                            <div class="form-group">
                                <label for="" class="label-text">Surname <span>*</span></label>
                                <div class="inp-grp">
                                    <input type="text" name="surname">
                                </div>
                            </div>
                        </div> -->
                            <div class="col-lg-6 col-12">
                                <div class="form-group">
                                    <label fosr="" class="label-text">Email Address <span>*</span></label>
                                    <div class="inp-grp">
                                        <input type="email" name="email">
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-12 col-12">
                                <div class="form-group">
                                    <label fosr="" class="label-text">Phone Number <span>*</span></label>
                                    <div class="inp-grp">
                                        <!--<input type="text" name="phone">-->
                                        <input type="text" id="mobile_code" class="form-control"
                                            placeholder="Phone Number" name="phone">
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-12 col-12">
                                <div class="form-group">
                                    <label fosr="" class="label-text">Message</label>
                                    <div class="inp-grp">
                                        <textarea name="message" id="" rows="3"></textarea>
                                    </div>
                                </div>
                                <button type="submit"  class="main-btn with-icon mt-10 mb-20">
                                    <span>Download File</span>
                                    <img src="<?=base_url()?>assets/images/blue-arrow.svg" alt="Blue Arrow Icon">
                                </button>
                            </div>
                        </div>
                    </form>
               
            </div>
        </div>
    </div>
</section>