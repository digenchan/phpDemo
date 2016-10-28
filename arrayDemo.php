<?php
// 保证页面的中文显示
header("content-type:text/html;charset=utf-8");

// 定义一个数值数组 - 带有数字 ID 键的数组
$data = array(9.9,227,'嘴巴香亲嘴片辣条辣片','进哥零食','重庆','9.9/700g','1','0');
echo '<hr>';

//输出数组$data的概况
echo '<h3>输出数值数组array(9.9,227,\'嘴巴香亲嘴片辣条辣片\'....)的概况</h3><br>';
print_r($data);
echo '<hr>';

//输出数组的某个具体的值，明确写出具体的下标如$data[1]
echo '<h3>输出数值数组的某个具体的值，明确写出具体的下标如$data[1]</h3><br>';
echo '$data[1]的值为：'.$data[1];
echo '<hr>';

// 遍历数值数组内所有元素
echo '<h3>遍历数值数组内所有元素</h3><br>';
for ($i=0; $i <count($data); $i++) { 
	echo $data[$i]."  ";
}
echo '<hr>';

// 定义一个关联数组 - 带有指定的键的数组，每个键关联一个值
$data = array('price' => 9.9,
	          'buyerCount'=>227,
	          'des'=>'嘴巴香亲嘴片辣条辣片',
	          'shopName'=>'进哥零食',
              'shopLocation'=>'重庆',
              'size'=>'9.9/700g',
              'yfx'=>'1',
              'goldenSeller'=>'0'
	          );
//输出数组$data的概况
echo '<h4>输出关联数组array(\'price\' => 9.9,\'buyerCount\'=>227,\'des\'=>\'嘴巴香亲嘴....\' )的概况</h4><br>';
var_dump($data);
echo '<hr>';

// 输出数组的某个具体的值，写出其key即可
echo '<h3>输出关联数组的某个具体的值，写出其key即可，如$data[\'des\']</h3><br>';
echo '$data[\'des\']的值为：'.$data['des'];
echo '<hr>';

// 遍历关联数组内所有元素,含key和value
echo '<h3>遍历关联数组内所有元素，含key和value</h3><br>';
foreach ($data as $key => $value) {
	echo $key ."的值是：".$value.'<br>';
}
echo '<hr>';

// 遍历关联数组内所有元素，只要value
echo '<h3>遍历关联数组内所有元素，只要value</h3><br>';
foreach ($data as $key => $value) {
	echo $data[$key].'<br>';
}
echo '<hr>';

// 定义一个多维关联数组 - 带有指定的键的数组，每个键关联一个值
$data = array(
	       array('price' => 9.9,
	          'buyerCount'=>227,
	          'des'=>'嘴巴香亲嘴片辣条辣片',
	          'shopName'=>'进哥零食',
              'shopLocation'=>'重庆',
              'size'=>'9.9/700g',
              'yfx'=>'1',
              'goldenSeller'=>'0'
	          ),
           array('price' => 19.9,
	          'buyerCount'=>88,
	          'des'=>'其它描述',
	          'shopName'=>'广州零食',
              'shopLocation'=>'广州',
              'size'=>'50g小袋包装',
              'yfx'=>'1',
              'goldenSeller'=>'1'
	          ));
//输出数组$data的概况
echo '<h3>输出多维关联数组array(array(\'price\' => 9.9,\'buyerCount\'=>227,\'des\'=>\'嘴巴香亲嘴....\' )的概况</h3><br>';
var_dump($data);
echo '<hr>';

// 遍历多维关联数组内所有元素，只要value
echo '<h3>遍历多维关联数组内所有元素，只要value</h3><br>';
foreach ($data as $row) {
	echo $row['price'].'  '.$row['buyerCount'].'  '.$row['des'].'  '.$row['shopName'].'  '.$row['shopLocation'].'<br>';
}
?>