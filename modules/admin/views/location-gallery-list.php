<div class="main-panel">
  <div class="content-wrapper">
    <div class="card">
      <div class="card-body"> <a href="javascript:void(0)" class="float-right select-image gallery-img-up" multis="true"><i class="fa fa-plus
"></i>New Gallery Image</a>
<input type="hidden" name="image" id="gallery-img-ins">
        <h4 class="card-title">Gallery Image List</h4>
        <div class="row">
          <div class="col-12">
            <div class="table-responsive">
              <table id="order-listing" class="table">
                <thead>
                  <tr>
                    <th>#</th>
                    <th>Image</th>
                    <th>Actions</th>
                  </tr>
                </thead>
                <tbody>
                  <?php
                  $i = 1;
                  if (!empty($list))
                    foreach ($list as $row) {
                  ?>
                    <tr>
                      <td><?= $i ?></td>
                      <td><img src="<?= base_url('uploads/images/') . $row['image'] ?>" alt="<?= $row['alt_text'] ?>" style="width:150px;height:150px;border-radius: 0;"></td>
                      <td>
                        <a href="javascript:void(0)" class="text-danger delete ml-5" data-id='<?= $row['imid'] ?>'><i class="fa fa-trash"></i></a>
                      </td>
                    </tr>
                  <?php $i++;
                    } ?>
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  
  <script>
   
    $(document).on('click', '.image-close-btn', function() {
      let btn = $(this);
      let images = $("#gallery-img-ins").val();
      console.log(images);
      $.ajax({
        url: site_url + "admin/insertlocationgallery",
        type: "POST",
        data: {locationid:"<?=$locationid?>",image:images},
        dataType: 'json',
        beforeSend: function() {
           btn.addClass('loading');
        },
        complete: function() {
         btn.removeClass('loading');
        },
        success: function(res) {
          setTimeout(function() {
            location.reload();
          }, 200)
        }
      });
    });
    $('.delete').click(function() {
      id = $(this).data('id');
      let bclass = $(this);
      $.ajax({
        url: site_url + "admin/locationgallerydelete",
        type: "POST",
        data: {
          id: id
        },
        dataType: 'json',
        beforeSend: function() {
          bclass.addClass('loading');
        },
        complete: function() {
          bclass.removeClass('loading');
        },
        success: function(res) {
          setTimeout(function() {
            location.reload();
          }, 200)
        }
      });
    });
  </script>