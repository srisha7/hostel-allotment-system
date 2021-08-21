<?php
session_start();

if(!isset($_SESSION['loggedin']) || $_SESSION['loggedin']!=true){
    header("location: cwk/s1.php");
    exit;
}


?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <title>Welcome - <?php $_SESSION['username']?></title>
  
  
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
        <a class="nav-link disabled" ><i>Banasthali Vidyapith</i></a>
      </li>
      <li class="nav-item active ">
        <a class="nav-link" href="#">Home <span class="sr-only">(current)</span> </a>
      </li>
     


      <li class="nav-item">
        <a class="nav-link" href="scomplain.php"> Request Change Hostel</a>
      </li>
      

      <li class="nav-item">
        <a class="nav-link" href="/cwk/logout.php">Logout</a>
      </li>
      </ul>
  </div>
</nav>
Welcome - <?php echo $_SESSION['username']?>
  
<form>
<table class="wrapper">
<?php
  while($row = mysqli_fetch_array($query_run))
  {
      ?>
<tr class="input-data">
<td>STUDENT ID:</td>
<td><input type="text"name="student_id" value="<?php echo $row['student_id'];?>"></td>
</tr>
<tr class="input-data">
<td>NAME:</td>
<td><input type="text"name="Name"  value="<?php echo $row['name'];?>" ></td>
</tr>
<tr class="input-data">
<td>YEAR:</td>
<td><input type="text"name="year" value="<?php echo $row['year'];?>"></td>
</tr> 
<tr class="input-data">
<td>PHONE NUMBER:</td>
<td><input type="text"name="number" value="<?php echo $row['number'];?>"></td>
</tr>
<tr class="input-data">
<td>EMAIL:</td>
<td><input type="text"name="gmail" value="<?php echo $row['gmail'];?>"></td>
</tr>
<tr class="input-data"r>
<td>COUSRE:</td>
<td><input type="text"name="course" value="<?php echo $row['course'];?>"></td>
</tr>
<tr class="input-data">
<td>SPECIALIZATION\BRANCH:</td>
<td><input type="text"name="branch" value="<?php echo $row['branch'];?>"></td>
</tr>
<tr class="input-data">
<td>HOSTEL:</td>
<td><input type="text"name="hostel_name" value="<?php echo $row['hostel_name'];?>"></td>
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
