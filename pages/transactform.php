<?php
include'../includes/connection.php';
include'../includes/sidebar.php';

?>
<?php
$sql = "SELECT  NAMEP ,PRODUCT_ID FROM products";
$result = mysqli_query($db, $sql) or die ("Bad SQL: $sql");

$aaa = "<select class='form-control' name='proname' required>
        <option disabled selected hidden>Select Product name</option>";
  while ($row = mysqli_fetch_assoc($result)) {
    $aaa .= "<option value='".$row['PRODUCT_ID']."'>".$row['NAMEP']."</option>";
  
  }

$aaa .= "</select>";
?>
<form role="form" method="post" action="transquery.php">
  <!-- 2 column grid layout with text inputs for the first and last names -->
  <div class="row mb-4">
    <div class="col">
      <div class="form-outline">
     
        <input type="text" id="form6Example1" class="form-control" name="cust_name" placeholder="Enter firstname of customer" onkeyup="showHint(this.value); showPurchase(this.value);" required/>
           <p>Last name: <span id="txtHint"></span></p>
           <p>PURCHASES: <span id="txPurch"></span></p>
        <!-- <label class="form-label" for="form6Example1">customer name</label> -->
      </div>
    </div>
    <div class="col">
      <div class="form-outline">
        <!-- <input type="text" id="form6Example2" class="form-control" name="pro_name" required/>
        <label class="form-label" for="form6Example2">product name</label> -->
        
             <?php
               echo $aaa;
             ?>
           
      </div>
    </div>
  </div>

  <!-- Text input -->
  <div class="form-outline mb-4">
    <input type="text" id="form6Example3" class="form-control" name="total_cost" required/>
    <label class="form-label" for="form6Example3">Total cost</label>
  </div>

  <!-- Text input -->
  <!-- <div class="form-outline mb-4">
    <input type="text" id="form6Example4" class="form-control" />
    <label class="form-label" for="form6Example4">Address</label>
  </div> -->

  <!-- Email input -->
  <!-- <div class="form-outline mb-4">
    <input type="email" id="form6Example5" class="form-control" />
    <label class="form-label" for="form6Example5">Email</label>
  </div> -->

  <!-- Number input -->
  <!-- <div class="form-outline mb-4">
    <input type="number" id="form6Example6" class="form-control" />
    <label class="form-label" for="form6Example6">Phone</label>
  </div> -->

  <!-- Message input -->
  <div class="form-outline mb-4">
    <textarea class="form-control" id="form6Example7" rows="4" name="comment"></textarea>
    <label class="form-label" for="form6Example7">Additional information on transaction</label>
  </div>

  <!-- Checkbox -->
  <!-- <div class="form-check d-flex justify-content-center mb-4"> -->
    <!-- <input class="form-check-input me-2" type="checkbox" value="" id="form6Example8" checked /> -->
    <!-- <label class="form-check-label" for="form6Example8"> discount </label> -->
  <!-- </div> -->

  <!-- Submit button -->
  <button type="submit" class="btn  btn-block mb-4" style="background-color:#012241;">Place order</button>
</form>
<script>
function showHint(str) {
  if (str.length == 0) {
    document.getElementById("txtHint").innerHTML = "";
    return;
  } else {
    const xmlhttp = new XMLHttpRequest();
    xmlhttp.onload = function() {
      document.getElementById("txtHint").innerHTML = this.responseText;
    }
  xmlhttp.open("GET", "loads.php?q=" + str);
  xmlhttp.send();
  }
}
function showPurchase(str) {
  if (str.length == 0) {
    document.getElementById("txPurch").innerHTML = "";
    return;
  } else {
    const xmlhttp = new XMLHttpRequest();
    xmlhttp.onload = function() {
      document.getElementById("txPurch").innerHTML = this.responseText;
    }
  xmlhttp.open("GET", "loadpurchases.php?q=" + str);
  xmlhttp.send();
  }
}
</script>
<?php
include'../includes/footer.php';
?>