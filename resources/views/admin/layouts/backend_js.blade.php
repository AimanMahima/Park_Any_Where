    <!-- Must needed plugins to the run this Template -->
    <script src="{{asset('backend_assets/js/jquery.min.js')}}"></script>
    <script src="{{asset('backend_assets/js/popper.min.js')}}"></script>
    <script src="{{asset('backend_assets/js/bootstrap.min.js')}}"></script>
    <script src="{{asset('backend_assets/js/bundle.js')}}"></script>
    <script src="{{asset('backend_assets/js/default-assets/setting.js')}}"></script>
    <script src="{{asset('backend_assets/js/default-assets/fullscreen.js')}}"></script>

    <!-- Active JS -->
    <script src="{{asset('backend_assets/js/default-assets/active.js')}}"></script>

    <!-- These plugins only need for the run this page -->
    <script src="{{asset('backend_assets/js/default-assets/apexchart.min.js')}}"></script>
    <script src="{{asset('backend_assets/js/default-assets/dashboard-active.js')}}"></script>
    <script src="{{asset('backend_assets/js/default-assets/jquery.datatables.min.js')}}"></script>
    <script src="{{asset('backend_assets/js/default-assets/responsive.bootstrap4.min.js')}}"></script>
    <script src="{{asset('backend_assets/js/default-assets/button.bootstrap4.min.js')}}"></script>
    <script src="{{asset('backend_assets/js/default-assets/button.html5.min.js')}}"></script>
    <script src="{{asset('backend_assets/js/default-assets/button.flash.min.js')}}"></script>
    <script src="{{asset('backend_assets/js/default-assets/button.print.min.js')}}"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>
    <script type="text/javascript" src="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>
    <script type="text/javascript">
        toastr.options = {
            "closeButton": true,
            "debug": false,
            "newestOnTop": false,
            "progressBar": true,
            "positionClass": "toast-top-right",
            "preventDuplicates": true,
            "onclick": null,
            "showDuration": "300",
            "hideDuration": "1000",
            "timeOut": "5000",
            "extendedTimeOut": "1000",
            "showEasing": "swing",
            "hideEasing": "linear",
            "showMethod": "fadeIn",
            "hideMethod": "fadeOut"
        }
    </script>
    @yield('script')
    <script type="text/javascript">
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
    </script>
