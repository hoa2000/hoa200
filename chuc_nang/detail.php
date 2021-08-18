 <?php
$ma=$_GET['vl'];
$conn= KetnoiCSDL();
$sql="select * from sanpham where masanpham='".$ma."'";
$pdo_stm = $conn->query($sql);
if($pdo_stm==NULL)
{
	die("<h3>lỗi SQL</h3>");
}

while($row=$pdo_stm->fetch())
{
	$ten=$row['tensanpham'];
	$img=$row['hinh'];
	$t=$row['gia'];
	$mt=$row['mota'];
	$gchu=$row['ghichu'];
}
?>
<section class="product-template product" itemscope="" itemtype="http://schema.org/Product">
	<meta itemprop="url" content="//flowers-1.mysapo.net/thanh-cong">
	<meta itemprop="image" content="//bizweb.dktcdn.net/thumb/grande/100/276/613/products/2-8-fe0d0510-5de8-4545-b1f8-fbeb8849c23f.jpg?v=1517209220047">
	<meta itemprop="description" content="<?="$mota"?>">
	<meta itemprop="name" content="Thành công">
	<div class="container">
		<div class="row">
			<div class="details-product">
				<div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 images-pro">
					<div class="large-image border-radius-10">
						<a href="" class="large_image_url checkurl dp-flex" data-rel="prettyPhoto[product-gallery]">						
							<div style="height:505px;width:553px;" class="zoomWrapper">
							<div style="height:505px;width:505px;" class="zoomWrapper">
							<div style="height:505px;width:505px;" class="zoomWrapper">
							<div style="height:505px;width:505px;" class="zoomWrapper">
							<img id="zoom_01" class="img-responsive" src= '<?="$img"?>' alt='<?=".$ten."?>' style="position: absolute; width: 505px; height: 505px;"></div></div></div></div>							
						</a>
					</div>
				</div>
				<div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 details-pro">
					<h1 class="title-head"><?="$ten"?></h1>
					<div class="bizweb-product-reviews-badge" data-id="9663316"></div>
<div class="price-box price-loop-style">	
	<span class="special-price">
		<span class="price">giá: <?=number_format($t,0.3)?> VNĐ</span>
	</span>
	<span class="old-price">
		<span class="price sale" style="display: none;"></span>
	</span>
</div>
<div class="availability in-stock"><span>Mã SP: <?="$ma"?></span></div>
					<div class="form-product">
						<form enctype="multipart/form-data" id="add-to-cart-form" action="/cart/add" method="post" class="form-inline">
							<div class="form-group product_quantity  hidden" style="display: none;">
								<label class="form-control-label">Số lượng</label>
								<button onclick="var result = document.getElementById('qty'); var qty = result.value; if( !isNaN( qty ) &amp;&amp; qty > 1 ) result.value--;return false;" class="reduced btn btn-ipnb" type="button">-</button>
								<input type="text" class="form-control text-xs-center qty" title="Số lượng" value="1" maxlength="3" id="qty" name="quantity" onkeyup="valid(this,'numbers')" onblur="valid(this,'numbers')">
								<button onclick="var result = document.getElementById('qty'); var qty = result.value; if( !isNaN( qty )) result.value++;return false;" class="increase btn btn-ipnb" type="button">+</button>
							</div>
							<!-- BUTTON ACTIONS -->
							<input class="hidden" type="hidden" name="variantId" value="17484381">
							<div class="button_actions">
								<button type="submit" class="border-radius-10 btn btn-buy btn-transition btn-cart btn_buy add_to_cart" title="Thêm vào giỏ hàng" style="display: none;">
									<span>Thêm vào giỏ hàng</span>
								</button>
							</div>
							<!-- END BUTTON ACTIONS -->
						</form>
					</div>
					<div class="product-summary product_description">
						<div class="rte description">
							<?="$mt"?>		
						</div>
					</div>
					<form method='POST' action=''>
<input class ='soluong' type='text' value='1' id="s1" name='sl'>
<input class='but' type='submit' value='thêm hàng vào giỏ' id="mua" name='mua'>
</form>
					<div class="social-sharing ">
						<div class="addthis_inline_share_toolbox share_add" data-url="https://flowers-1.mysapo.net/thanh-cong" data-title="Thành công" data-description="Với tông màu vàng tươi sáng của những đoá hướng dương, cúc pingpong trên nền xanh của cẩm tú cầu và các phụ liệu khác. Thành Công đem đến cho người nhận cảm">
							<script type="text/javascript" src="//s7.addthis.com/js/300/addthis_widget.js#pubid=ra-58589c2252fc2da4"></script>
						</div>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
				<div class="product-tab e-tabs">
					<div class="row">
						<div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
							<ul class="tabs tabs-title clearfix">
								
								
								
								
								
								<li class="tab-link current" data-tab="tab-1">
									<h5 class="tab_title">
										<span>Chi tiết sản phẩm</span>
									</h5>
								</li>
								
								
								
								
								
								
								<li class="tab-link" data-tab="tab-2">
									<h5 class="tab_title">
										<span>Thông tin thanh toán</span>
									</h5>
								</li>
								
								
								
								<li class="tab-link" data-tab="tab-3">
									<h5 class="tab_title">
										Đánh giá sản phẩm
									</h5>
								</li>
								
							</ul>
						</div>

						<div class="col-lg-9 col-md-9 col-sm-12 col-xs-12">
							
							<div id="tab-1" class="tab-content current">
								<div class="rte">
									<p><?="$gchu"?></p>
								</div>	
							</div>	
							<div id="tab-3" class="tab-content">
								<div id="bizweb-product-reviews" class="bizweb-product-reviews" data-id="9663316">
    
</div>
							</div>
						</div>
					</div>
				</div>				
			</div>
			<?php
if(isset($_POST['mua']))
{
	if(isset($_SESSION['uname'])==""){
		echo"
		<script>
		alert('bạn cần đăng nhập');
		</script>
		";
	}
	else{
	if($_POST['sl']<=0)
	{
		echo"<script>alert('vui lòng nhập số lượng mua')</script>";
	}
	else
	{
		 $sol=$_POST['sl'];
		$id=$ma;
		echo"<script>alert('Thêm hàng vào  giỏ thành công');
		var src='chuc_nang/addcart.php?item=$id&sl=$sol';
		location.href=src;
		</script>";
	}
	}
}
?>
		</div>
	</div>
</section>