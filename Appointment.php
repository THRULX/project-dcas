<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Appointments</title>
</head>
<body>
    <?php
        $link = mysqli_connect('localhost', 'root', '', 'db_dcas');

        if($link === false){
            die("ERROR: Could not connect. " . mysqli_connect_error());
        }

        $records = mysqli_query($link,"SELECT tbl_appointment.app_num, tbl_patient.pat_fn, tbl_patient.pat_mn, tbl_patient.pat_ln, tbl_appointment.app_status, tbl_patient.pat_id,
                                            tbl_patient.pat_pn, tbl_appointment.doc_name, tbl_appointment.app_date, tbl_appointment.app_time, tbl_appointment.pat_num
                                            FROM tbl_appointment
                                            INNER JOIN tbl_patient
                                            ON tbl_appointment.pat_num = tbl_patient.pat_num
                                            ORDER BY tbl_appointment.app_num");

        while($data = mysqli_fetch_array($records)) {
            echo '<tr>';
            echo '<td>'.$data['app_num'].'</td>';
            echo '<td>'.$data['pat_id'].'</td>';
            echo '<td>'.$data['pat_fn'].'</td>';
            echo '<td>'.$data['pat_mn'].'</td>';
            echo '<td>'.$data['pat_ln'].'</td>';
            echo '<td>'.$data['pat_pn'].'</td>';
            echo '<td>'.$data['doc_name'].'</td>';
            echo '<td>'.$data['app_date'].'</td>';
            echo '<td>'.$data['app_time'].'</td>';
            echo '<td>'.$data['app_status'].'</td>';
            echo '</tr>';
        }

        mysqli_close($link);
    ?>
 </body>
 </html>