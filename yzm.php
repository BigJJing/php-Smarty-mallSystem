<?php
header  ( 'Content-Type: image/png' );
  $num=$_GET["num"];
  $imagewidth=60;
  $imageheight=18;
 $numimage  = @ imagecreatetruecolor ( $imagewidth ,  $imageheight )
      or die( 'Cannot Initialize new GD image stream' );
 $text_color  =  imagecolorallocate ( $numimage , 240,240,240 );
//循环读取随机数
  for($i=0;$i<strlen($num);$i++){
    //随机左上角坐标(x,y)
	//$x=mt_rand(1,8)+$imagewidth*$i/4
    $x=mt_rand(1,8)+$imagewidth*$i/4; //mt_rand(1,8):返回1-8之间的随机数
    $y=mt_rand(0,$imageheight/4);
    //定义字体的颜色
    //$color=imagecolorallocate($numimage,mt_rand(0,150),mt_rand(0,150),mt_rand(0,150));
    //将随机数写到画布中
    //imagestring($numimage,1,$x,$y,$num[$i],$text_color);
	imagestring ( $numimage ,  3 ,  $x ,  $y ,$num[$i] ,  $text_color );
  }
  //生成干扰线
  for($i=0;$i<50;$i++){
    $randcolor=imagecolorallocate($numimage,rand(200,255),rand(200,255),rand(200,255));
	imagesetpixel($numimage,rand()%70,rand()%20,$randcolor);
  }

 imagepng ( $numimage );
 imagedestroy ( $numimage );

?>
