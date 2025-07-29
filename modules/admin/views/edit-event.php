<div class="main-panel">
  <div class="content-wrapper">
    <div class="card">
      <div class="card-body">
        <h4 class="card-title">Update Event</h4>
        <div class="row">
          <div class="col-12">
            <form class="forms-sample" id="blog-form">
              
              <div class="form-group">
                <label>Title</label>
                <input type="text" class="form-control" name="title" value="<?=$title?>" required>
              </div>
             
              <div class="form-group">
                <label>Short Description (Max 200 Charachters)</label>
                <input type="text" class="form-control" name="description" value="<?=$description?>" required>
              </div>
             
              <div class="form-group">
                <label>Key Speaker</label>
                <input type="text" class="form-control" name="author" value="<?=$author?>">
              </div>
              <div class="row">
              <div class="form-group col-6">
                <label>Event Date</label>
                <div id="datepicker-popup" class="input-group date datepicker">
                  <input type="text" class="form-control" name="date" value="<?=date('m/d/Y',strtotime($date))?>">
                  <span class="input-group-addon input-group-append border-left">
                    <span class="far fa-calendar input-group-text"></span>
                  </span>
                </div>
              </div>
              
              <div class="form-group col-6">
                <label>Event Time</label>
                <div class="input-group date" id="timepicker-example" data-target-input="nearest">
                        <div class="input-group" data-target="#timepicker-example" data-toggle="datetimepicker">
                          <input type="text" class="form-control datetimepicker-input" name="time" data-target="#timepicker-example" value="<?=date('h:i A',strtotime($time))?>"/>
                          <div class="input-group-addon input-group-append"><i class="far fa-clock input-group-text"></i></div>
                        </div>
                      </div>
              </div>
              </div>
              
                <div class="form-group">
                  <label>Link</label>
                  <input type="text" class="form-control" name="link" value="<?=urldecode($link)?>">
                </div>
                <div class="form-group">
                  <label>Highlights</label>
                  <textarea class="form-control" id="summernote2" name="tags"><?=html_entity_decode($tags)?></textarea>
                </div>
                <div class="form-group">
                  <label>Content</label>
                  <textarea class="form-control" id="summernote1" name="content"><?=html_entity_decode($content)?></textarea>
                </div>
                
              
              <div class="form-group">
                <label>Image (Max File Size 2MB)</label>
                <br>
                <button type="button" class="btn btn-primary select-image" data-img="image"><?=!empty($image)?'Image Exist':'Select Image'?></button>
                <input type="hidden" class="image" name="image" value="<?=$image?>" />
              </div>
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
  
    $(document).ready(function(e) {
      $("#blog-form").on('submit', (function(e) {
        e.preventDefault();
        $.ajax({
          url: site_url + "admin/insertupdateevents",
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

      $('#summernote1, #summernote2').summernote({
      height: 300,
      tabsize: 2
    });
    });
  </script>