<?php 
  //error_reporting(0); //เปิดหลังเสร็จงาน
  session_start();
  $status = "0"; $user_id = "0";
  if(!empty($_SESSION['STATUS'])){ $status = $_SESSION['STATUS']; $user = $_SESSION['USERNAME']; $user_id = $_SESSION['USER_ID'];}
?>
<!DOCTYPE html>
<html lang="en">
  <!-- ======= Head ======= -->
    <?php include('include/hder.php');?>
<body>
  <!-- ======= Top Bar ======= -->
    <?php include('include/topbar.php');?>
  <!-- ======= Header ======= -->
    <?php include('include/menu.php');?>

  <!-- Begin Page Content -->

      <?php  
          if($status == "admin"){
            //require"module/admin_content.php";
            if(empty($_GET['module']) or empty($_GET['action'])){
               include("module/home/admin_content.php"); //หน้าแรก
             }
             else{
               $module = $_GET['module']; //รับชื่อโฟลเดอร์จากเมนู
               $action = $_GET['action']; //รับชื่อไล์จากเมนู
               include("module/$module/$action.php");
             }
          }
          elseif ($status == "employee") {
            if(empty($_GET['module']) or empty($_GET['action'])){
               include("module/home/employee_content.php"); //หน้าแรก
             }
             else{
               $module = $_GET['module']; //รับชื่อโฟลเดอร์จากเมนู
               $action = $_GET['action']; //รับชื่อไล์จากเมนู
               include("module/$module/$action.php");
             }
          }
          elseif ($status == "freelance") {
            if(empty($_GET['module']) or empty($_GET['action'])){
               include("module/home/freelance_content.php"); //หน้าแรก
             }
             else{
               $module = $_GET['module']; //รับชื่อโฟลเดอร์จากเมนู
               $action = $_GET['action']; //รับชื่อไล์จากเมนู
               include("module/$module/$action.php");
             }
          }
          else{
            //require"module/member_content.php";
            if(empty($_GET['module']) or empty($_GET['action'])){
               include("module/home/user_content.php"); //หน้าแรก
             }
             else{
               $module = $_GET['module']; //รับชื่อโฟลเดอร์จากเมนู
               $action = $_GET['action']; //รับชื่อไล์จากเมนู
               include("module/$module/$action.php");
             }
          }
        ?>
  <!-- End of Main Content -->

  <!-- ======= footer ======= -->
  <?php include('include/footer.php');?>

  <a href="#" class="back-to-top"><i class="icofont-simple-up"></i></a>

  <!-- Vendor JS Files -->
  <!-- Template Main JS File -->
  <?php include('include/footerjs.php');?>

</body>

</html>