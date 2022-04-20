<?php
include('db.php');

header('Content-Type:application/json');

if (isset($_GET['key'])) {
    $key = mysqli_real_escape_string($con, $_GET['key']);
    $checkRes = mysqli_query($con, "select * from api_token where token='$key'");
    
    
    if (mysqli_num_rows($checkRes) > 0) {
        $checkRow=mysqli_fetch_assoc($checkRes);
        if($checkRow['status']==1){
            
            if($checkRow['hit_count']>=$checkRow['hit_limit']){
                echo json_encode(['status'=>'1100', 'msg'=>'End Hit Limit','data'=>'No more hits']);  
                die();
            }else{
                mysqli_query($con,"update api_token set hit_count=hit_count+1 where token='$key'");
            }
          
        $sql = "select * from user";
        $res = mysqli_query($con, $sql);
        $count = mysqli_num_rows($res);
        
        if ($count > 0) {
            while ($row = mysqli_fetch_assoc($res)) {
                $arr[] = $row;
            }
            echo json_encode(['status' => '200', 'msg' => 'success', 'data' => $arr]);
        } else {
            echo json_encode(['status' => '400', 'msg' => 'no data found', 'data' => 'empty']);
        }
            
            
            
        }else{
        echo json_encode(['status' => '800', 'msg' => 'expired key', 'data' => 'empty']);
            
        }

        
    }else{ echo json_encode(['status' => '900', 'msg' => 'Please Provide vaild api token', 'data' => 'no vaild key']);
        
    }
        
    } else {
        echo json_encode(['status' => '700', 'msg' => 'Please Provide api token', 'data' => 'no key']);
    }

?>