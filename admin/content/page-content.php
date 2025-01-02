
<?php if ($page=='dashboard'){?>
    <div class="page-title-back-div" data-aos="fade-in" data-aos-duration="1500">
        <div class="page-title-div">
            <div class="top-title"><span id="page-title"><i class="bi-speedometer2"></i> Admin Dashboard Overview</span></div>
            <div class="main-title">👋 Hi, <span id="login_fullname">Hon Emmanuel Paul</span></div>
            <div class="bottom-title"><i class="bi-clock"></i> Last Login Date | <span> 2024-11-18 03:28:41</span></div>
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

    <div class="statistics-chart-back-div" data-aos="fade-in" data-aos-duration="1500">
        <div class="statistics-back-div">
            <div class="statistics-div left-border" onclick="_getPage('domain','domain','');">
                <h2>20</h2> 
                <span>Active Domain</span>
            </div>

            <div class="statistics-div" onclick="_getPage('hosting','hosting','');">
                <h2>80</h2> 
                <span>Active Hosting</span>
            </div>

            <div class="statistics-div" onclick="_getPage('users','users','');">
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
            <div class="main-title title"><i class="bi-globe2"></i> <strong>Domain</strong></div>
        </div>

        <div class="date-filter-div other-pages-filter-div">
            <div class="text_field_container dash_field_container">
                <input class="text_field dash_text_field" type="text" id="searchStaff" onkeyup="filter('Staff')" placeholder="" title="Type Here To Search..." />
                <div class="placeholder dash_placeholder"><i class="bi-search"></i> Type Here To Search...</div>
            </div>
        </div>
    </div> 
<?php }?>

<?php if($page=='hosting'){?>
    <div class="page-title-back-div other-pages-title-back-div" data-aos="fade-in" data-aos-duration="1500">
        <div class="page-title-div">
            <div class="main-title title"><i class="bi-hdd-rack"></i> <strong>Hosting</strong></div>
        </div>

        <div class="date-filter-div other-pages-filter-div">
            <div class="text_field_container dash_field_container">
                <input class="text_field dash_text_field" type="text" id="searchStaff" onkeyup="filter('Staff')" placeholder="" title="Type Here To Search..." />
                <div class="placeholder dash_placeholder"><i class="bi-search"></i> Type Here To Search...</div>
            </div>
        </div>
    </div> 
<?php }?>

<?php if($page=='staff'){?>
    <div class="page-title-back-div other-pages-title-back-div" data-aos="fade-in" data-aos-duration="1500">
        <div class="page-title-div">
            <div class="main-title title"><i class="bi-people"></i> <strong>Administrators</strong></div>
            <div class="bottom-title status-title">
                Active: <span id="active-staff">10</span> |
                Suspended: <span>5</span>
            </div>
        </div>

        <div class="date-filter-div other-pages-filter-div">
            <div class="text_field_container dash_field_container">
                <input class="text_field dash_text_field" type="text" id="searchStaff" onkeyup="filter('Staff')" placeholder="" title="Type Here To Search..." />
                <div class="placeholder dash_placeholder"><i class="bi-search"></i> Type Here To Search...</div>
            </div>

            <button class="btn" type="button" title="ADD NEW STAFF" onclick="_getForm('staff_reg');">
                <i class="bi-plus-square"></i> ADD NEW STAFF
            </button>
        </div>
    </div>

    <div class="pages-back-div">
        <div class="dynamic-back-div" data-aos="fade-in" data-aos-duration="1500">
            <div class="table-div animated fadeIn">
                <table class="table" cellspacing="0" style="width:100%" id="fetchAllStaff">
                    <thead>
                        <tr class="tb-col">
                            <th>User Name</th>
                            <th>Email Address</th>
                            <th>Role</th>
                            <th>Last Login</th>
                            <th>Status</th>
                            <th></th>
                        </tr>
                    </thead>

                    <tbody>
                        <tr class="tb-row">
                            <td class="first-td" title="Click to view profile" onclick="_getFormWithId('update_staff','');"><div class="image-div"><img src="<?php echo $website_url?>/all-images/images/avatar.jpg" alt="Paul Emmanuel"/></div> Paul Emmanuel</td></div>
                            <td class="second-td">seuemmanuel107@gmail.com</td>
                            <td>Super Admin</td>
                            <td>2024-11-18 03:28:41</td>
                            <td><div class="status-div active">Active</div></td>
                            <td id="dotted"><i class="bi-three-dots-vertical"></i>
                                <div class="expand-div animated fadeIn">
                                    <ul class="ul-expand">
                                        <li onclick="_getFormWithId('update_staff','');"><i class="bi-people-fill"></i>Staff Profile</li>
                                    </ul>
                                </div>
                            </td>
                        </tr>

                        <tr class="tb-row">
                            <td class="first-td" title="Click to view profile"><div class="image-div"><img src="<?php echo $website_url?>/all-images/images/avatar.jpg" alt="Arinsola Olutayo"/></div> Arinsola Olutayo</td></div>
                            <td class="second-td">arinsola@gmail.com</td>
                            <td>Admin</td>
                            <td>2024-11-18 03:28:41</td>
                            <td><div><div class="status-div active">Active</div></div></td>
                            <td id="dotted"><i class="bi-three-dots-vertical"></i>
                                <div class="expand-div animated fadeIn">
                                    <ul class="ul-expand">
                                        <li onclick="_getFormWithId('update_staff','');"><i class="bi-people-fill"></i>Staff Profile</li>
                                    </ul>
                                </div>
                            </td>
                        </tr>

                        <tr class="tb-row">
                            <td class="first-td" title="Click to view profile"><div class="image-div"><img src="<?php echo $website_url?>/all-images/images/avatar.jpg" alt="Paul Emmanuel"/></div> Yakubu Ezekiel</td></div>
                            <td class="second-td">yakubu200@gmail.com</td>
                            <td>Super Admin</td>
                            <td>2024-11-18 03:28:41</td>
                            <td><div><div class="status-div active">Active</div></div></td>
                            <td id="dotted"><i class="bi-three-dots-vertical"></i>
                                <div class="expand-div animated fadeIn">
                                    <ul class="ul-expand">
                                        <li onclick="_getFormWithId('update_staff','');"><i class="bi-people-fill"></i>Staff Profile</li>
                                    </ul>
                                </div>
                            </td>
                        </tr>

                        <tr class="tb-row">
                            <td class="first-td" title="Click to view profile"><div class="image-div"><img src="<?php echo $website_url?>/all-images/images/avatar.jpg" alt="Balogun Samuel"/></div> Balogun Samuel</td></div>
                            <td class="second-td">balogun200@gmail.com</td>
                            <td>Staff</td>
                            <td>2024-11-18 03:28:41</td>
                            <td><div><div class="status-div suspended">Suspended</div></div></td>
                            <td id="dotted"><i class="bi-three-dots-vertical"></i>
                                <div class="expand-div animated fadeIn">
                                    <ul class="ul-expand">
                                        <li onclick="_getFormWithId('update_staff','');"><i class="bi-people-fill"></i>Staff Profile</li>
                                    </ul>
                                </div>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
<?php }?>

<?php if($page=='users'){?>
    <div class="page-title-back-div other-pages-title-back-div" data-aos="fade-in" data-aos-duration="1500">
        <div class="page-title-div">
            <div class="main-title title"><i class="bi-people"></i> <strong>Users</strong></div>
            <div class="bottom-title status-title">
                Active: <span id="">10</span> |
                Suspended: <span>5</span>
            </div>
        </div>

        <div class="date-filter-div other-pages-filter-div">
            <div class="text_field_container dash_field_container">
                <input class="text_field dash_text_field" type="text" id="searchUsers" onkeyup="filter('Users')" placeholder="" title="Type Here To Search..." />
                <div class="placeholder dash_placeholder"><i class="bi-search"></i> Type Here To Search...</div>
            </div>
        </div>
    </div> 


    <div class="pages-back-div">
        <div class="dynamic-back-div" data-aos="fade-in" data-aos-duration="1500">
            <div class="table-div animated fadeIn">
                <table class="table" cellspacing="0" style="width:100%" id="fetchAllUsers">
                    <thead>
                        <tr class="tb-col">
                            <th>User Name</th>
                            <th>Email Address</th>
                            <th>Product</th>
                            <th>Last Login</th>
                            <th>Status</th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr class="tb-row">
                            <td class="first-td" title="Click to view user" onclick="_getFormWithId('user-details-form');"><div class="image-div"><img src="<?php echo $website_url?>/all-images/images/avatar.jpg" alt="Johnson Agida"/></div> Johnson Agida</td></div>
                            <td class="second-td">johnson120@gmail.com</td>
                            <td>Domain</td>
                            <td>2024-11-18 03:28:41</td>
                            <td><div class="status-div active">Active</div></td>
                            <td id="dotted"><i class="bi-three-dots-vertical"></i>
                                <div class="expand-div animated fadeIn">
                                    <ul class="ul-expand">
                                        <li onclick="_getFormWithId();"><i class="bi-people-fill"></i>User Profile</li>
                                    </ul>
                                </div>
                            </td>
                        </tr>

                        <tr class="tb-row">
                            <td class="first-td" title="Click to view user"><div class="image-div"><img src="<?php echo $website_url?>/all-images/images/avatar.jpg" alt="Clement Smith"/></div> Clement Smith</td></div>
                            <td class="second-td">clement@gmail.com</td>
                            <td>Hosting</td>
                            <td>2024-11-18 03:28:41</td>
                            <td><div><div class="status-div active">Active</div></div></td>
                            <td id="dotted"><i class="bi-three-dots-vertical"></i>
                                <div class="expand-div animated fadeIn">
                                    <ul class="ul-expand">
                                        <li onclick="_getFormWithId();"><i class="bi-people-fill"></i>User Profile</li>
                                    </ul>
                                </div>
                            </td>
                        </tr>

                        <tr class="tb-row">
                            <td class="first-td" title="Click to view profile"><div class="image-div"><img src="<?php echo $website_url?>/all-images/images/avatar.jpg" alt="Paul Emmanuel"/></div> Yakubu Ezekiel</td></div>
                            <td class="second-td">yakubu200@gmail.com</td>
                            <td>Hosting</td>
                            <td>2024-11-18 03:28:41</td>
                            <td><div><div class="status-div active">Active</div></div></td>
                            <td id="dotted"><i class="bi-three-dots-vertical"></i>
                                <div class="expand-div animated fadeIn">
                                    <ul class="ul-expand">
                                        <li onclick="_getFormWithId();"><i class="bi-people-fill"></i>User Profile</li>
                                    </ul>
                                </div>
                            </td>
                        </tr>

                        <tr class="tb-row">
                            <td class="first-td" title="Click to view profile"><div class="image-div"><img src="<?php echo $website_url?>/all-images/images/avatar.jpg" alt="Balogun Samuel"/></div> Balogun Samuel</td></div>
                            <td class="second-td">balogun200@gmail.com</td>
                            <td>Domain</td>
                            <td>2024-11-18 03:28:41</td>
                            <td><div><div class="status-div suspended">Suspended</div></div></td>
                            <td id="dotted"><i class="bi-three-dots-vertical"></i>
                                <div class="expand-div animated fadeIn">
                                    <ul class="ul-expand">
                                        <li onclick="_getFormWithId();"><i class="bi-people-fill"></i>User Profile</li>
                                    </ul>
                                </div>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

<?php }?>

<?php if($page=='settings'){?>
    <div class="page-title-back-div other-pages-title-back-div sub-other-pages-title-back-div" data-aos="fade-in" data-aos-duration="1500">
        <div class="page-title-div sub-other-pages-title">
            <div class="main-title title"><i class="bi-gear"></i> <strong>Global Configurations</strong></div>
            <div class="bottom-title status-title">
                <span>Manage and configure dashboard settings, global settings and manage users </span>
            </div>
        </div>
        <button class="btn" title="LEARN MORE">LEARN MORE</button>
    </div>
    
    <div class="pages-back-div">
        <div class="user-managment-back-div" data-aos="fade-in" data-aos-duration="1500">
            <div class="user-managment-list" onclick="_getPage('user-role-configuration', 'user-role-configuration', '');">
                <div class="inner-div">
                    <div class="icon-div"><img src="<?php echo $website_url?>/all-images/images/authorization.png" alt="User Role Configurations"/></div>
                    <div class="text-div">
                        <h3>User Role Configurations</h3>
                        <p>User role configurations manage permissions, ensuring secure and efficient access to features.</p>
                    </div>
                </div>
            </div>

            <div class="user-managment-list" onclick="_getPage('user-status-configuration', 'user-status-configuration', '');">
                <div class="inner-div">
                    <div class="icon-div"><img src="<?php echo $website_url?>/all-images/images/status.png" alt="User Status Configurations"/></div>
                    <div class="text-div">
                        <h3>User Status Configurations</h3>
                        <p>User status configurations manage states, ensuring efficient system monitoring.</p>
                    </div>
                </div>
            </div>

            <div class="user-managment-list" onclick="_getPage('blog-cat-config', 'blog-cat-config', '');">
                <div class="inner-div">
                    <div class="icon-div"><img src="<?php echo $website_url?>/all-images/images/blog.png" alt="Blog Category Configurations"/></div>
                    <div class="text-div">
                        <h3>Blog Category Configurations</h3>
                        <p>Blog category configurations organize content, ensuring easy navigation and management.</p>
                    </div>
                </div>
            </div>

            <div class="user-managment-list" onclick="_getPage('faq-cat-config', 'faq-cat-config', '');">
                <div class="inner-div">
                    <div class="icon-div"><img src="<?php echo $website_url?>/all-images/images/faq.png" alt="FAQ Category Configurations"/></div>
                    <div class="text-div">
                        <h3>FAQ Category Configurations</h3>
                        <p>FAQ category configurations organize questions, ensuring easy access and management.</p>
                    </div>
                </div>
            </div>

            <div class="user-managment-list" onclick="_getPage('master-count-config', 'master-count-config', '');">
                <div class="inner-div">
                    <div class="icon-div"><img src="<?php echo $website_url?>/all-images/images/calculate.png" alt="Master Count Configurations"/></div>
                    <div class="text-div">
                        <h3>Master Count Configurations</h3>
                        <p>Master count configurations manage data totals, ensuring accurate tracking and control.</p>
                    </div>
                </div>
            </div>

            <div class="user-managment-list" onclick="_getForm('app_settings');">
                <div class="inner-div">
                    <div class="icon-div"><img src="<?php echo $website_url?>/all-images/images/settings.png" alt="Global Configurations"/></div>
                    <div class="text-div">
                        <h3>Global Configurations</h3>
                        <p>Global configurations set system-wide settings, ensuring consistency and control.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php }?>

<?php if($page=='user-role-configuration'){?>
    <div class="page-title-back-div other-pages-title-back-div sub-other-pages-title-back-div" data-aos="fade-in" data-aos-duration="1500">
        <div class="page-title-div sub-other-pages-title">
            <div class="back-div"><span onclick="_getPage('settings','settings','');"><i class="bi-arrow-left"></i> System Settings</span> Role And Permissions</div>
            <div class="main-title title"><i class="bi-gear"></i> <strong>Roles And Permissions</strong></div>
        </div>
        <button class="btn" title="ADD NEW ROLE" onclick="_getForm('role_reg');"><i class="bi-plus-square"></i> ADD NEW ROLE</button>
    </div>
    
    <div class="pages-back-div" data-aos="fade-in" data-aos-duration="1500">
        <div class="role-list-back-div">
            <div class="role-list-div" onclick="_getForm('update_role');">
                <div class="div-in">
                    <div class="icon-div"><i class="bi-shield-fill-check"></i></div>
                    <div class="text-div">
                        <h4>Super Admin</h4>
                        <p>Super admin have view and edit access to all functions by default which cannot be changed</p>
                    </div>
                </div>
                <div class="bottom-div">
                    <div class="count-div"><i class="bi-person-circle"></i>&nbsp; <span>1</span> ACTIVE USER</div>
                </div>
            </div>
            
            <div class="role-list-div">
                <div class="div-in">
                    <div class="icon-div"><i class="bi-shield-fill-check"></i></div>
                    <div class="text-div">
                        <h4>Admin</h4>
                        <p>Admin are able to view, create and edit users and other activities created by super admin</p>
                    </div>
                </div>
                <div class="bottom-div">
                    <div class="count-div"><i class="bi-person-circle"></i>&nbsp; <span>1</span> ACTIVE USER</div>
                </div>
            </div>

            <div class="role-list-div">
                <div class="div-in">
                    <div class="icon-div"><i class="bi-shield-fill-check"></i></div>
                    <div class="text-div">
                        <h4>Staff</h4>
                        <p>Staff has limited access to preview what has been created by admin or super admin</p>
                    </div>
                </div>
                <div class="bottom-div">
                    <div class="count-div"><i class="bi-person-circle"></i>&nbsp; <span>1</span> ACTIVE USER</div>
                </div>
            </div>
        </div>
    </div>
<?php }?>

<?php if($page=='user-status-configuration'){?>
    <div class="page-title-back-div other-pages-title-back-div sub-other-pages-title-back-div" data-aos="fade-in" data-aos-duration="1500">
        <div class="page-title-div sub-other-pages-title">
            <div class="back-div"><span onclick="_getPage('settings','settings','');"><i class="bi-arrow-left"></i> System Settings</span> Status Configurations</div>
            <div class="main-title title"><i class="bi-gear"></i> <strong>Status Configurations</strong></div>
        </div>
        <button class="btn" title="ADD NEW STATUS" onclick="_getForm('status_reg');"><i class="bi-plus-square"></i> ADD NEW STATUS</button>
    </div>
    
    <div class="pages-back-div">
        <div class="dynamic-back-div" data-aos="fade-in" data-aos-duration="1500">
            <div class="table-div animated fadeIn">
                <table class="table" cellspacing="0" style="width:100%">
                    <thead>
                        <tr class="tb-col">
                            <th>Status ID</th>
                            <th>Status Name</th>
                            <th>Created Date</th>
                            <th>Status</th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr class="tb-row">
                            <td class="first-td" title="Click to View Role" onclick="_getFormWithId();"> ROLE0001</td></div>
                            <td class="second-td">Super Admin</td>
                            <td>2024-11-18 03:28:41</td>
                            <td><div class="status-div active">Active</div></td>
                            <td><i class="bi-three-dots-vertical"></i></td>
                        </tr>

                        <tr class="tb-row">
                            <td class="first-td" title="Click to View Role" onclick="_getFormWithId();"> ROLE0002</td></div>
                            <td class="second-td">Admin</td>
                            <td>2024-11-18 03:28:41</td>
                            <td><div class="status-div active">Active</div></td>
                            <td><i class="bi-three-dots-vertical"></i></td>
                        </tr>

                        <tr class="tb-row">
                            <td class="first-td" title="Click to View Role" onclick="_getFormWithId();"> ROLE0003</td></div>
                            <td class="second-td">Staff</td>
                            <td>2024-11-18 03:28:41</td>
                            <td><div class="status-div active">Active</div></td>
                            <td><i class="bi-three-dots-vertical"></i></td>
                        </tr>                  
                    </tbody>
                </table>
            </div>
        </div>
    </div>
<?php }?>

<?php if($page=='blog-cat-config'){?>
    <div class="page-title-back-div other-pages-title-back-div sub-other-pages-title-back-div" data-aos="fade-in" data-aos-duration="1500">
        <div class="page-title-div sub-other-pages-title">
            <div class="back-div"><span onclick="_getPage('settings','settings','');"><i class="bi-arrow-left"></i> System Settings</span> Blog Category Configurations</div>
            <div class="main-title title"><i class="bi-gear"></i> <strong>Blog Category Configurations</strong></div>
        </div>
        <button class="btn" title="ADD NEW CATEGORY" onclick="_getForm('blog_cat_reg');"><i class="bi-plus-square"></i> ADD NEW CATEGORY</button>
    </div>
    
    <div class="pages-back-div">
        <div class="dynamic-back-div" data-aos="fade-in" data-aos-duration="1500">
            <div class="table-div animated fadeIn">
                <table class="table" cellspacing="0" style="width:100%">
                    <thead>
                        <tr class="tb-col">
                            <th>Category ID</th>
                            <th>Blog Category Name</th>
                            <th>Created Date</th>
                            <th>Status</th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr class="tb-row">
                            <td class="first-td" title="Click to View Category" onclick="_getFormWithId();"> BLOG001</td></div>
                            <td class="second-td">Announcement</td>
                            <td>2024-11-18 03:28:41</td>
                            <td><div class="status-div active">Active</div></td>
                            <td><i class="bi-three-dots-vertical"></i></td>
                        </tr>

                        <tr class="tb-row">
                            <td class="first-td" title="Click to View Category" onclick="_getFormWithId();"> BLOG002</td></div>
                            <td class="second-td">General</td>
                            <td>2024-11-18 03:28:41</td>
                            <td><div class="status-div active">Active</div></td>
                            <td><i class="bi-three-dots-vertical"></i></td>
                        </tr>

                        <tr class="tb-row">
                            <td class="first-td" title="Click to View Category" onclick="_getFormWithId();"> BLOG003</td></div>
                            <td class="second">Hosting</td>
                            <td>2024-11-18 03:28:41</td>
                            <td><div class="status-div active">Active</div></td>
                            <td><i class="bi-three-dots-vertical"></i></td>
                        </tr>                  
                    </tbody>
                </table>
            </div>
        </div>
    </div>
<?php }?>

<?php if($page=='faq-cat-config'){?>
    <div class="page-title-back-div other-pages-title-back-div sub-other-pages-title-back-div" data-aos="fade-in" data-aos-duration="1500">
        <div class="page-title-div sub-other-pages-title">
            <div class="back-div"><span onclick="_getPage('settings','settings','');"><i class="bi-arrow-left"></i> System Settings</span> FAQ Category Configurations</div>
            <div class="main-title title"><i class="bi-gear"></i> <strong>FAQ Category Configurations</strong></div>
        </div>
        <button class="btn" title="ADD NEW CATEGORY" onclick="_getForm('faq_cat_reg');"><i class="bi-plus-square"></i> ADD NEW CATEGORY</button>
    </div>
    
    <div class="pages-back-div">
        <div class="dynamic-back-div" data-aos="fade-in" data-aos-duration="1500">
            <div class="table-div animated fadeIn">
                <table class="table" cellspacing="0" style="width:100%">
                    <thead>
                        <tr class="tb-col">
                            <th>Category ID</th>
                            <th>FAQ Category Name</th>
                            <th>Created Date</th>
                            <th>Status</th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr class="tb-row">
                            <td class="first-td" title="Click to View Category" onclick="_getFormWithId();"> FAQ001</td></div>
                            <td class="second-td">Announcement</td>
                            <td>2024-11-18 03:28:41</td>
                            <td><div class="status-div active">Active</div></td>
                            <td><i class="bi-three-dots-vertical"></i></td>
                        </tr>

                        <tr class="tb-row">
                            <td class="first-td" title="Click to View Category" onclick="_getFormWithId();"> FAQ002</td></div>
                            <td class="second-td">General</td>
                            <td>2024-11-18 03:28:41</td>
                            <td><div class="status-div active">Active</div></td>
                            <td><i class="bi-three-dots-vertical"></i></td>
                        </tr>

                        <tr class="tb-row">
                            <td class="first-td" title="Click to View Category" onclick="_getFormWithId();"> FAQ003</td></div>
                            <td class="second-td">Hosting</td>
                            <td>2024-11-18 03:28:41</td>
                            <td><div class="status-div active">Active</div></td>
                            <td><i class="bi-three-dots-vertical"></i></td>
                        </tr>                  
                    </tbody>
                </table>
            </div>
        </div>
    </div>
<?php }?>

<?php if($page=='master-count-config'){?>
    <div class="page-title-back-div other-pages-title-back-div sub-other-pages-title-back-div" data-aos="fade-in" data-aos-duration="1500">
        <div class="page-title-div sub-other-pages-title">
            <div class="back-div"><span onclick="_getPage('settings','settings','');"><i class="bi-arrow-left"></i> System Settings</span> Master Count Configurations</div>
            <div class="main-title title"><i class="bi-gear"></i> <strong>Master Count Configurations</strong></div>
        </div>
        <button class="btn" title="ADD NEW CATEGORY" onclick="_getForm('master_count_reg');"><i class="bi-plus-square"></i> ADD NEW MASTER</button>
    </div>
    
    <div class="pages-back-div">
        <div class="dynamic-back-div" data-aos="fade-in" data-aos-duration="1500">
            <div class="table-div animated fadeIn">
                <table class="table" cellspacing="0" style="width:100%">
                    <thead>
                        <tr class="tb-col">
                            <th>Counter ID</th>
                            <th>Counter Discription</th>
                            <th>Counter Value</th>
                            <th>Created Date</th>
                            <th>Status</th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr class="tb-row">
                            <td class="first-td" title="Click to View Category" onclick="_getFormWithId();"> STAFF</td></div>
                            <td class="second-td">STAFF ID COUNT</td>
                            <td>20</td>
                            <td>2024-11-18 03:28:41</td>
                            <td><div class="status-div active">Active</div></td>
                            <td><i class="bi-three-dots-vertical"></i></td>
                        </tr>

                        <tr class="tb-row">
                            <td class="first-td" title="Click to View Category" onclick="_getFormWithId();"> USER</td></div>
                            <td class="second-td">USER ID COUNT</td>
                            <td>10</td>
                            <td>2024-11-18 03:28:41</td>
                            <td><div class="status-div active">Active</div></td>
                            <td><i class="bi-three-dots-vertical"></i></td>
                        </tr>

                        <tr class="tb-row">
                            <td class="first-td" title="Click to View Category" onclick="_getFormWithId();"> BLOG</td></div>
                            <td class="second-td">BLOG ID COUNT</td>
                            <td>30</td>
                            <td>2024-11-18 03:28:41</td>
                            <td><div class="status-div active">Active</div></td>
                            <td><i class="bi-three-dots-vertical"></i></td>
                        </tr>                
                    </tbody>
                </table>
            </div>
        </div>
    </div>
<?php }?>

<?php if($page=='blog'){?>
    <div class="page-title-back-div other-pages-title-back-div" data-aos="fade-in" data-aos-duration="1500">
        <div class="page-title-div">
            <div class="main-title title"><i class="bi-journals"></i> <strong>Blog & Articles</strong></div>
            <div class="bottom-title status-title">
                Active: <span id="active-staff">10</span> |
                Suspended: <span>5</span>
            </div>
        </div>

        <div class="date-filter-div other-pages-filter-div">
            <div class="text_field_container dash_field_container">
                <input class="text_field dash_text_field" type="text" id="searchBlog" onkeyup="filter('Blog')" placeholder="" title="Type Here To Search..." />
                <div class="placeholder dash_placeholder"><i class="bi-search"></i> Type Here To Search...</div>
            </div>

            <button class="btn" type="button" title="ADD NEW BLOG" onclick="_getForm('blog_reg');">
                <i class="bi-plus-square"></i> ADD NEW BLOG
            </button>
        </div>
    </div>

    <div class="pages-back-div" data-aos="fade-in" data-aos-duration="1500">
        <div class="dynamic-back-div other-pg-dynamic-back-div" id="fetchAllBlog">
            <div class="grid-div">
                <div class="btn-div">
                    <button class="btn active-btn" onclick="_getFormWithId('edit_page_form')">EDIT</button>
                    <button class="btn" onclick="_editPage('edit_page_form','')">EDIT PAGE DETAILS</button>
                </div>

                <div class="status-div">ACTIVE</div>
                <div class="img-div"><img src="<?php echo $website_url?>/all-images/blog/blog_1.jpg" alt="Blog"></div>
                <div class="text-div">
                    <div class="top-text"><span>Announcement</span></div>
                    <h2>Maximizing Business Efficiency Through Custom Software...</h2>
                    <div class="text-in">
                        <div class="text">UPDATED ON: <span>27 Jul 2024</span> | <span>486</span> VIEWS </div>
                    </div>
                </div>
            </div>

            <div class="grid-div">
                <div class="btn-div">
                    <button class="btn active-btn" onclick="_get_form_with_id('')">EDIT</button>
                    <button class="btn" onclick="_edit_page('<?php echo $page_category_id;?>','')">EDIT PAGE DETAILS</button>
                </div>

                <div class="status-div">ACTIVE</div>
                <div class="img-div"><img src="<?php echo $website_url?>/all-images/blog/blog_2.png" alt="Blog"></div>
                <div class="text-div">
                    <div class="top-text"><span>Announcement</span></div>
                    <h2>Leveraging Cutting-Edge Cybersecurity Strategies...</h2>
                    <div class="text-in">
                        <div class="text">UPDATED ON: <span>27 Jul 2024</span> | <span>486</span> VIEWS </div>
                    </div>
                </div>
            </div>

            <div class="grid-div">
                <div class="btn-div">
                    <button class="btn active-btn" onclick="_get_form_with_id('')">EDIT</button>
                    <button class="btn" onclick="_edit_page('<?php echo $page_category_id;?>','')">EDIT PAGE DETAILS</button>
                </div>

                <div class="status-div">ACTIVE</div>
                <div class="img-div"><img src="<?php echo $website_url?>/all-images/blog/blog_3.jpeg" alt="Blog"></div>
                <div class="text-div">
                    <div class="top-text"><span>Announcement</span></div>
                    <h2>Maximizing Business Efficiency Through Custom Software...</h2>
                    <div class="text-in">
                        <div class="text">UPDATED ON: <span>27 Jul 2024</span> | <span>486</span> VIEWS </div>
                    </div>
                </div>
            </div>

            <div class="grid-div">
                <div class="btn-div">
                    <button class="btn active-btn" onclick="_get_form_with_id('')">EDIT</button>
                    <button class="btn" onclick="_edit_page('<?php echo $page_category_id;?>','')">EDIT PAGE DETAILS</button>
                </div>

                <div class="status-div">ACTIVE</div>
                <div class="img-div"><img src="<?php echo $website_url?>/all-images/blog/blog_2.png" alt="Blog"></div>
                <div class="text-div">
                    <div class="top-text"><span>Announcement</span></div>
                    <h2>Enhancing Digital Transformation with Scalable...</h2>
                    <div class="text-in">
                        <div class="text">UPDATED ON: <span>27 Jul 2024</span> | <span>486</span> VIEWS </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php }?>

<?php if($page=='faq'){?>
    <div class="page-title-back-div other-pages-title-back-div" data-aos="fade-in" data-aos-duration="1500">
        <div class="page-title-div">
            <div class="main-title title"><i class="bi-patch-question"></i> <strong>Freqently Asked Questions</strong></div>
            <div class="bottom-title status-title">
                Active: <span id="active-staff">10</span> |
                Suspended: <span>5</span>
            </div>
        </div>

        <div class="date-filter-div other-pages-filter-div">
            <div class="text_field_container dash_field_container">
                <input class="text_field dash_text_field" type="text" id="searchFaq" onkeyup="filter('Faq')" placeholder="" title="Type Here To Search..." />
                <div class="placeholder dash_placeholder"><i class="bi-search"></i> Type Here To Search...</div>
            </div>

            <button class="btn" type="button" title="ADD NEW FAQ" onclick="_getForm('faq_reg');">
                <i class="bi-plus-square"></i> ADD NEW FAQ
            </button>
        </div>
    </div>

    <div class="pages-back-div" data-aos="fade-in" data-aos-duration="1500">
        <div class="dynamic-back-div other-pg-dynamic-back-div faq-pg-dynamic-back-div" id="fetchAllFaq">
            <div class="faq-back-div">
                <div class="title-div">
                    <div class="num">1</div>
                    <button class="btn" onclick=""><i class="bi-pencil-square"></i> <span>What types of web hosting are available?</span></button>
                </div>
                <div class="answer-div">There are several types of web hosting, including shared hosting, VPS
                    hosting, dedicated hosting, and cloud hosting. Shared hosting is
                    budget-friendly and suitable for small sites, while VPS and dedicated
                    hosting offer more resources and control. Cloud hosting provides
                    scalability for growing sites.</div>
            </div>

            <div class="faq-back-div">
                <div class="title-div">
                    <div class="num">2</div>
                    <button class="btn" onclick=""><i class="bi-pencil-square"></i> <span>How much does it cost to develop a website?</span></button>
                </div>
                <div class="answer-div">Website development costs vary based on complexity, design, and features.
                    Basic sites may cost a few hundred dollars, while custom or e-commerce
                    sites may range from a few thousand dollars and up, depending on the
                    project's scope and requirements.</div>
            </div>
        </div>
    </div>
<?php }?>



























<?php if($page=='login'){?>
    <div class="form-div animated fadeIn" id="view_login" data-aos="zoom-in" data-aos-duration="1200">
        <div class="top-div">
            <h1> 👋 Administrative <span>Log-In</span></h1>                   
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

            <button class="btn" id="" title="Log In" onclick="location.href='<?php echo $website_url?>/admin/dashboard'">Log In <i class="bi-check"></i></button>
        </div>
    </div>

    <div class="form-div animated fadeIn" id="view_forgot_password">
        <div class="top-div">
            <h1> Administrative <span>Reset Password</span></h1>                   
        </div>
        
        <div class="inner-form">
            <div class="alert alert-success">
                Kindly, provide your <span>Email Address</span> to reset your password
            </div>
            
            <div class="text_field_container">
                <input class="text_field" type="email" id="email" placeholder=""/>
                <div class="placeholder">Enter Your Email Address:</div>
            </div>

            <button class="btn" id="" title="Proceed" onclick="_nextLoginPage('send_link_info','');">Proceed <i class="bi-arrow-right"></i></button>
        </div>
    </div> 

    <div class="form-div animated fadeIn" id="send_link_info">
        <div class="inner-form">
            <div class="icon-div"><i class="bi-check2-circle"></i></div> 
            <h3>Mail sent successfully</h3>
            <div class="alert alert-success"><i class="bi-person"></i> Dear <strong>Paul Emmanuel</strong>, 
                a link has been sent to your email address (<strong>seunemmanuel107@gmail.com</strong>) 
                to reset your password. Kindly check your <strong>INBOX</strong> or <strong>SPAM</strong> to confirm.
            </div>

            <button class="btn" type="button" id="submit_btn" title="Okay" onclick="location.href='<?php echo $website_url?>/admin/reset-password'"> 
                OKAY <i class="bi-check2-all"></i>
            </button>                          
            <div class="notification"><strong>MAIL</strong> not received? <span><i class="bi-send"></i> <strong> RESEND MAIL </strong></span></div>                             
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
            <button class="btn" onclick="location.href='<?php echo $website_url?>/admin/login'">OKAY <i class="bi-check2-all"></i></button>
        </div> 
    </div>
<?php }?>

