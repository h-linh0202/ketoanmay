<?php
    include "../database/connect.php";
    $sql  = "SELECT * FROM khachhang";
    $result = mysqli_query($conn, $sql);
    if(!$result){
        echo "Lỗi";
    }

?>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../style.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.1.1/css/all.css" integrity="sha384-O8whS3fhG2OnA5Kas0Y9l3cfpmYjapjI0E4theH4iuMD+pLhbf6JI0jIMfYcK3yZ" crossorigin="anonymous">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
      
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    


    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto|Varela+Round|Open+Sans">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
</head>
<body>
    <div class="app">
        <?php
            include "../sidebar.php"
        ?>

        <div class="body">
        <?php
            include "../header.php"
        ?>
                    <br>
            <h3 style="text-align: center;">Khách hàng</h3>
            <div class="container container__khachhang">

                <form action="./khachhang_add.php" method="POST">
                    <div class="form-row" >
                      <div class="form-group col-md-6">
                        <label for="inputEmail4">Mã khách hàng</label>
                        <input type="text" class="form-control" name="Makh" placeholder="Mã khách hàng">
                      </div>
                      <div class="form-group col-md-6">
                        <label for="inputPassword4">Tên khách hàng</label>
                        <input type="text" class="form-control" name="Tenkh" placeholder="Tên khách hàng">
                      </div>
                    </div>
                    <div class="form-group col-md-13" >
                      <label for="inputAddress">Mã số thuế</label>
                      <input type="text" class="form-control" name="Masothue" placeholder="Mã số thuế">
                    </div>
                    <div class="form-group col-md-13">
                      <label for="inputAddress2">Địa chỉ</label>
                      <input type="text" class="form-control" name="Diachi" placeholder="Địa chỉ">
                    </div>
                    <div class="form-row">
                      <div class="form-group col-md-4">
                        <label for="inputCity">Tỉnh/TP</label>
                        <input type="text" class="form-control" name="Tinh" placeholder="Tỉnh/TP">
                      </div>
                      <div class="form-group col-md-4">
                        <label for="tinh">Điện thoại</label>
                        <input type="text" class="form-control" name="Dienthoai" placeholder="Điện thoại">
                      </div>
                      <div class="form-group col-md-4">
                        <label for="tinh">Fax</label>
                        <input type="text" class="form-control" name="Fax" placeholder="Fax">
                      </div>
                     
                    </div>
                    <button type="submit" name="submit_form" class="btn btn-primary">Thêm</button>
                </form>


                <!-- table khách hàng -->

                <div class="table__khachhang">
                    <div class="table-responsive">
                        <div class="table-wrapper" style="height: 400px; overflow: auto;">
                            
                            <table class="table table-striped table-hover table-bordered">
                                <thead>
                                    <tr>
                                        <th>Mã KH</th>
                                        <th>Tên KH</th>
                                        <th>Mã số thuế</th>
                                        <th>Địa chỉ</th>
                                        <th>Tỉnh/TP</th>
                                        <th>Điện thoại</th>
                                        <th>Fax</th>
                                        <th>Thao tác</th>
                                    </tr>
                                </thead>
                                <tbody>

                                    <?php
                                        if(mysqli_num_rows($result) > 0){
                                            while($row = mysqli_fetch_assoc($result)){
                                                ?>
                                                <tr>
                                       
                                                    <td><?php echo $row['Makh'] ?></td>
                                                    <td><?php echo $row['Tenkh'] ?></td>
                                                    <td><?php echo $row['Masothue'] ?></td>
                                                    <td><?php echo $row['Diachi'] ?></td>
                                                    <td><?php echo $row['Tinh'] ?></td>
                                                    <td><?php echo $row['Dienthoai'] ?></td>
                                                    <td><?php echo $row['Fax'] ?></td>


                                                
                                                    <td>
                                                        <a href="./khachhang_edit.php?id=<?php echo $row['Id'];?>">Sửa</a>
                                                        <span style="margin: 0 5px;"></span>
                                                        <a href="./khachhang_delete.php?id=<?php echo $row['Id'];?>">Xóa</a>
                                                        
                                                       
                                                    </td>
                                                </tr>
                                                <?php
                                            
                                    
                    
                                            }
                                        }
                                    ?>
                                    

                                </tbody>
                            </table>
                           
                        </div>
                    </div>  
                </div>


                
            </div>
               
        </div>
    </div>
</body>
</html>


