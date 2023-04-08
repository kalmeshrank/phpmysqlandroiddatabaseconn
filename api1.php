<?php

include 'db_conn.php';
$conn=mysqli_connect("localhost","root","","my_db");
if($conn){
$name=$_POST["name"];
$username=$_POST["username"];
$password=$_POST["password"];
$query="INSERT INTO `table_user` (`id`, `name`, `username`, `password`) VALUES (NULL, 'kamlesh', 'kamleshrank', '1234')";
$check=mysqli_query($conn,$query);
echo json_encode(array('response'=>"Inserted Successfully"));
if($check){
    echo"data inserted";
}
else {
        echo"inserted failed";
    }
}
else{
    echo"error";
}

?>