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
                    <li class="breadcrumb-item"><a href="index.html">Enkripsi</a></li>
                </ol>
                <hr>
                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-body">
                                <form class="form-horizontal" method="post" action="encrypt-process.php" enctype="multipart/form-data">
                                    <fieldset>
                                        <legend>Form Enkripsi</legend>
                                        <div class="form-group">
                                            <label class="col-lg-2 control-label" for="inputPassword">Tanggal</label>
                                            <div class="col-lg-12">
                                                <input class="form-control" id="inputTgl" type="text" placeholder="Tanggal" name="datenow" value="<?php echo date("Y-m-d"); ?>" readonly>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-lg-2 control-label" for="inputFile">File</label>
                                            <div class="col-lg-12">
                                                <input class="form-control" id="inputFile" placeholder="Input File" type="file" name="file" required>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-lg-2 control-label" for="inputPassword">Password</label>
                                            <div class="col-lg-12">
                                                <input class="form-control" id="inputPassword" type="password" placeholder="Password" name="pwdfile" required>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-lg-2 control-label" for="textArea">Deskripsi</label>
                                            <div class="col-lg-12">
                                                <textarea class="form-control" id="textArea" rows="3" name="desc" placeholder="Deskripsi"></textarea>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-lg-2 control-label" for="textArea"></label>
                                            <div class="col-lg-">
                                                <input type="submit" name="encrypt_now" value="Enkripsi File" class="form-control btn btn-primary">
                                            </div>
                                        </div>
                                    </fieldset>
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