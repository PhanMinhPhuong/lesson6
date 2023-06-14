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
$sql ="CREATE TABLE IF NOT EXISTS SinhVien(
    MaSV char(6) NOT NULL PRIMARY KEY,
    Hoten nvarchar(50) NOT NULL,
    Ngaysinh datetime NOT NULL,
    Lophoc char(6) NOT NULL,
    DiemTB float NOT NULL
    );";
$qlsv = $pdo->prepare($sql);
$qlsv ->execute();
//insert 
$sql="INSERT INTO SinhVien(
    MaSV, Hoten, Ngaysinh, Lophoc, DiemTB)
    VALUES
    ('ID01','Phan Minh Phuong','11/23/2002','K56SD3',8.0 ),
    ('ID02','Tran Thi Lan','12/13/2002','K56SD3',9.0 ),
    ('ID03','Nguyen Van Hung','06/21/2002','K56SD3',8.9 ),
    ('ID04','Hoang Quoc Huy','02/22/2002','K56SD3',7.5 ),
    ('ID05','Doan Xuan Phuc','04/25/2002','K56SD3',7.8 );
    ";
//$qlsv =$pdo->prepare($sql);
//$qlsv ->execute();

//update
$sql="UPDATE SinhVien SET DiemTB =8.9 WHERE MaSV='ID03';";
$qlsv = $pdo->prepare($sql);
$qlsv ->execute();
//delete 
$sql="DELETE FROM SinhVien WHERE MaSV='ID05';";
$qlsv = $pdo->prepare($sql);
$qlsv ->execute();
?>