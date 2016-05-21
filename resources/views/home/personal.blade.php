<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>奇幻小说网-个人中心</title>
<link href="/css/test.css" rel="stylesheet" type="text/css">
<link rel="icon" href="/img/icon.png" />
</head>


<body>
<div class="wrapper">
	<a href="home"><div class="logo"></div></a>
    <nav class="caidan">
        	<ul>
        		<li><a href="dongfang" data-clone="东方玄幻">东方玄幻</a></li>
        		<li><a href="xifang" data-clone="西方魔幻">西方魔幻</a></li>
        		<li><a href="weilai" data-clone="未来科幻">未来科幻</a></li>
          </ul>
    	</nav>
        <div id="search"><input type="text" placeholder="搜索作者/书名，按回车键确认" autofocus x-webkit-speech></div>
		<nav class="caidan">
        	<ul>
                <li><a href="yuanchuang" data-clone="用户原创">用户原创</a></li>
                <li><a href="upload" data-clone="我要创作">我要创作</a></li>
               	<li><a href="personal" data-clone="个人中心">个人中心</a></li>
        	</ul>
        </nav>
    	<div class="blank">        	
        </div>
  	<div class="main">
    	<div class="left">
        	<ul>
              <li onClick="a()">个人设置</li>
              <li onClick="b()">我的原创</li>
           	  <li onClick="c()">我的消息</li>
              <li onClick="d()">注销</li>
       	  </ul>
		  <script type="text/javascript" src="/js/personal.js">
			</script>
      </div>
        <div class="right">
        	<iframe id="qiantao" scrolling="no"  src="/html/setting" width=600 height=650 frameborder=0></iframe>
        </div>
    </div>
    <div class="footer"></div>
</div>
</body>
</html>
