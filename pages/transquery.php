<?php
include('../includes/connection.php');
		
			$cname = $_POST['cust_name'];
		    $prod_id = (int)$_POST['proname'];
			$cost = (double)$_POST['total_cost'];
	   	    $comment = $_POST['comment'];
            echo"$cname $pname  $cost $comment";
            // $query1 = ' SELECT * FROM  customer where FIRST_NAME REGEXP '(.*\"level_id\":$course_level_id.*)''';
            $query ='SELECT CUST_ID FROM  customer where FIRST_NAME="'.$cname.'" ';
			$result = mysqli_query($db, $query) or die(mysqli_error($db));
            $row = mysqli_fetch_assoc($result);
            $cust_id=(int) $row['CUST_ID'];
            echo" =====$cust_id";
            // $query1 ='SELECT PRODUCT_ID FROM  products where NAMEP ="'.$pname.'" ';
			// $result1 = mysqli_query($db, $query1) or die(mysqli_error($db));
            // $row1 = mysqli_fetch_assoc($result1);
            // $prod_id=(int)$row1['PRODUCT_ID'];
            // echo"=====$prod_id";
            $date = date('Y-m-d H:i:s');
             echo"=====$date";

            $query4='SELECT COUNT(*) as total  FROM transactions  where prodid ="'.$prod_id.'" AND userid="'.$cust_id.'"  ';
            $result4 = mysqli_query($db, $query4) or die(mysqli_error($db));
            $row4 = mysqli_fetch_assoc($result4);
            $tota=$row4['total'];

            $total=(int) substr($tota, -1);
            echo"xxxxxx$total.xxxxxxx";
            if ($total == 4) {

                echo '<script language="javascript">';
                echo 'alert("deserves a 20% discount")';
             
                echo '</script>';
            
                $discount=$cost*20/100;
                $result3 =mysqli_query($db,"INSERT INTO transactions
                              (prodid,userid,totalcost,transaction_date,dicount)
                                VALUES ('{$prod_id}','{$cust_id}','{$cost}','{$date}','{$discount}')");
            } elseif($total== 9){
                echo '<script language="javascript">';
                echo 'alert("deserves a 30%discount")';
                echo '</script>';
                $discount=$cost*30/100;
                $result3 =mysqli_query($db,"INSERT INTO transactions
                              (prodid,userid,totalcost,transaction_date,dicount)
                                VALUES ('{$prod_id}','{$cust_id}','{$cost}','{$date}','{$discount}')");

            }else {
                # code...
                echo '<script language="javascript">';
                echo 'alert("no discount")';
                echo '</script>';
                $result3 =mysqli_query($db,"INSERT INTO transactions
                              (prodid,userid,totalcost,transaction_date)
                                VALUES ('{$prod_id}','{$cust_id}','{$cost}','{$date}')");
            }
            
           

							
?>	
	<script type="text/javascript">
			alert("transaction Successfully.");
			window.location = "transactform.php";
		</script>