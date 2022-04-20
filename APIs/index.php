<?php
include('token.php');
$sqlRes = mysqli_query($con, "select * from user");
if (!isset($status)) {

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
}

echo json_encode(["status" => $status, "code" => $code, "data" => $data]);


