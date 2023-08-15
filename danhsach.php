<?php
    $sql = "SELECT *FROM products inner join brands on products.brand_id = brands.brand_id";
    $query = mysqli_query($connect,$sql);

?>

<div class="container">
    <div class="card">
        <div class="card-header">
            <h1 style="color:brown">Danh Sách sản phẩm của FW.GOOD</h1>
        </div>
        <div class="card-body">
            <table class="table">
                <thead class="thead-dark">
                    <tr>
                        <th>Mục</th>
                        <th>Tên sản phẩm</th>
                        <th>Ảnh sản phẩm</th>
                        <th>Giá sản phẩm</th>
                        <th>giá cũ</th>
                        <!-- <th>Mô tả</th> -->
                        <th>FW.GOOD</th>
                        <!-- <td>Sửa</td>
                         <td>Xóa</td>       -->
                        <!-- <th>
                        <a href="index.php?page_layout=sua&id=<?php $row['prd_id']; ?>">Sửa</a>

                        </th>
                        <th><a href="index.php?page_layout=xoa&id=<?php $row['prd_id']; ?>">Xóa</a></th>
                    </tr> -->
                </thead>
                <tbody>
                  <?php
                   $i =1;
                        while($row = mysqli_fetch_assoc($query)){?>
                            <tr>
                                <td><?php echo $row['prd_id']; ?></td>
                                 <td><?php echo $row['prd_name']; ?></td>

                           
                                <td>
                                    <img style="width: 100px;" src="img/<?php echo $row['image']; ?>">
                                    
                                </td>

                                <td td><?php echo $row['price']; ?></td>
                                <td><?php echo $row['quantity']; ?></td>
                                <!-- <td><?php echo $row['description']; ?></td> -->
                                <td><?php echo $row['brand_name']; ?></td>
                                <td>
                                    <a href="index.php?page_layout=sua&id=<?php echo $row['prd_id']; ?>">Sửa</a>

                                    </td>
                                    <td>
                                        <a  href="index.php?page_layout=xoa&id=<?php echo $row['prd_id']; ?>">Xóa</a>
                                    </td>
                                        
                            </tr>  
                        <?php } ?>               
                </tbody>
            </table>
            <a class="btn btn-primary" href="index.php?page_layout=them"> Thêm mới</a>
        </div>
       
    </div>
    <div class="product">
            <div class="container">
                <!-- <h3 class="product__title">CHƯƠNG TRÌNH "KHÔNG GIAN TRỐNG"</h3> -->
                <div class="product__list">
                    <?php $i =1;
                        while($row = mysqli_fetch_assoc($query)){?>
                    <a href="./product-detail.php" class="product__list-item">
                        <img src="img/<?php echo $row['image']; ?>" alt="">
                        <div class="info">
                            <div class="info-name text-content"><?php echo $row['prd_name']; ?></div>
                            <div class="info-price">
                                <span class="new"><?php echo $row['price']; ?></span>
                                
                            </div>
                        </div>
                        <div class="discount"><span>-10%</span></div>
                        <div class="button">Mua liền yk</div>
                    </a>
                        <?php } ?>       
                </div>
                <div class="product__control">
                    <div class="product__control-btn next">
                        <img src="../img/next.svg" alt="">
                    </div>
                    <div class="product__control-btn prev">
                        <img src="../img/prev.svg" alt="">
                    </div>
                </div>
                <!-- <button class="product__btn"><span>Xem tất cả</span></button>
            </div> -->
        </div>
</div>

