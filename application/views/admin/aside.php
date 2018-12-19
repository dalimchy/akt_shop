
    <body class="app-ui layout-has-drawer layout-has-fixed-header">
        <div class="app-layout-canvas">
            <div class="app-layout-container">

                <!-- Drawer -->
                <aside class="app-layout-drawer">

                    <!-- Drawer scroll area -->
                    <div class="app-layout-drawer-scroll">
                        <!-- Drawer logo -->
                        <div id="logo" class="drawer-header">
                            <a href="<?php echo base_url()?>dashboard"><img class="img-responsive" src="<?php echo base_url()?>assets/admin/img/logo/logo-backend.png" title="AppUI" alt="AppUI" /></a>
                        </div>

                        <!-- Drawer navigation -->
                        <nav class="drawer-main">
                            <ul class="nav nav-drawer">
                                <li class="nav-item <?php if($title == 'Dashboard'){?>active<?php }?> ">
                                    <a href="<?php echo base_url('/dashboard')?>"><i class="ion-ios-speedometer-outline"></i> Dashboard</a>
                                </li>

                                <li class="nav-item">
                                    <a href="/akt_shop" target="_blank"><i class="ion-ios-monitor-outline"></i> Frontend</a>
                                </li>

                                <li class="nav-item nav-item-has-subnav <?php if($title == 'Add Categorie' || $title == 'Manage Categories' ){?>active open<?php }?>">
                                    <a href="javascript:void(0)"><i class="ion-ios-pricetags"></i> Category</a>
                                    <ul class="nav nav-subnav">

                                        <li>
                                            <a href="<?php echo base_url('/add-category')?>">Add Category</a>
                                        </li>

                                        <li>
                                            <a href="<?php echo base_url('/manage-categories')?>">Manage Category</a>
                                        </li>
                                    </ul>
                                </li>



                                 <li class="nav-item nav-item-has-subnav">
                                    <a href="javascript:void(0)"><i class="ion-clipboard"></i> Manufacture</a>
                                    <ul class="nav nav-subnav">

                                        <li>
                                            <a href="base_ui_buttons.html">Add Manufacture</a>
                                        </li>

                                        <li>
                                            <a href="base_ui_buttons.html">Manage Manufacture</a>
                                        </li>
                                    </ul>
                                </li>


                                <li class="nav-item nav-item-has-subnav">
                                    <a href="javascript:void(0)"><i class="ion-cube"></i> Product</a>
                                    <ul class="nav nav-subnav">

                                        <li>
                                            <a href="base_ui_buttons.html">Add Product</a>
                                        </li>

                                        <li>
                                            <a href="base_ui_buttons.html">Manage Product</a>
                                        </li>
                                    </ul>
                                </li>


                                <li class="nav-item nav-item-has-subnav">
                                    <a href="javascript:void(0)"><i class="ion-archive"></i>Orders</a>
                                    <ul class="nav nav-subnav">

                                        <li>
                                            <a href="#">Orders list</a>
                                        </li>

                                        <li>
                                            <a href="#">Order statuses</a>
                                        </li>

                                        <li>
                                            <a href="#">Accounting</a>
                                        </li>

                                        <li>
                                            <a href="#">Payment transactions</a>
                                        </li>

                                        <li>
                                            <a href="#">Messages</a>
                                        </li>
                                    </ul>
                                </li>




                            </ul>
                        </nav>
                        <!-- End drawer navigation -->

                        <div class="drawer-footer">
                            <p class="copyright">Copyright &copy; <a href="<?php echo base_url() ?>"> AKT-Shop</a></p>
                        </div>
                    </div>
                    <!-- End drawer scroll area -->
                </aside>
                <!-- End drawer -->

                <!-- Header -->
                <header class="app-layout-header">
                    <nav class="navbar navbar-default">
                        <div class="container-fluid">
                            <div class="navbar-header">
                                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#header-navbar-collapse" aria-expanded="false">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
                                <button class="pull-left hidden-lg hidden-md navbar-toggle" type="button" data-toggle="layout" data-action="sidebar_toggle">
					<span class="sr-only">Toggle drawer</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
                                <span class="navbar-page-title"><?php echo $title ?></span>
                            </div>

                            <div class="collapse navbar-collapse" id="header-navbar-collapse">
                                <!-- Header search form -->
                                <form class="navbar-form navbar-left app-search-form" role="search">
                                    <div class="form-group">
                                        <div class="input-group">
                                            <input class="form-control" type="search" id="search-input" placeholder="Search..." />
                                            <span class="input-group-btn">
								<button class="btn" type="button"><i class="ion-ios-search-strong"></i></button>
							</span>
                                        </div>
                                    </div>
                                </form>
                                <!-- .navbar-left -->

                                <ul class="nav navbar-nav navbar-right navbar-toolbar hidden-sm hidden-xs">
                                    <li>
                                        <!-- Opens the modal found at the bottom of the page -->
                                        <a href="javascript:void(0)" data-toggle="modal" data-target="#apps-modal"><i class="ion-grid"></i></a>
                                    </li>

                                    <li class="dropdown">
                                        <a href="javascript:void(0)" data-toggle="dropdown"><i class="ion-ios-bell"></i> <span class="badge">3</span></a>
                                        <ul class="dropdown-menu dropdown-menu-right">
                                            <li class="dropdown-header">Profile</li>
                                            <li>
                                                <a tabindex="-1" href="javascript:void(0)"><span class="badge pull-right">3</span> News </a>
                                            </li>
                                            <li>
                                                <a tabindex="-1" href="javascript:void(0)"><span class="badge pull-right">1</span> Messages </a>
                                            </li>
                                            <li class="divider"></li>
                                            <li class="dropdown-header">More</li>
                                            <li>
                                                <a tabindex="-1" href="javascript:void(0)">Edit Profile..</a>
                                            </li>
                                        </ul>
                                    </li>

                                    <li class="dropdown dropdown-profile">
                                        <a href="javascript:void(0)" data-toggle="dropdown">
                                            <span class="m-r-sm"><?php echo $this->session->userdata('username')?> <span class="caret"></span></span>
                                            <img class="img-avatar img-avatar-48" src="<?php echo base_url()?>assets/admin/img/avatars/avatar3.jpg" alt="User profile pic" />
                                        </a>
                                        <ul class="dropdown-menu dropdown-menu-right">
                                            <li class="dropdown-header">
                                                Pages
                                            </li>
                                            <li>
                                                <a href="base_pages_profile.html">Profile</a>
                                            </li>
                                            <li>
                                                <a href="base_pages_profile.html"><span class="badge badge-success pull-right">3</span> Blog</a>
                                            </li>
                                            <li>
                                                <a href="<?php echo base_url()?>logout">Logout</a>
                                            </li>
                                        </ul>
                                    </li>
                                </ul>
                                <!-- .navbar-right -->
                            </div>
                        </div>
                        <!-- .container-fluid -->
                    </nav>
                    <!-- .navbar-default -->
                </header>
                <!-- End header -->
                <main class="app-layout-content">

    <!-- Page Content -->
    <div class="container-fluid p-y-md">
