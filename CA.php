<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CREATE ACCOUNT</title>
</head>
<body>
    <?php
        $link = mysqli_connect('localhost', 'root', '', 'db_dcas');

        if($link === false){
            die("ERROR: Conneciton Failed. Please Try Again! " . mysqli_connect_error());
        }

        $admin_id = $_POST['admin_id'];
        $last_name = $_POST['last_name'];
        $first_name = $_POST['first_name'];
        $middle_name = $_POST['middle_name'];
        $admin_sex = $_POST['sex'];
        $birth_date = $_POST['dob'];
        $contact_no = $_POST['contact_no'];
        $admin_name = $_POST['admin_name'];
        $admin_password = $_POST['admin_password'];

        $checkid = "SELECT * FROM tbl_admin WHERE admin_id = '$admin_id'";
        $id = mysqli_query($link, $checkid);

        if(mysqli_num_rows($id) > 0){
            echo '<h1>ERROR: Admin ID is not available!</h1>';
            echo '<br/>';
            echo '<a href="CreateAccount.html"><h3>Back To Previous Page</h3></a>';
        }
        else {
            $checkname = "SELECT * FROM tbl_admin WHERE admin_name = '$admin_name'";
            $name = mysqli_query($link, $checkname);

            if(mysqli_num_rows($name) > 0){
                echo '<h1>ERROR: Username is not available!</h1>';
                echo '<br/>';
                echo '<a href="CreateAccount.html"><h3>Back To Previous Page</h3></a>';
            }
            else {
                $checkcn = "SELECT * FROM tbl_admin WHERE contact_no = '$contact_no'";
                $cn = mysqli_query($link, $checkcn);

                if(mysqli_num_rows($cn) > 0){
                    echo '<h1>ERROR: Contact Number is already taken!</h1>';
                    echo '<br/>';
                    echo '<a href="CreateAccount.html"><h3>Back To Previous Page</h3></a>';
                }
                else {
                    if($contact_no > 9999999999 || $contact_no < 9000000000) {
                        echo '<h1>ERROR: Invalid Contact Number!</h1>';
                        echo '<br/>';
                        echo '<a href="CreateAccount.html"><h3>Back To Previous Page</h3></a>';
                    }
                    else {
                        $add = "INSERT INTO tbl_admin (admin_id, last_name, first_name, middle_name, admin_sex, birth_date, contact_no, admin_name, admin_password)
                        VALUES ('$admin_id', '$last_name', '$first_name', '$middle_name', '$admin_sex', '$birth_date', '$contact_no', '$admin_name', '$admin_password')";

                        if(mysqli_query($link, $add)){
                            echo '<h1>You Successfully Created an Account!</h1>';
                            echo '<br/>';
                            echo '<a href="Login.html"><h3>Go Back To Sign In</h3></a>';
                        } 
                        else{
                            echo '<h1>ERROR: Failed to Create an Account!</h1>';
                            echo '<br/>';
                            echo '<a href="CreateAccount.html"><h3>Back To Previous Page</h3></a>';
                        }      
                    }
                }
            }
        }
        mysqli_close($link);
    ?>
</body>
</html>
