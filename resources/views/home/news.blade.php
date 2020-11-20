@extends('home.base')
@section('tab')
	<li><a href="/">首页</a></li>
	<li ><a href="/who">我们是谁</a></li>
	<li ><a href="/product">我们做什么</a></li>
	<li class="actived"><a href="/news">我们的历史</a></li>
	<li><a href="/after">我们的未来</a></li>
@endsection

<!-- 中间内容 -->
@section('main')
<el-main  class="el-main article" >

<template v-if="asideTabIndex==0">
		<div id="tex">
		
		</div>
		<div id="det">
			@foreach($cnews as $k=>$v)
				@if($k == 0)
					<div class="newsList">
					<el-link onclick="test({{$v['id']}})" class="first" style="width: 100%;">
						<div class="content">
							<div>
							<h2>{{$v['title']}}</h2>
							<p>{{$v['description']}}</p>
							</div>
						<el-button><img src="/home/images/viewDetail.png" class="icon" alt=""/><span>查看详情</span></el-button>
						</div>
						<img class="firstImg" src="{{$v['thumb']}}" alt="" style="height: 270px;">
					</el-link>
					</div>
				@else	
					<div class="other">
					<div class="showNews">

						<el-link onclick="test({{$v['id']}})" class="item">
							<img src="{{$v['thumb']}}" class="" alt="">
							<div class="content">
								<h3>{{$v['title']}}</h3>
								<p>{{$v['description']}}</p>
							</div>
						</el-link>
						
					<div class="moreArea" @click="showMore" v-if="config.isShowMore"><img src="/home/images/arrow-down.png" class="down" alt=""></div>
					</div>
					</div>		
				@endif
			@endforeach
		
		</div>		
	</template>

	<template v-if="asideTabIndex==1">
		<div id="tex">
		
		</div>
		<div id="det">
			@foreach($news as $k=>$v)
				@if($k == 0)
					<div class="newsList">
					<el-link onclick="test({{$v['id']}})" class="first" style="width: 100%;">
						<div class="content">
							<div>
							<h2>{{$v['title']}}</h2>
							<p>{{$v['description']}}</p>
							</div>
						<el-button><img src="/home/images/viewDetail.png" class="icon" alt=""/><span>查看详情</span></el-button>
						</div>
						<img class="firstImg" src="{{$v['thumb']}}" alt="" style="height: 270px;">
					</el-link>
					</div>
				@else	
					<div class="other">
					<div class="showNews">

						<el-link onclick="test({{$v['id']}})" class="item">
							<img src="{{$v['thumb']}}" class="" alt="">
							<div class="content">
								<h3>{{$v['title']}}</h3>
								<p>{{$v['description']}}</p>
							</div>
						</el-link>
						
					<div class="moreArea" @click="showMore" v-if="config.isShowMore"><img src="/home/images/arrow-down.png" class="down" alt=""></div>
					</div>
					</div>		
				@endif
			@endforeach
		
		</div>		
	</template>
	
</el-main>	
@endsection	


@section('script')
		<script src="./js/templage.js" type="text/javascript" charset="utf-8"></script>
	<script>
		var Tabs = [];
		 $.post("{{ route('home.index.tableft') }}",{_method:'get',title:'我们的历史'},function (result) {
			if (result.code==0){
				var data = result.data;
				//
				$.each(data.childs, function(i,val){     
					//左侧导航
					Tabs.push({name:val.name})				
				});   				
			}
		})
		console.log(Tabs)
		new Vue({
			el: "#rootBox",
			data: {
				asideTabs: Tabs,
				asideTabIndex:'0',
				config: {
					autoplay: 300000,
					arrow: false,
					dot: false,
					effect: "fade"
				},
				navClass:'',
				tabPosition:'left'
			},
			created() {
				if(window.innerWidth<=768){
					this.tabPosition='top'
				}
			},
			methods:{
				tabClick(tab, event){
					console.log(this.asideTabIndex)
					$("#det").show();
					$("#tex").empty();

					// console.log(this.asideTabs,tab);
					let index=Number(tab.index)
				},
				//显示隐藏的导航菜单
				showNav(e){
					this.navClass=this.navClass?'':e

					// setTimeout(()=>{
					// 	this.navClass=''
					// },3000)
				}
			}
		});

		lixin.showMore=function(){
			console.log(lixin.config.isShowMore)
			// lixin.config.isShowMore=!lixin.config.isShowMore
			Vue.set(lixin.config, 'isShowMore',!lixin.config.isShowMore);
		}

		function test(id){

			//获取文章详情
			$.post("{{ route('home.news.detail') }}",{_method:'get',id:id},function (result) {
				if (result.code==0){
					var data = result.data;

					var h = '<div class="articleContent">'+
							'<div class="atitle" style="font-size: 1,5rem;">'+data.title+'</div>'+
							'<div class="spaceLine-icon"></div>'+
							'<div class="content" >'+
							data.content+
							'</div>'+
							'</div>';

					$("#tex").html(h);			
				}
			})
		
			$("#det").hide();
		}	
	
	</script>
	<style>
		.atitle {
			text-align: center;
			font-size: 1.5rem;
			color: #222;
			margin-bottom: .5em;
			line-height: 1.5em;
		}
	</style>
@endsection				