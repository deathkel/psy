<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>奇幻小说网-我要创作</title>
<link rel="icon" href="../img/icon.png" />
<link href="../css/upload.css" rel="stylesheet" type="text/css">
<link href="../css/upload_menu.css" rel="stylesheet" type="text/css">
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
    <div class="blank"></div>
	<div class="upload">
	<form>
		<div class="biaodan">
			<div class="img">
            	<img width="250" height="325" onerror="this.src=&#39;../img/2.jpg&#39;" src="上传图片之后显示在这里">
                <p>
                	<input id="button1" type="file"/>
                </p>
            </div>
    		<div class="txt">
           	  <p> 
				<label class="title">标题</label>
				  <input type="text" required id="title" placeholder="请输入上传小说的题目" size="54"/>
            	</p>
                <p>
            		<div id="type">
                    	<div id="A">
				  			<label>类别</label>
                        </div>
                        <div id="B">
							<input type="radio" name="type"id="dongfang" onclick="a()"/><label>东方玄幻</label><br/>
							<input type="radio" name="type"id="xifang" onclick="a()"/><label>西方魔幻</label><br/>
               	 			<input type="radio" name="type"id="weilai" onclick="a()"/><label>未来科幻</label><br/>
			  				<input type="radio" name="type"id="yuanchuang" checked="checked" onclick="b()"/><label>用户原创</label>
                        </div>
                	</div>
       		  <div id="authur">
               	<label>作者</label>
				  <input type="text" required value="上传的用户的用户名" size="28"/>
				</div>
            	</p>
				<p>
				  <label class="description">简介</label>
           			<textarea cols="55" rows="9" required id="description" placeholder="请输入小说简介，字数255个字以内"></textarea>
				</p>
            	<p id="guiding">
					<input id="button2" type="checkbox" onChange="c()"/>我已阅读并同意了奇幻小说网关于上传小说的<a href="4_xieyi.html"  target="_blank">相关协议条例</a>
				</p>
			</div>
		</div>
		<div id="queren">
			<input id="button3" type="submit" value="我已经检查好了，确定上传！"/> 
		</div>
        <script type="text/javascript" src="../js/upload.js"></script>
	</form>
	</div>
    <div class="footer"></div>
</div>
</body>
</html>
