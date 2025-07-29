<div class="main-panel">
  <div class="content-wrapper">
    <div class="card">
      <div class="card-body">
        <h4 class="card-title">Add New Post</h4>
        <div class="row">
          <div class="col-12">
            <form class="forms-sample" id="blog-form">
              <div class="form-group">
                <label>Post Type</label>
                <select name="type" class="form-control" id="post-type">
                  <option value="1">Articles</option>
                  <option value="2">News & Media</option>
                  <option value="3">Case studies</option>
                </select>
              </div>
              <div class="form-group">
                <label>Title</label>
                <input type="text" class="form-control" name="title" required>
              </div>
              <div class="row blog-sec">
              <div class="form-group col-3">
                <label>Publisher</label>
                <input type="text" class="form-control" name="publisher">
              </div>
              <div class="form-group col-3 ">
                <label>Author</label>
                <input type="text" class="form-control" name="author">
              </div>
              <div class="form-group col-6">
                <label>Author Profile Link</label>
                <input type="text" class="form-control" name="authorprofile">
              </div>
              </div>
              
              <div class="form-group">
                <label>Short Description (Max 200 Charachters)</label>
                <input type="text" class="form-control" name="description" required>
              </div>
              <div class="form-group blog-sec">
                <label>Tags</label>
                <input type="text" class="form-control" id="tags" name="tags">
              </div>
              <div class="form-group">
                <label>Post Date</label>
                <div id="datepicker-popup" class="input-group date datepicker">
                  <input type="text" class="form-control" name="date">
                  <span class="input-group-addon input-group-append border-left">
                    <span class="far fa-calendar input-group-text"></span>
                  </span>
                </div>
              </div>
              <div class="form-group blog-sec">
                <label>Content</label>
                <textarea class="form-control" name="content" id="summernoteExample" rows="4"></textarea>
              </div>
              <div class="news-sec d-none">
                <div class="form-group">
                  <label>Link</label>
                  <input type="text" class="form-control" name="link">
                </div>
              </div>
              <div class="form-group">
                <label>Image (Max File Size 2MB)</label>
                <br>
                <button type="button" class="btn btn-primary select-image" data-img="image">Select Image</button>
                <input type="hidden" class="image" name="image" />
              </div>
              <div class="form-group">
                <label>Page Header</label>
                <textarea class="form-control" name="page_header" rows="4"></textarea>
              </div>
              <div class="form-group blog-sec">
                <label>Blog Schema</label>
                <textarea class="form-control" name="blogschema" rows="4"></textarea>
              </div>
              
               <h5>FAQ Section</h5>
              <hr>
              <div class="form-group">
                <label>Heading</label>
                <input type="text" class="form-control" name="faq_heading">
              </div>
              <div class="repeater">
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
    $("#post-type").change(function() {
      let type = $(this).val();
      if (type == 1 || type == 3) {
        $(".news-sec").addClass('d-none');
        $(".blog-sec").removeClass('d-none');
      } else {
        $(".blog-sec").addClass('d-none');
        $(".news-sec").removeClass('d-none');
      }
    })
    $(document).ready(function(e) {
      $("#blog-form").on('submit', (function(e) {
        e.preventDefault();
        $.ajax({
          url: site_url + "admin/insertblog",
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