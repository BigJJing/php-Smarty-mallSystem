<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>订单详情</title>
<link rel="stylesheet" href="css/table.css" />
</head>
<script src="js/settle.js" type="text/javascript"></script>
<table width="450" border="0" cellpadding="0" cellspacing="0" >
  <tr>
    <td height="30" width="450" align="center" valign="middle" style="background:#ccc;">
      订单信息
    </td>
  </tr>
  <tr>
    <td>
      {section name=ids loop=$order}
      <table width="450" height="100" border="0" cellpadding="10" cellspacing="0" valign="top">
        <tr>
          <td rowspan="2" width="100" height="80" border="1">
            <img src="{$order[ids].pics}" width="100" height="80" />
          </td>
          <td width="100" height="40" align="left" valign="top" colspan="2">
            <!--smarty name -->{$order[ids].name}
          </td>
        </tr>
        <tr>
          <td width="100" height="40"  align="center" valign="middle">
            <!--smarty v_price --><font color="red">{$order[ids].v_price}</font>
          </td>
          <td width="100" height="40"  align="right" valign="middle">
            ×<!--smarty v_price -->{$order[ids].num}
          </td>
        </tr>
      </table>
      {/section}
    </td>
  </tr>
  <tr>
    <td height="30" width="450" align="right" valign="middle">
      合计金额：<font style="font-size:16px;color:#f00;font-weight:bold">{$sum}</font>
    </td>
  </tr>
  <tr>
    <td>
      <form name="buyform" id="buyform" method="post" action="settle_chk.php" onsubmit="return chkform(buyform)" >
        <table border="0" width="450" cellpadding="0" cellspacing="0">
          <tr>
            <td  height="10" width="450" align="center" valign="middle" colspan="4" style="background:#ccc;"></td>
          </tr>
          <tr>
            <td width="150" height="30" align="right" valign="middle">收货人：</td>
            <td width="150" align="left" valign="middle">
              <input name="taker" id="taker" class="txt" style="width:120px;height:20px;"/>
            </td>
            <td width="100" height="30" align="right" valign="middle">邮编：</td>
            <td width="150" align="left" valign="middle">
              <input name="code" id="code" class="txt" style="width:120px;height:20px;" />
            </td>
          </tr>
          <tr>
            <td width="100" height="30" align="right" valign="middle">联系电话：</td>
            <td width="200" align="left" valign="middle">
              <input name="tel" id="tel" class="txt" style="width:120px;height:20px;" />
            </td>
          </tr>
          <tr>
            <td width="100" height="30" align="right" valign="middle">地址：</td>
            <td width="200" align="left" valign="middle">
              <input name="address" id="address" class="txt" style="width:120px;height:20px;" />
            </td>
          </tr>
          <tr>
            <td width="100" height="30" align="right" valign="middle">送货方式：</td>
            <td width="200" align="left" valign="middle">
              <select id="del" name="del">
                <option value="平邮">平邮</option>
                <option value="快递">快递</option>
                <option value="送货上门">送货上门</option>
              </select>
            </td>
          </tr>
          <tr>
            <td width="100" height="30" align="right" valign="middle">付款方式：</td>
            <td width="200" align="left" valign="middle">
              <select name="pay" id="pay">
                <option value="银行转账">货到付款</option>
                <option value="银行转账">银行转账</option>
                <option value="银行转账">支付宝</option>
              </select>
            </td>
          </tr>
          <tr>
            <td height="10" colspan="4" style="background-color:#ccc"></td>
          </tr>
          <tr>
            <td height="50" align="center" valign="middle" colspan="4">
              <input name="enter" id="enter" class="sbtn" value="提交订单" type="submit"/>
              <input name="uid" id="uid" value="{$uid}" type="hidden"/>
              <input name="unum" id="unum" value="{$unum}" type="hidden"/>
              <input name="sum" id="sum" value="{$sum}" type="hidden" />
            </td>
          </tr>
        </table>
      </form>
    </td>
  </tr>
</table>
