<?php
// ----------------connection
require_once("connection.php");

// ----------------user form
$up_name = $_REQUEST["name"];
$up_email = $_REQUEST["email"];
$up_pass = $_REQUEST["pass"];
$up_file = $_FILES["up_file"];
$hidden_id = $_REQUEST["hidden_id"];


// ----------------insert
$update = "UPDATE tbl SET name='$up_name',email='$up_email',pass='$up_pass',file='$up_file' WHERE id=$hidden_id";
$update_query = mysqli_query($connect,$update);

if($update_query){
    header('location:index.php?edited');
}else{
    echo "not success";
}















?>