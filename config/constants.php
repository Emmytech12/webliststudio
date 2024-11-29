<?php
	error_reporting(E_ALL ^ E_NOTICE ^ E_DEPRECATED ^ E_WARNING);
	$website_auto_url =(isset($_SERVER['HTTPS']) ? "https" : "http") . "://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
	$thename='Weblist Studio'; 

	$website_url='http://localhost/projects/webliststudio.com';
	//$website_url='http://192.168.103.51/projects/webliststudio.com';
	//$website_url='https://webliststudio.com';

	$code_version=date('Ymdhis');
?>

<script>
	//////////////////online constants///////////////////////
	//const website_url='https://webliststudio.com';
	const website_url='http://localhost/projects/webliststudio.com';
	//const website_url='http://192.168.103.51/projects/webliststudio.com';

	const admin_login_local_url=website_url+'/account/config/code'; /// For Admin local_url //
	//const index_local_url=website_url+'/config/code'; /// For Site local_url //
	//const admin_local_portal_url=website_url+'/admin/a/config/code'; /// admin local portal url
	//const admin_portal_url=website_url+'/admin/a'; /// admin portal url
	//const admin_login_portal_url=website_url+'/admin'; /// For Admin local_url //
</script>

