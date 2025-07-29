<div class="main-panel">
        <div class="content-wrapper">
          
          <div class="card">
            <div class="card-body"> 
             
              <h4 class="card-title">Add New FAQ</h4>
              <div class="row">
                <div class="col-12">
                <form class="forms-sample" id="blog-form">
                
               
                <div class="form-group">
                      <label>Heading</label>
                      <input type="text" class="form-control"name="heading"  required>
                    </div>
                
                   
                    <div class="form-group">
                      <label >Description</label>
                      <textarea class="form-control" name="description" rows="4"></textarea>
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

			  $(document).ready(function (e) {

          autosize();

 $("#blog-form").on('submit',(function(e) {
	
  e.preventDefault();
  var formdata = new FormData(this);
/*   var respons = $('.responsibilities').val();
  var responsarr = respons.split('\n');
  responsarr = responsarr.filter(ar=> ar != "")
  responsarr.forEach(ar=>{
    formdata.append('responsibilities[]',ar);
  })
  var requ = $('.requirements').val();
  var requarr = requ.split('\n');
  requarr = requarr.filter(ar=> ar != "")
  requarr.forEach(ar=>{
    formdata.append('requirements[]',ar);
  }) */
  $.ajax({
   url:site_url+"admin/insertupdatehomefaq",
   type: "POST",
   data:  formdata,
   dataType:'json',
   contentType: false,
         cache: false,
   processData:false,
   beforeSend:function(){
                          $('#sbt-btn').addClass('loading');
                        },
                        complete:function(){
                          $('#sbt-btn').removeClass('loading');
                        },
   success: function(res) {
    $(".msg").html(res.msg);
     }       
    });
 }));
});
				</script>