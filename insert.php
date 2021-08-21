<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <title>Insert data</title>
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

<center>
    <form  method="POST">
        <input type="text" name="id" placeholder="Enter Id "/><br>
        <input type="text" name="name" placeholder="Enter Full name"/><br>
        <input type="text" name="year" placeholder="Enter Year"/><br>
        <input type="text" name="contact" placeholder="Enter Contact number"/><br>
        <input type="text" name="email" placeholder="Enter Email"/><br>
        <input type="text" name="course" placeholder="Enter Course"/><br>
        <input type="text" name="specialization" placeholder="Enter Specialization"/><br>
        <input type="text" name="cid" placeholder="Enter Course Id"/><br>
        <input type="submit" class="btn" href="_nav.php" name="insert" value="Insert Data" /><br>
        </form>    
</center>    
</body>
</html>

<?php
include_once('dbconnect.php');

if(isset($_POST['insert']))
{
    $id= $_POST['id'];
    $name= $_POST['name'];
    $year= $_POST['year'];
    $contact= $_POST['contact'];
    $email= $_POST['email'];
    $course= $_POST['course'];
    $specialization= $_POST['specialization'];
    $course_id= $_POST['cid'];
    $query = "INSERT INTO student(Student_Id,Name,Year,Contact_No,Email,Course,Specialization,Course_Id) VALUES('$id','$name','$year','$contact','$email','$course','$specialization','$course_id')";
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