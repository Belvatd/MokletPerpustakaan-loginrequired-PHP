<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registrasi Petugas</title>
    <link rel="icon" type="image/png" href="images/icons/favicon.ico" />
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="fonts/Linearicons-Free-v1.0.0/icon-font.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="fonts/iconic/css/material-design-iconic-font.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="vendor/animsition/css/animsition.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="vendor/daterangepicker/daterangepicker.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="css/util.css">
    <link rel="stylesheet" type="text/css" href="css/main.css">
    <!--===============================================================================================-->

    <style>
    .form {
        margin: 20% 25%;
        float: left;
        width: 60%;
    }
    </style>
</head>

<body style="background: url(book.jpg) 100% ;">
    <div class="limiter">
        <div class="container-login100">
            <div class="wrap-login100 p-l-85 p-r-85 p-t-55 p-b-55">

                <form action="" method="post">
                    <span class="login100-form-title p-b-59" >
                        Registrasi Petugas
                    </span>
                    <div class="wrap-input100 validate-input" data-validate="Nama harus diisi!">
                        <span class="label-input100">Nama Lengkap</span>
                        <input class="input100" type="text" name="nama_petugas" placeholder="Nama lengkap ">
                        <span class="focus-input100"></span>
                    </div>
                    <div class="wrap-input100 validate-input" data-validate="No.Telp harus diisi!">
                        <span class="label-input100">No. Telp</span>
                        <input class="input100" type="number" name="telp" placeholder="No. telp...">
                        <span class="focus-input100"></span>
                    </div>
                    <div class="wrap-input100 validate-input" data-validate="Username harus diisi!">
                        <span class="label-input100">Username</span>
                        <input class="input100" type="text" name="username" placeholder="Username (10 karakter)">
                        <span class="focus-input100"></span>
                    </div>
                    <div class="wrap-input100 validate-input" data-validate="Password harus diisi!">
                        <span class="label-input100">Password</span>
                        <input class="input100" type="password" name="password" placeholder="**********(10)">
                        <span class="focus-input100"></span>
                    </div>
                    <div class="container-login100-form-btn">
                        <div class="wrap-login100-form-btn">
                            <div class="login100-form-bgbtn"></div>
                            <button class="btn btn-dark" type="submit" name="simpan" value="Daftar">
                                Daftar
                            </button>
                        </div>
                        <a href="index_petugas.php" class="dis-block txt3 hov2">
                            Masuk
                            <i class="fa fa-long-arrow-right m-l-5"></i>
                        </a>
                    </div>
                </form>
                <a href="halamanawal.php" class="dis-block txt3 hov2"
                    style="margin=80% 25%; float:right;">
                    Halaman Awal
                </a>
            </div>
        </div>
    </div>
    <div id="dropDownSelect1"></div>

    <!--===============================================================================================-->
    <script src="vendor/jquery/jquery-3.2.1.min.js"></script>
    <!--===============================================================================================-->
    <script src="vendor/animsition/js/animsition.min.js"></script>
    <!--===============================================================================================-->
    <script src="vendor/bootstrap/js/popper.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.min.js"></script>
    <!--===============================================================================================-->
    <script src="vendor/select2/select2.min.js"></script>
    <!--===============================================================================================-->
    <script src="vendor/daterangepicker/moment.min.js"></script>
    <script src="vendor/daterangepicker/daterangepicker.js"></script>
    <!--===============================================================================================-->
    <script src="vendor/countdowntime/countdowntime.js"></script>
    <!--===============================================================================================-->
    <script src="js/main.js"></script>
</body>

</html>

<?php
    include 'connect.php';
    if(@$_POST ['simpan']){
        $nama_petugas=@$_POST['nama_petugas'];
        $telp=@$_POST['telp'];
        $username= @$_POST['username'];
        $Password= @$_POST['password'];

       $query= mysqli_query($koneksi, "INSERT INTO `t_petugas` (nama_petugas, telp, username, password)
                                VALUES ('$nama_petugas', '$telp','$username', '$Password')");

        if($query){
            echo " <div class='form'>
                    <h3> Berhasil registrasi akun </h3>
                    <br/> Klik untuk <a href='login_petugas.php'>Login</a>
                    </div>";
        }
        else{
            echo "Daftar gagal";
        }
    }
?>