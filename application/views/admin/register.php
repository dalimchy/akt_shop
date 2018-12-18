<!DOCTYPE html>

<html class="app-ui">

    <head>
        <!-- Meta -->
        <meta charset="UTF-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" />

        <!-- Document title -->
        <title>Frontend - Login | AppUI</title>

        <meta name="description" content="AppUI - Frontend Template & UI Framework" />
        <meta name="robots" content="noindex, nofollow" />

        <!-- Favicons -->
        <link rel="apple-touch-icon" href="<?php echo base_url()?>assets/admin/img/favicons/apple-touch-icon.png" />
        <link rel="icon" href="<?php echo base_url()?>assets/admin/img/favicons/favicon.ico" />

        <!-- Google fonts -->
        <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Roboto:300,400,400italic,500,900%7CRoboto+Slab:300,400%7CRoboto+Mono:400" />

        <!-- AppUI CSS stylesheets -->
        <link rel="stylesheet" id="css-font-awesome" href="<?php echo base_url()?>assets/admin/css/font-awesome.css" />
        <link rel="stylesheet" id="css-ionicons" href="<?php echo base_url()?>assets/admin/css/ionicons.css" />
        <link rel="stylesheet" id="css-bootstrap" href="<?php echo base_url()?>assets/admin/css/bootstrap.css" />
        <link rel="stylesheet" id="css-app" href="<?php echo base_url()?>assets/admin/css/app.css" />
        <link rel="stylesheet" id="css-app-custom" href="<?php echo base_url()?>assets/admin/css/app-custom.css" />
        <!-- End Stylesheets -->
    </head>

    <body class="app-ui">
        <div class="app-layout-canvas">
            <div class="app-layout-container">

                
                <!-- End header -->

                <main class="app-layout-content">

                    <!-- Page header -->
                  
                    <!-- End Page header -->

                    <!-- Page content -->
                    <div class="page-content">
                        <div class="container">
                            <div class="row">
                                
                                <!-- Sign up -->
                                <div class="col-md-6">
                                    <div class="card">
                                        <h3 class="card-header h4">Sign up</h3>
                                        <div class="card-block">
                                            <form class="form-horizontal" action="index.html" method="post">
                                                <div class="form-group">
                                                    <div class="col-sm-6">
                                                        <label class="sr-only" for="frontend_signup_username">Username</label>
                                                        <input class="form-control" type="text" id="frontend_signup_username" placeholder="Username" />
                                                    </div>
                                                    <div class="col-sm-6">
                                                        <label class="sr-only" for="frontend_signup_email">Email</label>
                                                        <input class="form-control" type="email" id="frontend_signup_email" placeholder="Email" />
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <div class="col-sm-6">
                                                        <label class="sr-only" for="frontend_signup_password">Password</label>
                                                        <input class="form-control" type="password" id="frontend_signup_password" placeholder="Password" />
                                                    </div>
                                                    <div class="col-sm-6">
                                                        <label class="sr-only" for="frontend_signup_confirm_password">Confirm Password</label>
                                                        <input class="form-control" type="password" id="frontend_signup_confirm_password" placeholder="Confirm password" />
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <div class="col-xs-12">
                                                        <label for="frontend_signup_terms" class="css-input switch switch-sm switch-app">
                                        <input type="checkbox" id="frontend_signup_terms" name="frontend_signup_terms" /><span></span> I agree with <a data-toggle="modal" data-target="#modal-signup-terms" href="#">terms &amp; conditions</a>
                                    </label>
                                                    </div>
                                                </div>
                                                <button class="btn btn-app btn-block" type="submit">Sign Up</button>
                                            </form>
                                        </div>
                                        <!-- .card-block -->
                                    </div>
                                    <!-- .card -->
                                </div>
                                <!-- .col-md-6 -->

                            </div>
                            <!-- .row -->
                        </div>
                        <!-- .container -->
                    </div>
                    <!-- End page content -->
                </main>

            </div>
            <!-- .app-layout-container -->
        </div>

        <!-- AppUI Core JS: jQuery, Bootstrap, slimScroll, scrollLock and App.js -->
        <script src="<?php echo base_url()?>assets/admin/js/core/jquery.min.js"></script>
        <script src="<?php echo base_url()?>assets/admin/js/core/bootstrap.min.js"></script>
        <script src="<?php echo base_url()?>assets/admin/js/core/jquery.slimscroll.min.js"></script>
        <script src="<?php echo base_url()?>assets/admin/js/core/jquery.scrollLock.min.js"></script>
        <script src="<?php echo base_url()?>assets/admin/js/core/jquery.placeholder.min.js"></script>
        <script src="<?php echo base_url()?>assets/admin/js/app.js"></script>
        <script src="<?php echo base_url()?>assets/admin/js/app-custom.js"></script>

    </body>

</html>