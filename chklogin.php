  <?php
    session_start();
    header("content-type:text/html;charset=utf-8");
    require("system/system.inc.php");
    /**
    *  1表示添加成功
    *  2表示用户没有登录
    *  3表示商品已添加过
    *  4表示添加时出现错误
    *  5表示没有商品添加
    */
    $reback=0;
    if(empty($_SESSION['member'])){
      $reback=2;
    }
    else{
      $key=$_GET['key'];
      if($key==''){
        $reback='5';
      }
      else{
        $boo=false;
        $sqls="select id,shopping from tb_user where name='".$_SESSION['member']."'";
        $shopcont=$admindb->ExecSQL($sqls,$conn);
        //当购物车不为空
        if(!empty($shopcont[0]['shopping'])){
          $arr=explode('@',$shopcont[0]['shopping']);
          foreach($arr as $value){
            $arrtmp=explode(',',$value);
            //??????????????????????
            if($key==$arrtmp[0]){
              $reback='3';
              $boo=true;
              break;
            }
          }
          if($boo==false){
            $shopcont[0]['shopping'].='@'.$key.',1';
            $update="update tb_user set shopping='".$shopcont[0]['shopping']."' where name='".$_SESSION['member']."'";
            $shop=$admindb->ExecSQL($update,$conn);
            if($shop){
              $reback=1;
            }
            else{
              $reback=4;
            }
          }
        }
        //购物车为空
        else{
          $tmparr=$key.",1";
          $update="update tb_user set shopping='".$tmparr."' where name='".$_SESSION['member']."'";
          $result=$admindb->ExecSQL($update,$conn);
          if($result){
            $reback=1;
          }
          else{
            $reback=4;
          }
        }
      }
    }
    echo $reback;
  ?>
