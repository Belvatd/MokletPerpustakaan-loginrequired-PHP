<?php
    include 'connect.php';

    $username = ($_POST['username']);
    $password= ($_POST['password']);

    $query ="SELECT* FROM t_petugas WHERE username= '$username' AND password ='$password'";
    $sql= mysqli_query($koneksi, $query);

    if(mysqli_num_rows($sql)){
        session_start();
        $_SESSION['username']=$username;
        header("Location: petugas.php");
    }
    else{
        echo "<h1>Username atau Password anda Salah!! </h1>";
        echo "<div class='form'>
                <h3>
                    <br/> Klik untuk <a href='index_petugas.php'> Login lagi </a>
                </h3>
                </div>";
    }
?>