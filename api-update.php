<?php
header('Content-Type:application/json');
header('Access-Control-Allow-Orgin : *');
header('Access-Control-Allow-Method : PUT');
header('Access-Control-Allow-Headers : Acess-Control-Allow-Headers,Content-Type,Acess-Control-Allow-Method,Authorization,X-Requested-With');
include "config.php";
$data = json_decode(file_get_contents("php://input"), true);
$id = $data['sid'];
$title = $data['stitle'];
$des = $data['sdescription'];
$auth = $data['sauthor'];
$sql = "UPDATE articles SET title ='{$title}', description = '{$des}', author = '{$auth}' WHERE id ={$id}";

if(mysqli_query($conn,$sql)){
    echo json_encode(array('message'=>'student Record Updated.','status'=>true));

}else{
    echo json_encode(array('message'=>'student Record not Updated.','status'=>false));
}

?>