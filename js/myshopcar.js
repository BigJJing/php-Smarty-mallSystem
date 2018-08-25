/*
//自动刷新总金额
function getTotalSum(key,v_price,shoparr){
  var num_id='cnum'+key.toString();    //当前key的购买数量id
  var total_id='total'+key.toString(); //当前key的合计id
  var keynum=document.getElementById(num_id).value  //获取当前key的都买数量
  var total=keynum*v_price;
  document.getElementById(total_id).innerHTML=total;
  var sum=0;
  for(var i=0;i<shoparr;i++){
    //获取每类商品的总价格
    var itotal=document.getElementById('total'+i.toString()).innerText;
    sum+=parseFloat(itotal);
  }
  document.getElementById('sum').innerHTML='共计:'+sum.toFixed(1)+"&nbsp;元";  //toFixed(n):保留小数点后一位
}
*/
//全选
function alldel(form){
  var len=form.chk.length;
  //当只有一个chk时，len=undefined
  if(len==undefined){
    if(!form.chk.checked)
      form.chk.checked=true;
  }
  else{
    for(var i=0;i<len;i++){
      if(!form.chk[i].checked)
        form.chk[i].checked=true;
    }
  }
  return false;
}

//反选
function overdel(form){
  var len=form.chk.length;
  if(len==undefined){
    if(!form.chk.checked)
      form.chk.checked=true;
    else
      form.chk.checked=false;
  }
  else{
    for(var i=0;i<len;i++){
      if(!form.chk[i].checked)
        form.chk[i].checked=true;
      else
        form.chk[i].checked=false;
    }
  }
  return false;
}

//删除已选
function del(form){
  var rd=new Array();
	var j = 0;
  var len=form.chk.length;
  //获取被选中商品的id,放在rd里面
  for(var i=0;i<len;i++){
    if(form.chk[i].checked){
      rd[j++] = form.chk[i].value;
    }
  }
  //rd={24,23,21,20}
  if(rd=='')
    alert('请选取要删除的数据！');
  else{
    var url="delshop.php?rd="+rd;
    xmlhttp.open("GET",url,true);
    xmlhttp.onreadystatechange=function(){
      if(xmlhttp.readyState==4&&xmlhttp.status==200){
        var msg=xmlhttp.responseText;
        if(msg!=1){
          alert('删除失败！'+msg);
        }
        else{
          alert('删除成功');
          location=('?page_type=shopcar');
        }
      }
    }
    xmlhttp.send(null);
  }
  return false;
}
//更改商品数量:获取商品的id和填写的数量传入changecar.php来处理
function getTotalSum(form){
  //获取购物车中所有cnum{$key}中的数字,并获取他们商品的id(从chk中获取)
  var len=form.chk.length;
  //当购物车中只有一个商品（chk)时，len=undefined
  if(len==undefined){
      var ids=form.chk.value;
      var nums=form.cnum0.value;
  }
  else{
    var ids=new Array();    //存放商品的id
    var nums=new Array();   //存放对应id的数量
    for(var i=0;i<len;i++){
      var getnumid='cnum'+i.toString();
      var getnum=document.getElementById(getnumid).value;
      if(getnum==""||isNaN(getnum)||getnum==0){
        alert("数量只能为数字且不能为0！");
        document.getElementById(getnumid).value=1;
        document.getElementById(getnumid).select();
        return false;
      }
      nums[i]=getnum;
      var getid=form.chk[i].value;
      ids[i]=getid;
    }
  }
  //nums={2,1,3}
  //ids={20,24,23}
  url="changecar.php?nums="+nums+"&ids="+ids;
  xmlhttp.open("GET",url,true);
  xmlhttp.onreadystatechange=function(){
    if(xmlhttp.status==200&&xmlhttp.readyState==4){
      var msg=xmlhttp.responseText;
      if(msg=='1')
        location="?page_type=shopcar";
      else
        alert("操作失败");
    }
  }
  xmlhttp.send(null);
}
//继续购物
function conshop(){
  location="index.php";
}
//更新总价格
function changetotal(form){
  var all=0;    //选中的总价
  var len=form.chk.length;
  //当只有一件商品时，len=undefined
  if(len==undefined){
    if(form.chk.checked==false){
      document.getElementById('totalmoney').innerHTML='￥00.00';
    }
    else{
      var ids=form.chk.value;
      var fid='etotal'+ids;
      all=parseFloat(document.getElementById(fid).value);
      document.getElementById('totalmoney').innerHTML='￥'+all.toFixed(2);
      }
  }
  else{
    for(var i=0;i<len;i++){
      //chk=true,就获取商品id
      if(form.chk[i].checked){
        var ids=form.chk[i].value;;
        var fid='etotal'+ids;
        //不能用name 因为form.fid.value不存在 ？？？？？？？
        var eachprice=document.getElementById(fid).value;
        //console.log(eachprice);
      }
      else{
        eachprice=0;
      }
      all+=parseFloat(eachprice);
    }
    if(all==0){
      document.getElementById('totalmoney').innerHTML='￥00.00';
    }
    else{
      document.getElementById('totalmoney').innerHTML='￥'+all.toFixed(2);
    }
  }
}

//去结算
function formset(form){
  //将选中(chk=true)的商品的id获取,传入settle.php来处理
  var len=form.chk.length;
  //当只有一件商品时，len=undefined
  if(len==undefined){
    if(form.chk.checked==false){
      alert("请选中至少一件商品");
      return false;
    }
    else
      var ids=form.chk.value;
      var nums=form.cnum0.value;
  }
  else{
    var ids=new Array();
    var nums=new Array();
    var j=0,k=0;
    for(var i=0;i<len;i++){
      //chk=true,就获取商品id
      if(form.chk[i].checked){
        ids[j++]=form.chk[i].value;
        var number='cnum'+i.toString();
        nums[k++]=document.getElementById(number).value;
      }
    }
  }
  if(ids==""){
    alert('请选中至少一件商品');
    return false;
  }
  //alert(ids);
  url="settle.php?ids="+ids+"&nums="+nums;
  open(url);
  return false;
}
