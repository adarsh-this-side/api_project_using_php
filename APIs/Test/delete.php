<?php
include('token.php');
if (!isset($status)) {
    if(isset($_GET['id']) && $_GET['id']>0){
        
       if(isset($_GET['table']) && $_GET['table']!=""){
           
        $id=mysqli_real_escape_string($con,$_GET['id']);
        $table=mysqli_real_escape_string($con,$_GET['table']);
        
        mysqli_query($con, "delete from $table where id = $id");
        
        $status='true';
        $data='Data deleted';
        $code='402';
        
    }else{
        $status='true';
        $data='Provide table name';
        $code='401';
    } 
        
    }else{
        $status='true';
        $data='Provide id';
        $code='401';
    }
     
}
echo json_encode(["status" => $status, "code" => $code, "data" => $data]);

?>

       