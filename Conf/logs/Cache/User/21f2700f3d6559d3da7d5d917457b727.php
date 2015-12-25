<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>微信公众平台源码,微信机器人源码,微信自动回复源码 PigCms多用户微信营销系统</title>
<meta http-equiv="MSThemeCompatible" content="Yes" />
<link rel="stylesheet" type="text/css" href="<?php echo RES;?>/css/style_2_common.css?BPm" />
<script src="<?php echo RES;?>/js/common.js" type="text/javascript"></script>
<link href="<?php echo RES;?>/css/style.css" rel="stylesheet" type="text/css" />
 <script src="<?php echo STATICS;?>/jquery-1.4.2.min.js" type="text/javascript"></script>
<script type="text/javascript" src="http://api.map.baidu.com/api?v=2.0&ak=<?php echo $apikey;?>"></script>
 <link rel="stylesheet" type="text/css" href="<?php echo RES;?>/css/cymain.css" />
 <script src="/tpl/static/artDialog/jquery.artDialog.js?skin=default"></script>
<script src="/tpl/static/artDialog/plugins/iframeTools.js"></script>
<style>
body{line-height:180%;}
ul.modules li{padding:4px 10px;margin:4px;background:#efefef;float:left;width:27%;}
ul.modules li div.mleft{float:left;width:40%}
ul.modules li div.mright{float:right;width:55%;text-align:right;}
</style>
</head>
<body style="background:#fff;padding:20px 20px;">
<div style="background:#fefbe4;border:1px solid #f3ecb9;color:#993300;padding:10px;margin-bottom:5px;">使用方法：点击对应内容后面的“选中”即可。</div>
<h4><?php echo ($moduleName); ?>列表</h4>
<table class="ListProduct" border="0" cellSpacing="0" cellPadding="0" width="100%">
<thead>
<tr>
<th>标题</th>
<th style=" width:80px;">操作 <span class="tooltips" ><img src="<?php echo RES;?>/images/price_help.png" align="absmiddle" /><span>
<p>点击“选中”即可</p>
</span></span></th>
</tr>
</thead>
<?php if(is_array($list)): $i = 0; $__LIST__ = $list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$m): $mod = ($i % 2 );++$i;?><tr><td><?php echo ($m["name"]); ?></td><td class="norightborder"><a href="###" onclick="returnHomepage(<?php echo ($m["id"]); ?>,'<?php echo ($m["name"]); ?>','<?php echo ($m["pic"]); ?>','<?php echo ($m["info"]); ?>')">选中</a></td></tr><?php endforeach; endif; else: echo "" ;endif; ?>
</table>
<div class="footactions" style="padding-left:10px">
  <div class="pages"><?php echo ($page); ?></div>
</div>
<script>
var titledom=art.dialog.data('titledom');
var imgids=art.dialog.data('imgids');
// 返回数据到主页面
function returnHomepage(id,title,pic,info){
	var origin = artDialog.open.origin;
	var dom = origin.document.getElementById(titledom);
	var imgidsdom = origin.document.getElementById(imgids);
	var multinews= origin.document.getElementById(art.dialog.data('multinews'));
	var singlenews= origin.document.getElementById(art.dialog.data('singlenews'));
	var multione= origin.document.getElementById(art.dialog.data('multione'));
	var js_appmsg_preview= origin.document.getElementById(art.dialog.data('js_appmsg_preview'));
	//dom.value+=','+url;
	imgCount=imgidsdom.value.split(',').length-1;
	//
	dom.innerHTML='<div class="mediaPanel"><div class="mediaHead"><span class="title" id="zbt">'+title+'</span><span class="time"><?php echo date('Y-m-d',time());?></span><div class="clr"></div></div><div class="mediaImg"><img id="suicaipic1" src="'+pic+'"></div><div class="mediaContent mediaContentP"><p id="zinfo">'+info+'</p></div><div class="mediaFooter"><span class="mesgIcon right"></span><span style="line-height:50px;" class="left">查看全文</span><div class="clr"></div></div></div>';
	
	if(multione.innerHTML==''){
		singlenews.style.display="";
		multinews.style.display="none";
		
		multione.innerHTML=' <h4 class="appmsg_title"><a href="javascript:void(0);" onClick="return false;" target="_blank">'+title+'</a></h4><div class="appmsg_thumb_wrp"><img style="border:1px solid #ddd" class="js_appmsg_thumb appmsg_thumb" src="'+pic+'"><i class="appmsg_thumb default" style="background:url('+pic+');background-size:100% 100%">&nbsp;</i></div>';
		
	}else{
		singlenews.style.display="none";
		multinews.style.display="";
		js_appmsg_preview.innerHTML=js_appmsg_preview.innerHTML+'<div id="appmsgItem4" data-fileid="" data-id="4" class="appmsg_item js_appmsg_item "><img class="js_appmsg_thumb appmsg_thumb" src="'+pic+'"><i class="appmsg_thumb default" style="background:url('+pic+');background-size:100% 100%">&nbsp;</i><h4 class="appmsg_title"><a onClick="return false;" href="javascript:void(0);" target="_blank">'+title+'</a></h4></div>';
	}
	dom.style.display="";
	imgidsdom.value+=','+id;
	setTimeout("art.dialog.close()", 100 )
}
</script>
</body>
</html>