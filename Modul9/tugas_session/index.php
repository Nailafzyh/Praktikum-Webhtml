<?php
session_start();
if (!isset($_SESSION['login'])) {
    header("location:login.php");
    exit();
}

$nama = $_SESSION['username'];
include('header.php');
?>

<h3>Anda telah berhasil login</h3>
<p>Username: <b><?php echo $nama; ?></b></p>

<p>Selamat datang di halaman utama aplikasi saya.</p>

<?php
include('footer.php');
?>