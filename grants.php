<?php

if($_SERVER["REQUEST_METHOD"] == "POST"){
  include 'partials/dbconnect.php';
  $projectname = $_POST["projectname"];
  $piname = $_POST["piname"];
  $pidepartment = $_POST["pidepartment"];
  $yearofaward = $_POST["yearofaward"];
  $sanctionedamount = $_POST["sanctionedamount"];
  $fundingagency = $_POST["fundingagency"];
  $agency = $_POST["agency"];


  $sql = "INSERT INTO `grants` (`projectname`, `piname`, `pidepartment`, `yearofaward`, `sanctionedamount`, `fundingagency`, `agency`) 
  VALUES ('$projectname', '$piname', '$pidepartment', '$yearofaward', '$sanctionedamount', '$fundingagency', '$agency')";
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
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <link rel="stylesheet" href="style.css">


    <title>Grants</title>
  </head>
  <body class="mb">
  <?php require 'partials/nav.php' ?>

    <h1 class="mhead">Grants</h1>

    <form class="gform" action="/anveshana/grants.php" method="POST">
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Project Name</label>
            <input type="text" class="form-control" id="projectname" name="projectname" aria-describedby="emailHelp">
        </div>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">PI Name</label>
            <input type="text" class="form-control" id="piname" name="piname" aria-describedby="emailHelp">
        </div>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">PI Department</label>
            <input type="text" class="form-control" id="pidepartment" name="pidepartment" aria-describedby="emailHelp">
        </div>
        <label for="birthday">Year Of Award</label>
        <input type="date" id="yearofaward" name="yearofaward">
        <br>
        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Sanctioned Amount</label>
            <input type="text" class="form-control" id="sanctionedamount" name="sanctionedamount">
        </div>
        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Funding Agency</label>
            <input type="text" class="form-control" id="fundingagency" name="fundingagency">
        </div>
        <fieldset data-role="controlgroup">
            <!-- <legend>Govt / Non-Govt</legend> -->
            <label for="male">Govt</label>
            <input type="radio" name="agency" id="govt" value="govt" checked>
            <label for="female">Non-Govt</label>
            <input type="radio" name="agency" id="nongovt" value="nongovt">
        </fieldset>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>

    <h2 class="reportline">Click <a href="greport.php">Here</a> to Generate the Report</h2>


    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    -->
<?php require 'partials/footer.php' ?>

  </body>
</html>