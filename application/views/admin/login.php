<!DOCTYPE html>

<html class="app-ui">

    <head>
        <!-- Meta -->
        <meta charset="UTF-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" />

        <!-- Document title -->
        <title><?php echo $title; ?></title>

        <meta name="description" content="AppUI - Frontend Template & UI Framework" />
        <meta name="robots" content="noindex, nofollow" />

        <!-- Favicons -->
        <link rel="apple-touch-icon" href="<?php echo base_url()?>assets/admin_assets/assets/img/favicons/apple-touch-icon.png" />
        <link rel="icon" href="<?php echo base_url()?>assets/admin_assets/assets/img/favicons/favicon.ico" />

        <!-- Google fonts -->
        <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Roboto:300,400,400italic,500,900%7CRoboto+Slab:300,400%7CRoboto+Mono:400" />

        <!-- AppUI CSS stylesheets -->
        <link rel="stylesheet" id="css-font-awesome" href="<?php echo base_url()?>assets/admin_assets/assets/css/font-awesome.css" />
        <link rel="stylesheet" id="css-ionicons" href="<?php echo base_url()?>assets/admin_assets/assets/css/ionicons.css" />
        <link rel="stylesheet" id="css-bootstrap" href="<?php echo base_url()?>assets/admin_assets/assets/css/bootstrap.css" />
        <link rel="stylesheet" id="css-app" href="<?php echo base_url()?>assets/admin_assets/assets/css/app.css" />
        <link rel="stylesheet" id="css-app-custom" href="<?php echo base_url()?>assets/admin_assets/assets/css/app-custom.css" />
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
                                <!-- Login card -->
                                <div class="col-md-6">
                                    <div class="card">
                                        <h3 class="card-header h4">Login</h3>
                                            <h3 style="color: red">
                                                <?php
                                                    $message = $this->session->userdata('message');
                                                    if ($message) 
                                                    {
                                                        echo $message;
                                                        $this->session->unset_userdata('message');
                                                    }
                                                ?>

                                            </h3>
                                        <div class="card-block">
                                            <form action="<?php echo base_url()?>login-check" method="post">
                                                <div class="form-group">
                                                    <label class="sr-only" for="frontend_login_email">Email</label>
                                                    <input type="email" class="form-control" id="frontend_login_email" placeholder="Email" name="email" />
                                                </div>
                                                <div class="form-group">
                                                    <label class="sr-only" for="frontend_login_password">Password</label>
                                                    <input type="password" class="form-control" id="frontend_login_password" placeholder="Password" name="password" />
                                                </div>
                                                <div class="form-group">
                                                    <label for="frontend_login_remember" class="css-input switch switch-sm switch-app">
									<input type="checkbox" id="frontend_login_remember" /><span></span> Remember me</a>
								</label>
                                                </div>
                                                <button type="submit" class="btn btn-app btn-block">Login</button>
                                            </form>
                                        </div>
                                        <!-- .card-block -->
                                    </div>
                                    <!-- .card -->
                                </div>
                                <!-- .col-md-6 -->
                                <!-- End login -->

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
        <script src="<?php echo base_url()?>assets/admin_assets/assets/js/core/jquery.min.js"></script>
        <script src="<?php echo base_url()?>assets/admin_assets/assets/js/core/bootstrap.min.js"></script>
        <script src="<?php echo base_url()?>assets/admin_assets/assets/js/core/jquery.slimscroll.min.js"></script>
        <script src="<?php echo base_url()?>assets/admin_assets/assets/js/core/jquery.scrollLock.min.js"></script>
        <script src="<?php echo base_url()?>assets/admin_assets/assets/js/core/jquery.placeholder.min.js"></script>
        <script src="<?php echo base_url()?>assets/admin_assets/assets/js/app.js"></script>
        <script src="<?php echo base_url()?>assets/admin_assets/assets/js/app-custom.js"></script>

    </body>

</html>