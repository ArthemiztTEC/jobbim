<?php
  if(empty($_SESSION['USER_ID']) or $_SESSION['STATUS'] !="admin"){
    echo "<script>alert('คุณไม่มีสิทธิ์การเข้าใช้งานในหน้านี้')</script>";
    echo "<script>window.location='index.php'</script>";
  }
  else{
?>

แอดมิน

<?php } ?>