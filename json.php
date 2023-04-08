<?php

// include 'db_conn.php';
$conn=mysqli_connect("localhost","root","","my_db");
if($conn){
// $name=$_POST["name"];
// $username=$_POST["username"];
// $password=$_POST["password"];
$query=" SELECT* FROM tbl_user";
$check=mysqli_query($conn,$query);
$output=mysqli_fetch_all($check,MYSQLI_ASSOC);

echo json_encode($output,JSON_PRETTY_PRINT);

$file_name ="my-".date("d-m-y").".json";


if($check){
    echo"data fetch";
   
    
}
else {
        echo"fetch failed";
    }
}
else{
    echo"error";
}

?>