<style>
    .main-footer .container > .row{
        display: none !important;
    }
    .ft-bottom{
        margin-top: 0px !important;
    }
    .float-btn{
        display: none;
    }
</style>
 <header class="inner-header team-banner sec">
        <img src="assets/images/team-bg.jpg" alt="">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-6 col-12">
                    <div class="sec-head center ">
                        <h1>
                            Our CFO partners are our <span>biggest assets.</span>
                        </h1>
                    </div>
                </div>
                <div class="col-lg-8 col-12">
                    <p class="para text-center ">
                        <!--CFO Bridge has a vast team of CFO's who have significant experience. From startups, insurance, IT, agriculture, and healthcare to financial services and automobiles - their expertise in managing finance spans various industries. Our CFOs are further supported by a dedicated group of 20+ consultants. -->
                        CFO Bridge has an experienced team of Industry CFOs and Consultants
                    </p>
                </div>
            </div>
        </div>
    </header>
    <?php if(!empty($industry)){
                                            foreach($industry as $in)
                                            {
                                                $ind = explode(',', $in['industry']);
                                            foreach($ind as $indus)
                                            {
                                                $input[]=$indus;
                                            }
                                           
                                            }
                                            $input = array_map(function($str) {
                                                return preg_replace('/[^A-Za-z0-9 ]/', '', trim(($str)));
                                            }, $input);
                                            
                                            // Remove duplicates
                                            $newInArr = array_unique($input);
                                        }
                                        
                                        if(!empty($location)){
                                            foreach($location as $in)
                                            {
                                                $ind = explode(',', $in['location']);
                                            foreach($ind as $indus)
                                            {
                                                $input2[]=$indus;
                                            }
                                           
                                            }
                                            $input2 = array_map(function($str) {
                                                return preg_replace('/[^A-Za-z0-9 ]/', '', trim(($str)));
                                            }, $input2);
                                            
                                            // Remove duplicates
                                            $newLoArr = array_unique($input2);
                                        }
                                            ?>
    <section class="testi-sec sec blue-bg">
        <div class="container">
            <div class="row">
                <div class="col-12 text-right">
                    <button class="ft-toggle main-btn ">
                        <span> Apply a Filter</span>
                    </button>
                </div>
            </div>
            <div class="row flex-lg-row-reverse">
                <div class="col-lg-3 col-12">
                    <div class="ft-card">
                        <button class="ft-close">
                            <img src="assets/images/cll.svg" alt="" />
                        </button>
                        <h3>
                        Apply a Filter
                        </h3>
                        <form method="get" action="<?=base_url('team')?>">
                            <div class="form-group">
                                <div class="inp-grp">
                                    <input type="text" name="name" placeholder="Name" />
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="inp-grp">
                                    <!--<input type="text" name="location" placeholder="Location" />-->
                                    <div class="select-group">
                                        <select name="location">
                                            <option value="">Select Location</option>
                                            <?php if(!empty($newLoArr))
                                            foreach($newLoArr as $indus)
                                            {
                                               if(!empty($indus))
                                                echo "<option>".ucwords($indus)."</option>";
                                            }
                                           
                                            
                                           
                                            ?>
                                        </select>
                                        <img src="<?=base_url()?>assets/images/drop.svg" alt="">
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="inp-grp">
                                    <div class="select-group">
                                        <select name="industry">
                                            <option value="">Select Industry</option>
                                            <?php if(!empty($newInArr))
                                            foreach($newInArr as $indus)
                                            {
                                               if(!empty($indus))
                                                echo "<option>".ucwords($indus)."</option>";
                                            }
                                           
                                            
                                           
                                            ?>
                                        </select>
                                        <img src="<?=base_url()?>assets/images/drop.svg" alt="">
                                    </div>
                                </div>
                            </div>
                            <button class="main-btn with-icon justify-content-center" type="submit">
                                <span>Search</span>
                                <img src="assets/images/blue-arrow.svg" alt="Blue Arrow Icon">
                            </button>
                        </form>
                    </div>
                </div>
                <div class="col-lg-9 col-12">
                    <div class="team-grid">
                    <?php if ($team) {
                            foreach ($team as $row) {
                        ?>
                        <a href="<?=base_url('team/').$row['slug']?>" class="team-card style-2">
                            <div class="over">
                                <span></span>
                                <div class="con">
                                    <span  class="tit">
                                        <h3>
                                            <?= $row['name'] ?>
                                        </h3>
                                    </span>
                                    <p> <?= $row['title'] ?></p>
                                    <span  class="linked-in">
                                        <img src="<?=base_url('assets/images/linkedin.svg')?>" alt="">
                                    </span>
                                </div>
                            </div>
                            <div class="m-wrap">
                                <img src="<?= base_url('uploads/images/') . $row['image'] ?>" alt="<?= $row['alt_text'] ?>">
                            </div>
                        </a>
                                    
                        <?php
                            }
                        }
                        ?></div>
                    </div>
                </div>
            </div>
        </div>
    </section>