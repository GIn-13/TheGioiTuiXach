<?php $allCategory=0;
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Thế giới túi xách</title>
	<link rel="stylesheet" type="text/css" href="./Public/css/style.css">
</head>
<body>
	
	<div id="header">
		<div id="margin-header">
			<ul>
				<li><a href="#" class="hotline">1800 68 48</a></li>
				<li><a href="" class="phone">0908 08 1618</a></li>
				<li><a href="" class="address">16-18 Trương Quốc Dung, P.8, Q.Phú Nhuận, Hồ Chí Minh</a></li>
			</ul>
		</div>
	</div>


	<div id="top">
		<div id="logo">
			<img src="./Public/images/logo.png" alt="" style="width: 300px ;">
		</div>
		<div id="search">
			<form action="" method="">
				<input type="text" name="" placeholder="Nhập từ khóa cần tìm...">
				<input type="submit" name="" value="&nbsp;">
			</form>
		</div>
		<div id="register">
			<ul>
				<li><a href="" class="res">Đăng kí</a></li>
				<li><a href="" class="login">Đăng nhập</a></li>
				<li>
					<a href="?controller=cart" class="cart">Giỏ hàng</a>
					<span class="total">0</span>
				</li>
			</ul>
		</div>
	</div>


	<div id="banner">
		<div id="menu-left">
			<div>
				<h3>DANH MỤC SẢN PHẨM</h3>
				<ul class="side-bar">
					<?php 
					$i=1;
					foreach ($categories as $category):								
								if($category['id']!= 0 &&$category['id']!= 5)	{			
					?>
							
					<li><a class="side-bar<?=$i?>" href="?controller=category&action=show&id=<?=$category['id'] ?>"><?=$category['name'] ?></a></li>
							
					<?php 
							$i+=1;}
							endforeach;
					?>

					<?php foreach ($brands as $brand):  ?>
					<li><a class="side-bar<?=$i?>" href="?controller=brand&action=show&id=<?=$brand['id'] ?>"><?=$brand['name'] ?></a></li>
					<?php $i+=1; endforeach;?>

					
				</ul>
			</div>
		</div>



		<div id="banner-main">
			<div id="menu">
				<ul class="root">			
					<li ><a href="index.php" class="root-Trang-chu">Trang chủ</a></li>
					<li><a href="">Giới thiệu</a></li>
					<li><a href="">Tin tức</a></li>
					<li><a href="?controller=category&action=show&id=<?php echo $allCategory ?>">Sản phẩm</a>
						<ul class="submenu" style="width: 100px;">
							<?php foreach ($categories as $category):
								if($category['id']!= 0)	{			
							?>
							
							<li><a href="?controller=category&action=show&id=<?=$category['id'] ?>"><?=$category['name'] ?></a>
							
							<?php }endforeach;?>
							
						</ul>
					</li>
					<li><a href="">Hướng dẫn</a>
						<ul class="submenu" style="width: 190px;">
							<li><a href=""> Hướng dẫn mua hàng</a>
							<li><a href=""> Hướng dẫn thanh toán</a>
							<li><a href=""> Đăng kí thành viên</a>								
						</ul>
					</li>

					<li><a href="">Đại lý</a></li>
					<li><a href="">Liên hệ</a></li>
				</ul>
			</div>




			<style >
		
		.slider {
			position: relative;
			background: #ccc;
			height: 270px;
			width: 900px;
		}

		.slider img {
			position: absolute;
			height: 100%;
			width: 100%;
		}
		
		.slider a {
			display: block;
			width: 60px;
			height: 45px;
			background: rgba(0, 0, 0, 0.5);
			z-index: 1000;
			text-decoration: none;
			text-align: center;
			color: #fff;
			line-height: 45px;
		}

		.next{
			position: absolute;
			right: 0px;
			top: 220px;
		}

		.prev{
			position: absolute;
			left: 0px;
			top: 220px;
		}
	</style>
	<div class="slider">
		<img src="./Public/images/slider-img1.png" class="slide-item" number="0">
		<img src="./Public/images/slider-img2.png" class="slide-item" number="1" style="display: none;">

		<a href="#" class="next">>></a>
		<a href="#" class="prev"><<</a>
	</div>
	<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
	<script>
		$(() => {			
			$('.next').click(function(){
				changeImage('next');
			})
			$('.prev').click(function(){
				changeImage('prev');
			})
		})

		function changeImage(type){
			let imgSelectVisible = $('img.slide-item:visible');
			let imgVisible = parseInt(imgSelectVisible.attr('number'));
			let eqNumber = type === 'next'? imgVisible + 1 : imgVisible -1;

			if(imgVisible === 0) {
				eqNumber = $('.slide-item').length -1;
			}

			if(eqNumber >= $('.slide-item').length) {
				eqNumber = 0;
			}
			$('img.slide-item').eq(eqNumber).fadeIn();

			imgSelectVisible.fadeOut();						
		}

		setInterval(function(){
			$('.next').click();
		},4000)
	</script>
			
		</div>
				
		<div id="new-product">
			<h3>SẢN PHẨM MỚI</h3>
			<ul>					
				<li>
					<?php  for($i=2;$i<=2;$i++) { ?>
					<div class="new-product-item">
						<img src="<?php print_r($products[$i]['image'])  ?> (1).jpg" alt="">
						<p><a style="text-decoration: none;color: #000;"  href="?controller=product&action=show&id=<?php print_r($products[$i]['id'])  ?>"><?php print_r($products[$i]['name'])?></a></p>
						<h4><?php print_r(number_format(($products[$i]['price']),0,'.','.'))?>đ</h4>
					</div>
					<?php }?>
					<?php  for($i=10;$i<=10;$i++) { ?>
					<div class="new-product-item">
						<img src="<?php print_r($products[$i]['image'])  ?> (1).jpg" alt="">
						<p><a style="text-decoration: none;color: #000;" href="?controller=product&action=show&id=<?php print_r($products[$i]['id'])  ?>"><?php print_r($products[$i]['name'])?></a></p>
						<h4><?php print_r(number_format(($products[$i]['price']),0,'.','.'))?>đ</h4>
					</div>
					<?php }?>
				</li>
			</ul>		
		</div>
	</div>


	<div id="guidance">
		<div id="border-guidance">
			<div class="item-guidance1">
				<a href="">FREE SHIPPING</a>
				<p>Giao hàng tận nơi, miến phí vận chuyển</p>
			</div>

			<div class="item-guidance2">
				<a href="">SẢN PHẨM</a>
				<p>Sản phẩm chính hãng, bảo hành trên toàn quốc</p>
			</div>

			<div class="item-guidance3">
				<a href="">HỖ TRỢ 24/7</a>
				<p>1800 6848</p>
			</div>

			<div class="item-guidance4">
				<a href="">CHẤT LƯỢNG</a>
				<p>Đảm bảo chất lượng khi mua tại Thế Giới Túi Xách</p>
			</div>
		</div>				
	</div>

	<div id="sell">
		<div id="category">		
			<div id="sale">				
				<div id="link">				
					<a href="">KHUYẾN MẠI</a>		
				</div>

				<ul id="sale-list">
					<li><h5>50% OFF</h5></li>
					<li><h5>30% OFF</h5></li>
					<li class="last-item"><h5 >VALI 4 BÁNH XOAY</h5></li>
				</ul>
				
			</div>
		</div>


		
		
		<div id="product">
			
			<?php  for($i=1;$i<=8;$i++) { ?>
				<li id="li-product" >
				<div id="product-item" >
					<div id="outlook-item">
						<img class="pro-img" src="<?php print_r($products[$i]['image'])  ?> (1).jpg" alt="">
						<a href="index.php?controller=cart&action=store&id=<?php print_r($products[$i]['id'])  ?>" class="hide-add">
							<div class="add_cart">
								<p>Thêm vào giỏ hàng</p>
								<img src="./Public/images/cart-add.png" alt="" style="width: 30px; height: 30px; position: absolute; top: 0px; left: 15px;">
							
							</div>
						</a>
					</div>
					<div id="info-item">
						<a href="?controller=product&action=show&id=<?php print_r($products[$i]['id'])  ?>"><?php print_r($products[$i]['name'])?></a>
						<p><?php print_r(number_format(($products[$i]['price']),0,'.','.'))?>đ</p>
					</div>
				</div>
			</li>
			<?php } ?>
			
		</div>

		
	</div>

	<div id="sell">
		<div id="category">		
			<div id="sale">				
				<div id="link-balo">				
					<a href="">Balo, Cặp Học Sinh</a>		
				</div>

				<ul id="sale-list">
					<li><h5>CẶP HỌC SINH TOMI</h5></li>
					<li><h5>BALO NOHOO</h5></li>
					<li class="last-item"><h5>CẶP TRUNG HỌC</h5></li>
				</ul>
				
			</div>
		</div>

		
		<div id="product">
			
			<?php  for($i=10;$i<=17;$i++) { ?>
				<li id="li-product" >
				<div id="product-item" >
					<div id="outlook-item">
						<img class="pro-img" src="<?php print_r($products[$i]['image'])  ?> (1).jpg" alt="">
						<a href="index.php?controller=cart&action=store&id=<?php print_r($products[$i]['id'])  ?>" class="hide-add">
							<div class="add_cart">
								<p>Thêm vào giỏ hàng</p>
								<img src="./Public/images/cart-add.png" alt="" style="width: 30px; height: 30px; position: absolute; top: 0px; left: 15px;">
							
							</div>
						</a>
					</div>
					<div id="info-item">
						<a href="?controller=product&action=show&id=<?php print_r($products[$i]['id'])  ?>"><?php print_r($products[$i]['name'])?></a>
						<p><?php print_r(number_format(($products[$i]['price']),0,'.','.'))?>đ</p>
					</div>
				</div>
			</li>
			<?php } ?>

		</div> 
	</div>


	<div id="sell">
		<div id="category">		
			<div id="sale">				
				<div id="link-balo">				
					<a href="">Balo Thời Trang</a>		
				</div>

				<ul id="sale-list">
					<li><h5>BALO SIMPLE CARRY</h5></li>
					<li><h5>BALO LAPTOP</h5></li>
					<li class="last-item"><h5>BALO THỜI TRANG</h5></li>
				</ul>
			
				
			</div>

		</div>

		
		<div id="product-with-banner">
			<div id="category-banner">
				<img src="./Public/images/category-banner1.png" style="margin-top: -10px;" alt="">
			</div>
			<?php  for($i=1;$i<=6;$i++) { ?>
				<li id="li-product" >
				<div id="product-item" >
					<div id="outlook-item">
						<img class="pro-img" src="<?php print_r($products[$i]['image'])  ?> (1).jpg" alt="">
						<a href="index.php?controller=cart&action=store&id=<?php print_r($products[$i]['id'])  ?>" class="hide-add">
							<div class="add_cart">
								<p>Thêm vào giỏ hàng</p>
								<img src="./Public/images/cart-add.png" alt="" style="width: 30px; height: 30px; position: absolute; top: 0px; left: 15px;">
							
							</div>
						</a>
					</div>
					<div id="info-item">
						<a href="?controller=product&action=show&id=<?php print_r($products[$i]['id'])  ?>"><?php print_r($products[$i]['name'])?></a>
						<p><?php print_r(number_format(($products[$i]['price']),0,'.','.'))?>đ</p>
					</div>
				</div>
			</li>
			<?php } ?>
		</div> 
	</div>


	<div id="sell">
		<div id="category">		
			<div id="sale">				
				<div id="link-balo">				
					<a href="">Túi Xách - Túi Kéo</a>		
				</div>

				<ul id="sale-list">
					<li><h5>TÚI KÉO DU LỊCH</h5></li>
					<li class="last-item"><h5>TÚI XÁCH THỜI TRANG</h5></li>
				</ul>
				
			</div>
		</div>

		
		<div id="product-with-banner">
			<div id="category-banner">
				<img src="./Public/images/category-banner2.png" style="margin-top: -10px;" alt="">
			</div>
			<?php  for($i=7;$i<=12;$i++) { ?>
				<li id="li-product" >
				<div id="product-item" >
					<div id="outlook-item">
						<img class="pro-img" src="<?php print_r($products[$i]['image'])  ?> (1).jpg" alt="">
						<a href="index.php?controller=cart&action=store&id=<?php print_r($products[$i]['id'])  ?>" class="hide-add">
							<div class="add_cart">
								<p>Thêm vào giỏ hàng</p>
								<img src="./Public/images/cart-add.png" alt="" style="width: 30px; height: 30px; position: absolute; top: 0px; left: 15px;">
							
							</div>
						</a>
					</div>
					<div id="info-item">
						<a href="?controller=product&action=show&id=<?php print_r($products[$i]['id'])  ?>"><?php print_r($products[$i]['name'])?></a>
						<p><?php print_r(number_format(($products[$i]['price']),0,'.','.'))?>đ</p>
					</div>
				</div>
			</li>
			<?php } ?>
		</div> 
	</div>


	<div id="trademark">

		<div id="border-trademark">
			<a id="trademark1">
				<img src="./Public/images/trademark1.png">
			</a>
			<a id="trademark1">
				<img src="./Public/images/trademark2.png">
			</a>
		</div>
	</div>

	<div id="news">
		<div id="news-title">
			<a href="">BÀI VIẾT MỚI</a>
			<div id="next-post">
				
			</div>
			<div id="prev-post">
				
			</div>
		</div>
		<div id="post-list">
			<ul>
				<li>
					<div id="post">
						<img src="./Public/images/post1.png" alt="">
						<div id="info">
							<a href="" class="title-post">Lì xì đầu năm Con Heo 2019</a>
							<p>14/2/2019____0 Bình luận</p>
							<a href="" class="more">Xem thêm</a>
						</div>
					</div>					
				</li>
				<li>
					<div id="post">
						<img src="./Public/images/post2.png" alt="">
						<div id="info">
							<a href="" class="title-post">QUÀ TẶNG KHÁCH HÀNG CHÚC MỪNG SINH NHẬT</a>
							<p>14/2/2019____0 Bình luận</p>
							<a href="" class="more">Xem thêm</a>
						</div>
					</div>					
				</li>
				<li>
					<div id="post">
						<img src="./Public/images/post3.png" alt="">
						<div id="info">
							<a href="" class="title-post">KHUYẾN MẠI HALLOWEEN GIẢM GIÁ 15% VALI VÀ TÚI XÁCH MÀU ĐỎ</a>
							<p>14/2/2019____0 Bình luận</p>
							<a href="" class="more">Xem thêm</a>
						</div>
					</div>					
				</li>
				<li>
					<div id="post">
						<img src="./Public/images/post4.png" alt="">
						<div id="info">
							<a href="" class="title-post">Khuyến mại 20/10 - Giảm giá 10% - Tặng túi xanh du lịch</a>
							<p>14/2/2019____0 Bình luận</p>
							<a href="" class="more">Xem thêm</a>
						</div>
					</div>					
				</li>
			</ul>
		</div>
	</div>

	<div id="showroom">
		<div id="showroom-title">
			<p>Hệ thống showroom - shop THẾ GIỚI TÚI XÁCH</p>
		</div>
		
		<div id="showroom-border">
			<div id="showroom-list">
				<ul>
					<li>						
						<div id="showroom-info">
							<a href="">
								<img src="./Public/images/showroom1.png" alt="">
							</a>
							<div id="showroom-name">
								<h4>CTY CỔ PHẦN THẾ GIỚI TÚI XÁCH</h4>
								<p>16 - 18 Trương Quốc Dung, P. 8, Q. Phú Nhuận, TP. HCM</p>
							</div>					
						</div>
					</li>
					<li>						
						<div id="showroom-info">
							<a href="">
								<img src="./Public/images/showroom1.png" alt="">
							</a>
							<div id="showroom-name">
								<h4>CTY CỔ PHẦN THẾ GIỚI TÚI XÁCH</h4>
								<p>16 - 18 Trương Quốc Dung, P. 8, Q. Phú Nhuận, TP. HCM</p>
							</div>					
						</div>
					</li>

					<li>						
						<div id="showroom-info">
							<a href="">
								<img src="./Public/images/showroom1.png" alt="">
							</a>
							<div id="showroom-name">
								<h4>CTY CỔ PHẦN THẾ GIỚI TÚI XÁCH</h4>
								<p>16 - 18 Trương Quốc Dung, P. 8, Q. Phú Nhuận, TP. HCM</p>
							</div>					
						</div>
					</li>
					<li>						
						<div id="showroom-info">
							<a href="">
								<img src="./Public/images/showroom1.png" alt="">
							</a>
							<div id="showroom-name">
								<h4>CTY CỔ PHẦN THẾ GIỚI TÚI XÁCH</h4>
								<p>16 - 18 Trương Quốc Dung, P. 8, Q. Phú Nhuận, TP. HCM</p>
							</div>					
						</div>
					</li>
					<li>						
						<div id="showroom-info">
							<a href="">
								<img src="./Public/images/showroom1.png" alt="">
							</a>
							<div id="showroom-name">
								<h4>CTY CỔ PHẦN THẾ GIỚI TÚI XÁCH</h4>
								<p>16 - 18 Trương Quốc Dung, P. 8, Q. Phú Nhuận, TP. HCM</p>
							</div>					
						</div>
					</li>
					<li>						
						<div id="showroom-info">
							<a href="">
								<img src="./Public/images/showroom1.png" alt="">
							</a>
							<div id="showroom-name">
								<h4>CTY CỔ PHẦN THẾ GIỚI TÚI XÁCH</h4>
								<p>16 - 18 Trương Quốc Dung, P. 8, Q. Phú Nhuận, TP. HCM</p>
							</div>					
						</div>
					</li>
					
				</ul>
			</div>
		</div>
	</div>


	<div id="menu-bottom">
		<div id="border-menu-bottom">			
			<ul>
				<li><a href=""><img src="./Public/images/logo.png" alt=""></a></li>	
				<li class="menu-bottom-item"><a href="">Trang chủ</a></li>
				<li class="menu-bottom-item"><a href="">Giới thiệu</a></li>
				<li class="menu-bottom-item"><a href="">Tin tức</a></li>
				<li class="menu-bottom-item"><a href="">Sản phẩm</a></li>
				<li class="menu-bottom-item"><a href="">Hướng dẫn</a></li>
				<li class="menu-bottom-item"><a href="">Đại lí</a></li>
			</ul>
		</div>
	</div>

	<div id="border-footer">
		<div id="footer">
		<div id="footer-info">
			<div>
				<h3>CHÚNG TÔI Ở ĐÂY</h3>
				<p>CÔNG TY CỔ PHẦN THẾ GIỚI TÚI XÁCH</p>
				<p>16-18 Trương Quốc Dung, P. 8, Q. Phú Nhuận, TP. Hồ Chí Minh</p>
				<p>0908 08 16 18</p>
				<p>1800 6848</p>
				<p>info@thegioituixach.com.vn</p>
			</div>

			<div>
				<h3>VỀ CHÚNG TÔI</h3>
				<a href="">Trang chủ</a>
				<a href="">Giới thiệu</a>
				<a href="">Tin tức</a>
				<a href="">Sản phẩm</a>
				<a href="">Hướng dẫn</a>
				
			</div>

			<div>
				<h3>CHÍNH SÁCH</h3>
				<a href="">Chính sách Bảo hành</a>
				<a href="">Chính sách Bảo mật</a>
				<a href="">Chính sách Đổi trả</a>
				<a href="">Chính sách Vận chuyển</a>
			</div>

			<div>
				<h3>HƯỚNG DẪN</h3>
				<a href="">Hướng dẫn mua hàng</a>
				<a href="">Phương thức thanh toán</a>
				<a href="">Đăng kí thành viên</a>
			</div>



		</div>
		<div id="footer-logo">	
			<img src="./Public/images/footer-logo1.png">
			<img src="./Public/images/footer-logo2.png">
			<img src="./Public/images/footer-logo3.png">
			<img src="./Public/images/footer-logo4.png">
		</div>

		<div id="footer-bottom">	
			<p>© Bản quyền thuộc về .:: Thế Giới Túi Xách ::. |</p>
			<div>
				<a href=""> <img src="./Public/images/payment-logo1.png" alt=""></a>
				<a href=""> <img src="./Public/images/payment-logo2.png" alt=""></a>
				<a href=""> <img src="./Public/images/payment-logo3.png" alt=""></a>				
				<a href=""> <img src="./Public/images/payment-logo4.png" alt=""></a>
			</div>
		</div>
	</div>
	</div>

</body>

</html>