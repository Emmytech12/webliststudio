<div class="side-nav-div animated fadeInLeft">
    <div class="nav-back-div">
        <div class="nav-div active-li" title="Dashboard" onclick="_closeAllSideLinks(); _getPage('dashboard','dashboard');" id="dashboard">
            <div class="top-nav">
                <div class="nav-in"><i class="bi-speedometer2"></i> <span>Dashboard</span> </div>
            </div>
        </div>

        <div class="nav-div" title="Domain" onclick="_expandSideLink('domains');" id="side-domain">
            <div class="top-nav">
                <div class="nav-in"><i class="bi-globe2"></i> <span>Domain</span></div>
                <i class="bi-chevron-right"></i>
            </div>

            <div class="dashboard-in" id="domains-li" style="display:none">
                <div class="li-in" title="Buy New Domain" onclick="_getPage('new_domains','new_domains');" id="new_domains">Buy New Domain</div>
                <div class="li-in" title="Transfer Domain" onclick="_getPage('transfer_domain','transfer_domain');" id="transfer_domain">Transfer Domain</div>
                <div class="li-in" title="My Domains" onclick="_getPage('domains','domains');" id="domains">My Domains</div>
            </div>
        </div>

        <div class="nav-div" title="Hosting" onclick="_expandSideLink('hostings');" id="side_hosting">
            <div class="top-nav">
                <div class="nav-in"><i class="bi-hdd-rack"></i> Hosting</div>
                <i class="bi-chevron-right"></i>
            </div>

            <div class="dashboard-in" id="hostings-li" style="display:none">
                <div class="li-in active" title="Shared Hosting" onclick="_getPage('shared_hosting','shared_hosting');" id="shared_hosting">Shared Hosting</div>
                <div class="li-in" title="Cloud Hosting" onclick="">Cloud Hosting</div>
            </div>
        </div>

        <div class="nav-div" title="Hosting" onclick="_expandSideLink('emails');" id="side-hosting">
            <div class="top-nav">
                <div class="nav-in"><i class="bi-envelope"></i> Email</div>
                <i class="bi-chevron-right"></i>
            </div>

            <div class="dashboard-in" id="emails-li" style="display:none">
                <div class="li-in" title="Buy a Product" onclick="">Buy a Product</div>
                <div class="li-in" title="My Emails" onclick="">My Emails</div>
            </div>
        </div>

        <div class="nav-div" title="Hosting" onclick="_expandSideLink('supports');" id="side-hosting">
            <div class="top-nav">
                <div class="nav-in"><i class="bi-headset"></i> Support</div>
                <i class="bi-chevron-right"></i>
            </div>

            <div class="dashboard-in" id="supports-li" style="display:none">
                <div class="li-in" title="My Ticket" onclick="">My Ticket</div>
                <div class="li-in" title="Status" onclick="">Status</div>
            </div>
        </div>

        <div class="nav-div" title="Hosting" onclick="_expandSideLink('accounts');" id="side-hosting">
            <div class="top-nav">
                <div class="nav-in"><i class="bi-person"></i> Account</div>
                <i class="bi-chevron-right"></i>
            </div>

            <div class="dashboard-in" id="accounts-li" style="display:none">
                <div class="li-in" title="My Profile" onclick="_getPage('user_profile_Page','user_profile_Page');" id="user_profile_Page">My Profile</div>
                <div class="li-in" title="Security" onclick="">Security</div>
                <div class="li-in" title="Log Out" onclick="">Log Out</div>
            </div>
        </div>
    </div>
</div>