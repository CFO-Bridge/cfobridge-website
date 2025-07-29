<div class="main-panel">
  <div class="content-wrapper">
    <div class="card">
      <div class="card-body">
        <h4 class="card-title">Update Parent Service</h4>
        <div class="row">
          <div class="col-12">
            <form class="forms-sample " id="service-form">
              
             
              <h5>Section 1 (Service Inner Page Banner Section)</h5>
              <div class="form-group">
                <label>Banner Heading</label>
                <input type="text" class="form-control" name="inner_banner_heading" value="<?= $heading_banner ?>">
              </div>
              <div class="form-group">
                <label>Select Banner Image</label>
                <br>
                <button type="button" class="btn btn-primary select-image" data-img="inner_banner_image"><?= !empty($image_banner) ? 'Image Exist' : 'Select Image' ?></button>
                <input type="hidden" class="inner_banner_image" name="inner_banner_image" value="<?= $image_banner ?>" />
              </div>
              <hr>
              <h5>Section 2 (Service Inner Page About Section)</h5>
              <hr>
              <div class="form-group">
                <label>Heading</label>
                <input type="text" class="form-control" name="about_heading" value="<?= $heading_about ?>">
              </div>
              <div class="form-group">
                <label>Short Description</label>
                <input type="text" class="form-control" name="about_short_description" value="<?= $description_about ?>" required>
              </div>
              <div class="form-group">
                <label>Select Image</label>
                <br>
                <button type="button" class="btn btn-primary select-image" data-img="image2"><?= !empty($image_about) ? 'Image Exist' : 'Select Image' ?></button>
                <input type="hidden" class="image2" name="about_image" value="<?= $image_about ?>" />
              </div>
             
              <hr>
              <h5>Section 3 (Service Inner Page, CFO Bridge So Unique Section)</h5>
              <hr>
              <div class="form-group">
                <label>Heading</label>
                <input type="text" class="form-control" name="so_unique_heading" value="<?= $heading_so_unique ?>">
              </div>
              <div class="repeater">
              <?php if(!empty($card_json_so_unique))
                    {
                      $count=0;
                      $souniqueObj = json_decode($card_json_so_unique);
                    foreach($souniqueObj as $obj)
                    {
                      $count++;
                      ?>
                      <div id="so-unique-<?=$count?>" class="border p-3">
                    <div class="form-group">
                      <label>Select Image</label>
                      <br>
                      <button type="button" class="btn btn-primary addmore-image-select"><?=!empty($obj->image)?'Image Exist':''?></button>
                      <input type="hidden" class="hidden-image" name="sounique_exist[<?=$count?>][image]" value="<?=$obj->image?>" />
                    </div>
                    <div class="form-group">
                      <label>Heading</label>
                      <input type="text" class="form-control" name="sounique_exist[<?=$count?>][heading]" value="<?=$obj->heading?>">
                    </div>
                    <div class="form-group">
                      <label>Description</label>
                      <input type="text" class="form-control" name="sounique_exist[<?=$count?>][description]" value="<?=$obj->description?>">
                    </div>
                    <button type="button" data-id="so-unique-<?=$count?>" class="delete-so-unique btn btn-danger btn-sm icon-btn ml-2">
                      <i class="fas fa-trash"></i>
                    </button>
                    </div>
                    <?php }
                    }
                    ?> 
                <div data-repeater-list="so_unique">
                  <div data-repeater-item class="border p-3">
                 <div class="form-group">
                    <label>Select Image</label>
                    <br>
                    <button type="button" class="btn btn-primary addmore-image-select">Select Image</button>
                    <input type="hidden" class="hidden-image" name="image" />
                  </div>
                  <div class="form-group">
                    <label>Heading</label>
                    <input type="text" class="form-control" name="heading">
                  </div>
                  <div class="form-group">
                    <label>Description</label>
                    <input type="text" class="form-control" name="description">
                  </div>
                    <button data-repeater-delete type="button" class="btn btn-danger btn-sm icon-btn ml-2">
                      <i class="fas fa-trash"></i>
                    </button>
                  </div>
                </div>
                <br>
                <button data-repeater-create type="button" class="float-right btn btn-info btn-sm icon-btn ml-2 mb-2">
                  <i class="fa fa-plus"></i>
                </button>
              </div>
              <hr>
              <h5>Section 4 (Service Inner Page, FAQ Section)</h5>
              <hr>
              <div class="form-group">
                <label>Heading</label>
                <input type="text" class="form-control" value="<?= $heading_faq ?>" name="faq_heading">
              </div>
              <div class="repeater">
                <?php if (!empty($card_json_faq)) {
                  $count = 0;
                  $faqObj = json_decode($card_json_faq);
                  foreach ($faqObj as $obj) {
                    $count++;
                ?>
                    <div id="faq-<?= $count ?>" class="border p-3">

                      <div class="form-group">
                        <label>Heading</label>
                        <input type="text" class="form-control" name="faqexist[<?= $count ?>][heading]" value="<?= $obj->heading ?>">
                      </div>
                      <div class="form-group">
                        <label>Description</label>
                        <input type="text" class="form-control" name="faqexist[<?= $count ?>][description]" value="<?= $obj->description ?>">
                      </div>
                      <button type="button" data-id="faq-<?= $count ?>" class="delete-btn btn btn-danger btn-sm icon-btn ml-2">
                        <i class="fas fa-trash"></i>
                      </button>
                    </div>
                <?php }
                }
                ?>
                <div data-repeater-list="faq">
                  <div data-repeater-item class="border p-3">

                    <div class="form-group">
                      <label>Heading</label>
                      <input type="text" class="form-control" name="heading">
                    </div>
                    <div class="form-group">
                      <label>Description</label>
                      <input type="text" class="form-control" name="description">
                    </div>
                    <button data-repeater-delete type="button" class="btn btn-danger btn-sm icon-btn ml-2">
                      <i class="fas fa-trash"></i>
                    </button>
                  </div>
                </div>
                <br>
                <button data-repeater-create type="button" class="float-right btn btn-info btn-sm icon-btn ml-2 mb-2">
                  <i class="fa fa-plus"></i>
                </button>
              </div>
              <hr>
               <div class="form-group">
                <label>Page Heading</label>
                <textarea  class="form-control" rows="4" cols="50" name="page_header"><?=$page_header?></textarea>
              </div>
              <br>
              <br>
              <input type="hidden" name="id" value="<?=$id?>">
              <button type="submit" class="btn btn-primary btn-icon-text" id="sbt-btn">
                <i class="far fa-check-square btn-icon-prepend"></i>
                Submit
              </button>
            </form>
          </div>
        </div>
      </div>
      <div class="msg text-center"></div>
    </div>
  </div>
  <script>
    $(".delete-so-unique").click(function(){
        let id = $(this).attr("data-id");
        $("#" + id).remove();
    })
    $(document).ready(function() {
      autosize();
    })
    $(document).ready(function(e) {
      $("#service-form").on('submit', (function(e) {
        e.preventDefault();
        var formdata = new FormData(this);
        $.ajax({
          url: site_url + "admin/updateparentservice",
          type: "POST",
          data: formdata,
          dataType: 'json',
          contentType: false,
          cache: false,
          processData: false,
          beforeSend: function() {
            $('#sbt-btn').addClass('loading');
          },
          complete: function() {
            $('#sbt-btn').removeClass('loading');
          },
          success: function(res) {
            $(".msg").html(res.msg);
           
          }
        });
      }));
    });
  </script>