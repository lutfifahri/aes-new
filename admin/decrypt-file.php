<?php
session_start();
include '../koneksi.php';
if (empty($_SESSION['username'])) {
    header("location:../index.php");
}
$last = $_SESSION['username'];
$sqlupdate = "UPDATE users SET last_activity=now() WHERE username='$last'";
$queryupdate = mysqli_query($koneksi, $sqlupdate);
?>
<!DOCTYPE html>
<html>
<?php
$user = $_SESSION['username'];
$query = mysqli_query($koneksi, "SELECT * FROM users WHERE username='$user'");
$data = mysqli_fetch_array($query);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hybrid Cryptosystem</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>

<body>

    <!-- Header -->
    <?php include 'sidebar.php' ?>

    <!-- Konten Utama -->
    <div class="container mt-5">
        <main>
            <div class="container-fluid px-4">
                <ol class="breadcrumb mb-4">
                    <li class="breadcrumb-item"><a href="index.html">decrypt-file</a></li>
                </ol>
                <hr>
                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-body">
                                <?php
                                $id_file = $_GET['id_file'];
                                $query = mysqli_query($koneksi, "SELECT * FROM file WHERE id_file='$id_file'");
                                $data2 = mysqli_fetch_array($query);
                                ?>
                                <h3 align="center">Dekripsi File <i style="color:blue"><?php echo $data2['file_name_finish'] ?></i></h3><br>
                                <form class="form-horizontal" method="post" action="decrypt-process.php">
                                    <div class="table-responsive">
                                        <table class="table striped">
                                            <tr>
                                                <td>Nama File Sumber</td>
                                                <td>:</td>
                                                <td><?php echo $data2['file_name_source']; ?></td>
                                            </tr>
                                            <tr>
                                                <td>Nama File Enkripsi</td>
                                                <td>:</td>
                                                <td><?php echo $data2['file_name_finish']; ?></td>
                                            </tr>
                                            <tr>
                                                <td>Ukuran File</td>
                                                <td>:</td>
                                                <td><?php echo $data2['file_size']; ?> KB</td>
                                            </tr>
                                            <tr>
                                                <td>Tanggal Enkripsi</td>
                                                <td>:</td>
                                                <td><?php echo $data2['tgl_upload']; ?></td>
                                            </tr>
                                            <tr>
                                                <td>Keterangan</td>
                                                <td>:</td>
                                                <td><?php echo $data2['keterangan']; ?></td>
                                            </tr>
                                            <tr>
                                                <td>Masukkan Password Untuk Mendekrip</td>
                                                <td></td>
                                                <td>
                                                    <div class="col-md-6">
                                                        <input type="hidden" name="fileid" value="<?php echo $data2['id_file']; ?>">
                                                        <input class="form-control" id="inputPassword" type="password" placeholder="Password" name="pwdfile" required><br>
                                                        <input type="submit" name="decrypt_now" value="Dekripsi File" class="form-control btn btn-primary">
                                                    </div>
                                                </td>
                                            </tr>
                                        </table>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
        </main>
    </div>
    <br>
    <!-- Footer -->
    <?php include 'footer.php' ?>


    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>