<?php 

if(array_key_exists('id',$_GET))
   $classId = $_GET['id'] ;
else
   die('You need id');


   require('dbconnection.php'); 


   $sql = " SELECT *  FROM product WHERE id=$classId ; ";

//Выполнение запроса к бд
$result = $conn->query($sql);


if ($result->num_rows > 0) {

   $data = [];

   while($row = $result->fetch_assoc()) {

       array_push($data,$row);

   }


} elseif($result->num_rows === 0){

  $data = "No product were found";

}elseif($result->num_rows === 1){
   $data = $result->fetch_assoc();
}


?>