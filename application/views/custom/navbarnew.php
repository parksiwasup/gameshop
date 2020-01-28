<nav class="navbar navbar-expand-lg text-white">
  <div class="col-2">
    <a class="navbar-brand" href="<?php echo base_url(); ?>index.php"><img src="<?php echo base_url(); ?>assist/img/logo.png" width="100%"  alt=""></a>
    </div>
  <button class="navbar-toggler text-white bg-white" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon fas fa-bars " style="color:#000; padding:5px 5px;"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item link-a">
        <a class="nav-link" href="<?php echo base_url(); ?>index.php/Gameshope/store"><i class="fas fa-gamepad"></i> ร้านค้า </a>
      </li>
      <li class="nav-item link-a">
        <a class="nav-link" href="<?php echo base_url(); ?>index.php/Gameshope/promotion"><i class="fas fa-tags"></i> โปรโมชั่น </a>
      </li>
      <li class="nav-item link-a">
        <a class="nav-link" href="<?php echo base_url(); ?>index.php/Gameshope/news"><i class="far fa-newspaper"></i> ข่าวสาร</a>
      </li>
      <li class="nav-item link-a">
        <a class="nav-link" href="http://seedsoft.co.th"><img src="<?php echo base_url(); ?>assist/img/logoseed.png">เกี่ยวกับเรา</a>
      </li>
    </ul>
        <a class="nav-link" href="<?php echo base_url(); ?>index.php/Gameshope/register" type="button" ><i class="fas fa-smile"></i> สมัครใช้บริการ </a>
        <a class="nav-link" type="button"  data-toggle="modal" data-target="#exampleModal" ><i class="fas fa-user-circle"></i> เข้าสู่ระบบ </a>
  </div>


  <!-- ล็อคอิน -->
  <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content bg-dark">
        <div class="modal-header">
          <img src="<?php echo base_url(); ?>assist/img/logo.png" style="height:100px;">
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <form>
              <div class="form-group">
                  <label for="exampleInputEmail1">ไอดีผู้ใช้</label>
                  <input type="text" class="form-control" id="user" required>
                  <small id="emailHelp" class="form-text text-muted">โปรดระวังไม่ควรให้ไอดีเเละรหัสผ่านกับผู้ใช้อื่น</small>
                </div>
                <div class="form-group">
                  <label for="exampleInputPassword1">รหัสผ่าน</label>
                  <input type="password" class="form-control" id="password" required>
                </div>
                <div class="form-group form-check">
                  <input type="checkbox" class="form-check-input" id="exampleCheck1">
                  <label class="form-check-label" for="exampleCheck1">จำรหัสผ่าน</label>
                </div>
                <a href="">ลีมรหัสผ่าน</a>
                <center><button type="submit" class="btn btn-outline-success">เข้าสู่ระบบ</button></center>
              </form>
        </div>
      </div>
    </div>
  </div>

</nav>
