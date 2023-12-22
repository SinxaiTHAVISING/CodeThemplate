<?php
$servername = "localhost";//ຊື່ໂຮສ
$database = "School";//ຊື່ຖານຂໍ້ມູນ
$username = "root";//ຊື່ຜູ້ໃຊ້
$password = "";
 
// Create connection
$conn = mysqli_connect($servername, $username, $password, $database);
 
// Check connection
 
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
echo "Connected successfully";

//ອອກຈາກການເຊື່ອມຕໍ່
mysqli_close($conn);
?>