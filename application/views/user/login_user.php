'login_user.php'
<?php
defined('BASEPATH') or exit('No direct script access allowed');
?>
<html>

<head>
	<title> GES Shop : เข้าสู่ระบบ</title>
	<!-- ส่วนเสริม -->
	<?php echo $assist; ?>

</head>

<body>
	<div class="block-ink">
		<div class="box-img-bg">
			<img src="<?php echo base_url(); ?>assist/img/bgnew.png">
		</div>
		<div class="box"></div>
		<div class="logo-show" data-aos="zoom-in">
			<a href="<?php echo base_url(); ?>index.php"><img src="<?php echo base_url(); ?>assist/img/logo.png"></a>
		</div>
		<div class="border-read" data-aos="zoom-in">
			<form action="<?php echo base_url('index.php/Gameshope/auth'); ?>" method="POST">
				<p>ยินดีต้อนรับสู่เว็บไซต์สำหรับเช่าเกมส์</p>
				<div class="box-input"><input type="text" name="iduser_user" placeholder="ไอดี" required></div>
				<div class="box-input"><input type="password" name="pass_user" placeholder="รหัสผ่าน" required></div>
				<div class="box-btn"><button type="submit" class="btn btn-info btn-lg btn-block">เข้าสู่ระบบ</button></div>
			</form>
		</div>
		<div class="box-or">
			<hr>
			<p>หรือ</p>
			<hr>
		</div>
		<div class="box-btn-order">
			<div class="box-btn-facebook"><a type="submit">Facebook</a></div>
		</div>
		<div class="box-fogot">
			<div><a href="<?php echo base_url(); ?>index.php/Gameshope/register">สมัคร <i class="fas fa-kiss-wink-heart"></i></a></div>
			<div><a href="">ลืมไอดีเเละรหัสผ่าน <i class="fas fa-question-circle"></i></a></div>
		</div>
		<div class="box-term">
			<div><a href="">เงื่อนไขการใช้บริการ</a></div>
			<div><a href="">ความเป็นส่วนตัว</a></div>
		</div>
	</div>
</body>

<?php echo $aostime; ?>

</html>