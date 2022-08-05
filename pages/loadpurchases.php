<?php
include'../includes/connection.php';
?>
<?php
// Array with names
$a[] = "Anna";


// get the q parameter from URL
$q = $_REQUEST["q"];


$purchase="";
$query ='SELECT CUST_ID FROM  customer where FIRST_NAME="'.$q.'" ';
$result = mysqli_query($db, $query) or die(mysqli_error($db));
$row = mysqli_fetch_assoc($result);
$cust_id=(int) $row['CUST_ID'];
$query4='SELECT COUNT(*) as total  FROM transactions  where  userid="'.$cust_id.'"  ';
$result4 = mysqli_query($db, $query4) or die(mysqli_error($db));
$row4 = mysqli_fetch_assoc($result4);
$tota=$row4['total'];

$purchase= substr($tota, -1);
// lookup all hints from array if $q is different from ""


// Output "no suggestion" if no hint was found or output correct values
echo $purchase === "" ? "no purchases" : $purchase;
?>
