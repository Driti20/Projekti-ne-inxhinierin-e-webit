<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LoginForma</title>
    <link rel="stylesheet" href="CSS/styleLogin.css">
</head>
<body>
<?php
    include 'Komponetet/header.php'?>
    <main>
        <div class="div-form">
            <h2>Login to your account</h2>
            <form id="forma1" action="logicPHP/class.user.php" method="POST" onsubmit="return validate1()">
                <ul>
                    <li><label for="">Username:</label></li>
                    <li><input type="text" class="input" id="Username" placeholder="username..." /></li>
                    <li><label for="">Password:</label></li>
                    <li><input type="password" class="input" id="Password" placeholder="password..." /></li>
                    <li><input id="submit" type="submit" class="inputSubmit" value="Login" onclick="validate1()"/></li>
                </ul>
                <p><a href="">Keni harruar fjakalimin ?</a></p>
                <p><a href="RegjisterForma.php">Regjistrohu !</a></p>
            </form>
        </div>
    </main>
    <?php
    include 'Komponetet/footer.php'?>
    <script src="js/main2.js"></script>
</body>
</html>