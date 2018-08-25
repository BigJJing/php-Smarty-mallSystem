function chkform(form){
  if(form.taker.value==""){
    alert("收货人不能为空!");
    form.taker.focus();
    return false;
  }
  if(form.code.value==""){
    alert("邮编不能为空!");
    form.code.focus();
    return false;
  }
  if(form.code.value.length<6||isNaN(form.code.value)){
    alert("邮编填写错误");
    form.code.focus();
    return false;
  }
  if(form.tel.value==""){
    alert("联系方式不能为空");
    form.tel.focus();
    return false;
  }
  if(form.address.value==""){
    alert("地址不能为空");
    form.address.focus();
    return false;
  }
}
