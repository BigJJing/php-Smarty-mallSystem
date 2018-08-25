function chkinput(form){
  if(form.c_name.value=="no"){
    form.name.select();
    return false;
  }
  if(form.c_pwd1.value=="no"){
    form.pwd1.select();
    return false;
  }
  if(form.c_pwd2.value=="no"){
    form.pwd2.select();
    return false;
  }
  if(form.c_tel.value=="no"){
    form.tel.select();
    return false;
  }
  //检查验证码
  if(form.yzm.value!=form.yzm2.value){
    alert("验证码错误!");
    form.yzm.select();
    return false;
  }
  return true;
}
//检查验证码
function chkname(form){
  if(form.name.value==""){
    name1.innerHTML="<font color=#FF0000>请输入用户名！</font>";
  }
  else{
    //检查有没有重复已注册的用户名
    var user=form.name.value;
    var url="chkname.php?user="+user;
    xmlhttp.open("GET",url,true);
    xmlhttp.onreadystatechange=function(){
      if(xmlhttp.readyState==4&&xmlhttp.status==200){
        var msg=xmlhttp.responseText;
        if(msg=='1'){
          name1.innerHTML="<font color=green>用户名可用</font>";
          form.c_name.value="yes";
        }
        else{
          name1.innerHTML="<font color=#FF0000>用户名被占用！</font>";
          return false;
        }
      }
    }
    xmlhttp.send(null);
  }
}
function chkpwd1(form){
  var pwd=form.pwd1.value;
  if(pwd.length<6){
    pwd11.innerHTML="<font color=#FF0000>密码长度最少需要六位</font>";
    pwd="";
  }
  else if(pwd.length>6&&pwd.length<12){
    pwd11.innerHTML="<font color=green>密码强度：弱</font>";
    form.c_pwd1.value="yes";
  }
  else if((pwd.match(/^[0-9]*$/)!=null)||(pwd.match(/^[z-zA-Z]$/)!=null)){
    pwd11.innerHTML="<font color=green>密码强度：中</font>";
    form.c_pwd1.value="yes";
  }
  else{
    pwd11.innerHTML="<font color=green>密码强度：高</font>";
    form.c_pwd1.value="yes";
  }
}
function chkpwd2(form){
  var pwd=form.pwd1.value;
  var rpwd=form.pwd2.value;
  if(rpwd==""){
    pwd21.innerHTML="<font color=green>确认密码不能为空</font>";
  }
  else if(rpwd==pwd){
    pwd21.innerHTML="<font color=green>密码正确</font>";
    form.c_pwd2.value="yes";
  }
  else{
    pwd21.innerHTML="<font color=#FF0000>两次密码不一致</font>";
  }
}
function chktel(form){
  var tel=form.tel.value;
  //电话号为11位且都是数字
  if(tel.length==11&&!isNaN(tel)){
    tel1.innerHTML="<font color=green>密码正确</font>";
    form.c_tel.value="yes";
  }
  else{
    tel1.innerHTML="<font color=#FF0000>请输入正确的电话号码</font>";
  }
}
//检查邮箱
function chkemail(form){
  var email=form.email.value;
  emailreg=/^\w+(-+.\w)*@\w+([-.]\w+)*\.\w+([-.]\w+)*$/;
  if(email.match(emailreg)==null){
    email1.innerHTML="<font color=#FF0000>email格式错误</font>";
  }
  else{
    email1.innerHTML="<font color=green>输入正确</font>";
  }
}
//显示验证码
function yzm(form){
  var num1=Math.round(Math.random()*1000000);
  var num=num1.toString().substr(0,4);
  document.write("<img name=codeimg width=65 height=35 src='yzm.php?num="+num+"'>");
  form.yzm2.value=num;
}
//刷新验证码
function code(form){
	var num1=Math.round(Math.random()*10000000);
	var num=num1.toString().substr(0,4);
	document.codeimg.src="yzm.php?num="+num;
	form.yzm2.value=num;
}
