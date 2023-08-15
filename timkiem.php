<?php
include 'inc/header.php';
include 'inc/slider.php';
 ?>	
 
<div class="main">
 	
    <div class="content">
    <div class="content_bottom">
    		<div class="heading">
    		<h3>SÁCH CẦN TÌM</h3>
    		</div>
    		<div class="clear"></div>
    	</div>
			<div class="section group">
				<?php
				$conn = mysqli_connect('localhost','root','','website_bansach');
					$tk ='';
					if(isset($_POST['timkiem'])){
						$key = $_POST['timkiem'];
						$sql = "SELECT * FROM tbl_product WHERE (LOWER (productName) LIKE '%$key%')";
						// $sql = "SELECT * FROM tbl_brand WHERE (LOWER (brandName) LIKE '%$key%')";
						// $sql = "SELECT * FROM tbl_category WHERE (LOWER (catName) LIKE '%$key%')";
						$ketqua = mysqli_query($conn,$sql);
						while ($row = mysqli_fetch_assoc($ketqua)) {
						
					?>
				<div class="grid_1_of_4 images_1_of_4">
					 <a href="details.php"><img src="admin/uploads/<?php echo $row['image'] ?>" alt="" /></a>
					 <h2><?php echo $row['productName'] ?> </h2>
					 <p><?php echo $fm->textShorten($row['productName'], 20) ?></p>
					 <p><span class="price"><?php echo $fm->format_currency($row['price']).".000"."VNĐ" ?></span></p>
				     <div class="button"><span><a href="details.php?proid=<?php echo $row['productId'] ?>" class="details">Chi tiết</a></span></div>
				</div>
				<?php
			}

}else{
	echo'Danh mục không có';
}
			?>
			</div>
    	











    </div>
 </div>
<?php
include 'inc/footer.php';
 ?>
 