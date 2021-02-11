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
        <div class="div-form1">
            <h2>Register to your account</h2>
            <form id="forma1" action="">
                <ul>
                    <li><label for="">Emri:</label></li>
                    <li><input type="text" class="input1" id="Emri" placeholder="Emri..." /></li>
                    <li><label for="">Mbiemri:</label></li>
                    <li><input type="text" class="input1" id="Mbiemri" placeholder="Mbiemri..." />
                    <li><label for="">Email:</label></li>
                    <li><input type="email" class="input1" id="Email" placeholder="Email..." />
                    <li><label for="">Username:</label></li>
                    <li><input type="text" class="input1" id="Username" placeholder="username..." />
                    <li><label for="">Password:</label></li>
                    <li><input type="password" class="input1" id="Password" placeholder="password..." /></li>
                    <li><label for="">Confirm password:</label></li>
                    <li><input type="password" class="input1" id="Cpassword" placeholder="Confirm Password..." />
                    <li><input id="submit" type="submit" class="inputSubmit" value="Login" onclick="validate2()"/></li>
                </ul>
                <p><a href="">Keni harruar fjakalimin ?</a></p>
                <p><a href="LoginForma.php">Kyqu !</a></p>
            </form>
        </div>
    </main>
    <?php
    include 'Komponetet/footer.php'?>
    <script src="js/main2.js"></script>
</body>