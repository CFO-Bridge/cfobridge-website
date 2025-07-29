<div class="main-panel">
  <div class="content-wrapper">
    <div class="card">
      <div class="card-body">
      <a href="<?=base_url('admin/addhomefaq')?>" class=" float-right">Add FAQ</a>
        <h4 class="card-title">Home FAQ List</h4>
        
        <div class="row">
          <div class="col-12">
            <div class="table-responsive">
              <table id="order-listing" class="table">
                <thead>
                  <tr>
                    <th>#</th>
                    <th>Heading</th>
                    <th>Edit</th>
                    <th>Delete</th>
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
                      <td><?= $row['heading'] ?></td>
                     <td>
                        <a class="text-primary mr-5" href="<?= base_url('admin/edithomefaq/') . $row['id'] ?>"><i class="fa fa-edit"></i></a>
                     </td><td> <a href="javascript:void(0)" class="text-danger delete ml-5" data-id='<?= $row['id'] ?>'><i class="fa fa-trash"></i></a>
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
        url: site_url + "admin/homefaqdelete",
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