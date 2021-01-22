  <!-- ======= Head ======= -->
    <?php include('include/hder.php');?>
<body>
  <!-- ======= Top Bar ======= -->
    <?php include('include/topbar.php');?>
  <!-- ======= Header ======= -->
    <?php include('include/menu.php');?>

<body class="bg-gradient-primary">

  <div class="container">

    <!-- Outer Row -->
    <div class="row justify-content-center">

      <div class="col-xl-10 col-lg-12 col-md-9" data-aos='fade-up'>

        <div class="card o-hidden border-0 shadow-lg my-5">
          <div class="card-body p-0">
            <!-- Nested Row within Card Body -->
            <div class="row">
              <div class="col-lg-6 d-none d-lg-block ">
                <img src="image/construction3.jpg" style="width:475px; height:520px; ">
              </div>
              <div class="col-lg-6">
                <div class="p-5">
                  <div class="text-center">
                    <h1 class="h4 text-gray-900 mb-4">เข้าสู่ระบบ สมาชิก</h1>
                  </div>


                  <form class="user" action="#" method="POST" autocomplete="off">
                    <div class="alert alert-danger alert-incorrect d-none" role="alert"></div>
                    <?php if(isset($_COOKIE["user_id"])){?>
                      <?php foreach($_COOKIE["user_id"] as $k => $v){?>
                      <div title="<?php echo $v;?>" style="width:99px;display:inline-block;position:relative;cursor:pointer;" class="text-center card-user-cookie card-user-<?php echo $k;?> formlogin" data-key="<?php echo $k;?>" data-username="<?php echo $v;?>">
                      <button type="button" class="close" aria-label="Close" style="position: absolute; right: 14px;" data-toggle="modal" data-target="#deleteModal" data-key="<?php echo $k;?>" data-username="<?php echo $v;?>">
                        <span aria-hidden="true">&times;</span>
                      </button>
                      <div class="account_info" data-key="<?php echo $k;?>" data-username="<?php echo $v;?>">
                      <img src="image/profile_male.png" alt="" width="75" class="img-fluid rounded-circle img-thumbnail">
                        <?php echo "<p>".$v."</p>";?>
                      </div>
                      </div>   
                      <?php } ?>
                    <?php } ?> 

                    <div title="" style="width:99px;display:inline-block;position:relative;cursor:pointer;" class="text-center  formlogin card-user-choose d-none mx-auto">
                      <button type="button" class="close" aria-label="Close" style="position: absolute; right: 14px;" data-toggle="modal" data-target="#deleteModal">
                        <span aria-hidden="true">&times;</span>
                      </button>
                      <div class="account_info_choose" >
                      <img src="image/profile_male.png" alt="" width="75" class="img-fluid rounded-circle img-thumbnail">
                        
                      </div>
                      <p style="display:inline-block;margin: 0;"></p> <span class="small notme text-danger">ไม่ใช่ฉัน?</span>
                    </div>

                    <div class="form-group username">
                      <div class="input-group">
                        <input type="text" class="form-control login-input" id="username" name="username" placeholder="Username" value="">
                        <div class="input-group-prepend">
                          <div class="input-group-text login-input-group-text" id="btnGroupAddon"><img src='image/id-card.png' alt='user'>
                          </div>
                        </div>
                      </div>
                      <span id="error-username" class="text-danger small"></span>
                    </div>

                    <div class="form-group">
                      <div class="input-group">
                        <input type="password" class="form-control login-input" id="password" name="password" placeholder="Password" value="">
                        <div class="input-group-prepend">
                          <div class="input-group-text login-input-group-text" id="btnGroupAddon"><img src='image/padlock.png' alt='user'>
                          </div>
                        </div>
                      </div>
                      <span id="error-password" class="text-danger small"></span>
                    </div>

                    <div class="form-group">
                      <div class="custom-control custom-checkbox my-1 mr-sm-2">
                        <input type="checkbox" name="remember" value="1" class="custom-control-input" id="remember">
                        <label class="custom-control-label small" for="remember">จดจำฉัน</label>
                      </div>
                    </div>
                    
                    <div class="form-group">
                      <button type="submit" class="btn btn-primary btn-block btn-login">เข้าสู่ระบบ</button>
                      <button class="btn btn-primary btn-block d-none btn-loading" type="button" disabled>
                        <span class="spinner-border spinner-border-sm" role="status" aria-hidden="true"></span>
                        Login...
                      </button>
                    </div>

                  </form>

                  <hr>

                </div>
              </div>
            </div>
          </div>
        </div>

      </div>

    </div>
    <div id="deleteModal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title">ลบรายการ ? <span class="account_id"></span></h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body text-center">
            <h1 style="font-size:5.5rem;"><i class="fa fa-exclamation-circle text-danger" aria-hidden="true"></i></h1>
            <p>คุณแน่ใจที่จะทำการลบ ?</p>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">ปิด</button>
            <a href="#" class="btn btn-danger btn-delete">ลบ</a>
          </div>
        </div>
      </div>
    </div> 

  </div>

  <!-- ======= footer ======= -->

  <?php include('include/footer.php');?>

  <a href="#" class="back-to-top"><i class="icofont-simple-up"></i></a>

  <!-- Vendor JS Files -->
  <!-- Template Main JS File -->
  <?php include('include/footerjs.php');?>
  <script src="include/libs/js/login.js"></script>

</body>

</html>
