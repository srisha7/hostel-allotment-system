
    <!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

   
  
  </head>
  <body class=bg>  
    <style>
         body{
           display: flex;
           align-items: center;
          justify-content: center;
           min-height: 100vh;
         }
         .wrapper{
           width: 450px;
           height: 250px;
           background:rgb(212, 209, 212);
           padding:30px;
           box-shadow: 1px 1px 4px 1px rgba(0,0,0,0.1);
           border-radius: 7px;
         }
         .btn{
           height: 35px;
           width: 150px;
           border-radius:5px;
           background-color: rgb(211, 102, 202);
           font-size: 15px;
           border: rgb(20,13,20);
           box-shadow: 1px 1px 4px 1px rgba(0,0,0,0.1);
         }
         .wrapper .input-data{
           height: 30px;
           width: 100%;
           position: relative;
       }
       .wrapper .input-data input{
          
           height: 100%;
           width: 100%;
           border: none;
           font-size: 17px;
           border-bottom: 2px solid rgb(121, 111, 121);
           background-color:rgb(212, 209, 212);
       }
       .input-data input:focus ~ label{
           transform: translateY(-20px);
       }
       .wrapper .input-data label{
           
           bottom: 10px;
           left: 0;
           color:rgb(20, 13, 20);
           pointer-events: none;
       }
       .bg{
           background-image: url(o.jpg);
           background-size: cover;
       }
    </style>
     <nav class="navbar fixed-top navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="#"></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav">
    <li class="nav-item">
    <a href="s22.php" class="previous" >&laquo; </a>
      </li>
      
      
      
    </ul>
  </div>
</nav>
    <form action="" method="POST">
        <table class="wrapper">
        <tr class="input-data">
        <td><label>STUDENT ID</label></td>
        <td><input type="text"name="student_id"></td>
        </tr><br>
        <tr class="input-data">
        <td><label>Reason for changing hostel</label></td>
        <td><input type="text"name="Description" style="height:70px"> </td>
        </tr><br><br>
        <tr>
        <td><button type="submit" name="insert" class="btn btn-primary">Submit</button></td>
        </tr>
        </tr>
    </table>
</form>
 <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
 
</body>
</html>
<?php
include_once('dbconnect.php');

if(isset($_POST['insert']))
{
    $id= $_POST['student_id'];
    $name= $_POST['Description'];
    $query = "INSERT INTO complain(student_id,description) VALUES('$id','$name')";
    $query_run= mysqli_query($conn,$query);

    if($query_run)
    {
        echo'<script> alert("Data Inserted") </script>';
    }
    else
    {
        echo'<script> alert("ERROR!") </script>';
    }
}


?>