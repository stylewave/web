<?php /*a:3:{s:56:"E:\data\newsyun/application/mobile/view\index\about.html";i:1561529635;s:58:"E:\data\newsyun/application/mobile/view\public\header.html";i:1561512025;s:58:"E:\data\newsyun/application/mobile/view\public\footer.html";i:1561451127;}*/ ?>
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
			<img src="/public/static/mobile/images/about01.png" alt="">
		</div>
	<!-- banner end -->
	<!-- 内容 -->
		<div class="aboutOne">
				<!-- <?php echo $about['ms']; ?> -->
			<p>深圳市云天下信息技术有限公司</p>
			<h2>专注于提供网络推广和网络<br>营销解决方案</h2>
			<span>深圳网站建设】深圳市云天下信息技术有限公司是一站式网站建设服务平台，致力于互联网品牌建设与网络营销，融合了网站建设、网络推广、网站推广、移动H5设计、小程序、APP开发、企业邮箱等专业</span>
			<span>云天下10年来只专注于做一件事——潜心研发全网营销解决方案，我们只做有用处、有效果、有盈利的网站！公司凝聚着一批经验丰富、专业的互联网精英和技术团队，通过不断创新和专业的服务，云天下得到</span>
			<span>我们始终坚持以客户需求为导向，为追求用户体验设计，提供有针对性的项</span>
		</div>
		<div class="aboutTwo">
			<div class="box">
				<h2>我们能做什么</h2>
				<p>一站式网站建设服务平台，致力于互联网品牌建设与网络营销，融合了网站建设、网站推广、移动H5设计、小程序、APP开发、企业邮箱等专业SAAS</p>
			</div>
		</div>
		<div class="aboutThree">
			<dl>
				<img src="/public/static/mobile/images/ico07.png" alt="">
				<dt>网站建设</dt>
				<dd>网站打开速度快，用户体验好风格多样化</dd>
			</dl>
			<dl>
				<img src="/public/static/mobile/images/ico08.png" alt="">
				<dt>SEO优化排名</dt>
				<dd>按天计费，不到首页不扣费，最快7天上词</dd>
			</dl>
			<dl>
				<img src="/public/static/mobile/images/ico09.png" alt="">
				<dt>正规白帽优化</dt>
				<dd>拒绝黑帽，不作弊，白帽SEO+转化，无 惧百度算法更迭，关键词长期稳定首页。</dd>
			</dl>
			<dl>
				<img src="/public/static/mobile/images/ico10.png" alt="">
				<dt>整站优化</dt>
				<dd>基于整站质量、整站流量、整站权重、整 站排名、整站转化率的综合SEO优化。</dd>
			</dl>
		</div>
		<div class="aboutFour">
			<h2>企业资质</h2>
			<p>多项软件开发著作权  企业品牌商标认证证书  软件开发所有唯一权</p>
			<ul>
					<?php foreach($bannerqiye as $v): ?>
				<li><img src="<?php echo htmlentities($v['img']); ?>" alt=""></li>
				<?php endforeach; ?>
				
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


