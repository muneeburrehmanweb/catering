@extends('project_panel.panel_layouts.auth')

@section('title')
    Forget Password
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
            	<form class="validation__winner-forget-form" method="POST" action="{{ route('password.email') }}">
            		@csrf
	                <div class=" auth-content">
	                    <img src="assets/images/auth/auth-logo-dark.png" alt="" class="img-fluid mb-4 d-block d-xl-none d-lg-none">
	                    <h4 class="mb-3 f-w-400">Forget your password</h4>
						<div class="form-group mb-4">

							<label class="floating-label" for="email">Email address</label>
							<input id="Email" class="form-control @error('email') is-invalid @enderror" placeholder="Email Address" type="email" name="email" :value="old('email')" required autofocus data-error="Please enter your email">
	                        @error('email')
	                            <div class="help-block with-errors">{{ $message }}</div>
	                        @enderror
						</div>
						<button class="btn btn-block btn-primary mb-4">Register Password</button>
	                    <div class="text-center">
	                        <div class="saprator my-4"><span>OR</span></div>
	                        <button class="btn text-white bg-facebook mb-2 mr-2  wid-40 px-0 hei-40 rounded-circle"><i class="fab fa-facebook-f"></i></button>
	                        <button class="btn text-white bg-googleplus mb-2 mr-2 wid-40 px-0 hei-40 rounded-circle"><i class="fab fa-google-plus-g"></i></button>
	                        <button class="btn text-white bg-twitter mb-2  wid-40 px-0 hei-40 rounded-circle"><i class="fab fa-twitter"></i></button>
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

@if(session()->has('status'))
<script type="text/javascript">
    $(document).ready(function () {
        setTimeout(function(){ 
            $.notify({
                message: "{{ session('status') }}"
                }, {
                // settings
                    type: 'success',
                    animate: {
                    enter: 'animated bounceInDown',
                    exit: 'animated bounceOutUp'
                }
            });
        }, 2000);
    });
</script>
@endif
<script type="text/javascript">
	$(document).ready(function() {
    $(function() {
        // [ Initialize validation ]
        $('.validation__winner-forget-form').validate({
            ignore: '.ignore, .select2-input',
            focusInvalid: false,
            rules: {
                'email': {
                    required: true,
                    email: true
                },
            },
            messages: {
                email: {
                    required: "Enter your email address",
                    email: "Please enter a valid email address"
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