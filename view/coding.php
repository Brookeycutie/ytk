
<?php
  include "layouts/head.php";
    ?>

<body class="homepage">

<?php
  include "layouts/navbar.php";
    ?>

    <!-- Header Start -->
    <div class="container-fluid bg-primary py-5 mb-5 code-header">
        <div class="container py-5">
            <div class="row justify-content-center">
                <div class="col-lg-10 text-center">
                    <h1 class="display-3 text-white animated slideInDown">All About Coding</h1>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb justify-content-center">
                            <li class="breadcrumb-item"><a class="text-white" href="#">Home</a></li>
                            <li class="breadcrumb-item"><a class="text-white" href="#">Learning Center</a></li>
                            <li class="breadcrumb-item text-white active" aria-current="page">Coding</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>
    <!-- Header End --> 

    <!-- Service Start -->
    <div class="container-xxl py-5">
      <div class="container">
        <div class="row g-4">
          <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.1s">
            <div class="service-item text-center pt-3">
              <div class="p-4">
                <i class="fas fa-3x fa-code text-warning mb-4"></i>
                <h5 class="mb-3">Programming</h5>
                <p>
                  We offer programming skills from beginner level to advanced level
                </p>
              </div>
            </div>
          </div>
          <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.3s">
            <div class="service-item text-center pt-3">
              <div class="p-4">
                <i class="fas fa-3x fa-sitemap text-warning mb-4"></i>
                <h5 class="mb-3">Algorithms</h5>
                <p>
                They will learn the process or set of rules to be followed in problem-solving operations, understood by a computer.
                </p>
              </div>
            </div>
          </div>
          <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.5s">
            <div class="service-item text-center pt-3">
              <div class="p-4">
                <i class="fab fa-3x fa-centercode text-warning mb-4"></i>
                <h5 class="mb-3">Designing</h5>
                <p>
                  This will help them learn drawing techniques and their own aesthetics. Creativity has no bound in this field.
                </p>
              </div>
            </div>
          </div>
          <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.7s">
            <div class="service-item text-center pt-3">
              <div class="p-4">
                <i class="fas fa-3x fa-user-secret text-warning mb-4"></i>
                <h5 class="mb-3">Animating</h5>
                <p>
                This field helps to positively impact kids of all ages and help them develop different skills, such as problem-solving, creativity, analytical and critical thinking, and verbal skills
                </p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- Service End -->

      <!-- About Start -->
      <div class="container-xxl py-5">
        <div class="container">
          <div class="row g-5 mb-5">
            <div
              class="col-lg-6 wow fadeInUp"
              data-wow-delay="0.1s"
              style="min-height: 400px"
            >
              <div class="position-relative h-100">
                <img
                  class="img-fluid position-absolute w-100 h-100"
                  src="assets/img/code.jpg"
                  alt=""
                  style="object-fit: cover"
                />
              </div>
            </div>
            <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.3s">
              <h6 class="section-title bg-white text-start text-warning pe-3">
                Why Learn to Code
              </h6>
              <h1 class="mb-4">Learn to Code</h1>
              <p class="mb-4">
              Coding is just like a language and do not forget childhood is the best time to learn a language.
              </p>
              <p class="mb-4">
              The world is developing which makes coding an extremely useful skill to possess. There are lots of businesses who rely on computer code.<br> <br> We work to make your techie kids capable of acquiring all these skills to be the best they can be.<br> <br> Here are Benefits of Coding
              </p>
              <div class="row gy-2 gx-4 mb-4">
                <div class="col-sm-6">
                  <p class="mb-0">
                    <i class="fa fa-arrow-right text-warning me-2"></i>Coding helps build high self esteem
                  </p>
                </div>
                <div class="col-sm-6">
                  <p class="mb-0">
                    <i class="fa fa-arrow-right text-warning me-2"></i>Coding helps with creativity
                  </p>
                </div>
                <div class="col-sm-6">
                  <p class="mb-0">
                    <i class="fa fa-arrow-right text-warning me-2"></i
                    >Coding aids rational thinking
                  </p>
                </div>
                <div class="col-sm-6">
                  <p class="mb-0">
                    <i class="fa fa-arrow-right text-warning me-2"></i>Coding is the future
                  </p>
                </div>
              </div>
              <a class="btn btn-warning py-3 px-5 mt-2" href="contact">Make More Enquiry</a>
            </div>
          </div>
        </div>
      </div>
      <!-- About End -->
  

  <!-- service Start -->
  <div class="container-xxl py-3 bg-dark">
      <div class="container mb-5">
        <div class="text-center wow fadeInUp" data-wow-delay="0.1s">           
            <div class="py-4">
              <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
              <h6 class="section-title bg-dark text-center text-warning px-3">
                Start Coding Class
              </h6>
              <h1 class="mb-3 text-white">Register to get Started</h1>
            </div>
            <a class="btn btn-warning py-3 px-5 mt-2" href="start-class">Get Started</a>
            </div>
           
          </div>
        </div>
      </div>
    </div>
      <!-- Service End -->

    <!-- Team Start -->
    <?php
      include "layouts/team.php";
        ?>

      <!-- Team End -->
  
     
<?php
  include "layouts/footer.php";
    ?>
