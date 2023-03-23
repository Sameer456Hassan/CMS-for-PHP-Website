<?php
require_once('./inc/header.php');
?>

<!-- Slide keeper -->
<div class="zbz-slide-keeper">

	<div class="zbz-bg-cover" style="background-image: linear-gradient(45deg, #7e357b82, #7e357b30),url(images/solar_bg.jpg);"></div>

	<!-- A curtain to make background darker -->
	<div class="tint-curtain" data-0="opacity: 0.5;" data-100p="opacity: 1;"></div>

	<!-- Home slide -->
	<section class="zbz-slide" data-nav="Home">
		<header>
			<div class="nav-wrapper">
				<a href="index.php" class="logo-container">
					<img src="images/sir-tech-logo-w2-1.svg" />
				</a>
				<nav>
					<input class="hidden" type="checkbox" id="menuToggle">
					<label class="menu-btn" for="menuToggle">
						<div class="menu"></div>
						<div class="menu"></div>
						<div class="menu"></div>
					</label>
					<div class="nav-container">
						<ul class="nav-tabs">
							<li class="nav-tab "><a href="index.php"> Home</a></li>
							<li class="nav-tab "><a href="AboutUs.php"> About Us</a></li>
							<li class="nav-tab"><a href="Contact.php"> Contact Us</a></li>
							<li class="nav-tab"><a href="https://sirtech.uisp.com/crm/login" class="login_btn"><i class="fa fa-sign-in-alt"></i> Log
									In</a></li>
						</ul>
					</div>
				</nav>
			</div>
		</header>
		<?php
		$get_sixth_sec = "SELECT * FROM hero_solar";
		$result_sixth_sec = $conn->query($get_sixth_sec);

		if ($result_sixth_sec->num_rows > 0) {
			while ($row = $result_sixth_sec->fetch_assoc()) {

		?>
				<div class="zbz-slide-inner">
					<div class="zbz-slide-content zbz-on-top">
						<div class="container">
							<div class="row align-item-center" data-delay="0" data-disappear="fadeOut">

								<div class="col-sm-8 col-lg-6">
									<div class="zbz-feature-side zbz-xs-3x zbz-sm-4x">

										<div class="zbz-description">
											<div>
												<img class="img-fluid" src="images/solar_panel.svg" alt="" style="width: 60px;">
											</div>
											<h1><strong><?php echo $row['heading']; ?></strong></h1>
											<p><?php echo $row['text']; ?></p>
											<div class="zbz-spacer-40"></div>
											<p>
												<a href="<?php echo $row['learn_more_link']; ?>" class="btn btn-ghost btn-default btn-lg"><i class="fa fa-laptop"></i> Learn More</a>
											</p>
										</div><!-- /.description -->
									</div><!-- /.zbz-feature-side -->
								</div>
								<div class=" col-lg-6">
									<img src="images/<?php echo $row['picture']; ?>" alt="" class="solar_hero_img img-responsive" data-disappear="fadeOut" data-delay="0" />
								</div>
							</div><!-- /.row -->
						</div><!-- /.container -->
					</div><!-- /.slide-content -->
				</div><!-- /.slide-inner -->
		<?php
			}
		}
		?>
	</section>
	<?php
	$get_sixth_sec = "SELECT * FROM solar_first";
	$result_sixth_sec = $conn->query($get_sixth_sec);

	if ($result_sixth_sec->num_rows > 0) {
		while ($row = $result_sixth_sec->fetch_assoc()) {

	?>
			<section class="zbz-slide" data-nav="aa">
				<div class="zbz-slide-inner">
					<div class="zbz-slide-content">
						<div class="container">
							<h2 class="text-center zbz-on-top" data-appear="slideInUp" data-disappear="slideOutUp">
								<?php echo $row['heading']; ?>
							</h2>
							<hr data-appear="slideInUp" data-disappear="slideOutUp" data-delay="3" />
							<div class="row align-item-center" data-appear="slideInUp" data-disappear="slideOutUp">
								<div class="col-md-6">
									<div class="about-four__left">
										<div class="about-four__img-box">
											<div class="about-four__img-one">
												<img src="images/<?php echo $row['picture2']; ?>" alt="">
											</div>
											<div class="about-four__img-two">
												<img src="images/<?php echo $row['picture1']; ?>" alt="">
											</div>
											<div class="about-four__border"></div>
										</div>
									</div>
								</div>
								<div class="col-md-6">
									<div class="main_content">
										<h3 class=""><?php echo $row['text']; ?></h3>
										<a href="<?php echo $row['learn_more_link']; ?>" class="btn btn-ghost btn-default btn-lg"><i class="fa fa-laptop"></i> Contact Us Today</a>
									</div>
								</div>

							</div><!-- /.row -->

							<hr data-appear="slideInUp" data-disappear="slideOutUp" data-delay="17" />

						</div><!-- /.container -->
					</div><!-- /.slide-content -->
				</div><!-- /.slide-inner -->
			</section>
	<?php
		}
	}
	?>
	<?php require "inc/footer.php"; ?>