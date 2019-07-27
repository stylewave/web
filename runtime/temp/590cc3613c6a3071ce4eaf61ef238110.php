<?php /*a:3:{s:57:"E:\data\newsyun/application/mobile/view\index\seogjc.html";i:1561529710;s:58:"E:\data\newsyun/application/mobile/view\public\header.html";i:1561512025;s:58:"E:\data\newsyun/application/mobile/view\public\footer.html";i:1561451127;}*/ ?>
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
			<img src="/public/static/mobile/images/seo01.png" alt="">
		</div>
	<!-- banner end -->
	<!-- 内容 -->
		<div class="seo">
			<h2 class="seoTit">走过十年历程的<b>SEO优化服务团队</b></h2>
			<div class="seoP">十年潜心研发SEO优化技术，专注百度搜索引擎优化效果，超50人的互联网精英和技术团队通过不断创新专业优化技术和正规的优化手段，已为5000家企业客户提供有效的SEO优化方案，效果达标率超90%，助力企业网站提升百度、360搜索，搜狗搜索等关键词排名打造企业品牌知名度，提升成交转化率。</div>
			<ul class="ul1">
				<li>
					<img src="/public/static/mobile/images/ico11.png" alt="">
					<p>专业技术团队</p>
					<span>
						专注SEO领域十年<br>
						SEO优化经验丰富<br>
						精通百度算法<br>
						效果达标率超90%
					</span>
				</li>
				<li>
					<img src="/public/static/mobile/images/ico12.png" alt="">
					<p>正规白帽手段</p>
					<span>
						全又可靠<br>
						关键词质量保障<br>
						更符合百度算法<br>
						长期稳定首页排名
					</span>
				</li>
				<li>
					<img src="/public/static/mobile/images/ico13.png" alt="">
					<p>见效果才扣费</p>
					<span>
						按天付费<br>
						账户付费清晰<br>
						不上首页不扣费<br>
						支持新建网站优化
					</span>
				</li>
				<li>
					<img src="/public/static/mobile/images/ico14.png" alt="">
					<p>数据监控系统</p>
					<span>
						数据监控系统<br>
						独家排名平台展示<br>
						一键查询达标情况<br>
						效果全程透明跟踪
					</span>
				</li>
			</ul>
			<h2 class="seoTit" style="margin-top: 0.652173rem;">95%企业为什么都在做<b>SEO优化？</b></h2>
			<ul class="ul2">
				<li>
					<p>点击零成本</p>
					<span>能够避免恶意点击，投入产出比高于其他推广方式，是线上免费推广最重要的途径，没有之一。</span>
				</li>
				<li>
					<p>高效稳定全网曝光</p>
					<span>通过专业SEO优化技术、正规优化手段，让关键词百度首页霸屏在搜索引擎排名稳定又持久。</span>
				</li>
				<li>
					<p>网站持续引流</p>
					<span>通过SEO优化可以提升网站关键词排名和客户询盘率，免费为企业网站持续带来大量的精准流量。</span>
				</li>
				<li>
					<p>24小时广告在线</p>
					<span>SEO排名24小时持续曝光，让客户随时在百度首页看到您全天在线，避免客户流失同时带来更多客户。</span>
				</li>
			</ul>
			<h2 class="seoTit" style="margin-top: 0.652173rem;">SEO优化<b>合作流程</b></h2>
			<img class="img1" src="/public/static/mobile/images/seo05.png" alt="">
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


