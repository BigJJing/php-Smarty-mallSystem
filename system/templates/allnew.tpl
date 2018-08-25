<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link href="css/allcomm.css" rel="stylesheet" type="text/css" />
</head>
<script language="javascript" src="js/createxmlhttp.js"></script>
<script language="javascript" src="js/showcommo.js"></script>
<table width="972" cellpadding="0" cellspacing="0" border="0">
    <tr>
    <!--smarty -->
    {counter start=1 skip=1 direction=up print=false assign=count}
    {section name=new_id loop=$newarrs}
    <td>
        <table width="228" height="326" cellpadding="0" cellspacing="0" class="onecomm" onclick="openshowcommo({$newarrs[new_id].id})">
            <tr>
                <td height="228">
                    <img src="{$newarrs[new_id].pics}" width="228" height="228"/>
                </td> 
            </tr>
            <tr>
                <td height="40" align="left" valign="middle">
                    <a title="{$newarrs[new_id].name}">{$newarrs[new_id].name}</a>
                </td>
            </tr>
            <tr>
                <td height="58" align="left" valign="middle">
                    <span>￥{$newarrs[new_id].v_price}</span>
                    <font>￥{$newarrs[new_id].m_price}</font>
                </td>
            </tr>
        </table>
    </td>
    {counter}
    {if $count mod 4==1}
    </tr>
    <tr>
     {/if}
     {/section}   
    <!--smarty end -->
    </tr>
    <tr>
    <td height="100" align="center" valign="middle" colspan="4">
     {$rst1_page}
    </td>
  </tr>
</table>

