<?php
$login = false;
$showError = false;
if($_SERVER["REQUEST_METHOD"] == "POST"){
    include 'dbconnect.php';
    $username = $_POST["username"];
    $Password = $_POST["Password"]; 
    
     
    $sql = "Select * from login where Name='$username' AND password='$Password'";
    $result = mysqli_query($conn, $sql);
    if($result){
        if (mysqli_num_rows($result) == 1){
           $login = true;
           session_start();
           $_SESSION['loggedin'] = true;
           $_SESSION['username'] = $username;
           header("location: w2.php");

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
  </head>
  <body>
    
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
 <style>
       body{
    margin: 0 auto; background-image: url(d.jpg);
           background-size: cover;
           
    background-repeat: no-repeat;
  
       }
    .container{
    width: 320px;
    height: 420px;
    text-align: center;
    color: White;
    margin: 0 auto;
    background-color: rgba(44,62,80,0.7);
    border-radius: 04px;
    margin: 0 auto;
    margin-top: 90px;
}

.container img{
    width: 110px;
    height: 110px;
    margin-top: 10px;
    margin-right: 5px;
    text-align: center;
}


    </style>

    <div class="container ">
    <br>
     <h4 class="text-center"><i>Login</i></h4>
     <img src="f.png"/>
     <form action="/cwk/w1.php" method="post">
        <div class="form-group">
            <label for="username">Username</label>
            <input type="text" class="form-control" id="username" name="username" aria-describedby="emailHelp">
            
        </div>
        <div class="form-group">
            <label for="ID">Password</label>
            <input type="password" class="form-control" id="Password" name="Password">
        </div>
       
         
        <button type="submit" class="btn btn-primary" >Login</button>
     </form>
    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
  </body>
</html>
