<?php
include'../includes/connection.php';
include'../includes/sidebar.php';
  $query = 'SELECT ID, t.TYPE
            FROM users u
            JOIN type t ON t.TYPE_ID=u.TYPE_ID WHERE ID = '.$_SESSION['MEMBER_ID'].'';
  $result = mysqli_query($db, $query) or die (mysqli_error($db));
  
  while ($row = mysqli_fetch_assoc($result)) {
            $Aa = $row['TYPE'];
                   
  if ($Aa=='User'){
?>
  <script type="text/javascript">
    //then it will be redirected
    alert("Restricted Page! You will be redirected to POS");
    window.location = "pos.php";
  </script>
<?php
  }           
}
            ?>
            
            <div class="card shadow mb-4">
            <div class="card-header py-3">
              <h4 class="m-2 font-weight-bold " style="color:#012241;">Inventory</h4>
            </div>
            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0"> 
               <thead>
                   <tr>
                     <th>Product Name</th>
                     <th>FIRST Name</th>
                     <th>Last name</th>
                     <th>DATE</th>
                     <th>Comment</th>
                     <th>Discount</th>
                     <!-- <th>Action</th> -->
                   </tr>
               </thead>
          <tbody>

<?php                  
    $query = 'SELECT customer.FIRST_NAME, customer.LAST_NAME, products.NAMEP,transactions.transaction_date,transactions.comment,transactions.dicount FROM transactions ,customer ,products where products.PRODUCT_ID=transactions.prodid AND transactions.userid=customer.CUST_ID;';
        $result = mysqli_query($db, $query) or die (mysqli_error($db));
      
            while ($row = mysqli_fetch_assoc($result)) {
                                 
                echo '<tr>';
                echo '<td>'. $row['NAMEP'].'</td>';
                echo '<td>'. $row['FIRST_NAME'].'</td>';
                echo '<td>'. $row['LAST_NAME'].'</td>';
                echo '<td>'. $row['transaction_date'].'</td>';
                echo '<td>'. $row['comment'].'</td>';
                echo '<td>'. $row['dicount'].'</td>';
                //       echo '<td align="right">
                //               <a type="button" class="btn btn-primary bg-gradient-primary" href="inv_searchfrm.php?action=edit & id='.$row['PRODUCT_CODE'] . '"><i class="fas fa-fw fa-th-list"></i> View</a>
                //           </div> </td>';
                // echo '</tr> ';
                        }
?> 
                                    
                                </tbody>
                            </table>
                        </div>
                    </div>
                  </div>

<?php
include'../includes/footer.php';
?>
