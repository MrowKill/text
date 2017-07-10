<?php 
	session_start();
?>
<!DOCTYPE HTML>
<html>
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<title>弹幕视频</title>
<meta name="keywords" content="播放器" />
<meta name="description" content="" />
<link rel="stylesheet" href="css/main.css">
<link rel="stylesheet" href="css/comment.css">
<link type="text/css" rel="stylesheet" href="css/common.css">
<link type="text/css" rel="stylesheet" href="css/talk.css">
<style type="text/css">
.demo{width:95%;margin:10px auto 10px auto;}
</style>

</head>

<body>

<div class="headerBox">
	<div class="header comWidth">
		<div class="logo fl">
			<a href="index.php"><img style="width: 140px;height: 30px;" src="images/HCFUN_logo.jpg" alt="logo"></a>
		</div>
		<div class="searchBox fl">
			<input type="text" class="search_input fl">
			<input type="button" class="search_btn fl">
			<div class="search_show">
				<ul class="search_list fl">
					<li><a href="#">Hcfun</a><span>更新至第17集</span></li>
					<li><a href="#">Hcfun</a><span>更新至第17集</span></li>
					<li><a href="#">Hcfun</a><span>更新至第17集</span></li>
				</ul>
				<dl class="imgShow fl">
					<dt><a href="#"><img src="images/test.jpg" alt=""></a></dt>
					<dd>
						<div class="imgShowTxt">
							<h3>综艺</h3>
							<p>主持人:尼克卡</p>
							<p>地区:美国</p>
						</div>
						<a href="#" class="imgShow_play"></a>
					</dd>
				</dl>
			</div>
		</div>
		<ul class="menu fr">
			<li>
				<div class="menuTxt login_session">
					<a href="login.html" class="icon login">登录</a><span>|</span><a href="register.html">注册</a>
				</div>
				<div class="login_success">
					<img src="<?php echo $_SESSION['IMG'] ?>" alt="head"/><span><?php echo $_SESSION['U'] ?></span>
				</div>
			</li>
			<li>
				<div class="menuTxt">
					<a href="#" class="icon record">观看记录</a>
				</div>
				<div class="menuShou record_left">
					<div class="menuCont">
						<div class="record_item">
							<div class="record_title">
								<span>一周内</span><a href="#">管理观看记录</a>
							</div>
							<div class="record_video record_active">
								<h3 class="videoTitle"><a href="#">xxxxxxxx</a><span class="del"></span></h3>
								<div class="rate pc clearfix"><span>看到50%</span><a href="#">继续看</a></div>
							</div>
						</div>
						<div class="record_item">
							<div class="record_title">
								<span>一周内</span>
							</div>
							<div class="record_video">
								<h3 class="videoTitle"><a href="#">xxxxxxxxx</a><span class="del"></span></h3>
								<div class="rate pc clearfix"><span>看到50%</span><a href="#">继续看</a></div>
							</div>
							
							<div class="record_video">
								<h3 class="videoTitle"><a href="#">xxxxxxxxxx</a><span class="del"></span></h3>
								<div class="rate pc clearfix"><span>看到50%</span><a href="#">继续看</a></div>
							</div>
						</div>
						<div class="lookMore">
							<a href="#">查看更多</a>
						</div>
					</div>
				</div>
			</li>
			<li>
				<div class="menuTxt">
					<a href="#" class="icon upLoad">上传</a>
				</div>
				<div class="menuShou upload_left">
					<div class="menuCont menuCont_02">
						<ul class="userCont clearfix">
							<li class="icon upLoad"><a href="#">上传视频</a></li>
							<li class="icon guanli"><a href="#">视频管理</a></li>
							<li class="icon kongjian"><a href="#">我的空间</a></li>
							<li class="icon fenxiang"><a href="#">分享计划</a></li>
						</ul>
					</div>
				</div>
			</li>
		</ul>
	</div>
</div>
<div class="hr_19"></div>
<div class="navBox comWidth">
	<div class="navLeft fl">
		<ul class="nav fl">
			<li><a href="#">首页</a></li>
			<li><a href="#">电视剧</a></li>
			<li><a href="#" class="active">电影</a></li>
			<li><a href="#">综艺</a></li>
			<li><a href="#">音乐</a></li>
			<li><a href="#">动漫</a></li>
			<li><a href="#">全部</a></li>
		</ul>
		<ul class="nav fl font14">
			<li>
				<a href="#">资讯</a><span>•</span>
				<div class="navMenu">
					<a href="#">科技</a>
					<i class="triangle"></i>
				</div>
				<div class="navShow">
					<ul class="nav_list">
						<li><a href="#">教育</a></li>
						<li><a href="#">记录片</a></li>
						<li><a href="#">财经</a></li>
						<li><a href="#">体育</a></li>
						<li><a href="#">拍客</a></li>
					</ul>
				</div>
			</li>
			<li>
				<a href="#">娱乐</a><span>•</span>
				<div class="navMenu">
					<a href="#">搞笑</a>
					<i class="triangle"></i>
				</div>
				<div class="navShow">
					<ul class="nav_list">
						<li><a href="#">原创</a></li>
					</ul>
				</div>
			</li>
			<li>
				<a href="#">旅游</a><span>•</span>
				<div class="navMenu">
					<a href="#">母婴</a>
					<i class="triangle"></i>
				</div>
				<div class="navShow">
					<ul class="nav_list">
						<li><a href="#">时尚</a></li>
						<li><a href="#">游戏</a></li>
						<li><a href="#">汽车</a></li>
					</ul>
				</div>
			</li>
			<li>
				<a href="#">排行</a>
			</li>
		</ul>
	</div>
	<div class="navRight fr">
		<ul class="nav">
			<li><a href="#">个人中心</a></li>
			<li><a href="#">会员</a></li>
			<li><a href="#">APP下载</a></li>
		</ul>
	</div>
</div>
<div class="hr_20"></div>

<div class="video_title"><?php echo $_SESSION['s_v_name'] ?></div>
<!--<div class="video_lian" style="display: none;"><?php echo $_SESSION['s_v_link'] ?></div>-->

<!--播放器-->

<div id="main" style="width:90%">
	<div class="demo">
		<div id="danmup" style="margin:20px auto"></div>
	</div>
</div>

<!--评论区-->

<div class="g-container" id="box"></div>
<!--<div id="t_middle">
	<div id="t_top">
		<p id="t_title">您有什么想吐槽的吗？</p>
		<textarea id="t_input_text" maxlength="140" cols="70"></textarea>
		<div id="t_button">发布</div>
	</div>
	<div id="t_bottom">
	</div>
</div>-->

<div class="footer comWidth">
	<div class="footerLink clearfix">
		<ul>
			<li>资源</li>
			<li><a href="#">首页</a><a href="#">电视剧</a><a href="#">电影</a><a href="#">综艺</a><a href="#">视频</a></li>
			<li>社区</li>
			<li><a href="#">空间</a><a href="#">看吧</a></li>
		</ul>
		<ul>
			<li>分类</li>
			<li><a href="#">资讯</a><a href="#">拍客</a><a href="#">体育</a><a href="#">汽车</a><a href="#">科技</a><a href="#">财经</a></li>
			<li><a href="#">广告</a><a href="#">娱乐</a><a href="#">原创</a><a href="#">音乐</a><a href="#">游戏</a><a href="#">公益</a></li>
			<li><a href="#">生活</a><a href="#">时尚</a><a href="#">教育</a><a href="#">旅游</a><a href="#">搞笑</a></li>
		</ul>
		<ul>
			<li>软件</li>
			<li><a href="#">PC客户端</a></li>
			<li><a href="#">手机客户端</a></li>
			<li><a href="#">实验室</a></li>
		</ul>
		<ul>
			<li>支持</li>
			<li><a href="#">繁体版</a></li>
			<li><a href="#">在线反馈</a></li>
			<li><a href="#">帮助中心</a></li>
		</ul>
		<ul class="last2">
			<li>Hcfun集团</li>
			<li><a href="#">Hcfun Inc.</a></li>
			<li><a href="#">关于Hcfun</a></li>
			<li><a href="#">友情链接</a></li>
		</ul>
		<ul class="last">
			<li>Hcfun</li>
			<li><a href="#">Hcfun.com</a></li>
			<li><a href="#">Hcfun指数</a></li>
			<li><a href="#">工作机会</a></li>
		</ul>
		<ul>
			<li>Hcfun</li>
			<li><a href="#">Hcfun.com</a></li>
			<li><a href="#">Hcfun指数</a></li>
			<li><a href="#">工作机会</a></li>
		</ul>
	</div>
	<div class="footerInfo clearfix">
		<ul class="mr42">
			<li><a href="#">经营性网站备案信息</a></li>
			<li><a href="#">中国互联网诚信联盟</a></li>
			<li><a href="#">不良信息举报中心</a></li>
			<li><a href="#">北京互联网举报中心</a></li>
		</ul>
		<ul class="mr62">
			<li><a href="#">京ICP证060288号</a></li>
			<li><a href="#">网络视听许可证0108283号</a></li>
			<li><a href="#">网络110报警服务</a></li>
			<li><a href="#">北京12318文化市场举报热线</a></li>
		</ul>
		<ul>
			<li><a href="#">网络文化经营许可证</a>&nbsp;<span>文网文[2011]0088-037号</span></li>
			<li><a href="#">新出网证(京)字160号</a>&nbsp;<span>节目制作经营许可证京字670号</span></li>
			<li><a href="#">京卫审字[2009]6号</a>&nbsp;<span>京公网安备110000000017号</span></li>
			<li><span>药品服务许可证(京)-经营-2010-0048</span></li>
		</ul>
		<div class="download fr">
			<a href="#"><span>HcfunApp<br><i>扫描或点击下载</i></span></a>
		</div>
	</div>
	<p class="copyright">请使用者仔细阅读Hcfun<a href="#">使用协议</a>和<a href="#"><strong>版权声明</strong></a> Copyright<span>©</span>2017 Hcfun.com 版权所有</p>
</div>


<script src="js/jquery-2.1.4.min.js"></script>
<script src="js/jquery.shCircleLoader.js"></script>
<script src="js/jquery.danmu.js"></script>
<script src="js/main.js"></script>
<script src="js/jquery.cookie.js"></script>
<script src="js/pager.js"></script>
<script src="js/comment.js"></script>
<script>

$("#danmup").DanmuPlayer({
	src: "<?php echo $_SESSION['s_v_link'] ?>",
    height: "480px", //区域的高度
    width: "800px" //区域的宽度
    ,urlToGetDanmu:"getData.php"
    ,urlToPostDanmu:"sendData.php"
  });

  $("#danmup .danmu-div").danmu("addDanmu",[
    { "text":"这是滚动弹幕" ,color:"white",size:1,position:0,time:2}
    ,{ "text":"我是帽子绿" ,color:"green",size:1,position:0,time:3}
    ,{ "text":"哈哈哈啊哈" ,color:"#f30",size:1,position:0,time:10}
    ,{ "text":"这是黄色的弹幕" ,color:"yellow" ,size:1,position:0,time:3}
    ,{ "text":"好快啊" , color:"red" ,size:1,position:0,time:19}
    ,{ "text":"大家好，我是打不死的小强" ,color:"orange",size:1,position:0,time:23}
  ])
  
var video = document.querySelector("video");
var ipt = document.getElementById("ipt");  

function setVol(){
	video.volume = ipt.value/10;
	if(video.volume == 0){
		video.muted = true;
	}else{
		video.muted = false;
	}
}
setVol();

$(function(){
    Comment.allocate({
        parent: $('#box'),
        id: 0,
        getCmtUrl: './php/getcomment.php',
        setCmtUrl: './php/comment.php'
    })
});


if("<?php echo isset($_SESSION['U']) ?>"=="1"){
		$('.login_success').show();
	}else{
		$(".login_session").show();
	}

</script>

</body>
</html>
