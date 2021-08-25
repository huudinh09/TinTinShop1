<!DOCTYPE html>
<html>
<head>
	<title>Đăng Nhập | TinTin.vn</title>
	<link rel="shortcut icon" type="image/png" href="../Picture/fav_icon.ico">
	<script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
	<link rel="stylesheet" href="../assets/CodeCSS/login.css">
	<link rel="stylesheet" type="text/css" href="../assets/Bootstrap/bootstrap.css">
</head>
<body>
	<div class="top">
		<div class="brand">
			<a class="logo" href="index.php"><img src="../assets/Picture/nvabar_logo.png" style="height: 100px; width: 230px;"></a>
			<p class="component">Đăng Nhập</p>
		</div>
		
	</div>
	<div class="body">
		<div class="inf">
			<img class="info_logo" src="../assets/Picture/inf_logo.png">
			<p class="slogan">Mua sắm cùng TINTIN</p>
			<a class="explore" href="index.php">Mua ngay &#8594;</a>
		</div>
		
		<div class="container1">
			<form action="xuly_login.php" method="POST">
				<p class="login">Đăng Nhập</p>
			  <div class="mb-3">
			    <label style="margin-left: 20px; " for="exampleInputEmail1" class="form-label">Số điện thoại</label>
			    <input style="width: 350px; margin: 0 auto " type="text" class="form-control" id="PhoneNum" aria-describedby="emailHelp">
			    <div style="margin-left: 24px;" id="emailHelp" class="form-text">Số điện thoại của bạn sẽ được bảo mật.</div>
			  </div>
			  <div class="mb-3">
			    <label style="margin-left: 20px; for="exampleInputPassword1" class="form-label">Mật khẩu</label>
			    <input style="width: 350px; margin: 0 auto" type="password" class="form-control" id="password">
			  </div>
			  <div class="mb-3 form-check">
			    <input style="margin-left: 5px" type="checkbox" class="form-check-input" id="exampleCheck1">
			    <label class="form-check-label" for="exampleCheck1">Nhớ mật khẩu</label>
			  </div>
			  <button id="login" style="all:none; width: 350px; margin: 0px 0px 0px 25px;" type="button" onclick="dangnhap()" class="button">Đăng nhập</button>
			  <p style="text-align: center; margin-top: 10px; ">HOẶC</p>	
				<div class="middle">
			      <a class="btn" href="#">
			        <i class="fab fa-facebook-f"></i>
			      </a>
			      <a class="btn" href="#">
			        <i class="fab fa-google"></i>
			      </a>
			      <a class="btn" href="#">
			        <i class="fab fa-instagram"></i>
			      </a>
			    </div>
			    <p class="signup">Bạn mới đến với TinTin? <a name="lksignup" href="signup.php" >Đăng kí</a></p>
			</form>
			
		</div>
	</div>
	<script type="text/javascript">
			function dangnhap(){
				var username = document.getElementById("PhoneNum").value;
				var password = document.getElementById("password").value;
				var check=1;
				//kiểm tra điền đầy đủ thông tin
				if(username=="" || password=="" ){
					alert("Điền tất cả thông tin ");
					check = 0;
				}
				if(check == 1){
					document.getElementById("login").type="submit";
				}
			}
		</script>
</body>
</html>