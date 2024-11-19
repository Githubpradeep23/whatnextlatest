	<body>
		<!-- PRELOADER SPINNER
		============================================= -->
		<div id="loading" class="loading--theme">
			<div id="loading-center"><span class="loader"></span></div>
		</div>

		<!-- PAGE CONTENT
		============================================= -->
		<div id="page" class="page font--jakarta">

			<!-- HEADER
			============================================= -->
			<header id="header" class="tra-menu navbar-dark inner-page-header white-scroll">
				<div class="header-wrapper">

					<!-- MOBILE HEADER -->
					<div class="wsmobileheader clearfix">
						<a href="{{url('/')}}">
							<span class="smllogo"><img src="{{asset('logo/'. $Settings->logo)}}" alt="@if(!empty($Settings->title )) {{$Settings->title}} @endif" title="@if(!empty($Settings->title )) {{$Settings->title}} @endif">
							</span>
						</a>
						<a id="wsnavtoggle" class="wsanimated-arrow"><span></span></a>
					</div>

					<!-- NAVIGATION MENU -->
					<div class="wsmainfull menu clearfix">
						<div class="wsmainwp clearfix">

							<!-- HEADER BLACK LOGO -->
							<div class="desktoplogo">
								<a href="{{url('/')}}">
									<img class="light-theme-img" src="{{asset('logo/'. $Settings->logo)}}" alt="@if(!empty($Settings->title )) {{$Settings->title}} @endif" title="@if(!empty($Settings->title )) {{$Settings->title}} @endif">
								</a>
							</div>

							<!-- HEADER WHITE LOGO -->
							<div class="desktoplogo">
								<a href="{{url('/')}}" class="logo-white">
									<img class="light-theme-img" src="{{asset('logo/'. $Settings->logo)}}" alt="@if(!empty($Settings->title )) {{$Settings->title}} @endif" title="@if(!empty($Settings->title )) {{$Settings->title}} @endif">
								</a>
							</div>

							<!-- MAIN MENU -->
							<nav class="wsmenu clearfix">
								<ul class="wsmenu-list nav-theme">

									<li class="nl-simple" aria-haspopup="true"><a href="{{url('/')}}" class="h-link">Home</a></li>

									<li class="nl-simple" aria-haspopup="true"><a href="{{url('about-us')}}" class="h-link">About Us</a></li>

									<li aria-haspopup="true"><a href="{{url('clients-we-cater')}}" class="h-link">Clients We Cater<span class="wsarrow"></span></a>
										<ul class="sub-menu">
											<li class="nl-simple ClientsWeCater" aria-haspopup="true"><a href="{{url('clients-we-cater')}}" class="h-link">Clients We Cater </a></li>
											<li class="nl-simple" aria-haspopup="true"><a href="{{url('services')}}" class="h-link">Up Coming Projects </a></li>
										</ul>
									</li>

									<li class="nl-simple" aria-haspopup="true"><a href="{{url('services')}}" class="h-link">Services</a></li>

									<li class="nl-simple" aria-haspopup="true">
										<a href="{{url('contact-us')}}" class="btn r-04 btn--theme hover--theme last-link">Contact Us</a>
									</li>
								</ul>
							</nav> <!-- END MAIN MENU -->

						</div>
					</div> <!-- END NAVIGATION MENU -->

				</div> <!-- End header-wrapper -->
			</header> <!-- END HEADER -->