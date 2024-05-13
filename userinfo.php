<?php

$con = mysqli_connect('localhost', 'root');

if ($con) {
    echo "Connection Successful";
} else {
    echo "No connection";
}

mysqli_select_db($con, 'userdata');

$user = $_POST['user'];
$email = $_POST['email'];
$mobile = $_POST['mobile'];
$comments = $_POST['comments'];

$stmt = mysqli_prepare($con, "INSERT INTO `userinfodata`(`user`, `email`, `mobile`, `comment`) VALUES (?, ?, ?, ?)");

mysqli_stmt_bind_param($stmt, 'ssss', $user, $email, $mobile, $comments);

mysqli_stmt_execute($stmt);

mysqli_stmt_close($stmt);

header('location:index.php');
