
<?php
include 'inc/header.php';
//include 'inc/slider.php';
 ?>
 <?php
if(isset($_GET['proid'])){
 $customer_id = Session::get('customer_id');
 $proid= $_GET['proid'];
  $delwlist = $product->del_wlist($proid,$customer_id);
}

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
			    	<h2>Lưu vào danh sách yêu thích</h2>
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
	$get_wishlist = $product->get_wishlist($customer_id);
	if($get_wishlist){
		$i = 0;
while($result = $get_wishlist->fetch_assoc()){
$i++;
			?>
							<tr>
<td><?php echo $i; ?></td>
<td><?php echo $result['productName'] ?></td>
	<td><img src="admin/uploads/<?php echo $result['image'] ?>"  alt=""/></td>
								<td><?php echo $result['price'] ?></td>

<td>
<a href="?proid=<?php echo $result['productId'] ?>">Xóa</a> ||
	<a href="details.php?proid=<?php echo $result['productId'] ?>">Đặt hàng</a>


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
