<?php

$showAlert = false;
$showError = false;
if($_SERVER["REQUEST_METHOD"] == "POST"){
  include 'partials/dbconnect.php';
  $username = $_POST["username"];
  $password = $_POST["password"];
  $cpassword = $_POST["cpassword"]; 

  $existSql = "SELECT * FROM `users` WHERE username = '$username'";
   $result = mysqli_query($conn, $existSql);
   $numExistRows = mysqli_num_rows($result); 
  if($numExistRows > 0){
    //   $exists = true;
    $showError = "Username already exists";
  }
  else{
    //   $exists = false;
      
    //   $exists = false;
      if($password == $cpassword){
        $hash = password_hash($password, PASSWORD_DEFAULT);
        $sql = "INSERT INTO `users` (`username`, `password`, `dt`) VALUES ('$username', '$hash',
     current_timestamp())";
     $result = mysqli_query($conn, $sql);
     if($result){
         $showAlert = true;
        }
    }
    else{
        $showError = "Passwords do not match";
    }
}
}

?>

<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="partials/style.css">

    <title>SignUp</title>
</head>

<body>
    <?php require 'partials/nav.php' ?>

    <?php
    if($showAlert){
    echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
    <strong>Success!</strong> Your account is now created and you can Login.
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>';
    }
    if($showError){
    echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">
    <strong>Error!</strong> '. $showError .'
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>';
    }

    
    ?>


    <div class="container my-4">
        <h1 class="text-center">SignUp to our Website</h1>

        <form class="sform" action="/anveshana/signup.php" method="post">
            <div class="sfusername mb-3">
                <label for="username" class="form-label">Username</label>
                <input type="text" maxlength="15" class="form-control" id="username" name="username"
                    aria-describedby="emailHelp">
            </div>
            <!-- <div class="mb-3">
                <label for="password" class="form-label">Password</label>
                <input type="password" maxlength="11" class="form-control" id="password" name="password">
            </div> -->
            <br>
            <div class="row g-3 align-items-center">
                <div class="sfpassword col-auto">
                    <label for="inputPassword6" class="col-form-label">Password</label>
                </div>
                <div class="col-auto">
                    <input type="password" name="password" id="inputPassword6" class="form-control"
                        aria-describedby="passwordHelpInline">
                </div>
                <div class="col-auto">
                    <span id="passwordHelpInline" class="form-text">
                        Must be 8-20 characters long.
                    </span>
                </div>
            </div>
            <br>
            <div class="sfcpassword mb-3">
                <label for="cpassword" class="form-label">ConfirmPassword</label>
                <input type="password" class="form-control" id="cpassword" name="cpassword">
                <div id="emailHelp" class="form-text">Make sure you type the same password</div>
            </div>
            <button type="submit" class="sfbtn btn btn-primary">SignUp</button>
        </form>
    </div>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
    </script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    -->
</body>

</html>