<?php
session_start();
require_once"include/connection.php";

if($_GET["obj"] == "delete_account_cookie"){

    $key = $_POST["key"];
    setcookie("user_id[$key]", "", time() - 3600, '/');

    echo "success";

}

if($_GET["obj"] == "check_login"){
    
    $username = $conn->real_escape_string($_POST["username"]);
    $password = $conn->real_escape_string($_POST["password"]);
    if(isset($_POST["remember"])){$remember = $_POST["remember"];}
    
    $sql = "SELECT * FROM check_login WHERE username = '".$username."' AND password = '".$password."' ";
    $result = $conn->query($sql);
    $num = $result->num_rows;
    if($num > 0){
        $row = $result->fetch_assoc();
        $status = $row["status"];

        //ต้องถึงข้อมูลตาม สถานะ เพื่อเก็บลง SESSION

        if($status == "0"){ //0 เป็น freelanace
            //$_SESSION["STATUS"] = "freelance";
            $sql = "SELECT * FROM freelance WHERE fl_username = '".$username."' AND fl_password = '".$password."' ";
            $result = $conn->query($sql);
            $num = $result->num_rows;
            if($num > 0){
                $row = $result->fetch_assoc();
                
                $_SESSION["USER_ID"] = $row["fl_id"]; //เก็บไอดี
                $_SESSION["USERNAME"] = $row["fl_username"]; //เก็บชื่อผู้ใช้
                $_SESSION["SEX"] = $row["sex_id"]; //เก็บเพศ
                $_SESSION["STATUS"] = "freelance"; //เก็บสถานะตอนเข้าระบบ
                $_SESSION["IMAGE"] = $row["fl_image"]; //เก็บชื่อรูป

                $user_id = $row["fl_id"];
                $usernamerow = $row["fl_username"];
            }
        }
        else if($status == "1"){ //1 เป็น employee
            //$_SESSION["STATUS"] = "employee";
            $sql = "SELECT * FROM employee WHERE employee_username = '".$username."' AND employee_password = '".$password."' ";
            $result = $conn->query($sql);
            $num = $result->num_rows;
            if($num > 0){
                $row = $result->fetch_assoc();
                
                $_SESSION["USER_ID"] = $row["employee_id"]; 
                $_SESSION["USERNAME"] = $row["employee_username"];
                $_SESSION["SEX"] = $row["sex_id"];
                $_SESSION["STATUS"] = "employee";
                $_SESSION["IMAGE"] = $row["employee_image"];

                $user_id = $row["employee_id"];
                $usernamerow = $row["employee_username"];
            }
        }
        else{
            $_SESSION["STATUS"] = "ข้อมูลไม่ถูกต้อง"; //สั่งคืนค่าละกลับหน้า index
        }

        // $_SESSION["USER_ID"] = $row["fl_id"];
        // $_SESSION["USERNAME"] = $row["fl_username"];
        // $_SESSION["STATUS"] = "freelance";
        // $_SESSION["IMAGE"] = $row["fl_image"];
        //$fl_id = $row["check_id"];
    
        if(isset($remember)){
            $cookie_value = $usernamerow;
            if(isset($_COOKIE["user_id"])){
                foreach($_COOKIE["user_id"] as $v){
                    if($v != $user_id){
                        setcookie("user_id[$user_id]", $cookie_value, time() + (86400 * 30), "/"); // 86400 = 1 day
                    }
                }
            }else{
                setcookie("user_id[$user_id]", $cookie_value, time() + (86400 * 30), "/"); // 86400 = 1 day
            }
        }
        
        echo "success";
    }else{
        echo "false";
    }

}


?>