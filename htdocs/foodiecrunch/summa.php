<?php
$s=3?>
<?php
$to       = 'sabarinathan935@gmail.com';
$subject  = 'to say hi';
$message  =  'hi'.$s.'hello';
$headers  = 'From: foodiecrunchrooms@gmail.com' . "\r\n" .
            'MIME-Version: 1.0' . "\r\n" .
            'Content-type: text/html; charset=utf-8';
if(mail($to, $subject, $message, $headers))
    echo "Email sent";
else

    echo "Email sending failed";
?>