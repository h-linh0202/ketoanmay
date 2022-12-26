<?php
      require("../database/connect.php");
        if(isset($_POST['id'])){
        $Id = $_POST['id'];

    }
?>


<?php
    $Id = $_GET['id'];
    $sql = "DELETE FROM khachhang WHERE Id =' $Id'; ";

    if(mysqli_query($conn, $sql)){
        
        echo"
                <script>
                    alert('Đã xóa dữ liệu thành công');
                    window.location.assign('../khachhang/khachhang.php');
                </script>
        ";
        
    }
    else{
        echo "Xóa thất bại";
    }

    
?>