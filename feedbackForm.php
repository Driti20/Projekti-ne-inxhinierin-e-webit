<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact</title>
    <link rel="stylesheet" href="CSS/styleLogin.css">
</head>
<body>
    <?php
    include 'Komponetet/header.php'?>
    <main >
        <div class="feedbackDiv">
            <h2>Feedback forma</h2>
            <form id="forma2" action="">
            <input type="text" class="feedbackInput" id="feedback" placeholder="Feedback....." />
            <input id="submit" type="submit" class="inputSubmit" value="Submit" onclick="validate1()"/>
            </form> 
        </div>
    </main>
    <?php
    include 'Komponetet/footer.php'?>
</body>
</html>