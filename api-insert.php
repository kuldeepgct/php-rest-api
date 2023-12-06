<?php
header('Content-Type:application/json');
header('Acess-Control-Allow-Orgin: *');
header('Acess-Control-Allow-Method:POST');
header('Acess-Control-Allow-Headers:Acess-Control-Allow-Headers,Content-Type,Acess-Control-Allow-Method,Authorization,X-Requested-With');
include "config.php";
$data = json_decode(file_get_contents("php://input"), true);
$title = $data['stitle'];
$des = $data['sdescription'];
$auth = $data['sauthor'];
$sql = "INSERT INTO articles(title, description, author) VALUES ('{$title}','{$des}','{$auth}')";

if(mysqli_query($conn,$sql)){
    echo json_encode(array('message'=>'student Record Inserted.','status'=>true));

}else{
    echo json_encode(array('message'=>'student Record not Inserted.','status'=>false));
}

?>