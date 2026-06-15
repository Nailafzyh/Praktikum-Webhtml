<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MyWeb Session</title>
    <style>
        body {
            font-family: Arial, sans-serif;
        }

        .container {
            width: 600px;
            margin: 20px auto;
            border: 1px solid #000;
            padding: 20px;
            text-align: center;
        }

        .header,
        .footer {
            padding: 10px;
            background-color: #fed1d1;
            border: 1px solid #9c9696;
        }

        .content {
            padding: 20px;
            min-height: 150px;
            text-align: center;
        }

        .nav {
            margin-bottom: 20px;
            padding: 10px;
            background-color: #f9f9f9;
            border-bottom: 1px solid #eee;
        }

        .error {
            color: red;
            font-weight: bold;
        }
    </style>
</head>

<body>
    <div class="container">

        <div class="header">
            <h2> MyWeb Session</h2>
            <?php if (isset($_SESSION['login'])): ?>
                <p>Username: <b><?= $_SESSION['username']; ?></b></p>
            <?php endif; ?>
        </div>

        <?php if (isset($_SESSION['login'])): ?>
            <div class="nav">
                <a href="index.php">Home</a> |
                <a href="link1.php">Link 1</a> |
                <a href="link2.php">Link 2</a> |
                <a href="link3.php">Link 3</a> |
                <a href="logout.php" style="color: red;">Logout</a>
            </div>
        <?php endif; ?>

        <div class="content">