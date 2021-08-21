<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <title>Update data</title>
    <style>
        .bg{
            background-image: url(j.jpg);
           background-size: cover;
        }
        .btn{
            background-color: skyblue;
        }
        input{
               width: 35%;
               height:3%;
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
        <a class="nav-link" href="course.php">Course</a>
        
     </li>
      <li class="nav-item">
        <a class="nav-link" href="logout.php">Logout</a>
     </li>
    </ul>
    </div> 
</nav>
<br>

<center>
    <form action="" method="POST">
        
        <input type="text" name="id" placeholder="Enter Id to Update"><br>
        <input type="submit" class="btn" name="delete" value="Search" /><br>
        
        
        </form>    
</center>    
</body>
</html>
<?php
include_once('dbconnect.php');

if(isset($_POST['delete']))
{
  $id= $_POST['id'];
  $query= "SELECT student_id,hostel_name,Year,Changed_H FROM student WHERE student_id='$id' ";
  $query_run= mysqli_query($conn, $query);
  while($row = mysqli_fetch_array($query_run))
  {
      ?>
      <center>
      <form action="" method="POST">
      <input type="text" name="get_id" value="<?php echo $row['student_id'];?>"/><br>
      <input type="text" name="name" value="<?php echo $row['hostel_name'];?>"/> <br>
      <input type="text" name="year" value="<?php echo $row['Year'];?>"/> <br>
      <input type="text" name="changename" value="<?php echo $row['Changed_H'];?>"/> <br>
      <input type="submit" class="btnregister" name="insert" value="Update Data" /><br>
      


      </form>
      </center>
   <?php
  }
}  

                    ?>
<?php
include_once('dbconnect.php');

if(isset($_POST['insert']))
{
  $id= $_POST['get_id'];
  $query= "UPDATE  student SET hostel_name='$_POST[name]', Year='$_POST[year]',Changed_H='$_POST[changename]'where student_id='$id' ";
  
  $query_run= mysqli_query($conn, $query);
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
  