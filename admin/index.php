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
$query = mysqli_query($koneksi, "SELECT fullname,job_title,last_activity FROM users WHERE username='$user'");
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
                <!-- <h3>Selamat Datang, <?php echo $data['fullname']; ?></h3> -->
                <ol class="breadcrumb mb-4">
                    <li class="breadcrumb-item"><a href="index.html">Dashboard</a></li>
                </ol>
                <div class="card mb-4">
                    <div class="card-body">
                        <p>Apa itu Elgamal ? </p>
                        <p>ElGamal adalah sebuah algoritma kriptografi kunci publik yang dinamakan menurut penemu awalnya, yakni Taher Elgamal. Algoritma ini pertama kali diterbitkan pada tahun 1985 dan masih banyak digunakan dalam berbagai aplikasi kriptografi modern. ElGamal termasuk dalam kategori kriptografi kunci publik, yang berarti bahwa algoritma ini menggunakan sepasang kunci untuk melakukan enkripsi dan dekripsi: kunci publik dan kunci pribadi.</p>
                    </div>
                </div>
                <div class="card mb-4">
                    <div class="card-body">
                        <p>Apa itu AES ? </p>
                        <p>AES (Advanced Encryption Standard) adalah sebuah algoritma enkripsi kunci simetris yang sangat populer dan banyak digunakan dalam berbagai aplikasi keamanan informasi. Algoritma ini didesain untuk mengamankan data dengan tingkat keamanan yang tinggi dan efisiensi yang baik.

                            AES menggantikan standar enkripsi sebelumnya, yaitu DES (Data Encryption Standard), yang mulai dianggap kurang aman karena panjang kuncinya yang terbatas. AES diadopsi sebagai standar oleh National Institute of Standards and Technology (NIST) pada tahun 2001 setelah proses seleksi yang ketat yang melibatkan banyak kandidat.</p>
                    </div>
                </div>
                <div class="card mb-4">
                    <div class="card-body">
                        <p>Program </p>
                        <p>Sebuah program aplikasi yang menerapkan Hybrid Cryptosystem dengan menggunakan algoritma ElGamal dan AES dapat memiliki beberapa komponen inti. Berikut adalah langkah-langkah dan komponen yang mungkin terlibat:
                        <ul>
                            <li>Penghasil Kunci Publik dan Pribadi ElGamal: Program perlu memiliki fungsi untuk menghasilkan kunci publik dan kunci pribadi untuk algoritma ElGamal. Ini melibatkan pembangkitan bilangan prima, dan kemudian menghitung kunci publik dan pribadi berdasarkan bilangan prima tersebut</li>
                            <li>Enkripsi dengan ElGamal: Program harus dapat mengenkripsi pesan dengan kunci publik ElGamal penerima. Ini melibatkan mengonversi pesan ke dalam bilangan bulat, dan kemudian melakukan operasi matematika dengan kunci publik.</li>
                            <li>Dekripsi dengan ElGamal: Program harus dapat mendekripsi pesan yang dienkripsi dengan kunci pribadi ElGamal penerima. Ini melibatkan operasi matematika menggunakan kunci pribadi.</li>
                        </ul>
                        </p>
                    </div>
                </div>
                <div class="card mb-4">
                    <div class="card-body">
                        <p>Keunggulan dari metode Hybrid Cryptosystem yang menggabungkan algoritma ElGamal dan AES adalah sebagai berikut:</p>
                        <ul>
                            <li>Keamanan yang Tinggi: Dengan menggabungkan dua algoritma enkripsi yang kuat, metode ini dapat memberikan tingkat keamanan yang tinggi. Algoritma ElGamal menawarkan keamanan kunci publik yang baik, sementara AES dikenal karena kecepatan dan keamanan enkripsinya.</li>
                            <li>Manfaat Kunci Simetris dan Kunci Publik: Dalam Hybrid Cryptosystem, algoritma ElGamal digunakan untuk pertukaran kunci dan enkripsi kunci simetris. Ini memungkinkan penggunaan kunci simetris yang lebih efisien untuk enkripsi data sebenarnya, sementara masih mempertahankan manfaat dari kunci publik untuk pertukaran kunci yang aman.</li>
                        </ul>
                    </div>
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