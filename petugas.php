<?php
include('connect.php');
    session_start();

    if(!isset($_SESSION['username'])){
        header("location: index_petugas.php?access_denied");
    }
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <title>User Page</title>
    <style>
    .welcome {
        color: #11bb221;
        font-size: 35pt;
        font-weight: 900;
    }
    </style>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
        integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-dark">
        <a class="navbar-brand" href="#" style="color:white; font-family:blockletter;">
            Admin
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="#" style="color:white">Home <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item active">
                    <a class="nav-link" href="t_buku/tampil_buku.php" style="color:white">Book</a>
                </li>
                <li class="nav-item active">
                    <div class="dropdown">
                        <button class="btn btn-dark dropdown-toggle login100-form-btn" type="button"
                            id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Profile
                        </button>
                        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                            <a class="dropdown-item" href="t_petugas/tampil_petugas.php">Data Petugas</a>
                            <a class="dropdown-item" href="t_anggota/tampil_anggota.php">Data Anggota</a>

                        </div>
                    </div>
                </li>

            </ul>
            <form class="form-inline ml-auto">
                <div class="navbar-nav">
                    <a href="logout_petugas.php" class="nav-item nav-link active" style="color:white;">Logout</a>
                </div>
            </form>
        </div>
    </nav>
    <h1 class="welcome">Hi, <?php echo $_SESSION ['username'];?></h1>
    <p style="font-family:arial black;">get your book now!</p>
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <div class="card bg-danger" style="width: 18rem;">
                    <div class="card-body text-white">
                        <h5 class="card-title">Jumlah Buku</h5>
                        <p class="card-text" style="font-size:60px" align="center">
                            <?php 
                            
                          $table ="t_buku";
                          $sql = mysqli_query($koneksi, "SELECT count(*) AS jumlah FROM $table");
                          $result = mysqli_fetch_array($sql);
                          echo $result['jumlah'];
                        ?>
                        </p>
                        <a href="t_buku/tampil_buku.php" class="text-white">lebih detail <i
                                class="fas fa-angle-double-right"></i></a>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card bg-warning" style="width: 18rem;">
                    <div class="card-body text-white">
                        <h5 class="card-title">Jumlah Anggota</h5>
                        <p class="card-text" style="font-size:60px" align="center">
                            <?php 
                            
                            $table ="t_anggota";
                            $sql = mysqli_query($koneksi, "SELECT count(*) AS jumlah FROM $table");
                            $result = mysqli_fetch_array($sql);
                            echo $result['jumlah'];
                          ?>

                        </p>
                        <a href="t_anggota/tampil_anggota.php" class="text-white">lebih detail <i
                                class="fas fa-angle-double-right"></i></a>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card bg-info" style="width: 18rem;">
                    <div class="card-body text-white">
                        <h5 class="card-title">Jumlah Petugas</h5>
                        <p class="card-text" style="font-size:60px" align="center">
                            <?php 
                            
                          $table ="t_petugas";
                          $sql = mysqli_query($koneksi, "SELECT count(*) AS jumlah FROM $table");
                          $result = mysqli_fetch_array($sql);
                          echo $result['jumlah'];
                        ?>
                        </p>
                        <a href="t_buku/tampil_buku.php" class="text-white">lebih detail <i
                                class="fas fa-angle-double-right"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>

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