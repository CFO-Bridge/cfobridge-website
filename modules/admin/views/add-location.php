<div class="main-panel">
  <div class="content-wrapper">
    <div class="card">
      <div class="card-body">
        <h4 class="card-title">Add New Location</h4>
        <div class="row">
          <div class="col-12">
            <form class="forms-sample " id="service-form">
            <div class="form-group">
                <label>Title</label>
                <input type="text" class="form-control" name="title" required>
              </div>
              <hr>
              <h5>Section 1 </h5>
              <div class="form-group">
                <label>Heading</label>
                <input type="text" class="form-control" name="heading_s1" required>
              </div>
              <div class="form-group">
                <label>Short Description</label>
                <input type="text" class="form-control" name="description_s1" required>
              </div>
              
              <div class="form-group">
                <label>Select Image</label>
                <br>
                <button type="button" class="btn btn-primary select-image" data-img="image_home_card">Select Image</button>
                <input type="hidden" class="image_home_card" name="image_s1" />
              </div>
              <hr>
             
              
             
             
              
             
              
             
              <h5>Section 2</h5>
              <hr>
              <div class="form-group">
                <label>Heading</label>
                <input type="text" class="form-control" name="heading_s3">
              </div>
              <div class="row">
                
                <div class="col-12"><div class="form-group">
                <label>Short Description</label>
                <textarea class="form-control" rows="3" name="description_s3"></textarea>
              </div></div>
              </div>
              <div class="repeater">
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
              <div class="row">              <div class="form-group col-4">
                <label>Button Label</label>
                <input type="text" class="form-control" name="btnlabel">
              </div>
              <div class="form-group col-8">
                <label>Button Link</label>
                <input type="text" class="form-control" name="btnlink">
              </div>
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
                        <h5>Section 3</h5>
              <hr>
              <div class="form-group">
                <label>Heading</label>
                <input type="text" class="form-control" name="heading_s2">
              </div>
              <div class="row">
                
                <div class="col-12"><div class="form-group">
                <label>Short Description</label>
                <textarea class="form-control" rows="3" name="description_s2" ></textarea>
              </div></div>
              </div>
              <div class="repeater">
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
              
              
             
                 <h5>Section 4</h5>
              <hr>
              
              <div class="form-group">
                <label>Heading</label>
                <input type="text" class="form-control" name="heading_s4">
              </div>
              <div class="form-group">
                <label>Description</label>
                <input type="text" class="form-control" name="description_s4">
              </div>
             
              <hr>

                 <h5>Section 5</h5>
              <hr>
              <div class="form-group">
                <label>Heading</label>
                <input type="text" class="form-control" name="heading_s5">
              </div>
              <div class="row">
                
                <div class="col-12"><div class="form-group">
                <label>Short Description</label>
                <textarea class="form-control" rows="3" name="description_s5"></textarea>
              </div></div>
              </div>
              <div class="repeater">
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
              
             
                        
              <h5>Section 6</h5>
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