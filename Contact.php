<?php
require("./inc/header.php");
?>

<!-- Slide keeper -->
<div class="zbz-slide-keeper">

	<div class="zbz-bg-cover" style="background-image: linear-gradient(45deg, #7e357b82, #7e357b30),url(images/contact_bg.jpg);"></div>

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

						$qry = "SELECT * FROM contact";
						$res = $conn->query($qry);

						if ($res->num_rows > 0) {
							while ($row = $res->fetch_assoc()) {
						?>
								<div class="col-lg-12">
									<div class="zbz-feature-side zbz-xs-3x zbz-sm-4x">

										<div class="zbz-description text-center">
											<h1><strong>Contact Us</strong></h1>
											<h4><strong>Address: </strong> <?php echo $row['address'] ?></h4>
											<h4><strong>Telephone: </strong> <?php echo $row['phone'] ?></h4>
											<h4><strong>Email: </strong> <?php echo $row['email'] ?></h4>
											<div class="zbz-spacer-40"></div>

										</div><!-- /.description -->
									</div><!-- /.zbz-feature-side -->
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

	<?php require "inc/footer.php"; ?>