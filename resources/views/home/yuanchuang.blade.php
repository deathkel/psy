<!doctype html>
<html>
<head>
	<meta charset="utf-8">
	<title>奇幻小说网-用户原创</title>
	<link href="/css/xiaoshuotongyong.css" rel="stylesheet" type="text/css">
	<link href="/css/xiaoshuo_rank.css" rel="stylesheet" type="text/css">
	<link href="/css/dongfang.css" rel="stylesheet" type="text/css">
	<link href="/css/xiaoshuo_menu.css" rel="stylesheet" type="text/css">
	<link href="/css/xiaoshuo_banner.css" rel="stylesheet" type="text/css">
	<script type="text/javascript" src="/js/modernizr.custom.53451.js"></script>
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
	<div class="banner">
		<section id="dg-benti" class="dg-benti">
			<div class="dg-wrapper">
				@foreach($command as $one)
					<a href="#">
						<figure class="effect-bubba">
							<img src="{{$one->cover}}" alt="img01"/ height="325" width="250">
							<figcaption>
								<p>
									<marquee direction="up" behavior="scroll" scrollamount="3" height="250">
										{{$one->description}}
									</marquee>
								</p>
							</figcaption>
						</figure>
					</a>
				@endforeach
			</div>
			<nav>
				<span class="dg-prev">&lt;</span>
				<span class="dg-next">&gt;</span>
			</nav>
		</section>
		<script src="http://www.yyyweb.com/demo/common/jquery.min.js"></script>
		<script type="text/javascript" src="/js/jquery.gallery.js"></script>
		<script type="text/javascript" src="/js/test.js"></script>
	</div>
	<div class="main">
		<div class="left">
			<section class="ranking">
				<section class="ranking_title"><center>发布最新</center></section>
				<section class="ranking_list">
					@foreach($new as $key=>$one)
						<section class="box">
							<section class="col_1" title="1">{{$one->name}}</section>
							<a href=#><section class="col_3">我是第{{$key+1}}名</section></a>
							<section class="col_4">{{$one->view}}</section>
						</section>
					@endforeach
				</section>
			</section>
		</div>
		<div class="blank"></div>
		<div class="middle">
			<section class="ranking">
				<section class="ranking_title"><center>发布最新</center></section>
				<section class="ranking_list">
					@foreach($score as $key=>$one)
						<section class="box">
							<section class="col_1" title="1">{{$one->name}}</section>
							<a href=#><section class="col_3">我是第{{$key+1}}名</section></a>
							<section class="col_4">{{$one->view}}</section>
						</section>
					@endforeach
				</section>
			</section>
		</div>
		<div class="blank"></div>
		<div class="right">
			<section class="ranking">
				<section class="ranking_title"><center>发布最新</center></section>
				<section class="ranking_list">
					@foreach($view as $key=>$one)
						<section class="box">
							<section class="col_1" title="1">{{$one->name}}</section>
							<a href=#><section class="col_3">我是第{{$key+1}}名</section></a>
							<section class="col_4">{{$one->view}}</section>
						</section>
					@endforeach
				</section>
			</section>
		</div>
	</div>
	<div class="footer"></div>
</div>
</body>
</html>
