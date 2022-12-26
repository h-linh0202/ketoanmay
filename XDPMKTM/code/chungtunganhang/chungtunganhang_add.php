<?php

    include "../database/connect.php";

    if(isset($_POST['submit_form2'])){

    $MaChungTu = $_POST['MaChungTu'];
    $LoaiChungTu = $_POST['LoaiChungTu'];
    $NgayChungTu = $_POST['NgayChungTu'];
    $SoChungTu = $_POST['SoChungTu'];
    $MaKh = $_POST['MaKh'];
    $TenKh = $_POST['TenKh'];
    $MSThue = $_POST['MSThue'];
    $DienGiai = $_POST['DienGiai'];
    $ThuChi = $_POST['ThuChi'];



        
    if(!empty($MaChungTu) && !empty($LoaiChungTu) && !empty($NgayChungTu) && !empty($SoChungTu)&& !empty($MaKh) && !empty($TenKh) && !empty($MSThue) && !empty($DienGiai) && !empty($ThuChi)){
        $sql = "INSERT INTO `chungtunganhang` (MaChungTu, LoaiChungTu, NgayChungTu, SoChungTu, MaKh, TenKh, MSThue, DienGiai, ThuChi) VALUES (' $MaChungTu', '$LoaiChungTu', '$NgayChungTu', '$SoChungTu', '$MaKh', '$TenKh', '$MSThue', '$DienGiai', '$ThuChi'";
        // print_r($_POST);
        
        if($conn->query($sql)===TRUE){

            echo"
                <script>
                    alert('Đã thêm dữ liệu thành công');
                    window.location.assign('../chungtunganhang/chungtunganhang.php');
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
                window.location.assign('../chungtunganhang/chungtunganhang.php');

           </script>
            ";   
    }

}





