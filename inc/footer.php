<!-- Contact form -->

<section class="zbz-slide" data-nav="Contacts">
  <div class="zbz-slide-inner">
    <div class="zbz-slide-content zbz-on-top">
      <div class="container">
        <div class="row">
          <div class="col-md-3">
            <h2 data-appear="slideInUp">
              Contact us
              <br />
              <small>We can't wait to hear&nbsp;from you!</small>
            </h2>
          </div>
          <!-- /.col-md-3 -->
          <?php

          $qry = "SELECT * FROM footer";
          $res = $conn->query($qry);

          if ($res->num_rows > 0) {
            while ($row = $res->fetch_assoc()) {
          ?>
              <div class="col-md-3 col-md-push-6" data-appear="slideInUp">
                <div class="row">
                  <div class="zbz-feature-side zbz-xs-2x col-sm-4 col-md-12">
                    <i class="fa fa-map-marker zbz-color-concrete"></i>
                    <div class="zbz-description">
                      <h3>Address</h3>
                      <p>
                        <?php echo $row['address'] ?>
                      </p>
                    </div>
                    <!-- /.description -->
                  </div>
                  <!-- /.zbz-feature-side -->
                  <div class="zbz-feature-side zbz-xs-2x col-sm-4 col-md-12">
                    <i class="fa fa-phone zbz-color-concrete"></i>
                    <div class="zbz-description">
                      <h3>Phones</h3>
                      <p>
                        <?php
                        $phone = $row['phone'];
                        $phones = explode(",", $phone);
                        foreach ($phones as $p) {
                          echo $p . '<br/>';
                        }
                        ?>
                        <!-- 18766228580
                        <br />
                        18766182947
                        <br />
                        18764577315 -->
                      </p>
                    </div>
                    <!-- /.description -->
                  </div>
                  <!-- /.zbz-feature-side -->
                  <div class="zbz-feature-side zbz-xs-2x col-sm-4 col-md-12">
                    <i class="fa fa-share-alt zbz-color-concrete"></i>
                    <div class="zbz-description">
                      <h3>Online</h3>
                      <p class="social_link">
                        <a href="<?php echo $row['facebook'] ?>" class="zbz-circle">
                          <i class="fab fa-facebook-f"></i>
                        </a>
                        <a href="<?php echo $row['instagram'] ?>" class="zbz-circle">
                          <i class="fab fa-instagram"></i>
                        </a>
                        <a href="<?php echo $row['twitter'] ?>" class="zbz-circle">
                          <i class="fab fa-twitter"></i>
                        </a>
                      </p>
                    </div>
                    <!-- /.description -->
                  </div>
                  <!-- /.zbz-feature-side -->
                </div>
                <!-- /.row -->
                <div class="zbz-spacer-30"></div>
              </div>
          <?php
            }
          }
          ?>
          <!-- /.col-md-3 -->
          <div class="col-md-6 col-md-pull-3" data-appear="slideInUp">
            <div class="card px-0 pt-4 pb-0 mt-3 mb-3">
              <form id="msform" method="post">
                <!-- progressbar -->
                <ul id="progressbar">
                  <li class="active" id="account">
                    <i class="fa fa-user"></i>
                    <strong>Full Name</strong>
                  </li>
                  <li id="personal">
                    <i class="fa fa-envelope"></i>
                    <strong>Email</strong>
                  </li>
                  <li id="payment">
                    <i class="fa fa-phone"></i>
                    <strong>Phone</strong>
                  </li>
                </ul>
                <div class="progress">
                  <div class="progress-bar progress-bar-striped progress-bar-animated" role="progressbar" aria-valuemin="0" aria-valuemax="100"></div>
                </div>
                <br />
                <!-- fieldsets -->
                <fieldset>
                  <div class="form-card">
                    <label for="inputName" class="control-label">
                      Kindly Provide Us With Your Name
                    </label>
                    <input type="text" name="uname" id="name" class="form-control input-lg" required />
                  </div>
                  <input type="button" name="next" id="next_1" class="next btn-lg btn_next btn btn-ghost btn-default" value="Next" />
                </fieldset>
                <fieldset>
                  <div class="form-card">
                    <label for="inputName" class="control-label">
                      Please enter your email address
                    </label>
                    <input type="email" name="email" id="email" class="form-control input-lg" />
                  </div>

                  <input type="button" name="next" id="next_2" class="next btn-lg btn_next btn btn-ghost btn-default" value="Next" />
                  <input type="button" name="previous" class="previous btn-lg btn_prev btn btn-ghost btn-default" value="Previous" />
                </fieldset>
                <fieldset>
                  <div class="form-card">
                    <label for="inputName" class="control-label">
                      Lastly, please provide us with a contact number
                    </label>
                    <input type="text" name="phone" id="phone" class="form-control input-lg" />
                  </div>
                  <button type="submit" id="next_3" class="btn btn-ghost btn_submit btn-default btn-lg">
                    <i class="fa fa-send"></i>
                    Send message
                  </button>
                  <input type="button" name="previous" class="previous btn-lg btn_prev btn btn-ghost btn-default" value="Previous" />
                </fieldset>
              </form>
            </div>
          </div>
          <!-- /.col-md-8 -->
        </div>
        <!-- /.row -->
      </div>
      <!-- /.container -->
    </div>
    <!-- /.slide-content -->
  </div>
  <!-- /.slide-inner -->
</section>
</div>
<!-- /.slide-keeper -->
<a href="https://wa.me/message/JNYSI7FTMUW6E1" class="whatsapp_float" target="_blank">
  <i class="fab fa-whatsapp"></i>
</a>
<!-- JavaScripts -->
<script type="text/javascript" src="assets/js/modernizr.js"></script>
<script type="text/javascript" src="assets/js/jquery.js"></script>
<script type="text/javascript" src="assets/js/skrollr.min.js"></script>
<script type="text/javascript" src="assets/js/zbz-utils.js"></script>
<script type="text/javascript" src="assets/js/zbz-feedback.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/Swiper/4.5.1/js/swiper.min.js"></script>
<script type="text/javascript" src="assets/js/zbz-splash-page.js"></script>
<script>
  $(document).ready(function() {
    $('#name').on('input', function() {
      if ($(this).val().length > 2) {
        $('#next_1').css('opacity', 1);
      } else {
        $('#next_1').css('opacity', 0);
      }
    });
    $('#email').on('input', function() {
      if ($(this).val().length > 10) {
        $('#next_2').css('opacity', 1);
      } else {
        $('#next_2').css('opacity', 0);
      }
    });
    $('#phone').on('input', function() {
      if ($(this).val().length > 7) {
        $('#next_3').css('opacity', 1);
      } else {
        $('#next_3').css('opacity', 0);
      }
    });
    var current_fs, next_fs, previous_fs; //fieldsets
    var opacity;
    var current = 1;
    var steps = $('fieldset').length;

    setProgressBar(current);

    $('.next').click(function() {
      current_fs = $(this).parent();
      next_fs = $(this).parent().next();

      //Add Class Active
      $('#progressbar li').eq($('fieldset').index(next_fs)).addClass('active');

      //show the next fieldset
      next_fs.show();
      //hide the current fieldset with style
      current_fs.animate({
        opacity: 0
      }, {
        step: function(now) {
          // for making fielset appear animation
          opacity = 1 - now;

          current_fs.css({
            display: 'none',
            position: 'relative',
          });
          next_fs.css({
            opacity: opacity
          });
        },
        duration: 500,
      });
      setProgressBar(++current);
    });

    $('.previous').click(function() {
      current_fs = $(this).parent();
      previous_fs = $(this).parent().prev();

      //Remove class active
      $('#progressbar li').eq($('fieldset').index(current_fs)).removeClass('active');

      //show the previous fieldset
      previous_fs.show();

      //hide the current fieldset with style
      current_fs.animate({
        opacity: 0
      }, {
        step: function(now) {
          // for making fielset appear animation
          opacity = 1 - now;

          current_fs.css({
            display: 'none',
            position: 'relative',
          });
          previous_fs.css({
            opacity: opacity
          });
        },
        duration: 500,
      });
      setProgressBar(--current);
    });

    function setProgressBar(curStep) {
      var percent = parseFloat(100 / steps) * curStep;
      percent = percent.toFixed();
      $('.progress-bar').css('width', percent + '%');
    }

    $('.submit').click(function() {
      return false;
    });

    $('#inter_form').submit(function(e) {

      e.preventDefault();
      let form = $(this)[0];
      let data = new FormData(form);

      var Installation_Surface = $(".Installation_Surface input[name='Installation_Surface']:checked").val()
      var Ownership = $(".Ownership input[name='Ownership']:checked").val()
      var Account = $(".Account input[name='Account']:checked").val()

      data.append('Account', Account);
      data.append('Ownership', Ownership);
      data.append('Installation_Surface', Installation_Surface);


      $.ajax({
        url: '/sirtech/Submit_inter.php',
        type: 'POST',
        enctype: 'multipart/form-data',
        data: data,
        processData: false,
        contentType: false,
        cache: false,
        timeout: 600000,
        success: function(res) {
          console.log(res);
          if (res === 'successsuccess') {
            alert('Successfully Submitted Form')
          } else {
            alert('Error While Submitting Form')

          }
        }
      })
    })
  });
</script>
<script type="text/javascript">
  // HERO SLIDER
  var menu = [];
  jQuery('.swiper-slide').each(function(index) {
    menu.push(jQuery(this).find('.slide-inner').attr('data-text'));
  });
  var interleaveOffset = 0.5;
  var swiperOptions = {
    loop: true,
    speed: 1000,
    parallax: true,
    autoplay: {
      delay: 6500,
      disableOnInteraction: false,
    },
    watchSlidesProgress: true,
    pagination: {
      el: '.swiper-pagination',
      clickable: true,
    },

    navigation: {
      nextEl: '.swiper-button-next',
      prevEl: '.swiper-button-prev',
    },

    on: {
      progress: function() {
        var swiper = this;
        for (var i = 0; i < swiper.slides.length; i++) {
          var slideProgress = swiper.slides[i].progress;
          var innerOffset = swiper.width * interleaveOffset;
          var innerTranslate = slideProgress * innerOffset;
          swiper.slides[i].querySelector('.slide-inner').style.transform =
            'translate3d(' + innerTranslate + 'px, 0, 0)';
        }
      },

      touchStart: function() {
        var swiper = this;
        for (var i = 0; i < swiper.slides.length; i++) {
          swiper.slides[i].style.transition = '';
        }
      },

      setTransition: function(speed) {
        var swiper = this;
        for (var i = 0; i < swiper.slides.length; i++) {
          swiper.slides[i].style.transition = speed + 'ms';
          swiper.slides[i].querySelector('.slide-inner').style.transition = speed + 'ms';
        }
      },
    },
  };

  var swiper = new Swiper('.swiper-container', swiperOptions);

  // DATA BACKGROUND IMAGE
  var sliderBgSetting = $('.slide-bg-image');
  sliderBgSetting.each(function(indx) {
    if ($(this).attr('data-background')) {
      $(this).css('background-image', 'url(' + $(this).data('background') + ')');
    }
  });

  var skrollr;
  $().ready(function() {
    $('body').zbzSplashPage({
      mutedColor: [30, 120, 160, 1],
      strokeColor: [55, 155, 255, 0.2],
      connectionType: 'mesh',
    });
  });
</script>
<!--Start of Tawk.to Script-->
<script type="text/javascript">
  var Tawk_API = Tawk_API || {},
    Tawk_LoadStart = new Date();
  (function() {
    var s1 = document.createElement('script'),
      s0 = document.getElementsByTagName('script')[0];
    s1.async = true;
    s1.src = 'https://embed.tawk.to/63f8ca5431ebfa0fe7ef1f84/1gq1tcn6b';
    s1.charset = 'UTF-8';
    s1.setAttribute('crossorigin', '*');
    s0.parentNode.insertBefore(s1, s0);
  })();
</script>
<!--End of Tawk.to Script-->
</body>

</html>