<?php include 'inc/header.php';?>
<?php include 'inc/sidebar.php';?>
<?php include '../classes/brand.php' ?>

<?php 
 $brand = new brand();
 if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $brandName = $_POST['brandName'];
    

    $insertBrand = $brand->insert_brand($brandName);
    # code...
 }
  ?>
  <?php  ?>
        <div class="grid_10">
            <div class="box round first grid">
                <h2>THÊM THỂ LOẠI</h2>

               <div class="block copyblock"> 
                
               <?php 
                if (isset($insertBrand)) {
                    echo $insertBrand;
                    # code...
                }

                 ?>
                 <form action="brandadd.php" method="post">
                    <table class="form">					
                        <tr>
                            <td>
                                <input type="text" name="brandName" placeholder="Thêm thể loại" class="medium" />
                            </td>
                        </tr>
						<tr> 
                            <td>
                                <input type="submit" name="submit" Value="Save" />
                            </td>
                        </tr>
                    </table>
                    </form>
                </div>
            </div>
        </div>
<?php include 'inc/footer.php';?>