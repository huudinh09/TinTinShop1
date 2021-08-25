
	<div class="navabar">	
		<a href="index.php"><img src="../assets/Picture/logo.png" width="100" height="100"></a>
		<div class="menu-btn js-menubtn hide-on-mpc"><i class="fas fa-bars icon-menu"></i></div>
		<div  class="col l-10 l-o-0 m-10 m-o-1 c-10 c-o-1">
			<div class="row nva-grid">
				<div class="col l-4 m-8 c-8 nva-searchbar ">
					<input class="input-search" type="text" placeholder="Tìm kiếm sản phẩm" name="">
					<button class="btn-search" type="submit"> <i  class="fas fa-search"></i> </button>
				</div>
				<div class="col l-4 m-0 c-0 nva-link">
					<div class="row">
					<a class="col l-6 m-0 c-0 link " href="#">
						<i class="fas fa-home nva-icon"></i>Trang chủ
					</a>
					<a class="col l-6 m-0 c-0 link" href="#">
						<i class="fas fa-clipboard nva-icon"></i>Thông báo
					</a></div>
				</div>
				<div class="col l-4 m-4 c-4 nva-customer">
					<div class="row">
						<a class="col l-6 m-6 c-5 customer-cart" href="#">
							<p class="word hide-on-mobile hide-on-tablet">Giỏ hàng</p> <i class="fas fa-shopping-cart nva-icon"></i>
						</a>
						<div class="col l-6 m-6 c-7 customer-acc" href="#" role="button">
							<p class="word hide-on-mobile hide-on-tablet">Tài khoản</p> <i class="fas fa-user nva-icon"></i><i class="fas fa-sort-down nva-icon"></i>
							<ul type="none" class="nva-dropdown __table-form">
								<li class="li-acc"><a href="./Login.php">
									<button class="header-acc __btn-form" > Đăng nhập</button>
									</a></li>
								<li class="li-acc"><a href="./Signup.php">
									<button class="header-acc header-acc1 __btn-form" >  Đăng ký</button>
								</a></li>
							</ul>	

						</div>
					</div>
						
				</div>
			</div>
		</div>
	</div>
<script type="text/javascript">
	const account = document.querySelector('.customer-acc');
	const dropdown = document.querySelector('.nva-dropdown');
		function showCustomerAcc(){
			dropdown.classList.add('open')
		}
		function hideCustomerAcc(){
			dropdown.classList.remove('open')
		}
		account.addEventListener('mouseover', showCustomerAcc);
		account.addEventListener('mouseout', hideCustomerAcc);
		dropdown.addEventListener('mouseout', hideCustomerAcc);
		dropdown.addEventListener('mouseover', showCustomerAcc);

</script>

</body>
</html>