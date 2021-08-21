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
            background-image: url(l.jpg);
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
    
  </div>
</nav>

<center>
    <form action="" method="POST">
        <input type="text" name="Student_Id" placeholder="Enter Student ID"/><br>
        <input type="submit" class="btn" name="search" value="Search" /><br><br>
    </form>

    <table align="center" class="table table-striped table-bordered table-hover" style="width: 800px; line-height: 30px;" >
        <thead class="thead-dark">
            <tr>
            <th> Student ID </th>
            <th> Student Name </th>
            <th> Previous Hostel Name</th>
            <th> Current Hostel Name </th>
            <th> Date of Changing </th>    
            </tr>
        </thead>
        <?php
             $connection=mysqli_connect("localhost", "root", "");
             $db= mysqli_select_db($connection,'adminlogin');
             
             if(isset($_POST['search']))
             {
                 $id= $_POST['Student_Id'];
                 $query= "SELECT * FROM student WHERE Student_Id='$id' ";
                 $query_run= mysqli_query($connection,$query);
                while($row=mysqli_fetch_assoc($query_run))
                {
        ?>
                    <tr>
                <td><?php echo $row['Student_Id'];?></td>
                <td><?php echo $row['Name'];?></td>
                <td><?php echo $row['Hostel_Name'];?></td>
                <td><?php echo $row['Changed_H'];?></td>
                <td><?php echo $row['DOC'];?></td>
                
            <?php
            }
        }
        ?>
            

    </table>
</center>   
</body>
</html>