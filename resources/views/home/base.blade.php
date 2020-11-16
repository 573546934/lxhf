<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0, user-scalable=no">
		<meta http-equiv="Page-Enter" content="blendTrans(Duration=10.5,Transition=1)" />
		<meta http-equiv="Page-Exit" content="blendTrans(Duration=10.5,Transition=1)" />
		<title>力新汇富</title>
		<link rel="stylesheet" href="/home/css/element-ui.css" />
		<link rel="stylesheet" href="/home/css/main.css" />
	</head>
	<body>

		<div id="rootBox" class="default">
			<el-container>
				<el-header class="pageTop" height="auto">
					<div class="positon">&lt; 我们是谁</div>
					<div class="nav_mini">
						<div class="subLine" :class="navClass?'on':''" @click="showNav('navItem')">
							<span></span>
							<span></span>
							<span></span>
						</div>
						<!-- <div class="searchBox"></div> -->
					</div>
					<div class="links" :class="navClass">
						<div class="custom">
							<a href="">客户中心</a>
							<a href="">联系我们</a>
						</div>
						<div class="nav">
							<ul>
							  @yield('tab')
							  <div class="nav">
			 		
							<div class="btns">
								<div class="searchBox"><input type="text" placeholder="请输入关键词" />
									<button type="image" src="./images/icon-search.png"></button>
								</div>
								<a class="btn reg">快速注册</a>
								<a class="btn login">登录</a>
							</div>
							<div class="searchBoxWrap">
								<form action="" method="" />
								<div class="searchBox"><input type="text" placeholder="请输入关键词" />
									<button type="image" src="./images/icon-search.png"></button>
								</div>
								</form>
							</div>
						</div>


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
				</el-header>
				<el-container class="mainContent">
					<el-aside class="aside" width="100%">
						<img class="logo" src="/home/images/logo.png">
						<template v-if="asideTabs.length>0">
							<el-tabs v-model="asideTabIndex" :tab-position="tabPosition" @tab-click="tabClick">
								<template v-for="(item,index) in asideTabs" :key="index">
									<el-tab-pane :label="item.name"></el-tab-pane>
								</template>
							</el-tabs>
						</template>
						<el-footer height="auto">
							<div class="web">
								<img src="/home/images/icon-wx.png" alt="微信公众号" />
								<a href="" target="_blank"><img src="/home/images/icon-weibo.png" alt="微博" /></a>
							</div>
							<div class="links">
								<a href="">网站地图</a>
								<a href="">网站隐私</a>
								<a href="">联系我们</a>
							</div>
							<div class="copyright">
								© 2020 lxhffund.com Corporation. <br />All rights reserved
							</div>
						</el-footer>
					</el-aside>
					<el-container>
						<article>
							<el-header height="auto"><img src="/home/images/article-banner.png" class="banner"></img></el-header>
							
              @yield('main')
						
						</article>
					</el-container>
				</el-container>
				<el-footer height="auto">
					<div class="web">
						<img src="/home/images/icon-wx.png" alt="微信公众号" />
						<a href="" target="_blank"><img src="/home/images/icon-weibo.png" alt="微博" /></a>
					</div>
					<div class="links">
						<a href="">网站地图</a>
						<a href="">网站隐私</a>
						<a href="">联系我们</a>
					</div>
					<div class="copyright">
						© 2020 lxhffund.com Corporation. All rights reserved
					</div>
				</el-footer>
			</el-container>
		</div>
		<script src="/home/js/jquery-3.5.1.min.js" type="text/javascript"></script>
		<script src="/home/js/vue.min.js" type="text/javascript" charset="utf-8"></script>
		<script src="/home/js/element-ui.js" type="text/javascript" charset="utf-8"></script>
		<script src="/home/js/global.js" type="text/javascript" charset="utf-8"></script>
		
    @yield('script')
	</body>
</html>
