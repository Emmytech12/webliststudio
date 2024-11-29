<?php  include 'alert.php'?>
<header class="animated fadeInDown">
    <div class="header-top-div">
        <div class="header-top-div-in">
            <div class="contacts">
                <div class="contact m-mail"><i class="bi-envelope"></i> <span>info@webliststudio.com</span></div>
                <div class="contact tel-dsp-none"><i class="bi-telephone"></i> <span>+1(408)8783199</span></div>
                <div class="contact dsp-none"><i class="bi-clock"></i> <span>Monday - Saturday <strong>12Hrs</strong></span></div>
            </div>
            
            <ul>
                <a href="#" target="_blank" title="linkedin">
                <li class="li"><i class="bi-linkedin"></i></li></a>
                <a href="#" target="_blank" title="instagram">
                <li class="li"><i class="bi-instagram"></i></li></a>
                <a href="#" target="_blank" title="facebook">
                <li><i class="bi-facebook"></i></li></a>
                <a href="#" target="_blank" title="Whatsapp">
                <li><i class="bi-whatsapp"></i></li></a>
                <a href="#" title="Call Customer Care">
                <li><i class="bi-telephone"></i></li></a>
            </ul>
        </div>
    </div>

    <div class="header-div-in">
    
            <div class="logo-div">
                <a href="<?php echo $website_url ?>"><img src="<?php echo $website_url?>/all-images/images/logo.png" alt="<?php echo $thename?> Logo"  class="animated zoomIn"/></a>   
            </div>

            <nav>
                <ul>                          
                    <a href="<?php echo $website_url ?>" title="Home Page"><li <?php if (($website_auto_url=="$website_url/index")||($website_auto_url=="$website_url/")||($website_auto_url=="$website_url")) {?> class="active" <?php }?>> Home</li></a>        
                
                    <li id="expand-li" class="hosting <?php if (strstr($website_auto_url, "$website_url/hosting")) {?> active <?php }?>">
                        <a href="<?php echo $website_url?>" title="Hosting">
                        Hosting <i class="bi-plus"></i></a> 
                        <ul class="animated fadeIn">
                            <div class="sub-nav-div">
                                <div class="left-div">
                                    <a class="hosting-div" href="<?php echo $website_url?>" title="Shared Web Hosting">                             
                                        <div class="icon-div"><i class="bi-hdd-rack-fill"></i></div>
                                        <div class="text-div">
                                            <li>Shared Web Hosting </li>  
                                            <p>Reliable Quality Starting at <strong>$2.99</strong></p>                                        
                                        </div>
                                    </a>                          
                                    
                                    <a class="hosting-div" href="<?php echo $website_url?>" title="VPS Hosting">   
                                        <div class="icon-div bg-1"><i class="bi-hdd-fill"></i></div>
                                        <div class="text-div">
                                            <li>VPS Hosting </li>  
                                            <p>Maintain Starting at <strong>$11.99</strong></p>                                        
                                        </div>                              
                                    </a>

                                    <a class="hosting-div" href="<?php echo $website_url?>" title="Cloud Hosting">   
                                        <div class="icon-div bg-2"><i class="bi-cloudy-fill"></i></div>
                                        <div class="text-div">
                                            <li>Cloud Hosting </li>  
                                            <p>Cloud Starting at <strong>$9.99/mo</strong></p>                                        
                                        </div>                             
                                    </a>
                                </div>
                                
                                <div class="left-div">
                                    <a class="hosting-div" href="<?php echo $website_url?>" title="Email Hosting">                             
                                        <div class="icon-div bg-3"><i class="bi-envelope-fill"></i></div>
                                        <div class="text-div">
                                            <li>Email Hosting </li>  
                                            <p>First Starting at <strong>$0.99/mo</strong></p>                                        
                                        </div>
                                    </a>                          
                                    
                                    <a class="hosting-div" href="<?php echo $website_url?>" title="Windows VPS Hosting">   
                                        <div class="icon-div bg-4"><i class="bi-windows"></i></div>
                                        <div class="text-div">
                                            <li>Windows VPS Hosting </li>  
                                            <p>Globally Starting at <strong>$9.99/mo</strong></p>                                        
                                        </div>                              
                                    </a>

                                    <a class="hosting-div" href="<?php echo $website_url?>" title="Dedicated Server Hosting">   
                                        <div class="icon-div bg-5"><i class="bi-server"></i></div>
                                        <div class="text-div">
                                            <li>Dedicated Server Hosting </li>  
                                            <p>Conveniently Starting at <strong>$9.99/mo</strong></p>                                        
                                        </div>                               
                                    </a>
                                </div>                        
                            </div>                          
                        </ul>            
                    </li>

                    <li id="expand-li" class="domains <?php if (strstr($website_auto_url, "$website_url/domains")) {?> active <?php }?>">
                        <a href="<?php echo $website_url?>" title="Domains">
                        Domain <i class="bi-plus"></i></a>  
                        <ul class="animated fadeIn">
                            <div class="sub-nav-div">
                                <div class="left-div">
                                    <a class="hosting-div domain-header" href="<?php echo $website_url?>" title="Domain Checker">  
                                    <div class="inner-div">
                                            <div class="icon-div"><i class="bi-globe"></i></div>
                                            <div class="text-div">
                                                <li>Domain Checker </li>  
                                            </div>
                                        </div>                           
                                        <p>Find the perfect domain for your business</p>                                            
                                    </a>                          
                                    
                                    <a class="hosting-div domain-header" href="<?php echo $website_url?>" title="Domain Transfer">   
                                        <div class="inner-div">
                                            <div class="icon-div"><i class="bi-arrow-left-right"></i></div>
                                            <div class="text-div">
                                                <li>Domain Transfer </li>  
                                            </div>
                                        </div>                           
                                        <p>Transfer your domain easily</p>                               
                                    </a>

                                    <a class="hosting-div domain-header" href="<?php echo $website_url?>" title="Domain Registration">   
                                        <div class="inner-div">
                                            <div class="icon-div"><i class="bi-c-square-fill"></i></div>
                                            <div class="text-div">
                                                <li>Domain Registration </li>  
                                            </div>
                                        </div>                           
                                        <p>Register your domain name for lifetime</p>                                        
                                    </a>
                                </div>
                                
                                <div class="left-div domain-right">
                                    <div class="inner-div">
                                        <h3>#1 Web Hosting Company</h3>
                                        <p><i class="bi-check-circle-fill"></i>&nbsp; <strong>Flexible</strong> Easy to Use Control Panel</p>
                                        <p><i class="bi-check-circle-fill"></i>&nbsp; <strong>99%</strong> Uptime Guarantee</p>
                                        <p><i class="bi-check-circle-fill"></i> &nbsp;<strong>45-Day</strong> Money-Back Guarantee</p>
                                        <p><i class="bi-check-circle-fill"></i>&nbsp; <strong>Free </strong> Certificate Included</p>

                                        <a href="<?php echo $website_url?>" class="btn-div">    
                                            <button class="learn-btn" title="Learn More">Learn More</button>
                                        </a>
                                    </div>  
                                </div>                        
                            </div>                          
                        </ul>                
                    </li>

                    <a href="<?php echo $website_url?>/services/" title="Services">
                        <li class="services <?php if (strstr($website_auto_url, "$website_url/services/")) {?> active <?php }?>">
                            Services
                        </li>
                    </a>
                    
                    <a href="<?php echo $website_url?>" title="Affliates">
                        <li class="about <?php if (strstr($website_auto_url, "$website_url/affliates")) {?> active <?php }?>">
                            Affliates
                        </li>
                    </a>

                    <li id="expand-li" class="company <?php if (strstr($website_auto_url, "$website_url/company")) {?> active <?php }?>">
                        <a href="<?php echo $website_url?>" title="Company">
                        Company <i class="bi-plus"></i></a>
                        <ul class="animated fadeIn">
                            <div class="sub-nav-div">
                                <div class="left-div">
                                    <a class="hosting-div" href="<?php echo $website_url?>/contact-us" title="Contact Us">                             
                                        <div class="icon-div icon-no-bg"><i class="bi-chat-square-text"></i></div>
                                        <div class="text-div">
                                            <li>Contact Us </li>  
                                            <p>Face any problem? contact us</p>                                       
                                        </div>
                                    </a> 

                                    <a class="hosting-div" href="<?php echo $website_url?>/about" title="About Us">                             
                                        <div class="icon-div icon-no-bg"><i class="bi-person-hearts"></i></div>
                                        <div class="text-div">
                                            <li>About Us </li>  
                                            <p>We are leading hosting company</p>                                       
                                        </div>
                                    </a> 

                                    <a class="hosting-div" href="<?php echo $website_url?>" title="Our Partners">                             
                                        <div class="icon-div icon-no-bg"><i class="bi-person-workspace"></i></div>
                                        <div class="text-div">
                                            <li>Our Partners </li>  
                                            <p>We have trusted partners globally</p>                                       
                                        </div>
                                    </a> 
                     
                                    <a class="hosting-div" href="<?php echo $website_url?>/faq" title="Frequently Asked Question ">                             
                                        <div class="icon-div icon-no-bg"><i class="bi-router"></i></div>
                                        <div class="text-div">
                                            <li>Frequently Asked Question </li>  
                                            <p>Keep your data safe and secure</p>                                       
                                        </div>
                                    </a> 

                                    <a class="hosting-div" href="<?php echo $website_url?>/blog" title="Company Blog">                             
                                        <div class="icon-div icon-no-bg"><i class="bi-journals"></i></div>
                                        <div class="text-div">
                                            <li>Company Blog </li>  
                                            <p>Industry technology latest news and tips</p>                                       
                                        </div>
                                    </a>                                    
                                </div>                                                                                
                            </div>                          
                        </ul>                  
                    </li>   
                </ul>

                <a href="<?php echo $website_url?>/account/login" title="Client Area">         
                <button class="btn" title="Client Area"><i class="bi-person-fill"></i> Client Area</button></a>
                <button class="mobile-btn" onclick="_open_menu()"><i class="bi-text-right"></i></button>
            </nav>
        
    </div>  
</header>