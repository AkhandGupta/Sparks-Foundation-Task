<?php

if(isset($_POST['submit'])){
	$emailt=$_POST['emailt'];
	$emailf=$_POST['emailf'];
    $amount=$_POST['number'];
    
$con=new mysqli('localhost','root','','bank');
if($con->connect_error){
    die('connection Failed : '.$con->connect_error);
}
$sql = "UPDATE bank set Balance=Balance-$amount where Email='$emailf'"; 
$sql1="UPDATE bank set Balance=Balance+$amount where Email='$emailt'";

if($con->query($sql) === TRUE) { 


if($con->query($sql1) === TRUE) { echo "Transfer Successfull ";
header("Location:table.php");}
else { echo "Error: " . $sql . "<br>" . $conn->error; }}
          
else { echo "Error: " . $sql . "<br>" . $conn->error; }
}






?>