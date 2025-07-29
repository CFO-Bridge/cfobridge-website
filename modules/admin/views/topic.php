<div class="main-panel">
  <div class="content-wrapper">

    <div class="card">
      <div class="card-body"> <a href="javascript:void(0)" class="float-right" id="add-topic-modal"><i class="fa fa-plus
"></i>New Topic</a>

        <h4 class="card-title">Topic List</h4>
        <div class="row">
          <div class="col-12">
            <div class="table-responsive">
              <table id="order-listing" class="table">
                <thead>
                  <tr>
                    <th>#</th>
                    <th>Topic</th>

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
                        <td><?= $row['name'] ?></td>
                        <td>
                          <a class="text-primary edit-topic-modal mr-5" data-name='<?= $row['name'] ?>'
                            data-id='<?= $row['id'] ?>'><i class="fa fa-edit"></i></a>
                          | <a class="text-danger delete ml-5" data-id='<?= $row['id'] ?>'><i class="fa fa-trash"></i></a>
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
  <div class="modal fade" id="cat-modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel-3"
    aria-hidden="true">
    <div class="modal-dialog modal-sm" role="document">
      <div class="modal-content">



      </div>
    </div>
  </div>

  <script>
    $("#add-topic-modal").click(function () {
      let temp = `<form class="cat-form">
    <div class="modal-header">
                          <h5 class="modal-title" id="exampleModalLabel-3">Add Topic</h5>
                          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                          </button>
                        </div>
                        <div class="modal-body">
                          <input class="form-control" type="text" name="name" placeholder="Topic Name">
                        </div>
                        <div class="modal-footer">
                          <button type="submit" id="sbt-btn" class="btn btn-success">Submit</button>
                         </div>
                         </form>`;
      $(".modal-content").html(temp);
      $("#cat-modal").modal('show');

    })
    $(".edit-topic-modal").click(function () {
      let id = $(this).data('id');
      let name = $(this).data('name');
      let temp = `<form class="cat-form">
    <div class="modal-header">
                          <h5 class="modal-title" id="exampleModalLabel-3">Add Topic</h5>
                          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                          </button>
                        </div>
                        <div class="modal-body">
                          <input class="form-control" type="text" value="${name}" name="name" placeholder="Topic Name">
                          <input type="hidden" name="id" value="${id}">
                        </div>
                        <div class="modal-footer">
                          <button type="submit" id="sbt-btn" class="btn btn-success">Submit</button>
                         </div>
                         </form>`;
      $(".modal-content").html(temp);
      $("#cat-modal").modal('show');

    })



    $(document).on('submit', '.cat-form', function (e) {
      e.preventDefault();
      let form = $(this).serialize();

      $.ajax({
        url: site_url + "admin/insert_update_topic",
        type: "POST",
        data: form,
        dataType: 'json',

        beforeSend: function () {
          $("#sbt-btn").addClass('loading');
        },
        complete: function () {
          $("#sbt-btn").removeClass('loading');
        },
        success: function (res) {
          setTimeout(function () {
            location.reload();
          }, 200)
        }

      });
    });
    $('.delete').click(function () {
      id = $(this).data('id');
      let bclass = $(this);
      $.ajax({
        url: site_url + "admin/topic_delete",
        type: "POST",
        data: { id: id },
        dataType: 'json',

        beforeSend: function () {
          bclass.addClass('loading');
        },
        complete: function () {
          bclass.removeClass('loading');
        },
        success: function (res) {
          setTimeout(function () {
            location.reload();
          }, 200)
        }

      });
    });
  </script>