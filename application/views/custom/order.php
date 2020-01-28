
<div class="header-text-category" data-aos="fade-right">
  <h2> <i class="fas fa-map-signs"></i> หมวดหมู่เกมส์</h2>
</div>
<!-- หมวดหมู่เกมส์ -->
<div class="games-category">
<!-- กล่องหมวดหมู่ -->
<?php foreach ($showgroup as $res) { ?>
<a href=""><div class="box-category">
  <div class="text-read"><?php echo $res->name_group; ?></div>
  <img src="<?php echo base_url('assist/img/group/imggroup');?>/<?php echo $res->img_group;?>">
</div></a>
<?php } ?>

</div>
