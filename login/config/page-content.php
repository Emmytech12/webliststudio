
<?php if($page=='login'){?>
    <div class="form-div animated fadeIn" id="view_login" data-aos="fade-right" data-aos-duration="1600">
        <div class="top-div">
            <h1>👋 Hi Welcome Back!</h1>                   
        </div>
        
        <div class="inner-form">
            <div class="alert alert-success">
                Kindly, provide your <span>Email Address</span> to Login
            </div>
            
            <div class="text_field_container">
                <input class="text_field" type="email" id="email" placeholder=""/>
                <div class="placeholder">Email Your Email Address:</div>
            </div>
                
            <div class="text_field_container">
                <input class="text_field" type="email" id="email" placeholder=""/>
                <div class="placeholder">Enter Your Password:</div>
            </div> 

            <button class="btn" id="" title="Log In" onclick="">Log In <i class="bi-check"></i></button>
            <div class="forgot-pass" onclick="_next_page('reset_password_info');">Forgot Password?</div>
        </div>
        <p>Don't have an account? <a href="<?php echo $website_url?>/sign-up"><span>Sign-Up</span></p></a>
        <div class="bottom-container">Google reCAPTCHA used. <span>Privacy Policy </span> and <span>Terms of Service</span> apply.</div>
    </div>    

    <div class="form-div animated fadeIn" id="reset_password_info" data-aos="fade-right" data-aos-duration="1600">
        <div class="top-div">
            <h1> Reset Password</h1>                
        </div>
        
        <div class="inner-form">
            <div class="alert alert-success">
                Kindly, provide your <span>Email Address</span> to reset your password
            </div>
            
            <div class="text_field_container">
                <input class="text_field" type="email" id="email" placeholder=""/>
                <div class="placeholder">Email Your Email Address:</div>
            </div>
                            
            <button class="btn" id="" title="Proceed" onclick="_next_page('send_link_info');">Proceed <i class="bi-arrow-right"></i></button>
            <div class="forgot-pass" onclick="_next_page('view_login');">Already have an account?</div>
        </div>
        <div class="bottom-container">Google reCAPTCHA used. <span>Privacy Policy </span> and <span>Terms of Service</span> apply.</div>
    </div>  
    
    <div class="form-div animated fadeIn" id="send_link_info" data-aos="fade-right" data-aos-duration="1600">
        <div class="inner-form email-form">
            <div class="icon-div"><i class="bi-check2-circle"></i></div> 
            <h3>Mail sent successfully</h3>
            <div class="alert alert-success email-form-alert"><i class="bi-person"></i> Dear <strong>Paul Emmanuel</strong>, 
                a link has been sent to your email address (<strong>seunemmanuel107@gmail.com</strong>) 
                to reset your password. Kindly check your <strong>INBOX</strong> or <strong>SPAM</strong> to confirm.
            </div>

            <div class="btn-div">
                <button class="btn" type="button" id="submit_btn" title="Okay" onclick="location.href='<?php echo $website_url?>/login/reset-password'"> 
                    OKAY <i class="bi-check2-all"></i>
                </button>                          
                <div class="notification"><strong>MAIL</strong> not received? <span><i class="bi-send"></i> <strong> RESEND MAIL </strong></span></div>                             
            </div> 
        </div>
    </div>
<?php }?>


<?php if($page=='password_reset_successful'){?>
    <div class="successful-div animated bounceInDown">
        <div class="success-in">
            <div class="gif">
                <img src="<?php echo $website_url?>/all-images/images/success.gif" alt="successful gif">
            </div>
            <h3>PASSWORD RESET SUCCESSFULLY</h3>
            <button class="btn" onclick="location.href='<?php echo $website_url?>/login'">OKAY <i class="bi-check2-all"></i></button>
        </div> 
    </div>
<?php }?>