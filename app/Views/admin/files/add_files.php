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
                <h1 class="h3 mb-4 text-gray-800">Add Files</h1>
                <form method="post" action="<?= base_url('admin/add-file') ?>" enctype="multipart/form-data">
                    <?= csrf_field(); ?>
                    <div class="mb-3">
                        <label for="fileName" class="form-label">File Name</label>
                        <input type="text" class="form-control" id="fileName" name="fileName" value="<?= set_value('fileName') ?>">
                    </div>
                    <div class="mb-3">
                        <label for="fileID" class="form-label">File ID</label>
                        <input type="text" class="form-control" id="fileID" name="fileID" value="<?= set_value('fileID') ?>">
                    </div>
                    <div class="mb-3">
                        <label for="reminder" class="form-label">File Reminder (In Days)</label>
                        <input type="text" class="form-control" id="reminder" name="reminder" value="<?= set_value('reminder') ?>">
                    </div>
                    <div class="mb-3">
                        <label for="fileDescription" class="form-label">File Description</label>
                        <textarea class="form-control" id="fileDescription" name="fileDescription" rows="3"><?= set_value('fileDescription') ?></textarea>
                    </div>
                    <div class="mb-3">
                        <label for="files" class="form-label">Upload File</label>
                        <input class="form-control" type="file" id="files" name="files">
                    </div>
                    <button type="submit" class="btn btn-primary">Save File</button>
                </form>
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