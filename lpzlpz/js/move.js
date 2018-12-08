var  eItemList = document.querySelector("#playimages #big_pic .big_pic");
var eContentList = document.querySelectorAll("#playimages .small_pic ul li");
// var eBimg = document.querySelectorAll("#flash .bimg img");
for (var i=0;i<eContentList.length;i++) {
    eContentList[i].index=i;  //index是自定义属性，用来保存编号                 
    eContentList[i].onclick=function() {
     	var newLeft=-1.5;
     	newLeft=parseFloat(newLeft*this.index);
     	eItemList.style.left=newLeft+ "rem";//当鼠标触发时再显示对应的内容    
	    for (var i=0;i<eContentList.length;i++) {
		     eContentList[i].style.filter="60";        //将背景色设置为无    
		     eContentList[i].style.opacity="0.6";        
	     }
		 eContentList[this.index].style.filter="100";
		 eContentList[this.index].style.opacity="1";
	};  
}
function changeImg(url)
{
 var bigimg = document.querySelector("#flash .bimg img");
 bigimg.src=url;
}
// function changeBack()
// {
//  var bigimg = document.querySelector("#flash .bimg img");
//  bigimg.src="";
// }
// var  eShade = document.querySelector("#playimages #big_pic span.shade");
// var  eMove = document.querySelector("#fangda .m_a_c span.move");
// var  ebBimg = document.querySelector("#fangda .m_a_c .bimg");


	//鼠标滑动到 shade(遮罩层)上面时，透明滑块和右边大图区同时显示出来
	$("#playimages #big_pic span.shade").mouseover(function(){
		$("#fangda .m_a_c span.move").show();//显示
		$("#fangda .m_a_c .bimg").show();//显示
	});

	//鼠标离开（移出）shade(遮罩层) 时，透明滑块和右边大图区同时 隐藏
	$("#playimages #big_pic span.shade").mouseout(function(){
		$("#fangda .m_a_c span.move").hide();//隐藏
		$("#fangda .m_a_c .bimg").hide();//隐藏
	});

	//让透明的小滑块跟随鼠标位置移动
	$("#playimages #big_pic span.shade").mousemove(function(e){
		//alert("移动");
		var x=e.clientX;	//鼠标与浏览器X轴(左)的坐标（距离）
		var y=e.clientY;	//鼠标与浏览器Y轴（上）的坐标（距离）
		var l=$("#big_pic").offset().left; //获区box 与浏览器窗口左边距离
		var t=$("#big_pic").offset().top;  //获区box 与浏览器窗口上边距离
		var w=$("#fangda .m_a_c span.move").width()/2;
		var h=$("#fangda .m_a_c span.move").height()/2;
		var _left=x-l-w;  //透明小滑块左边的距离 
		var _top=y-t-h;   //透明小滑块上面的距离
		//alert(_left+"--"+_top);

		//做判断，不能让透明区块移出去
		if(_top<0){ //不从上面和下面出去
			_top=0
		}else if(_top>($("#playimages #big_pic span.shade").height()-h*2-2)){
				_top=$("#playimages #big_pic span.shade").height()-h*2-2;
		}
		//不让从左边和右边出去
		if(_left<0){
			_left=0;
		}else if(_left>($("#playimages #big_pic span.shade").width()-w*2-2)){
				_left=$("#playimages #big_pic span.shade").width()-w*2-2;
		}
		//鼠标动的效果
		$("#fangda .m_a_c span.move").css({left:_left,top:_top});

		var yd_w=$("#playimages #big_pic span.shade").width()-w*2;  //透明滑块能滑动最大的宽度
		var yd_h=$("#playimages #big_pic span.shade").height()-h*2; //透明滑块能滑动最大的高度

		var yd_wbl=_left/yd_w;  //滑动宽度的比例
		var yd_hbl=_top/yd_h;   //滑动高度的比例

		var big_left=($("#fangda .m_a_c .bimg img").width()-$("#fangda .m_a_c .bimg").width())*yd_wbl;  //大图对应的左边的距离
		var big_top=($("#fangda .m_a_c .bimg img").height()-$("#fangda .m_a_c .bimg").height())*yd_hbl;  //大图对应的上面的距离
		//alert(big_left+"--"+big_top);

		$("#fangda .m_a_c .bimg img").css({left:-big_left,top:-big_top});







	});