<?php
session_start();


$con = mysqli_connect('localhost','root','');
mysqli_select_db($con , 'loginregistration');
$name = $_POST['user'];
$pass = $_POST['password'];
$s = "select * from users where user = '$name' && password = '$pass'";
$result = mysqli_query($con ,$s);
$num = mysqli_num_rows($result);

if($num == 1){
    header('location:index.html');
}else{
   header('location:index.php');
}
?>
