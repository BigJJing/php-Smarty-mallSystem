<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="stylesheet" href="css/detail.css" />
<title>商品详情</title>
</head>
<script language="javascript" src="js/createxmlhttp.js"></script>
<script language="javascript" src="js/showcommo.js"></script>
<table width="972" height="428" cellpadding="0" cellspacing="0" border="0" class="dtable">
  {section name=ids loop=$shoarr}
  <tr>
    <td rowspan="9" width="428" height="428">
      <img src="{$shoarr[ids].pics}" width="428" height="428" />
    </td>
    <td colspan="2" width="544" height="70" class="dtitle">
      {$shoarr[ids].name}
    </td>
  </tr>
  <tr>
    <td colspan="2" width="544" height="85" class="dprice">
      <p class="nprice">价格：<font>￥{$shoarr[ids].m_price}</font></p>
      <p class="vprice">会员价：<font>￥{$shoarr[ids].v_price}</font></p>
    </td>
  </tr>
  <tr>
    <td height="20" colspan="2"></td>
  </tr>
  <tr class="dintro">
    <td colspan="2" width="544" height="30">
      商品详情
    </td>
  </tr>
  <tr class="dintro">
    <td width="272" height="20">
      库存：{$shoarr[ids].stocks}
    </td>
    <td width="272" height="20">
      销量：{$shoarr[ids].sell}
    </td>
  </tr>
  <tr class="dintro">
    <td width="272" height="20">
      商品产地：{$shoarr[ids].area}
    </td>
    <td width="272" height="20">
      商品型号：{$shoarr[ids].model}
    </td>
  </tr>
  <tr class="dintro">
    <td width="272" height="20">
      商品品牌： {$shoarr[ids].brand}
    </td>
    <td width="272" height="20">
      商品类别： {$shoarr[ids].class}
    </td>
  </tr>
  <tr class="dintro">
    <td width="272" height="50" colspan="2">
      商品介绍：{$shoarr[ids].info}
    </td>
  </tr>
  <tr class="dbtn">
    <td width="272" height="113" colspan="2" align="right" valign="middle">
      <input id="buy" name="buy" type="button" value="加入购物车"  onclick="return subbuycommo({$shoarr[ids].id})" />
    </td>
  </tr>
  {/section}
</table>
