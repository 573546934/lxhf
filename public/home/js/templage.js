const headerJSON = {
	data: [{
			name: '首页',
			href: './index.html',
			isActived: true
		},
		{
			name: '我们是谁',
			href: './about.html',
			isActived: false
		},
		{
			name: '我们做什么',
			href: './service.html',
			isActived: false
		},
		{
			name: '我们的历史',
			href: './news.html',
			isActived: false
		},
		{
			name: '我们的未来',
			href: './contact.html',
			isActived: false
		}
	],
	activedIndex: 0
}
const AsideTabs=[{
				name: '企业介绍',
				href: 'about.html'
			},
			{
				name: '领导致辞',
				href:'speech.html'
			},{
				name: '公司环境',
				href:'environment.html'
			},
			{
				name: '服务体系',
				href:'system.html'
			},
			{
				name: '荣誉资质',
				href: 'honor.html'
			},
			 {
				name: '团队介绍',
				href:'team.html'
			},		
			 {
				name: '合作伙伴',
				href:'partner.html'
			}
		]
const footerHTML =
	`<div class="web">
						<img src="./images/icon-wx.png" alt="微信公众号" />
						<a href="" target="_blank"><img src="./images/icon-weibo.png" alt="微博" /></a>
					</div>
					<div class="links">
						<a href="">网站地图</a>
						<a href="">网站隐私</a>
						<a href="contactUs.html">联系我们</a>
					</div>
					<div class="copyright">
						© 2020 lxhffund.com Corporation. All rights reserved
					</div>`

function Page(el, Json, position = "") {
	// this.container = $(el);
	//console.log(this.container);
	this.position = position;
	this.el = el;
	this.data = Json;
	let that = this;
	return new Promise((solve, reject) => {
		that.init();
		solve()
	})
}
Page.prototype = {
	init: function() {
		setTimeout(() => {
			this.createContent();
		}, 300)

	},
	createContent: function(params = this.position) {
		$(this.el).html('')
		new AddDOM(this.el, this.data)
		// switch (params) {
		// 	case 'top':
		// 		this.header = new Header(this.el, this.data)
		// 		break;
		// 	case 'left':
		// 		break;
		// 		case "footer":
		// 		this.footer = new Footer(this.el, this.data)
		// 		break;
		// 	default:
		// 		break
		// }
		// if (params) {

		// 	this.login = new Login(this.container);
		// } else {

		// 	this.register = new Register(this.container);
		// }
	}
}


function AddDOM(container, data) {
	this.container = container;
	this.elData = data
	this.init();
}

AddDOM.prototype = {
	init: function() {
		this.createDom();
	},
	createDom: function() {
		// console.log(222)
		this.el = $("<div></div>");

		let template = ""
		// console.log('---',this.JSONData.activedIndex)
		if (typeof this.elData === "object") {
			this.el = $("<div class='content'></div>");
			let dom = '<ul>'
			console.log(32, headerJSON)
			for (let n = 0; n < this.elData.data.length; n++) {
				let temp = this.elData.data[n]
				dom +=
					`<li class="${n===this.elData.activedIndex?'actived':''}"><a href="${temp.href}">${temp.name}</a></li>`
			}
			dom += '</ul>'
			template =
				`
			 <div class="navWrap">
			 	<div class="custom">
			 		<a href="">客户中心</a>
			 		<a class="btn contactUs" href="contactUs.html">联系我们</a>
			 	</div>
			 	<div class="nav">
			 		${dom}
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
			 </div>
			 <footer class="footer" id="footer">
			 	<div class="content">
			 		<div class="img"><img src="./images/footerImg.png" alt=""></div>
			 		<div class="btns">
			 			<button type="button" class="reg">快速注册</button>
			 			<button type="button" class="login">登录</button>
			 		</div>
			 	</div>
			 </footer>`
		} else if (typeof this.elData === "string") {
			template = this.elData
		}


		this.el.append(template);
		// console.log(this.container,$(this.container).length,template)
		$(this.container).append(this.el);
	}
}

// function Header(container, data) {
// 	this.container = container;
// 	this.elData = data
// 	this.init();
// }

// Header.prototype = {
// 	init: function() {
// 		this.createDom();
// 	},
// 	createDom: function() {
// 		// console.log(222)
// 		this.el = $("<div class='content'></div>");

// 		let template = ""
// 		// console.log('---',this.JSONData.activedIndex)
// 		if (typeof this.elData === "object") {
// 			let header = '<ul>'
// 			for (let n = 0; n < this.elData.data.length; n++) {
// 				let temp = this.elData.data[n]
// 				header +=
// 					`<li class="${n===this.elData.activedIndex?'actived':''}"><a href="${temp.href}">${temp.name}</a></li>`
// 			}
// 			header += '</ul>'
// 			template =
// 				`
// 			 <div class="navWrap">
// 			 	<div class="custom">
// 			 		<a href="">客户中心</a>
// 			 		<a href="contactUs.html">联系我们</a>
// 			 	</div>
// 			 	<div class="nav">
// 			 		${header}
// 			 		<div class="searchBoxWrap">
// 			 			<form action="" method="" />
// 			 			<div class="searchBox"><input type="text" placeholder="请输入关键词" />
// 			 				<button type="image" src="./images/icon-search.png"></button>
// 			 			</div>
// 			 			</form>
// 			 		</div>
// 			 	</div>
// 			 </div>
// 			 <footer class="footer" id="footer">
// 			 	<div class="content">
// 			 		<div class="img"><img src="./images/footerImg.png" alt=""></div>
// 			 		<div class="btns">
// 			 			<button type="button" class="reg">快速注册</button>
// 			 			<button type="button" class="login">登录</button>
// 			 		</div>
// 			 	</div>
// 			 </footer>`
// 		} else if (typeof this.elData === "string") {
// 			template = this.elData
// 		}


// 		this.el.append(template);
// 		// console.log(this.container,$(this.container).length,template)
// 		$(this.container).append(this.el);
// 	}
// }
