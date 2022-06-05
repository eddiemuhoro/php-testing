<?php
    $host = "localhost";
    $user = "root";
    $pass = "";
    $db = "form";

$con = new mysqli($host, $user, $pass, $db);
if(!$con) {
    echo "There is an error";
}

$name =$_POST['name'];
$email = $_POST['email'];
$phone =$_POST['phone'];
$msg =$_POST['msg'];

$qry ="INSERT INTO `table`( `name`, `email`, `phone`, `msg`) VALUES ('$name', '$email', '$phone', '$msg')";

$insert = mysqli_query($con,$qry);
if (!$insert) {
    echo "some problems here!!";
}else{
    echo "All good!";
}
?>