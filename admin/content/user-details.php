<?php if($page=='user_profile_details'){?>
    <div class="user-in">
        <div class="title">USER BASIC INFORMATION</div>
            
        <div class="profile-segment-div">
            <div class="text_field_container col-1">
                <input class="text_field" type="text" id="updt_fullname" placeholder=""/>
                <div class="placeholder">Full Name:</div>
            </div>

            <div class="text_field_container col-1">
                <input class="text_field" type="text" id="updt_email" placeholder=""/>
                <div class="placeholder">Email Address:</div>
            </div>

            <div class="text_field_container col-1">
                <input class="text_field" type="text" id="updt_address" placeholder=""/>
                <div class="placeholder">Home Address:</div>
            </div>

            <div class="text_field_container col-1">
                <input class="text_field" type="text" id="updt_mobile" placeholder=""/>
                <div class="placeholder">Phone Number:</div>
            </div>
        </div>
    </div>

    <div class="user-in">
        <div class="title">USER ACCOUNT INFORMATION</div>
        
        <div class="profile-segment-div">
            <div class="text_field_container col-2">
                <input class="text_field" type="text" id="s_staff_id" placeholder="" readonly="readonly"/>
                <div class="placeholder">User ID:</div>
                <div class="lock-container"><i class="bi-lock"></i></div>
            </div>

            <div class="text_field_container col-1">
                <input class="text_field" type="text" id="s_created_time" placeholder="" readonly="readonly"/>
                <div class="placeholder">Date Of Registration:</div>
                <div class="lock-container"><i class="bi-lock"></i></div>
            </div>

            <div class="text_field_container col-1">
                <input class="text_field" type="text" id="s_last_login" placeholder="" readonly="readonly"/>
                <div class="placeholder">Last Login Date:</div>
                <div class="lock-container"><i class="bi-lock"></i></div>
            </div>

            <div class="text_field_container extension_text_field_container col-2" id="selectContainer">
                <select class="text_field selectSearch" placeholder="" id="searchStatus"
                    onclick="_selectOption('searchStatus')" style="opacity: 1;">
                    <option selected="selected" value="">-Select Status-</option>
                </select>
                
                <div class="placeholder">Select Here</div>
                <div class="searchPanel animated fadeIn" id="searchPanel_searchStatus"
                    style="display: none;">
                    <input class="searchTxt" placeholder="Type here to search"
                        id="txtSearchValue_searchStatus" autocomplete="off"
                        onkeyup="filter('searchStatus')">
                    <ul id="searchList_searchStatus" data-aos="fade-up" data-aos-duration="200"
                        class="aos-init aos-animate">
                        <li onclick="_clickOption('searchList_searchStatus', 'Active', 'Active')">Active</li>
                        <li onclick="_clickOption('searchList_searchStatus', 'Suspend', 'Suspend')">Suspend</li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="btn-div">
            <button class="btn" type="button" title="UPDATE PROFILE" id="update_btn" onclick=""> UPDATE PROFILE <i class="bi-check"></i></button>     
        </div>
    </div> 
<?php }?>

<?php if($page=='transaction_history'){?>
    <div class="chart-div-notifications user-details-notf">
        <div class="text"><i class="bi-graph-up-arrow"></i> Showing Transaction History for </div> 

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

    <div class="table-div animated fadeIn">
        <table class="table" cellspacing="0" style="width:100%" id="fetchAllUsers">
            <thead>
                <tr class="tb-col">
                    <th>Date</th>
                    <th>Transaction ID</th>
                    <th>Product</th>
                    <th>Amount</th>
                    <th>Payment Method</th>
                    <th>Product Status</th>
                    <th>Payment Status</th>
                </tr>
            </thead>
            <tbody>
                <tr class="tb-row other-tb-row">
                    <td>2024-12-20 07:01:11</td>
                    <td class="first-td" title="" onclick="_getFormWithId();">TRANS29020241223</td>
                    <td>Hosting</td>
                    <td>$390,406.00</td>
                    <td>Pay With Wallet</td>
                    <td><div class="status-div active">Success</div></td>
                    <td><div class="status-div active">Success</div></td>
                </tr>

                <tr class="tb-row other-tb-row">
                    <td>2024-12-20 07:01:11</td>
                    <td class="first-td" title="" onclick="_getFormWithId();">TRANS29020241223</td>
                    <td>Hosting</td>
                    <td>$390,406.00</td>
                    <td>Pay With Wallet</td>
                    <td><div class="status-div active">Success</div></td>
                    <td><div class="status-div active">Success</div></td>
                </tr>

                <tr class="tb-row other-tb-row">
                    <td>2024-12-20 07:01:11</td>
                    <td class="first-td" title="" onclick="_getFormWithId();">TRANS29020241223</td>
                    <td>Hosting</td>
                    <td>$390,406.00</td>
                    <td>Pay With Wallet</td>
                    <td><div class="status-div active">Success</div></td>
                    <td><div class="status-div active">Success</div></td>
                </tr>

                <tr class="tb-row other-tb-row">
                    <td>2024-12-20 07:01:11</td>
                    <td class="first-td" title="" onclick="_getFormWithId();">TRANS29020241223</td>
                    <td>Hosting</td>
                    <td>$390,406.00</td>
                    <td>Pay With Wallet</td>
                    <td><div class="status-div active">Success</div></td>
                    <td><div class="status-div active">Success</div></td>
                </tr>
            </tbody>
        </table>
    </div>
<?php }?>

<?php if($page=='wallet_history'){?>
    <div class="chart-div-notifications user-details-notf">
        <div class="text"><i class="bi-graph-up-arrow"></i> Showing Wallet History for </div> 

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
    
    <div class="table-div animated fadeIn">
        <table class="table" cellspacing="0" style="width:100%" id="fetchAllUsers">
            <thead>
                <tr class="tb-col">
                    <th>Date</th>
                    <th>Transaction ID</th>
                    <th>Balance Before</th>
                    <th>Amount Loaded</th>
                    <th>Balance After</th>
                    <th>Transaction Type</th>
                    <th>Status</th>
                </tr>
            </thead>
            <tbody>
                <tr class="tb-row other-tb-row">
                    <td>2024-12-20 07:01:11</td>
                    <td class="first-td" title="" onclick="_getFormWithId();">TRANS29020241223</td>
                    <td>$220,406.51</td>
                    <td>$390,406.00</td>
                    <td>$20,408.13</td>
                    <td>DEBIT</td>
                    <td><div class="status-div active">Success</div></td>
                </tr>

                <tr class="tb-row other-tb-row">
                    <td>2024-12-23 07:01:19</td>
                    <td class="first-td" title="" onclick="_getFormWithId();">TRANS290202412210</td>
                    <td>$420,406.51</td>
                    <td>$320,406.00</td>
                    <td>$20,208.13</td>
                    <td>CREDIT</td>
                    <td><div><div class="status-div active">Success</div></div></td>
                </tr>

                <tr class="tb-row other-tb-row">
                    <td>2024-12-13 07:01:10</td>            
                    <td class="first-td" title="" onclick="_getFormWithId();">TRANS29020241240</td>
                    <td>$280,406.51</td>
                    <td>$310,306.00</td>
                    <td>$30,408.13</td>
                    <td>DEBIT</td>
                    <td><div><div class="status-div active">Success</div></div></td>
                </tr>

                <tr class="tb-row other-tb-row">
                    <td>2024-12-22 07:01:13</td>
                    <td class="first-td" title="" onclick="_getFormWithId();">TRANS29020241251</td>
                    <td>$210,406.51</td>
                    <td>$30,408.13</td>
                    <td>$20,408.12</td>
                    <td>CREDIT</td>
                    <td><div><div class="status-div suspended">Cancelled</div></div></td>
                </tr>
            </tbody>
        </table>
    </div>
<?php }?>