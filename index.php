<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http: //www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html lang="en" xmlns="http://www.w3.org/1999/xhtml">
<?php include 'config/constants.php'; ?>
<?php include 'config/functions.php'; ?>

<head>
    <?php include 'meta.php' ?>
    <title><?php echo $thename ?> | Custom Website Development and SEO Services in USA</title>
    <meta name="keywords" content="<?php echo $thename ?>, web studeio, Custom website builder, Custom website developer, Website Development company in USA, Website Development consultant in USA, Website listing, Digital marketing company in USA, Web Design, Website SEO booting company, Website builder in USA, Website consulting services in USA, Custom website development company, website development experts in USA, website booster, website booster company, SEO consultant in USA, SEO Consulting company in USA" />
    <meta name="description" content="Boost Your Online Presence with Our Custom Website Development and SEO Services ensure your website ranks higher on search engines and attracts more traffic." />

    <meta property="og:title" content="<?php echo $thename ?> |  Custom Website Development and SEO Services in USA" />
    <meta property="og:image" content="<?php echo $website_url ?>/all-images/plugin-pix/webliststudio.jpg" />
    <meta property="og:description" content="Boost Your Online Presence with Our Custom Website Development and SEO Services ensure your website ranks higher on search engines and attracts more traffic." />

    <meta name="twitter:title" content="<?php echo $thename ?> |  Custom Website Development and SEO Services in USA" />
    <meta name="twitter:card" content="<?php echo $thename ?>" />
    <meta name="twitter:image" content="<?php echo $website_url ?>/all-images/plugin-pix/webliststudio.jpg" />
    <meta name="twitter:description" content="Boost Your Online Presence with Our Custom Website Development and SEO Services ensure your website ranks higher on search engines and attracts more traffic." />
</head>

<body>

    <?php include 'header.php' ?>

    <section class="slide-section">
        <div class="slide-div">
            <div class="content-back-div">
                <div class="text-content-div animated fadeIn">
                    <div>
                        <div class="top-title"><i class="bi-bell-fill"></i><span> <strong>30% Discount</strong> first
                                annual purchase</span></div>
                    </div>
                    <h1>Unlimited Domain & Hosting in One Platform</h1>
                    <p>A ton of website hosting options, 99.9% uptime guarantee, free SSL certificate, easy WordPress
                        installs.</p>

                    <div class="btn-div">
                        <a href="<?php echo $website_url ?>" title="Start as a student">
                            <button class="btn" title="Get Started">Get Started <i
                                    class="bi-chevron-right"></i></button></a>
                        <a href="#" title="Get Started">
                            <button class="btn right-btn" title="Download the App">Download the App <span>It's
                                    Free!</span></button></a>
                    </div>
                </div>
                <div class="image-content-div animated fadeIn">
                    <img src="<?php echo $website_url ?>/all-images/body-pix/slide-img1.png"
                        alt="<?php echo $thename ?>" />
                </div>
            </div>
        </div>
    </section>

    <section class="index-content-div">

        <div class="domain-search-div animated fadeInUp">
            <div class="div-in">
                <div class="domain-action-title">
                    <div class="action-div">
                        <button class="btn activeBtn">Register Domain</button>
                        <button class="btn">Transfer Domain</button>
                    </div>

                    <div class="domain-tag-back-div">
                        <a href="<?php echo $website_url ?>/#">
                            <div class="domain-tag" onclick="_back_to_top();">
                                <h4><span>.</span>com</h4>
                                <span>$8.99</span>
                            </div>
                        </a>

                        <a href="<?php echo $website_url ?>/#">
                            <div class="domain-tag" onclick="_back_to_top();">
                                <h4><span>.</span>online</h4>
                                <span>$8.99</span>
                            </div>
                        </a>

                        <a href="<?php echo $website_url ?>/#">
                            <div class="domain-tag" onclick="_back_to_top();">
                                <h4><span>.</span>net</h4>
                                <span>$4.99</span>
                            </div>
                        </a>

                        <a href="<?php echo $website_url ?>/#">
                            <div class="domain-tag" onclick="_back_to_top();">
                                <h4><span>.</span>org</h4>
                                <span>$2.99</span>
                            </div>
                        </a>

                        <a href="<?php echo $website_url ?>/#">
                            <div class="domain-tag" onclick="_back_to_top();">
                                <h4><span>.</span>store</h4>
                                <span>$0.99</span>
                            </div>
                        </a>
                        <a href="<?php echo $website_url ?>/#">
                            <div class="domain-tag" onclick="_back_to_top();">
                                <h4><span>.</span>app</h4>
                                <span>$0.99</span>
                            </div>
                        </a>
                        <a href="<?php echo $website_url ?>/#">
                            <div class="domain-tag" onclick="_back_to_top();">
                                <h4><span>.</span>xyz</h4>
                                <span>$0.99</span>
                            </div>
                        </a>
                    </div>

                </div>

                <div class="domain-action-body">
                    <div class="search-domain-div">
                        <div class="text_field_container domain_text_field_container">
                            <input class="text_field" type="email" id="email" placeholder="" />
                            <div class="placeholder">Domain Name</div>
                        </div>

                        <div class="text_field_container extension_text_field_container" id="selectContainer">
                            <select class="text_field selectSearch" placeholder="" id="searchDomainExt"
                                onclick="_selectOption('searchDomainExt')" style="opacity: 1;">
                                <option selected="selected" value=".com">.com</option>
                            </select>

                            <div class="placeholder">Extension</div>
                            <div class="searchPanel animated fadeIn" id="searchPanel_searchDomainExt"
                                style="display: none;">
                                <input class="searchTxt" placeholder="Type here to search"
                                    id="txtSearchValue_searchDomainExt" autocomplete="off"
                                    onkeyup="filter('searchDomainExt')">
                                <ul id="searchList_searchDomainExt" data-aos="fade-up" data-aos-duration="200"
                                    class="aos-init aos-animate">
                                    <li onclick="_clickOption('searchList_searchDomainExt', '.com', '.com')">.com</li>
                                    <li onclick="_clickOption('searchList_searchDomainExt', '.com', '.net')">.net</li>
                                    <li onclick="_clickOption('searchList_searchDomainExt', '.com', '.org')">.org</li>
                                    <li onclick="_clickOption('searchList_searchDomainExt', '.com', '.app')">.app</li>
                                    <li onclick="_clickOption('searchList_searchDomainExt', '.com', '.ng')">.ng</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <button class="btn" title="Search Domain"><i class="bi-search"></i> Search </button>
                </div>
            </div>

        </div>

        <section class="body-div">
            <div class="body-div-in">
                <div class="main-pages-back-div">
                    <div class="title-div" data-aos="fade-in" data-aos-duration="1200">
                        <h2>We Provide You World Class Best Hosting Features For You</h2>
                        <p>Enjoy world-class hosting with lightning-fast speed and 24/7 support—everything you need for
                            a seamless online experience!</p>
                    </div>

                    <div class="features-back-div">
                        <div class="features-div" data-aos="fade-up" data-aos-duration="900">
                            <div class="over-lay-div"></div>
                            <div class="inner-div">
                                <div class="icon-div"><i class="bi-boxes"></i></div>
                                <h3>Fully Functional</h3>
                                <p>Get fully functional web hosting with robust features and easy setup. Host your
                                    website confidently with reliable performance.</p>
                            </div>
                        </div>

                        <div class="features-div" data-aos="fade-up" data-aos-duration="1000">
                            <div class="over-lay-div"></div>
                            <div class="inner-div">
                                <div class="icon-div"><i class="bi-headset"></i></div>
                                <h3>24/7 Live Chat</h3>
                                <p>Access 24/7 live chat support for immediate assistance. Get your questions answered
                                    anytime with our dedicated team.</p>
                            </div>
                        </div>

                        <div class="features-div" data-aos="fade-up" data-aos-duration="1200">
                            <div class="over-lay-div"></div>
                            <div class="inner-div">
                                <div class="icon-div"><i class="bi-shield-lock-fill"></i></div>
                                <h3>Secure Data</h3>
                                <p>Keep your information safe with secure data protection. Enjoy peace of mind knowing
                                    your data is safeguarded at all times.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="body-div plan-body-div">
            <div class="body-div-in">
                <div class="main-pages-back-div">
                    <div class="title-div" data-aos="fade-in" data-aos-duration="1200">
                        <h2>Check Out Awesome Web Hosting Plans, And Order Now</h2>
                        <p>chose which package is best for you.</p>
                    </div>

                    <div class="plan-btn-div" data-aos="fade-in" data-aos-duration="1200">
                        <button class="btn toggle active" data="monthly" title="Billed Monthly">Billed Monthly</button>
                        <button class="btn toggle" data="yearly" title="Billed Annually">Billed Annually</button>
                    </div>

                    <div class="plan-back-div monthly">
                        <div class="plan-container" data-aos="fade-in" data-aos-duration="1200">
                            <div class="inner-container">
                                <h4>Basic<br /> <span>Monthly Plan</span></h4>
                                <h2>$12.00<span>/mo</span></h2>
                                <ul>
                                    <li>Unlimited Projects</li>
                                    <li>Data Security & Backup</li>
                                    <li>SEO Experts Consult</li>
                                    <li class="slash"><span>Advance Dashboard</span> <span class="no-strike"><i
                                                class="bi-x"></i></span></li>
                                    <li class="slash"><span>Lifetime Support</span> <span class="no-strike"><i
                                                class="bi-x"></i></span></li>
                                    <li class="slash"><span>loud Hosting & Domain</span> <span class="no-strike"><i
                                                class="bi-x"></i></span></li>
                                </ul>
                                <a href="<?php echo $website_url ?>">
                                    <button class="btn" title="Get Started Now">Get Started Now</button></a>
                            </div>
                        </div>

                        <div class="plan-container" data-aos="fade-in" data-aos-duration="1200">
                            <div class="inner-container">
                                <h4>Standard<br /> <span>Monthly Plan</span></h4>
                                <h2>$30.00<span>/mo</span></h2>
                                <ul>
                                    <li>Unlimited Projects</li>
                                    <li>Data Security & Backup</li>
                                    <li>SEO Experts Consult</li>
                                    <li>Advance Dashboard</li>
                                    <li class="slash"><span>Lifetime Support</span> <span class="no-strike"><i
                                                class="bi-x"></i></span></li>
                                    <li class="slash"><span>loud Hosting & Domain</span> <span class="no-strike"><i
                                                class="bi-x"></i></span></li>
                                </ul>
                                <a href="<?php echo $website_url ?>">
                                    <button class="btn" title="Get Started Now">Get Started Now</button></a>
                            </div>
                        </div>

                        <div class="plan-container active" data-aos="fade-in" data-aos-duration="1200">
                            <div class="inner-container">
                                <h4>Advanced<br /> <span>Monthly Plan</span></h4>
                                <h2>$50.00<span>/mo</span></h2>
                                <ul>
                                    <li>Unlimited Projects</li>
                                    <li>Data Security & Backup</li>
                                    <li>SEO Experts Consult</li>
                                    <li>Advance Dashboard</li>
                                    <li>Lifetime Support</li>
                                    <li>Cloud Hosting & Domain</li>
                                </ul>
                                <a href="<?php echo $website_url ?>">
                                    <button class="btn" title="Get Started Now">Get Started Now</button></a>
                            </div>
                        </div>
                    </div>

                    <div class="plan-back-div yearly" style="display: none;">
                        <div class="plan-container ">
                            <div class="inner-container">
                                <h4>Basic<br /> <span>Annually Plan</span></h4>
                                <h2>$144.00<span>/mo</span></h2>
                                <ul>
                                    <li>Unlimited Projects</li>
                                    <li>Data Security & Backup</li>
                                    <li>SEO Experts Consult</li>
                                    <li class="slash"><span>Advance Dashboard</span> <span class="no-strike"><i
                                                class="bi-x"></i></span></li>
                                    <li class="slash"><span>Lifetime Support</span> <span class="no-strike"><i
                                                class="bi-x"></i></span></li>
                                    <li class="slash"><span>loud Hosting & Domain</span> <span class="no-strike"><i
                                                class="bi-x"></i></span></li>
                                </ul>
                                <a href="<?php echo $website_url ?>">
                                    <button class="btn" title="Get Started Now">Get Started Now</button></a>
                            </div>
                        </div>

                        <div class="plan-container">
                            <div class="inner-container">
                                <h4>Standard<br /> <span>Annually Plan</span></h4>
                                <h2>$360.00<span>/mo</span></h2>
                                <ul>
                                    <li>Unlimited Projects</li>
                                    <li>Data Security & Backup</li>
                                    <li>SEO Experts Consult</li>
                                    <li>Advance Dashboard</li>
                                    <li class="slash"><span>Lifetime Support</span> <span class="no-strike"><i
                                                class="bi-x"></i></span></li>
                                    <li class="slash"><span>loud Hosting & Domain</span> <span class="no-strike"><i
                                                class="bi-x"></i></span></li>
                                </ul>
                                <a href="<?php echo $website_url ?>">
                                    <button class="btn" title="Get Started Now">Get Started Now</button></a>
                            </div>
                        </div>

                        <div class="plan-container active">
                            <div class="inner-container">
                                <h4>Advanced<br /> <span>Annually Plan</span></h4>
                                <h2>$600.00<span>/mo</span></h2>
                                <ul>
                                    <li>Unlimited Projects</li>
                                    <li>Data Security & Backup</li>
                                    <li>SEO Experts Consult</li>
                                    <li>Advance Dashboard</li>
                                    <li>Lifetime Support</li>
                                    <li>Cloud Hosting & Domain</li>
                                </ul>
                                <a href="<?php echo $website_url ?>">
                                    <button class="btn" title="Get Started Now">Get Started Now</button></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <script>
                _planToggle();
            </script>
        </section>

        <?php $callclass->_weblist_company($website_url); ?>

        <section class="body-div net-bg-br">
            <div class="body-div-in">
                <div class="main-pages-back-div">
                    <div class="title-div" data-aos="fade-in" data-aos-duration="1200">
                        <h2>The services we offer are specifically designed to meet your needs.</h2>
                        <p>Our services are tailored to meet your unique needs, ensuring a customized and effective
                            solution just for you.</p>
                    </div>

                    <div class="service-back-div">
                        <div class="service-div" data-aos="fade-in" data-aos-duration="1000">
                            <div class="image-div">
                                <img src="<?php echo $website_url ?>/all-images/body-pix/web-development.webp"
                                    alt="Custom Website Development" />
                            </div>

                            <div class="icon-div">
                                <img src="<?php echo $website_url ?>/all-images/images/icon.png" alt="First Cuture Logo" />
                            </div>

                            <div class="service-text-div">
                                <h3>Custom Website Development</h3>
                                <p>Our website development service is designed to help your business succeed in the
                                    digital world.</p>
                                <a href="#" title="Read More">
                                    <button class="btn" title="Read More">Read More <i
                                            class="bi-arrow-right"></i></button></a>
                            </div>
                        </div>

                        <div class="service-div" data-aos="fade-in" data-aos-duration="800">
                            <div class="image-div">
                                <img src="<?php echo $website_url ?>/all-images/body-pix/seo.jpg"
                                    alt="Website SEO and Management" />
                            </div>

                            <div class="icon-div">
                                <img src="<?php echo $website_url ?>/all-images/images/icon.png" alt="First Cuture Logo" />
                            </div>

                            <div class="service-text-div">
                                <h3>Website SEO and Management</h3>
                                <p>Our website development service is designed to help your business succeed in the
                                    digital world.</p>
                                <a href="#" title="Read More">
                                    <button class="btn" title="Read More">Read More <i
                                            class="bi-arrow-right"></i></button></a>
                            </div>
                        </div>

                        <div class="service-div" data-aos="fade-in" data-aos-duration="900">
                            <div class="image-div">
                                <img src="<?php echo $website_url ?>/all-images/body-pix/web-hosting.jpg"
                                    alt="Web Hosting and Server Management" />
                            </div>

                            <div class="icon-div">
                                <img src="<?php echo $website_url ?>/all-images/images/icon.png" alt="First Cuture Logo" />
                            </div>

                            <div class="service-text-div">
                                <h3>Web Hosting and Server Management</h3>
                                <p>Our website development service is designed to help your business succeed in the
                                    digital world.</p>
                                <a href="#" title="Read More">
                                    <button class="btn" title="Read More">Read More <i
                                            class="bi-arrow-right"></i></button></a>
                            </div>
                        </div>

                        <div class="service-div" data-aos="fade-in" data-aos-duration="1200">
                            <div class="image-div">
                                <img src="<?php echo $website_url ?>/all-images/body-pix/cms.jpeg"
                                    alt="CMS Development And Management" />
                            </div>

                            <div class="icon-div">
                                <img src="<?php echo $website_url ?>/all-images/images/icon.png" alt="First Cuture Logo" />
                            </div>

                            <div class="service-text-div">
                                <h3>CMS Development And Management</h3>
                                <p>Our website development service is designed to help your business succeed in the
                                    digital world.</p>
                                <a href="#" title="Read More">
                                    <button class="btn" title="Read More">Read More <i
                                            class="bi-arrow-right"></i></button></a>
                            </div>
                        </div>

                        <div class="service-div" data-aos="fade-in" data-aos-duration="900">
                            <div class="image-div">
                                <img src="<?php echo $website_url ?>/all-images/body-pix/digital-marketing.webp"
                                    alt="Digital Marketing and Media Brands" />
                            </div>

                            <div class="icon-div">
                                <img src="<?php echo $website_url ?>/all-images/images/icon.png" alt="First Cuture Logo" />
                            </div>

                            <div class="service-text-div">
                                <h3>Digital Marketing and Media Brands</h3>
                                <p>Our website development service is designed to help your business succeed in the
                                    digital world.</p>
                                <a href="#" title="Read More">
                                    <button class="btn" title="Read More">Read More <i
                                            class="bi-arrow-right"></i></button></a>
                            </div>
                        </div>

                        <div class="service-div" data-aos="fade-in" data-aos-duration="900">
                            <div class="image-div">
                                <img src="<?php echo $website_url ?>/all-images/body-pix/payment-platform.jpg"
                                    alt="Payment Platform Integration" />
                            </div>

                            <div class="icon-div">
                                <img src="<?php echo $website_url ?>/all-images/images/icon.png" alt="First Cuture Logo" />
                            </div>

                            <div class="service-text-div">
                                <h3>Payment Platform Integration</h3>
                                <p>Our website development service is designed to help your business succeed in the
                                    digital world.</p>
                                <a href="#" title="Read More">
                                    <button class="btn" title="Read More">Read More <i
                                            class="bi-arrow-right"></i></button></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="body-div light-body">
            <div class="body-div-in">
                <div class="about-back-div">
                    <div class="about-div">
                        <div class="image-div" data-aos="fade-in" data-aos-duration="1200">
                            <img src="<?php echo $website_url ?>/all-images/body-pix/about.svg" alt="About Us" />
                        </div>
                        <div class="about-content-div" data-aos="fade-up" data-aos-duration="1000">
                            <div><span class="top-title">ABOUT US</span></div>
                            <h2>99% Cloud Hosing High-speed Cutting-edge Platform </h2>
                            <p>Welcome to Weblist Studio, your go-to for software development, web/app solutions,
                                networking, security, and ICT training. We simplify business operations and empower
                                individuals with essential tech skills.</p>
                            <div class="about-details-back-div">
                                <div class="text-div" data-aos="fade-in" data-aos-duration="1200">
                                    <div>
                                        <div class="top-div">
                                            <h4>OUR VISION</h4>
                                        </div>
                                    </div>
                                    <p>Weblist Studio simplifies daily operations through technology, making them
                                        accessible to all. We develop teams based on skill levels and business needs,
                                        aiming to build ICT capacity for individuals and organizations.</p>
                                </div>

                                <div class="text-div mission-text" data-aos="fade-in" data-aos-duration="1200">
                                    <div>
                                        <div class="top-div mission-top">
                                            <h4>OUR MISSION</h4>
                                        </div>
                                    </div>
                                    <p>Our mission at Weblist Studio is to deliver innovative technology solutions,
                                        empower individuals with ICT skills, and simplify business operations through
                                        software development and expert training programs.</p>
                                </div>

                            </div>
                            <div>
                                <a href="<?php echo $website_url ?>/about" title="Learn More">
                                    <button class="btn" title="Learn More">Learn More <i
                                            class="bi-arrow-right"></i></button></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="body-div net-bg-br">
            <div class="body-div-in">
                <div class="about-back-div">
                    <div class="about-div">
                        <div class="about-content-div values-content-div" data-aos="fade-up" data-aos-duration="1000">
                            <div><span class="top-title">OUR CORE VALUES</span></div>
                            <h2>Why Choose Us for Web and Domain Hosting</h2>
                            <p>Discover our core values that set us apart in providing reliable, secure, and efficient
                                web and domain hosting services for your online presence.</p>

                            <div class="progress-back-div">
                                <div class="progress-container">
                                    <div class="progress-item">
                                        <span class="title">Uptime Reliability</span>
                                        <div class="progress-bar">
                                            <div class="progress-per" data-text="99">99</div>
                                        </div>
                                    </div>
                                </div>
                                <div class="progress-container">
                                    <div class="progress-item">
                                        <span class="title">Customer Satisfaction</span>
                                        <div class="progress-bar">
                                            <div class="progress-per" data-text="95">95</div>
                                        </div>
                                    </div>
                                </div>
                                <div class="progress-container">
                                    <div class="progress-item">
                                        <span class="title">Support Responsiveness</span>
                                        <div class="progress-bar">
                                            <div class="progress-per" data-text="92">92</div>
                                        </div>
                                    </div>
                                </div>
                                <div class="progress-container">
                                    <div class="progress-item">
                                        <span class="title">Security Standards</span>
                                        <div class="progress-bar">
                                            <div class="progress-per" data-text="88">88</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="image-div" data-aos="fade-in" data-aos-duration="1200">
                            <img src="<?php echo $website_url ?>/all-images/body-pix/status-image.svg"
                                alt="Our Core Values" />
                        </div>
                    </div>
                </div>
            </div>
            <script>
                _progressBar();
            </script>
        </section>

        <section class="body-div net-bg-tr">
            <div class="body-div-in">
                <div class="main-pages-back-div">
                    <div class="faq-back-div">
                        <div class="faq-div">

                            <div class="right-container" data-aos="fade-up" data-aos-duration="1200">
                                <div class="faq-title">
                                    <div><span class="top-title">FAQ</span></div>
                                    <h2>Frequently asked some questions?</h2>
                                </div>

                                <div class="faq-toggle-back">
                                    <div class="faq-toggle" id="faq201">
                                        <div class="title-text" onclick="_collapse('faq201')">
                                            <h3>What types of web hosting are available?</h3>
                                            <div class="expand-div" id="faq201num">
                                                <i class="bi-plus"></i>
                                            </div>
                                        </div>
                                        <div class="answer-div" id="faq201answer">
                                            <p>There are several types of web hosting, including shared hosting, VPS
                                                hosting, dedicated hosting, and cloud hosting. Shared hosting is
                                                budget-friendly and suitable for small sites, while VPS and dedicated
                                                hosting offer more resources and control. Cloud hosting provides
                                                scalability for growing sites.</p>
                                        </div>
                                    </div>

                                    <div class="faq-toggle" id="faq202">
                                        <div class="title-text" onclick="_collapse('faq202')">
                                            <h3>How much does it cost to develop a website?</h3>
                                            <div class="expand-div" id="faq202num">
                                                <i class="bi-plus"></i>
                                            </div>
                                        </div>
                                        <div class="answer-div" id="faq202answer">
                                            <p>Website development costs vary based on complexity, design, and features.
                                                Basic sites may cost a few hundred dollars, while custom or e-commerce
                                                sites may range from a few thousand dollars and up, depending on the
                                                project's scope and requirements.</p>
                                        </div>
                                    </div>

                                    <div class="faq-toggle" id="faq204">
                                        <div class="title-text" onclick="_collapse('faq204')">
                                            <h3>Do you offer support after the website is launched?</h3>
                                            <div class="expand-div" id="faq204num">
                                                <i class="bi-plus"></i>
                                            </div>
                                        </div>
                                        <div class="answer-div" id="faq204answer">
                                            <p>Yes, we offer various support plans to help keep your site running
                                                smoothly. This includes website maintenance, updates, backups, and
                                                security monitoring to ensure optimal performance and address any issues
                                                that may arise.</p>
                                        </div>
                                    </div>
                                </div>
                                <a href="<?php echo $website_url ?>/faq" title="Read More FAQ">
                                    <button class="btn" title="Read More FAQ">Read More FAQ <i
                                            class="bi-arrow-right"></i></button></a>
                            </div>

                            <div class="left-image-div" data-aos="fade-in" data-aos-duration="1200">
                                <img src="<?php echo $website_url ?>/all-images/body-pix/faq.svg"
                                    alt="Frequently Asked Question" />
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="body-div net-bg-bl">
            <div class="body-div-in">
                <div class="main-pages-back-div">
                    <div class="testimonial">
                        <div class="content" data-aos="fade-up" data-aos-duration="1400">
                            <div>
                                <div class="title">
                                    <span>TESTIMONY</span>
                                </div>
                            </div>
                            <h2>What Our Client Say About Us</h2>
                            <p>Discover a diverse range of online tutor in Nigeria, connecting you to expert educators
                                and valuable resources. Join the digital education revolution and unlock new
                                possibilities with convenient and flexible online learning experiences right at
                                your fingertips.</p>
                            <button class="btn" title="See how it works">View All<i class="bi-arrow-right"></i></button>
                        </div>

                        <div class="right-back-div">
                            <div class="cg-carousel">
                                <div class="cg-carousel__container" id="js-carousel_3">
                                    <div class="cg-carousel__track js-carousel__track">

                                        <div class="cg-carousel__slide js-carousel__slide" data-aos="fade-left"
                                            data-aos-duration="1200">
                                            <div class="main-testimonial">
                                                <div class="img-back-div">
                                                    <div class="img-div">
                                                        <img src="<?php echo $website_url ?>/all-images/images/avatar.png"
                                                            alt="testimonial" />
                                                    </div>

                                                    <div class="icon">
                                                        <i class="bi-quote"></i>
                                                    </div>
                                                </div>

                                                <p>Leaders Tutors has revolutionized my learning journey. The online
                                                    classes empower me to grow personally and professionally.</p>

                                                <div class="bottom-div">
                                                    <div class="star-div">
                                                        <i class="bi-star-fill"></i>
                                                        <i class="bi-star-fill"></i>
                                                        <i class="bi-star-fill"></i>
                                                        <i class="bi-star-fill"></i>
                                                        <i class="bi-star-fill"></i>
                                                    </div>

                                                    <h5>Barry Job</h5>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="cg-carousel__slide js-carousel__slide" data-aos="fade-left"
                                            data-aos-duration="1200">
                                            <div class="main-testimonial">
                                                <div class="img-back-div">
                                                    <div class="img-div">
                                                        <img src="<?php echo $website_url ?>/all-images/images/avatar.png"
                                                            alt="testimonial" />
                                                    </div>

                                                    <div class="icon">
                                                        <i class="bi-quote"></i>
                                                    </div>
                                                </div>

                                                <p>With Leaders Tutors, I found the perfect after-school lesson for my
                                                    children. The resources are top-notch, and the results speak for
                                                    themselves.</p>

                                                <div class="bottom-div">
                                                    <div class="star-div">
                                                        <i class="bi-star-fill"></i>
                                                        <i class="bi-star-fill"></i>
                                                        <i class="bi-star-fill"></i>
                                                        <i class="bi-star-fill"></i>
                                                        <i class="bi-star-fill"></i>
                                                    </div>

                                                    <h5>Paul Emmanuel</h5>
                                                </div>
                                            </div>
                                        </div>


                                        <div class="cg-carousel__slide js-carousel__slide" data-aos="fade-left"
                                            data-aos-duration="1200">
                                            <div class="main-testimonial">
                                                <div class="img-back-div">
                                                    <div class="img-div">
                                                        <img src="<?php echo $website_url ?>/all-images/images/avatar.png"
                                                            alt="testimonial" />
                                                    </div>

                                                    <div class="icon">
                                                        <i class="bi-quote"></i>
                                                    </div>
                                                </div>

                                                <p>Leaders Tutors surpassed all my expectations. I've gained valuable
                                                    knowledge that are making a real difference in my career.</p>

                                                <div class="bottom-div">
                                                    <div class="star-div">
                                                        <i class="bi-star-fill"></i>
                                                        <i class="bi-star-fill"></i>
                                                        <i class="bi-star-fill"></i>
                                                        <i class="bi-star-fill"></i>
                                                        <i class="bi-star-fill"></i>
                                                    </div>

                                                    <h5>Afolabi Taiwo</h5>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="cg-carousel__slide js-carousel__slide" data-aos="fade-left"
                                            data-aos-duration="1200">
                                            <div class="main-testimonial">
                                                <div class="img-back-div">
                                                    <div class="img-div">
                                                        <img src="<?php echo $website_url ?>/all-images/images/avatar.png"
                                                            alt="testimonial" />
                                                    </div>

                                                    <div class="icon">
                                                        <i class="bi-quote"></i>
                                                    </div>
                                                </div>

                                                <p>The online classes are engaging, informative, and have helped me
                                                    advance my studies in ways I never thought possible.</p>

                                                <div class="bottom-div">
                                                    <div class="star-div">
                                                        <i class="bi-star-fill"></i>
                                                        <i class="bi-star-fill"></i>
                                                        <i class="bi-star-fill"></i>
                                                        <i class="bi-star-fill"></i>
                                                        <i class="bi-star-fill"></i>
                                                    </div>

                                                    <h5>Semako Samuel</h5>
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <script>
                window['carousel_options_3'] = ({
                    items: 4,
                    margin: 30,
                    loop: true,
                    dots: true,
                    autoplayHoverPause: true,
                    smartSpeed: 650,
                    autoplay: true,
                    breakpoints: {
                        700: {
                            slidesPerView: 1,
                        },
                        1100: {
                            slidesPerView: 1,
                        },
                        1300: {
                            slidesPerView: 2,
                        }

                    }
                });
                _call_carousel(3);
            </script>
        </section>



        <section class="body-div net-bg-tl">
            <div class="body-div-in">
                <div class="main-pages-back-div">
                    <div class="blog-title" data-aos="fade-in" data-aos-duration="1200">

                        <div class="top-title">
                            <div>
                                <span>LATEST INSIGHTS</span>
                            </div>
                            <h2>Our Latest News And Articles</h2>
                        </div>

                        <a href="" title="Explore All Blogs">
                            <button class="btn" title="Explore All Blogs">Explore All Blogs <i
                                    class="bi-arrow-right"></i></button></a>
                    </div>

                    <div class="blog-back-div">
                        <div class="blog-div" data-aos="fade-in" data-aos-duration="1000">
                            <div class="blog-inner-div">
                                <div class="image-div">
                                    <img src="<?php echo $website_url ?>/all-images/blog/blog_1.jpg" alt="Blog" />
                                </div>

                                <div class="text-div">
                                    <div class="count"><i class="bi-calendar3"></i> 01 Aug, 2024 <span>|</span> <i
                                            class="bi-eye-fill"></i> 250 VIEWS</div>
                                    <h3>Maximizing Business Efficiency Through Custom Software Development</h3>

                                    <a href="<?php echo $website_url ?>/blog/maximizing-business-efficiency-through-custom-software-development" title="Maximizing Business Efficiency Through Custom Software Development">
                                        <button class="btn" title="Read More">Read More <i
                                                class="bi-arrow-right"></i></button></a>
                                </div>
                            </div>
                        </div>

                        <div class="blog-div" data-aos="fade-in" data-aos-duration="1000">
                            <div class="blog-inner-div">
                                <div class="image-div">
                                    <img src="<?php echo $website_url ?>/all-images/blog/blog_2.png" alt="Blog" />
                                </div>

                                <div class="text-div">
                                    <div class="count"><i class="bi-calendar3"></i> 01 Aug, 2024 <span>|</span> <i
                                            class="bi-eye-fill"></i> 50 VIEWS</div>
                                    <h3>Enhancing Digital Transformation with Scalable Cloud Solutions for Modern
                                        Enterprises</h3>

                                    <a href="<?php echo $website_url ?>" title="Read More">
                                        <button class="btn" title="Read More">Read More <i
                                                class="bi-arrow-right"></i></button></a>
                                </div>
                            </div>
                        </div>

                        <div class="blog-div" data-aos="fade-in" data-aos-duration="1000">
                            <div class="blog-inner-div">
                                <div class="image-div">
                                    <img src="<?php echo $website_url ?>/all-images/blog/blog_3.jpeg" alt="Blog" />
                                </div>

                                <div class="text-div">
                                    <div class="count"><i class="bi-calendar3"></i> 01 Aug, 2024 <span>|</span> <i
                                            class="bi-eye-fill"></i> 200 VIEWS</div>
                                    <h3>Leveraging Cutting-Edge Cybersecurity Strategies to Protect Your Business in a
                                        Digital World</h3>

                                    <a href="<?php echo $website_url ?>" title="Read More">
                                        <button class="btn" title="Read More">Read More <i
                                                class="bi-arrow-right"></i></button></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <?php $callclass->_weblist_partners($website_url); ?>
        <br clear="all" />
        <?php include 'footer.php' ?>
    </section>

</body>

</html>