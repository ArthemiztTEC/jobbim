<hr><div class="mx-auto" style="width: 500px;"><p>อาจมีรายการเพิ่มตรงนี้ (เพิ่มเมนูแชท แก้ไขข้อมูลส่วนตัว ประวัติงานจ้าง)</p></div><hr>
  <main id="main">

    <!-- ======= About Lists Section ======= -->
    <section class="about-lists">
      <div class="container">

        <div class="section-title">
          <h2>BIMJOB แนะนำฟรีแลนซ์</h2>
        </div>


         <div class="row"> <!-- no-gutters -->
          
          <?php 

          include("include/connection.php");

          $result = mysqli_query($conn,"SELECT fl_id,fl_prefix,fl_fname,fl_lname,fl_job FROM freelance WHERE fl_id ORDER BY fl_id DESC LIMIT 6 ") or die('query_freelance'.mysqli_error($conn));
          list($fl_id,$fl_prefix,$fl_fname,$fl_lname,$fl_job) = mysqli_fetch_row($result);
          $job = explode(",","$fl_job");
          $job = $job[0];
          
          $job = mysqli_query($conn,"SELECT job_id,job_detail FROM tb_job WHERE job_id LIKE '$job' ") or die('query_job'.mysqli_error($conn));
           list($job_id,$job_detail) = mysqli_fetch_row($job);

          
          echo"<div class='col-lg-4 col-md-6 content-item' data-aos='fade-up'>
            <div class='card mx-auto' style='width: 18rem;'>
                
                <div class='card-body'>
                    <div class='row'>
                        <div class='col-lg-10 col-md-6' data-aos='fade-up'>
                            <h5 class='card-title'> <img src='image/user.png' alt='user'> <small> $fl_prefix $fl_fname $fl_lname </small> </h5>
                        </div>
                    </div>

                    <img src='image/construction1.jpg' class='card-img-top' alt='construction'><hr>
                    <h5 class='section-title'>$job_detail</h5>
                    <p class='card-text'>* * * * *</p>
                </div>

            </div>
          </div>";

          ?>


          <div class="col-lg-4 col-md-6 content-item" data-aos="fade-up" data-aos-delay="50">
            <div class="card mx-auto" style="width: 18rem;">
                
                <div class="card-body">
                    <div class="row">
                        <div class="col-lg-10 col-md-6" data-aos="fade-up">
                            <h5 class="card-title"> <img src="image/user.png" alt="user"> นาย xxxxxxx xxxxx</h5>
                        </div>
                    </div>

                    <img src="image/construction1.jpg" class="card-img-top" alt="construction"><hr>
                    <h5 class="section-title">เขียนแบบ BIM</h5>
                    <p class="card-text">* * * * *</p>
                </div>

            </div>
          </div>

          <div class="col-lg-4 col-md-6 content-item" data-aos="fade-up" data-aos-delay="100">
            <div class="card mx-auto" style="width: 18rem;">
                
                <div class="card-body">
                    <div class="row">
                        <div class="col-lg-10 col-md-6" data-aos="fade-up">
                            <h5 class="card-title"> <img src="image/user.png" alt="user"> นาย xxxxxxx xxxxx</h5>
                        </div>
                    </div>

                    <img src="image/construction1.jpg" class="card-img-top" alt="construction"><hr>
                    <h5 class="section-title">เขียนแบบ BIM</h5>
                    <p class="card-text">* * * * *</p>
                </div>

            </div>
          </div>

          <div class="col-lg-4 col-md-6 content-item" data-aos="fade-up" data-aos-delay="150">
            <div class="card mx-auto" style="width: 18rem;">
                
                <div class="card-body">
                    <div class="row">
                        <div class="col-lg-10 col-md-6" data-aos="fade-up">
                            <h5 class="card-title"> <img src="image/user.png" alt="user"> นาย xxxxxxx xxxxx</h5>
                        </div>
                    </div>

                    <img src="image/construction1.jpg" class="card-img-top" alt="construction"><hr>
                    <h5 class="section-title">เขียนแบบ BIM</h5>
                    <p class="card-text">* * * * *</p>
                </div>

            </div>
          </div>

          <div class="col-lg-4 col-md-6 content-item" data-aos="fade-up" data-aos-delay="200">
            <div class="card mx-auto" style="width: 18rem;">
                
                <div class="card-body">
                    <div class="row">
                        <div class="col-lg-10 col-md-6" data-aos="fade-up">
                            <h5 class="card-title"> <img src="image/user.png" alt="user"> นาย xxxxxxx xxxxx</h5>
                        </div>
                    </div>

                    <img src="image/construction1.jpg" class="card-img-top" alt="construction"><hr>
                    <h5 class="section-title">เขียนแบบ BIM</h5>
                    <p class="card-text">* * * * *</p>
                </div>

            </div>
          </div>

          <div class="col-lg-4 col-md-6 content-item" data-aos="fade-up" data-aos-delay="250">
            <div class="card mx-auto" style="width: 18rem;">
                
                <div class="card-body">
                    <div class="row">
                        <div class="col-lg-10 col-md-6" data-aos="fade-up">
                            <h5 class="card-title"> <img src="image/user.png" alt="user"> นาย xxxxxxx xxxxx</h5>
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
   
    <!-- ======= Services Section ======= -->
    <section id="services" class="services section-bg">
      <div class="container">

        <div class="section-title">
          <h2>BIMJOB ช่วยแก้ปัญหาเหล่านี้</h2>
        </div>

        <div class="row">
          <div class="col-lg-4 col-md-6 icon-box" data-aos="fade-up">
            <div class="icon"><i class="icofont-computer"></i></div>
            <h4 class="title"></h4>
            <p class="description">ผู้ว่าจ้างไม่ต้องจ่ายให้ลูกจ้างก่อน และได้เงินคืนหากงานไม่สำเร็จ</p>
          </div>
          <div class="col-lg-4 col-md-6 icon-box" data-aos="fade-up" data-aos-delay="100">
            <div class="icon"><i class="icofont-chart-bar-graph"></i></div>
            <h4 class="title"></h4>
            <p class="description">ผู้ถูกจ้างไม่ต้องเดินทางเพื่อนำงานไปให้ผู้ว่าจ้างตรวจสอบและแก้ไข</p>
          </div>
          <div class="col-lg-4 col-md-6 icon-box" data-aos="fade-up" data-aos-delay="200">
            <div class="icon"><i class="icofont-earth"></i></div>
            <h4 class="title"></h4>
            <p class="description">ผู้ถูกจ้างสามารถส่งงานให้ตรวจได้โดยไม่ต้องส่งไฟล์ผลงานจริง</p>
          </div>
          <div class="col-lg-2 col-md-4 icon-box" data-aos="fade-up" data-aos-delay="300"></div>
          <div class="col-lg-4 col-md-6 icon-box" data-aos="fade-up" data-aos-delay="300">
            <div class="icon"><i class="icofont-image"></i></div>
            <h4 class="title"></h4>
            <p class="description">ผู้ถูกจ้างได้รับเงินครบถ้วนแน่นอนเมื่อผลงานสำเร็จ</p>
          </div>
          <div class="col-lg-4 col-md-6 icon-box" data-aos="fade-up" data-aos-delay="400">
            <div class="icon"><i class="icofont-settings"></i></div>
            <h4 class="title"></h4>
            <p class="description">ผู้ว่าจ้างมั่นใจในผลงานของผู้รับจ้างได้เนื่องจากการรับรองผลการทำงานด้วยระบบรีวิวจากผู้จ้างท่านอื่น</p>
          </div>
          <div class="col-lg-2 col-md-4 icon-box" data-aos="fade-up" data-aos-delay="300"></div>
        </div>

      </div>
    </section>
    
    <!-- End Services Section -->

    <!-- ======= Contact Us Section ======= -->
    <section id="contact" class="contact">
      <div class="container">

        <div class="section-title">
          <h2>ติดต่อเรา</h2>
        </div>

        <div class="row">

          <div class="col-lg-6 d-flex align-items-stretch" data-aos="fade-up">
            <div class="info-box">
              <i class="bx bx-map"></i>
              <h3>Our Address</h3>
              <p>xxx xxx xxx xxxx</p>
            </div>
          </div>

          <div class="col-lg-3 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="50">
            <div class="info-box">
              <i class="bx bx-envelope"></i>
              <h3>Email Us</h3>
              <p>xxx@example.com<br>xxx@example.com</p>
            </div>
          </div>

          <div class="col-lg-3 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="100">
            <div class="info-box ">
              <i class="bx bx-phone-call"></i>
              <h3>Call Us</h3>
              <p>+66 xx xxx xxxx<br>+66 xx xxx xxxx</p>
            </div>
          </div>

        </div>

      </div>
    </section>
    <!-- End Contact Us Section -->

  </main>
  <!-- End #main -->