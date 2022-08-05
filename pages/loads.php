<?php
include'../includes/connection.php';
?>
<?php
// Array with names
$a[] = "";


// get the q parameter from URL
$q = $_REQUEST["q"];

$hint = "";

// lookup all hints from array if $q is different from ""
       $query =  "SELECT LAST_NAME FROM customer WHERE FIRST_NAME REGEXP '$q'";
                      $result = mysqli_query($db, $query) or die (mysqli_error($db));
        
                      while ($row = mysqli_fetch_assoc($result)) {
                          array_push($a,$row['LAST_NAME'] );
                      }

if ($q !== "") {
  $q = strtolower($q);
  $len=strlen($q);
  foreach($a as $name) {
    // if (stristr($q, substr($name, 0, $len))) {
      if ($hint === "") {
        $hint = $name;
      } else {
        $hint .= ", $name";
      }
    // }
  }
}

// Output "no suggestion" if no hint was found or output correct values
echo $hint === "" ? "$tota no suggestion" : $hint;
?>
