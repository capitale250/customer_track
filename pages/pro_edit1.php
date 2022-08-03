<?php
include('../includes/connection.php');
			$zz = $_POST['id'];
			// $pc = $_POST['prodcode'];
			$pname = $_POST['prodname'];
            $desc = $_POST['description'];
            $pr = $_POST['price'];
            // $cat = $_POST['category'];
		
	 			$query = 'UPDATE productS set NAMEP="'.$pname.'",
					DESCRIPTION="'.$desc.'", PRICE="'.$pr.'"  WHERE
					PRODUCT_ID ="'.$zz.'"';
					$result = mysqli_query($db, $query) or die(mysqli_error($db));

							
?>	
	<script type="text/javascript">
			alert("You've Update Product Successfully.");
			window.location = "product.php";
		</script>