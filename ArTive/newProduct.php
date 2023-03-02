<?php
     include('config/bd_connect.php');
    
     $prdname = $prdprice = $prdstatus = $prdimage= ' ';
     $errors = array('prdname'=> ' ','prdprice'=> ' ','prdstatus'=> ' ','prdimage'=> ' ');
    //getting all values from the HTML form
    if (isset ($_POST['save'])){
        $prdname = $_POST['prdname'];
        $prdprice = $_POST['prdprice'];
        $prdstatus = $_POST['prdstatus'];
        $prdimage = $_POST['prdimage'];

        if(!empty($prdname)){
          $sql = "INSERT INTO product( prdname,	prdprice, prdstatus, prdimage) VALUES ( '$prdname','$prdprice' ,'$prdstatus','$prdimage')";
          $result=mysqli_query($conn,$sql);
          $user=mysqli_fetch_assoc($result);
          header('Location:homepage.php '); 
         // mysqli_free_result($result);            
           
          // close connection
         // mysqli_close($conn);  
      }
  }
?>

