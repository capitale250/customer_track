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
              <h4 class="m-2 font-weight-bold " style="color:#012241;">Birthdays in a week before and after</h4>
            </div>
            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0"> 
               <thead>
                   <tr>
                     <th>FIRST Name</th>
                     <th>Last Name</th>
                     <th>EMAIL</th>
                     <th>PHONE NUMBER</th>
                     <th>BIRTH DAY</th>
                     <th>GENDER</th>
                   </tr>
               </thead>
          <tbody>

<?php                  
    $query = 'SELECT * FROM customer WHERE birthdate BETWEEN CURDATE() - INTERVAL 1 WEEK AND CURDATE() + INTERVAL 1 WEEK';
        $result = mysqli_query($db, $query) or die (mysqli_error($db));
      
            while ($row = mysqli_fetch_assoc($result)) {
                                 
                echo '<tr>';
                echo '<td>'. $row['FIRST_NAME'].'</td>';
                echo '<td>'. $row['LAST_NAME'].'</td>';
                echo '<td>'. $row['email'].'</td>';
                echo '<td>'. $row['PHONE_NUMBER'].'</td>';
                echo '<td>'. $row['birthdate'].'</td>';
                echo '<td>'. $row['gender'].'</td>';
                // echo '<td align="right"> <div class="btn-group">
                //               <a type="button" class="btn  " style="background-color:#012241;color:white;"href="mail.php?action=edit & emailp='.$row['email']. '"><i class="fas fa-fw fa-list-alt"></i>email</a></div></td>';
            
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
