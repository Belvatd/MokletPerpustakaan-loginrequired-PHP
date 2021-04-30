<?php
//memasukkan file config.php
include('../connect.php');
?>
<!DOCTYPE html>
<html>

<head>
    <title>Daftar Buku</title>
    <!-- CSS online dari bootstrap -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"
        integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <style>
    .bs-example {
        margin: 20px;
    }
    </style>
</head>

<body>
    <nav class="navbar navbar-expand-md navbar-dark bg-dark">
        <a href="../petugas.php" class="navbar-brand" style="font-family:blockletter;">Admin</a>
        <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
            <div class="navbar-nav">
                <a href="../petugas.php" class="nav-item nav-link active">Home</a>
                <a href="#" class="nav-item nav-link">Book</a>
                <div class="dropdown">
                    <button class="btn btn-dark dropdown-toggle login100-form-btn" type="button" id="dropdownMenuButton"
                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Profile
                    </button>
                    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                        <a class="dropdown-item" href="../t_petugas/tampil_petugas.php">Data Petugas</a>
                        <a class="dropdown-item" href="../t_anggota/tampil_anggota.php">Data Anggota</a>

                    </div>
                </div>
            </div>
            <form class="form-inline ml-auto">
                <div class="navbar-nav">
                    <a href="../logout.php" class="nav-item nav-link active">Logout</a>
                </div>
            </form>
        </div>
    </nav>

    <div class="container" style="margin-top:20px">
        <h2>Keranjang Buku</h2>
        <hr>
        <table class="table table-striped table-hover table-sm table-bordered">
            <thead class="thead-dark">
                <tr>
                    <th>NO.</th>
                    <th>KODE BUKU</th>
                    <th>JUDUL BUKU</th>
                    <th>PENERBIT</th>
                    <th>PENGARANG</th>
                    <th>RINGKASAN</th>
                    <th>COVER</th>
                    <th>STOK</th>
                    <th>ACTION</th>
                </tr>
            </thead>
            <tbody>
                <?php
				$sql = mysqli_query($koneksi, "SELECT * FROM t_buku ORDER BY id DESC") or die(mysqli_error($koneksi));
				if(mysqli_num_rows($sql) > 0){
					//membuat variabel $no untuk menyimpan nomor urut
					$no = 1;
					//melakukan perulangan while dengan dari dari query $sql
                    while($data = mysqli_fetch_array($sql)){
                        ?>
                <!--menampilkan data perulangan -->

                <tr>
                    <td><?php echo $no; ?></td>
                    <td><?php echo $data['kode_buku']; ?></td>
                    <td><?php echo $data['judul']; ?></td>
                    <td><?php echo $data['penerbit']; ?></td>
                    <td><?php echo $data['pengarang']; ?></td>
                    <td><?php echo $data['ringkasan']; ?></td>
                    <td><?php echo $data['cover']; ?></td>
                    <td><?php echo $data['stok']; ?></td>
                    <td>
                        <a href="#edit<?php echo $data['id']; ?>" data-toggle="modal" class="btn btn-warning"><span
                                class="glyphicon glyphicon-edit"></span> Edit</a>
                        <a href="#del<?php echo $data['id']; ?>" data-toggle="modal" class="btn btn-danger"><span
                                class="glyphicon glyphicon-trash"></span> Delete</a>
                        <?php include('modal_form.php'); ?>

                    </td>
                </tr>

                <?php
						$no++;
					}
				//jika query menghasilkan nilai 0
				}else{
					echo '
					<tr>
						<td colspan="6">Tidak ada data.</td>
					</tr>
					';
				}
				?>
            <tbody>
        </table>
        <div>
            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal"
                data-title="tambahBuku">Tambah Buku</button>
        </div>

        <div id="myModal" class="modal fade" tabindex="-1">
            <div class="modal-dialog">
                <div class="modal-content">
                    <form action="tambah_buku.php" method="post">
                        <div class="modal-header">
                            <h5 class="modal-title">Tambahkan ke Keranjang</h5>
                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                        </div>
                        <div class="modal-body">
                            <div class="form-group">
                                <div class="form-group">
                                    <label class="control-label">Kode Buku:</label>
                                    <input type="text" name="kode_buku" class="form-control">
                                </div>
                                <label class="control-label">Judul Buku:</label>
                                <input type="text" name="judul" class="form-control">
                            </div>
                            <div class="form-group">
                                <label class="control-label">Penerbit:</label>
                                <input type="text" name="penerbit" class="form-control">
                            </div>
                            <div class="form-group">
                                <label class="control-label">Pengarang:</label>
                                <input type="text" name="pengarang" class="form-control">
                            </div>
                            <div class="form-group">
                                <label class="control-label">Ringkasan:</label>
                                <input type="text" name="ringkasan" class="form-control">
                            </div>
                            <div class="form-group">
                                <label class="control-label">Cover:</label>
                                <input type="text" name="cover" class="form-control">
                            </div>
                            <div class="form-group">stok</label>
                                <input type="number" name="stok" class="form-control">
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                            <button type="submit" name="submit" class="btn btn-primary">Submit</button>
                        </div>
                    </form>

                </div>
            </div>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"
        integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"
        integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous">
    </script>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
</body>

</html>