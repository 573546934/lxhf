Vue.component('hi-footer', {
	data: function() {
		return {
			navTabIndex: navTabIndex,
			isShowNavTab: false,
			currentPageIndex: navTabIndex,
			navTabSubIndex: navTabSubIndex,
		}
	},
	props: [userInfo],
	template: `
					<div class="footerNav">
						<ul id="binded" v-if="userInfo.banded_mobile===1">
							<li @click="clickNavTab(0)" :class="{actived:currentPageIndex===0}">
								<div class="btn">考勤</div>
								<div class="nav" v-if="currentPageIndex===0 && isShowNavTab">
									<a href="sign.html" :class="{actived:navTabIndex===0&&navTabSubIndex==0}" @click="clickNavTabSub(0)">签到/签退</a>
									<a href="upload.html" :class="{actived:navTabIndex===0&&navTabSubIndex==1}" @click="clickNavTabSub(1)">上传劳动成果</a>
									<a href="user_manage.html" :class="{actived:navTabIndex===0&&navTabSubIndex==2}" @click="clickNavTabSub(2)" v-if="userInfo.is_manager==1">伙伴管理</a>
									<a href="task_manage.html" :class="{actived:navTabIndex===0&&navTabSubIndex==3}" @click="clickNavTabSub(3)" v-if="userInfo.is_manager==1">任务管理</a>
									<!-- <a href="task_store_view.html">门店任务详情</a> -->
								</div>
							</li>
							<li @click="clickNavTab(1)" :class="{actived:currentPageIndex===1}">
								<div class="btn">我的任务</div>
								<div class="nav"" v-if="currentPageIndex===1 && isShowNavTab">
									<!-- <a href="task_collect.html">领取任务</a> -->
									<a href="task_list.html" :class="{actived:navTabIndex===1&&navTabSubIndex===0}" @click="clickNavTabSub(0)">任务列表</a>
									<!-- 	<a href="task_view.html">任务详情</a> -->
								</div>
							</li>
							<li @click="clickNavTab(2)" :class="{actived:currentPageIndex===2}">
								<div class="btn">我的</div>
								<div class="nav"" v-if="currentPageIndex===2 && isShowNavTab">
									<a href="personalCenter.html" :class="{actived:navTabIndex===2&&navTabSubIndex===0}" @click="clickNavTabSub(0)">个人中心</a>
									<a href="income.html" :class="{actived:navTabIndex===2&&navTabSubIndex===1}" @click="clickNavTabSub(1)">我的收入</a>
									<!-- <a href="income_view.html">收入详情</a> -->
								</div>
							</li>
						</ul>
						<ul id="unbinded" v-else>
							<li>
								<div class="btn">嗨伙伴</div>
							</li>
						</ul>
					</div>		
					`,
	methods: {
		clickNavTab: function(index) {
			console.log(this.currentPageIndex, window.location.pathname)
			if(t){
				clearTimeout(t)
			}
			// if(this.navTabIndex != index){
			this.currentPageIndex = index;
			
			this.isShowNavTab = true;
			var t=setTimeout(() => {
				this.isShowNavTab = false;
			}, 4000)
			// }		
		},
		clickNavTabSub: function(index) {

			// if(this.navTabIndex != index){
			this.navTabSubIndex = index;
			window.localStorage.setItem('navTabSubIndex', index + '');
			window.localStorage.setItem('navTabIndex', this.currentPageIndex + '');
		},
		vertify: function() {
			console.log(this.userInfo);
			// window.location.href = "user_manage.html"
			window.location.href = "task_manage.html"
			return
		}
	},
	computed: {

	},
	watch: {
		userInfo() {
			// console.log(12455,this.userInfo)
		}
	}
})
Vue.component('hi-action', {
	data: function() {
		return {}
	},
	props: [isAction],
	template: `<div>
					<div class="popwraper" v-if="!isAction">
						<section class="box">
							<h1>请先关注 <span class="name">嗨伙伴</span></h1>
							<div class="content">
								<img class="actionImg" src="./images/qrcode.jpg" alt="" />
							</div>
							<div class="buttons">
								<button class="allow" type="button" @click="actionTo">关注</button>
							</div>
						</section>
					</div>		
					</div>
					`,
	methods: {
		actionTo: () => {
			window.location.href =
				"https://mp.weixin.qq.com/mp/profile_ext?action=home&__biz=MzAwMDcwNTI2MA==&scene=110#wechat_redirect"
		}
	},
})
import progressive from 'progressive-image/dist/vue'; // 渐进式
 Vue.use(progressive, {
   	removePreview: true,
   	scale: true
 })
var vm = new Vue({
	el: '#rootBox',
	data: {
		isAction: isAction,
		userInfo: userInfo,
		tabIndex: 0,
		list: [],
		listEmpty: false,
		statusTxt: '',
		tempList:[],
		isLoaded:isLoaded,
	},
	computed: {
		userInfo: function() {
			// if(!showAuthorDialog){
			userInfo.showAuthorDialog = !userInfo.banded_mobile;
			// }			
			return userInfo
		}
	},
	methods: {
		confirm: (v) => {
			console.log(v)
			vm.userInfo.showAuthorDialog = false;
			if (v === 1) {
				window.location.href = "info_bind_fail.html"
			} else {

				window.history.back(-2);
			}
		},

		// chooseTab: (i, fn) => {
		// 	this.tabIndex = i;
		// 	if (fn)
		// 		typeof fn === 'function' && fn(i);
		// }
	},
	created: function() {
		console.group('created 创建完毕状态===============》');
		// console.log(this)
		console.log(this.isLoaded=isLoaded)
		console.groupEnd()
	},
})

// setTimeout(() => {
// 	$("#rootBox .body").show();
// }, 600)
