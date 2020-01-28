
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

 <!-- ส่วนนี้เป็นเเทบส่วนบน -->
	<div class="bg-img-header">
	<img src="<?php echo base_url('assist/img/news/reviewnews');?>">
	</div>

<!-- ส่วนภาพพื้นหลัง -->
	<div class="bg-allbody">
	<img src="<?php echo base_url('assist/img/news/reviewnews');?>/<?php echo $news->img_news;?>">
	</div>
	<div class="bg-allbody-color"></div>

<!-- ส่วนรูปข่าวสาร -->
	<div class="img-head">
	<img src="<?php echo base_url('assist/img/news/reviewnews');?>/<?php echo $news->img_news;?>">
		<div class="text-header">
		<?php echo $news->news_topic_news;?>
		</div>
		<div class="text-date">
		<?php echo $news->datetime_news;?>
		</div>
	</div>

<!-- รายละเอียด -->
	<div class="box-content">
		<div class="text-header">
		<?php echo $news->news_topic_news;?>
		</div>
		<p><?php echo $news->details_news;?></p>
	</div>

	<?php echo $footer; ?>
</body>

<?php echo $aostime; ?>
</html>
