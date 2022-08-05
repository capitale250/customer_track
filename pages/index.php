<?php
include'../includes/connection.php';
include'../includes/sidebar.php';
?><?php 

                $query = 'SELECT ID, t.TYPE
                          FROM users u
                          JOIN type t ON t.TYPE_ID=u.TYPE_ID WHERE ID = '.$_SESSION['MEMBER_ID'].'';
                $result = mysqli_query($db, $query) or die (mysqli_error($db));
      
                while ($row = mysqli_fetch_assoc($result)) {
                          $Aa = $row['TYPE'];
                   
if ($Aa=='User'){
           
             ?>    <script type="text/javascript">
                      //then it will be redirected
                      alert("Restricted Page! You will be redirected to POS");
                      window.location = "pos.php";
                  </script>
             <?php   }
                         
           
}   
            ?>
          <div class="row show-grid">
            <!-- Customer ROW -->
            <div class="col-md-4">
            <!-- Customer record -->
            <div class="col-md-12 mb-3">
              <div class="card border-left-primary shadow h-100 py-2">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-0">
                      <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">Customers</div>
                      <div class="h6 mb-0 font-weight-bold text-gray-800">
                        <?php 
                        $query = "SELECT COUNT(*) FROM customer";
                        $result = mysqli_query($db, $query) or die(mysqli_error($db));
                        while ($row = mysqli_fetch_array($result)) {
                            echo "$row[0]";
                          }
                        ?> Record(s)
                      </div>
                    </div>
                      <div class="col-auto">
                        <a href="customer.php" >
                        <i class="fas fa-users fa-2x text-gray-300"></i>
                        </a>
                      </div>
                  </div>
                </div>
              </div>
            </div>
            </div>
            <!-- Employee ROW -->
          <div class="col-md-4">
            <!-- Employee record -->
            <div class="col-md-12 mb-3">
              <div class="card border-left-success shadow h-100 py-2">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-0">
                      <div class="text-xs font-weight-bold text-success text-uppercase mb-1">birth days</div>
                      <div class="h6 mb-0 font-weight-bold text-gray-800">
                        <?php 
                        $query = "SELECT COUNT(*) FROM customer WHERE MONTH(birthdate) = MONTH(NOW()) AND DAY(birthdate) = DAY(NOW());";
                        $result = mysqli_query($db, $query) or die(mysqli_error($db));
                        while ($row = mysqli_fetch_array($result)) {
                            echo "$row[0]";
                          }
                        ?> Birth days to day
                      </div>
                    </div>
                    <div class="col-auto">
                      
                      <i class="fas fa-users fa-2x text-gray-300"></i>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <!-- User record -->
        

          </div>
          <!-- PRODUCTS ROW -->
          <div class="col-md-4">
            <!-- Product record -->
            <div class="col-md-12 mb-3">
              <div class="card border-left-info shadow h-100 py-2">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">

                    <div class="col mr-0">
                      <div class="text-xs font-weight-bold text-info text-uppercase mb-1">Product</div>
                      <div class="row no-gutters align-items-center">
                        <div class="col-auto">
                          <div class="h6 mb-0 mr-3 font-weight-bold text-gray-800">
                          <?php 
                          $query = "SELECT COUNT(*) FROM products";
                          $result = mysqli_query($db, $query) or die(mysqli_error($db));
                          while ($row = mysqli_fetch_array($result)) {
                              echo "$row[0]";
                            }
                          ?> Record(s)
                          </div>
                        </div>
                      </div>
                    </div>

                    <div class="col-auto">
                    <a href="product.php" >

                      <i class="fas fa-clipboard-list fa-2x text-gray-300"></i>
                      </a>
                    </div>

                  </div>
                </div>
              </div>
            </div>

            </div>
             </div>
         </div>
          <!-- RECENT PRODUCTS -->
           <div class="row gy-5 show-grid ">
                <div class="col-5">
                  
                <div class="col-lg-6 ml-4">
                    <div class="card shadow h-100" style="width: 28rem;">
                      <div class="card-body">
                        <div class="row no-gutters align-items-center">

                          <div class="col-auto">
                            <i class="fa fa-th-list fa-fw"></i> 
                          </div>

                        <div class="panel-heading"> Recent Products
                        </div>
                        <div class="row no-gutters align-items-center mt-1">
                          <div class="col-auto">
                             <div class="h6 mb-0 mr-0 text-gray-800">
                        <!-- /.panel-heading -->
                        
                             <div class="panel-body">
                             <div class="list-group" style="width: 24rem;">
                              <?php 
                                // $query = "SELECT NAME, PRODUCT_CODE FROM product order by PRODUCT_ID DESC LIMIT 10";
                                $query = "SELECT NAMEP FROM products order by PRODUCT_ID asc limit 7";

                                $result = mysqli_query($db, $query) or die(mysqli_error($db));
                                while ($row = mysqli_fetch_array($result)) {

                                    echo "<a href='#' class='list-group-item text-gray-800'>
                                          <i class='fa fa-tasks fa-fw'></i> $row[0]
                                          </a>";
                                  }
                              ?>
                            </div>
                            <!-- /.list-group -->
                            <a href="product.php" class="btn btn-default btn-block">View All Products</a>
                        </div>
                        <!-- /.panel-body -->
                  </div></div></div></div></div></div>
          
         
         
               
                </div>
                  </div>
                <div class="col-7 "  >
                  <div class="col-xl-10 col-lg-9"> 
                            <div class="card shadow mb-4 " style="width: 40rem;">
                                
                                <div
                                    class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                                    <h6 class="m-0 font-weight-bold text-primary">Upcoming birthdayz</h6>
                                    <div class="dropdown no-arrow">
                                        <a class="dropdown-toggle" href="#" role="button" id="dropdownMenuLink"
                                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            <i class="fas fa-ellipsis-v fa-sm fa-fw text-gray-400"></i>
                                        </a>
                                        <div class="dropdown-menu dropdown-menu-right shadow animated--fade-in"
                                            aria-labelledby="dropdownMenuLink">

                                        </div>
                                    </div>
                                </div>
                              
                                <div class="card-body">
                                    <div class="chart-area">
                                        <?php 
                                            $query = "SELECT FIRST_NAME FROM customer WHERE birthdate BETWEEN CURDATE() - INTERVAL 1 WEEK AND CURDATE() + INTERVAL 1 WEEK limit 6";
                                            $result = mysqli_query($db, $query) or die(mysqli_error($db));
                                            while ($row = mysqli_fetch_array($result)) {
                                                // echo "$row[0]";
                                                echo "<a href='#' class='list-group-item text-gray-800'>
                                          <li> $row[0]</li>
                                          </a>";
                                              }
                                            ?>
                                      
                                       <a href="birthdays.php" class="btn btn-default btn-block">View All Nearby birth dayz</a>
                                        <!-- <canvas id="myAreaChart">1</canvas> -->
                                        
                                    </div>
                                </div>
                            </div>
                        </div>

              
                </div>

<?php
include'../includes/footer.php';
?>