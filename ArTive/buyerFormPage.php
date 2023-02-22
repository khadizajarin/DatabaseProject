<?php
     include('config/bd_connect.php');

     $name =$mobile= $email= $password = $address =' ';
     $errors = array('name'=> ' ','mobile'=> ' ', 'email'=> ' ','password'=>' ', 'address'=> ' ');
    //getting all values from the HTML form
    if($_SERVER["REQUEST_METHOD"] == "POST"){
        $name = $_POST['name'];
        $mobile = $_POST['mobile'];
        $email = $_POST['email'];
        $password= $_POST['password'];
        $address = $_POST['address'];

        if(!empty($email)){
          $sql="SELECT * FROM buyer where email='$email' OR name = '$name'";
          $result=mysqli_query($conn,$sql);
          $user=mysqli_fetch_assoc($result);
          mysqli_free_result($result);            
  
          if(!empty($user)){
              echo 'You can\'t use same name or email address that you have used before.';
          }
         
          else
          {
            $sql = ("INSERT INTO buyer( name, mobile, email, password ,address) VALUES ( '$name','$mobile','$email','$password', '$address')");
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
    <title>Login in as a buyer</title>

    <!-- vanilla css -->
    <style>
        html {
            overflow-x: hidden;
            overflow-y: hidden;
            scroll-padding-top: 9rem;
            scroll-behavior: smooth;
        }

        #btn-submit{
            background: transparent;
            border: 2px solid;
            border-color: black;
            border-radius: 18px;
        }

        #btn-submit:hover {
            background-color: rgb(233, 156, 79);
            color: rgb(244, 224, 224);
        }
    </style>

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
</head>

<body style="font-family:Arial, Helvetica, sans-serif;">

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
            style="background-image: url(background8.jpg); height: 100vh; width: 100%; background-size: cover;width: 100%;  background-position: center;">


            <section style="position:absolute; top: 25%; right: 2%; width: 50%; height: auto;">
                <!-- FORM TITLE -->
                <h1 class="fw-semibold text-dark">
                    Login as a buyer
                </h1>
    
                <!-- FORM SECTION -->
                <section class="me-sm-5">
                    <form class="row" action="<?php echo $_SERVER['PHP_SELF'] ?>" method = "POST">
                        <div class="col-12 mb-2">
                            <label for="inputEmail4" class="form-label mb-0 ">Full Name</label>
                            <input type="text" class="form-control" placeholder="" aria-label="First name" name = "name"
                                style="background:transparent ; border: 2px solid; border-color: black; border-radius: 18px;"
                                required>
                        </div>
                        <div class="col-12 mb-2">
                            <label for="inputEmail4" class="form-label mb-0">Mobile No.</label>
                            <input type="tel" class="form-control" id="inputEmail4"name = "mobile"
                                style="background:transparent ; border: 2px solid; border-color: black; border-radius: 18px;"
                                required>
                        </div>
                        <div class="col-12 mb-2">
                            <label for="inputEmail4" class="form-label mb-0">Email</label>
                            <input type="email" class="form-control" id="inputEmail4" name = "email"
                                style="background: transparent ; border: 2px solid; border-color: black; border-radius: 18px;"
                                required>
                        </div>
                        <div class="col-12 mb-2">
                            <label for="inputPassword4" class="form-label mb-0">Password</label>
                            <input type="password" class="form-control" id="inputPassword4" name = "password"
                                style="background: transparent; border: 2px solid; border-color: black; border-radius: 18px;"
                                required>
                        </div>
                        <div class="col-12 mb-4">
                            <label for="inputAddress" class="form-label mb-0">Delivery Address</label>
                            <input type="text" class="form-control" id="inputAddress" placeholder="1234 Main St" name = "address"
                                style="background:transparent; border: 2px solid; border-color: black; border-radius: 18px;"
                                required>
                        </div>
                        <div class="col-12 mt-4" style="position: absolute; top: 97%; left: 74%;">
                            <button type="submit" id="btn-submit" name = "submit"
                                class="btn btn-primary text-dark px-5">Log in</button>
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