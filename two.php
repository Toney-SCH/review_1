<?php
$i=100;
$str = 'ada';
$int1 = 100*5;//二元操作符
$i++;//一元操作符
++$i;
//三元操作符（条件操作符）
//算数操作符+,-,*,/,%
$int1 = 100 % 25;//求余（取模）
$int2 = $int1 - 50;
$int3 = $int1 / $int2;
$int4 = $int3 +13.3123;//隐式转换
echo "int4=".$int4;
echo '<br>';
echo "3.14 Pies"*2;
echo "Pies 3.14"*2;//0
//字符串连接符 .
//自增自减++，--
 $int10=100;
 $int11=$int10++ +12//int11=112,int10=101
 $int12=++$int10+12//int12=113,int10=101
 $char="a";
 $char++;
 echo $char;
 //不相等 <> !=
 //恒等=== 不恒等  !==
//<= >= >
//按位取反 ~
//按位与 &
//按位异或^
//左移位 << 3<<1  = 6  00000011->0000110[以后在搞]
//逻辑操作符
if($str1==$char and $int10>$int11){
	echo "true";
}
//xor 逻辑的异或  and && 逻辑与 or 逻辑或 ！逻辑非

$a="5";
$b=(int)$a;//类型转换操作符，其他同理
var_dump($b);
$b+=5//$b=$b+5，其他同理
//三元操作符
$aaa=$int11>$int10?100:123;
//@
//优先级
//最高的 new [] 逻辑 
//同级别！ ++ -- （int） @
//* / %
//+ -
//<  >  =  >=
