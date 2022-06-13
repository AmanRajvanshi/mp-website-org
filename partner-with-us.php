<?php
session_start();
require 'connection.php';
$sqlcat = "SELECT id,category_name FROM categories where parent_id = '0'";
$result = mysqli_query($conn, $sqlcat);
if (isset($_POST['submit'])) {
  $name = $_POST['name'];
  $email = $_POST['email'];
  $contact = $_POST['contact'];
  $city = $_POST['city'];
  $categorie = $_POST['categorie'];
  $sql = "INSERT INTO partner_with_us (`name`, email, contact, `city`, `register_for`) VALUES ('$name', '$email', '$contact', '$city', '$categorie')";
  if (mysqli_query($conn, $sql)) {
    $_SESSION['success'] = "Your message has been sent successfully!";
  } else {
    $_SESSION['error'] = "Something went wrong!";
  }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <?php include 'meta_tags.php'; ?>
  <title>Market Pluss - Market In Your Hands</title>
  <style>
    .join-us {
      padding-top: 50px;
      padding-bottom: 40px;
      margin: 30px 0;
      background-color: #F7F7F7;
      max-width: 100%;
    }

    .join-us-col {
      display: grid;
      place-items: center;
      padding: 10px;
    }
  </style>
</head>

<body>
  <!-- PRELOADER SPINNER
      ============================================= -->
  <div class="preloader">
    <div class="preloader__content">
      <div class="preloader__first"></div>
      <div class="preloader__second"></div>
      <div class="preloader__third"></div>
    </div>
  </div>
  <!-- PAGE CONTENT
      ============================================= -->
  <div id="page" class="page">
    <!-- HEADER
        ============================================= -->
    <?php include 'header.php'; ?>
    <!-- END HEADER -->
    <!-- PAGE HERO
        ============================================= -->
    <div id="about-page">
      <div class="container">
        <div class="row">
          <!-- <img src="img/fs-bg-2.png" alt="" class="first-screen__bg-2"> -->
          <div class="col-lg-12">
            <div class="hero-txt  white-color">
              <!-- Title -->
              <h1 class="h2-md">Become A Market Pluss Partner</h1>
              <!-- Text -->
              <p class="p-xl" style="color:#5d5d5d">As a partner, Market Pluss will support you in every feasible way, Join us now and be part of the amazing market.
              </p>
            </div>
          </div>
        </div>
        <!-- End row -->
        <!-- GEOMETRIC OVERLAY -->
        <div class="bg_fixed geometric_overlay"></div>
      </div>
      <!-- End container -->
    </div>
    <!-- END PAGE HERO -->
    <div class="container join-us">
      <div class="row">
        <div class="col-md-2 join-us-col">
          <img src="img/svg/user.svg" style="width:70%;">
          <h5 style="margin:30px 0 0 0">User Friendly</h5>
        </div>
        <div class="col-md-2 join-us-col">
          <img src="img/svg/offers.svg" style="width:70%;">
          <h5 style="margin:30px 0 0 0">Exciting Offers</h5>
        </div>
        <div class="col-md-2 join-us-col">
          <img src="img/svg/categories.svg" style="width:70%;">
          <h5 style="margin:30px 0 0 0">Unlimited Categories</h5>
        </div>
        <div class="col-md-2 join-us-col">
          <img src="img/svg/satisfaction.svg" style="width:70%;">
          <h5 style="margin:30px 0 0 0">Customer Delight</h5>
        </div>
        <div class="col-md-2 join-us-col">
          <img src="img/svg/offers.svg" style="width:70%;">
          <h5 style="margin:30px 0 0 0">Finest Deals & Offers</h5>
        </div>
        <div class="col-md-2 join-us-col">
          <img src="img/svg/alternatives.svg" style="width:70%;">
          <h5 style="margin:30px 0 0 0">Better Alternatives</h5>
        </div>
      </div>
    </div>
    <!-- ABOUT-2
        ============================================= -->
    <div id="about-2" class="wide-90 about-section division" style="padding-top:80px;">
      <div class="container">
        <!-- IMAGE BLOCK -->
        <!-- <div class="row">
          <div class="col-md-12">
            <div class="img-block mb-70">
              <img class="img-fluid" src="images/about-2-img.jpg" alt="content-image" style="border-radius:10px;">
            </div>
          </div>
        </div> -->
        <!-- TEXT BLOCK -->
        <div class="about-2-txt">
          <div class="row">
            <!-- LEFT COLUMN -->
            <div class="col-md-5">
              <div class="hero-animation-img" syle="position:relative;">
                <img class="img-fluid animation-one" src="img/hero-animation-04.svg" alt="animation image" style="transform: scaleX(-1);position:absolute;width:380px">
                <img class="img-fluid d-none d-lg-block animation-three" src="img/hero-animation-02.svg" alt="animation image" style="position:absolute;top:50px;right:20px;width:65%">
              </div>
            </div>
            <!-- END LEFT COLUMN -->
            <div class="col-md-7">
              <div class="form-holder">
                <form name="contactform" method="POST" class="contact-form">
                  <div class="row">
                    <div id="input-name" class="col-md-6">
                      <h5>Your Name: </h5>
                      <input type="text" name="name" class="form-control name" required placeholder="Your Name">
                    </div>
                    <div id="input-name" class="col-md-6">
                      <h5>Your Contact Number: </h5>
                      <input type="number" name="contact" class="form-control name" required placeholder="Your Number">
                    </div>
                  </div>
                  <div class="row">
                    <div id="input-name" class="col-md-6">
                      <h5>Your Email: </h5>
                      <input type="email" name="email" class="form-control name" required placeholder="Your Email">
                    </div>
                    <div id="input-name" class="col-md-6">
                      <h5>City: <span class="text-muted" style="font-size:15px">(Currently available in Dehradun Only!)</span></h5>
                      <input type="text" name="city" class="form-control name" required placeholder="City" value="Dehradun" readonly>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-12">
                      <div id="input-subject" class="col-md-12 input-subject" style="padding:0px;">
                        <h5>Register For: </h5>
                        <select id="inlineFormCustomSelect1" name="categorie" class="custom-select subject main_select_partner_with_us">
                          <option>Register For...</option>
                          <?php
                          $i=1;
                          while($row = mysqli_fetch_assoc($result)){?>
                            <option value="<?php echo $row['id'];?>"><?php echo $row['category_name'];?></option>
                          <?php
                          $i++;
                          }
                          ?>
                        </select>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-12 mt-15 form-btn text-right">
                  <span class="text-success"><?php
                                            if (isset($_SESSION['success'])) {
                                              echo $_SESSION['success'];
                                              unset($_SESSION['success']);
                                            }
                                            ?></span>
                <span class="text-danger"><?php
                                          if (isset($_SESSION['error'])) {
                                            echo $_SESSION['error'];
                                            unset($_SESSION['error']);
                                          }
                                          ?></span>
                    <button type="submit" name="submit" class="btn btn-skyblue tra-skyblue-hover submit">Submit Request</button>
                  </div>
                  <div class="col-md-12 contact-form-msg">
                    <span class="loading"></span>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>
        <!-- END TEXT BLOCK -->
      </div>
      <!-- End container -->
    </div>
    <!-- END ABOUT-2 -->
    <!-- FOOTER-2
        ============================================= -->
    <?php include 'footer.php'; ?>
    <!-- END FOOTER-2 -->
  </div>
  <!-- END PAGE CONTENT -->
  <!-- EXTERNAL SCRIPTS
      ============================================= -->
  <script src="js/jquery-3.5.1.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/modernizr.custom.js"></script>
  <script src="js/jquery.easing.js"></script>
  <script src="js/jquery.appear.js"></script>
  <script src="js/jquery.scrollto.js"></script>
  <script src="js/menu.js"></script>
  <script src="js/jquery.flexslider.js"></script>
  <script src="js/owl.carousel.min.js"></script>
  <script src="js/jquery.magnific-popup.min.js"></script>
  <script src="js/jquery.validate.min.js"></script>
  <script src="js/jquery.ajaxchimp.min.js"></script>
  <script src="js/wow.js"></script>
  <script src="js/preloader.js"></script>
  <!-- Custom Script -->
  <script src="js/custom.js"></script>
</body>

</html>