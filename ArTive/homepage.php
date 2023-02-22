<?php
  include('config/bd_connect.php');
  
  $fname =$lname= $mobile1= $mobile2= $email= $password = $address1 = $address2 = $city =' ';
  $errors = array("fname"=> ' ','lname'=> ' ','mobile1'=> ' ',' mobile2'=> ' ', 'email'=> ' ','password'=>' ', 'address1'=> ' ', 'address2'=> ' ', 'city'=> ' ');
  $sql = "SELECT fname,lname, mobile1, email, address1, address2 FROM seller WHERE email='" . $_POST['email']  . "' and password = '". $_POST['password'] ."'";
  $result = mysqli_query($conn,$sql);
  
  //fetch the resulting rows as an array
  $sellers = mysqli_fetch_all($result, MYSQLI_ASSOC);

  mysqli_free_result($result);
 // mysqli_close($conn);
  
  /*
    //getting all values from the HTML form
    if($_SERVER["REQUEST_METHOD"] == "POST"){
        $prdname = $_POST['prdname'];
        $prdprice = $_POST['prdprice'];
        $prdstatus = $_POST['prdstatus'];
        $prdimage = $_POST['prdimage'];
        include('config/bd_connect.php');
        if(!empty($prdname)){
          $sql1 = "INSERT INTO product( prdname,	prdprice, prdstatus, prdimage) VALUES ( '$prdname','$prdprice' ,'$prdstatus','$prdimage')";
          $result=mysqli_query($conn,$sql1);
          //$user=mysqli_fetch_assoc($result);
          header("Location:homepage.php"); 
          mysqli_free_result($result);            
           
          // close connection
          mysqli_close($conn);
          
      }
  }*/
  

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
                <!--<div class="text-center">
                    <img id="profile-img" class="js-image img-fluid rounded-lg" src="profile2.jpg" alt="">
                </div>
                
                <div class=" mx-auto w-50 mb-3">
                    <label for="formFile" class="form-label" enctype="multipart/form-data" method = "POST"></label>
                    <input onchange="displayImage(this.files[0])" class="form-control" type="file" id="formFile">
                </div>-->
                
                <div>                                
                  <form action="" method="POST">
                    <table class="table table-hover">
                      <tr><td colspan="2"><h2>Profile</h2></td></tr>
                      <tr>
                        <th>Name</th>
                        <td>
                          <!--<input type="text" class="form-control" name="" id="" placeholder="">-->
                          <?php foreach ($sellers as $seller) { ?>
                              <?php echo $seller["fname"]." ".$seller["lname"]; ?>
                              <?php } ?>
                        </td>
                      </tr>
                      <tr>
                        <th><span><i class="fa-solid fa-phone"></i></span> Contact Number</th>
                        <td>
                          <!--<input type="text" class="form-control" name="" id="" placeholder="">-->
                          <?php foreach ($sellers as $seller) { ?>
                              <?php echo $seller["mobile1"]; ?>
                              <?php } ?>
                        </td>
                      </tr>
                      <tr>
                        <th><span><i class="fa-solid fa-envelope"></i></span> Email</th>
                        <td>
                          <!--<input type="email" class="form-control" name="" id="" placeholder="">-->
                          <?php foreach ($sellers as $seller) { ?>
                              <?php echo $seller["email"]; ?>
                              <?php } ?>
                        </td>
                      </tr>
                      <tr>
                        <th>Address</th>
                        <td>
                          <!--<input type="text" class="form-control" name="" id="" placeholder="">--> 
                          <?php foreach ($sellers as $seller) { ?>
                              <?php echo $seller["address1"].",".$seller["address2"]; ?>
                              <?php } ?>
                        </td>
                      </tr>
                      <!--<tr>
                        <th><span><i class="fa-duotone fa-venus-mars"></i></span> Gender</th>
                        <td>
                          <select class="form-select" aria-label="Default select example">
                            <option selected>Select Gender--</option>
                            <option value="1"><span><i class="fa-duotone fa-mars"></i></span> Male</option>
                            <option value="2"><span><i class="fa-sharp fa-solid fa-venus"></i></span> Female</option>
                          </select>
                        </td>
                      </tr>
                      <tr>
                        <th>Something About Yourself</th>
                        <td>
                          <textarea name="" id="" cols="70" rows="5"></textarea>
                        </td>
                      </tr>-->
                    </table>

                    <div class="mb-3">
                       <button class="btn btn-outline-secondary border border-dark float-end px-3 py-1 mb-2 border-opacity-75 rounded" type="submit" value = "submit"><a href="saveImage.php" tite="Save">Save </a></button>
                       <button class="btn btn-outline-secondary border border-dark px-3 py-1 mb-2 border-opacity-75 rounded" type="reset">Reset</button>
                    </div>
                  </form>

                  <section class="me-sm-5">
          <form class="row" action="" method = "POST">
            <div class="col mb-2">
              <label for="inputEmail4" class="form-label mb-0">Product Name</label>
              <input type="text" class="form-control" placeholder="" aria-label="Product Name" name = "prdname"
                style="background:transparent ; border: 2px solid; border-color: black; border-radius: 18px;" required>
            </div>
            <div class="col mb-2">
              <label for="inputEmail4" class="form-label mb-0">Product Price</label>
              <input type="text" class="form-control" placeholder="" aria-label="" name = "prdprice"
                style="background:transparent ; border: 2px solid; border-color: black; border-radius: 18px;" required>
            </div>
          
            <div class="col-md-12 col-6 mb-2">
              <label for="inputEmail4" class="form-label mb-0">Product Status</label> 
              <input type="tel" class="form-control" id="prdstatus" name = "prdstatus"
                style="background:transparent ; border: 2px solid; border-color: black; border-radius: 18px;" >
            </div>
            <div class="col-md-12 col-6  mb-2">
              <label for="inputEmail4" class="form-label mb-0">Product Photo</label>
              <input onchange="displayImage(this.files[0])" class="form-control" type="file" id="formFile" name = "prdimage">
            </div>
            
            <div class="col-12 mb-3">
              <button type="submit" id="btn-signin" name = "save"
              class="btn btn-outline-dark border-opacity-75  border border-dark px-4 py-2 mb-2 rounded-lg h3" > <a href=<?php include ('newProduct.php');?> >Upload new item<span><i class="fa-solid fa-right-from-bracket"></i></span></a></button><br>
            </div>
          </form>
        </section>
                                                    
                  <div class="text-center">
                    <!--<button class="btn btn-outline-dark border-opacity-75  border border-dark px-4 py-2 mb-2 rounded-lg h3"><a href="newProduct.php" class="href">Upload New Item</a></button>-->
                    <button class="btn btn-outline-dark border-opacity-75  border border-dark px-4 py-2 mb-2 rounded-lg h3" > <a href="logout.php" title="Logout">Logout<span><i class="fa-solid fa-right-from-bracket"></i></span></a></button><br>
                    <!--<button id="add-to-homapage" class="btn btn-outline-dark border-opacity-75  border border-dark px-4 py-2 mb-2 rounded-lg h3">Add to Homapage</button>-->
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
      <section class=" col-10 text-center">
        <div id="carouselExampleInterval" class="carousel slide col-md-6" data-bs-ride="carousel">
            <div class="carousel-inner">
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
      <section class="my-3">
        <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
          <div class="carousel-inner">
            <div class="carousel-item active">
              <div class="card-container d-block w-100">
                  <div class="row ">
                    <div class="col-12 col-md-3 p-1 h-auto border border-dark box-shadow">
                      <div class="d-flex align-items-center">
                        <div class="text-center">
                          <img id="card-img" src="profile2.jpg" alt="" class="img-fluid h-50 w-50 p-2">
                        </div>
                        <div>
                            <h3 id="user-name">User_Name</h3>
                            <p is="small-disc">A small discription about yourself.Lorem ipsum dolor sit amet consectetur adipisicing elit. Quae, ex.</p>
                        </div>
                      </div>
                      <div>
                          <textarea name="" id="" cols="50" rows="5"></textarea> <br>
                          <button class="btn btn-outline-dark border-opacity-75  border border-dark p-2 mb-2 rounded-lg float-end" type="button">Add to Cart</button>
                      </div>
                    </div>
                    <div class="col-12 col-md-3 p-1 h-auto border border-dark box-shadow">
                      <div class="d-flex align-items-center">
                        <div class="text-center">
                          <img id="" src="profile2.jpg" alt="" class="img-fluid h-50 w-50 p-2">
                        </div>
                        <div>
                            <h3 id="user-name">User_Name</h3>
                            <p is="small-disc">A small discription about yourself.Lorem ipsum dolor sit amet consectetur adipisicing elit. Quae, ex.</p>
                        </div>
                      </div>
                      <div>
                          <textarea name="" id="" cols="50" rows="5"></textarea> <br>
                          <button class="btn btn-outline-dark border-opacity-75  border border-dark p-2 mb-2 rounded-lg float-end" type="button">Add to Cart</button>
                      </div>
                    </div>
                    <div class="col-12 col-md-3 p-1 h-auto border border-dark box-shadow">
                      <div class="d-flex align-items-center">
                        <div class="text-center">
                          <img id="" src="profile2.jpg" alt="" class="img-fluid h-50 w-50 p-2">
                        </div>
                        <div>
                            <h3 id="user-name">User_Name</h3>
                            <p is="small-disc">A small discription about yourself.Lorem ipsum dolor sit amet consectetur adipisicing elit. Quae, ex.</p>
                        </div>
                      </div>
                      <div>
                          <textarea name="" id="" cols="50" rows="5"></textarea> <br>
                          <button class="btn btn-outline-dark border-opacity-75  border border-dark p-2 mb-2 rounded-lg float-end" type="button">Add to Cart</button>
                      </div>
                    </div>
                    <div class="col-12 col-md-3 p-1 h-auto border border-dark box-shadow">
                      <div class="d-flex align-items-center">
                        <div class="text-center">
                          <img id="" src="profile2.jpg" alt="" class="img-fluid h-50 w-50 p-2">
                        </div>
                        <div>
                            <h3 id="user-name">User_Name</h3>
                            <p is="small-disc">A small discription about yourself.Lorem ipsum dolor sit amet consectetur adipisicing elit. Quae, ex.</p>
                        </div>
                      </div>
                      <div>
                          <textarea name="" id="" cols="50" rows="5"></textarea> <br>
                          <button class="btn btn-outline-dark border-opacity-75  border border-dark p-2 mb-2 rounded-lg float-end" type="button">Add to Cart</button>
                      </div>
                    </div>
                  </div>
               </div>
            </div>
            <div class="carousel-item">
              <div class="card-container d-block w-100">
                <div class="row">
                  <div class="col-12 col-md-3 p-1 h-auto border border-dark box-shadow">
                    <div class="d-flex align-items-center">
                      <div class="text-center">
                        <img id="" src="profile2.jpg" alt="" class="img-fluid h-50 w-50 p-2">
                      </div>
                      <div>
                          <h3 id="user-name">User_Name</h3>
                          <p is="small-disc">A small discription about yourself.Lorem ipsum dolor sit amet consectetur adipisicing elit. Quae, ex.</p>
                      </div>
                    </div>
                    <div>
                        <textarea name="" id="" cols="50" rows="5"></textarea> <br>
                        <button class="btn btn-outline-dark border-opacity-75  border border-dark p-2 mb-2 rounded-lg float-end" type="button">Add to Cart</button>
                    </div>
                  </div>
                  <div class="col-12 col-md-3 p-1 h-auto border border-dark box-shadow">
                    <div class="d-flex align-items-center">
                      <div class="text-center">
                        <img id="" src="profile2.jpg" alt="" class="img-fluid h-50 w-50 p-2">
                      </div>
                      <div>
                          <h3 id="user-name">User_Name</h3>
                          <p is="small-disc">A small discription about yourself.Lorem ipsum dolor sit amet consectetur adipisicing elit. Quae, ex.</p>
                      </div>
                    </div>
                    <div>
                        <textarea name="" id="" cols="50" rows="5"></textarea> <br>
                        <button class="btn btn-outline-dark border-opacity-75  border border-dark p-2 mb-2 rounded-lg float-end" type="button">Add to Cart</button>
                    </div>
                  </div>
                  <div class="col-12 col-md-3 p-1 h-auto border border-dark box-shadow">
                    <div class="d-flex align-items-center">
                      <div class="text-center">
                        <img id="" src="profile2.jpg" alt="" class="img-fluid h-50 w-50 p-2">
                      </div>
                      <div>
                          <h3 id="user-name">User_Name</h3>
                          <p is="small-disc">A small discription about yourself.Lorem ipsum dolor sit amet consectetur adipisicing elit. Quae, ex.</p>
                      </div>
                    </div>
                    <div>
                        <textarea name="" id="" cols="50" rows="5"></textarea> <br>
                        <button class="btn btn-outline-dark border-opacity-75  border border-dark p-2 mb-2 rounded-lg float-end" type="button">Add to Cart</button>
                    </div>
                  </div>
                  <div class="col-12 col-md-3 p-1 h-auto border border-dark box-shadow">
                    <div class="d-flex align-items-center">
                      <div class="text-center">
                        <img id="" src="profile2.jpg" alt="" class="img-fluid h-50 w-50 p-2">
                      </div>
                      <div>
                          <h3 id="user-name">User_Name</h3>
                          <p is="small-disc">A small discription about yourself.Lorem ipsum dolor sit amet consectetur adipisicing elit. Quae, ex.</p>
                      </div>
                    </div>
                    <div>
                        <textarea name="" id="" cols="50" rows="5"></textarea> <br>
                        <button class="btn btn-outline-dark border-opacity-75  border border-dark p-2 mb-2 rounded-lg float-end" type="button">Add to Cart</button>
                    </div>
                  </div>
                </div>
            </div>
            </div>
            <div class="carousel-item">
              <div class="card-container d-block w-100">
                <div class="row ">
                  <div class="col-12 col-md-3 p-1 h-auto border border-dark box-shadow">
                    <div class="d-flex align-items-center">
                      <div class="text-center">
                        <img id="" src="profile2.jpg" alt="" class="img-fluid h-50 w-50 p-2">
                      </div>
                      <div>
                          <h3 id="user-name">User_Name</h3>
                          <p is="small-disc">A small discription about yourself.Lorem ipsum dolor sit amet consectetur adipisicing elit. Quae, ex.</p>
                      </div>
                    </div>
                    <div>
                        <textarea name="" id="" cols="50" rows="5"></textarea> <br>
                        <button class="btn btn-outline-dark border-opacity-75  border border-dark p-2 mb-2 rounded-lg float-end" type="button">Add to Cart</button>
                    </div>
                  </div>
                  <div class="col-12 col-md-3 p-1 h-auto border border-dark box-shadow">
                    <div class="d-flex align-items-center">
                      <div class="text-center">
                        <img id="" src="profile2.jpg" alt="" class="img-fluid h-50 w-50 p-2">
                      </div>
                      <div>
                          <h3 id="user-name">User_Name</h3>
                          <p is="small-disc">A small discription about yourself.Lorem ipsum dolor sit amet consectetur adipisicing elit. Quae, ex.</p>
                      </div>
                    </div>
                    <div>
                        <textarea name="" id="" cols="50" rows="5"></textarea> <br>
                        <button class="btn btn-outline-dark border-opacity-75  border border-dark p-2 mb-2 rounded-lg float-end" type="button">Add to Cart</button>
                    </div>
                  </div>
                  <div class="col-12 col-md-3 p-1 h-auto border border-dark box-shadow">
                    <div class="d-flex align-items-center">
                      <div class="text-center">
                        <img id="" src="profile2.jpg" alt="" class="img-fluid h-50 w-50 p-2">
                      </div>
                      <div>
                          <h3 id="user-name">User_Name</h3>
                          <p is="small-disc">A small discription about yourself.Lorem ipsum dolor sit amet consectetur adipisicing elit. Quae, ex.</p>
                      </div>
                    </div>
                    <div>
                        <textarea name="" id="" cols="50" rows="5"></textarea> <br>
                        <button class="btn btn-outline-dark border-opacity-75  border border-dark p-2 mb-2 rounded-lg float-end" type="button">Add to Cart</button>
                    </div>
                  </div>
                  <div class="col-12 col-md-3 p-1 h-auto border border-dark box-shadow">
                    <div class="d-flex align-items-center">
                      <div class="text-center">
                        <img id="" src="profile2.jpg" alt="" class="img-fluid h-50 w-50 p-2">
                      </div>
                      <div>
                          <h3 id="user-name">User_Name</h3>
                          <p is="small-disc">A small discription about yourself.Lorem ipsum dolor sit amet consectetur adipisicing elit. Quae, ex.</p>
                      </div>
                    </div>
                    <div>
                        <textarea name="" id="" cols="50" rows="5"></textarea> <br>
                        <button class="btn btn-outline-dark border-opacity-75  border border-dark p-2 mb-2 rounded-lg float-end" type="button">Add to Cart</button>
                    </div>
                  </div>
                </div>
            </div>
            </div>
          </div>
          <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
          </button>
          <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
          </button>
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