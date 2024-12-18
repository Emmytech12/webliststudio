<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http: //www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<?php include '../config/constants.php';?>
<?php include 'config/functions.php';?>
<html lang="en" xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <?php include 'meta.php'?>
    <title><?php echo $thename?>  | Adminstrative Reset Password</title>
    <meta name="keywords" content="Adminstrative Reset Password - <?php echo $thename?>" />
    <meta name="description" content="Adminstrative Reset Password <?php echo $thename?>"/>
</head>
<body>
    <?php  include 'alert.php'?>

    <section class="login-session">
        <div class="login-over-lay login-blur"></div>
        <div class="center-login-div">
            <div class="login-div-in reset-login-div-in">
                <div class="header-div animated fadeIn">
                    <div class="logo-div">
                        <a href="<?php echo $website_url ?>"><img src="<?php echo $website_url?>/all-images/images/logo.png" alt="<?php echo $thename?> Logo"  class="animated zoomIn"/></a>   
                    </div>

                    <ul>
                        <li onclick="location.href='<?php echo $website_url?>/admin/login'">Back to Login</li>
                    </ul>
                </div>

                <div class="form-back-div">
                    <div class="form-div animated fadeIn" id="view_login" data-aos="zoom-in" data-aos-duration="1200">
                        <div class="top-div">
                            <h1> Complete Reset <span>Password</span></h1>                   
                        </div>
                        
                        <div class="inner-form">
                            <div class="alert alert-success">
                                Kindly, Provide new password to reset your password
                            </div>
                            
                            <div class="text_field_container">
                                <input class="text_field" type="password" id="password" placeholder=""/>                 
                                <div class="placeholder">Create New Password:</div>
                            </div>
                        
                            <div class="text_field_container">
                                <input class="text_field" type="password" id="confirm_password" placeholder=""/>                 
                                <div class="placeholder">Comfirm New Password:</div>        
                            </div> 

                            <div class="pswd_info"><em>At least 8 charaters required including upper & lower cases and special characters and numbers.</em></div>

                            <button class="btn" id="" title="Reset Password" onclick="_passwordResetSuccesful('password_reset_successful');">Reset Password <i class="bi-arrow-counterclockwise"></i></button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <?php include 'bottom-scripts.php'?>
</body>
</html>


