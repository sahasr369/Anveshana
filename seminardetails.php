<?php

if($_SERVER["REQUEST_METHOD"] == "POST"){
  include 'partials/dbconnect.php';
  $date = $_POST["date"];
  $seminarname = $_POST["seminarname"];
  $participants = $_POST["participants"];
  $link = $_POST["link"];


  $sql = "INSERT INTO `seminardetails` (`date`, `seminarname`, `participants`, `link`) 
  VALUES ('$date', '$seminarname', '$participants', '$link')";
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


    <title>Seminar Details</title>
</head>

<body class="mb">
    <?php require 'partials/nav.php' ?>

    <h1 class="mhead">Seminar Details</h1>

    <form class="sdform" action="/anveshana/seminardetails.php" method="POST">
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label"><b>Seminar Name</b></label>
            <input type="text" class="form-control" id="seminarname" name="seminarname" aria-describedby="emailHelp">
        </div>
        <label for="birthday"><b>Date</b></label>
        <input type="date" id="date" name="date">
        <br>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label"><b>Number of Participants</b></label>
            <input type="text" class="form-control" id="participants" name="participants" aria-describedby="emailHelp">
        </div>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label"><b>Activity Link</b></label>
            <input type="text" class="form-control" id="link" name="link" aria-describedby="emailHelp">
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
    <h2 class="reportline">Click <a href="sdreport.php">Here</a> to Generate the Report</h2>


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