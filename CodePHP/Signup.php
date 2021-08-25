<!DOCTYPE html>
<html>
<head>
	<title>Đăng Ký | TinTin.vn</title>
	<link rel="shortcut icon" type="image/png" href="../Picture/fav_icon.ico">
	<script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
	<link rel="stylesheet" href="../assets/CodeCSS/login.css">
	<link rel="stylesheet" type="text/css" href="../assets/Bootstrap/bootstrap.css">
</head>
<body>
	<div class="top">
		<div class="brand">
			<a class="logo" href="index.php"><img src="../assets/Picture/nvabar_logo.png" style="height: 100px; width: 230px;"></a>
			<p class="component">Đăng Ký</p>
		</div>
		
	</div>
	<div class="body" style="height: 750px;">
		<div class="inf">
			<img class="info_logo" src="../assets/Picture/inf_logo.png">
			<p class="slogan">Mua sắm cùng TinTin</p>
			<a class="explore" href="index.php">Mua ngay &#8594;</a>
		</div>
		<div  class="container1">
			<form class="form_dk" action="xuly_signup.php" method="POST">
				<p class="login">Đăng Ký</p>
				<div class="mb-3">
				 	<label style="margin-left: 20px; for="exampleInputPassword1" class="form-label">Họ tên</label>
				 	 <input style="width: 350px; margin: 0 auto" type="text" class="form-control" id="name">
				</div>
			  	<div class="mb-3">
			    	<label style="margin-left: 20px; " for="exampleInputEmail1" class="form-label">Số điện thoại</label>
			    	<input style="width: 350px; margin: 0 auto " type="email" class="form-control" id="PhoneNum" aria-describedby="emailHelp">
			  	</div>
			  	<div class="mb-3">
			    	<label style="margin-left: 20px; for="exampleInputPassword1" class="form-label">Mật khẩu</label>
			    	<input style="width: 350px; margin: 0 auto" type="password" class="form-control" id="password">
			  	</div>
			  	<div class="mb-3">
			    	<label style="margin-left: 20px; for="exampleInputPassword1" class="form-label">Xác nhận mật khẩu</label>
			    	<input style="width: 350px; margin: 0 auto" type="password" class="form-control" id="password2">
			  	</div>
			  	<div class="mb-3">
			    	<label style="margin-left: 20px; for="exampleInputPassword1" class="form-label">Địa chỉ</label>
			    	<input style="width: 350px; margin: 0 auto" type="text" class="form-control" id="address">
			  	</div>
			  
			  	<button onclick="dangky()" style="all:none; width: 350px; margin: 0px 0px 0px 25px;" type="button" class="button">Đăng ký</button>
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
			    	<p class="signup">Bạn đã có tài khoản TinTin? <a name="lklogin" href="Login.php" >Đăng nhập</a></p>
			</form>
			
		</div>
	</div>
	<script >
		function dangky() {
			var username=document.getElementById("name").value;
			var mk=document.getElementById("password").value;
			var cfmk=document.getElementById("password2").value;
			var address=document.getElementById("address").value;
			var std=document.getElementById("PhoneNum").value;
			var check = 1;

			//kiểm tra điền đầy đủ thông tin
			if(username=="" || mk=="" || cfmk=="" || 
			 email=="" || std==""){
				alert("Điền tất cả thông tin ");
				check = 0;
			}

			//kiểm tra khoảng trắng
			if(username.indexOf(' ') > 0){
				alert("Tên đăng nhập không được chứa khoảng trắng");
				check = 0;
			}


			//kiểm tra mật khẩu
			var ktmk=/^(?=.*[A-Za-z])(?=.*\d)[A-Za-z\d]{8,}$/;
			if(!ktmk.test(mk)){
				alert("Mật khẩu ít nhất 8 kí tự và 1 số");
				check = 0;
			}
			else{
				if(mk.includes(username)){
					alert("Mật khẩu không được chứa tên đăng nhập");
					check = 0;
					}
			}

			// kiểm tra 2 mk giống nhau
			if(mk.trim() != cfmk.trim()){
				alert("Mật khẩu nhập lại không giống nhau");
				check = 0;
			}
			
			if(check == 1){
				document.getElementById("signup").type="submit";
			}

		}
		
	</script>
</body>
</html>