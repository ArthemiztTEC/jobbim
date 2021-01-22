  <!-- ======= Head ======= -->
  <?php include('include/hder.php');?>
<body>
  <!-- ======= Top Bar ======= -->
    <?php include('include/topbar.php');?>
  <!-- ======= Header ======= -->
    <?php include('include/menu.php');?>

<script>
function enableButton(event) {  //onkeypress
  if(event.inputType == "insertText"){
    document.getElementById('confirm_password').disabled='';
  }
 }

 function selectProvince() { //เลือกจังหวัดแล้วปลด อำเภอ
  var province = document.getElementById('province').value;
  if(province.value != ""){document.getElementById('amphure').disabled='';}
 }
 function selectAmphure() { //เลือกอำเภอแล้วปลด ตำบล
  var amphure = document.getElementById('amphure').value;
  if(amphure.value != ""){document.getElementById('district').disabled='';}
 }

 function checkNumber() { //เลือกอำเภอแล้วปลด ตำบล
  var phone = document.getElementById('phone').value;
  if(!phone.match(/^([0-9])+$/i)){
    $('#checkphone').html('กรอกได้เฉพาะตัวเลข').css('color', 'red');
    document.getElementById('phone').value = "";}
 }
</script>
<script>
    function checkAvailability() {
      var elem = document.getElementById('username').value;
      if(!elem.match(/^([a-z0-9])+$/i))
      {
        //alert("กรอกได้เฉพาะตัวเลขและตัวอักษรภาษาอังกฤษเท่านั้น");
        $('#check').html('กรอกได้เฉพาะตัวเลขและตัวอักษรภาษาอังกฤษเท่านั้น').css('color', 'red');
        document.getElementById('username').value = "";
      }
      else{
        $('#check').html('').css('color', 'red');
      }
      $("#loaderIcon").show();
      jQuery.ajax({
        url: "check_availability.php",
        data:'username='+$("#username").val(),
        type: "POST",
        success:function(data){
        $("#user-availability-status").html(data);
        $("#loaderIcon").hide();
        },
        error:function (){}
      });
    }

    function checkEmail() {
      // var elem = document.getElementById('username').value;
      // if(!elem.match(/^([a-z0-9])+$/i))
      // {
      //   //alert("กรอกได้เฉพาะตัวเลขและตัวอักษรภาษาอังกฤษเท่านั้น");
      //   $('#check').html('กรอกได้เฉพาะตัวเลขและตัวอักษรภาษาอังกฤษเท่านั้น').css('color', 'red');
      //   document.getElementById('username').value = "";
      // }
      // else{
      //   $('#check').html('').css('color', 'red');
      // }
      $("#loaderIcon").show();
      jQuery.ajax({
        url: "check_availability.php",
        data:'email='+$("#email").val(),
        type: "POST",
        success:function(data){
        $("#email-availability-status").html(data);
        $("#loaderIcon").hide();
        },
        error:function (){}
      });
    }
    
  </script>

<script type='text/javascript'>
function checkfname(){
  $('#fname').html('').css('color', 'red');
  var elem = document.getElementById('firstname').value;
  if(elem != '' ){
      if(elem.match(/^([a-z])+$/i) ||elem.match(/^([ก-์])+$/i)){}
      else if(elem.match(/^([a-z0-9])+$/i) || elem.match(/^([ก-์0-9])+$/i) || elem.match(/^([ก-์a-z])+$/i) || elem.match(/^([ก-์a-z])+$/i)){
          $('#fname').html('กรอกได้เฉพาะภาษาไทยหรืออังกฤษเท่านั้น').css('color', 'red');
          document.getElementById('firstname').value = '';
      }else{
        $('#fname').html('ไม่สามารถกรอก อักขระพิเศษได้').css('color', 'red');
          document.getElementById('firstname').value = '';
      }
  }else{$('#fname').html('').css('color', 'red');} 
}

function checklname(){
  $('#lname').html('').css('color', 'red');
  var elem = document.getElementById('lastname').value;
  if(elem != '' ){
      if(elem.match(/^([a-z])+$/i) ||elem.match(/^([ก-์])+$/i)){}
      else if(elem.match(/^([a-z0-9])+$/i) || elem.match(/^([ก-์0-9])+$/i) || elem.match(/^([ก-์a-z])+$/i) || elem.match(/^([ก-์a-z])+$/i)){
          $('#lname').html('กรอกได้เฉพาะภาษาไทยหรืออังกฤษเท่านั้น').css('color', 'red');
          document.getElementById('lastname').value = '';
      }else{
        $('#lname').html('ไม่สามารถกรอก อักขระพิเศษได้').css('color', 'red');
          document.getElementById('lastname').value = '';
      }
  }else{$('#lname').html('').css('color', 'red');} 
}
</script>


<?php 
  include('include/connection.php');
  $sql = "SELECT * FROM provinces";
  $query = mysqli_query($conn, $sql);
?>

<body class="bg-gradient-primary">
  <div class="container">

    <!-- Outer Row -->
    <div class="row justify-content-center">

      <div class="col-xl-10 col-lg-12 col-md-9" data-aos='fade-up'>

        <div class="card o-hidden border-0 shadow-lg my-5">
          <div class="card-body p-0">
            <div class="container">
              <!-- Nested Row within Card Body -->
              <form class="form-detail" action="#" name="frmRegisEmp" method="post">
                <div class="text-center"><p></p>
                  <h1 class="h4 text-gray-900 mb-4">สมัครสมาชิก นายจ้าง</h1>
                </div><hr>
                <div class="form-row">
                  <div class="form-group col-md-4">
                    <label for="Username">ชื่อผู้ใช้ : </label>
                    <input type="text" name="username" id="username" onBlur="checkAvailability()" class="form-control border " id="firstname" placeholder="Username" required> <!--border-dark-->
                    <img src="image/loading.png" id="loaderIcon" style="display:none" />
                    <span id="user-availability-status"></span><span id='check'></span>
                  </div>
                  <div class="form-group col-md-4">
                    <label for="Password">พาสเวิร์ด : </label>
                    <input type="password" name="password" id="password" oninput="enableButton(event)" type="password" class="form-control border " placeholder="Password" required>
                    <!-- <p></p> -->
                  </div>
                  <div class="form-group col-md-4">
                    <label for="confirm_password">ยืนยัน พาสเวิร์ด : </label>
                    <input type="password" name="confirm_password" id="confirm_password" class="form-control border " placeholder="Confirm Password" required disabled>
                    <span id='message'></span>
                  </div>
                </div>

                <div class="form-row">
                  <div class="form-group col-md-2">
                    <label for="sex">คำนำหน้า :</label>
                    <select name="sex" id="sex" class="form-control border " required>
                      <option value="">นาย</option>
                      <option value="">นาง</option>
                      <option value="">นางสาว</option>
                    </select>
                  </div>
                  <div class="form-group col-md-5">
                    <label for="firstname">ชื่อจริง : </label>
                    <input type="text" name="firstname" class="form-control border " onBlur='checkfname()' id="firstname" placeholder="Firstname" required>
                    <span id='fname'></span>
                  </div>
                  <div class="form-group col-md-5">
                    <label for="lastname">นามสกุล : </label>
                    <input type="text" name="lastname" class="form-control border " onBlur='checklname()' id="lastname" placeholder="Lastname" required>
                    <span id='lname'></span>
                  </div>
                </div>

                <div class="form-row">
                  <div class="form-group col-md-2">
                    <label for="sex">เพศ : </label>
                    <select name="sex" id="sex" class="form-control border " required>
                      <option value="">ชาย</option>
                      <option value="">หญิง</option>
                    </select>
                  </div>
                  <div class="form-group col-md-5">
                    <label for="firstname">วันเกิด : </label>
                    <input type="date" name="firstname" class="form-control border " id="firstname" placeholder="Firstname" required>
                  </div>
                  <div class="form-group col-md-5">

                    <label for="idcard">บัตรประชาชน : </label>
                    <input type="text" name="idcard" class="form-control border " id="idcard" placeholder="IDcard" maxlength="13" maxlength="13" required>
                    <span class="error"></span>
                  </div>
                </div>

                <div class="form-row">
                  <div class="form-group col-md-4">
                    <label for="province">จังหวัด :</label>
                      <select name="province_id" id="province" oninput="selectProvince()" class="form-control border " required>
                        <option value="">เลือกจังหวัด</option>
                        <?php while($result = mysqli_fetch_assoc($query)): ?>
                        <option value="<?=$result['id']?>"><?=$result['name_th']?></option>
                        <?php endwhile; ?>
                      </select>
                  </div>

                  <div class="form-group col-md-4">
                    <label for="amphure">อำเภอ :</label>
                      <select name="amphure_id" id="amphure" class="form-control border " oninput="selectAmphure()" required disabled>
                        <option value="">เลือกอำเภอ</option>
                      </select>
                  </div>
                                          
                  <div class="form-group col-md-4">
                    <label for="district">ตำบล :</label>
                      <select name="district_id" id="district" class="form-control border " required disabled>
                        <option value="">เลือกตำบล</option>
                      </select>
                  </div>
                </div>

                <div class="form-group">
                  <label for="address">ที่อยู่ :</label>
                  <input type="text" name="address" class="form-control border " id="address" placeholder="Enter your address"  maxlength="100" required>
                </div>

                <div class="form-row">
                  <div class="form-group col-md-4">
                    <label for="phone">เบอร์มือถือ : </label>
                    <input type="tel" name="phone" id="phone" class="form-control border " onBlur="checkNumber()" placeholder="000-000-0000" maxlength="10" required>
                    <span id="checkphone"></span>
                  </div>
                  <div class="form-group col-md-4">
                    <label for="email">อีเมล : </label>
                    <input type="email" name="email" class="form-control border " onBlur="checkEmail()" id="email" placeholder="example@mail.com" required>
                    <span id="email-availability-status">
                  </div>
                  <div class="form-group col-md-4">
                    <label for="firstname">รูปนายจ้าง : </label>
                    <input type="file" name="image" style="margin-top: 4px;"accept="image/x-png,image/jpeg" required/>
                  </div>
                </div>

                <div class="row">
                  <div class="col-xl-12 col-md-12 mb-4">
                    <input class="btn btn-success my-2 my-sm-0" type="submit" value="สมัครสมาชิก" role="button"> 
                    <a class="btn btn-danger my-2 my-sm-0" href='index.php' role="button">ยกเลิก</a>
                  </div>
                </div>

              </form>
            </div>
          </div>
        </div>
      </div>
    </div>

  </div>




  <?php include('include/footer.php');?>

  <a href="#" class="back-to-top"><i class="icofont-simple-up"></i></a>

  <!-- Vendor JS Files -->
  <!-- Template Main JS File -->
  <!-- เรียกสคริป จังหวัด ตำบล อำเภอ -->
  <script src="assets/js/jquery.min.js"></script>
  <script src="assets/js/script.js"></script> 
  <?php include('include/footerjs.php');?>

  <script>
    $('#password, #confirm_password').on('keyup', function () {
      if ($('#password').val() == $('#confirm_password').val()) {
        if ($('#password').val() == '') {
        $('#message').html('ยังไม่ได้ใส่ password').css('color', 'red');
        document.getElementById('confirm_password').disabled='false';
        }
        else
        $('#message').html('password ตรงกัน').css('color', 'green');
      } 
      else 
        $('#message').html('password ไม่ตรงกัน').css('color', 'red');
    });
</script>
<script>
  $(document).ready(function(){
    $('#idcard').on('keyup',function(){
      if($.trim($(this).val()) != '' && $(this).val().length == 13){
        id = $(this).val().replace(/-/g,"");
        var result = Script_checkID(id);
        if(result === false){
          $('span.error').removeClass('true').text('เลขบัตรไม่ถูกต้อง').css('color', 'red');
        }else{
          $('span.error').addClass('true').text('เลขบัตรถูกต้อง').css('color', 'green');
        }
      }else{
        $('span.error').removeClass('true').text('');
      }
    })
  });

  function Script_checkID(id){
      if(! IsNumeric(id)) return false;
      if(id.substring(0,1)== 0) return false;
      if(id.length != 13) return false;
      for(i=0, sum=0; i < 12; i++)
          sum += parseFloat(id.charAt(i))*(13-i);
      if((11-sum%11)%10!=parseFloat(id.charAt(12))) return false;
      return true;
  }

  function IsNumeric(input){
      var RE = /^-?(0|INF|(0[1-7][0-7]*)|(0x[0-9a-fA-F]+)|((0|[1-9][0-9]*|(?=[\.,]))([\.,][0-9]+)?([eE]-?\d+)?))$/;
      return (RE.test(input));
  }


</script>
</body>
</html>

