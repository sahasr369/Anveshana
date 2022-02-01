<?php


if($_SERVER["REQUEST_METHOD"] == "POST"){
  include 'partials/dbconnect.php';
  $name = $_POST["name"];
  $id = $_POST["id"];
  $email = $_POST["email"];
  $gender = $_POST["gender"];
  $designation = $_POST["designation"];


  $sql = "INSERT INTO `basicdetails` (`name`, `id`, `email`, `gender`, `designation`) VALUES ('$name', '$id', '$email', '$gender', '$designation')";
     $result = mysqli_query($conn, $sql);



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

    <link rel="stylesheet" href="style.css">

    <title>Basic Details</title>
</head>

<body class="mb">
    <?php require 'partials/nav.php' ?>
    <br>

    <h1 class="mhead">Basic Details</h1>
    <br>

    <form class="bdform" action="/anveshana/basicdetails.php" method="post">
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label"><b>Name</b></label>
            <input type="text" class="form-control" id="name" name="name" aria-describedby="emailHelp">
            <div id="emailHelp" class="form-text"></div>
        </div>
        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label"><b>ID</b></label>
            <input type="text" class="form-control" id="id" name="id">
        </div>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label"><b>Email address</b></label>
            <input type="email" class="form-control" id="email" name="email" aria-describedby="emailHelp">
            <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
        </div>
        <fieldset data-role="controlgroup">
            <legend><b>Choose your gender:</b></legend>
            <label for="male">Male</label>
            <input type="radio" name="gender" id="male" value="male" checked>
            <label for="female">Female</label>
            <input type="radio" name="gender" id="female" value="female">
        </fieldset>
        <br>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label"><b>Designation</b></label>
            <input type="text" class="form-control" id="designation" name="designation" aria-describedby="emailHelp">
            <div id="emailHelp" class="form-text"></div>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>

    <h2 class="reportline">Click <a href="bdreport.php">Here</a> to Generate the Report</h2>


    <!-- <button href="bdreport.php" type="button" class="btn btn-outline-success">Report</button> -->

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
<?php require 'partials/footer.php' ?>

</body>

</html>