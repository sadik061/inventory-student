<?php  if(!isset($_SESSION))
{
    session_start();
} ;

?>
<?php
$_SESSION['loggedIn']=false;
$_SESSION['id']=null;
$_SESSION['Name']=null;
$_SESSION['PhoneNo']=null;
$_SESSION['Email']=null;
$_SESSION['User_Type']=null;
header("Location: http://localhost/inventory/Pages/login.php");
exit;
?>