@extends('home.base')
@section('tab')
	<li><a href="/">首页</a></li>
	<li ><a href="/who">我们是谁</a></li>
	<li><a href="/product">我们做什么</a></li>
	<li><a href="/news">发展历程</a></li>
	<li class="actived"><a href="/after">我们的未来</a></li>
	<li ><a href="/contact">加入我们</a></li>
@endsection

<!-- 中间内容 -->
@section('main')
<el-main  class="el-main article" >

	<template v-if="asideTabIndex==0">
		<section class="leaderSpeech">
		<div class="sectionHead">
				<img class="pageTitleImg" src="/home/images/speech_title.png" alt="">
				<div class="title">我们的未来</div>
				<div class="spaceLine1"></div>
			</div>
			
			<div class="content">
				<div class="leader">
					<img src="/home/images/future_pic_hd.png" alt="" class="" />
				</div>
				
				<div class="speech">
					<h3 style="display: block;
							font-size: 1.5rem;
							margin-block-start: 1em;
							margin-block-end: 1em;
							margin-inline-start: 0px;
							margin-inline-end: 0px;
							font-weight: bold;">
							我们的未来-资本的服务商
						</h3>
					<p>金融布局“机器人”模型</p>
					<br>
					<p>力新汇富依托创新谷产业招商优势和良好的社会资源，一方面，以优质项目储备驱动各投行机构参与者，建立类资金池机构平台联盟；另一方面，通过产业的集聚，建立类项目池园区联盟，两大平台联盟的资金、项目匹配，实现资本服务商的布局。<br />
					集金融平台之优势，促区域经济之发展，通过机构集聚、园区联盟、优势互补，实现“有钱出钱，有项目引项目”；通过平台资源、信息的共享融合，达到以融扶产、以产引资的布局。<br />
					力新汇富联合创新谷，定位于企业孵化的引领者、产城创投的践行者、上市公司的缔造者，立足服务、产融结合、积极参与，做资本的服务商。资金集聚、产业集聚、更通过定制化服务，催生类集团化的资本航母、类集团化的企业航母，以提高单体机构、企业的市场竞争力，在后疫情时代，掀起资本裂变的新一波浪潮。</p>
					</div>
					
				</div>
			</div>
		</section>
	</template>

	<template v-if="asideTabIndex==1" >
		<section class="contactUsWrap">
			<div class="sectionHead">
				<img class="pageTitleImg" src="/home/images/contactUsTitle.png" alt="">
				<div class="title">联系我们</div>
				<div class="spaceLine1"></div>
			</div>
			<div class="contant">
				<div class="contactUs">
					<img src="/home/images/contactUs.png" alt="">
					<div class="slogan">
						<img src="/home/images/slogan.png" alt="">
						<div class="sub">基金投资领先的资产管理专家</div>
					</div>
				</div>
				<div class="info">
					<div class="item">
						<div class="title">地址</div>
						<div class="msg">北京市房山区良乡凯旋大街建设路18号创新谷 </div>
					</div>
					<div class="item">
						<div class="title">联系电话</div>
						<div class="msg">010-69380375</div>
					</div>
					<div class="item">
						<div class="title">企业邮箱</div>
						<div class="msg">lixinhuifu@126.com</div>
					</div>
				</div>
				
			<div id="mapContainer" style="width: 100%;
				height: 600px;
				margin: 2rem 0;
				border: 1px solid #bbb;"></div>
			</div>
		</section>
	</template>

	
</el-main>	
@endsection	


@section('script')
		<script src="/home/js/templage.js" type="text/javascript" charset="utf-8"></script>
	<script>
		var Tabs = [];
		 $.post("{{ route('home.index.tableft') }}",{_method:'get',title:'我们的未来'},function (result) {
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
<script src="https://map.qq.com/api/gljs?v=1.exp&key=CSYBZ-IRQK2-KVAUO-CMKJQ-D4I2J-4YF76"></script>
<script type="text/javascript">
var center = new TMap.LatLng(39.717889,116.126844); //设置中心点坐标
											//初始化地图
											var map = new TMap.Map('mapContainer', {
												center: center,
												zoom: 18
											});
											//初始化label
											var label = new TMap.MultiLabel({
												id: 'label-layer',
												map: map,
												styles: {
													'label': new TMap.LabelStyle({
														'color': '#3777FF', //颜色属性
														'size': 20, //文字大小属性
														'offset': {
															x: 0,
															y: 0
														}, //文字偏移属性单位为像素
														'angle': 0, //文字旋转属性
														'alignment': 'center', //文字水平对齐属性
														'verticalAlignment': 'middle' //文字垂直对齐属性
													})
												},
												geometries: [{
													'id': 'label', //点图形数据的标志信息
													'styleId': 'label', //样式id
													'position': center, //标注点位置
													'content': '北京力新汇富投资基金管理有限公司', //标注文本
													'properties': { //标注点的属性数据
														'title': 'label'
													}
												}]
											});
</script>

@endsection				