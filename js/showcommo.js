function openshowcommo(key){
  open('showcommo.php?id='+key,'_blank','',false);
}
function buycommo(key){

  var url="chklogin.php?key="+key;
  xmlhttp.open("GET",url,true);
  xmlhttp.onreadystatechange=function(){
    if(xmlhttp.readyState==4&&xmlhttp.status==200){
      var msg=xmlhttp.responseText;
      if(msg==2){
        alert("请您先登录");
        return false;
      }
      else if(msg==3){
        alert('该商品已添加');
        return false;
      }
      else{
        //????????????
        top.opener.location='index.php?page_type=shopcar';
        return false;
      }
    }
  }
  xmlhttp.send(null);
}

function subbuycommo(key){
  var url="chklogin.php?key="+key;
  xmlhttp.open("GET",url,true);
  xmlhttp.onreadystatechange=function(){
    if(xmlhttp.readyState==4&&xmlhttp.status==200){
      var msg=xmlhttp.responseText;
      if(msg==2){
        alert('请您先登录');
        return false;
      }
      else if(msg==3){
        alert('该商品已添加');
        window.close();
        return false;
      }
      else{
        top.opener.location='index.php?page_type=shopcar';
        window.close;
      }
    }
  }
  xmlhttp.send(null);
}
