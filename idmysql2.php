<?php

$link = mysqli_connect("localhost", "root", "", "demo");
 

if($mysqli === false){
    die("ERROR: Không thể kết nối. " . $mysqli->connect_error);
}

$sql = "INSERT INTO persons (first_name, last_name, email) VALUES ('Ron', 'Weasley', 'ronweasley@mail.com')";
if($mysqli->query($sql) === true){
   
    $last_id = $mysqli->insert_id;
    echo "Chèn bản ghi thành công. ID đã chèn cuối cùng là: " . $last_id;
} else{
    echo "ERROR: Không thể thực thi câu lệnh $sql. " . $mysqli->error;
}
 
$mysqli->close();
?>