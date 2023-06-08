
<!doctype html>
<html lang="en">

<head>
	<!-- Required meta tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!--favicon-->
	<link rel="icon" href="{{asset('backend')}}/assets/images/favicon-32x32.png" type="image/png" />
	<!--plugins-->
	<link href="{{asset('backend')}}/assets/plugins/simplebar/css/simplebar.css" rel="stylesheet" />
	<link href="{{asset('backend')}}/assets/plugins/perfect-scrollbar/css/perfect-scrollbar.css" rel="stylesheet" />
	<link href="{{asset('backend')}}/assets/plugins/metismenu/css/metisMenu.min.css" rel="stylesheet" />
	<!-- loader-->
	<link href="{{asset('backend')}}/assets/css/pace.min.css" rel="stylesheet" />
	<script src="{{asset('backend')}}/assets/js/pace.min.js"></script>
	<!-- Bootstrap CSS -->
	<link href="{{asset('backend')}}/assets/css/bootstrap.min.css" rel="stylesheet">
	<link href="{{asset('backend')}}/assets/css/app.css" rel="stylesheet">
	<link href="{{asset('backend')}}/assets/css/icons.css" rel="stylesheet">
	<title>Rukada - Responsive Bootstrap 5 Admin Template</title>
</head>

<body class="bg-login">
	<!--wrapper-->
	<div class="wrapper">
		<div class="d-flex align-items-center justify-content-center my-5 my-lg-0">
			<div class="container">
				<div class="row row-cols-1 row-cols-lg-2 row-cols-xl-2">
					<div class="col mx-auto">
						<div class="my-4 text-center">
							<img src="{{asset('backend')}}/assets/images/logo-img.png" width="180" alt="" />
						</div>
						<div class="card">
							<div class="card-body">
								<div class="border p-4 rounded">
									<div class="text-center">
										<h3 class="">Sign Up</h3>
										<p>Already have an account? <a href="{{ route('admin.login')}}">Sign in here</a>
										</p>
									</div>
									<div class="d-grid">
										<a class="btn my-4 shadow-sm btn-white" href="javascript:;"> <span class="d-flex justify-content-center align-items-center">
                          <img class="me-2" src="{{asset('backend')}}/assets/images/icons/search.svg" width="16" alt="Image Description">
                          <span>Sign Up with Google</span>
											</span>
										</a> <a href="javascript:;" class="btn btn-facebook"><i class="bx bxl-facebook"></i>Sign Up with Facebook</a>
									</div>
									<div class="login-separater text-center mb-4"> <span>OR SIGN UP WITH EMAIL</span>
										<hr/>
									</div>
									<div class="form-body">
										<form method="POST" action="{{ route('register') }}">
                                            @csrf
											<div class="col-sm-12">
												<label for="inputLastName" class="form-label">Full Name</label>
												<input type="text" class="form-control @error('name') is-invalid @enderror" id="inputLastName" placeholder="Deo" name="name">
                                                @error('name')
                                                    <small class="badge text-danger">{{$message}}</small>
                                                @enderror
											</div>
											<div class="col-12 my-3">
												<label for="inputEmailAddress" class="form-label">Email Address</label>
												<input type="email" class="form-control @error('email') is-invalid @enderror" id="inputEmailAddress" placeholder="example@user.com" name="email">
                                                @error('email')
                                                    <small class="badge text-danger">{{$message}}</small>
                                                @enderror
											</div>
											<div class="col-12 my-3">
												<label for="username" class="form-label">Username</label>
												<input type="text" class="form-control @error('username') is-invalid @enderror" id="username" placeholder="username" name="username">
                                                @error('username')
                                                    <small class="badge text-danger">{{$message}}</small>
                                                @enderror
											</div>
											<div class="col-12 my-3">
												<label for="phone" class="form-label">Phone</label>
												<input type="text" class="form-control @error('phone') is-invalid @enderror" id="phone" placeholder="phone"  name="phone">
                                                @error('phone')
                                                    <small class="badge text-danger">{{$message}}</small>
                                                @enderror
											</div>
											<div class="col-12 my-3">
												<label for="password" class="form-label">Password</label>
												<div class="input-group" id="show_hide_password">
													<input type="password" class="form-control border-end-0 @error('password') is-invalid @enderror" id="password" placeholder="Enter Password" name="password"> <a href="javascript:;" class="input-group-text bg-transparent"><i class='bx bx-hide'></i></a>
												</div>
                                                @error('password')
                                                    <small class="badge text-danger">{{$message}}</small>
                                                @enderror
											</div>
											<div class="col-12 my-3">
												<label for="password_confirmation" class="form-label">Confirm Password</label>
												<div class="input-group" id="show_hide_password">
													<input type="password" class="form-control border-end-0 @error('password_confirmation') is-invalid @enderror" id="password_confirmation" placeholder="Confirm Password" name="password_confirmation"> <a href="javascript:;" class="input-group-text bg-transparent"><i class='bx bx-hide'></i></a>
												</div>
                                                @error('password_confirmation')
                                                    <small class="badge text-danger">{{$message}}</small>
                                                @enderror
											</div>

											<div class="col-12 my-3">
												<div class="form-check form-switch ">
													<input class="form-check-input" type="checkbox" id="flexSwitchCheckChecked">
													<label class="form-check-label" for="flexSwitchCheckChecked">I read and agree to Terms & Conditions</label>
												</div>
											</div>
											<div class="col-12">
												<div class="d-grid">
													<button type="submit" class="btn btn-primary"><i class='bx bx-user'></i>Sign up</button>
												</div>
											</div>

										</form>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<!--end row-->
			</div>
		</div>
	</div>
	<!--end wrapper-->
	<!-- Bootstrap JS -->
	<script src="{{asset('backend')}}/assets/js/bootstrap.bundle.min.js"></script>
	<!--plugins-->
	<script src="{{asset('backend')}}/assets/js/jquery.min.js"></script>
	<script src="{{asset('backend')}}/assets/plugins/simplebar/js/simplebar.min.js"></script>
	<script src="{{asset('backend')}}/assets/plugins/metismenu/js/metisMenu.min.js"></script>
	<script src="{{asset('backend')}}/assets/plugins/perfect-scrollbar/js/perfect-scrollbar.js"></script>
	<!--Password show & hide js -->
	<script>
		$(document).ready(function () {
			$("#show_hide_password a").on('click', function (event) {
				event.preventDefault();
				if ($('#show_hide_password input').attr("type") == "text") {
					$('#show_hide_password input').attr('type', 'password');
					$('#show_hide_password i').addClass("bx-hide");
					$('#show_hide_password i').removeClass("bx-show");
				} else if ($('#show_hide_password input').attr("type") == "password") {
					$('#show_hide_password input').attr('type', 'text');
					$('#show_hide_password i').removeClass("bx-hide");
					$('#show_hide_password i').addClass("bx-show");
				}
			});
		});
	</script>
	<!--app JS-->
	<script src="{{asset('backend')}}/assets/js/app.js"></script>
</body>

</html>
