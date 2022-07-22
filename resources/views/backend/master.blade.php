<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="Responsive Admin &amp; Dashboard Template based on Bootstrap 5">
  <meta name="author" content="AdminKit">
  <meta name="keywords" content="adminkit, bootstrap, bootstrap 5, admin, dashboard, template, responsive, css, sass, html, theme, front-end, ui kit, web">

  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link rel="shortcut icon" href="{{ asset('backend/img/icons/icon-48x48.png') }}" /> 

  <title> E-Madrassati | @yield('title') </title>

  <link href="{{ asset('backend/css/app.css') }}" rel="stylesheet">

  <link rel="stylesheet" type="text/css" href="{{ asset('backend/css/dataTables.bootstrap.css') }}"/> 
  <link rel="stylesheet" type="text/css" href="{{ asset('backend/css/jquery.dataTables.css') }}"/>
  <link rel="stylesheet" type="text/css" href="{{ asset('backend/css/responsive.bootstrap.min.css') }}"/>

  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;600&display=swap" rel="stylesheet">
</head>

<body> 
  <div class="wrapper">
   
      @include('backend.partial.menu')          
      
      <div class="main">
      
      <!-- Navbar -->
      @include('backend.partial.navbar')          
      
      <!-- End Navbar -->
      <main class="content">
        <div class="container-fluid p-0">

          @yield('content')
        
        </div>
      </main>
      
      @include('backend.partial.footer')      

    </div>

  </div> 

  <script src="{{ asset('backend/js/app.js') }}"></script>  
  <script type="text/javascript" src="{{ asset('backend/js/jquery-3.6.0.js') }}"></script>  
  <script type="text/javascript" src="{{ asset('backend/js/jquery.dataTables.js') }}"></script> 
  <script type="text/javascript" src="{{ asset('backend/js/dataTables.bootstrap.js') }}"></script>
  <script type="text/javascript" src="{{ asset('backend/js/dataTables.responsive.min.js') }}"></script>
  <script type="text/javascript">
    $(document).ready(function() {
      var table = $('#example').DataTable( {
          responsive: true,
          language: {
              url: 'http://127.0.0.1:8000/backend/js/i18n/French.json'
          }
      } );
      var table = $('#nopagination').DataTable( {
          responsive: true,
          paging: false,
          ordering: false,
          info: false,
          language: {
              url: 'http://127.0.0.1:8000/backend/js/i18n/French.json'
          }
      } );  
      var table = $('#nosearching').DataTable( {
          responsive: true,
          paging: false,
          ordering: false,
          info: false,
          searching: false,
          language: {
              url: 'http://127.0.0.1:8000/backend/js/i18n/French.json'
          }
      } );   
      var table = $('#ordering').DataTable( {
          responsive: true,
          paging: false, 
          info: false,
          searching: false, 
          ordering: true, 
          language: {
              url: 'http://127.0.0.1:8000/backend/js/i18n/French.json'
          }
      } );  
    } );
  </script>
</body>
</html>