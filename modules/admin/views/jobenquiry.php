<div class="main-panel">
        <div class="content-wrapper">
          
          <div class="card">
            <div class="card-body"> 
             
              <h4 class="card-title">Job Enquir List</h4>
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
                            <th>City</th>
                            <th>LinkedIn</th>
                            <th>Applied For</th>
                            <th>Resume</th>
                            
                            <th>Date</th>
                        </tr>
                      </thead>
                      <tbody>
                       <?php
                       $i=1;
                       if(!empty($list))
                       foreach($list as $row)
                       {
                        if(!empty($row['resume']))
                        {
                          $link =base_url('uploads/resumes/').$row['resume'];
                          $text = "View";
                        }else
                        {
                          $link="javascript:void(0)";
                          $text = "No File Found";
                        }
                       
                        ?>

                        <tr>
                            <td><?=$i?></td>
                            <td><?=$row['name']?></td>
                            <td><?=$row['email']?></td>
                            <td><?=$row['phone']?></td>
                            <td><?=$row['city']?></td>
                            <td><?=$row['linkedin']?></td>
                            <td><?=!empty($row['applied_for'])?$row['applied_for']:'-'?></td>
                            <td><a href="<?=$link?>" target="_blank"><?=$text?></a></td>
                            
                           
                            <td><?=date('d-M-Y',strtotime($row['created_at']))?></td>
                           
                           
                        </tr>
<?php $i++; }?>
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