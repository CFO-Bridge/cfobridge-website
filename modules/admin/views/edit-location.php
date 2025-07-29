<div class="main-panel">
  <div class="content-wrapper">
    <div class="card">
      <div class="card-body">
        <h4 class="card-title">Edit Location</h4>
        <div class="row">
          <div class="col-12">
            <form class="forms-sample " id="service-form">
              <div class="form-group">
                <label>Title</label>
                <input type="text" class="form-control" name="title" value="<?= $title ?>" required>
              </div>
              <hr>
              <h5>Section 1 </h5>
              <div class="form-group">
                <label>Heading</label>
                <input type="text" class="form-control" name="heading_s1" value="<?= $heading_s1 ?>" required>
              </div>
              <div class="form-group">
                <label>Short Description</label>
                <input type="text" class="form-control" name="description_s1" value="<?= $description_s1 ?>" required>
              </div>
              <div class="form-group">
                <label>Select Image</label>
                <br>
                <button type="button" class="btn btn-primary select-image" data-img="image_home_card"><?= !empty($image_s1) ? 'Image Exist' : 'Select Image' ?></button>
                <input type="hidden" class="image_home_card" name="image_s1" value="<?= $image_s1 ?>" />
              </div>
              <hr>
              
              <h5>Section 2</h5>
              <hr>
              <div class="form-group">
                <label>Heading</label>
                <input type="text" class="form-control" name="heading_s3" value="<?= $heading_s3 ?>">
              </div>
              <div class="row">
                <div class="col-12">
                  <div class="form-group">
                    <label>Short Description</label>
                    <textarea class="form-control" rows="3" name="description_s3"><?= $description_s3 ?></textarea>
                  </div>
                </div>
              </div>
              <div class="repeater">
                <?php if (!empty($repeater_s3)) {
                  $count = 0;
                  $repeater_s3 = json_decode($repeater_s3);
                  foreach ($repeater_s3 as $obj) {
                    $count++;
                ?>
                    <div id="repeater_s3-<?= $count ?>" class="border p-3">
                      <div class="form-group">
                        <label>Heading</label>
                        <input type="text" class="form-control" name="repeater_s3[<?= $count ?>][heading]" value="<?= $obj->heading ?>">
                      </div>
                      <div class="form-group">
                        <label>Description</label>
                        <input type="text" class="form-control" name="repeater_s3[<?= $count ?>][description]" value="<?= $obj->description ?>">
                      </div>
                      <div class="row">
                        <div class="form-group col-4">
                          <label>Button Label</label>
                          <input type="text" class="form-control" name="repeater_s3[<?= $count ?>][btnlabel]" value="<?= $obj->btnlabel ?>">
                        </div>
                        <div class="form-group col-8">
                          <label>Button Link</label>
                          <input type="text" class="form-control" name="repeater_s3[<?= $count ?>][btnlink]" value="<?= urldecode($obj->btnlink) ?>">
                        </div>
                      </div>
                      <button type="button" data-id="repeater_s3-<?= $count ?>" class="delete-btn btn btn-danger btn-sm icon-btn ml-2">
                        <i class="fas fa-trash"></i>
                      </button>
                    </div>
                <?php }
                }
                ?>
                <div data-repeater-list="repeater_s3">
                  <div data-repeater-item class="border p-3">
                    <div class="form-group">
                      <label>Heading</label>
                      <input type="text" class="form-control" name="heading">
                    </div>
                    <div class="form-group">
                      <label>Description</label>
                      <input type="text" class="form-control" name="description">
                    </div>
                    <div class="row">
                      <div class="form-group col-4">
                        <label>Button Label</label>
                        <input type="text" class="form-control" name="btnlabel">
                      </div>
                      <div class="form-group col-8">
                        <label>Button Link</label>
                        <input type="text" class="form-control" name="btnlink">
                      </div>
                    </div>
                    <button data-repeater-delete type="button" class="btn btn-danger btn-sm icon-btn ml-2">
                      <i class="fas fa-trash"></i>
                    </button>
                  </div>
                </div>
                <br><button data-repeater-create type="button" class="float-right btn btn-info btn-sm icon-btn ml-2 mb-2">
                  <i class="fa fa-plus"></i>
                </button>
              </div>
              <hr>
              <h5>Section 3</h5>
              <hr>
              <div class="form-group">
                <label>Heading</label>
                <input type="text" class="form-control" name="heading_s2" value="<?= $heading_s2 ?>">
              </div>
              <div class="row">
                <div class="col-12">
                  <div class="form-group">
                    <label>Short Description</label>
                    <textarea class="form-control" rows="3" name="description_s2"><?= $description_s2 ?></textarea>
                  </div>
                </div>
              </div>
              <div class="repeater">
                <?php if (!empty($repeater_s2)) {
                  $count = 0;
                  $repeater_s2 = json_decode($repeater_s2);
                  foreach ($repeater_s2 as $obj) {
                    $count++;
                ?>
                    <div id="repeater_s2-<?= $count ?>" class="border p-3">
                      <div class="form-group">
                        <label>Heading</label>
                        <input type="text" class="form-control" name="repeater_s2[<?= $count ?>][heading]" value="<?= $obj->heading ?>">
                      </div>
                      <div class="form-group">
                        <label>Description</label>
                        <input type="text" class="form-control" name="repeater_s2[<?= $count ?>][description]" value="<?= $obj->description ?>">
                      </div>
                      <button type="button" data-id="repeater_s2-<?= $count ?>" class="delete-btn btn btn-danger btn-sm icon-btn ml-2">
                        <i class="fas fa-trash"></i>
                      </button>
                    </div>
                <?php }
                }
                ?>
                <div data-repeater-list="repeater_s2">
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
                <br><button data-repeater-create type="button" class="float-right btn btn-info btn-sm icon-btn ml-2 mb-2">
                  <i class="fa fa-plus"></i>
                </button>
              </div>
             
              <hr>
              <h5>Section 4</h5>
              <hr>
              <div class="form-group">
                <label>Heading</label>
                <input type="text" class="form-control" name="heading_s4" value="<?= $heading_s4 ?>">
              </div>
              <div class="form-group">
                <label>Description</label>
                <input type="text" class="form-control" name="description_s4" value="<?= $description_s4 ?>">
              </div>
              <hr>
              <h5>Section 5</h5>
              <hr>
              <div class="form-group">
                <label>Heading</label>
                <input type="text" class="form-control" name="heading_s5" value="<?= $heading_s5 ?>">
              </div>
              <div class="row">
                <div class="col-12">
                  <div class="form-group">
                    <label>Short Description</label>
                    <textarea class="form-control" rows="3" name="description_s5"><?= $description_s5 ?></textarea>
                  </div>
                </div>
              </div>
              <div class="repeater">
                <?php if (!empty($repeater_s5)) {
                  $count = 0;
                  $repeater_s5 = json_decode($repeater_s5);
                  foreach ($repeater_s5 as $obj) {
                    $count++;
                ?>
                    <div id="repeater_s5-<?= $count ?>" class="border p-3">
                      <div class="form-group">
                        <label>Select Image</label>
                        <br>
                        <button type="button" class="btn btn-primary addmore-image-select"><?= !empty($obj->image) ? 'Image Exist' : 'Select Image' ?></button>
                        <input type="hidden" class="hidden-image" name="repeater_s5[<?= $count ?>][image]" value="<?= $obj->image ?>" />
                      </div>
                      <div class="form-group">
                        <label>Heading</label>
                        <input type="text" class="form-control" name="repeater_s5[<?= $count ?>][heading]" value="<?= $obj->heading ?>">
                      </div>
                      <div class="form-group">
                        <label>Description</label>
                        <input type="text" class="form-control" name="repeater_s5[<?= $count ?>][description]" value="<?= $obj->description ?>">
                      </div>
                      <button type="button" data-id="repeater_s5-<?= $count ?>" class="delete-btn btn btn-danger btn-sm icon-btn ml-2">
                        <i class="fas fa-trash"></i>
                      </button>
                    </div>
                <?php }
                }
                ?>
                <div data-repeater-list="repeater_s5">
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
                <br><button data-repeater-create type="button" class="float-right btn btn-info btn-sm icon-btn ml-2 mb-2">
                  <i class="fa fa-plus"></i>
                </button>
              </div>
              <hr>
              <h5>Section 6</h5>
              <hr>
              <div class="form-group">
                <label>Heading</label>
                <input type="text" class="form-control" name="faq_heading" value="<?= $faq_heading ?>">
              </div>
              <div class="repeater">
                <?php if (!empty($faqArr)) {
                  $count = 0;
                  $faqArr = json_decode($faqArr);
                  foreach ($faqArr as $obj) {
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
                <textarea class="form-control" rows="4" cols="50" name="page_header"><?= html_entity_decode($page_header ?? '') ?></textarea>
              </div>
              <br>
              <br>
              <input type="hidden" name="id" value="<?= $id ?>">
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
    $(document).ready(function() {
      $(".delete-btn").click(function(){
        if(!confirm("Are you sure to delete element?")) return false;
        
        let id = $(this).attr("data-id");
        $("#" + id).remove();
    })
      autosize();
      $("#service-form").on('submit', (function(e) {
        e.preventDefault();
        var formdata = new FormData(this);
        $.ajax({
          url: site_url + "admin/insertupdatelocation",
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