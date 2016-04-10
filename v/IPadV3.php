<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
<title>极酷阳光播放器(CuSunPlayerV2.0)</title>
<SCRIPT LANGUAGE=JavaScript>
<!--
function getLight(pars)
{	
	//alert("播放器模式参数值："+string+"");
	if(pars == "open")
	{
		close_light(this);
	}
	else
	{
		close_light(this);
	}
}


//兼容性
function thisMovie(movieName) {
    if (navigator.appName.indexOf("Microsoft") != -1) {
        return window[movieName]
    }
    else {
        return document[movieName]
    }
}

//-->
</SCRIPT> 

<style type="text/css">
<!--
.video { OVERFLOW: hidden; WIDTH: 100%; POSITION: relative}
.close_light_bg {DISPLAY: none; BACKGROUND: #000; FILTER: alpha(opacity = 85); LEFT: 0px; WIDTH: 100%; POSITION: absolute; TOP: 0px; HEIGHT: 100%; opacity: .85}
-->
</style>
</head>

<body>
<DIV class=close_light_bg id=close_light_bg></DIV>
<!--播放器/代码开始-->
<div class="video" id="CuPlayer" style="background:#000000; width:650px;">
<SCRIPT LANGUAGE=JavaScript>
<!--
var vID        = ""; 
var vWidth     = 650;
var vHeight    = 400;
var vFile      = "CuSunV2set.xml";
var vPlayer    = "player.swf?v=2.5";
var vMp4url    = "<?php echo $_GET["id"] ?>";
var vPic       = "images/startpic.jpg";
 
//-->
</SCRIPT> 
<script class="CuPlayerVideo" data-mce-role="CuPlayerVideo" type="text/javascript" src="Images/AsComV3.js"></script>
</div>
<SCRIPT language=javascript src="Images/jquery.js" type=text/javascript></SCRIPT> 
<SCRIPT language=javascript src="Images/action.js" type=text/javascript></SCRIPT>
<!--播放器/代码结束-->



<!-- help/End -->
</body>
</html>

