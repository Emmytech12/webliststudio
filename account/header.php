<?php  include '../alert.php'?>
<header class="fadeInDown animated">
    <div class="header-div-in"> 
        <div class="logo-div"><img src="<?php echo $website_url?>/all-images/images/logo.png" alt="<?php echo $thename?> logo" /></div>

        <div class="header-nav-div">
            <div class="left-icon-div">
                <div class="icon-div" onClick="" title="Products Switcher">
                    <i class="bi-microsoft"></i> Products
                </div>

                <div class="icon-div cart-icon" onClick="" title="Cart">
                    <i class="bi-cart"></i> 
                </div>
            </div>

            <div class="left-icon-div" title="Click To View Profile">
                <div class="profile-div">
                    <div class="info-div">
                        <h2>OLUWAGBENGA SUNDAY AFOLABI</h2>
                        <div class="email">afootechglobal@gmail.com</div>
                    </div>
                    <div class="name-abbr"><span>OS</span></div>
                </div>

                <div class="icon-div dot-icon" onclick="_toggle_profile_pix_div()" title="View User Profile">
                    <i class="bi-three-dots-vertical"></i> 
                </div>
            </div>

            <div class="toggle-profile-div">
                <div class="toggle-div-in">
                    <div class="title-div">
                        <div class="name-abbr"><span>OS</span></div>    
                        <div class="info-div">
                            <h2>OLUWAGBENGA SUNDAY AFOLABI</h2>
                            <div class="email">afootechglobal@gmail.com</div>
                        </div>
                    </div>

                    <div class="title-div center-div">
                        <ul>
                            <li title="Profile">Profile</li>
                            <li title="Billings">Billings</li>
                            <li title="Renewals">Renewals</li>
                            <li title="Security">Security</li>
                        </ul>
                    </div>

                    <div class="title-div bottom-div">
                        <ul>
                            <li title="Log Out">Log Out</li>
                        </ul>
                    </div>
                    
                </div>
            </div>
        </div>
    </div>
</header>
