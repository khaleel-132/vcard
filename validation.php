<?php
session_start();
$con = mysqli_connect('sql113.epizy.com','epiz_26494096','SJsnXWcPCF5Q');
mysqli_select_db($con,'epiz_26494096_vcard');
// $con = mysqli_connect('localhost','root','');
// mysqli_select_db($con,'vcard');

$name = $_POST['username'];
$password = $_POST['password'];

$s = "select * from registration where name = '$name' && password = '$password'";

$result = mysqli_query($con,$s);

$num = mysqli_num_rows($result);

if ($num ==1 ){
    $_SESSION['username'] = $name;
    header('location:home.php');
}else{
    header('location:index.php');
}
?>
