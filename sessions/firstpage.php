<?php

session_start();
$_SESSION['skd'] = 'helloindia';
$_SESSION['visits']++;
?>

my session id is : <?=session_id()?><br>
<?php 
echo session_id();
?>

my content is "helloindia"....
<br>
<?php
print_r ($_SESSION);
?>
<br>
<br>
u have visited this page <?php echo $_SESSION['visits'];?> times now........
<br>
<a href = "secondpage.php">go here!</a>
