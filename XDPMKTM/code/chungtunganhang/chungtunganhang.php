<?php
    include "../database/connect.php";
    $sql  = "SELECT * FROM chungtunganhang";
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
    <title>Chứng từ ngân hàng</title>
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
            <h3 style="text-align: center;">Chứng từ ngân hàng</h3>
            
            <div class="container container__khachhang" style="height: 350px;">

                <form action="./chungtunganhang_add.php" method="POST" >
                    <div class="form-row" >
                      <div class="form-group col-md-4">
                        <label for="inputEmail4">Mã chứng từ</label>
                        <input type="text" class="form-control" name="MaChungTu" placeholder="Mã chứng từ">
                      </div>

                      <div class="form-group col-md-4">
                        <label for="inputPassword4">Loại chứng từ</label>
                        <input type="text" class="form-control" name="LoaiChungTu" placeholder="Loại chứng từ">
                      </div>

                      <div class="form-group col-md-4">
                        <label for="inputPassword4">Ngày chứng từ</label>
                        <input type="text" class="form-control" name="NgayChungTu" placeholder="NgayChungTu">
                      </div>

                    </div>


                    <div class="form-row" >
                      <div class="form-group col-md-4">
                        <label for="inputEmail4">Số chứng từ</label>
                        <input type="text" class="form-control" name="SoChungTu" placeholder="Số chứng từ">
                      </div>

                      <div class="form-group col-md-4">
                        <label for="inputPassword4">Họ tên</label>
                        <input type="text" class="form-control" name="HoTen" placeholder="Họ tên">
                      </div>

                      <div class="form-group col-md-4">
                        <label for="inputPassword4">Mã khách hàng</label>
                        <input type="text" class="form-control" name="MaKh" placeholder="Mã khách hàng">
                      </div>

                    </div>

                    <div class="form-row" >
                      <div class="form-group col-md-3">
                        <label for="inputEmail4">Tên khách hàng</label>
                        <input type="text" class="form-control" name="TenKh" placeholder="Tên khách hàng">
                      </div>

                      <div class="form-group col-md-3">
                        <label for="inputPassword4">Mã số thuế</label>
                        <input type="text" class="form-control" name="MSThue" placeholder="Mã số thuế">
                      </div>

                      <div class="form-group col-md-3">
                        <label for="inputPassword4">Diễn giải</label>
                        <input type="text" class="form-control" name="DienGiai" placeholder="Diễn giải">
                      </div>

                      <div class="form-group col-md-3">
                        <label for="inputPassword4">Thu chi</label>
                        <input type="text" class="form-control" name="ThuChi" placeholder="Thu chi">
                      </div>
                      

                    </div>
                    
                    
                    
                    <input type="submit" name="submit_form2" value="Thêm" class="btn btn-primary"></button>
                </form>


                <!-- table khách hàng -->

                <div class="table__khachhang " style="margin-top: 100px">
                    <div class="table-responsive">
                        <div class="table-wrapper" style="height: 400px; overflow: auto;">
                            
                            <table class="table table-striped table-hover table-bordered">
                                <thead>
                                    <tr style="font-size: 15px;">
                                        <th>Mã chứng từ</th>
                                        <th>Loại chứng từ</th>
                                        <th>Ngày chứng từ</th>
                                        <th>Số chứng từ</th>
                                        <th>Mã khách hàng</th>
                                        <th>Tên khách hàng</th>
                                        <th>Mã số thuế</th>
                                        <th>Diễn giải</th>
                                        <th>Thu chi</th>
                                        <td>Thao tác</td>


                                      
                                    </tr>
                                </thead>
                                <tbody>

                                    <?php
                                        if(mysqli_num_rows($result) > 0){
                                            while($row = mysqli_fetch_assoc($result)){
                                                ?>
                                                <tr>
                                                    <td><?php echo $row['MaChungTu'] ?></td>
                                                    <td><?php echo $row['LoaiChungTu'] ?></td>
                                                    <td><?php echo $row['NgayChungTu'] ?></td>
                                                    <td><?php echo $row['SoChungTu'] ?></td>
                                                    <td><?php echo $row['MaKh'] ?></td>
                                                    <td><?php echo $row['TenKh'] ?></td>
                                                    <td><?php echo $row['MSThue'] ?></td>
                                                    <td><?php echo $row['MSThue'] ?></td>
                                                    <td><?php echo $row['DienGiai'] ?></td>
                                                    <td><?php echo $row['ThuChi'] ?></td>

                                                   


                                                
                                                    <td>
                                                        <a href="" class="edit"><i class="material-icons">&#xE254;</i></a>
                                                        <a href="./hanghoa_delete.php?Id = <?php echo $row['Id'] ?>">Delete</a>
                                                       
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


