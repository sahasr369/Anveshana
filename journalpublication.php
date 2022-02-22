

<?php

if($_SERVER["REQUEST_METHOD"] == "POST"){
  include 'partials/dbconnect.php';
  $title = $_POST["title"];
  $authorname = $_POST["authorname"];
  $department = $_POST["department"];
  $journalname = $_POST["journalname"];
  $date = $_POST["date"];
  $issnno = $_POST["issnno"];
  $activitylink = $_POST["activitylink"];


  $sql = "INSERT INTO `journalpublications` (`title`, `authorname`, `department`, `journalname`, `date`, `issnno`, `activitylink`) 
  VALUES ('$title', '$authorname', '$department', '$journalname', '$date', '$issnno', '$activitylink')";
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


    <title>Journal Publication</title>
</head>

<body class="mb">

    <?php require 'partials/nav.php' ?>



    <h1 class="mhead">Journal Publication</h1>

    <form class="jpform" action="/anveshana/journalpublication.php" method="POST">
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label"><b>Title</b></label>
            <input type="text" class="form-control" id="title" name="title" aria-describedby="emailHelp">
            <div id="emailHelp" class="form-text"></div>
        </div>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label"><b>Author Name</b></label>
            <input type="text" class="form-control" id="authorname" name="authorname" aria-describedby="emailHelp">
            <div id="emailHelp" class="form-text"></div>
        </div>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label"><b>Department</b></label>
            <input type="text" class="form-control" id="department" name="department" aria-describedby="emailHelp">
            <div id="emailHelp" class="form-text"></div>
        </div>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label"><b>Journal Name</b></label>
            <input type="text" class="form-control" id="journalname" name="journalname" aria-describedby="emailHelp">
            <div id="emailHelp" class="form-text"></div>
        </div>

        <label for="birthday">date</label>
        <input type="date" id="date" name="date">

        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label"><b>ISSN Number</b></label>
            <input type="text" class="form-control" id="issnno" name="issnno">
        </div>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label"><b>Activity Link</b></label>
            <input type="text" class="form-control" id="activitylink" name="activitylink" aria-describedby="emailHelp">
            <div id="emailHelp" class="form-text"></div>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>

    <h2 class="reportline">Click <a href="jpreport.php">Here</a> to Generate the Report</h2>


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