<div class="main-panel">
  <div class="content-wrapper">
    <div class="card">
      <div class="card-body">
        <h4 class="card-title">Update Post</h4>
        <div class="row">
          <div class="col-12">
            <form class="forms-sample" id="blog-form">
              <div class="form-group">
                <label>Title</label>
                <input type="text" class="form-control" name="title" value="<?= $title ?>" required>
              </div>
              <div class="">
              <div class="row <?= $type == 2 ? 'd-none' : '' ?>">
              <div class="form-group col-3">
                <label>Publisher</label>
                <input type="text" class="form-control" name="publisher" value="<?=$publisher?>">
              </div>
              <div class="form-group col-3 ">
                <label>Author</label>
                <input type="text" class="form-control" name="author" value="<?=$author?>">
              </div>
              <div class="form-group col-6">
                <label>Author Profile Link</label>
                <input type="text" class="form-control" name="authorprofile" value="<?=urldecode($authorprofile)?>">
              </div>
              </div>
                
                <div class="form-group">
                  <label>Short Description (Max 200 Charachters)</label>
                  <input type="text" class="form-control" name="description" value="<?= $description ?>" required>
                </div>
                <div class="form-group <?= $type == 2 ? 'd-none' : '' ?>">
                  <label>Tags</label>
                  <input type="text" class="form-control" id="tags" name="tags" value="<?= $tags ?>">
                </div>
                <div class="form-group">
                  <label>Post Date</label>
                  <div id="datepicker-popup" class="input-group date datepicker">
                    <input type="text" class="form-control" name="date" value="<?= date('m/d/Y', strtotime($posted)) ?>">
                    <span class="input-group-addon input-group-append border-left">
                      <span class="far fa-calendar input-group-text"></span>
                    </span>
                  </div>
                </div>
                <div class="form-group <?= $type == 2 ? 'd-none' : '' ?>">
                  <label>Content</label>
                  <textarea class="form-control" name="content" id="summernoteExample" rows="4"><?= html_entity_decode($content) ?></textarea>
                </div>
              </div>
              <div class="form-group <?= $type == 1 ? 'd-none' : '' ?>">
                <label>Link</label>
                <input type="text" class="form-control" value="<?= urldecode($link) ?>" name="link">
              </div>
              <div class="form-group">
                <label>Image</label>
                <br>
                <button type="button" class="btn btn-primary select-image" data-img="image">Select Image</button>
                <input type="hidden" class="image" name="image" value="<?= $image ?>" />
              </div>
              <input type="hidden" name="id" value="<?= $id ?>">
              <div class="form-group">
                <label>Page Header</label>
                <textarea class="form-control" name="page_header" rows="4"><?= html_entity_decode($page_header) ?></textarea>
              </div>
               <div class="form-group <?= $type == 2 ? 'd-none' : '' ?>">
                <label>Blog Schema</label>
                <textarea class="form-control" name="blogschema" rows="4"><?= html_entity_decode($blogschema) ?></textarea>
              </div>
              
              
            <h5>FAQ Section</h5>
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
    $(document).ready(function(e) {
      $("#blog-form").on('submit', (function(e) {
        e.preventDefault();
        $.ajax({
          url: site_url + "admin/updateblog",
          type: "POST",
          data: new FormData(this),
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