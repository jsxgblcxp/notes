1.一个最简单的例子:
<?php
   echo "想学习php吗？来慕课网吧";
?>
可以在页面编写PHP代码写在<?php ?>标签之间.

2.echo 也可以当计算器用.
<?php
   echo 123 * 321 / 111;
?>

3.字符串的链接用 .
<?php
   echo "想学习php吗 ？" . "来慕课网吧"; 
   echo "想学习php吗？来慕课网吧";
?>

4.每行以;结束.

5.
<?php
   
   /* 我是注释 */
// 我也是注释
?>

6.各种变量
<?php
   $var = 13;		/* int类型 */
   $var1 = "String";	/* 字符串类型 */
   $var2 = 13.12312;	/* 浮点类型 */
   $var3 = TRUE; 	/* 布尔类型 */
?>

7.
<?php
   $var = 13;		
   define( "PI", 123 );		/* 常量定义 */
   define( $PII , 1234 );	/* 常量定义 */
   echo PI;			/* 常量访问 */
   echo PII;			/* 常量访问 */
?>

8.
<?php
   /* 系统常量访问 */
   echo __FILE__; 
   echo __LINE__;
   echo PHP_VERSION;
   echo PHP_OS;
?>

9.
<?php
   define( "PI", 123 );		/* 常量定义 */
   var_dump( defined( "PI"  ) ); /* var_dump可以打印变量信息 */
   				 /* defined可以知道某个名字是否被定义了 */
?>

10.各种基本的变量运算
<?php
   $var = 1;
   $var2 =  $var1 > 111?"more than 111" : "not more than 111";
   $var = ( 100 + 2 - 3 ) / 4 % 2; /* % is for MOD */
?>

11.比较运算符
$a == $b	等于		TRUE，如果类型转换后 $a 等于 $b。
$a === $b	全等		TRUE，如果 $a 等于 $b，并且它们的类型也相同。
$a != $b	不等		TRUE，如果类型转换后 $a 不等于 $b。
$a <> $b	不等		TRUE，如果类型转换后 $a 不等于 $b。
$a !== $b	不全等		TRUE，如果 $a 不等于 $b，或者它们的类型不同。
$a < $b		小与		TRUE，如果 $a 严格小于 $b。
$a > $b		大于		TRUE，如果 $a 严格大于 $b。
$a <= $b	小于等于	TRUE，如果 $a 小于或者等于 $b。
$a >= $b	大于等于	TRUE，如果 $a 大于或者等于 $b。

12.逻辑运算符
$a and $b	And（逻辑与）	TRUE，如果 $a 和 $b 都为 TRUE。
$a or $b	Or（逻辑或）	TRUE，如果 $a 或 $b 任一为 TRUE。
$a xor $b	Xor（逻辑异或）	TRUE，如果 $a 或 $b 任一为 TRUE，但不同时是。
! $a		Not（逻辑非）	TRUE，如果 $a 不为 TRUE。
$a && $b	And（逻辑与）	TRUE，如果 $a 和 $b 都为 TRUE。
$a || $b	Or（逻辑或）	TRUE，如果 $a 或 $b 任一为 TRUE。

13.if else elseif
<?php
if ($a > $b) { /* 进行逻辑判断 */
	echo "a is greater than b"; /* 为真的时候执行的语句 */
} else {
	echo "a is NOT greater than b";/* 为假的时候执行的语句 */
}

if ($a > $b) { /* 进行逻辑判断 */
	echo "a is greater than b"; /* 为真的时候执行的语句 */
} else if ( $a == $b ) {/* 再判断一次 */
	echo "a is equeal to b";
} else {/* 两次判断都失败的话怎么做 */
	echo "a is less than b";
}
?>

14.switch case
<?php
switch( $number )
{
	case 1: /* number为1的时候跳到这里 */
		echo "the nubmer is 1";
		break;
	case 2:/* number为2的时候跳到这里 */
		echo "the nubmer is 2";
		break;
	case 3:/* number为3的时候跳到这里 */
		echo "the nubmer is 3";
		break;
	case 4:/* number为4的时候跳到这里 */
		echo "the nubmer is 4";
		break;
	default:
		echo "the nubmer is not 1 , 2 , 3 ,4 ";
		break;
}
?>

15.各种版本的输出1到20
<?php
$num = 1;
while ( $numb <= 20 ){
	echo "$num ";
	$num = $num + 1;
}
?>
<?php
$num = 1;
do{
	echo "$num ";
	$num = $num + 1;
}while( $num > 20 )
?>
<?php
for ( $num = 1 ; $num <= 20 ; ++ $num ){
	echo "$num ";
}
?>
<?php
$list  = array
( 
 "1" , 
 "2" , 
 "3" , 
 "4" , 
 "5" , 
 "6" , 
 "7" , 
 "8" , 
 "9" , 
 "10" , 
 "11" , 
 "12" , 
 "13" , 
 "14" , 
 "15" , 
 "16" , 
 "17" , 
 "18" , 
 "19" , 
 "20");
foreach( $list as $var => $key  )/* foreach的数组访问n */
{
	echo "$key ";
}
?>
16.数组
<?php
$data = $array( "1" => 2 ,  "lala" => "pp" ); /* 数组的定义 */
echo $data[ "1" ]; /* 数组的访问 */
echo $data[ "lala" ];
}
?>
a17.函数定义Or使用
function name() { /* 一个简单的函数 */
    echo 'Eric';
}

function sum($a, $b) {  /* 有两个参数的函数，也有返回值 */
    return $a+$b; 
}

function add($a) {/* 有两个返回值的参数 */
    return $a+1;
}
$b = add(1);

function numbers() { /* 返回数组的函数 */
    return array(1, 2, 3);
}

function name() { 
    echo 'jobs';
}
$func = 'name';
$func(); /* 用一个字符串调函数，nb吧 */
class book {
    function getName() {
        return 'bookname';
    }
}
$func = 'getName';
$book = new book();
$book->$func();/* 把字符串映射到函数 */

function func() {
}
if (function_exists('func')){/* 测试函数是否存在 */
    echo 'exists';
}

class MyClass{
}
// 测试类是否存在
if (class_exists('MyClass')) {
    $myclass = new MyClass();
}
$filename = 'test.txt';
if (!file_exists($filename)) { /* 测试文件是否存在 */
    echo $filename . ' not exists.';
}
18.  基本字符串操作
$hello = 'hello world'; /* 单引号字符串定义 */
$hello = "hello world"; /* 双引号字符串定义 */
$hello = <<<TAG
hello world
TAG; /* 神奇的方式，又叫heredoc */
------
$hello='hello';
$world=' world';
$hi = $hello.$world; /* 两个字符串的链接 */
------
/* 双引号中的$str被替换成变量 */
$str='hello';
echo "str is $str"; //运行结果: str is hello
echo 'str is $str'; //运行结果: str is $str
------
echo trim(" 空格 ");  /* trim去除字符串两端空格。 */
echo rtrim(" 空格 "); /* rtrim是去除字符串右部空格，r是right的缩写。 */
echo ltrim(" 空格 "); /* ltrim是去除字符串左部空格，l是left的缩写。 */
------
$str = 'hello';
$len = strlen($str); /* 获取字符串的长度 */
echo $len;/* 输出结果是5 */
$str = "我爱你";
echo mb_strlen($str,"UTF8");/* 获取以UTF8编码的字符串的长度. */
-----
$str='i love you';
echo substr($str, 2, 4); /* output "love", 从第二个( 最开始的是第0个)字符开始，取四个字符 */
$str='我爱你，中国';
echo mb_substr($str, 4, 2, 'utf8'); /* output“中国”, 规定了编码的版本 */
-----
$str = 'I want to study at imooc';
$pos = strpos($str, 'imooc');
echo $pos;//结果显示19，表示从位置0开始，imooc在第19个位置开始出现
-----
$str = 'I want to learn js';
$replace = str_replace('js', 'php', $str);
echo $replace;//结果显示I want to learn php
-----
$arr = array('Hello', 'World!');
$result = implode(' ', $arr); /* 把数组元素组合为一个字符串 ,字符串之间以空格分开 */
print_r($result);//结果显示Hello World!
$str = 'apple,banana';
$result = explode(',', $str);  /* 字符串以','分割 ,然后创建新数组  */
print_r($result);//结果显示array('apple','banana');
-----
$str = "what's your name?";
echo addslashes($str);/* 用于对特殊字符加上转义字符  输出："what\'s your name?"  */
19.字符串格式化
$str = '99.9';
$result = sprintf('%01.2f', $str);
echo $result;/* 结果显示99.90 */ 
其中 sprintf是格式化用函数
$str为被格式化的变量。
-----
对于 ‘%01.2f’来说:
% 	|  格式化开始
0 	|  如果宽度不够用0沾满
1	|  整个字符串至少长度为1
.2	|  小数点后取两位
f	|  把$str当成一个浮点数来处理
20.正则表达式 /* 这个东西都够出一本书了，简单mark 个*/
用一些特定的字符组合成一个规则字符串,然后看看某个字符串是否符合规则
$p = '/apple/';/* 是一个正则表达式,表示源字符串中是否存在apple字符串。里面的'/'是分隔符号，可以替换成'~''#'*/ 
$str = 'apple banna';
if (preg_match($p, $str)) { /* 利用preg_match函数，看看$str是否匹配$p描述的规则 */
    echo 'matched';	    /* 也就是说，看看“apple banna”里是否包含"apple" */
}
-----
$p = 'http://';
$p = '/'.preg_quote($p, '/').'/'; /* 转义很麻烦？用preg_quote */
echo $p;
-----
$str = "Http://www.imooc.com/"; /* 分隔符后面是用模式修饰符，其包括a, m, s, x，例如使用i修饰符可以忽略大小写匹配： */
if (preg_match('/http/i', $str)) {
    echo '匹配成功';
}
-----
常用元字符
\ 	|一般用于转义字符
^ 	|断言目标的开始位置(或在多行模式下是行首)
$ 	|断言目标的结束位置(或在多行模式下是行尾)
. 	|匹配除换行符外的任何字符(默认)
[ 	|开始字符类定义
] 	|结束字符类定义
| 	|开始一个可选分支
( 	|子组的开始标记
) 	|子组的结束标记
? 	|作为量词，表示 0 次或 1 次匹配。位于量词后面用于改变量词的贪婪特性。 (查阅量词)
* 	|量词，0 次或多次匹配
+ 	|量词，1 次或多次匹配
{ 	|自定义量词开始标记
} 	|自定义量词结束标记
\d	|数字
\s	|任意的空白符
[^\s]	|非空白符

对于[]内的元字符
\ 	|转义字符
^ 	|仅在作为第一个字符(方括号内)时，表明字符类取反
- 	|标记字符范围
-----
//\s匹配任意的空白符，包括空格，制表符，换行符。[^\s]代表非空白符。[^\s]+表示一次或多次匹配非空白符。
$str = "我喜欢吃苹果";
if (preg_match($p, $str)) {
    echo '匹配成功';
}
-----
$p = '/[\w\.\-]+@[a-z0-9\-]+\.(com|cn)/';/* \w匹配字母或数字或下划线。 */
$str = "我的邮箱是Spark.eric@imooc.com";
preg_match($p, $str, $match);
echo $match[0];
-----
$p = '/\d+\-\d+/'; /* 利用'?'启动贪婪模式：在可匹配与可不匹配的时候，优先匹配 */
$str = "我的电话是010-12345678";
preg_match($p, $str, $match);
echo $match[0]; //结果为：010-12345678
-----
$p = '/\d?\-\d?/';/* 利用'?'启动懒惰模式：在可匹配与可不匹配的时候，优先不匹配 */
$str = "我的电话是010-12345678";
preg_match($p, $str, $match);
echo $match[0];  //结果为：0-1
-----
$p = '/\d{3}\-\d{8}/'; /* 当我们确切的知道所匹配的字符长度的时候，可以使用{}指定匹配字符数 */
$str = "我的电话是010-12345678";
preg_match($p, $str, $match);
echo $match[0]; //结果为：010-12345678jkajkk
-----
<?php
$str = "<ul>
            <li>item 1</li>
            <li>item 2</li>
        </ul>";
preg_match_all(  "|<[^>]+>(.*?)</[^>]+>|i" , $str, $matches ); /* 得到字符串中所有的匹配 */
print_r($matches[1]);
-----
$string = 'April 15, 2014';
$pattern = '/(\w+) (\d+), (\d+)/i'; /* 搜索的模式串*/
$replacement = '$3, ${1} $2'; /* 替换的模式 */
echo preg_replace($pattern, $replacement, $string); //结果为：2014, April 15
21.文件操作
$content = file_get_contents('./test.txt'); /* 把文件中的所有内容读出来 */
-----
$fp = fopen('./text.txt', 'rb');
while(!feof($fp)) {
	    echo fgets($fp); //读取一行
}
fclose($fp);
-----
$fp = fopen('./text.txt', 'rb');
$contents = '';
while(!feof($fp)) {
	    $contents .= fread($fp, 4096); //一次读取4096个字符
}
fclose($fp);
-----
一般情况下在对文件进行操作的时候需要先，PHP中常用来判断文件存在的函数有两个is_file与file_exists.
$filename = './test.txt';
if (file_exists($filename)) {/* 判断文件,目录是否存在 */
	    echo file_get_contents($filename);
}
-----
$filename = './test.txt';
if (is_file($filename)) { /* 是否是一个文件 */
	    echo file_get_contents($filename);
}
-----
$filename = './test.txt';
if (is_writeable($filename)) {  /* 是否可写 */
	    file_put_contents($filename, 'test');
}
if (is_readable($filename)) { /* 是否可读 */
	    echo file_get_contents($filename);
}
-----
$filename = './test.txt';
$data = 'test';
file_put_contents($filename, $data); /* 写入内容到文件*/
-----
$fp = fopen('./test.txt', 'w');
fwrite($fp, 'hello');
fwrite($fp, 'world'); /* 另外一种写入方式 */
fclose($fp);
-----
fileowner	|获得文件的所有者
filectime	|获取文件的创建时间
filemtime	|获取文件的修改时间
fileatime	|获取文件的访问时间
$mtime = filemtime($filename); /* 获取文件的修改时间k */
echo '修改时间：'.date('Y-m-d H:i:s', filemtime($filename));
-----
$filename = '/data/webroot/usercode/code/resource/test.txt';
$size = filesize($filename);/* 取得文件的大小 */
-----
unlink($filename);/* 删除文件 */
rmdir($dir);/* 删除目录 */
foreach (glob("*") as $filename) {
	   unlink($filename); /* 逐个删除目录下的文件 */
}
22.时间
$time = time();
echo $time;//1396193923，这个数字表示从1970年1月1日 00:00:00 到我输出这个脚本时经历了1396193923秒
-----
echo date("Y-m-d"); /* 得到当前日期 */
echo date("Y-m-d",'1396193923');// 把时间戳转换成当前日期
-----
日期向时间戳转换
echo strtotime('2014-04-29');//1398700800，这个数字表示从1970年1月1日 00:00:00 到2014年4月29号经历了1398700800秒
echo strtotime('2014-04-29 00:00:01');//1398700801，这个数字表示从1970年1月1日 00:00:00 到2014-04-29 00:00:01时经历了1398700801秒
echo strtotime("now");//效果同echo time();把now转换为时间戳时间
echo strtotime("+1 seconds");//效果同echo time() + 1; 当前时间戳加一秒；
echo strtotime("+1 day");// 当前时间戳加一天；
echo strtotime("+1 week");//当前时间戳加一周；
echo strtotime("+1 week 3 days 7 hours 5 seconds");//当前时间加上了1周3天7小时5秒。
-----
echo date('Y-m-d H:i:s', time()); //输出为：2014-05-01 15:15:22 ,格林威治时间
echo gmdate('Y-m-d H:i:s', time()); //输出为：2014-05-01 07:15:22,格林威治时间
23.异常
基本语法
try{
    //可能出现错误或异常的代码
    //catch表示捕获，Exception是php已定义好的异常类
} catch(Exception $e){
    //对异常处理，方法：
	//1、自己处理
	//2、不处理，将其再次抛出
}
------
function checkNum($number){
     if($number>1){
         throw new Exception("异常提示-数字必须小于等于1");/* 这里写入的是getMessage()得到的数据 */
     }
     return true;
 }
//在 "try" 代码块中触发异常
 try{
     checkNum(2);
     //如果异常被抛出，那么下面一行代码将不会被输出
     echo '如果能看到这个提示，说明你的数字小于等于1';
 }catch(Exception $e){
     //捕获异常
     echo '捕获异常: ' .$e->getMessage();
 }
------
Exception基本属性与方法
message 		异常消息内容
code 			异常代码
file 			抛出异常的文件名
line 			抛出异常在该文件的行数
getTrace 		获取异常追踪信息
getTraceAsString	获取异常追踪信息的字符串
getMessage 		获取出错信息
class MyException extends Exception {
//自定义的异常类，继承了PHP的异常基类Exception
    function getInfo() {
        return '自定义错误信息';
    }
}
try {
    throw new MyException('error');//这里规定如何触发异常。注意：每一个 "throw" 必须对应至少一个 "catch"，当然可以对应多个"catch"
} catch(Exception $e) {//"catch" 代码块会捕获异常，并创建一个包含异常信息的对象
    echo $e->getInfo();//获取自定义的异常信息
    echo $e->getMessage();//获取继承自基类的getMessage信息
    echo $e->getTraceAsString(); //获取异常追踪信息的字符串
    echo $e->getLine(); //获取异常的行号
    echo $e->getFile(); //获取抛出异常的文件
}
异常处理之后继续顺序执行代码.

24.数据库操作
<?php
if (function_exists('mysql_connect')) { /* 测试是否支持mysql */
	    echo 'Mysql扩展已经安装';
}
-----
连接同一个数据库可以用不同版本的扩展
$link = mysql_connect('mysql_host', 'mysql_user', 'mysql_password');/* mysql扩展进行连接 */
$link = mysqli_connect('mysql_host', 'mysql_user', 'mysql_password'); /* mysqli扩展进行连接 */
$dsn = 'mysql:dbname=testdb;host=127.0.0.1';
$user = 'dbuser';
$password = 'dbpass';
$dbh = new PDO($dsn, $user, $password);/* PDO扩展 */
-----
$host = 'localhost';
$user = 'code1';
$pass = '';
$link = mysql_connect($host, $user, $pass); /* 发起链接 */
mysql_select_db('code1'); /* 选择数据库 */
mysql_query("set names 'utf8'"); /* 发起请求 */
-----
$res = mysql_query('select * from user limit 1');/* 查询类的语句返回资源句柄（resource），资源获取查询数据 */
$row = mysql_fetch_array($res); /* 得到数据 */
var_dump($row);
-----
从不同的连接中查找
$link1 = mysql_connect('127.0.0.1', 'code1', '');
$link2 = mysql_connect('127.0.0.1', 'code1', '', true); //开启一个新的连接
$res = mysql_query('select * from user limit 1', $link1); //从第一个连接中查询数据 
-----
$name = '李四';
$age = 18;
$class = '高三一班';
$sql = "insert into user(name, age, class) values('$name', '$age', '$class')";
mysql_query($sql); //执行插入语句 
在mysql中，执行插入语句以后，可以,通过PHP的mysql_insert_id函数可以获取该id。
$uid = mysql_insert_id(); /* 得到自增的主键id ,可以判断是否插入成功*/
-----
$sql = "select * from user limit 1";
$result = mysql_query($sql);/* 得到查询结果 */
$row = mysql_fetch_array($result); /* MYSQL_BOTH - 默认。同时产生关联和数字数组 */
$row = mysql_fetch_row($result); /*  取结一行结果为数字数组 */
$row = mysql_fetch_array($result, MYSQL_NUM); /* MYSQL_NUM -  取结一行结果为数字数组  */
$row = mysql_fetch_assoc($result); /*  取结一行结果为关联数组  */
$row = mysql_fetch_array($result, MYSQL_ASSOC);/* MYSQL_ASSOC - 取结一行结果为关联数组 */ 

$data = array(); /* 遍历所有结果 */
while ($row = mysql_fetch_array($result)) {
	    $data[] = $row;
}
-----
$page = 2;
$n = 2;
$m = ($page - 1) * $n;
$sql = "select * from user limit $m, $n"; /* 利用limit查询分页数据 */
$result = mysql_query($sql);
//循环获取当前页的数据
$data = array();
while ($row = mysql_fetch_assoc($result)) {
    $data[] = $row;
}
-----
$sql = "update user set name = '曹操' where id=2 limit 1";
if (mysql_query($sql)) {
	    echo '更新成功';
}
$sql = "delete from user where id=2 limit 1";
if (mysql_query($sql)) {
	    echo '删除成功';
}
$sql = "update user set name = '曹操' where id=2 limit 1";
if (mysql_query($sql)) {
	    echo mysql_affected_rows();
	    /* 得到被影响的行数 */
}
-----
mysql_close(); /* 关闭连接 */
$link = mysql_connect($host, $user, $pass);
mysql_close($link);/* 关闭某个连接 */



