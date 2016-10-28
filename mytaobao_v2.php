<?php 
// 定义一个多维关联数组，按页面上数据出现的先后顺序组织数据
$datas= array(
	       array('pic'=>'img/辣条.jpg',
	       	  'price' => 9.9,
	       	  'baoyou'=>'0',
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
           	  'baoyou'=>'1',
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
	<title>微淘宝 V2.0</title>
    <link rel="stylesheet" href="/css/index.css">
</head>
<body>
    <!-- 最外面的div，用来控制整体页面内容居中 -->
	<div id="container">
	   <!-- 头部 -->
		<header>
		   <!-- 头部左侧logo，左浮 -->
		   <div class="fl">
		     <img src="/img/taobaologo.png" alt="">
		   </div>
		   <!-- 头部右侧登录注册链接，右浮 -->
		   <div class="fr">
		        <!-- 登录信息链接 -->
				<span>
				   <a href="#" class="login">亲，请登录</a></span>
				<span>|</span>
				<!-- 注册信息链接 -->
				<span class="reg">
				   <a href="">免费注册</a>
				</span>
		   </div>
		</header>
		<!-- 清除浮动 -->
		<div class="cls"></div>
		<!-- 导航 -->
		<nav>			
			<a href="#">淘抢购</a>
			<a href="#">电器城</a>
			<a href="#">司法拍卖</a>
            <a href="#">中国质造</a>
			<a href="#">特色中国</a>
			<a href="#">阿里旅行</a>
			<a href="#">智能生活</a>
		</nav>
		<div class="cls"></div>
		<!-- 中间主体内容 -->
		<div id="main">
		    <!-- 左侧菜单，边框，左浮 -->
		    <!-- 左侧菜单，边框，左浮 -->
			<div id="lside" class="box fl">
			    <!-- 左侧菜单标题 -->
				<div class="subtitle">
					最新上架
				</div>
				<!-- 左侧菜单内容链接 -->
				<ul>
					<li><a href="#">美食/生鲜/零食</a></li>
					<li><a href="#">箱包</a></li>
					<li><a href="#">床上用品</a></li>
				</ul>
			</div>
			
			<!-- 右侧商品展示内容，边框，左浮 -->
			<div id="rside" class="box fl">
			<!-- 这里是要循环显示的div，需要在这里添加php循环开始语句 -->
			<?php foreach ($datas as $row) {?>			
				<!-- 商品div -->
				<div class="sp box">
					<!-- 上部商品图片div -->
			        <div class="pic">
						<img src="<?php echo $row['pic'] ?>" alt="">
					</div>     
			        <!-- 下部商品概况div -->
			        <div class="content">
			            <!-- 第一行：商品价格，包邮，购买人数 -->
			        	<div class="row row1">
			                <!-- 价格 -->
			        		<div class="fl">
			        			<strong class="rmb">￥</strong>
			                    <strong><?php echo $row['price'] ?></strong>
			                    <?php if ($row['baoyou']=='1'){ ?>
					                <img src="img/baoyou.png" alt="">
					            <?php } ?>  
			        		</div>
			                <!-- 购买人数 -->
			        		<div class="count fr">
			        			<span>销量:</span>
			                    <span><?php echo $row['buyerCount'] ?></span>
			        		</div>
			        	</div>
			            <!-- 第二行：商品简介 -->
			        	<div class="row row2 des">
			            	 <a href="">
			            	 	<?php echo $row['des'] ?>
			            	 </a>
			        	</div>
			            <!-- 第三行：商家信息（商家名称，商家定位） -->
			        	<div class="row row3">
			                <!-- 商家名称 -->
			        		<div class="shopname fl">
			        		  <a href="#"><?php echo $row['shopName'] ?></a>
			        		</div>
			                <!-- 商家定位 -->
			        		<div class="shopLocation fr">
			        		  <?php echo $row['shopLocation'] ?>
			        		</div>
			        	</div>
			            <div class="cls"></div>
			            <!-- 第四行：包装规格，运费险，金牌卖家-->
			        	<div class="row row4">
			        	    <!-- 包装规格-->
				                <div class="size fl">
				                  <?php echo $row['size'] ?>
				                </div>
				            <!-- 运费险-->
					            <div class="yfx fl">
					            	<?php if ($row['yfx']=='1'){ ?>
						                <img src="img/yunfeixian.png" alt="">
						            <?php } ?>   
					            </div>				                

					            <div class="golden fl">
					            	<?php if ($row['goldenSeller']=='1'){ ?>
						                <img src="img/goldenSeller.png" alt="">
						            <?php } ?> 
					            </div>				                
			                <div class="fr">
			                	<img src="img/wangwang.png" alt="">
			                </div>
			            </div>
			        </div>
			   </div>
			<!-- 这里是要循环显示div的结束，在此添加php循环结束代码 -->
			<?php } ?>
			</div>			
		</div>	
		<!-- 清除浮动 -->
		<div class="cls"></div>
		<!-- 底部版权 -->
		<footer>
			联系我们 | @Copyright 广商商城　2014-2016
		</footer>
	</div>
</body>
</html>