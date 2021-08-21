<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <title>Delete data</title>
    <style>
        
        .btn{
            background-color: skyblue;
        }
         input{
               width: 35%;
               height:5%;
               border: 1px;
               border-radius:5px;
               padding: 8px 15px 8px 15px; 
               margin: 10px 0px 15px 0px;
               box-shadow: 1px 1px 2px 1px skyblue;

         }
    </style>
</head>
<body class=bg>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <a class="navbar-brand" href="_nav.php"><<<</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>    
      <div class="navbar-collapse">
        <ul class="navbar-nav ml-auto">
      <li class="nav-item">
        <a class="nav-link" href="logout.php">Logout</a>
     </li>
    </ul>
    </div> 
</nav>
<br>
<br>
<center>
    <form action="" method="POST">
        <input type="text" name="id" placeholder="Enter Id to delete"/><br>
        <input type="submit" class="btn" name="delete" value="Delete Data" /><br>
        </form>    
</center>    
</body>
</html>


<?php
include 'dbconnect.php';
if(isset($_POST['delete']))
{
    $id= $_POST['id'];
    $query ="DELETE FROM student WHERE student_id='$id' ";
    $query_run = mysqli_query($conn, $query);

    if($query_run)
    {
        echo'<script type="text/javascript"> alert("Data Deleted") </script>';
    }
    else
    {
        echo'<script type="text/javascript"> alert("ERROR!") </script>';
    }
}



?>