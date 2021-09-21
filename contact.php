<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Basic Page Needs
================================================== -->
    <meta charset="utf-8" />
    <title>KGF Construction</title>

    <!-- Mobile Specific Metas
================================================== -->
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="description" content="Plan better build better with our honesty & dedication." />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1.0, maximum-scale=5.0"
    />

    <!-- Favicon
================================================== -->
    <link rel="icon" type="image/png" href="images/favicon.jpeg" />

    <!-- CSS
================================================== -->
    <!-- Bootstrap -->
    <link rel="stylesheet" href="plugins/bootstrap/bootstrap.min.css" />
    <!-- FontAwesome -->
    <link rel="stylesheet" href="plugins/fontawesome/css/all.min.css" />
    <!-- Animation -->
    <link rel="stylesheet" href="plugins/animate-css/animate.css" />
    <!-- slick Carousel -->
    <link rel="stylesheet" href="plugins/slick/slick.css" />
    <link rel="stylesheet" href="plugins/slick/slick-theme.css" />
    <!-- Colorbox -->
    <link rel="stylesheet" href="plugins/colorbox/colorbox.css" />
    <!-- Template styles-->
    <link rel="stylesheet" href="css/style.css" />
  </head>
  <body>
    <div class="body-inner">
      <!-- Header start -->
      <?php include 'header.php';?>
      <!--/ Header end -->
      <div
        id="banner-area"
        class="banner-area"
        style="background-image: url(images/banner/banner1.jpg)"
      >
        <div class="banner-text">
          <div class="container">
            <div class="row">
              <div class="col-lg-12">
                <div class="banner-heading">
                  <h1 class="banner-title">Contact</h1>
                  <nav aria-label="breadcrumb">
                    <ol class="breadcrumb justify-content-center">
                      <li class="breadcrumb-item"><a href="#">Home</a></li>
                      <li class="breadcrumb-item"><a href="#">Company</a></li>
                      <li class="breadcrumb-item active" aria-current="page">
                        Contact Us
                      </li>
                    </ol>
                  </nav>
                </div>
              </div>
              <!-- Col end -->
            </div>
            <!-- Row end -->
          </div>
          <!-- Container end -->
        </div>
        <!-- Banner text end -->
      </div>
      <!-- Banner area end -->

      <section id="main-container" class="main-container">
        <div class="container">
          <div class="row text-center">
            <div class="col-12">
              <h2 class="section-title">Reaching our Office</h2>
              <h3 class="section-sub-title">Find Our Location</h3>
            </div>
          </div>
          <!--/ Title row end -->

          <div class="row">
            <div class="col-md-4">
              <div class="ts-service-box-bg text-center h-100">
                <span class="ts-service-icon icon-round">
                  <i class="fas fa-map-marker-alt mr-0"></i>
                </span>
                <div class="ts-service-box-content">
                  <h4>Visit Our Office</h4>
                  <p>Near Navrangi School, Sipara Bypass, Patna (Bihar) 800001</p>
                </div>
              </div>
            </div>
            <!-- Col 1 end -->

            <div class="col-md-4">
              <div class="ts-service-box-bg text-center h-100">
                <span class="ts-service-icon icon-round">
                  <i class="fa fa-envelope mr-0"></i>
                </span>
                <div class="ts-service-box-content">
                  <h4>Email Us</h4>
                  <p>kgfconstruction@gmail.com</p>
                </div>
              </div>
            </div>
            <!-- Col 2 end -->

            <div class="col-md-4">
              <div class="ts-service-box-bg text-center h-100">
                <span class="ts-service-icon icon-round">
                  <i class="fa fa-phone-square mr-0"></i>
                </span>
                <div class="ts-service-box-content">
                  <h4>Call Us</h4>
                  <p>(+91) 9905731852</p>
                </div>
              </div>
            </div>
            <!-- Col 3 end -->
          </div>
          <!-- 1st row end -->

          <div class="gap-60"></div>
          
          <div class="google-map">
            <div class="mapouter">
              <div class="gmap_canvas">
                <iframe class="gmap_iframe" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" 
                src="https://maps.google.com/maps?width=1100&amp;height=472&amp;hl=en&amp;q=Sipara Bypass, 
                  Patna&amp;t=&amp;z=14&amp;ie=UTF8&amp;iwloc=B&amp;output=embed"></iframe>
                  <a href="https://www.fnfgo.com/">FNF</a></div><style>.mapouter{position:relative;text-align:
                  right;width:1100px;height:472px;}.gmap_canvas {overflow:hidden;background:none!important;width:
                  1100px;height:472px;}.gmap_iframe {width:1100px!important;height:472px!important;}</style>
                </div>
          </div>

          <div class="gap-40"></div>

          <div class="row">
            <div class="col-md-12">
              <h3 class="column-title">We love to hear</h3>
              <!-- contact form works with formspree.io  -->
              <!-- contact form activation doc: https://docs.themefisher.com/constra/contact-form/ -->
              <form id="contact-form" action="#" method="post" role="form">
                <div class="error-container"></div>
                <div class="row">
                  <div class="col-md-4">
                    <div class="form-group">
                      <label>Name</label>
                      <input
                        class="form-control form-control-name"
                        name="name"
                        id="name"
                        placeholder=""
                        type="text"
                        required
                      />
                    </div>
                  </div>
                  <div class="col-md-4">
                    <div class="form-group">
                      <label>Email</label>
                      <input
                        class="form-control form-control-email"
                        name="email"
                        id="email"
                        placeholder=""
                        type="email"
                        required
                      />
                    </div>
                  </div>
                  <div class="col-md-4">
                    <div class="form-group">
                      <label>Subject</label>
                      <input
                        class="form-control form-control-subject"
                        name="subject"
                        id="subject"
                        placeholder=""
                        required
                      />
                    </div>
                  </div>
                </div>
                <div class="form-group">
                  <label>Message</label>
                  <textarea
                    class="form-control form-control-message"
                    name="message"
                    id="message"
                    placeholder=""
                    rows="10"
                    required
                  ></textarea>
                </div>
                <div class="text-right">
                  <br />
                  <button class="btn btn-primary solid blank" type="submit">
                    Send Message
                  </button>
                </div>
              </form>
            </div>
          </div>
          <!-- Content row -->
        </div>
        <!-- Conatiner end -->
      </section>
      <!-- Main container end -->

      <!-- Footer start -->
      <?php include 'footer.php';?>
      <!-- Footer end -->

      <!-- Javascript Files
  ================================================== -->

      <!-- initialize jQuery Library -->
      <script src="plugins/jQuery/jquery.min.js"></script>
      <!-- Bootstrap jQuery -->
      <script src="plugins/bootstrap/bootstrap.min.js" defer></script>
      <!-- Slick Carousel -->
      <script src="plugins/slick/slick.min.js"></script>
      <script src="plugins/slick/slick-animation.min.js"></script>
      <!-- Color box -->
      <script src="plugins/colorbox/jquery.colorbox.js"></script>
      <!-- shuffle -->
      <script src="plugins/shuffle/shuffle.min.js" defer></script>

      <!-- Google Map API Key-->
      <script
        src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCcABaamniA6OL5YvYSpB3pFMNrXwXnLwU"
        defer
      ></script>
      <!-- Google Map Plugin-->
      <script src="plugins/google-map/map.js" defer></script>

      <!-- Template custom -->
      <script src="js/script.js"></script>
    </div>
    <!-- Body inner end -->
  </body>
</html>
