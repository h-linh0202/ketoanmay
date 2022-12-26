<?php
    include "../database/connect.php";

    if(isset($_POST['submit_form'])){

    $Makh = $_POST['Makh'];
    $Tenkh = $_POST['Tenkh'];
    $Masothue = $_POST['Masothue'];
    $Diachi = $_POST['Diachi'];
    $Tinh = $_POST['Tinh'];
    $Dienthoai = $_POST['Dienthoai'];
    $Fax =  $_POST['Fax'];


        
    if(!empty($Makh) && !empty($Tenkh) && !empty($Masothue) && !empty($Diachi) && !empty($Tinh) && !empty($Dienthoai) && !empty($Fax)){
        $sql = "INSERT INTO `khachhang` (`Makh`, `Tenkh`, `Masothue`, `Diachi`, `Tinh`, `Dienthoai`, `Fax`) VALUES ('$Makh', '$Tenkh', '$Masothue', '$Diachi', '$Tinh', '$Dienthoai', '$Fax')";
        // print_r($_POST);
        
        if($conn->query($sql)===TRUE){

            echo"
                <script>
                    alert('Đã thêm dữ liệu thành công');
                    window.location.assign('../khachhang/khachhang.php');
                </script>
        ";

        }
        
        else{
            echo"Lỗi";
        }
    }
    
    else{
            echo"
            <script>
                alert('Vui lòng nhập đủ các trường');
                window.location.assign('../khachhang/khachhang.php');
           </script>
            ";   
    }

}





