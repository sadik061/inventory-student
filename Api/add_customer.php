<?php
if(!isset($_SESSION))
{
    session_start();
}
// include db connect class
require_once __DIR__ . '/Connection.php';
class InsertDetails{
    function startInsertDetails(){
        $connection = new Connection();
        $conn = $connection->getConnection();
        //array for json response
        $response = array();
        $name  = $_POST['name'];
        $companyName  = $_POST['companyName'];
        $title   = $_POST['title'];
        $email  = $_POST['email'];
        $contactType   = $_POST['contactType'];
        $mobile   = $_POST['mobile'];
        $phone   = $_POST['phone'];
        $address   = $_POST['address'];

        //getting user email via login session just to tract who is inserting data or updating data
        //getting user email via login session just to tract who is inserting data or updating data
        $Entry_By  =  $_SESSION['id'];
        date_default_timezone_set('Asia/Dhaka');

        // Then call the date functions
        $input_Time = date('Y-m-d H:i:s');
        try{
            // echo $input_Time;
            //echo !empty($Name)." ".!empty($Cell_No)." ".isset($Point)." ".isset($Comission);


                $sqlInsert = "INSERT INTO customer (customer_id, customer_Name, customer_companyName
, customer_title, customer_email, customer_contactType, customer_MobileNo, customer_PhoneNo, customer_address
, customer_Entry_By, customer_Input_Time)
  VALUES (0, '$name', '$companyName', '$title', '$email', '$contactType', '$mobile', '$phone'
  , '$address', '$Entry_By', '$input_Time')";
                $conn->exec($sqlInsert);
                //echo $sqlInsert;


        }catch (PDOException $e){
            echo "Error while inserting ".$e->getMessage();
        }
        //cek is the row was inserted or not

        if($sqlInsert){
            //success inserted
            echo '<script type="text/javascript">alert("Successfully Inserted !!!");</script>';
            echo '<script type="text/javascript"> window.open("../Pages/Customer.php","_self");</script>';
            die();
        }else{

            echo '<script type="text/javascript">alert("Error , Try Again!!!");</script>';
            //echo '<script type="text/javascript"> window.open("../Pages/Customer.php","_self");</script>';
            die();
        }
    }
}
if(isset($_SESSION['loggedIn']))   // it checks whether the user clicked login button or not
{
    $insert = new InsertDetails();
    $insert->startInsertDetails();
}
else
{
    echo '<script type="text/javascript">alert("Bad Request !!!");</script>';
    echo '<script type="text/javascript"> window.open("../index.php","_self");</script>';
    die();
}