<?php
if($_SERVER['REQUEST_METHOD']=='POST'){
    $Name = $_POST['Name'];
    $Lname = $_POST['Lname'];
    $Address = $_POST['Address'];
    $Phone = $_POST['Phone'];

$con=new mysqli('localhost', 'root', '', 'feed');
if($con){
    //echo "Connection successful";
    $sql="insert into `feedtable` (Name,Lname,Address,Phone) values('$Name', '$Lname', '$Address','$Phone')";
   $result=mysqli_query($con,$sql);
   if($result){
        echo "Data inserted successfully";
   }else{
        die(mysqli_error($con));
   }

}else{
    die(mysqli_erroe($con));
}

}
?>