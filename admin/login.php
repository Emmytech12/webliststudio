<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http: //www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<?php include '../config/constants.php';?>
<?php include 'config/functions.php';?>
<html lang="en" xmlns="http://www.w3.org/1999/xhtml">
<head>
    <?php include 'meta.php'?>
    <title><?php echo $thename?> | Administrative Login</title>
    <meta name="keywords" content="<?php echo $thename?>, web studeio, Custom website builder, Custom website developer, Website Development company in USA, Website Development consultant in USA, Website listing, Digital marketing company in USA, Web Design, Website SEO booting company, Website builder in USA, Website consulting services in USA, Custom website development company, website development experts in USA, website booster, website booster company, SEO consultant in USA, SEO Consulting company in USA" />
    <meta name="description" content="Boost Your Online Presence with Our Custom Website Development and SEO Services ensure your website ranks higher on search engines and attracts more traffic." />

    <meta property="og:title" content="<?php echo $thename?> |  Custom Website Development and SEO Services in USA" />
    <meta property="og:image" content="<?php echo $website_url?>/all-images/plugin-pix/webliststudio.jpg" />
    <meta property="og:description" content="Boost Your Online Presence with Our Custom Website Development and SEO Services ensure your website ranks higher on search engines and attracts more traffic." />

    <meta name="twitter:title" content="<?php echo $thename?> |  Custom Website Development and SEO Services in USA" />
    <meta name="twitter:card" content="<?php echo $thename?>" />
    <meta name="twitter:image" content="<?php echo $website_url?>/all-images/plugin-pix/webliststudio.jpg" />
    <meta name="twitter:description"  content="Boost Your Online Presence with Our Custom Website Development and SEO Services ensure your website ranks higher on search engines and attracts more traffic." />
</head>


<body>
<?php  include 'alert.php'?>
    <section class="login-session">
        <div class="login-over-lay login-blur"></div>
        <div class="center-login-div">
            <div class="login-div-in">
                <div class="header-div animated fadeIn">
                    <div class="logo-div">
                        <a href="<?php echo $website_url ?>"><img src="<?php echo $website_url?>/all-images/images/logo.png" alt="<?php echo $thename?> Logo"  class="animated zoomIn"/></a>   
                    </div>

                    <ul>
                        <li class="active-li" id="login_id" onclick="_nextLoginPage('view_login','login_id');">Log-In</li>
                        <li id="reset_pass_id" onclick="_nextLoginPage('view_forgot_password','reset_pass_id');">Forgot Password?</li>
                        <li id="expand_li"><i class="bi-list-nested"></i>
                            <div class="expand-div animated fadeIn">
                                <ul class="ul-expand">
                                    <li id="login_id" onclick="_nextLoginPage('view_login','login_id');">Log-In</li>
                                    <li id="reset_pass_id" onclick="_nextLoginPage('view_forgot_password','reset_pass_id');">Forgot Password?</li>
                                </ul>
                            </div>
                        </li>
                    </ul>
                </div>

                <div class="form-back-div">
                    <div id="login-content">
                        <?php $page='login';?>
                        <?php include 'content/page-content.php';?>
                    </div>
                </div>
            </div>
        </div>
    </section>

<?php include 'bottom-scripts.php'?>
</body>
</html>


