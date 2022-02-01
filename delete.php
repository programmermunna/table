<?php
// ----------------connection
require_once("connection.php");

// -------------------show
$get_id = $_REQUEST["id"];
$delete = "DELETE FROM tbl WHERE id = $get_id";

$delete_query = mysqli_query($connect,$delete);

if($delete_query){
    header("location:index.php?deleted");
}else{
    echo "sorry";
}



















?>