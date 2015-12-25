<?php if (!defined('THINK_PATH')) exit();?><html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title><?php echo ($thisForm["name"]); ?></title>
<meta name="viewport" content="width=device-width,height=device-height,inital-scale=1.0,maximum-scale=1.0,user-scalable=no;">
<meta name="apple-mobile-web-app-capable" content="yes">
<meta name="apple-mobile-web-app-status-bar-style" content="black">
<meta name="format-detection" content="telephone=no">
<link href="<?php echo RES;?>/css/style/css/hotels.css" rel="stylesheet" type="text/css">
<script src="<?php echo RES;?>/css/style/js/jquery.min.js" type="text/javascript"></script>
<script type="text/javascript" src="<?php echo $staticFilePath;?>/js/main.js"></script>

</head>

<body id="wrap">
<style>
.deploy_ctype_tip{z-index:1001;width:100%;text-align:center;position:fixed;top:50%;margin-top:-23px;left:0;}.deploy_ctype_tip p{display:inline-block;padding:13px 24px;border:solid #d6d482 1px;background:#f5f4c5;font-size:16px;color:#8f772f;line-height:18px;border-radius:3px;}
</style>
<div class="banner">
<div id="wrapper">
<div id="scroller">
<ul id="thelist">
               
<li><p><?php echo ($thisForm["name"]); ?></p>

<?php if($thisForm['logourl'] != ''): ?><a href="<?php echo U('Selfform/detail',array('token'=>$token,'id'=>$thisForm['id'],'wecha_id'=>$wecha_id));?>">
<img src="<?php echo ($thisForm["logourl"]); ?>" alt="<?php echo ($thisForm["name"]); ?>" style="width:100%"/></a><?php endif; ?>

</li>
 

</ul>
</div>
</div>

<div class="clr"></div>
</div>


<div class="cardexplain">




<!--intro-->
<ul class="round">
<li>
<h2>详细</h2>
<div class="text">
<?php echo ($thisForm['content']); ?>
</div>
</li>
<li><a href="<?php echo U('Selfform/index',array('token'=>$token,'id'=>$thisForm['id'],'wecha_id'=>$wecha_id));?>"><span style="color:#666">返回</span></a></li>
</ul>
</div>

<script type="text/javascript">
window.shareData = {  
            "moduleName":"Selfform",
            "moduleID":"<?php echo ($thisForm["id"]); ?>",
            "imgUrl": "<?php echo ($thisForm["logourl"]); ?>", 
            "sendFriendLink": "<?php echo ($f_siteUrl); echo U('Selfform/index',array('token'=>$token,'id'=>$thisForm['id']));?>",
            "tTitle": "<?php echo ($thisForm["name"]); ?>",
            "tContent": ""
};
</script>
<?php echo ($shareScript); ?>
</body>
</html>