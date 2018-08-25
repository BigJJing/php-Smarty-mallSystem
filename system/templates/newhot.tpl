<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link href="css/newhot.css" rel="stylesheet" type="text/css" />
</head>
<script language="javascript" src="js/createxmlhttp.js"></script>
<script language="javascript" src="js/showcommo.js"></script>
<div class="recommend atype">
    <div class="shead"><img src="img/推荐商品.png" width="970" height="70"/></div>
    <!-- smarty  -->
    <div class="goods">
        <ul>
        	{section name=nomid loop=$nomarrs}
            <li>
                <a onclick="openshowcommo({$nomarrs[nomid].id})">
                    <div class="imgbox">
                        <img src="{$nomarrs[nomid].pics}" alt="{$nomarrs[nomid].name}" width="228" height="228"/>
                    </div>
                    <!--修改title  -->
                    <div class="infobox">
                        
                        <span title="{$nomarrs[nomid].name}">{$nomarrs[nomid].name}</span>
                        <h3>￥{$nomarrs[nomid].m_price}</h3>
                        <h6>￥{$nomarrs[nomid].v_price}</h6>
                    </div>
                </a>
            </li>
           {/section}
        </ul>
    </div>
</div>
<div class="hot atype">
    <div class="shead"><img src="img/热门商品.png" width="970" height="70"/></div>
    <!-- smarty  -->
    <div class="goods">
        <ul>
        	{section name=hotid loop=$hotarrs}
            <li>
                <a onclick="openshowcommo({$hotarrs[hotid].id})" >
                    <div class="imgbox">
                        <img src="{$hotarrs[hotid].pics}" alt="{$hotarrs[hotid].name}" width="228" height="228" onclick=""/>
                    </div>
                    <div class="infobox">
                        <!--修改title  -->
                        <span title="{$hotarrs[hotid].name}">{$hotarrs[hotid].name}</span>
                        <h3>￥{$hotarrs[hotid].m_price}</h3>
                        <h6>￥{$hotarrs[hotid].v_price}</h6>
                    </div>
                </a>
            </li>
            {/section}
        </ul>
    </div>
</div>
<div class="new atype">
    <div class="shead"><img src="img/最新商品.png" width="970" height="70"/></div>
    <!-- smarty  -->
    <div class="goods">
        <ul>
        	{section name=newid loop=$newarrs}
            <li>
                <a  onclick="openshowcommo({$newarrs[newid].id})">
                    <div class="imgbox">
                        <img src="{$newarrs[newid].pics}" alt="{$newarrs[newid].name}" width="228" height="228" onclick=""/>
                    </div>
                    <div class="infobox">
                        <!--修改title  -->
                        <span title="{$newarrs[newid].name}">{$newarrs[newid].name}</span>
                        <h3>￥{$newarrs[newid].m_price}</h3>
                        <h6>￥{$newarrs[newid].v_price}</h6>
                    </div>
                </a>
            </li>
            {/section}
        </ul>
    </div>
</div>
