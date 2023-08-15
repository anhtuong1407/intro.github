<?php
    $id=$_GET['id'];
    $sql_brand = "SELECT *from brands";
    $query_brand = mysqli_query($connect , $sql_brand);

    $sql_as ="SELECT *FROM products where prd_id=$id ";
    $query_as = mysqli_query($connect, $sql_as);
    $row_as = mysqli_fetch_assoc($query_as);


    if(isset($_POST['sbt'])){
        $prd_name=$_POST['prd_name'];

        if($_FILES['image']['name']==''){
          $image=$row_as['image'];

        }else{
          $image=$_FILES['image']['name'];
          $image_tmp= $$_FILES['image']['tmp_name'];
          move_uploaded_file($image_tmp, 'img/'.$image);

        }
        $price=$_POST['price'];
        $quantity=$_POST['quantity'];
        // $description=$_POST['description'];
        $brand_id=$_POST['brand_id'];

        $sql ="UPDATE products SET prd_name = '$prd_name' ,image = '$image' ,price = $price,
        quantity = $quantity, brand_id = '$brand_id' WHERE prd_id=$id" ;
        $query = mysqli_query($connect, $sql);
        header('location: index.php?page_layout=danhsach'); 
    }
?>

<div class="container">
    <div class="card">
        <div class="card-header">
            <h1>Sửa sản phẩm</h1>
        </div>
        <div class="card-body">
            <form method="POST" enctype="multipart/form-data">
                
            <div class="form-group">
              <label for="">tên sản phẩm</label>
              <input type="text" name="prd_name" class="form-control" required value="<?php echo $row_as['prd_name']; ?>">
              <small id="helpId" class="text-muted">mới về</small>
            </div>
            
            <div class="form-group">
              <label for="">Ảnh sản phẩm</label>
              <input type="file" name="image"  >
            </div>

            <div class="form-group">
              <label for="">giá sản phẩm</label>
              <input type="text" name="price" class="form-control" required value="<?php echo $row_as['price']; ?>">
            </div>
            
            <div class="form-group">
              <label for="">giá cũ</label>
              <input type="text" name="quantity" class="form-control"required value="<?php echo $row_as['quantity']; ?>">
              <small id="helpId" class="text-muted">còn hàng</small>
            </div>

            <!-- <div class="form-group">
              <label for="">chi tiết sản phẩm</label>
              <input type="text" name="description" class="form-control"required value="<?php echo $row_as['description']; ?>">
            </div> -->

            <div class="form-group">
                <label for="FW.GOOD">FW.GOOD</label>
                <select class="form-control" name="brand_id">
                    <?php
                        while($row_brand= mysqli_fetch_assoc($query_brand)){?>

                            <option value="<?php echo $row_brand['brand_id'] ;?>"><?php echo $row_brand['brand_name'] ;?></option>
                        <?php } ?>
                    
                </select>
            </div>
                <button name="sbt" class="sbt sbt-sb" type="submit">SỬA hàng</button>
            </form>
        </div>
    </div>
    </div>
</div>