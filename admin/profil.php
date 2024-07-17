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
                    <li class="breadcrumb-item"><a href="index.html">User</a></li>
                </ol>
                <hr>
                <div class="card-body">
                    <form action="update.php" method="POST">
                        <div class="mb-3">
                            <label for="exampleFormControlInput1" class="form-label">Username</label>
                            <input type="hidden" value="<?php echo $data['id'] ?>" name="id">
                            <input type="text" class="form-control" value="<?php echo $data['username']; ?>" name="username">
                        </div>
                        <div class="mb-3">
                            <label for="exampleFormControlInput1" class="form-label">Nama</label>
                            <input type="text" class="form-control" value="<?php echo $data['fullname'] ?>" name="fullname">
                        </div>
                        <div class="mb-3">
                            <label for="exampleFormControlInput1" class="form-label">Password</label>
                            <input type="text" class="form-control" name="password">
                        </div>
                        <div class="mb-3">
                            <button class="btn btn-primary btn-block" value="simpan">simpan</button><br>
                        </div>
                    </form>
                </div>
            </div>
        </main>
    </div>

    <!-- Footer -->
    <?php include 'footer.php' ?>


    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>