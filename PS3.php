<?php
    session_start();
    $_SESSION['ps3'] = $_POST['pat_sex'];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Search By Gender</title>
</head>
<body>
    <?php
        $link = mysqli_connect('localhost', 'root', '', 'db_dcas');

        if($link === false){
            die("ERROR: Conneciton Failed. Please Try Again! " . mysqli_connect_error());
        }

        $pat_sex = $_POST['pat_sex'];

        $records = mysqli_query($link,"SELECT * FROM tbl_patient
                                       WHERE pat_sex LIKE '$pat_sex%' ");

        echo '<h1>'.mysqli_num_rows($records).' Result/s Found.</h1>';
        echo '<br/>';
        echo '<a href="Patient3.php"><h3>View Results</h3></a>';

        mysqli_close($link);
    ?>
</body>
</html>