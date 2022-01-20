<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="Pat.css">
    <title>Dental Clinic Appointment System</title>
</head>
<body background="MPBackground.jpg">
    <fieldset class="header">
        <form name="log_out" method="post" action="Logout.php">
            <a class="dcas">DENTAL CLINIC APPOINTMENT SYSTEM</a>
            <a href="MainPage.php">MAIN PAGE</a>
            <a href="MainPage.php">VIEW ALL APPOINTMENTS</a>
            <input type="submit" name="log_out" value="LOG OUT">
        </form>
    </fieldset>
    <div class="row">
        <div class="col1">
            <h1 class="appointments">PATIENTS INFO</h1>
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
                                <option value="MALE">MALE</option>
                                <option value="FEMALE">FEMALE</option>
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
                    <form name="PS1" method="post" action="PS1.php">
                        <td>
                            <p>Search by ID</p>
                            <input type="text" name="pat_id" placeholder="Enter PAT_ID" required>
                            <input type="submit" name="ps1" value="SEARCH">
                        </td>
                    </form>
                    <form name="PS2" method="post" action="PS2.php">
                        <td>
                            <p>Search by Last Name</p>
                            <input type="text" name="pat_ln" placeholder="Enter PAT_LN" required>
                            <input type="submit" name="ps2" value="SEARCH">
                        </td>
                    </form>
                    <form name="PS3" method="post" action="PS3.php">
                        <td>
                            <p>Search by Gender</p>
                            <select name="pat_sex">
                                <option value="MALE">MALE</option>
                                <option value="FEMALE">FEMALE</option>
                            </select>
                            <input type="submit" name="ps3" value="SEARCH">
                        </td>
                    </form>
                    <form name="PS4" method="post" action="PS4.php">
                        <td>
                            <p>Search by Address</p>
                            <input type="text" name="pat_address" placeholder="Enter APP_ADDRESS" required>
                            <input type="submit" name="ps4" value="SEARCH">
                        </td>
                    </form>
                </tr>
            </table>
            <fieldset class="show_app">
                <table class="show_app" border="1">
                    <thead>
                        <td>PAT_NUM</td>
                        <td>PAT_ID</td>
                        <td>PAT_LN</td>
                        <td>PAT_FN</td>
                        <td>PAT_MN</td>
                        <td>GENDER</td>
                        <td>BIRTHDATE</td>
                        <td>PHONE NUMBER</td>
                        <td>ADDRESS</td>
                    </thead>
                    <tbody>
                        <?php
                            require 'PatientList.php';
                        ?>
                    </tbody>    
                </table>
            </fieldset>
        </div>
    </div>
</body>
</html>