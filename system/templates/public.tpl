<script src="js/pub.js" type="text/javascript"></script>

<table width="210" height="193" border="0" cellpadding="0" cellspacing="0" background="images/shop_06.gif">
  <tr>
    <td height="35" width="17"></td>
    <td width="193" align="left" valign="top" class="exam"></td>
  </tr>
  <tr>
    <td height="32" width="17"></td>
    <td width="193" align="left" valign="top" class="exam">
       {section name=ids loop=$pub_arrs}
       <a href="#" class="lk" onclick="return showme({$pub_arrs[ids].id},'showpub.php');" >
         <img src="images/man.jpg" width="14" height="11" border="0" />
         {$pub_arrs[ids].title}
       </a>
       <br />
       {/section}
    </td>
  </tr>
</table>
