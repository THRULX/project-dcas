<?php
    session_start();
    $_SESSION['search1'] = $_POST['pat_name'];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Search By Name</title>
</head>
<body>
    <?php
        $link = mysqli_connect('localhost', 'root', '', 'db_dcas');

        if($link === false){
            die("ERROR: Conneciton Failed. Please Try Again! " . mysqli_connect_error());
        }

        $pat_name = $_POST['pat_name'];

        $records = mysqli_query($link,"SELECT * FROM tbl_patient
                                       WHERE pat_fn LIKE '%$pat_name%' OR pat_mn LIKE '%$pat_name%' OR pat_ln LIKE '%$pat_name%' ");

        echo '<h1>'.mysqli_num_rows($records).' Result/s Found.</h1>';
        echo '<br/>';
        echo '<a href="MainPage1.php"><h3>View Results</h3></a>';

        mysqli_close($link);
    ?>
</body>
</html>