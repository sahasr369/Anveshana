<?php

if($_SERVER["REQUEST_METHOD"] == "POST"){
  include 'partials/dbconnect.php';
  $authorname = $_POST["authorname"];
  $date = $_POST["date"];
  $conferencename = $_POST["conferencename"];
  $papertitle = $_POST["papertitle"];
  $proceedingtitle = $_POST["proceedingtitle"];
  $region = $_POST["region"];
  $issnno = $_POST["issnno"];
  $publishedyear = $_POST["publishedyear"];


  $sql = "INSERT INTO `conferencedetails` (`authorname`, `date`, `conferencename`, `papertitle`, `proceedingtitle`, `region`, `issnno`, `publishedyear`) 
  VALUES ('$authorname', '$date', '$conferencename', '$papertitle', '$proceedingtitle', '$region', '$issnno', '$publishedyear')";
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


    <title>Conference Details</title>
</head>

<body class="mb">
    <?php require 'partials/nav.php' ?>

    <h1 class="mhead">Conference Details</h1>

    <form class="cdform" action="/anveshana/conference.php" method="POST">
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Author Name</label>
            <input type="text" class="form-control" id="authorname" name="authorname" aria-describedby="emailHelp">
        </div>
        <label for="birthday">Date</label>
        <input type="date" id="date" name="date">
        <br>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Conference Name</label>
            <input type="text" class="form-control" id="conferencename" name="conferencename" aria-describedby="emailHelp">
        </div>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Paper Title</label>
            <input type="text" class="form-control" id="papertitle" name="papertitle" aria-describedby="emailHelp">
        </div>
        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Proceeding Title</label>
            <input type="text" class="form-control" id="proceedingtitle" name="proceedingtitle">
        </div>
        <fieldset data-role="controlgroup">
            <!-- <legend>Govt / Non-Govt</legend> -->
            <label for="male">National</label>
            <input type="radio" name="region" id="national" value="national" checked>
            <label for="female">International</label>
            <input type="radio" name="region" id="international" value="international">
        </fieldset>
        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">ISSN Number</label>
            <input type="text" class="form-control" id="issnno" name="issnno">
        </div>
        <div class="mb-3">
        <label for="birthday">Published Year</label>
        <input type="date" id="publishedyear" name="publishedyear">
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
    <h2 class="reportline">Click <a href="creport.php">Here</a> to Generate the Report</h2>


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