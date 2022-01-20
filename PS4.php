<?php
    session_start();
    $_SESSION['ps4'] = $_POST['pat_address'];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Search By Address</title>
</head>
<body>
    <?php
        $link = mysqli_connect('localhost', 'root', '', 'db_dcas');

        if($link === false){
            die("ERROR: Conneciton Failed. Please Try Again! " . mysqli_connect_error());
        }

        $pat_address = $_POST['pat_address'];

        $records = mysqli_query($link,"SELECT * FROM tbl_patient
                                       WHERE pat_address LIKE '%$pat_address%' ");

        echo '<h1>'.mysqli_num_rows($records).' Result/s Found.</h1>';
        echo '<br/>';
        echo '<a href="Patient4.php"><h3>View Results</h3></a>';

        mysqli_close($link);
    ?>
</body>
</html>