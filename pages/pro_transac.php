<?php
include'../includes/connection.php';
?>
          <!-- Page Content -->
          <!-- <div class="col-lg-12"> -->
            <?php
             
              $name = $_POST['name'];
              $desc = $_POST['description'];
              $qty = $_POST['quantity'];
            
              $pr = $_POST['price']; 
            
              $dats = $_POST['datestock']; 

              $statusMsg = '';
              $img='';

              // File upload path
              $targetDir = "uploads/";
              $fileName = basename($_FILES["file"]["name"]);
              $targetFilePath = $targetDir . $fileName;
              $tmp = dirname(__FILE__) . "/uploads/" . $file_name;
              $fileType = pathinfo($targetFilePath,PATHINFO_EXTENSION);
              echo $fileName;

              if(!empty($_FILES["file"]["name"])){
                  // Allow certain file formats
                  $allowTypes = array('jpg','png','jpeg','gif','pdf');
                  if(in_array($fileType, $allowTypes)){
                      // Upload file to server
                      
                      if(move_uploaded_file($_FILES["file"]["tmp_name"], $tmp)){
                       
                       echo "-----------";
                  
                      }else{
                        $inipath = php_ini_loaded_file();

                          if ($inipath) {
                              echo 'Loaded php.ini: ' . $inipath. $tmp;
                          } else {
                            echo 'A php.ini file is not loaded';
                          }
                        echo "Sorry, there was an error uploading your file.";
                      }
                  }else{
                      $statusMsg = 'Sorry, only JPG, JPEG, PNG, GIF, & PDF files are allowed to upload.';
                  }
              }else{
                  $statusMsg = 'Please select a file to upload.';
              }
         
              // Display status message
           
                      
              switch($_GET['action']){
                case 'add':  
                // for($i=0; $i < $qty; $i++){
                    $query = "INSERT INTO products
                              (NAMEP, DESCRIPTION, QTY_STOCK, PRICE, DATE_STOCK_IN,imgurl)
                              VALUES ('{$name}','{$desc}',{$qty},{$pr},'{$dats}','{$fileName}')";
                    mysqli_query($db,$query)or die ('Error in updating product in Database '.$query);
              //       }
                break;
              }
            ?>
              <script type="text/javascript">
              //   alert("transaction Successfully.");
              // window.location = "product.php";
              </script>
          <!-- </div> -->

<!-- <?php
include'../includes/footer.php';
?> -->