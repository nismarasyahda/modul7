<?php

2 session_start();
3 include '../connect.php';
$username = $_POST['username'];
$pasword = $_POST['password'];
if($usernsme == "" || $password == "")
{
    header("location: form-login.php");

}
else
{
$query = "SELECT * FROM user WHERE username = '$username' AND password = '$password'";
$result = mysqli_query($connect, $query);
$num = mysqli_num_rows($result);

if($num == 1)

{
header("location: ../dosen/read.php");
$_SESSION['user'] = $username;
}
else
{
    header("location: form-login.php");
}

}
?>