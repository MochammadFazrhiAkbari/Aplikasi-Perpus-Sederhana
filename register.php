<?php
session_start();
?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <?php
    include "config/koneksi.php";

    $sql = mysqli_query($koneksi, "SELECT * FROM identitas");
    $row1 = mysqli_fetch_assoc($sql);
    ?>
    <title>Register | Perpus Kami</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <!-- Bootstrap 3.3.7 -->
    <link rel="stylesheet" href="assets/bower_components/bootstrap/dist/css/bootstrap.min.css">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="assets/bower_components/font-awesome/css/font-awesome.min.css">
    <!-- Ionicons -->
    <link rel="stylesheet" href="assets/bower_components/Ionicons/css/ionicons.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="assets/dist/css/AdminLTE.min.css">
    <!-- iCheck -->
    <link rel="stylesheet" href="assets/plugins/iCheck/square/blue.css">
    <!-- Icon -->
    <link rel="icon" type="icon" href="assets/dist/img/logo_app.png">
    <!-- Custom -->
    <link rel="stylesheet" href="assets/dist/css/custom.css">
    <!-- Toastr -->
    <link rel="stylesheet" href="assets/dist/css/toastr.min.css">
</head>

<body class="hold-transition login-page" style="font-family: 'Quicksand', sans-serif;">
    <div class="login-box">
        <div class="login-box-body" style="border-radius: 10px;">
        <div class="card-header"><h3 class="text-center font-weight-light my-4">Register</h3>
            <form name="formLogin" action="function/Process.php?aksi=daftar" method="POST" enctype="multipart/form-data" onsubmit="return validateForm()">

                <div class="form-group">
                <label class="small mb-1" for="username">Username</label>
                    <input type="text" class="form-control" name="uname" placeholder="Nama Pengguna" id="uname">
                    <span class="glyphicon glyphicon-user form-control-feedback"></span>
                </div>
                <div class="form-group">
                <label class="small mb-1" for="username">Password</label>
                    <input type="password" class="form-control" name="passw" placeholder="Kata Sandi" id="passw">
                    <span class="glyphicon glyphicon-lock form-control-feedback"></span>
                </div>
                <div class="form-group">
                <label class="small mb-1" for="fullname">Profile Name</label>
                    <input type="text" class="form-control" name="funame" placeholder="Nama Lengkap" id="funame">
                    <span class="glyphicon glyphicon-user form-control-feedback"></span>
                </div>
                <label class="small mb-1" for="alamat">Adress</label>
                <textarea id="w3review" name="w3review" rows="6" cols="40" placeholder="Masukkan Alamat Lengkap"></textarea>
                <div class="row">
                    <!-- /.col -->
                    <div class="col-xs-12">
                        <button type="submit" class="btn btn-primary btn-block btn-flat">Sign Up</button>
                    </div>
                    <!-- /.col -->
                </div>
            </form>
        </div>
        <!-- /.login-box-body -->
    </div>
    <!-- /.login-box -->

    <!-- jQuery 3 -->
    <script src="assets/bower_components/jquery/dist/jquery.min.js"></script>
    <!-- Bootstrap 3.3.7 -->
    <script src="assets/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
    <!-- Fungsi mengarahkan kehalaman masuk -->
    <script>
        function Masuk() {
            window.location.href = "masuk";
        }
    </script>
    <!-- Toastr -->
    <script src="assets/dist/js/toastr.min.js"></script>
    <!-- -->
    <script>
        toastr.options = {
            "closeButton": false,
            "debug": false,
            "newestOnTop": false,
            "progressBar": false,
            "positionClass": "toast-top-right",
            "preventDuplicates": true,
            "onclick": null,
            "showDuration": "300",
            "hideDuration": "1000",
            "timeOut": "5000",
            "extendedTimeOut": "1000",
            "showEasing": "swing",
            "hideEasing": "linear",
            "showMethod": "fadeIn",
            "hideMethod": "fadeOut"
        }
    </script>
    <!-- -->
    <script>
        function validateForm() {
            if (document.forms["formLogin"]["funame"].value == "") {
                toastr.error("Nama Lengkap harus diisi !!");
                document.forms["formLogin"]["funame"].focus()
                return false;
            }
            if (document.forms["formLogin"]["uname"].value == "") {
                toastr.error("Nama Pengguna harus diisi !!");
                document.forms["formLogin"]["uname"].focus();
                return false;
            }
            if (document.forms["formLogin"]["passw"].value == "") {
                toastr.error("Kata Sandi harus diisi !!");
                document.forms["formLogin"]["passw"].focus();
                return false;
            }
        }
    </script>
</body>

</html>