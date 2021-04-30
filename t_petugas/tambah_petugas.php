<?php
    include('../connect.php');
    
    if(isset($_POST['submit'])){
    $nama_petugas          = @$_POST['nama_petugas'];
    $telp      		= @$_POST['telp'];
    $username             = @$_POST['username'];
    $password           = @$_POST['password'];
        
        $cek = mysqli_query($koneksi, "SELECT * FROM t_petugas WHERE username='$username'") or die(mysqli_error($koneksi));
        
        if(mysqli_num_rows($cek) == 0){
            $sql = mysqli_query($koneksi, "INSERT INTO t_petugas (nama_petugas, telp, username, password) 
            VALUES('$nama_petugas', '$telp', '$username','$password')") or die(mysqli_error($koneksi));
            
            if($sql){
                echo '<script>alert("Berhasil menambahkan data."); document.location="tampil_petugas.php";</script>';
            }else{
                echo '<div class="alert alert-warning">Gagal melakukan proses tambah data.</div>';
            }
        }else{
            echo '<div class="alert alert-warning">Gagal, username sudah terdaftar.</div>';
        }
    }
?>