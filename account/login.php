<?php include '../config/constants.php';?>
<?php include 'config/functions.php';?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http: //www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html lang="en" xmlns="http://www.w3.org/1999/xhtml">
<head>
    <?php include 'meta.php'?>
    <title><?php echo $thename?> | Account Login</title>
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
    <div class="graphics-div">
        <?php $callclass-> _loginSidePane($website_url, $thename);?>
    </div>

    <div class="login-div">
        <div class="form-back-div">
            <?php $page='login';?>
            <?php include 'config/page-content.php';?>
        </div>
    </div>
</section>

<?php include 'bottom-scripts.php'?>
</body>
</html>


