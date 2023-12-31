<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800">
        <?= $title ?>
    </h1>


    <div class="row">
        <div class="col-lg-6">
            <?php if (validation_errors()): ?>
                <div class="alert alert-danger" role="alert">
                    <?= validation_errors(); ?>
                </div>
            <?php endif; ?>

            <?= $this->session->flashdata('message'); ?>
            <a href="" class="btn btn-primary mb-3" data-toggle="modal" data-target="#exampleModalRole">Add New Role</a>
            <br>


            <table class="table table-hover">
                <thead>
                    <tr>
                        <th scope="col">No</th>
                        <th scope="col">Role</th>
                        <th scope="col">Action</th>

                    </tr>
                </thead>
                <tbody>
                    <?php $i = 1; ?>
                    <?php foreach ($role as $r): ?>

                        <tr>
                            <th scope="row">
                                <?= $i; ?>
                            </th>
                            <td>
                                <?= $r['role']; ?>
                            </td>
                            <td>
 update_uas6
                                <a href="<?= base_url('admin/roleaccess/') . $r['id']; ?>" class="badge badge-warning">Access</a>

                                <a href="<?= base_url() ?>admin/hapusrole/<?= $r['id'] ?>" class="badge badge-danger">Delete</a>

                                <a href="<?= base_url('admin/roleaccess/') . $r['id']; ?>"
                                    class="badge badge-warning">Access</a>
                                <a href="" class="btn btn-primary mb-3" data-toggle="modal"
                                    data-target="#exampleModalEdit">Edit Role</a>
                                <a href="<?= base_url() ?>admin/hapusrole/<?= $r['id'] ?>"
                                    class="badge badge-danger">Delete</a>
 master
                            </td>

                        </tr>
                        <?php $i++; ?>
                    <?php endforeach; ?>

                </tbody>
            </table>
            </table>
        </div>
    </div>

</div>
<!-- /.container-fluid -->

<!-- Button trigger modal -->


<!-- Modal -->
<div class="modal fade" id="exampleModalRole" tabindex="-1" aria-labelledby="exampleModalRoleLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h2 class="modal-title fs-5" id="exampleModalRoleLabel">Add New Role</h2>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form action="<?= base_url('admin/role'); ?>" method="post">
                <div class="modal-body">
                    <div class="form-group">
                        <input type="text" class="form-control" id="role" name="role" placeholder="Role Name">
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Add</button>
            </form>
        </div>
    </div>
</div>

 update_uas6

</div>

<div class="modal fade" id="exampleModalEdit" tabindex="-1" aria-labelledby="exampleModalEditLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h2 class="modal-title fs-5" id="exampleModalEditLabel">Edit Role</h2>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form action="<?= base_url('admin/editrole'); ?>" method="post">
                <div class="modal-body">
                    <div class="form-group">
                        <input type="text" class="form-control" id="role" name="role"
                            value="<?= $user_role['role']; ?>">
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Edit</button>
            </form>
        </div>
    </div>
 master
</div>