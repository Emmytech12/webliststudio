<div class="side-nav-div animated fadeInLeft">
    <div class="nav-back-div">
        <div class="nav-div active-li" title="Dashboard" onClick="_getPage('dashboard','dashboard', '')" id="side-dashboard">           
            <div class="icon"><i class="bi-speedometer2"></i> Dashboard</div> 
            <div class="hidden" id="_dashboard"><i class="bi-speedometer2"></i> Admin Dashboard Overview</div>
        </div>

        <div class="nav-div" title="Staff" onClick="_getPage('','staff','staff')" id="side-staff">
            <div class="icon"><i class="bi-people"></i> Staff</div> 
        </div>          

        <div class="nav-div" title="Blog" onClick="_getPage('','blog', 'blog')" id="side-blog">
            <div class="icon"><i class="bi-file-post"></i> Blog</div> 
        </div>

        <div class="nav-div" title="FAQ" onClick="_getPage('','faq_category', 'faq')" id="side-faq">
            <div class="icon" ><i class="bi-patch-question"></i> FAQ</div> 
        </div>

        <div class="nav-div" title="Staff" onClick="_getPage('','view_staff', 'staff')" id="side-staff">
            <div class="icon"><i class="bi-people"></i> Staff</div> 
        </div> 

        <div class="nav-div" title="FAQ" onClick="_getPage('','faq_category', 'faq')" id="side-faq">
            <div class="icon" ><i class="bi-patch-question"></i> FAQ</div> 
        </div>
    </div>
</div>














<!--------------------------for nav sub div view----------------------------------------->

<div class="side-nav-bg-sub-div">
	<div class="nav-div animated fadeInLeft" id="link-staff">
        <div class="link" onClick="_getPage('active_staff','active_staff','staff','')">- Active Staff <div class="num" id="total_active_staff_count">0</div></div>
        <div class="hidden" id="_staff"><i class="bi-people"></i> All Active Administrators</div>

        <div class="link" onClick="_getPage('suspended_staff','suspended_staff','staff','')">- Supended Staff <div class="num" id="total_suspended_staff_count">0</div></div>
        <div class="hidden" id="_suspended_staff"><i class="fa fa-users"></i> Supended Staff</div>

        <div class="link" onClick="_getPage('prospective_staff','prospective_staff','prospective_staff','')">- Prospective Staff <div class="num" id="total_prospective_staff_count">0</div></div>
        <div class="hidden" id="_prospective_staff"><i class="fa fa-users"></i> Prospective Staff</div>
    </div>

    <div class="nav-back-div" onclick="_closeNav();"></div>
</div>