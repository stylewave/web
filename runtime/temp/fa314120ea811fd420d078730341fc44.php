<?php /*a:3:{s:55:"E:\data\newsyun/application/mobile/view\index\news.html";i:1561529688;s:58:"E:\data\newsyun/application/mobile/view\public\header.html";i:1561512025;s:58:"E:\data\newsyun/application/mobile/view\public\footer.html";i:1561451127;}*/ ?>
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
<script>
		function func(){
			  var vs = $("#pagenum").find("option:selected").val();
		   
			  window.location.href = ""+vs;
			  // alert(vs);
			  }

	  </script>
	<!-- banner -->
		<div class="aboutBanner">
			<img src="/public/static/mobile/images/news01.png" alt="">
		</div>
	<!-- banner end -->
	<!-- 内容 -->
		<div class="news">
			<div class="newsFen">
				<select id="pagenum" onchange="func()">	
					<option value="/news.html">全部</option>
					<option value="/seo.html">seo优化</option>
					<option value="/jianzhanzs.html">建站知识</option>
					<option value="/company.html">公司新闻</option>
					<option value="/promotion.html">网络推广</option>
					<option value="/marketing.html">网络营销</option>
				</select>
				<div class="news_one_r">
					<form action="" method="get" name="form3" id="form3">
						<input type="text" class="cinputs" name="keys" placeholder="输入搜索关键字">
						<input type="submit" class="cbnts" value="">
					</form>
				</div>
			</div>
			<ul>
					<?php foreach($list as $v): ?>
				<li>
					<div class="txts">
						<a href="/news/<?php echo htmlentities($v['id']); ?>.html" title="<?php echo htmlentities($v['id']); ?>">
							<h2 class="h2"><?php echo htmlentities($v['title']); ?></h2>
						</a>
						<p class="p"><?php echo htmlentities(getSubstr($v['desc'],0,20)); ?></p>
						<div class="tags"><span>标签：</span><a href="/news/<?php echo htmlentities($v['id']); ?>.html">青岛网站推广</a>
						</div>
						<a href="/news/<?php echo htmlentities($v['id']); ?>.html" title="<?php echo htmlentities($v['title']); ?>">
						<div class="dates"><span><?php echo htmlentities(getSubstrTime($v['publishtime'],7,3,2)); ?></span><?php echo htmlentities(getSubstrTime($v['publishtime'],0,7,1)); ?></div>
						</a>
					</div>
				</li>
				 <?php endforeach; ?>
			
			</ul>
			<div class="page">
					<?php echo $list->render(); ?>
			</div>
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


