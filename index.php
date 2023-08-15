<?php
include 'inc/header.php';
include 'inc/slider.php';
 ?>	
 <!DOCTYPE html>
 <html>
 <head>
 	<title></title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<script src="http://code.jquery.com/jquery-1.11.1.min.js"></script>
 </head>
 <body>
 
 
 <div class="main">
 	
    <div class="content">
    <!-- 	SÁCH NỔI BẬT -->
    	<div class="content_top">
    		<div class="heading">
    		<h3>
						<a href="sachtl.php?productId=1" class="title" style="text-decoration: none;position: relative;font-size: 18px;line-height: 38px; font-weight: bold;color: #fff;background: #2ECCFA;padding: 9px 20px 9px 15px;text-transform: capitalize;margin: 0;">SÁCH NỔI BẬT</a>
						<a href="sachtl.php?productId=1" class="more" style="text-decoration: none;font-size: 14px;color: #595959;float: right;padding: 11px 20px;    margin-left: 846px;">Xem tất cả</a>
					</h3>
    		</div>
    		<div class="clear"></div>
    	</div>

    	<div id="inam2" class="carousel slide" data-ride="carousel">
				<div class="carousel-inner" style="">
					<div class="carousel-item active" style="margin-left: 55px;">
								<?php
	      	 $product_feathered = $product->getproduct_feathered1();
	      	 if($product_feathered){
	      	 	while($result = $product_feathered->fetch_assoc()){
	      	?>	
				<div class="grid_1_of_4 images_1_of_4">
					 <a href="details.php"><img src="admin/uploads/<?php echo $result['image'] ?>" alt="" /></a>
					 <h2><?php echo $result['productName']   ?> </h2>
					  <p><?php echo $fm->textShorten($result['productName'], 20) ?></p> 
					 <p><span class="price"><?php echo $fm->format_currency($result['price']).".000 "."vnđ" ?></span></p>
				     <div class="button"><span><a href="details.php?proid=<?php echo $result['productId'] ?>" class="details">Chi tiết</a></span></div>
				</div>
				
				<?php
			}
}
			?>
			</div>
					
					<div class="carousel-item" style="margin-left: 55px;">
								<?php
	      	 $product_feathered = $product->getproduct_noibat();
	      	 if($product_feathered){
	      	 	while($result = $product_feathered->fetch_assoc()){
	      	?>	
				<div class="grid_1_of_4 images_1_of_4">
					 <a href="details.php"><img src="admin/uploads/<?php echo $result['image'] ?>" alt="" /></a>
					 <h2><?php echo $result['productName'] ?> </h2>
					 <p><?php echo $fm->textShorten($result['productName'], 20) ?></p>
					 <p><span class="price"><?php echo $fm->format_currency($result['price'])." .000"."vnđ" ?></span></p>
				     <div class="button"><span><a href="details.php?proid=<?php echo $result['productId'] ?>" class="details">Chi tiết</a></span></div>
				</div>
				
				<?php
			}
}
			?>
			</div>
					</div>
				<a href="#inam2" class="carousel-control-prev" data-slide="prev">
					<span class="carousel-control-prev-icon"></span>
				</a>
				<a href="#inam2" class="carousel-control-next" data-slide="next">
					<span class="carousel-control-next-icon"></span>
				</a>
		</div>

    	<!-- SÁCH MỚI -->
    	<div class="content_top">
    		<div class="heading">
    		
    		<h3>
						<a href="sachnb.php?productId=1" class="title" style="text-decoration: none;position: relative;font-size: 18px;line-height: 38px; font-weight: bold;color: #fff;background: #2ECCFA;padding: 9px 20px 9px 15px;text-transform: capitalize;margin: 0;">SÁCH MỚI</a>
						<a href="sachnb.php?productId=1" class="more" style="text-decoration: none;font-size: 14px;color: #595959;float: right;padding: 11px 20px;    margin-left: 846px;">Xem tất cả</a>
					</h3>
    		</div>
    		<div class="clear"></div></div>

	<div id="inam" class="carousel slide" data-ride="carousel">
				<div class="carousel-inner" style="">
					<div class="carousel-item active" style="margin-left: 80px; margin-bottom: 20px">
								<?php
	      	 $product_new = $product->getproduct_moi();
	      	 if($product_new){
	      	 	while($result_new = $product_new->fetch_assoc()){
	      	?>	
				<div class="grid_1_of_5 images_1_of_5">
					 <a href="details.php"><img src="admin/uploads/<?php echo $result_new['image'] ?>" alt="" /></a>
					 <h2><?php echo $result_new['productName'] ?> </h2>
					 <p><?php echo $fm->textShorten($result_new['productName'], 20) ?></p>
					 <p><span class="price"><?php echo $fm->format_currency($result_new['price']).".000 "."vnđ" ?></span></p>
				     <div class="button"><span><a href="details.php?proid=<?php echo $result_new['productId'] ?>" class="details">Chi tiết</a></span></div>
				</div>
				<?php
			}
}
			?>
			</div>

					
					<div class="carousel-item" style="margin-left: 80px; margin-bottom: 20px">
								<?php
	      	 $product_new = $product->getproduct_new();
	      	 if($product_new){
	      	 	while($result_new = $product_new->fetch_assoc()){
	      	?>	
				<div class="grid_1_of_5 images_1_of_5">
					 <a href="details.php"><img src="admin/uploads/<?php echo $result_new['image'] ?>" alt="" /></a>
					 <h2><?php echo $result_new['productName'] ?> </h2>
					 <p><?php echo $fm->textShorten($result_new['productName'], 20) ?></p>
					 <p><span class="price"><?php echo $fm->format_currency($result_new['price']).".000 "."vnđ" ?></span></p>
				     <div class="button"><span><a href="details.php?proid=<?php echo $result_new['productId'] ?>" class="details">Chi tiết</a></span></div>
				</div>
				<?php
			}
}
			?>
			</div>

					</div>
				<a href="#inam" class="carousel-control-prev" data-slide="prev">
					<span class="carousel-control-prev-icon"></span>
				</a>
				<a href="#inam" class="carousel-control-next" data-slide="next">
					<span class="carousel-control-next-icon"></span>
				</a>
	</div>










<!--    SACH PHÁT HÀNH-->   
	 	<div class="content_bottom">
    		<div class="heading">
    		<h3>
						<a href="sachnb.php?productId=1" class="title" style="text-decoration: none;position: relative;font-size: 15px;line-height: 38px; font-weight: bold;color: #fff;background: #2ECCFA;padding: 9px 20px 9px 15px;text-transform: capitalize;margin: 0;">SÁCH PHÁT HÀNH</a>
						<a href="sachnb.php?productId=1" class="more" style="text-decoration: none;font-size: 14px;color: #595959;float: right;padding: 11px 20px;    margin-left: 846px;">Xem tất cả</a>
					</h3>
    		</div>
    		<div class="clear"></div></div>
    	<div id="inam1" class="carousel slide" data-ride="carousel">
				<div class="carousel-inner" style="">
					<div class="carousel-item active" style="margin-left: 80px; margin-bottom: 20px">
								<?php
				      	 $product_new = $product->getproduct_phathanh();
				      	 if($product_new){
				      	 	while($result_new = $product_new->fetch_assoc()){
				      	?>
									<div class="grid_1_of_5 images_1_of_5">
										 <a href="details.php"><img src="admin/uploads/<?php echo $result_new['image'] ?>" alt="" /></a>
										 <h2><?php echo $result_new['productName'] ?> </h2>
										 <p><?php echo $fm->textShorten($result_new['productName'], 20) ?></p>
										 <p><span class="price"><?php echo $fm->format_currency($result_new['price']).".000"."vnđ" ?></span></p>
									     <div class="button"><span><a href="details.php?proid=<?php echo $result_new['productId'] ?>" class="details">Chi tiết</a></span></div>
									</div>
								<?php }		
								 	} 
								 ?>
					</div>
					
					<div class="carousel-item" style="margin-left: 80px;margin-bottom: 20px">
								<?php
				      	 $product_new = $product->getproduct_new();
				      	 if($product_new){
				      	 	while($result_new = $product_new->fetch_assoc()){
				      	?>
								<div class="grid_1_of_5 images_1_of_5">
										 <a href="details.php"><img src="admin/uploads/<?php echo $result_new['image'] ?>" alt="" /></a>
										 <h2><?php echo $result_new['productName'] ?> </h2>
										 <p><?php echo $fm->textShorten($result_new['productName'], 20) ?></p>
										 <p><span class="price"><?php echo $fm->format_currency($result_new['price']).".000 "."vnđ" ?></span></p>
									     <div class="button"><span><a href="details.php?proid=<?php echo $result_new['productId'] ?>" class="details">Chi tiết</a></span></div>
									</div>
								<?php }
								} 
								 ?>
					</div>
					</div>
				<a href="#inam1" class="carousel-control-prev" data-slide="prev">
					<span class="carousel-control-prev-icon"></span>
				</a>
				<a href="#inam1" class="carousel-control-next" data-slide="next">
					<span class="carousel-control-next-icon"></span>
				</a>
			</div>

			






    </div>
 </div>
<?php
include 'inc/footer.php';
 ?>
 </body>
 </html>