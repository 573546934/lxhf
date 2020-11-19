<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0, user-scalable=no">
		<meta http-equiv="Page-Enter" content="blendTrans(Duration=0.5)" />
		<meta http-equiv="Page-Exit" content="blendTrans(Duration=0.5)" />
		<title>力新汇富</title>
		<link rel="stylesheet" href="/home/css/element-ui.css" />
		<link rel="stylesheet" href="/home/css/progressive.css" />
		<link rel="stylesheet" href="/home/css/main.css" />
	</head>
	<body>

		<div id="rootBox" class="index">
			<header class="header" id="header">
				<div class="content">
					<img class="logo normal" src="/home/images/logo.png">
					<img class="logo mini" src="/home/images/logo_w.png">
					<div class="mini">
						<div class="subLine" :class="navClass?'on':''" @click="showNav('navItem')"><span></span> <span></span> <span></span></div>
						<!-- <img src="/home/images/icon-nav.png" alt="" class="nav"> -->
						<!-- <img src="/home/images/icon-search.png" alt="" class="search" @click="showNav('searchItem')"> -->
					</div>
					<div class="links" :class="navClass">
						<div class="navWrap">
						<div class="custom">
							<a href="">客户中心</a>
							<a href="">联系我们</a>
						</div>
						<div class="nav">
							<ul>
								<li class="actived"><a href="/home/index.html">首页</a></li>
								<li><a href="/who">我们是谁</a></li>
								<li><a href="/product">我们做什么</a></li>
								<li><a href="/who">我们的历史</a></li>
								<li><a href="/who">我们的未来</a></li>
							</ul>
							<div class="searchBoxWrap">
								<form action="" method="" />
								<div class="searchBox"><input type="text" placeholder="请输入关键词" />
									<button type="image" src="/home/images/icon-search.png"></button>
								</div>
								</form>

							</div>
						</div>
					</div>
				</div>
		</div>
		</header>
		<div class="body">

			<div id="banner">
				<vue-slideshow :imgs="images" :config="config"></vue-slideshow>
				<!-- <div class="item" style="background-image: url(images/banner.jpg);">
						
						<img class="thumb" src="/home/images/banner.jpg" alt="" onload="showBigImg" />
						<img src="/home/images/banner@2x.jpg" alt="" onload="showBigImg" />
					</div> -->

			</div>
			<div class="content">
				<div class="slogan"><img src="/home/images/slogan.png" alt=""><span>基金投资领先的资产管理专家</span></div>
				
				<div class="accordion">
					<div class="box" :class=" tabIndex===1?'show':'' " @click="toggle(1)">

						<header>
							<div class="bg">
								<span>公司新闻</span>
								<em class="show">+</em>
							</div>
						</header>
						<div class="news">
							<div class="top">
								<div class="time"><em>18</em>10月</div>
								<a href=""><em>北京力新汇富投资基金管理有限公司新闻基金管理有限公司新闻基金管理有限公司新闻基金管理有限公司新闻</em><span>北京力新汇富投资基金管理有限公司北京力新汇富投资基金管理有限公司北京力新汇富投资基金管理有限公司投资基金管理有限公司投资基金管理有限公司</span></a>
							</div>
							<ul>
								<li><a href=""><em>力新汇富·专业值得信赖</em><span>力新汇富投资基金管理有限基金投资管理有限基金有限基金</span></a></li>
								<li><a href=""><em>谋远路共成长，力新汇富谋远路共成长</em><span>行业领先的基金管理专家</span></a></li>
							</ul>
							<div class="more"><a href="news.html">MORE</a></div>
						</div>

					</div>
					<div class="box" :class=" tabIndex===2?'show':'' " @click="toggle(2)">

						<header>
							<div class="bg">
								<span>公司简介</span>
								<em class="show">+</em>
							</div>
						</header>
						<div class="news profile">北京力新汇富投资基金管理有限公司（下称“力新汇富”）成立于2009年9月，2018年3月通过中国证券投资基金业协会私募基金管理人登记（登记编号为：P1067561），管理团队平均拥有10年+的投资经验。力新汇富以“融合到位、实现共赢”为使命，通过与国家级产业园区“创新谷”深度合作，依托园区产业集聚的项目资源优势，为园区产业提供深度服务，大构架全方位赋能，联盟式产融结合，不断扩大园区企业的新业务；同时，借助基金的资金优势，对园区企业实行行业整合，横向、纵向、上下游产业的重组、互补，推动园区企业形成“企业航母”，进一步提升企业市场竞争力。</div>

					</div>
					<div class="box" :class=" tabIndex===3?'show':'' " @click="toggle(3)">

						<header>
							<div class="bg">
								<span>基金产品</span>
								<em class="show">+</em>
							</div>
						</header>
						<div class="news">
							<div class="top">
								<div class="time"><em>18</em>10月</div>
								<a href=""><em>北京力新汇富投资基金管理有限公司新闻基金管理有限公司新闻基金管理有限公司新闻基金管理有限公司新闻</em><span>北京力新汇富投资基金管理有限公司北京力新汇富投资基金管理有限公司北京力新汇富投资基金管理有限公司投资基金管理有限公司投资基金管理有限公司</span></a>
							</div>
							<ul>
								<li><a href=""><em>力新汇富·专业值得信赖</em><span>力新汇富投资基金管理有限基金投资管理有限基金有限基金</span></a></li>
								<li><a href=""><em>谋远路共成长，力新汇富谋远路共成长</em><span>行业领先的基金管理专家</span></a></li>
							</ul>
							<div class="more"><a href="news.html">MORE</a></div>
						</div>

					</div>
					<div class="box" :class=" tabIndex===4?'show':'' " @click="toggle(4)">
						<header>
							<div class="bg">
								<span>客服中心</span>
								<em class="show">+</em>
							</div>
						</header>
						<div class="news server">地址：北京市房山区良乡凯旋大街建设路18号创新谷<br />电话：010-69380375
							<br />邮箱：lixinhuifu@126.com</div>
					</div>

				</div>

			</div>
		</div>
		<footer class="footer" id="footer">
			<div class="content">
				<div class="img"><img src="/home/images/footerImg.png" alt=""></div>

				<div class="btns">
					<button type="button" class="reg">快速注册</button>
					<button type="button" class="login">登录</button>
				</div>
			</div>
		</footer>
		</div>
		<script src="/home/js/jquery-3.5.1.min.js" type="text/javascript"></script>
		<script src="/home/js/vue.min.js" type="text/javascript" charset="utf-8"></script>
		<script src="/home/js/element-ui.js" type="text/javascript" charset="utf-8"></script>
		<script src="/home/js/vue-slideshow.js" type="text/javascript"></script>
		<script src="/home/js/global.js" type="text/javascript" charset="utf-8"></script>
		<!-- <script src="/home/js/main.js" type="text/javascript" charset="utf-8"></script> -->
		<script src="/home/js/index.js" type="text/javascript" charset="utf-8"></script>
	</body>
</html>
