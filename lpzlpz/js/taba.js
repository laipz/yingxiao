var  eItemListc = document.querySelectorAll("#tabc .tab_list li");
var eContentListc = document.querySelectorAll("#tabc .tab_content li");
//给元素编号
 for (var i=0;i<eItemListc.length;i++) {
     eItemListc[i].index=i;  //index是自定义属性，用来保存编号                 
     eItemListc[i].onmouseover=function() {
     for (var i=0;i<eContentListc.length;i++) {
     eContentListc[i].style.display="none";        //先将内容全部隐藏                  
     }
     eContentListc[this.index].style.display="block";  //当鼠标触发时再显示对应的内容    
     for (var i=0;i<eItemListc.length;i++) {
     eItemListc[i].style.background="none";        //将背景色设置为无    
     eItemListc[i].style.color="#5e5e5e";              
     }
     jb=this.index;
     eItemListc[this.index].style.background="rgb(113, 158, 247)";
      eItemListc[this.index].style.color="#fff";
      // console.log(123);
 };    
} 

var eTabContentc = document.querySelector("#tabc .tab_content");
var eTabArrowc = document.querySelector("#tabc .tab_arrow");

eTabContentc.onmouseover=function(){
    // stop();
    eTabArrowc.style.display="block";
}
eTabContentc.onmouseout=function(){
    // stop();
    eTabArrowc.style.display="none";
}
eTabArrowc.onmouseover=function(){
    // stop();
    eTabArrowc.style.display="block";
}
eTabArrowc.onclick=function(){
    stop();
    jb++;
    if(jb > 6){
        //x-1
        jb = 0;
      } 
    showTabdotc();

    // eTabArrowc.style.background="red";
    // eTabArrowc.style.display="none";
}
var jb=0;
    function showTabdotc () {
      for(var i = 0, len = eItemListc.length; i < len; i++){
        eItemListc[i].style.background="none";
        eItemListc[i].style.color="#5e5e5e";
        eContentListc[i].style.display="none"; 
      }
      eItemListc[jb].style.background="rgb(113, 158, 247)";
      eItemListc[jb].style.color="#fff";
      eContentListc[jb].style.display="block"; 

      // console.log(123);
    }
    
var tabwrapc = document.querySelector("#tabc .tab_wrap");
var tabnextc = document.querySelector("#tabc .tab_a_right");
var tabprevc = document.querySelector("#tabc .tab_a_left");
    tabnextc.onclick = function () {
      tabnextc_pic();
    }
    tabprevc.onclick = function () {
      tabprevc_pic();
    }
    function tabnextc_pic () {
      kc++;
      if(kc > 2){
        //x-1
        kc = 0;
      }
      showtabdotc();
      var newLeftc;
      if(tabwrapc.style.left === "-15.6rem"){
        //(x+1)y
        newLeftc = -7.8;
        //y*2
      }else{
        newLeftc = parseFloat(tabwrapc.style.left)-3.9;
      }
      tabwrapc.style.left = newLeftc + "rem";
    }
    function tabprevc_pic () {
      kc--;
      if(kc < 0){
        kc = 2;
        //x-1
      }
      showtabdotc();
      var newLeftc;
      if(tabwrapc.style.left === "0rem"){
        newLeftc = -7.8;
        //x*(y-1)
      }else{
        newLeftc = parseFloat(tabwrapc.style.left)+3.9;
      }
      tabwrapc.style.left = newLeftc + "rem";
    }
    // var timer4=window.setInterval([function autoPlay(){tabnextc_pic();}],[2000]);
    var timer4 = null;
    function autoPlay4 () {
      timer4 = setInterval(function () {
        tabnextc_pic();
      },2000);
    }
    autoPlay4();
 
    var tab_banner_conterc = document.querySelector("#tabc .tab_conter_banner");
    tab_banner_conterc.onmouseenter = function () {
      clearInterval(timer4);
    }
    tab_banner_conterc.onmouseleave = function () {
      autoPlay4();  
    }
 
    var kc = 0;
    // var tabdotc = document.getElementsByTagName("span");
    var tabdotc = document.querySelectorAll("#tabc .tab_conter_button span");
    function showtabdotc () {
      for(var i = 0, len = tabdotc.length; i < len; i++){
        tabdotc[i].className = "";
      }
      tabdotc[kc].className = "on";
    }
 
    for (var i = 0, len = tabdotc.length; i < len; i++){
      (function(i){
        tabdotc[i].onmouseenter = function () {
          var dis = kc - i;
          if(kc == 2 && parseFloat(tabwrapc.style.left)!==-11.7){
            //x-1    x*y
            dis = dis - 3;   
            //x
          }
          //和使用prev和next相同，在最开始的照片5和最终的照片1在使用时会出现问题，导致符号和位数的出错，做相应地处理即可
          if(kc == 0 && parseFloat(tabwrapc.style.left)!== -3.9){
            //0      y
            dis = 3 + dis;
            //x
          }
          tabwrapc.style.left = (parseFloat(tabwrapc.style.left) + dis * 3.9)+"rem";
          kc = i;
          showtabdotc();
        }
      })(i);      
    }

