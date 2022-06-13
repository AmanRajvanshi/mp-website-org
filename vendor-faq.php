<!DOCTYPE html>
<html lang="en">

<head>
  <?php include 'meta_tags.php'; ?>
  <title>Market Pluss - Market In Your Hands</title>
  <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous"> -->
  <style>
    .accordion-item {
      border: 0px;
    }

    .accordion-body {
      padding: 1rem 1.25rem;
    }

    .accordion-button {
      border: 1px solid #e5e5e5;
      border-radius: 10px !important;
      margin: 10px 0;
      width: 100%;
      text-align: left;
      font-size: 15px;
      padding: 10px;
      position: relative;
      display: flex;
      padding: 1rem 1.25rem;
      font-size: 1rem;
      color: #212529;
      text-align: left;
      background-color: #fff;
      overflow-anchor: none;
      transition: color .15s ease-in-out, background-color .15s ease-in-out, border-color .15s ease-in-out, box-shadow .15s ease-in-out, border-radius .15s ease;
    }

    .accordion-button::after {
      flex-shrink: 0;
      width: 1.25rem;
      height: 1.25rem;
      margin-left: auto;
      content: "";
      background-image: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 16 16' fill='%23212529'%3e%3cpath fill-rule='evenodd' d='M1.646 4.646a.5.5 0 0 1 .708 0L8 10.293l5.646-5.647a.5.5 0 0 1 .708.708l-6 6a.5.5 0 0 1-.708 0l-6-6a.5.5 0 0 1 0-.708z'/%3e%3c/svg%3e");
      background-repeat: no-repeat;
      background-size: 1.25rem;
      transition: transform .2s ease-in-out;
    }

    .accordion-button:not(.collapsed)::after {
      background-image: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 16 16' fill='%230c63e4'%3e%3cpath fill-rule='evenodd' d='M1.646 4.646a.5.5 0 0 1 .708 0L8 10.293l5.646-5.647a.5.5 0 0 1 .708.708l-6 6a.5.5 0 0 1-.708 0l-6-6a.5.5 0 0 1 0-.708z'/%3e%3c/svg%3e");
      transform: rotate(-180deg);
    }

    .accordion-button:hover {
      z-index: 2;
    }

    .accordion-button:not(.collapsed) {
      color: #000;
      background-color: #e5e5e5;
      box-shadow: inset 0 -1px 0 rgba(0, 0, 0, .125);
    }

    .accordion-button:focus {
      z-index: 3;
      border-color: #e5e5e5;
      outline: 0;
      /* box-shadow: 0 0 0 .25rem #000; */
    }
  </style>
</head>

<body>
  <!-- PRELOADER SPINNER  ============================================= -->
  <div class="preloader">
    <div class="preloader__content">
      <div class="preloader__first"></div>
      <div class="preloader__second"></div>
      <div class="preloader__third"></div>
    </div>
  </div><!-- PAGE CONTENT  ============================================= -->
  <div id="page" class="page">
    <!-- HEADER    ============================================= -->
    <?php include 'header.php'; ?>
    <!-- END HEADER -->
    <!-- PAGE HERO    ============================================= -->
    <div id="about-page">
      <div class="container">
        <div class="row">
          <!-- <img src="img/fs-bg-2.png" alt="" class="first-screen__bg-2"> -->
          <div class="col-lg-12">
            <div class="hero-txt  white-color">
              <!-- Title -->
              <h1 class="h2-md">frequently Bugged about</h1> <!-- Text -->
              <!-- <p class="p-xl" style="color:#5d5d5d">Aliquam a augue suscipit, luctus neque purus ipsum neque at dolor primis libero            tempus, blandit and cursus varius magna          </p> -->
            </div>
          </div>
        </div> <!-- End row -->
      </div> <!-- GEOMETRIC OVERLAY -->
      <div class="bg_fixed geometric_overlay"></div> <!-- End container -->
    </div> <!-- END PAGE HERO -->
    <!-- FAQs-2 QUESTIONS -->
    <div class="faqs-2-questions pc-15 faq-container">
      <div class="row">
        <div class="accordion accordion-flush" id="accordionFlushExample" style="width:100%">
          <div class="accordion-item">
            <h2 class="accordion-header" id="flush-headingOne">
              <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne">
                How to create an offer?
              </button>
            </h2>
            <div id="flush-collapseOne" class="accordion-collapse collapse" aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample">
              <div class="accordion-body">
                You can create an offer by going to the offer page in the vendor application and adding the offer.
              </div>
            </div>
          </div>
          <div class="accordion-item">
            <h2 class="accordion-header" id="flush-headingTwo">
              <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseTwo" aria-expanded="false" aria-controls="flush-collapseTwo">
                How to verify myself?
              </button>
            </h2>
            <div id="flush-collapseTwo" class="accordion-collapse collapse" aria-labelledby="flush-headingTwo" data-bs-parent="#accordionFlushExample">
              <div class="accordion-body">
                You will be verified after your account details has been approved by the administration. It takes around 12-24 hours.
              </div>
            </div>
          </div>
          <div class="accordion-item">
            <h2 class="accordion-header" id="flush-headingTwo">
              <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseThree" aria-expanded="false" aria-controls="flush-collapseThree">
                How to add my shop?
              </button>
            </h2>
            <div id="flush-collapseThree" class="accordion-collapse collapse" aria-labelledby="flush-headingTwo" data-bs-parent="#accordionFlushExample">
              <div class="accordion-body">
              You can directly add your shop bt=y signing up at the Market Pluss Vendor Application. 
              </div>
            </div>
          </div>
          <div class="accordion-item">
            <h2 class="accordion-header" id="flush-headingTwo">
              <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseNine" aria-expanded="false" aria-controls="flush-collapseNine">
                Are the Users genuine?
              </button>
            </h2>
            <div id="flush-collapseNine" class="accordion-collapse collapse" aria-labelledby="flush-headingTwo" data-bs-parent="#accordionFlushExample">
              <div class="accordion-body">
                Yes, all the users are genuine and verified.
              </div>
            </div>
          </div>
          <div class="accordion-item">
            <h2 class="accordion-header" id="flush-headingTwo">
              <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseFour" aria-expanded="false" aria-controls="flush-collapseFour">
                Do I benefit from these offers?
              </button>
            </h2>
            <div id="flush-collapseFour" class="accordion-collapse collapse" aria-labelledby="flush-headingTwo" data-bs-parent="#accordionFlushExample">
              <div class="accordion-body">
                Yes, you can benefit from these offers as you will get new users.
              </div>
            </div>
          </div>
          <div class="accordion-item">
            <h2 class="accordion-header" id="flush-headingTwo">
              <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseFive" aria-expanded="false" aria-controls="flush-collapseFive">
                Do these discount vary from your side
              </button>
            </h2>
            <div id="flush-collapseFive" class="accordion-collapse collapse" aria-labelledby="flush-headingTwo" data-bs-parent="#accordionFlushExample">
              <div class="accordion-body">
                No, only those discounts are visible that the vendor provides.
              </div>
            </div>
          </div>
        </div>
      </div>
    </div> <!-- End row -->
  </div><!-- END FAQs-2 QUESTIONS -->
  <!-- MORE QUESTIONS BUTTON -->
  <div class="row">
    <div class="col-md-12">
      <div class="more-questions text-center mt-40 mb-40">
        <h5 class="h5-sm"><span class="flaticon-check"></span> Have more questions? <a href="contact-us.php" class="skyblue-color">Ask your question here</a> </h5>
      </div>
    </div>
  </div><!-- FOOTER-2    ============================================= --><?php include 'footer.php'; ?>
  <!-- END FOOTER-2 -->
  </div><!-- END PAGE CONTENT -->
  <!-- EXTERNAL SCRIPTS  ============================================= -->
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
  <script src="js/preloader.js"></script><!-- Custom Script -->
  <script src="js/custom.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

</body>

</html>