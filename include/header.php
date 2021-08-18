	<div class="header-main">
		<div class="top-search pull-left hidden-xs">
			<div class="header_searchs">
				<form class="input-group search-bar" action="" method="post" role="search">
					<input type="search" name="query" value="" placeholder="Tìm kiếm sản phẩm... " class="input-group-field st-default-search-input search-text" autocomplete="off" required>
					<span class="input-group-btn">
						<button class="btn btn-search" type="submit" name="b">
							<i class="fa fa-search" aria-hidden="true"></i>
						</button>
					</span>
				</form>
				<?php
if(isset($_POST['b']))
{
	$seach=$_POST['query'];
	echo"
	<script>
	var src='index.php?module=search&tk=$seach';
	window.location.href=src;
	</script>
	";
}
?>
			</div>
		</div>

		<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
			<div class="logo">
				
				<a href="index.php" class="logo-wrapper ">					
					<img src="//bizweb.dktcdn.net/100/276/613/themes/614232/assets/logo.png?1594395009927" alt="logo ">					
				</a>
			</div>
		</div>

		<div class="top-search hidden-lg hidden-sm hidden-md">
			<div class="header_searchs">
				<form class="input-group search-bar" action="/search" method="get" role="search">
					<input type="search" name="query" value="" placeholder="Tìm kiếm sản phẩm... " class="input-group-field st-default-search-input search-text" autocomplete="off" required>
					<span class="input-group-btn">
						<button class="btn btn-search" type="submit">
							<i class="fa fa-search" aria-hidden="true"></i>
						</button>
					</span>
				</form>
			</div>
		</div>
		<div class="top-cart-contain pull-right hidden-xs">
			<div class="">
				<div class="mini-cart cart_hover text-xs-center">
					<div class="heading-cart">
						<a href="index.php?module=cart"><img src="//bizweb.dktcdn.net/100/276/613/themes/801560/assets/icon_minicart3.png?1607959802865" alt="flowers"></a>
						<a class="mr_top" href="index.php?module=cart">
						<?php
						$count=0;
if(isset($_SESSION['cart1']))
{
	$count=count ($_SESSION["cart1"]);
	echo"<span class='cart_num'><span class='color_'><span class='cartCount  count_item_pr'>$count</span>";
}
else{
echo"
<span class='cart_num'><span class='color_'><span class='cartCount  count_item_pr'>0</span>";
}
?>
						</a>
					</div>
				</div>
			</div>
		</div>
	</div>