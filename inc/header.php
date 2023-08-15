<?php 
include'lib/session.php';
Session::init();

 ?>
 <?php 
include_once 'lib/database.php';
include_once 'helpers/format.php';
spl_autoload_register(function($className){
	include_once "classes/".$className.".php";
	});
	$db = new Database();
	$fm = new Format();
	$ct = new cart();
    $us = new user();
    $cat = new category();
  $cs = new Customer();
    $product = new product();
 ?>

<?php
  header("Cache-Control: no-cache, must-revalidate");
  header("Pragma: no-cache"); 
  header("Expires: Sat, 26 Jul 1997 05:00:00 GMT"); 
  header("Cache-Control: max-age=2592000");
?>
<!DOCTYPE HTML>
<head>
<title>Book Store</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<link href="css/style.css" rel="stylesheet" type="text/css" media="all"/>
<link href="css/menu.css" rel="stylesheet" type="text/css" media="all"/>
<script src="js/jquerymain.js"></script>
<script src="js/script.js" type="text/javascript"></script>
<script type="text/javascript" src="js/jquery-1.7.2.min.js"></script> 
<script type="text/javascript" src="js/nav.js"></script>
<script type="text/javascript" src="js/move-top.js"></script>
<script type="text/javascript" src="js/easing.js"></script>
<script type="text/javascript" src="js/nav-hover.js"></script>




<link href='http://fonts.googleapis.com/css?family=Monda' rel='stylesheet' type='text/css'>
<link href='http://fonts.googleapis.com/
css?family=Doppio+One' rel='stylesheet' type='text/css'>
<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
<script type="text/javascript">
  $(document).ready(function($){
    $('#dc_mega-menu-orange').dcMegaMenu({rowItems:'4',speed:'fast',effect:'fade'});
  });
</script>
</head>
<body style="/*background: #AAE3E7*/; font-size: 16px;"    >
  <div class="wrap" style="width: 99%;">
		<div class="header_top">
			<div class="logo">
				<a href="index.php"><img src="images/logo.jpg" alt="" /></a>
			</div>
			  <div class="header_top_right">
			    <div class="search_box">
				    <form action="timkiem.php" method="POST">
				    	<input type="text" name="timkiem" value="Tìm kiếm sản phẩm" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Tìm kiếm sản phẩm';}"><input type="submit" value="Tìm kiếm" style="height: 40px;">
				    	
				    </form>
			    </div>
			    <div class="shopping_cart" style="width: 236px; border: 1px solid #cecece;border-radius: 5px;">
					<div class="cart" style="border: 1px solid #cecece;border-radius: 5px;background: lightblue;">
						<a href="#" title="View my shopping cart" rel="nofollow" style="text-decoration: none;">
								<span class="cart_title">Giỏ hàng</span>
								<span class="no_product">
				<?php

		$check_cart = $ct->check_cart();
		if($check_cart){
			$sum = Session::get("sum");
				$qty = Session::get("qty");
			echo $fm->format_currency($sum).' '.'VNĐ'.'-'.'SL:'.$qty ;
		}else{
	echo 'Empty';
}
   ?>
								</span>
							</a>
						</div>
			      </div>
<?php
if(isset($_GET['customer_id'])){
$customer_id= $_GET['customer_id'];
$delCart = $ct->del_all_data_cart();
$delCompare = $ct->del_Compare($customer_id);
Session::destroy();


}

 ?>

		   <div class="login" style="
    border: 1px solid #cecece;
    box-sizing: border-box;
    color: #444;
    display: block;
    float: left;
    font-size: 15px;
    /* height: 38px; */
    margin-left: 2px;
    text-align: center;
    /* width: 144px; */
    border-radius: 5px;
    padding: 7px;
    background: orange;">
<?php
$login_check =  Session::get('customer_login');
if($login_check==false){
echo '<a href="login.php" style = "">Đăng nhập</a></div>';
}else{
echo 	'<a href="?customer_id='.Session::get('customer_id').'">Đăng xuất</a></div>';
}

?>



		   	
		 <div class="clear"></div>
	 </div>
	 <div class="clear"></div>
 </div>
<div class="menu">
	<ul id="dc_mega-menu-orange" class="dc_mm-orange" style=" background: #2ECCFA;">
	  <li><a href="index.php">Trang chủ</a></li>
	  <li><a href="products.php">Danh mục sản phẩm</a> </li>
	 <!--  <li><a href="topbrands.php">Sách bán chạy</a></li> -->
<?php 
$check_cart = $ct->check_cart();
if($check_cart==true){
	echo ' <li><a href="cart.php">Giỏ hàng</a></li>';
} else{
	echo '';
}
 ?>
 <?php 
  $customer_id= Session::get('customer_id');
$check_order = $ct->check_order($customer_id);
if($check_order==true){
	echo ' <li><a href="orderdetails.php">Đặt hàng</a></li>';
} else{
	echo '';
}
 ?>



	  




<?php 
$login_check =  Session::get('customer_login');
if($login_check==false){
	echo '';
}else{
	echo '<li><a href="profile.php">Hồ sơ</a> </li>';
}
 ?>
<!--  <?php 
$login_check =  Session::get('customer_login');
if($login_check){
echo'<li><a href="compare.php">So sánh</a> </li>';

}
 ?>
<?php 
$login_check =  Session::get('customer_login');
if($login_check){
echo'<li><a href="wishlist.php">Danh sách yêu thích</a> </li>';

}
 ?>  -->
	  <li><a href="contact.php">Hỗ trợ</a> </li>
	  <div class="clear"></div>
	</ul>
</div>


   