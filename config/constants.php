<?php
	error_reporting(E_ALL ^ E_NOTICE ^ E_DEPRECATED ^ E_WARNING);
	$website_auto_url =(isset($_SERVER['HTTPS']) ? "https" : "http") . "://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
	$thename='Weblist Studio'; 

	$website_url='http://localhost/projects/webliststudio.com';
	//$website_url='http://192.168.111.51/projects/webliststudio.com';
	//$website_url='https://webliststudio.com';

	$code_version=date('Ymdhis');
?>

<script>
	//////////////////online constants///////////////////////
	//var website_url='https://webliststudio.com';
	var website_url='http://localhost/projects/webliststudio.com';
	//var website_url='http://192.168.111.51/projects/webliststudio.com';

	var admin_login_local_url=website_url+'/account/config/code'; /// For Admin local_url //
	var admin_local_url=website_url+'/admin/config/code'; /// For Account local_url //
	//var index_local_url=website_url+'/config/code'; /// For Site local_url //
	//var admin_local_portal_url=website_url+'/admin/a/config/code'; /// admin local portal url
	//var admin_portal_url=website_url+'/admin/a'; /// admin portal url
	//var admin_login_portal_url=website_url+'/admin'; /// For Admin local_url //
</script>

