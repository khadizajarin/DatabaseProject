<?php
     include('config/bd_connect.php');

     $fname =$lname= $mobile1= $mobile2= $email= $password = $address1 = $address2 = $city = ' ';
     $errors = array('fname'=> ' ','lname'=> ' ','mobile1'=> ' ',' mobile2'=> ' ', 'email'=> ' ','password'=>' ', 'address1'=> ' ', 'address2'=> ' ', 'city'=> ' ');
    //getting all values from the HTML form
    if($_SERVER["REQUEST_METHOD"] == "POST"){
        $fname = $_POST['fname'];
        $lname = $_POST['lname'];
        $mobile1 = $_POST['mobile1'];
        $mobile2 = $_POST['mobile2'];
        $email = $_POST['email'];
        $password= $_POST['password'];
        $address1 = $_POST['address1'];
        $address2 = $_POST['address2'];
        $city = $_POST['city'];

        if(!empty($email)){
          $sql="SELECT * FROM seller where email='$email' OR fname = '$fname' OR address1 = ' $address1' OR mobile1 = '$mobile2'";
          $result=mysqli_query($conn,$sql);
          $user=mysqli_fetch_assoc($result);
          mysqli_free_result($result);            
  
          if(!empty($user)){
              echo 'You can\'t use same name, email address, address or phone number that you have used for another account.';
          }
         
          else
          {
            $sql = ("INSERT INTO seller( fname ,lname, mobile1, mobile2, email, password ,address1, address2, city) VALUES ( '$fname','$lname' ,'$mobile1','$mobile2','$email','$password', '$address1', '$address2','$city')");
            header("Location:homepage.php"); // ekhane homepage connect hbe
            $rs = mysqli_query($conn, $sql);
            if($rs){
              echo "Entries added!";
          }
          // close connection
          mysqli_close($conn);
          }
      }
  }
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Seller Sign in</title>

  <!-- vanilla css -->
  <style>
    html{
      overflow-x: hidden;
      scroll-padding-top: 9rem;
      scroll-behavior: smooth;
    }
    #btn-signin{
      background:transparent ; border: 2px solid; border-color: black; border-radius: 18px;
    }

    #btn-signin:hover{
      background-color: rgb(233, 156, 79);
      color: rgb(244, 224, 224);
    }
  </style>

  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">

</head>


<body style="font-family:Arial, Helvetica, sans-serif;" class="m-2 p-2">
  <header>
    <!-- NAVIGATION BAR -->
    <nav class="navbar navbar-expand-lg  bg-light">
      <div class="container-fluid">
        <a class="navbar-brand" href="#">
          <img class="img-fluid" src="images\logos\artive4.jpeg" alt="Logo" width="95" height="35"
            class="d-inline-block align-text-top">

        </a>
      </div>
    </nav>
  </header>


  <main>

    <!-- BANNER SECTION -->
    <section class="d-flex flex-column justify-content-center align-items-center"
      style="background-image: url(background9.jpg); height: 100vh; width: 100%; background-size: cover;width: 100%;  background-position: center;">


      <section style="position:absolute; top: 20%; right: 6%; width: 50%; height: auto;">
        <!-- FORM TITLE -->
        <h1 class="fw-semibold text-dark">
          Create New Account
        </h1>
  
        <!-- FORM SECTION -->
        <section class="me-sm-5">
          <form class="row" action="<?php echo $_SERVER['PHP_SELF'] ?>" method = "POST">
            <div class="col mb-2">
              <label for="inputEmail4" class="form-label mb-0">First Name</label>
              <input type="text" class="form-control" placeholder="" aria-label="First name" name = "fname"
                style="background:transparent ; border: 2px solid; border-color: black; border-radius: 18px;" required>
            </div>
            <div class="col mb-2">
              <label for="inputEmail4" class="form-label mb-0">Last Name</label>
              <input type="text" class="form-control" placeholder="" aria-label="Last name" name = "lname"
                style="background:transparent ; border: 2px solid; border-color: black; border-radius: 18px;" required>
            </div>
          <!--</form>
          <form class="row">-->
            <div class="col-md-12 col-6 mb-2">
              <label for="inputEmail4" class="form-label mb-0">Mobile No-1</label> 
              <input type="tel" class="form-control" id="inputEmail4" name = "mobile1"
                style="background:transparent ; border: 2px solid; border-color: black; border-radius: 18px;" required>
            </div>
            <div class="col-md-12 col-6  mb-2">
              <label for="inputEmail4" class="form-label mb-0">Mobile No-2</label>
              <input type="tel" class="form-control" id="inputEmail4" name = "mobile2"
                style="background:transparent ; border: 2px solid; border-color: black; border-radius: 18px;" required>
            </div>
            <div class="col-md-6 col-6 mb-2">
              <label for="inputEmail4" class="form-label mb-0">Email</label>
              <input type="email" class="form-control" id="inputEmail4" name = "email"
                style="background: transparent ; border: 2px solid; border-color: black; border-radius: 18px;" required>
            </div>
            <div class="col-md-6 col-6 mb-2">
              <label for="inputPassword4" class="form-label mb-0">Password</label>
              <input type="password" class="form-control" id="inputPassword4" name = "password"
                style="background: transparent; border: 2px solid; border-color: black; border-radius: 18px;" required>
            </div>
            <div class="col-12 mb-2">
              <label for="inputAddress" class="form-label mb-0">Address</label>
              <input type="text" class="form-control" id="inputAddress" placeholder="1234 Main St" name = "address1"
                style="background:transparent; border: 2px solid; border-color: black; border-radius: 18px;" required>
            </div>
            <div class="col-12 mb-2">
              <label for="inputAddress2" class="form-label mb-0">Address 2</label>
              <input type="text" class="form-control" id="inputAddress2" placeholder="Apartment, studio, or floor" name = "address2"
                style="background:transparent ;  border: 2px solid; border-color: black; border-radius: 18px;">
            </div>
            <div class="col-12 mb-4" >
              <label for="inputCity" class="form-label mb-0">City</label>
              <input type="text" class="form-control" id="inputCity" name = "city"
                style="background:transparent ;  border: 2px solid; border-color: black; border-radius: 18px;" required>
            </div>
            <div class="col-12 mb-3">
              <button type="submit" id="btn-signin" name = "submit"
               class="btn btn-primary text-dark px-5">Sign in</button>
            </div>
          </form>

        </section>
      </section>
    </section>

  </main>





  <!-- Bootstrap JS -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN"
    crossorigin="anonymous"></script>
</body>

</html>