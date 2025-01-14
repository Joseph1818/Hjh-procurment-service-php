<!DOCTYPE HTML>

<html>

<head>
	<title>Contact</title>
	<meta charset="utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
	<link rel="shortcut icon" href="/images/HJH_PIC4.png" type="image/x-icon">
	<link rel="stylesheet" href="home/css/main.css" />
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">

	<noscript>
		<link rel="stylesheet" href="assets/css/noscript.css" />
	</noscript>
	<script src="assets/js/contact.js"></script>
    <script
      type="text/javascript"
      src="https://cdn.jsdelivr.net/npm/@emailjs/browser@3/dist/email.min.js"
    ></script>
    <script type="text/javascript">
      (function () {
        emailjs.init("3RzimA0B-SR8UJ11A");
      })();
    </script>
</head>

<body class="is-preload">
	<div id="page-wrapper">

		<!-- Header -->

		<header id="header">
			<h1 id="logo">
				<a href="index.html">
					<img src="images/HJH_LOGO.png" alt="Logo" />
				</a>
			</h1>
			<nav id="nav">
				<ul>
					<li><a href="{{ route('home.index') }}">HOME</a></li>
					<li><a href="{{ route('home.procurement') }}">PROCUREMENT</a></li>
					<li><a href="{{ route('home.worldwide-presence') }}">WORLDWIDE PRESENCE</a></li>
					<li><a href="{{ route('home.about') }}">ABOUT</a></li>
					<li><a href="{{ route('home.contact') }}">CONTACT</a></li>

				</ul>
			</nav>
		</header>

			<!-- Main -->
				<div id="main" class="wrapper style1">
					<div class="container">
						
						<!-- Content -->
							<section id="content">
								<div class="new_home_web">
									<div class="responsive-container-block big-container">
									  <img class="imgBG" src="https://workik-widget-assets.s3.amazonaws.com/widget-assets/images/aw65.png">
									  <div class="responsive-container-block textContainer">
										<div class="topHead">
										  <p class="text-blk heading">
											Get in
											<span class="orangeText">
											  touch
											</span>
										  </p>
										  <div class="orangeLine" id="w-c-s-bgc_p-2-dm-id">
										  </div>
										</div>
										<p class="text-blk subHeading">
										  Our team will like to hear from you 
										</p>
									  </div>
									  <div class="responsive-container-block container">
										<div class="responsive-cell-block wk-tab-12 wk-mobile-12 wk-desk-7 wk-ipadp-10 line" id="i69b">
										  <form class="form-box" id="contact-form">
											<div class="container-block form-wrapper">
											  <div class="responsive-container-block">
												<div class="left4">
													<!-- First Name Field -->
													<div class="responsive-cell-block wk-ipadp-6 wk-tab-12 wk-mobile-12 wk-desk-6"
														id="i10mt-2">
														<label for="name">Name</label>
														<input class="input" id="name" name="FirstName" required>
													</div>
													
													<div
														class="responsive-cell-block wk-desk-6 wk-ipadp-6 wk-tab-12 wk-mobile-12 lastPhone">
														<label for="phone_number">Phone Number</label>
														<input class="input" id="phone_number" name="PhoneNumber" required>
													</div>
													<!-- Email Field -->
													<div
														class="responsive-cell-block wk-desk-6 wk-ipadp-6 wk-tab-12 wk-mobile-12">
														<label for="email">Email Address</label>
														<input class="input" id="email" name="Email" required>
													</div>

												</div>

												<!-- Message Field -->
												<div class="responsive-cell-block wk-tab-12 wk-mobile-12 wk-desk-12 wk-ipadp-12"
													id="i634i-2">
													<label for="message">Message</label>
													<textarea class="textinput" id="message" required style="color: black;"></textarea>
												</div>
											</div>

											<!-- Submit Button -->
											<button type="button" class="send" style="cursor: pointer;" onclick="sendMail()">
												Send
											</button>
										</div>
									</form>

									 <!-- Confirmation Message -->
										<!-- Confirmation Message -->
										<div id="confirmation-message" style="display: none;" class="message success">
											<span class="icon"><i class="fas fa-check-circle"></i></span> Your message was sent successfully!
										</div>
										<div id="error-message" style="display: none;" class="message error">
											<span class="icon"><i class="fas fa-times-circle"></i></span> Failed to send the message. Please try again.
										</div>
  
								</div>
							</div>

						</div>
					</div>
				</section>

			</div>
		</div>

		<!-- Footer -->
		<footer id="footer">
			<ul class="icons">
				<li><a href="#" class="icon brands alt fa-facebook-f"><span class="label">Facebook</span></a></li>
				<li><a href="#" class="icon brands alt fa-linkedin-in"><span class="label">LinkedIn</span></a></li>
				<li><a href="#" class="icon brands alt fa-instagram"><span class="label">Instagram</span></a></li>
				<li><a href="#" class="icon solid alt fa-envelope"><span class="label">Email</span></a></li>
			</ul>
			<ul class="copyright">
				<li>&copy;All rights HJH 2024 reserved.</li>
			</ul>
		</footer>

	</div>

	<!-- Scripts -->
	<!-- Scripts -->
	<script src="home/js/jquery.min.js"></script>
	<script src="home/js/jquery.scrolly.min.js"></script>
	<script src="home/js/jquery.dropotron.min.js"></script>
	<script src="home/js/jquery.scrollex.min.js"></script>
	<script src="home/js/browser.min.js"></script>
	<script src="home/js/breakpoints.min.js"></script>
	<script src="home/js/util.js"></script>
	<script src="home/js/main.js"></script>
	<script src="home/js/custom.js"></script>
	<script src="home/js/swiper-init.js"></script>
	<script src="home/js/newsletter.js"></script>
	<script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
</body>

</html>