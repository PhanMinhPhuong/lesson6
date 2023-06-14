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
    echo("Đã tìm thấy dữ liệu");
}
//create
$sql_stmt ="CREATE TABLE IF NOT EXISTS SinhVien(
    MaSV char(6) NOT NULL PRIMARY KEY,
    Hoten nvarchar(50) NOT NULL,
    Ngaysinh datetime NOT NULL,
    Lophoc char(6) NOT NULL,
    DiemTB float NOT NULL
    );";
$result = mysqli_query($conn,$sql_qlsv);
if(!$result){
    die ("Không tạo được bảng".mysql_error());
}
else{
    echo("Tạo bảng thành công");
}
//insert
$sql_qlsv ="INSERT INTO SinhVien(
    MaSV, Hoten, Ngaysinh, Lophoc, DiemTB
)
    VALUES
    ('SV0001','Phan Minh Phuong','11/23/2002','K56SD3',8.0 ),
    ('SV0002','Tran Thi Lan','12/13/2002','K56SD3',9.0 ),
    ('SV0003','Nguyen Van Hung','06/21/2002','K56SD3',8.9 ),
    ('SV0004','Hoang Quoc Huy','02/22/2002','K56SD3',7.5 ),
    ('SV0005','Doan Xuan Phuc','04/25/2002','K56SD3',7.8 );
    ";
//update
$sql_qlsv = "UPDATE SinhVien SET DiemTB = 8.9 WHERE MaSV ='SV0003'";
$result = mysqli_query($conn,$sql_qlsv);

//delete
$sql_qlsv = "DELETE FROM SinhVien WHERE MaSV ='SV0003'";
$result=mysqli_query($conn,$sql_qlsv);
if(!$result){
    die ("Không thể xóa dữ liệu".mysql_error());;
}
else{
    echo("Xóa dữ liệu thành công");
}
?>
