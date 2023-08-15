
<?php
include 'inc/header.php';
//include 'inc/slider.php';
 ?>
 <?php
//(isset($_GET['cartid'])){
 
 //$cartid= $_GET['cartid'];
  //$delcart = $ct->del_product_cart($cartid);
//}

// if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['submit'])) {
 //  $cartId = $_POST['cartId'];
//$quantity = $_POST['quantity'];
  //  $update_quantity_Cart = $ct->update_quantity_cart($quantity,$cartId);
    # code...
// }
?>

 <div class="main">
    <div class="content">
    	<div class="cartoption">
			<div class="cartpage">
			    	<h2>So sánh sản phẩm</h2>
			  <?php
			if(isset($update_quantity_cart)){
				echo $update_quantity_cart;
			}
?>
 <?php
			if(isset($delcart)){
				echo $delcart;
			}
?>
						<table class="tblone">
							<tr>
								<th width="10%">So sánh ID</th>
								<th width="20%">Tên sản phẩm</th>
								<th width="20%">Ảnh</th>
								<th width="15%">Giá</th>
								
								<th width="15%">Xóa</th>
							</tr>
	<?php
	$customer_id = Session::get('customer_id');
	$get_compare = $product->get_compare($customer_id);
	if($get_compare){
		$i = 0;
while($result = $get_compare->fetch_assoc()){
$i++;
			?>
							<tr>
<td><?php echo $i; ?></td>
<td><?php echo $result['productName'] ?></td>
	<td><img src="admin/uploads/<?php echo $result['image'] ?>"  alt=""/></td>
								<td><?php echo $result['price'] ?></td>

<td><a href="details.php?proid=<?php echo $result['productId'] ?>">Xem</a>


</td>
							</tr>

<?php

				}
				}
?>
						</table>
		
						
	
					</div>
					<div class="shopping">
						<div class="shopleft">
						<a href="index.php"> <img src="images/shop.png" alt="" /></a>
						</div>
						
					</div>
    	</div>
       <div class="clear"></div>
    </div>
 </div>
<?php
include 'inc/footer.php';
 ?>
