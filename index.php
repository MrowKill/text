<?php 
	session_start();
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Hcfun</title>
<meta name="author" content="">
<meta name="copyright" content="">
<link type="text/css" rel="stylesheet" href="css/common.css">
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
				<div class="menuTxt record_show">
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
				<div class="menuTxt up_show">
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
			<li><a href="#" class="active">首页</a></li>
			<li><a href="#">电视剧</a></li>
			<li><a href="#">电影</a></li>
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
<div class="main comWidth clearfix">
	<div class="leftArea fl">
		<div class="leftTop">
			<div class="imgList_b fl">
				<div class="imgItem">
					<a href="video.php"><img src="images/big1.jpg" alt=""></a>
				</div>
				<div class="imgItemTxt">
					<div class="play fl"><a href="#"></a></div>
					<div class="txt pl">
						<h3><a href="video.php">微软将在E3上公布神秘3A大作合作项目</a></h3>
						<p><span class="userName userIcon">Hcfun</span><span class="times timesIcon">104万</span><span class="discuss discussIcon">1,111</span></p>
					</div>
				</div>
			</div>
			<div class="leftSmImg fl">
				<div class="imgList imgline">
					<div class="smImg"><a href="#"><img src="images/big2.png" alt=""></a></div>
					<div class="smTxtBox">
						<p class="smTxt"><a href="#" class="txt_l">过肩视角游戏《轨道理论》</a></p>
					</div>
					<div class="shade_box">
						<div class="shade_cont">
							<div class="shade">
								<h3><a href="#">河南摔婴案公安局长被停职</a></h3>
								<p>女婴父母疑被重金封口<span class="times timesIcon fr">104万</span></p>
								<p><span class="userName userIcon">Hcfun</span></p>
								<a href="#" class="shade_play"></a>
							</div>
						</div>
					</div>
				</div>
				<div class="hr_20"></div>
				<div class="imgList imgline">
					<div class="smImg"><a href="#"><img src="images/big3.jpg" alt=""></a></div>
					<div class="smTxtBox">
						<p class="smTxt"><a href="#" class="txt_l">《神之战：穿越时空》</a></p>
					</div>
					<div class="shade_box">
						<div class="shade_cont">
							<div class="shade">
								<h3><a href="#">河南摔婴案公安局长被停职</a></h3>
								<p>女婴父母疑被重金封口<span class="times timesIcon fr">104万</span></p>
								<p><span class="userName userIcon">Hcfun</span></p>
								<a href="#" class="shade_play"></a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="leftBottom clearfix">
			<div class="imgList">
				<div class="smImg"><a href="#"><img src="images/big4.png" alt=""></a></div>
				<div class="smTxtBox">
					<p class="smTxt"><a href="#" class="txt_l">《监狱建筑师：移动版》</a></p>
				</div>
				<div class="shade_box">
					<div class="shade_cont">
						<div class="shade">
							<h3><a href="#">河南摔婴案公安局长被停职</a></h3>
							<p>女婴父母疑被重金封口<span class="times timesIcon fr">104万</span></p>
							<p><span class="userName userIcon">Hcfun</span></p>
							<a href="#" class="shade_play"></a>
						</div>
					</div>
				</div>
			</div>
			<div class="imgList">
				<div class="smImg"><a href="#"><img src="images/big5.jpg" alt=""></a></div>
				<div class="smTxtBox">
					<p class="smTxt"><a href="#" class="txt_l">《质量效应：仙女座》</a></p>
				</div>
				<div class="shade_box">
					<div class="shade_cont">
						<div class="shade">
							<h3><a href="#">河南摔婴案公安局长被停职</a></h3>
							<p>女婴父母疑被重金封口<span class="times timesIcon fr">104万</span></p>
							<p><span class="userName userIcon">Hcfun</span></p>
							<a href="#" class="shade_play"></a>
						</div>
					</div>
				</div>
			</div>
			<div class="imgList imgline">
				<div class="smImg"><a href="#"><img src="images/big6.jpg" alt=""></a></div>
				<div class="smTxtBox">
					<p class="smTxt"><a href="#" class="txt_l">假如A杖效果这样改</a></p>
				</div>
				<div class="shade_box">
					<div class="shade_cont">
						<div class="shade">
							<h3><a href="#">河南摔婴案公安局长被停职</a></h3>
							<p>女婴父母疑被重金封口<span class="times timesIcon fr">104万</span></p>
							<p><span class="userName userIcon">Hcfun</span></p>
							<a href="#" class="shade_play"></a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="ykAd fr">
		<div class="ykAd_310_110">
			<a href="#"><img src="images/icon/ad.jpg" alt=""></a>
		</div>
		<div class="videoAd">
			<div class="videoCont">
				最新推送
				<ul class="video_list">
					<?php
						$link=mysql_connect('localhost','root','')or die("数据库连接失败");
						//连接数据库
						mysql_select_db('shipin',$link);//选择数据库
						mysql_query("set names utf8");//设置编码格式
						
						$q="select * from video";//设置查询指令
						$result=mysql_query($q);//执行查询
						while($row=mysql_fetch_assoc($result))//将result结果集中查询结果取出一条
						{
						 echo "<li><a href='video.php'>".$row['video_name']."</a><span>".$row['video_link']."</span></li>";
						}
					?>
				</ul>
			</div>
			<div class="videoBar">
				请选择你喜欢的视频！
			</div>
		</div>
	</div>
</div>
<div class="hr_50"></div>
<div class="userCenter comWidth clearfix">
	<div class="comTitle clearfix">
		<h2 class="userCent_tit fl">个人中心</h2>
		<ul class="title_tab fl">
			<li class="active"><a href="#">为我推荐</a></li>
			<li><a href="#">观看记录</a></li>
			<li><a href="#">我的追剧</a></li>
			<li><a href="#">我的收藏</a></li>
			<li><a href="#">我的订阅</a></li>
		</ul>
	</div>
	<div class="userCenterBox">
		<div class="userList clearfix show">
			<div class="userLeft fl">
				<ul class="clearfix">
					<li>
						<div class="imgList">
							<div class="smImg"><a href="#"><img src="images/test2.jpg" alt=""></a></div>
							<div class="smTxtBox">
								<p class="smTxt smTxt_r"><span class="txt_r">30:22</span></p>
							</div>
						</div>
						<div class="userLink">
							<h3 class="user_tit"><a href="#">疯狂的天灾，东莞暴雨加龙卷风实拍</a></h3>
							<p class="notes">已在电脑上看过</p>
						</div>
					</li>
					<li>
						<div class="imgList">
							<div class="smImg"><a href="#"><img src="images/test2.jpg" alt=""></a></div>
							<div class="smTxtBox">
								<p class="smTxt smTxt_r"><span class="txt_r">30:22</span></p>
							</div>
						</div>
						<div class="userLink">
							<h3 class="user_tit"><a href="#">疯狂的天灾，东莞暴雨加龙卷风实拍</a></h3>
							<p class="notes">已在电脑上看过</p>
						</div>
					</li>
					<li>
						<div class="imgList">
							<div class="smImg"><a href="#"><img src="images/test2.jpg" alt=""></a></div>
							<div class="smTxtBox">
								<p class="smTxt smTxt_r"><span class="txt_r">30:22</span></p>
							</div>
						</div>
						<div class="userLink">
							<h3 class="user_tit"><a href="#">疯狂的天灾，东莞暴雨加龙卷风实拍</a></h3>
							<p class="notes">已在电脑上看过</p>
						</div>
					</li>
					<li>
						<div class="imgList">
							<div class="smImg"><a href="#"><img src="images/test2.jpg" alt=""></a></div>
							<div class="smTxtBox">
								<p class="smTxt smTxt_r"><span class="txt_r">30:22</span></p>
							</div>
						</div>
						<div class="userLink">
							<h3 class="user_tit"><a href="#">疯狂的天灾，东莞暴雨加龙卷风实拍</a></h3>
							<p class="notes">已在电脑上看过</p>
						</div>
					</li>
				</ul>
			</div>
			<a href="#" class="userMore fr">进入个人中心</a>
		</div>
		<div class="userList clearfix">
			<div class="userLeft fl">
				<ul class="clearfix">
					<li>
						<div class="imgList">
							<div class="smImg"><a href="#"><img src="images/test2.jpg" alt=""></a></div>
							<div class="smTxtBox">
								<p class="smTxt smTxt_r"><span class="txt_r">30:22</span></p>
							</div>
						</div>
						<div class="userLink">
							<h3 class="user_tit"><a href="#">疯狂的天灾，东莞暴雨加龙卷风实拍</a></h3>
							<p class="notes">已在电脑上看过</p>
						</div>
					</li>
					<li>
						<div class="imgList">
							<div class="smImg"><a href="#"><img src="images/test2.jpg" alt=""></a></div>
							<div class="smTxtBox">
								<p class="smTxt smTxt_r"><span class="txt_r">30:22</span></p>
							</div>
						</div>
						<div class="userLink">
							<h3 class="user_tit"><a href="#">疯狂的天灾，东莞暴雨加龙卷风实拍</a></h3>
							<p class="notes">已在电脑上看过</p>
						</div>
					</li>
					<li>
						<div class="imgList">
							<div class="smImg"><a href="#"><img src="images/test2.jpg" alt=""></a></div>
							<div class="smTxtBox">
								<p class="smTxt smTxt_r"><span class="txt_r">30:22</span></p>
							</div>
						</div>
						<div class="userLink">
							<h3 class="user_tit"><a href="#">疯狂的天灾，东莞暴雨加龙卷风实拍</a></h3>
							<p class="notes">已在电脑上看过</p>
						</div>
					</li>
					<li>
						<div class="imgList">
							<div class="smImg"><a href="#"><img src="images/test2.jpg" alt=""></a></div>
							<div class="smTxtBox">
								<p class="smTxt smTxt_r"><span class="txt_r">30:22</span></p>
							</div>
						</div>
						<div class="userLink">
							<h3 class="user_tit"><a href="#">疯狂的天灾，东莞暴雨加龙卷风实拍</a></h3>
							<p class="notes">已在电脑上看过</p>
						</div>
					</li>
				</ul>
			</div>
			<a href="#" class="userMore fr">观看记录</a>
		</div>
		<div class="userList clearfix">
			<div class="userLeft fl">
				<ul class="clearfix">
					<li>
						<div class="imgList">
							<div class="smImg"><a href="#"><img src="images/test2.jpg" alt=""></a></div>
							<div class="smTxtBox">
								<p class="smTxt smTxt_r"><span class="txt_r">30:22</span></p>
							</div>
						</div>
						<div class="userLink">
							<h3 class="user_tit"><a href="#">疯狂的天灾，东莞暴雨加龙卷风实拍</a></h3>
							<p class="notes">已在电脑上看过</p>
						</div>
					</li>
					<li>
						<div class="imgList">
							<div class="smImg"><a href="#"><img src="images/test2.jpg" alt=""></a></div>
							<div class="smTxtBox">
								<p class="smTxt smTxt_r"><span class="txt_r">30:22</span></p>
							</div>
						</div>
						<div class="userLink">
							<h3 class="user_tit"><a href="#">疯狂的天灾，东莞暴雨加龙卷风实拍</a></h3>
							<p class="notes">已在电脑上看过</p>
						</div>
					</li>
					<li>
						<div class="imgList">
							<div class="smImg"><a href="#"><img src="images/test2.jpg" alt=""></a></div>
							<div class="smTxtBox">
								<p class="smTxt smTxt_r"><span class="txt_r">30:22</span></p>
							</div>
						</div>
						<div class="userLink">
							<h3 class="user_tit"><a href="#">疯狂的天灾，东莞暴雨加龙卷风实拍</a></h3>
							<p class="notes">已在电脑上看过</p>
						</div>
					</li>
					<li>
						<div class="imgList">
							<div class="smImg"><a href="#"><img src="images/test2.jpg" alt=""></a></div>
							<div class="smTxtBox">
								<p class="smTxt smTxt_r"><span class="txt_r">30:22</span></p>
							</div>
						</div>
						<div class="userLink">
							<h3 class="user_tit"><a href="#">疯狂的天灾，东莞暴雨加龙卷风实拍</a></h3>
							<p class="notes">已在电脑上看过</p>
						</div>
					</li>
				</ul>
			</div>
			<a href="#" class="userMore fr">查看订阅</a>
		</div>
		<div class="userList clearfix">
			<div class="userLeft fl">
				<ul class="clearfix">
					<li>
						<div class="imgList">
							<div class="smImg"><a href="#"><img src="images/test2.jpg" alt=""></a></div>
							<div class="smTxtBox">
								<p class="smTxt smTxt_r"><span class="txt_r">30:22</span></p>
							</div>
						</div>
						<div class="userLink">
							<h3 class="user_tit"><a href="#">疯狂的天灾，东莞暴雨加龙卷风实拍</a></h3>
							<p class="notes">已在电脑上看过</p>
						</div>
					</li>
					<li>
						<div class="imgList">
							<div class="smImg"><a href="#"><img src="images/test2.jpg" alt=""></a></div>
							<div class="smTxtBox">
								<p class="smTxt smTxt_r"><span class="txt_r">30:22</span></p>
							</div>
						</div>
						<div class="userLink">
							<h3 class="user_tit"><a href="#">疯狂的天灾，东莞暴雨加龙卷风实拍</a></h3>
							<p class="notes">已在电脑上看过</p>
						</div>
					</li>
					<li>
						<div class="imgList">
							<div class="smImg"><a href="#"><img src="images/test2.jpg" alt=""></a></div>
							<div class="smTxtBox">
								<p class="smTxt smTxt_r"><span class="txt_r">30:22</span></p>
							</div>
						</div>
						<div class="userLink">
							<h3 class="user_tit"><a href="#">疯狂的天灾，东莞暴雨加龙卷风实拍</a></h3>
							<p class="notes">已在电脑上看过</p>
						</div>
					</li>
					<li>
						<div class="imgList">
							<div class="smImg"><a href="#"><img src="images/test2.jpg" alt=""></a></div>
							<div class="smTxtBox">
								<p class="smTxt smTxt_r"><span class="txt_r">30:22</span></p>
							</div>
						</div>
						<div class="userLink">
							<h3 class="user_tit"><a href="#">疯狂的天灾，东莞暴雨加龙卷风实拍</a></h3>
							<p class="notes">已在电脑上看过</p>
						</div>
					</li>
				</ul>
			</div>
			<a href="#" class="userMore fr">查看收藏</a>
		</div>
		<div class="userList clearfix">
			<div class="userLeft fl">
				<ul class="clearfix">
					<li>
						<div class="imgList">
							<div class="smImg"><a href="#"><img src="images/test2.jpg" alt=""></a></div>
							<div class="smTxtBox">
								<p class="smTxt smTxt_r"><span class="txt_r">30:22</span></p>
							</div>
						</div>
						<div class="userLink">
							<h3 class="user_tit"><a href="#">疯狂的天灾，东莞暴雨加龙卷风实拍</a></h3>
							<p class="notes">已在电脑上看过</p>
						</div>
					</li>
					<li>
						<div class="imgList">
							<div class="smImg"><a href="#"><img src="images/test2.jpg" alt=""></a></div>
							<div class="smTxtBox">
								<p class="smTxt smTxt_r"><span class="txt_r">30:22</span></p>
							</div>
						</div>
						<div class="userLink">
							<h3 class="user_tit"><a href="#">疯狂的天灾，东莞暴雨加龙卷风实拍</a></h3>
							<p class="notes">已在电脑上看过</p>
						</div>
					</li>
					<li>
						<div class="imgList">
							<div class="smImg"><a href="#"><img src="images/test2.jpg" alt=""></a></div>
							<div class="smTxtBox">
								<p class="smTxt smTxt_r"><span class="txt_r">30:22</span></p>
							</div>
						</div>
						<div class="userLink">
							<h3 class="user_tit"><a href="#">疯狂的天灾，东莞暴雨加龙卷风实拍</a></h3>
							<p class="notes">已在电脑上看过</p>
						</div>
					</li>
					<li>
						<div class="imgList">
							<div class="smImg"><a href="#"><img src="images/test2.jpg" alt=""></a></div>
							<div class="smTxtBox">
								<p class="smTxt smTxt_r"><span class="txt_r">30:22</span></p>
							</div>
						</div>
						<div class="userLink">
							<h3 class="user_tit"><a href="#">疯狂的天灾，东莞暴雨加龙卷风实拍</a></h3>
							<p class="notes">已在电脑上看过</p>
						</div>
					</li>
				</ul>
			</div>
			<a href="#" class="userMore fr">更多订阅</a>
		</div>
	</div>
</div>
<div class="hr_50"></div>
<div class="ykoriginal comWidth clearfix">
	<div class="comTitle clearfix">
		<ul class="title_tab fl title_tab_b">
			<li class="active"><a href="#">最佳原创</a></li>
			<li><a href="#">HC出品</a></li>
		</ul>
	</div>
	
	<div class="youkuOri">
		<div class="youkuOriCont clearfix show">
			<div class="leftArea fl">
			<div class="ykMt clearfix">
				<div class="ykArea">
				<div class="imgList">
					<div class="smImg"><a href="#"><img src="images/test2.jpg" alt=""></a></div>
					<div class="smTxtBox">
						<p class="smTxt smTxt_r"><span class="txt_r">30:22</span></p>
					</div>
				</div>
				<div class="userLink">
					<div class="company">
						<img src="images/test3.jpg" class="companyHead">
						<span class="companyName">白富</span>
					</div>
					<h3 class="user_tit"><a href="#">白富美为何没有男朋友</a></h3>
					<p class="notes"><span class="times timesIcon">104万</span></p>
				</div>
			</div>
				<div class="ykArea">
					<div class="imgList">
						<div class="smImg"><a href="#"><img src="images/test2.jpg" alt=""></a></div>
						<div class="smTxtBox">
							<p class="smTxt smTxt_r"><span class="txt_r">30:22</span></p>
						</div>
					</div>
					<div class="userLink">
						<div class="company">
							<img src="images/test3.jpg" class="companyHead">
							<span class="companyName">白富</span>
						</div>
						<h3 class="user_tit"><a href="#">白富美为何没有男朋友</a></h3>
						<p class="notes"><span class="times timesIcon">104万</span></p>
					</div>
				</div>
				<div class="ykArea">
					<div class="imgList">
						<div class="smImg"><a href="#"><img src="images/test2.jpg" alt=""></a></div>
						<div class="smTxtBox">
							<p class="smTxt smTxt_r"><span class="txt_r">30:22</span></p>
						</div>
					</div>
					<div class="userLink">
						<div class="company">
							<img src="images/test3.jpg" class="companyHead">
							<span class="companyName">白富</span>
						</div>
						<h3 class="user_tit"><a href="#">白富美为何没有男朋友</a></h3>
						<p class="notes"><span class="times timesIcon">104万</span></p>
					</div>
				</div>
			</div>
		</div>
			<div class="rightArea fr">
				<div class="list_smImg mb">
					<div class="list_img">
						<a href="#"><img src="images/test2.jpg" alt=""></a>
					</div>
					<div class="list_txt">
						<h3 class="user_tit"><a href="#">异地恋孩子真的伤不起</a></h3>
						<p>&lt;微笑&gt;</p>
					</div>
				</div>
				<div class="list_smImg mb">
					<div class="list_img">
						<a href="#"><img src="images/test2.jpg" alt=""></a>
					</div>
					<div class="list_txt">
						<h3 class="user_tit"><a href="#">异地恋孩子真的伤不起</a></h3>
						<p>&lt;微笑&gt;</p>
					</div>
				</div>
				<div class="list_smImg">
					<div class="list_img">
						<a href="#"><img src="images/test2.jpg" alt=""></a>
					</div>
					<div class="list_txt">
						<h3 class="user_tit"><a href="#">异地恋孩子真的伤不起</a></h3>
						<p>&lt;微笑&gt;</p>
					</div>
				</div>
			</div>
		</div>
		<div class="youkuOriCont clearfix">
			<div class="leftArea fl">
			<div class="ykMt clearfix">
				<div class="ykArea">
				<div class="imgList">
					<div class="smImg"><a href="#"><img src="images/test2.jpg" alt=""></a></div>
					<div class="smTxtBox">
						<p class="smTxt smTxt_r"><span class="txt_r">30:22</span></p>
					</div>
				</div>
				<div class="userLink">
					<div class="company">
						<img src="images/test3.jpg" class="companyHead">
						<span class="companyName">白富</span>
					</div>
					<h3 class="user_tit"><a href="#">白富美为何没有男朋友</a></h3>
					<p class="notes"><span class="times timesIcon">104万</span></p>
				</div>
			</div>
				<div class="ykArea">
					<div class="imgList">
						<div class="smImg"><a href="#"><img src="images/test2.jpg" alt=""></a></div>
						<div class="smTxtBox">
							<p class="smTxt smTxt_r"><span class="txt_r">30:22</span></p>
						</div>
					</div>
					<div class="userLink">
						<div class="company">
							<img src="images/test3.jpg" class="companyHead">
							<span class="companyName">白富</span>
						</div>
						<h3 class="user_tit"><a href="#">白富美为何没有男朋友</a></h3>
						<p class="notes"><span class="times timesIcon">104万</span></p>
					</div>
				</div>
				<div class="ykArea">
					<div class="imgList">
						<div class="smImg"><a href="#"><img src="images/test2.jpg" alt=""></a></div>
						<div class="smTxtBox">
							<p class="smTxt smTxt_r"><span class="txt_r">30:22</span></p>
						</div>
					</div>
					<div class="userLink">
						<div class="company">
							<img src="images/test3.jpg" class="companyHead">
							<span class="companyName">白富</span>
						</div>
						<h3 class="user_tit"><a href="#">白富美为何没有男朋友</a></h3>
						<p class="notes"><span class="times timesIcon">104万</span></p>
					</div>
				</div>
			</div>
		</div>
			<div class="rightArea fr">
				<div class="list_smImg mb">
					<div class="list_img">
						<a href="#"><img src="images/test2.jpg" alt=""></a>
					</div>
					<div class="list_txt">
						<h3 class="user_tit"><a href="#">异地恋孩子真的伤不起</a></h3>
						<p>&lt;微笑&gt;</p>
					</div>
				</div>
				<div class="list_smImg mb">
					<div class="list_img">
						<a href="#"><img src="images/test2.jpg" alt=""></a>
					</div>
					<div class="list_txt">
						<h3 class="user_tit"><a href="#">异地恋孩子真的伤不起</a></h3>
						<p>&lt;微笑&gt;</p>
					</div>
				</div>
				<div class="list_smImg">
					<div class="list_img">
						<a href="#"><img src="images/test2.jpg" alt=""></a>
					</div>
					<div class="list_txt">
						<h3 class="user_tit"><a href="#">异地恋孩子真的伤不起</a></h3>
						<p>&lt;微笑&gt;</p>
					</div>
				</div>
			</div>
		</div>
	</div>
	
	
	<div class="adBox clearfix">
		<div class="leftArea fl">
			<div class="ykAd_642">
				ad
			</div>
		</div>
		<div class="rightArea fr">
			<div class="list_smImg mb10">
				<div class="list_img">
					<a href="#"><img src="images/test2.jpg" alt=""></a>
				</div>
				<div class="list_txt">
					<h3 class="user_tit"><a href="#">异地恋孩子真的伤不起</a></h3>
					<p>&lt;微笑&gt;</p>
				</div>
			</div>
			<div class="list_smImg">
				<div class="list_img">
					<a href="#"><img src="images/test2.jpg" alt=""></a>
				</div>
				<div class="list_txt">
					<h3 class="user_tit"><a href="#">异地恋孩子真的伤不起</a></h3>
					<p>&lt;微笑&gt;</p>
				</div>
			</div>
		</div>
	</div>
	
</div>
<div class="hr_50"></div>
<div class="main comWidth clearfix">
	<div class="leftArea fl">
		<div class="comTitle clearfix">
			<h2 class="userCent_tit fl">电视剧</h2>
			<ul class="title_tab fl">
				<li class="active"><a href="#">最新</a></li>
				<li><a href="#">英美剧</a></li>
				<li><a href="#">大陆剧</a></li>
				<li><a href="#">韩剧</a></li>
				<li><a href="#">港台剧</a></li>
			</ul>
		</div>
		<div class="hr_20"></div>
		<div class="tabs_box">
			<div class="tabs_item show">
				<div class="leftTop">
			<div class="imgList_b fl">
				<div class="imgItem">
					<a href="#"><img src="images/test2.jpg" alt=""></a>
				</div>
				<div class="imgItemTxt">
					<div class="txt">
						<h3><a href="#">实拍暴莞 疯狂天灾1人遇难</a></h3>
						<p><span class="userName c1">Hcfun</span></p>
					</div>
				</div>
			</div>
			<div class="leftSmImg fl">
				<div class="imgList imgline">
					<div class="smImg"><a href="#"><img src="images/test2.jpg" alt=""></a></div>
					<div class="smTxtBox">
						<p class="smTxt"><a href="#" class="txt_l">日右翼解禁钓鱼岛现场</a></p>
					</div>
					<div class="shade_box">
						<div class="shade_cont">
							<div class="shade">
								<h3><a href="#">河南摔婴案公安局长被停职</a></h3>
								<p>女婴父母疑被重金封口<span class="times timesIcon fr">104万</span></p>
								<p><span class="userName userIcon">Hcfun</span></p>
								<a href="#" class="shade_play"></a>
							</div>
						</div>
					</div>
				</div>
				<div class="hr_20"></div>
				<div class="imgList imgline">
					<div class="smImg"><a href="#"><img src="images/test2.jpg" alt=""></a></div>
					<div class="smTxtBox">
						<p class="smTxt"><a href="#" class="txt_l">日右翼解禁钓鱼岛现场</a></p>
					</div>
					<div class="shade_box">
						<div class="shade_cont">
							<div class="shade">
								<h3><a href="#">河南摔婴案公安局长被停职</a></h3>
								<p>女婴父母疑被重金封口<span class="times timesIcon fr">104万</span></p>
								<p><span class="userName userIcon">Hcfun</span></p>
								<a href="#" class="shade_play"></a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
				<div class="leftBottom clearfix">
					<div class="imgList">
						<div class="smImg"><a href="#"><img src="images/test2.jpg" alt=""></a></div>
						<div class="smTxtBox">
							<p class="smTxt"><a href="#" class="txt_l">日右翼解禁钓鱼岛现场</a></p>
						</div>
						<div class="shade_box">
							<div class="shade_cont">
								<div class="shade">
									<h3><a href="#">河南摔婴案公安局长被停职</a></h3>
									<p>女婴父母疑被重金封口<span class="times timesIcon fr">104万</span></p>
									<p><span class="userName userIcon">Hcfun</span></p>
									<a href="#" class="shade_play"></a>
								</div>
							</div>
						</div>
					</div>
					<div class="imgList">
						<div class="smImg"><a href="#"><img src="images/test2.jpg" alt=""></a></div>
						<div class="smTxtBox">
							<p class="smTxt"><a href="#" class="txt_l">日右翼解禁钓鱼岛现场</a></p>
						</div>
						<div class="shade_box">
							<div class="shade_cont">
								<div class="shade">
									<h3><a href="#">河南摔婴案公安局长被停职</a></h3>
									<p>女婴父母疑被重金封口<span class="times timesIcon fr">104万</span></p>
									<p><span class="userName userIcon">Hcfun</span></p>
									<a href="#" class="shade_play"></a>
								</div>
							</div>
						</div>
					</div>
					<div class="imgList imgline">
						<div class="smImg"><a href="#"><img src="images/test2.jpg" alt=""></a></div>
						<div class="smTxtBox">
							<p class="smTxt"><a href="#" class="txt_l">日右翼解禁钓鱼岛现场</a></p>
						</div>
						<div class="shade_box">
							<div class="shade_cont">
								<div class="shade">
									<h3><a href="#">河南摔婴案公安局长被停职</a></h3>
									<p>女婴父母疑被重金封口<span class="times timesIcon fr">104万</span></p>
									<p><span class="userName userIcon">Hcfun</span></p>
									<a href="#" class="shade_play"></a>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="tabs_item">
				<div class="leftTop">
			<div class="imgList_b fl">
				<div class="imgItem">
					<a href="#"><img src="images/test2.jpg" alt=""></a>
				</div>
				<div class="imgItemTxt">
					<div class="txt">
						<h3><a href="#">实拍暴莞 疯狂天灾1人遇难</a></h3>
						<p><span class="userName c1">Hcfun</span></p>
					</div>
				</div>
			</div>
			<div class="leftSmImg fl">
				<div class="imgList imgline">
					<div class="smImg"><a href="#"><img src="images/test2.jpg" alt=""></a></div>
					<div class="smTxtBox">
						<p class="smTxt"><a href="#" class="txt_l">日右翼解禁钓鱼岛现场</a></p>
					</div>
					<div class="shade_box">
						<div class="shade_cont">
							<div class="shade">
								<h3><a href="#">河南摔婴案公安局长被停职</a></h3>
								<p>女婴父母疑被重金封口<span class="times timesIcon fr">104万</span></p>
								<p><span class="userName userIcon">Hcfun</span></p>
								<a href="#" class="shade_play"></a>
							</div>
						</div>
					</div>
				</div>
				<div class="hr_20"></div>
				<div class="imgList imgline">
					<div class="smImg"><a href="#"><img src="images/test2.jpg" alt=""></a></div>
					<div class="smTxtBox">
						<p class="smTxt"><a href="#" class="txt_l">日右翼解禁钓鱼岛现场</a></p>
					</div>
					<div class="shade_box">
						<div class="shade_cont">
							<div class="shade">
								<h3><a href="#">河南摔婴案公安局长被停职</a></h3>
								<p>女婴父母疑被重金封口<span class="times timesIcon fr">104万</span></p>
								<p><span class="userName userIcon">Hcfun</span></p>
								<a href="#" class="shade_play"></a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
				<div class="leftBottom clearfix">
					<div class="imgList">
						<div class="smImg"><a href="#"><img src="images/test2.jpg" alt=""></a></div>
						<div class="smTxtBox">
							<p class="smTxt"><a href="#" class="txt_l">日右翼解禁钓鱼岛现场</a></p>
						</div>
						<div class="shade_box">
							<div class="shade_cont">
								<div class="shade">
									<h3><a href="#">河南摔婴案公安局长被停职</a></h3>
									<p>女婴父母疑被重金封口<span class="times timesIcon fr">104万</span></p>
									<p><span class="userName userIcon">Hcfun</span></p>
									<a href="#" class="shade_play"></a>
								</div>
							</div>
						</div>
					</div>
					<div class="imgList">
						<div class="smImg"><a href="#"><img src="images/test2.jpg" alt=""></a></div>
						<div class="smTxtBox">
							<p class="smTxt"><a href="#" class="txt_l">日右翼解禁钓鱼岛现场</a></p>
						</div>
						<div class="shade_box">
							<div class="shade_cont">
								<div class="shade">
									<h3><a href="#">河南摔婴案公安局长被停职</a></h3>
									<p>女婴父母疑被重金封口<span class="times timesIcon fr">104万</span></p>
									<p><span class="userName userIcon">Hcfun</span></p>
									<a href="#" class="shade_play"></a>
								</div>
							</div>
						</div>
					</div>
					<div class="imgList imgline">
						<div class="smImg"><a href="#"><img src="images/test2.jpg" alt=""></a></div>
						<div class="smTxtBox">
							<p class="smTxt"><a href="#" class="txt_l">日右翼解禁钓鱼岛现场</a></p>
						</div>
						<div class="shade_box">
							<div class="shade_cont">
								<div class="shade">
									<h3><a href="#">河南摔婴案公安局长被停职</a></h3>
									<p>女婴父母疑被重金封口<span class="times timesIcon fr">104万</span></p>
									<p><span class="userName userIcon">Hcfun</span></p>
									<a href="#" class="shade_play"></a>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="tabs_item">
				<div class="leftTop">
			<div class="imgList_b fl">
				<div class="imgItem">
					<a href="#"><img src="images/test2.jpg" alt=""></a>
				</div>
				<div class="imgItemTxt">
					<div class="txt">
						<h3><a href="#">实拍暴莞 疯狂天灾1人遇难</a></h3>
						<p><span class="userName c1">Hcfun</span></p>
					</div>
				</div>
			</div>
			<div class="leftSmImg fl">
				<div class="imgList imgline">
					<div class="smImg"><a href="#"><img src="images/test2.jpg" alt=""></a></div>
					<div class="smTxtBox">
						<p class="smTxt"><a href="#" class="txt_l">日右翼解禁钓鱼岛现场</a></p>
					</div>
					<div class="shade_box">
						<div class="shade_cont">
							<div class="shade">
								<h3><a href="#">河南摔婴案公安局长被停职</a></h3>
								<p>女婴父母疑被重金封口<span class="times timesIcon fr">104万</span></p>
								<p><span class="userName userIcon">Hcfun</span></p>
								<a href="#" class="shade_play"></a>
							</div>
						</div>
					</div>
				</div>
				<div class="hr_20"></div>
				<div class="imgList imgline">
					<div class="smImg"><a href="#"><img src="images/test2.jpg" alt=""></a></div>
					<div class="smTxtBox">
						<p class="smTxt"><a href="#" class="txt_l">日右翼解禁钓鱼岛现场</a></p>
					</div>
					<div class="shade_box">
						<div class="shade_cont">
							<div class="shade">
								<h3><a href="#">河南摔婴案公安局长被停职</a></h3>
								<p>女婴父母疑被重金封口<span class="times timesIcon fr">104万</span></p>
								<p><span class="userName userIcon">Hcfun</span></p>
								<a href="#" class="shade_play"></a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
				<div class="leftBottom clearfix">
					<div class="imgList">
						<div class="smImg"><a href="#"><img src="images/test2.jpg" alt=""></a></div>
						<div class="smTxtBox">
							<p class="smTxt"><a href="#" class="txt_l">日右翼解禁钓鱼岛现场</a></p>
						</div>
						<div class="shade_box">
							<div class="shade_cont">
								<div class="shade">
									<h3><a href="#">河南摔婴案公安局长被停职</a></h3>
									<p>女婴父母疑被重金封口<span class="times timesIcon fr">104万</span></p>
									<p><span class="userName userIcon">Hcfun</span></p>
									<a href="#" class="shade_play"></a>
								</div>
							</div>
						</div>
					</div>
					<div class="imgList">
						<div class="smImg"><a href="#"><img src="images/test2.jpg" alt=""></a></div>
						<div class="smTxtBox">
							<p class="smTxt"><a href="#" class="txt_l">日右翼解禁钓鱼岛现场</a></p>
						</div>
						<div class="shade_box">
							<div class="shade_cont">
								<div class="shade">
									<h3><a href="#">河南摔婴案公安局长被停职</a></h3>
									<p>女婴父母疑被重金封口<span class="times timesIcon fr">104万</span></p>
									<p><span class="userName userIcon">Hcfun</span></p>
									<a href="#" class="shade_play"></a>
								</div>
							</div>
						</div>
					</div>
					<div class="imgList imgline">
						<div class="smImg"><a href="#"><img src="images/test2.jpg" alt=""></a></div>
						<div class="smTxtBox">
							<p class="smTxt"><a href="#" class="txt_l">日右翼解禁钓鱼岛现场</a></p>
						</div>
						<div class="shade_box">
							<div class="shade_cont">
								<div class="shade">
									<h3><a href="#">河南摔婴案公安局长被停职</a></h3>
									<p>女婴父母疑被重金封口<span class="times timesIcon fr">104万</span></p>
									<p><span class="userName userIcon">Hcfun</span></p>
									<a href="#" class="shade_play"></a>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="tabs_item">
				<div class="leftTop">
			<div class="imgList_b fl">
				<div class="imgItem">
					<a href="#"><img src="images/test2.jpg" alt=""></a>
				</div>
				<div class="imgItemTxt">
					<div class="txt">
						<h3><a href="#">实拍暴莞 疯狂天灾1人遇难</a></h3>
						<p><span class="userName c1">Hcfun</span></p>
					</div>
				</div>
			</div>
			<div class="leftSmImg fl">
				<div class="imgList imgline">
					<div class="smImg"><a href="#"><img src="images/test2.jpg" alt=""></a></div>
					<div class="smTxtBox">
						<p class="smTxt"><a href="#" class="txt_l">日右翼解禁钓鱼岛现场</a></p>
					</div>
					<div class="shade_box">
						<div class="shade_cont">
							<div class="shade">
								<h3><a href="#">河南摔婴案公安局长被停职</a></h3>
								<p>女婴父母疑被重金封口<span class="times timesIcon fr">104万</span></p>
								<p><span class="userName userIcon">Hcfun</span></p>
								<a href="#" class="shade_play"></a>
							</div>
						</div>
					</div>
				</div>
				<div class="hr_20"></div>
				<div class="imgList imgline">
					<div class="smImg"><a href="#"><img src="images/test2.jpg" alt=""></a></div>
					<div class="smTxtBox">
						<p class="smTxt"><a href="#" class="txt_l">日右翼解禁钓鱼岛现场</a></p>
					</div>
					<div class="shade_box">
						<div class="shade_cont">
							<div class="shade">
								<h3><a href="#">河南摔婴案公安局长被停职</a></h3>
								<p>女婴父母疑被重金封口<span class="times timesIcon fr">104万</span></p>
								<p><span class="userName userIcon">Hcfun</span></p>
								<a href="#" class="shade_play"></a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
				<div class="leftBottom clearfix">
					<div class="imgList">
						<div class="smImg"><a href="#"><img src="images/test2.jpg" alt=""></a></div>
						<div class="smTxtBox">
							<p class="smTxt"><a href="#" class="txt_l">日右翼解禁钓鱼岛现场</a></p>
						</div>
						<div class="shade_box">
							<div class="shade_cont">
								<div class="shade">
									<h3><a href="#">河南摔婴案公安局长被停职</a></h3>
									<p>女婴父母疑被重金封口<span class="times timesIcon fr">104万</span></p>
									<p><span class="userName userIcon">Hcfun</span></p>
									<a href="#" class="shade_play"></a>
								</div>
							</div>
						</div>
					</div>
					<div class="imgList">
						<div class="smImg"><a href="#"><img src="images/test2.jpg" alt=""></a></div>
						<div class="smTxtBox">
							<p class="smTxt"><a href="#" class="txt_l">日右翼解禁钓鱼岛现场</a></p>
						</div>
						<div class="shade_box">
							<div class="shade_cont">
								<div class="shade">
									<h3><a href="#">河南摔婴案公安局长被停职</a></h3>
									<p>女婴父母疑被重金封口<span class="times timesIcon fr">104万</span></p>
									<p><span class="userName userIcon">Hcfun</span></p>
									<a href="#" class="shade_play"></a>
								</div>
							</div>
						</div>
					</div>
					<div class="imgList imgline">
						<div class="smImg"><a href="#"><img src="images/test2.jpg" alt=""></a></div>
						<div class="smTxtBox">
							<p class="smTxt"><a href="#" class="txt_l">日右翼解禁钓鱼岛现场</a></p>
						</div>
						<div class="shade_box">
							<div class="shade_cont">
								<div class="shade">
									<h3><a href="#">河南摔婴案公安局长被停职</a></h3>
									<p>女婴父母疑被重金封口<span class="times timesIcon fr">104万</span></p>
									<p><span class="userName userIcon">Hcfun</span></p>
									<a href="#" class="shade_play"></a>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="tabs_item">
				<div class="leftTop">
			<div class="imgList_b fl">
				<div class="imgItem">
					<a href="#"><img src="images/test2.jpg" alt=""></a>
				</div>
				<div class="imgItemTxt">
					<div class="txt">
						<h3><a href="#">实拍暴莞 疯狂天灾1人遇难</a></h3>
						<p><span class="userName c1">Hcfun</span></p>
					</div>
				</div>
			</div>
			<div class="leftSmImg fl">
				<div class="imgList imgline">
					<div class="smImg"><a href="#"><img src="images/test2.jpg" alt=""></a></div>
					<div class="smTxtBox">
						<p class="smTxt"><a href="#" class="txt_l">日右翼解禁钓鱼岛现场</a></p>
					</div>
					<div class="shade_box">
						<div class="shade_cont">
							<div class="shade">
								<h3><a href="#">河南摔婴案公安局长被停职</a></h3>
								<p>女婴父母疑被重金封口<span class="times timesIcon fr">104万</span></p>
								<p><span class="userName userIcon">Hcfun</span></p>
								<a href="#" class="shade_play"></a>
							</div>
						</div>
					</div>
				</div>
				<div class="hr_20"></div>
				<div class="imgList imgline">
					<div class="smImg"><a href="#"><img src="images/test2.jpg" alt=""></a></div>
					<div class="smTxtBox">
						<p class="smTxt"><a href="#" class="txt_l">日右翼解禁钓鱼岛现场</a></p>
					</div>
					<div class="shade_box">
						<div class="shade_cont">
							<div class="shade">
								<h3><a href="#">河南摔婴案公安局长被停职</a></h3>
								<p>女婴父母疑被重金封口<span class="times timesIcon fr">104万</span></p>
								<p><span class="userName userIcon">Hcfun</span></p>
								<a href="#" class="shade_play"></a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
				<div class="leftBottom clearfix">
					<div class="imgList">
						<div class="smImg"><a href="#"><img src="images/test2.jpg" alt=""></a></div>
						<div class="smTxtBox">
							<p class="smTxt"><a href="#" class="txt_l">日右翼解禁钓鱼岛现场</a></p>
						</div>
						<div class="shade_box">
							<div class="shade_cont">
								<div class="shade">
									<h3><a href="#">河南摔婴案公安局长被停职</a></h3>
									<p>女婴父母疑被重金封口<span class="times timesIcon fr">104万</span></p>
									<p><span class="userName userIcon">Hcfun</span></p>
									<a href="#" class="shade_play"></a>
								</div>
							</div>
						</div>
					</div>
					<div class="imgList">
						<div class="smImg"><a href="#"><img src="images/test2.jpg" alt=""></a></div>
						<div class="smTxtBox">
							<p class="smTxt"><a href="#" class="txt_l">日右翼解禁钓鱼岛现场</a></p>
						</div>
						<div class="shade_box">
							<div class="shade_cont">
								<div class="shade">
									<h3><a href="#">河南摔婴案公安局长被停职</a></h3>
									<p>女婴父母疑被重金封口<span class="times timesIcon fr">104万</span></p>
									<p><span class="userName userIcon">Hcfun</span></p>
									<a href="#" class="shade_play"></a>
								</div>
							</div>
						</div>
					</div>
					<div class="imgList imgline">
						<div class="smImg"><a href="#"><img src="images/test2.jpg" alt=""></a></div>
						<div class="smTxtBox">
							<p class="smTxt"><a href="#" class="txt_l">日右翼解禁钓鱼岛现场</a></p>
						</div>
						<div class="shade_box">
							<div class="shade_cont">
								<div class="shade">
									<h3><a href="#">河南摔婴案公安局长被停职</a></h3>
									<p>女婴父母疑被重金封口<span class="times timesIcon fr">104万</span></p>
									<p><span class="userName userIcon">Hcfun</span></p>
									<a href="#" class="shade_play"></a>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="rightArea fr">
		<div class="comTitle clearfix">
			<ul class="title_tab fl">
				<li class="active"><a href="#">电视剧排行</a></li>
				<li><a href="#">大陆</a></li>
				<li><a href="#">韩国</a></li>
				<li><a href="#">港台</a></li>
				<li><a href="#">英美</a></li>
			</ul>
		</div>
		<div class="tabList">
			<div class="item clearfix show">
				<ul class="tabs">
					<li><span class="yellow">1</span><a href="#">龙门镖局</a></li>
					<li><span class="yellow">2</span><a href="#">龙门镖局</a></li>
					<li><span class="yellow">3</span><a href="#">龙门镖局</a></li>
					<li><span>4</span><a href="#">龙门镖局</a></li>
					<li><span>5</span><a href="#">龙门镖局</a></li>
				</ul>
				<ul class="tabs">
					<li><span>6</span><a href="#">龙门镖局</a></li>
					<li><span>7</span><a href="#">龙门镖局</a></li>
					<li><span>8</span><a href="#">龙门镖局</a></li>
					<li><span>9</span><a href="#">龙门镖局</a></li>
					<li><span>10</span><a href="#">龙门镖局</a></li>
				</ul>
			</div>
			<div class="item clearfix">
				<ul class="tabs">
					<li><span class="yellow">1</span><a href="#">22222</a></li>
					<li><span class="yellow">2</span><a href="#">龙门镖局</a></li>
					<li><span class="yellow">3</span><a href="#">龙门镖局</a></li>
					<li><span>4</span><a href="#">龙门镖局</a></li>
					<li><span>5</span><a href="#">龙门镖局</a></li>
				</ul>
				<ul class="tabs">
					<li><span>6</span><a href="#">龙门镖局</a></li>
					<li><span>7</span><a href="#">龙门镖局</a></li>
					<li><span>8</span><a href="#">龙门镖局</a></li>
					<li><span>9</span><a href="#">龙门镖局</a></li>
					<li><span>10</span><a href="#">龙门镖局</a></li>
				</ul>
			</div>
			<div class="item clearfix">
				<ul class="tabs">
					<li><span class="yellow">1</span><a href="#">33333</a></li>
					<li><span class="yellow">2</span><a href="#">龙门镖局</a></li>
					<li><span class="yellow">3</span><a href="#">龙门镖局</a></li>
					<li><span>4</span><a href="#">龙门镖局</a></li>
					<li><span>5</span><a href="#">龙门镖局</a></li>
				</ul>
				<ul class="tabs">
					<li><span>6</span><a href="#">龙门镖局</a></li>
					<li><span>7</span><a href="#">龙门镖局</a></li>
					<li><span>8</span><a href="#">龙门镖局</a></li>
					<li><span>9</span><a href="#">龙门镖局</a></li>
					<li><span>10</span><a href="#">龙门镖局</a></li>
				</ul>
			</div>
			<div class="item clearfix">
				<ul class="tabs">
					<li><span class="yellow">1</span><a href="#">444444</a></li>
					<li><span class="yellow">2</span><a href="#">龙门镖局</a></li>
					<li><span class="yellow">3</span><a href="#">龙门镖局</a></li>
					<li><span>4</span><a href="#">龙门镖局</a></li>
					<li><span>5</span><a href="#">龙门镖局</a></li>
				</ul>
				<ul class="tabs">
					<li><span>6</span><a href="#">龙门镖局</a></li>
					<li><span>7</span><a href="#">龙门镖局</a></li>
					<li><span>8</span><a href="#">龙门镖局</a></li>
					<li><span>9</span><a href="#">龙门镖局</a></li>
					<li><span>10</span><a href="#">龙门镖局</a></li>
				</ul>
			</div>
			<div class="item clearfix">
				<ul class="tabs">
					<li><span class="yellow">1</span><a href="#">55555</a></li>
					<li><span class="yellow">2</span><a href="#">龙门镖局</a></li>
					<li><span class="yellow">3</span><a href="#">龙门镖局</a></li>
					<li><span>4</span><a href="#">龙门镖局</a></li>
					<li><span>5</span><a href="#">龙门镖局</a></li>
				</ul>
				<ul class="tabs">
					<li><span>6</span><a href="#">龙门镖局</a></li>
					<li><span>7</span><a href="#">龙门镖局</a></li>
					<li><span>8</span><a href="#">龙门镖局</a></li>
					<li><span>9</span><a href="#">龙门镖局</a></li>
					<li><span>10</span><a href="#">龙门镖局</a></li>
				</ul>
			</div>
		</div>
		<div class="seniority">
			<a href="#">指数排行榜</a><span>»</span><a href="#">更多排行</a><span>»</span>
		</div>
		<div class="ykAd_50 mb">
			<a href="#"><img src="images/test4.jpg" alt=""></a>
		</div>
		<div class="tabAd">
			<div class="ad_prev">
				<a href="#"></a>
			</div>
			<div class="ad_next">
				<a href="#"></a>
			</div>
			<ul class="tabBox">
				<li>
					<div class="list_smImg mb10">
						<div class="list_img">
							<a href="#"><img src="images/test2.jpg" alt=""></a>
						</div>
						<div class="list_txt">
							<h3 class="user_tit"><a href="#">异地恋孩子真的伤不起</a></h3>
							<p>&lt;微笑&gt;</p>
						</div>
					</div>
					<div class="list_smImg">
						<div class="list_img">
							<a href="#"><img src="images/test2.jpg" alt=""></a>
						</div>
						<div class="list_txt">
							<h3 class="user_tit"><a href="#">异地恋孩子真的伤不起</a></h3>
							<p>&lt;微笑&gt;</p>
						</div>
					</div>
				</li>
				<li>
					<div class="list_smImg mb10">
						<div class="list_img">
							<a href="#"><img src="images/test2.jpg" alt=""></a>
						</div>
						<div class="list_txt">
							<h3 class="user_tit"><a href="#">2222</a></h3>
							<p>&lt;微笑&gt;</p>
						</div>
					</div>
					<div class="list_smImg">
						<div class="list_img">
							<a href="#"><img src="images/test2.jpg" alt=""></a>
						</div>
						<div class="list_txt">
							<h3 class="user_tit"><a href="#">异地恋孩子真的伤不起</a></h3>
							<p>&lt;微笑&gt;</p>
						</div>
					</div>
				</li>
				<li>
					<div class="list_smImg mb10">
						<div class="list_img">
							<a href="#"><img src="images/test2.jpg" alt=""></a>
						</div>
						<div class="list_txt">
							<h3 class="user_tit"><a href="#">3333</a></h3>
							<p>&lt;微笑&gt;</p>
						</div>
					</div>
					<div class="list_smImg">
						<div class="list_img">
							<a href="#"><img src="images/test2.jpg" alt=""></a>
						</div>
						<div class="list_txt">
							<h3 class="user_tit"><a href="#">异地恋孩子真的伤不起</a></h3>
							<p>&lt;微笑&gt;</p>
						</div>
					</div>
				</li>
			</ul>
		</div>
	</div>
</div>
<!--电影-->
<div class="hr_50"></div>
<div class="main comWidth clearfix">
	<div class="leftArea fl">
		<div class="comTitle clearfix">
			<h2 class="userCent_tit fl">电影 • 预告片</h2>
			<ul class="title_tab fl">
				<li class="active"><a href="#">最新</a></li>
				<li><a href="#">好莱坞</a></li>
				<li><a href="#">预告片</a></li>
				<li><a href="#">华语</a></li>
				<li><a href="#">全网独播</a></li>
			</ul>
		</div>
		<div class="hr_20"></div>
		<div class="tabs_box">
			<div class="tabs_item show">
				<div class="leftTop">
					<div class="imgList_b fl">
						<div class="imgItem"> <a href="#"><img src="images/test2.jpg" alt=""></a> </div>
						<div class="imgItemTxt">
							<div class="txt">
								<h3><a href="#">实拍暴莞 疯狂天灾1人遇难</a></h3>
								<p><span class="userName c1">Hcfun</span></p>
							</div>
						</div>
					</div>
					<div class="leftSmImg fl">
						<div class="imgList imgline">
							<div class="smImg"><a href="#"><img src="images/test2.jpg" alt=""></a></div>
							<div class="smTxtBox">
								<p class="smTxt"><a href="#" class="txt_l">日右翼解禁钓鱼岛现场</a></p>
							</div>
							<div class="shade_box">
								<div class="shade_cont">
									<div class="shade">
										<h3><a href="#">河南摔婴案公安局长被停职</a></h3>
										<p>女婴父母疑被重金封口<span class="times timesIcon fr">104万</span></p>
										<p><span class="userName userIcon">Hcfun</span></p>
										<a href="#" class="shade_play"></a> </div>
								</div>
							</div>
						</div>
						<div class="hr_20"></div>
						<div class="imgList imgline">
							<div class="smImg"><a href="#"><img src="images/test2.jpg" alt=""></a></div>
							<div class="smTxtBox">
								<p class="smTxt"><a href="#" class="txt_l">日右翼解禁钓鱼岛现场</a></p>
							</div>
							<div class="shade_box">
								<div class="shade_cont">
									<div class="shade">
										<h3><a href="#">河南摔婴案公安局长被停职</a></h3>
										<p>女婴父母疑被重金封口<span class="times timesIcon fr">104万</span></p>
										<p><span class="userName userIcon">Hcfun</span></p>
										<a href="#" class="shade_play"></a> </div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="tabs_item">
				<div class="leftTop">
					<div class="imgList_b fl">
						<div class="imgItem"> <a href="#"><img src="images/test2.jpg" alt=""></a> </div>
						<div class="imgItemTxt">
							<div class="txt">
								<h3><a href="#">实拍暴莞 疯狂天灾1人遇难</a></h3>
								<p><span class="userName c1">Hcfun</span></p>
							</div>
						</div>
					</div>
					<div class="leftSmImg fl">
						<div class="imgList imgline">
							<div class="smImg"><a href="#"><img src="images/test2.jpg" alt=""></a></div>
							<div class="smTxtBox">
								<p class="smTxt"><a href="#" class="txt_l">日右翼解禁钓鱼岛现场</a></p>
							</div>
							<div class="shade_box">
								<div class="shade_cont">
									<div class="shade">
										<h3><a href="#">河南摔婴案公安局长被停职</a></h3>
										<p>女婴父母疑被重金封口<span class="times timesIcon fr">104万</span></p>
										<p><span class="userName userIcon">Hcfun</span></p>
										<a href="#" class="shade_play"></a> </div>
								</div>
							</div>
						</div>
						<div class="hr_20"></div>
						<div class="imgList imgline">
							<div class="smImg"><a href="#"><img src="images/test2.jpg" alt=""></a></div>
							<div class="smTxtBox">
								<p class="smTxt"><a href="#" class="txt_l">日右翼解禁钓鱼岛现场</a></p>
							</div>
							<div class="shade_box">
								<div class="shade_cont">
									<div class="shade">
										<h3><a href="#">河南摔婴案公安局长被停职</a></h3>
										<p>女婴父母疑被重金封口<span class="times timesIcon fr">104万</span></p>
										<p><span class="userName userIcon">Hcfun</span></p>
										<a href="#" class="shade_play"></a> </div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="tabs_item">
				<div class="leftTop">
					<div class="imgList_b fl">
						<div class="imgItem"> <a href="#"><img src="images/test2.jpg" alt=""></a> </div>
						<div class="imgItemTxt">
							<div class="txt">
								<h3><a href="#">实拍暴莞 疯狂天灾1人遇难</a></h3>
								<p><span class="userName c1">Hcfun</span></p>
							</div>
						</div>
					</div>
					<div class="leftSmImg fl">
						<div class="imgList imgline">
							<div class="smImg"><a href="#"><img src="images/test2.jpg" alt=""></a></div>
							<div class="smTxtBox">
								<p class="smTxt"><a href="#" class="txt_l">日右翼解禁钓鱼岛现场</a></p>
							</div>
							<div class="shade_box">
								<div class="shade_cont">
									<div class="shade">
										<h3><a href="#">河南摔婴案公安局长被停职</a></h3>
										<p>女婴父母疑被重金封口<span class="times timesIcon fr">104万</span></p>
										<p><span class="userName userIcon">Hcfun</span></p>
										<a href="#" class="shade_play"></a> </div>
								</div>
							</div>
						</div>
						<div class="hr_20"></div>
						<div class="imgList imgline">
							<div class="smImg"><a href="#"><img src="images/test2.jpg" alt=""></a></div>
							<div class="smTxtBox">
								<p class="smTxt"><a href="#" class="txt_l">日右翼解禁钓鱼岛现场</a></p>
							</div>
							<div class="shade_box">
								<div class="shade_cont">
									<div class="shade">
										<h3><a href="#">河南摔婴案公安局长被停职</a></h3>
										<p>女婴父母疑被重金封口<span class="times timesIcon fr">104万</span></p>
										<p><span class="userName userIcon">Hcfun</span></p>
										<a href="#" class="shade_play"></a> </div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="tabs_item">
				<div class="leftTop">
					<div class="imgList_b fl">
						<div class="imgItem"> <a href="#"><img src="images/test2.jpg" alt=""></a> </div>
						<div class="imgItemTxt">
							<div class="txt">
								<h3><a href="#">实拍暴莞 疯狂天灾1人遇难</a></h3>
								<p><span class="userName c1">Hcfun</span></p>
							</div>
						</div>
					</div>
					<div class="leftSmImg fl">
						<div class="imgList imgline">
							<div class="smImg"><a href="#"><img src="images/test2.jpg" alt=""></a></div>
							<div class="smTxtBox">
								<p class="smTxt"><a href="#" class="txt_l">日右翼解禁钓鱼岛现场</a></p>
							</div>
							<div class="shade_box">
								<div class="shade_cont">
									<div class="shade">
										<h3><a href="#">河南摔婴案公安局长被停职</a></h3>
										<p>女婴父母疑被重金封口<span class="times timesIcon fr">104万</span></p>
										<p><span class="userName userIcon">Hcfun</span></p>
										<a href="#" class="shade_play"></a> </div>
								</div>
							</div>
						</div>
						<div class="hr_20"></div>
						<div class="imgList imgline">
							<div class="smImg"><a href="#"><img src="images/test2.jpg" alt=""></a></div>
							<div class="smTxtBox">
								<p class="smTxt"><a href="#" class="txt_l">日右翼解禁钓鱼岛现场</a></p>
							</div>
							<div class="shade_box">
								<div class="shade_cont">
									<div class="shade">
										<h3><a href="#">河南摔婴案公安局长被停职</a></h3>
										<p>女婴父母疑被重金封口<span class="times timesIcon fr">104万</span></p>
										<p><span class="userName userIcon">Hcfun</span></p>
										<a href="#" class="shade_play"></a> </div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="tabs_item">
				<div class="leftTop">
					<div class="imgList_b fl">
						<div class="imgItem"> <a href="#"><img src="images/test2.jpg" alt=""></a> </div>
						<div class="imgItemTxt">
							<div class="txt">
								<h3><a href="#">实拍暴莞 疯狂天灾1人遇难</a></h3>
								<p><span class="userName c1">Hcfun</span></p>
							</div>
						</div>
					</div>
					<div class="leftSmImg fl">
						<div class="imgList imgline">
							<div class="smImg"><a href="#"><img src="images/test2.jpg" alt=""></a></div>
							<div class="smTxtBox">
								<p class="smTxt"><a href="#" class="txt_l">日右翼解禁钓鱼岛现场</a></p>
							</div>
							<div class="shade_box">
								<div class="shade_cont">
									<div class="shade">
										<h3><a href="#">河南摔婴案公安局长被停职</a></h3>
										<p>女婴父母疑被重金封口<span class="times timesIcon fr">104万</span></p>
										<p><span class="userName userIcon">Hcfun</span></p>
										<a href="#" class="shade_play"></a> </div>
								</div>
							</div>
						</div>
						<div class="hr_20"></div>
						<div class="imgList imgline">
							<div class="smImg"><a href="#"><img src="images/test2.jpg" alt=""></a></div>
							<div class="smTxtBox">
								<p class="smTxt"><a href="#" class="txt_l">日右翼解禁钓鱼岛现场</a></p>
							</div>
							<div class="shade_box">
								<div class="shade_cont">
									<div class="shade">
										<h3><a href="#">河南摔婴案公安局长被停职</a></h3>
										<p>女婴父母疑被重金封口<span class="times timesIcon fr">104万</span></p>
										<p><span class="userName userIcon">Hcfun</span></p>
										<a href="#" class="shade_play"></a> </div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="rightArea fr">
		<div class="comTitle clearfix">
			<ul class="title_tab fl">
				<li class="active"><a href="#">电视剧排行</a></li>
				<li><a href="#">大陆</a></li>
				<li><a href="#">韩国</a></li>
				<li><a href="#">港台</a></li>
				<li><a href="#">英美</a></li>
			</ul>
		</div>
		<div class="tabList">
			<div class="item clearfix show">
				<ul class="tabs">
					<li><span class="yellow">1</span><a href="#">龙门镖局</a></li>
					<li><span class="yellow">2</span><a href="#">龙门镖局</a></li>
					<li><span class="yellow">3</span><a href="#">龙门镖局</a></li>
					<li><span>4</span><a href="#">龙门镖局</a></li>
					<li><span>5</span><a href="#">龙门镖局</a></li>
				</ul>
				<ul class="tabs">
					<li><span>6</span><a href="#">龙门镖局</a></li>
					<li><span>7</span><a href="#">龙门镖局</a></li>
					<li><span>8</span><a href="#">龙门镖局</a></li>
					<li><span>9</span><a href="#">龙门镖局</a></li>
					<li><span>10</span><a href="#">龙门镖局</a></li>
				</ul>
			</div>
			<div class="item clearfix">
				<ul class="tabs">
					<li><span class="yellow">1</span><a href="#">22222</a></li>
					<li><span class="yellow">2</span><a href="#">龙门镖局</a></li>
					<li><span class="yellow">3</span><a href="#">龙门镖局</a></li>
					<li><span>4</span><a href="#">龙门镖局</a></li>
					<li><span>5</span><a href="#">龙门镖局</a></li>
				</ul>
				<ul class="tabs">
					<li><span>6</span><a href="#">龙门镖局</a></li>
					<li><span>7</span><a href="#">龙门镖局</a></li>
					<li><span>8</span><a href="#">龙门镖局</a></li>
					<li><span>9</span><a href="#">龙门镖局</a></li>
					<li><span>10</span><a href="#">龙门镖局</a></li>
				</ul>
			</div>
			<div class="item clearfix">
				<ul class="tabs">
					<li><span class="yellow">1</span><a href="#">33333</a></li>
					<li><span class="yellow">2</span><a href="#">龙门镖局</a></li>
					<li><span class="yellow">3</span><a href="#">龙门镖局</a></li>
					<li><span>4</span><a href="#">龙门镖局</a></li>
					<li><span>5</span><a href="#">龙门镖局</a></li>
				</ul>
				<ul class="tabs">
					<li><span>6</span><a href="#">龙门镖局</a></li>
					<li><span>7</span><a href="#">龙门镖局</a></li>
					<li><span>8</span><a href="#">龙门镖局</a></li>
					<li><span>9</span><a href="#">龙门镖局</a></li>
					<li><span>10</span><a href="#">龙门镖局</a></li>
				</ul>
			</div>
			<div class="item clearfix">
				<ul class="tabs">
					<li><span class="yellow">1</span><a href="#">444444</a></li>
					<li><span class="yellow">2</span><a href="#">龙门镖局</a></li>
					<li><span class="yellow">3</span><a href="#">龙门镖局</a></li>
					<li><span>4</span><a href="#">龙门镖局</a></li>
					<li><span>5</span><a href="#">龙门镖局</a></li>
				</ul>
				<ul class="tabs">
					<li><span>6</span><a href="#">龙门镖局</a></li>
					<li><span>7</span><a href="#">龙门镖局</a></li>
					<li><span>8</span><a href="#">龙门镖局</a></li>
					<li><span>9</span><a href="#">龙门镖局</a></li>
					<li><span>10</span><a href="#">龙门镖局</a></li>
				</ul>
			</div>
			<div class="item clearfix">
				<ul class="tabs">
					<li><span class="yellow">1</span><a href="#">55555</a></li>
					<li><span class="yellow">2</span><a href="#">龙门镖局</a></li>
					<li><span class="yellow">3</span><a href="#">龙门镖局</a></li>
					<li><span>4</span><a href="#">龙门镖局</a></li>
					<li><span>5</span><a href="#">龙门镖局</a></li>
				</ul>
				<ul class="tabs">
					<li><span>6</span><a href="#">龙门镖局</a></li>
					<li><span>7</span><a href="#">龙门镖局</a></li>
					<li><span>8</span><a href="#">龙门镖局</a></li>
					<li><span>9</span><a href="#">龙门镖局</a></li>
					<li><span>10</span><a href="#">龙门镖局</a></li>
				</ul>
			</div>
		</div>
		<div class="seniority"> <a href="#">指数排行榜</a><span>»</span><a href="#">更多排行</a><span>»</span> </div>
		<div class="ykAd_50 mb"> <a href="#"><img src="images/test4.jpg" alt=""></a> </div>
	</div>
</div>
<!--会员-->
<div class="hr_50"></div>
<div class="main comWidth clearfix">
	<div class="leftArea fl">
		<div class="comTitle clearfix">
			<h2 class="userCent_tit fl">院线 • 会员</h2>
			<ul class="title_tab fl">
				<li class="active"><a href="#">最新热播大片</a></li>
				<li><a href="#">影视会员半价</a></li>
				<li><a href="#">影视会员免费</a></li>
				<li><a href="#">全网独播影片</a></li>
			</ul>
		</div>
		<div class="tabs_box">
			<div class="tabs_item show">
				<div class="leftBottom clearfix">
					<div class="imgList imgline">
						<div class="smImg"><a href="#"><img src="images/test2.jpg" alt=""></a><span class="vipPlay"></span></div>
						<div class="smTxtBox">
							<h3 class="vipTitle"><a href="#">鱼岛现场</a></h3>
							<p class="smTxt smTxt_vip"><a href="#" class="txt_l">日右翼解禁钓鱼岛现场</a><span class="score">7.7</span></p>
						</div>
						<div class="shade_box">
							<div class="shade_cont">
								<div class="shade">
									<h3><a href="#">河南摔婴案公安局长被停职</a></h3>
									<p>女婴父母疑被重金封口<span class="times timesIcon fr">104万</span></p>
									<p><span class="userName userIcon">Hcfun</span></p>
									<a href="#" class="shade_play"></a>
								</div>
							</div>
						</div>
					</div>
					<div class="imgList imgline">
						<div class="smImg"><a href="#"><img src="images/test2.jpg" alt=""></a><span class="vipPlay"></span></div>
						<div class="smTxtBox">
							<h3 class="vipTitle"><a href="#">鱼岛现场</a></h3>
							<p class="smTxt smTxt_vip"><a href="#" class="txt_l">日右翼解禁钓鱼岛现场</a><span class="score">7.7</span></p>
						</div>
						<div class="shade_box">
							<div class="shade_cont">
								<div class="shade">
									<h3><a href="#">河南摔婴案公安局长被停职</a></h3>
									<p>女婴父母疑被重金封口<span class="times timesIcon fr">104万</span></p>
									<p><span class="userName userIcon">Hcfun</span></p>
									<a href="#" class="shade_play"></a>
								</div>
							</div>
						</div>
					</div>
					<div class="imgList imgline">
						<div class="smImg"><a href="#"><img src="images/test2.jpg" alt=""></a><span class="vipPlay"></span></div>
						<div class="smTxtBox">
							<h3 class="vipTitle"><a href="#">鱼岛现场</a></h3>
							<p class="smTxt smTxt_vip"><a href="#" class="txt_l">日右翼解禁钓鱼岛现场</a><span class="score">7.7</span></p>
						</div>
						<div class="shade_box">
							<div class="shade_cont">
								<div class="shade">
									<h3><a href="#">河南摔婴案公安局长被停职</a></h3>
									<p>女婴父母疑被重金封口<span class="times timesIcon fr">104万</span></p>
									<p><span class="userName userIcon">Hcfun</span></p>
									<a href="#" class="shade_play"></a>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="tabs_item">
				<div class="leftBottom clearfix">
					<div class="imgList">
						<div class="smImg"><a href="#"><img src="images/test2.jpg" alt=""></a></div>
						<div class="smTxtBox">
							<p class="smTxt"><a href="#" class="txt_l">日右翼解禁钓鱼岛现场</a></p>
						</div>
						<div class="shade_box">
							<div class="shade_cont">
								<div class="shade">
									<h3><a href="#">河南摔婴案公安局长被停职</a></h3>
									<p>女婴父母疑被重金封口<span class="times timesIcon fr">104万</span></p>
									<p><span class="userName userIcon">Hcfun</span></p>
									<a href="#" class="shade_play"></a>
								</div>
							</div>
						</div>
					</div>
					<div class="imgList">
						<div class="smImg"><a href="#"><img src="images/test2.jpg" alt=""></a></div>
						<div class="smTxtBox">
							<p class="smTxt"><a href="#" class="txt_l">日右翼解禁钓鱼岛现场</a></p>
						</div>
						<div class="shade_box">
							<div class="shade_cont">
								<div class="shade">
									<h3><a href="#">河南摔婴案公安局长被停职</a></h3>
									<p>女婴父母疑被重金封口<span class="times timesIcon fr">104万</span></p>
									<p><span class="userName userIcon">Hcfun</span></p>
									<a href="#" class="shade_play"></a>
								</div>
							</div>
						</div>
					</div>
					<div class="imgList imgline">
						<div class="smImg"><a href="#"><img src="images/test2.jpg" alt=""></a></div>
						<div class="smTxtBox">
							<p class="smTxt"><a href="#" class="txt_l">日右翼解禁钓鱼岛现场</a></p>
						</div>
						<div class="shade_box">
							<div class="shade_cont">
								<div class="shade">
									<h3><a href="#">河南摔婴案公安局长被停职</a></h3>
									<p>女婴父母疑被重金封口<span class="times timesIcon fr">104万</span></p>
									<p><span class="userName userIcon">Hcfun</span></p>
									<a href="#" class="shade_play"></a>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="tabs_item">
				<div class="leftBottom clearfix">
					<div class="imgList">
						<div class="smImg"><a href="#"><img src="images/test2.jpg" alt=""></a></div>
						<div class="smTxtBox">
							<p class="smTxt"><a href="#" class="txt_l">日右翼解禁钓鱼岛现场</a></p>
						</div>
						<div class="shade_box">
							<div class="shade_cont">
								<div class="shade">
									<h3><a href="#">河南摔婴案公安局长被停职</a></h3>
									<p>女婴父母疑被重金封口<span class="times timesIcon fr">104万</span></p>
									<p><span class="userName userIcon">Hcfun</span></p>
									<a href="#" class="shade_play"></a>
								</div>
							</div>
						</div>
					</div>
					<div class="imgList">
						<div class="smImg"><a href="#"><img src="images/test2.jpg" alt=""></a></div>
						<div class="smTxtBox">
							<p class="smTxt"><a href="#" class="txt_l">日右翼解禁钓鱼岛现场</a></p>
						</div>
						<div class="shade_box">
							<div class="shade_cont">
								<div class="shade">
									<h3><a href="#">河南摔婴案公安局长被停职</a></h3>
									<p>女婴父母疑被重金封口<span class="times timesIcon fr">104万</span></p>
									<p><span class="userName userIcon">Hcfun</span></p>
									<a href="#" class="shade_play"></a>
								</div>
							</div>
						</div>
					</div>
					<div class="imgList imgline">
						<div class="smImg"><a href="#"><img src="images/test2.jpg" alt=""></a></div>
						<div class="smTxtBox">
							<p class="smTxt"><a href="#" class="txt_l">日右翼解禁钓鱼岛现场</a></p>
						</div>
						<div class="shade_box">
							<div class="shade_cont">
								<div class="shade">
									<h3><a href="#">河南摔婴案公安局长被停职</a></h3>
									<p>女婴父母疑被重金封口<span class="times timesIcon fr">104万</span></p>
									<p><span class="userName userIcon">Hcfun</span></p>
									<a href="#" class="shade_play"></a>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="tabs_item">
				<div class="leftBottom clearfix">
					<div class="imgList">
						<div class="smImg"><a href="#"><img src="images/test2.jpg" alt=""></a></div>
						<div class="smTxtBox">
							<p class="smTxt"><a href="#" class="txt_l">日右翼解禁钓鱼岛现场</a></p>
						</div>
						<div class="shade_box">
							<div class="shade_cont">
								<div class="shade">
									<h3><a href="#">河南摔婴案公安局长被停职</a></h3>
									<p>女婴父母疑被重金封口<span class="times timesIcon fr">104万</span></p>
									<p><span class="userName userIcon">Hcfun</span></p>
									<a href="#" class="shade_play"></a>
								</div>
							</div>
						</div>
					</div>
					<div class="imgList">
						<div class="smImg"><a href="#"><img src="images/test2.jpg" alt=""></a></div>
						<div class="smTxtBox">
							<p class="smTxt"><a href="#" class="txt_l">日右翼解禁钓鱼岛现场</a></p>
						</div>
						<div class="shade_box">
							<div class="shade_cont">
								<div class="shade">
									<h3><a href="#">河南摔婴案公安局长被停职</a></h3>
									<p>女婴父母疑被重金封口<span class="times timesIcon fr">104万</span></p>
									<p><span class="userName userIcon">Hcfun</span></p>
									<a href="#" class="shade_play"></a>
								</div>
							</div>
						</div>
					</div>
					<div class="imgList imgline">
						<div class="smImg"><a href="#"><img src="images/test2.jpg" alt=""></a></div>
						<div class="smTxtBox">
							<p class="smTxt"><a href="#" class="txt_l">日右翼解禁钓鱼岛现场</a></p>
						</div>
						<div class="shade_box">
							<div class="shade_cont">
								<div class="shade">
									<h3><a href="#">河南摔婴案公安局长被停职</a></h3>
									<p>女婴父母疑被重金封口<span class="times timesIcon fr">104万</span></p>
									<p><span class="userName userIcon">Hcfun</span></p>
									<a href="#" class="shade_play"></a>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="tabs_item">
				<div class="leftBottom clearfix">
					<div class="imgList">
						<div class="smImg"><a href="#"><img src="images/test2.jpg" alt=""></a></div>
						<div class="smTxtBox">
							<p class="smTxt"><a href="#" class="txt_l">日右翼解禁钓鱼岛现场</a></p>
						</div>
						<div class="shade_box">
							<div class="shade_cont">
								<div class="shade">
									<h3><a href="#">河南摔婴案公安局长被停职</a></h3>
									<p>女婴父母疑被重金封口<span class="times timesIcon fr">104万</span></p>
									<p><span class="userName userIcon">Hcfun</span></p>
									<a href="#" class="shade_play"></a>
								</div>
							</div>
						</div>
					</div>
					<div class="imgList">
						<div class="smImg"><a href="#"><img src="images/test2.jpg" alt=""></a></div>
						<div class="smTxtBox">
							<p class="smTxt"><a href="#" class="txt_l">日右翼解禁钓鱼岛现场</a></p>
						</div>
						<div class="shade_box">
							<div class="shade_cont">
								<div class="shade">
									<h3><a href="#">河南摔婴案公安局长被停职</a></h3>
									<p>女婴父母疑被重金封口<span class="times timesIcon fr">104万</span></p>
									<p><span class="userName userIcon">Hcfun</span></p>
									<a href="#" class="shade_play"></a>
								</div>
							</div>
						</div>
					</div>
					<div class="imgList imgline">
						<div class="smImg"><a href="#"><img src="images/test2.jpg" alt=""></a></div>
						<div class="smTxtBox">
							<p class="smTxt"><a href="#" class="txt_l">日右翼解禁钓鱼岛现场</a></p>
						</div>
						<div class="shade_box">
							<div class="shade_cont">
								<div class="shade">
									<h3><a href="#">河南摔婴案公安局长被停职</a></h3>
									<p>女婴父母疑被重金封口<span class="times timesIcon fr">104万</span></p>
									<p><span class="userName userIcon">Hcfun</span></p>
									<a href="#" class="shade_play"></a>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="rightArea fr">
		<div class="comTitle clearfix">
			<ul class="title_tab fl">
				<li class="active"><a href="#">会员活动</a></li>
			</ul>
		</div>
		<div class="vipflexible pt clearfix">
			<div class="vipImgList fl">
				<a href="#"><img src="images/test2.jpg" alt=""></a>
				<h3><a href="#">开通影视会员倒找钱</a></h3>
			</div>
			<div class="vipImgList fr">
				<a href="#"><img src="images/test2.jpg" alt=""></a>
				<h3><a href="#">开通影视会员倒找钱</a></h3>
			</div>
		</div>
	</div>
</div>
<!--综艺-->
<div class="hr_50"></div>
<div class="main comWidth clearfix">
	<div class="leftArea fl">
		<div class="comTitle clearfix">
			<h2 class="userCent_tit fl">综艺</h2>
			<ul class="title_tab fl">
				<li class="active"><a href="#">最新</a></li>
				<li><a href="#">好莱坞</a></li>
				<li><a href="#">预告片</a></li>
				<li><a href="#">华语</a></li>
				<li><a href="#">全网独播</a></li>
			</ul>
		</div>
		<div class="hr_20"></div>
		<div class="tabs_box">
			<div class="tabs_item show">
				<div class="leftTop">
					<div class="imgList_b fl">
						<div class="imgItem"> <a href="#"><img src="images/test2.jpg" alt=""></a> </div>
						<div class="imgItemTxt">
							<div class="txt">
								<h3><a href="#">实拍暴莞 疯狂天灾1人遇难</a></h3>
								<p><span class="userName c1">Hcfun</span></p>
							</div>
						</div>
					</div>
					<div class="leftSmImg fl">
						<div class="imgList imgline">
							<div class="smImg"><a href="#"><img src="images/test2.jpg" alt=""></a></div>
							<div class="smTxtBox">
								<p class="smTxt"><a href="#" class="txt_l">日右翼解禁钓鱼岛现场</a></p>
							</div>
							<div class="shade_box">
								<div class="shade_cont">
									<div class="shade">
										<h3><a href="#">河南摔婴案公安局长被停职</a></h3>
										<p>女婴父母疑被重金封口<span class="times timesIcon fr">104万</span></p>
										<p><span class="userName userIcon">Hcfun</span></p>
										<a href="#" class="shade_play"></a> </div>
								</div>
							</div>
						</div>
						<div class="hr_20"></div>
						<div class="imgList imgline">
							<div class="smImg"><a href="#"><img src="images/test2.jpg" alt=""></a></div>
							<div class="smTxtBox">
								<p class="smTxt"><a href="#" class="txt_l">日右翼解禁钓鱼岛现场</a></p>
							</div>
							<div class="shade_box">
								<div class="shade_cont">
									<div class="shade">
										<h3><a href="#">河南摔婴案公安局长被停职</a></h3>
										<p>女婴父母疑被重金封口<span class="times timesIcon fr">104万</span></p>
										<p><span class="userName userIcon">Hcfun</span></p>
										<a href="#" class="shade_play"></a> </div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="tabs_item">
				<div class="leftTop">
					<div class="imgList_b fl">
						<div class="imgItem"> <a href="#"><img src="images/test2.jpg" alt=""></a> </div>
						<div class="imgItemTxt">
							<div class="txt">
								<h3><a href="#">实拍暴莞 疯狂天灾1人遇难</a></h3>
								<p><span class="userName c1">Hcfun</span></p>
							</div>
						</div>
					</div>
					<div class="leftSmImg fl">
						<div class="imgList imgline">
							<div class="smImg"><a href="#"><img src="images/test2.jpg" alt=""></a></div>
							<div class="smTxtBox">
								<p class="smTxt"><a href="#" class="txt_l">日右翼解禁钓鱼岛现场</a></p>
							</div>
							<div class="shade_box">
								<div class="shade_cont">
									<div class="shade">
										<h3><a href="#">河南摔婴案公安局长被停职</a></h3>
										<p>女婴父母疑被重金封口<span class="times timesIcon fr">104万</span></p>
										<p><span class="userName userIcon">Hcfun</span></p>
										<a href="#" class="shade_play"></a> </div>
								</div>
							</div>
						</div>
						<div class="hr_20"></div>
						<div class="imgList imgline">
							<div class="smImg"><a href="#"><img src="images/test2.jpg" alt=""></a></div>
							<div class="smTxtBox">
								<p class="smTxt"><a href="#" class="txt_l">日右翼解禁钓鱼岛现场</a></p>
							</div>
							<div class="shade_box">
								<div class="shade_cont">
									<div class="shade">
										<h3><a href="#">河南摔婴案公安局长被停职</a></h3>
										<p>女婴父母疑被重金封口<span class="times timesIcon fr">104万</span></p>
										<p><span class="userName userIcon">Hcfun</span></p>
										<a href="#" class="shade_play"></a> </div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="tabs_item">
				<div class="leftTop">
					<div class="imgList_b fl">
						<div class="imgItem"> <a href="#"><img src="images/test2.jpg" alt=""></a> </div>
						<div class="imgItemTxt">
							<div class="txt">
								<h3><a href="#">实拍暴莞 疯狂天灾1人遇难</a></h3>
								<p><span class="userName c1">Hcfun</span></p>
							</div>
						</div>
					</div>
					<div class="leftSmImg fl">
						<div class="imgList imgline">
							<div class="smImg"><a href="#"><img src="images/test2.jpg" alt=""></a></div>
							<div class="smTxtBox">
								<p class="smTxt"><a href="#" class="txt_l">日右翼解禁钓鱼岛现场</a></p>
							</div>
							<div class="shade_box">
								<div class="shade_cont">
									<div class="shade">
										<h3><a href="#">河南摔婴案公安局长被停职</a></h3>
										<p>女婴父母疑被重金封口<span class="times timesIcon fr">104万</span></p>
										<p><span class="userName userIcon">Hcfun</span></p>
										<a href="#" class="shade_play"></a> </div>
								</div>
							</div>
						</div>
						<div class="hr_20"></div>
						<div class="imgList imgline">
							<div class="smImg"><a href="#"><img src="images/test2.jpg" alt=""></a></div>
							<div class="smTxtBox">
								<p class="smTxt"><a href="#" class="txt_l">日右翼解禁钓鱼岛现场</a></p>
							</div>
							<div class="shade_box">
								<div class="shade_cont">
									<div class="shade">
										<h3><a href="#">河南摔婴案公安局长被停职</a></h3>
										<p>女婴父母疑被重金封口<span class="times timesIcon fr">104万</span></p>
										<p><span class="userName userIcon">Hcfun</span></p>
										<a href="#" class="shade_play"></a> </div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="tabs_item">
				<div class="leftTop">
					<div class="imgList_b fl">
						<div class="imgItem"> <a href="#"><img src="images/test2.jpg" alt=""></a> </div>
						<div class="imgItemTxt">
							<div class="txt">
								<h3><a href="#">实拍暴莞 疯狂天灾1人遇难</a></h3>
								<p><span class="userName c1">Hcfun</span></p>
							</div>
						</div>
					</div>
					<div class="leftSmImg fl">
						<div class="imgList imgline">
							<div class="smImg"><a href="#"><img src="images/test2.jpg" alt=""></a></div>
							<div class="smTxtBox">
								<p class="smTxt"><a href="#" class="txt_l">日右翼解禁钓鱼岛现场</a></p>
							</div>
							<div class="shade_box">
								<div class="shade_cont">
									<div class="shade">
										<h3><a href="#">河南摔婴案公安局长被停职</a></h3>
										<p>女婴父母疑被重金封口<span class="times timesIcon fr">104万</span></p>
										<p><span class="userName userIcon">Hcfun</span></p>
										<a href="#" class="shade_play"></a> </div>
								</div>
							</div>
						</div>
						<div class="hr_20"></div>
						<div class="imgList imgline">
							<div class="smImg"><a href="#"><img src="images/test2.jpg" alt=""></a></div>
							<div class="smTxtBox">
								<p class="smTxt"><a href="#" class="txt_l">日右翼解禁钓鱼岛现场</a></p>
							</div>
							<div class="shade_box">
								<div class="shade_cont">
									<div class="shade">
										<h3><a href="#">河南摔婴案公安局长被停职</a></h3>
										<p>女婴父母疑被重金封口<span class="times timesIcon fr">104万</span></p>
										<p><span class="userName userIcon">Hcfun</span></p>
										<a href="#" class="shade_play"></a> </div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="tabs_item">
				<div class="leftTop">
					<div class="imgList_b fl">
						<div class="imgItem"> <a href="#"><img src="images/test2.jpg" alt=""></a> </div>
						<div class="imgItemTxt">
							<div class="txt">
								<h3><a href="#">实拍暴莞 疯狂天灾1人遇难</a></h3>
								<p><span class="userName c1">Hcfun</span></p>
							</div>
						</div>
					</div>
					<div class="leftSmImg fl">
						<div class="imgList imgline">
							<div class="smImg"><a href="#"><img src="images/test2.jpg" alt=""></a></div>
							<div class="smTxtBox">
								<p class="smTxt"><a href="#" class="txt_l">日右翼解禁钓鱼岛现场</a></p>
							</div>
							<div class="shade_box">
								<div class="shade_cont">
									<div class="shade">
										<h3><a href="#">河南摔婴案公安局长被停职</a></h3>
										<p>女婴父母疑被重金封口<span class="times timesIcon fr">104万</span></p>
										<p><span class="userName userIcon">Hcfun</span></p>
										<a href="#" class="shade_play"></a> </div>
								</div>
							</div>
						</div>
						<div class="hr_20"></div>
						<div class="imgList imgline">
							<div class="smImg"><a href="#"><img src="images/test2.jpg" alt=""></a></div>
							<div class="smTxtBox">
								<p class="smTxt"><a href="#" class="txt_l">日右翼解禁钓鱼岛现场</a></p>
							</div>
							<div class="shade_box">
								<div class="shade_cont">
									<div class="shade">
										<h3><a href="#">河南摔婴案公安局长被停职</a></h3>
										<p>女婴父母疑被重金封口<span class="times timesIcon fr">104万</span></p>
										<p><span class="userName userIcon">Hcfun</span></p>
										<a href="#" class="shade_play"></a> </div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="rightArea fr">
		<div class="comTitle clearfix">
			<ul class="title_tab fl">
				<li class="active"><a href="#">电视剧排行</a></li>
				<li><a href="#">大陆</a></li>
				<li><a href="#">韩国</a></li>
				<li><a href="#">港台</a></li>
				<li><a href="#">英美</a></li>
			</ul>
		</div>
		<div class="tabList">
			<div class="item clearfix show">
				<ul class="tabs tabs_b">
					<li><span class="yellow">1</span><a href="#">龙门镖局</a><i class="tabs_cont">快乐大本营2013</i></li>
					<li><span class="yellow">2</span><a href="#">龙门镖局</a><i class="tabs_cont">快乐大本营2013</i></li>
					<li><span class="yellow">3</span><a href="#">龙门镖局</a><i class="tabs_cont">快乐大本营2013</i></li>
					<li><span>4</span><a href="#">龙门镖局</a><i class="tabs_cont">快乐大本营2013</i></li>
					<li><span>5</span><a href="#">龙门镖局</a><i class="tabs_cont">快乐大本营2013</i></li>
					<li><span>6</span><a href="#">龙门镖局</a><i class="tabs_cont">快乐大本营2013</i></li>
					<li><span>7</span><a href="#">龙门镖局</a><i class="tabs_cont">快乐大本营2013</i></li>
				</ul>
			</div>
			<div class="item clearfix">
				<ul class="tabs tabs_b">
					<li><span class="yellow">1</span><a href="#">龙门镖局</a><i class="tabs_cont">222013</i></li>
					<li><span class="yellow">2</span><a href="#">龙门镖局</a><i class="tabs_cont">快乐大本营2013</i></li>
					<li><span class="yellow">3</span><a href="#">龙门镖局</a><i class="tabs_cont">快乐大本营2013</i></li>
					<li><span>4</span><a href="#">龙门镖局</a><i class="tabs_cont">快乐大本营2013</i></li>
					<li><span>5</span><a href="#">龙门镖局</a><i class="tabs_cont">快乐大本营2013</i></li>
					<li><span>6</span><a href="#">龙门镖局</a><i class="tabs_cont">快乐大本营2013</i></li>
					<li><span>7</span><a href="#">龙门镖局</a><i class="tabs_cont">快乐大本营2013</i></li>
				</ul>
			</div>
			<div class="item clearfix">
				<ul class="tabs tabs_b">
					<li><span class="yellow">1</span><a href="#">龙门镖局</a><i class="tabs_cont">33332013</i></li>
					<li><span class="yellow">2</span><a href="#">龙门镖局</a><i class="tabs_cont">快乐大本营2013</i></li>
					<li><span class="yellow">3</span><a href="#">龙门镖局</a><i class="tabs_cont">快乐大本营2013</i></li>
					<li><span>4</span><a href="#">龙门镖局</a><i class="tabs_cont">快乐大本营2013</i></li>
					<li><span>5</span><a href="#">龙门镖局</a><i class="tabs_cont">快乐大本营2013</i></li>
					<li><span>6</span><a href="#">龙门镖局</a><i class="tabs_cont">快乐大本营2013</i></li>
					<li><span>7</span><a href="#">龙门镖局</a><i class="tabs_cont">快乐大本营2013</i></li>
				</ul>
			</div>
			<div class="item clearfix">
				<ul class="tabs tabs_b">
					<li><span class="yellow">1</span><a href="#">龙门镖局</a><i class="tabs_cont">444442013</i></li>
					<li><span class="yellow">2</span><a href="#">龙门镖局</a><i class="tabs_cont">快乐大本营2013</i></li>
					<li><span class="yellow">3</span><a href="#">龙门镖局</a><i class="tabs_cont">快乐大本营2013</i></li>
					<li><span>4</span><a href="#">龙门镖局</a><i class="tabs_cont">快乐大本营2013</i></li>
					<li><span>5</span><a href="#">龙门镖局</a><i class="tabs_cont">快乐大本营2013</i></li>
					<li><span>6</span><a href="#">龙门镖局</a><i class="tabs_cont">快乐大本营2013</i></li>
					<li><span>7</span><a href="#">龙门镖局</a><i class="tabs_cont">快乐大本营2013</i></li>
				</ul>
			</div>
			<div class="item clearfix">
				<ul class="tabs tabs_b">
					<li><span class="yellow">1</span><a href="#">龙门镖局</a><i class="tabs_cont">55552013</i></li>
					<li><span class="yellow">2</span><a href="#">龙门镖局</a><i class="tabs_cont">快乐大本营2013</i></li>
					<li><span class="yellow">3</span><a href="#">龙门镖局</a><i class="tabs_cont">快乐大本营2013</i></li>
					<li><span>4</span><a href="#">龙门镖局</a><i class="tabs_cont">快乐大本营2013</i></li>
					<li><span>5</span><a href="#">龙门镖局</a><i class="tabs_cont">快乐大本营2013</i></li>
					<li><span>6</span><a href="#">龙门镖局</a><i class="tabs_cont">快乐大本营2013</i></li>
					<li><span>7</span><a href="#">龙门镖局</a><i class="tabs_cont">快乐大本营2013</i></li>
				</ul>
			</div>
		</div>
		<div class="seniority"> <a href="#">指数排行榜</a><span>»</span><a href="#">更多排行</a><span>»</span> </div>
	</div>
</div>
<div class="main comWidth clearfix">
	<div class="leftArea fl">
		<div class="ykAd_642">ad2</div>
	</div>
	<div class="rightArea fr">
		<div class="list_smImg mb10">
			<div class="list_img">
				<a href="#"><img src="images/test2.jpg" alt=""></a>
			</div>
			<div class="list_txt">
				<h3 class="user_tit"><a href="#">异地恋孩子真的伤不起</a></h3>
				<p>&lt;微笑&gt;</p>
			</div>
		</div>
		<div class="list_smImg">
			<div class="list_img">
				<a href="#"><img src="images/test2.jpg" alt=""></a>
			</div>
			<div class="list_txt">
				<h3 class="user_tit"><a href="#">异地恋孩子真的伤不起</a></h3>
				<p>&lt;微笑&gt;</p>
			</div>
		</div>
	</div>
</div>
<!--娱乐 • 搞笑-->
<div class="hr_50"></div>
<div class="comTitle clearfix comWidth">
	<h2 class="userCent_tit fl">娱乐 • 搞笑</h2>
	<ul class="title_tab fl">
		<li class="active"><a href="#">娱乐资讯</a></li>
		<li><a href="#">电视资讯</a></li>
		<li><a href="#">电影资讯</a></li>
	</ul>
</div>
<div class="hr_20"></div>
<div class="main comWidth clearfix">
	<div class="leftArea fl">
		<div class="tabs_box">
			<div class="tabs_item show">
				<div class="ykArea">
					<div class="imgList">
						<div class="smImg"><a href="#"><img src="images/test2.jpg" alt=""></a></div>
						<div class="smTxtBox">
							<p class="smTxt smTxt_r"></p>
						</div>
					</div>
					<div class="userLink">
						<div class="company">
							<img src="images/test3.jpg" class="companyHead">
							<span class="companyName">白富</span>
						</div>
						<h3 class="user_tit"><a href="#">白富美为何没有男朋友</a></h3>
						<p class="notes"><span class="times timesIcon">104万</span></p>
					</div>
				</div>
				<div class="ykArea">
					<div class="imgList">
						<div class="smImg"><a href="#"><img src="images/test2.jpg" alt=""></a></div>
						<div class="smTxtBox">
							<p class="smTxt smTxt_r"></p>
						</div>
					</div>
					<div class="userLink">
						<div class="company">
							<img src="images/test3.jpg" class="companyHead">
							<span class="companyName">白富</span>
						</div>
						<h3 class="user_tit"><a href="#">白富美为何没有男朋友</a></h3>
						<p class="notes"><span class="times timesIcon">104万</span></p>
					</div>
				</div>
				<div class="ykArea">
					<div class="imgList">
						<div class="smImg"><a href="#"><img src="images/test2.jpg" alt=""></a></div>
						<div class="smTxtBox">
							<p class="smTxt smTxt_r"></p>
						</div>
					</div>
					<div class="userLink">
						<div class="company">
							<img src="images/test3.jpg" class="companyHead">
							<span class="companyName">白富</span>
						</div>
						<h3 class="user_tit"><a href="#">白富美为何没有男朋友</a></h3>
						<p class="notes"><span class="times timesIcon">104万</span></p>
					</div>
				</div>
				<div class="ykArea">
					<div class="imgList">
						<div class="smImg"><a href="#"><img src="images/test2.jpg" alt=""></a></div>
						<div class="smTxtBox">
							<p class="smTxt smTxt_r"></p>
						</div>
					</div>
					<div class="userLink">
						<div class="company">
							<img src="images/test3.jpg" class="companyHead">
							<span class="companyName">白富</span>
						</div>
						<h3 class="user_tit"><a href="#">白富美为何没有男朋友</a></h3>
						<p class="notes"><span class="times timesIcon">104万</span></p>
					</div>
				</div>
				<div class="ykArea">
					<div class="imgList">
						<div class="smImg"><a href="#"><img src="images/test2.jpg" alt=""></a></div>
						<div class="smTxtBox">
							<p class="smTxt smTxt_r"></p>
						</div>
					</div>
					<div class="userLink">
						<div class="company">
							<img src="images/test3.jpg" class="companyHead">
							<span class="companyName">白富</span>
						</div>
						<h3 class="user_tit"><a href="#">白富美为何没有男朋友</a></h3>
						<p class="notes"><span class="times timesIcon">104万</span></p>
					</div>
				</div>
				<div class="ykArea">
					<div class="imgList">
						<div class="smImg"><a href="#"><img src="images/test2.jpg" alt=""></a></div>
						<div class="smTxtBox">
							<p class="smTxt smTxt_r"></p>
						</div>
					</div>
					<div class="userLink">
						<div class="company">
							<img src="images/test3.jpg" class="companyHead">
							<span class="companyName">白富</span>
						</div>
						<h3 class="user_tit"><a href="#">白富美为何没有男朋友</a></h3>
						<p class="notes"><span class="times timesIcon">104万</span></p>
					</div>
				</div>
			</div>
			<div class="tabs_item">
				<div class="ykArea">
					<div class="imgList">
						<div class="smImg"><a href="#"><img src="images/test2.jpg" alt=""></a></div>
						<div class="smTxtBox">
							<p class="smTxt smTxt_r"></p>
						</div>
					</div>
					<div class="userLink">
						<div class="company">
							<img src="images/test3.jpg" class="companyHead">
							<span class="companyName">白富</span>
						</div>
						<h3 class="user_tit"><a href="#">白富美为何没有男朋友</a></h3>
						<p class="notes"><span class="times timesIcon">104万</span></p>
					</div>
				</div>
				<div class="ykArea">
					<div class="imgList">
						<div class="smImg"><a href="#"><img src="images/test2.jpg" alt=""></a></div>
						<div class="smTxtBox">
							<p class="smTxt smTxt_r"></p>
						</div>
					</div>
					<div class="userLink">
						<div class="company">
							<img src="images/test3.jpg" class="companyHead">
							<span class="companyName">白富</span>
						</div>
						<h3 class="user_tit"><a href="#">白富美为何没有男朋友</a></h3>
						<p class="notes"><span class="times timesIcon">104万</span></p>
					</div>
				</div>
				<div class="ykArea">
					<div class="imgList">
						<div class="smImg"><a href="#"><img src="images/test2.jpg" alt=""></a></div>
						<div class="smTxtBox">
							<p class="smTxt smTxt_r"></p>
						</div>
					</div>
					<div class="userLink">
						<div class="company">
							<img src="images/test3.jpg" class="companyHead">
							<span class="companyName">白富</span>
						</div>
						<h3 class="user_tit"><a href="#">白富美为何没有男朋友</a></h3>
						<p class="notes"><span class="times timesIcon">104万</span></p>
					</div>
				</div>
				<div class="ykArea">
					<div class="imgList">
						<div class="smImg"><a href="#"><img src="images/test2.jpg" alt=""></a></div>
						<div class="smTxtBox">
							<p class="smTxt smTxt_r"></p>
						</div>
					</div>
					<div class="userLink">
						<div class="company">
							<img src="images/test3.jpg" class="companyHead">
							<span class="companyName">白富</span>
						</div>
						<h3 class="user_tit"><a href="#">白富美为何没有男朋友</a></h3>
						<p class="notes"><span class="times timesIcon">104万</span></p>
					</div>
				</div>
				<div class="ykArea">
					<div class="imgList">
						<div class="smImg"><a href="#"><img src="images/test2.jpg" alt=""></a></div>
						<div class="smTxtBox">
							<p class="smTxt smTxt_r"></p>
						</div>
					</div>
					<div class="userLink">
						<div class="company">
							<img src="images/test3.jpg" class="companyHead">
							<span class="companyName">白富</span>
						</div>
						<h3 class="user_tit"><a href="#">白富美为何没有男朋友</a></h3>
						<p class="notes"><span class="times timesIcon">104万</span></p>
					</div>
				</div>
				<div class="ykArea">
					<div class="imgList">
						<div class="smImg"><a href="#"><img src="images/test2.jpg" alt=""></a></div>
						<div class="smTxtBox">
							<p class="smTxt smTxt_r"></p>
						</div>
					</div>
					<div class="userLink">
						<div class="company">
							<img src="images/test3.jpg" class="companyHead">
							<span class="companyName">白富</span>
						</div>
						<h3 class="user_tit"><a href="#">白富美为何没有男朋友</a></h3>
						<p class="notes"><span class="times timesIcon">104万</span></p>
					</div>
				</div>
			</div>
			<div class="tabs_item">
				<div class="ykArea">
					<div class="imgList">
						<div class="smImg"><a href="#"><img src="images/test2.jpg" alt=""></a></div>
						<div class="smTxtBox">
							<p class="smTxt smTxt_r"></p>
						</div>
					</div>
					<div class="userLink">
						<div class="company">
							<img src="images/test3.jpg" class="companyHead">
							<span class="companyName">白富</span>
						</div>
						<h3 class="user_tit"><a href="#">白富美为何没有男朋友</a></h3>
						<p class="notes"><span class="times timesIcon">104万</span></p>
					</div>
				</div>
				<div class="ykArea">
					<div class="imgList">
						<div class="smImg"><a href="#"><img src="images/test2.jpg" alt=""></a></div>
						<div class="smTxtBox">
							<p class="smTxt smTxt_r"></p>
						</div>
					</div>
					<div class="userLink">
						<div class="company">
							<img src="images/test3.jpg" class="companyHead">
							<span class="companyName">白富</span>
						</div>
						<h3 class="user_tit"><a href="#">白富美为何没有男朋友</a></h3>
						<p class="notes"><span class="times timesIcon">104万</span></p>
					</div>
				</div>
				<div class="ykArea">
					<div class="imgList">
						<div class="smImg"><a href="#"><img src="images/test2.jpg" alt=""></a></div>
						<div class="smTxtBox">
							<p class="smTxt smTxt_r"></p>
						</div>
					</div>
					<div class="userLink">
						<div class="company">
							<img src="images/test3.jpg" class="companyHead">
							<span class="companyName">白富</span>
						</div>
						<h3 class="user_tit"><a href="#">白富美为何没有男朋友</a></h3>
						<p class="notes"><span class="times timesIcon">104万</span></p>
					</div>
				</div>
				<div class="ykArea">
					<div class="imgList">
						<div class="smImg"><a href="#"><img src="images/test2.jpg" alt=""></a></div>
						<div class="smTxtBox">
							<p class="smTxt smTxt_r"></p>
						</div>
					</div>
					<div class="userLink">
						<div class="company">
							<img src="images/test3.jpg" class="companyHead">
							<span class="companyName">白富</span>
						</div>
						<h3 class="user_tit"><a href="#">白富美为何没有男朋友</a></h3>
						<p class="notes"><span class="times timesIcon">104万</span></p>
					</div>
				</div>
				<div class="ykArea">
					<div class="imgList">
						<div class="smImg"><a href="#"><img src="images/test2.jpg" alt=""></a></div>
						<div class="smTxtBox">
							<p class="smTxt smTxt_r"></p>
						</div>
					</div>
					<div class="userLink">
						<div class="company">
							<img src="images/test3.jpg" class="companyHead">
							<span class="companyName">白富</span>
						</div>
						<h3 class="user_tit"><a href="#">白富美为何没有男朋友</a></h3>
						<p class="notes"><span class="times timesIcon">104万</span></p>
					</div>
				</div>
				<div class="ykArea">
					<div class="imgList">
						<div class="smImg"><a href="#"><img src="images/test2.jpg" alt=""></a></div>
						<div class="smTxtBox">
							<p class="smTxt smTxt_r"></p>
						</div>
					</div>
					<div class="userLink">
						<div class="company">
							<img src="images/test3.jpg" class="companyHead">
							<span class="companyName">白富</span>
						</div>
						<h3 class="user_tit"><a href="#">白富美为何没有男朋友</a></h3>
						<p class="notes"><span class="times timesIcon">104万</span></p>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="rightArea fr">
		<div class="list_smImg mb10">
			<div class="list_img">
				<a href="#"><img src="images/test2.jpg" alt=""></a>
			</div>
			<div class="list_txt">
				<h3 class="user_tit"><a href="#">异地恋孩子真的伤不起</a></h3>
				<p>&lt;微笑&gt;</p>
			</div>
		</div>
		<div class="list_smImg  mb10">
			<div class="list_img">
				<a href="#"><img src="images/test2.jpg" alt=""></a>
			</div>
			<div class="list_txt">
				<h3 class="user_tit"><a href="#">异地恋孩子真的伤不起</a></h3>
				<p>&lt;微笑&gt;</p>
			</div>
		</div>
		<div class="list_smImg mb">
			<div class="list_img">
				<a href="#"><img src="images/test2.jpg" alt=""></a>
			</div>
			<div class="list_txt">
				<h3 class="user_tit"><a href="#">异地恋孩子真的伤不起</a></h3>
				<p>&lt;微笑&gt;</p>
			</div>
		</div>
		<div class="list_smImg mb10">
			<div class="list_img">
				<a href="#"><img src="images/test2.jpg" alt=""></a>
			</div>
			<div class="list_txt">
				<h3 class="user_tit"><a href="#">异地恋孩子真的伤不起</a></h3>
				<p>&lt;微笑&gt;</p>
			</div>
		</div>
		<div class="list_smImg mb10">
			<div class="list_img">
				<a href="#"><img src="images/test2.jpg" alt=""></a>
			</div>
			<div class="list_txt">
				<h3 class="user_tit"><a href="#">异地恋孩子真的伤不起</a></h3>
				<p>&lt;微笑&gt;</p>
			</div>
		</div>
		<div class="list_smImg">
			<div class="list_img">
				<a href="#"><img src="images/test2.jpg" alt=""></a>
			</div>
			<div class="list_txt">
				<h3 class="user_tit"><a href="#">异地恋孩子真的伤不起</a></h3>
				<p>&lt;微笑&gt;</p>
			</div>
		</div>
	</div>
</div>
<!--音乐-->
<div class="hr_50"></div>
<div class="main comWidth clearfix">
	<div class="leftArea fl">
		<div class="comTitle clearfix">
			<h2 class="userCent_tit fl">音乐</h2>
			<ul class="title_tab fl">
				<li class="active"><a href="#">最热音乐</a></li>
				<li><a href="#">华语音乐</a></li>
				<li><a href="#">欧美音乐</a></li>
				<li><a href="#">日韩音乐</a></li>
				<li><a href="#">音乐牛人</a></li>
			</ul>
		</div>
		<div class="tabs_box pt">
			<div class="tabs_item clearfix show">
				<div class="ykArea">
					<div class="imgList">
						<div class="smImg"><a href="#"><img src="images/test2.jpg" alt=""></a></div>
						<div class="smTxtBox">
							<p class="smTxt smTxt_r"></p>
						</div>
					</div>
					<div class="userLink music">
						<h3 class="user_tit"><a href="#">白富美为何没有男朋友</a></h3>
						<p class="notes"><span class="times timesIcon">104万</span><span class="userName userIcon c1">Hcfun</span></p>
					</div>
				</div>
				<div class="ykArea">
					<div class="imgList">
						<div class="smImg"><a href="#"><img src="images/test2.jpg" alt=""></a></div>
						<div class="smTxtBox">
							<p class="smTxt smTxt_r"></p>
						</div>
					</div>
					<div class="userLink music">
						<h3 class="user_tit"><a href="#">白富美为何没有男朋友</a></h3>
						<p class="notes"><span class="times timesIcon">104万</span><span class="userName userIcon c1">Hcfun</span></p>
					</div>
				</div>
				<div class="ykArea">
					<div class="imgList">
						<div class="smImg"><a href="#"><img src="images/test2.jpg" alt=""></a></div>
						<div class="smTxtBox">
							<p class="smTxt smTxt_r"></p>
						</div>
					</div>
					<div class="userLink music">
						<h3 class="user_tit"><a href="#">白富美为何没有男朋友</a></h3>
						<p class="notes"><span class="times timesIcon">104万</span><span class="userName userIcon c1">Hcfun</span></p>
					</div>
				</div>
			</div>
			<div class="tabs_item clearfix">
				<div class="ykArea">
					<div class="imgList">
						<div class="smImg"><a href="#"><img src="images/test2.jpg" alt=""></a></div>
						<div class="smTxtBox">
							<p class="smTxt smTxt_r"></p>
						</div>
					</div>
					<div class="userLink music">
						<h3 class="user_tit"><a href="#">白富美为何没有男朋友</a></h3>
						<p class="notes"><span class="times timesIcon">104万</span><span class="userName userIcon c1">Hcfun</span></p>
					</div>
				</div>
				<div class="ykArea">
					<div class="imgList">
						<div class="smImg"><a href="#"><img src="images/test2.jpg" alt=""></a></div>
						<div class="smTxtBox">
							<p class="smTxt smTxt_r"></p>
						</div>
					</div>
					<div class="userLink music">
						<h3 class="user_tit"><a href="#">白富美为何没有男朋友</a></h3>
						<p class="notes"><span class="times timesIcon">104万</span><span class="userName userIcon c1">Hcfun</span></p>
					</div>
				</div>
				<div class="ykArea">
					<div class="imgList">
						<div class="smImg"><a href="#"><img src="images/test2.jpg" alt=""></a></div>
						<div class="smTxtBox">
							<p class="smTxt smTxt_r"></p>
						</div>
					</div>
					<div class="userLink music">
						<h3 class="user_tit"><a href="#">白富美为何没有男朋友</a></h3>
						<p class="notes"><span class="times timesIcon">104万</span><span class="userName userIcon c1">Hcfun</span></p>
					</div>
				</div>
			</div>
			<div class="tabs_item clearfix">
				<div class="ykArea">
					<div class="imgList">
						<div class="smImg"><a href="#"><img src="images/test2.jpg" alt=""></a></div>
						<div class="smTxtBox">
							<p class="smTxt smTxt_r"></p>
						</div>
					</div>
					<div class="userLink music">
						<h3 class="user_tit"><a href="#">白富美为何没有男朋友</a></h3>
						<p class="notes"><span class="times timesIcon">104万</span><span class="userName userIcon c1">Hcfun</span></p>
					</div>
				</div>
				<div class="ykArea">
					<div class="imgList">
						<div class="smImg"><a href="#"><img src="images/test2.jpg" alt=""></a></div>
						<div class="smTxtBox">
							<p class="smTxt smTxt_r"></p>
						</div>
					</div>
					<div class="userLink music">
						<h3 class="user_tit"><a href="#">白富美为何没有男朋友</a></h3>
						<p class="notes"><span class="times timesIcon">104万</span><span class="userName userIcon c1">Hcfun</span></p>
					</div>
				</div>
				<div class="ykArea">
					<div class="imgList">
						<div class="smImg"><a href="#"><img src="images/test2.jpg" alt=""></a></div>
						<div class="smTxtBox">
							<p class="smTxt smTxt_r"></p>
						</div>
					</div>
					<div class="userLink music">
						<h3 class="user_tit"><a href="#">白富美为何没有男朋友</a></h3>
						<p class="notes"><span class="times timesIcon">104万</span><span class="userName userIcon c1">Hcfun</span></p>
					</div>
				</div>
			</div>
			<div class="tabs_item clearfix">
				<div class="ykArea">
					<div class="imgList">
						<div class="smImg"><a href="#"><img src="images/test2.jpg" alt=""></a></div>
						<div class="smTxtBox">
							<p class="smTxt smTxt_r"></p>
						</div>
					</div>
					<div class="userLink music">
						<h3 class="user_tit"><a href="#">白富美为何没有男朋友</a></h3>
						<p class="notes"><span class="times timesIcon">104万</span><span class="userName userIcon c1">Hcfun</span></p>
					</div>
				</div>
				<div class="ykArea">
					<div class="imgList">
						<div class="smImg"><a href="#"><img src="images/test2.jpg" alt=""></a></div>
						<div class="smTxtBox">
							<p class="smTxt smTxt_r"></p>
						</div>
					</div>
					<div class="userLink music">
						<h3 class="user_tit"><a href="#">白富美为何没有男朋友</a></h3>
						<p class="notes"><span class="times timesIcon">104万</span><span class="userName userIcon c1">Hcfun</span></p>
					</div>
				</div>
				<div class="ykArea">
					<div class="imgList">
						<div class="smImg"><a href="#"><img src="images/test2.jpg" alt=""></a></div>
						<div class="smTxtBox">
							<p class="smTxt smTxt_r"></p>
						</div>
					</div>
					<div class="userLink music">
						<h3 class="user_tit"><a href="#">白富美为何没有男朋友</a></h3>
						<p class="notes"><span class="times timesIcon">104万</span><span class="userName userIcon c1">Hcfun</span></p>
					</div>
				</div>
			</div>
			<div class="tabs_item clearfix">
				<div class="ykArea">
					<div class="imgList">
						<div class="smImg"><a href="#"><img src="images/test2.jpg" alt=""></a></div>
						<div class="smTxtBox">
							<p class="smTxt smTxt_r"></p>
						</div>
					</div>
					<div class="userLink music">
						<h3 class="user_tit"><a href="#">白富美为何没有男朋友</a></h3>
						<p class="notes"><span class="times timesIcon">104万</span><span class="userName userIcon c1">Hcfun</span></p>
					</div>
				</div>
				<div class="ykArea">
					<div class="imgList">
						<div class="smImg"><a href="#"><img src="images/test2.jpg" alt=""></a></div>
						<div class="smTxtBox">
							<p class="smTxt smTxt_r"></p>
						</div>
					</div>
					<div class="userLink music">
						<h3 class="user_tit"><a href="#">白富美为何没有男朋友</a></h3>
						<p class="notes"><span class="times timesIcon">104万</span><span class="userName userIcon c1">Hcfun</span></p>
					</div>
				</div>
				<div class="ykArea">
					<div class="imgList">
						<div class="smImg"><a href="#"><img src="images/test2.jpg" alt=""></a></div>
						<div class="smTxtBox">
							<p class="smTxt smTxt_r"></p>
						</div>
					</div>
					<div class="userLink music">
						<h3 class="user_tit"><a href="#">白富美为何没有男朋友</a></h3>
						<p class="notes"><span class="times timesIcon">104万</span><span class="userName userIcon c1">Hcfun</span></p>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="rightArea fr">
		<div class="comTitle clearfix">
			<ul class="title_tab fl">
				<li class="active"><a href="#">会员活动</a></li>
			</ul>
		</div>
		<div class="tabList">
			<div class="item clearfix show">
				<ul class="tabs tabs_b">
					<li><span class="yellow">1</span><a href="#">龙门镖局</a><i class="tabs_cont">快乐大本营2013</i></li>
					<li><span class="yellow">2</span><a href="#">龙门镖局</a><i class="tabs_cont">快乐大本营2013</i></li>
					<li><span class="yellow">3</span><a href="#">龙门镖局</a><i class="tabs_cont">快乐大本营2013</i></li>
					<li><span>4</span><a href="#">龙门镖局</a><i class="tabs_cont">快乐大本营2013</i></li>
					<li><span>5</span><a href="#">龙门镖局</a><i class="tabs_cont">快乐大本营2013</i></li>
				</ul>
			</div>
			<div class="item clearfix">
				<ul class="tabs tabs_b">
					<li><span class="yellow">1</span><a href="#">龙门镖局</a><i class="tabs_cont">222013</i></li>
					<li><span class="yellow">2</span><a href="#">龙门镖局</a><i class="tabs_cont">快乐大本营2013</i></li>
					<li><span class="yellow">3</span><a href="#">龙门镖局</a><i class="tabs_cont">快乐大本营2013</i></li>
					<li><span>4</span><a href="#">龙门镖局</a><i class="tabs_cont">快乐大本营2013</i></li>
					<li><span>5</span><a href="#">龙门镖局</a><i class="tabs_cont">快乐大本营2013</i></li>
				</ul>
			</div>
			<div class="item clearfix">
				<ul class="tabs tabs_b">
					<li><span class="yellow">1</span><a href="#">龙门镖局</a><i class="tabs_cont">33332013</i></li>
					<li><span class="yellow">2</span><a href="#">龙门镖局</a><i class="tabs_cont">快乐大本营2013</i></li>
					<li><span class="yellow">3</span><a href="#">龙门镖局</a><i class="tabs_cont">快乐大本营2013</i></li>
					<li><span>4</span><a href="#">龙门镖局</a><i class="tabs_cont">快乐大本营2013</i></li>
					<li><span>5</span><a href="#">龙门镖局</a><i class="tabs_cont">快乐大本营2013</i></li>
				</ul>
			</div>
			<div class="item clearfix">
				<ul class="tabs tabs_b">
					<li><span class="yellow">1</span><a href="#">龙门镖局</a><i class="tabs_cont">444442013</i></li>
					<li><span class="yellow">2</span><a href="#">龙门镖局</a><i class="tabs_cont">快乐大本营2013</i></li>
					<li><span class="yellow">3</span><a href="#">龙门镖局</a><i class="tabs_cont">快乐大本营2013</i></li>
					<li><span>4</span><a href="#">龙门镖局</a><i class="tabs_cont">快乐大本营2013</i></li>
					<li><span>5</span><a href="#">龙门镖局</a><i class="tabs_cont">快乐大本营2013</i></li>
				</ul>
			</div>
			<div class="item clearfix">
				<ul class="tabs tabs_b">
					<li><span class="yellow">1</span><a href="#">龙门镖局</a><i class="tabs_cont">55552013</i></li>
					<li><span class="yellow">2</span><a href="#">龙门镖局</a><i class="tabs_cont">快乐大本营2013</i></li>
					<li><span class="yellow">3</span><a href="#">龙门镖局</a><i class="tabs_cont">快乐大本营2013</i></li>
					<li><span>4</span><a href="#">龙门镖局</a><i class="tabs_cont">快乐大本营2013</i></li>
					<li><span>5</span><a href="#">龙门镖局</a><i class="tabs_cont">快乐大本营2013</i></li>
				</ul>
			</div>
		</div>
		<div class="seniority music_sen"> <a href="#">指数排行榜</a><span>»</span><a href="#">更多排行</a><span>»</span> </div>
	</div>
</div>
<div class="hr_20"></div>
<div class="main comWidth clearfix">
	<div class="leftArea fl">
		<div class="ykAd_642">ad2</div>
	</div>
	<div class="rightArea fr">
		<div class="list_smImg mb10">
			<div class="list_img">
				<a href="#"><img src="images/test2.jpg" alt=""></a>
			</div>
			<div class="list_txt">
				<h3 class="user_tit"><a href="#">异地恋孩子真的伤不起</a></h3>
				<p>&lt;微笑&gt;</p>
			</div>
		</div>
		<div class="list_smImg">
			<div class="list_img">
				<a href="#"><img src="images/test2.jpg" alt=""></a>
			</div>
			<div class="list_txt">
				<h3 class="user_tit"><a href="#">异地恋孩子真的伤不起</a></h3>
				<p>&lt;微笑&gt;</p>
			</div>
		</div>
	</div>
</div>
<!--体育-->
<div class="hr_50"></div>
<div class="comTitle clearfix comWidth">
	<h2 class="userCent_tit fl">体育 • 财经</h2>
</div>
<div class="hr_20"></div>
<div class="main comWidth clearfix">
	<div class="leftArea fl">
		<div class="tabs_box">
			<div class="tabs_item clearfix show">
				<div class="ykArea">
					<div class="imgList">
						<div class="smImg"><a href="#"><img src="images/test2.jpg" alt=""></a></div>
						<div class="smTxtBox">
							<p class="smTxt smTxt_r"></p>
						</div>
					</div>
					<div class="userLink gym">
						<h3 class="user_tit"><a href="#">白富美为何没有男朋友</a></h3>
						<p class="notes"><span class="times timesIcon">104万</span><span class="userName userIcon c1">Hcfun</span></p>
					</div>
				</div>
				<div class="ykArea">
					<div class="imgList">
						<div class="smImg"><a href="#"><img src="images/test2.jpg" alt=""></a></div>
						<div class="smTxtBox">
							<p class="smTxt smTxt_r"></p>
						</div>
					</div>
					<div class="userLink gym">
						<h3 class="user_tit"><a href="#">白富美为何没有男朋友</a></h3>
						<p class="notes"><span class="times timesIcon">104万</span><span class="userName userIcon c1">Hcfun</span></p>
					</div>
				</div>
				<div class="ykArea">
					<div class="imgList">
						<div class="smImg"><a href="#"><img src="images/test2.jpg" alt=""></a></div>
						<div class="smTxtBox">
							<p class="smTxt smTxt_r"></p>
						</div>
					</div>
					<div class="userLink gym">
						<h3 class="user_tit"><a href="#">白富美为何没有男朋友</a></h3>
						<p class="notes"><span class="times timesIcon">104万</span><span class="userName userIcon c1">Hcfun</span></p>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="rightArea fr">
		<div class="list_smImg mb">
			<div class="list_img">
				<a href="#"><img src="images/test2.jpg" alt=""></a>
			</div>
			<div class="list_txt">
				<h3 class="user_tit"><a href="#">异地恋孩子真的伤不起</a></h3>
				<p>&lt;微笑&gt;</p>
			</div>
		</div>
		<div class="list_smImg mb">
			<div class="list_img">
				<a href="#"><img src="images/test2.jpg" alt=""></a>
			</div>
			<div class="list_txt">
				<h3 class="user_tit"><a href="#">异地恋孩子真的伤不起</a></h3>
				<p>&lt;微笑&gt;</p>
			</div>
		</div>
		<div class="list_smImg">
			<div class="list_img">
				<a href="#"><img src="images/test2.jpg" alt=""></a>
			</div>
			<div class="list_txt">
				<h3 class="user_tit"><a href="#">异地恋孩子真的伤不起</a></h3>
				<p>&lt;微笑&gt;</p>
			</div>
		</div>
	</div>
</div>
<!--生活-->
<div class="hr_50"></div>
<div class="comWidth clearfix">
	<div class="leftArea fl">
		<div class="moreList mr">
			<h2 class="userCent_tit">生活</h2>
			<div class="imgList mb">
				<div class="smImg"><a href="#"><img src="images/test2.jpg" alt=""></a></div>
				<div class="smTxtBox">
					<p class="smTxtInfo"><a href="#">日右翼解禁钓鱼岛现场</a></p>
					<p class="smTxt_more"><span class="times timesIcon">104万</span><span class="discuss discussIcon">1,111</span></p>
				</div>
				<div class="shade_box">
					<div class="shade_cont">
						<div class="shade">
							<h3><a href="#">河南摔婴案公安局长被停职</a></h3>
							<p>女婴父母疑被重金封口<span class="times timesIcon fr">104万</span></p>
							<p><span class="userName userIcon">Hcfun</span></p>
							<a href="#" class="shade_play"></a> </div>
					</div>
				</div>
			</div>
			<div class="imgList">
				<div class="smImg"><a href="#"><img src="images/test2.jpg" alt=""></a></div>
				<div class="smTxtBox">
					<p class="smTxtInfo"><a href="#">日右翼解禁钓鱼岛现场</a></p>
					<p class="smTxt_more"><span class="times timesIcon">104万</span><span class="discuss discussIcon">1,111</span></p>
				</div>
				<div class="shade_box">
					<div class="shade_cont">
						<div class="shade">
							<h3><a href="#">河南摔婴案公安局长被停职</a></h3>
							<p>女婴父母疑被重金封口<span class="times timesIcon fr">104万</span></p>
							<p><span class="userName userIcon">Hcfun</span></p>
							<a href="#" class="shade_play"></a> </div>
					</div>
				</div>
			</div>
		</div>
		<div class="moreList mr">
			<h2 class="userCent_tit">时尚</h2>
			<div class="imgList mb">
				<div class="smImg"><a href="#"><img src="images/test2.jpg" alt=""></a></div>
				<div class="smTxtBox">
					<p class="smTxtInfo"><a href="#">日右翼解禁钓鱼岛现场</a></p>
					<p class="smTxt_more"><span class="times timesIcon">104万</span><span class="discuss discussIcon">1,111</span></p>
				</div>
				<div class="shade_box">
					<div class="shade_cont">
						<div class="shade">
							<h3><a href="#">河南摔婴案公安局长被停职</a></h3>
							<p>女婴父母疑被重金封口<span class="times timesIcon fr">104万</span></p>
							<p><span class="userName userIcon">Hcfun</span></p>
							<a href="#" class="shade_play"></a> </div>
					</div>
				</div>
			</div>
			<div class="imgList">
				<div class="smImg"><a href="#"><img src="images/test2.jpg" alt=""></a></div>
				<div class="smTxtBox">
					<p class="smTxtInfo"><a href="#">日右翼解禁钓鱼岛现场</a></p>
					<p class="smTxt_more"><span class="times timesIcon">104万</span><span class="discuss discussIcon">1,111</span></p>
				</div>
				<div class="shade_box">
					<div class="shade_cont">
						<div class="shade">
							<h3><a href="#">河南摔婴案公安局长被停职</a></h3>
							<p>女婴父母疑被重金封口<span class="times timesIcon fr">104万</span></p>
							<p><span class="userName userIcon">Hcfun</span></p>
							<a href="#" class="shade_play"></a> </div>
					</div>
				</div>
			</div>
		</div>
		<div class="moreList mr">
			<h2 class="userCent_tit">母婴</h2>
			<div class="imgList mb">
				<div class="smImg"><a href="#"><img src="images/test2.jpg" alt=""></a></div>
				<div class="smTxtBox">
					<p class="smTxtInfo"><a href="#">日右翼解禁钓鱼岛现场</a></p>
					<p class="smTxt_more"><span class="times timesIcon">104万</span><span class="discuss discussIcon">1,111</span></p>
				</div>
				<div class="shade_box">
					<div class="shade_cont">
						<div class="shade">
							<h3><a href="#">河南摔婴案公安局长被停职</a></h3>
							<p>女婴父母疑被重金封口<span class="times timesIcon fr">104万</span></p>
							<p><span class="userName userIcon">Hcfun</span></p>
							<a href="#" class="shade_play"></a> </div>
					</div>
				</div>
			</div>
			<div class="imgList">
				<div class="smImg"><a href="#"><img src="images/test2.jpg" alt=""></a></div>
				<div class="smTxtBox">
					<p class="smTxtInfo"><a href="#">日右翼解禁钓鱼岛现场</a></p>
					<p class="smTxt_more"><span class="times timesIcon">104万</span><span class="discuss discussIcon">1,111</span></p>
				</div>
				<div class="shade_box">
					<div class="shade_cont">
						<div class="shade">
							<h3><a href="#">河南摔婴案公安局长被停职</a></h3>
							<p>女婴父母疑被重金封口<span class="times timesIcon fr">104万</span></p>
							<p><span class="userName userIcon">Hcfun</span></p>
							<a href="#" class="shade_play"></a> </div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="rightArea fr">
		<div class="comTitle clearfix">
			<h2 class="userCent_tit fl">品牌</h2>
			<ul class="title_tab fl">
				<li class="active"><a href="#">奢侈品</a></li>
				<li><a href="#">时尚</a></li>
				<li><a href="#">汽车</a></li>
				<li><a href="#">生活</a></li>
			</ul>
		</div>
		<div class="tabList pt">
			<div class="item clearfix show">
				<div class="luxuries clearfix mb10">
					<div class="luxuriesImg">
						<a href="#"><img src="images/dior.jpg" class="luxuName" alt=""></a>
						<a href="#"><img src="images/dior_img.jpg" class="luxuImg" alt=""></a>
					</div>
					<div class="luxuTxt">
						<a href="#">信不信？用绳子截断玻璃瓶</a>
					</div>
				</div>
				<div class="luxuries clearfix mb">
					<div class="luxuriesImg">
						<a href="#"><img src="images/dior.jpg" class="luxuName" alt=""></a>
						<a href="#"><img src="images/dior_img.jpg" class="luxuImg" alt=""></a>
					</div>
					<div class="luxuTxt">
						<a href="#">信不信？用绳子截断玻璃瓶</a>
					</div>
				</div>
				<div class="luxuries clearfix mb10">
					<div class="luxuriesImg">
						<a href="#"><img src="images/dior.jpg" class="luxuName" alt=""></a>
						<a href="#"><img src="images/dior_img.jpg" class="luxuImg" alt=""></a>
					</div>
					<div class="luxuTxt">
						<a href="#">信不信？用绳子截断玻璃瓶</a>
					</div>
				</div>
				<div class="luxuries clearfix">
					<div class="luxuriesImg">
						<a href="#"><img src="images/dior.jpg" class="luxuName" alt=""></a>
						<a href="#"><img src="images/dior_img.jpg" class="luxuImg" alt=""></a>
					</div>
					<div class="luxuTxt">
						<a href="#">信不信？用绳子截断玻璃瓶</a>
					</div>
				</div>
			</div>
			<div class="item clearfix">
				<div class="luxuries clearfix mb10">
					<div class="luxuriesImg">
						<a href="#"><img src="images/dior.jpg" class="luxuName" alt=""></a>
						<a href="#"><img src="images/dior_img.jpg" class="luxuImg" alt=""></a>
					</div>
					<div class="luxuTxt">
						<a href="#">信不信？用绳子截断玻璃瓶</a>
					</div>
				</div>
				<div class="luxuries clearfix mb">
					<div class="luxuriesImg">
						<a href="#"><img src="images/dior.jpg" class="luxuName" alt=""></a>
						<a href="#"><img src="images/dior_img.jpg" class="luxuImg" alt=""></a>
					</div>
					<div class="luxuTxt">
						<a href="#">信不信？用绳子截断玻璃瓶</a>
					</div>
				</div>
				<div class="luxuries clearfix mb10">
					<div class="luxuriesImg">
						<a href="#"><img src="images/dior.jpg" class="luxuName" alt=""></a>
						<a href="#"><img src="images/dior_img.jpg" class="luxuImg" alt=""></a>
					</div>
					<div class="luxuTxt">
						<a href="#">信不信？用绳子截断玻璃瓶</a>
					</div>
				</div>
				<div class="luxuries clearfix">
					<div class="luxuriesImg">
						<a href="#"><img src="images/dior.jpg" class="luxuName" alt=""></a>
						<a href="#"><img src="images/dior_img.jpg" class="luxuImg" alt=""></a>
					</div>
					<div class="luxuTxt">
						<a href="#">信不信？用绳子截断玻璃瓶</a>
					</div>
				</div>
			</div>
			<div class="item clearfix">
				<div class="luxuries clearfix mb10">
					<div class="luxuriesImg">
						<a href="#"><img src="images/dior.jpg" class="luxuName" alt=""></a>
						<a href="#"><img src="images/dior_img.jpg" class="luxuImg" alt=""></a>
					</div>
					<div class="luxuTxt">
						<a href="#">信不信aaaa</a>
					</div>
				</div>
				<div class="luxuries clearfix mb">
					<div class="luxuriesImg">
						<a href="#"><img src="images/dior.jpg" class="luxuName" alt=""></a>
						<a href="#"><img src="images/dior_img.jpg" class="luxuImg" alt=""></a>
					</div>
					<div class="luxuTxt">
						<a href="#">信不信？用绳子截断玻璃瓶</a>
					</div>
				</div>
				<div class="luxuries clearfix mb10">
					<div class="luxuriesImg">
						<a href="#"><img src="images/dior.jpg" class="luxuName" alt=""></a>
						<a href="#"><img src="images/dior_img.jpg" class="luxuImg" alt=""></a>
					</div>
					<div class="luxuTxt">
						<a href="#">信不信？用绳子截断玻璃瓶</a>
					</div>
				</div>
				<div class="luxuries clearfix">
					<div class="luxuriesImg">
						<a href="#"><img src="images/dior.jpg" class="luxuName" alt=""></a>
						<a href="#"><img src="images/dior_img.jpg" class="luxuImg" alt=""></a>
					</div>
					<div class="luxuTxt">
						<a href="#">信不信？用绳子截断玻璃瓶</a>
					</div>
				</div>
			</div>
			<div class="item clearfix">
				<div class="luxuries clearfix mb10">
					<div class="luxuriesImg">
						<a href="#"><img src="images/dior.jpg" class="luxuName" alt=""></a>
						<a href="#"><img src="images/dior_img.jpg" class="luxuImg" alt=""></a>
					</div>
					<div class="luxuTxt">
						<a href="#">信不信？asdasd</a>
					</div>
				</div>
				<div class="luxuries clearfix mb">
					<div class="luxuriesImg">
						<a href="#"><img src="images/dior.jpg" class="luxuName" alt=""></a>
						<a href="#"><img src="images/dior_img.jpg" class="luxuImg" alt=""></a>
					</div>
					<div class="luxuTxt">
						<a href="#">信不信？用绳子截断玻璃瓶</a>
					</div>
				</div>
				<div class="luxuries clearfix mb10">
					<div class="luxuriesImg">
						<a href="#"><img src="images/dior.jpg" class="luxuName" alt=""></a>
						<a href="#"><img src="images/dior_img.jpg" class="luxuImg" alt=""></a>
					</div>
					<div class="luxuTxt">
						<a href="#">信不信？用绳子截断玻璃瓶</a>
					</div>
				</div>
				<div class="luxuries clearfix">
					<div class="luxuriesImg">
						<a href="#"><img src="images/dior.jpg" class="luxuName" alt=""></a>
						<a href="#"><img src="images/dior_img.jpg" class="luxuImg" alt=""></a>
					</div>
					<div class="luxuTxt">
						<a href="#">信不信？用绳子截断玻璃瓶</a>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<!--汽车-->
<div class="hr_50"></div>
<div class="comWidth clearfix">
	<div class="leftArea fl">
		<div class="moreList mr">
			<h2 class="userCent_tit">汽车</h2>
			<div class="imgList mb">
				<div class="smImg"><a href="#"><img src="images/test2.jpg" alt=""></a></div>
				<div class="smTxtBox">
					<p class="smTxtInfo"><a href="#">日右翼解禁钓鱼岛现场</a></p>
					<p class="smTxt_more"><span class="times timesIcon">104万</span><span class="discuss discussIcon">1,111</span></p>
				</div>
				<div class="shade_box">
					<div class="shade_cont">
						<div class="shade">
							<h3><a href="#">河南摔婴案公安局长被停职</a></h3>
							<p>女婴父母疑被重金封口<span class="times timesIcon fr">104万</span></p>
							<p><span class="userName userIcon">Hcfun</span></p>
							<a href="#" class="shade_play"></a> </div>
					</div>
				</div>
			</div>
			<div class="imgList">
				<div class="smImg"><a href="#"><img src="images/test2.jpg" alt=""></a></div>
				<div class="smTxtBox">
					<p class="smTxtInfo"><a href="#">日右翼解禁钓鱼岛现场</a></p>
					<p class="smTxt_more"><span class="times timesIcon">104万</span><span class="discuss discussIcon">1,111</span></p>
				</div>
				<div class="shade_box">
					<div class="shade_cont">
						<div class="shade">
							<h3><a href="#">河南摔婴案公安局长被停职</a></h3>
							<p>女婴父母疑被重金封口<span class="times timesIcon fr">104万</span></p>
							<p><span class="userName userIcon">Hcfun</span></p>
							<a href="#" class="shade_play"></a> </div>
					</div>
				</div>
			</div>
		</div>
		<div class="moreList mr">
			<h2 class="userCent_tit">科技</h2>
			<div class="imgList mb">
				<div class="smImg"><a href="#"><img src="images/test2.jpg" alt=""></a></div>
				<div class="smTxtBox">
					<p class="smTxtInfo"><a href="#">日右翼解禁钓鱼岛现场</a></p>
					<p class="smTxt_more"><span class="times timesIcon">104万</span><span class="discuss discussIcon">1,111</span></p>
				</div>
				<div class="shade_box">
					<div class="shade_cont">
						<div class="shade">
							<h3><a href="#">河南摔婴案公安局长被停职</a></h3>
							<p>女婴父母疑被重金封口<span class="times timesIcon fr">104万</span></p>
							<p><span class="userName userIcon">Hcfun</span></p>
							<a href="#" class="shade_play"></a> </div>
					</div>
				</div>
			</div>
			<div class="imgList">
				<div class="smImg"><a href="#"><img src="images/test2.jpg" alt=""></a></div>
				<div class="smTxtBox">
					<p class="smTxtInfo"><a href="#">日右翼解禁钓鱼岛现场</a></p>
					<p class="smTxt_more"><span class="times timesIcon">104万</span><span class="discuss discussIcon">1,111</span></p>
				</div>
				<div class="shade_box">
					<div class="shade_cont">
						<div class="shade">
							<h3><a href="#">河南摔婴案公安局长被停职</a></h3>
							<p>女婴父母疑被重金封口<span class="times timesIcon fr">104万</span></p>
							<p><span class="userName userIcon">Hcfun</span></p>
							<a href="#" class="shade_play"></a> </div>
					</div>
				</div>
			</div>
		</div>
		<div class="moreList mr">
			<h2 class="userCent_tit">游戏</h2>
			<div class="imgList mb">
				<div class="smImg"><a href="#"><img src="images/test2.jpg" alt=""></a></div>
				<div class="smTxtBox">
					<p class="smTxtInfo"><a href="#">日右翼解禁钓鱼岛现场</a></p>
					<p class="smTxt_more"><span class="times timesIcon">104万</span><span class="discuss discussIcon">1,111</span></p>
				</div>
				<div class="shade_box">
					<div class="shade_cont">
						<div class="shade">
							<h3><a href="#">河南摔婴案公安局长被停职</a></h3>
							<p>女婴父母疑被重金封口<span class="times timesIcon fr">104万</span></p>
							<p><span class="userName userIcon">Hcfun</span></p>
							<a href="#" class="shade_play"></a> </div>
					</div>
				</div>
			</div>
			<div class="imgList">
				<div class="smImg"><a href="#"><img src="images/test2.jpg" alt=""></a></div>
				<div class="smTxtBox">
					<p class="smTxtInfo"><a href="#">日右翼解禁钓鱼岛现场</a></p>
					<p class="smTxt_more"><span class="times timesIcon">104万</span><span class="discuss discussIcon">1,111</span></p>
				</div>
				<div class="shade_box">
					<div class="shade_cont">
						<div class="shade">
							<h3><a href="#">河南摔婴案公安局长被停职</a></h3>
							<p>女婴父母疑被重金封口<span class="times timesIcon fr">104万</span></p>
							<p><span class="userName userIcon">Hcfun</span></p>
							<a href="#" class="shade_play"></a> </div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="rightArea fr">
		<div class="comTitle clearfix">
			<h2 class="userCent_tit fl">专题</h2>
		</div>
		<div class="vipflexible topic pt mb clearfix">
			<div class="vipImgList fl">
				<a href="#"><img src="images/test2.jpg" alt=""></a>
				<h3><a href="#">开通影视会员倒找钱</a></h3>
			</div>
			<div class="vipImgList fr">
				<a href="#"><img src="images/test2.jpg" alt=""></a>
				<h3><a href="#">开通影视会员倒找钱</a></h3>
			</div>
		</div>
		<div class="ad310_110">
			<a href="#"><img src="images/tj.jpg" alt=""></a>
		</div>
	</div>
</div>
<div class="hr_50"></div>
<div class="comWidth clearfix">
	<div class="leftArea fl">
		<div class="comTitle clearfix">
			<h2 class="userCent_tit fl">专题</h2>
		</div>
		<div class="tabs_box clearfix pt">
			<div class="ykArea">
			<div class="imgList">
				<div class="smImg"><a href="#"><img src="images/test2.jpg" alt=""></a></div>
				<div class="smTxtBox">
					<p class="smTxt smTxt_r"></p>
				</div>
			</div>
			<div class="userLink groom">
				<div class="company">
					<img src="images/test3.jpg" class="companyHead">
					<span class="companyName">白富</span>
				</div>
				<h3 class="user_tit"><a href="#">白富美为何没有男朋友</a></h3>
				<p class="notes"><span class="times timesIcon">104万</span></p>
			</div>
		</div>
			<div class="ykArea">
				<div class="imgList">
					<div class="smImg"><a href="#"><img src="images/test2.jpg" alt=""></a></div>
					<div class="smTxtBox">
						<p class="smTxt smTxt_r"></p>
					</div>
				</div>
				<div class="userLink groom">
					<div class="company">
						<img src="images/test3.jpg" class="companyHead">
						<span class="companyName">白富</span>
					</div>
					<h3 class="user_tit"><a href="#">白富美为何没有男朋友</a></h3>
					<p class="notes"><span class="times timesIcon">104万</span></p>
				</div>
			</div>
			<div class="ykArea">
				<div class="imgList">
					<div class="smImg"><a href="#"><img src="images/test2.jpg" alt=""></a></div>
					<div class="smTxtBox">
						<p class="smTxt smTxt_r"></p>
					</div>
				</div>
				<div class="userLink groom">
					<div class="company">
						<img src="images/test3.jpg" class="companyHead">
						<span class="companyName">白富</span>
					</div>
					<h3 class="user_tit"><a href="#">白富美为何没有男朋友</a></h3>
					<p class="notes"><span class="times timesIcon">104万</span></p>
				</div>
			</div>
		</div>
	</div>
	<div class="rightArea fr">
		<div class="comTitle clearfix">
			<ul class="title_tab">
				<li class="active"><a href="#">牛人</a></li>
				<li><a href="#">拍客</a></li>
				<li><a href="#">明星</a></li>
				<li><a href="#">达人</a></li>
			</ul>
		</div>
		<div class="yksomething">
			<ul class="something_list">
				<li>
					<a href="#"><img src="images/nr.jpg" alt=""></a>
					<p><span><a href="#">郝浩涵</a></span></p>
				</li>
				<li>
					<a href="#"><img src="images/nr.jpg" alt=""></a>
					<p><span><a href="#">郝浩涵</a></span></p>
				</li>
				<li>
					<a href="#"><img src="images/nr.jpg" alt=""></a>
					<p><span><a href="#">郝浩涵</a></span></p>
				</li>
				<li>
					<a href="#"><img src="images/nr.jpg" alt=""></a>
					<p><span><a href="#">郝浩涵</a></span></p>
				</li>
				<li>
					<a href="#"><img src="images/nr.jpg" alt=""></a>
					<p><span><a href="#">郝浩涵</a></span></p>
				</li>
				<li>
					<a href="#"><img src="images/nr.jpg" alt=""></a>
					<p><span><a href="#">郝浩涵</a></span></p>
				</li>
			</ul>
		</div>
	</div>
</div>
<!--视频话题-->
<div class="comTitle clearfix comWidth">
	<h2 class="userCent_tit fl">视频话题</h2>
</div>
<div class="hr_20"></div>
<div class="comWidth clearfix">
	<div class="leftArea fl video_see">
		<div class="tabs_box clearfix">
			<div class="imgList">
				<div class="smImg"><a href="#"><img src="images/test2.jpg" alt=""></a></div>
				<div class="smTxtBox">
					<p class="smTxtInfo"><a href="#">日右翼解禁钓鱼岛现场</a></p>
					<p class="smTxt_more"><span class="times timesIcon">104万</span><span class="discuss discussIcon">1,111</span></p>
				</div>
				<div class="shade_box">
					<div class="shade_cont">
						<div class="shade">
							<h3><a href="#">河南摔婴案公安局长被停职</a></h3>
							<p>女婴父母疑被重金封口<span class="times timesIcon fr">104万</span></p>
							<p><span class="userName userIcon">Hcfun</span></p>
							<a href="#" class="shade_play"></a> </div>
					</div>
				</div>
			</div>
			<div class="imgList">
				<div class="smImg"><a href="#"><img src="images/test2.jpg" alt=""></a></div>
				<div class="smTxtBox">
					<p class="smTxtInfo"><a href="#">日右翼解禁钓鱼岛现场</a></p>
					<p class="smTxt_more"><span class="times timesIcon">104万</span><span class="discuss discussIcon">1,111</span></p>
				</div>
				<div class="shade_box">
					<div class="shade_cont">
						<div class="shade">
							<h3><a href="#">河南摔婴案公安局长被停职</a></h3>
							<p>女婴父母疑被重金封口<span class="times timesIcon fr">104万</span></p>
							<p><span class="userName userIcon">Hcfun</span></p>
							<a href="#" class="shade_play"></a> </div>
					</div>
				</div>
			</div>
			<div class="imgList">
				<div class="smImg"><a href="#"><img src="images/test2.jpg" alt=""></a></div>
				<div class="smTxtBox">
					<p class="smTxtInfo"><a href="#">日右翼解禁钓鱼岛现场</a></p>
					<p class="smTxt_more"><span class="times timesIcon">104万</span><span class="discuss discussIcon">1,111</span></p>
				</div>
				<div class="shade_box">
					<div class="shade_cont">
						<div class="shade">
							<h3><a href="#">河南摔婴案公安局长被停职</a></h3>
							<p>女婴父母疑被重金封口<span class="times timesIcon fr">104万</span></p>
							<p><span class="userName userIcon">Hcfun</span></p>
							<a href="#" class="shade_play"></a> </div>
					</div>
				</div>
			</div>
		</div>
		<ul class="video_seeList clearfix">
			<li><div><a href="#">灵桥一男子送水途中遭雷击身亡瞬间</a></div></li>
			<li><div><a href="#">外景记者连线采访时被闪电击中</a></div></li>
			<li><div><a href="#">实拍暴雨将至女孩害怕雷击跳下空中缆车</a></div></li>
			<li><div><a href="#">实拍暴雨将至女孩害怕雷击跳下空中缆车</a></div></li>
			<li><div><a href="#">灵桥一男子送水途中遭雷击身亡瞬间</a></div></li>
			<li><div><a href="#">外景记者连线采访时被闪电击中</a></div></li>
		</ul>
	</div>
	<div class="rightArea fr">
		<div class="list_smImg mb10">
			<div class="list_img">
				<a href="#"><img src="images/test2.jpg" alt=""></a>
			</div>
			<div class="list_txt">
				<h3 class="user_tit"><a href="#">异地恋孩子真的伤不起</a></h3>
				<p>&lt;微笑&gt;</p>
			</div>
		</div>
		<div class="list_smImg mb10">
			<div class="list_img">
				<a href="#"><img src="images/test2.jpg" alt=""></a>
			</div>
			<div class="list_txt">
				<h3 class="user_tit"><a href="#">异地恋孩子真的伤不起</a></h3>
				<p>&lt;微笑&gt;</p>
			</div>
		</div>
		<div class="list_smImg mb10">
			<div class="list_img">
				<a href="#"><img src="images/test2.jpg" alt=""></a>
			</div>
			<div class="list_txt">
				<h3 class="user_tit"><a href="#">异地恋孩子真的伤不起</a></h3>
				<p>&lt;微笑&gt;</p>
			</div>
		</div>
		<div class="list_smImg">
			<div class="list_img">
				<a href="#"><img src="images/test2.jpg" alt=""></a>
			</div>
			<div class="list_txt">
				<h3 class="user_tit"><a href="#">异地恋孩子真的伤不起</a></h3>
				<p>&lt;微笑&gt;</p>
			</div>
		</div>
	</div>
</div>
<div class="hr_50"></div>
<div class="adBar comWidth"></div>
<div class="hr_20"></div>
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
<script type="text/javascript">
		//是否登录判断
		if("<?php echo isset($_SESSION['U']) ?>"=="1"){
			$('.login_success').show();
		}else{
			$(".login_session").show();
		}
		//隐藏div控制
		$(".record_show").on("mouseover", function(){
			$('.record_left').show();
		});
		$(".record_show").on("mouseout", function(){
			$('.record_left').hide();
		});
		
		$(".record_left").on("mouseover", function(){
			$('.record_left').show();
		});
		$(".record_left").on("mouseout", function(){
			$('.record_left').hide();
		});
		
		$(".up_show").on("mouseover", function(){
			$('.upload_left').show();
		});
		$(".up_show").on("mouseout", function(){
			$('.upload_left').hide();
		});
		
		$(".upload_left").on("mouseover", function(){
			$('.upload_left').show();
		});
		$(".upload_left").on("mouseout", function(){
			$('.upload_left').hide();
		});
		
		
		//视频传值
		var lis = $('.video_list li');
		var video_text = ''; var video_lian='';
		
		for(var i=0;i<lis.length;i++){
			(function(num){
				lis[num].onmouseover = function(){
					for(var j=0;j<lis.length;j++){
						lis[j].style.backgroundColor = '#FFBBFF';
					}
					lis[num].style.backgroundColor = '#BA55D3';
				}
				lis[num].onclick = function(){
					video_text = $(this).find("a").text();
					video_lian = $(this).find("span").text();
					$.ajax({
						type:"POST",
						url:"link.php",
						data: { v_name: video_text,
								v_link: video_lian },
        				success: function(data){
//      					alert(data);
        				}
					});
				}
			}(i))
		}
		
</script>
</body>
</html>
