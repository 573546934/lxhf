
function checkForm(id) {
	let ary = [],
		tempAry = [],
		errmsg = "";
	if (id) {
		tempAry.push(id)
	} else {
		let temp = $(".form *[required]");
		temp.each((index, el) => {
			tempAry.push($(el).attr('id'))
		})
	}
	for (let temp of tempAry) {
		let val = $("#" + temp).val();
		errmsg = $("#" + temp).attr('placeholder') || '';
		flag = true;
		if (!val) {
			flag = false;
		} else {
			if (temp === "phone") {
				flag = isPhoneNo(val)
				errmsg = "请输入正确的手机号"
			} else if (temp === "idcard") {
				flag = isCardNo(val)
				errmsg = "请输入正确的身份证号"
				// } else if (temp === "verCode") {
				// 	flag = val === vCode;
				// 	errmsg="验证码有误"
			} else {

			}
		}
		if (!flag) {
			$("#" + temp).addClass('error')
		} else($("#" + temp).removeClass('error'))
		ary.push({
			flag,
			errmsg
		})
	}
	return ary;
}
// 验证身份证
function isCardNo(card) {
	var pattern = /(^\d{15}$)|(^\d{18}$)|(^\d{17}(\d|X|x)$)/;
	return pattern.test(card);
}

// 验证手机号
function isPhoneNo(phone) {
	var pattern = /^(((13[0-9]{1})|(14[0-9]{1})|(17[0-9]{1})|(15[0-3]{1})|(15[5-9]{1})|(18[0-9]{1}))+\d{8})$/;
	return pattern.test(phone);
}

function getMyDate(str = '') {
	str = str + '';
	str = str.length == 10 ? Number(str) * 1000 : str;
	var oDate = new Date(str);
	if (!str)
		oDate = new Date();

	let oYear = oDate.getFullYear(),
		oMonth = oDate.getMonth() + 1,
		oDay = oDate.getDate(),
		oHour = oDate.getHours(),
		oMin = oDate.getMinutes(),
		oSen = oDate.getSeconds(),
		oTime = oYear + '-' + getzf(oMonth) + '-' + getzf(oDay) + ' ' + getzf(oHour) + ':' + getzf(oMin) + ':' + getzf(oSen); //最后拼接时间
	return oTime;
};
//补0操作
function getzf(num) {
	if (parseInt(num) < 10) {
		num = '0' + num;
	}
	return num;
}
//浏览器参数
function getQueryVariable(variable) {
	var query = window.location.search.substring(1);
	var vars = query.split("&");
	for (var i = 0; i < vars.length; i++) {
		var pair = vars[i].split("=");
		if (pair[0] == variable) {
			return pair[1];
		}
	}
	return (false);
}

//获取位置
function getPosition() {
	return new Promise((solve, reject) => {
		let position = {};
		console.log(23, navigator.geolocation)
		if (navigator.geolocation) {
			//navigator.geolocation.getCurrentPosition这个方法里面有三个参数
			//这个会在界面拉出一个消息框，让用户确认是否允许获取位置,不过pc端我试了都是err，
			//参1，成功后执行的函数
			//参2，失败时执行的函数
			//参3，选项配置，下面是在6000毫秒内结束请求
			navigator.geolocation.getCurrentPosition(
				function(position) {
					var latitude = position.coords.latitude;
					var longitude = position.coords.longitude;
					console.log("Latitude : " + latitude + " Longitude: " + longitude);
					console.log(position)
					solve(position.coords)
				},
				function(err) {
					console.log("您的浏览器不支持此项技术")
					reject('您的浏览器不支持此项技术')
				}, {
					timeout: 6000
				}
			)
		} else {
			reject('获取失败')
		}
	});
}

//判断照片大小
function getPhotoSize(obj, i = 0) {
	var fileSize = 0;
	var isIE = /msie/i.test(navigator.userAgent) && !window.opera;
	if (isIE && !obj.files) {
		var filePath = obj.value;
		var fileSystem = new ActiveXObject("Scripting.FileSystemObject");
		var file = fileSystem.GetFile(filePath);
		fileSize = file.Size;
	} else {
		fileSize = obj.files[i].size;
	}
	fileSize = Math.ceil(fileSize / 1024); //单位为KB

	return fileSize;
}

//将base64转换为blob
var dataURLtoBlob = dataurl => {
	var arr = dataurl.split(','),
		mime = arr[0].match(/:(.*?);/)[1],
		bstr = atob(arr[1]),
		n = bstr.length,
		u8arr = new Uint8Array(n);
	while (n--) {
		u8arr[n] = bstr.charCodeAt(n);
	}
	return new Blob([u8arr], {
		type: mime
	});
};
var getUuid = () => {
	var s = [];
	var hexDigits = '0123456789abcdef';
	for (var i = 0; i < 36; i++) {
		s[i] = hexDigits.substr(Math.floor(Math.random() * 0x10), 1);
	}
	s[14] = '4'; // bits 12-15 of the time_hi_and_version field to 0010
	s[19] = hexDigits.substr((s[19] & 0x3) | 0x8, 1); // bits 6-7 of the clock_seq_hi_and_reserved to 01
	s[8] = s[13] = s[18] = s[23] = '-';

	var uuid = s.join('');
	return uuid;
};

/**将blob转换为file
 * @param {*} theBlob 图片的Blob对象-必传参数
 * @param {*} theBlob 图片的文件名-必传参数
 * @param {*} theBlob file对象的其他参数-非必传参数,l类型
 */
var blobToFile = (theBlob, fileName, type = 'image/png') => {
	let options = {
		lastModifiedDate: new Date(),
		lastModified: new Date().getTime(),
		type: type,
		uid: this.getUuid(),
		webkitRelativePath: '',
	};
	let file = new window.File([theBlob], fileName, options);
	return file;
};
// 全屏高度
console.log(window.innerHeight)
document.getElementById("rootBox").style.minHeight=window.innerHeight+'px'


//重要声明-弹出
const pop_statement=`<div class="bgMask">
			<section class="box">
				<header>
					<h1><img src="./images/icon-statement.png" alt=""><span>重要说明</span></h1>
				</header>
				<!-- <h2>重要说明</h2> -->
				<div class="body">
					<h3>在进入本网站及浏览本网站所呈现的内容前，请您仔细阅读以下重要说明，确定您的具体情况后选择继续浏览或退出本网站。</h3>
					<div class="contentMsg">			
														
						<p>首先，请确认您是一名“合格投资者”,符合中国证券监督管理委员会规定的私募股权投资基金的合格投资者（即个人投资者的金融资产不低于300万元人民币或者最近三年个人年均收入不低于50 万元人民币，机构投资者的净资产不低于1000万元人民币），具有相应的风险识别能力和风险承受能力，投资资金来源合法，没有非法汇集他人资金投资私募基金。或是其他任何国家和地区的证券和投资法规所规定的有资格投资于对冲基金或类似的集合理财计划的专业投资者。</p>
						
						<p>您若继续阅览本网站所载资料，将被视为您声明及保证为“合格投资者”，并将遵守对您适用的司法区域的有关法例及法规。</p>
						
						<p>本网站所载的资料仅供参考，并不构成广告或分销、销售要约，或招揽买入任何证券、基金或其他投资工具的邀请或要约。</p>
						
						<p>北京力新汇富投资基金管理有限公司或其关联公司、董事、股东及雇员不对本网站所提供资料的准确性、充足性或完整性作出任何保证，也不对于本网站内所提供资料之任何错误或遗漏承担任何法律责任。如有疑问或有更多想了解的内容，请致电公司官网预留电话咨询。</p>
						
						<p>您在任何情况下均不得复印、复制或再分发本网站资料的全部或其任何部分。本网站内容不构成任何形式的新闻报道素材，媒体据此报道产生的后果，北京力新汇富投资基金管理有限公司保留进一步追究的权利。</p>
						
						<p>投资涉及风险，投资者应详细审阅基金的发售文件以获取进一步资料及了解有关投资之风险因素，并寻求适当的专业投资和税务咨询意见。基金的股份或单位价格及其收益可升可跌，而过往的基金表现数据并不预示基金未来的表现。本网站所提供的资料并非投资建议或税务咨询意见，投资者不应依赖本网站所提供的资料作出投资决策。</p>
						
						<p>本网站所刊载的所有资料北京力新汇富投资基金管理有限公司可予以更改或修订而毋须事前通知，我们也并不承诺定期更新本网站。</p>
						
						<p>与本网站所载资料有关的所有版权、专利权、知识产权及其他产权均为北京力新汇富投资基金管理有限公司所有。本公司概不向浏览该资料的人士发出、转让或以任何方式转移任何种类资料的权利。</p>			                          
					</div>
				</div>
				<footer>
					<div class="agree"><label><input type="checkbox" name="agree" id="agree" value="" /><span>我已经仔细阅读了提示</span></label></div>
					<div class="btns">
						<button type="button" class="cancel">放弃</button>
						<button type="button" class="continue" disabled>同意</button>
					</div>
				</footer>
			</section>
		</div>`
		const agreeStatement=getCookie('agreeStatement')==='true'
		// console.log(document.cookie);
		if(!agreeStatement){
			$('body').append(pop_statement)
			//放弃
			$(".bgMask .btns button.cancel").click(()=>{
				removeCookie('agreeStatement')
				var userAgent = navigator.userAgent;
					if (userAgent.indexOf("Firefox") != -1 || userAgent.indexOf("Chrome") !=-1) {
							window.location.href="about:blank";
							window.close();
					} else {
							window.opener = null;
							window.open("", "_self");
							window.close();
					}
			
			})
			$('#agree').click(()=>{
				var _this=$(this)
				var checked=!_this.attr('checked')
				_this.attr("checked",checked);
				// console.log(_this.attr('checked'))
				if(checked){
					$(".bgMask .btns button.continue").removeAttr('disabled')
				}
				else{
					$(".bgMask .btns button.continue").attr('disabled',true)
				}
				})
			//同意
			$(".bgMask .btns button.continue").click(()=>{
				setCookie('agreeStatement','true',60*24*365)
				$("body > .bgMask").remove()
			})
		}
		
		/**
		 * [setCookie 设置cookie]
		 * [key value t 键 值 时间(秒)]
		 */
		function setCookie(key,value,t){
		    var oDate=new Date();
		    oDate.setDate(oDate.getDate()+t);
		    document.cookie=key+"="+value+"; expires="+oDate.toDateString();
		}
		/**
		 * [getCookie 获取cookie]
		 */
		function getCookie(key){
		    var arr1=document.cookie.split("; ");//由于cookie是通过一个分号+空格的形式串联起来的，所以这里需要先按分号空格截断,变成[name=Jack,pwd=123456,age=22]数组类型；
		    for(var i=0;i<arr1.length;i++){
		        var arr2=arr1[i].split("=");//通过=截断，把name=Jack截断成[name,Jack]数组；
		        if(arr2[0]==key){
		            return decodeURI(arr2[1]);
		        }
		    }
		}
		/**
		 * [removeCookie 移除cookie]
		 */
		function removeCookie(key){
		    setCookie(key,"",-1); // 把cookie设置为过期
		};
