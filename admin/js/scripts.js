
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

function _alertClose(){
	let text = '';
	  text +=
	  '<div class="alert-loading-div">' +
		'<div class="icon"><img src="'+ website_url +'/all-images/images/loading.gif" width="20px" alt="Loading"/></div>' +
		'<div class="text"><p>LOADING...</p></div>'+
		'</div>';
	$('#get-more-div').html(text).fadeOut(200);
}

function _alert_secondary_close(){
  let text = '';
	text +=
	'<div class="alert-loading-div">' +
	  '<div class="icon"><img src='+ website_url +'/all-images/images/loading.gif" width="20px" alt="Loading"/></div>' +
	  '<div class="text"><p>LOADING...</p></div>'+
	  '</div>';
  $('#get-more-div-secondary').html(text).fadeOut(200);
}




function _toggle_profile_pix_div() {
	$(".toggle-profile-div").toggle("slow");
}

function select_search() {
	$(".srch-select").toggle("fast");
}
  
function srch_custom(text){
	$('#srch-text').html(text);
	$('.custom-srch-div').fadeIn(500);
};


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



function updatePercentage(container, targetValue) {
    const circleElement = container.querySelector('.circle');
    const percentageElement = container.querySelector('.percentage');

    percentageElement.textContent = `${targetValue}%`;

    circleElement.classList.remove('red', 'orange', 'yellow', 'blue', 'green');

    if (targetValue < 1 || (targetValue >= 1 && targetValue <= 15)) {
        circleElement.classList.add('red');
    } else if (targetValue > 15 && targetValue <= 30) {
        circleElement.classList.add('orange');
    } else if (targetValue > 30 && targetValue <= 50) {
        circleElement.classList.add('yellow');
    } else if (targetValue > 50 && targetValue <= 80) {
        circleElement.classList.add('blue');
    } else if (targetValue > 80) {
        circleElement.classList.add('green');
    }
}


	
function _nextPage(next_id, icon, divid) {
	$("#account_settings_id,#account_detail,#change_password").hide();
	$("#" + next_id).fadeIn(1000);
	$("#panel-title").html($("#" + icon).html() + $("#" + divid).html());
}
  
function _prevPage(next_id) {
	$("#account_settings_id,#account_detail,#change_password").hide();
	$("#" + next_id).fadeIn(1000);
	$("#panel-title").html(
	  '<i class="bi-gear"></i> </span id="app_text"> APP SETTINGS'
	);
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
	$('#side-dashboard, #side-staff, #side-users, #side-domain, #side-hosting, #side-blog, #side-faq, #side-report').removeClass('active-li');
}

function _getNav(nav){
	if(nav==''){
		_closeNav();
	}else{
	   	$('#link-domain, #link-hosting').css({'display':'none'});
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
	if(page==''){
		//do nothing
	}else{
		$("#page-content").html('<div class="ajax-loader"><img src="'+ website_url +'/all-images/images/spinner.gif"/></div>').fadeIn(500);
		const action = "get_page";
		const dataString = "action=" + action + "&page=" + page;

		$.ajax({
			type: "POST",
			url: admin_local_url,
			data: dataString,
			cache: false,
			success: function (html) {
				$("#page-content").html(html);
			},
		});
	}
}

function _getForm(page) {
	$("#get-more-div").css({'display': 'flex','justify-content': 'center','align-items': 'center'}) .fadeIn(500);
		const action = "get_form";
		const dataString = "action=" + action + "&page=" + page;
		$.ajax({
		type: "POST",
		url: admin_local_url,
		data: dataString,
		cache: false,
		success: function (html) {
			$("#get-more-div").html(html);
		},
	});
}


function _getFormWithId(page, ids) {
	$("#get-more-div").css({'display': 'flex','justify-content': 'center','align-items': 'center'}) .fadeIn(500);
		const action = "get_form_with_id";
		const dataString = "action=" + action + "&page=" + page + "&ids=" + ids;
		$.ajax({
		type: "POST",
		url: admin_local_url,
		data: dataString,
		cache: false,
		success: function (html) {
			$("#get-more-div").html(html);
		},
	});
}

function _editPage(page, publish_id){
	$("#get-more-div").css({'display': 'flex','justify-content': 'center','align-items': 'center'}) .fadeIn(500);
		const action='get_edit_page_form';
		const dataString ='action='+ action + '&page=' + page + '&publish_id=' + publish_id;
		$.ajax({
		type: "POST",
		url: admin_local_url,
		data: dataString,
		cache: false,
		success: function(html){
			$('#get-more-div').html(html);
		}
	});
}
  

function _getActiveModalLink(menu_id){
	$('#page_content, #picture_page').removeClass('active-li');
	$('#' + menu_id).addClass('active-li');
}

function _checkPageContent(menu_id, page, publish_id) {
	_getActiveModalLink(menu_id);
	$('#get_pages_details').html('<div class="ajax-loader"><img src="'+ website_url +'/all-images/images/spinner.gif" alt="Loading"/></div>').fadeIn("slow");
	const action = 'get_edit_page_form';
	const dataString = 'action=' + action + '&page=' + page + '&publish_id=' + publish_id;
	$.ajax({
	  type: "POST",
	  url: admin_local_url,
	  data: dataString,
	  cache: false,
	  success: function (html) {
		$('#get_pages_details').html(html);
	  }
	});
}



function _getUserActiveLink(menu_id){
	$('#user_profile_details, #transaction_history, #domain_history, #hosting_history').removeClass('active');
	$('#' + menu_id).addClass('active');
}

function _getUserPageContents(menu_id, page, ids) {
	_getUserActiveLink(menu_id);
	$('#get_user_details').html('<div class="ajax-loader other-pages-ajax-loader"><img src="'+ website_url +'/all-images/images/spinner.gif" alt="Loading"/></div>').fadeIn("slow");
	const action = 'get_user_details';
	const dataString = 'action=' + action + '&page=' + page + '&ids=' + ids;
	$.ajax({
	  type: "POST",
	  url: admin_local_url,
	  data: dataString,
	  cache: false,
	  success: function (html) {
		$('#get_user_details').html(html);
	  }
	});
}


function _passwordResetSuccesful(page) {
	$("#get-more-div").css({'display': 'flex','justify-content': 'center','align-items': 'center'}) .fadeIn(500);
	const action = "password_reset_successful";
	const dataString = "action=" + action + "&page=" + page;

	$.ajax({
		type: "POST",
		url: admin_local_url,
		data: dataString,
		cache: false,
		success: function (html) { 
			$("#get-more-div").html(html);
		},
	});
}


function _nextLoginPage(next_id, divid) {
    $("#view_login, #view_forgot_password, #send_link_info").hide();
	$('#login_id, #reset_pass_id').removeClass('active-li');

    $("#" + next_id).fadeIn(1000);
	$('#' + divid).addClass('active-li');
}



function _getFormDetails(next_id) {
	$('#user-form-details').hide();
	$("#" + next_id).fadeIn(1000);
	$('#user-details, #edit_btn').fadeOut(500);
}

function filter(selectBoxId) {
	var valThis = $('#search'+selectBoxId).val();
	$('#fetchAll'+selectBoxId+' > tbody .tb-row, .grid-div, .faq-back-div').each(function() {
		var text = $(this).text();
		(text.toLowerCase().indexOf(valThis.toLowerCase()) > -1) ? $(this).show(): $(this).hide();
    });
 };


function _selectOption(selectBoxId) {
	$('#txtSearchValue_'+selectBoxId).val('');
	filter(selectBoxId);

    if ($('#searchPanel_'+selectBoxId).is(":visible")) {
        $('#searchPanel_'+selectBoxId).css('display', 'none');
    } else {
        $('#searchPanel_'+selectBoxId).css('display', 'flex');
        $('#txtSearchValue_'+selectBoxId).focus();
    }
}
document.addEventListener('click', (e) => {
	const selectContainer = document.querySelector('#selectContainer');
	const searchPanel = document.querySelector('.searchPanel');
	if (!selectContainer.contains(e.target)) {
	  searchPanel.style.display = 'none';
	}
});
function filter(selectBoxId) {
	var valThis = $('#txtSearchValue_'+selectBoxId).val();
	$('#searchList_'+selectBoxId+' > li').each(function() {
		var text = $(this).text();
		(text.toLowerCase().indexOf(valThis.toLowerCase()) > -1) ? $(this).show(): $(this).hide();
	});
};
function _clickOption(selectedOption, id, value) {
	selectBoxId = selectedOption.replace("searchList_", "");
	// Clear previous options and set the selected one
	$('#'+selectBoxId).html(`<option selected="selected" value="${id}">${value}</option>`);
	_selectOption(selectBoxId);
};

//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
