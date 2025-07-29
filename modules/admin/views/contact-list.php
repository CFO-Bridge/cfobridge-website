<div class="main-panel">
  <div class="content-wrapper">
    <div class="card">
      <div class="card-body">
        <h4 class="card-title">Contact List</h4>
        <div class="row">
          <div class="col-12">
            <div class="table-responsive">
              <table id="order-listing" class="table">
                <thead>
                  <tr>
                    <th>#</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Phone</th>
                    <th>Enquiry Type</th>
                    <th>Company</th>
                    <th>Message</th>
                    <?=$pageType!='landing'?'<th>Page</th>':''?>
                    <th>Privacy Checked</th>
                    <th>Whatsapp Checked</th>
                    <th>Not Job Checked</th>
                    <th>Date</th>
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
                      <td><?= $row['name'] ?></td>
                      <td><?= $row['email'] ?></td>
                      <td><?= $row['phone'] ?></td>
                      <td><?= $row['type'] ?></td>
                      <td><?= !empty($row['company']) ? $row['company'] : '-' ?></td>
                      <td><?= $row['message'] ?></td>
                      <?php
                      if($pageType!='landing'){?>
                      <td><?= !empty($row['link'])? "<a href='".$row['link']."' target='blank'>link</a>":'-'?></td>
                      <?php }?>
                      
                        <td style='font-size:22px;'> <?=$row['privacy_checked']==1?'✅':'-'?></td>
                         <td style='font-size:22px;'> <?=$row['whatsapp_checked']==1?'✅':'-'?></td>
                          <td style='font-size:22px;'> <?=$row['not_job_checked']==1?'✅':'-'?></td>
                        
                      <td><?= date('d-M-Y | h:i A', strtotime($row['created_at'])) ?></td>
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
        url: site_url + "admin/",
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