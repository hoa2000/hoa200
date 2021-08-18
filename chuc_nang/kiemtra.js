function kiemtra(){
	baoloi = document.getElementById("baoloi");
	
	sdt = document.getElementById("sdt");
	if(sdt.value == "")
	{
		baoloi.innerHTML = "Chưa nhập số điện thoại";
		sdt.select();
		return false;
	}
	
	hoten = document.getElementById("hoten");
	if(hoten.value == "")
	{
		baoloi.innerHTML = "Chưa nhập họ tên";
		hoten.select();
		return false;
	}
	
	diachi = document.getElementById("diachi");
	if(diachi.value == "")
	{
		baoloi.innerHTML = "Chưa nhập địa chỉ";
		diachi.select();
		return false;
	}
	
	taikhoan = document.getElementById("taikhoan");
	if(taikhoan.value == "")
	{
		baoloi.innerHTML = "Chưa nhập tên tài khoản";
		taikhoan.select();
		return false;
	}
	
	matkhau = document.getElementById("matkhau");
	if(matkhau.value == "")
	{
		baoloi.innerHTML = "Chưa nhập mật khẩu";
		matkhau.select();
		return false;
	}
	
	matkhau2 = document.getElementById("matkhau2");
	if(matkhau2.value == "")
	{
		baoloi.innerHTML = "Chưa nhập lại mật khẩu";
		matkhau2.select();
		return false;
	}
	
	if(matkhau.value != matkhau2.value)
	{
		baoloi.innerHTML = "Mật khẩu nhập lại không đúng";
		matkhau2.select();
		return false;
	}
	baoloi.innerHTML ="";
	return true;
}