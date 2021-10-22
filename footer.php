<!-- footer section -->
<div class="footer-section">
         <div class="container-fluid">
           <div class="row">
             <div class="col-md-3 col-12">
               <div class="footer-content">
                 <div class="footer-logo">
                   <a href="index.php"><img src="images/logo.png" alt="Mapush Logo" class="footer-logo"></a>
                 </div>
                 <div class="footer-content">
                   <p class="footer-cont">Mapush group offers a broad range of services including Real estate Investments, Corporate Leasing and Interior Designing with the leading edge of hardcore experienced.</p>
                   <ul class="social-list">
                     <li><a href="https://www.facebook.com/mapushgroup1/" class="footer-social"><div class="foot-icon"><i class="fab fa-facebook-f custom-icon"></i></div></a></li>
                     <li><a href="https://twitter.com/MapushGroup" class="footer-social"><div class="foot-icon"><i class="fab fa-twitter custom-icon"></i></div></a></li>
                     <li><a href="https://www.instagram.com/mapush_group/" class="footer-social"><div class="foot-icon"><i class="fab fa-instagram custom-icon"></i></div></a></li>
                     <li><a href="https://www.linkedin.com/company/mapushgroup" class="footer-social"><div class="foot-icon"><i class="fab fa-linkedin-in custom-icon"></i></div></a></li>
                     <li><a href="https://in.pinterest.com/mapushgroup/_saved/" class="footer-social"><div class="foot-icon"><i class="fab fa-pinterest-p custom-icon"></i></div></a></li>
                   </ul>
                 </div>
               </div>
             </div>
             <div class="col-md-3 col-12">
              <div class="footer-content">
                <div class="footer-contact">
                 <p>Contact us</p>
                </div>
                <div class="footer-content">
                <ul class="contact-footer-list">
                  <li>
                    
                      <div class="foot-icon">
                        <i class="fas fa-map-marker-alt custom-icon"></i>
                      </div>
                      <p class="mgl">Office : Suite No 102, 5<sup>th</sup> floor Urbtech NPX Plot No-1,Sector-153 Noida Expressway</p>
                   
                  </li>
                  <li>
                    <a href="mailto:info@mapushgroup.com">
                     <div class="foot-icon">
                      <i class="fas fa-envelope custom-icon"></i>
                     </div>
                      <p>info@mapushgroup.com</p>
                    </a>
                  </li>
                  <li>
                    <a href="tel:(+91)0120-4103442">
                      <div class="foot-icon">
                        <i class="fas fa-phone custom-icon"></i>
                      </div>
                      <p>(+91)0120-4103442</p>
                    </a>
                  </li>
                </ul>
                </div>
              </div>
            </div>
            <div class="col-md-3 col-12">
              <div class="footer-content">
                <div class="footer-contact">
                  <p class="left">Navigation</p>
                 </div>
                <ul class="footer-menu">
                  <li><a href="index.php"><i class="fas fa-chevron-right custom-icon margin-right"></i><i class="fas fa-chevron-right custom-icon margin-right"></i>Home</a></li>
                  <li><a href="about.php"><i class="fas fa-chevron-right custom-icon margin-right"></i><i class="fas fa-chevron-right custom-icon margin-right"></i>About</a></li>
                  <li><a href="our-project.php"><i class="fas fa-chevron-right custom-icon margin-right"></i><i class="fas fa-chevron-right custom-icon margin-right"></i>Our project</a></li>
                  <li><a href="interior.php"><i class="fas fa-chevron-right custom-icon margin-right"></i><i class="fas fa-chevron-right custom-icon margin-right"></i>Interiors</a></li>
                  <li><a href="contact.php"><i class="fas fa-chevron-right custom-icon margin-right"></i><i class="fas fa-chevron-right custom-icon margin-right"></i>Contact</a></li>
                </ul>
              </div>
            </div>
            <div class="col-md-3 col-12">
              <div class="footer-content">
                <div class="footer-contact">
                  <p>Project</p>
                 </div>
                 <div class="footer-content">
                   <div class="container-fluid">
                     <div class="row footer-row">
                       <div class="col-md-6 col-6">
			<a href="urbtech-npx.php"><img src="images/footer-project-1.jpg" alt="URBTECH NPX" class="footer-gallery"></a>
                       </div>
                       <div class="col-md-6 col-6">
 			<a href="assotech.php"><img src="images/footer-project-2.png" alt="Assotech Business Cresterra (ABC)" class="footer-gallery"></a>
                      </div>
                     </div>
                     <div class="row footer-row">
                      <div class="col-md-6 col-6">
			<a href="bhutani-alphathum.php"><img src="images/footer-project-3.jpg" alt="Bhutani Alphathum" class="footer-gallery"></a>
                      </div>
                      <div class="col-md-6 col-6">
			<a href="urbtech-utc.php"><img src="images/footer-project-4.jpg" alt="Urbtech NPX" class="footer-gallery"></a>
                     </div>
                    </div>
                   </div>
                 </div>
              </div>
            </div>
           </div>
         </div>
         <div class="copyright">
           <p> Copyright &copy; 2020 With Mapush. All Rights Reserved.</p>
         </div>
       </div>
</body>
</html>


<!-- Scrips Link -->
<script src="js/jquery.min.js"></script>
<script src="js/popper.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<!-- Icons -->
<script src="js/all.min.js"></script>

<script src="https://cdn.jsdelivr.net/jquery.slick/1.5.0/slick.min.js"></script>
<!-- ***************************** Slider JS ************************************** -->
<script type="text/javascript">
    $(window).on('load', function() {
        $('#myModal').modal('show');
    });
</script>
<script>
$(document).ready(function(){

$(".Modern-Slider").slick({
autoplay:true,
autoplaySpeed:8000,
speed:500,
slidesToShow:1,
slidesToScroll:1,
pauseOnHover:false,
dots:true,
pauseOnDotsHover:true,
cssEase:'linear',
// fade:true,
draggable:false,
// prevArrow:'<button class="PrevArrow"></button>',
// nextArrow:'<button class="NextArrow"></button>', 
});

})  
</script>

<script>
    const $dropdown = $(".dropdown");
const $dropdownToggle = $(".dropdown-toggle");
const $dropdownMenu = $(".dropdown-menu");
const showClass = "show";

$(window).on("load resize", function() {
  if (this.matchMedia("(min-width: 768px)").matches) {
    $dropdown.hover(
      function() {
        const $this = $(this);
        $this.addClass(showClass);
        $this.find($dropdownToggle).attr("aria-expanded", "true");
        $this.find($dropdownMenu).addClass(showClass);
      },
      function() {
        const $this = $(this);
        $this.removeClass(showClass);
        $this.find($dropdownToggle).attr("aria-expanded", "false");
        $this.find($dropdownMenu).removeClass(showClass);
      }
    );
  } else {
    $dropdown.off("mouseenter mouseleave");
  }
});
</script>

<script>
    function openNav() {
      document.getElementById("mySidenav").style.width = "250px";
    }
    
    function closeNav() {
      document.getElementById("mySidenav").style.width = "0";
    }
    </script>
    <!-- Slider -->
    <script>
        $(document).ready(function() {
  
  var $slider = $(".slider"),
      $slideBGs = $(".slide__bg"),
      diff = 0,
      curSlide = 0,
      numOfSlides = $(".slide").length-1,
      animating = false,
      animTime = 500,
      autoSlideTimeout,
      autoSlideDelay = 6000,
      $pagination = $(".slider-pagi");
  
  function createBullets() {
    for (var i = 0; i < numOfSlides+1; i++) {
      var $li = $("<li class='slider-pagi__elem'></li>");
      $li.addClass("slider-pagi__elem-"+i).data("page", i);
      if (!i) $li.addClass("active");
      $pagination.append($li);
    }
  };
  
  createBullets();
  
  function manageControls() {
    $(".slider-control").removeClass("inactive");
    if (!curSlide) $(".slider-control.left").addClass("inactive");
    if (curSlide === numOfSlides) $(".slider-control.right").addClass("inactive");
  };
  
  function autoSlide() {
    autoSlideTimeout = setTimeout(function() {
      curSlide++;
      if (curSlide > numOfSlides) curSlide = 0;
      changeSlides();
    }, autoSlideDelay);
  };
  
  autoSlide();
  
  function changeSlides(instant) {
    if (!instant) {
      animating = true;
      manageControls();
      $slider.addClass("animating");
      $slider.css("top");
      $(".slide").removeClass("active");
      $(".slide-"+curSlide).addClass("active");
      setTimeout(function() {
        $slider.removeClass("animating");
        animating = false;
      }, animTime);
    }
    window.clearTimeout(autoSlideTimeout);
    $(".slider-pagi__elem").removeClass("active");
    $(".slider-pagi__elem-"+curSlide).addClass("active");
    $slider.css("transform", "translate3d("+ -curSlide*100 +"%,0,0)");
    $slideBGs.css("transform", "translate3d("+ curSlide*50 +"%,0,0)");
    diff = 0;
    autoSlide();
  }

  function navigateLeft() {
    if (animating) return;
    if (curSlide > 0) curSlide--;
    changeSlides();
  }

  function navigateRight() {
    if (animating) return;
    if (curSlide < numOfSlides) curSlide++;
    changeSlides();
  }

  $(document).on("mousedown touchstart", ".slider", function(e) {
    if (animating) return;
    window.clearTimeout(autoSlideTimeout);
    var startX = e.pageX || e.originalEvent.touches[0].pageX,
        winW = $(window).width();
    diff = 0;
    
    $(document).on("mousemove touchmove", function(e) {
      var x = e.pageX || e.originalEvent.touches[0].pageX;
      diff = (startX - x) / winW * 70;
      if ((!curSlide && diff < 0) || (curSlide === numOfSlides && diff > 0)) diff /= 2;
      $slider.css("transform", "translate3d("+ (-curSlide*100 - diff) +"%,0,0)");
      $slideBGs.css("transform", "translate3d("+ (curSlide*50 + diff/2) +"%,0,0)");
    });
  });
  
  $(document).on("mouseup touchend", function(e) {
    $(document).off("mousemove touchmove");
    if (animating) return;
    if (!diff) {
      changeSlides(true);
      return;
    }
    if (diff > -8 && diff < 8) {
      changeSlides();
      return;
    }
    if (diff <= -8) {
      navigateLeft();
    }
    if (diff >= 8) {
      navigateRight();
    }
  });
  
  $(document).on("click", ".slider-control", function() {
    if ($(this).hasClass("left")) {
      navigateLeft();
    } else {
      navigateRight();
    }
  });
  
  $(document).on("click", ".slider-pagi__elem", function() {
    curSlide = $(this).data("page");
    changeSlides();
  });
  
});
    </script>
<script>
  $(document).ready(function(){
    // Add smooth scrolling to all links
    $("a").on('click', function(event) {
  
      // Make sure this.hash has a value before overriding default behavior
      if (this.hash !== "") {
        // Prevent default anchor click behavior
        event.preventDefault();
  
        // Store hash
        var hash = this.hash;
  
        // Using jQuery's animate() method to add smooth page scroll
        // The optional number (800) specifies the number of milliseconds it takes to scroll to the specified area
        $('html, body').animate({
          scrollTop: $(hash).offset().top
        }, 800, function(){
  
          // Add hash (#) to URL when done scrolling (default click behavior)
          window.location.hash = hash;
        });
      } // End if
    });
  });
  </script>

  <script>
    $(document).ready(function(){
      $("a.sticky-form-btn").click(function(){
        $(".quick-form").toggleClass("sticky-show");
      });
    });
    </script>
    <script>
      $(window).scroll(function() {
      if ($(this).scrollTop() > 1){  
          $('.header-section').addClass("sticky");
        }
        else{
          $('.header-section').removeClass("sticky");
        }
      });
    </script>
    <script src="js/wow.min.js"></script>
    <script>
var wow = new WOW(
  {
    boxClass:     'wow',      // animated element css class (default is wow)
    animateClass: 'animated', // animation css class (default is animated)
    offset:       0,          // distance to the element when triggering the animation (default is 0)
    mobile:       true,       // trigger animations on mobile devices (default is true)
    live:         true,       // act on asynchronously loaded content (default is true)
    callback:     function(box) {
      // the callback is fired every time an animation is started
      // the argument that is passed in is the DOM node being animated
    },
    scrollContainer: null // optional scroll container selector, otherwise use window
  }
);
wow.init();
    </script>
    

    <!-- back to top -->

    <script>
      // ===== Scroll to Top ==== 
      var btn = $('#return-to-top');

$(window).scroll(function() {
  if ($(window).scrollTop() > 500) {
    btn.addClass('show');
  } else {
    btn.removeClass('show');
  }
});

btn.on('click', function(e) {
  e.preventDefault();
  $('html, body').animate({scrollTop:0}, '500');
});


    </script>