<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">

    <title>admin home page</title>
    
  </head>
  <body>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <a class="navbar-brand" href="/cwk/partial"><i>Hostel Allotment System</i></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
    <li class="nav-item">
        <a class="nav-link disabled" href="#"><i>Banasthali Vidyapith</i></a>
      </li>
      <li class="nav-item ">
        <a class="nav-link" href="/cwk/admin.php">Admin Details <span class="sr-only"></span> </a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Details
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="/cwk/student.php">Student</a>
          <a class="dropdown-item" href="/cwk/admin_hd.php">Student previous hostel</a>
          <a class="dropdown-item" href="/cwk/warden.php">Warden</a>
          
        </div>
      </li>
      

      <li class="nav-item">
        <a class="nav-link" href="/cwk/complain.php">View Requests</a>
      </li>

      <li class="nav-item">
        <a class="nav-link" href="/cwk/availability.php">Room Availability</a>
      </li>

      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Updates
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="/cwk/insert.php">Insert</a>
          <a class="dropdown-item" href="/cwk/delete.php">Delete</a>
          <a class="dropdown-item" href="/cwk/update.php">Update</a>
        </div>
      </li>
      
      
      
       
      
  </ul>
  </div>
    
    <form class="form-inline my-2 my-lg-0" action="" method="post">
    <div class="row">
      
     
          <input class="form-control mr-sm-1" type="search" placeholder="Search" name="get_id" aria-label="Search">
      
           <button class="btn btn-outline-success my-1 my-sm-0" type="submit" name="fetch_btn">Search</button>
    </div>  
    </form>
      
      <div class="navbar-collapse">
    <ul class="navbar-nav ml-auto">
    <li class="nav-item">
        <a class="nav-link" href="/cwk/logout.php">Logout</a>
      </li>
      
      </ul>
      </div>
  </nav>
<div class="col-md-5">
  <div class="card-body">
  <?php
                       
                       include_once('dbconnect.php');
                       if(isset($_POST['fetch_btn'])) 
                       {
                           $id= $_POST['get_id'];
                           $query= "SELECT * FROM student WHERE Student_Id='$id' ";
                           $query_run= mysqli_query($conn, $query);
                           while($row = mysqli_fetch_array($query_run))
                           {
                               ?>
                            <div class="form-group">
                            <label>Student ID</label>
                            <input type="text" name="get_id" class="form-control" value="<?php echo $row['Student_Id'];?>" required><br>
                            </div>
                            <div class="form-group">
                            <label>Name</label>
                             <input type="text" name="get_id" class="form-control" value="<?php echo $row['Name'];?>" required><br>
                            </div>
                            <div class="form-group">
                             <label>Year</label>
                            <input type="text" name="get_id" class="form-control" value="<?php echo $row['Year'];?>" required><br>
                            </div>
                            <div class="form-group">
                             <label>Contact </label>
                            <input type="text" name="get_id" class="form-control" value="<?php echo $row['Contact_no'];?>" required><br>
                            </div>
                            <div class="form-group">
                             <label>Email ID</label>
                            <input type="text" name="get_id" class="form-control" value="<?php echo $row['Email'];?>" required><br>
                            </div>
                            <div class="form-group">
                            <label>Course</label>
                            <input type="text" name="get_id" class="form-control" value="<?php echo $row['Course'];?>" required><br>
                            </div>
                            <div class="form-group">
                            <label>Specialization</label>
                            <input type="text" name="get_id" class="form-control" value="<?php echo $row['Specialization'];?>" required><br>
                            </div> 
                            <div class="form-group">
                            <label>Course_id</label>
                            <input type="text" name="get_id" class="form-control" value="<?php echo $row['Course_Id'];?>" required><br>
                            </div>
                               <?php
                           }
                       }  


                    ?> 
                         
          
      </div>
  </div>
  <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
   
  </body>
  </html>

