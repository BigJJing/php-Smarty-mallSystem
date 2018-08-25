<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="stylesheet" href="css/queryform.css" />
</head>
<table width="972" cellspacing="0" cellpadding="0" border="0" class="order">
  <tr class="ordertitle">
    <td width="356" height="44" align="center" valign="middle">宝贝</td>
    <td width="96" align="center" valign="middle">数量</td>
    <td width="96" align="center" valign="middle">单价</td>
    <td width="136" align="center" valign="middle">交易状态</td>
    <td width="288" align="center" valign="middle">交易操作</td>
  </tr>
  <!--smarty -->
  {section name=ids loop=$formrst}
  <tr>
    <td colspan="5">
      <table width="972" height="170" cellspacing="0" cellpadding="0" border="0">
        <tr class="stitle">
          <td colspan="5" height="44">
            <font><!--日期-->{$formrst[ids]['formtime']}</font>
            <span>订单号：{$formrst[ids]['formid']}</span>
          </td>
        </tr>
        <tr>
          <td width="356" height="120" class="sintro" align="center" valign="middle">
            {$formrst[ids]['commo_name']}
          </td>
          <td width="96" align="center" valign="middle">{$formrst[ids]['commo_num']}</td>
          <td width="96" align="center" valign="middle">{$formrst[ids]['total']}</td>
          <td width="136" align="center" valign="middle">{$formrst[ids]['state']}</td>
          <td width="288" align="center" valign="middle" class="soperate">
            <a href="#">订单详情</a>
            <a href="#">追加评价</a>
          </td>
        </tr>
      </table>
    </td>
  </tr>
  {/section}
</table>
