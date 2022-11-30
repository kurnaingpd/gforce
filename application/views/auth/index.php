<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <title><?=$title?> | GForce</title>
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
            <div class="container-fluid p-h-0 p-v-20 bg full-height d-flex" style="background-image: url('<?=base_url('assets/enlink/images/others/login-3.png')?>')">
                <div class="d-flex flex-column justify-content-between w-100">
                    <div class="container d-flex h-100">
                        <div class="row align-items-center w-100">
                            <div class="col-md-7 col-lg-5 m-h-auto">
                                <div class="card shadow-lg">
                                    <div class="card-body">
                                        <div class="d-flex align-items-center justify-content-between m-b-30">
                                            <img class="img-fluid" alt="" src="<?=base_url('assets/images/inventory/logo-gonusa-full.png')?>" width="35%">
                                            <h2 class="m-b-0">Sign In</h2>
                                        </div>
                                        <form id="form-login">
                                            <div class="form-group">
                                                <label class="font-weight-semibold col-form-label control-label" for="userName">Username:</label>
                                                <div class="input-affix">
                                                    <i class="prefix-icon anticon anticon-user"></i>
                                                    <input type="text" class="form-control" id="usernamae" name="username" placeholder="Enter username" autocomplete="off" required autofocus>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-form-label control-label" for="password">Password:</label>
                                                <div class="input-affix m-b-10">
                                                    <i class="prefix-icon anticon anticon-lock"></i>
                                                    <input type="password" class="form-control" id="password" name="password" placeholder="Enter password" autocomplete="off" required>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <div class="d-flex align-items-center justify-content-between">
                                                    <span class="font-size-13 text-muted">
                                                        Page rendered in <strong class="small">{elapsed_time}</strong> seconds.
                                                    </span>
                                                    <button class="btn btn-primary">
                                                        <i class="prefix-icon fas fa-sign-in-alt m-r-10"></i>Sign In
                                                    </button>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="d-none d-md-flex p-h-40 justify-content-between">
                        <?php
                            $date_static = 2022;
                            $date_dynamic = date('Y');
                            if($date_static == $date_dynamic) {
                                $date = $date_dynamic;
                            } else {
                                $date = $date_static.' - '.$date_dynamic;
                            }
                        ?>
                        <span class="">© <?=$date?> Theme by Enlink.</span>
                        <ul class="list-inline">
                            <li class="list-inline-item">
                                <a class="text-dark text-link" href="">All rights reserved</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        
        <!-- Core Vendors JS -->
        <script src="<?=base_url('assets/enlink/js/vendors.min.js')?>"></script>
        <!-- page js -->
        <?php
            if ( isset($js) ){
                foreach($js as $rows)
                    echo "<script src=\"{$rows}\"></script>\n";		
            }
        ?>
        <!-- Core JS -->
        <script src="<?=base_url('assets/enlink/js/app.min.js')?>"></script>
    </body>
</html>