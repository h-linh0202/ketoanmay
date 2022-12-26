<?php
    require("../database/connect.php");


    if(isset($_GET['id'])){
        $Id = $_GET['id'];
    }

  if(isset($_POST['capnhap'])){
    $Id = $_GET['id'];
    $Mahang = $_POST['Mahang'];
    $Tenhang = $_POST['Tenhang'];
    $Donvitinh = $_POST['Donvitinh'];
    $Soluongton = $_POST['Soluongton'];


    if($Tenhang == "")
    {
        echo "Không được để trống";
    }
    
    else{ 
        $sql = "UPDATE hanghoa
                SET Mahang = '$Mahang', Tenhang = '$Tenhang', Donvitinh = '$Donvitinh', Soluongton = '$Soluongton'
                WHERE Id = '$Id'
                ";
        $result = $conn->query($sql);
        
    }
    
    if($Tenhang == true){
        
        header('Location:hanghoa.php');
        
    }

}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!doctype html>
    <html lang="en">
      <head>
        <title>Title</title>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
      </head>
      <body>
      <form action="" method="post" >
                    <div class="form-row" >
                      <div class="form-group col-md-6">
                        <label for="inputEmail4">Mã hàng</label>
                        <input type="text" class="form-control" name="Mahang" placeholder="Mã hàng">
                      </div>
                      <div class="form-group col-md-6">
                        <label for="inputPassword4">Tên hàng</label>
                        <input type="text" class="form-control" name="Tenhang" placeholder="Tên hàng">
                      </div>
                    </div>
                    <div class="form-group col-md-13" >
                      <label for="inputAddress">Đơn vị tính</label>
                      <input type="text" class="form-control" name="Donvitinh" placeholder="Đơn vị tính">
                    </div>
                    <div class="form-group col-md-13">
                      <label for="inputAddress2">Số lượng tồn</label>
                      <input type="text" class="form-control" name="Soluongton" placeholder="Số lượng tồn">
                    </div>
        <input type="submit" value="Thêm" name="capnhap">
   </form>



        <!-- Optional JavaScript -->
        <!-- jQuery first, then Popper.js, then Bootstrap JS -->
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
      </body>
