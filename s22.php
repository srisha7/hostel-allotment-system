<?php
session_start();

if(!isset($_SESSION['loggedin']) || $_SESSION['loggedin']!=true){
    header("location: cwk/s11.php");
    exit;
}


?>
<?php
    include_once('dbconnect.php');
        $id=$_SESSION['Student_Id'];
       $query= "SELECT * FROM student WHERE Student_Id='$id' ";
       $query_run= mysqli_query($conn, $query);
       
       ?>


<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <title>Welcome</title>
    <style>
         body{
           display: flex;
           align-items: center;
          justify-content: center;
           min-height: 100vh;
         }
         .wrapper{
            width: 500px;
           height: 400px;;
           background:rgb(217, 211, 250);
           padding:30px;
           box-shadow: 0px 0px 10px rgba(0,0,0,0.1);
           border-radius: 7px;
         }
         .btn{
           color: white;
           height: 35px;
           width: 150px;
           border-radius:5px;
           background-color: rgb(19, 20, 83);
           font-size: 15px;
           border: rgb(182, 181, 185);
         }
         .wrapper .input-data{
           height: 30px;
           width: 50px;
           position: relative;
       }
       .wrapper .input-data input{
          
           height: 100%;
           width: 100%;
           border: none;
           font-size: 17px;
           border-bottom: 2px solid rgb(121, 111, 121);
           background-color:rgb(217, 211, 250);
       }
       .bg{
           background-image: url(r.jpg);
           background-size: cover;
           height:50px;
           width:500;
       }
      
    </style>
  
  </head>

  <body class="bg">
  <nav class="navbar fixed-top navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="#">Hostel Allotment System</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" href="/cwk/scomplain.php">Change Hostel</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="/cwk/logout.php">Logout</a>
      </li>
      
      <li class="nav-item">
        <a class="nav-link disabled" href="#">Banasthali Vidhyapith</a>
      </li>
    </ul>
  </div>
</nav>
  
<form>
<table class="wrapper">
<?php
  while($row = mysqli_fetch_array($query_run))
  {
      ?>
<tr class="input-data">
<td>STUDENT ID:</td>
<td><input type="text"name="Student_Id" value="<?php echo $row['Student_Id'];?>"></td>
</tr>
<tr class="input-data">
<td>NAME:</td>
<td><input type="text"name="Name"  value="<?php echo $row['Name'];?>" ></td>
</tr>
<tr class="input-data">
<td>YEAR:</td>
<td><input type="text"name="year" value="<?php echo $row['Year'];?>"></td>
</tr> 
<tr class="input-data">
<td>PHONE NUMBER:</td>
<td><input type="text"name="number" value="<?php echo $row['Contact_No'];?>"></td>
</tr>
<tr class="input-data">
<td>EMAIL:</td>
<td><input type="text"name="gmail" value="<?php echo $row['Email'];?>"></td>
</tr>
<tr class="input-data"r>
<td>COURSE:</td>
<td><input type="text"name="course" value="<?php echo $row['Course'];?>"></td>
</tr>
<tr class="input-data">
<td>SPECIALIZATION\BRANCH:</td>
<td><input type="text"name="branch" value="<?php echo $row['Specialization'];?>"></td>
</tr>
<tr class="input-data">
<td>HOSTEL:</td>
<td><input type="text"name="hostel_name" value="<?php echo $row['Hostel_Name'];?>"></td>
</tr><br>
<?php
  }
     ?> 
  <br>

 
</table>
</form>

 <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
  </body>
</html>