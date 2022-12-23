
<?php
  include "layouts/head.php";
    ?>

<body class="homepage">

<?php
  include "layouts/navbar.php";
    ?>

    <!-- Header Start -->
    <div class="container-fluid bg-primary py-5 mb-5 page-header">
        <div class="container py-5">
            <div class="row justify-content-center">
                <div class="col-lg-10 text-center">
                    <h1 class="display-3 text-white animated slideInDown">About Us</h1>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb justify-content-center">
                            <li class="breadcrumb-item"><a class="text-white" href="#">Home</a></li>
                            <li class="breadcrumb-item"><a class="text-white" href="#">Pages</a></li>
                            <li class="breadcrumb-item text-white active" aria-current="page">About</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>
    <!-- Header End -->

    <!-- Service Start -->
    <?php
      include "layouts/service.php";
        ?>
      <!-- Service End -->
  
    <!-- About Start -->
    <div class="container-xxl py-5">
      <div class="container">
        <div class="row g-5">
          <div
            class="col-lg-6 wow fadeInUp"
            data-wow-delay="0.1s"
            style="min-height: 400px"
          >
            <div class="position-relative h-100">
              <img
                class="img-fluid position-absolute w-100 h-100"
                src="assets/img/about.jpg"
                alt=""
                style="object-fit: cover"
              />
            </div>
          </div>
          <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.3s">
            <h6 class="section-title bg-white text-start text-warning pe-3">
              About Us
            </h6>
            <h1 class="mb-4">Welcome to Your Techie Kids Arena</h1>
            <p class="mb-4">
              We believe every child is a genius and it takes the right approach to ignite it.
            </p>
            <p class="mb-4">
              At Your Techie Kids we ensure learning is fun for our learners. That way learning to them become natural and not stressful because they will be enjoying what they are doing.
            </p>
            
            <p class="mb-4">
              We guarantee the best experience and also profer several options that are productive for you to choose.
            </p>
            <div class="row gy-2 gx-4 mb-4">
      
              <div class="col-sm-6">
                <p class="mb-0">
                  <i class="fa fa-arrow-right text-warning me-2"></i>Online
                  Classes
                </p>
              </div>
              <div class="col-sm-6">
                <p class="mb-0">
                  <i class="fa fa-arrow-right text-warning me-2"></i
                  >Group Classes
                </p>
              </div>
              <div class="col-sm-6">
                <p class="mb-0">
                  <i class="fa fa-arrow-right text-warning me-2"></i>Video Courses
                </p>
              </div>
              <div class="col-sm-6">
                <p class="mb-0">
                  <i class="fa fa-arrow-right text-warning me-2"></i>Books Library
                </p>
              </div>
              <div class="col-sm-6">
                <p class="mb-0">
                  <i class="fa fa-arrow-right text-warning me-2"></i
                  >Study Packs
                </p>
              </div>
            </div>
            <a class="btn btn-warning py-3 px-5 mt-2" href="about">Read More</a>
          </div>
        </div>
      </div>
    </div>
    <!-- About End -->

    <!-- Team Start -->
    <?php
      include "layouts/team.php";
        ?>

      <!-- Team End -->
  
   
<?php
  include "layouts/footer.php";
    ?>
