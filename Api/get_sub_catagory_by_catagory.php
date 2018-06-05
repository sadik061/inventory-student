<?php
if(!isset($_SESSION))
{
    session_start();
}
require_once __DIR__ . '/Connection.php';
class DisplayJsonFood{
    function getAllJsonFood(){
        $connection = new Connection();
        $conn = $connection->getConnection();
        $jsonFood = array();
        $status="status";
        $message = "message";
        $main_catagory   = $_POST['main_catagory'];
        //$name=$_POST['Name'];
        // echo '<script type="text/javascript">alert("Reached");</script>';
        try{
            $sqlQuery = "SELECT sub_catagory_id,catagory.catagory_id as main_catagory_id,catagory_Name,sub_catagory_Name
FROM sub_catagory,catagory where sub_catagory.catagory_id='$main_catagory' and sub_catagory.catagory_id=catagory.catagory_id";
            $getJson = $conn->prepare($sqlQuery);
            $getJson->execute();
            $result = $getJson->fetchAll(PDO::FETCH_ASSOC);
            foreach($result as $data)
            {
                array_push($jsonFood,
                    array(
                        'sub_catagory_id'=>$data['sub_catagory_id'],
                        'catagory_id'=>$data['main_catagory_id'],
                        'catagory_Name'=>$data['catagory_Name'],
                        'sub_catagory_Name'=>$data['sub_catagory_Name']
                    ));
            }
        }catch (PDOException $e){
            echo "Error while displaying json : " . $e->getMessage();
        }
        if($sqlQuery){
            echo json_encode(array("sub_catagory_data"=>$jsonFood,$status=>1,$message=>"Success"));
        }else{
            echo json_encode(array("sub_catagory_data"=>null,$status=>0, $message=>"Failed while displaying Main Data"));
        }
    }
}
if(isset($_SESSION['loggedIn']))   // Checking whether the session is already there or not if
    // true then header redirect it to the home page directly
{
    $json = new DisplayJsonFood();
    $json->getAllJsonFood();
}else
{
    $response["success"] = 0;
    $response["message"] = "Bad Request";
    echo json_encode($response);
    /* Redirect browser */
}

