<section class="blog-inner-sec sec ev-header">
    <header class="main-header ">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-7 col-12">
                    <div class="sec-head">
                        <h1>
                            <?=$event['title']?>
                        </h1>
                    </div>
                    <p class="mb-0 mt-2">⏱️ <?=date('h:i A',strtotime($event['time']))?></p>
                    <p class="mb-0">📅 <?=date('dS M',strtotime($event['date']))?> </p>
                    <p>🗣 Key Speaker : <?=$event['author']?></p>
                </div>
                <div class="col-lg-4 offset-lg-1 col-12">
                    <div class="ev-img">
                        <img src="<?=base_url('uploads/images/').$event['image']?>" class="img-full" alt="">
                    </div>
                </div>
            </div>
        </div>
    </header>
</section>

<section class="sec">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 col-12">
                <div class="html">
                <?=html_entity_decode($event['content'])?>
                </div>
                <div class="sec-head sm mt-40 mb-10">
                    <h2>Highlights</h2>
                </div>
                <div class="html">
                <?=html_entity_decode($event['tags'])?>
                </div>
            </div>
            <div class="col-lg-5 offset-lg-1 col-12">
                <form data-form="insertcontact" method="post" class="contact-form form">
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
                                    <input type="text" id="mobile_code" class="form-control" placeholder="Phone Number"
                                        name="phone">
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-12 col-12">
                            <div class="form-group">
                                <label fosr="" class="label-text">Organization</label>
                                <div class="inp-grp">
                                    <input type="text" name="company">
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-12 col-12">
                            <div class="form-group">
                                <label fosr="" class="label-text">Purpose Of Enquiry</label>
                                <div class="inp-grp">
                                    <div class="select-grp">
                                        <select name="type" id="">
                                            <option value="">Select Purpose</option>
                                            <option value="Looking for CFO services">Looking for CFO services</option>
                                            <option value="Looking for funding assistance">Looking for funding
                                                assistance</option>
                                            <option value="Other">Other</option>
                                        </select>
                                        <img src="<?=base_url()?>assets/images/arrow.svg" alt="">
                                    </div>
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
                            <button type="submit" class="main-btn with-icon mt-10 mb-20">
                                <span>Contact Us</span>
                                <img src="<?=base_url()?>assets/images/blue-arrow.svg" alt="">
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>