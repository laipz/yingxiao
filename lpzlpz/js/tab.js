function stop() {
            //判定浏览器引擎是IE还是其他浏览器
            event = event || window.event;
            if (event.stopPropagation) {
                //非IE浏览器
                event.stopPropagation();
            } else {
                //IE浏览器
                event.cancelBubble = true;
            }
}
var  eItemList = document.querySelectorAll("#taba  .tab_list li");
var eContentList = document.querySelectorAll("#taba   .tab_content li");
//给元素编号
 for (var i=0;i<eItemList.length;i++) {
     eItemList[i].index=i;  //index是自定义属性，用来保存编号                 
     eItemList[i].onmouseover=function() {
     for (var i=0;i<eContentList.length;i++) {
     eContentList[i].style.display="none";        //先将内容全部隐藏                  
     }
     eContentList[this.index].style.display="block";  //当鼠标触发时再显示对应的内容    
     for (var i=0;i<eItemList.length;i++) {
     eItemList[i].style.background="none";        //将背景色设置为无    
     eItemList[i].style.color="#5e5e5e";              
     }
     j=this.index;
     eItemList[this.index].style.background="rgb(113, 158, 247)";
      eItemList[this.index].style.color="#fff";
      // console.log(123);
 };    
} 

var eTabContent = document.querySelector("#taba .tab_content");
var eTabArrow = document.querySelector("#taba .tab_arrow");

eTabContent.onmouseover=function(){
    // stop();
    eTabArrow.style.display="block";
}
eTabContent.onmouseout=function(){
    // stop();
    eTabArrow.style.display="none";
}
eTabArrow.onmouseover=function(){
    // stop();
    eTabArrow.style.display="block";
}
eTabArrow.onclick=function(){
    stop();
    j++;
    if(j > 4){
        //x-1
        j = 0;
      } 
    showTabDot();
    // eTabArrow.style.background="red";
    // eTabArrow.style.display="none";
}
var j=0;
    function showTabDot () {

    // for(var z = 0, len = eItemList.length; z < len; z++){
    //     if (eItemList[z].style.background="rgb(113, 158, 247)") {
    //         j=z;
    //         }
    // }
      for(var i = 0, len = eItemList.length; i < len; i++){
        eItemList[i].style.background="none";
        eItemList[i].style.color="#5e5e5e";
        eContentList[i].style.display="none"; 
      }
      eItemList[j].style.background="rgb(113, 158, 247)";
      eItemList[j].style.color="#fff";
      eContentList[j].style.display="block"; 

      // console.log(123);
    }
    
var tabwrap = document.querySelector("#taba  .tab_wrap");
var tabnext = document.querySelector("#taba  .tab_a_right");
var tabprev = document.querySelector("#taba  .tab_a_left");
    tabnext.onclick = function () {
      tabnext_pic();
    }
    tabprev.onclick = function () {
      tabprev_pic();
    }
    function tabnext_pic () {
      k++;
      if(k > 2){
        //x-1
        k = 0;
      }
      showtabDot();
      var newLeft;
      if(tabwrap.style.left === "-15.6rem"){
        //(x+1)y
        newLeft = -7.8;
        //y*2
      }else{
        newLeft = parseFloat(tabwrap.style.left)-3.9;
      }
      tabwrap.style.left = newLeft + "rem";
    }
    function tabprev_pic () {
      k--;
      if(k < 0){
        k = 2;
        //x-1
      }
      showtabDot();
      var newLeft;
      if(tabwrap.style.left === "0rem"){
        newLeft = -7.8;
        //x*(y-1)
      }else{
        newLeft = parseFloat(tabwrap.style.left)+3.9;
      }
      tabwrap.style.left = newLeft + "rem";
    }
    // var timer2=window.setInterval([function autoPlay(){tabnext_pic();}],[2000]);
    var timer2 = null;
    function autoPlay2 () {
      timer2 = setInterval(function () {
        tabnext_pic();
      },2000);
    }
    autoPlay2();
 
    var tab_banner_conter = document.querySelector("#taba .tab_conter_banner");
    tab_banner_conter.onmouseenter = function () {
      clearInterval(timer2);
    }
    tab_banner_conter.onmouseleave = function () {
      autoPlay2();  
    }
 
    var k = 0;
    // var tabdot = document.getElementsByTagName("span");
    var tabdot = document.querySelectorAll("#taba  .tab_conter_button span");
    function showtabDot () {
      for(var i = 0, len = tabdot.length; i < len; i++){
        tabdot[i].className = "";
      }
      tabdot[k].className = "on";
    }
 
    for (var i = 0, len = tabdot.length; i < len; i++){
      (function(i){
        tabdot[i].onmouseenter = function () {
          var dis = k - i;
          if(k == 2 && parseFloat(tabwrap.style.left)!==-11.7){
            //x-1    x*y
            dis = dis - 3;   
            //x
          }
          //和使用prev和next相同，在最开始的照片5和最终的照片1在使用时会出现问题，导致符号和位数的出错，做相应地处理即可
          if(k == 0 && parseFloat(tabwrap.style.left)!== -3.9){
            //0      y
            dis = 3 + dis;
            //x
          }
          tabwrap.style.left = (parseFloat(tabwrap.style.left) + dis * 3.9)+"rem";
          k = i;
          showtabDot();
        }
      })(i);      
    }



var  eItemListb = document.querySelectorAll("#tabb .tab_list li");
var eContentListb = document.querySelectorAll("#tabb .tab_content li");
//给元素编号
 for (var i=0;i<eItemListb.length;i++) {
     eItemListb[i].index=i;  //index是自定义属性，用来保存编号                 
     eItemListb[i].onmouseover=function() {
     for (var i=0;i<eContentListb.length;i++) {
     eContentListb[i].style.display="none";        //先将内容全部隐藏                  
     }
     eContentListb[this.index].style.display="block";  //当鼠标触发时再显示对应的内容    
     for (var i=0;i<eItemListb.length;i++) {
     eItemListb[i].style.background="none";        //将背景色设置为无    
     eItemListb[i].style.color="#5e5e5e";              
     }
     jb=this.index;
     eItemListb[this.index].style.background="rgb(113, 158, 247)";
      eItemListb[this.index].style.color="#fff";
      // console.log(123);
 };    
} 

var eTabContentb = document.querySelector("#tabb .tab_content");
var eTabArrowb = document.querySelector("#tabb .tab_arrow");

eTabContentb.onmouseover=function(){
    // stop();
    eTabArrowb.style.display="block";
}
eTabContentb.onmouseout=function(){
    // stop();
    eTabArrowb.style.display="none";
}
eTabArrowb.onmouseover=function(){
    // stop();
    eTabArrowb.style.display="block";
}
eTabArrowb.onclick=function(){
    stop();
    jb++;
    if(jb > 6){
        //x-1
        jb = 0;
      } 
    showTabdotb();

    // eTabArrowb.style.background="red";
    // eTabArrowb.style.display="none";
}
var jb=0;
    function showTabdotb () {
      for(var i = 0, len = eItemListb.length; i < len; i++){
        eItemListb[i].style.background="none";
        eItemListb[i].style.color="#5e5e5e";
        eContentListb[i].style.display="none"; 
      }
      eItemListb[jb].style.background="rgb(113, 158, 247)";
      eItemListb[jb].style.color="#fff";
      eContentListb[jb].style.display="block"; 

      console.log(123);
    }
    
var tabwrapb = document.querySelector("#tabb .tab_wrap");
var tabnextb = document.querySelector("#tabb .tab_a_right");
var tabprevb = document.querySelector("#tabb .tab_a_left");
    tabnextb.onclick = function () {
      tabnextb_pic();
    }
    tabprevb.onclick = function () {
      tabprevb_pic();
    }
    function tabnextb_pic () {
      kb++;
      if(kb > 2){
        //x-1
        kb = 0;
      }
      showtabdotb();
      var newLeftb;
      if(tabwrapb.style.left === "-15.6rem"){
        //(x+1)y
        newLeftb = -7.8;
        //y*2
      }else{
        newLeftb = parseFloat(tabwrapb.style.left)-3.9;
      }
      tabwrapb.style.left = newLeftb + "rem";
    }
    function tabprevb_pic () {
      kb--;
      if(kb < 0){
        kb = 2;
        //x-1
      }
      showtabdotb();
      var newLeftb;
      if(tabwrapb.style.left === "0rem"){
        newLeftb = -7.8;
        //x*(y-1)
      }else{
        newLeftb = parseFloat(tabwrapb.style.left)+3.9;
      }
      tabwrapb.style.left = newLeftb + "rem";
    }
    // var timer3=window.setInterval([function autoPlay(){tabnextb_pic();}],[2000]);
    var timer3 = null;
    function autoPlay3 () {
      timer3 = setInterval(function () {
        tabnextb_pic();
      },2000);
    }
    autoPlay3();
 
    var tab_banner_conterb = document.querySelector("#tabb .tab_conter_banner");
    tab_banner_conterb.onmouseenter = function () {
      clearInterval(timer3);
    }
    tab_banner_conterb.onmouseleave = function () {
      autoPlay3();  
    }
 
    var kb = 0;
    // var tabdotb = document.getElementsByTagName("span");
    var tabdotb = document.querySelectorAll("#tabb .tab_conter_button span");
    function showtabdotb () {
      for(var i = 0, len = tabdotb.length; i < len; i++){
        tabdotb[i].className = "";
      }
      tabdotb[kb].className = "on";
    }
 
    for (var i = 0, len = tabdotb.length; i < len; i++){
      (function(i){
        tabdotb[i].onmouseenter = function () {
          var dis = kb - i;
          if(kb == 2 && parseFloat(tabwrapb.style.left)!==-11.7){
            //x-1    x*y
            dis = dis - 3;   
            //x
          }
          //和使用prev和next相同，在最开始的照片5和最终的照片1在使用时会出现问题，导致符号和位数的出错，做相应地处理即可
          if(kb == 0 && parseFloat(tabwrapb.style.left)!== -3.9){
            //0      y
            dis = 3 + dis;
            //x
          }
          tabwrapb.style.left = (parseFloat(tabwrapb.style.left) + dis * 3.9)+"rem";
          kb = i;
          showtabdotb();
        }
      })(i);      
    }

