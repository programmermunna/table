<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <title>Hello, world!</title>
  </head>
  <body>
  <div class="container my-5">


<?php
// ----------------connection
require_once("connection.php");

// --------------------update
if(isset($_REQUEST["id"])){
    $e_id = $_REQUEST["id"];
}

$e_select = "SELECT * FROM tbl WHERE id=$e_id";
$e_select_query = mysqli_query($connect,$e_select);

while($e = mysqli_fetch_array($e_select_query)){
    $e_name = $e["name"];
    $e_email = $e["email"];
    $e_pass = $e["pass"];
    $e_file = $e["file"];
?>
    <section class="my-5 from_sec p-5 text-white bg-dark" >
     <form action="update_query.php" method="POST" enctype="multipart/form-data">
        User Name:
        <input type="text" name="name" value="<?php echo $e_name?>">
        User Email:
        <input type="email" name="email" value="<?php echo $e_email?>">
        User Password:
        <input type="password" name="pass" value="<?php echo $e_pass?>">

        <input type="file" name="up_file" value="<?php echo $e_file?>">

        <input type="hidden" name="hidden_id" value="<?php echo $e_id?>">

        <input class="sbmt" type="submit" name="submit" value="submit">
     </form>
    </section>

<?php




}

?>


    
</div>

     













  



    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>
