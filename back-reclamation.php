<!DOCTYPE html>
<html lang="en">

<!-- forms-advanced-form.html  Tue, 07 Jan 2020 03:37:13 GMT -->
<head>
<meta charset="UTF-8">
<meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
<title>Forms &rsaquo; Advanced Forms &mdash; CodiePie</title>

<!-- General CSS Files -->
<link rel="stylesheet" href="assets/modules/bootstrap/css/bootstrap.min.css">
<link rel="stylesheet" href="assets/modules/fontawesome/css/all.min.css">

<!-- CSS Libraries -->
<link rel="stylesheet" href="assets/modules/bootstrap-daterangepicker/daterangepicker.css">
<link rel="stylesheet" href="assets/modules/bootstrap-colorpicker/dist/css/bootstrap-colorpicker.min.css">
<link rel="stylesheet" href="assets/modules/select2/dist/css/select2.min.css">
<link rel="stylesheet" href="assets/modules/jquery-selectric/selectric.css">
<link rel="stylesheet" href="assets/modules/bootstrap-timepicker/css/bootstrap-timepicker.min.css">
<link rel="stylesheet" href="assets/modules/bootstrap-tagsinput/dist/bootstrap-tagsinput.css">

<!-- Template CSS -->
<link rel="stylesheet" href="assets/css/style.min.css">
<link rel="stylesheet" href="assets/css/components.min.css">
</head>

<body class="layout-4">
<!-- Page Loader -->
<div class="page-loader-wrapper">
    <span class="loader"><span class="loader-inner"></span></span>
</div>

<div id="app">
    <div class="main-wrapper main-wrapper-1">
        <div class="navbar-bg"></div>

        <!-- Start app top navbar -->
        <nav class="navbar navbar-expand-lg main-navbar">
            <form class="form-inline mr-auto">
                
            </form>
           
                <li class="dropdown">
                    <a href="#" data-toggle="dropdown" class="nav-link dropdown-toggle nav-link-lg nav-link-user">
                    <img alt="image" src="assets/img/avatar/avatar-2.png" class="rounded-circle mr-1">
                    <div class="d-sm-none d-lg-inline-block">Arij Afaya</div></a>
                    <div class="dropdown-menu dropdown-menu-right">
                        <div class="dropdown-title">Logged in 5 min ago</div>
                        <a href="features-profile.html" class="dropdown-item has-icon"><i class="far fa-user"></i> Profile</a>
                        <a href="features-activities.html" class="dropdown-item has-icon"><i class="fas fa-bolt"></i> Activities</a>
                        <a href="features-settings.html" class="dropdown-item has-icon"><i class="fas fa-cog"></i> Settings</a>
                        <div class="dropdown-divider"></div>
                        <a href="#" class="dropdown-item has-icon text-danger"><i class="fas fa-sign-out-alt"></i> Logout</a>
                    </div>
                </li>
            </ul>
        </nav>

        <!-- Start main left sidebar menu -->
        <div class="main-sidebar sidebar-style-2">
            <aside id="sidebar-wrapper">
                <div class="sidebar-brand">
                    <a href="index-2.html">Gestion Réclamations</a>
                </div>
                <div class="sidebar-brand sidebar-brand-sm">
                    <a href="index-2.html">CP</a>
                </div>
                <ul class="sidebar-menu">
                    <li class="menu-header">Localuxe</li>
                    <li class="dropdown">
                        <!--<a href="#" class="nav-link has-dropdown"><i class="fas fa-fire"></i><span>Dashboard</span></a>-->
                        <ul class="dropdown-menu">
                            <li><a class="nav-link" href="index-0.html">Analytics</a></li>
                            <li><a class="nav-link" href="index-2.html">Ecommerce</a></li>
                        </ul>
                    </li>
                    <!--<li class="menu-header">Starter</li>
                    <li class="dropdown">
                        <a href="#" class="nav-link has-dropdown" data-toggle="dropdown"><i class="fas fa-columns"></i> <span>Layout</span></a>
                        <ul class="dropdown-menu">
                            <li><a class="nav-link" href="layout-default.html">Default Layout</a></li>
                            
                            <li><a class="nav-link" href="layout-top-navigation.html">Top Navigation</a></li>
                        </ul>
                    </li>
                    <li><a class="nav-link" href="blank.html"><i class="far fa-square"></i> <span>Blank Page</span></a></li>
                    <li class="dropdown">
                        <a href="#" class="nav-link has-dropdown"><i class="fas fa-th"></i> <span>Bootstrap</span></a>
                        <ul class="dropdown-menu">
                            <li><a class="nav-link" href="bootstrap-alert.html">Alert</a></li>
                            <li><a class="nav-link" href="bootstrap-badge.html">Badge</a></li>
                            <li><a class="nav-link" href="bootstrap-breadcrumb.html">Breadcrumb</a></li>
                            <li><a class="nav-link" href="bootstrap-buttons.html">Buttons</a></li>
                            <li><a class="nav-link" href="bootstrap-card.html">Card</a></li>
                            <li><a class="nav-link" href="bootstrap-carousel.html">Carousel</a></li>
                            <li><a class="nav-link" href="bootstrap-collapse.html">Collapse</a></li>
                            <li><a class="nav-link" href="bootstrap-dropdown.html">Dropdown</a></li>
                            <li><a class="nav-link" href="bootstrap-form.html">Form</a></li>
                            <li><a class="nav-link" href="bootstrap-list-group.html">List Group</a></li>
                            <li><a class="nav-link" href="bootstrap-media-object.html">Media Object</a></li>
                            <li><a class="nav-link" href="bootstrap-modal.html">Modal</a></li>
                            <li><a class="nav-link" href="bootstrap-nav.html">Nav</a></li>
                            <li><a class="nav-link" href="bootstrap-navbar.html">Navbar</a></li>
                            <li><a class="nav-link" href="bootstrap-pagination.html">Pagination</a></li>
                            <li><a class="nav-link" href="bootstrap-popover.html">Popover</a></li>
                            <li><a class="nav-link" href="bootstrap-progress.html">Progress</a></li>
                            <li><a class="nav-link" href="bootstrap-table.html">Table</a></li>
                            <li><a class="nav-link" href="bootstrap-tooltip.html">Tooltip</a></li>
                            <li><a class="nav-link" href="bootstrap-typography.html">Typography</a></li>
                        </ul>
                    </li>-->

                    <li class="dropdown">
                        <a href="#" class="nav-link has-dropdown"><i class="fas fa-th-large"></i> <span>ajout</span></a>
                        <ul class="dropdown-menu">
                            <li><a class="nav-link" href="components-article.php">ajout reponse</a></li>
                        </ul>
                    </li>
                    <li class="dropdown active">
                        <a href="#" class="nav-link has-dropdown"><i class="far fa-file-alt"></i> <span>Affichage</span></a>
                        <ul class="dropdown-menu">
                            <li class="active"><a class="nav-link" href="forms-advanced-form.php">affichage réclamations</a></li>
                            <li><a class="nav-link" href="affichagedisponibiliteback.php">affichage réponses</a></li>
                        </ul>
                    </li>
                    <li class="dropdown">
                        <a href="#" class="nav-link has-dropdown"><i class="fas fa-map-marker-alt"></i> <span>Modification</span></a>
                        <ul class="dropdown-menu">
                            
                        </ul>
                    </li>
                    <li class="dropdown">
                        <a href="#" class="nav-link has-dropdown"><i class="fas fa-plug"></i> <span>Suppression</span></a>



                    
                        <!--<ul class="dropdown-menu">
                            <li class="menu-sub-header">Apps</li>
                            <li><a class="nav-link" href="modules-calendar.html">Calendar</a></li>
                            
                            <li class="menu-sub-header">Charts</li>
                            <li><a class="nav-link" href="modules-chartjs.html">ChartJS</a></li>
                            <li><a class="nav-link" href="modules-apex-charts.html">Apex Charts</a></li>
                            <li><a class="nav-link" href="modules-e-charts.html">E Charts</a></li>
                            <li><a class="nav-link" href="modules-c3-charts.html">C3 Charts</a></li>
                            <li><a class="nav-link" href="modules-knob-charts.html">Knob Charts</a></li>
                            <li><a class="nav-link" href="modules-sparkline.html">Sparkline</a></li>
                            <li class="menu-sub-header">Tables</li>
                            <li><a class="nav-link" href="modules-datatables.html">DataTables</a></li>
                            <li><a class="nav-link" href="modules-table-more.html">More</a></li>
                            <li class="menu-sub-header">Font Icons</li>
                            <li><a class="nav-link" href="modules-font-awesome.html">Font Awesome</a></li>
                            <li><a class="nav-link" href="modules-line-icons.html">Line Icons</a></li>
                            <li><a class="nav-link" href="modules-feather-icons.html">Feather Icons</a></li>
                            <li><a class="nav-link" href="modules-ion-icons.html">Ion Icons</a></li>
                            <li><a class="nav-link" href="modules-flag.html">Flag</a></li>
                            <li><a class="nav-link" href="modules-weather-icon.html">Weather Icon</a></li>
                            <li class="menu-sub-header">Other</li>
                            <li><a class="nav-link" href="modules-owl-carousel.html">Owl Carousel</a></li>
                            <li><a class="nav-link" href="modules-sweet-alert.html">Sweet Alert</a></li>
                            <li><a class="nav-link" href="modules-toastr.html">Toastr</a></li>
                            <li><a class="nav-link" href="modules-vector-map.html">Vector Map</a></li>
                        </ul>
                    </li>-->
                    <!--<li class="menu-header">Pages</li>
                    <li class="dropdown">
                        <a href="#" class="nav-link has-dropdown"><i class="far fa-user"></i> <span>Auth</span></a>
                        <ul class="dropdown-menu">
                            <li><a href="auth-forgot-password.html">Forgot Password</a></li> 
                            <li><a href="auth-login.html">Login</a></li> 
                            <li><a href="auth-register.html">Register</a></li> 
                            <li><a href="auth-reset-password.html">Reset Password</a></li> 
                        </ul>
                    </li>
                    <li class="dropdown">
                        <a href="#" class="nav-link has-dropdown"><i class="fas fa-exclamation"></i> <span>Errors</span></a>
                        <ul class="dropdown-menu">
                            <li><a class="nav-link" href="errors-503.html">503</a></li> 
                            <li><a class="nav-link" href="errors-403.html">403</a></li> 
                            <li><a class="nav-link" href="errors-404.html">404</a></li> 
                            <li><a class="nav-link" href="errors-500.html">500</a></li> 
                        </ul>
                    </li>
                    <li class="dropdown">
                        <a href="#" class="nav-link has-dropdown"><i class="fas fa-bicycle"></i> <span>Features</span></a>
                        <ul class="dropdown-menu">
                            <li><a class="nav-link" href="features-activities.html">Activities</a></li>
                            <li><a class="nav-link" href="features-post-create.html">Post Create</a></li>
                            <li><a class="nav-link" href="features-posts.html">Posts</a></li>
                            <li><a class="nav-link" href="features-profile.html">Profile</a></li>
                            <li><a class="nav-link" href="features-settings.html">Settings</a></li>
                            <li><a class="nav-link" href="features-setting-detail.html">Setting Detail</a></li>
                            <li><a class="nav-link" href="features-tickets.html">Tickets</a></li>
                        </ul>
                    </li>
                    <li class="dropdown">
                        <a href="#" class="nav-link has-dropdown"><i class="fas fa-ellipsis-h"></i> <span>Utilities</span></a>
                        <ul class="dropdown-menu">
                            <li><a href="utilities-contact.html">Contact</a></li>
                            <li><a class="nav-link" href="utilities-invoice.html">Invoice</a></li>
                            <li><a href="utilities-subscribe.html">Subscribe</a></li>
                        </ul>
                    </li>
                    <li><a class="nav-link" href="credits.html"><i class="fas fa-pencil-ruler"></i> <span>Credits</span></a></li>
                </ul>
                <div class="mt-4 mb-4 p-3 hide-sidebar-mini">
                    <a href="https://getcodiepie.com/docs" class="btn btn-primary btn-lg btn-block btn-icon-split"><i class="fas fa-rocket"></i> Documentation</a>
                </div>-->
            </aside>
        </div>

        <!-- Start app main Content -->
        <div class="main-content">
            <section class="section">
                <div class="section-header">
                    <h1>Réclamations</h1>
                    <li class="dropdown">
                    <li><a href="back-reclamation.php"><i> <strong>GESTION DES UTILISATEURS</strong>></i></a></li>
                        
                    </li>
                    <br>
                    <br>
                    <li class="dropdown active">
                        <!--<a href="forms-advanced-form.php" class="nav-link has-dropdown"><i class="far fa-file-alt"></i> <span>GESTION VEHICULES</span></button></a>-->
                        <li><a href="components-article.php"><i> <strong>GESTION DES VEHICULES</strong>></i></a></li>
                    </li>
                    <br>
                    <br>
                    <li class="dropdown">
                    <li><a href="forms-advanced-form.php"><i> <strong>GESTION DES EVENEMENTS</strong>></i></a></li>
                        
                    </li>
                    <br>
                    <br>
                    <li class="dropdown">
                    <li><a href="back-reclamation.php"><i> <strong>GESTION DES RECLAMATIONS</strong>></i></a></li>
                </div>


                



                <!--<div class="section-body">
                    <h2 class="section-title">Advanced Forms</h2>
                    <p class="section-lead">We provide advanced input fields, such as date picker, color picker, and so on.</p>

                    <div class="row">
                        <div class="col-12 col-md-6 col-lg-6">
                            <div class="card">
                                <div class="card-header">
                                    <h4>Input Text</h4>
                                </div>
                                <div class="card-body">
                                    <div class="form-group">
                                        <label>Default Input Text</label>
                                        <input type="text" class="form-control">
                                    </div>
                                    <div class="form-group">
                                        <label>Phone Number (US Format)</label>
                                        <div class="input-group">
                                        <div class="input-group-prepend">
                                            <div class="input-group-text">
                                            <i class="fas fa-phone"></i>
                                            </div>
                                        </div>
                                        <input type="text" class="form-control phone-number">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label>Password Strength</label>
                                        <div class="input-group">
                                        <div class="input-group-prepend">
                                            <div class="input-group-text">
                                            <i class="fas fa-lock"></i>
                                            </div>
                                        </div>
                                        <input type="password" class="form-control pwstrength" data-indicator="pwindicator">
                                        </div>
                                        <div id="pwindicator" class="pwindicator">
                                        <div class="bar"></div>
                                        <div class="label"></div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label>Currency</label>
                                        <div class="input-group">
                                        <div class="input-group-prepend">
                                            <div class="input-group-text">
                                            $
                                            </div>
                                        </div>
                                        <input type="text" class="form-control currency">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label>Purchase Code</label>
                                        <input type="text" class="form-control purchase-code" placeholder="ASDF-GHIJ-KLMN-OPQR">
                                    </div>
                                    <div class="form-group">
                                        <label>Invoice</label>
                                        <input type="text" class="form-control invoice-input">
                                    </div>
                                    <div class="form-group">
                                        <label>Date</label>
                                        <input type="text" class="form-control datemask" placeholder="YYYY/MM/DD">
                                    </div>
                                    <div class="form-group">
                                        <label>Credit Card</label>
                                        <input type="text" class="form-control creditcard">
                                    </div>
                                    <div class="form-group">
                                        <label>Tags</label>
                                        <input type="text" class="form-control inputtags">
                                    </div>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-header">
                                    <h4>Toggle Switches</h4>
                                </div>
                                <div class="card-body">
                                    <div class="form-group">
                                        <div class="control-label">Toggle switches</div>
                                        <div class="custom-switches-stacked mt-2">
                                        <label class="custom-switch">
                                            <input type="radio" name="option" value="1" class="custom-switch-input" checked>
                                            <span class="custom-switch-indicator"></span>
                                            <span class="custom-switch-description">Option 1</span>
                                        </label>
                                        <label class="custom-switch">
                                            <input type="radio" name="option" value="2" class="custom-switch-input">
                                            <span class="custom-switch-indicator"></span>
                                            <span class="custom-switch-description">Option 2</span>
                                        </label>
                                        <label class="custom-switch">
                                            <input type="radio" name="option" value="3" class="custom-switch-input">
                                            <span class="custom-switch-indicator"></span>
                                            <span class="custom-switch-description">Option 3</span>
                                        </label>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="control-label">Toggle switch single</div>
                                        <label class="custom-switch mt-2">
                                        <input type="checkbox" name="custom-switch-checkbox" class="custom-switch-input">
                                        <span class="custom-switch-indicator"></span>
                                        <span class="custom-switch-description">I agree with terms and conditions</span>
                                        </label>
                                    </div>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-header">
                                    <h4>Image Check</h4>
                                </div>
                                <div class="card-body">
                                    <div class="form-group">
                                        <label class="form-label">Image Check</label>
                                        <div class="row gutters-sm">
                                            <div class="col-6 col-sm-4">
                                                <label class="imagecheck mb-4">
                                                <input name="imagecheck" type="checkbox" value="1" class="imagecheck-input"  />
                                                <figure class="imagecheck-figure">
                                                    <img src="assets/img/news/img01.jpg" alt="}" class="imagecheck-image">
                                                </figure>
                                                </label>
                                            </div>
                                            <div class="col-6 col-sm-4">
                                                <label class="imagecheck mb-4">
                                                <input name="imagecheck" type="checkbox" value="2" class="imagecheck-input"  checked />
                                                <figure class="imagecheck-figure">
                                                    <img src="assets/img/news/img02.jpg" alt="}" class="imagecheck-image">
                                                </figure>
                                                </label>
                                            </div>
                                            <div class="col-6 col-sm-4">
                                                <label class="imagecheck mb-4">
                                                <input name="imagecheck" type="checkbox" value="3" class="imagecheck-input"  />
                                                <figure class="imagecheck-figure">
                                                    <img src="assets/img/news/img03.jpg" alt="}" class="imagecheck-image">
                                                </figure>
                                                </label>
                                            </div>
                                            <div class="col-6 col-sm-4">
                                                <label class="imagecheck mb-4">
                                                <input name="imagecheck" type="checkbox" value="4" class="imagecheck-input"  checked />
                                                <figure class="imagecheck-figure">
                                                    <img src="assets/img/news/img04.jpg" alt="}" class="imagecheck-image">
                                                </figure>
                                                </label>
                                            </div>
                                            <div class="col-6 col-sm-4">
                                                <label class="imagecheck mb-4">
                                                <input name="imagecheck" type="checkbox" value="5" class="imagecheck-input"  />
                                                <figure class="imagecheck-figure">
                                                    <img src="assets/img/news/img05.jpg" alt="}" class="imagecheck-image">
                                                </figure>
                                                </label>
                                            </div>
                                            <div class="col-6 col-sm-4">
                                                <label class="imagecheck mb-4">
                                                <input name="imagecheck" type="checkbox" value="6" class="imagecheck-input"  />
                                                <figure class="imagecheck-figure">
                                                    <img src="assets/img/news/img06.jpg" alt="}" class="imagecheck-image">
                                                </figure>
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-header">
                                    <h4>Color</h4>
                                </div>
                                <div class="card-body">
                                    <div class="form-group">
                                        <label>Simple</label>
                                        <input type="text" class="form-control colorpickerinput">
                                    </div>
                                    <div class="form-group">
                                        <label>Pick Your Color</label>
                                        <div class="input-group colorpickerinput">
                                        <input type="text" class="form-control">
                                        <div class="input-group-append">
                                            <div class="input-group-text">
                                            <i class="fas fa-fill-drip"></i>
                                            </div>
                                        </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="form-label">Color Input</label>
                                        <div class="row gutters-xs">
                                        <div class="col-auto">
                                            <label class="colorinput">
                                            <input name="color" type="checkbox" value="primary" class="colorinput-input" />
                                            <span class="colorinput-color bg-primary"></span>
                                            </label>
                                        </div>
                                        <div class="col-auto">
                                            <label class="colorinput">
                                            <input name="color" type="checkbox" value="secondary" class="colorinput-input" />
                                            <span class="colorinput-color bg-secondary"></span>
                                            </label>
                                        </div>
                                        <div class="col-auto">
                                            <label class="colorinput">
                                            <input name="color" type="checkbox" value="danger" class="colorinput-input" />
                                            <span class="colorinput-color bg-danger"></span>
                                            </label>
                                        </div>
                                        <div class="col-auto">
                                            <label class="colorinput">
                                            <input name="color" type="checkbox" value="warning" class="colorinput-input" />
                                            <span class="colorinput-color bg-warning"></span>
                                            </label>
                                        </div>
                                        <div class="col-auto">
                                            <label class="colorinput">
                                            <input name="color" type="checkbox" value="info" class="colorinput-input" />
                                            <span class="colorinput-color bg-info"></span>
                                            </label>
                                        </div>
                                        <div class="col-auto">
                                            <label class="colorinput">
                                            <input name="color" type="checkbox" value="success" class="colorinput-input" />
                                            <span class="colorinput-color bg-success"></span>
                                            </label>
                                        </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-md-6 col-lg-6">
                            <div class="card">
                                <div class="card-header">
                                <h4>Select</h4>
                                </div>
                                <div class="card-body">
                                    <div class="section-title mt-0">Default</div>
                                    <div class="form-group">
                                        <label>Default Select</label>
                                        <select class="form-control">
                                            <option>Option 1</option>
                                            <option>Option 2</option>
                                            <option>Option 3</option>
                                        </select>
                                    </div>
                                    <div class="section-title">Select 2</div>
                                    <div class="form-group">
                                        <label>Select2</label>
                                        <select class="form-control select2">
                                            <option>Option 1</option>
                                            <option>Option 2</option>
                                            <option>Option 3</option>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label>Select2 Multiple</label>
                                        <select class="form-control select2" multiple="">
                                            <option>Option 1</option>
                                            <option>Option 2</option>
                                            <option>Option 3</option>
                                            <option>Option 4</option>
                                            <option>Option 5</option>
                                            <option>Option 6</option>
                                        </select>
                                    </div>
                                    <div class="section-title">jQuery Selectric</div>
                                    <div class="form-group">
                                        <label>jQuery Selectric</label>
                                        <select class="form-control selectric">
                                            <option>Option 1</option>
                                            <option>Option 2</option>
                                            <option>Option 3</option>
                                            <option>Option 4</option>
                                            <option>Option 5</option>
                                            <option>Option 6</option>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label>jQuery Selectric Multiple</label>
                                        <select class="form-control selectric" multiple="">
                                            <option>Option 1</option>
                                            <option>Option 2</option>
                                            <option>Option 3</option>
                                            <option>Option 4</option>
                                            <option>Option 5</option>
                                            <option>Option 6</option>
                                        </select>
                                    </div>
                                    <div class="section-title">Select Group Button</div>
                                    <div class="form-group">
                                        <label class="form-label">Size</label>
                                        <div class="selectgroup w-100">
                                        <label class="selectgroup-item">
                                            <input type="radio" name="value" value="50" class="selectgroup-input" checked="">
                                            <span class="selectgroup-button">S</span>
                                        </label>
                                        <label class="selectgroup-item">
                                            <input type="radio" name="value" value="100" class="selectgroup-input">
                                            <span class="selectgroup-button">M</span>
                                        </label>
                                        <label class="selectgroup-item">
                                            <input type="radio" name="value" value="150" class="selectgroup-input">
                                            <span class="selectgroup-button">L</span>
                                        </label>
                                        <label class="selectgroup-item">
                                            <input type="radio" name="value" value="200" class="selectgroup-input">
                                            <span class="selectgroup-button">XL</span>
                                        </label>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="form-label">Icons input</label>
                                        <div class="selectgroup w-100">
                                        <label class="selectgroup-item">
                                            <input type="radio" name="transportation" value="2" class="selectgroup-input">
                                            <span class="selectgroup-button selectgroup-button-icon"><i class="fas fa-mobile"></i></span>
                                        </label>
                                        <label class="selectgroup-item">
                                            <input type="radio" name="transportation" value="1" class="selectgroup-input" checked="">
                                            <span class="selectgroup-button selectgroup-button-icon"><i class="fas fa-tablet"></i></span>
                                        </label>
                                        <label class="selectgroup-item">
                                            <input type="radio" name="transportation" value="6" class="selectgroup-input">
                                            <span class="selectgroup-button selectgroup-button-icon"><i class="fas fa-laptop"></i></span>
                                        </label>
                                        <label class="selectgroup-item">
                                            <input type="radio" name="transportation" value="6" class="selectgroup-input">
                                            <span class="selectgroup-button selectgroup-button-icon"><i class="fas fa-times"></i></span>
                                        </label>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="form-label">Icon input</label>
                                        <div class="selectgroup selectgroup-pills">
                                        <label class="selectgroup-item">
                                            <input type="radio" name="icon-input" value="1" class="selectgroup-input" checked="">
                                            <span class="selectgroup-button selectgroup-button-icon"><i class="fas fa-sun"></i></span>
                                        </label>
                                        <label class="selectgroup-item">
                                            <input type="radio" name="icon-input" value="2" class="selectgroup-input">
                                            <span class="selectgroup-button selectgroup-button-icon"><i class="fas fa-moon"></i></span>
                                        </label>
                                        <label class="selectgroup-item">
                                            <input type="radio" name="icon-input" value="3" class="selectgroup-input">
                                            <span class="selectgroup-button selectgroup-button-icon"><i class="fas fa-cloud-rain"></i></span>
                                        </label>
                                        <label class="selectgroup-item">
                                            <input type="radio" name="icon-input" value="4" class="selectgroup-input">
                                            <span class="selectgroup-button selectgroup-button-icon"><i class="fas fa-cloud"></i></span>
                                        </label>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="form-label">Your skills</label>
                                        <div class="selectgroup selectgroup-pills">
                                        <label class="selectgroup-item">
                                            <input type="checkbox" name="value" value="HTML" class="selectgroup-input" checked="">
                                            <span class="selectgroup-button">HTML</span>
                                        </label>
                                        <label class="selectgroup-item">
                                            <input type="checkbox" name="value" value="CSS" class="selectgroup-input">
                                            <span class="selectgroup-button">CSS</span>
                                        </label>
                                        <label class="selectgroup-item">
                                            <input type="checkbox" name="value" value="PHP" class="selectgroup-input">
                                            <span class="selectgroup-button">PHP</span>
                                        </label>
                                        <label class="selectgroup-item">
                                            <input type="checkbox" name="value" value="JavaScript" class="selectgroup-input">
                                            <span class="selectgroup-button">JavaScript</span>
                                        </label>
                                        <label class="selectgroup-item">
                                            <input type="checkbox" name="value" value="Ruby" class="selectgroup-input">
                                            <span class="selectgroup-button">Ruby</span>
                                        </label>
                                        <label class="selectgroup-item">
                                            <input type="checkbox" name="value" value="Ruby" class="selectgroup-input">
                                            <span class="selectgroup-button">Ruby</span>
                                        </label>
                                        <label class="selectgroup-item">
                                            <input type="checkbox" name="value" value="C++" class="selectgroup-input">
                                            <span class="selectgroup-button">C++</span>
                                        </label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-header">
                                    <h4>Toggle Switches</h4>
                                </div>
                                <div class="card-body">
                                    <div class="form-group">
                                        <div class="control-label">Toggle switches</div>
                                        <div class="custom-switches-stacked mt-2">
                                        <label class="custom-switch">
                                            <input type="radio" name="option" value="1" class="custom-switch-input" checked>
                                            <span class="custom-switch-indicator"></span>
                                            <span class="custom-switch-description">Option 1</span>
                                        </label>
                                        <label class="custom-switch">
                                            <input type="radio" name="option" value="2" class="custom-switch-input">
                                            <span class="custom-switch-indicator"></span>
                                            <span class="custom-switch-description">Option 2</span>
                                        </label>
                                        <label class="custom-switch">
                                            <input type="radio" name="option" value="3" class="custom-switch-input">
                                            <span class="custom-switch-indicator"></span>
                                            <span class="custom-switch-description">Option 3</span>
                                        </label>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="control-label">Toggle switch single</div>
                                        <label class="custom-switch mt-2">
                                        <input type="checkbox" name="custom-switch-checkbox" class="custom-switch-input">
                                        <span class="custom-switch-indicator"></span>
                                        <span class="custom-switch-description">I agree with terms and conditions</span>
                                        </label>
                                    </div>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-header">
                                    <h4>Date &amp; Time Picker</h4>
                                </div>
                                <div class="card-body">
                                    <div class="form-group">
                                        <label class="d-block">Date Range Picker With Button</label>
                                        <a href="javascript:;" class="btn btn-primary daterange-btn icon-left btn-icon"><i class="fas fa-calendar"></i> Choose Date
                                        </a>
                                    </div>
                                    <div class="form-group">
                                        <label>Date Picker</label>
                                        <input type="text" class="form-control datepicker">
                                    </div>
                                    <div class="form-group">
                                        <label>Date Time Picker</label>
                                        <input type="text" class="form-control datetimepicker">
                                    </div>
                                    <div class="form-group">
                                        <label>Date Range Picker</label>
                                        <div class="input-group">
                                        <div class="input-group-prepend">
                                            <div class="input-group-text">
                                            <i class="fas fa-calendar"></i>
                                            </div>
                                        </div>
                                        <input type="text" class="form-control daterange-cus">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label>Time Picker</label>
                                        <div class="input-group">
                                        <div class="input-group-prepend">
                                            <div class="input-group-text">
                                            <i class="fas fa-clock"></i>
                                            </div>
                                        </div>
                                        <input type="text" class="form-control timepicker">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>-->
                </div>
            </section>
        </div>
        

        <?php
	include '../controlleur/reclamationc.php';
	$reclamationc=new Reclamationc();
	$listereclamations=$reclamationc->afficherreclamation(); 
?>
<html>
	<head></head>
	<body>
	   
		<center><h1>Liste des reclamations</h1></center>
		<table border="1" align="center">
			<tr>
				<th>id</th>
				<th>type_c</th>
				<th>message_c</th>
				<th>date_c</th>
				<th>Repondre</th>
				<th>Supprimer</th>
			</tr>
			<?php
				foreach($listereclamations as $reclamation){
			?>
			<tr>
				<td><?php echo $reclamation['id']; ?></td>
				<td><?php echo $reclamation['type_c']; ?></td>
				<td><?php echo $reclamation['message_c']; ?></td>
				<td><?php echo $reclamation['date_c']; ?></td>

				<td>
					<form method="POST" action="ajouterreponse.php">
						<input type="submit" name="Repondre" value="Repondre">
						<input type="hidden" value=<?PHP echo $reclamation['id']; ?> name="id">
					</form>
				</td>
				<td>
					<a href="supprimerreclamation.php?id=<?php echo $reclamation['id']; ?>">Supprimer</a>
				</td>
			</tr>
			<?php
				}
			?>
		</table>
	</body>
</html>

            </br>

----------------------------------------------------------------------------------------------------------------------------------------------------------------



<!--PDF-->
			  
              <div class="card-body">
                <table id="example1" class="table table-bordered table-striped" name="prod">
                  <thead>
				  
                  <tr>
                 
                <center> <button><a href="pdf.php"> PDF</a></button></center>
                   
            </tr>




        <!-- Start app Footer part -->
        <footer class="main-footer">
            <div class="footer-left">
                 <div class="bullet"></div>  <a href="templateshub.net">Templates Hub</a>
            </div>
            <div class="footer-right">
            
            </div>
        </footer>
    </div>
</div>


<!-- General JS Scripts -->
<script src="assets/bundles/lib.vendor.bundle.js"></script>
<script src="js/CodiePie.js"></script>

<!-- JS Libraies -->
<script src="assets/modules/cleave-js/dist/cleave.min.js"></script>
<script src="assets/modules/cleave-js/dist/addons/cleave-phone.us.js"></script>
<script src="assets/modules/jquery-pwstrength/jquery.pwstrength.min.js"></script>
<script src="assets/modules/bootstrap-daterangepicker/daterangepicker.js"></script>
<script src="assets/modules/bootstrap-colorpicker/dist/js/bootstrap-colorpicker.min.js"></script>
<script src="assets/modules/bootstrap-timepicker/js/bootstrap-timepicker.min.js"></script>
<script src="assets/modules/bootstrap-tagsinput/dist/bootstrap-tagsinput.min.js"></script>
<script src="assets/modules/select2/dist/js/select2.full.min.js"></script>
<script src="assets/modules/jquery-selectric/jquery.selectric.min.js"></script>

<!-- Page Specific JS File -->
<script src="js/page/forms-advanced-forms.js"></script>

<!-- Template JS File -->
<script src="js/scripts.js"></script>
<script src="js/custom.js"></script>
</body>

<!-- forms-advanced-form.html  Tue, 07 Jan 2020 03:37:52 GMT -->
</html>