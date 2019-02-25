<!DOCTYPE html>
<html lang="en">
    <head>
		<meta charset="UTF-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0"> 
		<meta name="description" content="Navigator Admin Panel" />
		<meta name="keywords" content="Admin, Dashboard, Bootstrap3, Sass, transform, CSS3, HTML5, Web design, UI Design, Responsive Dashboard, Responsive Admin, Admin Theme, Best Admin UI, datatables, Bootstrap Theme, Themeforest, Bootstrap" />
		<meta name="author" content="Bootstrap Gallery" />
		<link rel="shortcut icon" href="{{ asset('user-link') }}/img/favicon.ico">
		<title>To Do :: @yield('page-title') </title>
		
		<!-- Bootstrap CSS -->
		<link href="{{ asset('user-link') }}/css/bootstrap.min.css" rel="stylesheet" media="screen">

		<!-- Animate CSS -->
		<link href="{{ asset('user-link') }}/css/animate.css" rel="stylesheet" media="screen">

		<!-- Main CSS -->
		<link href="{{ asset('user-link') }}/css/main.css" rel="stylesheet" media="screen">

		<!-- Font Awesome -->
		<link href="{{ asset('user-link') }}/fonts/font-awesome.min.css" rel="stylesheet">


		<!-- HTML5 shiv and Respond.js IE8 support of HTML5 elements and media queries -->
		<!--[if lt IE 9]>
			<script src="js/html5shiv.js"></script>
			<script src="js/respond.min.js"></script>
		<![endif]-->

	</head>  

	<body>

		<!-- Header Start -->
		@include('users.inc.header')
		<!-- Header End -->		

		<!-- Left sidebar start -->
		@include('users.inc.menubar')		
		<!-- Left sidebar end -->

		<!-- Dashboard Wrapper Start -->
		<div class="dashboard-wrapper">

			<!-- Main Container Start -->
			<div class="main-container">

				<!-- Title bar starts -->
				<div class="title-bar">
						<ol class="breadcrumb">
								<li><a href="#">Home</a></li>
								<li class="active">@yield('page-title') Management</li>
						</ol>
				</div>
				<!-- Title bar ends -->

				<!-- Top Bar Starts -->
				<div class="top-bar clearfix">
						<div class="page-title">
								<h4>@yield('body-title')</h4>
						</div>
				</div>
				<!-- Top Bar Ends -->

				<hr class="stylish">

				<!-- Container fluid Starts -->
				<div class="container-fluid">

						<!-- Spacer Starts -->
						<div class="spacer">
								
								<!-- Row start -->
								<div class="row">
										<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">

												<!-- Error Message Show -->
												@include('users.inc.error_message')
												<!-- Error Message Show End -->   
																		
										</div>
								</div>
								<!-- Row end -->

								<!-- Body Content Start -->
									@yield('body-content')
								<!-- Body Content ends -->

						</div>
						<!-- Spacer Ends -->

				</div>
				<!-- Container fluid ends -->				

			</div>
			<!-- Main Container Start -->

		</div>
		<!-- Dashboard Wrapper End -->

		<!-- Footer Start -->
		@include('users.inc.footer')
		<!-- Footer end -->

		<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
		<script src="{{ asset('user-link') }}/js/jquery.js"></script>

		<!-- Include all compiled plugins (below), or include individual files as needed -->
		<script src="{{ asset('user-link') }}/js/bootstrap.min.js"></script>

		<!-- Flot Charts -->
		<script src="{{ asset('user-link') }}/js/flot/jquery.flot.js"></script>
		<script src="{{ asset('user-link') }}/js/flot/jquery.flot.orderBar.min.js"></script>
		<script src="{{ asset('user-link') }}/js/flot/jquery.flot.pie.min.js"></script>
		<script src="{{ asset('user-link') }}/js/flot/jquery.flot.tooltip.min.js"></script>
		<script src="{{ asset('user-link') }}/js/flot/jquery.flot.resize.min.js"></script>
		
		<!-- Data tables -->
		<script src="{{ asset('user-link') }}/js/jquery.datatables.js"></script>
		
		<!-- Custom JS -->
		<script src="{{ asset('user-link') }}/js/custom.js"></script>
		<script src="{{ asset('user-link') }}/js/custom-tables.js"></script>

		<!-- Date time picker -->
		<script type="text/javascript">
            $(function () {
                $('#datetimepicker1').datetimepicker({

								format: 'yyyy-mm-dd hh:ii'
				});	
            });
        </script>
		<!-- <script type="text/javascript">
			$(".form_datetime").datetimepicker({format: 'yyyy-mm-dd hh:ii'});
		</script>		 -->
    </body>
    </html>