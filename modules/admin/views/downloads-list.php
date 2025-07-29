<div class="main-panel">
  <div class="content-wrapper">
    <div class="card">
      <div class="card-body"> <a href="<?= base_url('admin/adddocument') ?>" class="float-right"><i class="fa fa-plus
"></i>New Document</a>
        <h4 class="card-title">Documents List</h4>
        <div class="row">
          <div class="col-12">
            <div class="table-responsive">
              <table id="order-listing" class="table">
                <thead>
                  <tr>
                    <th>#</th>
                     <th>Title</th>
                     <th>Team</th>
                    <th>List Priority</th>
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
                      <td><?= $row['title'] ?></td>
                                            <td><?= $row['team'] ?></td>
                      <td><?= $row['orderby'] ?></td>
                      <td>
                        <a href="<?= base_url('admin/editdownloadsfile/') . $row['id'] ?>" class="text-primary"><i class="fa fa-edit"></i></a>
                        <a href="javascript:void(0)" class="text-danger ml-5 delete" data-id="<?= $row['id'] ?>"><i class="fa fa-trash"></i></a>
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
        url: site_url + "admin/deletedownloadsfile",
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