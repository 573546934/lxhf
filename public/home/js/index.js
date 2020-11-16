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
new Vue({
	el: "#rootBox",
	data: {
		images: [{
				src: "/home/images/banner.jpg",
				src2: "/home/images/banner@2x.jpg",
				show: false
			},
			{
				src: "/home/images/banner2.jpg",
				src2: "/home/images/banner2@2x.jpg",
				show: false
			}
		],
		config: {
			autoplay: 10000,
			arrow: false,
			dot: false,
			effect: "fade"
		},
		navClass: '',
		tabIndex: 1,
		activeName: '1'
	},
	watch:{
		
		activeName:function(val){
			console.log(val)
			this.activeName=val||'1'
		}
	},
	methods: {
		toggle(index) {
			this.tabIndex=Number(index)
			console.log(index)
		},
		//显示隐藏的导航菜单
		showNav(e) {
			this.navClass=this.navClass?'':e
			
			// setTimeout(() => {
			// 	this.navClass = ''
			// }, 3000)
		}
	}
});

