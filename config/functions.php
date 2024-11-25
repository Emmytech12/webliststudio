<?php
class allClass
{

    function _weblist_partners($website_url) { ?>
        <section class="client-body-div">
            <div class="client-body-div-in">
                <div class="logo-slider">
                    <div class="box"><img src="<?php echo $website_url?>/all-images/clients/leaderstutors.png"
                            alt="Leaders Tutors Logo"></div>
                    <div class="box"><img src="<?php echo $website_url?>/all-images/clients/1stclassic.png"
                            alt="1Stclassic Logo"></div>
                    <div class="box"><img src="<?php echo $website_url?>/all-images/clients/4-seasons.png"
                            alt="4-seasons Logo"></div>
                    <div class="box"><img src="<?php echo $website_url?>/all-images/clients/cityOne.png"
                            alt="cityOne Logo"></div>
                    <div class="box"><img src="<?php echo $website_url?>/all-images/clients/valuehandlers.png"
                            alt="Valuehandlers Logo"></div>
                    <div class="box"><img src="<?php echo $website_url?>/all-images/clients/agrohandlers.jpeg"
                            alt="Agrohandlers Logo"></div>
                    <div class="box"><img src="<?php echo $website_url?>/all-images/clients/myexamconnect.png"
                            alt="MyExamconnect Logo"></div>
                    <div class="box"><img src="<?php echo $website_url?>/all-images/clients/cglconnectlogistscis.png"
                            alt="Connect Global LogisticsLogo"></div>
                    <div class="box"><img src="<?php echo $website_url?>/all-images/clients/advancedbreed.png"
                            alt="Advancedbreed Logo"></div>
                    <div class="box"><img src="<?php echo $website_url?>/all-images/clients/compeer.png"
                            alt="Compeer Medical College Logo"></div>
                    <div class="box"><img src="<?php echo $website_url?>/all-images/clients/firstheritageculture.png"
                            alt="First Culture Logo"></div>
                    <div class="box"><img src="<?php echo $website_url?>/all-images/clients/cyrus.png"
                            alt="Cyrus Johnson Logo"></div>
                </div>
            </div>
            
            <script>
            $('.logo-slider').slick({
                slidesToShow: 5,
                slidesToScroll: 1,
                autoplay: true,
                autoplaySpeed: 0,
                speed: 3000,
                infinite: true,
                cssEase: 'linear',
                arrows: false,
                pauseOnHover: false,
                pauseOnFocus: false,
                variableWidth: true
            });
            </script>
        </section>
    <?php }

     function _weblist_company($website_url) { ?>
        <section class="body-div company-body-div">
                <div class="body-div-in">
                
                        <div class="company-back-div">
                        <div class="left-container">
                                <h2>Best Cloud Hosting With Trusted Service</h2>
                                <p>Objectively innovate high standards in methodologies vis-a-vis sustainable compellingly
                                architect front-end methods maintain multidisciplinary process proactively streamline
                                mission-critical information via quality imperatives.</p>

                                <div>
                                <a href="<?php echo $website_url?>">
                                        <button class="btn" title="Get Started Now">Get Started Now</button></a>
                                </div>
                        </div>

                        <div class="left-container">
                                <div class="image-div">
                                <img src="<?php echo $website_url?>/all-images/body-pix/company.png"
                                        alt="<?php echo $thename?> Company" />
                                </div>
                        </div>
                        </div>
                
                </div>
        </section>
    <?php }
} //end of class
$callclass = new allClass();
?>