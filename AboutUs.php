<?php
require("./inc/header.php");
?>

<!-- Slide keeper -->
<div class="zbz-slide-keeper">

	<div class="zbz-bg-cover" style="background-image: linear-gradient(45deg, #7e357b82, #7e357b30),url(images/bg2.jpg);"></div>

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
		<div class="zbz-slide-inner">
			<div class="zbz-slide-content zbz-on-top">
				<div class="container">
					<div class="row align-item-center" data-delay="0" data-disappear="fadeOut">

						<?php

						$qry = "SELECT * FROM hero_about";
						$res = $conn->query($qry);

						if ($res->num_rows > 0) {
							while ($row = $res->fetch_assoc()) {
						?>
								<div class="col-sm-8 col-lg-6">
									<div class="zbz-feature-side zbz-xs-3x zbz-sm-4x">
										<div class="zbz-description">
											<h1><strong><?php echo $row['heading'] ?></strong></h1>
											<p><?php echo $row['text'] ?></p>
											<div class="zbz-spacer-40"></div>
											<p>
												<a href="<?php echo $row['learn_more_link'] ?>" class="btn btn-ghost btn-default btn-lg"><i class="fa fa-laptop"></i> Learn More</a>
											</p>
										</div><!-- /.description -->

									</div><!-- /.zbz-feature-side -->
								</div>
								<div class="col-lg-6 marg-top-30">
									<div class="about-one__left">
										<div class="about-one__img-box wow slideInLeft animated" data-wow-delay="100ms" data-wow-duration="2500ms" style="visibility: visible; animation-duration: 2500ms; animation-delay: 100ms; animation-name: slideInLeft;">
											<div class="about-one__img-1 about-hero-img">
												<img src="images/<?php echo $row['picture1'] ?>" alt="">
											</div>
											<div class="about-one__img-2 about-hero-img-2">
												<img src="images/<?php echo $row['picture2'] ?>" alt="">
											</div>
											<div class="about-one-shape"></div>
										</div>
									</div>
								</div>
						<?php
							}
						}
						?>
					</div><!-- /.row -->
				</div><!-- /.container -->
			</div><!-- /.slide-content -->
		</div><!-- /.slide-inner -->
	</section>
	<?php

	$qry = "SELECT * FROM first_about";
	$res = $conn->query($qry);

	if ($res->num_rows > 0) {
		while ($row = $res->fetch_assoc()) {
	?>
			<section class="zbz-slide" data-nav="About">
				<div class="zbz-slide-inner">
					<div class="zbz-slide-content">
						<div class="container">
							<div class="row" data-appear="fadeIn" data-disappear="fadeOut">
								<div class="col-md-12 text-center">
									<h2><strong><?php echo $row['heading'] ?>​</strong></h2>
								</div>
								<div class="col-sm-6 col-md-4">
									<?php echo $row['text1'] ?>
								</div><!-- /.col-sm-6 ... -->
								<div class="col-sm-6 col-md-4">
									<?php echo $row['text2'] ?>
								</div><!-- /.col-sm-6 ... -->
								<div class="col-sm-6 col-md-4">
									<?php echo $row['text3'] ?>
								</div><!-- /.col-sm-6 ... -->
							</div><!-- /.row -->
						</div><!-- /.container -->


					</div><!-- /.slide-content -->
				</div><!-- /.slide-inner -->
			</section>
		<?php
		}
	}


	$qry = "SELECT * FROM second_about";
	$res = $conn->query($qry);

	if ($res->num_rows > 0) {
		while ($row = $res->fetch_assoc()) {
		?>
			<section class="zbz-slide" data-nav="aa">
				<div class="zbz-slide-inner">
					<div class="zbz-slide-content">
						<div class="container">
							<h2 class="text-center zbz-on-top" data-appear="slideInUp" data-disappear="slideOutUp">
								<?php echo $row['section_heading'] ?>
							</h2>
							<hr data-appear="slideInUp" data-disappear="slideOutUp" data-delay="3" />
							<div class="zbz-outer-space">
								<div>

								</div>
								<div class="row align-item-center" data-appear="slideInUp" data-disappear="slideOutUp">
									<div class="col-md-6">
										<div>
											<img src="images/computer_repair.jpg" class="img-fluid" alt="">
										</div>
									</div>
									<div class="col-md-6">
										<div class="main_content">
											<h2 class=""><strong><?php echo $row['heading'] ?></strong></h2>
											<h5 class=""><?php echo $row['text'] ?></h5>
											<ul class="main_ul list-unstyled">
												<?php
												$point = $row['lis'];
												$points = explode(",", $point);
												foreach ($points as $p) {
													echo  '<li class="">
													<div class="zbz-circle" data-role="zbz-flying">
														<div class="zbz-inner">
															<i class="fa fa-check"></i>
														</div>
													</div>
													' . $p . '	
												</li>';
												}
												?>
											</ul>
										</div>
									</div>

								</div><!-- /.row -->
							</div>
							<hr data-appear="slideInUp" data-disappear="slideOutUp" data-delay="17" />

						</div><!-- /.container -->
					</div><!-- /.slide-content -->
				</div><!-- /.slide-inner -->
			</section>
		<?php
		}
	}

	$qry = "SELECT * FROM third_about";
	$res = $conn->query($qry);

	if ($res->num_rows > 0) {
		while ($row = $res->fetch_assoc()) {
		?>
			<section class="zbz-slide" data-nav="e">
				<div class="zbz-slide-inner">
					<div class="zbz-slide-content">
						<div class="container">
							<hr data-appear="slideInUp" data-disappear="slideOutUp" data-delay="3" />
							<div class="zbz-outer-space">
								<div>

								</div>
								<div class="row align-item-center" data-appear="slideInUp" data-disappear="slideOutUp">
									<div class="col-md-6">
										<div class="main_content">
											<h2 class=""><strong><?php echo $row['heading'] ?></strong></h2>
											<h5 class=""><?php echo $row['text'] ?></h5>

										</div>
									</div>

									<div class="col-md-6">
										<div>
											<img src="images/<?php echo $row['picture'] ?>" class="img-fluid" alt="">
										</div>
									</div>

								</div><!-- /.row -->
							</div>
							<hr data-appear="slideInUp" data-disappear="slideOutUp" data-delay="17" />

						</div><!-- /.container -->
					</div><!-- /.slide-content -->
				</div><!-- /.slide-inner -->
			</section>
		<?php
		}
	}

	$qry = "SELECT * FROM fourth_about";
	$res = $conn->query($qry);

	if ($res->num_rows > 0) {
		while ($row = $res->fetch_assoc()) {
		?>
			<section class="zbz-slide" data-nav="trt">
				<div class="zbz-slide-inner">
					<div class="zbz-slide-content">
						<div class="container">

							<hr data-appear="slideInUp" data-disappear="slideOutUp" data-delay="3" />
							<div class="zbz-outer-space">
								<div class="row align-item-center" data-appear="slideInUp" data-disappear="slideOutUp">
									<div class="col-md-6">
										<div>
											<img src="images/<?php echo $row['picture'] ?>" class="img-fluid" alt="">
										</div>
									</div>
									<div class="col-md-6">
										<div class="main_content">
											<h2 class=""><strong><?php echo $row['heading'] ?></strong></h2>
											<h5 class=""><?php echo $row['text'] ?></h5>
											<ul class="main_ul list-unstyled">
												<?php
												$point = $row['point'];
												$points = explode(",", $point);
												foreach ($points as $p) {
													echo '<li class="">
													<div class="zbz-circle" data-role="zbz-flying">
														<div class="zbz-inner">
															<i class="fa fa-check"></i>
														</div>
													</div>
													' . $p . '
												</li>';
												}
												?>
											</ul>
										</div>
									</div>

								</div><!-- /.row -->
							</div>
							<hr data-appear="slideInUp" data-disappear="slideOutUp" data-delay="17" />

						</div><!-- /.container -->
					</div><!-- /.slide-content -->
				</div><!-- /.slide-inner -->
			</section>
		<?php
		}
	}

	$qry = "SELECT * FROM fifth_about";
	$res = $conn->query($qry);

	if ($res->num_rows > 0) {
		while ($row = $res->fetch_assoc()) {
		?>
			<section class="zbz-slide" data-nav="rt">
				<div class="zbz-slide-inner">
					<div class="zbz-slide-content">
						<div class="container">
							<hr data-appear="slideInUp" data-disappear="slideOutUp" data-delay="3" />
							<div class="zbz-outer-space">
								<div>

								</div>
								<div class="row align-item-center" data-appear="slideInUp" data-disappear="slideOutUp">
									<div class="col-md-6">
										<div class="main_content">
											<h2 class=""><strong><?php echo $row['heading'] ?></strong></h2>
											<h5 class=""><?php echo $row['text'] ?></h5>

										</div>
									</div>

									<div class="col-md-6">
										<div>
											<img src="images/<?php echo $row['picture'] ?>" class="img-fluid" alt="">
										</div>
									</div>

								</div><!-- /.row -->
							</div>
							<hr data-appear="slideInUp" data-disappear="slideOutUp" data-delay="17" />

						</div><!-- /.container -->
					</div><!-- /.slide-content -->
				</div><!-- /.slide-inner -->
			</section>

		<?php
		}
	}

	$qry = "SELECT * FROM sixth_about";
	$res = $conn->query($qry);

	if ($res->num_rows > 0) {
		while ($row = $res->fetch_assoc()) {
		?>
			<section class="zbz-slide" data-nav="nh">
				<div class="zbz-slide-inner">
					<div class="zbz-slide-content">
						<div class="container">
							<div class="zbz-outer-space">
								<div class="row" data-appear="slideInUp" data-disappear="slideOutUp">
									<div class="main_card col-md-4 margin-top">
										<div class="card zbz-xs-3x">
											<div class="zbz-circle" data-role="zbz-flying">
												<div class="zbz-inner">
													<i class="fa icon-4k"></i>
												</div><!-- /.zbz-inner -->
											</div>
											<h3><?php echo $row['heading1'] ?></h3>
											<p><?php echo $row['text1'] ?></p>
										</div>
									</div>
									<div class="main_card col-md-8">
										<div class="card zbz-xs-3x">
											<div class="zbz-circle" data-role="zbz-flying">
												<div class="zbz-inner">
													<i class="fa icon-smart-tv"></i>
												</div><!-- /.zbz-inner -->
											</div>
											<h3><?php echo $row['heading2'] ?></h3>
											<p><?php echo $row['text2'] ?></p>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</section>
	<?php
		}
	}
	require "inc/footer.php"; ?>