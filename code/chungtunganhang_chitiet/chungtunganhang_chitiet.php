<?php
    include "../database/connect.php";
    $sql  = "SELECT * FROM chungtunganhang_chitiet";
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
            <div class="header">
                <div class="header__group">
                    <div class="header__group-item"><i class="fas fa-bars"></i></div>
                    <div class="header__group-item"><span>ghh <i class="fas fa-solid fa-chevron-down"></i></span></div>
                    <div class="header__group-item header__group-item3"> Dữ liệu kế toán</div>
                </div>
                <div class="header__group header__group2">

                    <div class="header__group2-item header__group2-item1">
                        <div class="header__group2-item1-search">
                            <div class="header__group2-item1-search-input">
                                <input type="text" placeholder="Nhập từ khóa tìm kiếm">
                            </div>
                            <div class="header__group2-item1-search-input header__group2-item1-search-input2">
                                <div class="header__group2-item1-search-input2-icon">
                                    <i class="fa fa-search" style="font-size:18px"></i>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="header__group2-item header__group2-item2">
                        <div class="header__group2-item2-item"><i style="font-size:24px" class="fa">&#xf141;</i></div>
                        <div class="header__group2-item2-item"><i style="font-size:24px" class="fa">&#xf013;</i></div>
                        <div class="header__group2-item2-item"><p>Help</p></div>
                        <div class="header__group2-item2-item"><i style="font-size:24px" class="fa">&#xf0f3;</i></div>
                    </div>

                    <div class="header__group2-item header__group2-item3">
                        <div class="header__group2-item3-item"><i style='font-size:24px; color: rgb(233, 200, 10);' class='far'>&#xf2bd;</i></div>
                        <div class="header__group2-item3-item">Hoai Linh Nguyen</div>
                        <div class="header__group2-item3-item"> <i class="fas fa-solid fa-chevron-down"></i></div>
                    </div>
                    
                </div>
            </div>
            <br>
            <h3 style="text-align: center;">Chứng từ ngân hàng chi tiết</h3>
            <div class="container container__khachhang" style="height: 350px;">

                <form action="./hanghoa_add.php" method="POST" >
                    <div class="form-row" >
                      <div class="form-group col-md-4">
                        <label for="inputEmail4">Mã hàng</label>
                        <input type="text" class="form-control" name="Mahang" placeholder="Mã hàng">
                      </div>
                      <div class="form-group col-md-4">
                        <label for="inputPassword4">Mã số</label>
                        <input type="text" class="form-control" name="Maso" placeholder="Mã số">
                      </div>
                      <div class="form-group col-md-4">
                        <label for="inputPassword4">Diễn giải chi tiêt</label>
                        <input type="text" class="form-control" name="Diengiaichitiet" placeholder="Diễn giải chi tiết">
                      </div>
                    </div>

                   

                    <div class="form-group col-md-14" >
                      <label for="inputAddress">Số tiền</label>
                      <input type="text" class="form-control" name="Sotien" placeholder="Số tiền">
                    </div>
                    <div class="form-group col-md-14">
                      <label for="inputAddress2">Tk nợ</label>
                      <input type="text" class="form-control" name="Tkno" placeholder="Tk nợ">
                    </div>
                    <div class="form-group col-md-14">
                      <label for="inputAddress2">Tk có</label>
                      <input type="text" class="form-control" name="Tkco" placeholder="Tk có">
                    </div>
                    
                    <button type="submit" name="submit_form2" class="btn btn-primary">Thêm</button>
                </form>


                <!-- table khách hàng -->

                <div class="table__khachhang " style="margin-top: 100px">
                    <div class="table-responsive">
                        <div class="table-wrapper" style="height: 400px; overflow: auto;">
                            
                            <table class="table table-striped table-hover table-bordered">
                                <thead>
                                    <tr>
                                        <th>Mã hàng</th>
                                        <th>Mã số</th>
                                        <th>Diễn giải chi tiết</th>
                                        <th>Số tiền</th>
                                        <th>TK nợ</th>
                                        <th>TK có</th>
                                        <th>Thao tác</th>

                                      
                                    </tr>
                                </thead>
                                <tbody>

                                    <?php
                                        if(mysqli_num_rows($result) > 0){
                                            while($row = mysqli_fetch_assoc($result)){
                                                ?>
                                                <tr>
                                                    <td><?php echo $row['Machungtu'] ?></td>
                                                    <td><?php echo $row['Maso'] ?></td>
                                                    <td><?php echo $row['Diengiaichitiet'] ?></td>
                                                    <td><?php echo $row['Sotien'] ?></td>
                                                    <td><?php echo $row['Tkno'] ?></td>
                                                    <td><?php echo $row['Tkco'] ?></td>


                                                   


                                                
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


