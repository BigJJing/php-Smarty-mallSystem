function lg(form){
  //检查用户名
  if(form.name.value==""){
    alert("请输入用户名！");
    form.name.focus();
    return false;
  }
  //检查密码
  if(form.password.value==""||form.password.value.length<6){
    alert("密码错误！");
    form.password.focus();
    return false;
  }
  if(form.check.value==""){
    alert("验证码为空！");
    form.check.focus();
    return false;
  }
  //检查验证码
  if(form.check.value!=form.check2.value){
    alert("您输入的验证码有误！");
    form.check.focus();     //？？？？？？？？？？？？？？
    return false;
  }
  var user=form.name.value;
  var password=form.password.value;
  var url="chkname.php?user="+user+"&password="+password;
  xmlhttp.onreadystatechange=function(){
    if(xmlhttp.readyState==4){
      //xmlHttp.status用于本地测试
      //实为xmlHttp.status== 200
      if(xmlhttp.status== 200 || xmlhttp.status==0){
        msg=xmlhttp.responseText;

        if(msg=='1'){
          alert('用户名或密码错误！');
          form.password.select();
          form.check.value="";
          //刷新验证码
          code(form);
          return false;
        }
        else if(msg=='2'){
          return true;
          //window.open('index.php','_self','true');
          //windows.location.href='index.php'
        }
        else if(msg=='3'){
          return false;
        }
        else{
          alert(msg);
        }
      }
    }
  }
  xmlhttp.open('GET',url,false);
  xmlhttp.send(null);
  window.open('index.php');
}

//显示验证码
function yzm(form){
  var num1=Math.round(Math.random()*1000000);
  var num=num1.toString().substr(0,4);
  document.write("<img name=codeimg width=65 height=35 src='yzm.php?num="+num+"'>");
  form.check2.value=num;
}
//刷新验证码
function code(form){
	var num1=Math.round(Math.random()*10000000);
	var num=num1.toString().substr(0,4);
	document.codeimg.src="yzm.php?num="+num;
	form.check2.value=num;
}
function reg(){
  window.open("register.php","_blank","",false);
}
