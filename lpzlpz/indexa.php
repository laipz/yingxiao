<!DOCTYPE html>  
<html lang="en">  
<head>  
    <meta charset="UTF-8">  
    <meta name="viewport" content="width = device-width,initial-scale=1">  
    <title>星锐商城</title>  
  
    <link type="text/css" rel="stylesheet" href="css/index.css">  
    <link type="text/css" rel="stylesheet" href="css/banner.css">
    <link type="text/css" rel="stylesheet" href="css/bigimg.css">
    <link type="text/css" rel="stylesheet" href="css/tab.css">

    <link type="text/css" rel="stylesheet" href="css/all.css">



    <!-- <script src="js/tab.js"></script> -->
    <script type="text/javascript">
    function checka(){
      var SysloginName= document.querySelector("#denglv .denglv_d #loginFrom_d #sysloginname");
      if(SysloginName.value==''){
        alert('用户名不能为空');
        SysloginName.focus();
        return false;
      }
      var SysloginPass= document.querySelector("#denglv .denglv_d #loginFrom_d #sysloginpass");
      if(SysloginPass.value==''){
        alert('密码不能为空');
        SysloginPass.focus();
        return false;
      }

    }
    function checkb(){
      var SysloginName= document.querySelector("#denglv .denglv_z #loginFrom_z #sysloginname");
      if(SysloginName.value==''){
        alert('用户名不能为空');
        SysloginName.focus();
        return false;
      }
      var SysloginPass= document.querySelector("#denglv .denglv_z #loginFrom_z #sysloginpass");
      if(SysloginPass.value==''){
        alert('密码不能为空');
        SysloginPass.focus();
        return false;
      }
      var SysloginMail= document.querySelector("#denglv .denglv_z #loginFrom_z #sysloginmail");
      if(SysloginMail.value==''){
        alert('邮箱不能为空');
        SysloginMail.focus();
        return false;
      }
      if (SysloginMail.value.replace(/\ /g,"").search(/^\w+((-\w+)|(\.\w+))*\@[A-Za-z0-9]+((\.|-)[A-Za-z0-9]+)*\.[A-Za-z0-9]+$/) == -1)
       {
        alert('邮箱格式错误');
        SysloginMail.focus();
        return false;
       }

    }
    function checkc(){
      var SysloginName= document.querySelector("#denglv .denglv_m #loginFrom_m #sysloginname");
      if(SysloginName.value==''){
        alert('用户名不能为空');
        SysloginName.focus();
        return false;
      }
      var SysloginMail= document.querySelector("#denglv .denglv_m #loginFrom_m #sysloginmail");
      if(SysloginMail.value==''){
        alert('邮箱不能为空');
        SysloginMail.focus();
        return false;
      }

      if (SysloginMail.value.replace(/\ /g,"").search(/^\w+((-\w+)|(\.\w+))*\@[A-Za-z0-9]+((\.|-)[A-Za-z0-9]+)*\.[A-Za-z0-9]+$/) == -1)
       {
        alert('邮箱格式错误');
        SysloginMail.focus();
        return false;
       }

    }





    </script>

    


  
</head>  
<body>  


<div id="denglv" style="display: none;">
  <div class="denglv_d" style="display: none;">
    <?php 
      if (isset($_POST["BUTTON1"])) {
        $sysloginname = $_POST['sysloginname'];
        $sysloginpass = $_POST['sysloginpass'];
        $link=@mysql_connect('localhost','root','') or die('数据库连接失败');
        mysql_select_db('data') or die('数据表连接失败');
        mysql_query('set names utf8');
        $rs=mysql_query("select * from user where sysloginname='$sysloginname' and sysloginpass='$sysloginpass'");
        if (mysql_num_rows($rs)==1) {
          header('location:shopping.html');
        }
        mysql_free_result($rs);
        mysql_close($link);
                
      }
    ?>    
    <form id="loginFrom_d" method="post" onsubmit="return checka()">
      <div>
        <span class="one"><label>用户名:</label></span>
        <span class="two"><input type="text" id="sysloginname" name="sysloginname" maxlength="6"/></span>
      </div>
      <div>
        <span class="one"><label>密&nbsp;码:</label></span>
        <span class="two"><input type="password" id="sysloginpass" name="sysloginpass" maxlength="15"/></span>
      </div>
      <div class="sign">
        <input type="submit" name="BUTTON1" value="登录" class="submit"/>
      </div>
      <div id="denglv_z">注册</div>
      <div id="denglv_m">忘记密码</div>
    </form>
  </div>

  <div class="denglv_z" style="display: none;">
    <?php 
      if (isset($_POST["BUTTON2"])) {
        $sysloginname = $_POST['sysloginname'];
        $sysloginpass = $_POST['sysloginpass'];
        $sysloginmail = $_POST['sysloginmail'];
        $link=@mysql_connect('localhost','root','') or die('数据库连接失败');
        mysql_select_db('data') or die('数据表连接失败');
        mysql_query('set names utf8');
        $sql="insert into user values ('$sysloginname','$sysloginpass','$sysloginmail')";
        mysql_query($sql);
        // mysql_free_result($rs);
        // mysql_close($link);
        // echo "$sql";
                
      }
      ?>

    <form id="loginFrom_z" method="post" onsubmit="return checkb()">
      <div>
        <span class="one"><label>用户名:</label></span>
        <span class="two"><input type="text" id="sysloginname" name="sysloginname" maxlength="6"/></span>
      </div>
      <div>
        <span class="one"><label>密&nbsp;码:</label></span>
        <span class="two"><input type="password" id="sysloginpass" name="sysloginpass" maxlength="15"/></span>
      </div>
      <div>
        <span class="one"><label>邮&nbsp;箱:</label></span>
        <span class="two"><input type="text" id="sysloginmail" name="sysloginmail" maxlength="15"/></span>
      </div>
      <div class="sign">
        <input type="submit" name="BUTTON2" value="注册" class="submit" onclick="doLogin();" />
      </div>
    </form>
  </div>

  <div class="denglv_m" style="display: none;">
    <?php 
      if (isset($_POST["BUTTON3"])) {
        $sysloginname = $_POST['sysloginname'];
        $sysloginmail = $_POST['sysloginmail'];
        $link=@mysql_connect('localhost','root','') or die('数据库连接失败');
        // mysql_connect('localhost','root','') or die('数据库连接失败');
        mysql_select_db('data') or die('数据表连接失败');
        mysql_query('set names utf8');
        // $sql = "select * from user where sysloginname='$sysloginname' and sysloginpass='$sysloginpass'";
        $rs=mysql_query("select * from user where sysloginname='$sysloginname' and sysloginmail='$sysloginmail'");
        // echo mysql_num_rows($rs);
        if (mysql_num_rows($rs)==1) {
          // echo "密码或者账号有误";
          // $sysloginname.display=none;
          header("location:mima.php?sysloginname=$sysloginname");
        }
        mysql_free_result($rs);
        mysql_close($link);
                
      }
    ?>   

    <form id="loginFrom_m" method="post" onsubmit="return checkc()">
      <div>
        <span class="one"><label>用户名:</label></span>
        <span class="two"><input type="text" id="sysloginname" name="sysloginname" maxlength="6"/></span>
      </div>
      <div>
        <span class="one"><label>邮&nbsp;箱:</label></span>
        <span class="two"><input type="text" id="sysloginmail" name="sysloginmail" maxlength="15"/></span>
      </div>
      <div class="sign">
        <input type="submit" name="BUTTON3" value="找回密码" class="submit" onclick="doLogin();" />
      </div>
      <div style="background-color: red;display: none;"></div>
    </form>
  </div>
  <a class="denglv_g">X</a>


</div>


<h1>星锐商城</h1>
<div id="s_screen" class="m_a">
  <main>请在电脑中打开</main>
</div>

<div id="l_screen" class="m_a_b">
  <!-- <h2>pc端打开</h2> -->
   

  <header>
    <div class="m_a_b">
      <div class="bgc_fi m_a_c">
        <nav>
          <ul class="fl">
              <li><a>国美会员</a></li>
              <li><a>登录</a></li>
              <li class="red"><a>注册有礼</a></li>
            </ul>
            <ul class="fr">
              <li><a>我的订单</a></li>
              <li><a>我的国美</a></li>
              <li><a>企业采购</a></li>
              <li><a>服务中心</a></li>
              <li><a>网站导航</a></li>
              <li><a>手机国美</a></li>
            </ul>   
        </nav>
      </div>
    </div>
    
    <div class="m_a_c">
      <h2>pc端打开</h2>

      <div class="h_search">
        <div class="h_s_t">
          <div class="h_s_t_0 h_s_t_1"></div>
          <div class="h_s_t_0 h_s_t_2"></div>
          <div class="h_s_t_0 h_s_t_3">搜索</div>
        </div>
        <div class="h_s_b">
          <a href="" class="red">国美金融日</a>
          <a href="">优惠购金</a>
          <a href="">买1送1</a>
          <a href="">省900</a>
          <a href="">电视1899</a>
          <a href="">购机送话费</a>
          <a href="" class="hide_xs">1p空调1399</a>
          <a href="" class="hide_s">199减100</a>
        </div>
      </div>

      <div class="h_right"></div>


    </div>

    <div class="m_a_b">
      <div class="nav bgc_fi  m_a_c">
        <div class="nav_l">
          <a href="" class="">全部商品分类</a>
          <div></div>

        </div>
        <div class="nav_c">
          <li><a>圈子</a></li>
          <li><a>真划算</a></li>
          <li><a>服装城</a></li>
          <li><a>超市</a></li>
          <li><a>电器城</a></li>
          <li><a>汽车</a></li>
          <li><a>家居家装</a></li>
          <li><a>智能</a></li>
          <li><a>管家</a></li>
          <li><a>金融</a></li>


        </div>
        <div class="nav_r">
         <div class="nav_r_r">
            <div href="" id="deng">登录</div>
            <div href="" id="zhu">注册</div>
          </div>

        </div>
      </div>
    </div>
  </header>

  <section id="banner" class="m_a_b">
    <div class="m_a_c">

      <img src="img/banner/bg/left_top.png" alt="" style="height: 4.5rem;position: absolute;top: 0; left: -3.0rem; z-index: 2;">
      <img src="img/banner/bg/right_top.png" alt="" style="height: 4.5rem;position: absolute;top: 0; right: -3.0rem; z-index: 2;">
      <img src="img/banner/bg/right_bottom.png" alt="" style="height: 2.72rem;position: absolute;top: 4.5rem; right: -3.0rem; z-index: 2;">
      <img src="img/banner/bg/left_bottom.png" alt="" style="height: 2.72rem;position: absolute;top: 4.5rem;left: -3.0rem; z-index: 2;">
      <div class="banner_conter">
        <div class="wrap" style="left: -7.5rem;">
          <img src="img/banner/banner_conter/8.jpg" alt="">
          <img src="img/banner/banner_conter/1.jpg" alt="">
          <img src="img/banner/banner_conter/2.jpg" alt="">
          <img src="img/banner/banner_conter/3.jpg" alt="">
          <img src="img/banner/banner_conter/4.jpg" alt="">
          <img src="img/banner/banner_conter/5.jpg" alt="">
          <img src="img/banner/banner_conter/6.jpg" alt="">
          <img src="img/banner/banner_conter/7.jpg" alt="">
          <img src="img/banner/banner_conter/8.jpg" alt="">
          <img src="img/banner/banner_conter/1.jpg" alt="">
        </div>
        <div class="banner_button">
          <span class="on">&nbsp;</span>
          <span>&nbsp;</span>
          <span>&nbsp;</span>
          <span>&nbsp;</span>
          <span>&nbsp;</span>
          <span>&nbsp;</span>
          <span>&nbsp;</span>
          <span>&nbsp;</span>
        </div>
        <a href="javascript:;" rel="external nofollow" class="arrow arrow_left">&lt;</a>
        <a href="javascript:;" rel="external nofollow" class="arrow arrow_right">&gt;</a>
      </div>
      <div class="banner_news">
        <div class="news_1">
          <div class="news_1_1">
            <a href="" class="fl">快讯</a>
            <div class="fr">
              <a href="" class="fl">更多</a>
              <p class="fl">&gt;</p>
            </div>

          </div>
          <div class="news_1_2">
            <div><a href="" class="new_tehui">特惠</a><a href="" style="width: 1.9rem;">厨房卫浴&nbsp;1000元现金劵免费领</a></div>
            <div><a href="" class="new_tehui">特惠</a><a href="" style="width: 1.9rem;">双11分期特惠&nbsp;满500立享6期免息</a></div>
            <div><a href="" class="new_tehui">特惠</a><a href="" style="width: 1.9rem;">国美超市钜惠狂欢&nbsp;部分满100减50</a></div>
            <div><a href="" class="new_tehui">特惠</a><a href="" style="width: 1.9rem;">洗衣机1111元限时秒</a></div>
          </div>
        </div>
        <div class="news_2">
          <a href="" style="margin-right: 0.05rem;">
            <i class="iconfont">&#xe66a;</i>
            <p>充话费</p>
          </a>
          <a href="" style="margin-right: 0.05rem;">
            <i class="iconfont">&#xe604;</i>
            <p>充流量</p>
          </a>
          <a href="">
            <i class="iconfont">&#xe657;</i>
            <p>游戏</p>
          </a>
          <a href="" style="margin-right: 0.05rem;">
            <i class="iconfont">&#xe743;</i>
            <p>金融</p>
          </a>
          <a href="" style="margin-right: 0.05rem;">
            <i class="iconfont">&#xe770;</i>
            <p>帮助</p>
          </a>
          <a href="">
            <i class="iconfont">&#xe600;</i>
            <p>找服务</p>
          </a>  
        </div>
        <div class="news_3"></div>
      </div>
      <div class="banner_knock">
        <div class="knock_1">
          <div class="knock_1_1">
            <div class="fl">
              <span>1</span>
              <p>美日必抢</p>
            </div>
            <div class="fr"></div>
          </div>
          <div class="knock_1_2" style="left: 0rem;">
          	<?php
          		$link=@mysql_connect('localhost','root','') or die('数据库连接失败');
          		mysql_select_db('data') or die('数据表连接失败');
          		mysql_query('set names utf8');
				$rs=mysql_query('select * from everyday');
				while($rows=mysql_fetch_assoc($rs))
				{
					echo '<a href="">';
		            echo '<img src="img/banner/knock/'.$rows['pic'].'" alt="">';
		            echo '<div>';
		            echo ' <span>&yen;'.$rows['price'].'</span>';
		            echo '<del>'.$rows['oldprice'].'</del>' ;
		            echo '</div>';
		            echo '<p>'.$rows['describe'].'</p>';
		            echo '</a>';
				}
				mysql_free_result($rs);
				mysql_close($link);
          		
          		
          		?>
            <!--<a href="">
              <img src="img/banner/knock/1.jpg" alt="">
              <div>
                <span>&yen; 23</span>
                <del>12</del>
              </div>
              <p>越南啛啛喳喳多多多kaskksaka</p>

            </a>-->
            
           

          </div>
          <a href="javascript:;" rel="external nofollow" class="knock_arrow knock_arrow_left">&lt;</a>
          <a href="javascript:;" rel="external nofollow" class="knock_arrow knock_arrow_right">&gt;</a>

        </div>
        <div class="knock_2"><a href=""></a></div>
      </div>
    </div>

  </section>

  <section id="bigimg" class="m_a_b">
    <div class="m_a_c">
      <a href="" style="display: block; height: 7.1rem;position: absolute;left: -3.0rem;bottom: 0; z-index: 2;">
        <img src="img/bigimg/left.png" alt="" style="height: 7.1rem;">
      </a>
      <a class="bigimg_top" style="">
        <img src="img/bigimg/top.png" alt="" style="display: block; width: 12rem;">
      </a>
      <a class="bigimg_img"><img src="img/bigimg/1.png" alt=""></a>
      <a class="bigimg_img"><img src="img/p.png" alt=""></a>
      <a class="bigimg_img"><img src="img/p.png" alt=""></a>
      <a class="bigimg_img"><img src="img/p.png" alt=""></a>
      <a class="bigimg_img"><img src="img/p.png" alt=""></a>
      <a class="bigimg_img" style="z-index: 1"><img src="img/p.png" alt=""></a>
      <a class="bigimg_img"><img src="img/bigimg/7.png" alt=""></a>
      <a class="bigimg_img"><img src="img/bigimg/6.png" alt=""></a>
      <a class="bigimg_img"><img src="img/p.png" alt=""></a>
      <a class="bigimg_img"><img src="img/bigimg/6.png" alt=""></a>
      <a class="bigimg_img"><img src="img/p.png" alt=""></a>
      <a class="bigimg_img"><img src="img/bigimg/6.png" alt=""></a>
      <a class="bigimg_img"><img src="img/p.png" alt=""></a>
      <a class="bigimg_img"><img src="img/p.png" alt=""></a>
      <a class="bigimg_img"><img src="img/p.png" alt=""></a>
      <a class="bigimg_img"><img src="img/p.png" alt=""></a>
      <a class="bigimg_img"><img src="img/p.png" alt=""></a>
      <a class="bigimg_img"><img src="img/p.png" alt=""></a>
      <a href="" style="display: block; height: 7.1rem;position: absolute;right: -3.0rem;top: 0; z-index: 3;">
        <img src="img/bigimg/right.png" alt="" style="height: 7.1rem;">
      </a>
    </div>
  </section>



  <section id="taba" class="taba m_a_b">
    <div class="m_a_c">
      <div class="tab_left">
        <div class="tab_left_top">1F&nbsp;&nbsp;手机通讯</div>
        <div class="tab_left_bottom">
          <a href=""></a>
          <ul style="height: 0.32rem;">
            <li><a href="">手机</a><i>&frasl;</i></li>
            <li><a href="">充值</a><i>&frasl;</i></li>
            <li><a href="">淘实惠</a><i class="dphases">&frasl;</i></li>
            <li><a href="" class="dphases">领劵</a></li>
          </ul>
          <div>
            <a href="">赖沛钊看zzkzk</a>
            <a href="">赖沛卡</a>
            <a href="">赖沛钊卡</a>
            <a href="">赖沛钊看jjxxjxjxjxjjx</a>
            <a href="">赖</a>
            <a href="">赖沛钊卡</a>
            <a href="">赖沛钊看kskskks</a>
            <a href="">赖沛钊卡</a>

            <a href="">赖沛钊卡</a>
            <a href="">赖沛钊看</a>
            <a href="" class="dphases">赖沛钊卡</a>
            <a href="" class="dphases">赖沛钊卡</a>
            <a href="" class="dphases">赖沛钊看</a>
            <a href="" class="dphases">赖沛钊卡</a>
            <a href="" class="dphases">赖沛钊卡</a>


          </div>
        </div>
      </div>
      <div class="tab_right">
        <ul class="tab_list">
            <?php
                $link=@mysql_connect('localhost','root','') or die('数据库连接失败');
                mysql_select_db('data') or die('数据表连接失败');
                mysql_query('set names utf8');
                $rs=mysql_query("select * from tablist where floor='1'");
                while($rows=mysql_fetch_assoc($rs))
                {
                  echo '<li class="'.$rows['classname'].'">'.$rows['name'].'</li>';
                        
                }
                mysql_free_result($rs);
                mysql_close($link);    
            ?>
        </ul>
        <ul class="tab_content">
            <li style="background-color:cornflowerblue;">

              <div class="tab_conter_banner">
                <div class="tab_wrap" style="left: -3.9rem">
                  <a href=""><img src="img/tab/1_3.jpg" alt=""></a>
                  <a href=""><img src="img/tab/1_1.jpg" alt=""></a>
                  <a href=""><img src="img/tab/1_2.jpg" alt=""></a>
                  <a href=""><img src="img/tab/1_3.jpg" alt=""></a>
                  <a href=""><img src="img/tab/1_1.jpg" alt=""></a>
                </div>
                <div class="tab_conter_button">
                  <span class="on">&nbsp;</span>
                  <span>&nbsp;</span>
                  <span>&nbsp;</span>           
                </div>
                <a href="javascript:;" rel="external nofollow" class="tab_a tab_a_left">&lt;</a>
                <a href="javascript:;" rel="external nofollow" class="tab_a tab_a_right">&gt;</a>
              </div>
              <?php
                $link=@mysql_connect('localhost','root','') or die('数据库连接失败');
                mysql_select_db('data') or die('数据表连接失败');
                mysql_query('set names utf8');
                $rs=mysql_query("select * from tab where label='1' and floor='1'");
                while($rows=mysql_fetch_assoc($rs))
                {
                  echo '<a href="" class="tab_mobile"><img src="img/tab/'.$rows['address'].'" alt=""></a>';
                        
                }
                mysql_free_result($rs);
                mysql_close($link);
                
                
                ?>
             <!--  <a href="" class="tab_mobile"><img src="img/tab/1_4.jpg" alt=""></a>
              <a href="" class="tab_mobile"><img src="img/tab/1_5.jpg" alt=""></a>
              <a href="" class="tab_mobile"><img src="img/tab/1_6.jpg" alt=""></a>
              <a href="" class="tab_mobile"><img src="img/tab/1_7.jpg" alt=""></a>
              <a href="" class="tab_mobile"><img src="img/tab/1_8.jpg" alt=""></a>
              <a href="" class="tab_mobile"><img src="img/tab/1_9.jpg" alt=""></a> -->
            </li>
            <li style="display: none;background-color: burlywood;">
              <?php
              $link=@mysql_connect('localhost','root','') or die('数据库连接失败');
              mysql_select_db('data') or die('数据表连接失败');
              mysql_query('set names utf8');
              $rs=mysql_query("select * from tab where floor='1' and label='2'");
              while($rows=mysql_fetch_assoc($rs))
              {
                echo '<a href="" class="tab_tena">';
                        echo '<img src="img/tab/'.$rows['address'].'" alt="">';
                        echo '<p class="p_name">'.$rows['textone'].'</p>';
                        echo '<p class="p_price">'.$rows['texttwo'].'</p>';
                        echo '</a>';
                      
              }
              mysql_free_result($rs);
              mysql_close($link);
                    
              
              ?>    
            </li>
            <li style="display: none;background-color:mediumaquamarine;">
              <?php
              $link=@mysql_connect('localhost','root','') or die('数据库连接失败');
              mysql_select_db('data') or die('数据表连接失败');
              mysql_query('set names utf8');
              $rs=mysql_query("select * from tab where floor='1' and label='3'");
              while($rows=mysql_fetch_assoc($rs))
              {
                echo '<a href="" class="tab_tena">';
                        echo '<img src="img/tab/'.$rows['address'].'" alt="">';
                        echo '<p class="p_name">'.$rows['textone'].'</p>';
                        echo '<p class="p_price">'.$rows['texttwo'].'</p>';
                        echo '</a>';
                      
              }
              mysql_free_result($rs);
              mysql_close($link);
              
              
              ?>
            </li>
            <li style="display: none;background-color: burlywood;">
              <?php
              $link=@mysql_connect('localhost','root','') or die('数据库连接失败');
              mysql_select_db('data') or die('数据表连接失败');
                    mysql_query('set names utf8');
              $rs=mysql_query("select * from tab where floor='1' and label='4'");
              while($rows=mysql_fetch_assoc($rs))
              {
                echo '<a href="" class="tab_tena">';
                        echo '<img src="img/tab/'.$rows['address'].'" alt="">';
                        echo '<p class="p_name">'.$rows['textone'].'</p>';
                        echo '<p class="p_price">'.$rows['texttwo'].'</p>';
                        echo '</a>';
                      
              }
              mysql_free_result($rs);
              mysql_close($link);
              
              
              ?>   
            </li>
            <li style="display: none;background-color:mediumaquamarine;">
              <?php
                $link=@mysql_connect('localhost','root','') or die('数据库连接失败');
                mysql_select_db('data') or die('数据表连接失败');
                mysql_query('set names utf8');
                $rs=mysql_query("select * from tab where floor='1' and label='5'");
                while($rows=mysql_fetch_assoc($rs))
                {
                  echo '<a href="" class="tab_tena">';
                          echo '<img src="img/tab/'.$rows['address'].'" alt="">';
                          echo '<p class="p_name">'.$rows['textone'].'</p>';
                          echo '<p class="p_price">'.$rows['texttwo'].'</p>';
                          echo '</a>';
                        
                }
                mysql_free_result($rs);
                mysql_close($link);
                    
              
              ?>     
            </li>
        </ul>
        <a href="javascript:;" rel="external nofollow" class="tab_arrow" style="display: none;">&gt;</a>
      </div>
     
    </div>
  </section>
 
  <section id="tabb" class="taba m_a_b">
    <div class="m_a_c">
      <div class="tab_left">
        <div class="tab_left_top">2F&nbsp;&nbsp;电脑数码</div>
        <div class="tab_left_bottom">
          <a href=""></a>
          <ul style="height: 0.32rem;">
            <li><a href="">手机</a><i>&frasl;</i></li>
            <li><a href="">充值</a><i>&frasl;</i></li>
            <li><a href="">淘实惠</a><i class="dphases">&frasl;</i></li>
            <li><a href="" class="dphases">领劵</a></li>
          </ul>
          <div>
            <a href="">赖沛钊看</a>
            <a href="">赖沛卡</a>
            <a href="">赖沛钊卡</a>
            <a href="">赖沛钊看</a>
            <a href="">赖</a>
            <a href="">赖沛钊卡</a>
            <a href="">赖沛钊看kskskks</a>
            <a href="">赖沛钊卡</a>

            <a href="">赖沛钊卡</a>
            <a href="">赖沛钊看</a>
            <a href="" class="dphases">赖沛钊卡</a>
            <a href="" class="dphases">赖沛钊卡</a>
            <a href="" class="dphases">赖沛钊看</a>
            <a href="" class="dphases">赖沛钊卡</a>
            <a href="" class="dphases">赖沛钊卡</a>


          </div>
        </div>
      </div>
      <div class="tab_right">
        <ul class="tab_list">
           <?php
                $link=@mysql_connect('localhost','root','') or die('数据库连接失败');
                mysql_select_db('data') or die('数据表连接失败');
                mysql_query('set names utf8');
                $rs=mysql_query("select * from tablist where floor='2'");
                while($rows=mysql_fetch_assoc($rs))
                {
                  echo '<li class="'.$rows['classname'].'">'.$rows['name'].'</li>';
                        
                }
                mysql_free_result($rs);
                mysql_close($link);    
            ?>

           <!--  <li class="hover">精品热卖</li>
            <li>时尚新品</li>
            <li>畅销低价</li>
            <li>二手优品</li>
            <li>精选单品</li>
            <li>精选单品</li>
            <li>二手优品</li> -->
        </ul>
        <ul class="tab_content">
            <li style="background-color:cornflowerblue;">

              <div class="tab_conter_banner">
                <div class="tab_wrap" style="left: -3.9rem">
                  <a href=""><img src="img/tab/1_3.jpg" alt=""></a>
                  <a href=""><img src="img/tab/1_1.jpg" alt=""></a>
                  <a href=""><img src="img/tab/1_2.jpg" alt=""></a>
                  <a href=""><img src="img/tab/1_3.jpg" alt=""></a>
                  <a href=""><img src="img/tab/1_1.jpg" alt=""></a>
                </div>
                <div class="tab_conter_button">
                  <span class="on">&nbsp;</span>
                  <span>&nbsp;</span>
                  <span>&nbsp;</span>           
                </div>
                <a href="javascript:;" rel="external nofollow" class="tab_a tab_a_left">&lt;</a>
                <a href="javascript:;" rel="external nofollow" class="tab_a tab_a_right">&gt;</a>
              </div>
              <?php
                $link=@mysql_connect('localhost','root','') or die('数据库连接失败');
                mysql_select_db('data') or die('数据表连接失败');
                mysql_query('set names utf8');
                $rs=mysql_query("select * from tab where label='1' and floor='2'");
                while($rows=mysql_fetch_assoc($rs))
                {
                  echo '<a href="" class="tab_mobile"><img src="img/tab/'.$rows['address'].'" alt=""></a>';
                        
                }
                mysql_free_result($rs);
                mysql_close($link);
                
                
                ?>




            </li>
            <li style="display: none;background-color: burlywood;">
              <?php
                $link=@mysql_connect('localhost','root','') or die('数据库连接失败');
                mysql_select_db('data') or die('数据表连接失败');
                mysql_query('set names utf8');
                $rs=mysql_query("select * from tab where floor='2' and label='2'");
                while($rows=mysql_fetch_assoc($rs))
                {
                  echo '<a href="" class="tab_tena">';
                          echo '<img src="img/tab/'.$rows['address'].'" alt="">';
                          echo '<p class="p_name">'.$rows['textone'].'</p>';
                          echo '<p class="p_price">'.$rows['texttwo'].'</p>';
                          echo '</a>';
                        
                }
                mysql_free_result($rs);
                mysql_close($link);
                    
              
              ?>     
            </li>
            <li style="display: none;background-color:mediumaquamarine;">
              <?php
                $link=@mysql_connect('localhost','root','') or die('数据库连接失败');
                mysql_select_db('data') or die('数据表连接失败');
                mysql_query('set names utf8');
                $rs=mysql_query("select * from tab where floor='2' and label='3'");
                while($rows=mysql_fetch_assoc($rs))
                {
                  echo '<a href="" class="tab_tena">';
                          echo '<img src="img/tab/'.$rows['address'].'" alt="">';
                          echo '<p class="p_name">'.$rows['textone'].'</p>';
                          echo '<p class="p_price">'.$rows['texttwo'].'</p>';
                          echo '</a>';
                        
                }
                mysql_free_result($rs);
                mysql_close($link);
                    
              
              ?>     
              

            </li>
            <li style="display: none;background-color: burlywood;">
              <?php
                $link=@mysql_connect('localhost','root','') or die('数据库连接失败');
                mysql_select_db('data') or die('数据表连接失败');
                mysql_query('set names utf8');
                $rs=mysql_query("select * from tab where floor='2' and label='4'");
                while($rows=mysql_fetch_assoc($rs))
                {
                  echo '<a href="" class="tab_tena">';
                          echo '<img src="img/tab/'.$rows['address'].'" alt="">';
                          echo '<p class="p_name">'.$rows['textone'].'</p>';
                          echo '<p class="p_price">'.$rows['texttwo'].'</p>';
                          echo '</a>';
                        
                }
                mysql_free_result($rs);
                mysql_close($link);
                    
              
              ?>     
              
            </li>
            <li style="display: none;background-color:mediumaquamarine;">
              <?php
                $link=@mysql_connect('localhost','root','') or die('数据库连接失败');
                mysql_select_db('data') or die('数据表连接失败');
                mysql_query('set names utf8');
                $rs=mysql_query("select * from tab where floor='2' and label='5'");
                while($rows=mysql_fetch_assoc($rs))
                {
                  echo '<a href="" class="tab_tena">';
                          echo '<img src="img/tab/'.$rows['address'].'" alt="">';
                          echo '<p class="p_name">'.$rows['textone'].'</p>';
                          echo '<p class="p_price">'.$rows['texttwo'].'</p>';
                          echo '</a>';
                        
                }
                mysql_free_result($rs);
                mysql_close($link);
                    
              
              ?>     
             
            </li>
            <li style="display: none;background-color:mediumaquamarine;">
              <?php
                $link=@mysql_connect('localhost','root','') or die('数据库连接失败');
                mysql_select_db('data') or die('数据表连接失败');
                mysql_query('set names utf8');
                $rs=mysql_query("select * from tab where floor='2' and label='6'");
                while($rows=mysql_fetch_assoc($rs))
                {
                  echo '<a href="" class="tab_tena">';
                          echo '<img src="img/tab/'.$rows['address'].'" alt="">';
                          echo '<p class="p_name">'.$rows['textone'].'</p>';
                          echo '<p class="p_price">'.$rows['texttwo'].'</p>';
                          echo '</a>';
                        
                }
                mysql_free_result($rs);
                mysql_close($link);
                    
              
              ?>     
              
            </li>
            <li style="display: none;background-color:mediumaquamarine;">
              <?php
                  $link=@mysql_connect('localhost','root','') or die('数据库连接失败');
                  mysql_select_db('data') or die('数据表连接失败');
                  mysql_query('set names utf8');
                  $rs=mysql_query("select * from tab where floor='2' and label='7'");
                  while($rows=mysql_fetch_assoc($rs))
                  {
                    echo '<a href="" class="tab_tena">';
                            echo '<img src="img/tab/'.$rows['address'].'" alt="">';
                            echo '<p class="p_name">'.$rows['textone'].'</p>';
                            echo '<p class="p_price">'.$rows['texttwo'].'</p>';
                            echo '</a>';
                          
                  }
                  mysql_free_result($rs);
                  mysql_close($link);
                      
                
                ?>     
              
            </li>
        </ul>
        <a href="javascript:;" rel="external nofollow" class="tab_arrow" style="display: none;">&gt;</a>
      </div>
     
    </div>
  </section>

  <section id="tabc" class="taba m_a_b">
    <div class="m_a_c">
      <div class="tab_left">
        <div class="tab_left_top">3F&nbsp;&nbsp;家用电器</div>
        <div class="tab_left_bottom">
          <a href=""></a>
          <ul style="height: 0.32rem;">
            <li><a href="">手机</a><i>&frasl;</i></li>
            <li><a href="">充值</a><i>&frasl;</i></li>
            <li><a href="">淘实惠</a><i class="dphases">&frasl;</i></li>
            <li><a href="" class="dphases">领劵</a></li>
          </ul>
          <div>
            <a href="">赖沛钊看</a>
            <a href="">赖沛卡</a>
            <a href="">赖沛钊卡</a>
            <a href="">赖沛钊看</a>
            <a href="">赖</a>
            <a href="">赖沛钊卡</a>
            <a href="">赖沛钊看kskskks</a>
            <a href="">赖沛钊卡</a>

            <a href="">赖沛钊卡</a>
            <a href="">赖沛钊看</a>
            <a href="" class="dphases">赖沛钊卡</a>
            <a href="" class="dphases">赖沛钊卡</a>
            <a href="" class="dphases">赖沛钊看</a>
            <a href="" class="dphases">赖沛钊卡</a>
            <a href="" class="dphases">赖沛钊卡</a>


          </div>
        </div>
      </div>
      <div class="tab_right">
        <ul class="tab_list">
           <?php
                $link=@mysql_connect('localhost','root','') or die('数据库连接失败');
                mysql_select_db('data') or die('数据表连接失败');
                mysql_query('set names utf8');
                $rs=mysql_query("select * from tablist where floor='3'");
                while($rows=mysql_fetch_assoc($rs))
                {
                  echo '<li class="'.$rows['classname'].'">'.$rows['name'].'</li>';
                        
                }
                mysql_free_result($rs);
                mysql_close($link);    
            ?>
           <!--  <li class="hover">精品热卖</li>
            <li>时尚新品</li>
            <li>畅销低价</li>
            <li>二手优品</li>
            <li>精选单品</li>
            <li>精选单品</li>
            <li>二手优品</li> -->
        </ul>
        <ul class="tab_content">
            <li style="background-color:cornflowerblue;">

              <div class="tab_conter_banner">
                <div class="tab_wrap" style="left: -3.9rem">
                  <a href=""><img src="img/tab/1_3.jpg" alt=""></a>
                  <a href=""><img src="img/tab/1_1.jpg" alt=""></a>
                  <a href=""><img src="img/tab/1_2.jpg" alt=""></a>
                  <a href=""><img src="img/tab/1_3.jpg" alt=""></a>
                  <a href=""><img src="img/tab/1_1.jpg" alt=""></a>
                </div>
                <div class="tab_conter_button">
                  <span class="on">&nbsp;</span>
                  <span>&nbsp;</span>
                  <span>&nbsp;</span>           
                </div>
                <a href="javascript:;" rel="external nofollow" class="tab_a tab_a_left">&lt;</a>
                <a href="javascript:;" rel="external nofollow" class="tab_a tab_a_right">&gt;</a>
              </div>
               <?php
                $link=@mysql_connect('localhost','root','') or die('数据库连接失败');
                mysql_select_db('data') or die('数据表连接失败');
                mysql_query('set names utf8');
                $rs=mysql_query("select * from tab where label='1' and floor='3'");
                while($rows=mysql_fetch_assoc($rs))
                {
                  echo '<a href="" class="tab_mobile"><img src="img/tab/'.$rows['address'].'" alt=""></a>';
                        
                }
                mysql_free_result($rs);
                mysql_close($link);
                
                
                ?>





            </li>
            <li style="display: none;background-color: burlywood;">
              <?php
                $link=@mysql_connect('localhost','root','') or die('数据库连接失败');
                mysql_select_db('data') or die('数据表连接失败');
                mysql_query('set names utf8');
                $rs=mysql_query("select * from tab where floor='3' and label='2'");
                while($rows=mysql_fetch_assoc($rs))
                {
                  echo '<a href="" class="tab_tena">';
                          echo '<img src="img/tab/'.$rows['address'].'" alt="">';
                          echo '<p class="p_name">'.$rows['textone'].'</p>';
                          echo '<p class="p_price">'.$rows['texttwo'].'</p>';
                          echo '</a>';
                        
                }
                mysql_free_result($rs);
                mysql_close($link);
                    
              
              ?>     
              
              
            </li>
            <li style="display: none;background-color:mediumaquamarine;">
              <?php
                $link=@mysql_connect('localhost','root','') or die('数据库连接失败');
                mysql_select_db('data') or die('数据表连接失败');
                mysql_query('set names utf8');
                $rs=mysql_query("select * from tab where floor='3' and label='3'");
                while($rows=mysql_fetch_assoc($rs))
                {
                  echo '<a href="" class="tab_tena">';
                          echo '<img src="img/tab/'.$rows['address'].'" alt="">';
                          echo '<p class="p_name">'.$rows['textone'].'</p>';
                          echo '<p class="p_price">'.$rows['texttwo'].'</p>';
                          echo '</a>';
                        
                }
                mysql_free_result($rs);
                mysql_close($link);
                    
              
              ?>     
              
            </li>
            <li style="display: none;background-color: burlywood;">
             <?php
                $link=@mysql_connect('localhost','root','') or die('数据库连接失败');
                mysql_select_db('data') or die('数据表连接失败');
                mysql_query('set names utf8');
                $rs=mysql_query("select * from tab where floor='3' and label='4'");
                while($rows=mysql_fetch_assoc($rs))
                {
                  echo '<a href="" class="tab_tena">';
                          echo '<img src="img/tab/'.$rows['address'].'" alt="">';
                          echo '<p class="p_name">'.$rows['textone'].'</p>';
                          echo '<p class="p_price">'.$rows['texttwo'].'</p>';
                          echo '</a>';
                        
                }
                mysql_free_result($rs);
                mysql_close($link);
                    
              
              ?>     
              
            </li>
            <li style="display: none;background-color:mediumaquamarine;">
              <?php
                $link=@mysql_connect('localhost','root','') or die('数据库连接失败');
                mysql_select_db('data') or die('数据表连接失败');
                mysql_query('set names utf8');
                $rs=mysql_query("select * from tab where floor='3' and label='5'");
                while($rows=mysql_fetch_assoc($rs))
                {
                  echo '<a href="" class="tab_tena">';
                          echo '<img src="img/tab/'.$rows['address'].'" alt="">';
                          echo '<p class="p_name">'.$rows['textone'].'</p>';
                          echo '<p class="p_price">'.$rows['texttwo'].'</p>';
                          echo '</a>';
                        
                }
                mysql_free_result($rs);
                mysql_close($link);
                    
              
              ?>     
              
            </li>
            <li style="display: none;background-color:mediumaquamarine;">
              <?php
                $link=@mysql_connect('localhost','root','') or die('数据库连接失败');
                mysql_select_db('data') or die('数据表连接失败');
                mysql_query('set names utf8');
                $rs=mysql_query("select * from tab where floor='3' and label='6'");
                while($rows=mysql_fetch_assoc($rs))
                {
                  echo '<a href="" class="tab_tena">';
                          echo '<img src="img/tab/'.$rows['address'].'" alt="">';
                          echo '<p class="p_name">'.$rows['textone'].'</p>';
                          echo '<p class="p_price">'.$rows['texttwo'].'</p>';
                          echo '</a>';
                        
                }
                mysql_free_result($rs);
                mysql_close($link);
                    
              
              ?>     
              
            </li>
            <li style="display: none;background-color:mediumaquamarine;">
              <?php
                $link=@mysql_connect('localhost','root','') or die('数据库连接失败');
                mysql_select_db('data') or die('数据表连接失败');
                mysql_query('set names utf8');
                $rs=mysql_query("select * from tab where floor='3' and label='7'");
                while($rows=mysql_fetch_assoc($rs))
                {
                  echo '<a href="" class="tab_tena">';
                          echo '<img src="img/tab/'.$rows['address'].'" alt="">';
                          echo '<p class="p_name">'.$rows['textone'].'</p>';
                          echo '<p class="p_price">'.$rows['texttwo'].'</p>';
                          echo '</a>';
                        
                }
                mysql_free_result($rs);
                mysql_close($link);
                    
              
              ?>     
              
            </li>
        </ul>
        <a href="javascript:;" rel="external nofollow" class="tab_arrow" style="display: none;">&gt;</a>
      </div>
     
    </div>
  </section>

   <br>
      <br>
      <br>
      <br>
      <br>
      <br>
      <br>
      <br>
      <br>
      <br>   
</div>
  






















<script src="js/banner.js"></script>
<script src="js/tab.js"></script>
<script src="js/taba.js"></script>
<script src="js/denglv.js"></script>
</body>  
</html>  