<?php
$int1 = 100;
$int2 =0;
$int3 = -200;
$int4 =010;//八进制
$int5 =0xFF;//0x开头的是十六进制  255
if(is_int($int4)){
	echo '$int4 是一个整数';
}//is_int()判断是否是整数
$float1 = 3.1415926;
$float2 = 1323.113;
$float3 = -324.43;
if(is_float($float1)){
	echo '$float1 是一个浮点小数';
}//is_float()判断是否是浮点小数
$str1 = 'dog';
$str2 = "fat hog";
$str3 = 'abc $str1';//abc $str1
$str4 = "abc $str1";//解析变量 abc dog
$str5 = "j\$dfnjs\"dkf\n\\sdg\{hsh\}"
if(is_string($str1)){
	echo $str1;
}//is_string()判断是否是字符串
//php中
//false 整数0 字符串0 "" "0" 空数组 null：flase
$bool1 = true;
$bool2 = false;
if(is_bool($bool1)){
	echo $bool1;
}//is_bool()判断是否为布尔

$person = array('Edison','Wankel','张三');
echo $person[0];
$creator = array('Light bulb'=>'Edison','Rotary Engine'=>'Wankel','铅笔'=>'张三');
foreach ($person => $name) {
	echo "\nHello,$name";
}
foreach ($creator as $invertion => $invertor) {
	echo "\n$invertor created the $invertion";
}
if (is_array($person)) {
	echo '<hr/>'.print_r($person);
}//is_array()判断是否是数组
//类
class Person(//定义一个类
public $name = '';
function name($newname=null){
	if(!is_null($newname)){
		$this->name=$newname;
	}
	return $this=>name;
}

)
$ed=new Person;//创建一个对象
$ed->nmae('Edison');//调用对象的方法
printf("Hello %s<br>",$ed->name);
$tc=newPerson;
$tc->name('Wankel');
printf("hello %s<br>",$tc->name);
if(is_object($ed)){
	echo "<br>ed 是一个对象";
}//is_object()是否是一个对象
$ed=null;
if(is_null($ed)){
	echo "ed 对象现在是null";
}
//可变变量
$foo='bar';
$$foo='baz';//$bar='baz'
echo "<br>\$bar".$bar;

$white="白色";
$black="黑色";
$black=&$white;
unset($white);
print_r($black);
function $ret_ref(){
	$var="php";
	return $var;
}
$v=& ret_ref();
print $v;
