<?php
class allClass{
		
function _loginSidePane($website_url, $thename){?>
	<div class="content" data-aos="fade-left" data-aos-duration="800">
        <a href="<?php echo $website_url?>">
        <div class="logo-div"><img src="<?php echo $website_url?>/all-images/images/logo.png" alt="<?php echo $thename?> Logo"/></div></a>
        <div class="graphics" data-aos="fade-left" data-aos-duration="1200"><img src="<?php echo $website_url?>/all-images/body-pix/login-img.png" alt="Login"/></div>
        <h2>Manage Your Hosting <span>Right at Your Fingertips!</span></h2>
    </div>
<?php }


}//end of class
$callclass=new allClass();
?>
