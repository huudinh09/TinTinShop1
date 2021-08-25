<!DOCTYPE html>
<html>
<head>
	<title>Sản phẩm | TinTin.vn</title>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="shortcut icon" type="image/png" href="./assets/Picture/fav_icon.ico">
	<script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
    <!-- Owl Carousel -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css" integrity="sha512-sMXtMNL1zRzolHYKEujM2AqCLUR9F2C4/05cdbxjjLSRvMQIciEPCQZo++nk7go3BtSuK9kfa/s+a4f4i5pLkw==" crossorigin="anonymous" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" integrity="sha512-tS3S5qG0BlhnQROyJXvNjeEM4UpMXHrQfTGmbQ1gKmelCxlSEBUaxhRBj/EFTzpbP4RVSrpEikbmdJobCvhE3g==" crossorigin="anonymous" />
	
    <link rel="stylesheet" type="text/css" href="./assets/CodeCSS/base.css">
	<link rel="stylesheet" type="text/css" href="./assets/CodeCSS/grid.css">

	<link rel="stylesheet" href="./assets/CodeCSS/index.css">
	<link rel="stylesheet" href="./assets/CodeCSS/product.css">
	<link rel="stylesheet" type="text/css" href="./assets/CodeCSS/responsive.css">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js" integrity="sha512-bPs7Ae6pVvhOSiIcyUClR7/q2OAsRiovw4vAkX+zJbw3ShAeeqezq50RIIcIURq7Oa20rW2n2q+fyXBNcU9lrw==" crossorigin="anonymous"></script>
    

</head> 
<body >
    <div class="app">
        <!-- Header  -->
        <div class="menu-background js-menubg">
            <div class="menu js-menu" id="menu">
                <div class="menu-header">
                    <a href="index.php"><img class="menu-logo" src="./assets/Picture/logo.png" width="100" height="100"></a>
                    <i class="close-btn js-closebtn fas fa-bars"></i>
                </div>
                <div class="menu-links">
                    <a class=" menu-link" href="index.php">
                        <i class="fas fa-home menu-icon"></i><p>Trang chủ</p>
                    </a>
                    <a class=" menu-link" href="#">
                        <i class="fas fa-clipboard menu-icon"></i><p>Thông báo</p>
                    </a>
                    <a class=" menu-link" href="#">
                        <i class="fas fa-trophy menu-icon"></i><p>Tốt nhất</p>	
                    </a>
                    <a class=" menu-link" href="#">
                        <i class="fas fa-user menu-icon"></i><p>Thông tin</p>
                    </a>
                </div>
            </div>
        </div>
        <div style="background-color: var(--my-color)"> 
            <div class="grid wide">
            <?php include("./CodePHP/nvabar1.php") ?>
            </div>
        </div>

        <!-- Body product page -->
        <section class="body">
            <div class="grid wide">
                <div class="row product">
                    <div class="col l-5 m-5 c-12">
                        <div class="product__img-box">
                            <img class="product__img" src="./assets/Picture/products/product_1.jpg" alt="" srcset="">
                        </div>
                    </div>
                    <div class="col l-7 m-7 c-12">
                        <div class="product__infor">
                            <h2 class="product__infor-name" >Corsair HS70 Bluetooth</h2>
                            <div class="product__infor-body">
                                <p>Hãng sản xuất: Corsair</p>
                                <p>Loại hàng: Tai nghe</p>
                                <p>Đã bán: 20 sản phẩm</p>
                                <p>Đơn vị: Cái</p>
                            </div>
                            <div class="product__infor-price">
                                <span class="product__infor-price-label">Giá bán:</span>
                                <span>2.800.000 ₫</span>
                            </div>
                            <div class="product__infor-status">
                                <i class="fas fa-check product__infor-status-icon"></i>
                                <span>Có thể đặt hàng</span>
                            </div>
                            <div class="product__infor-order">
                                <!-- Quantify layout -->
                                <div class="product__quantity">
                                    <span class="product__quantity-title">Số lượng</span>
                                    <div class="product__quantity-control">
                                        <button class="qty-up" data-id="pro1"> <i class="fas fa-angle-up"></i></button>
                                        <input data-id="pro1" type="text" class="qty-input" value="1" placeholder="1" style="text-align: center;">
                                        <button data-id="pro1" class="qty-down"> <i class="fas fa-angle-down"></i></button>
                                    </div>
                                </div>

                                <div class="product__buy">
                                    <button type="submit" class="btn product__buy-btn">Mua ngay</button>
                                </div>

                                <div class="product__add-cart">
                                    <form id="product-form"  method="post">
                                        <button name="add_cart_submit" type="submit" class="btn product__add-cart-btn">Thêm vào giỏ</button>
                                    </form>
                                </div>
                          
                            </div>
                            <div class="product__infor-share">
                                <span class="product__share-title">Chia sẻ</span>
                                <div class="product__share-socials">
                                    <i class="fab fa-facebook product__share-socials-facebook"></i>
                                    <i class="fab fa-twitter product__share-socials-twitter"></i>
                                    <i class="fab fa-google-plus-g product__share-socials-google"></i>
                                    <i class="fab fa-instagram product__share-socials-instagram"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Detail infor section -->
            <div class="grid wide detail">
                <div class="row">
                    <div class="col l-8">
                    <div class="tab-list">
                    <div class="tab-item active">
                        <span class="tab-item__label" >Thông tin chi tiết</span>
                    </div>
                    <div class="tab-item">
                        <span class="tab-item__label" >Bình luận</span>
                    </div>
                    <div class="tab-line"></div>
                </div>

                <div class="tab-pane">
                    <div class="tab-pane-item active">
                        <div class="product__infor">
                            <h2 class="product__infor-name" >Corsair HS70 Bluetooth</h2>
                            <div class="product__infor-body">
                                <p>Hãng sản xuất: Corsair</p>
                                <p>Loại hàng: Tai nghe</p>
                                <p>Đã bán: 20 sản phẩm</p>
                                <p>Đơn vị: Cái</p>
                            </div>
                            <div class="product__infor-price">
                                <span class="product__infor-price-label">Giá bán:</span>
                                <span>2.800.000 ₫</span>
                            </div>
                            <div class="product__infor-status">
                                <i class="fas fa-check product__infor-status-icon"></i>
                                <span>Có thể đặt hàng</span>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane-item">
                        <div class="comment-box">
                            <div class="comment-form">
                                <span class="comment-form__title" >Bình luận</span>
                                <textarea name="" id="" cols="60" rows="5" placeholder="Your comment"></textarea>
                                <span>Chèn video/hình ảnh</span>
                                <input type="text" placeholder="Link your media">
                                <button class="btn btn-submit-cmt" >Bình luận</button>
                            </div>
                            <div class="comment-list">
                                <div class="comment-item">
                                    <img class="comment-item__img" src="./assets/Picture/avatar/boy_1.png" alt="">
                                    <div class="comment-item__body">
                                        <h3 class="comment-body__name" >Dao Minh Thong</h3>
                                        <p class="comment-body__content">Sản phẩm rất tuyệt vời luôn nha shop</p>
                                        <div class="comment-list-img">
                                            <img src="./assets/Picture/products/product_1.jpg" alt="">
                                        </div>
                                        <div class="comment-body__controls">
                                            <span class="btn-rely-comment" >Trả lời</span>
                                            <span class="btn-see-reply-comment" >Xem</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="comment-item">
                                    <img class="comment-item__img" src="./assets/Picture/avatar/boy_1.png" alt="">
                                    <div class="comment-item__body">
                                        <h3 class="comment-body__name" >Dao Minh Thong</h3>
                                        <p class="comment-body__content">Sản phẩm rất tuyệt vời luôn nha shop</p>
                                        <div class="comment-body__controls">
                                            <span class="btn-rely-comment" >Trả lời</span>
                                            <span class="btn-see-reply-comment" >Xem</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="comment-item">
                                    <img class="comment-item__img" src="./assets/Picture/avatar/boy_1.png" alt="">
                                    <div class="comment-item__body">
                                        <h3 class="comment-body__name" >Dao Minh Thong</h3>
                                        <p class="comment-body__content">Sản phẩm rất tuyệt vời luôn nha shop</p>
                                        <div class="comment-body__controls">
                                            <span class="btn-rely-comment" >Trả lời</span>
                                            <span class="btn-see-reply-comment" >Xem</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                    </div>
                </div>
            </div>

            <!-- Similar product -->
            <div class="grid wide">
                <div class="similar-product">
                    <h2 class="similar-product__title" >Sản phẩm tương tự</h2>
                </div>

                 <!-- Top sale -->
                <div class="top-sale owl-carousel owl-theme">
                    <div class="top-sale-item">
                        <img class="top-sale-item__img" src="./assets/Picture/products/balo1.jpg" alt="">
                        <h1 class="top-sale-item__name" >Ba lô dễ thương dây kéo</h1>
                        <i class="a fas fa-star"></i>
                        <i class="a fas fa-star"></i>
                        <i class="a fas fa-star"></i>
                        <i class="a fas fa-star"></i>
                        <i class="a fas fa-star"></i>
                        <span class="top-sale-item__price" >100.000 đ</span>
                        <button class="top-sale-item__btn" >Thêm vào giỏ</button>
                    </div>
                    <div class="top-sale-item">
                        <img class="top-sale-item__img" src="./assets/Picture/products/balo2.jpg" alt="">
                        <h1 class="top-sale-item__name" >Ba lô dễ thương dây kéo</h1>
                        <i class="a fas fa-star"></i>
                        <i class="a fas fa-star"></i>
                        <i class="a fas fa-star"></i>
                        <i class="a fas fa-star"></i>
                        <i class="a fas fa-star"></i>
                        <span class="top-sale-item__price" >100.000 đ</span>
                        <button class="top-sale-item__btn" >Thêm vào giỏ</button>
                    </div>
                    <div class="top-sale-item">
                        <img class="top-sale-item__img" src="./assets/Picture/products/balo3.jpg" alt="">
                        <h1 class="top-sale-item__name" >Ba lô dễ thương dây kéo</h1>
                        <i class="a fas fa-star"></i>
                        <i class="a fas fa-star"></i>
                        <i class="a fas fa-star"></i>
                        <i class="a fas fa-star"></i>
                        <i class="a fas fa-star"></i>
                        <span class="top-sale-item__price" >100.000 đ</span>
                        <button class="top-sale-item__btn" >Thêm vào giỏ</button>
                    </div>
                    <div class="top-sale-item">
                        <img class="top-sale-item__img" src="./assets/Picture/products/binhnuoc1.jpg" alt="">
                        <h1 class="top-sale-item__name" >Ba lô dễ thương dây kéo</h1>
                        <i class="a fas fa-star"></i>
                        <i class="a fas fa-star"></i>
                        <i class="a fas fa-star"></i>
                        <i class="a fas fa-star"></i>
                        <i class="a fas fa-star"></i>
                        <span class="top-sale-item__price" >100.000 đ</span>
                        <button class="top-sale-item__btn" >Thêm vào giỏ</button>
                    </div>
                    <div class="top-sale-item">
                        <img class="top-sale-item__img" src="./assets/Picture/products/binhnuoc2.jpg" alt="">
                        <h1 class="top-sale-item__name" >Ba lô dễ thương dây kéo</h1>
                        <i class="a fas fa-star"></i>
                        <i class="a fas fa-star"></i>
                        <i class="a fas fa-star"></i>
                        <i class="a fas fa-star"></i>
                        <i class="a fas fa-star"></i>
                        <span class="top-sale-item__price" >100.000 đ</span>
                        <button class="top-sale-item__btn" >Thêm vào giỏ</button>
                    </div>
                    <div class="top-sale-item">
                        <img class="top-sale-item__img" src="./assets/Picture/products/binhnuoc3.jpg" alt="">
                        <h1 class="top-sale-item__name" >Ba lô dễ thương dây kéo</h1>
                        <i class="a fas fa-star"></i>
                        <i class="a fas fa-star"></i>
                        <i class="a fas fa-star"></i>
                        <i class="a fas fa-star"></i>
                        <i class="a fas fa-star"></i>
                        <span class="top-sale-item__price" >100.000 đ</span>
                        <button class="top-sale-item__btn" >Thêm vào giỏ</button>
                    </div>
                </div>
            </div>
        </section>

        <!-- Footer section -->
        <footer class="footer">
            <div class="grid wide footer__content">
                <div class="row">
                   <div class="col l-3 m-3 c-6">
                        <h3 class="footer__heading">Chăm sóc khách hàng</h3>
                        <ul class="footer-list">
                            <li class="footer-item">
                                <a href="" class="footer-item__link">Trung tâm trợ giúp</a>
                            </li>
                            <li class="footer-item">
                                <a href="" class="footer-item__link">Ele-Shop Mall</a>
                            </li>
                            <li class="footer-item">
                                <a href="" class="footer-item__link">Hướng dẫn mua hàng</a>
                            </li>
                        </ul>
                   </div>
                   <div class="col l-3 m-3 c-6">
                        <h3 class="footer__heading">Về TinTin-Shop</h3>
                        <ul class="footer-list">
                            <li class="footer-item">
                                <a href="" class="footer-item__link">Giới thiệu</a>
                            </li>
                            <li class="footer-item">
                                <a href="" class="footer-item__link">Tuyển dụng</a>
                            </li>
                            <li class="footer-item">
                                <a href="" class="footer-item__link">Điều khoản</a>
                            </li>
                        </ul>
                   </div>
                   <div class="col l-3 m-3 c-6">
                        <h3 class="footer__heading">Danh mục</h3>
                        <ul class="footer-list">
                            <li class="footer-item">
                                <a href="" class="footer-item__link">Quần áo</a>
                            </li>
                            <li class="footer-item">
                                <a href="" class="footer-item__link">Dụng cụ vệ sinh</a>
                            </li>
                            <li class="footer-item">
                                <a href="" class="footer-item__link">Đồ dùng học tập</a>
                            </li>
                        </ul>
                   </div>
                   <div class="col l-3 m-3 c-6">
                        <h3 class="footer__heading">Theo dõi chúng tôi</h3>
                        <ul class="footer-list">
                            <li class="footer-item">
                                <a href="" class="footer-item__link">
                                    <i class="footer-item__icon fab fa-facebook"></i>
                                    Facebook
                                </a>
                            </li>
                            <li class="footer-item">
                                <a href="" class="footer-item__link">
                                    <i class="footer-item__icon fab fa-instagram-square"></i>
                                    Instagram
                                </a>
                            </li>
                            <li class="footer-item">
                                <a href="" class="footer-item__link">
                                    <i class="footer-item__icon fab fa-linkedin"></i>
                                    Linkedin
                                </a>
                            </li>
                        </ul>
                   </div>
                </div>

               
            </div>

            <div class="footer__bottom">
                <div class="grid wide">
                    <div class="row">
                        <ul class="footer-policy">
                            <li class="footer-policy__item">
                                <a href="" class="footer-policy__item-link">CHÍNH SÁCH BẢO MẬT</a>
                            </li>
                            <li class="footer-policy__item">
                                <a href="" class="footer-policy__item-link">QUY CHẾ HOẠT ĐỘNG</a>
                            </li>
                            <li class="footer-policy__item">
                                <a href="" class="footer-policy__item-link">CHÍNH SÁCH VẬN CHUYỂN</a>
                            </li>
                            <li class="footer-policy__item">
                                <a href="" class="footer-policy__item-link">CHÍNH SÁCH TRẢ HÀNG VÀ HOÀN TIỀN</a>
                            </li>
                        </ul>
                    </div>
                    <div class="row">
                        <div class="col c-12 footer-img-policy-wrap">
                            <a href="" class="footer-img-policy">
                                <img src="./assets/Picture/policy/bo_cong_thuong.png" alt="">
                            </a>
                            <a href="" class="footer-img-policy">
                                <img src="./assets/Picture/policy/bo_cong_thuong.png" alt="">
                            </a>
                        </div>
                    </div>
                    <div class="row">
                        <div class="footer-bottom-info">
                            <p class="footer-company-name">Công ty TinTin</p>
                            <p class="footer__text">Địa chỉ: Ninh Kiều - Cần Thơ - Email: cskh@hotro.tintin.vn</p>
                            <p class="footer__text">Chịu Trách Nhiệm Quản Lý Nội Dung: Nguyen Van A - Điện thoại liên hệ: 024 71231111 (ext 4678)</p>
                            <p class="footer__text">© 2021 - Bản quyền thuộc về ❤️ ❤️ ❤️ <a class="link-copyright" href="https://www.tintin.com.vn"></a> ❤️ ❤️ ❤️</p>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
    </div>


    <script type="text/javascript">
        const menubtn = document.querySelector('.js-menubtn');
        const menubg = document.querySelector('.js-menubg')
        const close = document.querySelector('.js-closebtn');
        const menu = document.querySelector('.js-menu');


        function showMenu() {
            menubg.classList.add('open');
            menu.classList.remove('close');
        }
        menubtn.addEventListener('click',showMenu);
        function hideMenu(){
            menubg.classList.remove('open');
            menu.classList.add('close');
        }
        close.addEventListener('click',hideMenu);
        menubg.addEventListener('click', hideMenu);
        menu.addEventListener('click', function(event){
            event.stopPropagation()
        })

        $('.owl-carousel').owlCarousel({
        loop:true,
        margin:10,
        dots: false,
        responsive:{
            0:{
                items:1
            },
            600:{
                items:3
            },
            1000:{
                items:5
            }
            
        },
        nav: true
        });

    </script>		
    <script src="./assets/CodeJS/product.js"></script>

</body>
</html>