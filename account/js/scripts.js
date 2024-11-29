
$(window).scroll(function () {
	var scrollheight = $(window).scrollTop();
	if (scrollheight >= 100) {
	  $("#back2Top").fadeIn(1000);
	} else {
	  $("#back2Top").fadeOut(1000);
	 
	}
  });

function _back_to_top(){
		event.preventDefault();
		$("html, body").animate({ scrollTop: 0 }, "slow");
        return false;
}

function _open_menu(){
	   $('.sidenavdiv, .sidenavdiv-in').animate({'margin-left':'0'},200);
	   $('.live-chat-back-div').animate({'margin-left':'-100%'},400);
	   $('.index-menu-back-div').animate({'margin-left':'0'},400);
}
function _open_live_chat(){
	   $('.sidenavdiv, .sidenavdiv-in').animate({'margin-left':'0'},200);
	   $('.index-menu-back-div').animate({'margin-left':'-100%'},400);
	   $('.live-chat-back-div').animate({'margin-left':'0'},400);
}
function _close_side_nav(){
	   $('.sidenavdiv, .sidenavdiv-in').animate({'margin-left':'-100%'},200);
	   $('.index-menu-back-div,.live-chat-back-div').animate({'margin-left':'-100%'},400);
}

function _open_li(ids){
		 $('#'+ids+'-sub-li').toggle('slow');
}

function alert_close(){
	$('#get-more-div').html('').fadeOut(200);
}



function _actionAlert(message,status ){
	let text = '';
	$('.all-alert-back-div').html(text).css('display', 'flex');
	if(status==true){
		text +=
		'<div class="success-alert-div animated fadeInDown">' +
			'<div class="icon"><i class="bi-check-all"></i></div>'+
			'<div class="text"><p>'+message+'</p></div>'+
		'</div>';
	}else{
		text +=
		'<div class="failed-alert-div animated fadeInDown">' +
			'<div class="icon"><i class="bi-exclamation-octagon-fill"></i></div>'+
			'<div class="text"><p>'+message+'</p></div>'+
		'</div>';
	}
	$('.all-alert-back-div').html(text).fadeIn(500).delay(3000).fadeOut(100);
}

function _next_page(next_id) {
    $("#view_login,#reset_password_info,#send_link_info").hide();
    $("#" + next_id).fadeIn(1000);
}


function isNumber_Check(e) {
    var key = e.keyCode || e.which;

    if (!((key >= 48 && key <= 57))) {
        if (e.preventDefault) {
            e.preventDefault();
        } else {
            e.returnValue = false;
        }
    }
}


function _closeNav(){
	$('.side-nav-bg-sub-div').animate({'left':'-100%'},400);
    $('#side-nav-div').animate({'left':'-100px'},200);
}

function _closeAllNav(){
	_closeNav();
	_removeClass();
}

function _removeClass(){
	$('#side-dashboard, #side-staff, #side-blog').removeClass('active-li');
}

function _getNav(nav){
	if(nav==''){
		_closeNav();
	}else{
	   	$('#link-staff').css({'display':'none'});
		$('#link-'+nav).css({'display':'block'});
	   	$('.side-nav-bg-sub-div').animate({'left':'100px'},200);
	}
}


function _getActiveLink(divid, nav) {
	_removeClass()

	$('#side-'+divid).addClass('active-li');
	$("#page-title").html($("#_" + divid).html());

	_getNav(nav);
}


function _getPage(page, divid, nav) {
	_getActiveLink(divid, nav);
	$("#page-content").html('<div class="ajax-loader"><img src="'+ website_url +'/admin/a/all-images/images/spinner.gif" alt="Loading"/></div>').fadeIn("fast");
		const action = "get_page";
		const dataString = "action=" + action + "&page=" + page;
		$.ajax({
		type: "POST",
		url: admin_login_local_url,
		data: dataString,
		cache: false,
		success: function (html) {
			$("#page-content").html(html);
		},
	});
}


function _get_form(page) {
	$("#get-more-div").html('<div class="ajax-loader"><img src="'+website_url+'/all-images/images/ajax-loader.gif"/></div>').css({'display': 'flex','justify-content': 'center','align-items': 'center'}).fadeIn(500);
	var action = "get_form";
	var dataString = "action=" + action + "&page=" + page;
	$.ajax({
	  type: "POST",
	  url: admin_login_local_url,
	  data: dataString,
	  cache: false,
	  success: function (html) { 
		$("#get-more-div").html(html);
	  },
	});
  }
  
function _passwordResetSuccesful(page) {
	$("#get-more-div").css({'display': 'flex','justify-content': 'center','align-items': 'center'}) .fadeIn(500);
	const action = "password_reset_successful";
	const dataString = "action=" + action + "&page=" + page;
	$.ajax({
	  type: "POST",
	  url: admin_login_local_url,
	  data: dataString,
	  cache: false,
	  success: function (html) { 
		$("#get-more-div").html(html);
	  },
	});
}

//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
