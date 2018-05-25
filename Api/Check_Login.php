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
        $Email  = $_POST['email'];
        $Password  = $_POST['password'];
        echo $Email." ".$Password;
        try{
            if(!empty($Email) && !empty($Password))
            {
                $sqlQuery = "SELECT * FROM user WHERE user_Email='$Email' AND user_Password='$Password'";
                $getJson = $conn->prepare($sqlQuery);
                $getJson->execute();
                $result = $getJson->fetchAll(PDO::FETCH_ASSOC);
                if(count($result) > 0) {
                    foreach($result as $data)
                    {
                        $_SESSION['id']=$data['user_id'];
                        $_SESSION['Name']=$data['user_Name'];
                        $_SESSION['PhoneNo']=$data['user_PhoneNo'];
                        $_SESSION['Email']=$data['user_Email'];
                        $_SESSION['User_Type']=$data['user_Role'];


                    }
                    $_SESSION['loggedIn']=true;


                    echo '<script type="text/javascript"> window.open("../pages/dashboard.php","_self");</script>';            //  On Successful Login redirects to home.php
                    die();
                }
                else{
                    echo '<script type="text/javascript">alert("Authentication Error !!!");</script>';
                    echo '<script type="text/javascript"> window.open("../index.php","_self");</script>';
                    die();
                }
            }
            else{
                echo '<script type="text/javascript">alert("Please Fill Email And Password...");</script>';
                //echo '<script type="text/javascript"> window.open("../index.php","_self");</script>';
                die();
            }

        }catch (PDOException $e){
            echo '<script type="text/javascript">alert("Error Try Again !!!");</script>';
            echo '<script type="text/javascript"> window.open("../index.php","_self");</script>';
            die();
        }
    }
}
if(isset($_POST['login']))   // it checks whether the user clicked login button or not
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