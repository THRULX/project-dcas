<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Appointment</title>
</head>
<body>
    <?php
        $link = mysqli_connect('localhost', 'root', '', 'db_dcas');

        if($link === false){
            die("ERROR: Conneciton Failed. Please Try Again! " . mysqli_connect_error());
        }

        $pat_id = $_POST['pat_id'];
        $doc_name = $_POST['doc_name'];
        $app_date = $_POST['app_date'];
        $app_time = $_POST['app_time'];

        $checkid = "SELECT * FROM tbl_patient WHERE pat_id = '$pat_id'";
        $check = mysqli_query($link, $checkid);

        if(mysqli_num_rows($check) > 0){
            $record = mysqli_query($link,"SELECT * FROM tbl_patient WHERE pat_id = '$pat_id'");

            while($data = mysqli_fetch_array($record)) {
                $pat_num = $data['pat_num'];
            }

            $add = "INSERT INTO tbl_appointment (pat_num, doc_name, app_date, app_time, app_status)
                    VALUES ('$pat_num', '$doc_name', '$app_date', '$app_time', 'PENDING')";
            
            if(mysqli_query($link, $add)){
                echo '<h1>APPOINTMENT ADDED!</h1>';
                echo '<br/>';
                echo '<a href="MainPage.php"><h3>Go Back To Main Page</h3></a>';
            } 
            else{
                echo '<h1>ERROR: Failed to Add Appointment!</h1>';
                echo '<br/>';
                echo '<a href="MainPage.php"><h3>Try Again!</h3></a>';
            }
        }
        else {
            echo '<h1>INVALID PATIENT ID!</h1>';
            echo '<br/>';
            echo '<a href="MainPage.php"><h3>Edit Appointment</h3></a>';
        }

        mysqli_close($link);
    ?>
</body>
</html>
        