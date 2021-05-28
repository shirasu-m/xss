<?php
$name=$_POST["cracked1"];
$email=$_POST["cracked2"];
$detail=$_POST["cracked3"];
$info=[$name, $email, $detail];

$fp=fopen('trap.csv','a');
fputcsv($fp,$info);
fclose($fp);
header('Location: confirm_done.php');
exit();
?>
