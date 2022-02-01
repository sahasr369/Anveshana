<?php

session_start();

if(!isset($_SESSION['loggedin']) || $_SESSION['loggedin']!=true){
  header ("location: login.php");
  exit;
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

    <link rel="stylesheet" href="styles.css">

    <title>Welcome - <?php echo $_SESSION['username'] ?></title>
</head>

<body>
    <?php require 'partials/nav.php' ?>
    <div class="container my-4">
        <div class="alert alert-success" role="alert">
            <h4 class="alert-heading">Welcome - <?php echo $_SESSION['username'] ?>!</h4>
            <p>Hey how are you doing? You are logged in as <?php echo $_SESSION['username'] ?> </p>
            <hr>
            <p class="mb-0">Whenever you need to, be sure to Logout <a href="/anveshana/logout.php"> using this
                    link.</a></p>
        </div>
    </div>
    <h1 class="hhead">Research and Extention Activities</h1>
    
    <div class="flex-container">

        <div class="flex-item card" style="width: 18rem;">
            <img src="image/modules.jpg" class="card-img-top" alt="...">
            <div class="card-body">
                <h3 class="fhead"><a href="basicdetails.php">Basic Details</a></h3>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's
                    content.</p>
            </div>
        </div>
    
        <div class="flex-item card" style="width: 18rem;">
            <img src="image/modules.jpg" class="card-img-top" alt="...">
            <div class="card-body">
                <h3 class="fhead"><a href="books&chap.php">Books and Chapters</a></h3>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's
                    content.</p>
            </div>
        </div>
    
        <div class="flex-item card" style="width: 18rem;">
            <img src="image/modules.jpg" class="card-img-top" alt="...">
            <div class="card-body">
                <h3 class="fhead"><a href="journalpublication.php">Journal Publications</a></h3>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's
                    content.</p>
            </div>
        </div>

    
        <div class="flex-item card" style="width: 18rem;">
            <img src="image/modules.jpg" class="card-img-top" alt="...">
            <div class="card-body">
                <h3 class="fhead"><a href="grants.php">Grants</a></h3>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's
                    content.</p>
            </div>
        </div>

        <div class="flex-item card" style="width: 18rem;">
            <img src="image/modules.jpg" class="card-img-top" alt="...">
            <div class="card-body">
                <h3 class="fhead"><a href="seminardetails.php">Seminar Details</a></h3>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's
                    content.</p>
            </div>
        </div>

        <div class="flex-item card" style="width: 18rem;">
            <img src="image/modules.jpg" class="card-img-top" alt="...">
            <div class="card-body">
                <h3 class="fhead"><a href="conference.php">Conference Details</a></h3>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's
                    content.</p>
            </div>
        </div>

        <!-- <div class="flex-item card" style="width: 18rem;">
            <img src="images/research.jpg" class="card-img-top" alt="...">
            <div class="card-body">
                <h1>Heading</h1>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's
                    content.</p>
            </div>
        </div>

        <div class="flex-item card" style="width: 18rem;">
            <img src="images/research.jpg" class="card-img-top" alt="...">
            <div class="card-body">
                <h1>Heading</h1>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's
                    content.</p>
            </div>
        </div> -->
    </div>

    <hr>
    <hr>
    <hr>





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

<?php require 'partials/footer.php' ?>

</html>