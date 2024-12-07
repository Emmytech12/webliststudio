<?php if ($page=='dashboard'){?>
    <div class="page-title-back-div" data-aos="fade-in" data-aos-duration="1500">
        <div class="page-title-div">
            <div class="title"><span id="page-title"><i class="bi-speedometer2"></i> Admin Dashboard Overview</span></div>
            <div class="user-name">👋 Hi, <span id="login_fullname">Hon Emmanuel Paul</span></div>
            <div class="last-login"><i class="bi-clock"></i> Last Login Date | <span> 2024-11-18 03:28:41</span></div>
        </div>

        <div class="date-filter-div">
            <div class="text_field_container dash_field_container">
                <input class="text_field dash_text_field" type="text" id="datepicker-from" placeholder=""/>
                <div class="placeholder dash_placeholder"><i class="bi-calendar3"></i> From</div>
            </div>

            <div class="text_field_container dash_field_container">
                <input class="text_field dash_text_field" type="text" id="datepicker-to" placeholder=""/>
                <div class="placeholder dash_placeholder"><i class="bi-calendar3"></i> To</div>
            </div>
            
            <button class="btn" type="button" title="Search" onclick=""><i class="bi-search"></i>SEARCH</button>
        
            <script language="javascript">
                $('#datepicker-from').datetimepicker({
                    lang:'en',
                    timepicker:false,
                    format:'Y-m-d',
                    formatDate:'Y-M-d',
                });
                
                $('#datepicker-to').datetimepicker({
                    lang:'en',
                    timepicker:false,
                    format:'Y-m-d',
                    formatDate:'Y-M-d',
                });
            </script>
        </div>
    </div>
    <br clear="all"/>

    <div class="statistics-chart-back-div" data-aos="fade-in" data-aos-duration="1500">
        <div class="statistics-back-div" >
            <div class="statistics-div left-border">
                <h2>20</h2> 
                <span>Active Domain</span>
            </div>

            <div class="statistics-div">
                <h2>80</h2> 
                <span>Active Hosting</span>
            </div>

            <div class="statistics-div">
                <h2>150</h2> 
                <span>Active User</span>
            </div>

            <div class="statistics-div">
                <h2>10</h2> 
                <span>Domain Packages</span>
            </div>

            <div class="statistics-div right-border">
                <h2>30</h2> 
                <span>Hosting Packages</span>
            </div>
        </div>

        <div class="chart-back-div">
            <div class="chart-div-notifications">
                <div class="text"><i class="bi-graph-up-arrow"></i> Showing Matrix for </div> 

                <div class="text text-right" onclick="select_search()">
                    <span id="srch-text">Last 30 Days</span>              
                    <div class="icon-div"><i class="bi-caret-down"></i></div> 
                
                    <div class="srch-select alert-srch-select">
                        <div id="srch-today" onclick="_getAlertReport('srch-today', 'view_today_search');">Today</div>
                        <div id="srch-week" onclick="_getAlertReport('srch-week', 'view_thisweek_search');">This Week</div>
                        <div id="srch-7" onclick="_getAlertReport('srch-7', 'view_7days_search');">Last 7 Days</div>
                        <div id="srch-month" onclick="_getAlertReport('srch-month', 'view_thismonth_search');">This Month</div>
                        <div id="srch-30" onclick="_getAlertReport('srch-30', 'view_30days_search');">Last 30 Days</div>
                        <div id="srch-90" onclick="_getAlertReport('srch-90', 'view_90days_search');">Last 90 Days</div>
                        <div id="srch-year" onclick="_getAlertReport('srch-year', 'view_thisyear_search');">This Year</div>
                        <div id="srch-1year" onclick="_getAlertReport('srch-1year', 'view_1year_search');">Last 1 Year</div>
                        <div onclick="srch_custom('Custom Search')">Custom Search</div>
                    </div> 
                </div> 

                <div class="text">
                    <div class="custom-srch-div">
                        <div class="custom-srch-div-in">
                            <div class="text_field_container dash_field_container">
                                <input class="text_field dash_text_field bar_cust_text_field" type="text" id="datepickers-from" placeholder=""/>
                                <div class="placeholder dash_placeholder bar_cust_placeholder"><i class="bi-calendar3"></i> From</div>
                            </div>

                            <div class="text_field_container dash_field_container">
                                <input class="text_field dash_text_field bar_cust_text_field" type="text" id="datepickers-to" placeholder=""/>
                                <div class="placeholder dash_placeholder bar_cust_placeholder"><i class="bi-calendar3"></i> To</div>
                            </div>
                            <button type="button" class="btn">Apply</button>
                        </div>
                    </div>
                </div>


                <script language="javascript">
                    $('#datepickers-from').datetimepicker({
                        lang:'en',
                        timepicker:false,
                        format:'Y-m-d',
                        formatDate:'Y-M-d',
                    });
                    
                    $('#datepickers-to').datetimepicker({
                        lang:'en',
                        timepicker:false,
                        format:'Y-m-d',
                        formatDate:'Y-M-d',
                    });
                </script>
            </div>

            <div class="trending-back-div">
                <canvas id="myBarChart" width="800" height="200"></canvas>
                <script>
                    // Data for the bar chart
                    var labels = ['01 Nov', '02 Nov', '03 Nov', '04 Nov', '05 Nov', '06 Nov', '07 Nov', '08 Nov', '09 Nov', '10 Nov',
                        '11 Nov', '12 Nov', '13 Nov', '14 Nov', '15 Nov', '16 Nov', '17 Nov', '18 Nov', '19 Nov', '20 Nov',
                        '21 Nov', '22 Nov', '23 Nov', '24 Nov', '25 Nov', '26 Nov', '27 Nov', '28 Nov', '29 Nov', '30 Nov']; // Example labels
                    var data = [
                        500000, 450000, 350000, 600000, 650000, 500000, 400000, 350000, 650000, 500000,
                        450000, 400000, 600000, 500000, 350000, 450000, 650000, 500000, 350000, 600000,
                        400000, 650000, 500000, 450000, 350000, 600000, 500000, 400000, 450000, 650000
                    ]; // Example data

                    var ctx = document.getElementById('myBarChart').getContext('2d');

                    new Chart(ctx, {
                        type: 'bar',
                        data: {
                            labels: labels,
                            datasets: [
                                {
                                    data: data,
                                    backgroundColor: '#FF8C00',
                                    borderRadius: 10,
                                    barThickness: 12,
                                },
                            ],
                        },
                        options: {
                            responsive: true,
                            plugins: {
                                tooltip: {
                                    callbacks: {
                                        label: function (context) {
                                            return context.raw.toLocaleString(); // Display only the numeric value
                                        },
                                    },
                                },
                                legend: {
                                    display: false, // Hide the legend
                                },
                            },
                            elements: {
                                bar: {
                                    borderRadius: 5,
                                    barThickness: 10, // Narrower bars
                                    maxBarThickness: 20, // Prevents bars from being too wide
                                },
                            },
                            scales: {
                    x: {
                        ticks: {
                            display: false, // Hides the labels
                        },
                        grid: {
                            drawTicks: false, // Hides tick marks
                            drawOnChartArea: true, // Ensures grid lines inside the chart are not shown
                            drawBorder: true, // Ensures the x-axis border line is drawn
                            borderWidth: 1, // Sets the border width
                            borderDash: [5, 5], // Sets the dashed pattern for the border line
                            color: '#f0f0f0', // Sets the border color
                        },
                    },
                    y: {
                        ticks: {
                            display: false, // Hides y-axis labels
                        },
                        grid: {
                            drawTicks: false, // Hides tick marks
                            drawBorder: false, // Hides the y-axis border
                            drawOnChartArea: false, // Hides grid lines in the chart area
                        },
                    },
                }
                    },
                    });
                </script>

                <div class="bottom-back-div">
                    <div class="bottom-div">
                        <span>01 November, 2024</span>
                    </div>

                    <div class="bottom-div">
                        <span>01 January, 2025</span>
                    </div>
                </div>
            </div>  
        </div>
    </div>
    <br clear="all"/>

    <div class="performance-back-div">
        <div class="performance-div">
            <div class="title-div"><i class="bi-globe"></i> Domain Performance</div>
            <div class="inner-div">
                <div class="each-performance-rate">
                    <div class="performance-container" id="domain-container" data-performance="domain">
                        <div class="circle">
                            <div class="inner-circle">
                                <span class="percentage">0%</span>
                            </div>
                        </div>
                        <div class="label">Performance</div>
                    </div>
                    <script>
                        var domainContainer = document.getElementById('domain-container');
                        updatePercentage(domainContainer, 90);
                    </script>
                </div>

                <div class="each-performance-rate">
                    <div class="top-stat">
                        <span>New Domain (ND)</span>
                        <h2>25</h2> 
                    </div>

                    <div class="top-stat">
                        <span>New Domain rate (%)</span>
                        <h2>20%</h2> 
                    </div>
                </div>

                <div class="each-performance-rate">
                    <div class="top-stat">
                        <span>Renewed Domain (RD)</span>
                        <h2>30</h2> 
                    </div>

                    <div class="top-stat">
                        <span>Renewed Domain rate (%)</span>
                        <h2>10%</h2> 
                    </div>
                </div>

                <div class="each-performance-rate">
                    <div class="top-stat">
                        <span>Expiry Domain (ED)</span>
                        <h2>40</h2> 
                    </div>

                    <div class="top-stat">
                        <span>Expiry Domain rate (%)</span>
                        <h2>25%</h2> 
                    </div>
                </div>

                <div class="each-performance-rate">
                    <div class="top-stat">
                        <span>Expired Domain (ED)</span>
                        <h2>5</h2> 
                    </div>

                    <div class="top-stat">
                        <span>Expired Domain rate (%)</span>
                        <h2>10%</h2> 
                    </div>
                </div>
            </div>
        </div>

        
        <div class="performance-div" data-aos="fade-up" data-aos-duration="1000">
            <div class="title-div"><i class="bi-hdd-rack-fill"></i> Hosting Performance</div>
            <div class="inner-div">
                <div class="each-performance-rate">
                    <div class="performance-container" id="hosting-container" data-performance="hosting">
                        <div class="circle">
                            <div class="inner-circle">
                                <span class="percentage">0%</span>
                            </div>
                        </div>
                        <div class="label">Performance</div>
                    </div>
                    <script>
                        var hostingContainer = document.getElementById('hosting-container');
                        updatePercentage(hostingContainer, 18);
                    </script>               
                </div>

                <div class="each-performance-rate">
                    <div class="top-stat">
                        <span>New Hosting (NH)</span>
                        <h2>50</h2> 
                    </div>

                    <div class="top-stat">
                        <span>New Hosting rate (%)</span>
                        <h2>25%</h2> 
                    </div>
                </div>

                <div class="each-performance-rate">
                    <div class="top-stat">
                        <span>Renewed Hosting (RH)</span>
                        <h2>10</h2> 
                    </div>

                    <div class="top-stat">
                        <span>Renewed Hosting rate (%)</span>
                        <h2>5%</h2> 
                    </div>
                </div>

                <div class="each-performance-rate">
                    <div class="top-stat">
                        <span>Expirey Hosting (EH)</span>
                        <h2>20</h2> 
                    </div>

                    <div class="top-stat">
                        <span>Expiry Hosting rate (%)</span>
                        <h2>15%</h2> 
                    </div>
                </div>

                <div class="each-performance-rate">
                    <div class="top-stat">
                        <span>Expired Hosting (EH)</span>
                        <h2>5</h2> 
                    </div>

                    <div class="top-stat">
                        <span>Expired Hosting rate (%)</span>
                        <h2>10%</h2> 
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php }?>


<?php if($page=='domain'){?>
    <div class="page-title-back-div other-pages-title-back-div" data-aos="fade-in" data-aos-duration="1500">
        <div class="page-title-div">
            <div class="title user-name"><i class="bi-people"></i> Active Domain</span></div>
        </div>

        <div class="date-filter-div other-pages-filter-div">
            <div class="text_field_container dash_field_container">
                <input class="text_field dash_text_field" type="text" id="" placeholder="" title="Type Here To Search..." />
                <div class="placeholder dash_placeholder"><i class="bi-search"></i> Type Here To Search...</div>
            </div>

            <button class="btn" type="button" title="ADD NEW DOMAIN" onclick=""><i class="bi-plus-square"></i> ADD NEW DOMAIN</button>
        </div>
    </div>
<?php }?>


<?php if($page=='staff'){?>
    <div class="page-title-back-div other-pages-title-back-div" data-aos="fade-in" data-aos-duration="1500">
        <div class="page-title-div">
            <div class="title user-name"><i class="bi-people"></i> Active Administrators</span></div>
        </div>

        <div class="date-filter-div other-pages-filter-div">
            <div class="text_field_container dash_field_container">
                <input class="text_field dash_text_field" type="text" id="" placeholder="" title="Type Here To Search..." />
                <div class="placeholder dash_placeholder"><i class="bi-search"></i> Type Here To Search...</div>
            </div>

            <button class="btn" type="button" title="ADD NEW STAFF" onclick=""><i class="bi-plus-square"></i> ADD NEW STAFF</button>
        </div>
    </div>
<?php }?>


<?php if($page=='user'){?>
    user
<?php }?>


































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
                <div class="placeholder">Enter Your Email Address:</div>
            </div>
                
            <div class="text_field_container">
                <input class="text_field" type="email" id="email" placeholder=""/>
                <div class="placeholder">Enter Your Password:</div>
            </div> 

            <button class="btn" id="" title="Log In" onclick="location.href='<?php echo $website_url?>/account/dashboard'">Log In <i class="bi-check"></i></button>
            <div class="forgot-pass" onclick="_next_page('reset_password_info');">Forgot Password?</div>
        </div>
        <p>Don't have an account? <a href="<?php echo $website_url?>/account/sign-up"><span>Sign-Up</span></p></a>
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
                <div class="placeholder">Enter Your Email Address:</div>
            </div>
                            
            <button class="btn" id="" title="Proceed" onclick="_next_page('send_link_info');">Proceed <i class="bi-arrow-right"></i></button>
            <div class="forgot-pass sign-forgot-pass">Already have an account? <span onclick="_next_page('view_login');"> Log-In</span></div>
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
                <button class="btn" type="button" id="submit_btn" title="Okay" onclick="location.href='<?php echo $website_url?>/account/reset-password'"> 
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
            <button class="btn" onclick="location.href='<?php echo $website_url?>/account/login'">OKAY <i class="bi-check2-all"></i></button>
        </div> 
    </div>
<?php }?>



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
                <div class="placeholder">Enter Your Full Name:</div>
            </div>

            <div class="text_field_container">
                <input class="text_field" type="email" id="email" placeholder=""/>
                <div class="placeholder">Enter Your Email Address:</div>
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
            <div class="forgot-pass sign-forgot-pass">Already have an account? <a href="<?php echo $website_url?>/account/login"><span> Log-In</span></div></a>
        </div>
        <div class="bottom-container">Google reCAPTCHA used. <span>Privacy Policy </span> and <span>Terms of Service</span> apply.</div>
    </div>       
<?php }?>