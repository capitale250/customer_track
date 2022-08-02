<?php
 $db = mysqli_connect('sql.freedb.tech', 'freedb_capitale', 'kv@tBmFX#bZ8$GB') or
        die ('Unable to connect. Check your connection parameters.');
        mysqli_select_db($db, 'freedb_capitale' ) or die(mysqli_error($db));


?>
