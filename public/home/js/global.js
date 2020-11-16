
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

