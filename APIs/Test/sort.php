<?php
include('token.php');

if (!isset($status)) {

    if (isset($_GET['sort']) && $_GET['sort'] != "") {
        
        if (isset($_GET['table']) && $_GET['table'] != "") {
            
            if (isset($_GET['column']) && $_GET['column'] != "") {
                
                $sort = mysqli_real_escape_string($con, $_GET['sort']);
                $table = mysqli_real_escape_string($con, $_GET['table']);
                $column = mysqli_real_escape_string($con, $_GET['column']);

                $sqlRes = mysqli_query($con, "SELECT * FROM $table ORDER BY $column $sort");
                
                if (mysqli_num_rows($sqlRes) > 0) {
                    $data = [];
                    while ($row = mysqli_fetch_assoc($sqlRes)) {
                        $data[] = $row;
                    }
                    $status = 'true';
                    $code = '200';
                } else {
                    $status = 'true';
                    $data = "Data not found. Check perameters.";
                    $code = '104';
                }
            } else {
                $status = 'true';
                $data = "Enter column parameter";
                $code = '104';
            }
        } else {
            $status = 'true';
            $data = "Enter table name parameter";
            $code = '104';
        }
    } else {
        $status = 'true';
        $data = 'Please enter sort data ';
        $code = '104';
    }
}

echo json_encode(["status" => $status, "code" => $code, "data" => $data]);
