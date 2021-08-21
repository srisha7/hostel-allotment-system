<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">

    <title>second page</title>
    <style>
      .bg{
          background-image: url(d.jpg);
         background-size: cover;
      }
      .btn{
          background-color: grey;
      }
       input{
             width: 35%;
             height:5%;
             border: 1px;
             border-radius:5px;
             padding: 8px 15px 8px 15px; 
             margin: 10px 0px 15px 0px;
             box-shadow: 1px 1px 2px 1px grey;

       }
  </style>
  </head>
  <body class="bg">

  <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <a class="navbar-brand" href="#">Hostel Allotment System</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">

    <ul class="navbar-nav mr-auto">

        <li class="nav-item">
          <a class="nav-link disabled" href="#">Banasthali Vidyapith</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="w2.php"> Search</a>
        </li>
        
        
        <ul class="navbar-nav ml-auto">
            <li class="nav-item">
                <a class="nav-link" href="logout.php">Logout</a>
            </li>
        </ul>
    </ul>
    </div>

  </nav>
 
  <center>
    <form action="w3.php" method="POST">
        <input type="text" name="Hostel_Name" placeholder="Enter Hostel Name "/><br>
        <input type="text" name="Total_no_of_seats" placeholder="Enter Total no of seats"/><br>
        <input type="text" name="Available_seats" placeholder="Enter no of Available seats"/><br>
        <input type="submit" class="btn" name="update" value="Update Data" /><br>
        </form>    
</center>   
</body>
</html>


<?php

include 'dbconnect.php';

 if(isset($_POST['update']))
 {
   $Hostel_Name= $_POST['Hostel_Name'];
      
   $query= "UPDATE  hostel SET Total_no_of_seats='$_POST[Total_no_of_seats]',Available_seats='$_POST[Available_seats]' where Hostel_Name='$_POST[Hostel_Name]' ";
   $query_run= mysqli_query($conn,$query);

    if($query_run)
    {
      echo'<script> alert("Data Updated") </script>';
    }
    else
    {
      echo'<script> alert("ERROR!") </script>';
    }
  }

?>