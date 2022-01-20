<?php
    session_start();
    $_SESSION['ps1'] = $_POST['pat_id'];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Search By ID</title>
</head>
<body>
    <?php
        $link = mysqli_connect('localhost', 'root', '', 'db_dcas');

        if($link === false){
            die("ERROR: Conneciton Failed. Please Try Again! " . mysqli_connect_error());
        }

        $pat_id = $_POST['pat_id'];

        $records = mysqli_query($link,"SELECT * FROM tbl_patient
                                       WHERE pat_id LIKE '%$pat_id%' ");

        echo '<h1>'.mysqli_num_rows($records).' Result/s Found.</h1>';
        echo '<br/>';
        echo '<a href="Patient1.php"><h3>View Results</h3></a>';

        mysqli_close($link);
    ?>
</body>
</html>