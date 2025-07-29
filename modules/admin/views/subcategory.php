<div class="main-panel">
    <div class="content-wrapper">

        <div class="card">
            <div class="card-body"> <a href="javascript:void(0)" class="float-right" id="add-subcategory-modal"><i
                        class="fa fa-plus
"></i>New Sub Category</a>

                <h4 class="card-title">Sub Category List</h4>
                <div class="row">
                    <div class="col-12">
                        <div class="table-responsive">
                            <table id="order-listing" class="table">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Sub Category</th>
                                        <th>Main Category ID</th>

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
                                                <td><?= $row['category_id'] ?></td>
                                                <td>
                                                    <a class="text-primary edit-subcategory-modal mr-5"
                                                        data-name='<?= $row['name'] ?>' data-id='<?= $row['id'] ?>'
                                                        data-category_id='<?= $row['category_id'] ?>'>
                                                        <i class="fa fa-edit"></i>
                                                    </a>
                                                    | <a class="text-danger delete ml-5" data-id='<?= $row['id'] ?>'><i
                                                            class="fa fa-trash"></i></a>
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
        $("#add-subcategory-modal").click(function () {
            let temp = `<form class="cat-form">
    <div class="modal-header">
                          <h5 class="modal-title" id="exampleModalLabel-3">Add Sub Category</h5>
                          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                          </button>
                        </div>
                        <div class="modal-body">
                          <input class="form-control" type="text" name="name" placeholder="Sub Category Name">
                        </div>
                        <div class="modal-footer">
                          <button type="submit" id="sbt-btn" class="btn btn-success">Submit</button>
                         </div>
                         </form>`;
            $(".modal-content").html(temp);
            $("#cat-modal").modal('show');

        })
        $(".edit-subcategory-modal").click(function () {
            let id = $(this).data('id');
            let name = $(this).data('name');
            let category_id = $(this).data('category_id');
            let temp = `<form class="cat-form">
    <div class="modal-header">
                          <h5 class="modal-title" id="exampleModalLabel-3">Edit Sub Category</h5>
                          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                          </button>
                        </div>
                        <div class="modal-body">
                          <input class="form-control" type="text" value="${name}" name="name" placeholder="Sub Category Name">
                        <input class="form-control" type="text" value="${category_id}" name="category_id" placeholder="Main Category ID">
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
                url: site_url + "admin/insert_update_subcategory",
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
                url: site_url + "admin/subcategory_delete",
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