@extends('home.base')
@section('tab')
	<li><a href="/">首页</a></li>
	<li class="actived"><a href="/default">我们是谁</a></li>
	<li ><a href="/default">我们做什么</a></li>
	<li><a href="/default">我们的历史</a></li>
	<li><a href="/default">我们的未来</a></li>
@endsection

<!-- 中间内容 -->
@section('main')
<el-main >

	<template v-if="asideTabIndex==0">
	 	<section>
			<div class="sectionHead">
				<img class="pageTitleImg" src="/home/images/since.png" alt="">
				<div class="title">北京力新汇富投资基金管理有限公司</div>
				<div class="spaceLine1"></div>
			</div>
			<div class="content">
				<p>
					北京力新汇富投资基金管理有限公司（下称“力新汇富”）成立于2009年9月，2018年3月通过中国证券投资基金业协会私募基金管理人登记（登记编号为：P1067561），管理团队平均拥有10年+的投资经验。力新汇富以“融合到位、实现共赢”为使命，通过与国家级产业园区“创新谷”深度合作，依托园区产业集聚的项目资源优势，为园区产业提供深度服务，大构架全方位赋能，联盟式产融结合，不断扩大园区企业的新业务；同时，借助基金的资金优势，对园区企业实行行业整合，横向、纵向、上下游产业的重组、互补，推动园区企业形成“企业航母”，进一步提升企业市场竞争力。
				</p>
				<p>
					力新汇富专注于互联网、大数据、人工智能、云计算、新材料、智能装备等战略新兴产业。业务涉及私募服务、融资服务、股权投资及不良资产业务。
				</p>
				<p>
					力新汇富基金团队欢迎同行进行业务对接、莅临指导！
				</p>
			</div>
		</section>
	</template>

	<template v-if="asideTabIndex==1" >
		<section class="leaderSpeech">
			<div class="sectionHead">
				<img class="pageTitleImg" src="/home/images/speech_title.png" alt="">
				<div class="title">总经理致辞</div>
				<div class="spaceLine1"></div>
			</div>
			
			<div class="content">
				<div class="leader">
					<img src="/home/images/leader.png" alt="" class="" />
				</div>
				
				<div class="speech">
						<h3>立足服务、产融结合</h3>
						<p>当今经济社会，已迈入数字经济新时代，单纯的“募投管退”已不再适应新时代私募基金发展的要求，对现有产业的深度服务、大构架的全方位赋能，联盟式产融结合，更是未来私募基金的“新风口”。
资本依附于实体才能裂变，实体依托资本扶持才能更强。</p>
						<div class="foot">融合到位，实现共赢</div>
				</div>
			</div>
		</section>
	</template>

	<template v-if="asideTabIndex==2">
	<section class="environment">
		<div class="sectionHead">
			<img class="pageTitleImg" src="/home/images/environmentTitle.png" alt="">
			<div class="title">公司环境</div>
			<div class="spaceLine1"></div>
		</div>
		<div class="content">
			<ul class="list">
				<li>
					<img src="/home/images/environment_1.png" alt="">
					<span>公司前台</span>
				</li>
				<li>
					<img src="/home/images/environment_2.png" alt="">
					<span>洽谈室</span>
				</li>
				<li>
					<img src="/home/images/environment_3.png" alt="">
					<span>会议室一角</span>
				</li>
				<li>
					<img src="/home/images/environment_4.png" alt="">
					<span>公司前台</span>
				</li>
				<li>
					<img src="/home/images/environment_5.png" alt="">
					<span>洽谈室</span>
				</li>
				<li>
					<img src="/home/images/environment_6.png" alt="">
					<span>会议室一角</span>
				</li>
			</ul>
			<div class="moreArea"><img src="/home/images/arrow-down.png" class="down" alt=""></div>
			
		</div>
	</section>
	</template>

</el-main>	
@endsection	


@section('script')
	<script>
		var Tabs = [];
		 $.post("{{ route('home.index.tableft') }}",{_method:'get',title:'我们是谁'},function (result) {
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
@endsection				