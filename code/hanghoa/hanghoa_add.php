<?php
    include "../database/connect.php";

    if(isset($_POST['submit_form2'])){

    $Mahang = $_POST['Mahang'];
    $Tenhang = $_POST['Tenhang'];
    $Donvitinh = $_POST['Donvitinh'];
    $Soluongton = $_POST['Soluongton'];
 

        
    if(!empty($Mahang) && !empty($Tenhang) && !empty($Donvitinh) && !empty($Soluongton)){
        $sql = "INSERT INTO `hanghoa` (`Mahang`, `Tenhang`, `Donvitinh`, `Soluongton`) VALUES ('$Mahang', '$Tenhang', '$Donvitinh', '$Soluongton')";
        print_r($_POST);
        
        if($conn->query($sql)===TRUE){

            echo"
                <script>
                    alert('Đã thêm dữ liệu thành công');
                    window.location.assign('../hanghoa/hanghoa.php');
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
                window.location.assign('../hanghoa/hanghoa.php');

           </script>
            ";   
    }

}





