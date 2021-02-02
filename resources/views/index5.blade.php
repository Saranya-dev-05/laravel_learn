<!DOCTYPE html>
<html lang="zxx">
   <head>
      <!-- The above 6 meta tags *must* come first in the head; any other head content must come *after* these tags -->
      <meta charset="utf-8">
      <meta http-equiv="x-ua-compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <meta name="description" content="">
      <meta name="keyword" content="">
      <meta name="author"  content=""/>
      <!-- Page Title -->
      <title>Projects Management | Metrical - Multipurpose Admin Dashboard Template</title>
      <!-- Main CSS -->			
      <link rel="stylesheet" href="{{ URL::asset('assets/plugins/bootstrap/css/bootstrap.min.css') }}" />
      <link rel="stylesheet" href="{{ URL::asset('assets/plugins/font-awesome/css/font-awesome.min.css') }}" />
     
     <link rel="stylesheet" href="{{ URL::asset('assets/plugins/flag-icon/flag-icon.min.css') }}" />
     <link rel="stylesheet" href="{{ URL::asset('assets/plugins/simple-line-icons/css/simple-line-icons.css') }}" />
     <link rel="stylesheet" href="{{ URL::asset('assets/plugins/ionicons/css/ionicons.css') }}" />
     <link rel="stylesheet" href="{{ URL::asset('assets/plugins/toastr/toastr.min.css') }}" />
     <link rel="stylesheet" href="{{ URL::asset('assets/plugins/chartist/chartist.css') }}" />
     <link rel="stylesheet" href="{{ URL::asset('assets/plugins/apex-chart/apexcharts.css') }}" />
     <link rel="stylesheet" href="{{ URL::asset('assets/css/app.min.css') }}" />
     <link rel="stylesheet" href="{{ URL::asset('assets/css/style.min.css') }}" />
     <link type="image/x-icon" rel="icon" href="{{ URL::asset('assets/images/favicon.ico') }}" />
      <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
      <!-- WARNING: Respond.js doesn"t work if you view the page via file:// -->
      <!--[if lt IE 9]>
      <script src="http://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="http://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
      <![endif]-->
   </head>
   <body>
      <!--================================-->
      <!-- Page Container Start -->
      <!--================================-->
      <div class="page-container">
         <!--================================-->
         <!-- Page Sidebar Start -->
         <!--================================-->
         <div class="page-sidebar">
            <div class="logo">
               <a class="logo-img" href="index.html">		
               <img class="desktop-logo" src="assets/images/logo-white.png" alt="">
               <img class="small-logo" src="assets/images/small-logo.png" alt="">
               </a>			
               <i class="ion-ios-close-empty" id="sidebar-toggle-button-close"></i>
            </div>
            <!--================================-->
            <!-- Sidebar Menu Start -->
            <!--================================-->
            <div class="page-sidebar-inner">
               <div class="page-sidebar-menu">
                  <ul class="accordion-menu">
                     <li class="open active">
                        <a href=""><i data-feather="home"></i>
                        <span>Dashboard</span><i class="accordion-icon fa fa-angle-left"></i></a>
                        <ul class="sub-menu" style="display: block;">
                           <li><a href="index.html">Sales</a></li>
                           <li><a href="index2.html">Analytics</a></li>
                           <li><a href="index3.html">Cryptocurrency</a></li>
                           <li><a href="index4.html">Helpdesk</a></li>
                           <!-- Active Page -->
                           <li class="active"><a href="index5.html">Project</a></li>
                           <li><a href="index6.html">Ecommerce</a></li>
                           <li><a href="index7.html">Server</a></li>
                           <li><a href="index8.html">Education</a></li>
                           <li><a href="index9.html">Event</a></li>
                           <li><a href="index10.html">Social</a></li>
                        </ul>
                     </li>
                     <li>
                        <a href=""><i data-feather="mail"></i>
                        <span>Mailbox</span><span class="badge badge-warning ft-right">10+</span></a>
                        <ul class="sub-menu">
                           <li><a href="mailbox.html">Inbox</a></li>
                           <li><a href="mailbox-message.html">View Mail</a></li>
                           <li><a href="mailbox-compose.html">Compose Mail</a></li>
                        </ul>
                     </li>
                     <li>
                        <a href="widgets.html"><i data-feather="layout"></i>
                        <span>Widgets</span><span class="badge badge-info ft-right">Hot</span></a>
                     </li>
                     <li class="menu-divider mg-y-20-force"></li>
                     <li class="mg-20-force menu-elements">Elements</li>
                     <li>
                        <a href=""><i data-feather="grid"></i>
                        <span>UI Elements</span><i class="accordion-icon fa fa-angle-left"></i></a>
                        <ul class="sub-menu">
                           <li><a href="ui-card.html">Card</a></li>
                           <li><a href="ui-alert.html">Alerts</a></li>
                           <li><a href="ui-button.html">Buttons</a></li>
                           <li><a href="ui-badge.html">Badges</a></li>
                           <li><a href="ui-typography.html">Typography</a></li>
                           <li><a href="ui-notification.html">Notifications</a></li>
                           <li><a href="ui-modal.html">Modals</a></li>
                           <li><a href="ui-tooltip.html">Tooltips</a></li>
                           <li><a href="ui-progress.html">Progress</a></li>
                           <li><a href="ui-spinner.html">Spinners</a></li>
                           <li><a href="ui-accordion.html">Accordions</a></li>
                           <li><a href="ui-pagination.html">Pagination</a></li>
                        </ul>
                     </li>
                     <li>
                        <a href=""><i data-feather="gift"></i>
                        <span>Icons</span><i class="accordion-icon fa fa-angle-left"></i></a>
                        <ul class="sub-menu">
                           <li><a href="icon-font-awesome.html">Font Awesome</a></li>
                           <li><a href="icon-feather.html">Feather Icons</a></li>
                           <li><a href="icon-mdi.html">Mdi icons</a></li>
                           <li><a href="icon-flag.html">Flag icons</a></li>
                           <li><a href="icon-simple-line.html">Simple line icons</a></li>
                           <li><a href="icon-themify.html">Themify icons</a></li>
                           <li><a href="icon-weather.html">Weather Icons</a></li>
                        </ul>
                     </li>
                     <li>
                        <a href=""><i data-feather="command"></i>
                        <span>Components</span><i class="accordion-icon fa fa-angle-left"></i></a>
                        <ul class="sub-menu">
                           <li><a href="com-datepicker.html">Date Picker</a></li>
                           <li><a href="com-timepicker.html">Time Picker</a></li>
                           <li><a href="com-colorpicker.html">Color Picker</a></li>
                           <li><a href="com-bootselect.html">Bootstrap Select</a></li>
                           <li><a href="com-codeeditor.html">Code Editor</a></li>
                           <li><a href="com-wysiwyg.html">WYSIWYG Editor</a></li>
                        </ul>
                     </li>
                     <li>
                        <a href=""><i data-feather="calendar"></i>
                        <span>Forms</span><i class="accordion-icon fa fa-angle-left"></i></a>
                        <ul class="sub-menu">
                           <li><a href="form-element.html">Form Elements</a></li>
                           <li><a href="form-layout.html">Form Layouts</a></li>
                           <li><a href="form-wizard.html">Form Wizard</a></li>
                           <li><a href="form-validation.html">Form Validation</a></li>
                           <li><a href="form-upload.html">File Upload</a></li>
                           <li><a href="form-publisher.html">Form Publishers</a></li>
                           <li><a href="form-formatter.html">Form Formatter </a></li>
                        </ul>
                     </li>
                     <li>
                        <a href=""><i data-feather="database"></i>
                        <span>Tables</span><i class="accordion-icon fa fa-angle-left"></i></a>
                        <ul class="sub-menu">
                           <li><a href="table-static.html">Static</a></li>
                           <li><a href="table-responsive.html">Responsive</a></li>
                           <li><a href="table-datatable.html">Data Tables</a></li>
                           <li><a href="table-footable.html">Foo Tables</a></li>
                        </ul>
                     </li>
                     <li>
                        <a href=""><i data-feather="pie-chart"></i>
                        <span>Charts</span><i class="accordion-icon fa fa-angle-left"></i></a>
                        <ul class="sub-menu">
                           <li><a href="chart-apex.html">Apex</a></li>
                           <li><a href="chart-google.html">Google</a></li>
                           <li><a href="chart-morris.html">Morris</a></li>
                           <li><a href="chart-chartjs.html">ChartJS</a></li>
                           <li><a href="chart-flot.html">Flot</a></li>
                           <li><a href="chart-chartlist.html">Chartlist</a></li>
                           <li><a href="chart-sparkline.html">Sparkline</a></li>
                        </ul>
                     </li>
                     <li>
                        <a href=""><i data-feather="map"></i>
                        <span>Maps</span><i class="accordion-icon fa fa-angle-left"></i></a>
                        <ul class="sub-menu">
                           <li><a href="map-google.html">Google Maps</a></li>
                           <li><a href="map-vector.html">Vector Maps</a></li>
                        </ul>
                     </li>
                     <li class="menu-divider mg-y-20-force"></li>
                     <li class="mg-20-force menu-extras">Extras</li>
                     <li>
                        <a href=""><i data-feather="cpu"></i>
                        <span>App View</span><i class="accordion-icon fa fa-angle-left"></i></a>
                        <ul class="sub-menu">
                           <li><a href="app-chatroom.html">Chat Room</a></li>
                           <li><a href="app-calendar.html">Calendar</a></li>
                        </ul>
                     </li>
                     <li>
                        <a href=""><i data-feather="codepen"></i>
                        <span>Pages</span><i class="accordion-icon fa fa-angle-left"></i></a>
                        <ul class="sub-menu">
                           <li><a href="page-invoice.html">Invoice</a></li>
                           <li><a href="page-error404.html">404 Page</a></li>
                           <li><a href="page-error500.html">500 Page</a></li>
                           <li><a href="page-profile.html">Profile</a></li>
                           <li><a href="page-singin.html">Login</a></li>
                           <li><a href="page-singup.html">Register</a></li>
                           <li><a href="page-unlock.html">Lockscreen</a></li>
                           <li><a href="page-password.html">password Reset</a></li>
                           <li><a href="page-search.html">Search Result</a></li>
                           <li><a href="page-gallery.html">Gallery</a></li>
                           <li><a href="page-pricing.html">Pricing Tables</a></li>
                           <li><a href="page-treeview.html">Tree View</a></li>
                        </ul>
                     </li>
                     <li>
                        <a href="email-template.html"><i data-feather="printer"></i>
                        <span>Mail Template</span><span class="badge badge-warning ft-right">Hot</span></a>
                     </li>
                     <li>
                        <a href=""><i data-feather="monitor"></i>
                        <span>Frontend</span><span class="badge badge-danger ft-right">Very Hot</span></a>
                        <ul class="sub-menu">
                           <li><a href="../templates/ecommerce/index.html" target="_blank">Ecommerce</a></li>
                           <li><a href="../templates/cryptocurrency/index.html" target="_blank">Cryptocurrency</a></li>
                           <li><a href="../templates/helpdesk/index.html" target="_blank">Helpdesk</a></li>
                           <li><a href="../templates/project/index.html" target="_blank">project</a></li>
                           <li><a href="../templates/server/index.html" target="_blank">server</a></li>
                           <li><a href="../templates/education/index.html" target="_blank">education</a></li>
                           <li><a href="../templates/event/index.html" target="_blank">event</a></li>
                           <li><a href="../templates/social/index.html" target="_blank">social</a></li>
                        </ul>
                     </li>
                     <li class="menu-divider mg-y-20-force"></li>
                     <li class="mg-20-force menu-others">Others</li>
                     <li>
                        <a href="../documentation/documentation.html"><i data-feather="life-buoy"></i>
                        <span>Documentation</span></a>
                     </li>
                     <li>
                        <a href="../documentation/changelog.html"><i data-feather="coffee"></i>
                        <span>Changelog</span><span class="badge badge-primary ft-right">1.7</span></a>
                     </li>
                  </ul>
               </div>
            </div>
            <!--/ Sidebar Menu End -->
            <!--================================-->
            <!-- Sidebar Footer Start -->
            <!--================================-->
            <div class="sidebar-footer">									
               <a class="pull-left" href="page-profile.html" data-toggle="tooltip" data-placement="top" data-original-title="Profile">
               <i data-feather="user" class="ht-15"></i></a>									
               <a class="pull-left " href="mailbox.html" data-toggle="tooltip" data-placement="top" data-original-title="Mailbox">
               <i data-feather="mail" class="ht-15"></i></a>
               <a class="pull-left" href="page-unlock.html" data-toggle="tooltip" data-placement="top" data-original-title="Lockscreen">
               <i data-feather="lock" class="ht-15"></i></a>
               <a class="pull-left" href="page-singin.html" data-toggle="tooltip" data-placement="top" data-original-title="Sing Out">
               <i data-feather="log-out" class="ht-15"></i></a>
            </div>
            <!--/ Sidebar Footer End -->
         </div>
         <!--/ Page Sidebar End -->
         <!--================================-->
         <!-- Page Content Start -->
         <!--================================-->
         <div class="page-content">
            <!--================================-->
            <!-- Page Header Start -->
            <!--================================-->
            <div class="page-header">
               <div class="search-form">
                  <form action="#" method="GET">
                     <div class="input-group">
                        <input class="form-control search-input" name="search" placeholder="Type something..." type="text"/>
                        <span class="input-group-btn">
                        <span id="close-search"><i class="ion-ios-close-empty"></i></span>
                        </span>
                     </div>
                  </form>
               </div>
               <!--================================-->
               <!-- Page Header  Start -->
               <!--================================-->
               <nav class="navbar navbar-expand-lg">
                  <ul class="list-inline list-unstyled mg-r-20">
                     <!-- Mobile Toggle and Logo -->
                     <li class="list-inline-item align-text-top"><a class="hidden-md hidden-lg" href="#" id="sidebar-toggle-button"><i class="ion-navicon tx-20"></i></a></li>
                     <!-- PC Toggle and Logo -->
                     <li class="list-inline-item align-text-top"><a class="hidden-xs hidden-sm" href="#" id="collapsed-sidebar-toggle-button"><i class="ion-navicon tx-20"></i></a></li>
                  </ul>
                  <!--================================-->
                  <!-- Mega Menu Start -->
                  <!--================================-->
                  <div class="collapse navbar-collapse">
                     <ul class="navbar-nav mr-auto">
                        <!-- Features -->
                        <li class="dropdown mega-dropdown mg-t-5">
                           <a class="dropdown-toggle btn mg-r-10" data-toggle="dropdown"
                              aria-haspopup="true" aria-expanded="false">Features
                           </a>
                           <div class="dropdown-menu mega-menu pd-15">
                              <div class="row">
                                 <div class="col-md-6 col-xl-3 sub-menu mb-xl-0 mb-4">
                                    <h6 class="tx-dark tx-13 tx-semibold">Featured</h6>
                                    <ul class="list-unstyled">
                                       <li>
                                          <a class="menu-item pl-0 tx-13 tx-normal" href="">
                                          <i class="icon-arrow-right-circle pl-1 pr-2"></i>Lorem ipsum dolor sit amet
                                          </a>
                                       </li>
                                       <li>
                                          <a class="menu-item pl-0 tx-13 tx-normal" href="">
                                          <i class="icon-arrow-right-circle pl-1 pr-2"></i>Consectetur adipiscing elit
                                          </a>
                                       </li>
                                       <li>
                                          <a class="menu-item pl-0 tx-13 tx-normal" href="">
                                          <i class="icon-arrow-right-circle pl-1 pr-2"></i>Sed do eiusmod tempor incididunt
                                          </a>
                                       </li>
                                       <li>
                                          <a class="menu-item pl-0 tx-13 tx-normal" href="">
                                          <i class="icon-arrow-right-circle pl-1 pr-2"></i>Ut labore et dolore magna
                                          </a>
                                       </li>
                                       <li>
                                          <a class="menu-item pl-0 tx-13 tx-normal" href="">
                                          <i class="icon-arrow-right-circle pl-1 pr-2"></i>Ut enim ad minim veniam
                                          </a>
                                       </li>
                                    </ul>
                                 </div>
                                 <div class="col-md-6 col-xl-3 sub-menu mb-xl-0 mb-4">
                                    <h6 class="tx-dark tx-13 tx-semibold">Related</h6>
                                    <ul class="list-unstyled">
                                       <li>
                                          <a class="menu-item pl-0 tx-13 tx-normal" href="">
                                          <i class="icon-options pl-1 pr-2"></i>Screen Protectors
                                          </a>
                                       </li>
                                       <li>
                                          <a class="menu-item pl-0 tx-13 tx-normal" href="">
                                          <i class="icon-options pl-1 pr-2"></i>Mobile Phone Accessories
                                          </a>
                                       </li>
                                       <li>
                                          <a class="menu-item pl-0 tx-13 tx-normal" href="">
                                          <i class="icon-options pl-1 pr-2"></i>Mobile Phone Cables
                                          </a>
                                       </li>
                                       <li>
                                          <a class="menu-item pl-0 tx-13 tx-normal" href="">
                                          <i class="icon-options pl-1 pr-2"></i>Mobile Phone Chargers
                                          </a>
                                       </li>
                                       <li>
                                          <a class="menu-item pl-0 tx-13 tx-normal" href="">
                                          <i class="icon-options pl-1 pr-2"></i>Mobile Phone Lenses
                                          </a>
                                       </li>
                                    </ul>
                                 </div>
                                 <div class="col-md-6 col-xl-3 sub-menu mb-md-0 mb-xl-0 mb-4">
                                    <h6 class="tx-dark tx-13 tx-semibold">Design</h6>
                                    <ul class="list-unstyled">
                                       <li>
                                          <a class="menu-item pl-0 tx-13 tx-normal" href="">
                                          <i class="icon-check pl-1 pr-2"></i>Mobile Phone Lenses
                                          </a>
                                       </li>
                                       <li>
                                          <a class="menu-item pl-0 tx-13 tx-normal" href="">
                                          <i class="icon-check pl-1 pr-2"></i>Mobile Phone Chargers
                                          </a>
                                       </li>
                                       <li>
                                          <a class="menu-item pl-0 tx-13 tx-normal" href="">
                                          <i class="icon-check pl-1 pr-2"></i>Mobile Phone Cables
                                          </a>
                                       </li>
                                       <li>
                                          <a class="menu-item pl-0 tx-13 tx-normal" href="">
                                          <i class="icon-check pl-1 pr-2"></i>Mobile Phone Accessories
                                          </a>
                                       </li>
                                       <li>
                                          <a class="menu-item pl-0 tx-13 tx-normal" href="">
                                          <i class="icon-check pl-1 pr-2"></i>Screen Protectors
                                          </a>
                                       </li>
                                    </ul>
                                 </div>
                                 <div class="col-md-6 col-xl-3 sub-menu mb-4">
                                    <h6 class="tx-dark tx-13 tx-semibold">Programming</h6>
                                    <ul class="list-unstyled">
                                       <li>
                                          <a class="menu-item pl-0 tx-13 tx-normal" href="">
                                          <i class="icon-plus pl-1 pr-2"></i>Mobile Phone Lenses
                                          </a>
                                       </li>
                                       <li>
                                          <a class="menu-item pl-0 tx-13 tx-normal" href="">
                                          <i class="icon-plus pl-1 pr-2"></i>Screen Protectors
                                          </a>
                                       </li>
                                       <li>
                                          <a class="menu-item pl-0 tx-13 tx-normal" href="">
                                          <i class="icon-plus pl-1 pr-2"></i>Mobile Phone Accessories
                                          </a>
                                       </li>
                                       <li>
                                          <a class="menu-item pl-0 tx-13 tx-normal" href="">
                                          <i class="icon-plus pl-1 pr-2"></i>Mobile Phone Chargers
                                          </a>
                                       </li>
                                       <li>
                                          <a class="menu-item pl-0 tx-13 tx-normal" href="">
                                          <i class="icon-plus pl-1 pr-2"></i>Mobile Phone Cables
                                          </a>
                                       </li>
                                    </ul>
                                 </div>
                              </div>
                           </div>
                        </li>
                        <!-- Technology -->
                        <li class="dropdown mega-dropdown mg-t-5">
                           <a class="dropdown-toggle btn mg-r-10" data-toggle="dropdown"
                              aria-haspopup="true" aria-expanded="false">Technology
                           </a>
                           <div class="dropdown-menu mega-menu pd-15">
                              <div class="row">
                                 <div class="col-md-12 col-xl-4 sub-menu mb-xl-0 mb-4">
                                    <h6 class="tx-dark tx-13 tx-semibold">Featured</h6>
                                    <!--Featured image-->
                                    <a href="" class="view overlay z-depth-1 p-0 mb-2">
                                       <img src="https://via.placeholder.com/500x400" class="img-fluid wd-100p" alt="">
                                       <div class="mask rgba-white-slight"></div>
                                    </a>
                                    <a class="tx-13 tx-normal" href="">Lorem ipsum dolor sit ipsum dolor sit <br/>
                                    <span class="mb-0 tx-10 tx-gray-500">03-03-2019, 11:32AM</span></a>
                                 </div>
                                 <div class="col-md-6 col-xl-4 sub-menu mb-md-0 mb-4">
                                    <h6 class="tx-dark tx-13 tx-semibold">Related</h6>
                                    <ul class="list-unstyled">
                                       <li>
                                          <a class="menu-item pl-0 tx-13 tx-normal" href="">
                                          <i class="icon-plus pl-1 pr-2"></i>Mobile Phone Lenses
                                          </a>
                                       </li>
                                       <li>
                                          <a class="menu-item pl-0 tx-13 tx-normal" href="">
                                          <i class="icon-plus pl-1 pr-2"></i>Screen Protectors
                                          </a>
                                       </li>
                                       <li>
                                          <a class="menu-item pl-0 tx-13 tx-normal" href="">
                                          <i class="icon-plus pl-1 pr-2"></i>Mobile Phone Accessories
                                          </a>
                                       </li>
                                       <li>
                                          <a class="menu-item pl-0 tx-13 tx-normal" href="">
                                          <i class="icon-plus pl-1 pr-2"></i>Mobile Phone Chargers
                                          </a>
                                       </li>
                                       <li>
                                          <a class="menu-item pl-0 tx-13 tx-normal" href="">
                                          <i class="icon-plus pl-1 pr-2"></i>Mobile Phone Cables
                                          </a>
                                       </li>
                                       <li>
                                          <a class="menu-item pl-0 tx-13 tx-normal" href="">
                                          <i class="icon-plus pl-1 pr-2"></i>Mobile Phone Accessories
                                          </a>
                                       </li>
                                       <li>
                                          <a class="menu-item pl-0 tx-13 tx-normal" href="">
                                          <i class="icon-plus pl-1 pr-2"></i>Mobile Phone Cables
                                          </a>
                                       </li>
                                       <li>
                                          <a class="menu-item pl-0 tx-13 tx-normal" href="">
                                          <i class="icon-plus pl-1 pr-2"></i>Mobile Phone Accessories
                                          </a>
                                       </li>
                                       <li>
                                          <a class="menu-item pl-0 tx-13 tx-normal" href="">
                                          <i class="icon-plus pl-1 pr-2"></i>Mobile Phone Chargers
                                          </a>
                                       </li>
                                       <li>
                                          <a class="menu-item pl-0 tx-13 tx-normal" href="">
                                          <i class="icon-plus pl-1 pr-2"></i>Mobile Phone Cables
                                          </a>
                                       </li>
                                    </ul>
                                 </div>
                                 <div class="col-md-6 col-xl-4 sub-menu mb-4">
                                    <h6 class="tx-dark tx-13 tx-semibold">Design</h6>
                                    <ul class="list-unstyled">
                                       <li>
                                          <a class="menu-item pl-0 tx-13 tx-normal" href="">
                                          <i class="icon-check pl-1 pr-2"></i>Mobile Phone Lenses
                                          </a>
                                       </li>
                                       <li>
                                          <a class="menu-item pl-0 tx-13 tx-normal" href="">
                                          <i class="icon-check pl-1 pr-2"></i>Screen Protectors
                                          </a>
                                       </li>
                                       <li>
                                          <a class="menu-item pl-0 tx-13 tx-normal" href="">
                                          <i class="icon-check pl-1 pr-2"></i>Mobile Phone Accessories
                                          </a>
                                       </li>
                                       <li>
                                          <a class="menu-item pl-0 tx-13 tx-normal" href="">
                                          <i class="icon-check pl-1 pr-2"></i>Mobile Phone Chargers
                                          </a>
                                       </li>
                                       <li>
                                          <a class="menu-item pl-0 tx-13 tx-normal" href="">
                                          <i class="icon-check pl-1 pr-2"></i>Mobile Phone Cables
                                          </a>
                                       </li>
                                       <li>
                                          <a class="menu-item pl-0 tx-13 tx-normal" href="">
                                          <i class="icon-check pl-1 pr-2"></i>Mobile Phone Accessories
                                          </a>
                                       </li>
                                       <li>
                                          <a class="menu-item pl-0 tx-13 tx-normal" href="">
                                          <i class="icon-check pl-1 pr-2"></i>Mobile Phone Cables
                                          </a>
                                       </li>
                                       <li>
                                          <a class="menu-item pl-0 tx-13 tx-normal" href="">
                                          <i class="icon-check pl-1 pr-2"></i>Mobile Phone Accessories
                                          </a>
                                       </li>
                                       <li>
                                          <a class="menu-item pl-0 tx-13 tx-normal" href="">
                                          <i class="icon-check pl-1 pr-2"></i>Mobile Phone Chargers
                                          </a>
                                       </li>
                                       <li>
                                          <a class="menu-item pl-0 tx-13 tx-normal" href="">
                                          <i class="icon-check pl-1 pr-2"></i>Mobile Phone Cables
                                          </a>
                                       </li>
                                    </ul>
                                 </div>
                              </div>
                           </div>
                        </li>
                        <!-- Ecommerce -->
                        <li class="dropdown mega-dropdown mg-t-5">
                           <a class="dropdown-toggle btn mg-r-10" data-toggle="dropdown"
                              aria-haspopup="false" aria-expanded="false">Ecommerce
                           </a>
                           <div class="dropdown-menu mega-menu pd-15">
                              <div class="row">
                                 <!-- Popular categories -->
                                 <div class="col-sm-6 col-lg-3 mb-4 hidden-md">
                                    <h6 class="tx-dark tx-13 tx-semibold">Popular Categories</h6>
                                    <a href="" class="align-items-center d-flex bd py-2 mb-2">
                                    <img src="https://via.placeholder.com/100x100" alt="" class="d-block wd-40">
                                    <span class="ml-2">Gaming <span class="tx-10">(2412+)</span></span>
                                    </a>
                                    <a href="" class="align-items-center d-flex bd py-2 mb-2">
                                    <img src="https://via.placeholder.com/100x100" alt="" class="d-block wd-40">
                                    <span class="ml-2">Smartphone <span class="tx-10">(2412+)</span></span>
                                    </a>
                                    <a href="" class="align-items-center d-flex bd py-2 mb-2">
                                    <img src="https://via.placeholder.com/100x100" alt="" class="d-block wd-40">
                                    <span class="ml-2">Smart Watch <span class="tx-10">(1423+)</span></span>
                                    </a>
                                    <a href="" class="align-items-center d-flex bd py-2 mb-2">
                                    <img src="https://via.placeholder.com/100x100" alt="" class="d-block wd-40">
                                    <span class="ml-2">Headphone <span class="tx-10">(4852+)</span></span>
                                    </a>
                                    <a href="" class="align-items-center d-flex bd py-2 mb-2">
                                    <img src="https://via.placeholder.com/100x100" alt="" class="d-block wd-40">
                                    <span class="ml-2">Shoes <span class="tx-10">(3261+)</span></span>
                                    </a>
                                    <a href="" class="align-items-center d-flex bd py-2 mb-2">
                                    <img src="https://via.placeholder.com/100x100" alt="" class="d-block wd-40">
                                    <span class="ml-2">Sunglasses <span class="tx-10">(1245+)</span></span>
                                    </a>
                                    <a href="#" class="align-items-center d-flex bd py-2 mb-2">
                                    <img src="https://via.placeholder.com/100x100" alt="" class="d-block wd-40">
                                    <span class="ml-2">Bags <span class="tx-10">(2543+)</span></span>
                                    </a>
                                 </div>
                                 <!-- / Popular categories -->
                                 <div class="col-6 col-lg-4 col-xl-3">
                                    <div class="row">
                                       <div class="col-12 sub-menu mb-4">
                                          <h6 class="tx-dark tx-13 tx-semibold">Smartphone</h6>
                                          <ul class="list-unstyled">
                                             <li>
                                                <a class="menu-item pl-0 tx-13 tx-normal" href="">
                                                <i class="icon-plus pl-1 pr-2"></i>Octa Core
                                                </a>
                                             </li>
                                             <li>
                                                <a class="menu-item pl-0 tx-13 tx-normal" href="">
                                                <i class="icon-plus pl-1 pr-2"></i>Deca Core
                                                </a>
                                             </li>
                                             <li>
                                                <a class="menu-item pl-0 tx-13 tx-normal" href="">
                                                <i class="icon-plus pl-1 pr-2"></i>Single SIM Card
                                                </a>
                                             </li>
                                             <li>
                                                <a class="menu-item pl-0 tx-13 tx-normal" href="">
                                                <i class="icon-plus pl-1 pr-2"></i>Dual SIM Card
                                                </a>
                                             </li>
                                             <li>
                                                <a class="menu-item pl-0 tx-13 tx-normal" href="">
                                                <i class="icon-plus pl-1 pr-2"></i>4GB RAM
                                                </a>
                                             </li>
                                             <li>
                                                <a class="menu-item pl-0 tx-13 tx-normal" href="">
                                                <i class="icon-plus pl-1 pr-2"></i>5.5-inch Display
                                                </a>
                                             </li>
                                          </ul>
                                       </div>
                                       <div class="col-12 sub-menu mb-4">
                                          <h6 class="tx-dark tx-13 tx-semibold">Networking</h6>
                                          <ul class="list-unstyled">
                                             <li>
                                                <a class="menu-item pl-0 tx-13 tx-normal" href="">
                                                <i class="icon-plus pl-1 pr-2"></i>Wireless Routers
                                                </a>
                                             </li>
                                             <li>
                                                <a class="menu-item pl-0 tx-13 tx-normal" href="">
                                                <i class="icon-plus pl-1 pr-2"></i>Network Cards
                                                </a>
                                             </li>
                                             <li>
                                                <a class="menu-item pl-0 tx-13 tx-normal" href="">
                                                <i class="icon-plus pl-1 pr-2"></i>3G Modems
                                                </a>
                                             </li>
                                             <li>
                                                <a class="menu-item pl-0 tx-13 tx-normal" href="">
                                                <i class="icon-plus pl-1 pr-2"></i>Wireless Routers
                                                </a>
                                             </li>
                                             <li>
                                                <a class="menu-item pl-0 tx-13 tx-normal" href="">
                                                <i class="icon-plus pl-1 pr-2"></i>Modem-Router Combos
                                                </a>
                                             </li>
                                             <li>
                                                <a class="menu-item pl-0 tx-13 tx-normal" href="">
                                                <i class="icon-plus pl-1 pr-2"></i>Networking Tools
                                                </a>
                                             </li>
                                          </ul>
                                       </div>
                                    </div>
                                 </div>
                                 <div class="col-6 col-lg-4 col-xl-3">
                                    <div class="row no-gutters">
                                       <div class="col-12 sub-menu mb-4">
                                          <h6 class="tx-dark tx-13 tx-semibold">Camera & Photos</h6>
                                          <ul class="list-unstyled">
                                             <li>
                                                <a class="menu-item pl-0 tx-13 tx-normal" href="">
                                                <i class="icon-plus pl-1 pr-2"></i>Camera & Photo
                                                </a>
                                             </li>
                                             <li>
                                                <a class="menu-item pl-0 tx-13 tx-normal" href="">
                                                <i class="icon-plus pl-1 pr-2"></i>Digital Cameras
                                                </a>
                                             </li>
                                             <li>
                                                <a class="menu-item pl-0 tx-13 tx-normal" href="">
                                                <i class="icon-plus pl-1 pr-2"></i>Camcorders
                                                </a>
                                             </li>
                                             <li>
                                                <a class="menu-item pl-0 tx-13 tx-normal" href="">
                                                <i class="icon-plus pl-1 pr-2"></i>Camera Drones
                                                </a>
                                             </li>
                                             <li>
                                                <a class="menu-item pl-0 tx-13 tx-normal" href="">
                                                <i class="icon-plus pl-1 pr-2"></i>Action Cameras
                                                </a>
                                             </li>
                                             <li>
                                                <a class="menu-item pl-0 tx-13 tx-normal" href="">
                                                <i class="icon-plus pl-1 pr-2"></i>Camera & Photo Accessories
                                                </a>
                                             </li>
                                          </ul>
                                       </div>
                                       <div class="col-12 sub-menu mb-4">
                                          <h6 class="tx-dark tx-13 tx-semibold">Laptop & Tables</h6>
                                          <ul class="list-unstyled">
                                             <li>
                                                <a class="menu-item pl-0 tx-13 tx-normal" href="">
                                                <i class="icon-plus pl-1 pr-2"></i>Laptops
                                                </a>
                                             </li>
                                             <li>
                                                <a class="menu-item pl-0 tx-13 tx-normal" href="">
                                                <i class="icon-plus pl-1 pr-2"></i>Gaming Laptops
                                                </a>
                                             </li>
                                             <li>
                                                <a class="menu-item pl-0 tx-13 tx-normal" href="">
                                                <i class="icon-plus pl-1 pr-2"></i>Tablets
                                                </a>
                                             </li>
                                             <li>
                                                <a class="menu-item pl-0 tx-13 tx-normal" href="">
                                                <i class="icon-plus pl-1 pr-2"></i>2 in 1 Tablets
                                                </a>
                                             </li>
                                             <li>
                                                <a class="menu-item pl-0 tx-13 tx-normal" href="">
                                                <i class="icon-plus pl-1 pr-2"></i>Phone Call Tablets
                                                </a>
                                             </li>
                                             <li>
                                                <a class="menu-item pl-0 tx-13 tx-normal" href="">
                                                <i class="icon-plus pl-1 pr-2"></i>iPad
                                                </a>
                                             </li>
                                          </ul>
                                       </div>
                                    </div>
                                 </div>
                                 <div class="col-6 col-lg-4 col-xl-3">
                                    <div class="row no-gutters">
                                       <div class="col-12 sub-menu mb-4">
                                          <h6 class="tx-dark tx-13 tx-semibold">Accessories</h6>
                                          <ul class="list-unstyled">
                                             <li>
                                                <a class="menu-item pl-0 tx-13 tx-normal" href="">
                                                <i class="icon-plus pl-1 pr-2"></i>Mobile Phone Accessories
                                                </a>
                                             </li>
                                             <li>
                                                <a class="menu-item pl-0 tx-13 tx-normal" href="">
                                                <i class="icon-plus pl-1 pr-2"></i>Power Bank
                                                </a>
                                             </li>
                                             <li>
                                                <a class="menu-item pl-0 tx-13 tx-normal" href="">
                                                <i class="icon-plus pl-1 pr-2"></i>Screen Protectors
                                                </a>
                                             </li>
                                             <li>
                                                <a class="menu-item pl-0 tx-13 tx-normal" href="">
                                                <i class="icon-plus pl-1 pr-2"></i>Mobile Phone Cables
                                                </a>
                                             </li>
                                             <li>
                                                <a class="menu-item pl-0 tx-13 tx-normal" href="">
                                                <i class="icon-plus pl-1 pr-2"></i>Mobile Phone Chargers
                                                </a>
                                             </li>
                                             <li>
                                                <a class="menu-item pl-0 tx-13 tx-normal" href="">
                                                <i class="icon-plus pl-1 pr-2"></i>Holders & Stands
                                                </a>
                                             </li>
                                          </ul>
                                       </div>
                                       <div class="col-12 sub-menu mb-4">
                                          <h6 class="tx-dark tx-13 tx-semibold">Laptop Accessories</h6>
                                          <ul class="list-unstyled">
                                             <li>
                                                <a class="menu-item pl-0 tx-13 tx-normal" href="">
                                                <i class="icon-plus pl-1 pr-2"></i>Mobile Phone Accessories
                                                </a>
                                             </li>
                                             <li>
                                                <a class="menu-item pl-0 tx-13 tx-normal" href="">
                                                <i class="icon-plus pl-1 pr-2"></i>Power Bank
                                                </a>
                                             </li>
                                             <li>
                                                <a class="menu-item pl-0 tx-13 tx-normal" href="">
                                                <i class="icon-plus pl-1 pr-2"></i>Screen Protectors
                                                </a>
                                             </li>
                                             <li>
                                                <a class="menu-item pl-0 tx-13 tx-normal" href="">
                                                <i class="icon-plus pl-1 pr-2"></i>Mobile Phone Cables
                                                </a>
                                             </li>
                                             <li>
                                                <a class="menu-item pl-0 tx-13 tx-normal" href="">
                                                <i class="icon-plus pl-1 pr-2"></i>Mobile Phone Chargers
                                                </a>
                                             </li>
                                             <li>
                                                <a class="menu-item pl-0 tx-13 tx-normal" href="">
                                                <i class="icon-plus pl-1 pr-2"></i>Holders & Stands
                                                </a>
                                             </li>
                                          </ul>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </li>
                     </ul>
                  </div>
                  <!--/ Mega Menu End-->
                  <!--/ Brand and Logo End -->
                  <!--================================-->
                  <!-- Header Right Start -->
                  <!--================================-->
                  <div class="header-right pull-right">
                     <ul class="list-inline justify-content-end">
                        <li class="list-inline-item align-middle"><a  href="#" id="search-button"><i class="ion-ios-search-strong tx-20"></i></a></li>
                        <!--================================-->
                        <!-- Languages Dropdown Start -->
                        <!--================================-->
                        <li class="list-inline-item align-middle dropdown hidden-xs">
                           <a  href="" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                           <i class="flag-icon flag-icon-us"></i>
                           </a>
                           <ul class="dropdown-menu languages-dropdown shadow-2">
                              <li>
                                 <a href="" data-lang="en"><i class="flag-icon flag-icon-us mr-2"></i><span>English-US</span></a>
                              </li>
                              <li>
                                 <a href="" data-lang="es"><i class="flag-icon flag-icon-es mr-2"></i><span>Spanish</span></a>
                              </li>
                              <li>
                                 <a href="" data-lang="fr"><i class="flag-icon flag-icon-fr mr-2"></i><span>French</span></a>
                              </li>
                              <li>
                                 <a href="" data-lang="gr"><i class="flag-icon flag-icon-de mr-2"></i><span>German</span></a>
                              </li>
                              <li>
                                 <a href="" data-lang="ru"><i class="flag-icon flag-icon-ru mr-2"></i><span>Russian</span></a>
                              </li>
                              <li>
                                 <a href="" data-lang="ru"><i class="flag-icon flag-icon-gb mr-2"></i><span>English-UK</span></a>
                              </li>
                           </ul>
                        </li>
                        <!--/ Languages Dropdown End -->
                        <!--================================-->
                        <!-- Notifications Dropdown Start -->
                        <!--================================-->
                        <li class="list-inline-item dropdown hidden-xs">
                           <a class="notification-icon" href="" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                           <i class="icon-bell tx-16"></i>
                           <span class="notification-count wave in"></span>
                           </a>
                           <div class="dropdown-menu dropdown-menu-right shadow-2">
                              <!-- Top Notifications Area -->
                              <div class="top-notifications-area">
                                 <!-- Heading -->
                                 <div class="notifications-heading">
                                    <div class="heading-title">
                                       <h6>Notifications</h6>
                                    </div>
                                    <span>5+ New Notifications</span>
                                 </div>
                                 <div class="notifications-box" id="notificationsBox">
                                    <a class="dropdown-item list-group-item" href="javascript:void(0)">
                                       <div class="d-flex justify-content-between">
                                          <div class="wd-45 ht-38 mg-r-15 d-flex align-items-center justify-content-center rounded-circle card-icon-success">
                                             <i class="fa fa-smile-o tx-success tx-16"></i>
                                          </div>
                                          <div>
                                             <span>Your order is placed</span>
                                             <span class="small tx-gray-600 ft-right">Jun 10</span>
                                             <div class="tx-gray-600 tx-11">Dummy text of the printing and type setting industry.</div>
                                          </div>
                                       </div>
                                    </a>
                                    <a class="dropdown-item list-group-item" href="javascript:void(0)">
                                       <div class="d-flex justify-content-between">
                                          <div class="wd-45 ht-38 mg-r-15 d-flex align-items-center justify-content-center rounded-circle card-icon-warning">
                                             <i class="fa fa-bell tx-warning tx-16"></i>
                                          </div>
                                          <div>
                                             <span>Your item is shipped</span>
                                             <span class="small tx-gray-600 ft-right">Jun 05</span>
                                             <div class="tx-gray-600 tx-11">Dummy text of the printing and type setting industry.</div>
                                          </div>
                                       </div>
                                    </a>
                                    <a class="dropdown-item list-group-item" href="javascript:void(0)">
                                       <div class="d-flex justify-content-between">
                                          <div class="wd-45 ht-38 mg-r-15 d-flex align-items-center justify-content-center rounded-circle card-icon-success">
                                             <i class="fa fa-check tx-success tx-16"></i>
                                          </div>
                                          <div>
                                             <span>New Message received</span>
                                             <span class="small tx-gray-600 ft-right">Jun 02</span>
                                             <div class="tx-gray-600 tx-11">Dummy text of the printing and type setting industry.</div>
                                          </div>
                                       </div>
                                    </a>
                                    <a class="dropdown-item list-group-item" href="javascript:void(0)">
                                       <div class="d-flex justify-content-between">
                                          <div class="wd-45 ht-38 mg-r-15 d-flex align-items-center justify-content-center rounded-circle card-icon-danger">
                                             <i class="fa fa-heartbeat tx-danger tx-16"></i>
                                          </div>
                                          <div>
                                             <span>Payment failed!</span>
                                             <span class="small tx-gray-600 ft-right">May 29</span>
                                             <div class="tx-gray-600 tx-11">Dummy text of the printing and type setting industry.</div>
                                          </div>
                                       </div>
                                    </a>
                                    <a class="dropdown-item list-group-item" href="javascript:void(0)">
                                       <div class="d-flex justify-content-between">
                                          <div class="wd-45 ht-38 mg-r-15 d-flex align-items-center justify-content-center rounded-circle card-icon-primary">
                                             <i class="fa fa-info tx-info tx-16"></i>
                                          </div>
                                          <div>
                                             <span>New document available</span>
                                             <span class="small tx-gray-600 ft-right">May 25</span>
                                             <div class="tx-gray-600 tx-11">Dummy text of the printing and type setting industry.</div>
                                          </div>
                                       </div>
                                    </a>
                                    <a class="dropdown-item list-group-item" href="javascript:void(0)">
                                       <div class="d-flex justify-content-between">
                                          <div class="wd-45 ht-38 mg-r-15 d-flex align-items-center justify-content-center rounded-circle card-icon-primary">
                                             <i class="fa fa-info tx-info tx-16"></i>
                                          </div>
                                          <div>
                                             <span>New document available</span>
                                             <span class="small tx-gray-600 ft-right">May 08</span>
                                             <div class="tx-gray-600 tx-11">Dummy text of the printing and type setting industry.</div>
                                          </div>
                                       </div>
                                    </a>
                                 </div>
                                 <div class="notifications-footer">
                                    <a href="">View all Notifications</a>
                                 </div>
                              </div>
                           </div>
                        </li>
                        <!--/ Notifications Dropdown End -->
                        <!--================================-->
                        <!-- Messages Dropdown Start -->
                        <!--================================-->
                        <li class="list-inline-item dropdown hidden-xs">
                           <a class="message-icon" href="" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                           <i class="icon-envelope tx-16"></i>
                           <span class="messages-count wave in"></span>
                           </a>
                           <div class="dropdown-menu dropdown-menu-right shadow-2">
                              <div class="top-message-area">
                                 <div class="top-message-heading">
                                    <div class="heading-title">
                                       <h6>Messages</h6>
                                    </div>
                                    <span>5+ New Messages</span>
                                 </div>
                                 <div class="message-box" id="messageBox">
                                    <a class="dropdown-item list-group-item" href="javascript:void(0)">
                                       <div class="d-flex justify-content-between">
                                          <div class="pd-r-15">
                                             <span class="avatar avatar-online">
                                             <img src="https://via.placeholder.com/100x100" class="img-fluid" alt="">
                                             <i></i>
                                             </span>
                                          </div>
                                          <div>
                                             <span>Mary Adams</span>
                                             <span class="small tx-gray-600 ft-right">30 minutes ago</span>
                                             <div class="tx-gray-600 tx-11">Dummy text of the printing and type setting industry...</div>
                                          </div>
                                       </div>
                                    </a>
                                    <a class="dropdown-item list-group-item" href="javascript:void(0)">
                                       <div class="d-flex justify-content-between">
                                          <div class="pd-r-15">
                                             <span class="avatar avatar-online">
                                             <img src="https://via.placeholder.com/100x100" class="img-fluid" alt="">
                                             <i></i>
                                             </span>
                                          </div>
                                          <div>
                                             <span>Richards Caleb</span>
                                             <span class="small tx-gray-600 ft-right">12 hours ago</span>
                                             <div class="tx-gray-600 tx-11">Dummy text of the printing and type setting industry...</div>
                                          </div>
                                       </div>
                                    </a>
                                    <a class="dropdown-item list-group-item" href="javascript:void(0)">
                                       <div class="d-flex justify-content-between">
                                          <div class="pd-r-15">
                                             <span class="avatar avatar-busy">
                                             <img src="https://via.placeholder.com/100x100" class="img-fluid" alt="">
                                             <i></i>
                                             </span>
                                          </div>
                                          <div>
                                             <span>Lane Richards</span>
                                             <span class="small tx-gray-600 ft-right">2 days ago</span>
                                             <div class="tx-gray-600 tx-11">Dummy text of the printing and type setting industry...</div>
                                          </div>
                                       </div>
                                    </a>
                                    <a class="dropdown-item list-group-item" href="javascript:void(0)">
                                       <div class="d-flex justify-content-between">
                                          <div class="pd-r-15">
                                             <span class="avatar avatar-busy">
                                             <img src="https://via.placeholder.com/100x100" class="img-fluid" alt="">
                                             <i></i>
                                             </span>
                                          </div>
                                          <div>
                                             <span>Edward Lane</span>
                                             <span class="small tx-gray-600 ft-right">3 days ago</span>
                                             <div class="tx-gray-600 tx-11">Dummy text of the printing and type setting industry...</div>
                                          </div>
                                       </div>
                                    </a>
                                    <a class="dropdown-item list-group-item" href="javascript:void(0)">
                                       <div class="d-flex justify-content-between">
                                          <div class="pd-r-15">
                                             <span class="avatar avatar-offline">
                                             <img src="https://via.placeholder.com/100x100" class="img-fluid" alt="">
                                             <i></i>
                                             </span>
                                          </div>
                                          <div>
                                             <span>Lane Richards</span>
                                             <span class="small tx-gray-600 ft-right">2 days ago</span>
                                             <div class="tx-gray-600 tx-11">Dummy text of the printing and type setting industry...</div>
                                          </div>
                                       </div>
                                    </a>
                                    <a class="dropdown-item list-group-item" href="javascript:void(0)">
                                       <div class="d-flex justify-content-between">
                                          <div class="pd-r-15">
                                             <span class="avatar avatar-offline">
                                             <img src="https://via.placeholder.com/100x100" class="img-fluid" alt="">
                                             <i></i>
                                             </span>
                                          </div>
                                          <div>
                                             <span>Edward Lane</span>
                                             <span class="small tx-gray-600 ft-right">3 days ago</span>
                                             <div class="tx-gray-600 tx-11">Dummy text of the printing and type setting industry...</div>
                                          </div>
                                       </div>
                                    </a>
                                 </div>
                                 <div class="top-message-footer">
                                    <a href="">View all Messages</a>
                                 </div>
                              </div>
                           </div>
                        </li>
                        <!--/ Messages Dropdown End -->
                        <!--================================-->
                        <!-- Profile Dropdown Start -->
                        <!--================================-->
                        <li class="list-inline-item dropdown">
                           <a  href="" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><span class="select-profile">Hi, John!</span><img src="assets/images/avatar-placeholder.png"" class="img-fluid wd-35 ht-35 rounded-circle" alt=""></a>
                           <div class="dropdown-menu dropdown-menu-right dropdown-profile shadow-2">
                              <div class="user-profile-area">
                                 <div class="user-profile-heading">
                                    <div class="profile-thumbnail">
                                       <img src="https://via.placeholder.com/100x100" class="img-fluid wd-35 ht-35 rounded-circle" alt="">
                                    </div>
                                    <div class="profile-text">
                                       <h6>John Deo</h6>
                                       <span>email@example.com</span>
                                    </div>
                                 </div>
                                 <a href="" class="dropdown-item"><i class="icon-user" aria-hidden="true"></i> My profile</a>
                                 <a href="" class="dropdown-item"><i class="icon-envelope" aria-hidden="true"></i> Messages <span class="badge badge-success ft-right mg-t-3">10+</span></a>
                                 <a href="" class="dropdown-item"><i class="icon-settings" aria-hidden="true"></i> settings</a>
                                 <a href="" class="dropdown-item"><i class="icon-share" aria-hidden="true"></i> My Activity <span class="badge badge-warning ft-right mg-t-3">5+</span></a>
                                 <a href="" class="dropdown-item"><i class="icon-cloud-download" aria-hidden="true"></i> My Download <span class="badge badge-success ft-right mg-t-3">10+</span></a>
                                 <a href="" class="dropdown-item"><i class="icon-heart" aria-hidden="true"></i> Support</a>
                                 <a href="page-singin.html" class="dropdown-item"><i class="icon-power" aria-hidden="true"></i> Sign-out</a>
                              </div>
                           </div>
                        </li>
                        <!-- Profile Dropdown End -->
                        <!--================================-->
                        <!-- Setting Sidebar Start -->
                        <!--================================-->
                        <li class="list-inline-item dropdown hidden-xs">
                           <a class="settings-icon" id="settingSidebarTrigger" href="" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                           <i class="icon-settings tx-16"></i>
                           </a>					   
                        </li>
                        <!--/ Setting Sidebar End -->
                     </ul>
                  </div>
                  <!--/ Header Right End -->
               </nav>
            </div>
            <!--/ Page Header End -->
            <!--================================-->
            <!-- Page Inner Start -->
            <!--================================-->
            <div class="page-inner">
               <!-- Main Wrapper -->
               <div id="main-wrapper">
                  <!--================================-->
                  <!-- Breadcrumb Start -->
                  <!--================================-->
                  <div class="pageheader pd-t-25 pd-b-35">
                     <div class="pd-t-5 pd-b-5">
                        <h1 class="pd-0 mg-0 tx-20">Projects Management</h1>
                     </div>
                     <div class="breadcrumb pd-0 mg-0">
                        <a class="breadcrumb-item" href="index.html"><i class="icon ion-ios-home-outline"></i> Home</a>
                        <a class="breadcrumb-item" href="">Dashboard</a>
                        <span class="breadcrumb-item active">Projects Management</span>
                     </div>
                  </div>
                  <!--/ Breadcrumb End -->
                  <!--================================-->
                  <!-- Count Card Start -->
                  <!--================================-->
                  <div class="row clearfix">
                     <div class="col-lg-12 col-xl-6">
                        <div class="row row-xs">
                           <div class="col-sm-6">
                              <div class="card mg-b-20">
                                 <div class="card-body">
                                    <div class="media d-inline-flex">
                                       <div>
                                          <span class="tx-uppercase tx-10 mg-b-10">Growth</span>					  
                                          <h2 class="tx-20 tx-sm-18 tx-md-24 mb-0 mt-2 mt-sm-0 tx-normal tx-rubik tx-dark">$<span class="counter">2,450</span></h2>
                                       </div>
                                    </div>
                                    <div class="clearfix"> 
                                       <span class="float-left tx-11 tx-gray-500">Achievement</span> 
                                       <span class="float-right">
                                       <i class="ion-android-arrow-up mr-1 tx-success"></i><span class="tx-dark">92</span><span class="small mg-b-0">/100</span>
                                       </span>
                                    </div>
                                    <div class="progress ht-3 op-5">
                                       <div class="progress-bar bg-primary wd-90p" role="progressbar" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                 </div>
                              </div>
                           </div>
                           <div class="col-sm-6">
                              <div class="card mg-b-20">
                                 <div class="card-body">
                                    <div class="media d-inline-flex">
                                       <div>
                                          <span class="tx-uppercase tx-10 mg-b-10">Project</span>					  
                                          <h2 class="tx-20 tx-sm-18 tx-md-24 mb-0 mt-2 mt-sm-0 tx-normal tx-rubik tx-dark"><span class="counter">2,320</span> </h2>
                                       </div>
                                    </div>
                                    <div class="clearfix"> 
                                       <span class="float-left tx-11 tx-gray-500">Achievement</span> 
                                       <span class="float-right">
                                       <i class="ion-android-arrow-up mr-1 tx-success"></i><span class="tx-dark">95</span><span class="small mg-b-0">/100</span>
                                       </span>
                                    </div>
                                    <div class="progress ht-3 op-5">
                                       <div class="progress-bar bg-warning wd-95p" role="progressbar" aria-valuenow="95" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                 </div>
                              </div>
                           </div>
                           <div class="col-sm-6">
                              <div class="card mg-b-20">
                                 <div class="card-body">
                                    <div class="media d-inline-flex">
                                       <div>
                                          <span class="tx-uppercase tx-10 mg-b-10">Income</span>					  
                                          <h2 class="tx-20 tx-sm-18 tx-md-24 mb-0 mt-2 mt-sm-0 tx-normal tx-rubik tx-dark">$<span class="counter">9,750</span> </h2>
                                       </div>
                                    </div>
                                    <div class="clearfix"> 
                                       <span class="float-left tx-11 tx-gray-500">Achievement</span> 
                                       <span class="float-right">
                                       <i class="ion-android-arrow-down mr-1 tx-danger"></i><span class="tx-dark">81</span><span class="small mg-b-0">/100</span>
                                       </span>
                                    </div>
                                    <div class="progress ht-3 op-5">
                                       <div class="progress-bar bg-danger wd-80p" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                 </div>
                              </div>
                           </div>
                           <div class="col-sm-6">
                              <div class="card mg-b-20">
                                 <div class="card-body">
                                    <div class="media d-inline-flex">
                                       <div>
                                          <span class="tx-uppercase tx-10 mg-b-10">Employers</span>					  
                                          <h2 class="tx-20 tx-sm-18 tx-md-24 mb-0 mt-2 mt-sm-0 tx-normal tx-rubik tx-dark"><span class="counter">1,250</span> </h2>
                                       </div>
                                    </div>
                                    <div class="clearfix"> 
                                       <span class="float-lef tx-11 tx-gray-500">Achievement</span> 
                                       <span class="float-right">
                                       <i class="ion-android-arrow-down mr-1 tx-success"></i><span class="tx-dark">85</span><span class="small mg-b-0">/100</span>
                                       </span>
                                    </div>
                                    <div class="progress ht-3 op-5">
                                       <div class="progress-bar bg-teal wd-85p" role="progressbar" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                 </div>
                              </div>
                           </div>
                           <div class="col-md-12">
                              <div class="card mg-b-20">
                                 <div class="card card-body">
                                    <div class="d-flex">
                                       <span class="wd-80 ht-80 card-icon-primary d-flex align-items-center justify-content-center rounded hidden-xs"><i class="ion-ios-speedometer-outline tx-50"></i></span>
                                       <div class="mg-l-0 mg-md-l-20">
                                          <h6 class="mg-b-5">Download your projects report.</h6>
                                          <p class="tx-12 mg-b-5">Lorem ipsum sed do eiusmod tempor incididunt ut labore et dolore. <a href="">Learn More</a></p>
                                          <p class="mg-b-0">
                                             <a href="" class="btn btn-sm btn-label-primary mg-t-5"><i class="mdi mdi-file-pdf"></i> CSV Formate</a>
                                             <a href="" class="btn btn-sm btn-label-danger mg-t-5"><i class="mdi mdi-file-pdf"></i> XLM Formate</a>
                                             <a href="" class="btn btn-sm btn-label-success mg-t-5"><i class="mdi mdi-file-pdf"></i> PDF Formate</a>
                                             <a href="" class="btn btn-sm btn-label-warning mg-t-5"><i class="mdi mdi-file-pdf"></i> Word Formate</a>
                                          </p>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                     <div class="col-lg-12 col-xl-6">
                        <div class="card mg-b-20">
                           <div class="card-header">
                              <h4 class="card-header-title">
                                 Projects Budget
                              </h4>
                              <div class="card-header-btn">
                                 <a  href="" data-toggle="collapse" class="btn card-collapse" data-target="#projectsBudget" aria-expanded="true"><i class="ion-ios-arrow-down"></i></a>
                                 <a href="" data-toggle="refresh" class="btn card-refresh"><i class="ion-android-refresh"></i></a>
                                 <a href="" data-toggle="expand" class="btn card-expand"><i class="ion-android-expand"></i></a>
                                 <a href="" data-toggle="remove" class="btn card-remove"><i class="ion-android-close"></i></a>
                              </div>
                           </div>
                           <div class="card-body pd-y-0 collapse show" id="projectsBudget">
                              <div class="row clearfix">
                                 <div class="col-lg-4 col-md-4 col-sm-12 pd-t-20 d-flex align-items-center justify-content-center">
                                    <div class="wd-10 ht-10 rounded-circle bd bd-3 bd-info mg-r-10"></div>
                                    <div>
                                       <span class="tx-uppercase tx-10 mg-b-10">Total Budget</span>
                                       <h3 class="tx-20 tx-sm-18 tx-md-24 mb-0 mt-2 mt-sm-0 tx-normal tx-rubik tx-dark">$<span class="counter">25,350</span></h3>
                                       <div class="tx-11 d-flex tx-gray-500"><span class="text-success mr-2 d-flex align-items-center"><i class="ion-android-arrow-up mr-1"></i>+535%</span>avg. per month</div>
                                    </div>
                                 </div>
                                 <div class="col-lg-4 col-md-4 col-sm-12 pd-t-20 d-flex align-items-center justify-content-center">
                                    <div class="wd-10 ht-10 rounded-circle bd bd-3 bd-info mg-r-10 op-5"></div>
                                    <div>
                                       <span class="tx-uppercase tx-10 mg-b-10">Total Expense</span>
                                       <h3 class="tx-20 tx-sm-18 tx-md-24 mb-0 mt-2 mt-sm-0 tx-normal tx-rubik tx-dark">$<span class="counter">20,830</span></h3>
                                       <div class="tx-11 d-flex tx-gray-500"><span class="text-success mr-2 d-flex align-items-center"><i class="ion-android-arrow-up mr-1"></i>+230%</span>avg. per month</div>
                                    </div>
                                 </div>
                                 <div class="col-lg-4 col-md-4 col-sm-12 pd-t-20 d-flex align-items-center justify-content-center">
                                    <div class="wd-10 ht-10 rounded-circle bd bd-3 bd-success mg-r-10"></div>
                                    <div>
                                       <span class="tx-uppercase tx-10 mg-b-10">Total Target</span>
                                       <h3 class="tx-20 tx-sm-18 tx-md-24 mb-0 mt-2 mt-sm-0 tx-normal tx-rubik tx-dark">$<span class="counter">30,360</span></h3>
                                       <div class="tx-11 d-flex tx-gray-500"><span class="text-danger mr-2 d-flex align-items-center"><i class="ion-android-arrow-down mr-1"></i>-135%</span>avg. per month</div>
                                    </div>
                                 </div>
                              </div>
                              <div class="clearfix">
                                 <div id="projectsBudgetChaart"></div>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
                  <!--/ Count Card End -->
                  <div class="row row-xs clearfix">
                     <!--================================-->
                     
                     
                     
                     
                     
                     
                     
                     
                     
                 
                     <!-- Latest Projects Start-->
                     <!--================================-->
                     <div class="col-lg-12 col-xl-8">
                        <div class="card mg-b-20">
                           <div class="card-header">
                              <h4 class="card-header-title">
                                 Latest Projects
                              </h4>
                              <div class="card-header-btn">
                                 <a  href="" data-toggle="collapse" class="btn card-collapse" data-target="#latestProjects" aria-expanded="true"><i class="ion-ios-arrow-down"></i></a>
                                 <a href="" data-toggle="refresh" class="btn card-refresh"><i class="ion-android-refresh"></i></a>
                                 <a href="" data-toggle="expand" class="btn card-expand"><i class="ion-android-expand"></i></a>
                                 <a href="" data-toggle="remove" class="btn card-remove"><i class="ion-android-close"></i></a>
                              </div>
                           </div>
                           <div class="card-body pd-0 collapse show" id="latestProjects">
                              <div class="table-responsive">
                                 <table class="table table-hover mg-b-0">
                                    <thead class="tx-10 tx-uppercase">
                                       <tr>
                                          <th class="w-1">No</th>
                                          <th>Project Name</th>
                                          <th>Project Lead</th>
                                          <th>Status</th>
                                          <th>Price</th>
                                          <th class="tx-right">Action</th>
                                       </tr>
                                    </thead>
                                    <tbody>
                                       <tr>
                                          <td><span >02</span></td>
                                          <td><a href="" class="text-inherit">#4FGB65GN</a></td>
                                          <td>Stewart Bower</td>
                                          <td>
                                             <div class="clearfix">
                                                <div class="float-left"> <strong>87%</strong> </div>
                                                <div class="float-right"> <small class="tx-gray-500">Jun 01, 2018 - Sep 17, 2019</small> </div>
                                             </div>
                                             <div class="progress ht-3 op-5">
                                                <div class="progress-bar bg-success" role="progressbar" style="width: 87%" aria-valuenow="87" aria-valuemin="0" aria-valuemax="100"></div>
                                             </div>
                                          </td>
                                          <td>$15,987</td>
                                          <td class="text-right"> <a href="" class="btn btn-label-primary btn-sm mg-y-5"><i class="fa fa-pencil"></i> Edit</a> <a href="{{ url('add') }}" class="btn btn-label-success btn-sm mg-y-5"><i class="fa fa-link"></i> Add</a> <a href="" class="btn btn-label-danger btn-sm mg-y-5"><i class="fa fa-trash"></i> Delete</a> </td>
                                       </tr>
                                    </tbody>
                                 </table>
                              </div>
                           </div>
                        </div>
                     </div>
                     <!--/ Latest Projects End -->
                     
                     
                     
                     
            
                     
                     
                     
                     
                     
                     
                     
                     
                     
                     
                     
                     
                     <!--================================-->
                     <!-- Project By Country Start-->
                     <!--================================-->
                     <div class="col-md-6 col-xl-4">
                        <div class="card mg-b-20">
                           <div class="card-header">
                              <h4 class="card-header-title">
                                 Project By Country
                              </h4>
                              <div class="card-header-btn">
                                 <a  href="" data-toggle="collapse" class="btn card-collapse" data-target="#projectByCountry" aria-expanded="true"><i class="ion-ios-arrow-down"></i></a>
                                 <a href="" data-toggle="refresh" class="btn card-refresh"><i class="ion-android-refresh"></i></a>
                                 <a href="" data-toggle="expand" class="btn card-expand"><i class="ion-android-expand"></i></a>
                                 <a href="" data-toggle="remove" class="btn card-remove"><i class="ion-android-close"></i></a>
                              </div>
                           </div>
                           <div class="card-body pd-0 collapse show" id="projectByCountry">
                              <div class="table-responsive">
                                 <table class="table table-hover mg-b-0">
                                    <thead class="tx-10 tx-uppercase">
                                       <tr>
                                          <th>Country</th>
                                          <th class="text-right">Clients</th>
                                          <th class="text-right d-none d-md-table-cell w-50">Percentage (%)</th>
                                       </tr>
                                    </thead>
                                    <tbody>
                                       <tr>
                                          <td><i class="flag-icon flag-icon-us mr-1"></i> en-us</td>
                                          <td class="text-right">735</td>
                                          <td class="d-none d-md-table-cell align-middle">
                                             <div class="progress ht-3 op-5">
                                                <div class="progress-bar bg-success wd-95p" role="progressbar" aria-valuenow="65" aria-valuemin="0" aria-valuemax="100"> </div>
                                             </div>
                                          </td>
                                       </tr>
                                       <tr>
                                          <td><i class="flag-icon flag-icon-gb mr-1"></i> en-gb</td>
                                          <td class="text-right">223</td>
                                          <td class="d-none d-md-table-cell align-middle">
                                             <div class="progress ht-3 op-5">
                                                <div class="progress-bar bg-info wd-85p" role="progressbar" aria-valuenow="65" aria-valuemin="0" aria-valuemax="100"></div>
                                             </div>
                                          </td>
                                       </tr>
                                       <tr>
                                          <td><i class="flag-icon flag-icon-fr mr-1"></i> fr-fr</td>
                                          <td class="text-right">181</td>
                                          <td class="d-none d-md-table-cell align-middle">
                                             <div class="progress ht-3 op-5">
                                                <div class="progress-bar bg-danger wd-90p" role="progressbar" aria-valuenow="65" aria-valuemin="0" aria-valuemax="100"></div>
                                             </div>
                                          </td>
                                       </tr>
                                       <tr>
                                          <td><i class="flag-icon flag-icon-es mr-1"></i> es-es</td>
                                          <td class="text-right">132</td>
                                          <td class="d-none d-md-table-cell align-middle">
                                             <div class="progress ht-3 op-5">
                                                <div class="progress-bar bg-teal wd-75p" role="progressbar" aria-valuenow="65" aria-valuemin="0" aria-valuemax="100"></div>
                                             </div>
                                          </td>
                                       </tr>
                                       <tr>
                                          <td><i class="flag-icon flag-icon-de mr-1"></i> de-de</td>
                                          <td class="text-right">118</td>
                                          <td class="d-none d-md-table-cell align-middle">
                                             <div class="progress ht-3 op-5">
                                                <div class="progress-bar bg-warning wd-60p" role="progressbar" aria-valuenow="65" aria-valuemin="0" aria-valuemax="100"></div>
                                             </div>
                                          </td>
                                       </tr>
                                       <tr>
                                          <td><i class="flag-icon flag-icon-bd mr-1"></i> bn-bd</td>
                                          <td class="text-right">302</td>
                                          <td class="d-none d-md-table-cell align-middle">
                                             <div class="progress ht-3 op-5">
                                                <div class="progress-bar bg-indigo wd-75p" role="progressbar" aria-valuenow="65" aria-valuemin="0" aria-valuemax="100"></div>
                                             </div>
                                          </td>
                                       </tr>
                                       <tr>
                                          <td><i class="flag-icon flag-icon-au mr-1"></i> au-au</td>
                                          <td class="text-right">520</td>
                                          <td class="d-none d-md-table-cell align-middle">
                                             <div class="progress ht-3 op-5">
                                                <div class="progress-bar bg-pink wd-75p" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
                                             </div>
                                          </td>
                                       </tr>
                                    </tbody>
                                 </table>
                              </div>
                           </div>
                        </div>
                     </div>
                     <!--/ Project By Country End -->
                     <!--================================-->
                     <!-- Employee Status Start-->
                     <!--================================-->
                     <div class="col-md-6 col-xl-4">
                        <div class="card mg-b-20">
                           <div class="card-header">
                              <h4 class="card-header-title">
                                 Employee Status
                              </h4>
                              <div class="card-header-btn">
                                 <a  href="" data-toggle="collapse" class="btn card-collapse" data-target="#employeeStatus" aria-expanded="true"><i class="ion-ios-arrow-down"></i></a>
                                 <a href="" data-toggle="refresh" class="btn card-refresh"><i class="ion-android-refresh"></i></a>
                                 <a href="" data-toggle="expand" class="btn card-expand"><i class="ion-android-expand"></i></a>
                                 <a href="" data-toggle="remove" class="btn card-remove"><i class="ion-android-close"></i></a>
                              </div>
                           </div>
                           <div class="card-body pd-0 collapse show" id="employeeStatus">
                              <div class="table-responsive">
                                 <table class="table table-hover mg-b-0">
                                    <thead class="tx-10 tx-uppercase">
                                       <tr>
                                          <th class="w-1">No</th>
                                          <th>Name</th>
                                          <th class="wd-30p">Level</th>
                                          <th class="tx-right">Experience</th>
                                       </tr>
                                    </thead>
                                    <tbody>
                                       <tr>
                                          <td><span >01</span></td>
                                          <td><img src="https://via.placeholder.com/100x100" class="img-fluid wd-40 ht-40 rounded-circle mr-2" alt="">Maria Grant</td>
                                          <td>
                                             <div class="clearfix">
                                                <div class="float-left"> <strong>67%</strong> </div>
                                             </div>
                                             <div class="progress ht-3 op-5">
                                                <div class="progress-bar bg-primary" role="progressbar" style="width: 67%" aria-valuenow="67" aria-valuemin="0" aria-valuemax="100"></div>
                                             </div>
                                          </td>
                                          <td class="text-right">2+ Year</td>
                                       </tr>
                                       <tr>
                                          <td><span >02</span></td>
                                          <td><img src="https://via.placeholder.com/100x100" class="img-fluid wd-40 ht-40 rounded-circle mr-2" alt="">AB Mako</td>
                                          <td>
                                             <div class="clearfix">
                                                <div class="float-left"> <strong>77%</strong> </div>
                                             </div>
                                             <div class="progress ht-3 op-5">
                                                <div class="progress-bar bg-cyan" role="progressbar" style="width: 77%" aria-valuenow="77" aria-valuemin="0" aria-valuemax="100"></div>
                                             </div>
                                          </td>
                                          <td class="text-right">3+ Year</td>
                                       </tr>
                                       <tr>
                                          <td><span >03</span></td>
                                          <td><img src="https://via.placeholder.com/100x100" class="img-fluid wd-40 ht-40 rounded-circle mr-2" alt="">Pusiz bia</td>
                                          <td>
                                             <div class="clearfix">
                                                <div class="float-left"> <strong>85%</strong> </div>
                                             </div>
                                             <div class="progress ht-3 op-5">
                                                <div class="progress-bar bg-danger" role="progressbar" style="width: 85%" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100"></div>
                                             </div>
                                          </td>
                                          <td class="text-right">2.5+ Year</td>
                                       </tr>
                                       <tr>
                                          <td><span >04</span></td>
                                          <td><img src="https://via.placeholder.com/100x100" class="img-fluid wd-40 ht-40 rounded-circle mr-2" alt="">Hileri Soli</td>
                                          <td>
                                             <div class="clearfix">
                                                <div class="float-left"> <strong>65%</strong> </div>
                                             </div>
                                             <div class="progress ht-3 op-5">
                                                <div class="progress-bar bg-warning" role="progressbar" style="width: 65%" aria-valuenow="65" aria-valuemin="0" aria-valuemax="100"></div>
                                             </div>
                                          </td>
                                          <td class="text-right">1.5+ Year</td>
                                       </tr>
                                       <tr>
                                          <td><span >05</span></td>
                                          <td><img src="https://via.placeholder.com/100x100" class="img-fluid wd-40 ht-40 rounded-circle mr-2" alt="">John Deo</td>
                                          <td>
                                             <div class="clearfix">
                                                <div class="float-left"> <strong>95%</strong> </div>
                                             </div>
                                             <div class="progress ht-3 op-5">
                                                <div class="progress-bar bg-success" role="progressbar" style="width: 95%" aria-valuenow="95" aria-valuemin="0" aria-valuemax="100"></div>
                                             </div>
                                          </td>
                                          <td class="text-right">5+ Year</td>
                                       </tr>
                                    </tbody>
                                 </table>
                              </div>
                           </div>
                        </div>
                     </div>
                     <!--/ Employee Status End -->
                     <!--================================-->
                     <!-- New Users Start-->
                     <!--================================-->
                     <div class="col-md-6 col-xl-4">
                        <div class="card mg-b-20">
                           <div class="card-header">
                              <h4 class="card-header-title">
                                 New Users
                              </h4>
                              <div class="card-header-btn">
                                 <a  href="" data-toggle="collapse" class="btn card-collapse" data-target="#newUsers" aria-expanded="true"><i class="ion-ios-arrow-down"></i></a>
                                 <a href="" data-toggle="refresh" class="btn card-refresh"><i class="ion-android-refresh"></i></a>
                                 <a href="" data-toggle="expand" class="btn card-expand"><i class="ion-android-expand"></i></a>
                                 <a href="" data-toggle="remove" class="btn card-remove"><i class="ion-android-close"></i></a>
                              </div>
                           </div>
                           <div class="card-body pd-0 collapse show" id="newUsers">
                              <div class="table-responsive">
                                 <table class="table table-hover mg-0">
                                    <thead class="tx-10 tx-uppercase">
                                       <tr>
                                          <th>User</th>
                                          <th class="tx-right">Action</th>
                                       </tr>
                                    </thead>
                                    <tbody>
                                       <tr>
                                          <td class="d-flex pd-y-15-force">
                                             <div class="avatar avatar-30 mr-2">
                                                <img src="https://via.placeholder.com/100x100" class="img-fluid wd-40 ht-40 rounded-circle" alt="">
                                             </div>
                                             <div class="d-block">
                                                <a href="" class="my-0 mt-1 tx-13">Stanley C. Owens</a>		
                                                <p class="tx-12 mg-b-0 tx-gray-500 tx-normal">New Jersey, UK</p>
                                             </div>
                                          </td>
                                          <td class="tx-right align-middle">
                                             <a href="" class="btn btn-sm btn-label-primary">Contact</a>
                                          </td>
                                       </tr>
                                       <tr>
                                          <td class="d-flex pd-y-10-force">
                                             <div class="avatar avatar-30 mr-2">
                                                <img src="https://via.placeholder.com/100x100" class="img-fluid wd-40 ht-40 rounded-circle" alt="">
                                             </div>
                                             <div class="d-block">
                                                <a href="" class="my-0 mt-1 tx-13">John Doe</a>			
                                                <p class="tx-12 mg-b-0 tx-gray-500 tx-normal">New Jersey, UK</p>
                                             </div>
                                          </td>
                                          <td class="tx-right align-middle">                                                            
                                             <a href="" class="btn btn-sm btn-label-warning">Contact</a>
                                          </td>
                                       </tr>
                                       <tr>
                                          <td class="d-flex pd-y-10-force">
                                             <div class="avatar avatar-30 mr-2">
                                                <img src="https://via.placeholder.com/100x100" class="img-fluid wd-40 ht-40 rounded-circle" alt="">
                                             </div>
                                             <div class="d-block">
                                                <a href="" class="my-0 mt-1 tx-13">Stanley Owens</a>		
                                                <p class="tx-12 mg-b-0 tx-gray-500 tx-normal">New Jersey, UK</p>
                                             </div>
                                          </td>
                                          <td class="tx-right align-middle">                                                            
                                             <a href="" class="btn btn-sm btn-label-success">Contact</a>
                                          </td>
                                       </tr>
                                       <tr>
                                          <td class="d-flex pd-y-15-force">
                                             <div class="avatar avatar-30 mr-2">
                                                <img src="https://via.placeholder.com/100x100" class="img-fluid wd-40 ht-40 rounded-circle" alt="">
                                             </div>
                                             <div class="d-block">
                                                <a href="" class="my-0 mt-1 tx-13">Adam L. Easter</a>		
                                                <p class="tx-12 mg-b-0 tx-gray-500 tx-normal">New Jersey, UK</p>
                                             </div>
                                          </td>
                                          <td class="tx-right align-middle">                                                            
                                             <a href="" class="btn btn-sm btn-label-danger">Contact</a>
                                          </td>
                                       </tr>
                                       <tr>
                                          <td class="d-flex pd-y-10-force">
                                             <div class="avatar avatar-30 mr-2">
                                                <img src="https://via.placeholder.com/100x100" class="img-fluid wd-40 ht-40 rounded-circle" alt="">
                                             </div>
                                             <div class="d-block">
                                                <a href="" class="my-0 mt-1 tx-13">Jeffery M. Jensen</a>			
                                                <p class="tx-12 mg-b-0 tx-gray-500 tx-normal">New Jersey, UK</p>
                                             </div>
                                          </td>
                                          <td class="tx-right align-middle">                                                            
                                             <a href="" class="btn btn-sm btn-label-success">Contact</a>
                                          </td>
                                       </tr>
                                    </tbody>
                                 </table>
                              </div>
                           </div>
                        </div>
                     </div>
                     <!--/ New Users End -->
                     <!--================================-->
                     <!-- Transaction History Start-->
                     <!--================================-->
                     <div class="col-md-6 col-xl-4">
                        <div class="card mg-b-20">
                           <div class="card-header">
                              <h4 class="card-header-title">
                                 Transaction History
                              </h4>
                              <div class="card-header-btn">
                                 <a  href="" data-toggle="collapse" class="btn card-collapse" data-target="#transactionHistory" aria-expanded="true"><i class="ion-ios-arrow-down"></i></a>
                                 <a href="" data-toggle="refresh" class="btn card-refresh"><i class="ion-android-refresh"></i></a>
                                 <a href="" data-toggle="expand" class="btn card-expand"><i class="ion-android-expand"></i></a>
                                 <a href="" data-toggle="remove" class="btn card-remove"><i class="ion-android-close"></i></a>
                              </div>
                           </div>
                           <div class="collapse show" id="transactionHistory">
                              <ul class="list-group list-group-flush tx-13">
                                 <li class="list-group-item d-flex pd-sm-x-20">
                                    <div class="d-none d-sm-block"><span class="wd-40 ht-40 mg-r-10 d-flex align-items-center justify-content-center rounded card-icon-success"><i class="icon ion-checkmark"></i></span></div>
                                    <div class="pd-sm-l-10">
                                       <p class="tx-dark mg-b-0">Payment from <a href="" class="tx-dark mg-b-0 tx-semibold">#985632</a></p>
                                       <span class="tx-12 mg-b-0 tx-gray-500">Customar ID: #857423</span>
                                    </div>
                                    <div class="mg-l-auto text-right">
                                       <p class="mg-b-0 tx-rubik tx-dark">+$450<small class="tx-10">.50</small></p>
                                       <span class="tx-12 tx-success mg-b-0">Completed</span>
                                    </div>
                                 </li>
                                 <li class="list-group-item d-flex pd-sm-x-20">
                                    <div class="d-none d-sm-block"><span class="wd-40 ht-40 mg-r-10 d-flex align-items-center justify-content-center rounded card-icon-success"><i class="icon ion-checkmark"></i></span></div>
                                    <div class="pd-sm-l-10">
                                       <p class="tx-dark mg-b-0">Process refund to <a href="" class="tx-dark mg-b-0 tx-semibold">#458762</a></p>
                                       <span class="tx-12 mg-b-0 tx-gray-500">Customar ID: #354155</span>
                                    </div>
                                    <div class="mg-l-auto text-right">
                                       <p class="mg-b-0 tx-rubik tx-dark">+$180<small class="tx-10">.50</small></p>
                                       <span class="tx-12 tx-success mg-b-0">Completed</span>
                                    </div>
                                 </li>
                                 <li class="list-group-item d-flex pd-sm-x-20">
                                    <div class="d-none d-sm-block"><span class="wd-40 ht-40 mg-r-10 d-flex align-items-center justify-content-center rounded card-icon-warning"><i class="icon ion-shuffle"></i></span></div>
                                    <div class="pd-sm-l-10">
                                       <p class="tx-dark mg-b-0">Process delivery to <a href="" class="tx-dark mg-b-0 tx-semibold">#698524</a></p>
                                       <span class="tx-12 mg-b-0 tx-gray-500">Customar ID: #452356</span>
                                    </div>
                                    <div class="mg-l-auto text-right">
                                       <p class="mg-b-0 tx-rubik tx-dark">5 Items</p>
                                       <span class="tx-12 tx-warning mg-b-0">For pickup</span>
                                    </div>
                                 </li>
                                 <li class="list-group-item d-flex pd-sm-x-20">
                                    <div class="d-none d-sm-block"><span class="wd-40 ht-40 mg-r-10 d-flex align-items-center justify-content-center rounded card-icon-success"><i class="icon ion-checkmark"></i></span></div>
                                    <div class="pd-sm-l-10">
                                       <p class="tx-dark mg-b-0">Payment from <a href="" class="tx-dark mg-b-0 tx-semibold">#365845</a></p>
                                       <span class="tx-12 mg-b-0 tx-gray-500">Customar ID: #748562</span>
                                    </div>
                                    <div class="mg-l-auto text-right">
                                       <p class="mg-b-0 tx-rubik tx-dark">+$129<small class="tx-10">.50</small></p>
                                       <span class="tx-12 tx-success mg-b-0">Completed</span>
                                    </div>
                                 </li>
                                 <li class="list-group-item d-flex pd-sm-x-20">
                                    <div class="d-none d-sm-block"><span class="wd-40 ht-40 mg-r-10 d-flex align-items-center justify-content-center rounded card-icon-danger"><i class="icon ion-close"></i></span></div>
                                    <div class="pd-sm-l-10">
                                       <p class="tx-dark mg-b-0">Payment failed from <a href="" class="tx-dark mg-b-0 tx-semibold">#475821</a></p>
                                       <span class="tx-12 mg-b-0 tx-gray-500">Customar ID: #457771</span>
                                    </div>
                                    <div class="mg-l-auto text-right">
                                       <p class="mg-b-0 tx-rubik tx-dark">-$150<small class="tx-10">.50</small></p>
                                       <span class="tx-12 tx-danger mg-b-0">Declined</span>
                                    </div>
                                 </li>
                                 <li class="list-group-item d-flex pd-sm-x-20">
                                    <div class="d-none d-sm-block"><span class="wd-40 ht-40 mg-r-10 d-flex align-items-center justify-content-center rounded card-icon-success"><i class="icon ion-checkmark"></i></span></div>
                                    <div class="pd-sm-l-10">
                                       <p class="tx-dark mg-b-0">Payment from <a href="" class="tx-dark mg-b-0 tx-semibold">#365845</a></p>
                                       <span class="tx-12 mg-b-0 tx-gray-500">Customar ID: #748562</span>
                                    </div>
                                    <div class="mg-l-auto text-right">
                                       <p class="mg-b-0 tx-rubik tx-dark">+$129<small class="tx-10">.50</small></p>
                                       <span class="tx-12 tx-success mg-b-0">Completed</span>
                                    </div>
                                 </li>
                              </ul>
                           </div>
                        </div>
                     </div>
                     <!--/ Transaction History End -->
                  </div>
               </div>
               <!--/ Main Wrapper End -->
            </div>
            <!--/ Page Inner End -->
            <!--================================-->
            <!-- Page Footer Start -->	
            <!--================================-->
            <footer class="page-footer">
               <div class="pd-t-4 pd-b-0 pd-x-20">
                  <div class="tx-10 tx-uppercase">
                     <p class="pd-y-10 mb-0">Copyright&copy; 2019 | All rights reserved. | Created By <a href="http://themeforest.net/user/colorlibcode" target="_blank">ColorlibCode</a></p>
                  </div>
               </div>
            </footer>
            <!--/ Page Footer End -->		
         </div>
         <!--/ Page Content End -->
      </div>
      <!--/ Page Container End -->
      <!--================================-->
      <!-- Scroll To Top Start-->
      <!--================================-->	
      <a href="" data-click="scroll-top" class="btn-scroll-top fade"><i class="fa fa-arrow-up"></i></a>
      <!--/ Scroll To Top End -->
      <!--================================-->
      <!-- Setting Sidebar Start -->
      <!--================================-->	  
      <div class="setting-sidebar"  id="settingSidebar">
         <div class="wrapper"   id="settingSidebarScroll">
            <ul class="nav nav-tabs nav-pills nav-fill">
               <li class="nav-item">
                  <a class="nav-link" data-toggle="tab" href="#nav-notifications">Notifications</a>
               </li>
               <li class="nav-item">
                  <a class="nav-link active show" data-toggle="tab" href="#nav-activity">Activity</a>
               </li>
               <li class="nav-item">
                  <a class="nav-link" data-toggle="tab" href="#nav-setting">Setting</a>
               </li>
            </ul>
            <!-- Notification -->
            <div class="tab-content">
               <div class="tab-pane fade" id="nav-notifications">
                  <div class="card-activities mg-t-40-force">
                     <div class="media-list">
                        <div class="media pd-b-30">
                           <div class="activity-icon bg-primary op-6">
                              <i class="icon ion-stats-bars"></i>
                           </div>
                           <div class="ml-3 align-items-center">
                              <h6 class="tx-13 tx-dark">Report has been updated</h6>
                              <p class="tx-12 mb-0">Aenean vulputate eleifend tellus ligula, porttitor.</p>
                              <span class="small">05:00 PM Sun, 02 Feb 2019</span>
                           </div>
                        </div>
                        <div class="media pd-b-30">
                           <div class="activity-icon bg-success op-6">
                              <i class="icon ion-trophy"></i>
                           </div>
                           <div class="ml-3 align-items-center">
                              <h6 class="tx-13 tx-dark">Achievement Unlocked</h6>
                              <p class="tx-12 mb-0">Aenean vulputate eleifend tellus ligula, porttitor.</p>
                              <span class="small">05:00 PM Sun, 02 Feb 2019</span>
                           </div>
                        </div>
                        <div class="media pd-b-30">
                           <div class="activity-icon bg-purple op-6">
                              <i class="icon ion-image"></i>
                           </div>
                           <div class="ml-3 align-items-center">
                              <h6 class="tx-13 tx-dark">Added new images</h6>
                              <p class="tx-12 mb-0">Aenean vulputate eleifend tellus ligula, porttitor.</p>
                              <span class="small">05:00 PM Sun, 02 Feb 2019</span>
                           </div>
                        </div>
                        <div class="media pd-b-30">
                           <div class="activity-icon bg-danger op-6">
                              <i class="icon ion-stats-bars"></i>
                           </div>
                           <div class="ml-3 align-items-center">
                              <h6 class="tx-13 tx-dark">Report has been updated</h6>
                              <p class="tx-12 mb-0">Aenean vulputate eleifend tellus ligula, porttitor.</p>
                              <span class="small">05:00 PM Sun, 02 Feb 2019</span>
                           </div>
                        </div>
                        <div class="media pd-b-30">
                           <div class="activity-icon bg-warning op-6">
                              <i class="icon ion-trophy"></i>
                           </div>
                           <div class="ml-3 align-items-center">
                              <h6 class="tx-13 tx-dark">Achievement Unlocked</h6>
                              <p class="tx-12 mb-0">Aenean vulputate eleifend tellus ligula, porttitor.</p>
                              <span class="small">05:00 PM Sun, 02 Feb 2019</span>
                           </div>
                        </div>
                        <div class="media pd-b-30">
                           <div class="activity-icon bg-purple op-6">
                              <i class="icon ion-image"></i>
                           </div>
                           <div class="ml-3 align-items-center">
                              <h6 class="tx-13 tx-dark">Added new images</h6>
                              <p class="tx-12 mb-0">Aenean vulputate eleifend tellus ligula, porttitor.</p>
                              <span class="small">05:00 PM Sun, 02 Feb 2019</span>
                           </div>
                        </div>
                        <div class="media pd-b-30">
                           <div class="activity-icon bg-danger op-6">
                              <i class="icon ion-stats-bars"></i>
                           </div>
                           <div class="ml-3 align-items-center">
                              <h6 class="tx-13 tx-dark">Report has been updated</h6>
                              <p class="tx-12 mb-0">Aenean vulputate eleifend tellus ligula, porttitor.</p>
                              <span class="small">05:00 PM Sun, 02 Feb 2019</span>
                           </div>
                        </div>
                        <div class="media pd-b-30">
                           <div class="activity-icon bg-warning op-6">
                              <i class="icon ion-trophy"></i>
                           </div>
                           <div class="ml-3 align-items-center">
                              <h6 class="tx-13 tx-dark">Achievement Unlocked</h6>
                              <p class="tx-12 mb-0">Aenean vulputate eleifend tellus ligula, porttitor.</p>
                              <span class="small">05:00 PM Sun, 02 Feb 2019</span>
                           </div>
                        </div>
                        <div class="media pd-b-30">
                           <div class="activity-icon bg-teal op-6">
                              <i class="icon ion-image"></i>
                           </div>
                           <div class="ml-3 align-items-center">
                              <h6 class="tx-13 tx-dark">Added new images</h6>
                              <p class="tx-12 mb-0">Aenean vulputate eleifend tellus ligula, porttitor.</p>
                              <span class="small">05:00 PM Sun, 02 Feb 2019</span>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
               <!-- Activity -->
               <div class="tab-pane fade active show" id="nav-activity">
                  <div class="activity mg-t-40-force">
                     <i class="icon-check bg-soft-primary"></i>
                     <div class="time-item">
                        <div class="item-info ">
                           <div class="d-flex justify-content-between align-items-center">
                              <h6 class="tx-dark tx-13 mb-0">Task finished</h6>
                              <span class="small">02 Feb 2019</span>
                           </div>
                           <p class="mt-2 tx-12 mg-b-5">There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration.</p>
                           <div><span class="badge bg-soft-primary tx-uppercase">Design</span> <span class="badge bg-soft-danger  tx-uppercase">HTML</span> <span class="badge bg-soft-success  tx-uppercase">Css</span> <span class="badge bg-soft-teal  tx-uppercase">Dashboard</span></div>
                        </div>
                     </div>
                     <i class="icon-check bg-soft-teal"></i>
                     <div class="time-item">
                        <div class="item-info ">
                           <div class="d-flex justify-content-between align-items-center">
                              <h6 class="tx-dark tx-13 mb-0">Video conference</h6>
                              <span class="small">04 Feb 2019</span>
                           </div>
                           <p class="mt-2 tx-12 mg-b-5">There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration.</p>
                           <div><span class="badge bg-soft-primary tx-uppercase">Design</span> <span class="badge bg-soft-danger  tx-uppercase">HTML</span> <span class="badge bg-soft-success  tx-uppercase">Css</span> <span class="badge bg-soft-teal  tx-uppercase">Dashboard</span></div>
                        </div>
                     </div>
                     <i class="icon-check bg-soft-warning"></i>
                     <div class="time-item">
                        <div class="item-info ">
                           <div class="d-flex justify-content-between align-items-center">
                              <h6 class="tx-dark tx-13 mb-0">Task Overdue</h6>
                              <span class="small">06 Feb 2019</span>
                           </div>
                           <p class="mt-2 tx-12 mg-b-5">There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration.</p>
                           <div><span class="badge bg-soft-primary tx-uppercase">Design</span> <span class="badge bg-soft-danger  tx-uppercase">HTML</span> <span class="badge bg-soft-success  tx-uppercase">Css</span> <span class="badge bg-soft-teal  tx-uppercase">Dashboard</span></div>
                        </div>
                     </div>
                     <i class="icon-check bg-soft-danger"></i>
                     <div class="time-item">
                        <div class="item-info ">
                           <div class="d-flex justify-content-between align-items-center">
                              <h6 class="tx-dark tx-13 mb-0">Added your friend list</h6>
                              <span class="small">07 Feb 2019</span>
                           </div>
                           <p class="mt-2 tx-12 mg-b-5">There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration.</p>
                           <div><span class="badge bg-soft-primary tx-uppercase">Design</span> <span class="badge bg-soft-danger  tx-uppercase">HTML</span> <span class="badge bg-soft-success  tx-uppercase">Css</span> <span class="badge bg-soft-teal  tx-uppercase">Dashboard</span></div>
                        </div>
                     </div>
                     <i class="icon-check bg-soft-success"></i>
                     <div class="time-item">
                        <div class="item-info ">
                           <div class="d-flex justify-content-between align-items-center">
                              <h6 class="tx-dark tx-13 mb-0">Task Overdue</h6>
                              <span class="small">09 Feb 2019</span>
                           </div>
                           <p class="mt-2 tx-12 mg-b-5">There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration.</p>
                           <div><span class="badge bg-soft-primary tx-uppercase">Design</span> <span class="badge bg-soft-danger  tx-uppercase">HTML</span> <span class="badge bg-soft-success  tx-uppercase">Css</span> <span class="badge bg-soft-teal  tx-uppercase">Dashboard</span></div>
                        </div>
                     </div>
                     <i class="icon-check bg-soft-primary"></i>
                     <div class="time-item">
                        <div class="item-info ">
                           <div class="d-flex justify-content-between align-items-center">
                              <h6 class="tx-dark tx-13 mb-0">Submit a blog</h6>
                              <span class="small">11 Feb 2019</span>
                           </div>
                           <p class="mt-2 tx-12 mg-b-5">There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration.</p>
                           <div><span class="badge bg-soft-primary tx-uppercase">Design</span> <span class="badge bg-soft-danger  tx-uppercase">HTML</span> <span class="badge bg-soft-success  tx-uppercase">Css</span> <span class="badge bg-soft-teal  tx-uppercase">Dashboard</span></div>
                        </div>
                     </div>
                     <i class="icon-check bg-soft-teal"></i>
                     <div class="time-item">
                        <div class="item-info ">
                           <div class="d-flex justify-content-between align-items-center">
                              <h6 class="tx-dark tx-13 mb-0">New Request</h6>
                              <span class="small">12 Feb 2019</span>
                           </div>
                           <p class="mt-2 tx-12 mg-b-5">There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration.</p>
                           <div><span class="badge bg-soft-primary tx-uppercase">Design</span> <span class="badge bg-soft-danger  tx-uppercase">HTML</span> <span class="badge bg-soft-success  tx-uppercase">Css</span> <span class="badge bg-soft-teal  tx-uppercase">Dashboard</span></div>
                        </div>
                     </div>
                     <i class="icon-check bg-soft-warning"></i>
                     <div class="time-item">
                        <div class="item-info ">
                           <div class="d-flex justify-content-between align-items-center">
                              <h6 class="tx-dark tx-13 mb-0">Task Overdue</h6>
                              <span class="small">19 Feb 2019</span>
                           </div>
                           <p class="mt-2 tx-12 mg-b-5">There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration.</p>
                           <div><span class="badge bg-soft-primary tx-uppercase">Design</span> <span class="badge bg-soft-danger  tx-uppercase">HTML</span> <span class="badge bg-soft-success  tx-uppercase">Css</span> <span class="badge bg-soft-teal  tx-uppercase">Dashboard</span></div>
                        </div>
                     </div>
                  </div>
               </div>
               <!-- Setting -->
               <div class="tab-pane fade" id="nav-setting">
                  <h5 class="tx-dark tx-13 tx-semibold mg-t-30">Notification Setting</h5>
                  <ul class="list-unstyled">
                     <li class="d-flex justify-content-between mg-y-20">
                        <span>Notify when receive email</span>
                        <input type="checkbox" checked data-toggle="toggle" data-size="xs"  data-onstyle="primary">
                     </li>
                     <li class="d-flex justify-content-between mg-y-20">
                        <span>Receive calls in meeting</span>
                        <input type="checkbox" data-toggle="toggle" data-size="xs"  data-onstyle="primary" >
                     </li>
                     <li class="d-flex justify-content-between mg-y-20">
                        <span>Update on task completion</span>
                        <input type="checkbox" checked data-toggle="toggle" data-size="xs"  data-onstyle="primary" >
                     </li>
                     <li class="d-flex justify-content-between mg-y-20">
                        <span>New user registration</span>
                        <input type="checkbox" data-toggle="toggle" data-size="xs"  data-onstyle="primary" >
                     </li>
                     <li class="d-flex justify-content-between mg-y-20">
                        <span>Files uploaded successfully</span>
                        <input type="checkbox" data-toggle="toggle" data-size="xs"  data-onstyle="primary" >
                     </li>
                  </ul>
                  <h5 class="tx-dark tx-13 tx-semibold mg-t-50">File Sharing Setting</h5>
                  <ul class="list-unstyled">
                     <li class="d-flex justify-content-between mg-y-20">
                        <span>Notify when receive email</span>
                        <input type="checkbox" checked data-toggle="toggle" data-size="xs"  data-onstyle="primary" >
                     </li>
                     <li class="d-flex justify-content-between mg-y-20">
                        <span>Receive calls in meeting</span>
                        <input type="checkbox" data-toggle="toggle" data-size="xs"  data-onstyle="primary" >
                     </li>
                     <li class="d-flex justify-content-between mg-y-20">
                        <span>Update on task completion</span>
                        <input type="checkbox" data-toggle="toggle" data-size="xs"  data-onstyle="primary" >
                     </li>
                     <li class="d-flex justify-content-between mg-y-20">
                        <span>New user registration</span>
                        <input type="checkbox" checked data-toggle="toggle" data-size="xs"  data-onstyle="primary" >
                     </li>
                     <li class="d-flex justify-content-between mg-y-20">
                        <span>Files uploaded successfully</span>
                        <input type="checkbox" data-toggle="toggle" data-size="xs"  data-onstyle="primary" >
                     </li>
                  </ul>
                  <h5 class="tx-dark tx-13 tx-semibold mg-t-50">Reports Setting</h5>
                  <ul class="list-unstyled">
                     <li class="d-flex justify-content-between mg-y-20">
                        <span>Generate Reports</span>
                        <input type="checkbox" data-toggle="toggle" data-size="xs"  data-onstyle="primary" >
                     </li>
                     <li class="d-flex justify-content-between mg-y-20">
                        <span>Receive calls in meeting</span>
                        <input type="checkbox" data-toggle="toggle" data-size="xs"  data-onstyle="primary" >
                     </li>
                     <li class="d-flex justify-content-between mg-y-20">
                        <span>Enable Report Export</span>
                        <input type="checkbox" checked data-toggle="toggle" data-size="xs"  data-onstyle="primary" >
                     </li>
                     <li class="d-flex justify-content-between mg-y-20">
                        <span>New user registration</span>
                        <input type="checkbox" data-toggle="toggle" data-size="xs"  data-onstyle="primary" >
                     </li>
                     <li class="d-flex justify-content-between mg-y-20">
                        <span>Allow Data Collection</span>
                        <input type="checkbox" checked data-toggle="toggle" data-size="xs"  data-onstyle="primary" >
                     </li>
                  </ul>
                  <h5 class="tx-dark tx-13 tx-semibold mg-t-50">System Setting</h5>
                  <ul class="list-unstyled">
                     <li class="d-flex justify-content-between mg-y-20">
                        <span>Automatic updates</span>
                        <input type="checkbox" checked data-toggle="toggle" data-size="xs"  data-onstyle="primary" >
                     </li>
                     <li class="d-flex justify-content-between mg-y-20">
                        <span>Receive calls in meeting</span>
                        <input type="checkbox" data-toggle="toggle" data-size="xs"  data-onstyle="primary" >
                     </li>
                     <li class="d-flex justify-content-between mg-y-20">
                        <span>Current statistics</span>
                        <input type="checkbox" data-toggle="toggle" data-size="xs"  data-onstyle="primary" >
                     </li>
                     <li class="d-flex justify-content-between mg-y-20">
                        <span>New user registration</span>
                        <input type="checkbox" checked data-toggle="toggle" data-size="xs"  data-onstyle="primary" >
                     </li>
                     <li class="d-flex justify-content-between mg-y-20">
                        <span>User suggestions</span>
                        <input type="checkbox" data-toggle="toggle" data-size="xs"  data-onstyle="primary" >
                     </li>
                  </ul>
               </div>
            </div>
         </div>
      </div>
      <!--/ Setting Sidebar End  -->      
      <!--================================-->
      <!-- Demo Sidebar Start -->
      <!--================================-->	  
      <div class="setting-sidebar" id="demoSettingSidebar">
         <div class="wrapper" id="demoSettingSidebarScroll">
            <a class="demo-settings-icon" id="demoSettingSidebarTrigger" href="" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <i class="icon-settings tx-16"></i>
            </a>	
            <ul class="nav nav-tabs nav-pills nav-fill">
               <li class="nav-item">
                  <a class="nav-link active show" data-toggle="tab" href="#nav-dashboard">Dashboard</a>
               </li>
               <li class="nav-item">
                  <a class="nav-link" data-toggle="tab" href="#nav-frontend">Frontend</a>
               </li>
            </ul>
            <!-- Backend Dashboard -->
            <div class="tab-content">
               <div class="tab-pane fade active show" id="nav-dashboard">
                  <div class="mg-y-30 tx-center bd">
                     <h5 class="tx-dark tx-13 pd-y-10 bd-b mb-0">Default Version</h5>
                     <img src="assets/images/demo/dashboard/index1.png" alt="" class="img-fluid d-block m-auto">
                     <span class="d-block pd-10 bd-t">						
                     <a href="http://colorlib.net/metrical/light/index.html" target="_blank" class="btn btn-sm btn-primary">Live Preview</a>
                     </span>
                  </div>
                  <div class="mg-y-30 tx-center bd">
                     <h5 class="tx-dark tx-13 pd-y-10 bd-b mb-0">Semi-Dark Version</h5>
                     <img src="assets/images/demo/dashboard/dark-index1.png" alt="" class="img-fluid d-block m-auto">
                     <span class="d-block pd-10 bd-t">						
                     <a href="http://colorlib.net/metrical/semi-dark/index.html" target="_blank" class="btn btn-sm btn-primary">Live Preview</a>
                     </span>
                  </div>
                  <div class="mg-y-30 tx-center bd">
                     <h5 class="tx-dark tx-13 pd-y-10 bd-b mb-0">Dark Version</h5>
                     <img src="assets/images/demo/dashboard/full-dark-index1.png" alt="" class="img-fluid d-block m-auto">
                     <span class="d-block pd-10 bd-t">						
                     <a href="http://colorlib.net/metrical/dark/index.html" target="_blank" class="btn btn-sm btn-primary">Live Preview</a>
                     </span>
                  </div>
                  <div class="mg-y-30 tx-center bd">
                     <h5 class="tx-dark tx-13 pd-y-10 bd-b mb-0">Boxed Version</h5>
                     <img src="assets/images/demo/dashboard/boxed-index1.png" alt="" class="img-fluid d-block m-auto">
                     <span class="d-block pd-10 bd-t">						
                     <a href="http://colorlib.net/metrical/boxed/index.html" target="_blank" class="btn btn-sm btn-primary">Live Preview</a>
                     </span>
                  </div>
                  <div class="mg-y-30">						
                     <a href="http://themeforest.net/item/metrical-multipurpose-bootstrap4-admin-dashboard-template/24250418" target="_blank" class="btn btn-lg btn-primary btn-block">Download Now</a>
                  </div>
               </div>
               <!-- Frontend Templates -->
               <div class="tab-pane fade" id="nav-frontend">
                  <div class="mg-y-30 tx-center bd">
                     <h5 class="tx-dark tx-13 pd-y-10 bd-b mb-0">Ecommerce</h5>
                     <img src="assets/images/demo/frontend/coming-soon.png" alt="" class="img-fluid d-block m-auto">
                     <span class="d-block pd-10 bd-t">						
                     <a href="http://colorlib.net/metrical/templates/ecommerce/index.html" target="_blank" class="btn btn-sm btn-primary">Live Preview</a>
                     </span>
                  </div>
                  <div class="mg-y-30 tx-center bd">
                     <h5 class="tx-dark tx-13 pd-y-10 bd-b mb-0">Cryptocurrency</h5>
                     <img src="assets/images/demo/frontend/coming-soon.png" alt="" class="img-fluid d-block m-auto">
                     <span class="d-block pd-10 bd-t">						
                     <a href="http://colorlib.net/metrical/templates/cryptocurrency/index.html" target="_blank" class="btn btn-sm btn-primary">Live Preview</a>
                     </span>
                  </div>
                  <div class="mg-y-30 tx-center bd">
                     <h5 class="tx-dark tx-13 pd-y-10 bd-b mb-0">Helpdesk Center</h5>
                     <img src="assets/images/demo/frontend/coming-soon.png" alt="" class="img-fluid d-block m-auto">
                     <span class="d-block pd-10 bd-t">						
                     <a href="http://colorlib.net/metrical/templates/helpdesk/index.html" target="_blank" class="btn btn-sm btn-primary">Live Preview</a>
                     </span>
                  </div>
                  <div class="mg-y-30 tx-center bd">
                     <h5 class="tx-dark tx-13 pd-y-10 bd-b mb-0">Project Management</h5>
                     <img src="assets/images/demo/frontend/coming-soon.png" alt="" class="img-fluid d-block m-auto">
                     <span class="d-block pd-10 bd-t">						
                     <a href="http://colorlib.net/metrical/templates/project/index.html" target="_blank" class="btn btn-sm btn-primary">Live Preview</a>
                     </span>
                  </div>
                  <div class="mg-y-30 tx-center bd">
                     <h5 class="tx-dark tx-13 pd-y-10 bd-b mb-0">Server Management</h5>
                     <img src="assets/images/demo/frontend/coming-soon.png" alt="" class="img-fluid d-block m-auto">
                     <span class="d-block pd-10 bd-t">						
                     <a href="http://colorlib.net/metrical/templates/server/index.html" target="_blank" class="btn btn-sm btn-primary">Live Preview</a>
                     </span>
                  </div>
                  <div class="mg-y-30 tx-center bd">
                     <h5 class="tx-dark tx-13 pd-y-10 bd-b mb-0">Education</h5>
                     <img src="assets/images/demo/frontend/coming-soon.png" alt="" class="img-fluid d-block m-auto">
                     <span class="d-block pd-10 bd-t">						
                     <a href="http://colorlib.net/metrical/templates/education/index.html" target="_blank" class="btn btn-sm btn-primary">Live Preview</a>
                     </span>
                  </div>
                  <div class="mg-y-30 tx-center bd">
                     <h5 class="tx-dark tx-13 pd-y-10 bd-b mb-0">Event Management</h5>
                     <img src="assets/images/demo/frontend/coming-soon.png" alt="" class="img-fluid d-block m-auto">
                     <span class="d-block pd-10 bd-t">						
                     <a href="http://colorlib.net/metrical/templates/event/index.html" target="_blank" class="btn btn-sm btn-primary">Live Preview</a>
                     </span>
                  </div>
                  <div class="mg-y-30 tx-center bd">
                     <h5 class="tx-dark tx-13 pd-y-10 bd-b mb-0">Social Activity</h5>
                     <img src="assets/images/demo/frontend/coming-soon.png" alt="" class="img-fluid d-block m-auto">
                     <span class="d-block pd-10 bd-t">						
                     <a href="http://colorlib.net/metrical/templates/social/index.html" target="_blank" class="btn btn-sm btn-primary">Live Preview</a>
                     </span>
                  </div>
                  <div class="mg-y-30">						
                     <a href="http://themeforest.net/item/metrical-multipurpose-bootstrap4-admin-dashboard-template/24250418" target="_blank" class="btn btn-lg btn-primary btn-block">Download Now</a>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <!--/ Demo Sidebar End  -->
      <!--================================-->
      <!-- Footer Script -->
      <!--================================-->
      <script type="text/javascript" src="{{ URL::asset('assets/plugins/jquery/jquery.min.js') }}"></script>
      <script type="text/javascript" src="{{ URL::asset('assets/plugins/jquery-ui/jquery-ui.js') }}"></script>
      <script type="text/javascript" src="{{ URL::asset('assets/plugins/popper/popper.js') }}"></script>
      <script type="text/javascript" src="{{ URL::asset('assets/plugins/feather-icon/feather.min.js') }}"></script>
      <script type="text/javascript" src="{{ URL::asset('assets/plugins/bootstrap/js/bootstrap.min.js') }}"></script>
      <script type="text/javascript" src="{{ URL::asset('assets/plugins/pace/pace.min.js') }}"></script>
      <script type="text/javascript" src="{{ URL::asset('assets/plugins/toastr/toastr.min.js') }}"></script>
      <script type="text/javascript" src="{{ URL::asset('assets/plugins/countup/counterup.min.js') }}"></script>
      <script type="text/javascript" src="{{ URL::asset('assets/plugins/waypoints/waypoints.min.js') }}"></script>
      <script type="text/javascript" src="{{ URL::asset('assets/plugins/chartjs/chartjs.js') }}"></script>
      <script type="text/javascript" src="{{ URL::asset('assets/plugins/apex-chart/apexcharts.min.js') }}"></script>
      <script type="text/javascript" src="{{ URL::asset('assets/plugins/apex-chart/irregular-data-series.js') }}"></script>
      <script type="text/javascript" src="{{ URL::asset('assets/plugins/simpler-sidebar/jquery.simpler-sidebar.min.js') }}"></script>
      <script type="text/javascript" src="{{ URL::asset('assets/js/dashboard/sales-dashboard-init.js') }}"></script>
      <script type="text/javascript" src="{{ URL::asset('assets/js/jquery.slimscroll.min.js') }}"></script>
      <script type="text/javascript" src="{{ URL::asset('assets/js/highlight.min.js') }}"></script>
      <script type="text/javascript" src="{{ URL::asset('assets/js/app.js') }}"></script>
      <script type="text/javascript" src="{{ URL::asset('assets/js/custom.js') }}"></script>
   </body>
</html>
