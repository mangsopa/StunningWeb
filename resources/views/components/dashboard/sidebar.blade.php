<!DOCTYPE html>
<html lang="en">

<head>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <meta name="csrf-token" content="{{ csrf_token() }}">
  
      <title>{{ config('app.name') }}</title>
  
      <!-- Favicon icon -->
      <link rel="icon" href="{{ asset('/libraries/assets/images/favicon.ico') }}" type="image/x-icon">
      <!-- Fonts -->
      <link rel="preconnect" href="https://fonts.bunny.net">
      <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />
      <!-- Required Fremwork -->
      <link rel="stylesheet" type="text/css"
          href="{{ asset('/libraries/bower_components/bootstrap/css/bootstrap.min.css') }}">
      <!-- radial chart.css -->
      <link rel="stylesheet" href="{{ asset('/libraries/assets/pages/chart/radial/css/radial.css" type="text/css') }}"
          media="all">
      <!-- feather Awesome -->
      <link rel="stylesheet" type="text/css" href="{{ asset('/libraries/assets/icon/feather/css/feather.css') }}">
      <!-- Style.css -->
      <link rel="stylesheet" type="text/css" href="{{ asset('/libraries/assets/css/style.css') }}">
      <link rel="stylesheet" type="text/css" href="{{ asset('/libraries/assets/css/jquery.mCustomScrollbar.css') }}">
  
      <!-- ico font -->
      <link rel="stylesheet" type="text/css" href="{{ asset('/libraries/assets/icon/icofont/css/icofont.css') }}">
      <!-- Data Table Css -->
      <link rel="stylesheet" type="text/css"
          href="{{ asset('/libraries/bower_components/datatables.net-bs4/css/dataTables.bootstrap4.min.css') }}">
      <link rel="stylesheet" type="text/css"
          href="{{ asset('/libraries/assets/pages/data-table/css/buttons.dataTables.min.css') }}">
      <link rel="stylesheet" type="text/css"
          href="{{ asset('/libraries/bower_components/datatables.net-responsive-bs4/css/responsive.bootstrap4.min.css') }}">
  
      <!-- themify-icons line icon -->
      <link rel="stylesheet" type="text/css"
          href="{{ asset('/libraries/assets/icon/themify-icons/themify-icons.css') }}">
  
      <!-- animation nifty modal window effects css -->
      <link rel="stylesheet" type="text/css" href="{{ asset('/libraries/assets/css/component.css') }}">
  
      <!-- Select 2 css -->
      <link rel="stylesheet" href="{{ asset('/libraries/bower_components/select2/css/select2.min.css') }}">
      <!-- Multi Select css -->
      <link rel="stylesheet" type="text/css"
          href="{{ asset('/libraries/bower_components/bootstrap-multiselect/css/bootstrap-multiselect.css') }}">
      <link rel="stylesheet" type="text/css"
          href="{{ asset('/libraries/bower_components/multiselect/css/multi-select.css') }}">
  
      <!-- Date-time picker css -->
      <link rel="stylesheet" type="text/css"
          href="{{ asset('/libraries/assets/pages/advance-elements/css/bootstrap-datetimepicker.css') }}">
  
      <!-- Switch component css -->
      <link rel="stylesheet" type="text/css"
          href="{{ asset('/libraries/bower_components/switchery/css/switchery.min.css') }}">
  
      <!-- Scripts -->
      @vite(['resources/css/app.css', 'resources/js/app.js'])
  </head>

<body>
{{-- @include('layouts.admin') --}}
   @include('components.loading') 
   
    <div id="pcoded" class="pcoded">
        <div class="pcoded-overlay-box"></div>
        <div class="pcoded-container navbar-wrapper">

            @include('components.dashboard.topbar')

            <!-- Sidebar chat start -->
            <div id="sidebar" class="users p-chat-user showChat">
                <div class="had-container">
                    <div class="card card_main p-fixed users-main">
                        <div class="user-box">
                            <div class="chat-inner-header">
                                <div class="back_chatBox">
                                    <div class="right-icon-control">
                                        <input type="text" class="form-control  search-text" placeholder="Search Friend" id="search-friends">
                                        <div class="form-icon">
                                            <i class="icofont icofont-search"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="main-friend-list">
                                <div class="media userlist-box" data-id="1" data-status="online" data-username="Josephin Doe" data-toggle="tooltip" data-placement="left" title="Josephin Doe">
                                    <a class="media-left" href="#!">
                                        <img class="media-object img-radius img-radius" src="libraries\assets\images\avatar-3.jpg" alt="Generic placeholder image ">
                                        <div class="live-status bg-success"></div>
                                    </a>
                                    <div class="media-body">
                                        <div class="f-13 chat-header">Josephin Doe</div>
                                    </div>
                                </div>
                                <div class="media userlist-box" data-id="2" data-status="online" data-username="Lary Doe" data-toggle="tooltip" data-placement="left" title="Lary Doe">
                                    <a class="media-left" href="#!">
                                        <img class="media-object img-radius" src="libraries\assets\images\avatar-2.jpg" alt="Generic placeholder image">
                                        <div class="live-status bg-success"></div>
                                    </a>
                                    <div class="media-body">
                                        <div class="f-13 chat-header">Lary Doe</div>
                                    </div>
                                </div>
                                <div class="media userlist-box" data-id="3" data-status="online" data-username="Alice" data-toggle="tooltip" data-placement="left" title="Alice">
                                    <a class="media-left" href="#!">
                                        <img class="media-object img-radius" src="libraries\assets\images\avatar-4.jpg" alt="Generic placeholder image">
                                        <div class="live-status bg-success"></div>
                                    </a>
                                    <div class="media-body">
                                        <div class="f-13 chat-header">Alice</div>
                                    </div>
                                </div>
                                <div class="media userlist-box" data-id="4" data-status="online" data-username="Alia" data-toggle="tooltip" data-placement="left" title="Alia">
                                    <a class="media-left" href="#!">
                                        <img class="media-object img-radius" src="libraries\assets\images\avatar-3.jpg" alt="Generic placeholder image">
                                        <div class="live-status bg-success"></div>
                                    </a>
                                    <div class="media-body">
                                        <div class="f-13 chat-header">Alia</div>
                                    </div>
                                </div>
                                <div class="media userlist-box" data-id="5" data-status="online" data-username="Suzen" data-toggle="tooltip" data-placement="left" title="Suzen">
                                    <a class="media-left" href="#!">
                                        <img class="media-object img-radius" src="libraries\assets\images\avatar-2.jpg" alt="Generic placeholder image">
                                        <div class="live-status bg-success"></div>
                                    </a>
                                    <div class="media-body">
                                        <div class="f-13 chat-header">Suzen</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Sidebar inner chat start-->
            <div class="showChat_inner">
                <div class="media chat-inner-header">
                    <a class="back_chatBox">
                        <i class="feather icon-chevron-left"></i> Josephin Doe
                    </a>
                </div>
                <div class="media chat-messages">
                    <a class="media-left photo-table" href="#!">
                        <img class="media-object img-radius img-radius m-t-5" src="libraries\assets\images\avatar-3.jpg" alt="Generic placeholder image">
                    </a>
                    <div class="media-body chat-menu-content">
                        <div class="">
                            <p class="chat-cont">I'm just looking around. Will you tell me something about yourself?</p>
                            <p class="chat-time">8:20 a.m.</p>
                        </div>
                    </div>
                </div>
                <div class="media chat-messages">
                    <div class="media-body chat-menu-reply">
                        <div class="">
                            <p class="chat-cont">I'm just looking around. Will you tell me something about yourself?</p>
                            <p class="chat-time">8:20 a.m.</p>
                        </div>
                    </div>
                    <div class="media-right photo-table">
                        <a href="#!">
                            <img class="media-object img-radius img-radius m-t-5" src="libraries\assets\images\avatar-4.jpg" alt="Generic placeholder image">
                        </a>
                    </div>
                </div>
                <div class="chat-reply-box p-b-20">
                    <div class="right-icon-control">
                        <input type="text" class="form-control search-text" placeholder="Share Your Thoughts">
                        <div class="form-icon">
                            <i class="feather icon-navigation"></i>
                        </div>
                    </div>
                </div>
            </div>
            @include('layouts.navigation')
        </div>
    </div>

   <!-- Required Jquery -->
   <script type="text/javascript" src="{{ asset('/libraries/bower_components/jquery/js/jquery.min.js') }}"></script>
   <script type="text/javascript" src="{{ asset('/libraries/bower_components/jquery-ui/js/jquery-ui.min.js') }}"></script>
   <script type="text/javascript" src="{{ asset('/libraries/bower_components/popper.js/js/popper.min.js') }}"></script>
   <script type="text/javascript" src="{{ asset('/libraries/bower_components/bootstrap/js/bootstrap.min.js') }}"></script>
   <!-- jquery slimscroll js -->
   <script type="text/javascript"
       src="{{ asset('/libraries/bower_components/jquery-slimscroll/js/jquery.slimscroll.js') }}"></script>
   <!-- modernizr js -->
   <script type="text/javascript" src="{{ asset('/libraries/bower_components/modernizr/js/modernizr.js') }}"></script>
   <script type="text/javascript" src="{{ asset('/libraries/bower_components/modernizr/js/css-scrollbars.js') }}">
   </script>
   <!-- Chart js -->
   <script type="text/javascript" src="{{ asset('/libraries/bower_components/chart.js/js/Chart.js') }}"></script>

   <!-- gauge js -->
   <script src="{{ asset('/libraries/assets/pages/widget/gauge/gauge.min.js') }}"></script>
   <script src="{{ asset('/libraries/assets/pages/widget/amchart/amcharts.js') }}"></script>
   <script src="{{ asset('/libraries/assets/pages/widget/amchart/serial.js') }}"></script>
   <script src="{{ asset('/libraries/assets/pages/widget/amchart/gauge.js') }}"></script>
   <script src="{{ asset('/libraries/assets/pages/widget/amchart/pie.js') }}"></script>
   <script src="{{ asset('/libraries/assets/pages/widget/amchart/light.js') }}"></script>
   <!-- Custom js -->
   <script src="{{ asset('/libraries/assets/js/pcoded.min.js') }}"></script>
   <script src="{{ asset('/libraries/assets/js/vartical-layout.min.js') }}"></script>
   <script src="{{ asset('/libraries/assets/js/jquery.mCustomScrollbar.concat.min.js') }}"></script>
   <script type="text/javascript" src="{{ asset('/libraries/assets/pages/dashboard/crm-dashboard.min.js') }}"></script>
   <script type="text/javascript" src="{{ asset('/libraries/assets/js/script.js') }}"></script>

   <!-- data-table js -->
   <script src="{{ asset('/libraries/bower_components/datatables.net/js/jquery.dataTables.min.js') }}"></script>
   <script src="{{ asset('/libraries/bower_components/datatables.net-buttons/js/dataTables.buttons.min.js') }}"></script>
   <script src="{{ asset('/libraries/assets/pages/data-table/js/jszip.min.js') }}"></script>
   <script src="{{ asset('/libraries/assets/pages/data-table/js/pdfmake.min.js') }}"></script>
   <script src="{{ asset('/libraries/assets/pages/data-table/js/vfs_fonts.js') }}"></script>
   <script src="{{ asset('/libraries/bower_components/datatables.net-buttons/js/buttons.print.min.js') }}"></script>
   <script src="{{ asset('/libraries/bower_components/datatables.net-buttons/js/buttons.html5.min.js') }}"></script>
   <script src="{{ asset('/libraries/bower_components/datatables.net-bs4/js/dataTables.bootstrap4.min.js') }}"></script>
   <script src="{{ asset('/libraries/bower_components/datatables.net-responsive/js/dataTables.responsive.min.js') }}">
   </script>
   <script src="{{ asset('/libraries/bower_components/datatables.net-responsive-bs4/js/responsive.bootstrap4.min.js') }}">
   </script>
   <!-- i18next.min.js -->
   <script type="text/javascript" src="{{ asset('/libraries/bower_components/i18next/js/i18next.min.js') }}"></script>
   <script type="text/javascript"
       src="{{ asset('/libraries/bower_components/i18next-xhr-backend/js/i18nextXHRBackend.min.js') }}"></script>
   <script type="text/javascript"
       src="{{ asset('/libraries/bower_components/i18next-browser-languagedetector/js/i18nextBrowserLanguageDetector.min.js') }}">
   </script>
   <!-- Custom js -->
   <script src="{{ asset('/libraries/assets/pages/data-table/js/data-table-custom.js') }}"></script>

   <!-- sweet alert modal.js intialize js -->
   <!-- modalEffects js nifty modal window effects -->
   <script type="text/javascript" src="{{ asset('/libraries/assets/js/modalEffects.js') }}"></script>
   <script type="text/javascript" src="{{ asset('/libraries/assets/js/classie.js') }}"></script>
   <!-- i18next.min.js -->
   <script type="text/javascript"
       src="{{ asset('/libraries/bower_components/jquery-i18next/js/jquery-i18next.min.js') }}"></script>

   <!-- Select 2 js -->
   <script type="text/javascript" src="{{ asset('/libraries/bower_components/select2/js/select2.full.min.js') }}">
   </script>
   <!-- Multiselect js -->
   <script type="text/javascript"
       src="{{ asset('/libraries/bower_components/bootstrap-multiselect/js/bootstrap-multiselect.js') }}"></script>
   <script type="text/javascript" src="{{ asset('/libraries/bower_components/multiselect/js/jquery.multi-select.js') }}">
   </script>
   <script type="text/javascript" src="{{ asset('/libraries/assets/js/jquery.quicksearch.js') }}"></script>
   <!-- Custom js -->
   <script type="text/javascript" src="{{ asset('/libraries/assets/pages/advance-elements/select2-custom.js') }}">
   </script>

   <!-- Bootstrap date-time-picker js -->
   <script type="text/javascript"
       src="{{ asset('/libraries/assets/pages/advance-elements/moment-with-locales.min.js') }}"></script>
   <script type="text/javascript"
       src="{{ asset('/libraries/bower_components/bootstrap-datepicker/js/bootstrap-datepicker.min.js') }}"></script>
   <script type="text/javascript"
       src="{{ asset('/libraries/assets/pages/advance-elements/bootstrap-datetimepicker.min.js') }}"></script>

   <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

   <!-- Switch component js -->
   <script type="text/javascript" src="{{ asset('/libraries/bower_components/switchery/js/switchery.min.js') }}"></script>
   <script type="text/javascript" src="{{ asset('/libraries/assets/pages/advance-elements/swithces.js') }}"></script>
   <script src="https://cdnjs.cloudflare.com/ajax/libs/typeahead.js/0.10.4/typeahead.bundle.min.js"></script>

</body>

</html>
