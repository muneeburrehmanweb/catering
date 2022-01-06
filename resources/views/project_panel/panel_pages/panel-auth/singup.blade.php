@extends('project_panel.panel_layouts.auth')

@section('title')
    Sign Up
@endsection

@section('content')
	<!-- [ signup-img ] start -->
	<div class="auth-wrapper align-items-stretch aut-bg-img">
		<div class="flex-grow-1">
			<div class="h-100 d-md-flex align-items-center auth-side-img">
				<div class="col-sm-10 auth-content w-auto">
					<img src="assets/images/auth/auth-logo.png" alt="" class="img-fluid">
					<h1 class="text-white my-4">Welcome you!</h1>
					<h4 class="text-white font-weight-normal">Signup to your account and made member of the Able pro Dashboard Template.<br/>Do not forget to play with live customizer</h4>
				</div>
			</div>
			<div class="auth-side-form">
				<form class="validation__winner-singup-form" method="POST" action="{{ route('register') }}">
            	@csrf
					<div class=" auth-content">
						<img src="assets/images/auth/auth-logo-dark.png" alt="" class="img-fluid mb-4 d-block d-xl-none d-lg-none">
						<h4 class="mb-3 f-w-400">Sign up</h4>
						<div class="form-group mb-3">
							<label class="floating-label" for="Name">Name</label>
							<input type="text" class="form-control @error('name') is-invalid @enderror" placeholder="Enter Your Name" name="name" id="name" required>
	                        @error('name')
	                            <div class="help-block with-errors">{{ $message }}</div>
	                        @enderror
						</div>
						<div class="form-group mb-3">
							<label class="floating-label" for="Email">Email address</label>
							<input type="Email" class="form-control @error('email') is-invalid @enderror" placeholder="Your Email Address" name="email" id="email" required>
	                        @error('email')
	                            <div class="help-block with-errors">{{ $message }}</div>
	                        @enderror
						</div>
						<div class="form-group mb-4">
							<label class="floating-label" for="Password">Password</label>
							<input type="Password" class="form-control @error('password') is-invalid @enderror" placeholder="Create your Password" name="password" id="password" required>
	                        @error('password')
	                            <div class="help-block with-errors">{{ $message }}</div>
	                        @enderror
						</div>
						<div class="form-group mb-4">
							<label class="floating-label" for="Password">Re-Type Password</label>
							<input type="Password" class="form-control" name="password_confirmation" placeholder="Re-Type Password" id="password_confirmation" required>
						</div>
						<button class="btn btn-primary btn-block mb-4" type="submit">Sign up</button>
						<div class="text-center">
							<div class="saprator my-4"><span>OR</span></div>
							<button class="btn text-white bg-facebook mb-2 mr-2  wid-40 px-0 hei-40 rounded-circle"><i class="fab fa-facebook-f"></i></button>
							<button class="btn text-white bg-googleplus mb-2 mr-2 wid-40 px-0 hei-40 rounded-circle"><i class="fab fa-google-plus-g"></i></button>
							<button class="btn text-white bg-twitter mb-2  wid-40 px-0 hei-40 rounded-circle"><i class="fab fa-twitter"></i></button>
							<p class="mt-4">Already have an account? <a href="{{ route('login') }}" class="f-w-400">Signin</a></p>
						</div>
					</div>
				</form>
			</div>
		</div>
	</div>
	<!-- [ signup-img ] end -->
@endsection

@section('page-level-scriptFiles')
@endsection

@section('page-level-script')
<script type="text/javascript">
	$(document).ready(function() {
    $(function() {
        // [ Initialize validation ]
        $('.validation__winner-singup-form').validate({
            ignore: '.ignore, .select2-input',
            focusInvalid: false,
            rules: {
                'name': {
                    required: true
                },
                'email': {
                    required: true,
                    email: true
                },
                'password': {
                    required: true,
                    minlength: 6,
                    maxlength: 20
                },
                'password_confirmation': {
                    required: true,
                    minlength: 6,
                    equalTo: 'input[name="password"]'
                },
            },
            messages: {
                name: "Enter your full name",
                email: {
                    required: "Enter your email address",
                    email: "Please enter a valid email address"
                },
                password: {
                    required: "Enter your password",
                    minlength: "Enter at least 6 characters",
                    maxlength: "20 is already in use"
                },
                password_confirmation: {
                    required: "Enter your password",
                    minlength: "Enter at least 6 characters",
                    equalTo: "Password do not match"
                },
            },

            // Errors //
            errorPlacement: function errorPlacement(error, element) {
                var $parent = $(element).parents('.form-group');

                // Do not duplicate errors
                if ($parent.find('.jquery-validation-error').length) {
                    return;
                }

                $parent.append(
                    error.addClass('jquery-validation-error small form-text invalid-feedback')
                );
            },
            highlight: function(element) {
                var $el = $(element);
                var $parent = $el.parents('.form-group');

                $el.addClass('is-invalid');

                // Select2 and Tagsinput
                if ($el.hasClass('select2-hidden-accessible') || $el.attr('data-role') === 'tagsinput') {
                    $el.parent().addClass('is-invalid');
                }
            },
            unhighlight: function(element) {
                $(element).parents('.form-group').find('.is-invalid').removeClass('is-invalid');
            }
        });
    });
});
</script>
@endsection