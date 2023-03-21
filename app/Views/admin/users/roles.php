<?= view('layouts/header')?>
    <div id="wrapper">
        <?= view('layouts/menu')?>

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <?= view('layouts/top_nav')?>

                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <h1 class="h3 mb-4 text-gray-800">Add Users Roles</h1>
                    <form method="post" action="<?= base_url('admin/roles') ?>">
                        <?= csrf_field(); ?>
                        <div class="mb-3">
                            <label for="name" class="form-label">Name</label>
                            <input type="text" class="form-control" id="name" name="name" value="<?= set_value('name') ?>">
                        </div>
                        <button type="submit" class="btn btn-primary">Save User Role</button>
                    </form>
                    <hr>
                    <div class="card shadow mb-4">
                        <div class="card-header">
                            <h1 class="h3 mb-4 text-gray-800">Manage User Roles</h1>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable">
                                    <thead>
                                    <tr>
                                        <th>Role Name</th>
                                        <th>Action</th>
                                    </tr>
                                    </thead>
                                    <tfoot>
                                    <tr>
                                        <th>Role Name</th>
                                        <th>Action</th>
                                    </tr>
                                    </tfoot>
                                    <tbody>
                                    <?php
                                    foreach ($role as $value):
                                        ?>
                                        <tr>
                                            <td><?= $value['name'] ?></td>
                                            <td>
                                                <a href="<?= base_url('admin/track-file/'.$value['id']) ?>" class="btn btn-success"><i class="bi bi-layer-forward"></i></a>
                                                <a href="<?= base_url('admin/delete-file/'.$value['id']) ?>" class="btn btn-danger"><i class="bi bi-trash"></i></a>
                                                <a href="<?= base_url('admin/view-file/'.$value['id']) ?>" class="btn btn-primary"><i class="bi bi-receipt"></i></a>
                                            </td>
                                        </tr>
                                    <?php endforeach; ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->

            <!-- Footer -->
            <footer class="sticky-footer bg-white">
                <div class="container my-auto">
                    <div class="copyright text-center my-auto">
                        <span>Copyright &copy; GDC</span>
                    </div>
                </div>
            </footer>
            <!-- End of Footer -->

        </div>
        <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>

<?= view('layouts/footer')?>