
<?php
  include "layouts/formhead.php";
    ?>

<body class="homepage">

<?php
  include "layouts/navbar.php";
    ?>

    <!-- Header Start -->
    <div class="container-fluid bg-dark py-5 mb-5 page-header">
        <div class="container py-5">
            <div class="row justify-content-center">
                <div class="col-lg-10 text-center">
                    <h1 class="display-3 text-white animated slideInDown">Get a class started</h1>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb justify-content-center">
                            <li class="breadcrumb-item"><a class="text-white" href="#">Home</a></li>
\                            <li class="breadcrumb-item text-white active" aria-current="page">Start Class</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>
    <!-- Header End -->


    <!-- Get Tutor Start -->
    <section>
    <div class="container-xxl py-5">
        <div class="container">

            <?php if(isset($_GET['error'])){?>
                <div class="alert alert-danger">
                	<strong>Error! <?php echo $_GET['error'] ?></strong>
                </div>
                <?php } if(isset($_GET['success'])){ ?>
    			<div class="alert alert-success">
    				<strong>SUCCESS ! <?php echo $_GET['success']; ?></strong>
    			</div>
            <?php } ?>

          <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
            <h6 class="section-title bg-white text-center text-warning px-3">
              Start a Class
            </h6>
            <h1>Schedule your online class</h1>
            <h3 class="mb-2">Follow these 4 steps to start a class right away! </h3>
          </div>
          <div>
<p>
<strong>Step 1:</strong> Fill the Registration form below.
<br><strong>Step 2:</strong> Speak with our admin team to clearly explain the learning goals and class schedules.<a href="https://wa.me/+2348101963400" target="_blank">(CLICK HERE TO START)</a>
<br><strong>Step 3:</strong> View class schedule recommendations and invoice.
<br><strong>Step 4:</strong> Make full upfront payment of tuition before class begins.
</p>
          </div>
        </div>
    </div>
    <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
    <h1 class="mb-4">Registration Form</h1>
    </div>
    <div class="form-style-5">
        <form action="apply" method="post">
            <fieldset>
                <legend><span class="number">1</span>Basic Info</legend>
                    <div class="row">
                        <div class="col-md-6">
                            <input type="text" name="firstname" placeholder="Your First Name *">
                        </div>
                        <div class="col-md-6">
                            <input type="text" name="lastname" placeholder="Your Last Name *">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <input type="email" name="email" placeholder="Your Email *">
                        </div>
                        <div class="col-md-6">
                            <input type="number" name="phone" placeholder="Your Phone Number*">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <input type="text" name="state" placeholder="State of Residence*">
                        </div>
                        <div class="col-md-6">
                            <input type="text" name="location" placeholder="Location*">
                        </div>
                    </div>
                </select>      
            </fieldset>
            <fieldset>
                <legend><span class="number">2</span> Class Info</legend>
                    <div class="row">
                        <div class="col-md-6">
                            <select name="classtype" id="">
                                <option value="" selected disabled hidden>Choose Class Type. . .</option>
                                <option value="online">Online Class</option>
                                <option value="video">Video Courses</option>
                            </select>
                        </div>
                        <div class="col-md-6">
                            <input type="text" name="learnerclass" placeholder="Current class of learner*">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <label for="">Kindly input the subjects and areas of concern*</label>
                            <textarea name="subjects" placeholder=""></textarea>
                        </div>
                        <div class="col-md-6">
                            <label for="lessondate">Lesson should start on...*</label>
                            <input type="date" name="lessondate" placeholder="Learner's date of birth*">
                        </div>
                    </div>
            </fieldset>
            <input type="submit" name="submit" value="Register" />
        </form>
    </div>
</section>
    <!-- Get Tutor End -->
<?php
  include "layouts/footer.php";
    ?>