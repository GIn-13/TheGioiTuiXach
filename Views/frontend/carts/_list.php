<?php $brandName= $brand[0]['name'];$allCategory=0;?>
<link rel="stylesheet" type="text/css" href="./Public/css/style-not-main.css">

<meta charset="utf-8">

	
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
			<ul id="side-bar">
				<li>
					<div id="side-bar-head">
						<h3>DANH MỤC SẢN PHẨM</h3>
						<img src="./Public/images/side-bar-h3.png" id="button-category">
					</div>					
					<ul id="side-bar-subitem">
						<?php 
					$i=1;
					foreach ($categories as $category):								
								if($category['id']!= 0 && $category['id']!= 5)	{			
					?>
							
					<li><a class="side-bar<?=$i?>" href="?controller=category&action=show&id=<?=$category['id'] ?>"><?=$category['name'] ?></a></li>
							
					<?php 
							$i+=1;}
							endforeach;
					?>

					<?php foreach ($brands as $brand):  ?>
					<li><a class="side-bar<?=$i?>" href="?controller=brand&action=show&id=<?=$brand['id'] ?>"><?=$brand['name'] ?></a></li>
					<?php $i+=1; endforeach;?>

				</li>				
			</ul>			
		</div>

		<div id="banner-main">
			<div id="menu">
				<ul class="root">			
					<li ><a href="http://localhost/TheGioiTuiXach" class="root-Trang-chu">Trang chủ</a></li>
					<li><a href="">Giới thiệu</a></li>
					<li><a href="">Tin tức</a></li>
					<li><a href="?controller=category&action=show&id=<?php echo $allCategory;?>">Sản phẩm</a>
						<ul class="submenu">
							<?php foreach ($categories as $category):
								if($category['id']!= 0)	{			
							?>
							
							<li><a href="?controller=category&action=show&id=<?=$category['id'] ?>"><?=$category['name'] ?></a>
							
							<?php }endforeach;?>
						</ul>
					</li>
					<li><a href="">Hướng dẫn</a>
						<ul class="submenu">
							<li><a href=""> Hướng dẫn mua hàng</a>
							<li><a href=""> Hướng dẫn thanh toán</a>
							<li><a href=""> Đăng kí thành viên</a>								
						</ul>
					</li>

					<li><a href="">Đại lý</a></li>
					<li><a href="">Liên hệ</a></li>
				</ul>
			</div>			
		</div>
	</div>


<div 	style="width: 1200px; min-height: 200px; margin: 0px auto;">
	<div id="product-show-header">
		<h3>Giỏ hàng</h3>
	</div>
	<style>
		td{
			height: 80px;
			text-align: center;		}
	</style>
	<div id="cart-list">
		<table width="100%" border="1" cellpadding="0" cellspacing="0" style="margin-top: 20px;">
			<tr style="height: 60px;">
				<td>ID</td>
				<td>Tên sản phẩm</td>				
				<td>Hình ảnh</td>
				<td>Giá bán</td>
				<td>Số lượng</td>
				<td>Thành tiền</td>				
				<td>Hành động</td>
			</tr>
			<?php foreach ($products as $product):
				
			?>
			<tr>

				<td><?= $product[0]['id'] ?></td>
				<td><?= $product[0]['name'] ?></td>				
				<td><img style=" height: 75px;" src="<?= $product[0]['image'] ?> (1).jpg"	alt=""></td>
				<td><?= number_format($product[0]['price'],0) ?></td>
				<td><?= $product['qty'] ?></td>
				<td><?= number_format(($product[0]['price']* $product['qty']),0) ?></td>
				<td  width="120px"><a href="index.php?controller=cart&action=delete&id=<?= $product[0]['id']?>">Xóa</a></td>
			</tr>
			<?php endforeach;?>
		</table>
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


	
