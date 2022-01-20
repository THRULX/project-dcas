<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Delete</title>
</head>
<body>
    <?php
        $link = mysqli_connect('localhost', 'root', '', 'db_dcas');

        if($link === false){
            die("ERROR: Conneciton Failed. Please Try Again! " . mysqli_connect_error());
        }

        $app_num = $_POST['app_num'];

        $checknum = "SELECT * FROM tbl_appointment WHERE app_num = '$app_num'";
        $check = mysqli_query($link, $checknum);

        if(mysqli_num_rows($check) > 0) {
            $delete = "DELETE FROM tbl_appointment
                       WHERE app_num = '$app_num' ";

            if(mysqli_query($link, $delete)){
                echo '<h1>APPOINTMENT DELETED!</h1>';
                echo '<br/>';
                echo '<a href="MainPage.php"><h3>Go Back To Main Page</h3></a>';
            } 
            else{
                echo '<h1>ERROR: Failed to Delete Appointment!</h1>';
                echo '<br/>';
                echo '<a href="MainPage.php"><h3>Try Again!</h3></a>';
            }
        }
        else {
            echo '<h1>INVALID APP_NUM!</h1>';
            echo '<br/>';
            echo '<a href="MainPage.php"><h3>Try Again!</h3></a>';
        }

        mysqli_close($link);
    ?>
</body>
</html>
        