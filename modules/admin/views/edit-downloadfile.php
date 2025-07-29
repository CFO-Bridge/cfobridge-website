<div class="main-panel">
  <div class="content-wrapper">
    <div class="card">
      <div class="card-body">
        <h4 class="card-title">Update Document</h4>
        <div class="row">
          <div class="col-12">
            <form class="forms-sample" id="blog-form">
              
             
              <div class="form-group">
                <label>Title</label>
                <input type="text" class="form-control" name="title" required value="<?=$title?>">
              </div>
              <div class="form-group">
                <label>Short Description</label>
                <input type="text" class="form-control" name="sdescription" value="<?=$short_description?>" required>
              </div>
               <div class="form-group">
                <label>Select Team</label>
                <select class="form-control select2" name="teamid" required>
                    <option value=" ">Select Team  </option>
                    <?php if(!empty($teams))
                    foreach($teams as $tm)
                    {
                        ?>
                        <option value="<?=$tm['id']?>" <?=$teamid== $tm['id']?'selected':''?>><?=$tm['name']?></option>
                    <?php }?></select>
              </div>
            
             
              <div class="form-group">
                <label>Content</label>
                <textarea class="form-control" name="description" id="summernoteExample" rows="4"><?=html_entity_decode($description)?></textarea>
              </div> 
              <div class="form-group">
                <label>Select Document  <?=!empty($file)?'(File Exist)':''?></label>
                <br>
                 <input type="file" class="form-control" name="file" />
              </div>
              <input type="hidden" value="<?=$file?>" name="efile">
              <div class="form-group">
                <label>List Priority (0 for default)</label>
                <input type="text" class="form-control" name="orderby" value="0" value="<?=$orderby?>" required>
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
          url: site_url + "admin/insertupdatedownloadfile",
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