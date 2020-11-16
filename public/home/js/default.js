// new Vue().VueSlideShow("#banner", {
//        images: [
//            { src: "/home/images/banner.jpg" },
//            { src: "/home/images/banner2.jpg" }
//        ],
//        config: {
//            autoplay: 5000,
//            arrow: false,
//            dot: false,
// 		effect: "fade"
//        }
//    });
let lixin = new Vue({
	el: "#rootBox",
	data: {
		asideTabs: AsideTabs,
		asideTabIndex: '0',
		config: {
			autoplay: 300000,
			arrow: false,
			dot: false,
			effect: "fade"
		},
		navClass: '',
		tabPosition: 'left'
	},
	created() {
		if (window.innerWidth <= 768) {
			this.tabPosition = 'top'
		}
	},
	methods: {
		tabClick(tab, event) {
			console.log(this.asideTabIndex)
			console.log(this.asideTabs, tab);
			let index = Number(tab.index)
			if (this.asideTabs[index].href) {
				window.location.href = this.asideTabs[index].href
			}
		
		},
		beforeLeave(activeName, oldActiveName){
			// console.log(12,activeName, oldActiveName)
				// return false
		},
		//显示隐藏的导航菜单
		showNav(e) {
			this.navClass = this.navClass ? '' : e
			// setTimeout(()=>{
			// 	this.navClass=''
			// },3000)
		}
	},
});
new Page('header .links', headerJSON, 'top');
new Page('.el-footer', footerHTML, 'footer');
