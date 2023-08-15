<?php
include 'inc/header.php';
include 'inc/slider.php';
 ?>	
 <!DOCTYPE html>
 <html>
 <head>
 	<title></title>
	<link rel="stylesheet" href="../CSS/bootstrap.min.css">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
	<script src="http://code.jquery.com/jquery-1.11.1.min.js"></script>
 </head>
 <body>
 
 
 <div class="main">
 	
    <div class="content">
    	<div class="content_bottom">
    		<div class="heading">
    		<h3>SÁCH NỔI BẬT</h3>
    		</div>
    		<div class="clear"></div>
    	</div>
			<div class="section group">
				<?php
	      	 $product_new = $product->getproduct_new();
	      	 if($product_new){
	      	 	while($result_new = $product_new->fetch_assoc()){
	      	?>	
				<div class="grid_1_of_4 images_1_of_4">
					 <a href="details.php"><img src="admin/uploads/<?php echo $result_new['image'] ?>" alt="" /></a>
					 <h2><?php echo $result_new['productName'] ?> </h2>
					 <p><?php echo $fm->textShorten($result_new['productName'], 20) ?></p>
					 <p><span class="price"><?php echo $fm->format_currency($result_new['price'])." "."đ" ?></span></p>
				     <div class="button"><span><a href="details.php?proid=<?php echo $result_new['productId'] ?>" class="details">Chi tiết</a></span></div>
				</div>
				<?php
			}
}
			?>
			</div>
    	
    	<div class="content_top">
    		<div class="heading">
    		<h3>SÁCH MỚI</h3>
    		</div>
    		<div class="clear"></div>
    	</div>
    	<div id="carouselExampleSlidesOnly" class="carousel slide" data-ride="carousel">
			  <div class="carousel-inner">
			    <div class="carousel-item active">
			    	</div>
				      <div class="section group">
				      	<?php
				      	 $product_feathered = $product->getproduct_feathered();
				      	 if($product_feathered){
				      	 	while($result = $product_feathered->fetch_assoc()){
				      	?>	
							<div class="grid_1_of_4 images_1_of_4">
								 <a href="details.php"><img src="admin/uploads/<?php echo $result['image'] ?>" alt="" /></a>
								 <h2><?php echo $result['productName'] ?> </h2>
								 <p><?php echo $fm->textShorten($result['productName'], 20) ?></p>
								 <p><span class="price"><?php echo $fm->format_currency($result['price'])." "."vnđ" ?></span></p>
							     <div class="button"><span><a href="details.php?proid=<?php echo $result['productId'] ?>" class="details">Chi tiết</a></span></div>
							</div>
				
				<?php
			}
}
			?>
      <img class="d-block w-100" src="..." alt="First slide">
    </div>
    <
  </div>

			</div>
			
			<div class="content_top">
    		<div class="heading">
    		<h3>SÁCH PHÁT HÀNH</h3>
    		</div>
    		<div class="clear"></div>
    	</div>
	      <div class="section group">
	      	<?php
	      	 $product_feathered = $product->getproduct_feathered();
	      	 if($product_feathered){
	      	 	while($result = $product_feathered->fetch_assoc()){
	      	?>	
				<div class="grid_1_of_4 images_1_of_4">
					 <a href="details.php"><img src="admin/uploads/<?php echo $result['image'] ?>" alt="" /></a>
					 <h2><?php echo $result['productName'] ?> </h2>
					 <p><?php echo $fm->textShorten($result['productName'], 20) ?></p>
					 <p><span class="price"><?php echo $fm->format_currency($result['price'])." "."vnđ" ?></span></p>
				     <div class="button"><span><a href="details.php?proid=<?php echo $result['productId'] ?>" class="details">Chi tiết</a></span></div>
				</div>
				
				<?php
			}
}
			?>
			</div>
    </div>
 </div>
<?php
include 'inc/footer.php';
 ?>
 </body>
 </html>