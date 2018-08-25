<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="stylesheet" href="css/queryform.css" />
<link rel="stylesheet" href="css/myshopcar.css" />
</head>
<script type="text/javascript" src="js/myshopcar.js"></script>
<script type="text/javascript" src="js/createxmlhttp.js"></script>
<script language="javascript" src="js/showcommo.js"></script>
<table width="972" cellspacing="0" cellpadding="0" border="0" class="shopcar">
  <form id="myshopcar" name="myshopcar" medthod="post" action="#">
  <tr class="stitle">
    <td height="44" width="50" align="center" valign="middle">
    </td>
    <td width="344" align="center" valign="middle">宝贝</td>
    <td width="112" align="center" valign="middle">数量</td>
    <td width="112" align="center" valign="middle">折扣率</td>
    <td width="156" align="center" valign="middle">单价</td>
    <td width="255" align="center" valign="middle">金额</td>
  </tr>
  <!--smarty  -->
  {foreach key=key item=item from=$commarr}
  <tr class="eachshop">
    <td height="120" align="center" valign="middle">
        <input id="chk" name="chk" type="checkbox" value="{$item.id}" onclick="javascript:changetotal(myshopcar)"/>
    </td>
    <td valign="middle" class="ename">
      <a  onclick="openshowcommo({$item.id})">
        <img src="{$item.pics}" width="100" height="100"/>
        <div id="c_name{$key}">{$item.name}</div>
      </a>
    </td>
    <td align="center" valign="middle" class="enum">
      <input id="cnum{$key}" name="cnum{$key}" type="text" value="{$item.num}" onkeyup="return getTotalSum(myshopcar)" />
    </td>
    <td align="center" valign="middle">
      <div id="fold{$key}">{$item.fold}折</div>
    </td>
    <td align="center" valign="middle" class="eprice">
      <p id="m_price{$key}">￥{$item.m_price}</p>
      <span id="v_price{$key}">￥{$item.v_price}</span>
    </td>
    <td align="center" valign="middle" class="etogether">
      <div id="total{$key}">
          <input type="text" name="etotal{$item.id}" id="etotal{$item.id}" value="{$item.total}" disabled="disabled"/>
      </div>
    </td>
  </tr>
  {/foreach}
  <tr class="settle">
    <td align="left" valign="middle" height="56" colspan="3" class="sselect">
      <a href="#" onclick="return alldel(myshopcar)">全选</a>
      <a href="#" onclick="return overdel(myshopcar)">反选</a>
      <input type="button" value="删除已选" class="" onclick="return del(myshopcar)" />
    </td>
    <td align="right" valign="middle" colspan="2" class="stotal">
      合计：<font id="totalmoney">￥00.00</font>
      <!--
      <input type="text" name="totalmoney" value="￥00.00" disabled="disabled"/>
      -->
    </td>
    <td align="center" valign="middle" class="sebtn">
      <input id="uid" name="uid" type="hidden" value="" />
      <input id="settle" name="settle" type="button" value="去结算" onclick="return formset(myshopcar)" />
    </td>
  </tr>
  </form>
</table>
