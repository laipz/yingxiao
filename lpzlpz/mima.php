<html>
<head>
<title></title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" /> 
</head>
 
 
 
 
 
 
<body>
	<?php
		 $sysloginname = $_REQUEST["sysloginname"];
		 $link=@mysql_connect('localhost','root','') or die('数据库连接失败');
		        mysql_select_db('data') or die('数据表连接失败');
		        mysql_query('set names utf8');
		        $rs=mysql_query("select * from user where sysloginname='$sysloginname'");
		        $rows=mysql_fetch_assoc($rs);
		        echo ' <span>你的密码是：'.$rows['sysloginpass'].'</span>';
		        mysql_free_result($rs);
		        mysql_close($link);
	?>  	
</body>
</html>
