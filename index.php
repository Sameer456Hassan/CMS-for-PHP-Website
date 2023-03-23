<?php
require("./inc/header.php");
?>
<!-- Slide keeper -->
<div class="zbz-slide-keeper">
  <div class="zbz-bg-cover" style="background-image: linear-gradient(45deg, #7e357b82, #7e357b30), url(images/bg.jpg)"></div>

  <!-- A curtain to make background darker -->
  <div class="tint-curtain" data-0="opacity: 0.5;" data-100p="opacity: 1;"></div>

  <!-- Home slide -->
  <section class="zbz-slide main_slider main-hero" data-nav="Home">
    <header>
      <div class="nav-wrapper" data-delay="0" data-disappear="fadeOut">
        <a href="index.php" class="logo-container">
          <img src="images/sir-tech-logo-w2-1.svg" />
        </a>
        <nav>
          <input class="hidden" type="checkbox" id="menuToggle" />
          <label class="menu-btn" for="menuToggle">
            <div class="menu"></div>
            <div class="menu"></div>
            <div class="menu"></div>
          </label>
          <div class="nav-container">
            <ul class="nav-tabs">
              <li class="nav-tab"><a href="index.php">Home</a></li>
              <li class="nav-tab"><a href="AboutUs.php">About Us</a></li>
              <li class="nav-tab"><a href="Contact.php">Contact Us</a></li>
              <li class="nav-tab">
                <a href="https://sirtech.uisp.com/crm/login" class="login_btn">
                  <i class="fa fa-sign-in-alt"></i>
                  Log In
                </a>
              </li>
            </ul>
          </div>
        </nav>
      </div>
    </header>

    <div class="zbz-slide-inner">
      <div class="zbz-slide-content zbz-on-top">
        <div class="hero-slider hero-style">
          <div class="swiper-container">
            <div class="swiper-wrapper">
              <?php
              $get_slider = "SELECT * FROM home_header";
              $result_slider = $conn->query($get_slider);

              if ($result_slider->num_rows > 0) {
                while ($row = $result_slider->fetch_assoc()) {

              ?>
                  <div class="swiper-slide" data-delay="0" data-disappear="fadeOut">
                    <div class="slide-inner slide-bg-image" data-delay="0" data-disappear="fadeOut" style="
                        background-image: linear-gradient(#240f23cc, #240f23cc),
                          url('images/<?php echo $row['picture']; ?>');
                      ">
                      <div class="container">
                        <div class="row align-item-center" data-delay="0" data-disappear="fadeOut">
                          <div class="col-sm-12 col-lg-6">
                            <div class="zbz-feature-side zbz-xs-3x zbz-sm-4x">
                              <div class="zbz-description">
                                <h1><strong><?php echo $row['heading']; ?></strong></h1>
                                <p>
                                  <?php echo $row['text']; ?>
                                </p>
                                <div class="zbz-spacer-40"></div>
                                <p>
                                  <a href="<?php echo $row['learn_more_link']; ?>" class="btn btn-ghost btn-default btn-lg">
                                    <i class="fa fa-laptop"></i>
                                    Learn More
                                  </a>
                                </p>
                              </div>
                              <!-- /.description -->
                            </div>
                            <!-- /.zbz-feature-side -->
                          </div>
                        </div>
                      </div>
                    </div>

                  </div>
              <?php
                }
              } ?>
              <!-- <div class="swiper-slide" data-delay="0" data-disappear="fadeOut">
                <div class="slide-inner slide-bg-image" style="
                        background-image: linear-gradient(#0b1328cc, #0b1328cc),
                          url('images/img_2.webp');
                      ">
                  <div class="container">
                    <div class="row align-item-center" data-delay="0" data-disappear="fadeOut">
                      <div class="col-sm-12 col-lg-6">
                        <div class="zbz-feature-side zbz-xs-3x zbz-sm-4x">
                          <div class="zbz-description">
                            <h1><strong>Great Internet | Great Price</strong></h1>
                            <p>
                              We offer both wired and wireless Internet service to both
                              residential and corporate users at affordable costs.
                            </p>
                            <div class="zbz-spacer-40"></div>
                            <p>
                              <a href="#" class="btn btn-ghost btn-default btn-lg">
                                <i class="fa fa-laptop"></i>
                                See Our Packages
                              </a>
                            </p>
                          </div>
                          
                        </div>
                       
                      </div>
                    </div>
                  </div>
                </div>
                
              </div>
              <div class="swiper-slide" data-delay="0" data-disappear="fadeOut">
                <div class="slide-inner slide-bg-image" style="
                        background-image: linear-gradient(#96ba2c8f, #96ba2c5e),
                          url(images/img_3.jpg);
                      ">
                  <div class="container">
                    <div class="row align-item-center" data-delay="0" data-disappear="fadeOut">
                      <div class="col-sm-12 col-lg-6">
                        <div class="zbz-feature-side zbz-xs-3x zbz-sm-4x">
                          <div class="zbz-description">
                            <h1><strong>Solar System</strong></h1>
                            <p>
                              Solar Internet Repairs S. I. R Tech Jamaica Limited will help you
                              design, maintain and source solar equipment hassle free.
                            </p>
                            <div class="zbz-spacer-40"></div>
                            <p>
                              <a href="#" class="btn btn-ghost btn-default btn-lg">
                                <i class="fa fa-laptop"></i>
                                Learn More
                              </a>
                            </p>
                          </div>
                          
                        </div>
                       
                      </div>
                    </div>
                  </div>
                </div>
                
              </div>
              <div class="swiper-slide" data-delay="0" data-disappear="fadeOut">
                <div class="slide-inner slide-bg-image" style="
                        background-image: linear-gradient(#0d1826cc, #0d1826cc),
                          url(images/img_4.jpg);
                      ">
                  <div class="container">
                    <div class="row align-item-center" data-delay="0" data-disappear="fadeOut">
                      <div class="col-sm-12 col-lg-6">
                        <div class="zbz-feature-side zbz-xs-3x zbz-sm-4x">
                          <div class="zbz-description">
                            <h1><strong>IPTV | Great Entertainment</strong></h1>
                            <p>
                              Interactive IPTV Platform; quick, easy and convenient for
                              residential, commercial and hospitality...
                            </p>
                            <div class="zbz-spacer-40"></div>
                            <p>
                              <a href="#" class="btn btn-ghost btn-default btn-lg">
                                <i class="fa fa-laptop"></i>
                                Learn More
                              </a>
                            </p>
                          </div>
                          
                        </div>
                       
                      </div>
                    </div>
                  </div>
                </div>
                
              </div> -->
            </div>
            <div class="swiper-pagination" data-delay="0" data-disappear="fadeOut"></div>
            <div class="swiper-button-next" data-delay="0" data-disappear="fadeOut"></div>
            <div class="swiper-button-prev" data-delay="0" data-disappear="fadeOut"></div>
            <div class="col-md-5 main_button_pos" data-delay="0" data-disappear="fadeOut">
              <div class="row">
                <div class="col-md-12">
                  <div class="row main-icon">
                    <div class="col-md-3">
                      <a href="hospitality.php" class="hero_img_content">
                        <div class="hero_img_inner">
                          <div class="hero_img">
                            <img class="img-fluid" src="images/pc_on_desk_filled.svg" alt="" />
                          </div>
                          <h6>HOSPITALITY</h6>
                        </div>
                      </a>
                    </div>
                    <div class="col-md-3">
                      <a href="Internet.php" class="hero_img_content">
                        <div class="hero_img_inner">
                          <div class="hero_img">
                            <img class="img-fluid" src="images/network_filled.svg" alt="" />
                          </div>
                          <h6>INTERNET</h6>
                        </div>
                      </a>
                    </div>

                    <div class="col-md-3">
                      <a href="Solar.php" class="hero_img_content">
                        <div class="hero_img_inner">
                          <div class="hero_img">
                            <img class="img-fluid" src="images/solar_panel.svg" alt="" />
                          </div>
                          <h6>SOLAR</h6>
                        </div>
                      </a>
                    </div>
                    <div class="col-md-3">
                      <a href="Iptv.php" class="hero_img_content">
                        <div class="hero_img_inner">
                          <div class="hero_img">
                            <img class="img-fluid" src="images/hdtv_filled.svg" alt="" />
                          </div>
                          <h6>IPTV PLATFORM</h6>
                        </div>
                      </a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- /.slide-content -->
    </div>
    <!-- /.slide-inner -->
  </section>

  <!-- About slide -->
  <?php
  $get_first_sec = "SELECT * FROM home_first";
  $result_first_sec = $conn->query($get_first_sec);

  if ($result_first_sec->num_rows > 0) {
    while ($row = $result_first_sec->fetch_assoc()) {

  ?>
      <section class="zbz-slide" data-nav="aa">
        <div class="zbz-slide-inner">
          <div class="zbz-slide-content">

            <div class="container">
              <h2 class="text-center zbz-on-top" data-appear="slideInUp" data-disappear="slideOutUp">
                <strong><?php echo $row['heading']; ?></strong>
              </h2>
              <hr data-appear="slideInUp" data-disappear="slideOutUp" data-delay="3" />
              <div class="row align-item-center" data-appear="slideInUp" data-disappear="slideOutUp">
                <div class="col-md-6 pdr_40">
                  <div>
                    <img src="images/<?php echo $row['picture']; ?>" class="img-fluid" alt="" />
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="main_content">
                    <h3 class="">
                      <?php echo $row['text']; ?>
                    </h3>
                    <a href="<?php echo $row['learn_more_link']; ?>" class="btn btn-ghost btn-default btn-lg">
                      <i class="fa fa-laptop"></i>
                      Learn More
                    </a>
                  </div>
                </div>
              </div>
              <!-- /.row -->

              <hr data-appear="slideInUp" data-disappear="slideOutUp" data-delay="17" />
            </div>
            <!-- /.container -->
          </div>
          <!-- /.slide-content -->
        </div>
        <!-- /.slide-inner -->
      </section>

    <?php
    }
  }

  $get_second_sec = "SELECT * FROM home_second";
  $result_second_sec = $conn->query($get_second_sec);

  if ($result_second_sec->num_rows > 0) {
    while ($row = $result_second_sec->fetch_assoc()) {

    ?>

      <section class="zbz-slide" data-nav="internet">
        <div class="zbz-slide-inner">
          <div class="zbz-slide-content">
            <div class="container">
              <h2 class="text-center zbz-on-top" data-appear="slideInUp" data-disappear="slideOutUp">
                <strong><?php echo $row['heading']; ?></strong>
              </h2>
              <hr data-appear="slideInUp" data-disappear="slideOutUp" data-delay="3" />
              <div class="row align-item-center" data-appear="slideInUp" data-disappear="slideOutUp">
                <div class="col-md-6">
                  <div class="main_content">
                    <h3 class="">
                      <?php echo $row['text']; ?>
                    </h3>
                    <a href="<?php echo $row['learn_more_link']; ?>" class="btn btn-ghost btn-default btn-lg">
                      <i class="fa fa-laptop"></i>
                      Learn More
                    </a>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="mt-5 margin-bottom">
                    <img src="images/<?php echo $row['picture']; ?>" class="img-fluid" alt="" />
                  </div>
                </div>
              </div>
              <!-- /.row -->

              <hr data-appear="slideInUp" data-disappear="slideOutUp" data-delay="17" />
            </div>
            <!-- /.container -->
          </div>
          <!-- /.slide-content -->
        </div>
        <!-- /.slide-inner -->
      </section>

    <?php
    }
  }

  $get_third_sec = "SELECT * FROM home_third";
  $result_third_sec = $conn->query($get_third_sec);

  if ($result_third_sec->num_rows > 0) {
    while ($row = $result_third_sec->fetch_assoc()) {

    ?>
      <section class="zbz-slide" data-nav="Solar">
        <div class="zbz-slide-inner">
          <div class="zbz-slide-content">
            <div class="container">
              <h2 class="text-center zbz-on-top" data-appear="slideInUp" data-disappear="slideOutUp">
                <strong><?php echo $row['heading']; ?></strong>
              </h2>
              <hr data-appear="slideInUp" data-disappear="slideOutUp" data-delay="3" />
              <div class="row align-item-center" data-appear="slideInUp" data-disappear="slideOutUp">
                <div class="col-md-6">
                  <div>
                    <img src="images/<?php echo $row['picture']; ?>" class="img-fluid" alt="" />
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="main_content">
                    <h3 class="">
                      <?php echo $row['text']; ?>
                    </h3>
                    <a href="<?php echo $row['learn_more_link']; ?>" class="btn btn-ghost btn-default btn-lg">
                      <i class="fa fa-laptop"></i>
                      Learn More
                    </a>
                  </div>
                </div>
              </div>
              <!-- /.row -->

              <hr data-appear="slideInUp" data-disappear="slideOutUp" data-delay="17" />
            </div>
            <!-- /.container -->
          </div>
          <!-- /.slide-content -->
        </div>
        <!-- /.slide-inner -->
      </section>

    <?php
    }
  }

  $get_fourth_sec = "SELECT * FROM home_fourth";
  $result_fourth_sec = $conn->query($get_fourth_sec);

  if ($result_fourth_sec->num_rows > 0) {
    while ($row = $result_fourth_sec->fetch_assoc()) {

    ?>
      <section class="zbz-slide" data-nav="internet">
        <div class="zbz-slide-inner">
          <div class="zbz-slide-content">
            <div class="container">
              <h2 class="text-center zbz-on-top" data-appear="slideInUp" data-disappear="slideOutUp">
                <strong><?php echo $row['heading']; ?></strong>
              </h2>
              <hr data-appear="slideInUp" data-disappear="slideOutUp" data-delay="3" />
              <div class="row align-item-center" data-appear="slideInUp" data-disappear="slideOutUp">
                <div class="col-md-6">
                  <div class="main_content">
                    <h3 class="">
                      <?php echo $row['text']; ?>
                    </h3>
                    <a href="<?php echo $row['learn_more_link']; ?>" class="btn btn-ghost btn-default btn-lg">
                      <i class="fa fa-laptop"></i>
                      Learn More
                    </a>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="mt-5">
                    <img src="images/<?php echo $row['picture']; ?>" class="img-fluid" alt="" />
                  </div>
                </div>
              </div>
              <!-- /.row -->

              <hr data-appear="slideInUp" data-disappear="slideOutUp" data-delay="17" />
            </div>
            <!-- /.container -->
          </div>
          <!-- /.slide-content -->
        </div>
        <!-- /.slide-inner -->
      </section>

    <?php
    }
  }

  $get_fifth_sec = "SELECT * FROM home_fifth";
  $result_fifth_sec = $conn->query($get_fifth_sec);

  if ($result_fifth_sec->num_rows > 0) {
    while ($row = $result_fifth_sec->fetch_assoc()) {

    ?>
      <section class="zbz-slide" data-nav="About">
        <div class="zbz-slide-inner">
          <div class="zbz-slide-content">
            <div class="container">
              <div class="row" data-appear="fadeIn" data-disappear="fadeOut">
                <div class="col-md-4">
                  <h2>
                    <strong><?php echo $row['heading']; ?>​</strong>
                    <br />
                    <small>
                      <?php echo $row['sub_heading']; ?>
                    </small>
                  </h2>
                </div>
                <!-- /.col-md-6 ... -->
                <div class="col-sm-6 col-md-4">
                  <?php echo $row['text1']; ?>
                </div>
                <!-- /.col-sm-6 ... -->
                <div class="col-sm-6 col-md-4">
                  <?php echo $row['text2']; ?>
                </div>
                <!-- /.col-sm-6 ... -->
              </div>
              <!-- /.row -->
            </div>
            <!-- /.container -->
          </div>
          <!-- /.slide-content -->
        </div>
        <!-- /.slide-inner -->
      </section>


    <?php
    }
  }

  $get_sixth_sec = "SELECT * FROM home_sixth";
  $result_sixth_sec = $conn->query($get_sixth_sec);

  if ($result_sixth_sec->num_rows > 0) {
    while ($row = $result_sixth_sec->fetch_assoc()) {

    ?>
      <!-- Features slide -->

      <section class="zbz-slide" data-nav="Features">
        <div class="zbz-slide-inner">
          <div class="zbz-slide-content">
            <div class="container">
              <div class="row align-item-center">
                <div class="col-md-4 col-lg-3 zbz-on-top" data-appear="slideInUp" data-delay="-5" data-disappear="slideOutUp">
                  <h2>
                    <?php echo $row['heading']; ?>
                    <br />
                    <small>
                      <?php echo $row['sub_heading']; ?>
                    </small>
                  </h2>
                </div>
                <!-- /.col-md-4 -->
                <div class="col-sm-6 col-md-4 col-lg-4 zbz-on-top text-center">
                  <img src="images/subscribe_img.png" alt="" class="zbz-on-top zbz-image-fit-h-500" data-appear="slideInUp" data-delay="15" data-disappear="slideOutUp" />
                </div>
                <!-- /.col-md-4 -->
                <div class="col-sm-6 col-md-4 col-lg-5">
                  <div class="row">
                    <div class="col-lg-8">
                      <div class="zbz-feature-side zbz-xs-3x">
                        <div class="zbz-circle" data-role="zbz-flying">
                          <div class="zbz-inner">
                            <i class="fa icon-hd"></i>
                          </div>
                          <!-- /.zbz-inner -->
                        </div>
                        <!-- /.zbz-circle -->
                        <div class="zbz-description zbz-on-top" data-appear="slideInUp" data-disappear="slideOutUp">
                          <?php echo $row['text1']; ?>
                        </div>
                        <!-- /.description -->
                      </div>
                      <!-- /.zbz-feature-side -->
                    </div>
                    <!-- /.col-sm-4 -->
                    <div class="clearfix"></div>
                    <div class="col-lg-8 col-lg-offset-4">
                      <div class="zbz-feature-side zbz-xs-3x">
                        <div class="zbz-circle" data-role="zbz-flying">
                          <div class="zbz-inner">
                            <i class="fa icon-tv-1"></i>
                          </div>
                          <!-- /.zbz-inner -->
                        </div>
                        <!-- /.zbz-circle -->
                        <div class="zbz-description zbz-on-top" data-appear="slideInUp" data-delay="10" data-disappear="slideOutUp">
                          <?php echo $row['text2']; ?>
                        </div>
                        <!-- /.description -->
                      </div>
                      <!-- /.zbz-feature-side -->
                    </div>
                    <!-- /.col-sm-4 -->
                    <div class="clearfix"></div>
                    <div class="col-lg-8 col-lg-offset-2">
                      <div class="zbz-feature-side zbz-xs-3x">
                        <div class="zbz-circle" data-role="zbz-flying">
                          <div class="zbz-inner">
                            <i class="fa icon-tv-box"></i>
                          </div>
                          <!-- /.zbz-inner -->
                        </div>
                        <!-- /.zbz-circle -->
                        <div class="zbz-description zbz-on-top" data-appear="slideInUp" data-delay="20" data-disappear="slideOutUp">
                          <?php echo $row['text3']; ?>
                        </div>
                        <!-- /.description -->
                      </div>
                      <!-- /.zbz-feature-side -->
                    </div>
                    <!-- /.col-sm-4 -->
                  </div>
                  <!-- /.row -->
                </div>
                <!-- /.col-md-4 -->
              </div>
              <!-- /.row -->
            </div>
            <!-- /.container -->
          </div>
          <!-- /.slide-content -->
        </div>
        <!-- /.slide-inner -->
      </section>
  <?php
    }
  }

  ?>
  <!-- Numbers slide -->

  <!-- Pricing info -->

  <section class="zbz-slide" data-nav="Pricing">
    <div class="zbz-slide-inner">
      <div class="zbz-slide-content zbz-on-top">
        <div class="container">
          <h2 class="text-center" data-appear="fadeIn" data-disappear="fadeOut">Packages</h2>
          <div class="row zbz-pricing-table" data-role="zbz-equal-height">
            <?php
            $get_pricing_sec = "SELECT * FROM home_pricing";
            $result_pricing_sec = $conn->query($get_pricing_sec);

            $i = 0;
            if ($result_pricing_sec->num_rows > 0) {
              while ($row = $result_pricing_sec->fetch_assoc()) {
            ?>
                <div class="zbz-pricing-box <?php echo !empty($row['featured']) ? $row['featured'] : ''; ?> col-sm-6 col-md-3" data-appear="slideInUp" data-disappear="slideOutUp" data-delay="<?php echo $i; ?>">
                  <div class="inner">
                    <?php if (!empty($row['featured']) && $row['featured'] === 'featured') {
                      echo '<div class="zbz-ribbon"><span class="zbz-bg-pomegranate">Best value</span></div>';
                    } ?>
                    <h3> <?php echo $row['heading']; ?></h3>
                    <div class="price">
                      <ul>
                        <li><strong><?php echo $row['users']; ?></strong> users</li>
                        <li><strong><?php echo $row['space']; ?></strong> disk space</li>
                        <li><strong><?php echo $row['bandwidth']; ?></strong> bandwidth</li>
                        <?php if (!empty($row['mysql'])) { ?>
                          <li><strong><?php echo  $row['mysql']; ?></strong> MySQL databases</li>
                        <?php
                        }
                        ?>
                        <li><strong><?php echo $row['support']; ?></strong> support</li>
                        <?php if (!empty($row['support2'])) { ?>
                          <li><strong><?php echo  $row['support2']; ?></strong> support</li>
                        <?php
                        }
                        ?>

                      </ul>
                    </div>

                    <div class="action" style="bottom:30px;">
                      <a href="Contact.php" class="btn btn-primary btn-ghost<?php if (!empty($row['featured']) && $row['featured'] === 'featured') {
                                                                              echo $row['featured'];
                                                                            } ?> btn-lg btn-block">Sign up</a>
                    </div>
                  </div>
                </div>
            <?php
                $i = $i + 5;
              }
            }
            ?>
          </div>
          <!-- /.row -->

          <div class="zbz-footnote text-center" data-appear="fadeIn" data-disappear="fadeOut">
            * We also tailor service plans/packages to suit the needs of our customers
          </div>
          <!-- /.zbz-footnote -->
        </div>
        <!-- /.container -->
      </div>
      <!-- /.zbz-slide-content -->
    </div>
    <!-- /.zbz-slide-inner -->
  </section>
  <?php
  require_once('./inc/footer.php');
  ?>