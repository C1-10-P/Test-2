<?php 

$con=new mysqli('localhost','root',
 '','bookstore', '4306',);
// mysqli_connect
if(!$con){
    die(mysqli_error($con));
}   
?>