<?php
header('Content-Type:application/json');
header('Acess-Control-Allow-Orgin: *');
header('Access-Control-Allow-Method : DELETE');
header('Access-Control-Allow-Headers : Acess-Control-Allow-Headers,Content-Type,Acess-Control-Allow-Method,Authorization,X-Requested-With');
include "config.php";
$data = json_decode(file_get_contents("php://input"), true);
$student_id = $data['sid'];
$sql = "DELETE FROM articles WHERE id = {$student_id}";

if(mysqli_query($conn, $sql)){
    echo json_encode(array('message'=>'Student Record delete','status'=>true));

}else{
    echo json_encode(array('message'=>'Student Record not delete','status'=>false));
}

?>