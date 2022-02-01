<?php
// ----------------connection
require_once("connection.php");

// ----------------user form
$u_name = $_REQUEST["name"];
$u_email = $_REQUEST["email"];
$u_pass = $_REQUEST["pass"];
$u_file = $_FILES["file"];

// ----------------move_uploaded_file
$pro_name = ($u_file["name"]);
$pro_tmp =  ($u_file["tmp_name"]);

move_uploaded_file($pro_tmp,"img/$pro_name");


// ----------------insert
$insert = "INSERT INTO tbl(name,email,pass,file)VALUES('$u_name','$u_email','$u_pass','$pro_name')";
$insert_query = mysqli_query($connect,$insert);

if($insert_query){
    header('location:index.php');
}else{
    echo "not success";
}


















?>