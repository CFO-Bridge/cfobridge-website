<div class="main-panel">
  <div class="content-wrapper">
    <div class="card">
      <div class="card-body">
        <h4 class="card-title">Service List</h4>
        <div class="row">
          <div class="col-12">
            <div class="table-responsive">
              <table id="order-listing" class="table">
                <thead>
                  <tr>
                    <th>#</th>
                    <th>Title</th>
                    <th>Image</th>
                    <th>Status</th>
                    <th>Testimonials</th>
                    <th>Actions</th>
                  </tr>
                </thead>
                <tbody>
                  <?php
                  $i = 1;
                  if (!empty($list))
                    foreach ($list as $row) {
                      $status= $row['is_active']==1?'Active':'Inactive';
                      $class= $row['is_active']==1?'success':'danger';
                      $btn = "<button class='btn btn-$class change-status' data-id='' >$status</button>";
                  ?>
                    <tr>
                      <td><?= $i ?></td>
                      <td><?= $row['title_home_card'] ?></td>
                      <td><img src="<?=base_url('uploads/images/').$row['image']?>"></td>
                      <td>
                            <button class="btn btn-<?=$class?> change-status"  data-id='<?=$row['id']?>' data-status='<?=$row['is_active']?>' ><?=$status?></button>
                            </td>
                            <td>
                            <a class="btn btn-primary" href="<?=base_url("admin/testimonialslist/{$row['id']}")?>" >View</a>
                            </td>
                    <!--   <td><input type="checkbox" class="form-check-input featured-service" data-id="<?= $row['id'] ?>" <?=($row['fservice'] == 1) ? "checked" : ""?>></td>
                     -->  <td>
                        <a class="text-primary mr-5" href="<?= base_url('admin/neweditservice/') . $row['id'] ?>"><i class="fa fa-edit"></i></a>
                        | <a href="javascript:void(0)" class="text-danger delete ml-5" data-id='<?= $row['id'] ?>'><i class="fa fa-trash"></i></a>
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
    $('.delete').click(function() {
      id = $(this).data('id');
      let bclass = $(this);
      $.ajax({
        url: site_url + "admin/service_delete",
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
    $('.change-status').click(function() {
      $(this).addClass('loading');
      id = $(this).data('id');
      $.ajax({
        url: site_url + "admin/changeservicestatus",
        type: "POST",
        data: {
          id: id
        },
        dataType: 'json',
        success: function(res) {
          location.reload();
        }
      });
    });
  </script>