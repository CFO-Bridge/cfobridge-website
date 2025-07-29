<style>
    
.team-inner {
  position: relative;
  width: 100%;
}
.team-inner .team-inner-grid {
  display: grid;
  grid-template-columns: 1fr 1fr;
  gap: 50px;
  align-items: center;
}
.team-inner .team-inner-grid .l-part {
  background: var(--gr);
  position: relative;
}
.team-inner .team-inner-grid .l-part > img {
  width: 100%;
  height: 85%;
  -o-object-fit: contain;
     object-fit: contain;
  -o-object-position: bottom;
     object-position: bottom;
  /*margin-top: 1.5em;*/
}
.team-inner .team-inner-grid .l-part .back-btn {
  display: flex;
  align-items: center;
  position: absolute;
  top: 2em;
  left: 3em;
  gap: 5px;
  max-width: -moz-max-content;
  max-width: max-content;
}
.team-inner .team-inner-grid .l-part .back-btn img {
  width: 17px;
}
.team-inner .team-inner-grid .l-part .back-btn span {
  color: white;
  font-size: 16px;
}
.team-inner .team-inner-grid .r-part .team-inner-con {
  padding: 2em 0px;
}
.team-inner .team-inner-grid .r-part .team-inner-con h3, .team-inner .team-inner-grid .r-part .team-inner-con h1 {
  font-size: 42px;
  font-family: "sequelbook", sans-serif;
  color: var(--blue);
  margin-bottom: 20px;
}
.team-inner .team-inner-grid .r-part .team-inner-con > ul {
  position: relative;
  margin-bottom: 1.5em !important;
}
.team-inner .team-inner-grid .r-part .team-inner-con > ul > li {
  display: grid;
  grid-template-columns: 0.4fr 1fr;
  gap: 25px;
  padding: 8px 0px;
}
.team-inner .team-inner-grid .r-part .team-inner-con > ul > li span {
  display: block;
}
.team-inner .team-inner-grid .r-part .team-inner-con > ul > li span:nth-child(1) {
  font-size: 16px;
  font-family: "sequelbook", sans-serif;
}
.team-inner .team-inner-grid .r-part .team-inner-con > ul > li span:nth-child(2) {
  font-size: 16px;
  color: var(--blue);
  font-family: "sequelsemibold", sans-serif;
}
.team-inner .team-inner-grid .r-part .team-inner-con .tags {
  display: flex;
  align-items: center;
  gap: 8px;
  flex-wrap: wrap;
}
.team-inner .team-inner-grid .r-part .team-inner-con .tags li {
  padding: 5px 18px;
  border-radius: 50px;
  background: #E9E9E9;
  min-width: -moz-max-content;
  min-width: max-content;
  color: rgba(0, 0, 0, 0.85);
  font-size: 14px;
  font-weight: 500;
}
.team-inner .team-inner-grid .r-part .team-inner-con .lk-wrap {
  display: flex;
  align-items: center;
  gap: 10px;
}
.team-inner .team-inner-grid .r-part .team-inner-con .lk-wrap span {
  font-size: 16px;
  font-family: "sequelbook";
  color: #0073AF;
}
.team-inner .team-inner-grid .r-part .team-inner-con hr {
  height: 2px;
  background: #E6E6E6;
  margin: 2.5em 0px;
}
.team-inner .team-inner-grid .r-part .team-inner-con .cnn-p {
  max-height: 250px;
  overflow-x: hidden;
  overflow-y: auto;
}

</style>

<section class="team-inner">
        <div class="team-inner-grid">
            <div class="l-part">
                <a href="<?=base_url('team')?>" class="back-btn">
                    <img src="<?=base_url('assets/images/back-arrow.svg')?>" alt="">
                    <span>Back</span>
                </a>
                <img src="<?=base_url('uploads/images/').$team['image']?>" alt="">
            </div>
            <div class="r-part">
                <div class="container-right">
                    <div class="team-inner-con">
                        <h1>
                            <?=$team['name']?>
                        </h1>
                        <ul>
                            <li>
                                <span>
                                    Experience
                                </span>
                                <span>
                                <?=$team['experience']?> Years
                                </span>
                            </li>
                            <li>
                                <span>
                                    Location
                                </span>
                                <span>
                                <?=$team['location']?>
                                </span>
                            </li>
                            <?php 
                            if(!empty($team['companies'])){ ?>
                            <li>
                                <span>
                                    Companies worked with
                                </span>
                                <span>
                                    <ul class="tags">
                                        <?php
                                            $comp = explode(',', $team['companies']);
                                            foreach($comp as $company)
                                            echo "<li>$company</li>";
                                           ?>
                                       
                                    </ul>
                                </span>
                            </li>
                            <?php } ?>
                            <li>
                                <span>
                                    Industry
                                </span>
                                <span>
                                <ul class="tags">
                                        <?php if(!empty($team['industry']))
                                        {
                                            $ind = explode(',', $team['industry']);
                                             $ind = array_map(function($str) {
                                                return preg_replace('/[^A-Za-z0-9 ]/', '', trim(($str)));
                                            }, $ind);
                                            foreach($ind as $indus)
                                            echo "<li>$indus</li>";
                                          }  ?>
                                       
                                    </ul>
                                </span>
                            </li>
                            <li>
                                <span>
                                    Education
                                </span>
                                <span>
                                <?=$team['education']?>
                                </span>
                            </li>
                            <!-- <?php if(!empty($downloaddocs))
                            {?>
                            <li>
                                <span>
                                    Downloads
                                </span>
                                 <span>
                                <ul class="tags">
                                <?php foreach($downloaddocs as $doc){?>
                                <li>
                                <a href="<?=base_url('downloads/').$doc['slug']?>"><?=$doc['title']?></a></li> <?php }?>
                                </ul>
                                </span>
                            </li>
                            <?php }?> -->
                        </ul>
                        <a href="<?=urldecode($team['link'])?>" target="_blank" class="lk-wrap">
                            <img src="<?=base_url('assets/images/c-linkedin.svg')?>" alt="">
                            <span><?=$team['title']?></span>
                        </a>
                        <hr>
                        <div class="cnn-p custom-scroll">
                            <p class="para">
                            <?=$team['details']?></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <?php if(!empty($downloaddocs))
                            {?>
    <section class="sec">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="swiper d-swiper">
                        <div class="swiper-wrapper">
                            <?php foreach($downloaddocs as $doc){?>
                                <div class="swiper-slide">
                                    <a href="<?=base_url('download-inner/').$doc['slug']?>" target="blank" class="bll-card">
                                        <div class="im">
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
                                        <div class="det">
                                            <h3>
                                                <?=$doc['title']?>
                                            </h3>
                                            <p class="para">
                                                <?=$doc['short_description']?>
                                            </p>
                                            <button class="main-btn link-blue-btn">
                                                <span>Learn More</span>
                                                <img src="<?=base_url()?>assets/images/blue-arrow.svg" alt="Blue Arrow Icon">
                                            </button>
                                        </div>
                                    </a>
                                </div>
                            <?php }?>
                           
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <?php }?>
