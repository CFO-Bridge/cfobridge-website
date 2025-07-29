<div class="main-panel">
  <div class="content-wrapper">
    <div class="card">
      <div class="card-body">
        <h4 class="card-title">Add New Service</h4>
        <div class="row">
          <div class="col-12">
            <form class="forms-sample " id="service-form">
              <h5>Section 1 (Home Page Card)</h5>
              <div class="form-group">
                <label>Service Title</label>
                <input type="text" class="form-control" name="title_home_card" required>
              </div>
              <div class="form-group">
                <label>Short Description</label>
                <input type="text" class="form-control" name="description_home_card" required>
              </div>
              
              <div class="form-group">
                <label>Select Image</label>
                <br>
                <button type="button" class="btn btn-primary select-image" data-img="image_home_card">Select Image</button>
                <input type="hidden" class="image_home_card" name="image_home_card" />
              </div>
              <hr>
              <h5>Section 2 (Parent Service Page Card)</h5>
              <div class="form-group">
                <label>Service Title</label>
                <input type="text" class="form-control" name="title_service_card" required>
              </div>
              <div class="form-group">
                <label>Service Heading</label>
                <input type="text" class="form-control" name="heading_service_card" required>
              </div>
              <div class="form-group">
                <label>Short Description</label>
                <input type="text" class="form-control" name="description_service_card" required>
              </div>
              
              <hr>
              <h5>Section 3 (Service Inner Page Banner Section)</h5>
              <div class="form-group">
                <label>Banner Heading</label>
                <input type="text" class="form-control" name="inner_banner_heading">
              </div>
              
              <div class="form-group">
                <label>Select Banner Image</label>
                <br>
                <button type="button" class="btn btn-primary select-image" data-img="inner_banner_image">Select Image</button>
                <input type="hidden" class="inner_banner_image" name="inner_banner_image" />
              </div>
              <hr>
              
             
              <h5>Section 4 (Service Inner Page About Section)</h5>
              <hr>
              <div class="form-group">
                <label>Heading</label>
                <input type="text" class="form-control" name="about_heading">
              </div>
              <div class="form-group">
                <label>Short Description</label>
                <input type="text" class="form-control" name="about_short_description" required>
              </div>
              <div class="form-group">
                <label>Select Image</label>
                <br>
                <button type="button" class="btn btn-primary select-image" data-img="image2">Select Image</button>
                <input type="hidden" class="image2" name="about_image" />
              </div> <hr>
              
             
              <h5>Section 5 (Service Inner Page, What we do Section)</h5>
              <hr>
              <div class="form-group">
                <label>Heading</label>
                <input type="text" class="form-control" name="wedo_heading">
              </div>
              <div class="row">
                <div class="col-6"><div class="form-group">
                <label>Short Description (Left)</label>
                <textarea  class="form-control" name="wedo_left_description" rows="3" required></textarea>
              </div></div>
                <div class="col-6"><div class="form-group">
                <label>Short Description (Right)</label>
                <textarea class="form-control" rows="3" name="wedo_right_description" required></textarea>
              </div></div>
              </div>
              <div class="repeater">
                        <div data-repeater-list="wedo">
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
                            <button data-repeater-delete type="button" class="btn btn-danger btn-sm icon-btn ml-2" >
                              <i class="fas fa-trash"></i>
                            </button>
                          </div>
                        </div>
                        <br><button data-repeater-create type="button" class="float-right btn btn-info btn-sm icon-btn ml-2 mb-2">
                          <i class="fa fa-plus"></i>
                        </button>
                        </div>
                        <hr>
              
             
              <h5>Section 6 (Service Inner Page, CFO Bridge So Unique Section)</h5>
              <hr>
              <div class="form-group">
                <label>Heading</label>
                <input type="text" class="form-control" name="so_unique_heading">
              </div>
              <div class="repeater">                        <div data-repeater-list="so_unique">
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
                            <button data-repeater-delete type="button" class="btn btn-danger btn-sm icon-btn ml-2" >
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
              <h5>Section 7 (Service Inner Page, FAQ Section)</h5>
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
               <div class="form-group">
                <label>Page Heading</label>
                <textarea  class="form-control" rows="4" cols="50" name="page_header"></textarea>
              </div>
              <br>
              <br>
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
      autosize();
    })
   
    $(document).ready(function(e) {
      $("#service-form").on('submit', (function(e) {
        e.preventDefault();
        var formdata = new FormData(this);
        $.ajax({
          url: site_url + "admin/insertupdateservice",
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
            if (res.status) {
              $("#service-form")[0].reset();
              setTimeout(() => {
                location.reload();
              }, 5000);
            }
          }
        });
      }));
    });
  
  </script>