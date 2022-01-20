<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Patient Information</title>
</head>
<body>
    <?php
        $link = mysqli_connect('localhost', 'root', '', 'db_dcas');

        if($link === false){
            die("ERROR: Could not connect. " . mysqli_connect_error());
        }

        $pat_sex = $_SESSION['ps3'];

        $records = mysqli_query($link,"SELECT * FROM tbl_patient WHERE pat_sex LIKE '$pat_sex%' ORDER BY pat_num");

        while($data = mysqli_fetch_array($records)) {
            echo '<tr>';
            echo '<td>'.$data['pat_num'].'</td>';
            echo '<td>'.$data['pat_id'].'</td>';
            echo '<td>'.$data['pat_ln'].'</td>';
            echo '<td>'.$data['pat_fn'].'</td>';
            echo '<td>'.$data['pat_mn'].'</td>';
            echo '<td>'.$data['pat_sex'].'</td>';
            echo '<td>'.$data['dob'].'</td>';
            echo '<td>'.$data['pat_pn'].'</td>';
            echo '<td>'.$data['pat_address'].'</td>';
            echo '</tr>';
        }

        mysqli_close($link);
    ?>
 </body>
 </html>