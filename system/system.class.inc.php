<?php
  //连接数据库
  class connDB{
    var $dbtype;
    var $host;
    var $user;
    var $pwd;
    var $dbname;
    //构造方法
    function connDB($dbtype,$host,$user,$pwd,$dbname){
      $this->dbtype=$dbtype;
      $this->host=$host;
      $this->user=$user;
      $this->pwd=$pwd;
      $this->dbname=$dbname;
    }
    //实现数据库连接并返回连接对象
    function GetConnId(){
      if($this->dbtype=="mysql"||$this->dbtype=="mssql"){
        $dsn="$this->dbtype:host=$this->host;dbname=$this->dbname";
      }
      try{
        //初始一个PDO对象，即创建了数据库的连接对象$PDO
        $conn=new PDO($dsn,$this->user,$this->pwd);
        $conn->query("set names utf8");
        return $conn;
      }
      catch(PDOException $e){
        die("ERROR:".$e->getMessage()."<br  />");
      }
    }
  }
  //数据库管理类
  class AdminDB{
    //执行sql语句
    function ExecSQL($sqlstr,$conn){
      //判断sql的类型
      $sqltype=strtolower(substr(trim($sqlstr),0,6));
      //准备查询语句
      $rs=$conn->prepare($sqlstr);
      //执行查询语句，返回结果集
      $rs->execute();
      if($sqltype=="select"){
        //获取结果集中所有的数据
        $array=$rs->fetchALL(PDO::FETCH_ASSOC);
        if(count($array)==0||$rs==false)
          return false;
        else
          return $array;
      }
      else if($sqltype=="update"||$sqltype=="insert"||$sqltype=="delete"){
        if($rs)
          return true;
        else
          return false;
      }
    }
  }
  //分页类
  class SepPage{
    var $rs;
    var $pagesize;   //每页输出的记录数
    var $nowpage;   //当前页码
    var $array;     //存放结果集中的数据
    var $conn;      //连接数据库返回的标志
    var $sqlstr;    //执行查询语句
    function ShowData($sqlstr,$conn,$pagesize,$nowpage){
      //判断变量$nowpage是否为空
      if(!isset($nowpage)||$nowpage==""){
        $this->nowpage=1;
      }
      else{
        $this->nowpage=$nowpage;
      }
      $this->sqlstr=$sqlstr;
      $this->conn=$conn;
      $this->pagesize=$pagesize;
      //上一页的最后一条为offset
      $offset=($this->nowpage-1)*$pagesize;
      //从 $offset起后面的$page_size条
      $sql=$this->sqlstr." limit $offset,$this->pagesize";
      //准备执行语句
      $result=$this->conn->prepare($sql);
      //执行查询语句
      $result->execute();
      //获取结果集中所有的数据
      $this->array=$result->fetchALL(PDO::FETCH_ASSOC);
      if(count($this->array)==0||$this->array==false){
        return false;
      }
      else{
        //echo $this->array;
        return $this->array;
      }
    }
    function showPage($contentname,$utits,$anothersearchstr,$anothersearchstrs,$class){
      $str="";
      //准备查询语句
      $res=$this->conn->prepare($this->sqlstr);
      //执行查询语句，返回结果集
      $res->execute();
      //获取结果集中所有的数据
      $this->array=$res->fetchALL(PDO::FETCH_ASSOC);
      //统计记录数
      $record=count($this->array);
      //计算共有几页
      $pagecount=ceil($record/$this->pagesize);
      $str.="<p>".$contentname."&nbsp;".$record."&nbsp;".$utits."&nbsp;每页 &nbsp;".$this->pagesize."&nbsp;".$utits."&nbsp;第&nbsp;".$this->nowpage."&nbsp;页/共&nbsp;".$pagecount."&nbsp;页";
      $str.="&nbsp;&nbsp;&nbsp;&nbsp;";
      if($this->nowpage!=1){
        $str.="<a href=".$_SERVER['PHP_SELT']."?page=1&page_type=".$anothersearchstr."&parameter2=".$anothersearchstrs."class=".$class.">首页</a>";
      }
      else{
        $str.="<font color='#555555'>首页</font>";
      }
      $str.="&nbsp;";
      if($this->nowpage!=1){
        $str.="<a href=".$_SERVER['PHP_SELT']."?page=".($this->nowpage-1)."&page_type=".$anothersearchstr."&parameter2=".$anothersearchstrs." class=".$class.">上一页</a>";
      }
      else{
        $str.="<font color='#555555'>上一页</font>";
      }
      $str.="&nbsp;";
      if($this->nowpage!=$pagecount){
        $str.="<a href=".$_SERVER['PHP_SELT']."?page=".($this->nowpage+1)."&page_type=".$anothersearchstr."&parameter2=".$anothersearchstrs." class=".$class.">下一页</a>";
      }
      else{
        $str.="<font color='#555555'>下一页</font>";
      }
      $str.="&nbsp;";
      if($this->nowpage!=$pagecount){
        $str.="<a href=".$_SERVER['PHP_SELT']."?page=".$pagecount."&page_type=".$anothersearchstr."&parameter2=".$anothersearchstrs."class=".$class.">尾页</a></p>";
      }
      else{
        $str.="<font color='#555555'>尾页</font></p>";
      }
      if(count($this->array)==0||$this->array==false){
        return "无数据！";
      }
      else{
        return $str;
      }
    }
  }
  class UseFun{
    function UnHtml(){
      $content=(nl2br(htmlspecialchars($text)));   //nl2br() 函数在字符串中的每个新行（\n）之前插入 HTML 换行符（<br> 或 <br />）。
      $content=str_replace("[strong]","<strong>",$content);   //将$content里的[strong]替换成 <strong>
      $content=str_replace("[/strong]","</strong>",$content);
      $content=str_replace("[em]","<em>",$content);
      $content=str_replace("[/em]","</em>",$content);
      $content=str_replace("[u]","<u>",$content);
      $content=str_replace("[/u]","</u>",$content);
      $content=str_replace("[font color=#FF0000]","<font color=#FF0000>",$content);
      $content=str_replace("[font color=#00FF00]","<font color=#00FF00>",$content);
      $content=str_replace("[font color=#0000FF]","<font color=#0000FF>",$content);

      $content=str_replace("[font face=楷体_GB2312]","<font face=楷体_GB2312>",$content);
      $content=str_replace("[font face=宋体]","<font face=新宋体>",$content);
      $content=str_replace("[font face=隶书]","<font face=隶书>",$content);
      $content=str_replace("[/font]","</font>",$content);
      //$content=str_replace(chr(32)," ",$content);
      $content=str_replace("[font size=1]","<font size=1>",$content);
      $content=str_replace("[font size=2]","<font size=2>",$content);
      $content=str_replace("[font size=3]","<font size=3>",$content);
      $content=str_replace("[font size=4]","<font size=4>",$content);
      $content=str_replace("[font size=5]","<font size=5>",$content);
      $content=str_replace("[font size=6]","<font size=6>",$content);

      $content=str_replace("[FIELDSET][LEGEND]","<FIELDSET><LEGEND>",$content);
      $content=str_replace("[/LEGEND]","</LEGEND>",$content);
      $content=str_replace("[/FIELDSET]","</FIELDSET>",$content);
      return $content;
    }
  }
?>
