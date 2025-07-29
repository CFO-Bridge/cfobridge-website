<div class="main-panel">
        <div class="content-wrapper">
          
          <div class="card">
            <div class="card-body"> <a href="<?=base_url('admin/addindustry')?>" class="float-right"><i class="fa fa-plus
"></i>New Industry</a>
             
              <h4 class="card-title">Industries List</h4>
              <div class="row">
                <div class="col-12">
                  <div class="table-responsive">
                    <table id="order-listing" class="table">
                      <thead>
                        <tr>
                            <th>#</th>
                            <th>Image</th>
                            <th>Name</th>
                            <th>Status</th>
                            <th>Actions</th>
                        </tr>
                      </thead>
                      <tbody>
                       <?php
                       $i=1;
                       if(!empty($list))
                       foreach($list as $row)
                       {
                        $status= $row['is_active']==1?'Active':'Inactive';
                        $class= $row['is_active']==1?'success':'danger';
                        $btn = "<button class='btn btn-$class change-status' data-id='' >$status</button>";
                         ?>

                        <tr>
                            <td><?=$i?></td>
                            <td><img src="<?=base_url('uploads/images/').$row['image']?>" style="filter:invert(1)"></td>
                            <td><?=$row['title_home_card']?></td>
                            <td>
                            <button class="btn btn-<?=$class?> change-status"  data-id='<?=$row['id']?>' data-status='<?=$row['is_active']?>' ><?=$status?></button>
                            </td>
                            <td>
                              <a href="<?=base_url('admin/editindustry/').$row['id']?>" class="text-primary"><i class="fa fa-edit"></i></a> 
                              <a href="javascript:void(0)" class="text-danger ml-5 delete"  data-id="<?=$row['id']?>"><i class="fa fa-trash"></i></a>
                            </td>
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

        $('.delete').click(function(){
                 id = $(this).data('id');
                 let bclass =$(this);
                $.ajax({
   url: site_url+"admin/deleteindustry",
   type: "POST",
   data:  {id:id},
   dataType: 'json',
  
   beforeSend:function(){
                      bclass.addClass('loading');
                        },
                        complete:function(){
                          bclass.removeClass('loading');
                        },
   success:function(res)
      {
        setTimeout(function(){
        location.reload();  
        },200)
      }

        });
        });

        $('.change-status').click(function() {
      $(this).addClass('loading');
      id = $(this).data('id');
      $.ajax({
        url: site_url + "admin/changeindustrystatus",
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