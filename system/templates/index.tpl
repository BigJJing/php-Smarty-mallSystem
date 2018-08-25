<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="stylesheet" href="css/css.css" />
<link href="css/newhot.css" rel="stylesheet" type="text/css" />
<title>购物商城 </title>

</head>
<script language="javascript" src="js/createxmlhttp.js"></script>
<script language="javascript" src="js/info.js"></script>
<script language="javascript" src="js/top.js"></script>
<body>
  	<div class="top">
    	{include file='top.tpl'}
    </div>

    <div class="head_logo">
    	{include file='head_logo.tpl'}
    </div>
    <div class="top_nav">
    	{include file='top_nav.tpl'}
    </div>
    <div class="banner">
    	{include file='banner.tpl'}
    </div>
    <div class="content">
        {include file=$admin_phtml}
    </div>
</body>
</html>
