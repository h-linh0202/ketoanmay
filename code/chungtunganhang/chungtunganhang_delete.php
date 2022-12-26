<?php

include "../database/connect.php";


    $Id = (int)$_GET['Id'];
    $sql = "DELETE FROM hanghoa WHERE `Id` = {$Id}";

    if(!mysqli_query($conn, $sql)){

        echo "Lỗi";
    }
    else{
        echo "Xóa thành công";

    }


?>