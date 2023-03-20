<!-- Sidebar -->
<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="<?= base_url(); ?>">
        <div class="sidebar-brand-icon">
            <img src="<?= base_url('assets/img/logo.png') ?>" alt="logo" class="img-thumbnail">
        </div>
        <div class="sidebar-brand-text mx-3">GDC <sup><?= session()->get('name') ?></sup></div>
    </a>

    <!-- Divider -->
    <hr class="sidebar-divider my-0">

    <!-- Nav Item - Dashboard -->
    <li class="nav-item">
        <a class="nav-link" href="<?= base_url() ?>">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Dashboard</span>
        </a>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider">

    <!-- Heading -->
    <div class="sidebar-heading">
        Files and User
    </div>

    <!-- Nav Item - Pages Collapse Menu -->
    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo"
           aria-expanded="true" aria-controls="collapseTwo">
            <i class="fas fa-fw fa-file-archive"></i>
            <span>Files</span>
        </a>
        <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <h6 class="collapse-header">Files With CRUD:</h6>
                <a class="collapse-item" href="<?= base_url('admin/add-file') ?>">Add Files</a>
                <a class="collapse-item" href="<?= base_url('admin/manage-files') ?>">Manage Files</a>
                <a class="collapse-item" href="<?= base_url('admin/files-movement') ?>">File Movement</a>
            </div>
        </div>
    </li>

    <!-- Nav Item - Utilities Collapse Menu -->
    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseUtilities"
           aria-expanded="true" aria-controls="collapseUtilities">
            <i class="fas fa-fw fa-user"></i>
            <span>User Management</span>
        </a>
        <div id="collapseUtilities" class="collapse" aria-labelledby="headingUtilities"
             data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <h6 class="collapse-header">User with CRUD:</h6>
                <a class="collapse-item" href="<?= base_url('admin/add-users') ?>">Add Users</a>
                <a class="collapse-item" href="<?= base_url('admin/manage-users') ?>">Manage Users</a>
                <a class="collapse-item" href="<?= base_url('admin/section-users') ?>">Section Wise List</a>
                <a class="collapse-item" href="<?= base_url('admin/permissions') ?>">Permissions</a>
                <a class="collapse-item" href="<?= base_url('admin/roles') ?>">Roles</a>
            </div>
        </div>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider">

    <!-- Heading -->
    <div class="sidebar-heading">
        CPS Section
    </div>

    <!-- Nav Item - Pages Collapse Menu -->
    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsePages"
           aria-expanded="true" aria-controls="collapsePages">
            <i class="fas fa-fw fa-folder"></i>
            <span>CPS Files Section</span>
        </a>
        <div id="collapsePages" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <h6 class="collapse-header">CPS FW Files:</h6>
                <a class="collapse-item" href="#">Upload Dataset</a>
                <a class="collapse-item" href="#">Generate Bulk QR</a>
                <a class="collapse-item" href="#">Sample Dataset Format</a>
            </div>
        </div>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider d-none d-md-block">

    <!-- Sidebar Toggler (Sidebar) -->
    <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
    </div>

    <!-- Sidebar Message -->
    <div class="sidebar-card d-none d-lg-flex">
        <img class="sidebar-card-illustration mb-2" src="<?= base_url('assets/img/logo.png') ?>" alt="Logo">
        <p class="text-center mb-2"><strong><?= session()->get('name') ?></strong> Government Data Center | Super Admin Dashboard</p>
    </div>

</ul>
<!-- End of Sidebar -->