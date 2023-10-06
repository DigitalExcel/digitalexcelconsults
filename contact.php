<!DOCTYPE html>

<!--
 // WEBSITE: https://themefisher.com
 // TWITTER: https://twitter.com/themefisher
 // FACEBOOK: https://www.facebook.com/themefisher
 // GITHUB: https://github.com/themefisher/
-->

<html class="no-js">

<head>
  <!-- Basic Page Needs
        ================================================== -->
  <meta charset="utf-8">
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
  <link rel="icon" href="images/favicon/favicon.ico">
  <title>Digital Excel Consults</title>
  <meta name="description" content="Digital Excel Consults Liberia Website">
  <meta name="keywords" content="Digital, Training, ICT, IT, Computer, Liberia">
  <meta name="author" content="">
  <!-- Mobile Specific Metas
        ================================================== -->
  <meta name="format-detection" content="telephone=no">
  <meta name="viewport" content="width=device-width, initial-scale=1">


  <!-- Template CSS Files
        ================================================== -->
  <!-- Twitter Bootstrs CSS -->
  <link rel="stylesheet" href="plugins/bootstrap/bootstrap.min.css">
  <!-- Ionicons Fonts Css -->
  <link rel="stylesheet" href="plugins/ionicons/ionicons.min.css">
  <!-- animate css -->
  <link rel="stylesheet" href="plugins/animate-css/animate.css">
  <!-- Hero area slider css-->
  <link rel="stylesheet" href="plugins/slider/slider.css">
  <!-- slick slider -->
  <link rel="stylesheet" href="plugins/slick/slick.css">
  <!-- Fancybox -->
  <link rel="stylesheet" href="plugins/facncybox/jquery.fancybox.css">
  <!-- hover -->
  <link rel="stylesheet" href="plugins/hover/hover-min.css">
  <!-- template main css file -->
  <link rel="stylesheet" href="css/style.css">
</head>

<body>

  <!--
        ==================================================
        Header Section Start
        ================================================== -->
  <?php include 'partials/header.php'; ?>
  <!-- 
        ================================================== 
            Global Page Section Start
        ================================================== -->
  <section class="global-page-header">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="block">
            <h2>Contact</h2>
            <ol class="breadcrumb list-inline text-center">
              <li class="list-inline-item">
                <a href="index.php">
                  <i class="ion-ios-home"></i>
                  Home &nbsp; &nbsp;/
                </a>
              </li>
              <li class="active list-inline-item">Contact</li>
            </ol>
          </div>
        </div>
      </div>
    </div>
  </section>


  <!-- 
================================================== 
    Contact Section Start
================================================== -->
  <section id="contact-section">
    <div class="container">
      <div class="row">
        <div class="col-md-6 mb-5 mb-md-0">
          <div class="block">
            <h2 class="subtitle wow fadeInDown" data-wow-duration="500ms" data-wow-delay=".3s">Contact Us</h2>
            <p class="subtitle-des wow fadeInDown" data-wow-duration="500ms" data-wow-delay=".5s">
              We value your inquiries and aim to respond promptly to all your requests. Feel free to reach out to us
              using the contact form below, or use the provided contact information to connect with our team directly.
            </p>
            <div class="contact-form">
              <form id="contact-form" method="POST" action="forms/send_mail.php" role="form" class="php-email-form">

                <div class="form-group wow fadeInDown" data-wow-duration="500ms" data-wow-delay=".6s">
                  <input type="text" placeholder="Your Name" class="form-control" name="name" id="name">
                </div>

                <div class="form-group wow fadeInDown" data-wow-duration="500ms" data-wow-delay=".8s">
                  <input type="email" placeholder="Your Email" class="form-control" name="email" id="email">
                </div>
                <div class="form-group wow fadeInDown" data-wow-duration="500ms" data-wow-delay=".8s">
                  <input type="text" placeholder="Your Contact Number" class="form-control" name="contact" id="contact">
                </div>

                <div class="form-group wow fadeInDown" data-wow-duration="500ms" data-wow-delay="1s">
                  <input type="text" placeholder="Subject" class="form-control" name="subject" id="subject">
                </div>

                <div class="form-group wow fadeInDown" data-wow-duration="500ms" data-wow-delay="1.2s">
                  <textarea rows="6" placeholder="Message" class="form-control" name="message" id="message"></textarea>
                </div>
                <div class="my-3">
                  <div class="loading">Loading</div>
                  <div class="error-message"></div>
                  <div class="sent-message">Your message has been sent. Thank you!</div>
                </div>

                <div id="submit" class="wow fadeInDown" data-wow-duration="500ms" data-wow-delay="1.4s">
                  <button type="submit" id="contact-submit" class="btn btn-default btn-send hvr-bounce-to-right"
                    value="Send Message">Send Message</button>
                </div>
              </form>
            </div>
          </div>
        </div>
        <div class="col-md-6">
          <div class="map-area">
            <h2 class="subtitle  wow fadeInDown" data-wow-duration="500ms" data-wow-delay=".3s">Find Us</h2>
            <p class="subtitle-des wow fadeInDown" data-wow-duration="500ms" data-wow-delay=".5s">
              We're strategically located to serve our clients efficiently. We look forward to meeting you and working
              together to address your technology needs. We are right here!

            </p>
            <div class="map">
              <iframe
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3965.6389248951346!2d-10.8088423!3d6.3110753!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xf09f7f873437ead%3A0x53a77e2b6cc3f0a1!2sAfrican%20trading%20company!5e0!3m2!1sen!2s!4v1694025657725!5m2!1sen!2s"
                width="100%" height="400" frameborder="0" style="border:0" allowfullscreen></iframe>

            </div>
          </div>
        </div>
      </div>





      <div class="row address-details">
        <div class="col-lg-4 col-sm-6">
          <div class="address wow fadeInLeft" data-wow-duration="500ms" data-wow-delay=".3s">
            <i class="ion-ios-location-outline"></i>
            <h5>African Trading Company Building, Second Floor,<br />
              Randall Street, <br />
              Opposite Harbel Supermarket Corporation<br />
            </h5>
          </div>
        </div>

        <div class="col-lg-4 col-sm-6">
          <div class="email wow fadeInLeft" data-wow-duration="500ms" data-wow-delay=".7s">
            <i class="ion-ios-email-outline"></i>
            <h5>info@digitalexcelconsults.com</h5><br /><br />
          </div>
        </div>
        <div class="col-lg-4 col-sm-6">
          <div class="phone wow fadeInLeft" data-wow-duration="500ms" data-wow-delay=".9s">
            <i class="ion-ios-telephone-outline"></i>
            <h5>(+231) 0770176168 <br />(+231) 0775504780<br />(+231) 0555876216</h5>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!--
            ==================================================
            Call To Action Section Start
            ================================================== -->
  <?php include 'partials/call_to_action.php'; ?>

  <!--
            ==================================================
            Footer Section Start
            ================================================== -->
  <script src="forms/php-email-form/validate.js"></script>
  <?php include 'partials/footer.php'; ?>