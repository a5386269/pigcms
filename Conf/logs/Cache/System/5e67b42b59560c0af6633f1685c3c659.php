<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>站点配置</title>
<link href="<?php echo RES;?>/images/main.css" type="text/css" rel="stylesheet">
<link href="<?php echo RES;?>/images/jquery-1.7.2.min.js" type="text/css" rel="stylesheet">
<link href="<?php echo RES;?>/images/jquery.form.js" type="text/css" rel="stylesheet">
<meta http-equiv="x-ua-compatible" content="ie=7" />
</head>
<body class="warp">
<style>
.set_top{background:url('<?php echo RES;?>/images/set_top.png');height:60px;}
.set_top li{font-weight: bold;float:left;width:98px;line-height:60px;text-align: center;background:url('<?php echo RES;?>/images/set_top_li.png');}
#set_top_li_bg{background:url('<?php echo RES;?>/images/set_top_li_hover.png');}
</style>
<div class="set_top">
	<li id="set_top_li_bg"><a href="/index.php?g=System&amp;m=Site&amp;a=index&amp;pid=6&amp;level=3">基本信息设置</a></li><li><a href="/index.php?g=System&amp;m=Site&amp;a=safe&amp;pid=6&amp;level=3">安全设置</a></li><li><a href="/index.php?g=System&amp;m=Site&amp;a=email&amp;pid=6&amp;level=3">邮箱设置</a></li><li><a href="/index.php?g=System&amp;m=Site&amp;a=upfile&amp;pid=6&amp;level=3">附件设置</a></li><li><a href="/index.php?g=System&amp;m=Site&amp;a=alipay&amp;pid=6&amp;level=3">在线支付接口</a></li>
	
<li><a href="/index.php?g=System&amp;m=Site&amp;a=sms&amp;pid=6&amp;level=3">短信管理(内测)</a></li>
<li><a href="/index.php?g=System&amp;m=Site&amp;a=qianmoban&amp;pid=6&amp;level=3">模版管理</a></li>	
	
	</div>
<div id="artlist">
<table width="100%" border="0" cellspacing="0" cellpadding="0" id="addn">

<style type="text/css">
.select_style {width:270px; height:30px; overflow:hidden; background-color: #b2aba7;);
border:1px solid #ccc;
-moz-border-radius: 5px; /* Gecko browsers */
-webkit-border-radius: 5px; /* Webkit browsers */
border-radius:5px;
}
.select_style select { padding:5px; background:transparent; width:268px; font-size: 16px; border:none; height:30px;
-webkit-appearance: none; /*for Webkit browsers*/
}
</style>

 <form id="myform" action="<?php echo U('Site/qianmoban_up');?>" method="post">

    <tr> 
      <td width="10%"  height="48"  align="right"><strong>选择前台模版：</strong></td>
      <td  align="left"> 

        <script language="JavaScript" type="text/javascript" >
        function setBeerIcon() {
          var rtl1=document.getElementById("beer");
          // alert(rtl1.options[rtl1.selectedIndex].value);
          beerIcon.src = "<?php echo RES;?>/images/qianmoban/"+rtl1.options[rtl1.selectedIndex].value+".png";
        }
        </script>



      <div class="select_style">
        <select name="beer" id="beer" onChange="setBeerIcon();">
        <option  value="zise">微盟风格</option>
           <option value="qianlan">管家风格</option>
           <option value="baiyin">艾米风格</option>
		   <option value="weiwin">微赢风格</option>
           <option value="weixiang">微享风格</option>
		   <option value="pigcms">小猪风格</option>
		    <option value="weiyun">微云风格</option>
			 <option value="qingang">专属风格(制作中)</option>
			  <option value="shanshan">微擎风格</option>
			   <option value="tianshi">微三云风格(制作中)</option>
			    <option value="weibao">超酷风格</option>
        </select>
        </div>


    </td>
      <td width="82%"  align="left">&nbsp;</td>

      <img  border="0" src="<?php echo RES;?>/images/qianmoban/pigcms.png" id="beerIcon" />


    <tr> 


      <td height="48" colspan="3">
      <div id="addkey"></div>
      <div style="padding-left:100px;">
      <input type="submit" value="保存设置" />
      </div>
    </td>
    </tr>


  </form>




</table><br />
<br />
<br />

</div>
</body>
</html>