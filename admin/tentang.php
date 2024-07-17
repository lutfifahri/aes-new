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
                    <div class="card mb-4">
                        <div class="card-body">
                            <p>Aplikasi Hybird Cryptosystem adalah Aplikasi encrypt dengan metode Elagamal & AES</p>
                            <ul>
                                <li>Login ke aplikasi dengan menggunakan Username dan Password yang sudah di daftarkan </li>
                                <li>Simpan data file di ekxtension word, txt, pdf, csv, dll</li>
                                <li>masuk ke form enkripsi untuk masukan file yang ingin di enkripsi</li>
                                <li>Setelah selesai enkripsi, masuk ke halaman dekripsi untuk menampilkan enkripsi file, di halaman dekripsi anda bisa liat status sudah si enkripsi atau dekripsi</li>
                                <li>Selesai, Logout</li>
                            </ul>
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