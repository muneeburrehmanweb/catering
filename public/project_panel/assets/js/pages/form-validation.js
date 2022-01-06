'use strict';
$(document).ready(function() {
    $(function() {
        // [ Add phone validator ]
        $.validator.addMethod(
            'phone_format',
            function(value, element) {
                return this.optional(element) || /^\(\d{3}\)[ ]\d{3}\-\d{4}$/.test(value);
            },
            'Invalid phone number.'
        );

        // [ Initialize validation ]
        $('#validation-_-form').validate({
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
                'phone': {
                    required: true,
                    phone_format: true
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
