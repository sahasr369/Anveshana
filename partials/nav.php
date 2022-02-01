<?php

if(isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true){
  $loggedin = true;
}
else{
  $loggedin = false;
}

echo '<nav class="navbar navbar-expand-lg">
  <div class="container-fluid">
    <a class="navname navbar-brand" href="/Anveshana"><img class="logo" src="clogo.png" alt="Anveshana"></a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="navname nav-link active" aria-current="page" href="/anveshana/home.php">Home</a>
        </li>';

        if(!$loggedin){
          echo'<li class="nav-item">
            <a class="navname nav-link" href="/anveshana/signup.php">SignUp</a>
          </li>
          <li class="nav-item">
            <a class="navname nav-link" href="/anveshana/login.php">Login</a>
          </li>';
        }

        if($loggedin){
        echo '<li class="nav-item">
          <a class="navname nav-link" href="/anveshana/logout.php">Logout</a>
        </li>';
        }

       echo '</ul>
      <form class="d-flex">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success" type="submit">Search</button>
      </form> 
    </div>
  </div>
</nav>';

?>