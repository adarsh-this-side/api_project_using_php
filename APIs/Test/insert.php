<?php
include('token.php');
if (!isset($status)) {
    if(isset($_GET['table']) && $_GET['table']!=""){
       if(isset($_GET['name']) && $_GET['name']!=""){
           if(isset($_GET['email']) && $_GET['email']!=""){
        
        
            
        $table=mysqli_real_escape_string($con,$_GET['table']);
        $name=mysqli_real_escape_string($con,$_GET['name']);
        $email=mysqli_real_escape_string($con,$_GET['email']);
        
        mysqli_query($con, "insert into $table (name,email) values('$name','$email')");
        
        $status='true';
        $data='data insert success';
        $code='401';
      
        
    }else{
        $status='true';
        $data='enter email';
        $code='401';}
        
    }else{
        $status='true';
        $data='enter name';
        $code='401';}
        
    }else{
        $status='true';
        $data='enter table name';
        $code='401';}
     
}
echo json_encode(["status" => $status, "code" => $code, "data" => $data]);

?>

       