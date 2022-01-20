<?php
    if(isset($_SESSION['search1'])){
        unset($_SESSION['search1']);
    }
    if(isset($_SESSION['search2'])){
        unset($_SESSION['search2']);
    }
    if(isset($_SESSION['ps1'])){
        unset($_SESSION['ps1']);
    }
    if(isset($_SESSION['ps2'])){
        unset($_SESSION['ps2']);
    }
    if(isset($_SESSION['ps3'])){
        unset($_SESSION['ps3']);
    }
    if(isset($_SESSION['ps4'])){
        unset($_SESSION['ps4']);
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Log Out</title>
</head>
<body>
    <?php
        echo '<h1>ACCOUNT SUCCESSFULLY LOG OUT!.</h1>';
        echo '<br/>';
        echo '<a href="Login.html"><h3>Back To Sign In</h3></a>';
    ?>
</body>
</html>