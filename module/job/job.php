<?php 
    $pid = $_GET["pid"];
    if($pid == "1"){$jobwork = "เขียนแบบ BIM";}
    else if($pid == "2"){$jobwork = "งานสถาปัตยกรรม";}
    else if($pid == "3"){$jobwork = "งานไฟฟ้า";}
    else if($pid == "4"){$jobwork = "งานโยธา";}
    else if($pid == "5"){$jobwork = "งานเครื่องกล";}
    else if($pid == "6"){$jobwork = "งานสุขาภิบาล";}
?>  
<main id="main">

    <!-- ======= About Lists Section ======= -->
    <section class="Services">
      <div class="container">

        <div class="section-title">
          <h2>BIMJOB <?php echo $jobwork; ?></h2>
        </div>

         <div class="row services"> <!-- no-gutters -->

         <?php 
            include("include/connection.php");

            $result = mysqli_query($conn,"SELECT fl_id,fl_prefix,fl_fname,fl_lname,sex_id,fl_job,fl_image
            FROM freelance WHERE fl_job LIKE '%$pid%' ") or die('query_freelance'.mysqli_error($conn));
            $aos_time = 0;
            while(list($fl_id,$fl_prefix,$fl_fname,$fl_lname,$sex_id,$fl_job,$fl_image) = mysqli_fetch_row($result)){
            $job = explode(",", $fl_job);
         
            echo"<div class='col-lg-3 col-md-6 content-item' data-aos='fade-up' data-aos-delay='$aos_time' style='padding-bottom: 15px;'>
            <div class='card mx-auto' style='width: 17rem;'>
                
                <div class='card-body'>
                    <div class='row'>
                        <div class='col-lg-10 col-md-6' data-aos='fade-up'>
                            <h5 class='card-title'><a class='self' href='#'>";
                            if($fl_image == ""){
                                if($sex_id == 1){ //1ในฐานข้อมูลเป็น ผช
                                    echo"<img src='image/profile_male.png' alt='user'>";
                                }
                                if($sex_id == 2){ //2ในฐานข้อมูลเป็น ผญ
                                    echo"<img src='image/profile_female.png' alt='user'>";
                                }
                            }
                            else{
                                echo"<img src='image/$fl_image' alt='user'>";
                            }
                            echo"<small> $fl_fname $fl_lname </small> </a></h5>
                        </div>
                    </div>

                    <img src='image/construction1.jpg' class='card-img-top' alt='construction'><hr>
                    <h5 class='section-title'><a href='#'>$jobwork</a></h5>
                    <p class='card-text'>* * * * *</p>
                </div>

            </div>
          </div>";
          $aos_time = $aos_time + 50;
          }
          ?>

          <div class="col-lg-3 col-md-6" data-aos="fade-up" data-aos-delay="100">
            <div class="card" style="width: 17rem;">
                
                <div class="card-body">
                    <div class="row">
                        <div class="col-lg-10 col-md-6" data-aos="fade-up">
                            <h5 class="card-title"> <img src="image/user.png" alt="user"> นาย xxxx xxxxx</h5>
                        </div>
                    </div>

                    <img src="image/construction1.jpg" class="card-img-top" alt="construction"><hr>
                    <h5 class="section-title">เขียนแบบ BIM</h5>
                    <p class="card-text">* * * * *</p>
                </div>

            </div>
          </div>

          <div class="col-lg-3 col-md-6" data-aos="fade-up" data-aos-delay="200">
            <div class="card" style="width: 17rem;">
                
                <div class="card-body">
                    <div class="row">
                        <div class="col-lg-10 col-md-6" data-aos="fade-up">
                            <h5 class="card-title"> <img src="image/user.png" alt="user"> นาย xxxx xxxxx</h5>
                        </div>
                    </div>

                    <img src="image/construction1.jpg" class="card-img-top" alt="construction"><hr>
                    <h5 class="section-title">เขียนแบบ BIM</h5>
                    <p class="card-text">* * * * *</p>
                </div>

            </div>
          </div>

          <div class="col-lg-3 col-md-6" data-aos="fade-up" data-aos-delay="300">
            <div class="card" style="width: 17rem;">
                
                <div class="card-body">
                    <div class="row">
                        <div class="col-lg-10 col-md-6" data-aos="fade-up">
                            <h5 class="card-title"> <img src="image/user.png" alt="user"> นาย xxxx xxxxx</h5>
                        </div>
                    </div>

                    <img src="image/construction1.jpg" class="card-img-top" alt="construction"><hr>
                    <h5 class="section-title">เขียนแบบ BIM</h5>
                    <p class="card-text">* * * * *</p>
                </div>

            </div>
          </div>

          </div>

          <div class="row">

          <div class="col-lg-3 col-md-6" data-aos="fade-up" data-aos-delay="400">
            <div class="card" style="width: 17rem;">
                
                <div class="card-body">
                    <div class="row">
                        <div class="col-lg-10 col-md-6" data-aos="fade-up">
                            <h5 class="card-title"> <img src="image/user.png" alt="user"> นาย xxxx xxxxx</h5>
                        </div>
                    </div>

                    <img src="image/construction1.jpg" class="card-img-top" alt="construction"><hr>
                    <h5 class="section-title">เขียนแบบ BIM</h5>
                    <p class="card-text">* * * * *</p>
                </div>

            </div>
          </div>

          <div class="col-lg-3 col-md-6" data-aos="fade-up" data-aos-delay="500">
            <div class="card" style="width: 17rem;">
                
                <div class="card-body">
                    <div class="row">
                        <div class="col-lg-10 col-md-6" data-aos="fade-up">
                            <h5 class="card-title"> <img src="image/user.png" alt="user"> นาย xxxxx xxxxx</h5>
                        </div>
                    </div>

                    <img src="image/construction1.jpg" class="card-img-top" alt="construction"><hr>
                    <h5 class="section-title">เขียนแบบ BIM</h5>
                    <p class="card-text">* * * * *</p>
                </div>

            </div>
          </div>

          <div class="col-lg-3 col-md-6" data-aos="fade-up" data-aos-delay="500">
            <div class="card" style="width: 17rem;">
                
                <div class="card-body">
                    <div class="row">
                        <div class="col-lg-10 col-md-6" data-aos="fade-up">
                            <h5 class="card-title"> <img src="image/user.png" alt="user"> นาย xxxxx xxxxx</h5>
                        </div>
                    </div>

                    <img src="image/construction1.jpg" class="card-img-top" alt="construction"><hr>
                    <h5 class="section-title">เขียนแบบ BIM</h5>
                    <p class="card-text">* * * * *</p>
                </div>

            </div>
          </div>

          <div class="col-lg-3 col-md-6" data-aos="fade-up" data-aos-delay="500">
            <div class="card" style="width: 17rem;">
                
                <div class="card-body">
                    <div class="row">
                        <div class="col-lg-10 col-md-6" data-aos="fade-up">
                            <h5 class="card-title"> <img src="image/user.png" alt="user"> นาย xxxx xxxxx</h5>
                        </div>
                    </div>

                    <img src="image/construction1.jpg" class="card-img-top" alt="construction"><hr>
                    <h5 class="section-title">เขียนแบบ BIM</h5>
                    <p class="card-text">* * * * *</p>
                </div>

            </div>
          </div>

        </div>

      </div>
    </section>
    <!-- End About Lists Section -->

  </main>
  <!-- End #main -->

