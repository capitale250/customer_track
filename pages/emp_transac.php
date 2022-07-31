<?php
include'../includes/connection.php';
?>
             <div class="col-lg-12">
            <?php
              $fname = $_POST['firstname'];
              $lname = $_POST['lastname'];
              $gen = $_POST['gender'];
              $email = $_POST['email'];
              $phone = $_POST['phonenumber'];
  
              $bdate = $_POST['hireddate'];
              echo  $bdate .$phone. $email.  $gen. $lname;
               switch($_GET['action']){
                case 'add': 
                             echo  $fname;
              $result =mysqli_query($db,"INSERT INTO customer
                              (FIRST_NAME, LAST_NAME, email, PHONE_NUMBER,birthdate,gender)
                              VALUES ('{$fname}','{$lname}','{$email}','{$phone}','{$bdate}','{$gen}')");
              
              echo  $bdate;
                 break;
              }
              
            
            ?>
               <script type="text/javascript">
                alert("customer inserted successfuly")
                window.location = "customer.php";
              </script>
              </div>