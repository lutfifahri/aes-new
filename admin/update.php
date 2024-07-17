<?php
include '../koneksi.php';

$id = $_POST['id'];
$username = $_POST['username'];
$password = md5($_POST['password']);
$fullname = $_POST['fullname'];

$password2 = $_POST['password'];

if ($password2 !== '') {
    mysqli_query($koneksi, "UPDATE `users` SET `username` = '$username', `password` = '$password', `fullname`= '$fullname' WHERE `id` = '$id' ");
} else {
    mysqli_query($koneksi, "UPDATE `users` SET `username` = '$username', `fullname` = '$fullname' WHERE `id` = '$id' ");
}

/** Mengalihkan ke halaman index */
echo ("<script language='javascript'>
       window.location.href='profil.php';
       window.alert('Berhasil Ubah Profil.');
       </script>");
