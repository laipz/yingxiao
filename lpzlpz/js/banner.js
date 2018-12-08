 // window.onload = function () {
 
    var wrap = document.querySelector("#banner .wrap");
    var next = document.querySelector("#banner .arrow_right");
    var prev = document.querySelector("#banner .arrow_left");
    next.onclick = function () {
      next_pic();
    }
    prev.onclick = function () {
      prev_pic();
    }
    function next_pic () {
      index++;
      if(index > 7){
        //x-1
        index = 0;
      }
      showCurrentDot();
      var newLeft;
      if(wrap.style.left === "-67.5rem"){
        //(x+1)y
        newLeft = -15;
        //y*2
      }else{
        newLeft = parseFloat(wrap.style.left)-7.5;
      }
      wrap.style.left = newLeft + "rem";
    }
    function prev_pic () {
      index--;
      if(index < 0){
        index = 7;
        //x-1
      }
      showCurrentDot();
      var newLeft;
      if(wrap.style.left === "0rem"){
        newLeft = -52.5;
        //x*y
      }else{
        newLeft = parseFloat(wrap.style.left)+7.5;
      }
      wrap.style.left = newLeft + "rem";
    }
    var timer1 = null;
    function autoPlay1 () {
      timer1 = setInterval(function () {
        next_pic();
      },2000);
    }
    autoPlay1();
 
    var banner_conter = document.querySelector("#banner .banner_conter");
    banner_conter.onmouseenter = function () {
      clearInterval(timer1);
    }
    banner_conter.onmouseleave = function () {
      autoPlay1();  
    }
 
    var index = 0;
    var dots = document.querySelectorAll("#banner .banner_button span");
    function showCurrentDot () {
      for(var i = 0, len = dots.length; i < len; i++){
        dots[i].className = "";
      }
      dots[index].className = "on";
    }
 
    for (var i = 0, len = dots.length; i < len; i++){
      (function(i){
        dots[i].onmouseenter = function () {
          var dis = index - i;
          if(index == 7 && parseFloat(wrap.style.left)!==-60){
            //x-1    x*y
            dis = dis - 8;   
            //x
          }
          //和使用prev和next相同，在最开始的照片5和最终的照片1在使用时会出现问题，导致符号和位数的出错，做相应地处理即可
          if(index == 0 && parseFloat(wrap.style.left)!== -7.5){
            //0      y
            dis = 8 + dis;
            //x
          }
          wrap.style.left = (parseFloat(wrap.style.left) + dis * 7.5)+"rem";
          index = i;
          showCurrentDot();
        }
      })(i);      
    }


    var knock = document.querySelector("#banner .knock_1_2");
    var knockzil = document.querySelector("#banner .knock_arrow_left");
    var knockzir = document.querySelector("#banner .knock_arrow_right");
    knockzil.onclick = function () {
      knockzi_pic();
    }
    knockzir.onclick = function () {
      knockzi_pic();
    }
    function knockzi_pic () {
      var newLeft;
      if(knock.style.left === "0rem"){
        //(x+1)y
        newLeft = -9.52;
        //y*2
      }else{
        newLeft = 0;
      }
      knock.style.left = newLeft + "rem";
    }

 

 
 
// }
//  // function stop() {
 //            //判定浏览器引擎是IE还是其他浏览器
 //            event = event || window.event;
 //            if (event.stopPropagation) {
 //                //非IE浏览器
 //                event.stopPropagation();
 //            } else {
 //                //IE浏览器
 //                event.cancelBubble = true;
 //            }
 //  
 //  
 //  
 //  
 //  
 //  
 //  
 //  
 //   // window.onload = function () {
// var eItemList = document.querySelectorAll("#tab .tab_right .tab-list li");
// var eContentList = document.querySelectorAll("#tab .tab_right .tab-content li");//给元素编号
//   for (var i=0;i<eItemList.length;i++) {
//     eItemList[i].index=i;  //index是自定义属性，用来保存编号                 
//     eItemList[i].onmouseover=function() {
//     for (var i=0;i<eContentList.length;i++) {
//       eContentList[i].style.display="none";        //先将内容全部隐藏                  
//     }
//   eContentList[this.index].style.display="block";  //当鼠标触发时再显示对应的内容    
//   for (var i=0;i<eItemList.length;i++) {
//     eItemList[i].style.background="none";
//     eItemList[i].style.color="#5e5e5e";        //将背景色设置为无                 
//   }
//   eItemList[this.index].style.background="rgb(113, 158, 247)";
//   eItemList[this.index].style.color="#fff";
//   };    
// }
 
// // }