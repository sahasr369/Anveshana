

<?php

if($_SERVER["REQUEST_METHOD"] == "POST"){
  include 'partials/dbconnect.php';
  $facultyname = $_POST["facultyname"];
  $title = $_POST["title"];
  $isbnno = $_POST["isbnno"];
  $publisher = $_POST["publisher"];


  $sql = "INSERT INTO `books&chapters` (`facultyname`, `title`, `isbnno`, `publisher`) VALUES ('$facultyname', '$title', '$isbnno', '$publisher')";
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

    <link rel="stylesheet" href="partials/style.css">


    <title>Books and Chapters</title>
  </head>
  <body>
  <?php require 'partials/nav.php' ?>

    <h1>Books and Chapters</h1>

    <form class="bcform" action="/anveshana/books&chap.php" method="POST">
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Faculty Name</label>
            <input type="text" class="form-control" id="facultyname" name="facultyname" aria-describedby="emailHelp">
            <div id="emailHelp" class="form-text"></div>
        </div>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Title</label>
            <input type="text" class="form-control" id="title" name="title" aria-describedby="emailHelp">
            <div id="emailHelp" class="form-text"></div>
        </div>
        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">ISBN Number</label>
            <input type="text" class="form-control" id="isbnno" name="isbnno">
        </div>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Publisher Name</label>
            <input type="text" class="form-control" id="publisher" name="publisher" aria-describedby="emailHelp">
            <div id="emailHelp" class="form-text"></div>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    -->
  </body>
</html>