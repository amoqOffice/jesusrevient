{{-- <!DOCTYPE html> --}}
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html lang="fr">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
        <meta name="csrf-token" content="{{ csrf_token() }}" />
        <title>JESUS-REVIENT TV</title>

		<!-- Favicon -->
        <link rel="shortcut icon" type="image/x-icon" href="{{ asset('assets/front/images/_content/favicon.ico') }}">

		<!-- Bootstrap CSS -->
        <link rel="stylesheet" href="{{ asset('assets/back/css/bootstrap.min.css') }}">

        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-select@1.13.14/dist/css/bootstrap-select.min.css">

		<!-- Fontawesome CSS -->
        <link rel="stylesheet" href="{{ asset('assets/back/css/font-awesome.min.css') }}">

		<!-- Feathericon CSS -->
        <link rel="stylesheet" href="{{ asset('assets/back/css/feathericon.min.css') }}">

		<link rel="stylesheet" href="{{ asset('assets/back/plugins/morris/morris.css') }}">

		<!-- Main CSS -->
        <link rel="stylesheet" href="{{ asset('assets/back/css/style.css') }}">

        <!-- Toastr CSS -->
        <link rel="stylesheet" href="{{ asset('assets/back/css/toastr.min.css') }}">

        {{-- Select2 CSS --}}
        <link rel="stylesheet" href="{{ asset('assets/back/css/select2.min.css') }}">

        {{-- Lity CSS --}}
        <link rel="stylesheet" href="{{ asset('assets/back/css/lity.min.css') }}">

        {{-- Datatables --}}
        <link rel="stylesheet" href="{{ asset('assets/back/css/datatables.min.css') }}">

        <style>
            .form-control:disabled, .form-control[readonly] {
                background-color: #FAFBFC;
                color: #6E7174;
                opacity: 1;
                border: 0px;
            }
        </style>

        @yield('css')
    </head>
    <body class="mini-sidebars">

		<!-- Main Wrapper -->
        <div class="main-wrapper">
			<!-- Sidebar -->
            @include('back.layouts.menu')

			<!-- Page Wrapper -->
            <div class="page-wrapper">
                <div class="content container-fluid">
                    @yield('content')
                </div>
			</div>
        </div>

		<!-- jQuery -->
        <script src="{{ asset('assets/back/js/jquery-3.2.1.min.js') }}"></script>

		<!-- Bootstrap Core JS -->
        <script src="{{ asset('assets/back/js/popper.min.js') }}"></script>
        <script src="{{ asset('assets/back/js/bootstrap.min.js') }}"></script>

		<!-- Slimscroll JS -->
        <script src="{{ asset('assets/back/plugins/slimscroll/jquery.slimscroll.min.js') }}"></script>

        <!-- Raphael JS -->
        <script src="{{ asset('assets/back/plugins/raphael/raphael.min.js') }}"></script>

        {{-- Datatables JS --}}
        <script src="{{ asset('assets/back/js/jquery.dataTables.min.js') }}"></script>
        <script src="{{ asset('assets/back/js/datatables.min.js') }}"></script>

        {{-- Lity JS --}}
        <script src="{{ asset('assets/back/js/lity.min.js') }}"></script>

        {{-- Select2 JS --}}
        <script src="{{ asset('assets/back/js/select2.min.js') }}"></script>

		<!-- Custom JS -->
        <script  src="{{ asset('assets/back/js/script.js') }}"></script>

        <!-- Toastr JS -->
        <script src="{{ asset('assets/back/js/toastr.min.js') }}"></script>
        {!! Toastr::message() !!}

        <script src="https://cdn.jsdelivr.net/npm/bootstrap-select@1.13.14/dist/js/bootstrap-select.min.js"></script>

        @yield('script')

        <script type="text/javascript">
            $(document).ready(function() {
                $('#sidebarCollapse').on('click', function() {
                    $('#sidebar').toggleClass('active');
                });
            });
        </script>
    </body>
</html>
