<?php if ($page=='staff_reg'){ ?>
    <div class="slide-form-div" data-aos="fade-left" data-aos-duration="900">
        <div class="title-panel-div">
            <div class="inner-top">
                <span id="panel-title"><i class="bi-plus-square"></i> ADD A NEW STAFF</span>
                <div class="close" title="Close" onclick="_alertClose();">X</div>
            </div>
        </div>

        <div class="container-back-div">
            <div class="inner-container">
                <div>
                    <div class="alert alert-success form-alert">Kindly fill the form below to <span> ADD A NEW STAFF</span></div>
                </div>

                <div class="text_field_container">
                    <input class="text_field" type="text" id="fullname" placeholder=""/>
                    <div class="placeholder">Full Name:</div>
                </div>
                
                <div class="text_field_container">
                    <input class="text_field" type="text" id="email" placeholder=""/>
                    <div class="placeholder">Email Address:</div>
                </div>

                <div class="text_field_container">
                    <input class="text_field" type="text" id="phone" placeholder="" onkeypress="isNumber_Check(event)"/>
                    <div class="placeholder">Phone Number:</div>
                </div>

                <div class="text_field_container">
                    <select id="role_id" class="text_field select_text_field" placeholder="">
                        <option value="">-Select here</option>
                    </select>
                    <div class="placeholder">--Select Role--</div>
                </div>

                <div class="text_field_container">
                    <select id="status_id" class="text_field select_text_field" placeholder="">
                        <option value="">-Select here</option>
                    </select>
                    <div class="placeholder">--Select Status--</div>
                </div>

                <div>    
                    <button class="btn" title="SUBMIT" id="submit_btn" onclick=""> <i class="bi-check"></i> SUBMIT </button>             
                </div>
            </div>
        </div>  
    </div>
<?php } ?>

<?php if ($page=='update_staff'){ ?>
    <div class="slide-form-div" data-aos="fade-left" data-aos-duration="900">
        <div class="title-panel-div top-panel-details">
            <div class="inner-top">
                <div class="profile-div">
                    <div class="image-div"><img src="<?php echo $website_url?>/all-images/images/avatar.jpg" alt="Arinsola Olutayo"/></div>
                    <div class="text-div">
                        <span>User Name</span>
                        <h3>Paul Emmanuel</h3>
                    </div>
                </div>
                <div class="close" title="Close" onclick="_alertClose();">X</div>
            </div>
        </div>

        <div class="container-back-div">
            <div class="inner-container">
                <div id="user-details">
                    <div class="details-div">
                        <div class="details-list">
                            <div>Email Address:</div>
                            <div><span>seunemmanuel10@gmail.com</span></div>
                        </div>

                        <div class="details-list">
                            <div>Assigned Role:</div>
                            <div><div class="role-div"><span>Super Admin</span></div></div>
                        </div>

                        <div class="details-list">
                            <div>Last Active:</div>
                            <div><span>2024-11-18 03:28:41</span></div>
                        </div>

                        <div class="details-list">
                            <div>Date Added:</div>
                            <div><span>2024-11-18 03:28:41</span></div>
                        </div>
                    
                        <div class="details-list">
                            <div>Status:</div>
                            <div><div class="status-div active"><span>Active</span></div></div>
                        </div>
                    </div>
                </div>

                <div id="user-form-details">
                    <div>
                        <div class="alert alert-success form-alert">Kindly fill the form below to <span> UPDATE STAFF</span></div>
                    </div>

                    <div class="text_field_container">
                        <input class="text_field" type="text" id="fullname" placeholder=""/>
                        <div class="placeholder">Full Name:</div>
                    </div>
                    
                    <div class="text_field_container">
                        <input class="text_field" type="text" id="email" placeholder=""/>
                        <div class="placeholder">Email Address:</div>
                    </div>

                    <div class="text_field_container">
                        <input class="text_field" type="text" id="phone" placeholder="" onkeypress="isNumber_Check(event)"/>
                        <div class="placeholder">Phone Number:</div>
                    </div>

                    <div class="text_field_container">
                        <select id="role_id" class="text_field select_text_field" placeholder="">
                            <option value="">-Select here</option>
                        </select>
                        <div class="placeholder">--Select Role--</div>
                    </div>

                    <div class="text_field_container">
                        <select id="status_id" class="text_field select_text_field" placeholder="">
                            <option value="">-Select here</option>
                        </select>
                        <div class="placeholder">--Select Status--</div>
                    </div>

                    <div>    
                        <button class="btn" title="SUBMIT" id="submit_btn" onclick=""> <i class="bi-check"></i> SUBMIT </button>             
                    </div>
                </div>
                <br clear="all"/>

                <div>    
                    <button class="btn" title="SUBMIT" id="edit_btn" onclick="_getFormDetails('user-form-details');"> <i class="bi-check"></i> Edit User </button>             
                </div>
            </div>
        </div>  
    </div>
  
<?php } ?>

<?php if ($page=='app_settings'){ ?>
    <div class="slide-form-div" data-aos="fade-left" data-aos-duration="900">
        <div class="title-panel-div">
            <div class="inner-top">
                <span id="back_icon" style="display:none; cursor:pointer;" ><i class="bi-arrow-left" style="cursor:pointer;" onclick="_prevPage('account_settings_id');" ></i> &nbsp;&nbsp;</span>
                <span id="panel-title"><span id="header_icon"> <i class="bi-gear"></i> </span id="app_text"> APP SETTINGS</span>
                <div class="close" title="Close" onclick="_alertClose();">X</div>
            </div>
        </div>

        <div class="container-back-div">
            <div class="inner-container">
                <div class="setting_detail" id="account_settings_id">   

                    <div class="settings-div" onclick="_nextPage('account_detail','back_icon','account');">
                        <div class="div-in">
                            <div class="text-container">
                                <div class="icon-div">
                                    <i class="bi-bank"></i> 
                                </div>
                                <div class="text-div">
                                    <h4 id="account">ACCOUNT DETAILS</h4>
                                    <span>Manage your account information</span>
                                </div>
                            </div>
        
                            <div class="right-icon-div">
                                <i class="bi-chevron-right"></i>
                            </div>
                        </div>
                    </div>

                    <div class="settings-div" onclick="_nextPage('change_password','back_icon','password');">
                        <div class="div-in">
                            <div class="text-container">
                                <div class="icon-div">
                                    <i class="bi-lock"></i>
                                </div>
                                <div class="text-div">
                                    <h4 id="password">CHANGE PASSWORD</h4>
                                    <span>Manage and change password</span>
                                </div>
                            </div>

                            <div class="right-icon-div">
                                <i class="bi-chevron-right"></i>
                            </div>
                        </div>
                    </div>

                </div>

                <div class="setting_detail" id="account_detail">     
                    <div class="alert alert-success form-alert"><span>SMTP DETAILS</span>

                        <div class="text_field_container">
                            <input class="text_field" type="text" id="sender_name" placeholder=""/>
                            <div class="placeholder">SENDER NAME:</div>
                        </div>

                        <div class="text_field_container">
                            <input class="text_field" type="text" id="smtp_host" placeholder=""/>
                            <div class="placeholder">SMTP HOST:</div>
                        </div>

                        <div class="text_field_container">
                            <input class="text_field" type="text" id="smtp_username" placeholder=""/>
                            <div class="placeholder">SMTP USERNAME:</div>
                        </div>
        
                        <div class="text_field_container">
                            <input class="text_field" type="text" id="smtp_password" placeholder=""/>
                            <div class="placeholder">SMTP PASSWORD:</div>
                        </div>

                        <div class="text_field_container">
                            <input class="text_field" type="text" id="smtp_port" placeholder=""/>
                            <div class="placeholder">SMTP PORT:</div>
                        </div>
            
                        <div class="text_field_container">
                            <input class="text_field" type="text" id="support_email" placeholder=""/>
                            <div class="placeholder">SUPPORT EMAIL:</div>
                        </div>                       
                    </div>
                    <button class="btn" title="SUBMIT" id="update_btn" onclick="_updateSettings();"> <i class="bi-check"></i> UPDATE ACCOUNT </button>
                </div>

                <div class="setting_detail" id="change_password">   
                    <div class="alert alert-success">Fill all fields to change your <span>PASSWORD</span></div>

                    <div class="text_field_container">
                        <input class="text_field" type="password" id="old_password" placeholder=""/>                 
                        <div class="placeholder">Enter Your Old Password:</div>
                    </div>

                    <div class="text_field_container">
                        <input class="text_field" type="password" id="new_password" placeholder=""/>                 
                        <div class="placeholder">Create New Password:</div>
                    </div>

                    <div class="text_field_container">
                        <input class="text_field" type="password" id="confirm_password" placeholder=""/>                 
                        <div class="placeholder">Confirm New Password:</div>
                    </div>

                    <div class="pswd_info" style="color:#8c8d8d"><em>At least 8 charaters required including upper & lower cases and special characters and numbers.</em></div>
                    <button class="btn" id="submit_btn" type="button" onclick="_changePassword();" title="CHANGE PASSWORD"> CHANGE PASSWORD</button>      
                </div>
            </div>
        </div> 
    </div>
<?php } ?>

<?php if ($page=='role_reg'){ ?>
    <div class="slide-form-div" data-aos="fade-left" data-aos-duration="900">
        <div class="title-panel-div">
            <div class="inner-top">
                <span id="panel-title"><i class="bi-plus-square"></i> ADD NEW USER ROLE</span>
                <div class="close" title="Close" onclick="_alertClose();">X</div>
            </div>
        </div>

        <div class="container-back-div">
            <div class="inner-container">
                <div>
                    <div class="alert alert-success form-alert">Kindly fill the form below and toggle permissions to<span> ADD NEW USER ROLE</span></div>
                </div>

                <div class="text_field_container">
                    <input class="text_field" type="text" id="fullname" placeholder=""/>
                    <div class="placeholder">Role Name:</div>
                </div>
                
                <div class="text_field_container text_area_container">
                    <textarea class="text_field text_area" type="text" id="email" placeholder=""></textarea>
                    <div class="placeholder">Description:</div>
                </div>

                <div class="permission-form-back-div">
                    <div class="title-div">
                        <h4>Permissions</h4>
                        <p>Every user has a default permission to view dashboard overview. You can customized other settings and permissions based on individual privileges</p>
                    </div>

                    <div class="permission-toggle-div">
                        <div class="each-toggle-div">
                            <span class="title">Domain Permissions</span>
                        </div>
                        
                        <div class="each-toggle-div">
                            <span>Create Domain</span>
                            <label class="switch">
                                <input type="checkbox" checked>
                                <span class="slider"></span>
                                <span class="toggle-label">Yes</span>
                            </label>
                        </div>

                        <div class="each-toggle-div">
                            <span>View Domain</span>
                            <label class="switch">
                                <input type="checkbox">
                                <span class="slider"></span>
                                <span class="toggle-label">No</span>
                            </label>
                        </div>

                        <div class="each-toggle-div">
                            <span>Update Domain</span>
                            <label class="switch">
                                <input type="checkbox">
                                <span class="slider"></span>
                                <span class="toggle-label">No</span>
                            </label>
                        </div>
                    </div>

                    <div class="permission-toggle-div">
                        <div class="each-toggle-div">
                            <span class="title">Administrator Permissions</span>
                        </div>

                        
                        <div class="each-toggle-div">
                            <span>View Users</span>
                            <label class="switch">
                                <input type="checkbox" checked>
                                <span class="slider"></span>
                                <span class="toggle-label">Yes</span>
                            </label>
                        </div>

                        <div class="each-toggle-div">
                            <span>Add/Modify Users</span>
                            <label class="switch">
                                <input type="checkbox">
                                <span class="slider"></span>
                                <span class="toggle-label">No</span>
                            </label>
                        </div>

                        <div class="each-toggle-div">
                            <span>View User Roles</span>
                            <label class="switch">
                                <input type="checkbox">
                                <span class="slider"></span>
                                <span class="toggle-label">No</span>
                            </label>
                        </div>

                        <div class="each-toggle-div">
                            <span>Add/Modify User Roles</span>
                            <label class="switch">
                                <input type="checkbox">
                                <span class="slider"></span>
                                <span class="toggle-label">No</span>
                            </label>
                        </div>
                    </div>

                    <div class="permission-toggle-div">
                        <div class="each-toggle-div">
                            <span class="title">Blog Permissions</span>
                        </div>
                       
                        <div class="each-toggle-div">
                            <span>Create Blog</span>
                            <label class="switch">
                                <input type="checkbox" checked>
                                <span class="slider"></span>
                                <span class="toggle-label">Yes</span>
                            </label>
                        </div>

                        <div class="each-toggle-div">
                            <span>Update Blog</span>
                            <label class="switch">
                                <input type="checkbox">
                                <span class="slider"></span>
                                <span class="toggle-label">No</span>
                            </label>
                        </div>

                        <div class="each-toggle-div">
                            <span>View Blog</span>
                            <label class="switch">
                                <input type="checkbox">
                                <span class="slider"></span>
                                <span class="toggle-label">No</span>
                            </label>
                        </div>
                    </div>

                    <div class="permission-toggle-div">
                        <div class="each-toggle-div">
                            <span class="title">FAQ Permissions</span>
                        </div>
                        
                        <div class="each-toggle-div">
                            <span>Create FAQ</span>
                            <label class="switch">
                                <input type="checkbox" checked>
                                <span class="slider"></span>
                                <span class="toggle-label">Yes</span>
                            </label>
                        </div>

                        <div class="each-toggle-div">
                            <span>Update FAQ</span>
                            <label class="switch">
                                <input type="checkbox">
                                <span class="slider"></span>
                                <span class="toggle-label">No</span>
                            </label>
                        </div>

                        <div class="each-toggle-div">
                            <span>View FAQ</span>
                            <label class="switch">
                                <input type="checkbox">
                                <span class="slider"></span>
                                <span class="toggle-label">No</span>
                            </label>
                        </div>
                    </div>

                    <div class="permission-toggle-div">
                        <div class="each-toggle-div">
                            <span class="title">Report Permissions</span>
                        </div>
                        
                        <div class="each-toggle-div">
                            <span>View Full Report</span>
                            <label class="switch">
                                <input type="checkbox" checked>
                                <span class="slider"></span>
                                <span class="toggle-label">Yes</span>
                            </label>
                        </div>

                        <div class="each-toggle-div">
                            <span>Export Report</span>
                            <label class="switch">
                                <input type="checkbox">
                                <span class="slider"></span>
                                <span class="toggle-label">No</span>
                            </label>
                        </div>
                    </div>

                </div>
                <script>
                    document.querySelectorAll('.switch input').forEach(toggle => {
                        toggle.addEventListener('change', function () {
                            const label = this.nextElementSibling.nextElementSibling; // Grab the toggle-label span
                            label.textContent = this.checked ? 'Yes' : 'No';
                        });
                    });
                </script>
                <div>    
                    <button class="btn" title="SUBMIT" id="submit_btn" onclick=""> <i class="bi-check"></i> SUBMIT </button>             
                </div>
            </div>
        </div>  
    </div>
<?php } ?>

<?php if ($page=='update_role'){ ?>
    <div class="slide-form-div" data-aos="fade-left" data-aos-duration="900">
        <div class="title-panel-div top-panel-details">
            <div class="inner-top">
                <div class="profile-div">
                    
                    <div class="text-div">
                        <span>Role Name</span>
                        <h3>Super Admin</h3>
                    </div>
                </div>
                <div class="close" title="Close" onclick="_alertClose();">X</div>
            </div>
        </div>

        <div class="container-back-div">
            <div class="inner-container">
                <div id="user-details">
                    <div class="details-div">
                        <div class="details-list">
                            <div>Assigned User:</div>
                            <div><span>Paul Emmanuel</span></div>
                        </div>

                        <div class="details-list">
                            <div>Date Created:</div>
                            <div><span>2024-11-18 03:28:41</span></div>
                        </div>
                    </div>

                    <div class="fetched-permission-back-div">
                        <div class="title">Permissions</div>
                        <div class="fetched-permission-div">
                            <span>Add User</span>
                        </div>
                        <div class="fetched-permission-div">
                            <span>Update User</span>
                        </div>
                        <div class="fetched-permission-div">
                            <span>View User</span>
                        </div>
                        <div class="fetched-permission-div">
                            <span>Create Blog</span>
                        </div>
                    </div>
                </div>

                <div id="user-form-details">
                    <div>
                        <div class="alert alert-success form-alert">Kindly fill the form below and toggle permissions to<span> ADD NEW USER ROLE</span></div>
                    </div>

                    <div class="text_field_container">
                        <input class="text_field" type="text" id="fullname" placeholder=""/>
                        <div class="placeholder">Role Name:</div>
                    </div>
                    
                    <div class="text_field_container text_area_container">
                        <textarea class="text_field text_area" type="text" id="email" placeholder=""></textarea>
                        <div class="placeholder">Description:</div>
                    </div>

                    <div class="permission-form-back-div">
                        <div class="title-div">
                            <h4>Permissions</h4>
                            <p>Every user has a default permission to view dashboard overview. You can customized other settings and permissions based on individual privileges</p>
                        </div>

                        <div class="permission-toggle-div">
                            <div class="each-toggle-div">
                                <span class="title">Domain Permissions</span>
                            </div>
                            
                            <div class="each-toggle-div">
                                <span>Create Domain</span>
                                <label class="switch">
                                    <input type="checkbox" checked>
                                    <span class="slider"></span>
                                    <span class="toggle-label">Yes</span>
                                </label>
                            </div>

                            <div class="each-toggle-div">
                                <span>View Domain</span>
                                <label class="switch">
                                    <input type="checkbox">
                                    <span class="slider"></span>
                                    <span class="toggle-label">No</span>
                                </label>
                            </div>

                            <div class="each-toggle-div">
                                <span>Update Domain</span>
                                <label class="switch">
                                    <input type="checkbox">
                                    <span class="slider"></span>
                                    <span class="toggle-label">No</span>
                                </label>
                            </div>
                        </div>

                        <div class="permission-toggle-div">
                            <div class="each-toggle-div">
                                <span class="title">Administrator Permissions</span>
                            </div>
                            
                            <div class="each-toggle-div">
                                <span>View Users</span>
                                <label class="switch">
                                    <input type="checkbox" checked>
                                    <span class="slider"></span>
                                    <span class="toggle-label">Yes</span>
                                </label>
                            </div>

                            <div class="each-toggle-div">
                                <span>Add/Modify Users</span>
                                <label class="switch">
                                    <input type="checkbox">
                                    <span class="slider"></span>
                                    <span class="toggle-label">No</span>
                                </label>
                            </div>

                            <div class="each-toggle-div">
                                <span>View User Roles</span>
                                <label class="switch">
                                    <input type="checkbox">
                                    <span class="slider"></span>
                                    <span class="toggle-label">No</span>
                                </label>
                            </div>

                            <div class="each-toggle-div">
                                <span>Add/Modify User Roles</span>
                                <label class="switch">
                                    <input type="checkbox">
                                    <span class="slider"></span>
                                    <span class="toggle-label">No</span>
                                </label>
                            </div>
                        </div>

                        <div class="permission-toggle-div">
                            <div class="each-toggle-div">
                                <span class="title">Blog Permissions</span>
                            </div>
                        
                            <div class="each-toggle-div">
                                <span>Create Blog</span>
                                <label class="switch">
                                    <input type="checkbox" checked>
                                    <span class="slider"></span>
                                    <span class="toggle-label">Yes</span>
                                </label>
                            </div>

                            <div class="each-toggle-div">
                                <span>Update Blog</span>
                                <label class="switch">
                                    <input type="checkbox">
                                    <span class="slider"></span>
                                    <span class="toggle-label">No</span>
                                </label>
                            </div>

                            <div class="each-toggle-div">
                                <span>View Blog</span>
                                <label class="switch">
                                    <input type="checkbox">
                                    <span class="slider"></span>
                                    <span class="toggle-label">No</span>
                                </label>
                            </div>
                        </div>

                        <div class="permission-toggle-div">
                            <div class="each-toggle-div">
                                <span class="title">FAQ Permissions</span>
                            </div>
                            
                            <div class="each-toggle-div">
                                <span>Create FAQ</span>
                                <label class="switch">
                                    <input type="checkbox" checked>
                                    <span class="slider"></span>
                                    <span class="toggle-label">Yes</span>
                                </label>
                            </div>

                            <div class="each-toggle-div">
                                <span>Update FAQ</span>
                                <label class="switch">
                                    <input type="checkbox">
                                    <span class="slider"></span>
                                    <span class="toggle-label">No</span>
                                </label>
                            </div>

                            <div class="each-toggle-div">
                                <span>View FAQ</span>
                                <label class="switch">
                                    <input type="checkbox">
                                    <span class="slider"></span>
                                    <span class="toggle-label">No</span>
                                </label>
                            </div>
                        </div>

                        <div class="permission-toggle-div">
                            <div class="each-toggle-div">
                                <span class="title">Report Permissions</span>
                            </div>
                            
                            <div class="each-toggle-div">
                                <span>View Full Report</span>
                                <label class="switch">
                                    <input type="checkbox" checked>
                                    <span class="slider"></span>
                                    <span class="toggle-label">Yes</span>
                                </label>
                            </div>

                            <div class="each-toggle-div">
                                <span>Export Report</span>
                                <label class="switch">
                                    <input type="checkbox">
                                    <span class="slider"></span>
                                    <span class="toggle-label">No</span>
                                </label>
                            </div>
                        </div>

                        <script>
                            document.querySelectorAll('.switch input').forEach(toggle => {
                                toggle.addEventListener('change', function () {
                                    const label = this.nextElementSibling.nextElementSibling; // Grab the toggle-label span
                                    label.textContent = this.checked ? 'Yes' : 'No';
                                });
                            });
                        </script>

                        <div>    
                            <button class="btn" title="SUBMIT" id="submit_btn" onclick=""> <i class="bi-check"></i> SUBMIT </button>             
                        </div>
                    </div>
                    <br clear="all"/>
                </div>
                
                <div>    
                    <button class="btn" title="SUBMIT" id="edit_btn" onclick="_getFormDetails('user-form-details');"> <i class="bi-check"></i> Edit User Role </button>             
                </div>
            </div>
        </div>  
    </div>
  
<?php } ?>

<?php if ($page=='status_reg'){ ?>
    <div class="slide-form-div" data-aos="fade-left" data-aos-duration="900">
        <div class="title-panel-div">
            <div class="inner-top">
                <span id="panel-title"><i class="bi-plus-square"></i> ADD NEW STATUS</span>
                <div class="close" title="Close" onclick="_alertClose();">X</div>
            </div>
        </div>

        <div class="container-back-div">
            <div class="inner-container">
                <div>
                    <div class="alert alert-success form-alert">Kindly fill the form below to<span> ADD NEW STATUS</span></div>
                </div>

                <div class="text_field_container">
                    <input class="text_field" type="text" id="fullname" placeholder=""/>
                    <div class="placeholder">Status Name:</div>
                </div>
                
                <div>    
                    <button class="btn" title="SUBMIT" id="submit_btn" onclick=""> <i class="bi-check"></i> SUBMIT </button>             
                </div>
            </div>
        </div>  
    </div>
<?php } ?>

<?php if ($page=='blog_reg'){ ?>
    <div class="slide-form-div" data-aos="fade-left" data-aos-duration="900">
        <div class="title-panel-div">
            <div class="inner-top">
                <span id="panel-title"><i class="bi-plus-square"></i> ADD A NEW BLOG</span>
                <div class="close" title="Close" onclick="_alertClose();">X</div>
            </div>
        </div>

        <div class="container-back-div">
            <div class="inner-container">
                <div>
                    <div class="alert alert-success form-alert">Kindly fill the form below to <span> ADD A NEW BLOG</span></div>
                </div>

                <div class="text_field_container">
                    <select id="role_id" class="text_field select_text_field" placeholder="">
                        <option value="">-Select here</option>
                        <option value="">Domain</option>
                        <option value="">General</option>
                        <option value="">Announcement</option>
                        <option value="">Hosting</option>
                    </select>
                    <div class="placeholder">--Select Blog Category--</div>
                </div>
                
                <div class="text_field_container">
                    <input class="text_field" type="text" id="email" placeholder=""/>
                    <div class="placeholder">Blog Title:</div>
                </div>

                <div class="title">UPLOAD BLOG PICTURE: <i>(JPG, PNG FORMAT ONLY)</i> <span>*</span></div>
                <label>
                    <div class="pix-div">
                        <label>
                        <img id="blog_preview_pix" src="<?php echo $website_url?>/all-images/images/sample.jpg" alt="Default Image">
                        <input type="file" id="reg_thumbnail" style="display:none" accept=".jpg, .jpeg, .png, .gif, .bmp, .tiff, .webp, .svg, .avif" onchange="blogPixPreview.UpdatePreview(this);" />
                    </div> 
                </label>

                <div class="text_field_container">
                    <select id="status_id" class="text_field select_text_field" placeholder="">
                        <option value="">-Select here</option>
                    </select>
                    <div class="placeholder">--Select Status--</div>
                </div>

                <div>    
                    <button class="btn" title="SUBMIT" id="submit_btn" onclick=""> <i class="bi-check"></i> SUBMIT </button>             
                </div>
            </div>
        </div>  
    </div>
<?php } ?>

<?php if ($page=='faq_reg'){ ?>
    <div class="slide-form-div" data-aos="fade-left" data-aos-duration="900">
        <div class="title-panel-div">
            <div class="inner-top">
                <span id="panel-title"><i class="bi-plus-square"></i> ADD A NEW FAQ</span>
                <div class="close" title="Close" onclick="_alertClose();">X</div>
            </div>
        </div>

        <div class="container-back-div">
            <div class="inner-container">
                <div>
                    <div class="alert alert-success form-alert">Kindly fill the form below to <span> ADD A NEW FAQ</span></div>
                </div>

                <div class="text_field_container">
                    <select id="role_id" class="text_field select_text_field" placeholder="">
                        <option value="">-Select here</option>
                        <option value="">Domain</option>
                        <option value="">General</option>
                        <option value="">Announcement</option>
                        <option value="">Hosting</option>
                    </select>
                    <div class="placeholder">--Select FAQ Category--</div>
                </div>
                
                <div class="text_field_container">
                    <input class="text_field" type="text" id="email" placeholder=""/>
                    <div class="placeholder">FAQ Title:</div>
                </div>

                
                <script src="<?php echo $website_url?>/account/js/TextEditor.js" referrerpolicy="origin"></script>
                <script>tinymce.init({selector:'#faq_answer',  // change this value according to your HTML
                plugins: "link, image, table"
                });</script>
                <div style="margin-bottom: 20px;"> 
                    <textarea class="text_field" rows="5" id="faq_answer" title="TYPE FULL PAGE CONTENT HERE" type="text" maxlength="167" placeholder=""></textarea>          
                </div>

                <div class="text_field_container">
                    <select id="status_id" class="text_field select_text_field" placeholder="">
                        <option value="">-Select here</option>
                    </select>
                    <div class="placeholder">--Select Status--</div>
                </div>

                <div>    
                    <button class="btn" title="SUBMIT" id="submit_btn" onclick=""> <i class="bi-check"></i> SUBMIT </button>             
                </div>
            </div>
        </div>  
    </div>
<?php } ?>

<?php if ($page=='blog_cat_reg'){ ?>
    <div class="slide-form-div" data-aos="fade-left" data-aos-duration="900">
        <div class="title-panel-div">
            <div class="inner-top">
                <span id="panel-title"><i class="bi-plus-square"></i> ADD A NEW BLOG CATEGORY</span>
                <div class="close" title="Close" onclick="_alertClose();">X</div>
            </div>
        </div>

        <div class="container-back-div">
            <div class="inner-container">
                <div>
                    <div class="alert alert-success form-alert">Kindly fill the form below to <span> ADD A NEW BLOG CATEGORY</span></div>
                </div>
                
                <div class="text_field_container">
                    <input class="text_field" type="text" id="email" placeholder=""/>
                    <div class="placeholder">Blog Category Name:</div>
                </div>

                <div class="text_field_container">
                    <select id="status_id" class="text_field select_text_field" placeholder="">
                        <option value="">-Select here</option>
                    </select>
                    <div class="placeholder">--Select Status--</div>
                </div>

                <div>    
                    <button class="btn" title="SUBMIT" id="submit_btn" onclick=""> <i class="bi-check"></i> SUBMIT </button>             
                </div>
            </div>
        </div>  
    </div>
<?php } ?>

<?php if ($page=='faq_cat_reg'){ ?>
    <div class="slide-form-div" data-aos="fade-left" data-aos-duration="900">
        <div class="title-panel-div">
            <div class="inner-top">
                <span id="panel-title"><i class="bi-plus-square"></i> ADD A NEW FAQ CATEGORY</span>
                <div class="close" title="Close" onclick="_alertClose();">X</div>
            </div>
        </div>

        <div class="container-back-div">
            <div class="inner-container">
                <div>
                    <div class="alert alert-success form-alert">Kindly fill the form below to <span> ADD A NEW FAQ CATEGORY</span></div>
                </div>
                
                <div class="text_field_container">
                    <input class="text_field" type="text" id="email" placeholder=""/>
                    <div class="placeholder">FAQ Category Name:</div>
                </div>

                <div class="text_field_container">
                    <select id="status_id" class="text_field select_text_field" placeholder="">
                        <option value="">-Select here</option>
                    </select>
                    <div class="placeholder">--Select Status--</div>
                </div>

                <div>    
                    <button class="btn" title="SUBMIT" id="submit_btn" onclick=""> <i class="bi-check"></i> SUBMIT </button>             
                </div>
            </div>
        </div>  
    </div>
<?php } ?>

<?php if ($page=='master_count_reg'){ ?>
    <div class="slide-form-div" data-aos="fade-left" data-aos-duration="900">
        <div class="title-panel-div">
            <div class="inner-top">
                <span id="panel-title"><i class="bi-plus-square"></i> ADD NEW MASTER COUNT</span>
                <div class="close" title="Close" onclick="_alertClose();">X</div>
            </div>
        </div>

        <div class="container-back-div">
            <div class="inner-container">
                <div>
                    <div class="alert alert-success form-alert">Kindly fill the form below and to<span> ADD NEW MASTER COUNT</span></div>
                </div>

                <div class="text_field_container">
                    <input class="text_field" type="text" id="fullname" placeholder=""/>
                    <div class="placeholder">Counter ID:</div>
                </div>

                <div class="text_field_container">
                    <input class="text_field" type="text" id="fullname" placeholder=""/>
                    <div class="placeholder">Counter Value:</div>
                </div>
                
                <div class="text_field_container text_area_container">
                    <textarea class="text_field text_area" type="text" id="email" placeholder=""></textarea>
                    <div class="placeholder">Counter Description:</div>
                </div>

                <div>    
                    <button class="btn" title="SUBMIT" id="submit_btn" onclick=""> <i class="bi-check"></i> SUBMIT </button>             
                </div>
            </div>
        </div>  
    </div>
<?php } ?>

<?php if ($page=='edit_page_form'){?>
    <div class="pages-creation-panel">
        <div class="side-bar">
            <div class="div-in">
                <div class="grid-div">
                    <div class="img-div"><img src="<?php echo $website_url?>/all-images/blog/blog_1.jpg" alt="Blog"></div>
                    <div class="text-div">
                        <div class="top-text"><span>Announcement</span></div>
                        <h2>Maximizing Business Efficiency Through Custom Software...</h2>
                        <div class="text-in">
                            <div class="text">UPDATED ON: <span>27 Jul 2024</span> | <span>486</span> VIEWS </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="pages-content-div">   
            <div class="title-div">
                <ul>
                    <li class="active-li" title="Page Content" id="page_content" onclick="_checkPageContent('page_content','page-content', '<?php echo $publish_id?>')">Page Content </li>
                    <li title="Upload Picture" id="picture_page" onclick="_checkPageContent('picture_page','picture-page', '<?php echo $publish_id?>')">Upload Picture</li>
                </ul>
                <button class="close-btn" onclick="_alertClose()" title="Close"><i class="bi-x-lg"></i></button> 
            </div>
            
            <div class="pages-back-div">
                <div id="get_pages_details">
                    <div class="page-form-div animated fadeIn">
                        <div class="page-title">SEO CONTENT</div>
                        <div class="form-div">
                            <div class="form-input-div">
                                <div class="title">PAGE URL</div>
                                <div class="text_field_container">
                                    <input class="text_field" type="text" id="page_url" placeholder=""/>
                                    <div class="placeholder">page-url:</div>
                                </div>

                                <div class="title">PAGE TITLE <span><em>(Not more than 100 words)</em></span></div>
                                <div class="text_field_container">
                                    <input class="text_field" type="text" maxlength="100" id="page_title" placeholder=""/>
                                    <div class="placeholder">Page Title:</div>
                                </div>

                                <div class="title">SEO KEYWORDS</div>
                                <div class="text_field_container text_area_container">
                                    <textarea class="text_field text_area" type="text" id="seo_keywords" placeholder=""></textarea>
                                    <div class="placeholder">Seo Keywords:</div>
                                </div>
                                
                                <div class="title">SEO DESCRIPTION <span><em>(Not more than 167 words)</em></span></div>
                                <div class="text_field_container text_area_container">
                                    <textarea class="text_field text_area" type="text" maxlength="167" id="seo_description" placeholder=""></textarea>
                                    <div class="placeholder">Seo Description:</div>
                                </div>                        
                            </div>
                            
                            <div class="picture-div">
                                <label>
                                    <div class="pix-div"><img id="seo_flyer_preview_pix" src="<?php echo $website_url?>/all-images/images/sample.jpg"  id="seo-flyer" /></div>
                                    <input type="file" id="seo_flyer" style="display:none" accept=".jpg, .jpeg, .png, .gif, .bmp, .tiff, .webp, .svg, .avif"  onchange="seoFlyer.UpdatePreview(this);" />
                                </label>
                            </div>                        			
                        </div>
                    </div>

                    <div class="page-form-div">
                        <div class="page-title">FULL PAGE CONTENT</div>
                        <div class="form-div content-form">
                            <script src="<?php echo $website_url?>/account/js/TextEditor.js" referrerpolicy="origin"></script>
                            <script>tinymce.init({selector:'#page_content_text',  // change this value according to your HTML
                                plugins: "link, image, table"
                                });</script>
                            <div style="margin-bottom: 5px;">
                                <textarea class="text_field" style="width:100%;" rows="27" id="page_content_text" title="TYPE FULL PAGE CONTENT HERE" type="text" maxlength="167" id="" placeholder=""></textarea>
                            </div>

                            <div class="btn-div">
                                <button class="btn" id="save_btn" title="Save Page" onclick="_addPageContent('<?php echo $publish_id?>')"><i class="bi-save"></i> SAVE</button>
                            </div>
                        </div>
                    </div>    
                </div>    
            </div>
        </div>      
    </div> 
<?php } ?>

<?php if ($page=='page-content'){ ?>
    <div class="page-form-div animated fadeIn">
        <div class="page-title">SEO CONTENT</div>
        <div class="form-div">
            <div class="form-input-div">
                <div class="title">PAGE URL</div>
                <div class="text_field_container">
                    <input class="text_field" type="text" id="page_url" placeholder=""/>
                    <div class="placeholder">page-url:</div>
                </div>

                <div class="title">PAGE TITLE <span><em>(Not more than 100 words)</em></span></div>
                <div class="text_field_container">
                    <input class="text_field" type="text" maxlength="100" id="page_title" placeholder=""/>
                    <div class="placeholder">Page Title:</div>
                </div>

                <div class="title">SEO KEYWORDS</div>
                <div class="text_field_container text_area_container">
                    <textarea class="text_field text_area" type="text" id="seo_keywords" placeholder=""></textarea>
                    <div class="placeholder">Seo Keywords:</div>
                </div>
                
                <div class="title">SEO DESCRIPTION <span><em>(Not more than 167 words)</em></span></div>
                <div class="text_field_container text_area_container">
                    <textarea class="text_field text_area" type="text" maxlength="167" id="seo_description" placeholder=""></textarea>
                    <div class="placeholder">Seo Description:</div>
                </div>                        
            </div>
            
            <div class="picture-div">
                <label>
                    <div class="pix-div"><img id="seo_flyer_preview_pix" src="<?php echo $website_url?>/all-images/images/sample.jpg"  id="seo-flyer" /></div>
                    <input type="file" id="seo_flyer" style="display:none" accept=".jpg, .jpeg, .png, .gif, .bmp, .tiff, .webp, .svg, .avif"  onchange="seoFlyer.UpdatePreview(this);" />
                </label>
            </div>                        			
        </div>
    </div>

    <div class="page-form-div">
        <div class="page-title">FULL PAGE CONTENT</div>
        <div class="form-div content-form">
            <script src="<?php echo $website_url?>/account/js/TextEditor.js" referrerpolicy="origin"></script>
            <script>tinymce.init({selector:'#page_content_text',  // change this value according to your HTML
                plugins: "link, image, table"
                });</script>
            <div style="margin-bottom: 5px;">
                <textarea class="text_field" style="width:100%;" rows="27" id="page_content_text" title="TYPE FULL PAGE CONTENT HERE" type="text" maxlength="167" id="" placeholder=""></textarea>
            </div>

            <div class="btn-div">
                <button class="btn" id="save_btn" title="Save Page" onclick="_addPageContent('<?php echo $publish_id?>')"><i class="bi-save"></i> SAVE</button>
            </div>
        </div>
    </div>     
<?php }?>

<?php if ($page=='picture-page'){ ?>    
    <div class="page-form-div animated fadeIn">
        <div class="page-title">UPLOAD MORE PICTURES</div>
        <div class="form-div form-picture-div">
            <div class="picture-back-div">
                
                <div class="picture-div">
                    <div class="icon-div" onclick=""><i class="bi-trash"></i></div>
                    <img src="<?php echo $website_url?>/all-images/blog/blog_1.jpg" alt="Blog">
                </div>

                <div class="picture-div">
                    <div class="icon-div" onclick=""><i class="bi-trash"></i></div>
                    <img src="<?php echo $website_url?>/all-images/blog/blog_1.jpg" alt="Blog">
                </div>

                <div class="picture-div">
                    <div class="icon-div" onclick=""><i class="bi-trash"></i></div>
                    <img src="<?php echo $website_url?>/all-images/blog/blog_1.jpg" alt="Blog">
                </div>

                <div class="picture-div">
                    <div class="icon-div" onclick=""><i class="bi-trash"></i></div>
                    <img src="<?php echo $website_url?>/all-images/blog/blog_1.jpg" alt="Blog">
                </div>

                <div class="picture-div">
                    <div class="icon-div" onclick=""><i class="bi-trash"></i></div>
                    <img src="<?php echo $website_url?>/all-images/blog/blog_1.jpg" alt="Blog">
                </div>

                <div class="picture-div">
                    <label>
                        <img src="<?php echo $website_url?>/all-images/images/default.png"/>
                        <input type="file" id="pictures" name="pictures[]" multiple accept=".jpg, .JPG, .png, .PNG, .jpeg, .JPEG"  onchange="_save_page_other_pictures('<?php echo $publish_id;?>')" style="display:none;"/>
                    </label>
                </div>
            </div>  
        </div>
    </div>  
<?php }?>

