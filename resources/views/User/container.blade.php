<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="{{ url('assets/img/favicon.png')}}" rel="icon">
  <link href="{{ url('assets/img/apple-touch-icon.png')}}" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.gstatic.com" rel="preconnect">
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">
 
  <!-- Icon -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">

  <!-- Vendor CSS Files -->
  <link href="{{ url('assets/vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
  <link href="{{ url('assets/vendor/bootstrap-icons/bootstrap-icons.css')}}" rel="stylesheet">
  <link href="{{ url('assets/vendor/boxicons/css/boxicons.min.css')}}" rel="stylesheet">
  <link href="{{ url('assets/vendor/quill/quill.snow.css')}}" rel="stylesheet">
  <link href="{{ url('assets/vendor/quill/quill.bubble.css')}}" rel="stylesheet">
  <link href="{{ url('assets/vendor/remixicon/remixicon.css')}}" rel="stylesheet">
  <link href="{{ url('assets/vendor/simple-datatables/style.css')}}" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="{{ url('assets/css/style.css')}}" rel="stylesheet">
  <link href="{{ url('assets/css/khoi.css')}}" rel="stylesheet">
  <link href="{{ url('assets/css/Ha.css')}}" rel="stylesheet">
  <link href="{{ url('assets/css/baotoan.css')}}" rel="stylesheet">

</head>

<body>
    @include('User.header')
    @include('User.sideBar')
    @yield('body')
    @include('User.footer')
    <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>
    <!-- Vendor JS Files -->
    <script src="{{ url('assets/vendor/apexcharts/apexcharts.min.js')}}"></script>
    <script src="{{ url('assets/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
    <script src="{{ url('assets/vendor/chart.js/chart.umd.js')}}"></script>
    <script src="{{ url('assets/vendor/echarts/echarts.min.js')}}"></script>
    <script src="{{ url('assets/vendor/quill/quill.min.js')}}"></script>
    <script src="{{ url('assets/vendor/simple-datatables/simple-datatables.js')}}"></script>
    <script src="{{ url('assets/vendor/tinymce/tinymce.min.js')}}"></script>
    <script src="{{ url('assets/vendor/php-email-form/validate.js')}}"></script>

    <!-- Template Main JS File -->
    <script src="{{ url('assets/js/main.js')}}"></script>
</body>

</html>