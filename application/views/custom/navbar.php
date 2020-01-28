<nav class="navbar navbar-expand-lg text-white">
  <div class="photo-logo ">
    <a class="navbar-brand" href="<?php echo base_url(); ?>index.php"><img src="<?php echo base_url(); ?>assist/img/logo.png" width="100%" alt="HOME"></a>
  </div>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item link-a">
        <a class="nav-link" href="<?php echo base_url(); ?>index.php/Gameshope/store" alt="Store"><i class="fas fa-gamepad"></i> ร้านค้า </a>
      </li>
      <li class="nav-item link-a">
        <a class="nav-link" href="<?php echo base_url(); ?>index.php/Gameshope/promotion"><i class="fas fa-tags"></i> โปรโมชั่น </a>
      </li>
      <li class="nav-item link-a">
        <a class="nav-link" href="<?php echo base_url(); ?>index.php/Gameshope/news"><i class="far fa-newspaper"></i> ข่าวสาร</a>
      </li>
      <li class="nav-item link-a">
        <a class="nav-link" href="http://seedsoft.co.th">เกี่ยวกับเรา</a>
      </li>
    </ul>

    <?php if (isset($_SESSION['iduser_user']) && $_SESSION['pass_user'] != "") { ?>
      <ul class="navbar-nav mr-right">
       <li><a class="nav-link" href="<?php echo base_url()?>index.php/Gameshope/logout">ออกจากระบบ</a></li>
      </ul>
      <?php }else{?>
        <ul class="navbar-nav mr-right">
      <li>
        <a class="nav-link" href="<?php echo base_url(); ?>index.php/Gameshope/register" type="button"><i class="fas fa-smile"></i> สมัครใช้บริการ </a>
        </il>
      <li>
        <a class="nav-link" href="<?php echo base_url(); ?>index.php/Gameshope/login" type="button"><i class="fas fa-user-circle"></i> เข้าสู่ระบบ </a>
      </li>
    </ul>
      <?php }?>
  </div>


  <div class="box-search mr-center">
    <div class="input-group mb-6">
      <input type="text" class="form-control" aria-describedby="basic-addon2">
      <div class="input-group-prepend">
        <button class="btn btn-outline-light" type="button"><i class="fas fa-search"></i></button>
      </div>
    </div>
  </div>

  <button class="navbar-toggler text-white bg-white" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon fas fa-bars " style="color:#000; padding:5px 5px;"></span>
  </button>


</nav>