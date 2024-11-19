			<!-- FOOTER-3
			============================================= -->
			<footer id="footer-3" class="pt-100 footer">
				<div class="container">

					<!-- FOOTER CONTENT -->
					<div class="row">

						<!-- FOOTER LOGO -->
						<div class="col-xl-3">
							<div class="footer-info">
								<img class="footer-logo" src="{{asset('logo/'. $Settings->logo)}}" alt="footer-logo">
							</div>
						</div>

						<!-- FOOTER LINKS -->
						<div class="col-sm-3">
							<div class="footer-links fl-1">

								<!-- Title -->
								<h6 class="s-17 w-700">Company</h6>

								<!-- Links -->
								<ul class="foo-links clearfix">
									<li>
										<p><a href="{{url('/')}}">Home</a></p>
									</li>
									<li>
										<p><a href="{{url('about-us')}}">About Us</a></p>
									</li>
									<li>
										<p><a href="{{url('services')}}">Services</a></p>
									</li>
									<li>
										<p><a href="{{url('contact-us')}}">Contact Us</a></p>
									</li>
								</ul>

							</div>
						</div> <!-- END FOOTER LINKS -->

						<!-- FOOTER LINKS -->
						<div class="col-sm-3">
							<div class="footer-links fl-3">

								<!-- Title -->
								<h6 class="s-17 w-700">Legal</h6>

								<!-- Links -->
								<ul class="foo-links clearfix">
									<li>
										<p><a href="terms.html">Terms of Use</a></p>
									</li>
									<li>
										<p><a href="privacy.html">Privacy Policy</a></p>
									</li>
									<li>
										<p><a href="cookies.html">Cookie Policy</a></p>
									</li>
									<li>
										<p><a href="#">Site Map</a></p>
									</li>
								</ul>

							</div>
						</div> <!-- END FOOTER LINKS -->

						<!-- FOOTER LINKS -->
						<div class="col-sm-3">
							<div class="footer-links fl-4">

								<!-- Title -->
								<h6 class="s-17 w-700">Connect With Us</h6>

								<!-- Mail Link -->
								<p class="footer-mail-link ico-25">
									<a href="mailto:yourdomain@mail.com">info@whatnext4edu.com</a>
								</p>

								<!-- Social Links -->
								<ul class="footer-socials ico-25 text-center clearfix">
									<li><a href="#"><span class="flaticon-facebook"></span></a></li>
									<li><a href="#"><span class="flaticon-twitter"></span></a></li>
									<li><a href="#"><span class="flaticon-github"></span></a></li>
									<li><a href="#"><span class="flaticon-dribbble"></span></a></li>
								</ul>

							</div>
						</div> <!-- END FOOTER LINKS -->

					</div> <!-- END FOOTER CONTENT -->


					<hr> <!-- FOOTER DIVIDER LINE -->

					<!-- BOTTOM FOOTER -->
					<div class="bottom-footer">
						<div class="row row-cols-1 row-cols-md-2 d-flex align-items-center">

							<!-- FOOTER COPYRIGHT -->
							<div class="col">
								<div class="footer-copyright">
									<p class="p-sm">&copy; 2024. <span>All Rights Reserved</span></p>
								</div>
							</div>

							<!-- FOOTER SECONDARY LINK -->
							<div class="col">
								<div class="bottom-secondary-link ico-15 text-end">
									<p class="p-sm"><a href="{{url('/')}}">What-Next</a>
									</p>
								</div>
							</div>

						</div> <!-- End row -->
					</div> <!-- END BOTTOM FOOTER -->

				</div> <!-- End container -->
			</footer> <!-- END FOOTER-3 -->

			</div> <!-- END PAGE CONTENT -->

			<!-- EXTERNAL SCRIPTS
		============================================= -->
			<script src="{{asset('assets/frontend/js/jquery-3.7.0.min.js')}}"></script>
			<script src="{{asset('assets/frontend/js/bootstrap.min.js')}}"></script>
			<script src="{{asset('assets/frontend/js/modernizr.custom.js')}}"></script>
			<script src="{{asset('assets/frontend/js/jquery.easing.js')}}"></script>
			<script src="{{asset('assets/frontend/js/jquery.appear.js')}}"></script>
			<script src="{{asset('assets/frontend/js/menu.js')}}"></script>
			<script src="{{asset('assets/frontend/js/owl.carousel.min.js')}}"></script>
			<script src="{{asset('assets/frontend/js/pricing-toggle.js')}}"></script>
			<script src="{{asset('assets/frontend/js/jquery.magnific-popup.min.js')}}"></script>
			<script src="{{asset('assets/frontend/js/request-form.js')}}"></script>
			<script src="{{asset('assets/frontend/js/jquery.validate.min.js')}}"></script>
			<script src="{{asset('assets/frontend/js/jquery.ajaxchimp.min.js')}}"></script>
			<script src="{{asset('assets/frontend/js/popper.min.js')}}"></script>
			<script src="{{asset('assets/frontend/js/lunar.js')}}"></script>
			<script src="{{asset('assets/frontend/js/wow.js')}}"></script>

			<!-- Custom Script -->
			<script src="{{asset('assets/frontend/js/custom.js')}}"></script>

			<script>
				$(document).on({
					"contextmenu": function(e) {
						console.log("ctx menu button:", e.which);

						// Stop the context menu
						e.preventDefault();
					},
					"mousedown": function(e) {
						console.log("normal mouse down:", e.which);
					},
					"mouseup": function(e) {
						console.log("normal mouse up:", e.which);
					}
				});
			</script>

			<script>
				$(function() {
					$(".switch").click(function() {
						$("body").toggleClass("theme--dark");
						if ($("body").hasClass("theme--dark")) {
							$(".switch").text("Light Mode");
						} else {
							$(".switch").text("Dark Mode");
						}
					});
				});
			</script>

			<script>
				$(document).ready(function() {
					if ($("body").hasClass("theme--dark")) {
						$(".switch").text("Light Mode");
					} else {
						$(".switch").text("Dark Mode");
					}
				});
			</script>

			<script src="{{asset('assets/frontend/js/changer.js')}}"></script>
			<script defer src="{{asset('assets/frontend/js/styleswitch.js')}}"></script>

			<script>
				document.addEventListener('DOMContentLoaded', function() {
					window.addEventListener('scroll', function() {
						const links = document.querySelectorAll('.navbar-dark .wsmenu > .wsmenu-list > li > a.h-link');
						if (window.scrollY > 50) {
							links.forEach(link => link.classList.add('scrolled'));
						} else {
							links.forEach(link => link.classList.remove('scrolled'));
						}
					});
				});
			</script>

			</body>

			</html>