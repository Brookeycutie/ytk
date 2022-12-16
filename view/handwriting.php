
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
                    <h1 class="display-3 text-white animated slideInDown">All About Handwriting</h1>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb justify-content-center">
                            <li class="breadcrumb-item"><a class="text-white" href="#">Home</a></li>
                            <li class="breadcrumb-item"><a class="text-white" href="#">Learning Center</a></li>
                            <li class="breadcrumb-item text-white active" aria-current="page">Handwriting</li>
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
          <div class="col-lg-4 col-sm-6 wow fadeInUp" data-wow-delay="0.1s">
            <div class="service-item text-center pt-3">
              <div class="p-4">
                <i class="fas fa-3x fa-signature text-warning mb-4"></i>
                <h5 class="mb-3">Cursive</h5>
                <p>
                  Diam elitr kasd sed at elitr sed ipsum justo dolor sed clita
                  amet diam
                </p>
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-sm-6 wow fadeInUp" data-wow-delay="0.3s">
            <div class="service-item text-center pt-3">
              <div class="p-4">
                <i class="fas fa-3x fa-i-cursor text-warning mb-4"></i>
                <h5 class="mb-3">Nelson</h5>
                <p>
                  Diam elitr kasd sed at elitr sed ipsum justo dolor sed clita
                  amet diam
                </p>
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-sm-6 wow fadeInUp" data-wow-delay="0.5s">
            <div class="service-item text-center pt-3">
              <div class="p-4">
                <i class="fas fa-3x fa-grip-lines text-warning mb-4"></i>
                <h5 class="mb-3">Print</h5>
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
                  src="{{ asset('assets/img/code.jpg') }}"
                  alt=""
                  style="object-fit: cover"
                />
              </div>
            </div>
            <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.3s">
              <h6 class="section-title bg-white text-start text-warning pe-3">
                Perfected Handwriting Guides
              </h6>
              <h1 class="mb-4">Write Beautifully</h1>
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
  

    <!-- Service Start -->
    <div class="container-xxl py-3">
        <div class="container">
          <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
            <h6 class="section-title bg-white text-center text-warning px-3">
              Choose Suitable Option
            </h6>
            <h1 class="mb-3">Option Details</h1>
          </div>
          <div class="">
            <p>To get your child started with learnings at YourTechieKids, there are four options to choose from:
              <ol>
                <li class="fw-bold fs-5">Group Live class on Google Meet</li>
                <p>
                  This comprises of a group of your techie kids, not more than 10 being taught by an educator in a Live Class on Google Meet.
                </p>
                <p><strong>Time: </strong>Tuesdays & Thursdays
                  <br>
                  (4pm – 5pm WAT: Lower Elementary Classes) 
                  <br>                 
                  (5pm – 6pm WAT: Upper Elementary Classes)</p>

                <li class="fw-bold fs-5">One on one class on Google Meet</li>
                <p>Learners can choose their desired time and have one-on-one class with the educator via Google Meet. <br>A family can register 2 – 4 children for same package at a discount.</p>
                </p>

                <li class="fw-bold fs-5">Video Courses Subscriptions</li>
                <p>
                  Here learners can learn at their own pace with our video courses. This gives the learner full control over concept. <br>Learners can subscribe monthly to get video courses based on different concepts taught.
                </p>
              
              </ol>
          </div>
        </div>
    </div>


    <!-- Pricing Start -->
    <div class="container-xxl py-3 bg-dark">
      <div class="container mb-5">
        <div class="text-center wow fadeInUp" data-wow-delay="0.1s">           
            <div class="py-4">
              <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
              <h6 class="section-title bg-dark text-center text-warning px-3">
                Option Packages
              </h6>
              <h1 class="mb-3 mt-3 text-white">Beginner</h1>
            </div>
            </div>

           <div class="row g-4">
            <div class="col-lg-4 col-sm-6 wow fadeInUp" data-wow-delay="0.1s">
              <div class="service-item text-center pt-3">
                <div class="p-4">
                  <i class="fa fa-3x fa-users text-warning mb-4"></i>
                  <h5 class="mb-3">Group Live Classes</h5>
                  <p class="text-dark" style="font-size: 40px"><small class="fs-3"><i class="fa fa-dollar-sign mb-2"></i></small>70</p>
                  <div>
                    <p>
                      <i class="fa fa-check-circle me-1 rounded-3"></i>
                      <span>Covers 1 month</span>
                    </p>
                    <p>
                      <i class="fa fa-check-circle me-1"></i>
                      <span>8 Lessons</span>
                    </p>
                    <p>
                      <i class="fa fa-check-circle me-1"></i>
                      <span>Loads of Tasks</span>
                    </p>
                  </div>
                  <a class="btn btn-warning py-3 px-5 mt-2" href="">Get Started</a>
                </div>
              </div>
            </div>
            <div class="col-lg-4 col-sm-6 wow fadeInUp" data-wow-delay="0.3s">
              <div class="service-item text-center pt-3">
                <div class="p-4">
                  <i class="fa fa-3x fa-user text-warning mb-4"></i>
                  <h5 class="mb-3">One-on-one Live Classes</h5>
                  <p class="text-dark" style="font-size: 40px"><small class="fs-3"><i class="fa fa-dollar-sign mb-2"></i></small>120</p>
                  <div>
                    <p>
                      <i class="fa fa-check-circle me-1 rounded-3"></i>
                      <span>Covers 1 month</span>
                    </p>
                    <p>
                      <i class="fa fa-check-circle me-1"></i>
                      <span>8 Lessons</span>
                    </p>
                    <p>
                      <i class="fa fa-check-circle me-1"></i>
                      <span>Loads of Tasks</span>
                    </p>
                  </div>
                  <a class="btn btn-warning py-3 px-5 mt-2" href="">Get Started</a>
                </div>
              </div>
            </div>
            <div class="col-lg-4 col-sm-6 wow fadeInUp" data-wow-delay="0.5s">
              <div class="service-item text-center pt-3">
                <div class="p-4">
                  <i class="fa fa-3x fa-school text-warning mb-4"></i>
                  <h5 class="mb-3">Video Courses Subscription</h5>
                  <p class="text-dark" style="font-size: 40px"><small class="fs-3"><i class="fa fa-dollar-sign mb-2"></i></small>50</p>
                  <div>
                    <p>
                      <i class="fa fa-check-circle me-1 rounded-3"></i>
                      <span>Covers 1 month</span>
                    </p>
                    <p>
                      <i class="fa fa-check-circle me-1"></i>
                      <span>8 Lessons</span>
                    </p>
                    <p>
                      <i class="fa fa-check-circle me-1"></i>
                      <span>Loads of Tasks</span>
                    </p>
                  </div>
                  <a class="btn btn-warning py-3 px-5 mt-2" href="">Get Started</a>
                </div>
              </div>
            </div>
          </div>
          
          <div class="py-4">
            <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
            <h1 class="mb-3 mt-5 text-white">Intermediary</h1>
          </div>
          </div>

         <div class="row g-4">
          <div class="col-lg-4 col-sm-6 wow fadeInUp" data-wow-delay="0.1s">
            <div class="service-item text-center pt-3">
              <div class="p-4">
                <i class="fa fa-3x fa-users text-warning mb-4"></i>
                <h5 class="mb-3">Group Live Classes</h5>
                <p class="text-dark" style="font-size: 40px"><small class="fs-3"><i class="fa fa-dollar-sign mb-2"></i></small>90</p>
                <div>
                  <p>
                    <i class="fa fa-check-circle me-1 rounded-3"></i>
                    <span>Covers 1 month</span>
                  </p>
                  <p>
                    <i class="fa fa-check-circle me-1"></i>
                    <span>8 Lessons</span>
                  </p>
                  <p>
                    <i class="fa fa-check-circle me-1"></i>
                    <span>Loads of Tasks</span>
                  </p>
                </div>
                <a class="btn btn-warning py-3 px-5 mt-2" href="">Get Started</a>
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-sm-6 wow fadeInUp" data-wow-delay="0.3s">
            <div class="service-item text-center pt-3">
              <div class="p-4">
                <i class="fa fa-3x fa-user text-warning mb-4"></i>
                <h5 class="mb-3">One-on-one Live Classes</h5>
                <p class="text-dark" style="font-size: 40px"><small class="fs-3"><i class="fa fa-dollar-sign mb-2"></i></small>140</p>
                <div>
                  <p>
                    <i class="fa fa-check-circle me-1 rounded-3"></i>
                    <span>Covers 1 month</span>
                  </p>
                  <p>
                    <i class="fa fa-check-circle me-1"></i>
                    <span>8 Lessons</span>
                  </p>
                  <p>
                    <i class="fa fa-check-circle me-1"></i>
                    <span>Loads of Tasks</span>
                  </p>
                </div>
                <a class="btn btn-warning py-3 px-5 mt-2" href="">Get Started</a>
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-sm-6 wow fadeInUp" data-wow-delay="0.5s">
            <div class="service-item text-center pt-3">
              <div class="p-4">
                <i class="fa fa-3x fa-school text-warning mb-4"></i>
                <h5 class="mb-3">Video Courses Subscription</h5>
                <p class="text-dark" style="font-size: 40px"><small class="fs-3"><i class="fa fa-dollar-sign mb-2"></i></small>70</p>
                <div>
                  <p>
                    <i class="fa fa-check-circle me-1 rounded-3"></i>
                    <span>Covers 1 month</span>
                  </p>
                  <p>
                    <i class="fa fa-check-circle me-1"></i>
                    <span>8 Lessons</span>
                  </p>
                  <p>
                    <i class="fa fa-check-circle me-1"></i>
                    <span>Loads of Tasks</span>
                  </p>
                </div>
                <a class="btn btn-warning py-3 px-5 mt-2" href="">Get Started</a>
              </div>
            </div>
          </div>
        </div>

        <div class="py-4">
          <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
          <h1 class="mb-3 mt-5 text-white">Advanced</h1>
        </div>
        </div>

       <div class="row g-4">
        <div class="col-lg-4 col-sm-6 wow fadeInUp" data-wow-delay="0.1s">
          <div class="service-item text-center pt-3">
            <div class="p-4">
              <i class="fa fa-3x fa-users text-warning mb-4"></i>
              <h5 class="mb-3">Group Live Classes</h5>
              <p class="text-dark" style="font-size: 40px"><small class="fs-3"><i class="fa fa-dollar-sign mb-2"></i></small>100</p>
              <div>
                <p>
                  <i class="fa fa-check-circle me-1 rounded-3"></i>
                  <span>Covers 1 month</span>
                </p>
                <p>
                  <i class="fa fa-check-circle me-1"></i>
                  <span>8 Lessons</span>
                </p>
                <p>
                  <i class="fa fa-check-circle me-1"></i>
                  <span>Loads of Tasks</span>
                </p>
              </div>
              <a class="btn btn-warning py-3 px-5 mt-2" href="">Get Started</a>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-sm-6 wow fadeInUp" data-wow-delay="0.3s">
          <div class="service-item text-center pt-3">
            <div class="p-4">
              <i class="fa fa-3x fa-user text-warning mb-4"></i>
              <h5 class="mb-3">One-on-one Live Classes</h5>
              <p class="text-dark" style="font-size: 40px"><small class="fs-3"><i class="fa fa-dollar-sign mb-2"></i></small>150</p>
              <div>
                <p>
                  <i class="fa fa-check-circle me-1 rounded-3"></i>
                  <span>Covers 1 month</span>
                </p>
                <p>
                  <i class="fa fa-check-circle me-1"></i>
                  <span>8 Lessons</span>
                </p>
                <p>
                  <i class="fa fa-check-circle me-1"></i>
                  <span>Loads of Tasks</span>
                </p>
              </div>
              <a class="btn btn-warning py-3 px-5 mt-2" href="">Get Started</a>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-sm-6 wow fadeInUp" data-wow-delay="0.5s">
          <div class="service-item text-center pt-3">
            <div class="p-4">
              <i class="fa fa-3x fa-school text-warning mb-4"></i>
              <h5 class="mb-3">Video Courses Subscription</h5>
              <p class="text-dark" style="font-size: 40px"><small class="fs-3"><i class="fa fa-dollar-sign mb-2"></i></small>80</p>
              <div>
                <p>
                  <i class="fa fa-check-circle me-1 rounded-3"></i>
                  <span>Covers 1 month</span>
                </p>
                <p>
                  <i class="fa fa-check-circle me-1"></i>
                  <span>8 Lessons</span>
                </p>
                <p>
                  <i class="fa fa-check-circle me-1"></i>
                  <span>Loads of Tasks</span>
                </p>
              </div>
              <a class="btn btn-warning py-3 px-5 mt-2" href="">Get Started</a>
            </div>
          </div>
        </div>
      </div>

        </div>
      </div>
    </div>
      <!-- Pricing End -->

    <!-- Team Start -->
    <div class="container-xxl py-5">
        <div class="container">
          <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
            <h6 class="section-title bg-white text-center text-warning px-3">
              Instructors
            </h6>
            <h1 class="mb-5">Expert Instructors</h1>
          </div>
          <div class="row g-4">
            <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
              <div class="team-item bg-light">
                <div class="overflow-hidden">
                  <img class="img-fluid" src="assets/img/team-1.jpg" alt="" />
                </div>
                <div
                  class="position-relative d-flex justify-content-center"
                  style="margin-top: -23px"
                >
                  <div class="bg-light d-flex justify-content-center pt-2 px-1">
                    <a class="btn btn-sm-square btn-warning mx-1" href=""
                      ><i class="fab fa-facebook-f"></i
                    ></a>
                    <a class="btn btn-sm-square btn-warning mx-1" href=""
                      ><i class="fab fa-twitter"></i
                    ></a>
                    <a class="btn btn-sm-square btn-warning mx-1" href=""
                      ><i class="fab fa-instagram"></i
                    ></a>
                  </div>
                </div>
                <div class="text-center p-4">
                  <h5 class="mb-0">Instructor Name</h5>
                  <small>Designation</small>
                </div>
              </div>
            </div>
            <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
              <div class="team-item bg-light">
                <div class="overflow-hidden">
                  <img class="img-fluid" src="assets/img/team-2.jpg" alt="" />
                </div>
                <div
                  class="position-relative d-flex justify-content-center"
                  style="margin-top: -23px"
                >
                  <div class="bg-light d-flex justify-content-center pt-2 px-1">
                    <a class="btn btn-sm-square btn-warning mx-1" href=""
                      ><i class="fab fa-facebook-f"></i
                    ></a>
                    <a class="btn btn-sm-square btn-warning mx-1" href=""
                      ><i class="fab fa-twitter"></i
                    ></a>
                    <a class="btn btn-sm-square btn-warning mx-1" href=""
                      ><i class="fab fa-instagram"></i
                    ></a>
                  </div>
                </div>
                <div class="text-center p-4">
                  <h5 class="mb-0">Instructor Name</h5>
                  <small>Designation</small>
                </div>
              </div>
            </div>
            <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
              <div class="team-item bg-light">
                <div class="overflow-hidden">
                  <img class="img-fluid" src="assets/img/team-3.jpg" alt="" />
                </div>
                <div
                  class="position-relative d-flex justify-content-center"
                  style="margin-top: -23px"
                >
                  <div class="bg-light d-flex justify-content-center pt-2 px-1">
                    <a class="btn btn-sm-square btn-warning mx-1" href=""
                      ><i class="fab fa-facebook-f"></i
                    ></a>
                    <a class="btn btn-sm-square btn-warning mx-1" href=""
                      ><i class="fab fa-twitter"></i
                    ></a>
                    <a class="btn btn-sm-square btn-warning mx-1" href=""
                      ><i class="fab fa-instagram"></i
                    ></a>
                  </div>
                </div>
                <div class="text-center p-4">
                  <h5 class="mb-0">Instructor Name</h5>
                  <small>Designation</small>
                </div>
              </div>
            </div>
            <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.7s">
              <div class="team-item bg-light">
                <div class="overflow-hidden">
                  <img class="img-fluid" src="assets/img/team-4.jpg" alt="" />
                </div>
                <div
                  class="position-relative d-flex justify-content-center"
                  style="margin-top: -23px"
                >
                  <div class="bg-light d-flex justify-content-center pt-2 px-1">
                    <a class="btn btn-sm-square btn-warning mx-1" href=""
                      ><i class="fab fa-facebook-f"></i
                    ></a>
                    <a class="btn btn-sm-square btn-warning mx-1" href=""
                      ><i class="fab fa-twitter"></i
                    ></a>
                    <a class="btn btn-sm-square btn-warning mx-1" href=""
                      ><i class="fab fa-instagram"></i
                    ></a>
                  </div>
                </div>
                <div class="text-center p-4">
                  <h5 class="mb-0">Instructor Name</h5>
                  <small>Designation</small>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- Team End -->
  
        
<?php
  include "layouts/footer.php";
    ?>