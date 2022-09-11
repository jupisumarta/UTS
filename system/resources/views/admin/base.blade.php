<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>DarkPan - Bootstrap 5 Admin Template</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicon -->
    <link href="{{ url('public') }}/assets-admin/img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;600&family=Roboto:wght@500;700&display=swap" rel="stylesheet">

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="{{ url('public') }}/assets-admin/lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="{{ url('public') }}/assets-admin/lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css" rel="stylesheet" />

    <!-- Customized Bootstrap Stylesheet -->
    <link href="{{ url('public') }}/assets-admin/css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="{{ url('public') }}/assets-admin/css/style.css" rel="stylesheet">

    <!-- Datatable-->
    <link rel="stylesheet" href="{{ url('public') }}/assets-admin/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" href="{{ url('public') }}/assets-admin/plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
    <link rel="stylesheet" href="{{ url('public') }}/assets-admin/plugins/datatables-buttons/css/buttons.bootstrap4.min.css">

</head>

<body>
    <div class="container-fluid position-relative d-flex p-0">
        <!-- Spinner Start -->
        <div id="spinner" class="show bg-dark position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
            <div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status">
                <span class="sr-only">Loading...</span>
            </div>
        </div>
        <!-- Spinner End -->


        <!-- Sidebar Start -->
        @include('admin.section.sidebar')
        <!-- Sidebar End -->

        <!-- Content Start -->
        <div class="content">
            <!-- Navbar Start -->
            @include('admin.section.navbar')
            <!-- Navbar End -->
            <div class="container">
                <div class="row">
                    <div class="col-md-12 px-5">
                        @include('admin.utils.notif')
                    </div>
                </div>
            </div>
            @yield('content')
             <!-- Footer Start -->
            @include('admin.section.footer')
            <!-- Footer End -->
        </div>
        <!-- Content End -->



        <!-- Back to Top -->
        <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>
    </div>
    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="{{ url('public') }}/assets-admin/lib/chart/chart.min.js"></script>
    <script src="{{ url('public') }}/assets-admin/lib/easing/easing.min.js"></script>
    <script src="{{ url('public') }}/assets-admin/lib/waypoints/waypoints.min.js"></script>
    <script src="{{ url('public') }}/assets-admin/lib/owlcarousel/owl.carousel.min.js"></script>
    <script src="{{ url('public') }}/assets-admin/lib/tempusdominus/js/moment.min.js"></script>
    <script src="{{ url('public') }}/assets-admin/lib/tempusdominus/js/moment-timezone.min.js"></script>
    <script src="{{ url('public') }}/assets-admin/lib/tempusdominus/js/tempusdominus-bootstrap-4.min.js"></script>

    <!-- DataTables  & Plugins -->
    <script src="{{ url('public') }}/assets-admin/plugins/datatables/jquery.dataTables.min.js"></script>
    <script src="{{ url('public') }}/assets-admin/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
    <script src="{{ url('public') }}/assets-admin/plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
    <script src="{{ url('public') }}/assets-admin/plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
    <script src="{{ url('public') }}/assets-admin/plugins/datatables-buttons/js/dataTables.buttons.min.js"></script>
    <script src="{{ url('public') }}/assets-admin/plugins/datatables-buttons/js/buttons.bootstrap4.min.js"></script>
    <script src="{{ url('public') }}/assets-admin/plugins/jszip/jszip.min.js"></script>
    <script src="{{ url('public') }}/assets-admin/plugins/pdfmake/pdfmake.min.js"></script>
    <script src="{{ url('public') }}/assets-admin/plugins/pdfmake/vfs_fonts.js"></script>
    <script src="{{ url('public') }}/assets-admin/plugins/datatables-buttons/js/buttons.html5.min.js"></script>
    <script src="{{ url('public') }}/assets-admin/plugins/datatables-buttons/js/buttons.print.min.js"></script>
    <script src="{{ url('public') }}/assets-admin/plugins/datatables-buttons/js/buttons.colVis.min.js"></script>
    <script>
        $(".table-datatable").DataTable();
    </script>

    <!-- Template Javascript -->
    <script src="{{ url('public') }}/assets-admin/js/main.js"></script>
</body>

</html>
