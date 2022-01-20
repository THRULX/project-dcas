<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LOG IN</title>
</head>
<body>
    <?php
        $link = mysqli_connect('localhost', 'root', '', 'db_dcas');

        if($link === false){
            die("ERROR: Conneciton Failed. Please Try Again! " . mysqli_connect_error());
        }

        $admin_name = $_POST['admin_name'];
        $admin_password = $_POST['admin_password'];

        $checkaccount = "SELECT * FROM tbl_admin WHERE admin_name = '$admin_name'";
        $account = mysqli_query($link, $checkaccount);

        if(mysqli_num_rows($account) > 0){
            $checkpass = "SELECT * FROM tbl_admin WHERE admin_password = '$admin_password' AND admin_name = '$admin_name'";
            $pass = mysqli_query($link, $checkpass);

            if(mysqli_num_rows($pass) > 0) {
                echo '<h1>LOGIN SUCCESSFUL!</h1>';
                echo '<br/>';
                echo '<a href="MainPage.php"><h3>Continue To Main Page</h3></a>';
            }
            else {
                echo '<h1>WRONG PASSWORD!</h1>';
                echo '<br/>';
                echo '<a href="Login.html"><h3>Try Again!</h3></a>';
            }
        }
        else{
            echo '<h1>ACCOUNT DOES NOT EXIST!</h1>';
            echo '<br/>';
            echo '<a href="Login.html"><h3>Try Again!</h3></a>';
        }
        mysqli_close($link);
    ?>
</body>
</html>