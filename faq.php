<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http: //www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<?php include 'config/constants.php';?>
<?php include 'config/functions.php';?>
<html lang="en" xmlns="http://www.w3.org/1999/xhtml">
<head>
    <?php include 'meta.php'?>
    <title><?php echo $thename?> | Frequently Asked Question</title>
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
    <?php  include 'header.php'?>

    <section class="other-pages" data-aos="fade-in" data-aos-duration="900">
        <div class="other-pages-back-div">
            <div class="top-title">
                <div class="div-in">
                    <ul>
                        <a href="<?php echo $website_url?>"><li title="Home">Home <i class="bi-caret-right-fill"></i></li></a>
                        <a href="<?php echo $website_url?>/faq"><li title="Frequently Asked Question">Frequently Asked Question</li></a>					
                    </ul>
                </div>			
            </div>

            <div class="main-content-back-div">
                <div class="text-content-div" data-aos="fade-in" data-aos-duration="900">
                    <h1 data-aos="fade-in" data-aos-duration="800"><span>Frequently Asked Question</span></h1>
                    <p>Find answers to the most common questions about our web hosting services. From setup and features to troubleshooting and billing, we've got you covered! If you need further assistance, feel free to contact our support team.</p>                
                  
                    <div class="btn-div">
                        <a href="<?php echo $website_url?>" title="Get Started">
                        <button class="btn" title="Get Started">Get Started <i class="bi-chevron-right"></i></button></a>
                        <a href="tel: +1(408)8783199" title="Contact Us"> 
                        <button class="btn right-btn" title="Contact Us">Contact Us <span> +1(408)8783199</span></button></a>
                    </div>             
                </div>

                <div class="image-div">
                    <img src="<?php echo $website_url?>/all-images/body-pix/call-center-support.svg" alt="<?php echo $thename?> Company" />
                </div>
            </div>    
        </div>
    </section>

 
    <section class="others-pg-content-div">
        <section class="body-div blog-body-div">
            <div class="body-div-in">
                <div class="page-back-div faq-pages-back-div">
                    <div class="right-div sticky-div">
                        <div class="div-in">
                            <h3>SEARCH</h3>
                            <div class="text_field_container">
                                <input class="text_field blog_text_field" id="search_keywords" onkeyup="_fetchListBlog();" type="text" placeholder=""/>
                                <div class="placeholder blog-placeholder">Type Here To Search</div>
                            </div>                                                               
                        </div>
                
                        <div class="div-in">
                            <h3>TAG LIST</h3>

                            <ul id="cat_id">
                                <li title="Hosting">Hosting</li> 
                                <li title="Domain">Domain</li>
                                <li title="General">General</li>
                                <li title="Announcement">Announcement</li>    
                                <li title="Services">Services</li>     
                            </ul>                                                              
                        </div>                            
                    </div> 

                    <div class="left-div">
                    <div class="general-faq-div">  
                    <div class="faq-title main-faq-title" id="faq201">
                        <div class="inner-title-div" onclick="_collapse('faq201')">
                            <h2>What types of web hosting are available?</h2>
                            <div class="expand-div" id="faq201num">&nbsp;<i class="bi-plus"></i>&nbsp;</div>	
                        </div>
                                        
                        <div class="faq-answer-div" id="faq201answer" style="display: none;">
                        <p>There are several types of web hosting, including shared hosting, VPS
                            hosting, dedicated hosting, and cloud hosting. Shared hosting is
                            budget-friendly and suitable for small sites, while VPS and dedicated
                            hosting offer more resources and control. Cloud hosting provides
                            scalability for growing sites.</p>
                        </div>
                    </div>

                    <div class="faq-title main-faq-title" id="faq202">
                        <div class="inner-title-div" onclick="_collapse('faq202')">
                            <h2>How much does it cost to develop a website?</h2>
                            <div class="expand-div" id="faq202num">&nbsp;<i class="bi-plus"></i>&nbsp;</div>	
                        </div>
                                        
                        <div class="faq-answer-div" id="faq202answer" style="display: none;">
                        <p>Website development costs vary based on complexity, design, and features.
                            Basic sites may cost a few hundred dollars, while custom or e-commerce
                            sites may range from a few thousand dollars and up, depending on the
                            project's scope and requirements.</p>
                        </div>
                    </div>

                    <div class="faq-title main-faq-title" id="faq203">
                        <div class="inner-title-div" onclick="_collapse('faq203')">
                            <h2>Do you offer support after the website is launched?</h2>
                            <div class="expand-div" id="faq203num">&nbsp;<i class="bi-plus"></i>&nbsp;</div>	
                        </div>
                                        
                        <div class="faq-answer-div" id="faq203answer" style="display: none;">
                            <p>Yes, we offer various support plans to help keep your site running
                                smoothly. This includes website maintenance, updates, backups, and
                                security monitoring to ensure optimal performance and address any issues
                                that may arise.</p>
                        </div>
                    </div>
                </div>
                    </div>
                </div>
            </div>
        </section>
        <?php include 'footer.php'?>
    </section>

</body>
</html>


