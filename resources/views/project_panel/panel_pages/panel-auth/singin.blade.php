@extends('project_panel.panel_layouts.auth')

@section('title')
    Sign In
@endsection

@section('content')
	<!-- [ signin-img ] start -->
    <div class="auth-wrapper align-items-stretch aut-bg-img">
        <div class="flex-grow-1">
            <div class="h-100 d-md-flex align-items-center auth-side-img">
                <div class="col-sm-10 auth-content w-auto">
                    <img src="assets/images/auth/auth-logo.png" alt="" class="img-fluid">
                    <h1 class="text-white my-4">Welcome Back!</h1>
                    <h4 class="text-white font-weight-normal">Signin to your account and get explore the Able pro Dashboard Template.<br/>Do not forget to play with live customizer</h4>
                </div>
            </div>
            <div class="auth-side-form">
            	<form class="validation__winner-singin-form" method="POST" action="{{ route('login') }}">
            	 	@csrf
	                <div class="auth-content">
	                    <img src="assets/images/auth/auth-logo-dark.png" alt="" class="img-fluid mb-4 d-block d-xl-none d-lg-none">
	                    <h3 class="mb-4 f-w-400">Signin</h3>
	                    <div class="form-group mb-3">
	                        <label class="floating-label" for="Email">Email Address</label>
	                        <input id="Email" class="form-control @error('email') is-invalid @enderror" placeholder="Your Email Address" type="text" name="email" :value="old('email')" required autofocus data-error="Please enter your email">
	                        @error('email')
	                            <div class="help-block with-errors">{{ $message }}</div>
	                        @enderror
	                    </div>
	                    <div class="form-group mb-4">
	                        <label class="floating-label" for="Password">Password</label>
	                        <input id="Password" class="form-control @error('password') is-invalid @enderror" placeholder="Password" type="password" name="password" required autocomplete="current-password" data-error="Please enter your password">
	                        @error('password')
	                            <div class="help-block with-errors">{{ $message }}</div>
	                        @enderror
	                    </div>
	                    <div class="custom-control custom-checkbox text-left mb-4 mt-2">
	                        <input type="checkbox" class="custom-control-input" id="customCheck1">
	                        <label class="custom-control-label" for="customCheck1">Save credentials.</label>
	                    </div>
	                    <button class="btn btn-block btn-primary mb-4" type="submit">Signin</button>
	                    <div class="text-center">
	                        <div class="saprator my-4"><span>OR</span></div>
	                        <button class="btn text-white bg-facebook mb-2 mr-2  wid-40 px-0 hei-40 rounded-circle"><i class="fab fa-facebook-f"></i></button>
	                        <button class="btn text-white bg-googleplus mb-2 mr-2 wid-40 px-0 hei-40 rounded-circle"><i class="fab fa-google-plus-g"></i></button>
	                        <button class="btn text-white bg-twitter mb-2  wid-40 px-0 hei-40 rounded-circle"><i class="fab fa-twitter"></i></button>
	                        <p class="mb-2 mt-4 text-muted">Forgot password? <a href="{{ route('password.request') }}" class="f-w-400">Reset</a></p>
	                        <p class="mb-0 text-muted">Don’t have an account? <a href="{{ route('register') }}" class="f-w-400">Signup</a></p>
	                    </div>
	                </div>
                </form>
            </div>
        </div>
    </div>
    <!-- [ signin-img ] end -->	
@endsection
@section('page-level-scriptFiles')
@endsection

@section('page-level-script')
<script type="text/javascript">
	$(document).ready(function() {
    $(function() {
        // [ Initialize validation ]
        $('.validation__winner-singin-form').validate({
            ignore: '.ignore, .select2-input',
            focusInvalid: false,
            rules: {
                'email': {
                    required: true,
                },
                'password': {
                    required: true,
                },
            },
            messages: {
                email: {
                    required: "Enter your email address",
                },
                password: {
                    required: "Enter your password",
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