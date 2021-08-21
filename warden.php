
<?php
include_once('dbconnect.php');
$query="Select * from warden";
$result=mysqli_query($conn,$query);
?>


<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

   
  
  </head>
  <body>
   
    <style>
  .previous {
  color: white;
}
    </style>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">

  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
    <li class="nav-item">
    <a href="_nav.php" class="previous" >&laquo; </a>
      </li>
     </ul>
  
  </div>
</nav>

    <br>
    <br>
    
    </style>
    <table  align="center" class="table table-striped table-bordered table-hover" style="width: 800px; line-height: 30px;" >
          <thead class="thead-dark">
            <tr>
            <th> Warden_id </th>
            <th> Name </th>
            <th> Hostel_name</th>
            <th> Contact </th>
            <th> Email </th>
           
                 
            </tr>
          </thead>
          <?php
           while($row=mysqli_fetch_assoc($result))
           {
          ?>
              <tr>
                <td><?php echo $row['Warden_Id'];?></td>
                <td><?php echo $row['Name'];?></td>
                <td><?php echo $row['Hostel_Name'];?></td>
                <td><?php echo $row['Contact_no'];?></td>
                <td><?php echo $row['Email'];?></td>
                
          <?php
           }
          ?>
            

    </table>


    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
  </body>
  </html>