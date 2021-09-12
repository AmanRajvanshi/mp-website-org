<!DOCTYPE html>
<html lang="en">

<head>
  <?php include 'meta_tags.php'; ?>
  <title>Market Pluss - Market In Your Hands</title>
  <style>
    .join-us {
      margin: 30px auto;
      padding-top: 10px;
      padding-bottom: 10px;
      background-color: #F7F7F7;
    }

    .join-us-col {
      display: grid;
      place-items: center;
      padding: 10px;
    }

    .svg {
      width: 70%;
      opacity: 0.9;
      transition: transform .5s;
    }

    .svg:hover {
      -ms-transform: scale(1.07);
      -webkit-transform: scale(1.07);
      transform: scale(1.07);
    }

    @media only screen and (max-width:600px) {
      .svg {
        width: 50%;
      }
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
    <section class="join-us">
      <div class="container join-us">
        <div class="row">
          <div class="col-md-2 join-us-col">
            <img class="svg" src="img/svg/user.svg" style="width:70%;opacity:0.9">
            <h6 style="margin:30px 0 0 0">User Friendly</h6>
          </div>
          <div class="col-md-2 join-us-col">
            <img class="svg" src="img/svg/choices.svg" style="width:70%;opacity:0.9">
            <h6 style="margin:30px 0 0 0">Exciting Choices</h6>
          </div>
          <div class="col-md-2 join-us-col">
            <img class="svg" src="img/svg/categories.svg" style="width:70%;opacity:0.9">
            <h6 style="margin:30px 0 0 0">Unlimited Categories</h6>
          </div>
          <div class="col-md-2 join-us-col">
            <img class="svg" src="img/svg/satisfaction.svg" style="width:70%;opacity:0.9">
            <h6 style="margin:30px 0 0 0">Customer Delight</h6>
          </div>
          <div class="col-md-2 join-us-col">
            <img class="svg" src="img/svg/offers.svg" style="width:70%;opacity:0.9">
            <h6 style="margin:30px 0 0 0">Finest Deals & Offers</h6>
          </div>
          <div class="col-md-2 join-us-col">
            <img class="svg" src="img/svg/alternatives.svg" style="width:70%;opacity:0.9">
            <h6 style="margin:30px 0 0 0">Better Alternatives</h6>
          </div>
        </div>
      </div>
    </section>
    <!-- ABOUT-2
        ============================================= -->
    <div id="about-2" class="wide-90 about-section division" style="padding-top:80px;">
      <div class="container">
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
                <form name="contactform" class="contact-form">
                  <div class="row">
                    <div id="input-name" class="col-md-6">
                      <h5>Your Name: </h5>
                      <input type="text" name="name" class="form-control name" required placeholder="Your Name">
                    </div>
                    <div id="input-name" class="col-md-6">
                      <h5>Your Contact Number: </h5>
                      <input type="number" name="name" class="form-control name" required placeholder="Your Number">
                    </div>
                  </div>
                  <div class="row">
                    <div id="input-name" class="col-md-6">
                      <h5>Your Email: </h5>
                      <input type="email" name="name" class="form-control name" required placeholder="Your Email">
                    </div>
                    <div id="input-name" class="col-md-6">
                      <h5>City: </h5>
                      <input type="text" name="name" class="form-control name" required placeholder="City">
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-12">
                      <div id="input-subject" class="col-md-12 input-subject" style="padding:0px;">
                        <h5>Register For: </h5>
                        <select id="inlineFormCustomSelect1" name="Subject" class="custom-select subject">
                          <option>Register For...</option>
                          <option>Registering/Authorising</option>
                          <option>Using Application</option>
                          <option>Troubleshooting</option>
                          <option>Backup/Restore</option>
                          <option>Other</option>
                        </select>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-12 mt-15 form-btn text-right">
                    <button type="submit" class="btn btn-skyblue tra-skyblue-hover submit">Submit Request</button>
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