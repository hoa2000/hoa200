<html>
<head>
<title>Registration</title>
<script language="javascript" src="kiemtra.js"></script>
<script language="javascript" src="jquery.min.js"></script>
<script language="javascript">
$(document).ready(function(e) {
    //lập trình sử kiện keyup chung cho cả 2 input
	$("input").keyup(function(e) {
        tk = $("#taikhoan").val();//lấy giá trị của input hoten
		//sử dụng $.post(url, {bien:giatri}, function(){} );
		$.post("dangky_taikhoan.php",{taikhoan:tk},
			//responseData: kết quả echo về từ Test.php; status là trạng thái thực hiện
			function (responseData, status){
				if(status=="success")
					$("#ktra").html(responseData);
				else	
					$("#ktra").html("<h3>CÓ LỖI</h3>");	
				} 
		);
    });
});
</script>
<style>
body{
}
.container{
	width:550px;
	height:626px;
	margin:0 auto;
}
form{
	margin:0;
	padding:0;
}
form .container{
	margin-top:50px;
	background:url(../image/b1.jpg) no-repeat;
}
form .container h2{
	text-align:center;
	padding-top:20px;
}
form .container .txt{
	padding-left:50px;
}
form .container .txt label{
	font-size:18px;
}
form .container .txt input{
	width:300px;
	height:30px;
}
form .container .but{
	padding-left:50px;
}
form .container .but input{
	width:200px;
	height:30px;
	background:#FFFF00;
	color:#DC143C;
}
</style>
</head>
<body>
<form name="f1" id="f1" method="POST" action='dangky_taikhoan.php'>
<div class="container">
<div class="txt">
<h2>Đăng ký tài khoản</h2>
<h3 id="baoloi" style="color:red; text-align:center"></h3>
<label>Số điện thoại:</label>
</br>
<input type='text' name="sdt" id="sdt"/>
<span id="tb2" style="color:red"></span>
</br>
</br>
<label>họ tên:</label>
</br>
<input type='text' name="hoten" id="hoten"/>
</br>
</br>
<label>địa chỉ:</label>
</br>
<input type='text' name="diachi" id="diachi"/>
</br>
</br>
<label>Tài Khoản:</label>
</br>
<input type='text' name="taikhoan" id="taikhoan"/>
<span id="ktra" name="ktra" style="color:red; font-size:12px;"></span>
</br>
</br>
<label>Mật Khẩu:</label>
</br>
<input type='password' name="matkhau" id="matkhau"/>
</br>
</br>
<label>Nhập Lại Mật Khẩu:</label>
</br>
<input type='password' name='matkhau2' id="matkhau2"/>
</div>
</br>
</br>
<div class="but">
<input type='submit' name="dangky" id="dangky" value='Đăng ký' onClick="return kiemtra()"/>
<input type='submit' name="out" id="out" value='thoát'/>
</div>
</div>
</form>
</body>
</html>