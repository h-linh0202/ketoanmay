<?php
    include "../database/connect.php";
    $sql  = "SELECT * FROM hanghoa";
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
            <h3 style="text-align: center;">Hàng hóa</h3>
            <div class="container container__khachhang" style="height: 350px;">

                <form action="./hanghoa_add.php" method="POST" >
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
                    <div class="form-group col-md-13">
                      <label for="inputAddress">Đơn vị tính</label>
                      <input type="text" class="form-control" name="Donvitinh" placeholder="Đơn vị tính">
                    </div>
                    <div class="form-group col-md-13">
                      <label for="inputAddress2">Số lượng tồn</label>
                      <input type="text" class="form-control" name="Soluongton" placeholder="Số lượng tồn">
                    </div>
                    
                    <button type="submit" name="submit_form2" class="btn btn-primary">Add</button>
                </form>


                <!-- table khách hàng -->

                <div class="table__khachhang " style="margin-top: 100px">
                    <div class="table-responsive">
                        <div class="table-wrapper" style="height: 400px; overflow: auto;">
                            
                            <table class="table table-striped table-hover table-bordered">
                                <thead>
                                    <tr>
                                        <th>Mã hàng</th>
                                        <th>Tên hàng</th>
                                        <th>Đơn vị tính</th>
                                        <th>Số lượng tồn</th>
                                        <th>Thao tác</th>
                                      
                                    </tr>
                                </thead>
                                <tbody>

                                    <?php
                                        if(mysqli_num_rows($result) > 0){
                                            while($row = mysqli_fetch_assoc($result)){
                                                ?>
                                                <tr>
                                                    <td><?php echo $row['Mahang'] ?></td>
                                                    <td><?php echo $row['Tenhang'] ?></td>
                                                    <td><?php echo $row['Donvitinh'] ?></td>
                                                    <td><?php echo $row['Soluongton'] ?></td>
                                                   


                                                
                                                    <td>
                                                        <a href="./hanghoa_edit.php?id=<?php echo $row['Id'];?>">Sửa</a> <span style="margin: 0 5px;"></span>
                                                        <a href="./hanghoa_delete.php?id=<?php echo $row['Id'];?>">Xóa</a>
                                                       
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


