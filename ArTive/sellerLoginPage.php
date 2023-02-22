<?php 

if(isset($_POST['submit'])){
//include('config/bd_connect.php')

$errors = array( 'email'=> ' ','password'=>' ');
$email= $password = ' ';
$email  = $_POST["email"];
$password = $_POST["password"];
 
 //connect to database
 $conn = mysqli_connect("localhost", "roza", "khadizajarin","artive");
session_start();
 //check connection
 if(!$conn){
     echo 'Connection error:' . mysqli_connect_error();
 }else{
    $stmt = $conn->prepare("SELECT * FROM seller WHERE email =?");
    $stmt->bind_param("s",$email);
    $stmt->execute();
    $stmt_result = $stmt-> get_result();
    if($stmt_result -> num_rows > 0){
        $data = $stmt_result-> fetch_assoc();
        if($data['password'] === $password) {
            session_start();
            $_SESSION["password"] = $password;
            $_SESSION["email"] = $email;
            $_SESSION["loggedin"] = true;
            header('Location:homepage.php ');
        }
    else{
            echo "Invalid password";
        }
    }
}

}

    



/*$errors = array( 'email'=> ' ','password'=>' ');
$email= $password = ' ';
include('config/bd_connect.php');
     session_start();
    //getting all values from the HTML form
    if($_SERVER["REQUEST_METHOD"] == "POST"){

        if(isset($_SESSION['email']))
        {
            header("location: homepage.php");
            exit;
        }

        
        $email = $_POST['email'];
        $password= $_POST['password'];
        if(empty(trim($_POST['email'])) || empty(trim($_POST['password']))) {
            $err = "please enter user email and password";
        }
        else{
            $email = trim($_POST['email']);
            $password = trim($_POST['password']);
        }//if-else khatam

        if(empty($err)){
            $sql = "SELECT * FROM seller WHERE email = ?";
            $stmt = mysqli_prepare($conn, $sql);
            mysqli_stmt_bind_param($stmt,"s",$param_s_email);
            $param_s_email = $email;


            //execute the statement
        if(mysqli_stmt_execute($stmt)){
            mysqli_stmt_store_result($stmt);
                if(mysqli_stmt_num_rows($stmt) == 1){
                    mysqli_stmt_bind_result($stmt, $email,$password);
                    if(mysqli_stmt_fetch($stmt)){
                            //this means user is allowed to login
                            session_start();
                            $_SESSION["password"] = $password;
                            $_SESSION["email"] = $email;
                            $_SESSION["loggedin"] = true;

                            //redirect user to homepage
                            header("location: homepage.php");
                            

                        
                    }
                }
     }
    }
}*/



       /* if(!empty($email)){
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
            header("Location:LandingPage.php"); // ekhane homepage connect hbe
            $rs = mysqli_query($conn, $sql);
            if($rs){
              echo "Entries added!";
          }
          // close connection
          mysqli_close($conn);
          }
      }*/

    // using sql to create a data entry query
    /*$sql = "INSERT INTO seller( fname ,lname, mobile1, mobile2, email, password ,address1, address2, city) VALUES ( '$fname','$lname' ,'$mobile1','$mobile2','$email','$password', '$address1', '$address2','$city')";
  
    // send query to the database to add values and confirm if successful
    $rs = mysqli_query($conn, $sql);
    if($rs){
        echo "Entries added!";
    }
    // close connection
    mysqli_close($conn);*/
  
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Seller Login Page</title>

     <!-- vanilla css -->
  <style>
    html{
      overflow-x: hidden;
      scroll-padding-top: 9rem;
      scroll-behavior: smooth;
    }
    #btn-login{
      background:transparent ; border: 2px solid; border-color: black; border-radius: 18px;
    }

    #btn-login:hover{
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
            style="background-image: url(background3.jpg); height: 100vh; width: 100%; background-size: cover;width: 100%;  background-position: center;">

            <section style="position:absolute; top: 40%; right: 3%; width: 50%; height: auto;">
                <!-- FORM TITLE -->
                <h1 class="fw-semibold text-dark">
                    Login as a seller
                </h1>
    
                <!-- FORM SECTION -->
                <section class="me-sm-5">
                    <form class="row" action="homepage.php" method = "POST">
                        <div class="col-11 mb-2">
                            <label for="inputEmail4" class="form-label mb-0">Email</label>
                            <input type="email" class="form-control" id="inputEmail4" name = "email"
                                style="background: transparent ; border: 2px solid; border-color: black; border-radius: 18px;"
                                required>
                        </div>
                        <div class="col-11 mb-2">
                            <label for="inputPassword4" class="form-label mb-0">Password</label>
                            <input type="password" class="form-control" id="inputPassword4" name = "password"
                                style="background: transparent; border: 2px solid; border-color: black; border-radius: 18px;"
                                required>
                        </div>
                        <div class="col-12 mt-4">
                            <button type="submit" id="btn-login" name = "submit" value = "submit"
                                style="background:transparent ; border: 2px solid; border-color: black; border-radius: 18px;"
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