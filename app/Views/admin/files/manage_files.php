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
                    <h1 class="h3 mb-4 text-gray-800">Manage Files</h1>
                    <!-- DataTales Example -->
                    <div class="card shadow mb-4">
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable">
                                    <thead>
                                        <tr>
                                            <th>File Name</th>
                                            <th>Uploaded By</th>
                                            <th>Section</th>
                                            <th>Time</th>
                                            <th>File ID</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tfoot>
                                        <tr>
                                            <th>File Name</th>
                                            <th>Uploaded By</th>
                                            <th>Section</th>
                                            <th>Time</th>
                                            <th>File ID</th>
                                            <th>Action</th>
                                        </tr>
                                    </tfoot>
                                    <tbody>
                                        <?php
                                        foreach ($files as $value):
                                        ?>
                                        <tr>
                                            <td><?= $value['file_name'] ?></td>
                                            <td><?= $value['uploaded_by'] ?></td>
                                            <td> Section Name </td>
                                            <td><?= $value['created_at'] ?></td>
                                            <td><?= $value['file_id'] ?></td>
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