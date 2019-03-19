<!doctype html>

<html class="fixed">
	<head>
<!-- Basic -->
		<meta charset="UTF-8">

		<title>Sensor Monitoring System</title>
		<meta name="keywords" content="Sensor Monitoring System" />
		<meta name="description" content="Real Time Sensor Monitoring System">
		<meta name="author" content="AOGO Technologies Pte Ltd">

		<!-- Mobile Metas -->
		<meta name="viewport" content="width=device-width, initial-scale=1.0,
			maximum-scale=1.0, user-scalable=no" />

		<!-- Web Fonts  -->
		<link
			href="http://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800|Shadows+Into+Light"
			rel="stylesheet" type="text/css">

		<!-- Vendor CSS -->
		<link rel="stylesheet" href="assets/vendor/bootstrap/css/bootstrap.css" />
		<link rel="stylesheet" href="assets/vendor/font-awesome/css/font-awesome.css"
			/>
		<link rel="stylesheet" href="assets/vendor/magnific-popup/magnific-popup.css"
			/>
		<link rel="stylesheet"
			href="assets/vendor/bootstrap-datepicker/css/datepicker3.css" />

		<!-- Specific Page Vendor CSS -->
		<link rel="stylesheet" href="assets/vendor/morris/morris.css" />

		<!-- Theme CSS -->
		<link rel="stylesheet" href="assets/stylesheets/theme.css" />

		<!-- Skin CSS -->
		<link rel="stylesheet" href="assets/stylesheets/skins/default.css" />

		<!-- Theme Custom CSS -->
		<link rel="stylesheet" href="assets/stylesheets/theme-custom.css">

		<!-- Head Libs -->
		<script src="assets/vendor/modernizr/modernizr.js"></script>

	</head>
	<body>


		<section class="body">

			<!-- start: header -->
			<header class="header">
				<div class="logo-container">
				<a href="http://localhost/" class="logo">
						<img src="assets/images/logo.png" height="35" alt="Porto Admin" />
					</a>
					<div class="visible-xs toggle-sidebar-left"
						data-toggle-class="sidebar-left-opened" data-target="html"
						data-fire-event="sidebar-left-opened">
						<i class="fa fa-bars" aria-label="Toggle sidebar"></i>
					</div>
				</div>

				<!-- start: search & user box -->
				<div class="header-right">

					<form action="pages-search-results" class="search nav-form">
						<div class="input-group input-search">
							<input type="text" class="form-control" name="q" id="q"
								placeholder="Search...">
							<span class="input-group-btn">
								<button class="btn btn-default" type="submit"><i class="fa fa-search"></i></button>
							</span>
						</div>
					</form>

					<span class="separator"></span>

					<!-- Notification Section -->
					<ul class="notifications">
						<li>
							<a href="#" class="dropdown-toggle notification-icon"
								data-toggle="dropdown">
								<i class="fa fa-bell"></i>
								<span class="badge">3</span>
							</a>

							<div class="dropdown-menu notification-menu">
								<div class="notification-title">
									<span class="pull-right label label-default">3</span>
									Alerts
								</div>

								<div class="content">
									<ul>
										<li>
											<a href="#" class="clearfix">
												<div class="image">
													<i class="fa fa-thumbs-down bg-danger"></i>
												</div>
												<span class="title">Server is Down!</span>
												<span class="message">Just now</span>
											</a>
										</li>
										<li>
											<a href="#" class="clearfix">
												<div class="image">
													<i class="fa fa-lock bg-warning"></i>
												</div>
												<span class="title">Sensor 9 was overhead</span>
												<span class="message">15 minutes ago</span>
											</a>
										</li>
										<li>
											<a href="#" class="clearfix">
												<div class="image">
													<i class="fa fa-signal bg-success"></i>
												</div>
												<span class="title">Connection Restored</span>
												<span class="message">10/10/2019</span>
											</a>
										</li>
									</ul>

									<hr />

									<div class="text-right">
										<a href="#" class="view-more">View All</a>
									</div>
								</div>
							</div>
						</li>
					</ul>
					<!-- Notification Section -->
					<span class="separator"></span>

				</div>
				<!-- end: search & user box -->
			</header>
			<!-- end: header -->

			<!-- Navigation -->
			<div class="inner-wrapper">
				<!-- start: sidebar -->
				<aside id="sidebar-left" class="sidebar-left">

					<div class="sidebar-header">
						<div class="sidebar-title">
							Navigation
						</div>
						<div class="sidebar-toggle hidden-xs"
							data-toggle-class="sidebar-left-collapsed" data-target="html"
							data-fire-event="sidebar-left-toggle">
							<i class="fa fa-bars" aria-label="Toggle sidebar"></i>
						</div>
					</div>

					<div class="nano">
						<div class="nano-content">
							<nav id="menu" class="nav-main" role="navigation">
								<ul class="nav nav-main">
									<li class="nav-active">
										<a href="index.php">
											<i class="fa fa-home" aria-hidden="true"></i>
											<span>Home</span>
										</a>
									</li>
									<li>
										<a href="module1.php">
											<i class="fa fa-map-marker" aria-hidden="true"></i>
											<span>Module 1</span>
										</a>
									</li>
									<li>
										<a href="module2.php">
												<i class="fa fa-map-marker" aria-hidden="true"></i>
												<span>Module 2</span>
											</a>
										</li>
									<li>
										<a href="module3.php">
													<i class="fa fa-map-marker" aria-hidden="true"></i>
													<span>Module 3</span>
												</a>
											</li>
								</ul>
							</nav>

							<hr class="separator" />

							<div class="sidebar-widget widget-stats">
								<div class="widget-header">
									<h6>Sensor Port Full Status</h6>
									<div class="widget-toggle">+</div>
								</div>
								<div class="widget-content">
									<ul>
										<li>
											<span class="stats-title">Module 1</span>
											<span class="stats-complete">100%</span>
											<div class="progress">
												<div class="progress-bar progress-bar-primary
													progress-without-number" role="progressbar" aria-valuenow="85"
													aria-valuemin="0" aria-valuemax="100" style="width: 100%;">
													<span class="sr-only">100% Complete</span>
												</div>
											</div>
										</li>
										<li>
											<span class="stats-title">Module 2</span>
											<span class="stats-complete">70%</span>
											<div class="progress">
												<div class="progress-bar progress-bar-primary
													progress-without-number" role="progressbar" aria-valuenow="70"
													aria-valuemin="0" aria-valuemax="100" style="width: 70%;">
													<span class="sr-only">70% Complete</span>
												</div>
											</div>
										</li>
										<li>
											<span class="stats-title">Module 3</span>
											<span class="stats-complete">60%</span>
											<div class="progress">
												<div class="progress-bar progress-bar-primary
													progress-without-number" role="progressbar" aria-valuenow="2"
													aria-valuemin="0" aria-valuemax="100" style="width: 60%;">
													<span class="sr-only">60% Complete</span>
												</div>
											</div>
										</li>
									</ul>
								</div>
							</div>
						</div>

					</div>

				</aside>
				<!-- end: sidebar -->

				<section role="main" class="content-body">
					<header class="page-header">
						<h2>Home Page</h2>
									
						<div class="right-wrapper pull-right rightMargin">
							<ol class="breadcrumbs">
								<li>
									<a href="index">
										<i class="fa fa-home"></i>
									</a>
								</li>
								<li><span>Home</span></li>
							</ol>
						</div>
					</header>

					<!-- Customised section 1 -->

					<div class="col-lg-12">
						<h2>Overall Report</h2>

						<div class="row">
							<div class="col-md-12">
								<section class="panel">
									<header class="panel-heading">
										<div class="panel-actions">
											<a href="#" class="fa fa-caret-down"></a>
											<a href="#" class="fa fa-times"></a>
										</div>

										<h2 class="panel-title">Sensor Health Status </h2>
										<p class="panel-subtitle">Showing Good Condition Sensor Percentage</p>
									</header>
									<div class="panel-body">
										<div class="row text-center">

											<div class="col-md-4">
												<div class="circular-bar">
													<div class="circular-bar-chart" data-percent="100"
														data-plugin-options='{"barColor" :"#78e08f" ,"delay" : 300 }'>
														<strong>Module 1</strong>
														<label><span class="percent">100</span>%</label>
													</div>
												</div>
											</div>

											<div class="col-md-4">
												<div class="circular-bar">
													<div class="circular-bar-chart" data-percent="90"
														data-plugin-options='{"barColor" :"#78e08f" ,"delay" : 500 }'>
														<strong>Module 2</strong>
														<label><span class="percent">90</span>%</label>
													</div>
												</div>
											</div>

											<div class="col-md-4">
												<div class="circular-bar">
													<div class="circular-bar-chart" data-percent="96"
														data-plugin-options='{"barColor" :"#78e08f" ,"delay" : 700 }'>
														<strong>Module 3</strong>
														<label><span class="percent">96</span>%</label>
													</div>
												</div>
											</div>

										</div>
									</div>
								</section>
							</div>
						</div>
					</div>
					<!-- Customised section 1 -->
					
					<div class="clearfix"></div>

					<!-- Customised section 1a -->
						<div class="col-lg-12">
							<h2>Temperature</h2>

							<div class="row">
								<div class="col-lg-12">
									<section class="panel">
										<header class="panel-heading">
											<div class="panel-actions">
												<a href="#" class="fa fa-caret-down"></a>
												<a href="#" class="fa fa-times"></a>
											</div>
					
											<h2 class="panel-title">Module Temperature</h2>
											<p class="panel-subtitle">Real Time Module's Temperature</p>
										</header>
										<div class="panel-body">
											<div class="row">
												<div class="col-md-4">
													<h2 class="temperatureTitle">Module 1</h2>
													<meter min="0" max="100" value="90" id="meter1"></meter>
											
												</div>
												<div class="col-md-4">
													<h2 class="temperatureTitle">Module 2</h2>
													<meter min="0" max="100" value="70" id="meter2"></meter>
												</div>
												<div class="col-md-4">
													<h2 class="temperatureTitle">Module 3</h2>
													<meter min="0" max="100" value="50" id="meter3"></meter>
												</div>
											</div>
										</div>
									</section>
								</div>
							</div>
						</div>
				
					<!-- Customised section 1a -->
					<div class="clearfix"></div>
					<!-- Customised Section 2 -->

					<div class="col-lg-4">
							<section class="panel">
								<header class="panel-heading">
									<div class="panel-actions">
										<a href="#" class="fa fa-caret-down"></a>
										<a href="#" class="fa fa-times"></a>
									</div>

									<h2 class="panel-title">Module 1</h2>
									<p class="panel-subtitle">Sensor Categories</p>
								</header>
								
								<div class="panel-body">
									<!-- Flot: Pie -->
									<div class="chart chart-md" id="flotPie1"></div>
									<script type="text/javascript">
						
											var flotPieData1 = [{
												label: "Motion",
												data: [
													[1, 30]
												],
												color: '#0088cc'
											}, {
												label: "Power",
												data: [
													[1, 60]
												],
												color: '#2baab1'
											}, {
												label: "Temperature",
												data: [
													[1, 10]
												],
												color: '#734ba9'
											}];
						
											// See: assets/javascripts/ui-elements/examples.charts.js for more settings.
						
										</script>
										<h4 class="totalCount">Total Sensor: 50</h4>
								</div>
								
							</section>
						</div>

						<div class="col-lg-4">
								<section class="panel">
									<header class="panel-heading">
										<div class="panel-actions">
											<a href="#" class="fa fa-caret-down"></a>
											<a href="#" class="fa fa-times"></a>
										</div>
	
										<h2 class="panel-title">Module 2</h2>
										<p class="panel-subtitle">Sensor Categories</p>
									</header>
									
									<div class="panel-body">
										<!-- Flot: Pie -->
										<div class="chart chart-md" id="flotPie2"></div>
										<script type="text/javascript">
							
											var flotPieData2 = [{
												label: "Motion",
												data: [
													[1, 16]
												],
												color: '#0088cc'
											}, {
												label: "Power",
												data: [
													[1, 80]
												],
												color: '#2baab1'
											}, {
												label: "Temperature",
												data: [
													[1, 4]
												],
												color: '#734ba9'
											}];
							
												// See: assets/javascripts/ui-elements/examples.charts.js for more settings.
							
											</script>
											<h4 class="totalCount">Total Sensor: 40</h4>
									</div>
								</section>
							</div>

							<div class="col-lg-4">
									<section class="panel">
										<header class="panel-heading">
											<div class="panel-actions">
												<a href="#" class="fa fa-caret-down"></a>
												<a href="#" class="fa fa-times"></a>
											</div>
		
											<h2 class="panel-title">Module 3</h2>
											<p class="panel-subtitle">Sensor Categories</p>
										</header>
										
										<div class="panel-body">
											<!-- Flot: Pie -->
											<div class="chart chart-md" id="flotPie3"></div>
											<script type="text/javascript">
								
													var flotPieData3 = [{
														label: "Motion",
														data: [
															[1, 30]
														],
														color: '#0088cc'
													}, {
														label: "Power",
														data: [
															[1, 40]
														],
														color: '#2baab1'
													}, {
														label: "Temperature",
														data: [
															[1, 15]
														],
														color: '#734ba9'
													}, {
														label: "Voice",
														data: [
															[1, 15]
														],
														color: '#E36159'
													}];
								
													// See: assets/javascripts/ui-elements/examples.charts.js for more settings.
								
												</script>
												<h4 class="totalCount">Total Sensor: 30</h4>
										</div>
									</section>
								</div>

					<!-- Customised Section 2 -->
					<div class="clearfix"></div>
					<!-- Customised Section 3 -->
							<div class="col-lg-12">
								<section class="panel">
									<header class="panel-heading">
										<div class="panel-actions">
											<a href="#" class="fa fa-caret-down"></a>
											<a href="#" class="fa fa-times"></a>
										</div>
	
										<h2 class="panel-title">Faulty Sensor Report</h2>
										<p class="panel-subtitle">Record of each module sensor faulty quatity</p>
									</header>
									<div class="panel-body">
	
										<!-- Morris: Bar -->
										<div class="chart chart-md" id="morrisBar1"></div>
										<script type="text/javascript">
							
												var morrisBarData1 = [{
													m: 'Jan',
													a: 1,
													b: 3,
													c: 0
												}, {
													m: 'Feb',
													a: 1,
													b: 2,
													c: 5
												}, {
													m: 'Mar',
													a: 6,
													b: 2,
													c: 5
												}, {
													m: 'Apr',
													a: 7,
													b: 3,
													c: 5
												}, {
													m: 'May',
													a: 9,
													b: 0,
													c: 0
												}, {
													m: 'Jun',
													a: 0,
													b: 0,
													c: 1
												}, {
													m: 'July',
													a: 0,
													b: 1,
													c: 3
												}, {
													m: 'Aug',
													a: 5,
													b: 2,
													c: 1
												}, {
													m: 'Sep',
													a: 0,
													b: 0,
													c: 0
												}, {
													m: 'Oct',
													a: 1,
													b: 2,
													c: 1
												}, {
													m: 'Nov',
													a: 2,
													b: 2,
													c: 3
												}, {
													m: 'Dec',
													a: 3,
													b: 2,
													c: 2
												}
											];
							
												// See: assets/javascripts/ui-elements/examples.charts.js for more settings.
							
											</script>
									</div>
								</section>
							</div>
			
						<!-- Customised Section 3 -->
						<div class="clearfix"></div>
						
					<!-- start: page -->

					<!-- end: page -->
				</section>
			</div>

		</section>

			<!-- Vendor -->
			<script src="assets/vendor/jquery/jquery.js"></script>
			<script src="assets/vendor/jquery-browser-mobile/jquery.browser.mobile.js"></script>
			<script src="assets/vendor/bootstrap/js/bootstrap.js"></script>
			<script src="assets/vendor/nanoscroller/nanoscroller.js"></script>
			<script src="assets/vendor/bootstrap-datepicker/js/bootstrap-datepicker.js"></script>
			<script src="assets/vendor/magnific-popup/magnific-popup.js"></script>
			<script src="assets/vendor/jquery-placeholder/jquery.placeholder.js"></script>
			
			<!-- Specific Page Vendor -->
			<script src="assets/vendor/jquery-appear/jquery.appear.js"></script>
			<script src="assets/vendor/jquery-easypiechart/jquery.easypiechart.js"></script>
			<script src="assets/vendor/flot/jquery.flot.js"></script>
			<script src="assets/vendor/flot-tooltip/jquery.flot.tooltip.js"></script>
			<script src="assets/vendor/flot/jquery.flot.pie.js"></script>
			<script src="assets/vendor/flot/jquery.flot.categories.js"></script>
			<script src="assets/vendor/flot/jquery.flot.resize.js"></script>
			<script src="assets/vendor/jquery-sparkline/jquery.sparkline.js"></script>
			<script src="assets/vendor/raphael/raphael.js"></script>
			<script src="assets/vendor/morris/morris.js"></script>
			<script src="assets/vendor/gauge/gauge.js"></script>
			<script src="assets/vendor/snap-svg/snap.svg.js"></script>
			<script src="assets/vendor/liquid-meter/liquid.meter.js"></script>
			
			<!-- Theme Base, Components and Settings -->
			<script src="assets/javascripts/theme.js"></script>
			
			<!-- Theme Custom -->
			<script src="assets/javascripts/theme.custom.js"></script>
			
			<!-- Theme Initialization Files -->
			<script src="assets/javascripts/theme.init.js"></script>
	
	
			<!-- Examples -->
			<script src="assets/javascripts/ui-elements/examples.charts.js"></script>
		</body>
	</html>