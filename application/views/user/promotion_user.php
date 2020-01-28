<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<html>
<head>
	<title> GES Shop : โปรโมชั่น</title>
	<!-- ส่วนเสริม -->
	<?php echo $assist; ?>

</head>
<body>

		<?php echo $navbar; ?>

		<div class="hots-bar">
			<img src="<?php echo base_url(); ?>assist/img/bgsetmain.png">
				<div class="headinfo" data-aos="zoom-in-left">
					MASS EFFACT 4
				</div>
				<div class="text-bar" data-aos="zoom-in-left">
					<div>
						เป็นการพจญภัยในอวกาศเพื่อตามหาบ้านหลังใหม่ให้กับเผ่าพันธ์ุ.
					</div>
					<div style="font-size:0.6em; margin-left: -10%; margin-top:10%;">
						<a href="<?php echo base_url(); ?>index.php/Gameshope/store_viwe">เข้าดูเกมส์</a>
						<span>ยอดนิยม</span>
					</div>
				</div>
		</div>

	<?php echo $footer; ?>
</body>

<?php echo $aostime; ?>
</html>
