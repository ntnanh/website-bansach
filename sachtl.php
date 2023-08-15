<?php
include 'inc/header.php';
include 'inc/slider.php';
 ?>	
 
 <div class="content_top">
    		<div class="heading">
    		<h3>SÁCH NỔI BẬT</h3>
    		</div>
    		<div class="clear"></div>
    	</div>
    	<div class="section group" style="    margin-bottom: 19px;">
	      	<?php
	      	 $product_feathered = $product->getproduct_feathered3();
	      	 if($product_feathered){
	      	 	while($result = $product_feathered->fetch_assoc()){
	      	?>	
				<div class="grid_1_of_4 images_1_of_4" style="">
					 <a href="details.php"><img src="admin/uploads/<?php echo $result['image'] ?>" alt="" /></a>
					 <h2><?php echo $result['productName'] ?> </h2>
					 <p><?php echo $fm->textShorten($result['productName'], 20) ?></p>
					 <p><span class="price"><?php echo $fm->format_currency($result['price']).".000"."vnđ" ?></span></p>
				     <div class="button"><span><a href="details.php?proid=<?php echo $result['productId'] ?>" class="details">Chi tiết</a></span></div>
				</div>
				
				<?php
			}
}
			?>
			</div>
<?php
include 'inc/footer.php';
 ?>