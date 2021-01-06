@extends('home.base')
@section('tab')
	<li><a href="/">首页</a></li>
	<li ><a href="/who">我们是谁</a></li>
	<li><a href="/product">我们做什么</a></li>
	<li><a href="/news">发展历程</a></li>
	<li ><a href="/after">我们的未来</a></li>
	<li class="actived"><a href="/contact">加入我们</a></li>
@endsection

<!-- 中间内容 -->
@section('main')

<el-main  class="el-main article" >

	<template v-if="asideTabIndex==0">
		<section class="recruitment">
		<div class="top">
										<div class="left">
											<img class="title pageTitleImg" src="/home/images/recruitmentTitle.png" alt="">
											<p>
												力新汇富欢迎各界英才加入！我们重视“选、用、育、留、汰”各个阶段的人才管理。我们坚持“用人之长，无不可用之人；用人之短，无人可用”的用人理念，坚持”能者上，庸者下，劣者汰”的用人标准，在做好公司短、中、长期发展的同时，我们更是对每位员工做好了未来的职业规划。</p>

											<p>
												企业文化“16”字方针：“用脑谋事，用心做事，全身投入，实现自我”。
											</p>
											<div class="standard">
												员工规范标准：<br />
												做事标准：到位不越位。<br />
												行为标准：建议不决策。<br />
												做人标准：补台不拆台。

											</div>
										</div>
										<div class="right"><img src="/home/images/recruitment.png" alt=""></div>
									</div>
									<!--div class="job2">
										<div class="item2">
											<h3>招聘部门：总经理室</h3>
										</div>

										
									</div-->
									
									<div class="job">
										<div class="item">
											<h3>总经理助理</h3>
											<div class="introduction">岗位职责：</div>
											<p>
												做好合同/协议、往来文件、项目资料的档案管理工作；<br />做好总经理主持或参加会议的会议纪要；<br />协助总经理参与项目的尽职调查，并完成尽职调查的辅助工作；<br />协助总经理做好信息收集、文件整理工作；<br />协助完成相关PPT的制作；<br />协助总经理做好日常接待工作；<br />总经理安排的其他事务。
											</p>
											<div class="introduction">任职要求：</div>
											<p>
												研究生以上学历，法律、金融、财务专业；<br />具备基金从业资格；<br />适应高强度工作状态，适应频繁出差；<br />熟练使用日常办公软件，熟练PPT的制作；<br /> 忠诚、勤奋；二年以上助理工作经验；<br />有投行工作经历优先。
											</p>
											<a class="btn" href="mailto:lixinhuifu@126.com">立即申请</a>
										</div>

										
									</div>
									
									<div class="job">
										<div class="item">
											<h3>融资经理</h3>
											<div class="introduction">岗位职责：</div>
											<p>
												参与项目尽职调查；<br />
参与交易结构方案设计；<br />
根据项目融资需求，设计融资方案，完成所需资金的募集；<br />
其他协助参与的工作<br />
											</p>
											<div class="introduction">任职要求：</div>
											<p>
												本科以上学历，金融、财务专业；<br />
具备基金从业资格，熟练掌握基金的设立、运营的操作路径；<br />
熟悉资本市场交易规则；<br />
适应高强度工作状态，适应频繁出差；<br />
有融资渠道优先；<br />
忠诚、勤奋。<br />
											</p>
											<a class="btn" href="mailto:lixinhuifu@126.com">立即申请</a>
										</div>
										<div class="item">
											<h3>融资专员</h3>
											<div class="introduction">岗位职责：</div>
											<p>
												参与项目尽职调查，辅助融资经理撰写尽调报告；<br />
辅助融资经理做好项目路演工作；<br />
辅助融资经理完成相关的文本打印工作；<br />
其他协助参与的工作。<br />
											</p>
											<div class="introduction">任职要求：</div>
											<p>
												研究生以上学历，金融、财务专业；<br />
对基金运作有初步的了解；<br />
银行、信托、基金公司工作经历优先。<br />
适应高强度工作状态，适应频繁出差；<br />
忠诚、勤奋。<br />
											</p>
											<a class="btn" href="mailto:lixinhuifu@126.com">立即申请</a>
										</div>

										
									</div>
									
									
									
									<div class="job">
										<div class="item">
											<h3>投资经理</h3>
											<div class="introduction">岗位职责：</div>
											<p>
												参与项目尽职调查；
<br />参与交易结构方案设计；
<br />根据项目类别和实际情况，拟定投资方案；
<br />其他协助参与的工作。<br />
											</p>
											<div class="introduction">任职要求：</div>
											<p>
												本科以上学历，金融、财务、法律相关专业，五年以上投资经验；
<br />具备基金从业资格，熟练掌握基金的设立、运营的操作路径；
<br />熟悉资本市场交易规则；
<br />适应高强度工作状态，适应频繁出差；
<br />忠诚、勤奋。<br />
											</p>
											<a class="btn" href="mailto:lixinhuifu@126.com">立即申请</a>
										</div>
										<div class="item">
											<h3>研究员</h3>
											<div class="introduction">岗位职责：</div>
											<p>
												参与项目尽职调查，辅助投资经理撰写尽调报告和投资方案；
<br />搜集相关相关资料，做好拟投项目行业研究工作；
<br />其他协助参与的工作。<br />
											</p>
											<div class="introduction">任职要求：</div>
											<p>
												研究生以上学历，金融专业；
<br />有房地产、VR、大数据行业工作经历优先。
<br />适应高强度工作状态，适应频繁出差；
<br />忠诚、勤奋。<br />
											</p>
											<a class="btn" href="mailto:lixinhuifu@126.com">立即申请</a>
										</div>

										
									</div>
									
									
									
									<div class="job">
										<div class="item">
											<h3>投后管理</h3>
											<div class="introduction">岗位职责：</div>
											<p>
												参与项目尽职调查；
<br />参与交易结构方案设计；
<br />参与拟定投资方案，资源对接；
<br />已投项目的增值管理；
<br />基金管理、信息披露；
<br />其他协助参与的工作。<br />
											</p>
											<div class="introduction">任职要求：</div>
											<p>
												本科以上学历，金融、财务、法律相关专业，五年以上投行经验；
<br />具备基金从业资格，熟练掌握基金的设立、运营的操作路径；
<br />熟悉资本市场交易规则；
<br />适应高强度工作状态，适应频繁出差；
<br />忠诚、勤奋。<br />
											</p>
											
											<a class="btn" href="mailto:lixinhuifu@126.com">立即申请</a>
										</div>
										<div class="item">
											<h3>审计经理</h3>
											<div class="introduction">岗位职责：</div>
											<p>
												参与项目尽职调查；
<br />参与交易结构方案设计；
<br />参与拟定投资方案；
<br />已投项目的财务审计和融资的材料准备；
<br />其他协助参与的工作。<br />
											</p>
											<div class="introduction">任职要求：</div>
											<p>
												本科以上学历，财务、审计专业；
<br />具备财务从业资格，注册会计师优；
<br />具备基金从业资格；
<br />熟悉资本市场交易规则，有投行工经历优先；
<br />能适应高强度工作状态，适应频繁出差；
<br />有融资渠道优先；
<br />忠诚、勤奋；<br />
											</p>
											<a class="btn" href="mailto:lixinhuifu@126.com">立即申请</a>
										</div>

										
									</div>
									
									
									
									<div class="job">
										<div class="item">
											<h3>风控经理</h3>
											<div class="introduction">岗位职责：</div>
											<p>
												参与项目尽职调查，并独立撰写尽职调查报告；
<br />参与交易结构方案设计；
<br />法律文件的审核、起草。<br />
											</p>
											<div class="introduction">任职要求：</div>
											<p>
												
<br />本科以上学历，法律、财务、金融专业，五年以上投行经验；
<br />具备基金从业资格，熟练掌握基金的设立、运营的操作路径；
<br />熟悉资本市场交易规则；
<br />适应高强度工作状态，适应频繁出差；
<br />忠诚、勤奋。<br />
											</p>
											
											<a class="btn" href="mailto:lixinhuifu@126.com">立即申请</a>
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
			</div>
		</section>
	</template>

	
</el-main>	
@endsection	


@section('script')
		<script src="/home/js/templage.js" type="text/javascript" charset="utf-8"></script>
	<script>
		var Tabs = [];
		 $.post("{{ route('home.index.tableft') }}",{_method:'get',title:'加入我们'},function (result) {
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