<?php
  include('config/bd_connect.php');
  session_start();
  $fname =$lname= $mobile1= $mobile2= $email= $password = $address1 = $address2 = $city =' ';
  $errors = array("fname"=> ' ','lname'=> ' ','mobile1'=> ' ',' mobile2'=> ' ', 'email'=> ' ','password'=>' ', 'address1'=> ' ', 'address2'=> ' ', 'city'=> ' ');
  $sql = "SELECT fname,lname, mobile1, email, address1, address2 FROM seller WHERE email='" . $_SESSION['email']  . "' and password = '". $_SESSION['password'] ."'";
  $result = mysqli_query($conn,$sql);

  
  //fetch the resulting rows as an array
  $sellers = mysqli_fetch_all($result, MYSQLI_ASSOC);

 // mysqli_free_result($result);
 // mysqli_close($conn);
  
  
    //getting all values from the HTML form
    if($_SERVER["REQUEST_METHOD"] == "POST"){
        $prdname = $_POST['prdname'];
        $prdprice = $_POST['prdprice'];
        $prdstatus = $_POST['prdstatus'];
        $prdimage = $_POST['prdimage'];
        include('config/bd_connect.php');
        if(!empty($prdname)){
          $sql1 = "INSERT INTO product( prdname,	prdprice, prdstatus) VALUES ( '$prdname','$prdprice' ,'$prdstatus')";
          $res=mysqli_query($conn,$sql1);
          //$user=mysqli_fetch_assoc($result);
          header("Location:homepage.php"); 
          //mysqli_free_result($result);            
           
          // close connection
          //mysqli_close($conn);
          
      }
  }
  

    $sqlp = 'SELECT * FROM product';
    $rs = mysqli_query($conn, $sqlp);
    $products = mysqli_fetch_all($rs, MYSQLI_ASSOC);

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

    <!-- Tailwind css -->
    <script src="https://cdn.tailwindcss.com"></script>
    

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

            <div class="float-end icons">
                <div class="fa-solid fa-magnifying-glass" id="search-btn"></div>
                <div class="fa-solid fa-cart-shopping" id="cart-btn"></div>
                <div class="fa-solid fa-user" id="user-btn"></div>
            </div>

            <div class="search-form">
                <input type="search" name="" id="search-box" placeholder="Search here...">
                <label for="search-box" class="fa-solid fa-magnifying-glass"></label>
            </div>

            <!-- CartItems -->
            <div class="cart-items-container">
                <div class="cart-item">

                </div>
            </div>

            <!-- Profile For Seller -->
            <div class="seller-profile-container">
              <div>
                <form action="" method="post">
                  <table class="table table-hover">
                      <tr><td colspan="2">
                        <h2 class="display-5"><strong>Profile</strong></h2>
                      </td></tr>
                      <tr>
                        <th>Name</th>
                        <td>
                          <!-- <input type="text" class="form-control" name="" id="" placeholder=""> -->
                          <?php foreach($sellers as $seller){?>
                            <?php echo $seller["fname"]. " ". $seller["lname"]; ?>
                            <?php } ?>
                        </td>
                      </tr>
                      <tr>
                        <th><span><i class="fa-solid fa-phone"></i></span> Contact Number</th>
                        <td>
                          <!-- <input type="text" class="form-control" name="" id="" placeholder=""> -->
                          <?php foreach($sellers as $seller){?>
                            <?php echo $seller["mobile1"]; ?>
                            <?php } ?>
                        </td>
                      </tr>
                      <tr>
                        <th><span><i class="fa-solid fa-envelope"></i></span> Email</th>
                        <td>
                          <!-- <input type="email" class="form-control" name="" id="" placeholder=""> -->
                          <?php foreach($sellers as $seller){?>
                            <?php echo $seller["email"]; ?>
                            <?php } ?>
                        </td>
                      </tr>
                      <tr>
                        <th>Address</th>
                        <td>
                          <!-- <input type="text" class="form-control" name="" id="" placeholder=""> -->
                          <?php foreach($sellers as $seller){?>
                            <?php echo $seller["address1"]. ",". $seller["address2"]; ?>
                            <?php } ?>
                        </td>
                      </tr>
                    </table>
                </form>

                <div class="me-sm-3 my-2">
                   <form class="row" action="">
                    <h2 class="display-5"><strong>Product Info:</strong></h2>
                      <div class="text-center">
                        <div class="d-flex align-items-center justify-content-center mb-0">
                          <img id="profile-img" class="js-image img-fluid rounded-lg" src="profile2.jpg" alt="">
                        </div>
                          <div class=" mx-auto w-50">
                              <label for="formFile" class="form-label"></label>
                              <input onchange="displayImage(this.files[0])" class="form-control" type="file" id="formFile">
                          </div>
                      </div>
                      <div class="col-12">
                          <label for="inputEmail4" class="form-label mb-0">Product Name</label>
                          <input type="text" class="form-control" placeholder="" aria-label="Product Name" name = "prdname"
                          style="background:transparent ; border: 2px solid; border-color: black; border-radius: 18px;" required>
                      </div>
                      <div class="col-12 col-md-6">
                          <label for="inputEmail4" class="form-label mb-0">Product Price</label>
                          <input type="text" class="form-control" placeholder="" aria-label="" name = "prdprice"
                          style="background:transparent ; border: 2px solid; border-color: black; border-radius: 18px;" required>
                      </div>
                      <div class="col-12 col-md-6">
                          <label for="inputEmail4" class="form-label mb-0">Product Status</label> 
                          <input type="tel" class="form-control" id="prdstatus" name = "prdstatus"
                          style="background:transparent ; border: 2px solid; border-color: black; border-radius: 18px;">
                      </div>
                      <div class="text-center">
                        <button class="btn btn-outline-dark border-opacity-75  border border-dark px-4 py-2 my-2 rounded-lg h3"> Upload New Item</a></button>
                      </div>
                    </form>
                </div>

                       

                <div class="text-center">
                    <button class="btn btn-outline-dark border-opacity-75  border border-dark px-4 py-2 mb-2 rounded-lg h3"><a href="logout.php" class="href">LogOut <span><i class="fa-solid fa-right-from-bracket"></i></a></span></button><br>
                    <!-- <button id="add-to-homapage" class="btn btn-outline-dark border-opacity-75  border border-dark px-4 py-2 mb-2 rounded-lg h3">Add to Homapage</button> -->
                </div>

              </div>
          </div>
                          
                      


            <!-- Profile For Buyer -->
            







        </nav>
    </header>
    <!-- Header Section ends -->



    <!-- Main section starts -->
    <main class="text-center">
      <!-- carousel items -->
      <section class=" d-flex align-items-center justify-content-center">
        <div id="carouselExampleInterval" class="carousel slide col-md-6" data-bs-ride="carousel">
            <div class="carousel-inner row">
              <div class="carousel-item active text-center" data-bs-interval="9000">
                <img class="d-block w-100" src="background1.jpg"  alt="...">
              </div>
              <div class="carousel-item text-center" data-bs-interval="2000">
                <img src="slider2.png" class="img-fluid d-block w-75 h-45" alt="...">
              </div>
              <div class="carousel-item text-center">
                <img src="slider3.png" class="img-fluid d-block w-75 h-45" alt="...">
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
        </section>
      </main>





        
        
      <!-- Card Section Starts -->
      <section class="text-gray-600 body-font">
  <div class="container px-5 py-24 mx-auto">
    <div class="flex flex-wrap -m-4">
      <div class="p-4 md:w-1/3">
        <div class="h-full rounded-xl shadow-cla-blue bg-gradient-to-r from-indigo-50 to-blue-50 overflow-hidden">
          <img class="lg:h-48 md:h-36 w-full object-cover object-center scale-110 transition-all duration-400 hover:scale-100" src="https://images.unsplash.com/photo-1618172193622-ae2d025f4032?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1064&q=80" alt="blog">
          <div class="p-6">
            <h2 class="tracking-widest text-xs title-font font-medium text-gray-400 mb-1">CATEGORY-1</h2>
            <h1 class="title-font text-lg font-medium text-gray-600 mb-3">The Catalyzer</h1>
            <p class="leading-relaxed mb-3">Photo booth fam kinfolk cold-pressed sriracha leggings jianbing microdosing tousled waistcoat.</p>
            <div class="flex items-center flex-wrap ">
              <button class="bg-gradient-to-r from-cyan-400 to-blue-400 hover:scale-105 drop-shadow-md  shadow-cla-blue px-4 py-1 rounded-lg">Learn more</button>
             
            </div>
          </div>
        </div>
      </div>
      <div class="p-4 md:w-1/3">
          <div class="h-full rounded-xl shadow-cla-violate bg-gradient-to-r from-pink-50 to-red-50 overflow-hidden">
            <img class="lg:h-48 md:h-36 w-full object-cover object-center scale-110 transition-all duration-400 hover:scale-100" src="https://images.unsplash.com/photo-1624628639856-100bf817fd35?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxzZWFyY2h8MXx8M2QlMjBpbWFnZXxlbnwwfHwwfHw%3D&auto=format&fit=crop&w=600&q=60" alt="blog">
            <div class="p-6">
              <h2 class="tracking-widest text-xs title-font font-medium text-gray-400 mb-1">CATEGORY-1</h2>
              <h1 class="title-font text-lg font-medium text-gray-600 mb-3">The Catalyzer</h1>
              <p class="leading-relaxed mb-3">Photo booth fam kinfolk cold-pressed sriracha leggings jianbing microdosing tousled waistcoat.</p>
              <div class="flex items-center flex-wrap ">
                <button class="bg-gradient-to-r from-orange-300 to-amber-400 hover:scale-105 drop-shadow-md shadow-cla-violate px-4 py-1 rounded-lg">Learn more</button>
               
              </div>
            </div>
          </div>
        </div>
        <div class="p-4 md:w-1/3">
          <div class="h-full rounded-xl shadow-cla-pink bg-gradient-to-r from-fuchsia-50 to-pink-50 overflow-hidden">
            <img class="lg:h-48 md:h-36 w-full object-cover object-center scale-110 transition-all duration-400 hover:scale-100" src="https://images.unsplash.com/photo-1631700611307-37dbcb89ef7e?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1yZWxhdGVkfDIwfHx8ZW58MHx8fHw%3D&auto=format&fit=crop&w=600&q=60" alt="blog">
            <div class="p-6">
              <h2 class="tracking-widest text-xs title-font font-medium text-gray-400 mb-1">CATEGORY-1</h2>
              <h1 class="title-font text-lg font-medium text-gray-600 mb-3">The Catalyzer</h1>
              <p class="leading-relaxed mb-3">Photo booth fam kinfolk cold-pressed sriracha leggings jianbing microdosing tousled waistcoat.</p>
              <div class="flex items-center flex-wrap ">
                <button class="bg-gradient-to-r from-fuchsia-300 to-pink-400 hover:scale-105  shadow-cla-blue px-4 py-1 rounded-lg">Learn more</button>
               
              </div>
            </div>
          </div>
        </div>
        <div class="p-4 md:w-1/3">
          <div class="h-full rounded-xl shadow-cla-pink bg-gradient-to-r from-fuchsia-50 to-pink-50 overflow-hidden">
            <img class="lg:h-48 md:h-36 w-full object-cover object-center scale-110 transition-all duration-400 hover:scale-100" src="https://images.unsplash.com/photo-1631700611307-37dbcb89ef7e?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1yZWxhdGVkfDIwfHx8ZW58MHx8fHw%3D&auto=format&fit=crop&w=600&q=60" alt="blog">
            <div class="p-6">
              <h2 class="tracking-widest text-xs title-font font-medium text-gray-400 mb-1">CATEGORY-1</h2>
              <h1 class="title-font text-lg font-medium text-gray-600 mb-3">The Catalyzer</h1>
              <p class="leading-relaxed mb-3">Photo booth fam kinfolk cold-pressed sriracha leggings jianbing microdosing tousled waistcoat.</p>
              <div class="flex items-center flex-wrap ">
                <button class="bg-gradient-to-r from-fuchsia-300 to-pink-400 hover:scale-105  shadow-cla-blue px-4 py-1 rounded-lg">Learn more</button>
               
              </div>
            </div>
          </div>
        </div>
    </div>
  </div>
</section>
      <!-- Card Section ends -->
    <!-- Main section ends -->







    <!-- Footer section starts -->
    <footer class="mt-5 bg-warning-subtle w-100 p-5">
        <div class="container text-center">
            <div class="row">
              <div class="col-4 ">
                <div>
                    <h3>Office address</h3>
                    <h5>Chittagong Univarsity, Chattogram <br>
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
    <script src="js\homePageScript.js"></script>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN"
        crossorigin="anonymous"></script>
</body>

</html>