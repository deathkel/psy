<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>奇幻小说网-西方魔幻</title>
<link rel="icon" href="../img/icon.png" />
<link href="../css/read.css" rel="stylesheet" type="text/css">
<link href="../css/read_menu.css" rel="stylesheet" type="text/css">
</head>


<body>
<div class="wrapper">
	<a href="1_home.html"><div class="logo"></div></a>
	<nav class="caidan">
		<ul>
			<li><a href="2_dongfang.html" data-clone="东方玄幻">东方玄幻</a></li>
			<li><a href="2_xifang.html" data-clone="西方魔幻">西方魔幻</a></li>
			<li><a href="2_weilai.html" data-clone="未来科幻">未来科幻</a></li>
		</ul>
	</nav>
	<div id="search"><input type="text" placeholder="搜索作者/书名，按回车键确认" autofocus x-webkit-speech></div>
	<nav class="caidan">
		<ul>
			<li><a href="2_yuanchuang.html" data-clone="用户原创">用户原创</a></li>
			<li><a href="3_upload.html" data-clone="我要创作">我要创作</a></li>
			<li><a href="3_personal.html" data-clone="个人中心">个人中心</a></li>
		</ul>
	</nav>
	<div class="details">
		<div class="img">
			<a title="标题" target="_blank" href="小说阅读页面">
			<img width="250" height="325" onerror="this.src=&#39;../img/2.jpg&#39;" src="../img/1.jpg">
			</a>
		</div>
		<div class="txt">
			<h1>
				<a href="#" target="_blank">标题</a>
			</h1>
			<ul>
				<li>
					<div id="author">作者：<i>我</i></div>
				</li>
				<li>
                	<div id="type">类型：<i>用户原创</i></div>
                    <div id="time">发表时间：<i>2010-7-21 21:15:00</i></div>
                </li>
                <li>
					<div id="click">点击数：<i>849928</i></div>
					<div id="star">评分：<i>4939</i></div>
				</li>
				<li class="intro">
					作品简介:<span>这里是简介这里是简介这里是简介这里是简介这里是简介这里是简介这里是简介这里是简介这里是简介这里是简介这里是简介这里是简介这里是简介这里是简介这里是简介这里是简介这里是简介这里是简介这</span>	
				</li>
			</ul>
		</div>
    </div>
    <div class="button">
    	<input type="button" value="查看评论" id="open_comments" onClick="a()"/>
        <input type="button" value="在线阅读" id="read_online" onClick="b()"/>
        <input type="button" value="下载" id="download"/>
    </div>
    <script type="text/javascript" src="../js/read.js"></script>
  	<div class="read" id="read">
    	<p>我是正文我是正文我是正文我是正文我是正文我是正文我是正文我是正文我是正文我是正文我是正文我是正文我是正文我是正文我是正文我是正文我是正文我是正文我是正文我是正文我是正文我是正文我是正文我是正文</p>
    </div>
    <div class="comments_list" id="comments_list">
    	<div class=comments>
        	<!--如果此处是对文章本身的评价而不是回复别人，就没有“对<span id="to_user_id">接评论的用户名</span>说”-->		
            <span id="user_id">发评论的用户名</span>对<span id="to_user_id">接评论的用户名</span>说
        </div>
    </div>
    <div class="footer"></div>
</div>
</body>
</html>
