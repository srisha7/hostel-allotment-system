<?php
$login = false;
$showError = false;
if($_SERVER["REQUEST_METHOD"] == "POST"){
    include 'dbconnect.php';
    $username = $_POST["Name"];
    $ID = $_POST["Student_Id"]; 
    
     
    $sql = "Select * from student where Name='$username' AND Student_Id='$ID'";
    $result = mysqli_query($conn, $sql);
    if($result){
        if (mysqli_num_rows($result) == 1){
           $login = true;
           session_start();
           $_SESSION['loggedin'] = true;
           $_SESSION['Student_Id'] = $ID;
           header("location: s22.php");

        } 
        else{
        $showError = "Invalid Credentials";
        }
    }
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

    <title>Login</title>
    <style>
       *{
         margin: 0;
         padding: 0;
         outline: none;
         font-family: 'Poppins', sans-serif;
       }  
       body{
           display: flex;
           align-items: center;
          justify-content: center;
           min-height: 100vh;
           background: rgb(0, 0, 0);
       }  
       .bg{
           background-image: url(b.jpg);
           background-size: cover;
           
       }
       .image{
           height: 120px;
           width: 120px;
           border-radius: 60px;
          
           
       }
       .wrapper{
           width: 500px;
           height: 400px;
           background:rgb(207, 205, 223);
           padding:30px;
           box-shadow: 0px 0px 10px rgba(0,0,0,0.1);
       }
       .wrapper .input-data{
           height: 40px;
           width: 100px;
           position: relative;
       }
       .wrapper .input-data input{
          
           height: 100%;
           width: 200%;
           border: none;
           font-size: 15px;
           border-bottom: 2px solid rgb(20, 13, 20);
           background-color: rgb(207, 205, 223);
       }
       .input-data input:focus ~ label{
           transform: translateY(-20px);
       }
       .wrapper .input-data label{
           position: absolute;
           bottom: 10px;
           left: 0;
           color:rgb(4, 5, 63);
           pointer-events: none;

       }
       .btn{
           height: 35px;
           background-color: rgb(4, 5, 63);
           font-size: 15px;
           border: rgb(4 ,5, 63);
       }
    </style>
  </head>


  <body class="bg">

    
    <?php
    if($login){
    echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
        Success!You are logged in
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">×</span>
        </button>
    </div>' ;
    }
    if($showError){
     echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">
        <strong>Error!</strong> '. $showError.'
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">×</span>
        </button>
    </div>' ;
    }
    ?>
 

    <div class="wrapper ">
    <center>
          <img src="g.jpg" class="image"/>
    </center>
     <form action="s11.php" method="post">
        <div class="input-data">
            <label>Username</label><br>
            <input type="text" name="Name" required>
            
        </div><br><br>
        <div class="input-data">
            <label>ID</label><br>
            <input type="password" name="Student_Id" required>
        </div>
       <div><br><br>
         
        <button type="submit" class="btn btn-primary"  name="fetch_btn">Request for Hostel</button>
    </div>
     </form>
    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
  </body>
</html>
