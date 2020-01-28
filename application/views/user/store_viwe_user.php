<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<html>
<head>
	<title> GES Shop</title>
	<!-- ส่วนเสริม -->
	<?php echo $assist; ?>
</head>
<body>

	<?php echo $navbar; ?>
	
<!-- เเท็บส่วนบน -->
<div class="">
	<div class="header-bar">
		<div class="box-buy">
		</div>
		<div class="text-buy">
			<a href=""><i class="far fa-arrow-alt-circle-down"></i> เช่าเลย</a>
		</div>
	</div>
</div>

<!-- ส่วนรูปภาพ -->
<div class="img-header-bg-game">
	<img src="<?php echo base_url('assist/img/game/backgroundgame');?>/<?php echo $rsedit->g_img_b;?>">
</div>

<!-- ส่วนรูปเเละหัวข้อ -->
<div class="bar-naviget">
	<div class="img-bar-profile">
	<img src="<?php echo base_url('assist/img/game/profilegame');?>/<?php echo $rsedit->g_img_p;?>">
	</div>
	<div class="text-header-profile-game">
		<?php echo $rsedit->name_game;?>
	</div>
	<div class="text-content-profile-game">
		ประเภทเกมส์ : <?php echo $rsedit->name_group;?>
	</div>

	<div class="button-menu">
		<div class="buttom">
			<a class="tablinks" href="#one" onclick="openCity(event, 'allcontent') " id="defaultOpen">รายละเอียดทั้งหมด</a>
		</div>
		<div class="buttom">
			<a class="tablinks" href="#spacpc" onclick="openCity(event, 'spacpc')">ความต้องการระบบ</a>
		</div>
		<div class="buttom">
			<a class="tablinks" href="#review"  onclick="openCity(event, 'review')">รีวิว</a>
		</div>
	</div>

</div>

<!-- ส่วนรูปภาพ -->
<div class="photo-show-profile">

	<div class="box-photo">

		<div class="box-model">
			<a href="#"><?php echo $rsedit->vdio_game;?></a>
		</div>
		<div class="box-model">
		<img src="<?php echo base_url('assist/img/game/reviewgame');?>/<?php echo $rsedit->g_img_s;?>">
		</div>
		<!-- <div class="box-model">
			<img src="<?php echo base_url(); ?>assist/img/profile/s1-s2.jpg">
		</div>
		<div class="box-model">
			<img src="<?php echo base_url(); ?>assist/img/profile/s1-s3.jpg">
		</div>
		<div class="box-model">
			<img src="<?php echo base_url(); ?>assist/img/profile/s1-s4.jpg">
		</div>
		<div class="box-model">
			<img src="<?php echo base_url(); ?>assist/img/profile/s1-s1.jpg">
		</div> -->

	</div>
</div>


<!-- ส่วนรายละเอียด -->
<div class="block-btn-content">

	<!-- รายละเอียดในกล่อง	 -->
	<div id="allcontent" class="tabcontent">

		<h2>รายละเอียดผู้พัฒนา</h2>
			<hr>
				<div class="header-content">
					<div class="text">ผู้พัฒนา : Bioware</div>
					<div class="text">ผู้จัดจำหน่าย : EA</div>
					<div class="text">วันวางจำหน่าย : 20 มีนาคม 2017</div>
				</div>
			<hr>

		<h2>เนื่อเรื่องโดยย่อ</h2>
			<hr>
				<p>Mass Effect: Andromeda จะเดินเรื่องในปี 2182 ซึ่งเป็นช่วงเวลาเดียวกับ Mass Effect 2 กับเรื่องราวการเดินทางเพื่อออกสำรวจดาวดวงใหม่เพื่อหาแหล่งที่อยู่แห่งใหม่ของมวลมนุษยชาติผู้เล่นจะได้รับบทเป็น Scott Ryder หนึ่งในนักสำรวจบนยาน Tempest และสถานที่ที่พวกเขาจะไปนั่นคือระบบสุริยะ Andromeda นั่นเอง
				ถึงแม้ว่าเรื่องราวจะเกิดในช่วงเดียวกับ Mass Effect 2 แต่จะไม่เกี่ยวข้องกันแต่อย่างใดเพราะตามเนื้อเรื่องก่อนที่จะไประบบสุริยะ Andromeda พวกเขาได้แช่แข็งตัวเองไว้และตั้งเวลาตื่นในอีก 600 ปี ข้างหน้า ดังนั้นลูกเรือจะไม่รู้ถึงเหตุการณ์ที่เกิดขึ้นในภาค 2 และ 3 เลยอย่างแรกที่สัมผัสได้ชัดเลยก็คือความสดใหม่ของเกมไม่ว่าจะเป็นทั้งบรรยากาศหรือตัวละครที่ไม่ใช่ Shepard อีกต่อไปตัวเกมที่กว้างใหญ่ให้อิสระแบบ Open World ก็สามารถทำอะไรได้อิสระขึ้นแต่ก็ยังอยู่ในกรอบของเกมและแม้จะรับรู้ถึงความใหม่แต่ก็พบกับปัญหาของเกมบางประการด้วยครับแม้จะเล็กน้อยแต่ก็ชวนหงุดหงิดไม่น้อยทีเดียว
				ปัญหาที่ว่าก็คือการควบคุมเคลื่อนไหวตัวละครที่เร็วหรือหน้าต่าง UI ในเวอร์ชั่น PC ที่เหมือนว่าถูกออกแบบให้เหมาะกับจอยคอนโทรลเลอร์มากกว่าคีย์บอร์ดกับเม้าส์ดังนั้นมันจึงเป็นอะไรที่ยุ่งยากและปรับตัวกันพอสมควรเลยในระยะแรกเริ่มซึ่งถ้าหากใครยังไม่คุ้นก็อาจจะสับสนหงุดหงิดได้แอนิเมชั่นตัวละครอย่างการขยับปากก็เหมือนกันที่ภาคนี้ดูจะแย่กว่าภาคก่อน ๆ ครับเพราะบางครั้งก็ขยับปากตรงกับบทสนทนาแต่บางฉากก็ไม่ตรงซะอย่างงั้นแต่เป็นในส่วนของเนื้อเรื่องบทสนทนาเนื้อในก็จัดว่าดีเยี่ยมตามสไตล์Mass Effectซึ่งถ้าหากเทียบกับการนำยานร่อนลงจอดล่ะก็สัมผัสแรกของภาค Andromeda ก็เหมือนการลงจอดบนพื้นขรุขระไม่นิ่มนวลแต่ก็ถึงที่หมายอยู่ดี</p>
			<hr>
			<h2>ความต้องการระบบ</h2>
			<hr>
			<div id="" class="box-reader">
				<div class="left">
					<h3>ขั้นเเนะนำ</h3>
					<hr>
					<div class="text">OS : 64-bit Windows 7, Windows 8.1 and Windows 10</div>
					<div class="text">Processor : Intel Core i7-4790 or AMD FX-8350</div>
					<div class="text">Memory: 16 GB RAM</div>
					<div class="text">Video Card : NVIDIA GTX 1060 3GB, AMD RX 480 4GB</div>
					<div class="text">Hard Drive : At least 55 GB of free space/div></div>
					<div class="text">DirectX : DirectX 11</div>
				</div>
				<div class="right">
					<h3>มาตรฐาน</h3>
					<hr>
					<div class="text">OS : 64-bit Windows 7, Windows 8.1 and Windows 10</div>
					<div class="text">Processor : Intel Core i7-4790 or AMD FX-8350</div>
					<div class="text">Memory: 16 GB RAM</div>
					<div class="text">Video Card : NVIDIA GTX 1060 3GB, AMD RX 480 4GB</div>
					<div class="text">Hard Drive : At least 55 GB of free space/div></div>
					<div class="text">DirectX : DirectX 11</div>
				</div>
			</div>
	</div>
	<h2></h2>
	<div id="spacpc" class="tabcontent">
		<div class="box-reader">
			<div class="left">
				<h3>ขั้นเเนะนำ</h3>
				<hr>
				<div class="text">OS : 64-bit Windows 7, Windows 8.1 and Windows 10</div>
				<div class="text">Processor : Intel Core i7-4790 or AMD FX-8350</div>
				<div class="text">Memory : 16 GB RAM</div>
				<div class="text">Video Card : NVIDIA GTX 1060 3GB, AMD RX 480 4GB</div>
				<div class="text">Hard Drive : At least 55 GB of free space/div></div>
				<div class="text">DirectX : DirectX 11</div>
			</div>
			<div class="right">
				<h3>มาตรฐาน</h3>
				<hr>
				<div class="text">OS : 64-bit Windows 7, Windows 8.1 and Windows 10</div>
				<div class="text">Processor : Intel Core i7-4790 or AMD FX-8350</div>
				<div class="text">Memory : 16 GB RAM</div>
				<div class="text">Video Card : NVIDIA GTX 1060 3GB, AMD RX 480 4GB</div>
				<div class="text">Hard Drive : At least 55 GB of free space/div></div>
				<div class="text">DirectX : DirectX 11</div>
			</div>
		</div>
	</div>
	<div id="review" class="tabcontent">
			<h2 id="review">รีวิวเกมส์</h2>
			<hr>
			<div class="box-review">
				<div class="text-none"><i class="fas fa-heart-broken"></i> ไม่มีวีดีโอจ้า...</div>
				<div class="box-video">
				<?php echo $rsedit->vdio_g_review;?>
				</div>
			</div>
	</div>
</div>

	<?php echo $footer; ?>
	
</body>

<?php echo $aostime; ?>

</html>
