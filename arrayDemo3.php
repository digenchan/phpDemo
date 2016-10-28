<?php 

// 定义一个一维关联数组
$data = array(
              'pic'=>'img/辣条.jpg',
	          'price' => 9.9,
	          'buyerCount'=>227,
	          'des'=>'嘴巴香亲嘴片辣条辣片',
	          'shopName'=>'进哥零食',
              'shopLocation'=>'重庆',
              'size'=>'9.9/700g',
              'yfx'=>'1',
              'goldenSeller'=>'1'
	          );


// 定义一个多维关联数组
$datas= array(
	       array('pic'=>'img/辣条.jpg',
	       	  'price' => 9.9,
	          'buyerCount'=>227,
	          'des'=>'嘴巴香亲嘴片辣条辣片',
	          'shopName'=>'进哥零食',
              'shopLocation'=>'重庆',
              'size'=>'9.9/700g',
              'yfx'=>'1',
              'goldenSeller'=>'1'
	          ),
           array('pic'=>'img/肉脯干.jpg',
           	  'price' => 19.9,
	          'buyerCount'=>88,
	          'des'=>'其它描述',
	          'shopName'=>'广州零食',
              'shopLocation'=>'广州',
              'size'=>'50g小袋包装',
              'yfx'=>'1',
              'goldenSeller'=>'0'
	          )
	       );



 ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>表格展示关联数组数据</title>
</head>
<body>
    <h2>一维关联数组数据显示</h2>
	<table border="1">
		<tr>
			<th>图片</th>
			<th>价格</th>
			<th>销量</th>
			<th>描述</th>
			<th>商家名称</th>
			<th>商家地址</th>
			<th>包装规格</th>
			<th>运费险</th>
			<th>金牌卖家</th>
		</tr>
		<tr>
			<td><img src="<?php echo $data['pic'] ?>" alt="" style="width:30px;height:30px;"></td>
			<td><?php echo $data['price'] ?></td>
			<td><?php echo $data['buyerCount'] ?></td>
			<td><?php echo $data['des'] ?></td>
			<td><?php echo $data['shopName'] ?></td>
			<td><?php echo $data['shopLocation'] ?></td>
			<td><?php echo $data['size'] ?></td>
			<td>
				<?php if ($data['yfx']=='1'){ ?>
	                <img src="img/yunfeixian.png" alt="">
	            <?php } ?>   
			</td>
			<td>
				<?php if ($data['goldenSeller']=='1'){ ?>
	                <img src="img/goldenSeller.png" alt="">
	            <?php } ?> 
			</td>
		</tr>
	</table>


	<h2>多维关联数组数据显示</h2>
	<table border="1">
		<tr>
			<th>图片</th>
			<th>价格</th>
			<th>销量</th>
			<th>描述</th>
			<th>商家名称</th>
			<th>商家地址</th>
			<th>包装规格</th>
			<th>运费险</th>
			<th>金牌卖家</th>
		</tr>
		<?php foreach ($datas as $row) { ?>
			<!-- 下面是要循环显示的表格内容 -->
		<tr>
			<td>
				<img src="<?php echo $row['pic'] ?>" alt="" style="width:30px;height:30px;">
			</td>
			<td><?php echo $row['price'] ?></td>
			<td><?php echo $row['buyerCount'] ?></td>
			<td><?php echo $row['des'] ?></td>
			<td><?php echo $row['shopName'] ?></td>
			<td><?php echo $row['shopLocation'] ?></td>
			<td><?php echo $row['size'] ?></td>
			<td>
				<?php if ($row['yfx']=='1'){ ?>
	                <img src="img/yunfeixian.png" alt="">
	            <?php } ?>   
			</td>
			<td>
				<?php if ($row['goldenSeller']=='1'){ ?>
	                <img src="img/goldenSeller.png" alt="">
	            <?php } ?> 
			</td>
		</tr>
		<!-- 循环到这里结果 -->
		<?php } ?>
	</table>
</body>
</html>