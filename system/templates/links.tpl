<table id="links_table" width="207" height="73" border="0" cellpadding="0" cellspacing="0">
  <tr>
    <td height="73" colspan="7" background="images/shop_11.gif">&nbsp;</td>
  </tr>
</table>
<table id="links_table" width="207" height="211" border="0" cellpadding="0" cellspacing="0" background="images/shop_13.gif">
  <tr>
    <td height="34" width="100%">
    </td>
  </tr>
  {section name=ids loop=$link_arrs}
  <tr>

    <td height="24" width="100%" line-height="26" align="left" >
      <a href="{$link_arrs[ids].url}">
      &nbsp;<img src="images/man.JPG" width="14" height="11" border="0" />&nbsp;
      {$link_arrs[ids].name}
      </a>
    </td>
  </tr>
  {/section}
  <tr>
    <td height="100" width="100%">
    </td>
  </tr>
</table>
