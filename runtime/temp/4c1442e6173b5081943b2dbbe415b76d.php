<?php /*a:3:{s:58:"E:\data\newsyun/application/mobile/view\index\network.html";i:1561529675;s:58:"E:\data\newsyun/application/mobile/view\public\header.html";i:1561512025;s:58:"E:\data\newsyun/application/mobile/view\public\footer.html";i:1561451127;}*/ ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
	<title><?php echo htmlentities($seo['title']); ?></title>
	<meta name="baidu-site-verification" content="C6R2exmaNx" />
	<meta name="keywords" content="<?php echo htmlentities($seo['keywords']); ?>" />
	<meta name="description" content="<?php echo htmlentities($seo['description']); ?>" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <link rel="stylesheet" href="/public/static/mobile/css/index.css">
    <link rel="stylesheet" href="/public/static/mobile/css/swiper.min.css">
</head>
<body>
	
<!-- 头部 -->
	<header class="header">
	
		<!-- 导航 -->
			<nav class="nav_menu">
				<a href="/" class="logo"><img src="/public/static/mobile/images/logo.png" alt=""></a>
				<div class="nav_mright">
					<img class="img1" src="/public/static/mobile/images/nav_menuk.png" alt="">
					<img class="img2" src="/public/static/mobile/images/nav_menug.png" alt="">
				</div>
			</nav>
			<div class="nav_menubox">
				<div class="MenuPanel">  
					<a href="/"><div class="MenuTitle">首页</div></a>
				</div> 
				<div class="MenuPanel">  
					<a href="/website.html"><div class="MenuTitle">网站建设</div></a>
				</div>
				<div class="MenuPanel">  
					<a href="/seogjc.html"><div class="MenuTitle">SEO优化</div></a>
					<!-- <div class="MenuContent">
						<a href="">SEO1</a>
						<a href="">SEO2</a>
					</div> -->
				</div>
				<div class="MenuPanel">  
					<a href="/network.html"><div class="MenuTitle">网络推广</div></a>
				</div>
				<div class="MenuPanel">  
					<a href="/case.html"><div class="MenuTitle">成功案例</div></a>
				</div> 
				<div class="MenuPanel">  
					<a href="/solutions.html"><div class="MenuTitle">解决方案</div></a>
				</div>
				<div class="MenuPanel">  
					<a href="/news.html"><div class="MenuTitle">新闻动态</div></a>
				</div>
				<div class="MenuPanel">  
					<a href="/remittance.html"><div class="MenuTitle">付款方式</div></a>
				</div>
				<div class="MenuPanel">  
					<a href="/about.html"><div class="MenuTitle">关于我们</div></a>
				</div>
			</div> 
		<!-- 导航 end --> 
	</header>
<!-- 头部end -->
<script src="/public/static/mobile/js/jquery.min.js"></script>
<script>
    $('.nav_mright').click(function(){
        $('.nav_menubox').slideToggle(500);
        $('.img1').toggle(100);
    })
    $(document).ready(function(){  
        $(".MenuPanel").each(function(){  
            $(this).children(".MenuContent").hide();  
        });            
        $(".MenuTitle").each(function(){  
            $(this).click(function(){   
                if($(this).parents(".MenuPanel").children(".MenuContent").css("display") != "none"){  
                    $(this).parents(".MenuPanel").children(".MenuContent").hide("slow");     
                }else{  
                    $(".MenuPanel").each(function(){  
                        $(this).children(".MenuContent").hide();  
                    });  
                    $(this).parents(".MenuPanel").children(".MenuContent").show("slow");  
                }  
            });                
        });       
    });
</script>
	<!-- banner -->
		<div class="aboutBanner">
			<img src="/public/static/mobile/images/wwb01.png" alt="">
		</div>
	<!-- banner end -->
	<!-- 内容 -->
		<div class="web">
			<div class="webTit">帮助企业实现全网霸屏</div>
			<div class="webP">从策略到执行、从创意到创造，真正<br>帮企业打通品牌传播通路</div>
			<ul class="ul1">
				<li>
					<img src="/public/static/mobile/images/ico15.png" alt="">
					<p>全网推广顾问</p>
				</li>
				<li>
					<img src="/public/static/mobile/images/ico16.png" alt="">
					<p>全网系统规划</p>
				</li>
				<li>
					<img src="/public/static/mobile/images/ico17.png" alt="">
					<p>全网内容推广</p>
				</li>
				<li>
					<img src="/public/static/mobile/images/ico18.png" alt="">
					<p>全网平台建设</p>
				</li>
				<li>
					<img src="/public/static/mobile/images/ico19.png" alt="">
					<p>全网运营优化</p>
				</li>
				<li>
					<img src="/public/static/mobile/images/ico20.png" alt="">
					<p>搜索引擎推广</p>
				</li>
				<li>
					<img src="/public/static/mobile/images/ico21.png" alt="">
					<p>全网品牌推广</p>
				</li>
				<li>
					<img src="/public/static/mobile/images/ico22.png" alt="">
					<p>全网广告推广</p>
				</li>
				<li>
					<img src="/public/static/mobile/images/ico23.png" alt="">
					<p>全网新闻推广</p>
				</li>
				<li>
					<img src="/public/static/mobile/images/ico24.png" alt="">
					<p>全网视频推广</p>
				</li>
				<li>
					<img src="/public/static/mobile/images/ico25.png" alt="">
					<p>全网社媒推广</p>
				</li>
				<li>
					<img src="/public/static/mobile/images/ico26.png" alt="">
					<p>问答百科推广</p>
				</li>
			</ul>
		</div>
		<div class="webBox1">
			<div class="webTit">网络推广四核驱动，一站式<br>全网推广机构</div>
			<ul>
				<li>
					<div class="xh">01</div>
					<span>调研优势</span>
					<h2>深度聚焦企业竞争力</h2>
					<p>专业顾问团队深入企业调研，全面分析企业优劣势，激发企业品牌潜力，精准把握企业推广需求，为企业提供真正有效的推广服务。</p>
				</li>
				<li>
					<div class="xh">02</div>
					<span>策划优势</span>
					<h2>创新策略谋突破</h2>
					<p>拥有经验丰富的文案策划、高级设计师，秉承策略和创意，以独特的创新、设计和营销思维为客户快速定制合适的方案。</p>
				</li>
				<li>
					<div class="xh">03</div>
					<span>服务优势</span>
					<h2>独创4S深度服务体系</h2>
					<p>超过50人专业团队，以时间、数据、速度、素质等全面提升服务品质，全程营销策略支持并持续优化策略，实现最佳推广效果。</p>
				</li>
				<li>
					<div class="xh">04</div>
					<span>资源优势</span>
					<h2>独家资源助效果</h2>
					<p>拥有强势的互联网社媒资源、网络红人资源和行业深度合作伙伴，有效整合全网资源，实现品牌全网覆盖，提升品牌影响力。</p>
				</li>
			</ul>
		</div>
		<img src="/public/static/mobile/images/ico27.png" alt="" class="weblc">
		<div class="websw">
			<div class="webTit">打破传统推广思维<br>快速抢占互联网市场</div>
			<div class="webP">量身定制企业全网推广增长引擎，提升企业网络竞争力</div>
			<ul>
				<li>
					<img src="/public/static/mobile/images/ico28.png" alt="">
					<p>增加品牌曝光量</p>
				</li>
				<li>
					<img src="/public/static/mobile/images/ico29.png" alt="">
					<p>大量精准流量</p>
				</li>
				<li>
					<img src="/public/static/mobile/images/ico30.png" alt="">
					<p>提升企业信息收录</p>
				</li>
				<li>
					<img src="/public/static/mobile/images/ico31.png" alt="">
					<p>增加精准询盘</p>
				</li>
				<li>
					<img src="/public/static/mobile/images/ico32.png" alt="">
					<p>助力转化成交</p>
				</li>
				<li>
					<img src="/public/static/mobile/images/ico33.png" alt="">
					<p>实现高效传播</p>
				</li>
				<li>
					<img src="/public/static/mobile/images/ico34.png" alt="">
					<p>减少负面信息</p>
				</li>
				<li>
					<img src="/public/static/mobile/images/ico35.png" alt="">
					<p>树立品牌口碑</p>
				</li>
				<li>
					<img src="/public/static/mobile/images/ico28.png" alt="">
					<p>提升品牌形象</p>
				</li>
				<li>
					<img src="/public/static/mobile/images/ico28.png" alt="">
					<p>强化品牌认知</p>
				</li>
			</ul>
		</div>
	<!-- 内容 end -->
	<!-- 资讯 end -->
	<div class="footer">
	<h2>联系我们</h2>
	<p>地址：<?php echo htmlentities($config['address']); ?></p>
	<p>QQ:<?php echo htmlentities($config['qq']); ?></p>
	<p>邮箱：<?php echo htmlentities($config['email']); ?></p>
	<p>电话：<?php echo htmlentities($config['tel']); ?></p>
</div>
</body>
</html>
<script src="/public/static/mobile/js/demo.js"></script>
<script src="/public/static/mobile/js/jquery.min.js"></script>
<script src="/public/static/mobile/js/swiper.min.js"></script>


