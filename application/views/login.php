<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="assets/images/favicon.png">
    <title>PrimeWork Login</title>
    <!-- Bootstrap Core CSS -->
    <link href="<?php echo base_url(); ?>assets/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <!-- Custom CSS -->
    <link href="<?php echo base_url(); ?>assets/css/style.css" rel="stylesheet">
    <!-- You can change the theme colors from here -->
    <link href="<?php echo base_url(); ?>assets/css/colors/blue.css" id="theme" rel="stylesheet">
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
<![endif]-->
</head>

<body>
    <!-- ============================================================== -->
    <!-- Preloader - style you can find in spinners.css -->
    <!-- ============================================================== -->
    <div class="preloader">
        <svg class="circular" viewBox="25 25 50 50">
            <circle class="path" cx="50" cy="50" r="20" fill="none" stroke-width="2" stroke-miterlimit="10" /> </svg>
    </div>
    <!-- ============================================================== -->
    <!-- Main wrapper - style you can find in pages.scss -->
    <!-- ============================================================== -->
  
    <section id="wrapper" class="login-register login-center" style="background-image:url(<?php echo base_url(); ?>assets/images/primework01.png);">
        <div class="login-box card" style="background: linear-gradient(to top left, #99ff99 0%, #ffffcc 100%)">
             <div class="card-title text-center" style="color: Black; font-family: serif; text-shadow: 2px 2px 5px blue;" ><strong><b>PRIMEWORK HRMS Login</b></strong></div>
            <div class="card-body">
                			<?php if(!empty($this->session->flashdata('feedback'))){ ?>
							<div class="message">
							<strong>Danger! </strong><?php echo $this->session->flashdata('feedback')?>
							</div>
							<?php
							}
							?>                                          
                <form class="form-horizontal form-material" method="post" id="loginform" action="login/Login_Auth">
                    
                    <img src="<?php echo base_url(); ?>assets/images/three heads.png" class="img-thumbnail" style="display: block; margin: 0 auto;"/>
                        <!-- <img src="<?php echo base_url(); ?>assets/images/LUPO.png" width="200px" alt="Home" /></a> -->
                    <div class="form-group m-t-40">
                        <div class="col-xs-12">
                            <input class="form-control" name="email" value="<?php if(isset($_COOKIE['email'])) { echo $_COOKIE['email']; } ?>" type="text" required placeholder="User email">
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-xs-12">
                            <input class="form-control" name="password" value="<?php if(isset($_COOKIE['password'])) { echo $_COOKIE['password']; } ?>" type="password" required placeholder="Password">
                        </div>
                    </div>
                 <div class="form-check">
                     <input type="checkbox" name="remember" class="form-check-input" id="remember-me">
                     <label class="form-check-label" for="remember-me">Remember user</label>
                 </div>                     
                    <div class="form-group text-center m-t-20">
                        <div class="col-xs-12">
                            <button class="btn btn-success btn-login btn-block text-uppercase waves-effect waves-light" type="submit">Log In</button>
                        </div>
                    </div>
                    <label class="checkbox">
        <span class="pull-right">
            <a data-toggle="modal" href="<?php echo base_url(); ?> application\views\verify.php"> Forgot Password?</a>
        </span>
                </form>
            </div>
        </div>

    </label>
    </section>

    <!-- ============================================================== -->
    <!-- End Wrapper -->
    <!-- ============================================================== -->
    <!-- ============================================================== -->
    <!-- All Jquery -->
    <!-- ============================================================== -->
    <script src="<?php echo base_url(); ?>assets/plugins/jquery/jquery.min.js"></script>
    <!-- Bootstrap tether Core JavaScript -->
    <script src="<?php echo base_url(); ?>assets/plugins/bootstrap/js/popper.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/plugins/bootstrap/js/bootstrap.min.js"></script>
    <!-- slimscrollbar scrollbar JavaScript -->
    <script src="<?php echo base_url(); ?>assets/js/jquery.slimscroll.js"></script>
    <!--Wave Effects -->
    <script src="<?php echo base_url(); ?>assets/js/waves.js"></script>
    <!--Menu sidebar -->
    <script src="<?php echo base_url(); ?>assets/js/sidebarmenu.js"></script>
    <!--stickey kit -->
    <script src="<?php echo base_url(); ?>assets/plugins/sticky-kit-master/dist/sticky-kit.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/plugins/sparkline/jquery.sparkline.min.js"></script>
    <!--Custom JavaScript -->
    <script src="<?php echo base_url(); ?>assets/js/custom.min.js"></script>
    <!-- ============================================================== -->
    <!-- Style switcher -->
    <!-- ============================================================== -->
    <script src="<?php echo base_url(); ?>assets/plugins/styleswitcher/jQuery.style.switcher.js"></script>
</body>


</html>