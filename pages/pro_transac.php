<?php
include'../includes/connection.php';
?>
          <!-- Page Content -->
          <div class="col-lg-12">
            <?php
             
              $name = $_POST['name'];
              $desc = $_POST['description'];
              $qty = $_POST['quantity'];
            
              $pr = $_POST['price']; 
            
              $dats = $_POST['datestock']; 
        
              switch($_GET['action']){
                case 'add':  
                // for($i=0; $i < $qty; $i++){
                    $query = "INSERT INTO products
                              (NAME, DESCRIPTION, QTY_STOCK, PRICE, DATE_STOCK_IN)
                              VALUES ('{$name}','{$desc}',{$qty},{$pr},'{$dats}')";
                    mysqli_query($db,$query)or die ('Error in updating product in Database '.$query);
              //       }
                break;
              }
            ?>
              <script type="text/javascript">window.location = "product.php";</script>
          </div>

<?php
include'../includes/footer.php';
?>