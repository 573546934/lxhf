@extends('home.base')
@section('tab')
	<li><a href="/">首页</a></li>
	<li ><a href="/who">我们是谁</a></li>
	<li class="actived"><a href="/product">我们做什么</a></li>
	<li><a href="/news">我们的历史</a></li>
	<li><a href="/after">我们的未来</a></li>
@endsection

<!-- 中间内容 -->
@section('main')
<el-main  class="el-main article" >

	<template v-if="asideTabIndex==0">
		<section class="service">
			<div class="sectionHead">
				<img class="pageTitleImg" src="/home/images/partnerTitle.png" alt="">
				<div class="title">业务介绍</div>
				<div class="spaceLine1"></div>
			</div>
			<div class="content serviceShow">
				
				
			<div class="title">企业赋能业务</div>
			<div class="spaceLine-icon"></div>
			<div class="subtitle">现有产业深度服务 VS 大框架全方位赋能、联盟式产融结合</div>
			<div class="intros">
				<div class="item">
					<img src="/home/images/type-1.png" alt="">
					<div class="name">项目推介</div>
					<div class="info">利用园区企业集聚优势，邀请行业大咖，定期为园区企业提供项目路演推介服务。 </div>
				</div>
				<div class="item">
					<img src="/home/images/type-2.png" alt="">
					<div class="name">融资服务</div>
					<div class="info">针对企业的融资需求，为企业量身定制融资方案，切实解决企业的融资需求。 </div>
				</div>
				<div class="item">
					<img src="/home/images/type-3.png" alt="">
					<div class="name">估值定价</div>
					<div class="info">针对中小企业估值难的问题，借助园区企业纳税的评判依据，以领投的方式为企业估值定价。 </div>
				</div>
			</div>
			<div class="advantages">
				<div class="advantage">
					<div class="img">
						<img src="/home/images/news1.jpg" alt="">
					</div>
					<div class="msg">
						<div class="inner">
							<h3>大构架全方位赋能 </h3>
							<p>依托园区企业集聚优势，借助创新谷平台系统，对园区企业实行行业分类。基金团队在与各地政府、企业对接过程中发掘的新业务，以类集团式</p>
						</div>
					</div>
				</div>
				<div class="advantage">
					<div class="img">
						<img src="/home/images/news2.jpg" alt="">
					</div>
					<div class="msg">
						<div class="inner">
							<h3>联盟式产融结合</h3>
							<p>依托园区同行业、同类别企业的极大丰富资源，借助基金的资金优势，对园区企业实行行业整合，横向、纵向、上下游产业的重组、互补，使园区企业形成“企业航母”，进一步提升企业市场竞争力，甚至打包形成新的上市优势。</p>
						</div>
					</div>
				</div>
			</div>
			<div class="title">基金业务</div>
			<div class="spaceLine-icon"></div>
			<div class="subtitle">募投管退“机器人”模型 VS 投资领域及合规</div>
			<div class="architecture">
				<h2>募投管退“机器人”模型</h2>
				<img src="/home/images/architecture.png" alt="">
			</div>
			<div class="strategyWrap">
				<h2>投资策略、风控措施</h2>
				<div class="strategy">
					<div class="item">
						<img src="/home/images/icon-investment-0.png" alt="">
						<div class="content">
							<h3>投资期</h3>
							<p>直投：企业初期的天使轮、A轮或Pre-A轮投资 母基金：挑选优秀的天使、VC、PE或有浮盈的子基金</p>
						</div>
					</div>
					<div class="item">
						<img src="/home/images/icon-investment-1.png" alt="">
						<div class="content">
							<h3>基本原则</h3>
							<p>合法合规、稳健成长、以投资者利益为本</p>
						</div>
					</div>
					<div class="item">
						<img src="/home/images/icon-investment-2.png" alt="">
						<div class="content">
							<h3>投资标准</h3>
							<p>各垂直领域的专注于互联网、大数据、人工智能、云计算、新材料、智能装备等战略新兴产业具有行业龙头潜质的、管理团队执行力强的企业 </p>
						</div>
					</div>
					<div class="item">
						<img src="/home/images/icon-investment-3.png" alt="">
						<div class="content">
							<h3>分阶段实施</h3>
							<p>在基金募集阶段、投资、管理和退出阶段分别采用适宜的风控措施，全程把控</p>
						</div>
					</div>
					<div class="item">
						<img src="/home/images/icon-investment-4.png" alt="">
						<div class="content">
							<h3>退出方式</h3>
							<p>已投资项目的退出方式采用管理层回购、企业并购和IPO上市退出方式 已投资基金的方式采用份额转让或底层资产回购、上市等方式实现</p>
						</div>
					</div>
					<div class="item">
						<img src="/home/images/icon-investment-5.png" alt="">
						<div class="content">
							<h3>风险控制</h3>
							<p>以中国证券投资基金业协会的行业自律标准为业务准则，制定对应的标准化风控制度和投资风险指引并形成体系 </p>
						</div>
					</div>
				</div>
			</div>
		</div>
		</section>
	</template>

	<template v-if="asideTabIndex==1" >
		<section class="cases">
			<div class="sectionHead">
				<img class="pageTitleImg" src="/home/images/caseTitle.png" alt="">
				<div class="title">孵化案例</div>
				<div class="spaceLine1"></div>
			</div>
			<div class="content">
				<div class="item">
					<img src="/home/images/t1.png" alt="">
					<div class="section up">
						<h3>原兴核技术（北京）有限公司</h3>
						<div class="sub">Yuanxing nuclear technology (Beijing) Co., Ltd</div>
						<p>原兴核技术（北京）有限公司原为北京希思达软件工程有限公司，成立于2009年10月，为国家高新技术企业，主要从事反应堆设备设计、</p>
						<a href="" class="btn">MORE +</a>
					</div>
				</div>
				<div class="item">									
					<div class="section down">
						<h3>北京金甲壳虫环境股份有限公司</h3>
						<div class="sub">Beijing golden beetle environment Co., Ltd</div>
						<p>新三板挂牌企业北京金甲壳虫环境科技股份有限公司（代码 871609）专业从事垃圾、农业废弃物等资源化利用和各类固体废弃物处理处</p>
						<a href="" class="btn">MORE +</a>
					</div>
					<img src="/home/images/t2.png" alt="">
				</div>
			</div>
			<div class="moreArea" ><img src="/home/images/arrow-down.png" class="down" alt=""></div>
			</div>
		</section>
	</template>

	<template v-if="asideTabIndex==2">
		<div id="tex">
		
		</div>
		<div id="det">
			@foreach($data as $k=>$v)
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
						<img class="firstImg" src="{{$v['thumb']}}" alt=""style="height: 270px;">
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
		 $.post("{{ route('home.index.tableft') }}",{_method:'get',title:'我们做什么'},function (result) {
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
			$.post("{{ route('home.product.detail') }}",{_method:'get',id:id},function (result) {
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