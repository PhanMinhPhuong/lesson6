<?php
$severname = "localhost";
$username = "root";
$password = "";
$database = "bai_tap_so_6";
//connect
$conn = mysqli_connect($severname,$username,$password,$database);
if(!$conn){
    die ("kết nối không thành công".mysql_error());}
else{
    echo("kết nối thành công");
}

if(!$database){
    die ("không tìm thấy dữ liệu".mysql_error());
}
else{
    echo("đã tìm thấy dữ liệu");
}
//create 
$sql_lsgd ="CREATE TABLE IF NOT EXISTS LichSuGD(
    STT int NOT NULL AUTO_INCREMENT PRIMARY KEY,
    NgayGD date NOT NULL,
    LoaiGD varchar(50) NOT NULL,
    Sotien float NOT NULL,
    Mota varchar(100) NOT NULL
    );";
$result = mysqli_query($conn,$sql_lsgd);
if(!$result){
    die ("Không tạo được bảng".mysql_error());
}
else{
    echo("Tạo bảng thành công");
}
$sql_lsgd ="ALTER TABLE LichSuGD AUTO_INCREMENT=1;";
$result = mysqli_query($conn,$sql_lsgd);

//insert
$sql_lsgd="INSERT INTO LichSuGD(
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
//$result = mysqli_query($conn,$sql_lsgd);
//if(!$result){
//    die ("Không thêm được dữ liệu".mysql_error());
//}
//else{
//    echo("Thêm dữ liệu thành công");
//}
$sql_lsgd = "UPDATE LichsuGD SET Sotien = 1000
WHERE STT= ID04";
$result = mysqli_query($conn,$sql_lsgd);

$sql_lsgd = "DELETE FROM LichSuGD WHERE STT= ID01";
$result=mysqli_query($conn,$sql_lsgd);
if(!$result){
    die ("Không thể xóa dữ liệu".mysql_error());;
}
else{
    echo("Xóa dữ liệu thành công");
}

?>