<!DOCTYPE html>
<html lang="en">
	
<!-- Mirrored from jesus.gallery/navigator/login.html by HTTrack Website Copier/3.x [XR&CO'2013], Sat, 26 Sep 2015 13:15:04 GMT -->
<head>
		<meta charset="UTF-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0"> 
		<meta name="description" content="Navigator Admin Panel" />
		<meta name="keywords" content="Admin, Dashboard, Bootstrap3, Sass, transform, CSS3, HTML5, Web design, UI Design, Responsive Dashboard, Responsive Admin, Admin Theme, Best Admin UI, Bootstrap Theme, Themeforest, Bootstrap" />
		<meta name="author" content="Bootstrap Gallery" />
		<link rel="shortcut icon" href="{{ asset('user-link') }}/img/favicon.ico">
		<title>Login - To-Do</title>
		
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

	<body style="background: #0D3457">
		<!-- Container Fluid starts -->
		<div class="container-fluid">
			<div class="row">
				<div class="col-lg-4 col-lg-push-4 col-md-push-3 col-md-6 col-sm-push-3 col-sm-6 col-sx-12">
					
					<!-- Header end -->
					<div class="login-container">
						<div class="login-wrapper">
							<div id="login" class="show animated flipInY">
								<div class="login-header">
									<h4>Sign In To Your To Do Account</h4>
								</div>
								<a href="#" class="fb-btn hidden-xs">
									<img src="{{ asset('user-link') }}/img/fb-btn.png" alt="FB Button">
								</a>
								<h5>-- Or sign in with your email address --</h5>
								
                                <form class="form-horizontal" method="POST" action="{{ route('login') }}">
                                {{ csrf_field() }}

                                <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                                    <label for="email" class="col-md-12 control-label">E-Mail Address</label>

                                    <div class="col-md-12 has-feedback">
                                        <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}"  id="password" placeholder="E-mail Address" required autofocus>
                                        <i class="fa fa-user form-control-feedback"></i>

                                        @if ($errors->has('email'))
                                            <span class="help-block">
                                                <strong>{{ $errors->first('email') }}</strong>
                                            </span>
                                        @endif
                                    </div>
                                </div>

                                <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                                    <label for="password" class="col-md-12 control-label">Password</label>

                                    <div class="col-md-12 has-feedback">
                                        <input type="password" name="password" class="form-control" id="password" placeholder="*********" required>
                                        <i class="fa fa-key form-control-feedback"></i>

                                        @if ($errors->has('password'))
                                            <span class="help-block">
                                                <strong>{{ $errors->first('password') }}</strong>
                                            </span>
                                        @endif
                                    </div>
                                </div>

                                <div class="form-group">
                                    <div class="col-md-12 col-md-offset-4">
                                        <div class="checkbox">
                                            <label>
                                                <input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}> Remember Me
                                            </label>
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <div class="col-md-6 col-md-offset-4">
                                        <button type="submit" class="btn btn-primary">
                                            Login
                                        </button>
                                        

                                        <a class="btn btn-link" href="{{ route('password.request') }}">
                                            Forgot Your Password?
                                        </a>
                                    </div>
                                </div>
                            </form>
                                <!--<a href="#forgot-pwd" class="underline text-info">Forgot Password?</a>
                                
								<a href="#register">Don't have an account? <span class="text-danger">Sign Up</span></a> -->
							</div>

							<div id="register" class="form-action hide animated flipInX">
								<div class="login-header">
									<h4>Sign Up for Navigator</h4>
								</div>
								<a href="#" class="fb-btn">
									<img src="img/fb-btn.png" alt="FB Button">
								</a>
								<h5>-- Or Sign Up with your email address --</h5>
								<form action="http://jesus.gallery/navigator/index.html">
									<div class="form-group has-feedback">
										<label class="control-label" for="userName1">User Name</label>
										<input type="text" class="form-control" id="userName1">
										<i class="fa fa-user form-control-feedback"></i>
									</div>
									<div class="form-group has-feedback">
										<label class="control-label" for="password1">Password</label>
										<input type="text" class="form-control" id="password1">
										<i class="fa fa-key form-control-feedback"></i>
									</div>
									<div class="form-group has-feedback">
										<label class="control-label" for="password2">Confirm password</label>
										<input type="text" class="form-control" id="password2">
										<i class="fa fa-key form-control-feedback"></i>
									</div>
									<input type="submit" value="Sign Up" class="btn btn-primary btn-lg btn-block">
								</form>
								<a href="#login">Already have an account? <span class="text-danger">Sign In</span></a>
							</div>

							<div id="forgot-pwd" class="form-action hide animated rubberBand">
								<div class="login-header">
									<h4>Reset your Password</h4>
								</div>
								<form action="http://jesus.gallery/navigator/index.html">
									<div class="form-group has-feedback">
										<label class="control-label" for="password3">Password</label>
										<input type="text" class="form-control" id="password3">
										<i class="fa fa-key form-control-feedback"></i>
									</div>
									<div class="form-group has-feedback">
										<label class="control-label" for="password4">Confirm password</label>
										<input type="text" class="form-control" id="password4">
										<i class="fa fa-key form-control-feedback"></i>
									</div>
									<input type="submit" value="Reset" class="btn btn-primary btn-lg btn-block">
								</form>
								<a href="#login">Already have an account? <span class="text-danger">Sign In</span></a>
							</div>

						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- Container Fluid ends -->
		
		<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
		<script src="{{ asset('user-link') }}/js/jquery.js"></script>
		<!-- Include all compiled plugins (below), or include individual files as needed -->
		<script src="{{ asset('user-link') }}/js/bootstrap.min.js"></script>

		<script type="text/javascript">
			(function($) {
				// constants
				var SHOW_CLASS = 'show',
					HIDE_CLASS = 'hide',
					ACTIVE_CLASS = 'active';
				
				$('a').on('click', function(e){
					e.preventDefault();
					var a = $(this),
					href = a.attr('href');
				
					$('.active').removeClass(ACTIVE_CLASS);
					a.addClass(ACTIVE_CLASS);

					$('.show')
					.removeClass(SHOW_CLASS)
					.addClass(HIDE_CLASS)
					.hide();
					
					$(href)
					.removeClass(HIDE_CLASS)
					.addClass(SHOW_CLASS)
					.hide()
					.fadeIn(550);
				});
			})(jQuery);
		</script>
	</body>
</html>