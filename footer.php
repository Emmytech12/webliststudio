
<footer class="footer-div">  
    <div class="footer-div-in"> 
        <div class="segment-back-div">
            <div class="segment-div">
                <div class="logo-div"><img src="<?php echo $website_url?>/all-images/images/logo.png" alt="<?php $thename?> Logo"></div>
                <p>Boost Your Online Presence with Our Custom Website Development and SEO Services ensure your website ranks higher on search engines and attracts more traffic.</p>
               
                <div class="icon-div">
                    <button class="social-icon"><i class="bi-facebook"></i></button>
                    <button class="social-icon"><i class="bi-whatsapp"></i></button>
                    <button class="social-icon"><i class="bi-instagram"></i></button>
                    <button class="social-icon"><i class="bi-linkedin"></i></button>
                    <button class="social-icon"><i class="bi-twitter"></i></button>
                </div>
            </div>

            <div class="segment-div">
                <h3>Quick Link</h3>
                <ul>
                    <a href="<?php echo $website_url?>" title="Account SignUp / Login">
                    <li><i class="bi-arrow-right"></i> Account SignUp / Login</li></a>
                    <a href="<?php echo $website_url?>/contact-us" title="Contact Us">
                    <li><i class="bi-arrow-right"></i> Contact Us</li></a>
                    <a href="<?php echo $website_url?>/about" title="About Us">
                    <li><i class="bi-arrow-right"></i> About Us</li></a>
                    <a href="<?php echo $website_url?>" title="Review Us">
                    <li><i class="bi-arrow-right"></i> Review US</li></a>
                    <a href="<?php echo $website_url?>/blog/" title="Blog">
                    <li><i class="bi-arrow-right"></i> Blog & Articles</li></a>
                    <a href="<?php echo $website_url?>/faq" title="Frequently Asked Questions">
                    <li><i class="bi-arrow-right"></i> Frequently Asked Questions</li></a>                   
                </ul>
            </div>

            <div class="segment-div services">
                <h3>Our Services</h3>
                <ul>
                    <a href="<?php echo $website_url?>" title="Custom Website Development">
                    <li><i class="bi-arrow-right"></i> Custom Website Development</li></a>
                    <a href="<?php echo $website_url?>" title="Website SEO and Management">
                    <li><i class="bi-arrow-right"></i> Website SEO and Management</li></a>
                    <a href="<?php echo $website_url?>" title="Web Hosting and Server Management">
                    <li><i class="bi-arrow-right"></i> Web Hosting and Server Management</li></a>                  
                    <a href="<?php echo $website_url?>" title="CMS Development And Management">
                    <li><i class="bi-arrow-right"></i> CMS Development And Management</li></a>       
                    <a href="<?php echo $website_url?>" title="Digital Marketing and Media Brands">
                    <li><i class="bi-arrow-right"></i>Digital Marketing and Media Brands</li></a>  
                    <a href="<?php echo $website_url?>" title="Di Payment Platform Integration">
                    <li><i class="bi-arrow-right"></i> Payment Platform Integration</li></a>                              
                </ul>
            </div>

            <div class="segment-div">
                <h3>Quick Conatct</h3>

                <div class="contact">
                    <div class="icon"><i class="bi-envelope-at"></i></div>
                    <div class="text-div">
                        <h4>Email Address</h4>
                        info@webliststudio.com
                    </div>
                </div>

                <div class="contact">
                    <div class="icon"><i class="bi-telephone-inbound"></i></div>
                    <div class="text-div">
                        <h4>Phone Number</h4>
                        +1(408)8783199
                    </div>
                </div>

                <div class="contact">
                    <div class="icon"><i class="bi-geo-alt"></i></div>
                    <div class="text-div">
                        <h4>Location</h4>
                        San Fransisco, USA.
                    </div>
                </div>

                <h3>Newsletter</h3>

                <div class="newsletter-text-div">
                    <div class="footer_text_field_container">
                        <input class="footer_text_field" type="email" id="email" placeholder="" />
                        <div class="placeholder">Enter Your Email</div>
                    </div>
                    <button class="btn" title="Send Mail" onclick=""><i class="bi-send"></i></button>
                </div>
            </div>
            <br clear="all" />
        </div>
    </div>
    <div class="main-bottom-div">
        <div class="div-in">
            <p>&copy; 2022 - <?php echo date("Y") ?> <span><?php echo $thename?></span>. All Rights Reserved.</p>
        </div>
    </div>
</footer>

<?php include 'bottom-scripts.php'?>