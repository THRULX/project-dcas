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
            die("ERROR: Conneciton Failed. Please Try Again! " . mysqli_connect_error());
        }
        $pat_id = $_POST['pat_id'];
        $pat_fn = $_POST['pat_fn'];
        $pat_mn = $_POST['pat_mn'];
        $pat_ln = $_POST['pat_ln'];
        $pat_sex = $_POST['pat_sex'];
        $dob = $_POST['dob'];
        $pat_pn = $_POST['pat_pn'];
        $pat_address = $_POST['pat_fa'];

        if($pat_pn > 9999999999 || $pat_pn < 9000000000) {
            echo '<h1>ERROR: Invalid Phone Number!</h1>';
            echo '<br/>';
            echo '<a href="MainPage.php"><h3>Edit Patient Information</h3></a>';
        }
        else{
            $add = "INSERT INTO tbl_patient (pat_id, pat_fn, pat_mn, pat_ln, dob, pat_sex, pat_pn, pat_address)
                    VALUES ('$pat_id', '$pat_fn', '$pat_mn', '$pat_ln', '$dob', '$pat_sex', '$pat_pn', '$pat_address')";

            if(mysqli_query($link, $add)){
                echo '<h1>PATIENT INFORMATION ADDED!</h1>';
                echo '<br/>';
                echo '<a href="MainPage.php"><h3>Go Back To Main Page</h3></a>';
            } 
            else{
                echo '<h1>ERROR: Failed to Add Patient Information!</h1>';
                echo '<br/>';
                echo '<a href="MainPage.php"><h3>Go Back To Previous Page</h3></a>';
            } 
        }

        mysqli_close($link);
    ?>
</body>
</html>
        