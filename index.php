<?php  if(!isset($_SESSION))
{
    session_start();
} ;

?>
<?php
$_SESSION['loggedIn']=false;
header("Location: http://localhost/inventory/Pages/login.php");
exit;
?>