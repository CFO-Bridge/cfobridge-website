<div class="modal fade" id="password-change" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel-3" aria-hidden="true">
  <div class="modal-dialog modal-sm" role="document">
    <div class="modal-content">
      <form id="password-form">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel-3">Change Admin Password</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <label>New Password</label>
          <input class="form-control" name="password" placeholder="********">
        </div>
        <div class="modal-footer">
          <button type="submit" class="btn btn-success pass-btn">Submit</button>
          <button type="button" class="btn btn-light" data-dismiss="modal">Close</button>
        </div>
      </form>
      <p class="text-center pass-msg"></p>
    </div>
  </div>
</div>
<style>
  .ajax-file-upload-container{
    display: none;
  }
</style>
<div class="modal fade bd-image-modal-md" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="myLargeModalLabel">All Images</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="container">
        <div class="row">
              <div class="form-group col-md-12">
                <label>Image (Max File Size 5MB)</label>
                <div id="fileuploader">Upload</div>
       
              </div>
            </div>
        </div>
       
        <div class="card-body">
          <input type="text" class="search-image form-control" data-id="${cname}" placeholder="Search By Image Name">
          <div class="form-group">
            <div class="row img-selector-wrap gutters-sm">
            </div>
          </div>
          <button type="button" class="btn btn-primary float-right image-close-btn" data-dismiss="modal" aria-label="Close">
            Close
          </button>
        </div>
      </div>
    </div>
  </div>
<footer class="footer">
  <div class="d-sm-flex justify-content-center justify-content-sm-between">
    <span class="text-muted text-center text-sm-left d-block d-sm-inline-block">Copyright © <?= date('Y') ?>. All rights reserved.</span>
  </div>
</footer>
<style>
  .img-selector-wrap {
    height: 300px;
    overflow-x: hidden;
    margin: 20px 0px;
    overflow-y: auto;
}
</style>
<!-- partial -->
</div>
<!-- main-panel ends -->
</div>
<!-- page-body-wrapper ends -->
</div>
<!-- container-scroller -->
<!-- plugins:js -->
<script src="<?= base_url() ?>backend/assets/vendors/js/vendor.bundle.base.js"></script>
<script src="<?= base_url() ?>backend/assets/vendors/js/vendor.bundle.addons.js"></script>
<!-- endinject -->
<!-- Plugin js for this page-->
<!-- End plugin js for this page-->
<!-- inject:js -->
<script src="<?= base_url() ?>backend/assets/js/off-canvas.js"></script>
<script src="<?= base_url() ?>backend/assets/js/hoverable-collapse.js"></script>
<script src="<?= base_url() ?>backend/assets/js/misc.js"></script>
<script src="<?= base_url() ?>backend/assets/js/settings.js"></script>
<script src="<?= base_url() ?>backend/assets/js/todolist.js"></script>
<!-- endinject -->
<!-- Custom js for this page-->
<script src="<?= base_url() ?>backend/assets/js/dashboard.js"></script>
<script src="<?= base_url() ?>backend/assets/js/data-table.js"></script>
<script src="<?= base_url() ?>backend/assets/js/dropify.js"></script>
<script src="<?= base_url() ?>backend/assets/js/formpickers.js"></script>
<script src="<?= base_url() ?>backend/assets/js/form-addons.js"></script>
<script src="<?= base_url() ?>backend/assets/vendors/summernote/dist/summernote-bs4.min.js"></script>
<script src="https://cdn.datatables.net/buttons/2.3.6/js/dataTables.buttons.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script>
<script src="https://cdn.datatables.net/buttons/2.3.6/js/buttons.html5.min.js"></script>
<script src="https://cdn.datatables.net/buttons/2.3.6/js/buttons.print.min.js"></script>






<!-- End custom js for this page-->
<script>
   function autosize() {
    var text = $('.multiple-op');
    text.each(function() {
      $(this).attr('rows', 1);
      resize($(this));
    });
    text.on('input', function() {
      resize($(this));
    });

    function resize($text) {
      $text.css('height', 'auto');
      $text.css('height', $text[0].scrollHeight + 'px');
    }
  }
  if ($("#summernoteExample").length) {
    $('#summernoteExample').summernote({
      height: 300,
      tabsize: 2
    });
  }
  $("#password-setting").click(function() {
    $("#password-change").modal('show');
  })
  $("#password-form").submit(function(e) {
    e.preventDefault();
    $.ajax({
      type: 'post',
      data: $(this).serialize(),
      url: site_url + 'admin/changeadminpassword',
      beforeSend: function() {
        $(".pass-btn").addClass('loading');
      },
      complete: function() {
        $(".pass-btn").removeClass('loading');
      },
      success: function(res) {
        $('.pass-msg').html('Password Updated');
        setTimeout(() => {
          $("#password-change").modal('hide');
        }, 3000);
      }
    })
  });
   var global_cname = "";
    var global_type = "";
    var global_page ="";
    var tflag = true;
   
    $(document).on('click', '.select-image, .addmore-image-select', function() {
      var cname = 'uk-' + $.now();
      $(this).next().addClass(cname);
      $(this).attr('data-img', cname);
      var type = $(this).attr('multis');
      global_cname = cname;
      global_type = type;
      global_page =1; 
      $(".img-selector-wrap").empty();
      let noimage = `<div class="col-6 col-md-3">
                          <label class="imagecheck mb-4">
                            <input name="cna" type="checkbox" value=" " data-id="${cname}" data-name="no-image " class="imagecheck-input remove-image" />
                            <span class="imagecheck-figure">
                              <img src="${site_url+'uploads/images/no-image.jpg'}" class="imagecheck-image" >
                            </span>
                          </label>
                        </div>`;
                        $(".img-selector-wrap").html(noimage);
      $(".bd-image-modal-md").modal('show');
      imgupload(cname, type,global_page);
      if($(this).hasClass("gallery-img-up"))
      {
        $(".image-close-btn").text("Submit");
      }
    })

    function scrollload(con){
      if(!con)
      {
    $(".img-selector-wrap").off("scroll");

      }
      if(tflag)
      {
        tflag = false;
     
    $(".img-selector-wrap").on("scroll",function(){

      var winT =  $(this);
      var threshold = .20;
      
      if (winT.scrollTop() + winT.innerHeight() + threshold >= winT[0].scrollHeight) {
        global_page++
         imgupload(global_cname,global_type,global_page);
        
  }
    })
  }
  }
    function imgupload(cname, type,page) {
      $.ajax({
        url: site_url + 'admin/getallimages/' + page,
        dataType: 'json',
        success: function(res) {
          
          let img = ``;
          if (res.length){
            var valInp = $("."+cname).val();
            valInp = valInp.length?valInp.split(','):'';
            var checked = false;
            res.forEach(e => {
              checked = false; 
              if(valInp.length)
           {
            var vc = valInp.includes(e.id)
          
           checked = vc;
           
           }
              if (type) {
                img += `  <div class="col-6 col-md-3">
                          <label class="imagecheck mb-4">
                            <input name="cna" type="checkbox" value="${e.id}" data-id="${cname}" data-name="${e.image}" class="imagecheck-input " ${checked?'checked':''} />
                            <span class="imagecheck-figure">
                              <img src="${site_url+'uploads/images/'+e.image}" class="imagecheck-image" title="${e.image}">
                            </span>
                          </label>
                        </div>`;
              } else {
                img += `  <div class="col-6 col-sm-3">
                          <label class="imagecheck mb-4">
                            <input name="cna" type="radio" value="${e.id}" data-id="${cname}" data-name="${e.image}" class="imagecheck-input" ${checked?'checked':''} />
                            <span class="imagecheck-figure">
                              <img src="${site_url+'uploads/images/'+e.image}" class="imagecheck-image"  title="${e.image}">
                            </span>
                          </label>
                        </div>`;
              }
            })
          
          //var temp = ``;
          $(".img-selector-wrap").append(img);
          scrollload(true);
          console.log('ppp');
          }else{
            console.log('ttt');
            scrollload(false);
          }
        }
      })
      jqfileuploadnew(cname, type,page);
    }
    $(document).on('keyup', '.search-image', function() {
      let cname = $(this).data('id');
      let val = $(this).val();
      if (val.length < 3) 
      {
        return false;
      }
      $.ajax({
        url: site_url + 'admin/getallimages/'+global_page+'/' + val,
        dataType: 'json',
        success: function(res) {
        
          let img = '';
          if (res.length) {
            res.forEach(e => {
              if (type) {
                img += `  <div class="col-6 col-md-3">
                          <label class="imagecheck mb-4">
                            <input name="cna" type="checkbox" value="${e.id}" data-id="${cname}" data-name="${e.image}" class="imagecheck-input" />
                            <span class="imagecheck-figure">
                              <img src="${site_url+'uploads/images/'+e.image}" class="imagecheck-image"  title="${e.image}">
                            </span>
                          </label>
                        </div>`;
              } else {
                img += `  <div class="col-6 col-md-3">
                          <label class="imagecheck mb-4">
                            <input name="cna" type="radio" value="${e.id}" data-id="${cname}" data-name="${e.image}" class="imagecheck-input" />
                            <span class="imagecheck-figure">
                              <img src="${site_url+'uploads/images/'+e.image}" class="imagecheck-image"  title="${e.image}">
                            </span>
                          </label>
                        </div>`;
              }
            })
          } else {
            img += `No image available`;
          }
          $(".gutters-sm").html(img);
        }
      })
    })

    

    $(document).on('click', '.remove-image', function() {
      
      if($(this).is(":checked")){
      $(".imagecheck-input").prop("checked", false);
      $(".imagecheck-input").prop("disabled", true);
          $(this).prop("checked",true);
          $(this).prop("disabled",false);
          var cname = $(this).data('id');
          setTimeout(() => {
            $("button[data-img=" + cname + "]").text('Select Image');
          }, 100);
         
          //console.log(cname);
      }else{
         $(".imagecheck-input").prop("disabled", false);
          
      }
    });


    $(document).on('click', '.imagecheck-input', function() {
      let cname = $(this).data('id');
      let name = $(this).data('name');
      let id = $(this).val();
      let mid = [];
      if (global_type) {
        //console.log($(".imagecheck-input :checked"));
        $(".imagecheck-input").each((e, elem) => {
          if ($(elem).is(":checked")) {
            mid.push($(elem).val());
          }
        })
        $("." + cname).val(mid.join(','));
        $("button[data-img=" + cname + "]").text('Selected');
      } else {
        $("." + cname).val(id);
        let temp = `<span>${name}</span>`;
        $("button[data-img=" + cname + "]").text('Selected - ');
        $("button[data-img=" + cname + "]").append(temp);
      }
    })



  function jqfileuploadnew(cname, type,page) {
    $("#fileuploader").uploadFile({
      url: site_url + "admin/imageupload",
      fileName: "image",
      onSuccess: function() {
        $(".img-selector-wrap").empty();
        imgupload(cname, type,page)
      }
    });
  }

  function autosize() {
    var text = $('.multiple-op');
    text.each(function() {
      $(this).attr('rows', 1);
      resize($(this));
    });
    text.on('input', function() {
      resize($(this));
    });

    function resize($text) {
      $text.css('height', 'auto');
      $text.css('height', $text[0].scrollHeight + 'px');
    }
  }
  $(".clear-cache").click(function() {
    $.ajax({
      type: 'get',
      url: site_url + 'admin/clear_all_cache',
      beforeSend:function(){ $(".clear-cache").text('Please Wait....');},
      success: function() {
        $(".clear-cache").text('Cache Cleared');
      }
    })
  })

   
 
    $('.repeater').repeater({
      // (Optional)
      // "defaultValues" sets the values of added items.  The keys of
      // defaultValues refer to the value of the input's name attribute.
      // If a default value is not specified for an input, then it will
      // have its value cleared.
      defaultValues: {
        'text-input': 'foo'
      },
      // (Optional)
      // "show" is called just after an item is added.  The item is hidden
      // at this point.  If a show callback is not given the item will
      // have $(this).show() called on it.
      show: function() {
        $(this).slideDown();
       
      },
      // (Optional)
      // "hide" is called when a user clicks on a data-repeater-delete
      // element.  The item is still visible.  "hide" is passed a function
      // as its first argument which will properly remove the item.
      // "hide" allows for a confirmation step, to send a delete request
      // to the server, etc.  If a hide callback is not given the item
      // will be deleted.
      hide: function(deleteElement) {
        if (confirm('Are you sure you want to delete this element?')) {
          $(this).slideUp(deleteElement);
        }
      },
      // (Optional)
      // Removes the delete button from the first list item,
      // defaults to false.
      isFirstItemUndeletable: true
    })
  
</script>
</body>

</html>