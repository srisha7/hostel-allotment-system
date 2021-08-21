

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <title>Search data</title>
    <style>
        .bg{
            background-image: url(j.jpg);
           background-size: cover;
        }
        .btn{
            background-color: grey;
        }
        input{
               width: 35%;
               height:3%;
               border: 1px;
               border-radius:5px;
               padding: 8px 15px 8px 15px; 
               margin: 10px 0px 15px 0px;
               box-shadow: 1px 1px 2px 1px grey;

        }
    </style>
</head>
  <body>
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
    
  </div>
</nav>

<center>
    <form action="" method="POST">
        <input type="text" name="course" placeholder="Enter Course"/><br>
        <input type="text" name="year" placeholder="Enter Year"/><br>
        <input type="submit" class="btn" name="search" value="Search" /><br>
    </form>

    <table align="center" class="table table-striped table-bordered table-hover" style="width: 800px; line-height: 30px;" >
        <thead class="thead-dark">
            <tr>
            <th> student_id </th>
            <th> name </th>
            <th> year</th>
            <th> number </th>
            <th> gmail </th>  
            <th> course </th>  
            <th> branch</th>   
            <th> hostel_name</th>
            </tr>
        </thead>
       
        <?php
     include_once('dbconnect.php');
     
     if(isset($_POST['search']))
     {
         $course= $_POST['course'];
         $year= $_POST['year'];
         $query= "SELECT * FROM student WHERE course='$course' AND year='$year' ";
         $query_run= mysqli_query($conn,$query);
         
         while($row=mysqli_fetch_assoc($query_run))
            {
         ?>
               <tr>
                 <td><?php echo $row['Student_Id'];?></td>
                 <td><?php echo $row['Name'];?></td>
                 <td><?php echo $row['Year'];?></td>
                 <td><?php echo $row['Contact_No'];?></td>
                 <td><?php echo $row['Email'];?></td>
                 <td><?php echo $row['Course'];?></td>
                 <td><?php echo $row['Specialization'];?></td>
                 <td><?php echo $row['Hostel_Name'];?></td>
                 </tr>
             <?php
             }
             

    }
?>



    </table>
</center>   
</body>
</html>