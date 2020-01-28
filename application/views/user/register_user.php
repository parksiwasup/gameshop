<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<html>
<head>
	<title> GES Shop : สมัคร</title>
	<!-- ส่วนเสริม -->
	<?php echo $assist; ?>

</head>
<body>
	<div class="block-ink ">
		<div class="box-img-bg">
			<img src="<?php echo base_url(); ?>assist/img/bgnew.png">
		</div>
		<div class="box"></div>
		<div class="logo-show" data-aos="zoom-in">
			<a href="<?php echo base_url(); ?>index.php"><img src="<?php echo base_url(); ?>assist/img/logo.png"></a>
		</div>
		<div class="border-read-registory" data-aos="zoom-in">
		<form action="<?php echo base_url('index.php/Gameshope/adding'); ?>" method="POST">
			<p>เมื่อคุณต้องยอมรับข้อ<a href="">กำหนดการใช้งาน</a>เพื่อลงทะเบียนให้เสร็จสิ้น .</p>
			<div class="box-input"><input type="text" name="email_user" placeholder="อีเมล" required></div>
			<div class="box-input"><input type="text" name="iduser_user" placeholder="ไอดี" required></div>
			<div class="box-input"><input type="password" name="pass_user" placeholder="รหัสผ่าน" required></div>
			<div class="box-btn"><button type="submite" class="btn btn-success btn-lg btn-block">สมัคร</button></div>

			</form>
		</div>
		<div class="box-or-registory">
			<hr><p>หรือ</p><hr>
		</div>
		<div class="box-btn-order-registory">
			<div class="box-btn-facebook"><a type="submit">Facebook</a></div>
		</div>
		<div class="box-term">
			<div><a href="">เงื่อนไขการใช้บริการ</a></div>
			<div><a href="">ความเป็นส่วนตัว</a></div>
		</div>
	</div>
</body>

<?php echo $aostime; ?>
</html>
