<?php
session_start();


$users = [
    "Ali"     => "password1",
    "Bona"    => "password2",
    "Charlie" => "password3",
    "Dede"    => "password4",
    "Emon"    => "password5"
];

if (isset($_SESSION['login'])) {
    header("location:index.php");
    exit();
}

$error_message = "";

if (isset($_POST['submit'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];
    if (array_key_exists($username, $users)) {

        if ($users[$username] == $password) {
            $_SESSION['login'] = true;
            $_SESSION['username'] = $username;
            header("location:index.php");
            exit();
        } else {
            $error_message = "Password yang dimasukkan salah";
        }
    } else {
        $error_message = "Username tidak terdaftar";
    }
}

include('header.php');
?>

<h3 align="center">Silahkan login</h3>

<?php if ($error_message != ""): ?>
    <p class="error" style="color: red; font-weight: bold; text-align: center;"><?php echo $error_message; ?></p>
<?php endif; ?>

<form action="" method="POST">
    <table align="center" cellpadding="5" style="border: 1px solid #ecd3d3; padding: 20px; border-radius: 5px;">
        <tr>
            <td>Username</td>
            <td>: <input type="text" name="username" required></td>
        </tr>
        <tr>
            <td>Password</td>
            <td>: <input type="password" name="password" required></td>
        </tr>
        <tr>
            <td></td>
            <td><input type="submit" name="submit" value="Submit"></td>
        </tr>
    </table>
</form>

<?php
include('footer.php');
?>