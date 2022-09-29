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
  <div class="container-fluid text-center my-5">
<!-- -------------------------------form_start -->
    <!--     -------------------------- -->
    <section class="my-5 from_sec p-5 text-white bg-dark" >
     <form action="action.php" method="POST" enctype="multipart/form-data">
        <input type="text" name="name" placeholder="Enter your Name">
        <input type="email" name="email" placeholder="Enter your Email">
        <input type="password" name="pass" placeholder="Enter your Password">
        <input type="file" name="file" >

        <input class="sbmt" type="submit" name="submit" value="submit">
     </form>
    </section>
<!-- -------------------------table_start -->
    <table class="table table-striped table-dark">
    <thead>
        <tr>
        <th scope="col">Count</th>
        <th scope="col">ID</th>
        <th scope="col">Profile</th>
        <th scope="col">Name</th>
        <th scope="col">Email</th>
        <th scope="col">Password</th>
        <th scope="col">Action</th>
        </tr>
    </thead>
    <tbody>
        <?php
        if(isset($_REQUEST['deleted'])){
            echo "<font color='red'>has been deleted.</font>";
        }elseif(isset($_REQUEST['edited'])){
            echo "<font color='green'>has been edited.</font>";
        }
        // ----------------connection
        require_once("connection.php");

        // -------------------show
        $select = "SELECT * FROM tbl";
        $select_query = mysqli_query($connect,$select);

        if($select_query){
            $count=0;
            while($i = mysqli_fetch_array($select_query)){
                $db_id = $i['id'];
                $db_file = $i['file'];
                $db_name = $i['name'];
                $db_email=  $i['email'];
                $db_pass = $i['pass'];
                $count++;
        
        ?>
        <tr>
        <td><?php echo $count ?></td>
        <td><?php echo $db_id ?></td>
        <td><img class="pro_img" src="img/<?php echo "$db_file"?>"></td>
        <td><?php echo $db_name ?></td>
        <td><?php echo $db_email ?></td>
        <td><?php echo $db_pass ?></td>
        <td><a class="text-white" href="update_form.php?id=<?php echo $db_id ?>">Edit</a> || <a class="text-white" href="delete.php?id=<?php echo $db_id ?>">Delete</a></td>
        </tr>

        <?php
            }
        }

        ?>

    </tbody>
    </table>


</div>















  



    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>
