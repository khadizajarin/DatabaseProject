<?php
  include('config/bd_connect.php');

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home Page</title>

    <!-- vanilla css -->
    <link rel="stylesheet" href="styles\homePageStyle.css">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">

    <!--- Font awesome Link --->
    <script src="https://kit.fontawesome.com/6ca93bf3c3.js" crossorigin="anonymous"></script>

</head>


<body style="font-family:Arial, Helvetica, sans-serif;">

    <!-- Header section starts -->
    <header>
        <!-- NAVIGATION BAR -->
        <nav class="navbar">
            <div>
                <a class="navbar-brand" href="#">
                    <img class="img-fluid" src="images\logos\artive4.jpeg" alt="Logo" width="95" height="35"
                        class="d-inline-block align-text-top">
                </a>
            </div>

            <div class="icons">
                <div class="fa-solid fa-magnifying-glass" id="search-btn"></div>
                <div class="fa-solid fa-cart-shopping" id="cart-btn"></div>
                <div class="fa-solid fa-user" id="user-btn"></div>
            </div>

            <div class="search-form">
                <input type="search" name="" id="search-box" placeholder="Search here...">
                <label for="search-box" class="fa-solid fa-magnifying-glass"></label>
            </div>

            <div class="cart-items-container">
                <div class="cart-item">

                </div>
            </div>
        </nav>
    </header>
    <!-- Header Section ends -->



    <!-- Main section starts -->
    <main class="mt-5 d-flex align-items-center justify-content-center">
      <!-- carousel items -->
      <div id="carouselExampleInterval" class="carousel slide col-md-6" data-bs-ride="carousel">
          <div class="carousel-inner row">
            <div class="carousel-item active text-center" data-bs-interval="9000">
              <img class="d-block w-100" src="background1.jpg"  alt="...">
            </div>
            <div class="carousel-item text-center" data-bs-interval="2000">
              <img src="images\backgrounds\slider2.jpeg" class="img-fluid d-block w-75 h-45" alt="...">
            </div>
            <div class="carousel-item text-center">
              <img src="images\backgrounds\slider3.jpeg" class="img-fluid d-block w-75 h-45" alt="...">
            </div>
          </div>
          <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleInterval" data-bs-slide="prev">
            <span class="carousel-control-prev-icon visually-hidden" aria-hidden="false"></span>
            <span class="visually-hidden">Previous</span>
          </button>
          <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleInterval" data-bs-slide="next">
            <span class="carousel-control-next-icon visually-hidden" aria-hidden="false"></span>
            <span class="visually-hidden">Next</span>
          </button>
      </div>
  </main>
  <!-- Main section ends -->



    <!-- Footer section starts -->
    <footer class="mt-5 bg-warning-subtle w-100 p-5">
        <div class="container text-center">
            <div class="row">
              <div class="col-4 ">
                <div>
                    <h3>Office address</h3>
                    <h5>Chittagong Univarsity, Chattagram <br>
                    Helpline: 01554280029
                    </h5>
                </div>
              </div>
              <div class="col-4">
                <h3>Useful Links</h3>
                <ul class=" ps-4 ms-3" style="list-style-type: none;">
                    <li><a style="color: black; text-decoration:none;" href="#">Blog</a></li>
                    <li><a style="color: black; text-decoration:none;" href="#">About us</a></li>
                    <li><a style="color: black;text-decoration: none;" href="#">Terms & Condition</a></li>
                    <li><a style="color: black; text-decoration: none;" href="#">Privacy Policy</a></li>
                </ul>
              </div>
              <div class="col-4">
                <h3>Follow Us</h3>
                <div class="d-flex align-items-center justify-content-center ">
                    <div class="fa-brands fa-facebook pe-3" id="facebook"></div>
                    <div class="fa-brands fa-twitter pe-3" id="twitter"></div>
                    <div class="fa-brands fa-instagram " id="instra"></div>
                </div>
              </div>
            </div>
          </div>
    </footer>
    <!-- Footer section ends -->




    <!-- Custom JS -->
    <script src="js/homePageScript.js"></script>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN"
        crossorigin="anonymous"></script>
</body>

</html>