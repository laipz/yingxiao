var Deng = document.querySelector("#l_screen #deng");
var Zhu = document.querySelector("#l_screen #zhu");
var DengLv = document.querySelector("#denglv");
var DengLvMiMa = document.querySelector("#denglv .denglv_d #denglv_m");
var DengLvZhuCe = document.querySelector("#denglv .denglv_d #denglv_z");
var DengLvD = document.querySelector("#denglv .denglv_d");
var DengLvZ = document.querySelector("#denglv .denglv_z");
var DengLvM = document.querySelector("#denglv .denglv_m");
var DengLvG = document.querySelector("#denglv .denglv_g");

Deng.onclick=function(){
	DengLv.style.display="block";
	DengLvD.style.display="block";
}
Zhu.onclick=function(){
	DengLv.style.display="block";
	DengLvZ.style.display="block";
}
DengLvMiMa.onclick=function(){
	DengLv.style.display="block";
	DengLvM.style.display="block";
	DengLvD.style.display="none";
	DengLvZ.style.display="none";
}
DengLvZhuCe.onclick=function(){
	DengLv.style.display="block";
	DengLvM.style.display="none";
	DengLvD.style.display="none";
	DengLvZ.style.display="block";
}
DengLvG.onclick=function(){
	DengLvD.style.display="none";
	DengLvZ.style.display="none";
	DengLvM.style.display="none";
	DengLv.style.display="none";
}



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