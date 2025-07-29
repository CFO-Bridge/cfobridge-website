<div class="main-panel">
  <div class="content-wrapper">
    <div class="card">
      <div class="card-body">
        <h4 class="card-title">Add New Team</h4>
        <div class="row">
          <div class="col-12">
            <form class="forms-sample" id="blog-form">
              <div class="row">
                <div class="col-6">
                <div class="form-group">
                <label>Name</label>
                <input type="text" class="form-control" name="name" required>
              </div>
                </div>
                <div class="col-6">
                <div class="form-group">
                <label>Title</label>
                <input type="text" class="form-control" name="title" required>
              </div>
                </div>
              </div>
             
              <div class="row">
                <div class="col-6">
                <div class="form-group">
                <label>Education</label>
                <input type="text"  class="form-control" name="education">
              </div>
                </div>
                <div class="col-6">
                <div class="form-group">
                <label>Location</label>
                <input type="text" class="form-control" name="location">
              </div>
                </div>
              </div>
              <div class="row">
                <div class="col-6">
                <div class="form-group">
                <label>Companies Work With</label>
                <input type="text" id="tags" class="form-control" name="companies">
              </div>
                </div>
                <div class="col-6">
                <div class="form-group">
                <label>Years of experience</label>
                <input type="text" class="form-control" name="experience">
              </div>
                </div>
              </div>
              <div class="row">
                <div class="col-6">
                <div class="form-group">
                <label>Industry</label>
                <input type="text" class="form-control" name="industry">
              </div>
                </div>
                <div class="col-6">
                <div class="form-group">
                <label>LinkedIN Profile Link</label>
                <input type="text" class="form-control" name="link">
              </div>
                </div>
              </div>
              
              <div class="form-group">
                <label>Description</label>
                <textarea class="form-control" name="description" id="" rows="4"></textarea>
              </div>
              <div class="form-group">
                <label>Select Image</label>
                <br>
                <button type="button" class="btn btn-primary select-image" data-img="image">Select Image</button>
                <input type="hidden" class="image" name="image" />
              </div>
              <div class="form-group">
                <label>List Priority (0 for default)</label>
                <input type="text" class="form-control" name="orderby" value="0" required>
              </div>
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
          url: site_url + "admin/insertupdateteam",
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
            if (res.status) {
              $("#blog-form")[0].reset();
            }
          }
        });
      }));
    });
  </script>