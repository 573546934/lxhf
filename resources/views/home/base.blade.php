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


		
		<link rel="stylesheet" href="/static/admin/layuiadmin/layui/css/layui.css" media="all">
    <link rel="stylesheet" href="/static/admin/layuiadmin/style/admin.css" media="all">
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
								@if(session('member'))
								<a style="color: mistyrose">您好:会员{{session('member')['name']}}</a>
								
								@else
								<a class="btn reg"  id="openDialog1">快速注册</a>
								<a class="btn login" id="openLogin">登录</a> 
								@endif
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
						<el-footer height="auto" >
								<div class="web">
									<div class="qrWrap">
										<img src="/home/images/icon-wx.png" alt="微信公众号" />	
										<div class="qrcode"><img src="/home/images/qr.png" alt="二维码" /></div>
									</div>
									<!--a href="" target="_blank"><img src="./images/icon-weibo.png" alt="微博" /></a-->
								</div>
								<div class="links">
									<!--a href="">网站地图</a>
									<a href="">网站隐私</a-->
									<a href="/contact">加入我们</a>
									<a href="/after">联系我们</a>
								</div>
								<div class="copyright">
									© 2020 lxhffund.com Corporation. All rights reserved
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

		<script src="/static/admin/layuiadmin/layui/layui.js"></script>

<script>
            layui.use(['layer','table','form'],function () {
                var layer = layui.layer;
                var form = layui.form;
                var table = layui.table;
				//弹出层
				
				var reg = '<br><div class="layui-form-item">'+
   							 '<label for="" class="layui-form-label">电话号码</label>'+
   							 '<div class="layui-input-inline">'+
        						'<input type="text" name="phone" value="" id="phone" lay-verify="required" placeholder="请输入手机号码" class="layui-input" >'+
    						'</div>'+
							'</div>'+
							/* '<div class="layui-form-item">'+
   							 '<label for="" class="layui-form-label">验证码</label>'+
   							 '<div class="layui-input-inline">'+
        						'<input type="text" name="code" id="code" value="" lay-verify="required" placeholder="请输入验证码" class="layui-input" >'+
							'</div>'+ 
							'<div class="layui-form-mid layui-word-aux layui-btn" style="background: none;" id="send1" onclick="test()">发&nbsp&nbsp&nbsp送</div>'+
							'</div>'+ */
							'<div class="layui-form-item">'+
   							 '<label for="" class="layui-form-label">密码</label>'+
   							 '<div class="layui-input-inline">'+
        						'<input type="password" name="password" id="password" value="" lay-verify="required" placeholder="请输入密码" class="layui-input" >'+
    						'</div>'+
							'</div>'+ '<div class="layui-form-item">'+
   							 '<label for="" class="layui-form-label">姓名</label>'+
   							 '<div class="layui-input-inline">'+
        						'<input type="text" name="name" id="name" value="" lay-verify="required" placeholder="请输入姓名" class="layui-input" >'+
    						'</div>'+
							'</div>';

                $("#openDialog1").click(function () {
					layer.open({
							type: 1, 
							area: '400px',
							content: reg //这里content是一个普通的String
							,btn: ['注册', '取消']
							,yes: function(index, layero){
								//按钮【按钮一】的回调
								
								var phone = $("#phone").val()
								var password = $("#password").val()
								var name = $("#name").val()
								console.log(phone)

								//发送请求
								$.post("{{ route('home.reg') }}",{_method:'post',phone:phone,password:password,name:name,_token:'{{csrf_token()}}'},function (result) {
									if (result.code==0){
										//注册成功	
										layer.msg(result.msg,{icon:6});	
										//刷新页面
										location.reload() 	
									}else{
										layer.msg(result.msg,{icon:5});	
									}
								})
								.fail(function(response) {
									
									var errors = eval('(' + response.responseText + ')').errors
									console.log(errors)
									var s = '';
									for ( var k in errors) {
										s +=  errors[k]
									}
									alert(s)
								});
								layer.close(index); //如果设定了yes回调，需进行手工关闭
							}
							,btn2: function(index, layero){
								//按钮【按钮二】的回调
								
								//return false 开启该代码可禁止点击该按钮关闭
							}
							,closeBtn: 2
							,btnAlign: 'c'
							,shade: 0.5
							});
				})


				var login = '<br><div class="layui-form-item">'+
   							'<label for="" class="layui-form-label">电话号码</label>'+
   							'<div class="layui-input-inline">'+
        					'<input type="text" name="phone" value="" id="phone" lay-verify="required" placeholder="请输入手机号码" class="layui-input" >'+
    						'</div>'+
							'</div>'+
							'<div class="layui-form-item">'+
   							'<label for="" class="layui-form-label">密码</label>'+
   							'<div class="layui-input-inline">'+
        					'<input type="password" name="password" id="password" value="" lay-verify="required" placeholder="请输入密码" class="layui-input" >'+
    						'</div>'+
							'</div>';


                $("#openLogin").click(function () {
					layer.open({
							type: 1, 
							area: '400px',
							content: login //这里content是一个普通的String
							,btn: ['登录', '取消']
							,yes: function(index, layero){

								var phone = $("#phone").val()
								var password = $("#password").val()
								//发送请求
								$.post("{{ route('home.login') }}",{_method:'post',phone:phone,password:password,_token:'{{csrf_token()}}'},function (result) {
									if (result.code==0){
										//登录成功	
										layer.msg(result.msg,{icon:6});	
										//刷新页面
										location.reload() 	
									}else{
										layer.msg(result.msg,{icon:5});	
									}
								})
								.fail(function(response) {
									
									var errors = eval('(' + response.responseText + ')').errors
									console.log(errors)
									var s = '';
									for ( var k in errors) {
										s +=  errors[k]
									}
									alert(s)
								});
								layer.close(index); //如果设定了yes回调，需进行手工关闭
							}
							,btn2: function(index, layero){
								//按钮【按钮二】的回调
								
								//return false 开启该代码可禁止点击该按钮关闭
							}
							,closeBtn: 2
							,btnAlign: 'c'
							,shade: 0.5
							});
				})
				
			})
			function test(){
				var p = $("#phone").val();
					console.log(p)

				}
        </script>
		
    @yield('script')
	</body>
</html>
