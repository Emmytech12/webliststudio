
<?php if($page=='sign-up'){?>
        
    <div class="form-div animated fadeIn" id="view_login" data-aos="fade-right" data-aos-duration="1600">
        <div class="top-div">
            <h1>👋Account Sign Up!</h1>                   
        </div>
        
        <div class="inner-form">
            <div class="alert alert-success">
                Kindly fill the following information to complete your registration.
            </div>
            
            <div class="text_field_container">
                <input class="text_field" type="email" id="email" placeholder=""/>
                <div class="placeholder">Email Your Full Name:</div>
            </div>

            <div class="text_field_container">
                <input class="text_field" type="email" id="email" placeholder=""/>
                <div class="placeholder">Email Your Email Address:</div>
            </div>
                
            <div class="text_field_container">
                <input class="text_field" type="email" id="email" placeholder=""/>
                <div class="placeholder">Create a New Password:</div>
            </div> 

            <div class="text_field_container">
                <input class="text_field" type="email" id="email" placeholder=""/>
                <div class="placeholder">Confirm New Password:</div>
            </div> 

            <button class="btn" id="" title="Sign Up" onclick="">Sign Up <i class="bi-check"></i></button>
            <div class="forgot-pass sign-forgot-pass">Already have an account? <a href="<?php echo $website_url?>/login"><span> Log-In</span></div></a>
        </div>
        <div class="bottom-container">Google reCAPTCHA used. <span>Privacy Policy </span> and <span>Terms of Service</span> apply.</div>
    </div>
   
<?php }?>


