<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

         <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>

        <link href="{{asset('./assets/vendors/bootstrap/dist/css/bootstrap.min.css')}}" rel="stylesheet" />
        <link href="{{asset('./assets/vendors/font-awesome/css/font-awesome.min.css')}}" rel="stylesheet" />
        <link href="{{asset('./assets/vendors/themify-icons/css/themify-icons.css')}}" rel="stylesheet" />
        <!-- PLUGINS STYLES-->
        <link href="{{asset('./assets/vendors/jvectormap/jquery-jvectormap-2.0.3.css')}}" rel="stylesheet" />
        <!-- THEME STYLES-->
        <link href="{{asset('./assets/css/main.min.css')}}" rel="stylesheet" />

        <style>
          .error-text{
            margin-left: 170px
          }
        </style>

   
    </head>

 <body>


  <div class="page-wrapper">
        <!-- START HEADER-->
          @include('admin.layouts.navbar')
        <!-- END HEADER-->
        <!-- START SIDEBAR-->
          @include('admin.layouts.sidebar')
        <!-- END SIDEBAR-->
        <div class="content-wrapper">
            <!-- START PAGE CONTENT-->
              @yield('content')
            <!-- END PAGE CONTENT-->
            @include('admin.layouts.footer')
        </div>
    </div>
    
       
        
    
    
      
  

     
       
 
  
    <script src="{{asset('./assets/vendors/jquery/dist/jquery.min.js')}}" type="text/javascript"></script>
    <script src="{{asset('./assets/vendors/popper.js/dist/umd/popper.min.js')}}" type="text/javascript"></script>
    <script src="{{asset('./assets/vendors/bootstrap/dist/js/bootstrap.min.js')}}" type="text/javascript"></script>
    <script src="{{asset('./assets/vendors/metisMenu/dist/metisMenu.min.js')}}" type="text/javascript"></script>
    <script src="{{asset('./assets/vendors/jquery-slimscroll/jquery.slimscroll.min.js')}}" type="text/javascript"></script>
    <!-- PAGE LEVEL PLUGINS-->
    <script src="{{asset('./assets/vendors/chart.js/dist/Chart.min.js')}}" type="text/javascript"></script>
    <script src="{{asset('./assets/vendors/jvectormap/jquery-jvectormap-2.0.3.min.js')}}" type="text/javascript"></script>
    <script src="{{asset('./assets/vendors/jvectormap/jquery-jvectormap-world-mill-en.js')}}" type="text/javascript"></script>
    <script src="{{asset('./assets/vendors/jvectormap/jquery-jvectormap-us-aea-en.js')}}" type="text/javascript"></script>
    <!-- CORE SCRIPTS-->
    <script src="{{asset('assets/js/app.min.js')}}" type="text/javascript"></script>
    <!-- PAGE LEVEL SCRIPTS-->
    <script src="{{asset('./assets/js/scripts/dashboard_1_demo.js')}}" type="text/javascript"></script>
</body>


</html>

