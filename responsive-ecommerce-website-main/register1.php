




<?php


 require_once('connect_db2.php');
$dbname="ecomassign";
$con = connect_db2($dbname);






$fName= mysqli_real_escape_string($con, $_POST['name']);
$lName=mysqli_real_escape_string($con, $_POST['name2']);
$email=mysqli_real_escape_string($con, $_POST['email']);
$passw=mysqli_real_escape_string($con, $_POST['passw']);
$age=mysqli_real_escape_string($con, $_POST['age']);
$BANKP=mysqli_real_escape_string($con, $_POST['bank']);

$sql = "INSERT INTO custinfo (fName, lName, email, passw, age,BANKP) VALUES ('$fName', '$lName', '$email', '$passw','$age','$BANKP')";
if (!mysqli_query($con, $sql)) {
  $err=1;
} 
mysqli_close($con);
if(isset($err)){
header("location: index.html?err=1");
}
else{
header("location:checkout.html");
}
?> 