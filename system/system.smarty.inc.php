<?php
//定义服务器中根目录的绝对地址
define("WEB_ROOT",realpath(dirname(_FILE_)."/./"));
//WEB_ROOT=D:\wamp\www\web\phpmodel\bussinse
//加载smarty类文件
require_once(WEB_ROOT.'/system/libs/Smarty.class.php');
//扩展smarty类
class SmartyProject extends Smarty{
  function __construct(){
    parent::__construct();  //引入父类构造方法
    $this->template_dir='./system/templates/';   //模板文件存储位置
    $this->compile_dir='./system/templates_c/';   //编译文件存储位置
    $this->config_dir='./system/configs/';         //配置文件存储位置
    $this->cache_dir='./system/cache/';           //缓存文件存储位置
    $this->caching=false;

  }
}
?>
