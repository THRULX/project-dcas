<?php
    session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="MainPage.css">
    <title>Dental Clinic Appointment System</title>
</head>
<body background="MPBackground.jpg">
    <fieldset class="header">
        <form name="log_out" method="post" action="Logout.php">
            <a class="dcas">DENTAL CLINIC APPOINTMENT SYSTEM</a>
            <a href="Patient.php">PATIENT INFORMATION</a>
            <a href="MainPage.php">VIEW ALL APPOINTMENTS</a>
            <input type="submit" name="log_out" value="LOG OUT">
        </form>
    </fieldset>
    <div class="row">
        <div class="col1">
            <h1 class="appointments">APPOINTMENTS</h1>
            <h3 class="lbl1"><u>Patient Information</u></h3>
            <form name="Pat_Info" method="post" action="Pat_Info.php">
                <table class="app">
                    <tr>
                        <td>Patient ID : </td>
                        <td>
                            <input type="text" name="pat_id" required>
                        </td>
                    </tr>
                    <tr>
                        <td>First Name : </td>
                        <td>
                            <input type="text" name="pat_fn" required>
                        </td>
                    </tr>
                    <tr>
                        <td>Middle Name :</td>
                        <td>
                            <input type="text" name="pat_mn" required>
                        </td>
                    </tr>
                    <tr>
                        <td>Last Name : </td>
                        <td>
                            <input type="text" name="pat_ln" required>
                        </td>
                    </tr>
                    <tr>
                        <td>Date of Birth : </td>
                        <td>
                            <input type="date" name="dob" required>
                        </td>
                    </tr>
                    <tr>
                        <td>Sex : </td>
                        <td>
                            <select name="pat_sex">
                                <option value="Male">MALE</option>
                                <option value="Female">FEMALE</option>
                            </select>
                        </td>
                    </tr>
                    <tr>
                        <td>Phone Number : </td>
                        <td>
                            <input type="number" name="pat_pn" required>
                        </td>
                    </tr>
                    <tr>
                        <td>Full Address : </td>
                        <td>
                            <input type="text" name="pat_fa" required>
                        </td>
                    </tr>
                    <tr>
                        <td></td>
                        <td>
                            <input type="submit" name="add" value="ADD">
                        </td>
                    </tr>
                </table>
            </form>
            <h3 class="lbl2"><u>Add Appointment</u></h3>
            <form name="Add_App" method="post" action="Add_App.php">
                <table class="app">
                    <tr>
                        <td class="txtlbl">Patient ID : </td>
                        <td>
                            <input type="text" name="pat_id" placeholder="Enter Patient ID" required>
                        </td>
                    </tr>
                    <tr>
                        <td>Doctor Name : </td>
                        <td>
                            <input type="text" name="doc_name" required>
                        </td>
                    </tr>
                    <tr>
                        <td>Date : </td>
                        <td>
                            <input type="date" name="app_date" required>
                        </td>
                    </tr>
                    <tr>
                        <td>Time : </td>
                        <td>
                            <input type="time" name="app_time" required>
                        </td>
                    </tr>
                    <tr>
                        <td></td>
                        <td>
                            <input type="submit" name="add" value="ADD">
                        </td>
                    </tr>
                </table>
            </form>
        </div>
        <div class="col2">
            <table class="app_query">
                <tr class="A">
                    <form name="search1" method="post" action="Search1.php">
                        <td>
                            <p>Search by Name</p>
                            <input type="text" name="pat_name" placeholder="Enter PAT_NAME" required>
                            <input type="submit" name="search1" value="SEARCH">
                        </td>
                    </form>
                    <form name="search2" method="post" action="Search2.php">
                        <td>
                            <p>Search by Date</p>
                            <input type="date" name="app_date" required>
                            <input type="submit" name="search2" value="SEARCH">
                        </td>
                    </form>
                    <form name="update" method="post" action="Update.php">
                        <td>
                            <p>Update App_Status</p>
                            <input type="number" name="app_num" placeholder="Enter APP_NUM" required>
                            <select name="app_status">
                                <option value="DONE">DONE</option>
                                <option value="CANCELLED">CANCEL</option>
                            </select>
                            <input type="submit" name="update" value="UPDATE">
                        </td>
                    </form>
                    <form name="delete" method="post" action="Delete.php">
                        <td>
                            <p>Delete Appointment</p>
                            <input type="number" name="app_num" placeholder="Enter APP_NUM" required>
                            <input type="submit" name="delete" value="DELETE">
                        </td>
                    </form>
                </tr>
            </table>
            <fieldset class="show_app">
                <table class="show_app" border="1">
                    <thead>
                        <td>APP_NUM</td>
                        <td>PAT_ID</td>
                        <td>PAT_FN</td>
                        <td>PAT_MN</td>
                        <td>PAT_LN</td>
                        <td>CONTACT_NO</td>
                        <td>DOC_NAME</td>
                        <td>APP_DATE</td>
                        <td>APP_TIME</td>
                        <td>APP_STATUS</td>
                    </thead>
                    <tbody>
                        <?php
                            require 'Appointment2.php';
                        ?>
                    </tbody>    
                </table>
            </fieldset>
        </div>
    </div>
</body>
</html>