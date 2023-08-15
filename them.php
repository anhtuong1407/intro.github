<?php
    $sql_brand = "SELECT *from brands";
    $query_brand = mysqli_query($connect , $sql_brand);

    if(isset($_POST['sbt'])){
        $prd_name=$_POST['prd_name'];
        $image=$_FILES['image']['name'];
        $image_tmp= $FILE['image']['tmp_name'];

        $price=$_POST['price'];
        $quantity=$_POST['quantity'];
        $description=$_POST['description'];
        $brand_id=$_POST['brand_id'];

        $sql ="INSERT INTO products (prd_name,image,price,quantity,brand_id)
         values ( '$prd_name' ,  '$image'  ,$price,$quantity,$brand_id)";
        $query = mysqli_query($connect, $sql);
        move_uploaded_file($image_tmp, 'img/' .$image);
        header('location: index.php?page_layout=danhsach'); 
    }
?>
 
<div class="container">
    <div class="card">
        <div class="card-header">
            <h1>thêm sản phẩm</h1>
        </div>
        <div class="card-body">
            <form method="POST" enctype="multipart/form-data">
                
            <div class="form-group">
              <label for="">tên sản phẩm</label>
              <input type="text" name="prd_name" class="form-control" required>
              <small id="helpId" class="text-muted">mới về</small>
            </div>
            
            <div class="form-group">
              <label for="">Ảnh sản phẩm</label>
              <input type="file" name="image" class="form-control" required>
              <small id="helpId" class="text-muted">mới về</small>
            </div>

            <div class="form-group">
              <label for="">giá sản phẩm</label>
              <input type="text" name="price" class="form-control" required>
            </div>
            
            <div class="form-group">
              <label for="">giá cũ</label>
              <input type="text" name="quantity" class="form-control"required >
              <small id="helpId" class="text-muted">còn hàng</small>
            </div>

            <!-- <div class="form-group">
              <label for="">chi tiết sản phẩm</label>
              <input type="text" name="description" class="form-control"required >
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
                <button name="sbt" class="sbt sbt-sb" type="submit">thêm sản phẩm</button>
            </form>
        </div>
    </div>
    </div>
</div>