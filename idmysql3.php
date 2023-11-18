<?php
try{
    $pdo = new PDO("mysql:host=localhost;dbname=demo", "root", "");
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch(PDOException $e){
    die("ERROR: Không thể kết nối. " . $e->getMessage());
}
try{
    $sql = "INSERT INTO persons (first_name, last_name, email) VALUES ('Ron', 'Weasley', 'ronweasley@mail.com')";    
    $pdo->exec($sql);
    $last_id = $pdo->lastInsertId();
    echo "Chèn bản ghi thành công. ID đã chèn cuối cùng là: " . $last_id;
} catch(PDOException $e){
    die("ERROR: Không thể thực thi câu lệnh $sql. " . $e->getMessage());
}
unset($pdo);
?>
