<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="stylesheet" href="css/myshopcar.css" />
</head>
<script language="javascript" src="js/login.js"></script>
<div class="top_container">
    <ul>
    	{if $member=="游客"}
        <li><a href="loginmain.php">请登录</a></li>
        {else}
        <li><span>欢迎您：{$member} </span>|<a onclick="javascript:logout()" style="cursor:pointer" id="info"> 安全离开</a></li>
        {/if}
        <li> / </li>
        <li><a href="register.php">注册</a></li>
        <li> / </li>
        <li class="li_buy"><a href="index.php?page_type=shopcar">我的购物车<span class="icon_buy"></span></a></li>
        <li> / </li>
        <li><a href="">商家</a></li>
        <li> / </li>
        <li><a href="">网站公告</a></li>
    </ul>
</div>
