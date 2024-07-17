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
                    <li class="breadcrumb-item"><a href="index.html">Deskripsi</a></li>
                </ol>
                <hr>
                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table id="file" class="table striped">
                                        <thead>
                                            <tr>
                                                <td width="5%"><strong>No</strong></td>
                                                <td width="20%"><strong>Nama File Sumber</strong></td>
                                                <td width="20%"><strong>Nama File Enkripsi</strong></td>
                                                <td width="20%"><strong>Path File</strong></td>
                                                <td width="15%"><strong>Status File</strong></td>
                                                <td width="10%"><strong>Aksi</strong></td>
                                            </tr>
                                        </thead>
                                        <tfoot>
                                            <tr>
                                                <td width="5%"><strong>No</strong></td>
                                                <td width="20%"><strong>Nama File</strong></td>
                                                <td width="20%"><strong>Nama File Enkripsi</strong></td>
                                                <td width="20%"><strong>Path File</strong></td>
                                                <td width="15%"><strong>Status File</strong></td>
                                                <td width="10%"><strong>Aksi</strong></td>
                                            </tr>
                                        </tfoot>
                                        <tbody>
                                            <?php
                                            $i = 1;
                                            $query = mysqli_query($koneksi, "SELECT * FROM file");
                                            while ($data = mysqli_fetch_array($query)) { ?>
                                                <tr>
                                                    <td><?php echo $i; ?></td>
                                                    <td><?php echo $data['file_name_source']; ?></td>
                                                    <td><?php echo $data['file_name_finish']; ?></td>
                                                    <td><?php echo $data['file_url']; ?></td>
                                                    <td><?php if ($data['status'] == 1) {
                                                            echo "Enkripsi";
                                                        } elseif ($data['status'] == 2) {
                                                            echo "Dekripsi";
                                                        } else {
                                                            echo "Status Tidak Diketahui";
                                                        }
                                                        ?></td>
                                                    <td>
                                                        <?php
                                                        $a = $data['id_file'];
                                                        if ($data['status'] == 1) {
                                                            echo '<a href="decrypt-file.php?id_file=' . $a . '" class="btn btn-primary">Dekripsi File</a>';
                                                        } elseif ($data['status'] == 2) {
                                                            echo '<a href="enkripsi.php" class="btn btn-success">Enkripsi File</a>';
                                                        } else {
                                                            echo '<a href="dekripsi.php" class="btn btn-danger">Data Tidak Diketahui</a>';
                                                        }
                                                        ?>

                                                    </td>
                                                </tr>
                                            <?php
                                                $i++;
                                            } ?>
                                        </tbody>
                                    </table>
                                </div>
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