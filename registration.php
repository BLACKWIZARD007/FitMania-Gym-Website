<?php
session_start();


$con = mysqli_connect('localhost','root','');
mysqli_select_db($con , 'loginregistration');
$name = $_POST['user'];
$pass = $_POST['password'];
$s = "select * from users where user = '$name'";
$result = mysqli_query($con ,$s);
$num = mysqli_num_rows($result);

if($num == 1){
    echo'"<div class="alert alert-primary" role="alert">
    A simple primary alert—check it out!
  </div>"';
}else{
    $reg = "insert into users(user , password) values('$name','$pass')";
    mysqli_query($con , $reg);
    echo" Registration Successful";
    header('location:index.php');
}
?>
