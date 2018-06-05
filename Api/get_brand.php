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
        //$name=$_POST['Name'];
        // echo '<script type="text/javascript">alert("Reached");</script>';
        try{
            $sqlQuery = "SELECT 
brand_id,
catagory.catagory_id as main_catagory_id,
catagory_Name,
sub_catagory.sub_catagory_id as main_sub_catagory_id,
sub_catagory_Name,
brand_Name 
FROM 
brand,sub_catagory,catagory 
where 
brand.catagory_id=catagory.catagory_id 
AND 
brand.sub_catagory_id=sub_catagory.sub_catagory_id";
            $getJson = $conn->prepare($sqlQuery);
            $getJson->execute();
            $result = $getJson->fetchAll(PDO::FETCH_ASSOC);
            foreach($result as $data)
            {
                array_push($jsonFood,
                    array(
                        'brand_id'=>$data['brand_id'],
                        'catagory_id'=>$data['main_catagory_id'],
                        'catagory_Name'=>$data['catagory_Name'],
                        'sub_catagory_id'=>$data['main_sub_catagory_id'],
                        'sub_catagory_Name'=>$data['sub_catagory_Name'],
                        'brand_Name'=>$data['brand_Name']
                    ));
            }
        }catch (PDOException $e){
            echo "Error while displaying json : " . $e->getMessage();
        }
        if($sqlQuery){
            echo json_encode(array("brand_data"=>$jsonFood,$status=>1,$message=>"Success"));
        }else{
            echo json_encode(array("brand_data"=>null,$status=>0, $message=>"Failed while displaying Main Data"));
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

