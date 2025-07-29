<div class="main-panel">
  <div class="content-wrapper">
    <div class="card">
      <div class="card-body">
        <h4 class="card-title">NewsLetter Emails List</h4>
        <div class="row">
          <div class="col-12">
            <div class="table-responsive">
              <table id="order-listing" class="table">
                <thead>
                  <tr>
                    <th>#</th>
                   <th>Email</th>
                   
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
                      <td><?= $row['email'] ?></td>
                      
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
   
  </script>