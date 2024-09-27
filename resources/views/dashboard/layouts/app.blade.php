<!DOCTYPE html>
<html lang="en">

@php
    $setting = App\Models\Setting::first();
@endphp

<head>
    <!-- Meta -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <link rel="favicon" href="{{ asset('uploads/web/' . $setting->web_fav) }}">
    <!-- Mobile Specific -->
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Title -->
    <title> {{ config('app.name') }}
        @yield('title')
    </title>

	<!-- Favicon icon -->
    @yield('style')



    @include('dashboard.layouts.style')
</head>

<body>

    <!--*******************
        Preloader start
    ********************-->
    <div id="preloader">
        <div class="sk-three-bounce">
            <div class="sk-child sk-bounce1"></div>
            <div class="sk-child sk-bounce2"></div>
            <div class="sk-child sk-bounce3"></div>
        </div>
    </div>
    <!--*******************
        Preloader end
    ********************-->

    <!--**********************************
        Main wrapper start
    ***********************************-->
    <div id="main-wrapper">

        @include('dashboard.layouts.header')

        @include('dashboard.layouts.sidebar')

        <!--**********************************
            Content body start
        ***********************************-->
        <div class="content-body">
            <!-- row -->
            <div class="container-fluid">
                @yield('content')
            </div>
        </div>
        <!--**********************************
            Content body end
        ***********************************-->

        <!--**********************************
            Footer start
        ***********************************-->
        <div class="footer">
            <div class="copyright">
                <p>Copyright © Designed &amp; Developed by <a href="http://synexdigital.com/"
                        target="_blank">Synex Digital</a> 2024</p>
            </div>
        </div>
        <!--**********************************
            Footer end
        ***********************************-->

        <!--**********************************
           Support ticket button start
        ***********************************-->

        <!--**********************************
           Support ticket button end
        ***********************************-->


    </div>
    <!--**********************************
        Main wrapper end
    ***********************************-->

    <!--**********************************
        Scripts
    ***********************************-->
	<!-- Required vendors -->
    //delete modals
    <div class="modal fade" id="deleteModal">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Warning !</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal">
                    </button>
                </div>
                <div class="modal-body">
                    <p>Are you sure you want to delete this ?</p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-success light" data-bs-dismiss="modal">Close</button>
                    <form id="deleteForm" action="" method="POST">
                        @csrf
                        @method('DELETE')
                        <button id="deleteSubmitBtn" type="submit" class="btn btn-danger">Delete</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade" id="deleteModal2">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Warning !</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal">
                    </button>
                </div>
                <div class="modal-body">
                    <p>Are you sure you want to delete this ?</p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-success light" data-bs-dismiss="modal">Close</button>
                    <form id="deleteForm2" action="" method="POST">
                        @csrf
                        <input type="hidden" name='delete_id' id="delete_id">
                        <button id="deleteSubmitBtn2" type="submit" class="btn btn-danger">Delete</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

    @include('dashboard.layouts.script')
    @yield('script')
    <script>
        $(document).ready(function() {
            $('#deleteSubmitBtn').on('click', function() {
                $(this).text('Deleting...').addClass('disabled');
            });
            $('#deleteSubmitBtn2').on('click', function() {
            $(this).text('Deleting...').addClass('disabled');

        });
        });
    </script>
</body>

</html>
