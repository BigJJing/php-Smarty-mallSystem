
<link rel="stylesheet" href="css/table.css" />
<table width="400" align="center"  border="0" cellpadding="0" cellspacing="0">
  <tr>
    <td  colspan="2" height="25" align="center" valign="middle" class="first">
      公告信息
    </td>
  </tr>
  {section name=pub_id loop=$arr}
  <tr>
    <td width="70%" height="25" align="center" valign="middle" class="left">
      标题：{$arr[pub_id].title}
    </td>
    <td width="30%" height="25" align="center" valign="middle" class="right">
      &nbsp;{$arr[pub_id].addtime}
    </td>
  </tr>
  <tr>
    <td height="100" colspan="2" valign="left" valign="top" class="all" style="text-indent:10px;">
      &nbsp;{$arr[pub_id].content}
    </td>
  </tr>
  {/section}
</table>
