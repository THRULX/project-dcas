<?php
    session_start();
    $_SESSION['search2'] = $_POST['app_date'];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Search By Date</title>
</head>
<body>
    <?php
        $link = mysqli_connect('localhost', 'root', '', 'db_dcas');

        if($link === false){
            die("ERROR: Conneciton Failed. Please Try Again! " . mysqli_connect_error());
        }

        $app_date = $_POST['app_date'];

        $records = mysqli_query($link,"SELECT * FROM tbl_appointment
                                       WHERE app_date LIKE '%$app_date%' ");

        echo '<h1>'.mysqli_num_rows($records).' Result/s Found.</h1>';
        echo '<br/>';
        echo '<a href="MainPage2.php"><h3>View Results</h3></a>';

        mysqli_close($link);
    ?>
</body>
</html>