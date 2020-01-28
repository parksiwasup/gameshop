<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<html>
<head>
	<title> GES Shop : ข่าวสาร</title>
	<!-- ส่วนเสริม -->
	<?php echo $assist; ?>


</head>
<body>
	<?php echo $navbar; ?>

<!-- ส่วนภาพพื้นหลัง -->
<div class="news-box-header">
		<div class="img-bg-news"><img src="<?php echo base_url(); ?>assist/img/menu/t3.jpg"></div>
		<div class="box-bg"></div>
</div>

<div class="box-news-header-text">
	<div class="text-header">
		<div class="head-text">Esport by SeedSoft</div>
		<div class="head-content-text">ข่าวสาร</div>
	</div>
</div>

<div class="text-box-or">
	<hr><p><i class="fas fa-star-half-alt"></i></p><hr>
</div>


<!-- ขนาดกล่อง -->
<div class="box-area-new">
<?php foreach ($shownews as $row) { ?>
	<!-- กล่องข้อข่าว -->
	<div class="box-read-news">
		<a href="<?php echo base_url('index.php/gameshope/news_viwe/').$row->id_news;?>">
		<div class="img-read-news">
		<img src="<?php echo base_url('assist/img/news/reviewnews');?>/<?php echo $row->img_news;?>"> 
		</div>
		<div class="box-bord"></div>
		<div class="text-header">
		<?php echo $row->news_topic_news; ?>
		</div>
		<div class="text-date">
		<?php echo $row->datetime_news; ?>
		</div>
	</a>
	</div>
<?php } ?>
	

</div>


	<?php echo $footer; ?>
</body>

<?php echo $aostime; ?>
</html>
