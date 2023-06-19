<?php
function connect_db2($dbname){
$con = mysqli_connect("localhost:3306", "root", "", $dbname);
if(mysqli_connect_errno()){
echo "Connection failed: " . mysqli_connect_error();
}
return $con;
}
?>