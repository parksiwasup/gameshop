<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<html>
<head>
	<title> GES Shop : ร้านค้า</title>
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

  <?php echo $order; ?>
  <!-- เมนูเกมส์ -->
  <div class="box-menu" >

  <?php foreach ($showgame as $row) { ?>

    <!-- บล็อคเกมส์ -->
    <div class="boxout" data-aos="fade-up">

      <a href="<?php echo base_url('index.php/gameshope/store_viwe/').$row->id_game;?>">
      <div class="boxin">
        <div class="text-namegame">
        <?php echo $row->name_game; ?>
        </div>
          <div class="brodetag"></div>
          <img src="<?php echo base_url('assist/img/game/profilegame');?>/<?php echo $row->g_img_p;?>">  
      </div>
      </a>
    </div>
<?php } ?>
    
  </div>

	<?php echo $footer; ?>
</body>

<?php echo $aostime; ?>

</html>
