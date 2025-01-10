<?php if ($page == 'dashboard') { ?>
    <div class="page-title-back-div" data-aos="fade-in" data-aos-duration="1500">
        <div class="page-title-div">
            <div class="top-title"><span id="page-title"><i class="bi-speedometer2"></i> User Dashboard Overview</span></div>
            <div class="main-title">👋 Hello, <span id="login_fullname">OLUWAGBENGA</span></div>
        </div>
    </div>

    <div class="domain-search-back-div" data-aos="fade-in" data-aos-duration="1500">
        <div class="search-back-div">
            <div class="div-in">
                <span>Search up a Domain</span>
                <div class="search-cont">
                    <div class="text_field_container dash_field_container">
                        <input class="text_field dash_text_field" type="text" placeholder="" title="Type Here To Search..." />
                        <div class="placeholder dash_placeholder"><i class="bi-search"></i> Type Here To Find Your Domain</div>
                    </div>

                    <button class="btn" type="button" title="Search Domain" onclick="">
                        <i class="bi-search"></i>Search
                    </button>
                </div>
            </div>
        </div>

        <div class="wallet-back-div">
            <div class="div-in">
                <div class="top-div">
                    <span><i class="bi-credit-card"></i> Wallet</span>
                    <button class="btn" type="button" title="Top Up Balance" onclick="">Top Up Balance </button>
                </div>

                <div class="wallet-div">
                    <span>Available Balance</span>
                    <div class="amount" id="wallet_balance">$250,000.00</div>
                </div>
            </div>
        </div>
    </div>

    <div class="dynamic-back-div" data-aos="fade-in" data-aos-duration="1500">
        <div class="table-div animated fadeIn">
            <ul>
                <li class="active-li" title="Domain" id="domain_table" onclick="_getTableContent('domain_table','domain_table','')"><i class="bi-globe2"></i> Domains</li>
                <li title="Hosting" id="hosting_table" onclick="_getTableContent('hosting_table','hosting_table','')"><i class="bi-hdd-rack"></i> Hostings</li>
            </ul>

            <div id="get_table_details">
                <table class="table" cellspacing="0" style="width:100%" id="fetchAllUsers">
                    <thead>
                        <tr class="tb-col">
                            <th>Domain Name</th>
                            <th>Date</th>
                            <th>Status</th>
                        </tr>
                    </thead>

                    <tbody>
                        <tr class="tb-row">
                            <td class="first-td" title="afootechglobal.com">
                                <div class="icon-div"><i class="bi-lock-fill"></i></div> afootechglobal.com
                            </td>
                            <td>2024-11-18</td>
                            <td>
                                <div class="status-div expired">Expired</div>
                            </td>
                        </tr>

                        <tr class="tb-row">
                            <td class="first-td">
                                <div class="icon-div active-icon"><i class="bi-lock-fill"></i></div> samkaytechcenter.com
                            </td>
                            <td>2024-11-18</td>
                            <td>
                                <div class="status-div active">Active</div>
                            </td>
                        </tr>

                        <tr class="tb-row">
                            <td class="first-td">
                                <div class="icon-div active-icon"><i class="bi-lock-fill"></i></div> ebonymart.com
                            </td>
                            <td>2024-11-18</td>
                            <td>
                                <div class="status-div active">Active</div>
                            </td>
                        </tr>

                        <tr class="tb-row">
                            <td class="first-td">
                                <div class="icon-div"><i class="bi-lock-fill"></i></div> connectglobalistics.com
                            </td>
                            <td>2024-11-18</td>
                            <td>
                                <div class="status-div expired">Expired</div>
                            </td>
                        </tr>
                    </tbody>
                </table>

                <div class="bottom-div">
                    <span title="View All Domains" onclick="_getPage('domains','domains');">View All</span>
                </div>
            </div>
        </div>
    </div>
<?php } ?>

<?php if ($page == 'domain_table') { ?>
    <div id="get_table_details" data-aos="fade-in" data-aos-duration="1500">
        <table class="table" cellspacing="0" style="width:100%" id="fetchAllUsers">
            <thead>
                <tr class="tb-col">
                    <th>Domain Name</th>
                    <th>Date</th>
                    <th>Status</th>
                </tr>
            </thead>

            <tbody>
                <tr class="tb-row">
                    <td class="first-td" title="afootechglobal.com">
                        <div class="icon-div"><i class="bi-lock-fill"></i></div> afootechglobal.com
                    </td>
                    <td>2024-11-18</td>
                    <td>
                        <div class="status-div expired">Expired</div>
                    </td>
                </tr>

                <tr class="tb-row">
                    <td class="first-td">
                        <div class="icon-div active-icon"><i class="bi-lock-fill"></i></div> samkaytechcenter.com
                    </td>
                    <td>2024-11-18</td>
                    <td>
                        <div class="status-div active">Active</div>
                    </td>
                </tr>

                <tr class="tb-row">
                    <td class="first-td">
                        <div class="icon-div active-icon"><i class="bi-lock-fill"></i></div> ebonymart.com
                    </td>
                    <td>2024-11-18</td>
                    <td>
                        <div class="status-div active">Active</div>
                    </td>
                </tr>

                <tr class="tb-row">
                    <td class="first-td">
                        <div class="icon-div"><i class="bi-lock-fill"></i></div> connectglobalistics.com
                    </td>
                    <td>2024-11-18</td>
                    <td>
                        <div class="status-div expired">Expired</div>
                    </td>
                </tr>
            </tbody>
        </table>
        <div class="bottom-div">
            <span title="View All Domains" onclick="_getPage('domains','domains');">View All</span>
        </div>
    </div>
<?php } ?>

<?php if ($page == 'hosting_table') { ?>
    <div id="get_table_details" data-aos="fade-in" data-aos-duration="1500">
        <table class="table" cellspacing="0" style="width:100%" id="fetchAllUsers">
            <thead>
                <tr class="tb-col">
                    <th>Hosting Plan</th>
                    <th>Domain</th>
                    <th>Next Due</th>
                    <th>Status</th>
                </tr>
            </thead>

            <tbody>
                <tr class="tb-row">
                    <td class="first-td" title="afootechglobal.com"> Pro (20GB) Linux Shared Hosting</td>
                    <td>samkaytechcenter.com</td>
                    <td>12-05-2024</td>
                    <td>
                        <div class="status-div active">Active</div>
                    </td>
                </tr>

                <tr class="tb-row">
                    <td class="first-td" title="afootechglobal.com"> Pro (15GB) Linux Shared Hosting</td>
                    <td>afootechglobal.com</td>
                    <td>12-08-2024</td>
                    <td>
                        <div class="status-div expired">Terminated</div>
                    </td>
                </tr>

                <tr class="tb-row">
                    <td class="first-td" title="afootechglobal.com"> Pro (8GB) Linux Shared Hosting</td>
                    <td>ebonymart.com</td>
                    <td>12-01-2024</td>
                    <td>
                        <div class="status-div active">Active</div>
                    </td>
                </tr>
            </tbody>
        </table>
        <div class="bottom-div">
            <span title="View All Hosting" onclick="_getPage('shared_hosting','shared_hosting');">View All</span>
        </div>
    </div>
<?php } ?>

<?php if ($page == 'shared_hosting') { ?>
    <div class="page-title-back-div other-pages-title-back-div" data-aos="fade-in" data-aos-duration="1500">
        <div class="page-title-div">
            <div class="back-div"><span>Hosting /</span>Shared Hosting</div>
            <div class="main-title"><i class="bi-hdd-rack"></i> <strong>Shared Hosting</strong></div>
        </div>

        <div class="other-pages-title-div">
            <div class="text_field_container extension_text_field_container" id="selectContainer">
                <select class="text_field selectSearch" placeholder="" id="searchStatus"
                    onclick="_selectOption('searchStatus')" style="opacity: 1;">
                    <option selected="selected" value="">All Status</option>
                </select>

                <div class="placeholder">Filter By</div>
                <div class="searchPanel addSearchPanel animated fadeIn" id="searchPanel_searchStatus"
                    style="display: none;">
                    <input class="searchTxt" placeholder="Type here to search"
                        id="txtSearchValue_searchStatus" autocomplete="off"
                        onkeyup="filter('searchStatus')">
                    <ul id="searchList_searchStatus" data-aos="fade-up" data-aos-duration="200"
                        class="aos-init aos-animate">
                        <li onclick="_clickOption('searchList_searchStatus', 'All Status', 'All Status')">All Status</li>
                        <li onclick="_clickOption('searchList_searchStatus', 'Active', 'Active')">Active</li>
                        <li onclick="_clickOption('searchList_searchStatus', 'Inactive', 'Inactive')">Inactive</li>
                        <li onclick="_clickOption('searchList_searchStatus', 'Pending', 'Pending')">Pending</li>
                    </ul>
                </div>
            </div>


            <div class="text_field_container dash_field_container">
                <input class="text_field dash_text_field" type="text" id="searchHosting" onkeyup="filters('Hosting');" placeholder="" title="Search by domain, hosting Plan" />
                <div class="placeholder dash_placeholder"><i class="bi-search"></i> Search by domain, hosting Plan</div>
            </div>

            <button class="btn" type="button" title="Buy Hosting" onclick="">
                <i class="bi-hdd-rack"></i> Buy Hosting
            </button>
        </div>
    </div>

    <div class="dynamic-back-div">
        <script>_checkAll();</script>
        <div class="table-div animated fadeIn">
            <table class="table" cellspacing="0" style="width:100%" id="fetchAllHosting">
                <thead>
                    <tr class="tb-col">
                        <th>
                            <label>
                                <input type="checkbox" id="parent">
                            </label>
                        </th>
                        <th>Hosting Plan</th>
                        <th>Domain</th>
                        <th>Next Due</th>
                        <th>Auto Renew</th>
                        <th>Status</th>
                        <th></th>
                    </tr>
                </thead>

                <tbody>
                    <tr class="tb-row">
                        <td>
                            <label>
                                <input type="checkbox" class="child">
                            </label>
                        </td>
                        <td> Pro (20GB) Linux Shared Hosting</td>
                        <td>samkaytechcenter.com</td>
                        <td>12-05-2024</td>
                        <td><label class="switch">
                                <input type="checkbox" checked>
                                <span class="slider"></span>
                                <span class="toggle-label">ON</span>
                            </label>
                        </td>
                        <td>
                            <div class="status-div active">Active</div>
                        </td>
                        <td class="manage">Manage</td>
                    </tr>

                    <tr class="tb-row">
                        <td>
                            <label>
                                <input type="checkbox" class="child">
                            </label>
                        </td>
                        <td> Pro (15GB) Linux Shared Hosting</td>
                        <td>afootechglobal.com</td>
                        <td>12-08-2024</td>
                        <td><label class="switch">
                                <input type="checkbox">
                                <span class="slider"></span>
                                <span class="toggle-label">OFF</span>
                            </label>
                        </td>
                        <td>
                            <div class="status-div expired">Cancelled</div>
                        </td>
                    </tr>

                    <tr class="tb-row">
                        <td>
                            <label>
                                <input type="checkbox" class="child">
                            </label>
                        </td>
                        <td> Pro (8GB) Linux Shared Hosting</td>
                        <td>ebonymart.com</td>
                        <td>12-01-2024</td>
                        <td><label class="switch">
                                <input type="checkbox" checked>
                                <span class="slider"></span>
                                <span class="toggle-label">ON</span>
                            </label>
                        </td>
                        <td>
                            <div class="status-div active">Active</div>
                        </td>
                        <td class="manage">Manage</td>
                    </tr>

                    <tr class="tb-row">
                        <td>
                            <label>
                                <input type="checkbox" class="child">
                            </label>
                        </td>
                        <td> Pro (20GB) Linux Shared Hosting</td>
                        <td>samkaytechcenter.com</td>
                        <td>12-05-2024</td>
                        <td><label class="switch">
                                <input type="checkbox" checked>
                                <span class="slider"></span>
                                <span class="toggle-label">ON</span>
                            </label>
                        </td>
                        <td>
                            <div class="status-div active">Active</div>
                        </td>
                        <td class="manage">Manage</td>
                    </tr>

                    <tr class="tb-row">
                        <td>
                            <label>
                                <input type="checkbox" class="child">
                            </label>
                        </td>
                        <td> Pro (15GB) Linux Shared Hosting</td>
                        <td>livewellhospitalng.com</td>
                        <td>12-08-2024</td>
                        <td><label class="switch">
                                <input type="checkbox">
                                <span class="slider"></span>
                                <span class="toggle-label">OFF</span>
                            </label>
                        </td>
                        <td>
                            <div class="status-div expired">Terminated</div>
                        </td>
                    </tr>
                    <script>_tableToggle();</script>
                </tbody>
            </table>
        </div>

        <div class="pagination-back-div">
            <div class="div-in">
                <div class="count">
                    Showing <span id="current-start">1</span> to <span id="current-end">10</span> of <span id="total-entries">11</span> entries
                </div>
                <div class="pagination-controls">
                    <button id="prev-btn" title="Previous" class="pagination-btn" disabled>Previous</button>
                    <button id="page-1" class="pagination-page active">1</button>
                    <button id="page-2" class="pagination-page">2</button>
                    <button id="next-btn" title="Next" class="pagination-btn">Next</button>
                </div>
            </div>
        </div>
        <script>
            _getPagination(10);
        </script>
    </div>
<?php } ?>

<?php if ($page == 'domains') { ?>
    <div class="page-title-back-div other-pages-title-back-div" data-aos="fade-in" data-aos-duration="1500">
        <div class="page-title-div">
            <div class="back-div"><span>Domain /</span>My Domains</div>
            <div class="main-title"><i class="bi-hdd-rack"></i> <strong>My Domains</strong></div>
        </div>

        <div class="other-pages-title-div">
            <div class="text_field_container extension_text_field_container" id="selectContainer">
                <select class="text_field selectSearch" placeholder="" id="searchStatus"
                    onclick="_selectOption('searchStatus')" style="opacity: 1;">
                    <option selected="selected" value="">All Status</option>
                </select>

                <div class="placeholder">Filter By</div>
                <div class="searchPanel addSearchPanel animated fadeIn" id="searchPanel_searchStatus"
                    style="display: none;">
                    <input class="searchTxt" placeholder="Type here to search"
                        id="txtSearchValue_searchStatus" autocomplete="off"
                        onkeyup="filter('searchStatus')">
                    <ul id="searchList_searchStatus" data-aos="fade-up" data-aos-duration="200"
                        class="aos-init aos-animate">
                        <li onclick="_clickOption('searchList_searchStatus', 'All Status', 'All Status')">All Status</li>
                        <li onclick="_clickOption('searchList_searchStatus', 'Active', 'Active')">Active</li>
                        <li onclick="_clickOption('searchList_searchStatus', 'Inactive', 'Inactive')">Inactive</li>
                        <li onclick="_clickOption('searchList_searchStatus', 'Pending', 'Pending')">Pending</li>
                    </ul>
                </div>
            </div>


            <div class="text_field_container dash_field_container">
                <input class="text_field dash_text_field" type="text" id="searchDomains" onkeyup="filters('Domains')" placeholder="" title="Search by domain, hosting Plan" />
                <div class="placeholder dash_placeholder"><i class="bi-search"></i> Search by domain</div>
            </div>
        </div>
    </div>

    <div class="dynamic-back-div" data-aos="fade-in" data-aos-duration="1500">
        <script>_checkAll();</script>
        <div class="table-div animated fadeIn">
            <table class="table" cellspacing="0" style="width:100%" id="fetchAllDomains">
                <thead>
                    <tr class="tb-col">
                        <th>
                            <label>
                                <input type="checkbox" id="parent">
                            </label>
                        </th>
                        <th>Domain Name</th>
                        <th>Next Due</th>
                        <th>Auto Renew</th>
                        <th>Status</th>
                        <th></th>
                    </tr>
                </thead>

                <tbody>
                    <tr class="tb-row">
                        <td>
                            <label>
                                <input type="checkbox" class="child">
                            </label>
                        </td>
                        <td title="afootechglobal.com">
                            <div class="icon-div"><i class="bi-lock-fill"></i></div> afootechglobal.com
                        </td>
                        <td>2024-11-18</td>
                        <td><label class="switch">
                                <input type="checkbox">
                                <span class="slider"></span>
                                <span class="toggle-label">OFF</span>
                            </label>
                        </td>
                        <td>
                            <div class="status-div expired">Expired</div>
                        </td>
                    </tr>

                    <tr class="tb-row">
                        <td>
                            <label>
                                <input type="checkbox" class="child">
                            </label>
                        </td>
                        <td>
                            <div class="icon-div active-icon"><i class="bi-lock-fill"></i></div> samkaytechcenter.com
                        </td>
                        <td>2024-11-18</td>
                        <td><label class="switch">
                                <input type="checkbox" checked>
                                <span class="slider"></span>
                                <span class="toggle-label">ON</span>
                            </label>
                        </td>
                        <td>
                            <div class="status-div active">Active</div>
                        </td>
                        <td class="manage">Manage Domain</td>
                    </tr>

                    <tr class="tb-row">
                        <td>
                            <label>
                                <input type="checkbox" class="child">
                            </label>
                        </td>
                        <td>
                            <div class="icon-div active-icon"><i class="bi-lock-fill"></i></div> ebonymart.com
                        </td>
                        <td>2024-11-18</td>
                        <td><label class="switch">
                                <input type="checkbox" checked>
                                <span class="slider"></span>
                                <span class="toggle-label">ON</span>
                            </label>
                        </td>
                        <td>
                            <div class="status-div active">Active</div>
                        </td>
                        <td class="manage">Manage Domain</td>
                    </tr>

                    <tr class="tb-row">
                        <td>
                            <label>
                                <input type="checkbox" class="child">
                            </label>
                        </td>
                        <td>
                            <div class="icon-div"><i class="bi-lock-fill"></i></div> connectglobalistics.com
                        </td>
                        <td>2024-11-18</td>
                        <td><label class="switch">
                                <input type="checkbox">
                                <span class="slider"></span>
                                <span class="toggle-label">OFF</span>
                            </label>
                        </td>
                        <td>
                            <div class="status-div expired">Expired</div>
                        </td>
                    </tr>

                    <tr class="tb-row">
                        <td>
                            <label>
                                <input type="checkbox" class="child">
                            </label>
                        </td>
                        <td>
                            <div class="icon-div"><i class="bi-lock-fill"></i></div> connectglobalistics.com
                        </td>
                        <td>2024-11-18</td>
                        <td><label class="switch">
                                <input type="checkbox">
                                <span class="slider"></span>
                                <span class="toggle-label">OFF</span>
                            </label>
                        </td>
                        <td>
                            <div class="status-div expired">Expired</div>
                        </td>
                    </tr>

                    <tr class="tb-row">
                        <td>
                            <label>
                                <input type="checkbox" class="child">
                            </label>
                        </td>
                        <td>
                            <div class="icon-div"><i class="bi-lock-fill"></i></div> connectglobalistics.com
                        </td>
                        <td>2024-11-18</td>
                        <td><label class="switch">
                                <input type="checkbox">
                                <span class="slider"></span>
                                <span class="toggle-label">OFF</span>
                            </label>
                        </td>
                        <td>
                            <div class="status-div expired">Expired</div>
                        </td>
                    </tr>

                    <tr class="tb-row">
                        <td>
                            <label>
                                <input type="checkbox" class="child">
                            </label>
                        </td>
                        <td>
                            <div class="icon-div"><i class="bi-lock-fill"></i></div> connectglobalistics.com
                        </td>
                        <td>2024-11-18</td>
                        <td><label class="switch">
                                <input type="checkbox">
                                <span class="slider"></span>
                                <span class="toggle-label">OFF</span>
                            </label>
                        </td>
                        <td>
                            <div class="status-div expired">Expired</div>
                        </td>
                    </tr>

                    <tr class="tb-row">
                        <td>
                            <label>
                                <input type="checkbox" class="child">
                            </label>
                        </td>
                        <td>
                            <div class="icon-div"><i class="bi-lock-fill"></i></div> connectglobalistics.com
                        </td>
                        <td>2024-11-18</td>
                        <td><label class="switch">
                                <input type="checkbox">
                                <span class="slider"></span>
                                <span class="toggle-label">OFF</span>
                            </label>
                        </td>
                        <td>
                            <div class="status-div expired">Expired</div>
                        </td>
                    </tr>

                    <tr class="tb-row">
                        <td>
                            <label>
                                <input type="checkbox" class="child">
                            </label>
                        </td>
                        <td>
                            <div class="icon-div"><i class="bi-lock-fill"></i></div> connectglobalistics.com
                        </td>
                        <td>2024-11-18</td>
                        <td><label class="switch">
                                <input type="checkbox">
                                <span class="slider"></span>
                                <span class="toggle-label">OFF</span>
                            </label>
                        </td>
                        <td>
                            <div class="status-div expired">Expired</div>
                        </td>
                    </tr>

                    <tr class="tb-row">
                        <td>
                            <label>
                                <input type="checkbox" class="child">
                            </label>
                        </td>
                        <td>
                            <div class="icon-div"><i class="bi-lock-fill"></i></div> connectglobalistics.com
                        </td>
                        <td>2024-11-18</td>
                        <td><label class="switch">
                                <input type="checkbox">
                                <span class="slider"></span>
                                <span class="toggle-label">OFF</span>
                            </label>
                        </td>
                        <td>
                            <div class="status-div expired">Expired</div>
                        </td>
                    </tr>

                    <tr class="tb-row">
                        <td>
                            <label>
                                <input type="checkbox" class="child">
                            </label>
                        </td>
                        <td>
                            <div class="icon-div"><i class="bi-lock-fill"></i></div> connectglobalistics.com
                        </td>
                        <td>2024-11-18</td>
                        <td><label class="switch">
                                <input type="checkbox">
                                <span class="slider"></span>
                                <span class="toggle-label">OFF</span>
                            </label>
                        </td>
                        <td>
                            <div class="status-div expired">Expired</div>
                        </td>
                    </tr>
                    <script>_tableToggle();</script>
                </tbody>
            </table>
        </div>

        <div class="pagination-back-div">
            <div class="div-in">
                <div class="count">
                    Showing <span id="current-start">1</span> to <span id="current-end">10</span> of <span id="total-entries">11</span> entries
                </div>
                <div class="pagination-controls">
                    <button id="prev-btn" title="Previous" class="pagination-btn" disabled>Previous</button>
                    <button id="page-1" class="pagination-page active">1</button>
                    <button id="page-2" class="pagination-page">2</button>
                    <button id="next-btn" title="Next" class="pagination-btn">Next</button>
                </div>
            </div>
        </div>
        <script>_getPagination(10);</script>
    </div>
<?php } ?>

<?php if ($page == 'transfer_domain') { ?>
    <div class="page-title-back-div other-pages-title-back-div" data-aos="fade-in" data-aos-duration="1500">
        <div class="page-title-div">
            <div class="back-div"><span>Domain /</span>Transfer Domain</div>
            <div class="main-title"><i class="bi-globe2"></i> <strong>Transfer Domain</strong></div>
            <div class="bottom-title">
                <span>Seamlessly move your digital identity, and elevate your online presence.</span>
            </div>
        </div>
    </div>

    <div class="domain-search-back-div" data-aos="fade-in" data-aos-duration="1500">
        <div class="search-back-div main-search-page">
            <div class="div-in main-search-div-in">
                <h3>Make the switch today and gift your domain an extra year of life!</h3>
                <div class="search-cont">
                    <div class="text_field_container dash_field_container">
                        <input class="text_field dash_text_field" type="text" placeholder="" title="Type Here To Search..." />
                        <div class="placeholder dash_placeholder"> Please enter a domain you want to trnasfer</div>
                    </div>

                    <button class="btn" type="button" title="Search Domain" onclick="">
                        <i class="bi-search"></i>Search
                    </button>
                </div>
                <span>*Certain TLDs and recently renewed domains are not included.</span>
            </div>
        </div>
    </div>

<?php } ?>

<?php if ($page == 'new_domains') { ?>
    <div class="page-title-back-div other-pages-title-back-div" data-aos="fade-in" data-aos-duration="1500">
        <div class="page-title-div">
            <div class="back-div"><span>Domain /</span>Buy new domain</div>
            <div class="main-title"><i class="bi-globe2"></i> <strong>Buy new domain</strong></div>
        </div>
    </div>

    <div class="domain-search-back-div" data-aos="fade-in" data-aos-duration="1500">
        <div class="search-back-div main-search-page">
            <div class="div-in main-search-div-in">
                <h3>Every Great Idea Starts with a Name!</h3>
                <div class="search-cont">
                    <div class="text_field_container dash_field_container">
                        <input class="text_field dash_text_field" type="text" placeholder="" title="Type Here To Search..." />
                        <div class="placeholder dash_placeholder">Find your new domain name</div>
                    </div>

                    <button class="btn" type="button" title="Search Domain" onclick="_searchDomainStatic($('.text_field').val())">
                        <i class="bi-search"></i>Search
                    </button>
                </div>
            </div>
            
            <div class="domain-search" id="notAvailableDomain">
                <div class="left-div">
                    <div class="icon-div"><i class="bi-patch-exclamation"></i></div>
                    <h3>afootech.com is not available</h3>
                </div>
            </div>

            <div class="domain-search" id="availableDomain">
                <div class="left-div">
                    <div class="icon-div green-icon"><i class="bi-check2-circle"></i></div>
                    <h3>afootech.ng is available</h3>
                </div>

                <div class="right-cart-div">
                    <div class="price">₦9,200.00/yr</div>
                    <button class="btn" title="Add to Cart"><i class="bi-cart"></i> Add to Cart</button>
                </div>
            </div>
        </div>
    </div>

    <div class="suggested-domain-back-div" id="suggestedDomain" data-aos="fade-in" data-aos-duration="1500">
        <div class="title">Suggested Domains</div>
        <div class="suggested-domain">
            <div class="left-div">
                <div class="icon-div"><i class="bi-globe2"></i></div>
                <h3>afootech.africa</h3>
            </div>

            <div class="right-cart-div">
                <div class="price">₦26,500.00/yr</div>
                <button class="btn" title="Add to Cart"><i class="bi-cart"></i> Add to Cart</button>
            </div>
        </div>

        <div class="suggested-domain">
            <div class="left-div">
                <div class="icon-div"><i class="bi-globe2"></i></div>
                <h3>afootech.i.ng</h3>
            </div>

            <div class="right-cart-div">
                <div class="price">₦2,600.00/yr</div>
                <button class="btn" title="Add to Cart"><i class="bi-cart"></i> Add to Cart</button>
            </div>
        </div>

        <div class="suggested-domain">
            <div class="left-div">
                <div class="icon-div"><i class="bi-globe2"></i></div>
                <h3>afootech.org.ng</h3>
            </div>

            <div class="right-cart-div">
                <div class="price">₦2,600.00/yr</div>
                <button class="btn" title="Add to Cart"><i class="bi-cart"></i> Add to Cart</button>
            </div>
        </div>
    </div>

    <div class="main-extension-back-div" id="mainExtension" data-aos="fade-in" data-aos-duration="1500">
        <div class="title-div">Our Leading Top-Level Domain Offerings</div>
        <div class="extention-back-div">
            <div class="extention-div">
                <div class="top-div">
                    <div class="img-div domain-ng">
                        <img src="<?php echo $website_url ?>/all-images/images/domain_ng.png" alt="domain" />
                    </div>
                </div>

                <div class="top-div no-border">
                    <h3>₦9,200.00/yr</h3>
                </div>
            </div>

            <div class="extention-div">
                <div class="top-div">
                    <div class="img-div">
                        <img src="<?php echo $website_url ?>/all-images/images/domain_com.png" alt="domain" />
                    </div>
                </div>

                <div class="top-div no-border">
                    <h3>₦22,000.00/yr</h3>
                </div>
            </div>

            <div class="extention-div">
                <div class="top-div">
                    <div class="img-div">
                        <img src="<?php echo $website_url ?>/all-images/images/domain_online.png" alt="domain" />
                    </div>
                </div>

                <div class="top-div no-border">
                    <h3>₦5,000.00/yr</h3>
                </div>
            </div>

            <div class="extention-div">
                <div class="top-div">
                    <div class="img-div">
                        <img src="<?php echo $website_url ?>/all-images/images/domain_store.png" alt="domain" />
                    </div>
                </div>

                <div class="top-div no-border">
                    <h3>₦10,000.00/yr</h3>
                </div>
            </div>
        </div>
    </div>

    <div class="dynamic-back-div" id="TableExtension" data-aos="fade-in" data-aos-duration="1500">
        <div class="table-div animated fadeIn">
            <div class="title-div">
                <div class="left-title"><i class="bi-globe2"></i> Explore other Domains</div>
                <div class="table-search">
                    <div class="text_field_container dash_field_container">
                        <input class="text_field dash_text_field" type="text" id="searchDomainExt" onkeyup="filters('DomainExt')" placeholder="" title="Type Here To Search..." />
                        <div class="placeholder dash_placeholder"> Search by extension e.g .net, .ng, .com, .online</div>
                    </div>
                </div>
            </div>

            <div id="get_table_details">
                <table class="table" cellspacing="0" style="width:100%" id="fetchAllDomainExt">
                    <thead>
                        <tr class="tb-col">
                            <th>Domain Name</th>
                            <th>Price/yr</th>
                            <th>Transfer/yr</th>
                            <th>Renewal/yr</th>
                        </tr>
                    </thead>

                    <tbody>
                        <tr class="tb-row">
                            <td>ng</td>
                            <td>₦9,200.00</td>
                            <td>₦9,200.00</td>
                            <td>₦9,200.00</td>
                        </tr>

                        <tr class="tb-row">
                            <td>africa</td>
                            <td>₦26,500.00</td>
                            <td>₦26,500.00</td>
                            <td>₦26,500.00</td>
                        </tr>

                        <tr class="tb-row">
                            <td>com</td>
                            <td>₦22,000.00</td>
                            <td>₦22,500.00</td>
                            <td>₦22,500.00</td>
                        </tr>

                        <tr class="tb-row">
                            <td>org</td>
                            <td>₦13,100.00</td>
                            <td>₦23,500.00</td>
                            <td>₦23,500.00</td>
                        </tr>

                        <tr class="tb-row">
                            <td>app</td>
                            <td>₦46,000.00</td>
                            <td>₦46,000.00</td>
                            <td>₦46,000.00</td>
                        </tr>

                        <tr class="tb-row">
                            <td>net</td>
                            <td>₦46,000.00</td>
                            <td>₦46,000.00</td>
                            <td>₦46,000.00</td>
                        </tr>

                        <tr class="tb-row">
                            <td>biz</td>
                            <td>₦48,050.00</td>
                            <td>₦48,050.00</td>
                            <td>₦48,050.00</td>
                        </tr>

                        <tr class="tb-row">
                            <td>i.ng</td>
                            <td>₦2,600.00</td>
                            <td>₦2,600.00</td>
                            <td>₦2,600.00</td>
                        </tr>

                        <tr class="tb-row">
                            <td>com.ng</td>
                            <td>₦2,600.00</td>
                            <td>₦2,600.00</td>
                            <td>₦2,600.00</td>
                        </tr>

                        <tr class="tb-row">
                            <td>org.ng</td>
                            <td>₦2,600.00</td>
                            <td>₦2,600.00</td>
                            <td>₦2,600.00</td>
                        </tr>

                        <tr class="tb-row">
                            <td>name.ng</td>
                            <td>₦2,600.00</td>
                            <td>₦2,600.00</td>
                            <td>₦2,600.00</td>
                        </tr>

                        <tr class="tb-row">
                            <td>net.ng</td>
                            <td>₦2,600.00</td>
                            <td>₦2,600.00</td>
                            <td>₦2,600.00</td>
                        </tr>

                        <tr class="tb-row">
                            <td>sch.ng</td>
                            <td>₦2,600.00</td>
                            <td>₦2,600.00</td>
                            <td>₦2,600.00</td>
                        </tr>

                        <tr class="tb-row">
                            <td>edu.ng</td>
                            <td>₦9,200.00</td>
                            <td>₦9,200.00</td>
                            <td>₦9,200.00</td>
                        </tr>

                        <tr class="tb-row">
                            <td>co.uk</td>
                            <td>₦24,000.00</td>
                            <td>₦24,000.00</td>
                            <td>₦24,000.00</td>
                        </tr>

                        <tr class="tb-row">
                            <td>co</td>
                            <td>₦75,500.00</td>
                            <td>₦75,500.00</td>
                            <td>₦75,500.00</td>
                        </tr>

                        <tr class="tb-row">
                            <td>mobi</td>
                            <td>₦63,950.00</td>
                            <td>₦63,950.00</td>
                            <td>₦63,950.00</td>
                        </tr>

                        <tr class="tb-row">
                            <td>tel</td>
                            <td>₦22,000.00</td>
                            <td>₦22,000.00</td>
                            <td>₦22,000.00</td>
                        </tr>

                        <tr class="tb-row">
                            <td>ab.gov.ng</td>
                            <td>₦9,200.00</td>
                            <td>₦9,200.00</td>
                            <td>₦9,200.00</td>
                        </tr>

                        <tr class="tb-row">
                            <td>ak.gov.ng</td>
                            <td>₦9,200.00</td>
                            <td>₦9,200.00</td>
                            <td>₦9,200.00</td>
                        </tr>

                        <tr class="tb-row">
                            <td>ad.gov.ng</td>
                            <td>₦9,200.00</td>
                            <td>₦9,200.00</td>
                            <td>₦9,200.00</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>

        <div class="pagination-back-div">
            <div class="div-in">
                <div class="count">
                    Showing <span id="current-start">1</span> to <span id="current-end">10</span> of <span id="total-entries">11</span> entries
                </div>
                <div class="pagination-controls">
                    <button id="prev-btn" title="Previous" class="pagination-btn" disabled>Previous</button>
                    <button id="next-btn" title="Next" class="pagination-btn">Next</button>
                </div>
            </div>
        </div>
        <script>_getPagination(10);</script>
    </div>
<?php } ?>

<?php if ($page == 'user_profile') { ?>
    <div class="page-title-back-div other-pages-title-back-div" data-aos="fade-in" data-aos-duration="1500">
        <div class="page-title-div">
            <div class="back-div"><span>Account /</span>User Profile</div>
            <div class="main-title"><i class="bi-person"></i> <strong>User Profile</strong></div>
        </div>
    </div>


<?php } ?>























<?php if ($page == 'login') { ?>
    <div class="form-div animated fadeIn" id="view_login" data-aos="fade-right" data-aos-duration="1600">
        <div class="top-div">
            <h1>👋 Hi Welcome Back!</h1>
        </div>

        <div class="inner-form">
            <div class="alert alert-success">
                Kindly, provide your <span>Email Address</span> to Login
            </div>

            <div class="text_field_container">
                <input class="text_field" type="email" id="email" placeholder="" />
                <div class="placeholder">Enter Your Email Address:</div>
            </div>

            <div class="text_field_container">
                <input class="text_field" type="email" id="email" placeholder="" />
                <div class="placeholder">Enter Your Password:</div>
            </div>

            <button class="btn" id="" title="Log In" onclick="location.href='<?php echo $website_url ?>/account'">Log In <i class="bi-check"></i></button>
            <div class="forgot-pass" onclick="_next_page('reset_password_info');">Forgot Password?</div>
        </div>
        <p>Don't have an account? <a href="<?php echo $website_url ?>/account/sign-up"><span>Sign-Up</span></p></a>
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
                <input class="text_field" type="email" id="email" placeholder="" />
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
                <button class="btn" type="button" id="submit_btn" title="Okay" onclick="location.href='<?php echo $website_url ?>/account/reset-password'">
                    OKAY <i class="bi-check2-all"></i>
                </button>
                <div class="notification"><strong>MAIL</strong> not received? <span><i class="bi-send"></i> <strong> RESEND MAIL </strong></span></div>
            </div>
        </div>
    </div>
<?php } ?>

<?php if ($page == 'password_reset_successful') { ?>
    <div class="successful-div animated bounceInDown">
        <div class="success-in">
            <div class="gif">
                <img src="<?php echo $website_url ?>/all-images/images/success.gif" alt="successful gif">
            </div>
            <h3>PASSWORD RESET SUCCESSFULLY</h3>
            <button class="btn" onclick="location.href='<?php echo $website_url ?>/account/login'">OKAY <i class="bi-check2-all"></i></button>
        </div>
    </div>
<?php } ?>

<?php if ($page == 'sign-up') { ?>
    <div class="form-div animated fadeIn" id="view_login" data-aos="fade-right" data-aos-duration="1600">
        <div class="top-div">
            <h1>👋Account Sign Up!</h1>
        </div>

        <div class="inner-form">
            <div class="alert alert-success">
                Kindly fill the following information to complete your registration.
            </div>

            <div class="text_field_container">
                <input class="text_field" type="email" id="email" placeholder="" />
                <div class="placeholder">Enter Your Full Name:</div>
            </div>

            <div class="text_field_container">
                <input class="text_field" type="email" id="email" placeholder="" />
                <div class="placeholder">Enter Your Email Address:</div>
            </div>

            <div class="text_field_container">
                <input class="text_field" type="email" id="email" placeholder="" />
                <div class="placeholder">Create a New Password:</div>
            </div>

            <div class="text_field_container">
                <input class="text_field" type="email" id="email" placeholder="" />
                <div class="placeholder">Confirm New Password:</div>
            </div>

            <button class="btn" id="" title="Sign Up" onclick="">Sign Up <i class="bi-check"></i></button>
            <div class="forgot-pass sign-forgot-pass">Already have an account? <a href="<?php echo $website_url ?>/account/login"><span> Log-In</span></div></a>
        </div>
        <div class="bottom-container">Google reCAPTCHA used. <span>Privacy Policy </span> and <span>Terms of Service</span> apply.</div>
    </div>
<?php } ?>