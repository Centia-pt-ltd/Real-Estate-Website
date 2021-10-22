<?php include 'header.php' ?>
    <!-- *****************Section 2******************* -->
 <!--  >>>>>>>>>>>>>>>>>>>>>>>>>> Popup >>>>>>>>>>>>>>>>>>>>>>>>>>>>>>> -->
 <div class="modal fade" id="myModal">
    <div class="modal-dialog modal-lg modal-dialog-centered">
      <div class="modal-content">
        <!-- Modal Header -->
        <div class="modal-header">
        <div class="popup-logo">
        <img src="images/logo-logo.png" alt="Logo" class="mapush-popup-logo">
        </div>
          <!-- <h4 class="modal-title">Modal Heading</h4> -->
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        <!-- Modal body -->
        <div class="modal-body">
     <div class="container-fluid">
       <div class="row">
         <div class="col-lg-6 col-12">
         <form action="smtpmail.php" method="POST" class="query-popup">
            <input type="text" placeholder="Full Name" name="txtName" class="querypopup-field" required>
            <input type="text" placeholder="Contact" name="txtPhone" maxlength="10" pattern="[0-9]{10}" class="querypopup-field"
              required>
            <input type="email" placeholder="Email" name="txtEmail" class="querypopup-field" required>
            <textarea name="txtMessage" id="" cols="30" rows="3" class="querypopup-field" placeholder="Query"
              required></textarea>
            <div class="popup-btn">
              <input type="submit" class="query-submit-btn">
            </div>
      </form>
         </div>
         <div class="col-lg-6 col-12">
           <div class="banner-popup">
           <div id="demo" class="carousel slide" data-ride="carousel">  
  <!-- The slideshow -->
  <div class="carousel-inner">
    <div class="carousel-item active">
    <img src="images/post/Post-2.jpg" alt="Prestige Bougainvillea">
    </div>
    <div class="carousel-item">
    <img src="images/post/Post-3.jpg" alt="Prestige Bougainvillea">
    </div>
    <div class="carousel-item">
    <img src="images/post/Post-4.jpg" alt="Prestige Bougainvillea">
    </div>
    <div class="carousel-item">
      <img src="images/post/Post-5.jpg" alt="Prestige Bougainvillea">
    </div>
    <div class="carousel-item">
      <img src="images/post/Post-7.png" alt="Prestige Bougainvillea">
    </div>
  </div>
</div>
             
           </div>
         </div>
       </div>
     </div>
        </div> 
      </div>
    </div>
  </div>
 <!--  >>>>>>>>>>>>>>>>>>>>>>>>>> End Popup >>>>>>>>>>>>>>>>>>>>>>>>>>>>>>> -->
<!-- scroll down -->
<div class="scrolldown-anim">
        <div class="chevron"></div>
        <div class="chevron"></div>
        <div class="chevron"></div>
        <!-- <span class="text">Scroll down</span> -->
      </div>
<!-- finish scroll down -->
    <div class="slider-container">
        <div class="slider-control left inactive"></div>
        <div class="slider-control right"></div>
        <ul class="slider-pagi"></ul>
        <div class="slider">
          <div class="slide slide-0 active">
            <div class="slide__bg">
                <!-- <video autoplay muted loop id="myVideo" class="video-banner">
                    <source src="videos/1.mp4" type="video/mp4">
                  </video> -->
            </div>
            <div class="slide__content">
              <svg class="slide__overlay" viewBox="0 0 720 405" preserveAspectRatio="xMaxYMax slice">
                <path class="slide__overlay-path" d="M0,0 150,0 500,405 0,405" />
              </svg>
              <div class="slide__text">
                <h2 class="slide__text-heading">Corporate Leasing</h2>
                <p class="slide__text-desc">Mapush is know for its World Class Service. We understand your need and will help you in getting the best solution possible that too at Best Rates. Get in touch now.</p>
                <a href="about.php" class="slide__text-link">View More</a>
              </div>
            </div>
          </div>
          <div class="slide slide-1 ">
            <div class="slide__bg"></div>
            <div class="slide__content">
              <svg class="slide__overlay" viewBox="0 0 720 405" preserveAspectRatio="xMaxYMax slice">
                <path class="slide__overlay-path" d="M0,0 150,0 500,405 0,405" />
              </svg>
              <div class="slide__text">
                <h2 class="slide__text-heading">Real estate investment</h2>
                <p class="slide__text-desc">Trust our Expertise to offer you the Best. Your hard earned money needs nothing but the best Investment and Booming Project. Let Mapush help you in increasing few zero’s in you ROI. Get in touch now.</p>
                <a href="about.php" class="slide__text-link">View More</a>
              </div>
            </div>
          </div>
          <div class="slide slide-2">
            <div class="slide__bg"></div>
            <div class="slide__content">
              <svg class="slide__overlay" viewBox="0 0 720 405" preserveAspectRatio="xMaxYMax slice">
                <path class="slide__overlay-path" d="M0,0 150,0 500,405 0,405" />
              </svg>
              <div class="slide__text">
                <h2 class="slide__text-heading">Interior</h2>
                <p class="slide__text-desc">Because what you look should always be beautiful. Mapush has a dedicated team of Interior Design to help you meeting your expectations. Let people know how stylish or classy you are with Mapush Interior.</p>
                <a href="about.php" class="slide__text-link">View More</a>
              </div>
            </div>
          </div>
          <div class="slide slide-3">
            <div class="slide__bg"></div>
            <div class="slide__content">
              <svg class="slide__overlay" viewBox="0 0 720 405" preserveAspectRatio="xMaxYMax slice">
                <path class="slide__overlay-path" d="M0,0 150,0 500,405 0,405" />
              </svg>
              <div class="slide__text">
                <h2 class="slide__text-heading">Service</h2>
                <p class="slide__text-desc">With an experienced team and a proven track for more than two decades,, Mapush can help you in getting the best ROI. Speak to us now.</p>
                <a href="about.php" class="slide__text-link">View More</a>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- Mobile Slider -->
      <link rel="stylesheet" href="css/slick-theme.css">
      <link rel="stylesheet" href="css/slick.css">
      <section class="home-banner">
        <div class="Modern-Slider">
          <!-- Item -->
          <div class="item">
            <div class="img-fill">
              <img src="images/3d-slider-1.jpg" alt="">
              <div class="info">
                <div>
                      <h3>Corporate Leasing</h3>
                      <h5>Mapush is know for its World Class Service. We understand your need and will help you in getting the best solution possible that too at Best Rates. Get in touch now.</h5>
                    </div>
              </div>
            </div>
          </div>
          <!-- // Item -->
          <!-- Item -->
          <div class="item">
            <div class="img-fill">
              <img src="images/3d-slider-2.jpg" alt="">
              <div class="info">
                <div>
                      <h3>Real estate investment</h3>
                      <h5>Trust our Expertise to offer you the Best. Your hard earned money needs nothing but the best Investment and Booming Project. Let Mapush help you in increasing few zero’s in you ROI. Get in touch now.</h5>
                    </div>
              </div>
            </div>
          </div>
          <!-- // Item -->
          <!-- Item -->
          <div class="item">
            <div class="img-fill">
              <img src="images/3d-slider-3mob.jpg" alt="">
              <div class="info">
                <div>
                      <h3>Interior</h3>
                      <h5>Because what you look should always be beautiful. Mapush has a dedicated team of Interior Design to help you meeting your expectations. Let people know how stylish or classy you are with Mapush Interior.</h5>
                    </div>
              </div>
            </div>
          </div>
          <!-- // Item -->
          <!-- Item -->
          <div class="item">
            <div class="img-fill">
              <img src="images/3d-slider-4.jpg" alt="">
              <div class="info">
                <div>
                      <h3>Service</h3>
                      <h5>With an experienced team and a proven track for more than two decades,, Mapush can help you in getting the best ROI. Speak to us now.</h5>
                    </div>
              </div>
            </div>
          </div>
          <!-- // Item -->
        </div>
      </section>
      <!-- finish Mobile Slider -->
      <div class="about-section">
        <div class="container-about">
           
            <div class="row-about">
              <div class="flex-container">
                  <div class="images-side wow slideInLeft">
                    <p class="about-title">ABOUT US</p>
                      <img src="images/about-us-banner.jpg" alt="About">
                  </div>
                  <div class="about-content wow slideInRight">
                 
                    <p class="description">
                        Mapush group offers a broad range of services including Real estate Investments, Corporate Leasing and Interiors execution with the leading edge of hardcore experienced, well trained and highly skilled professionals. We also offer broad range of integrated services including wealth management, investment management, mortgage services and development services. Backed by decade's worth of experienced professionals, Mapush Group work on the philosophy of 'Business with services and relations' where our experts are always willing to learn from the client's feedback, suggestions and their guidance to create a WIN-WIN environment for clients as well as for Mapush Group.Our real estate property management experts aiming to put you in path of good opportunities, on a regular basis.
                    </p>
                <a href="about.php" class="slide__text-link color">More info</a>
                </div>
              </div>
            </div>
        </div>
      </div>
           <!-- 3D Model -->
          
<div class="map-container">
  <div class="map-title">
    <p>Our Overviews</p>
  </div>
  <div class="content-box-map">
    <p>At Mapush, we build relationships for lifetime. Business is always secondary for us. Our priority remains to give the Best to our clients at unbeatable cost and highest ROI.</p>
  </div>
  <div class="map-model">
 
    <div id="world" class="world">
  
      <h1 class="ground">Property in Noida</h1>
    
      <ul class="building block-1">Building
        <li class="top">roof</li>
        <li class="west">west wall</li>
        <li class="north">north wall</li>
        <li class="east">east wall</li>
        <li class="south">south wall</li>
      </ul>
    
      <ul class="building block-2">Building
        <li class="top">roof</li>
        <li class="west">west wall</li>
        <li class="north">north wall</li>
        <li class="east">east wall</li>
        <li class="south">south wall</li>
      </ul>
      
      <ul class="building block-3">Building
        <li class="top">roof</li>
        <li class="west">west wall</li>
        <li class="north">north wall</li>
        <li class="east">east wall</li>
        <li class="south">south wall</li>
      </ul>
      
      <ul class="building block-4">Building
        <li class="top">roof</li>
        <li class="west">west wall</li>
        <li class="north">north wall</li>
        <li class="east">east wall</li>
        <li class="south">south wall</li>
      </ul>
      
      <ul class="building block-5">Building
        <li class="top">roof</li>
        <li class="west">west wall</li>
        <li class="north">north wall</li>
        <li class="east">east wall</li>
        <li class="south">south wall</li>
      </ul>
      
      <ul class="building block-6">Building
        <li class="top">roof</li>
        <li class="west">west wall</li>
        <li class="north">north wall</li>
        <li class="east">east wall</li>
        <li class="south">south wall</li>
      </ul>
      
      <ul class="building block-7">Building
        <li class="top">roof</li>
        <li class="west">west wall</li>
        <li class="north">north wall</li>
        <li class="east">east wall</li>
        <li class="south">south wall</li>
      </ul>
      
      <ul class="building block-8">Building
        <li class="top">roof</li>
        <li class="west">west wall</li>
        <li class="north">north wall</li>
        <li class="east">east wall</li>
        <li class="south">south wall</li>
      </ul>
      
      <ul class="building block-9">Building
        <li class="top">roof</li>
        <li class="west">west wall</li>
        <li class="north">north wall</li>
        <li class="east">east wall</li>
        <li class="south">south wall</li>
      </ul>
      
      <ul class="building block-10">Building
        <li class="top">roof</li>
        <li class="west">west wall</li>
        <li class="north">north wall</li>
        <li class="east">east wall</li>
        <li class="south">south wall</li>
      </ul>
      
      <ul class="building block-11">Building
        <li class="top">roof</li>
        <li class="west">west wall</li>
        <li class="north">north wall</li>
        <li class="east">east wall</li>
        <li class="south">south wall</li>
      </ul>
      
      <ul class="car car-1">Car
        <li class="roof">roof</li>
        <li class="door-left">door left</li>
        <li class="front">front</li>
        <li class="door-right">door right</li>
        <li class="trunk">trunk</li>
      </ul>
      
      <ul class="car car-2">Car
        <li class="roof">roof</li>
        <li class="door-left">door left</li>
        <li class="front">front</li>
        <li class="door-right">door right</li>
        <li class="trunk">trunk</li>
      </ul>
      
      <ul class="car car-3">Car
        <li class="roof">roof</li>
        <li class="door-left">door left</li>
        <li class="front">front</li>
        <li class="door-right">door right</li>
        <li class="trunk">trunk</li>
      </ul>
      
      <p class="road road-1">road</p>
      <p class="road road-2">road</p>
      <p class="road road-3">road</p>
    
    </div>
  </div>
</div>

<style>
  /* contact section css */

  .contact-page-form {
    padding: 10px 0px;
}
  div#contactdvImage {
    height: 60vh;
    padding: 20px;
    display: flex;
    align-items: center;
    justify-content: center;
    background: url(images/contact-3.jpg) no-repeat;
    background-size: cover;
    background-position: top center;
  }

  p.title-contact {
    font-size: 38px;
    text-transform: uppercase;
    font-weight: 600;
    text-align: center;
    display: block;
    color: #fff;
  }

  .footer-contact-page {
    margin-top: 25px;
  }

  form.contact-us input.contact-us-field {
    width: 100%;
    margin-bottom: 5px;
    font-size: 16px;
    padding: 7px;
  }

  textarea.contact-us-field.textarea-input {
    width: 100%;
    margin-bottom: 5px;
    font-size: 16px;
    padding: 7px;
  }

  p.contact-us-p {
    font-size: 24px;
    text-transform: uppercase;
    font-weight: 600;
    margin-bottom: 20px;
  }

  form.contact-us {
    text-align: center;
}
iframe.home-map {
    height: 100%;
    width: 100%;
}
  @media(max-width: 767px) {
    p.title-contact {
      font-size: 28px;
      text-transform: uppercase;
      font-weight: 600;
      text-align: center;
      display: block;
      color: #fff;
    }
  }
</style>
       <!-- /////////////////////////////Contact Section/////////////////////////////////////////// -->
  <div class="contact-page-form">
  <div class="container">
    <div class="row align-center-row">
      <div class="col-md-6 col-12">
      <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3508.0181524289433!2d77.47039851429011!3d28.448869182490586!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x390cc1f6511d96dd%3A0x3f9dc189d72e2dd7!2sPlot%20no.%20C%2C%201%2C%20Noida-Greater%20Noida%20Expy%2C%20Gautam%20Buddha%20Nagar%2C%20Sector%20153%2C%20Noida%2C%20Uttar%20Pradesh%20201312!5e0!3m2!1sen!2sin!4v1595219277060!5m2!1sen!2sin" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0" class="home-map"></iframe>
      </div>
      <div class="col-md-6 col-12">
        <div class="contact-us-form">
          <form action="smtpmail.php" method="POST" class="contact-us">
            <p class="contact-us-p">Contact us</p>
            <input type="text" placeholder="Full Name" name="txtName" class="contact-us-field" required>
            <input type="text" placeholder="Contact" name="txtPhone" maxlength="10" pattern="[0-9]{10}" class="contact-us-field"
              required>
            <input type="email" placeholder="Email" name="txtEmail" class="contact-us-field" required>
            <textarea name="txtMessage" id="" cols="30" rows="5" class="contact-us-field textarea-input" placeholder="Query"
              required></textarea>
            <div class="contact-btn">
              <input type="submit" class="contact-submit-btn">
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>
       <?php include 'footer.php' ?>