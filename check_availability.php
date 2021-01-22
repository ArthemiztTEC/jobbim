<?php
    include("include/DBController.php");
    $db_handle = new DBController();

    $str = 0;
    
    

    if(!empty($_POST["username"])) {
        $str = strlen($_POST["username"]);
        $query = "SELECT * FROM check_login WHERE username='" . $_POST["username"] . "'";
        $user_count = $db_handle->numRows($query);
        if($user_count>0 ){
            echo "<span style='color: red;'> ไม่สามารถใช้ Username นี้ได้.</span>";
        }
        else if($str <= 5){
            echo "<span style='color: red;'> ต้องใส่มากกว่า 6 ตัว</span>";
        }
        else{
            echo "<span style='color: green;'> สามารถใช้ Username นี้ได้.</span>";
            // echo strlen($str);
        }
    }

    if(!empty($_POST["email"])) {
        $str = strlen($_POST["email"]);
        $query = "SELECT * FROM check_login WHERE email='" . $_POST["email"] . "'";
        $user_count = $db_handle->numRows($query);
        if($user_count>0 ){
            echo "<span style='color: red;'> ไม่สามารถใช้ email นี้ได้.</span>";
        }
    }

?>

