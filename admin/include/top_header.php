 	<div class="topBar">
		<div class="container">
			<div class="row">
				<div class="col-lg-6 col-md-6 col-sm-6 hidden-xs top-content">
					<span>Chào mừng bạn đến với flowers!</span>
				</div>
				<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 top-content">
					<div class="log">
						<?php
if(isset($_SESSION["uname"])==""){
	echo"
	<a class='ww text-color' href='chuc_nang/registration.php' title='Đăng ký'>Đăng ký</a>
						<a class='text-color' href='chuc_nang/login.php'  title='Đăng nhập'>Đăng nhập</a>";
}
else{
echo"
<a class='ww text-color' href='suatk.php'>".$_SESSION['uname']."</a>
<a class='text-color' href='../chuc_nang/logout.php'>đăng xuất</a>";}
?>
						
					</div>
				</div>
			</div>
		</div>
	</div>