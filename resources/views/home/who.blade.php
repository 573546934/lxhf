@extends('home.base')
@section('tab')
	<li><a href="/">首页</a></li>
	<li class="actived"><a href="/who">我们是谁</a></li>
	<li ><a href="/product">我们做什么</a></li>
	<li><a href="/news">发展历程</a></li>
	<li><a href="/after">我们的未来</a></li>
	<li ><a href="/contact">加入我们</a></li>
@endsection

<!-- 中间内容 -->
@section('main')
<el-main  class="el-main">

	<template v-if="asideTabIndex==0">
	 	<section>
			<div class="sectionHead">
				<img class="pageTitleImg" src="/home/images/since.png" alt="">
				<div class="title">北京力新汇富投资基金管理有限公司</div>
				<div class="spaceLine1"></div>
			</div>
			<div class="content">
				<p><img src="/home/images/about_01.jpg" alt=""></p>
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

	<template v-if="asideTabIndex==3">
		<section class="system">
			<div class="sectionHead">
			<img class="pageTitleImg" src="/home/images/systemTitle.png" alt="">
			<div class="title">服务体系</div>
			<div class="spaceLine1"></div>
			</div>
			<div class="content">
				<div class="systemCategory">
					<div class="item">
						<img src="/home/images/system_1.png" alt="">
						<span class="name">产业孵化</span>
						<div class="desc">帮助企业注册落地，提供办公地址，配套设施，进行孵化 </div>
					</div>
					<div class="item">
						<img src="/home/images/system_2.png" alt="">
						<span class="name">基金投资</span>
						<div class="desc">打开优质企业资本化的开端，估值定价，及时解决企业融资需求 </div>
					</div>
					<div class="item">
						<img src="/home/images/system_3.png" alt="">
						<span class="name">O+O服务 </span>
						<div class="desc">帮助企业进行线上+线下增值服务，实现利益的最大化  </div>
					</div>
					<div class="item">
						<img src="/home/images/system_4.png" alt="">
						<span class="name">资本市场对接</span>
						<div class="desc">联合天使\VC\PE\券商\银行等金融机构与企业进行全方位对接  </div>
					</div>
				</div>
				<div class="systemInfoWrap">
					<div class="systemInfo"><p>力新汇富联手园区打破创业孵化的地域限制，在北京共设有七个园区——创新谷房山园、十渡智谷、门头沟文创园、延庆园、怀柔园、通州园、石景山园，同时在全国各地设立孵化基地，配备了工位、独立创客空间、一站式服务大厅、洽谈室、会议室、多功能厅、书吧、咖啡厅、创客食堂与青年公寓等办公及配套设施，在协助科技企业创业、发展高新技术产业、改造升级传统产业、引进高层次人才方面发挥先锋模范作用。</p></div>
				</div>
			</div>
		</section>
	</template>

	<template v-if="asideTabIndex==4">
		<section >
			<div class="sectionHead">
				<img class="pageTitleImg" src="/home/images/honorTitle.png" alt="">
				<div class="title">荣誉资质</div>
				<div class="spaceLine1"></div>
			</div>
			<div class="content honors">
				<div class="item">
					<img src="/home/images/honor_01.png" alt="">
					<span class="name">科学技术部众创空间</span>
				</div>
				<div class="item">
					<img src="/home/images/honor_02.png" alt="">
					<span class="name">中关村科技型企业创业孵化集聚区</span>
				</div>
				<div class="item">
					<img src="/home/images/honor_03.png" alt="">
					<span class="name">中国机器人研发基地</span>
				</div>
				<div class="item">
					<img src="/home/images/honor_04.png" alt="">
					<span class="name">中关村特色产业孵化平台</span>
				</div>
				<div class="item">
					<img src="/home/images/honor_05.png" alt="">
					<span class="name">中关村（房山）高端人才创业基地</span>
				</div>
				<div class="item">
					<img src="/home/images/honor_06.png" alt="">
					<span class="name">推荐机构会员单位</span>
				</div>
				<div class="item">
					<img src="/home/images/honor_07.png" alt="">
					<span class="name">房山区文化创意产业园区</span>
				</div>
				<div class="item">
					<img src="/home/images/honor_08.png" alt="">
					<span class="name">中国机器人研发基地</span>
				</div>
			</div>
			<div class="moreArea"><img src="/home/images/arrow-down.png" class="down" alt=""></div>
		</section>
	</template>

	<template v-if="asideTabIndex==5" >
		<section class="team">
			<div class="sectionHead">
				<img class="pageTitleImg" src="/home/images/teamTitle.png" alt="">
				<div class="title">团队介绍</div>
				<div class="spaceLine1"></div>
			</div>
			<div class="content">
				<p>力新汇富团队来自于园区招商、产业孵化、并购重组、不良资产、上市公司、中基协等多领域的专业人才，公司高层平均拥有10年+的投行管理经验，专注于互联网、大数据、人工智能、云计算、新材料、智能装备等战略新兴产业，在不良资产、重组并购方面更是拥有丰富的实战经验。</p>
				<h3>我们立足服务，产融结合、共赢未来！</h3>
				<ul>
					<li>
						<div class="imgWrap"><img src="/home/images/teamer2.png" alt=""></div>
						<div class="teamer">
							<div class="info">
								<h3 class="name">王京伟 先生 </h3>
								<div class="sub">总经理</div>
								<p>曾任北京东方昆仑投资有限公司总经理、法定代表人，从业20年，具备丰富的并购重组经验，领导东方酒店重组项目、广州债权收购项目。曾供职于香港上市公司恒芯中国控股有限公司（股票代码HK08046）在境内全资子公司中矿京资投资有限公司，领导并主办了生物柴油并购项目和大豆蛋白借壳项目，对资本运作理解深刻。</p>
							</div>
						</div>
					</li>
					<li>
						<div class="imgWrap"><img src="/home/images/teamer1.png" alt=""></div>
						<div class="teamer">
							<div class="info">
								<h3 class="name">李满意 先生</h3>
								<div class="sub">副总经理兼合规风控负责人</div>
								<p>毕业于中国政法大学法学系，8年从业经验，曾就职于中国证券投资基金业协会，负责基金监管工作，曾担任坤元资产基金经理，中鸿资本风控总监，负责发行的母基金及产业基金管理规模超20亿元，主导了对数联铭品、博纳影业、银联商务（已过会）等企业的投资工作，在投资管理方面有丰富的经验、深刻的认识及独到的见解，擅长挖掘项目价值。</p>
							</div>
						</div>
					</li>
				</ul>
			</div>
		</section>
	</template>

	<template v-if="asideTabIndex==6">
		<section class="partner">
			<div class="sectionHead">
				<img class="pageTitleImg" src="/home/images/partnerTitle.png" alt="">
				<div class="title">合作伙伴</div>
				<div class="spaceLine1"></div>
			</div>
			<div class="content partnerList">
				<section class="" >
					<div class="titleImg">
					<span class="name">天使投资</span>
					</div>
					<ul class="list">
						<li><img src="/home/images/partner-001.png" alt=""></li>
							<li><img src="/home/images/partner-002.png" alt=""></li>
								<li><img src="/home/images/partner-003.png" alt=""></li>
									<li><img src="/home/images/partner-004.png" alt=""></li>
					</ul>
				</section>
				<section class="partnerList" >
					<div class="titleImg"><span class="name">VC机构</span></div>
					<ul class="list">
						<li><img src="/home/images/partner-006.png" alt=""></li>
						<li><img src="/home/images/partner-007.png" alt=""></li>
						<li><img src="/home/images/partner-008.png" alt=""></li>
						<li><img src="/home/images/partner-009.png" alt=""></li>
					</ul>
				</section>
			
				<section class="partnerList" >
					<div class="titleImg"><span class="name">PE机构</span></div>
					<ul class="list">
						<li><img src="/home/images/partner-100.png" alt=""></li>
						<li><img src="/home/images/partner-111.png" alt=""></li>
						<li><img src="/home/images/partner-122.png" alt=""></li>
					</ul>
				</section>
				<section class="partnerList" >
					<div class="titleImg"><span class="name">证券公司</span></div>
					<ul class="list">
						<li><img src="/home/images/partner-133.png" alt=""></li>
						<li><img src="/home/images/partner-144.png" alt=""></li>
					</ul>
				</section>
				<section class="partnerList" >
					<div class="titleImg"><span class="name">银行</span></div>
					<ul class="list">
						<li><img src="/home/images/partner-155.png" alt=""></li>
					</ul>
				</section>
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