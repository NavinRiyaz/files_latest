<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Government Data Center | Government of TamilNadu</title>

    <link href="<?= base_url('assets/vendor/fontawesome-free/css/all.min.css') ?>" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/sweetalert2@11.7.3/dist/sweetalert2.min.css" rel="stylesheet">
    <link href="<?= base_url('assets/css/sb-admin-2.css') ?>" rel="stylesheet">

</head>

<body class="bg-gradient-success">

<div class="container">

    <!-- Outer Row -->
    <div class="row justify-content-center">

        <div class="col-xl-10 col-lg-12 col-md-9">

            <div class="card o-hidden border-0 shadow-lg my-5">
                <div class="card-body p-0">
                    <!-- Nested Row within Card Body -->
                    <div class="row">
                        <div class="col-lg-6 d-none d-lg-block bg-login-image"></div>
                        <div class="col-lg-6">
                            <div class="p-5">
                                <div class="text-center">
                                    <h1 class="h4 text-gray-900 mb-4">Welcome Back!</h1>
                                </div>
                                <form class="user" enctype="multipart/form-data" method="post">
                                    <div class="form-group">
                                        <input type="number" class="form-control form-control-user"
                                               id="username" name="username" aria-describedby="emailHelp"
                                               placeholder="Enter Code" value="<?= set_value('username') ?>" >
                                    </div>
                                    <div class="form-group">
                                        <input type="password" class="form-control form-control-user"
                                               id="password" name="password" placeholder="Password">
                                    </div>
                                    <input type="submit" value="Login" class="btn btn-primary btn-user btn-block">
<!--                                    <hr>-->
<!--                                    <a href="#" class="btn btn-google btn-user btn-block">-->
<!--                                        <i class="fab fa-wpforms fa-fw"></i> CPS File Tracking-->
<!--                                    </a>-->
<!--                                    <a href="index.html" class="btn btn-facebook btn-user btn-block">-->
<!--                                        <i class="fab fa-facebook-f fa-fw"></i> Login with Facebook-->
<!--                                    </a>-->
                                </form>
                                <hr>
                                <a href="#" class="btn btn-google btn-user btn-block">
                                    <i class="fab fa-wpforms fa-fw"></i> CPS File Tracking
                                </a>
<!--                                <div class="text-center">-->
<!--                                    <a class="small" href="register.html">Create an Account!</a>-->
<!--                                </div>-->
                                <br>
                                <br>
                                <br>
                                <br>
                                <br>
                                <br>
                                <br>
                                <br>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>

    </div>

</div>

<script src="<?= base_url('assets/vendor/jquery/jquery.min.js') ?>"></script>
<script src="<?= base_url('assets/vendor/bootstrap/js/bootstrap.bundle.min.js') ?>"></script>

<script src="<?= base_url('assets/vendor/jquery-easing/jquery.easing.min.js') ?>"></script>

<script src="<?= base_url('assets/js/sb-admin-2.min.js') ?>"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.7.3/dist/sweetalert2.all.min.js"></script>

<script>
    $(function() {
        const Toast = Swal.mixin({
            toast: true,
            position: 'top-right',
            iconColor: 'white',
            customClass: {
                popup: 'colored-toast'
            },
            showConfirmButton: false,
            timer: 2000,
            timerProgressBar: true
        });

        <?php if (session()->has('success')) {?>
        Toast.fire({
            icon: 'success',
            title: '<?php echo session('success')?>'
        })
        <?php }?>
        <?php if (session()->has('error')) {?>
        Toast.fire({
            icon: 'error',
            title: '<?php echo session('error')?>'
        })
        <?php } ?>
        <?php if (isset($validation)) {?>
        Toast.fire({
            icon: 'error',
            title: '<?php echo $validation->getError('username'); echo '\n'; echo $validation->getError('password');?>'
        })
        <?php }?>
    });
</script>

</body>

</html>