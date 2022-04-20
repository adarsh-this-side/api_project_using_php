<?php
include('db.php');
header('Content-Type:application/json');

if(isset($_GET['token'])){
   $token=mysqli_real_escape_string($con, $_GET['token']);
   $checkTokenRes=mysqli_query($con,"select * from api_token where token = '$token'");
    if(mysqli_num_rows($checkTokenRes)>0){
        $checkTokenRow=mysqli_fetch_assoc($checkTokenRes);
        
        if($checkTokenRow['status']==1){
            $sqlRes=mysqli_query($con, "select * from user");
            
            if(mysqli_num_rows($sqlRes)>0){
                $data=[];
                while($row=mysqli_fetch_assoc($sqlRes)){
                    $data[]=$row;
                }
                $status='true';
                $code='200';
                
            }else{
            $status='true';
            $data="Data not found";
            $code='104';}
            
            
        }else{
        $status='true';
        $data="Please token deactivated";
        $code='103';}
        
    }else{
    $status='true';
    $data="Please provide valid API token";
    $code='102';}


}else{
    $status='true';
    $data="Please provide API token";
    $code='101'; }
    
echo json_encode(["status"=>$status, "code"=>$code, "data"=>$data]);
?>