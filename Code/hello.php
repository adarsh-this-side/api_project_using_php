<?php
include('token.php');

if (!isset($status)) {
    $table=mysqli_real_escape_string($con,$_GET['table']);
    $column=mysqli_real_escape_string($con,$_GET['column']);
    $sort=mysqli_real_escape_string($con,$_GET['sort']);
    $email=mysqli_real_escape_string($con,$_GET['email']);
    $email= "WHERE 'email'="+ $email; 

            $sqlRes = mysqli_query($con, "SELECT * FROM $email $table ORDER BY $column $sort");
                
                if (mysqli_num_rows($sqlRes) > 0) {
                    $data = [];
                    while ($row = mysqli_fetch_assoc($sqlRes)) {
                        $data[] = $row;
                    }
                    $status = 'true';
                    $code = '200';
                } else {
                    $status = 'true';
                    $data = "Data not found";
                    $code = '104';
                }
            } else {
                $status = 'true';
                $data = "Enter column parameter";
                $code = '104';
            }
     
echo json_encode(["status" => $status, "code" => $code, "data" => $data]);
