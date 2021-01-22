<?php 
function user_topbar(){ ?>
<section id="topbar" class="d-none d-lg-block">
    <div class="container clearfix">
      <div class="contact-info float-left">
        <i class="icofont-envelope"></i><a href="mailto:contact@example.com">xxxxx@example.com</a>
        <i class="icofont-phone"></i> +66 xx xxx xxxx
      </div>
      <div class="social-links float-right">
        <a href="index.php?module=home&action=contact">ติดต่อสอบถาม</a> | 
        <a href="register.php">สมัครเป็นฟรีแลนซ์</a> | 
        <a href="login.php"> <img src="image/user.png" alt="user"> เข้าสู่ระบบ</a>
      </div>
    </div>
</section>
<?php } 
function freelance_topbar(){   
  if(!empty($_SESSION['STATUS'])){ $status = $_SESSION['STATUS']; $user = $_SESSION['USERNAME']; $user_id = $_SESSION['USER_ID']; $user_image = $_SESSION['IMAGE']; $sex_id = $_SESSION["SEX"];} ?>
<section id="topbar" class="d-none d-lg-block">
    <div class="container clearfix">
      <div class="contact-info float-left">
        <i class="icofont-envelope"></i><a href="mailto:contact@example.com">xxxxx@example.com</a>
        <i class="icofont-phone"></i> +66 xx xxx xxxx
      </div>
      <div class="social-links float-right">
        <a class='self' href='#'><?php
                            if($user_image == ""){
                              if($sex_id == 1){ //1ในฐานข้อมูลเป็น ผช
                                  echo"<img src='image/profile_male.png' alt='user'>";
                              }
                              if($sex_id == 2){ //2ในฐานข้อมูลเป็น ผญ
                                echo"<img src='image/profile_female.png' alt='user'>";
                              }
                            }
                            else{
                                echo"<img src='image/$user_image' alt='user'>";
                            }
                            ?>
                            <?php echo "$user";?>
          </a> |
          <a href="index.php?module=home&action=contact">ติดต่อสอบถาม</a> | 
          <a href="logout.php">ออกจากระบบ</a>
      </div>
    </div>
</section>
<?php } 
function employee_topbar(){ 
  if(!empty($_SESSION['STATUS'])){ $status = $_SESSION['STATUS']; $user = $_SESSION['USERNAME']; $user_id = $_SESSION['USER_ID']; $user_image = $_SESSION['IMAGE']; $sex_id = $_SESSION["SEX"];} ?>
    <section id="topbar" class="d-none d-lg-block">
    <div class="container clearfix">
      <div class="contact-info float-left">
        <i class="icofont-envelope"></i><a href="mailto:contact@example.com">xxxxx@example.com</a>
        <i class="icofont-phone"></i> +66 xx xxx xxxx
      </div>
      <div class="social-links float-right">
        <a class='self' href='#'><?php
                            if($user_image == ""){
                              if($sex_id == 1){ //1ในฐานข้อมูลเป็น ผช
                                  echo"<img src='image/profile_male.png' alt='user'>";
                              }
                              if($sex_id == 2){ //2ในฐานข้อมูลเป็น ผญ
                                echo"<img src='image/profile_female.png' alt='user'>";
                              }
                            }
                            else{
                                echo"<img src='image/$user_image' alt='user'>";
                            }
                            ?>
                            <?php echo "$user";?>
          </a> |
          <a href="index.php?module=home&action=contact">ติดต่อสอบถาม</a> | 
          <a href="logout.php">ออกจากระบบ</a>
          </div>
        </div>
    </section>
<?php } 
function admin_topbar(){ ?>
    <section id="topbar" class="d-none d-lg-block">
        <div class="container clearfix">
          <div class="contact-info float-left">
            <i class="icofont-envelope"></i><a href="mailto:contact@example.com">xxxxx@example.com</a>
            <i class="icofont-phone"></i> +66 xx xxx xxxx
          </div>
          <div class="social-links float-right">
            <a href="index.php?module=home&action=contact">ติดต่อสอบถาม</a> | 
            <a href="#contact">สมัครเป็นฟรีแลนซ์</a> | 
            <a href="#contact"> <img src="image/user.png" alt="user"> เข้าสู่ระบบ</a>
          </div>
        </div>
    </section>

<?php } 
  if(empty($_SESSION['STATUS'])){
    user_topbar();
  }
  elseif ($_SESSION['STATUS']=='admin') {
    admin_topbar();
  }
  elseif ($_SESSION['STATUS']=='employee') {
    employee_topbar();
  }
  elseif ($_SESSION['STATUS']=='freelance') {
    freelance_topbar();
  }
  else {
    user_topbar();
  }
?>