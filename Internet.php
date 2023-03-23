<?php

require("./inc/header.php");
?>

<!-- Slide keeper -->
<div class="zbz-slide-keeper">

	<div class="zbz-bg-cover" style="background-image: linear-gradient(45deg, #7e357b82, #7e357b30),url(images/bg4.jpg);"></div>

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
		$get_pricing_sec = "SELECT * FROM hero_internet";
		$result_pricing_sec = $conn->query($get_pricing_sec);

		$i = 0;
		if ($result_pricing_sec->num_rows > 0) {
			while ($row = $result_pricing_sec->fetch_assoc()) {
		?>
				<div class="zbz-slide-inner">
					<div class="zbz-slide-content zbz-on-top">
						<div class="container">
							<div class="row align-item-center" data-delay="0" data-disappear="fadeOut">

								<div class="col-sm-8 col-lg-6">
									<div class="zbz-feature-side zbz-xs-3x zbz-sm-4x">

										<div class="zbz-description">
											<div>
												<img class="img-fluid" src="images/network_filled.svg" alt="" style="width: 60px;">
											</div>
											<h1><strong><?php echo $row['heading']; ?></strong></h1>
											<p style="    font-size: 20px;"><?php echo $row['text']; ?></p>
											<div class="zbz-spacer-40"></div>
											<p>
												<a href="<?php echo $row['learn_more_link']; ?>" class="btn btn-ghost btn-default btn-lg"><i class="fa fa-laptop"></i> Learn More</a>
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
	<section class="zbz-slide" data-nav="Pricing">
		<div class="zbz-slide-inner">
			<div class="zbz-slide-content zbz-on-top">
				<div class="container">
					<h2 class="text-center" data-appear="fadeIn" data-disappear="fadeOut">
						Packages
					</h2>
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
					</div><!-- /.row -->

					<div class="zbz-footnote text-center" data-appear="fadeIn" data-disappear="fadeOut">
						* We also tailor service plans/packages to suit the needs of our customers
					</div><!-- /.zbz-footnote -->

				</div><!-- /.container -->
			</div><!-- /.zbz-slide-content -->
		</div><!-- /.zbz-slide-inner -->
	</section>

	<section class="zbz-slide" data-nav="form">
		<div class="zbz-slide-inner">
			<div class="zbz-slide-content zbz-on-top">
				<div class="container">
					<h2 class="text-center" data-appear="fadeIn" data-disappear="fadeOut">
						Service Enquiry Form
					</h2>
					<form id="inter_form" enctype="multipart/form-data">
						<div class="form-group col-md-6">
							<label for="name">Name</label>
							<input type="text" name="name" class="form-control input-lg">
						</div>
						<div class="form-group col-md-6">
							<label for="contact">Contact Number</label>
							<input type="tel" name="contact" class="form-control input-lg">
						</div>
						<div class="form-group col-md-6">
							<label for="Address">Address</label>
							<input type="text" name="Address" class="form-control input-lg">
						</div>
						<div class="form-group col-md-6">
							<label for="Date">Date</label>
							<input type="date" name="Date" class="form-control input-lg">
						</div>
						<div class="form-group col-md-12 Installation Installation_Surface">
							<label class="col-md-12 Surface">Installation Surface</label>
							<div class="form-group col-md-2">
								<input type="radio" name="Installation_Surface" value="Zinc">
								<label for="Zinc" class="sub_labels">Zinc</label>
							</div>
							<div class="form-group col-md-2">
								<input type="radio" name="Installation_Surface" value="Board">
								<label for="Board" class="sub_labels">Board</label>
							</div>
							<div class="form-group col-md-2">
								<input type="radio" name="Installation_Surface" value="Concrete">
								<label for="Concrete" class="sub_labels">Concrete</label>
							</div>
							<div class="form-group col-md-6">
								<!-- <label for="other">Other</label> -->
								<input type="text" name="other" placeholder="Other" class="form-control input-lg">
							</div>
						</div>
						<div class="form-group col-md-12 Installation Ownership">
							<label class="col-md-12 Surface">Premises Ownership</label>
							<div class="form-group col-md-2">
								<input type="radio" value="Owned" name="Ownership">
								<label for="Owned" class="sub_labels">Owned</label>
							</div>
							<div class="form-group col-md-2">
								<input type="radio" value="Rented" name="Ownership">
								<label for="Rented" class="sub_labels">Rented</label>
							</div>
							<div class="form-group col-md-2">
								<input type="radio" value="Leased" name="Ownership">
								<label for="Leased" class="sub_labels">Leased</label>
							</div>
							<div class="form-group col-md-6">
								<!-- <label for="other2">Other</label> -->
								<input type="text" name="other2" placeholder="Other" class="form-control input-lg">
							</div>
						</div>

						<div class="form-group col-md-6">
							<label for="Employment">Place Of Employment:</label>
							<input type="text" name="Employment" class="form-control input-lg" />
						</div>
						<div class="form-group col-md-6">
							<label for="Occupation">Occupation</label>
							<input type="text" name="Occupation" class="form-control input-lg" />
						</div>
						<div class="form-group col-md-6 mt-5">
							<label class="year col-md-12">Tenure Of Employment: </label>
							<div class="form-group col-md-6 px-0">
								<input type="number" name="Years2" placeholder="Years" class="form-control input-lg ">
							</div>
							<div class="form-group col-md-6 px-0">
								<input type="number" name="Months2" placeholder="Months" class="form-control input-lg ">
							</div>
						</div>
						<div class="form-group col-md-6">
							<label for="Purpose">Purpose Of The Service: </label>
							<input type="text" name="Purpose" class="form-control input-lg">
						</div>
						<div class="col-md-12">
							<div class="form-group col-md-6 px-0">
								<label class="year col-md-12  px-0">How long have you been living at the premises?</label>
								<div class="form-group col-md-6 px-0">
									<input type="number" name="Years" placeholder="Years" class="form-control input-lg ">
								</div>
								<div class="form-group col-md-6 px-0">
									<input type="number" name="Months" placeholder="Months" class="form-control input-lg ">
								</div>
							</div>
							<div class="form-group col-md-6 Account">
								<label class="Surface col-md-12">Type of Account: </label>
								<div class="form-group col-md-6">
									<input type="radio" name="Account" value="Residential">
									<label for="Residential" class="sub_labels">Residential</label>
								</div>
								<div class="form-group col-md-6">
									<input type="radio" name="Account" value="Commercial">
									<label for="Commercial" class="sub_labels">Commercial</label>
								</div>
							</div>
						</div>
						<div class="form-group button_div col-md-12">

							<button class="col-md-6 mx-auto btn-lg btn btn-default"> Submit</button>
						</div>
					</form>
				</div>
			</div>
		</div>
	</section>

	<?php require "inc/footer.php"; ?>