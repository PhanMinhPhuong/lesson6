<?php
$host = "localhost"; //địa chỉ mysql server sẽ kết nối đến
$dbname="bai_tap_so_6"; //tên database sẽ kết nối đến
$username = "root"; //username để kết nối đến database 
$password = ""; // mật khẩu để kết nối đến database
$pdo = new PDO("mysql:host=$host; dbname=$dbname", $username, $password);  // kết nối đến database. $conn gọi là đối tượng kết nối
if(!$pdo){
    die ("kết nối không thành công".mysql_error());
}
else{
    echo("kết nối thành công");
}
if(!$dbname){
    die ("không tìm thấy dữ liệu".mysql_error());
}
else{
    echo("đã tìm thấy dữ liệu");
}
//create
$sql="CREATE TABLE IF NOT EXISTS LichSuGD(
    STT int NOT NULL AUTO_INCREMENT PRIMARY KEY,
    NgayGD date NOT NULL,
    LoaiGD varchar(50) NOT NULL,
    Sotien float NOT NULL,
    Mota varchar(100) NOT NULL
    );";
$lsgd =$pdo->prepare($sql);
$lsgd->execute();

$sql="INSERT INTO LichSuGD(
    STT,NgayGD,LoaiGD,Sotien,Mota
)
VALUES
('ID01','8/25/2023','rút tiền',100,'Rút tiền'),
('ID02','5/20/2023','rút tiền',900,'Rút tiền'),
('ID03','9/11/2023','rút tiền',800,'Rút tiền'),
('ID04','9/12/2023','rút tiền',200,'Rút tiền'),
('ID05','3/17/2023','rút tiền',500,'Rút tiền'),
('ID06','2/09/2023','rút tiền',500,'Rút tiền');
";
//$lsgd =$pdo->prepare($sql);
//$lsgd ->execute();

$sql = "UPDATE LichSuGD SET Sotien =1000
WHERE STT= 'ID04'";
$lsgd =$pdo->prepare($sql);
$lsgd ->execute();

$sql= "DELETE FROM LichSuGD WHERE STT= 'ID05'";
$lsgd =$pdo->prepare($sql);
$lsgd ->execute();
if(!$lsgd){
    die ("Không thể xóa dữ liệu".mysql_error());;
}
else{
    echo("Xóa dữ liệu thành công");
}

?>