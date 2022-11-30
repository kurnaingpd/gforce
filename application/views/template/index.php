<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <title>Home | GForce</title>
        <!-- Favicon -->
        <link rel="shortcut icon" href="<?=base_url('assets/images/inventory/logo-gonusa.png')?>">
        <!-- page css -->
        <!-- Core css -->
        <link href="<?=base_url('assets/enlink/css/app.min.css')?>" rel="stylesheet">
        <?php
            if ( isset($css) ){
                foreach($css as $rows){
                    $exp = explode(",", $rows);
                    echo "<link type=\"{$exp[0]}\" rel=\"{$exp[1]}\" href=\"{$exp[2]}\" />\n";
                }
            }
        ?>
    </head>
    <body>
        <div class="app">
            <div class="layout">
                <!-- Header START -->
                <div class="header">
                    <div class="logo logo-dark mt-3">
                        <a href="index.html">
                            <img src="<?=base_url('assets/images/inventory/logo-gonusa-full.png')?>" alt="Logo" width="50%">
                            <img class="logo-fold ml-3" src="<?=base_url('assets/images/inventory/logo-gonusa.png')?>" alt="Logo" width="50%">
                        </a>
                    </div>
                    <div class="nav-wrap">
                        <ul class="nav-left">
                            <li class="desktop-toggle">
                                <a href="javascript:void(0);">
                                    <i class="anticon"></i>
                                </a>
                            </li>
                            <li class="mobile-toggle">
                                <a href="javascript:void(0);">
                                    <i class="anticon"></i>
                                </a>
                            </li>
                        </ul>
                        <ul class="nav-right">
                            <li class="dropdown dropdown-animated scale-left">
                                <a href="javascript:void(0);" style="font-size: 14px !important;">
                                    <i class="anticon anticon-user"></i> Nama
                                </a>
                            </li>

                            <li class="dropdown dropdown-animated scale-left">
                                <a href="javascript:void(0);" style="font-size: 14px !important;">
                                    <i class="anticon anticon-logout"></i> Logout
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>    
                <!-- Header END -->

                <!-- Side Nav START -->
                <div class="side-nav">
                    <div class="side-nav-inner">
                        <ul class="side-nav-menu scrollable">
                            <li class="nav-item dropdown">
                                <a class="dropdown-toggle" href="javascript:void(0);">
                                    <span class="icon-holder">
                                        <i class="anticon anticon-pie-chart"></i>
                                    </span>
                                    <span class="title">Dropdown</span>
                                    <span class="arrow">
                                        <i class="arrow-icon"></i>
                                    </span>
                                </a>
                                <ul class="dropdown-menu">
                                    <li>
                                        <a href="">Dropdown 1</a>
                                    </li>
                                    <li>
                                        <a href="">Dropdown 2</a>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                </div>
                <!-- Side Nav END -->

                <!-- Page Container START -->
                <div class="page-container">
                    
                    <!-- Content Wrapper START -->
                    <div class="main-content">
                        <div class="page-header">
                            <h2 class="header-title">Title</h2>
                            <div class="header-sub-title">
                                <nav class="breadcrumb breadcrumb-dash">
                                    <a href="#" class="breadcrumb-item"><i class="anticon anticon-home m-r-5"></i>Home</a>
                                    <a class="breadcrumb-item" href="#">Breadcrumb 1</a>
                                    <span class="breadcrumb-item active">Breadcrumb 2</span>
                                </nav>
                            </div>
                        </div>
                        <!-- Content goes Here -->
                        <div id="content">
                            <?=$contents?>
                        </div>
                    </div>
                    <!-- Content Wrapper END -->

                    <!-- Footer START -->
                    <footer class="footer">
                        <div class="footer-content">
                            <?php
                                $date_static = 2022;
                                $date_dynamic = date('Y');
                                if($date_static == $date_dynamic) {
                                    $date = $date_dynamic;
                                } else {
                                    $date = $date_static.' - '.$date_dynamic;
                                }
                            ?>
                            <p class="m-b-0">Copyright © <?=$date?> Theme by Enlink. All rights reserved.</p>
                        </div>
                    </footer>
                    <!-- Footer END -->

                </div>
                <!-- Page Container END -->
            </div>
        </div>
        
        <!-- Core Vendors JS -->
        <script src="<?=base_url('assets/enlink/js/vendors.min.js')?>"></script>
        <!-- page js -->
        <!-- Core JS -->
        <script>var base_url = "<?=base_url()?>";</script>
        <script>var site_url = "<?=site_url()?>";</script>
        <script src="<?=base_url('assets/enlink/js/app.min.js')?>"></script>
        <?php
            if ( isset($js) ){
                foreach($js as $rows)
                    echo "<script src=\"{$rows}\"></script>\n";		
            }
        ?>
    </body>
</html>