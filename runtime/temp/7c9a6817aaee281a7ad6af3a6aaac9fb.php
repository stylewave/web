<?php /*a:3:{s:56:"E:\data\newsyun/application/mobile/view\index\index.html";i:1561529657;s:58:"E:\data\newsyun/application/mobile/view\public\header.html";i:1561512025;s:58:"E:\data\newsyun/application/mobile/view\public\footer.html";i:1561451127;}*/ ?>
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
		<div class="swiper-container banner clear">
			<div class="swiper-wrapper">
				<?php foreach($banner as $v): ?>
				<div class="swiper-slide"><img src="<?php echo htmlentities($v['img']); ?>" alt=""></div>
				<?php endforeach; ?>
				<div class="swiper-slide"><img src="/public/static/mobile/images/banner01.png" alt=""></div>
			</div>
			<div class="swiper-pagination"></div>
		</div>
	<!-- banner end -->
	<!-- 建站分类 -->
		<div class="indexOne">
			<ul>
				<li>
					<a href="/website.html">
					<img src="/public/static/mobile/images/ico01.png" alt="">
					<p>网站建设</p>
					</a>
				</li>
				<li>
					<a href="/seogjc.html">
					<img src="/public/static/mobile/images/ico02.png" alt="">
					<p>SEO优化</p>
				</a>
				</li>
				<li>
					<a href="/network.html">
					<img src="/public/static/mobile/images/ico03.png" alt="">
					<p>网络推广</p>
				</a>
				</li>
				<li>
				<a href="/case.html">
					<img src="/public/static/mobile/images/ico04.png" alt="">
					<p>成功案例</p>
				</a>
				</li>
			</ul>
		</div>
	<!-- 建站分类 end -->
	<!-- 案例 -->
		<div class="indexCase">
			<div class="wid">
				<div class="tit">案例介绍</div>
				<a href="/case.html" class="more">更多</a>
			</div>
			<ul>
					<?php foreach($case as $k=>$v): ?>
				<li><a href="/case/<?php echo htmlentities($v['id']); ?>.html">
					<img src="<?php echo htmlentities($v['img']); ?>" alt="<?php echo htmlentities($v['title']); ?>">
					<div class="box">
						<dl class="left">
							<dt><?php echo htmlentities(getSubstrTime($v['publishtime'],7,3,2)); ?></dt>
							<dd><?php echo htmlentities(getSubstrTime($v['publishtime'],0,3,1)); ?></dd>
						</dl>
						<div class="right">
							<p><?php echo htmlentities($v['title']); ?></p>
							<span><?php echo htmlentities($v['stitle']); ?></span>
						</div>
					</div></a>
				</li>
				<?php endforeach; ?>
				
			</ul>
		</div>
	<!-- 案例 end -->
	<!-- 资讯 -->
		<div class="indexNews">
			<div class="tab" id="tab">
					<?php foreach($newnav as $k=>$v): ?>
						  <p <?php if($k==0): ?>class="active"<?php endif; ?>><?php echo htmlentities($v['title']); ?></p>
						<?php endforeach; ?>
				<!-- <p class="active">SEO优化</p>
				<p>公司新闻</p>
				<p>网络推广</p>
				<p>建站知识</p> -->
			</div>
			<div class="tdiv" id="tdiv">
				<?php foreach($newnav as $k=>$v): ?>
					<div <?php if($k==0): ?>style="display: block;" <?php endif; ?>>
			
					<ul>
						<?php foreach($v['list'] as $kk=>$vv): ?>
						<li><a href="/news/<?php echo htmlentities($vv['id']); ?>.html">
							<h2><?php echo htmlentities($vv['title']); ?></h2>
							<p><?php echo htmlentities(getSubstr($vv['desc'],0,20)); ?></p>
							<div class="box">
								<dt><?php echo htmlentities(getSubstrTime($vv['publishtime'],7,3,2)); ?></dt>
								<dd><?php echo htmlentities(getSubstrTime($vv['publishtime'],0,3,1)); ?></dd>
							</div>
							<div class="more"></div></a>
						</li>
						<?php endforeach; ?>
					
					</ul>
				</div>
				<?php endforeach; ?>
				<!-- <div>
					2
				</div>
				<div>
					3
				</div>
				<div>
					4
				</div> -->
			</div>
		</div>
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

<script src="/public/static/mobile/js/swiper.min.js"></script>

<!-- <script src="/public/static/mobile/js/swiper.jquery.min.js"></script> -->
<script>
    //banner图
    var swiper = new Swiper('.banner', {
        pagination: '.swiper-pagination',
        paginationClickable: true,
        spaceBetween: 30,
        centeredSlides: true,
        autoplay: 2500,
        autoplayDisableOnInteraction: false
    });
</script>
<script>
    $(function(){
        $("#tab p").click(function(){
            $(this).addClass("active").siblings().removeClass("active");
            var index=$(this).index();
            $("#tdiv > div").eq(index).show().siblings().hide();
        });
    });
</script>
