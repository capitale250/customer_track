<?php
include('../includes/connection.php');
    $emails = $_POST['emailp'];
        echo "===$emails";
        echo 'yyyyyyyyy';
        $to      = 'capkrypton@gmail.com';
        $subject = 'the subject';
        $message = 'hello';
        $headers = 'From: ngororano.amstrongh@gmail.com' . "\r\n" .
            'Reply-To: ngororano.amstrongh@gmail.com' . "\r\n" .
            'X-Mailer: PHP/' . phpversion();

        mail($to, $subject, $message, $headers);
?>
<script type="text/javascript">
			alert("email sent Successfully.");
			window.location = "birthdays.php";
		</script>