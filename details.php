<?php
include 'inc/header.php';
//include 'inc/slider.php';
 ?>
<?php
 if(!isset($_GET['proid']) || $_GET['proid']==NULL) {
    echo "<script>window.location ='404.php'</script>";
}else{

    $id= $_GET['proid'];
}
$customer_id =Session::get('customer_id');
if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['compare'])) {

$productid = $_POST['productid'];
    $insertCompare = $product->insertCompare($productid,$customer_id);
    # code...
 }
 if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['wishlist'])) {

$productid = $_POST['productid'];
    $insertWishlist = $product->insertWishlist($productid,$customer_id);
    # code...
 }
 if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['submit'])) {

$quantity = $_POST['quantity'];
    $insertCart = $ct->add_to_cart($quantity,$id);
    # code...
 }
 if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['binhluan_submit'])) {

$binhluan_insert =$cs->insert_binhluan($_POST,$id);
    # code...
 }
 //if(isset($_POST[''])){
 	
 //}
?>
<style>
.button_details form{
	float:left;
	margin:  0px 5px;
}	


</style>
 <div class="main">
    <div class="content">
    	<div class="section group">
<?php
$get_product_details = $product->get_details($id);
if($get_product_details){
	while($result_details =$get_product_details->fetch_assoc()){

?>
				<div class="cont-desc span_1_of_2">
					<div class="grid images_3_of_2">
						<img src="admin/uploads/<?php echo $result_details['image'] ?>" alt="" />
					</div>
				<div class="desc span_3_of_2">
					<h2><?php echo $result_details['productName'] ?> </h2>
					<p><?php echo $fm->textShorten($result_details['product_desc'],200) ?></p>
					<div class="price">
						<p>Giá: <span><?php echo $fm->format_currency($result_details['price']).".000"."VNĐ" ?></span></p>
						<p>Tác giả: <span><?php echo $result_details['catName'] ?></span></p>
						<p>Thể loại:<span><?php echo $result_details['brandName'] ?></span></p>
					</div>
				<div class="add-cart">
					<form action="" method="post">
						<input type="number" class="buyfield" name="quantity" value="1" min="1"/>
						<input type="submit" class="buysubmit" name="submit" value="Thêm vào giỏ hàng"/>
		<?php
		if(isset($AddtoCart)){
		echo '<span style="color:red; font_size:18px;"">Sản phẩm đã được thêm vào</span>';
		}
?>
					</form>
				</div>
<div class="add-cart">
<div class="button_details">
	<form action="" method="POST">
<!--<a href="?wlist=<?php echo $result_details['productId']?>" class="buysubmit">Lưu vào danh sách yêu thích</a>-->
<!--<a href="?compare=<?php echo $result_details['productId']?>" class="buysubmit">So sánh sản phẩm</a>-->
<input type="hidden"  name="productid" value="<?php echo $result_details['productId'] ?>"/>

<!-- <?php 
$login_check =  Session::get('customer_login');
if($login_check){
echo'<input type="submit" class="buysubmit" name="compare" value="So sánh sản phẩm"/>'.'  ';
}else{
	echo'';
}
 ?> -->




</form>
<form action="" method="POST">
<!--<a href="?wlist=<?php echo $result_details['productId']?>" class="buysubmit">Lưu vào danh sách yêu thích</a>-->
<!--<a href="?compare=<?php echo $result_details['productId']?>" class="buysubmit">So sánh sản phẩm</a>-->
<input type="hidden"  name="productid" value="<?php echo $result_details['productId'] ?>"/>

<!-- <?php 
$login_check =  Session::get('customer_login');
if($login_check){

echo'<input type="submit" class="buysubmit" name="wishlist" value="Lưu vào danh sách yêu thích">';
}else{
	echo'';
}
 ?> -->




</form>
</div>
<div class="clear"></div>
<p>
	<?php 
if(isset($insertCompare)){
	echo $insertCompare;
}

?>

<?php 
if(isset($insertWishlist)){
	echo $insertWishlist;
}

?>
	</p>
				</div>
				
			</div>
			<div class="product-desc">
			<h2>THÔNG TIN CHI TIẾT SẢN PHẨM</h2>
			<p>Người lẩn trốn trong bóng tối, một cô gái phát cuồng màu đen, thậm chí còn định nhuộm đen làn da mình, có thói quen ẩn náu trong bóng tối. Tuổi thơ bị hắt hủi liệu có thật sự ảnh hưởng tới cả cuộc đời một con người?

Vườn hoa của cô ấy, một cô gái xinh đẹp, sở hữu trí tuệ, ngoại hình và cả khối tài sản khiến người ngưỡng mộ, nhưng luôn mơ thấy ngoài cửa sổ có một con mắt to đang rình trộm mình. Dưới áp lực nặng nề, nếu con người ta không thể tự giải thoát bản thân, hậu quả sẽ ra sao?



Vụ mưu sát hoàn mỹ, một người đàn ông yêu thương gia đình nhưng luôn mơ thấy mình tự tay giết vợ. Hai mươi năm trước, anh ta đã tận mắt chứng kiến bố mình sát hại mẹ mình. Chẳng lẽ đó là số phận của huyết thống?</p>
	    </div>

	</div>
	<?php
}
}
	?>
				<div class="rightsidebar span_3_of_1">
					<h2>TÁC GIẢ</h2>
					<ul>
		<?php   
$getall_category = $cat->show_category_fontend();
if($getall_category){
while($result_allcat = $getall_category->fetch_assoc()){

		?>
				      <li><a href="productbycat.php?catid=<?php echo $result_allcat['catId'] ?> "><?php echo $result_allcat['catName'] ?></a></li>
	<?php  
}
}
	 ?>

    				</ul>

 				</div>
 		</div>
 <div class="binhluan">
 <div class="row">
 	<div class="col-md-8">
 		<h5>Ý kiến sản phẩm </h5>
 <?php
 if(isset($binhluan_insert)){
 	echo $binhluan_insert;
 }
 ?>
 		<form action="" method="POST">
 <p><input type="hidden" value="<?php echo $id ?>" name="product_id_binhluan"></p>
 	<p><input type="text" placeholder="Điền tên" class="form-control" name="tennguoibinhluan"></p>
 	<p><textarea rows="5" style="resize:none;" placeholder="Bình luận" class="form-control" name="binhluan"></textarea></p>
 	<p><input type="submit" name="binhluan_submit" class="btn btn-success" value="Gửi bình luận"></p>
 </form>
 </div>
</div>
</div>
 	</div>
 <div class="row">

 	
 			<?php 
 			$id=$_GET['proid'];
 			$link = mysqli_connect("localhost", "root", "", "website_bansach");
 
// Kểm tra kết nối
if($link === false){
    die("ERROR: Không thể kết nối. " . mysqli_connect_error());
}
$sql = "SELECT * FROM tbl_binhluan where product_id = $id";
$result = $link->query($sql);
$data=array();
 while($m=$result->fetch_assoc()){

$data[]=$m;
 }    ?>
  <div class="col-md-8">
  	<h3>Bình luận khách hàng:</h3>
<?php foreach ($data as $value) { ?>
	
 			<p style="
    border-radius: 5px;
    background: #dbd6d621;
"><b><?=$value['tenbinhluan']?></b>:<span><?=$value['binhluan']?></span></p>
 			
 	

<?php } ?>
	</div>
  	
 	</div> 



 <?php include 'inc/footer.php'; ?>
