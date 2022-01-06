<script src="{{asset('project_panel/assets/js/vendor-all.min.js')}}"></script>
<script src="{{asset('project_panel/assets/js/plugins/bootstrap.min.js')}}"></script>
<script src="{{asset('project_panel/assets/js/ripple.js')}}"></script>
<script src="{{asset('project_panel/assets/js/pcoded.min.js')}}"></script>
{{--<script src="{{asset('project_panel/assets/js/menu-setting.min.js')}}"></script>--}}
<!-- Apex Chart -->
<script src="{{asset('project_panel/assets/js/plugins/apexcharts.min.js')}}"></script>
<!-- custom-chart js -->
<script src="{{asset('project_panel/assets/js/pages/dashboard-main.js')}}"></script>

<!-- jquery-validation Js -->
<script src="{{asset('project_panel/assets/js/plugins/jquery.validate.min.js')}}"></script>
<script src="{{asset('project_panel/assets/js/menu-setting.min.js')}}"></script>
{{--<script src="{{asset('project_panel/assets/js/plugins/jquery.dataTables.min.js')}}"></script>--}}
{{--<script src="{{asset('project_panel/assets/js/plugins/dataTables.bootstrap4.min.js')}}"></script>--}}
<!--bootstrap-notify-->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/mouse0270-bootstrap-notify/3.1.7/bootstrap-notify.min.js"></script>

@yield('page-level-scriptFiles')
@yield('page-level-script')
<script>
    $(document).ready(function() {
        checkCookie();
    });

    function setCookie(cname, cvalue, exdays) {
        var d = new Date();
        d.setTime(d.getTime() + (exdays * 24 * 60 * 60 * 1000));
        var expires = "expires=" + d.toGMTString();
        document.cookie = cname + "=" + cvalue + ";" + expires + ";path=/";
    }

    function getCookie(cname) {
        var name = cname + "=";
        var decodedCookie = decodeURIComponent(document.cookie);
        var ca = decodedCookie.split(';');
        for (var i = 0; i < ca.length; i++) {
            var c = ca[i];
            while (c.charAt(0) == ' ') {
                c = c.substring(1);
            }
            if (c.indexOf(name) == 0) {
                return c.substring(name.length, c.length);
            }
        }
        return "";
    }

    function checkCookie() {
        var ticks = getCookie("modelopen");
        if (ticks != "") {
            ticks++ ;
            setCookie("modelopen", ticks, 1);
            if (ticks == "2" || ticks == "1" || ticks == "0") {
                $('#exampleModalCenter').modal();
            }
        } else {
            // user = prompt("Please enter your name:", "");
            $('#exampleModalCenter').modal();
            ticks = 1;
            setCookie("modelopen", ticks, 1);
        }
    }

</script>
<!-- Ckeditor js -->
<script src="{{asset('project_panel/assets/js/plugins/ckeditor.js')}}"></script>
<script type="text/javascript">
    $(window).on('load', function() {
        ClassicEditor.create(document.querySelector('#main-menu'))
            .catch(error => {
                console.error(error);
            });
    });
    $(window).on('load', function() {
        ClassicEditor.create(document.querySelector('#add-ons'))
            .catch(error => {
                console.error(error);
            });
    });
</script>
<script>
    // Example starter JavaScript for disabling form submissions if there are invalid fields
    (function() {
        'use strict';
        window.addEventListener('load', function() {
            // Fetch all the forms we want to apply custom Bootstrap validation styles to
            var forms = document.getElementsByClassName('needs-validation');
            // Loop over them and prevent submission
            var validation = Array.prototype.filter.call(forms, function(form) {
                form.addEventListener('submit', function(event) {
                    if (form.checkValidity() === false) {
                        event.preventDefault();
                        event.stopPropagation();
                    }
                    form.classList.add('was-validated');
                }, false);
            });
        }, false);
    })();
</script>


{{--<script>--}}
{{--    // DataTable start--}}
{{--    $('#report-table').DataTable({--}}
{{--        "lengthMenu": [--}}
{{--            [5, 10, 25, 50, -1],--}}
{{--            [5, 10, 25, 50, "All"]--}}
{{--        ]--}}
{{--    });--}}
{{--    // DataTable end--}}
{{--</script>--}}
