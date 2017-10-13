<?php
//单选
$int成绩=78;
if($int成绩>60 and $int成绩<80){
	//如果条件成立，就执行代码
   echo "及格";
   echo '<br/>';
   echo "成绩60分以上";
}

if($int成绩<60) echo "<br>不及格";

if($int成绩=60):
   echo "刚好及格";
endif;
双选
if($int成绩=60):

	echo "刚好及格";
else:

	echo "不及格";
endif;

//多选
if($int成绩<60){
	echo "不及格";
}else{
   if($int成绩>60){
   	echo "及格";
   }else{
   	if($int成绩<=70){
   		echo "一般";
   	}
   }
}

echo "<hr>";

$char="a";
switch ($char) {
	case 'a':
	case 'b':
		echo "123";
		break;

	default:
		echo "345";
		break;
}
