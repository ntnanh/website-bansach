<?php include 'inc/header.php';?>
<?php include 'inc/sidebar.php';?>
<?php include '../classes/brand.php';?>
<?php include '../classes/category.php';?>
<?php include '../classes/product.php';?>
<?php 
 $pd = new product();
 if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['submit'])) {
   

    $insertProduct = $pd->insert_product($_POST,$_FILES);
    # code...
 }
  ?>
<div class="grid_10">
    <div class="box round first grid">
        <h2>THÊM SÁCH</h2>
        <div class="block"> 
        <?php 
                if (isset($insertProduct)) {
                    echo $insertProduct;
                    # code...
                }

                 ?>
         <form action="productadd.php" method="post" enctype="multipart/form-data">
            <table class="form">
               
                <tr>
                    <td>
                        <label>Tên</label>
                    </td>
                    <td>
                        <input type="text" name="productName" placeholder="Nhập tên sách..." class="medium" />
                    </td>
                </tr>
				<tr>
                    <td>
                        <label>Tác giả</label>
                    </td>
                    <td>
                        <select id="select" name="category">
                            <option>---Chọn tác giả---</option>
                            <?php 
                            $cat = new category();
                            $catlist = $cat->show_category();
                            if ($catlist) {
                                while ($result = $catlist->fetch_assoc()) {
                
                             ?>
                            <option value="<?php echo $result['catId'] ?>"><?php echo $result['catName'] ?></option>
                            <?php 
                            }

                            }
                             ?>
                            
                        </select>
                    </td>
                </tr>
				<tr>
                    <td>
                        <label>Thể loại</label>
                    </td>
                    <td>
                        <select id="select" name="brand">
                            <option>---Chọn thể loại---</option>
                            <?php 
                            $brand = new brand();
                            $brandlist = $brand->show_brand();
                            if ($brandlist) {
                                while ($result = $brandlist->fetch_assoc()) {
                            
                             ?>
                            <option value="<?php echo $result['brandId'] ?>"><?php echo $result['brandName'] ?></option>
                            <?php 
                            }

                            }
                             ?>
                            
                        </select>
                    </td>
                </tr>
				
				 <tr>
                    <td style="vertical-align: top; padding-top: 9px;">
                        <label>Mô tả</label>
                    </td>
                    <td>
                        <textarea name="product_desc" class="tinymce"></textarea>
                    </td>
                </tr>
				<tr>
                    <td>
                        <label>Giá bán</label>
                    </td>
                    <td>
                        <input type="text" name="price" placeholder="Nhập giá..." class="medium" />
                    </td>
                </tr>
            
                <tr>
                    <td>
                        <label>Cập nhập ảnh</label>
                    </td>
                    <td>
                        <input type="file"  name="image" />
                    </td>
                </tr>
				
				<tr>
                    <td>
                        <label>Loại sản phẩm</label>
                    </td>
                    <td>
                        <select id="select" name="type">
                            <option>Lựa chọn đối tượng</option>
                            <option value="1">Nổi bật</option>
                            <option value="0">Không nổi bật</option>
                        </select>
                    </td>
                </tr>

				<tr>
                    <td></td>
                    <td>
                        <input type="submit" name="submit" Value="Lưu" />
                    </td>
                </tr>
            </table>
            </form>
        </div>
    </div>
</div>
<!-- Load TinyMCE -->
<script src="js/tiny-mce/jquery.tinymce.js" type="text/javascript"></script>
<script type="text/javascript">
    $(document).ready(function () {
        setupTinyMCE();
        setDatePicker('date-picker');
        $('input[type="checkbox"]').fancybutton();
        $('input[type="radio"]').fancybutton();
    });
</script>
<!-- Load TinyMCE -->
<?php include 'inc/footer.php';?>


