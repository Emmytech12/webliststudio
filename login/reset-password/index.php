<?php include '../../config/constants.php';?>
<?php $access_key = $_GET['ref']; ?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http: //www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html lang="en" xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <?php include '../meta.php'?>
    <title><?php echo $thename?>  | Adminstrative Reset Password</title>
    <meta name="keywords" content="Adminstrative Reset Password - <?php echo $thename?>" />
    <meta name="description" content="Adminstrative Reset Password <?php echo $thename?>"/>
</head>
<body>
    <?php  include '../alert.php'?>

    <section class="login-session">
    <div class="graphics-div">
        <div class="content" data-aos="fade-left" data-aos-duration="800">
            <div class="logo-div"><img src="<?php echo $website_url?>/all-images/images/logo.png" alt="<?php echo $thename?> Logo"/></div>
            <div class="graphics" data-aos="fade-left" data-aos-duration="1200"><img src="<?php echo $website_url?>/all-images/body-pix/login-img.png" alt="Login"/></div>
            <h2>Manage Your Hosting with Ease<br> <span>Right at Your Fingertips!</span></h2>
        </div>
    </div>

    <div class="login-div">
        <div class="form-back-div">
            <div class="form-div animated fadeIn" id="view_login" data-aos="fade-right" data-aos-duration="1600">
                <div class="top-div">
                    <h1>Complete Reset Password!</h1>                   
                </div>
                
                <div class="inner-form">
                    <div class="alert alert-success">
                        Kindly, Provide new password to reset your password
                    </div>
                    
                    <div class="text_field_container">
                        <input class="text_field" type="password" id="password" onkeyup="_show_password_visibility('password','login_pass')" placeholder=""/>                 
                        <div class="placeholder">Create New Password:</div>
                        <div class="password-container" id="login_pass" onclick="_togglePasswordVisibility('password','login_pass')">
                            <i class="bi-eye-slash password-toggle"></i>
                        </div>
                    </div>
                
                    <div class="text_field_container">
                        <input class="text_field" type="password" id="confirm_password" onkeyup="_check_password_match()" placeholder=""/>                 
                        <div class="placeholder">Comfirm New Password:</div>        
                    </div> 
                    <div class="pswd_info"><em>At least 8 charaters required including upper & lower cases and special characters and numbers.</em></div>

                    <button class="btn" id="" title="eset Password" onclick="_passwordResetSuccesful('password_reset_successful');">Reset Password <i class="bi-check"></i></button>
                </div>
                <div class="bottom-container">Google reCAPTCHA used. <span>Privacy Policy </span> and <span>Terms of Service</span> apply.</div>
            </div>  
        </div>
    </div>
</section>

    <?php include '../bottom-scripts.php'?>
</body>
</html>

