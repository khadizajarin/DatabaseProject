<?php  



?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Project TCP</title>

  <!-- vanilla css -->
  <style>
    html {
      overflow-x: hidden;
      overflow-y: hidden;
      scroll-padding-top: 9rem;
      scroll-behavior: smooth;
    }
  </style>

  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">

  <!--- Font awesome Link --->
  <script src="https://kit.fontawesome.com/6ca93bf3c3.js" crossorigin="anonymous"></script>

</head>

<body style="font-family:Arial, Helvetica, sans-serif;" 

  <header>

    <!-- NAVIGATION BAR -->
    <nav class="navbar navbar-expand-lg  bg-light">
      <div class="container-fluid">
        <a class="navbar-brand" href="#">
          <img class="img-fluid" src="images\logos\artive4.jpeg" alt="Logo" width="95" height="35"
            class="d-inline-block align-text-top">

        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDarkDropdown"
          aria-controls="navbarNavDarkDropdown" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse justify-content-end" id="navbarNavDarkDropdown">
          <ul class="navbar-nav">
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                aria-expanded="false">
                About us
              </a>
              <ul class="dropdown-menu dropdown-menu-dark px-1">
                <li>
                  <h5>Developers:</h5>
                <li>Khadiza Jarin : Developer
                </li>
                <li>Saima Amin : <br> Front-end <br> Developer</li>
                <li>Suraia Tabassum : Database Developer</li>
            </li>
          </ul>
          </li>
          </ul>
        </div>
      </div>
    </nav>

    <!-- BANNER SECTION -->
    <section class="d-flex flex-column justify-content-center align-items-center"
      style="background-image:linear-gradient(rgba(146, 131, 131, 0.5),rgba(146, 131, 131, 0.5)), url(background3.jpg); height: 100vh;width: 100%; background-size: cover;width: 100%;  background-position: center;">
      <h1 class="fw-bold text-dark" style="font-size: 80px;">
        ArTive</h1>

      <div class="py-3 px-5 mb-2 bg-transparent border border-dark rounded-4">
        <a class="text-decoration-none text-dark" style="padding: 70px;" href="buyerFormPage.php">
          Login as a Buyer
        </a>
      </div>


      <div class="btn-group dropend py-3 px-5 mb-2 bg-transparent border border-dark rounded-4">
        <a class="text-decoration-none text-dark" style="padding: 0 60px;" href="#">
          Login as a Seller
        </a>
        <div class=" dropdown-toggle dropdown-toggle-split" data-bs-toggle="dropdown" aria-expanded="false">
          <span class="visually-hidden">Toggle Dropend</span>
        </div>
        <ul class="dropdown-menu dropdown-menu-dark">
          <li><a class="dropdown-item" href="sellerLoginPage.php">Log in</a></li>
          <li><a class="dropdown-item" href="sellerFormPage.php">Create New Account</a></li>
        </ul>
      </div>


      <!-- <div class="py-3 px-5 mb-2 bg-transparent border border-dark rounded-4">
                <a class="text-decoration-none text-dark" style="padding: 70px;" href="#">
                   Login as a Seller
                   <div>
                     Dropdown menu links
                    <ul class="dropdown-menu dropdown-menu-dark">
                      <li><a class="dropdown-item" href="#">Log in</a></li>
                      <li><a class="dropdown-item" href="#">Create New Account</a></li>
                      
                    </ul>
                  </div>
                </a>
            </div> -->

    </section>

  </header>




  <!-- Bootstrap JS -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN"
    crossorigin="anonymous"></script>
</body>

</html>