<div class="side-nav-div animated fadeInLeft">
    <div class="nav-back-div">
        <div class="nav-div active-li" title="Dashboard" onclick="_getPage('dashboard','dashboard', '')" id="side-dashboard">           
            <div class="icon"><i class="bi-speedometer2"></i> Dashboard</div> 
            <div class="hidden" id="_dashboard"><i class="bi-speedometer2"></i> Admin Dashboard Overview</div>
        </div>

        <div class="nav-div" title="Domain" onClick="_getPage('','domain', 'domain')" id="side-domain">
            <div class="icon"><i class="bi-globe2"></i> Domain</div> 
        </div>

        <div class="nav-div" title="Hosting" onClick="_getPage('','hosting', 'hosting')" id="side-hosting">
            <div class="icon"><i class="bi-hdd-rack"></i> Hosting</div> 
        </div>

        <div class="nav-div" title="Staff" onClick="_getPage('staff','staff','')" id="side-staff">
            <div class="icon"><i class="bi-people"></i> Staff</div> 
            <div class="hidden" id="_staff"><i class="bi-people"></i> Active Staff</div>
        </div>   

        <div class="nav-div" title="Users" onClick="_getPage('user','user','')" id="side-user">
            <div class="icon"><i class="bi-people"></i> Users</div> 
            <div class="hidden" id="_user"><i class="bi-speedometer2"></i> Active Staff</div>
        </div>       

        <div class="nav-div" title="Blog" onClick="_getPage('','blog', 'blog')" id="side-blog">
            <div class="icon"><i class="bi-journals"></i> Blog</div> 
        </div> 

        <div class="nav-div" title="FAQ" onClick="_getPage('','faq', 'faq')" id="side-faq">
            <div class="icon" ><i class="bi-patch-question"></i> FAQ</div> 
        </div>

        <div class="nav-div" title="Report" onClick="_getPage('','report', 'report')" id="side-report">
            <div class="icon" ><i class="bi-graph-up-arrow"></i> Report</div> 
        </div>
    </div>
</div>














<!--------------------------for nav sub div view----------------------------------------->

<div class="side-nav-bg-sub-div">
	<div class="nav-div animated fadeInLeft" id="link-domain">
        <div class="link" onClick="_getPage('domain','domain','')">- Active Domain <div class="num" id="total_active_staff_count">0</div></div>
        <div class="hidden" id="_domain"><i class="bi-people"></i> All Active Domain</div>

        <div class="link" onClick="_getPage('suspended_staff','suspended_staff','staff','')">- Domain Packages <div class="num" id="total_suspended_staff_count">0</div></div>
        <div class="hidden" id="_suspended_staff"><i class="fa fa-users"></i> Supended Staff</div>
    </div>

    <div class="nav-div animated fadeInLeft" id="link-hosting">
        <div class="link" onClick="_getPage('domain','domain','domain','')">- Active Hosting <div class="num" id="total_active_staff_count">0</div></div>
        <div class="hidden" id="_staff"><i class="bi-people"></i> All Active Hosting</div>

        <div class="link" onClick="_getPage('suspended_staff','suspended_staff','staff','')">- Hosting Packages <div class="num" id="total_suspended_staff_count">0</div></div>
        <div class="hidden" id="_suspended_staff"><i class="fa fa-users"></i> Supended Staff</div>
    </div>

    <div class="nav-back-div" onclick="_closeNav();"></div>
</div>