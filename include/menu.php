<?php function user_menu(){ ?>
<header id="header">
    <div class="container">

      <div class="logo float-left">
        <h1 class="text-light"><a href="index.php"><span>JOBBIM</span></a></h1>
      </div>

      <!-- <form action="test.php" method="post"> -->
      <nav class="nav-menu float-right d-none d-lg-block">
        <ul>
          <!-- class="active" -->
          <!-- <li><button type="submit" name="your_name" value="your_value" class="btn-link">Go</button></li> -->
      
          <li><a href="index.php">Home</a></li>
          <!-- <li><button type="submit" name="menu" value="module=job&action=job&pid=1" class="btn-link1">เขียนแบบ BIM</button></li> -->
          <li><a href="index.php?module=job&action=job&pid=1">เขียนแบบ BIM</a></li>
          <li><a href="index.php?module=job&action=job&pid=2">งานสถาปัตยกรรม</a></li>
          <li><a href="index.php?module=job&action=job&pid=3">งานไฟฟ้า</a></li>
          <li><a href="index.php?module=job&action=job&pid=4">งานโยธา</a></li>
          <li><a href="index.php?module=job&action=job&pid=5">งานเครื่องกล</a></li>
          <li><a href="index.php?module=job&action=job&pid=6">งานสุขาภิบาล</a></li>
          <li><a href="index.php#contact">ติดต่อเรา</a></li>
        </ul>
      </nav>
      <!-- </form> -->

    </div>
  </header>
<?php } 
function freelance_menu(){ ?>
<header id="header">
    <div class="container">

      <div class="logo float-left">
        <h1 class="text-light"><a href="index.php"><span>JOBBIM</span></a></h1>
      </div>

      <nav class="nav-menu float-right d-none d-lg-block">
        <ul>
          <li class="active"><a href="index.php">Home</a></li>
          <li><a href="#">ผลงานของฉัน</a></li>
          <li><a href="#">แชทสื่อสาร</a></li>
          <li><a href="#">ประวัติส่วนตัว</a></li>
          <li><a href="#">แนะนำฟรีแลนซ์</a></li>
          <li><a href="#contact">ติดต่อเรา</a></li>
        </ul>
      </nav>

    </div>
  </header>
<?php } 
function employee_menu(){ ?>
<header id="header">
    <div class="container">

      <div class="logo float-left">
        <h1 class="text-light"><a href="index.php"><span>JOBBIM</span></a></h1>
      </div>

      <nav class="nav-menu float-right d-none d-lg-block">
        <ul>
          <li class="active"><a href="index.php">Home</a></li>
          <li><a href="index.php?module=job&action=job&pid=1">เขียนแบบ BIM</a></li>
          <li><a href="index.php?module=job&action=job&pid=2">งานสถาปัตยกรรม</a></li>
          <li><a href="index.php?module=job&action=job&pid=3">งานไฟฟ้า</a></li>
          <li><a href="index.php?module=job&action=job&pid=4">งานโยธา</a></li>
          <li><a href="index.php?module=job&action=job&pid=5">งานเครื่องกล</a></li>
          <li><a href="index.php?module=job&action=job&pid=6">งานสุขาภิบาล</a></li>
          <li><a href="index.php#contact">ติดต่อเรา</a></li>
        </ul>
      </nav>

    </div>
  </header>
<?php } 
function admin_menu(){ ?>
<header id="header">
    <div class="container">

      <div class="logo float-left">
        <h1 class="text-light"><a href="index.php"><span>JOBBIM</span></a></h1>
      </div>

      <nav class="nav-menu float-right d-none d-lg-block">
        <ul>
          <li class="active"><a href="index.php">Home</a></li>
          <li><a href="#about">เขียนแบบ BIM</a></li>
          <li><a href="#services">งานสถาปัตยกรรม</a></li>
          <li><a href="#portfolio">งานไฟฟ้า</a></li>
          <li><a href="#team">งานโยธา</a></li>
          <li><a href="#">งานเครื่องกล</a></li>
          <li><a href="#">งานสุขาภิบาล</a></li>
          <li><a href="#contact">ติดต่อเรา</a></li>
        </ul>
      </nav>

    </div>
  </header>

<?php } 
  if(empty($_SESSION['STATUS'])){
    user_menu();
  }
  elseif ($_SESSION['STATUS']=='admin') {
    admin_menu();
  }
  elseif ($_SESSION['STATUS']=='employee') {
    employee_menu();
  }
  elseif ($_SESSION['STATUS']=='freelance') {
    freelance_menu();
  }
  else {
    user_menu();
  }
?>