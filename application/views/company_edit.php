<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="Mosaddek">
    <meta name="keyword" content="FlatLab, Dashboard, Bootstrap, Admin, Template, Theme, Responsive, Fluid, Retina">
    <link rel="shortcut icon" href="img/favicon.png">

    <title>Form Component</title>

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/bootstrap-reset.css" rel="stylesheet">
    <!--external css-->
    <link href="assets/font-awesome/css/font-awesome.css" rel="stylesheet" />

    <!-- Custom styles for this template -->
    <link href="<?php echo base_url(); ?>assets/css/style.css" rel="stylesheet">
    <link href="<?php echo base_url(); ?>assets/css/style-responsive.css" rel="stylesheet" />

       <link href="<?php echo base_url(); ?>assets/css/bootstrap.min.css" rel="stylesheet">
    <link href="<?php echo base_url(); ?>assets/css/bootstrap-reset.css" rel="stylesheet">
    <!--external css-->
    <link href="<?php echo base_url(); ?>assets/assets/font-awesome/css/font-awesome.css" rel="stylesheet" />
    <link href="<?php echo base_url(); ?>assets/assets/jquery-easy-pie-chart/jquery.easy-pie-chart.css" rel="stylesheet" type="text/css" media="screen"/>
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/owl.carousel.css" type="text/css">
    <!-- Custom styles for this template -->
    <link href="<?php echo base_url(); ?>assets/css/style.css" rel="stylesheet">
    <link href="<?php echo base_url(); ?>assets/css/style-responsive.css" rel="stylesheet" />


    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/bootstrap-datepicker/css/datepicker.css" />
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/bootstrap-colorpicker/css/colorpicker.css" />
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/bootstrap-daterangepicker/daterangepicker.css" />
    <style type="text/css">
.country_dropdown {
    /* display: none; */
    z-index: 999999999999;
    position: absolute;
    background-color: #fff;
    height: auto;
    max-width: 400px;
    width: 100%;
    /*padding: 10px 30px;*/
}

.country_dropdown li:hover {
    background-color: #7e7c7c;
    color: #fff;
    padding: 5px 5px;
}
    </style>





    <!-- HTML5 shim and Respond.js IE8 support of HTML5 tooltipss and media queries -->
    <!--[if lt IE 9]>
      <script href="<?php echo base_url(); ?>/html5shiv.js"></script>
      <script href="<?php echo base_url(); ?>/respond.min.js"></script>
    <![endif]-->


  </head>

  <body>

  <section id="container" class="">
      <!--header start-->
      <header class="header white-bg">
          <div class="sidebar-toggle-box">
              <div data-original-title="Toggle Navigation" data-placement="right" class="icon-reorder tooltips"></div>
          </div>
          <!--logo start-->
          <a href="index.html" class="logo" >Flat<span>lab</span></a>
          <!--logo end-->
          <div class="nav notify-row" id="top_menu">
            <!--  notification start -->
            <ul class="nav top-menu">
              <!-- settings start -->
              <li class="dropdown">
                  <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                      <i class="icon-tasks"></i>
                      <span class="badge bg-success">6</span>
                  </a>
                  <ul class="dropdown-menu extended tasks-bar">
                      <div class="notify-arrow notify-arrow-green"></div>
                      <li>
                          <p class="green">You have 6 pending tasks</p>
                      </li>
                      <li>
                          <a href="#">
                              <div class="task-info">
                                  <div class="desc">Dashboard v1.3</div>
                                  <div class="percent">40%</div>
                              </div>
                              <div class="progress progress-striped">
                                  <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width: 40%">
                                      <span class="sr-only">40% Complete (success)</span>
                                  </div>
                              </div>
                          </a>
                      </li>
                      <li>
                          <a href="#">
                              <div class="task-info">
                                  <div class="desc">Database Update</div>
                                  <div class="percent">60%</div>
                              </div>
                              <div class="progress progress-striped">
                                  <div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 60%">
                                      <span class="sr-only">60% Complete (warning)</span>
                                  </div>
                              </div>
                          </a>
                      </li>
                      <li>
                          <a href="#">
                              <div class="task-info">
                                  <div class="desc">Iphone Development</div>
                                  <div class="percent">87%</div>
                              </div>
                              <div class="progress progress-striped">
                                  <div class="progress-bar progress-bar-info" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100" style="width: 87%">
                                      <span class="sr-only">87% Complete</span>
                                  </div>
                              </div>
                          </a>
                      </li>
                      <li>
                          <a href="#">
                              <div class="task-info">
                                  <div class="desc">Mobile App</div>
                                  <div class="percent">33%</div>
                              </div>
                              <div class="progress progress-striped">
                                  <div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width: 33%">
                                      <span class="sr-only">33% Complete (danger)</span>
                                  </div>
                              </div>
                          </a>
                      </li>
                      <li>
                          <a href="#">
                              <div class="task-info">
                                  <div class="desc">Dashboard v1.3</div>
                                  <div class="percent">45%</div>
                              </div>
                              <div class="progress progress-striped active">
                                  <div class="progress-bar"  role="progressbar" aria-valuenow="45" aria-valuemin="0" aria-valuemax="100" style="width: 45%">
                                      <span class="sr-only">45% Complete</span>
                                  </div>
                              </div>

                          </a>
                      </li>
                      <li class="external">
                          <a href="#">See All Tasks</a>
                      </li>
                  </ul>
              </li>
              <!-- settings end -->
              <!-- inbox dropdown start-->
              <li id="header_inbox_bar" class="dropdown">
                  <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                      <i class="icon-envelope-alt"></i>
                      <span class="badge bg-important">5</span>
                  </a>
                  <ul class="dropdown-menu extended inbox">
                      <div class="notify-arrow notify-arrow-red"></div>
                      <li>
                          <p class="red">You have 5 new messages</p>
                      </li>
                      <li>
                          <a href="#">
                              <span class="photo"><img alt="avatar" href="<?php echo base_url(); ?>./img/avatar-mini.jpg"></span>
                                    <span class="subject">
                                    <span class="from">Jonathan Smith</span>
                                    <span class="time">Just now</span>
                                    </span>
                                    <span class="message">
                                        Hello, this is an example msg.
                                    </span>
                          </a>
                      </li>
                      <li>
                          <a href="#">
                              <span class="photo"><img alt="avatar" href="<?php echo base_url(); ?>./img/avatar-mini2.jpg"></span>
                                    <span class="subject">
                                    <span class="from">Jhon Doe</span>
                                    <span class="time">10 mins</span>
                                    </span>
                                    <span class="message">
                                     Hi, Jhon Doe Bhai how are you ?
                                    </span>
                          </a>
                      </li>
                      <li>
                          <a href="#">
                              <span class="photo"><img alt="avatar" href="<?php echo base_url(); ?>./img/avatar-mini3.jpg"></span>
                                    <span class="subject">
                                    <span class="from">Jason Stathum</span>
                                    <span class="time">3 hrs</span>
                                    </span>
                                    <span class="message">
                                        This is awesome dashboard.
                                    </span>
                          </a>
                      </li>
                      <li>
                          <a href="#">
                              <span class="photo"><img alt="avatar" href="<?php echo base_url(); ?>./img/avatar-mini4.jpg"></span>
                                    <span class="subject">
                                    <span class="from">Jondi Rose</span>
                                    <span class="time">Just now</span>
                                    </span>
                                    <span class="message">
                                        Hello, this is metrolab
                                    </span>
                          </a>
                      </li>
                      <li>
                          <a href="#">See all messages</a>
                      </li>
                  </ul>
              </li>
              <!-- inbox dropdown end -->
              <!-- notification dropdown start-->
              <li id="header_notification_bar" class="dropdown">
                  <a data-toggle="dropdown" class="dropdown-toggle" href="#">

                      <i class="icon-bell-alt"></i>
                      <span class="badge bg-warning">7</span>
                  </a>
                  <ul class="dropdown-menu extended notification">
                      <div class="notify-arrow notify-arrow-yellow"></div>
                      <li>
                          <p class="yellow">You have 7 new notifications</p>
                      </li>
                      <li>
                          <a href="#">
                              <span class="label label-danger"><i class="icon-bolt"></i></span>
                              Server #3 overloaded.
                              <span class="small italic">34 mins</span>
                          </a>
                      </li>
                      <li>
                          <a href="#">
                              <span class="label label-warning"><i class="icon-bell"></i></span>
                              Server #10 not respoding.
                              <span class="small italic">1 Hours</span>
                          </a>
                      </li>
                      <li>
                          <a href="#">
                              <span class="label label-danger"><i class="icon-bolt"></i></span>
                              Database overloaded 24%.
                              <span class="small italic">4 hrs</span>
                          </a>
                      </li>
                      <li>
                          <a href="#">
                              <span class="label label-success"><i class="icon-plus"></i></span>
                              New user registered.
                              <span class="small italic">Just now</span>
                          </a>
                      </li>
                      <li>
                          <a href="#">
                              <span class="label label-info"><i class="icon-bullhorn"></i></span>
                              Application error.
                              <span class="small italic">10 mins</span>
                          </a>
                      </li>
                      <li>
                          <a href="#">See all notifications</a>
                      </li>
                  </ul>
              </li>
              <!-- notification dropdown end -->
          </ul>
          </div>
          <div class="top-nav ">
              <ul class="nav pull-right top-menu">
                  <li>
                      <input type="text" class="form-control search" placeholder="Search">
                  </li>
                  <!-- user login dropdown start-->
                  <li class="dropdown">
                      <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                          <img alt="" href="<?php echo base_url(); ?>img/avatar1_small.jpg">
                          <span class="username">Jhon Doue</span>
                          <b class="caret"></b>
                      </a>
                      <ul class="dropdown-menu extended logout">
                          <div class="log-arrow-up"></div>
                          <li><a href="#"><i class=" icon-suitcase"></i>Profile</a></li>
                          <li><a href="#"><i class="icon-cog"></i> Settings</a></li>
                          <li><a href="#"><i class="icon-bell-alt"></i> Notification</a></li>
                          <li><a href="login.html"><i class="icon-key"></i> Log Out</a></li>
                      </ul>
                  </li>
                  <!-- user login dropdown end -->
              </ul>
          </div>
      </header>
      <!--header end-->
      <!--sidebar start-->
      <aside>
          <div id="sidebar"  class="nav-collapse ">
              <!-- sidebar menu start-->
              <ul class="sidebar-menu" id="nav-accordion">
                  <li>
                      <a href="index.html">
                          <i class="icon-dashboard"></i>
                          <span>Dashboard</span>
                      </a>
                  </li>

                  <li class="sub-menu">
                      <a href="javascript:;">
                          <i class="icon-laptop"></i>
                          <span>Layouts</span>
                      </a>
                      <ul class="sub">
                          <li><a  href="boxed_page.html">Boxed Page</a></li>
                          <li><a  href="horizontal_menu.html">Horizontal Menu</a></li>
                          <li><a  href="language_switch_bar.html">Language Switch Bar</a></li>
                      </ul>
                  </li>

                  <li class="sub-menu">
                      <a href="javascript:;">
                          <i class="icon-book"></i>
                          <span>UI Elements</span>
                      </a>
                      <ul class="sub">
                          <li><a  href="general.html">General</a></li>
                          <li><a  href="buttons.html">Buttons</a></li>
                          <li><a  href="widget.html">Widget</a></li>
                          <li><a  href="slider.html">Slider</a></li>
                          <li><a  href="nestable.html">Nestable</a></li>
                          <li><a  href="font_awesome.html">Font Awesome</a></li>
                      </ul>
                  </li>

                  <li class="sub-menu">
                      <a href="javascript:;">
                          <i class="icon-cogs"></i>
                          <span>Components</span>
                      </a>
                      <ul class="sub">
                          <li><a  href="grids.html">Grids</a></li>
                          <li><a  href="calendar.html">Calendar</a></li>
                          <li><a  href="gallery.html">Gallery</a></li>
                          <li><a  href="todo_list.html">Todo List</a></li>
                      </ul>
                  </li>
                  <li class="sub-menu">
                      <a href="javascript:;" class="active" >
                          <i class="icon-tasks"></i>
                          <span>Form Stuff</span>
                      </a>
                      <ul class="sub">
                          <li class="active"><a  href="form_component.html">Form Components</a></li>
                          <li><a  href="advanced_form_components.html">Advanced Components</a></li>
                          <li><a  href="form_wizard.html">Form Wizard</a></li>
                          <li><a  href="form_validation.html">Form Validation</a></li>
                          <li><a  href="dropzone.html">Dropzone File Upload</a></li>
                          <li><a  href="inline_editor.html">Inline Editor</a></li>
                          <li><a  href="image_cropping.html">Image Cropping</a></li>
                      </ul>
                  </li>
                  <li class="sub-menu">
                      <a href="javascript:;" >
                          <i class="icon-th"></i>
                          <span>Data Tables</span>
                      </a>
                      <ul class="sub">
                          <li><a  href="basic_table.html">Basic Table</a></li>
                          <li><a  href="responsive_table.html">Responsive Table</a></li>
                          <li><a  href="dynamic_table.html">Dynamic Table</a></li>
                          <li><a  href="advanced_table.html">Advanced Table</a></li>
                          <li><a  href="editable_table.html">Editable Table</a></li>
                      </ul>
                  </li>
                  <li>
                      <a  href="inbox.html">
                          <i class="icon-envelope"></i>
                          <span>Mail </span>
                          <span class="label label-danger pull-right mail-info">2</span>
                      </a>
                  </li>
                  <li class="sub-menu">
                      <a href="javascript:;" >
                          <i class=" icon-bar-chart"></i>
                          <span>Charts</span>
                      </a>
                      <ul class="sub">
                          <li><a  href="morris.html">Morris</a></li>
                          <li><a  href="chartjs.html">Chartjs</a></li>
                          <li><a  href="flot_chart.html">Flot Charts</a></li>
                          <li><a  href="xchart.html">xChart</a></li>
                      </ul>
                  </li>
                  <li class="sub-menu">
                      <a href="javascript:;" >
                          <i class="icon-shopping-cart"></i>
                          <span>Shop</span>
                      </a>
                      <ul class="sub">
                          <li><a  href="product_list.html">List View</a></li>
                          <li><a  href="product_details.html">Details View</a></li>
                      </ul>
                  </li>
                  <li>
                      <a href="google_maps.html" >
                          <i class="icon-map-marker"></i>
                          <span>Google Maps </span>
                      </a>
                  </li>
                  <li class="sub-menu">
                      <a href="javascript:;" >
                          <i class="icon-glass"></i>
                          <span>Extra</span>
                      </a>
                      <ul class="sub">
                          <li><a  href="blank.html">Blank Page</a></li>
                          <li><a  href="lock_screen.html">Lock Screen</a></li>
                          <li><a  href="profile.html">Profile</a></li>
                          <li><a  href="invoice.html">Invoice</a></li>
                          <li><a  href="search_result.html">Search Result</a></li>
                          <li><a  href="404.html">404 Error</a></li>
                          <li><a  href="500.html">500 Error</a></li>
                      </ul>
                  </li>
                  <li>
                      <a  href="login.html">
                          <i class="icon-user"></i>
                          <span>Login Page</span>
                      </a>
                  </li>

                  <!--multi level menu start-->
                  <li class="sub-menu">
                      <a href="javascript:;" >
                          <i class="icon-sitemap"></i>
                          <span>Multi level Menu</span>
                      </a>
                      <ul class="sub">
                          <li><a  href="javascript:;">Menu Item 1</a></li>
                          <li class="sub-menu">
                              <a  href="boxed_page.html">Menu Item 2</a>
                              <ul class="sub">
                                  <li><a  href="javascript:;">Menu Item 2.1</a></li>
                                  <li class="sub-menu">
                                      <a  href="javascript:;">Menu Item 3</a>
                                      <ul class="sub">
                                          <li><a  href="javascript:;">Menu Item 3.1</a></li>
                                          <li><a  href="javascript:;">Menu Item 3.2</a></li>
                                      </ul>
                                  </li>
                              </ul>
                          </li>
                      </ul>
                  </li>
                  <!--multi level menu end-->

              </ul>
              <!-- sidebar menu end-->
          </div>
      </aside>
      <!--sidebar end-->
      <!--main content start-->
      <section id="main-content">
          <section class="wrapper">
            <?php          
            if($this->session->flashdata('success')){
            ?>

            <div class="alert alert-success alert-block fade in">
                <button data-dismiss="alert" class="close close-sm" type="button">
                    <i class="icon-remove"></i>
                </button>
                    <strong>Success: </strong><?php echo $this->session->flashdata('success'); ?>
            </div>
            <?php } elseif($this->session->flashdata('error')) { ?>
                <div class="alert alert-block alert-danger fade in">
                    <button data-dismiss="alert" class="close close-sm" type="button">
                        <i class="icon-remove"></i>
                    </button>
                    <strong>Ooops!!! </strong><?php echo $this->session->flashdata('error'); ?>
                </div>
            <?php } ?>

            <?php //print_r($fields); ?>
              <div class="row">
                  <div class="col-lg-8 col-lg-offset-2">
                      <section class="panel">
                              <header class="panel-heading">
                                 EDIT COMPANY PROFILE
                              </header>

                          <div class="panel-body">

                            <!-----------CREATING COMPANY PROFILE Form Start------>


                              <form class="form-horizontal" method="POST" action="<?php echo base_url(); ?>CompanyController/updateCompany">
                                  <div class="form-group">
                                      <label class="col-sm-2 col-sm-2 control-label">name</label>
                                      <div class="col-sm-10">
                                        <input type="hidden" class="form-control" name="id" value="<?php echo !empty($fields[0]['id']) ? $fields[0]['id']:""; ?>" required>
                                          <input type="text" class="form-control" name="name" value="<?php echo !empty($fields[0]['name']) ? $fields[0]['name']:""; ?>" required>
                                      </div>
                                  </div>
                                   <div class="form-group">
                                      <label class="col-sm-2 col-sm-2 control-label">Company name</label>
                                      <div class="col-sm-10">
                                          <input type="text" class="form-control" name="company_name" value="<?php echo !empty($fields[0]['company_name'])?$fields[0]['company_name']:""; ?>" required>
                                      </div>
                                  </div>
                                  <div class="form-group">
                                      <label class="col-sm-2 col-sm-2 control-label">RUT</label>
                                      <div class="col-sm-10">
                                          <input type="text" class="form-control" name="rut" value="<?php echo !empty($fields[0]['rut'])?$fields[0]['rut']:""; ?>" required>
                                      </div>
                                  </div>
                                  <div class="form-group">
                                      <label class="col-sm-2 control-label">Country</label>
                                        <div class="col-sm-10">
                                            <input type="text" placeholder="Argentino" id="country_select" class="form-control" name="country" value="<?php echo !empty($fields[0]['country'])?$fields[0]['country']:""; ?>" required>
                                        </div>
                                  </div>
                                  <div class="form-group">
                                     <label class="col-sm-2 control-label"></label>
                                     <div class="col-sm-10">
                                        <div class="country_dropdown">
                                          <ul>
                                            
                                          </ul>
                                        </div>
                                     </div>
                                  </div>
                                 
                                  <div class="form-group">
                                      <label class="col-sm-2 control-label">Town</label>
                                        <div class="col-sm-10">
                                            <input type="text" placeholder="" class="form-control" name="town" value="<?php echo !empty($fields[0]['town'])?$fields[0]['town']:""; ?>"required>
                                        </div>
                                  </div>
                                    <div class="form-group">
                                      <label class="col-sm-2 control-label">Postal code</label>
                                        <div class="col-sm-10">
                                            <input type="number" placeholder="" class="form-control" name="postal_code" value="<?php echo !empty($fields[0]['postal_code'])?$fields[0]['postal_code']:""; ?>" required>
                                        </div>
                                  </div>
                                  <div class="form-group">
                                      <label class="col-sm-2 control-label">Telephone 1</label>
                                       <div class="col-sm-10">
                                          <input type="text" placeholder="" data-mask="(999) 999-9999" class="form-control" value="<?php echo !empty($fields[0]['telephone'])?$fields[0]['telephone']:""; ?>" name="telephone" required>
                                        </div>
                                  </div>
                             <!--      <div class="form-group">
                                      <label class="col-sm-2 control-label">Contact in company</label>
                                       <div class="col-sm-10">
                                          <select name="contact_in_company" class="form-control" required>
                                            <option value="0" <?php //echo !empty($fields[0]['contact_in_company']==0) ? "selected":""; ?>>Yes</option>
                                            <option value="1" <?php //echo !empty($fields[0]['contact_in_company']==1)? "selected":""; ?>>No</option>
                                          </select>
                                        </div>
                                  </div> -->
                                  <div id="company_person">
                                    <?php 

                                     $data1=json_decode($fields[0]['contact_name']);
                                     $count=count($data1);
                                     $data2=json_decode($fields[0]['Rank']);
                                     $data3=json_decode($fields[0]['email']);

                                     $data=array_merge($data1,$data2,$data3);
                                     
                                     for($i=0;$i<$count;$i++){
                                       

                                    ?>


                                    <div class="form-group" id="<?php echo 'company_contact'; ?>">
                                        <label class="col-sm-2 control-label label_contact">Contact in company</label>
                                        <div class="col-sm-3">
                                            <input type="text" placeholder="John Doe"  class="form-control" name="contact_name[]" value="<?php if($count==1){echo $data[$i]; }else{ echo $data[$i];}?>">
                                        </div>
                                        <div class="col-sm-3">
                                            <input type="text" placeholder="Rank"  class="form-control" name="contact_rank[]" value="<?php if($count==1){echo $data[$i+1]; } elseif($count==2){echo $data[$i+2];}else{ echo $data[$i+3];}?>">
                                        </div>
                                        <div class="col-sm-3">
                                              <input type="email" placeholder="johndoe@email.com"  class="form-control" name="contact_email[]" value="<?php if($count==1){echo $data[$i+2]; } elseif($count==2){echo $data[$i+4];}else{ echo $data[$i+6];}?>">
                                        </div>
                                        <div class="col-sm-1">
                                          <a class="btn btn-primary btn-sm clone_btn">
                                             <i class="icon-expand-alt" style="font-size: 20px;"></i>
                                          </a> 
                                        </div>
                                    </div>
                                  <?php    /* } */
                                          } 
                                      ?>
                                </div>
                           
                                  <div class="form-group">
                                      <label class="col-sm-2 control-label">Telephone / Internal</label>
                                       <div class="col-sm-10">
                                          <input type="text" placeholder="" data-mask="(999) 999-9999" class="form-control" name="contact_telephone" value="<?php echo !empty($fields[0]['contact_telephone'])?$fields[0]['contact_telephone']:""; ?>">
                                        </div>
                                  </div>
                                <div class="form-group">
                                    <div class="col-sm-2"></div>
                                    <div class="col-sm-10">
                                        <button type="submit" class="btn btn-info btn" name="submit">Submit</button>
                                        <button type="cancel" class="btn btn-danger btn">Cancel</button>
                                    </div>
                                </div>
                              </form>

                                <!-----------CREATING COMPANY PROFILE Form End------>

                          </div>
                      </section>
                  </div>
              </div>
              <!-- page end-->
          </section>
      </section>
      <!--main content end-->
      <!--footer start-->
      <footer class="site-footer">
          <div class="text-center">
              2013 &copy; FlatLab by VectorLab.
              <a href="#" class="go-top">
                  <i class="icon-angle-up"></i>
              </a>
          </div>
      </footer>
      <!--footer end-->
  </section>



    <!-- js placed at the end of the document so the pages load faster -->
    <script href="<?php echo base_url(); ?>assets/js/jquery.js"></script>
    <script href="<?php echo base_url(); ?>assets/js/bootstrap.min.js"></script>
    <script href="<?php echo base_url(); ?>assets/js/jquery.scrollTo.min.js"></script>
    <script href="<?php echo base_url(); ?>assets/js/jquery.nicescroll.js" type="text/javascript"></script>

    <script href="<?php echo base_url(); ?>assets/js/jquery-ui-1.9.2.custom.min.js"></script>
    <script class="include" type="text/javascript" href="<?php echo base_url(); ?>assets/js/jquery.dcjqaccordion.2.7.js"></script>

  <!--custom switch-->
  <script href="<?php echo base_url(); ?>assets/js/bootstrap-switch.js"></script>
  <!--custom tagsinput-->
  <script href="<?php echo base_url(); ?>assets/js/jquery.tagsinput.js"></script>
  <!--custom checkbox & radio-->
  <script type="text/javascript" href="<?php echo base_url(); ?>assets/js/ga.js"></script>

  <script type="text/javascript" href="<?php echo base_url(); ?>assets/bootstrap-datepicker/js/bootstrap-datepicker.js"></script>
  <script type="text/javascript" href="<?php echo base_url(); ?>assets/bootstrap-daterangepicker/date.js"></script>
  <script type="text/javascript" href="<?php echo base_url(); ?>assets/bootstrap-daterangepicker/daterangepicker.js"></script>
  <script type="text/javascript" href="<?php echo base_url(); ?>assets/bootstrap-colorpicker/js/bootstrap-colorpicker.js"></script>
  <script type="text/javascript" href="<?php echo base_url(); ?>assets/ckeditor/ckeditor.js"></script>

  <script type="text/javascript" href="<?php echo base_url(); ?>assets/bootstrap-inputmask/bootstrap-inputmask.min.js"></script>
  <script href="<?php echo base_url(); ?>assets/js/respond.min.js" ></script>
  <script type="text/javascript" src="https://code.jquery.com/jquery-1.11.3.min.js"></script>
  <script src="http://localhost/survey-manage/assets/plugins/jQuery/jquery-1.12.4.min.js"></script>


  <!--common script for all pages-->
    <script href="<?php echo base_url(); ?>assets/js/common-scripts.js"></script>

  <!--script for this page-->
  <script href="<?php echo base_url(); ?>assets/js/form-component.js"></script>

  <script type="text/javascript">

    $(document).ready(function(){

      $('#country_select').keyup(function(){
        
          var txt=$(this).val();
         

          if(txt==''){

             $('.country_dropdown ul').html('');

          }
          else{

              $.ajax({
                    
                  url:"<?php echo base_url(); ?>country/CountryController/select_country",
                  method:"POST",
                  data:{search:txt},
                  dataType:"text",
                  success:function(data){

                      $('.country_dropdown ul').html(data);

                      $('.country_dropdown ul li').css('cursor','pointer');

                      $('.country_dropdown ul li').click(function(){

                          var country_value=$(this).attr('data_id');

                          $('#country_select').val(country_value);

                          var get_value=$('#country_select').val();

                          if (get_value){

                             $('.country_dropdown').hide();

                          }
                          else{

                            $('.country_dropdown').show();

                          }

                          //$('.country_dropdown').html('');


                    });

                }
                                
           }); 



          }

    });

});
  </script>
    <script type="text/javascript">
    var i=1;
      $(document).ready(function(){
        $(".clone_btn").click(function(){
        $("#company_contact").clone().insertBefore("#company_contact").prop("id","company_contact"+i);
        i++;
      });
    });
  </script>

  </body>
</html>
