
<?php
  include "layouts/head.php";
    ?>

<body class="homepage">

<?php
  include "layouts/navbar.php";
    ?>
    <!-- Header Start -->
    <div class="container-fluid bg-primary py-5 mb-5 science-header">
        <div class="container py-5">
            <div class="row justify-content-center">
                <div class="col-lg-10 text-center">
                    <h1 class="display-3 text-white animated slideInDown">All About Science</h1>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb justify-content-center">
                            <li class="breadcrumb-item"><a class="text-white" href="#">Home</a></li>
                            <li class="breadcrumb-item"><a class="text-white" href="#">Learning Center</a></li>
                            <li class="breadcrumb-item text-white active" aria-current="page">Science</li>
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
            <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.5s">
                <div class="service-item text-center pt-3">
                  <div class="p-4">
                    <i class="fas fa-3x fa-atom text-warning mb-4"></i>
                    <h5 class="mb-3">Physical Science</h5>
                    <p>
                      Diam elitr kasd sed at elitr sed ipsum justo dolor sed clita
                      amet diam
                    </p>
                  </div>
                </div>
              </div>
          <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.1s">
            <div class="service-item text-center pt-3">
              <div class="p-4">
                <i class="fas fa-3x fa-flask text-warning mb-4"></i>
                <h5 class="mb-3">Chemistry</h5>
                <p>
                  Diam elitr kasd sed at elitr sed ipsum justo dolor sed clita
                  amet diam
                </p>
              </div>
            </div>
          </div>
          <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.3s">
            <div class="service-item text-center pt-3">
              <div class="p-4">
                <i class="fas fa-3x fa-dna text-warning mb-4"></i>
                <h5 class="mb-3">Biology</h5>
                <p>
                  Diam elitr kasd sed at elitr sed ipsum justo dolor sed clita
                  amet diam
                </p>
              </div>
            </div>
          </div>
          <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.5s">
            <div class="service-item text-center pt-3">
              <div class="p-4">
                <i class="fas fa-3x fa-magnet text-warning mb-4"></i>
                <h5 class="mb-3">Physics</h5>
                <p>
                  Diam elitr kasd sed at elitr sed ipsum justo dolor sed clita
                  amet diam
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
                  src="assets/img/science.jpg"
                  alt=""
                  style="object-fit: cover"
                />
              </div>
            </div>
            <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.3s">
              <h6 class="section-title bg-white text-start text-warning pe-3">
                Easy guide to understand science
              </h6>
              <h1 class="mb-4">Understand Science</h1>
              <p class="mb-4">
                Yourtechie kids are not just technology inclined but are smart at calculating and solving math problems.
              </p>
              <p class="mb-4">
                We work to make your techie kids capable of doing works expected at their grade level in accordance with their ages. We ensure your techie kids do not just learn but have fun while learning. <br> <br> We have different options you can choose that suits your schedule.
              </p>
              <div class="row gy-2 gx-4 mb-4">
                <div class="col-sm-6">
                  <p class="mb-0">
                    <i class="fa fa-arrow-right text-warning me-2"></i>Group Live Classes
                  </p>
                </div>
                <div class="col-sm-6">
                  <p class="mb-0">
                    <i class="fa fa-arrow-right text-warning me-2"></i>Video Courses
                  </p>
                </div>
                <div class="col-sm-6">
                  <p class="mb-0">
                    <i class="fa fa-arrow-right text-warning me-2"></i
                    >One-On-One Classes
                  </p>
                </div>
                <div class="col-sm-6">
                  <p class="mb-0">
                    <i class="fa fa-arrow-right text-warning me-2"></i>Study Packs
                  </p>
                </div>
              </div>
              <a class="btn btn-warning py-3 px-5 mt-2" href="">Make More Enquiry</a>
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
                Start Science Class
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
      <?php
      include "layouts/team.php";
        ?>

      <!-- Team End -->
  
        
<?php
  include "layouts/footer.php";
    ?>
