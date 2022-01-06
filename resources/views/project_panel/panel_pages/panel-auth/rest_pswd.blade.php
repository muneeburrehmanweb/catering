@extends('project_panel.panel_layouts.auth')

@section('title')
    Rest Password
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
				<form class="validation__winner-reset-pswd-form" method="POST" action="{{ route('password.update') }}">
		            @csrf
		            <!-- Password Reset Token -->
		            <input type="hidden" name="token" value="{{ $token }}">
					<div class=" auth-content">
						<img src="assets/images/auth/auth-logo-dark.png" alt="" class="img-fluid mb-4 d-block d-xl-none d-lg-none">
						<h4 class="mb-3 f-w-400">Rest Password</h4>
						<div class="form-group mb-3">
							<label class="floating-label" for="Email">Email Address</label>
							<input class="form-control" placeholder="Enter your email" id="email" type="email" name="email" value="{{old('email', $email)}}" required autofocus data-error="Please enter your email">
	                        @error('email')
	                            <div class="help-block with-errors">{{ $message }}</div>
	                        @enderror
						</div>
						<div class="form-group mb-4">
							<label class="floating-label" for="Password">New Password</label>
							<input class="form-control" placeholder="Add new password" id="password" type="password" name="password" required data-error="Please enter your password">
	                        @error('password')
	                            <div class="help-block with-errors">{{ $message }}</div>
	                        @enderror
						</div>
						<div class="form-group mb-4">
							<label class="floating-label" for="Password">Re-Type New Password</label>
							<input placeholder="Re-Type New Password" id="password_confirmation" class="form-control" type="password" name="password_confirmation" required data-error="Please confirm your password">
						</div>
						<button class="btn btn-primary btn-block mb-4" type="submit">Rest Password</button>
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
        $('.validation__winner-reset-pswd-form').validate({
            ignore: '.ignore, .select2-input',
            focusInvalid: false,
            rules: {
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
