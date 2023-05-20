<header class="header  header-two">
            <div class="header-fixed">
                <nav class="navbar navbar-expand-lg header-nav">
                    <div class="container">
                        <div class="navbar-header">
                            <a id="mobile_btn" href="javascript:void(0);">
                                <span class="bar-icon">
                                    <span></span>
                                    <span></span>
                                    <span></span>
                                </span>
                            </a>
                            <a href="<?php echo base_url('Home'); ?>" class="navbar-brand logo">
                                <img src="<?php echo base_url(''); ?>assets/images/cyber/logo.png" class="img-fluid" alt="Logo">
                            </a>
                        </div>
                        <div class="main-menu-wrapper">
                            <div class="menu-header">
                                <a href="<?php echo base_url('Home'); ?>" class="menu-logo">
                                    <img src="<?php echo base_url(''); ?>assets/images/cyber/logo.png" class="img-fluid" alt="Logo">
                                </a>
                                <a id="menu_close" class="menu-close" href="javascript:void(0);">
                                    <i class="fas fa-times"></i>
                                </a>

                            </div>

                            <ul class="main-nav">


                                <?php if (isset($_SESSION['username'])) { ?>
                                    <li class="has-submenu" id="list_profile">
                                        
                                        <a href><?php echo $_SESSION['username']; ?> <i class="fas fa-chevron-down"></i></a>
                                        <ul class="submenu">

                                            <li><a href="<?php echo base_url('user/Profile'); ?>">View Profile</a></li>
                                            <li><a href="<?php echo base_url('user/logout'); ?>">Logout</a></li>
                                        </ul>
                                    </li>
                                <?php } ?>
                                <?php if (!isset($_SESSION['username'])) { ?>
                                    <li class="nav-item" id="app_mentor">
                                        <a class="nav-link header-login-two" href="<?php echo base_url('mentor/Signup'); ?>">Apply As Mentor</a>
                                    </li>
                                    <li class="nav-item" id="app_student">
                                        <a class="nav-link header-login" href="<?php echo base_url('user/Signup'); ?>">Apply As Student</a>
                                    </li>
                                <?php } ?>
                            </ul>
                        </div>

                        <?php if (isset($_SESSION['username'])) { ?>
                        <ul class="nav header-navbar-rht">

                            <li class="nav-item dropdown has-arrow logged-item">
                                <a href="#" class="dropdown-toggle nav-link" data-bs-toggle="dropdown">
                                    <span class="user-img">
                                        <img class="rounded-circle" src="<?php echo base_url('assets/frontend/assets/img/user/user.jpg'); ?>" width="31" alt="<?php echo $_SESSION['username']; ?>">
                                    </span>
                                </a>
                                <div class="dropdown-menu dropdown-menu-end">
                                    <div class="user-header">
                                        <div class="avatar avatar-sm">
                                            <img src="<?php echo base_url('assets/frontend/assets/img/user/user.jpg'); ?>" alt="User Image" class="avatar-img rounded-circle">
                                        </div>
                                        <div class="user-text">
                                            <h6><?php echo $_SESSION['username']; ?></h6>
                                            <p class="text-muted mb-0">Student</p>
                                        </div>
                                    </div>
                                    <a class="dropdown-item" href="<?php echo base_url('user/Profile'); ?>">Profile</a>
                                    <a class="dropdown-item" href="<?php echo base_url('user/logout'); ?>">Logout</a>
                                </div>
                            </li>

                        </ul>
                        <?php } ?>
                        
                        <?php if (!isset($_SESSION['username'])) { ?>
                            <ul class="nav header-navbar-rht" id="btn_st_men">
                                <li class="nav-item">
                                    <a class="nav-link header-login-two" href="<?php echo base_url('mentor/Signup'); ?>">Apply As Mentor</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link header-login" href="<?php echo base_url('user/Signup'); ?>">Apply As Student</a>
                                </li>
                            </ul>
                        <?php } ?>

                        

                    </div>
                </nav>
            </div>
        </header>