<?php
session_start();
if (!isset($_SESSION['login'])) {
    header("location:login.php");
    exit();
}
include('header.php');
?>

<h3>Halaman Link 2</h3>
<p>Ini adalah isi konten khusus untuk halaman Link 2</p>
<?php
include('footer.php');
?>