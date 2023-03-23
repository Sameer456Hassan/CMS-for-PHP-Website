<?php
require("./inc/header.php");
?>

<!-- Slide keeper -->
<div class="zbz-slide-keeper">

	<div class="zbz-bg-cover" style="background-image: linear-gradient(45deg, #7e357b82, #7e357b30),url(images/hospitality-bg.jpg);"></div>

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

		$get_sixth_sec = "SELECT * FROM hero_hospitality";
		$result_sixth_sec = $conn->query($get_sixth_sec);

		if ($result_sixth_sec->num_rows > 0) {
			while ($row = $result_sixth_sec->fetch_assoc()) {

		?>
				<div class="zbz-slide-inner">
					<div class="zbz-slide-content zbz-on-top">
						<div class="container">
							<div class="row" data-delay="0" data-disappear="fadeOut">

								<div class="col-sm-8 col-lg-6">
									<div class="zbz-feature-side zbz-xs-3x zbz-sm-4x">

										<div class="zbz-description">
											<div>
												<img class="img-fluid" src="images/pc_on_desk_filled.svg" alt="" style="width: 60px;">
											</div>
											<h1 class="mb-2"><strong><?php echo $row['heading']; ?></strong></h1>
											<p><?php echo $row['text']; ?></p>
											<div class="zbz-spacer-40"></div>
											<p>
												<a href="Contact.php" class="btn btn-ghost btn-default btn-lg"><i class="fa fa-laptop"></i> Contact Us Today</a>
											</p>
										</div><!-- /.description -->
									</div><!-- /.zbz-feature-side -->
								</div><!-- /.col-md-7 -->
								<div class=" col-lg-6">
									<img src="images/<?php echo $row['picture']; ?>" alt="" class="img-responsive" data-disappear="fadeOut" data-delay="0" />
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

	$get_sixth_sec = "SELECT * FROM first_hospitality";
	$result_sixth_sec = $conn->query($get_sixth_sec);

	if ($result_sixth_sec->num_rows > 0) {
		while ($row = $result_sixth_sec->fetch_assoc()) {
	?>
			<section class="zbz-slide" data-nav="aa">
				<div class="zbz-slide-inner">
					<div class="zbz-slide-content">
						<div class="container">
							<hr data-appear="slideInUp" data-disappear="slideOutUp" data-delay="3" />
							<div class="row align-item-center" data-appear="slideInUp" data-disappear="slideOutUp">
								<div class="col-md-6">
									<img src="images/<?php echo $row['picture']; ?>" class="img-fluid" alt="">
								</div>
								<div class="col-md-6">
									<div class="main_content">
										<ul class="main_iptv_ul list-unstyled ">
											<li class="">
												<div class="zbz-feature-side zbz-xs-3x">
													<div class="zbz-circle" data-role="zbz-flying">
														<div class="zbz-inner">
															<i class="fa icon-wifi"></i>
														</div><!-- /.zbz-inner -->
													</div><!-- /.zbz-circle -->
													<!-- /.description -->
												</div>
												<div class="main_iptv_content">
													<?php echo $row['text1']; ?>
												</div>
											</li>
											<li class="">
												<div class="zbz-feature-side zbz-xs-3x">
													<div class="zbz-circle" data-role="zbz-flying">
														<div class="zbz-inner">
															<i class="fa icon-theatre"></i>
														</div><!-- /.zbz-inner -->
													</div><!-- /.zbz-circle -->
													<!-- /.description -->
												</div>
												<div class="main_iptv_content">
													<?php echo $row['text2']; ?>
												</div>
											</li>
										</ul>
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


	$get_sixth_sec = "SELECT * FROM second_hospitality";
	$result_sixth_sec = $conn->query($get_sixth_sec);

	if ($result_sixth_sec->num_rows > 0) {
		while ($row = $result_sixth_sec->fetch_assoc()) {
		?>
			<section class="zbz-slide" data-nav="aa">
				<div class="zbz-slide-inner">
					<div class="zbz-slide-content">
						<div class="container">
							<hr data-appear="slideInUp" data-disappear="slideOutUp" data-delay="3" />
							<div class="row align-item-center" data-appear="slideInUp" data-disappear="slideOutUp">
								<div class="col-md-6">
									<img src="images/<?php echo $row['picture']; ?>" class="img-fluid" alt="">
								</div>
								<div class="col-md-6">
									<div class="main_content">
										<ul class="main_iptv_ul list-unstyled ">
											<li class="">
												<div class="zbz-feature-side zbz-xs-3x">
													<div class="zbz-circle" data-role="zbz-flying">
														<div class="zbz-inner">
															<i class="fa icon-wifi"></i>
														</div><!-- /.zbz-inner -->
													</div><!-- /.zbz-circle -->
													<!-- /.description -->
												</div>
												<div class="main_iptv_content">
													<p>
														<?php echo $row['text1']; ?></p>
												</div>
											</li>
											<li class="">
												<div class="zbz-feature-side zbz-xs-3x">
													<div class="zbz-circle" data-role="zbz-flying">
														<div class="zbz-inner">
															<i class="fa icon-theatre"></i>
														</div><!-- /.zbz-inner -->
													</div><!-- /.zbz-circle -->
													<!-- /.description -->
												</div>
												<div class="main_iptv_content">
													<p><?php echo $row['text2']; ?></p>
												</div>
											</li>
										</ul>
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

	$get_sixth_sec = "SELECT * FROM third_hospitality";
	$result_sixth_sec = $conn->query($get_sixth_sec);

	if ($result_sixth_sec->num_rows > 0) {
		while ($row = $result_sixth_sec->fetch_assoc()) {
		?>
			<section class="zbz-slide" data-nav="aa">
				<div class="zbz-slide-inner">
					<div class="zbz-slide-content">
						<div class="container">
							<hr data-appear="slideInUp" data-disappear="slideOutUp" data-delay="3" />
							<div class="row align-item-center" data-appear="slideInUp" data-disappear="slideOutUp">
								<div class="col-md-6">
									<div class="main_content">
										<ul class="main_iptv_ul list-unstyled ">
											<li class="">
												<div class="zbz-feature-side zbz-xs-3x">
													<div class="zbz-circle" data-role="zbz-flying">
														<div class="zbz-inner">
															<i class="fa icon-smart-tv"></i>
														</div><!-- /.zbz-inner -->
													</div><!-- /.zbz-circle -->
													<!-- /.description -->
												</div>
												<div class="main_iptv_content">
													<p><?php echo $row['text1']; ?></p>
												</div>
											</li>
											<li class="">
												<div class="zbz-feature-side zbz-xs-3x">
													<div class="zbz-circle" data-role="zbz-flying">
														<div class="zbz-inner">
															<i class="fa fa-bookmark"></i>
														</div><!-- /.zbz-inner -->
													</div><!-- /.zbz-circle -->
													<!-- /.description -->
												</div>
												<div class="main_iptv_content">
													<p><?php echo $row['text2']; ?></p>

												</div>
											</li>
											<li class="">
												<div class="zbz-feature-side zbz-xs-3x">
													<div class="zbz-circle" data-role="zbz-flying">
														<div class="zbz-inner">
															<i class="fa icon-high-speed"></i>
														</div><!-- /.zbz-inner -->
													</div><!-- /.zbz-circle -->
													<!-- /.description -->
												</div>
												<div class="main_iptv_content">
													<p><?php echo $row['text3']; ?></p>

												</div>
											</li>
										</ul>
									</div>
								</div>
								<div class="col-md-6">
									<img src="images/<?php echo $row['picture']; ?>" class="img-fluid" alt="">
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
	$get_sixth_sec = "SELECT * FROM fourth_hospitality";
	$result_sixth_sec = $conn->query($get_sixth_sec);

	if ($result_sixth_sec->num_rows > 0) {
		while ($row = $result_sixth_sec->fetch_assoc()) {
		?>
			<section class="zbz-slide" data-nav="nh">
				<div class="zbz-slide-inner">
					<div class="zbz-slide-content">
						<div class="container">
							<div class="zbz-outer-space">
								<div class="row" data-appear="slideInUp" data-disappear="slideOutUp">
									<div class="main_card_iptv col-md-4 margin-top">
										<div class="card zbz-xs-3x">
											<div>
												<h3><?php echo $row['heading1'];?></h3>
												<p><?php echo $row['text1'];?></p>
											</div>
											<div class="zbz-circle" data-role="zbz-flying">
												<div class="zbz-inner">
													<i class="fa icon-horror"></i>
												</div><!-- /.zbz-inner -->
											</div>

										</div>
									</div>
									<div class="main_card_iptv col-md-4 margin-top">
										<div class="card zbz-xs-3x">
											<div>
												<h3><?php echo $row['heading2'];?></h3>
												<p><?php echo $row['text2'];?></p>
											</div>
											<div class="zbz-circle" data-role="zbz-flying">
												<div class="zbz-inner">
													<i class="fa icon-smart-tv"></i>
												</div><!-- /.zbz-inner -->
											</div>

										</div>
									</div>
									<div class="main_card_iptv col-md-4">
										<div class="card zbz-xs-3x">
											<div>
												<h3><?php echo $row['heading3'];?></h3>
												<p><?php echo $row['text3'];?></p>
											</div>
											<div class="zbz-circle" data-role="zbz-flying">
												<div class="zbz-inner">
													<i class="fa icon-tv-box"></i>
												</div><!-- /.zbz-inner -->
											</div>

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