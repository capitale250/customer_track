<?php
include'../includes/connection.php';
include'../includes/sidebar.php';

?>

<form role="form" method="post" action="transquery.php">
  <!-- 2 column grid layout with text inputs for the first and last names -->
  <div class="row mb-4">
    <div class="col">
      <div class="form-outline">
        <input type="text" id="form6Example1" class="form-control" name="cust_name" required/>
        <label class="form-label" for="form6Example1">customer name</label>
      </div>
    </div>
    <div class="col">
      <div class="form-outline">
        <input type="text" id="form6Example2" class="form-control" name="pro_name" required/>
        <label class="form-label" for="form6Example2">product name</label>
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
  <div class="form-check d-flex justify-content-center mb-4">
    <!-- <input class="form-check-input me-2" type="checkbox" value="" id="form6Example8" checked /> -->
    <label class="form-check-label" for="form6Example8"> discount </label>
  </div>

  <!-- Submit button -->
  <button type="submit" class="btn  btn-block mb-4" style="background-color:#012241;">Place order</button>
</form>
<?php
include'../includes/footer.php';
?>