<?php /*a:3:{s:55:"E:\data\newsyun/application/index/view\index\index.html";i:1561774674;s:57:"E:\data\newsyun/application/index/view\public\header.html";i:1561712735;s:57:"E:\data\newsyun/application/index/view\public\footer.html";i:1561713042;}*/ ?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta name="baidu-site-verification" content="rIdB0b1VKO" />
		<title><?php echo htmlentities($seo['title']); ?></title>
		<meta name="baidu-site-verification" content="ItUVmCjzZH" />
		<meta name="keywords" content="<?php echo htmlentities($seo['keywords']); ?>" />
		<meta name="description" content="<?php echo htmlentities($seo['description']); ?>" />

		<link rel="stylesheet" type="text/css" href="/public/static/home/css/index.css"/>
		<link rel="stylesheet" type="text/css" href="/public/static/home/css/global.css"/>
		<script src="/public/static/home/js/jquery.min.js"></script>
		<!-- <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no"> -->
	</head>
	<body>
				<!-- 头部导航 -->
	
				<!--[if lt IE 9]>
        <script src="/public/static/home/js/html5shiv.min.js"></script>
        <script src="/public/static/home/js/respond.min.js.js"></script>
    <![endif]-->


<!--头部begin-->
<script type="text/javascript" src="/public/static/home/js/jquery.superslide.2.1.1.js"></script>
<script src="/public/static/home/js/anim.js"></script>
<style>
    .nav li {
        position: relative;
    }
</style>
<!-- <script src="/public/static/home/js/global.js" type="text/javascript"></script> -->
<script type="text/javascript">
</script>
<!-- <div style="height:124px; overflow:hidden; background:none;"></div> -->
<div style=" height:86px; position:fixed; top:0; width:100%;z-index:1000;background:none;">
    <!-- <div class="top01">
		<div class="gy2">
			<span class="l">欢迎您光临深圳市云天下信息技术有限公司！</span>
			<div class="top01_center">
				<img src="/public/static/home/images/top_tel_icon.png" width="18" height="18" alt="电话图标" /> 全国热线：40004-60001 深圳：0755-82968506
			</div>
		</div>
	</div> -->
    <div class="top02" style=" background-color:#fff; ">
        <div class="top02_center">
            <div class="logo">
                <a href="/" title="云天下"><img src="<?php echo htmlentities($config['logo']); ?>" width="180" height="60" alt="深圳网站建设" /></a>
                <div>
                    <div class="logo-year"><span id="numBox1">10</span>年</div>
                    <div class="logo-text">
                        <span>云</span>
                        <span>天</span>
                        <span>下</span>
                        <span>,</span>
                        <span>创</span>
                        <span>未</span>
                        <span>来</span>
                        <span>.</span>
                        <span>.</span>
                        <span>.</span>

                    </div>
                </div>
            </div>
            <!-- 导航 -->
            <div class="nav">
                <ul>
                    <li id="m1" class="m <?php if($nav==" index "): ?> m_active <?php endif; ?>"> <a href="/" class="aa1 mmm" title="首页">
						首页</a></li>
                    <li id="m3" class="m <?php if($nav==" website "): ?> m_active <?php endif; ?>"> <a href="/website.html" class="aa3 mmm" title="网站建设">网站建设</a>
                        <div class="sub">
                            <div class="nav_xiao">
                                <div class="xiao_one">
                                    <ul>
                                        <li><a href="/website.html" title="企业营销型网站建设"><i class="bgs1"></i>企业营销型网站建设</a>
                                        </li>
                                        <li><a href="/website02.html" title="创意品牌型网站建设"><i
													class="bgs2"></i>创意品牌型网站建设</a></li>
                                        <li><a href="/website03.html" title="购物商城型网站建设"><i
													class="bgs3"></i>购物商城型网站建设</a></li>
                                        <li><a href="/website04.html" title="手机微信网站建设"><i class="bgs4"></i>手机微信网站建设</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </li>

                    <li id="m5" class="m <?php if($nav==" seo "): ?> m_active <?php endif; ?>"> <a href="/seogjc.html" class="aa5 mmm" title="SEO优化">SEO优化</a>
                        <div class="sub">
                            <div class="nav_xiao max1100">
                                <div class="xiao_five">
                                    <img alt="SEO优化" src="/public/static/home/images/cr_img1.png">
                                </div>
                                <div class="xiao_five2">
                                    <p>
                                        <a href="/seoyouhua.html" title="SEO整站优化"><i class="bgs1"></i>- SEO整站优化</a>
                                    </p>


                                    <p>
                                        <a href="/seogjc.html" title="关键词优化"><i class="bgs1"></i>- 关键词优化</a>
                                    </p>
                                    <p>
                                        <a href="/seojz.html" title="SEO优化+网站建设"><i class="bgs1"></i>- SEO优化+网站建设</a>
                                    </p>
                                    <p>
                                        <a href="/seopm.html" title="seo快速排名"><i class="bgs1"></i>- SEO快速排名</a>
                                    </p>

                                </div>
                            </div>
                        </div>

                    </li>

                    <!-- <li id="m5" class="m <?php if($nav=="network"): ?> m_active <?php endif; ?>"><a href="/seopm.html" class="aa5 mmm" title="快排">快排</a></li> -->
                    <li id="m5" class="m <?php if($nav==" network "): ?> m_active <?php endif; ?>"> <a href="/network.html" class="aa5 mmm" title="网络推广">网络推广</a></li>

                    <li id="m4" class="m <?php if($nav==" case "): ?> m_active <?php endif; ?>"> <a href="/case.html" class="aa4 mmm" title="成功案例">成功案例</a>
                        <div class="sub">
                            <div class="nav_xiao max1100">
                                <div class="xiao_five">
                                    <img alt="深圳网站建设" src="/public/static/home/images/cr_img1.png">
                                </div>
                                <div class="xiao_five2">

                                    <p>
                                        <?php foreach($mobilecase as $k=>$v): if($k
                                        <2): ?> <a href="/case.html?pid=<?php echo htmlentities($v['id']); ?>" title="<?php echo htmlentities($v['title']); ?>"><i class="bgs1"></i>- <?php echo htmlentities($v['title']); ?></a>
                                            <?php endif; endforeach; ?>

                                    </p>
                                    <p>
                                        <?php foreach($mobilecase as $k=>$v): if($k>1 && $k
                                        <4): ?> <a href="/case.html?pid=<?php echo htmlentities($v['id']); ?>" title="<?php echo htmlentities($v['title']); ?>"><i class="bgs1"></i>- <?php echo htmlentities($v['title']); ?></a>
                                            <?php endif; endforeach; ?>

                                    </p>
                                    <p>
                                        <?php foreach($mobilecase as $k=>$v): if($k>3): ?>
                                        <a href="/case.html?pid=<?php echo htmlentities($v['id']); ?>" title="<?php echo htmlentities($v['title']); ?>"><i class="bgs1"></i>-
											<?php echo htmlentities($v['title']); ?></a> <?php endif; endforeach; ?>

                                    </p>


                                </div>
                            </div>
                        </div>
                    </li>
                    <li id="m8" class="m <?php if($nav==" solution "): ?> m_active <?php endif; ?>"> <a href="/solutions.html" class="aa8 mmm" title="解决方案">解决方案</a>
                        <div class="sub">
                            <div class="nav_xiao">
                                <div class="xiao_four l">
                                    <h2></h2>
                                    <ul class="ul">
                                        <?php foreach($solutiondata as $k=>$v): if($k
                                        <8): ?> <li><a href="/solutions_detail.html?id=<?php echo htmlentities($v['id']); ?>" title="<?php echo htmlentities($v['title']); ?>"><b><?php echo htmlentities($v['title']); ?></b><?php echo htmlentities(getSubstr($v['desc'],0,10)); ?></a>
                    </li>
                    <?php endif; endforeach; ?>
                    </ul>
                    </div>
                    <div class="xiao_four r">
                        <div class="ul2">
                            <h2></h2>
                            <ul>
                                <?php foreach($solutiondata as $k=>$v): if($k>7): ?>
                                <li><a href="/solutions_detail.html?id=<?php echo htmlentities($v['id']); ?>" title="<?php echo htmlentities($v['title']); ?>"><b><?php echo htmlentities($v['title']); ?></b><?php echo htmlentities(getSubstr($v['desc'],0,10)); ?></a></li>
                                <?php endif; endforeach; ?>
                            </ul>
                        </div>
                    </div>
                    </div>

                    </div>
                    </li>
                    <li id="m5" class="m <?php if($nav==" news "): ?> m_active <?php endif; ?>"> <a href="/news.html" class="aa5 mmm" title="新闻动态">新闻动态</a>
                        <div class="sub">
                            <div class="nav_xiao">
                                <div class="xiao_three">
                                    <ul>
                                        <?php foreach($mobilenews as $k=>$v): ?>
                                        <li>
                                            <a href="<?php echo htmlentities($v['url']); ?>"><img <?php if($v['img']): ?>src="<?php echo htmlentities($v['img']); ?>" <?php else: ?>src="/public/static/home/images/nav_news.jpg" <?php endif; ?> alt="<?php echo htmlentities($v['title']); ?>" title="<?php echo htmlentities($v['title']); ?>" /><?php echo htmlentities($v['title']); ?></a>
                                        </li>
                                        <?php endforeach; ?>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li id="m2" class="m <?php if($nav==" about "): ?> m_active <?php endif; ?>"> <a href="/about.html" rel="nofollow" class="aa2 mmm" title="关于我们">关于我们</a>
                        <div class="sub">
                            <div class="nav_xiao">
                                <div class="xiao_two">
                                    <ul>
                                        <li><a href="/about.html" title="公司介绍"><i class="bgs1"></i>公司介绍</a></li>
                                        <li><a href="/remittance.html" title="汇款方式"><i class="bgs2"></i>汇款方式</a></li>
                                        <li><a href="/company_team.html" title="公司团队"><i class="bgs3"></i>公司团队</a></li>
                                        <li><a href="/development.html" title="发展历程"><i class="bgs4"></i>发展历程</a></li>
                                        <li><a href="/contact.html" title="联系我们"><i class="bgs4"></i>联系我们</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </li>
                    <!-- <li id="m7" class="m"><a href="contact.html" class="aa7 mmm">联系我们</a></li> -->
                </ul>
            </div>
            <!-- 导航 end -->
        </div>
        <div class="hotphone">
            <img src="/public/static/home/images/2x.png" alt="">
            <p class="phone02" style="color:red;">400-718-6599</p>
        </div>
    </div>
</div>
<!--头部end-->
		
		<!-- 头部导航 end -->
		<div class="mian">
			<div class="head">
				<div class="banner">
					<ul class="background">
						<?php foreach($banner as $k=>$v): ?>

						<li <?php if($k==0): ?>class="active" <?php endif; ?>>
          <a href="<?php echo htmlentities($v['url']); ?>">				    	<img src="<?php echo htmlentities($v['img']); ?>" alt="<?php echo htmlentities($v['title']); ?>"></a>
						</li>
						<?php endforeach; ?>
						<!-- <li <?php if($k==0): ?>class="active" <?php endif; ?> style="background: url(/public/static/home/images/banner02.jpg);">
						
						</li>
						<li style="background: url(/public/static/home/images/banner02.jpg);">
						
						</li>
						<li style="background: url(/public/static/home/images/banner03.jpg);">
							
						</li> -->
					</ul>
					<div class="icon">
						<ul class="btn">
<?php foreach($banner as $k=>$v): ?>
<li <?php if($k==0): ?>class="active" <?php endif; ?>>
</li>
<?php endforeach; ?>
							<!-- <li class="active"></li>
							<li></li>
							<li></li>-->

						</ul>
						<div class="bottom_icon"></div>
					</div>
				</div>		
			</div>
			<div class="product">
				<p class="title">PRODUCTS & SERVICE</p>
				<p class="sub_title">产品&服务 / 我们专注互联网基础服务</p>
				<ul class="player" id="playerDiv">
					<li class="active">
						<img src="/public/static/home/images/pic_2.png">
						<div class="content">
							<p>为你用心雕琢企业与品牌的极致之美，</p>
							<p>让你在同行中傲视群雄。</p>
							<span><a href="/website.html">了解产品详情</a></span>
						</div>
					</li>
					<li>
						<img src="/public/static/home/images/pic_3.png">
						<div class="content">
							<p>按天计费，最快7天上词，不到首页不扣费。关键词质量保证，</p>
							<p>白帽<a href="/seogjc.html" style="color:#fff;">SEO</a>符合百度算法，360、搜狗、移动端等排名效果免费赠送</p>
							<span><a href="/seogjc.html">了解产品详情</a></span>
						</div>
					</li>
					<li>
						<img src="/public/static/home/images/pic_16.png">
						<div class="content">
							<p>更大化提升整站质量、整站流量、整站权重、</p>
							<p>整站排名、整站转化率的综合<a href="/seoyouhua.html" style="color:#fff;">SEO优化</a>服务</p>
							<span><a href="/seoyouhua.html">了解产品详情</a></span>
						</div>
					</li>
					<li>
						<img src="/public/static/home/images/pic_15.png" />
						<div class="content">
							<p>微信小程序 = 9亿自带流量，小程序名称不能重复性！！！</p>
							<p>属于你的行业、品牌、公司名称，是不是已经注册了？</p>
							<span><a href="/seopm.html">了解产品详情</a></span>
						</div>
					</li>
					<li>
						<img src="/public/static/home/images/pic_14.png" />
						<div class="content">
							<p>有了好网站却白白浪费，眼看着竞争对手风生水起</p>
							<p>让<a href="/seojz.html" style="color:#fff;">SEO</a>不再成为企业的软肋甚至鸡肋！</p>
							<span><a href="/seojz.html">了解产品详情</a></span>
						</div>
					</li>
				</ul>
				<ul class="list" id="playerUl">
					<li title="网站建设"><a href="/website.html">
						<img src="/public/static/home/images/icon_2.png" />
						<p class="text">网站建设</p>
						<p class="en_text">OFFICIAL WEBSITE</p></a>
					</li>
					<li title="关键词优化"><a href="/seogjc.html">
						<img src="/public/static/home/images/icon_3.png" />
						<p class="text">关键词优化</p>
						<p class="en_text">KEYWORD</p></a>
					</li>
					<li title="整站优化"><a href="/seoyouhua.html">
						<img src="/public/static/home/images/icon_4.png" />
						<p class="text">整站优化</p>
						<p class="en_text">WHOLE STATION OPTIMIZATION</p></a>
					</li>
					<li title="快速排名"><a href="/seopm.html">
						<img src="/public/static/home/images/icon_5.png" />
						<p class="text">快速排名</p>
						<p class="en_text">WECHAT APPLET</p></a>
					</li>
					<li title="SEO网站建设"><a href="/seojz.html">
						<img src="/public/static/home/images/icon_6.png" />
						<p class="text">SEO网站建设</p>
						<p class="en_text">SITE PROMOTION</p></a>
					</li>
				</ul>
			</div>
			<div class="brand active">
				<div class="ornament">
					<img src="/public/static/home/images/ornament.png" />
				</div>
				<p class="title">BRAND & CASE</p>
				<p class="sub_title">品牌<a href="/case.html" style="color:#333;">案例</a> / 不一样的设计，不一样的故事</p>
				<div class="lists">
					<span class="active">全部案例</span>
					<?php foreach($casefour as $v): ?>
				    	<span><?php echo htmlentities($v['title']); ?></span>
					<?php endforeach; ?>
					<!-- <span>创意品牌网站</span>
					<span>购物商城网站</span>
					<span>手机微信网站</span> -->
				</div>
				<div class="tabs">
					<ul class="active">
						<?php foreach($case as $k=>$v): ?>
						<li>
							<a href="/case/<?php echo htmlentities($v['id']); ?>.html">
							<div class="img">
								<img src="<?php echo htmlentities($v['img']); ?>"  style="height:280px;"/>
								<div class="box"><?php echo htmlentities($v['stitle']); ?></div>
							</div>	
							<div class="text">
								<span class="left"><?php echo htmlentities($v['title']); ?></span>
								<span class="right">
									<span><img src="/public/static/home/images/icon_7.png"></span>
									<span class=""><?php echo htmlentities($modelcase[$v['cateid']]); ?></span>
								</span>
							</div>
						</a> 
						</li>
						<?php endforeach; ?>
					
					</ul>
					<ul>
						<?php foreach($case1 as $k=>$v): ?>
							<li>
								<a href="/case/<?php echo htmlentities($v['id']); ?>.html">
								<div class="img">
									<img src="<?php echo htmlentities($v['img']); ?>"  style="height:280px;"/>
								</div>	
								<div class="text">
									<span class="left"><?php echo htmlentities($v['title']); ?></span>
									<span class="right">
										<span><img src="/public/static/home/images/icon_7.png"></span>
										<span class=""><?php echo htmlentities($modelcase[$v['cateid']]); ?></span>
									</span>
								</div>
							</a> 
							</li>
							<?php endforeach; ?>
					
					</ul>
					<ul>
							<?php foreach($case2 as $k=>$v): ?>
							<li>
								<a href="/case/<?php echo htmlentities($v['id']); ?>.html">
								<div class="img">
									<img src="<?php echo htmlentities($v['img']); ?>"  style="height:280px;"/>
								</div>	
								<div class="text">
									<span class="left"><?php echo htmlentities($v['title']); ?></span>
									<span class="right">
										<span><img src="/public/static/home/images/icon_7.png"></span>
										<span class=""><?php echo htmlentities($modelcase[$v['cateid']]); ?></span>
									</span>
								</div>
							</a> 
							</li>
							<?php endforeach; ?>
					
					</ul>
					<ul>
							<?php foreach($case3 as $k=>$v): ?>
							<li>
								<a href="/case/<?php echo htmlentities($v['id']); ?>.html">
								<div class="img">
									<img src="<?php echo htmlentities($v['img']); ?>"  style="height:280px;"/>
								</div>	
								<div class="text">
									<span class="left"><?php echo htmlentities($v['title']); ?></span>
									<span class="right">
										<span><img src="/public/static/home/images/icon_7.png"></span>
										<span class=""><?php echo htmlentities($modelcase[$v['cateid']]); ?></span>
									</span>
								</div>
							</a> 
							</li>
							<?php endforeach; ?>
					
					</ul>
					<ul>
							<?php foreach($case4 as $k=>$v): ?>
							<li>
								<a href="/case/<?php echo htmlentities($v['id']); ?>.html">
								<div class="img">
									<img src="<?php echo htmlentities($v['img']); ?>"  style="height:280px;"/>
								</div>	
								<div class="text">
									<span class="left"><?php echo htmlentities($v['title']); ?></span>
									<span class="right">
										<span><img src="/public/static/home/images/icon_7.png"></span>
										<span class=""><?php echo htmlentities($modelcase[$v['cateid']]); ?></span>
									</span>
								</div>
							</a> 
							</li>
							<?php endforeach; ?>
					</ul>
				</div>	
				<div class="carousel" style="text-align: center;">
					<!-- <div class="prev">
						<div>
							<span>
								<img src="/public/static/home/images/preview.png" />
							</span>
							<span>
								<img src="/public/static/home/images/preview.png" />
							</span>
						</div>	
					</div>	 -->
					<div class="more" style="float: none; display: inline-block;">
						<a href="/case.html">
						<div>
							<span>
								<img src="/public/static/home/images/more.png" />
							</span>
							<span>
								<img src="/public/static/home/images/more.png" />
							</span>
						</div>	
					</a>
					</div>		
					<!-- <div class="next">
						<div>
							<span>
								<img src="/public/static/home/images/next.png" />
							</span>
							<span>
								<img src="/public/static/home/images/next.png" />
							</span>
						</div>	
					</div>	 -->
				</div>
			</div>
			<div class="solution active">
				<div class="content">
					<div class="left" id="caseDiv">
						<div class="active">
							<p class="text">提供专业的企业<a href="/website.html" style="color:#fff;">网站建设</a><a href="/solutions.html" style="color:#fff;">解决方案</a></p>
							<p class="description">企业网站帮助企业宣传形象、展示风采，产品宣传，打造企业品牌新形象，突出大型企业形象。</p>
							<span>
								<img src="/public/static/home/images/right1.png" >
							</span>
						</div>
						<div>
							<p class="text">提供专业的营销型<a href="/website.html" style="color:#fff;">网站建设</a><a href="/solutions.html" style="color:#fff;">解决方案</a></p>
							<p class="description">云天下认为，目前企业只有25%主要借助网络宣传，降低推广成本，快速传播产品信息与客户建造生意桥梁和传统渠道结合。营销型网站可以让您以营销的角度来分析网站。</p>
							<span>
								<img src="/public/static/home/images/right1.png" >
							</span>
						</div>
						<div>
							<p class="text">提供专业的行业门户<a href="/website.html" style="color:#fff;">网站建设</a><a href="/solutions.html" style="color:#fff;">解决方案</a></p>
							<p class="description">网站定位于企业营销型；我们现在所面对的挑战问题是：对于从业者而言，盈利与融资无疑是获得更大发展空间的助推器，缺乏其中任何一个，或许还能走下去，如果两者都不成熟，那么，发展遭遇到天花板似乎成为一种必然。</p>
							<span>
								<img src="/public/static/home/images/right1.png" >
							</span>
						</div>
						<div>
							<p class="text">提供专业的外贸<a href="/website.html" style="color:#fff;">网站建设</a><a href="/solutions.html" style="color:#fff;">解决方案</a></p>
							<p class="description">整合了各种网络营销理念和网站运营管理方法，不仅注重<a href="/website.html" style="color:#fff;">网站建设</a>的专业性，更加注重网站运营管理的整个过程，是企业<a href="/website.html" style="color:#fff;">网站建设</a>与运营维护一体化的全程网络营销模式。</p>
							<span>
								<img src="/public/static/home/images/right1.png" >
							</span>
						</div>
					</div>
					<ul class="caseUl">
						<li title="企业网站建设解决方案">
							<img src="/public/static/home/images/icon_9.png" />
							<h2>企业<a href="/website.html" style="color:#fff;">网站建设</a>解决方案</h2>
						</li>
						<li title="营销型网站建设解决方案">
							<img src="/public/static/home/images/icon_8.png" />
							<h2>营销型<a href="/website.html" style="color:#fff;">网站建设</a>解决方案</h2>
						</li>
						<li title="行业门户网站建设解决方案">
							<img src="/public/static/home/images/icon_11.png" />
							<h2>行业门户<a href="/website.html" style="color:#fff;">网站建设</a>解决方案</h2>
						</li>
						<li title="外贸网站建设解决方案">
							<img src="/public/static/home/images/icon_10.png" />
							<h2>外贸<a href="/website.html" style="color:#fff;">网站建设</a>解决方案</h2>
						</li>
					</ul>
				</div>
			</div>
			<div class="cooperation active">
				<p class="title">COOPERATION & CLIENT</p>
				<p class="sub_title">合作客户 / 给我一分信任，还您十分惊喜！</p>
				<div class="content">
					<div class="tabs">
						<ul class="active">
								<?php foreach($banners as $k=>$bans): if($k<10): ?>
								<li>
									<img  src="<?php echo htmlentities($bans['thumb']); ?>" alt="云天下">
								</li>
								<?php endif; endforeach; ?>
							<!-- <li><img src="/public/static/home/images/icli01.png" ></li>
							<li><img src="/public/static/home/images/icli01.png" ></li>
							<li><img src="/public/static/home/images/icli01.png" ></li>
							<li><img src="/public/static/home/images/icli01.png" ></li>
							<li><img src="/public/static/home/images/icli01.png" ></li>
							<li><img src="/public/static/home/images/icli01.png" ></li>
							<li><img src="/public/static/home/images/icli01.png" ></li>
							<li><img src="/public/static/home/images/icli01.png" ></li>
							<li><img src="/public/static/home/images/icli01.png" ></li>
							<li><img src="/public/static/home/images/icli01.png" ></li> -->
						</ul>
						<ul>
								<?php foreach($banners as $k=>$bans): if($k>9 && $k<19): ?>
								<li>
									
									<img  src="<?php echo htmlentities($bans['thumb']); ?>" alt="云天下">
								</li>
								<?php endif; endforeach; ?>
						</ul>
					
					</div>	
					<div class="icon">
						<span class="btn active"></span>
						<span class="btn"></span>
						<!-- <span class="btn"></span> -->
					</div>
				</div>
			</div>
			<div class="data active">
				<div class="content">
					<ul>
						<li>
							<span class="number" data-number="10">00</span>
							<p class="text">10年品牌<a href="/website.html" style="color:#fff;">网站建设</a>与优化经验</p>
						</li>
						<li>
							<span class="number" data-number="50">0</span>
							<p class="text">50+先进技术人才团队</p>
						</li>
						<li>
							<span class="number" data-number="75" >0</span>
							<p class="text">75%客户来自北上广深</p>
						</li>
						<li>
							<span class="number" data-number="3650">0</span>
							<p class="text">3650个日夜的蜕变与成长</p>
						</li>
						<li>
							<span class="number" data-number="5000" id="numBox">0</span>
							<p class="text">5000+企业客户的选择</p>
						</li>
						<li>
							<span class="number" data-number="10000">0</span>
							<p class="text">10000+全国客户资源突破</p>
						</li>
					</ul>
				</div>
			</div>
			<div class="dynamic active">
				<p class="title">DYNAMIC & NEWS</p>
				<p class="sub_title">精选资讯 / 有问必答丨深入浅出！解答你关于建站优化的所有难题！</p>
				<div class="content">
					<ul class="lists" id="ttab">
						<?php foreach($mobilenews as $k=>$v): ?>
						  <li <?php if($k==0): ?>class="active"<?php endif; ?>><?php echo htmlentities($v['title']); ?></li>
						<?php endforeach; ?>
						<!-- <li>网络营销</li> -->
						<!-- <li>公司新闻</li>
						<li>网站优化</li>
						<li>建站知识</li>
						<li>行业资讯</li> -->
					</ul>
					<div class="contt" id="contt">
						<?php foreach($newnav as $k=>$v): ?>
						<div <?php if($k==0): ?>style="display: block;" <?php endif; ?>>
								<div class="hovercol">
									<ul class="col2" _hover-ignore="1">
										<?php foreach($v['list'] as $kk=>$vv): if($kk<10): ?>
											<li <?php if($kk==0): ?>class="active1"<?php endif; ?>>
												<a class="img" href="/news/<?php echo htmlentities($vv['id']); ?>.html">
													<img width="197" height="121" src="<?php echo htmlentities($vv['img']); ?>">
												</a>
												<span class="ccc att font12"><i class="iconfont vancens va-comments"></i><?php echo htmlentities($vv['publishtime']); ?></span>
												<div class="desc">
													<a class="title c44476c line18em" href="/news/<?php echo htmlentities($vv['id']); ?>.html"><i class="li_1 num1">1</i> <?php echo htmlentities($vv['title']); ?></a>
													<div class="description c999 line15em font13">　<?php echo htmlentities(getSubstr($vv['desc'],0,35)); ?></div>
												</div>
											</li>
											<?php endif; endforeach; ?>
									
	
										
	
									</ul>
									<ul class="col2" _hover-ignore="1" style="margin-right: 0;">
											<?php foreach($v['list'] as $kk=>$vv): if($kk>9): ?>
												<li <?php if($kk==10): ?>class="active1"<?php endif; ?>>
													<a class="img" href="/news/<?php echo htmlentities($vv['id']); ?>.html">
														<img width="197" height="121" src="<?php echo htmlentities($vv['img']); ?>">
													</a>
													<span class="ccc att font12"><i class="iconfont vancens va-comments"></i><?php echo htmlentities($vv['publishtime']); ?></span>
													<div class="desc">
														<a class="title c44476c line18em" href="/news/<?php echo htmlentities($vv['id']); ?>.html"><i class="li_1 num1">1</i> <?php echo htmlentities($vv['title']); ?></a>
														<div class="description c999 line15em font13">　<?php echo htmlentities(getSubstr($vv['desc'],0,35)); ?></div>
													</div>
												</li>
												<?php endif; endforeach; ?>
									</ul>
								</div>
							</div>
						 <?php endforeach; ?>
						 
					
					</div>		
				</div>
			</div>
			<!--footer-->
			<style type="text/css">
				.ftyl{display: block!important;}
			</style>
					<footer>
	<!--新增尾begin-->


	<div class="foot_div" style="position:relative; overflow:visible;">
		<div class="foot_div_c">
			<div class="foot_center gy2 gy3" id="gy3" style="width: 1440px !important;">
				<ul class="clearfix">
					<li class="footyw">
						<h3>我们能做什么</h3>
						<p>
							致力于互联网品牌建设与<a href="http://www.yuntianxia.com/promotion.html"
								style="color: #666;display: inline;padding: 0;">网络营销</a>，</a>专业领域包括<a
								href="http://www.yuntianxia.com/website.html"
								style="color:#666;display: inline;padding: 0;">网站建设</a>、<a
								href="http://www.yuntianxia.com/promotion.html"
								style="color: #666;display: inline;padding: 0;">SEO优化、<a
									href="http://www.yuntianxia.com/promotion.html"
									style="color: #666;display: inline;padding: 0;">网络推广、</a><a
									href="http://www.yuntianxia.com/website.html"
									style="color:#666;display: inline;padding: 0;">整站优化、</a><a
									href="http://www.yuntianxia.com/website.html"
									style="color:#666;display: inline;padding: 0;">高端网站建设、</a><a
									href="http://www.yuntianxia.com/website.html"
									style="color:#666;display: inline;padding: 0;">高端网站设计、</a><a
									href="http://www.yuntianxia.com/website.html"
									style="color:#666;display: inline;padding: 0;">品牌网站定制开发、</a><a
									href="http://www.yuntianxia.com/website.html"
									style="color:#666;display: inline;padding: 0;">营销策划推广</a>电子商务、移动互联网营销、系统平台开发，等服务范围涵盖基础的域名服务、主机服务；企业邮箱、云服务器、<a
									href="http://www.yuntianxia.com/promotion.html"
									style="color: #666; display: inline;padding: 0;">网络营销</a>等应用服务，为不同类型的客户提供良好的互联网应用定制<a
									href="http://www.yuntianxia.com/solutions.html"
									style="color:#666; display: inline;padding: 0;">解决方案</a>，帮助客户在新的全球化互联网环境中保持优势。<br>
									如何选择一个好的网站建设公司是很多企业在网站建设中经常遇到的难题。在互联网快速发展的时代，不仅企业之间竞争力大，用户对于网站设计页面的要求也越来越高，因此专业设计网站公司是否能为客户提供专业合理的建议成为一个重要的考量因素之一。
									云天下核心团队十年专注互联网服务行业，为广大企业客户提供一站式企业网站建设服务，潜心研发SEO优化技术，更懂得如何帮您打造出具备营销力的好网站。我们的精英技术团队至今已为5000家企业客户提供了专业的网站建设和SEO优化服务，树立积累了无数经典案例经验，在网站建设行业内树立了良好口碑，我们始终坚持以客户需求为导向，从策划到执行都100%对结果负责，如果您有建站或SEO优化方面的需求，可以联系我们的在线客服咨询一下。
						</p>
					</li>
					<li class="footys">
						<h3><em><a href="/about.html">更多 +</a></em>我们的优势</h3>
						<p>
							<span>
								<!-- <label>核心团队10年专注互联网</label>
								<label>资深行业分析创意策划 </label>
								<label>前沿视觉设计、研发能力 </label>
								<label>技术总监对项目进行指导</label>
								<label>准确把控客户浏览习惯</label>
								<label>完善的售后服务体系</label> -->
								<label>核心团队10年专注互联网</label>
								<label>十年高端网站建设品牌</label>
								<label>资深行业分析创意策划</label>
								<label>一站式企业网站建设服务</label>
								<label>前沿视觉设计、研发能力</label>
								<label>深圳专业网站建设公司</label>
								<label>全新SEO优化技术研发实力</label>
								<label>高端优秀网站设计师聚集地</label>
							</span>
							<span>
								<!-- <label>深圳专业建设优化团队</label>
								<label>专业庞大的营销团队</label>
								<label><a href="http://www.yuntianxia.com/seo.html"
										style="color:#666666;">代码深度符合SEO优化</a></label>
								<label>全新技术领先研发能力</label>
								<label>专业团队有担当共协作</label>
								<label>强大的云数据分析系统</label> -->
								<label>代码深度符合SEO优化</label>
								<label>营销型网站建设专家</label>
								<label>成熟的互联网运营经验</label>
								<label>100%原创性设计网站</label>
								<label>完备的网站设计项目管理</label>
								<label>量身打造个性化网站制作</label>
								<label>以客户的需求为工作准则</label>
								<label>完善的售后服务体系</label>
							</span>
						</p>
					</li>
					<li class="footabout">
						<h3><em><a href="/about.html">更多 +</a></em>关于云天下</h3>
						<p>
							【深圳<a href="http://www.yuntianxia.com/website.html" style="color:#666;">网站建设</a>】<a
								href="http://www.yuntianxia.com" style="color:#666;">云天下</a>10年来只专注于做一件事——潜心研发全网营销<a
								href="http://www.yuntianxia.com/seo.html"
								style="color:#666;">SEO优化</a>，我们只做有用处、有效果、有盈利的网站！公司凝聚着一批经验丰富、专业的互联网精英和技术团队，通过不断创新和专业的服务，<a
								href="http://www.yuntianxia.com"
								style="color:#666;">云天下</a>得到了各行业客户的一致肯定和好评，并已成功帮助5000家企业创造<a
								href="http://www.yuntianxia.com/promotion.html"
								style="color: #666;">网络营销</a>神话。提供有针对性的项目<a
								href="http://www.yuntianxia.com/solutions.html"
								style="color:#666;">解决方案</a>，为客户持续创造价值，全力打造互联网SAAS服务领域的优秀品牌。<br>
								深圳奇妙电子商务有限公司企业网站建设，深圳市言信文化传媒有限公司网站设计，深圳天象一建装饰设计工程有限公司SEO优化，合肥尚升物联科技有限公司网站制作，桂平市艺术学校设计网站网站建设，深圳市灵臻广告有限公司网站制作，深圳市和邦设计工程有限公司设计网站，深圳市创捷科技有限公司网站设计，深圳市九九国灸股份有限公司品牌网站设计，深圳市华宇国际认证有限公司企业官网设计，深圳科创智能工程有限公司企业官网设计开发，深圳市众业成汽车商贸有限公司网站制作方案，深圳鼎鸿盛世财富管理有限公司企业网站建设，深圳宏嘉永富珠宝有限公司网站建设，深圳西斯尔防火保温材料有限公司，南京卡尔丹思安全防护用品有限公司品牌网站设计，北京吾曰商贸有限责任公司品牌企业官网设计，北京万古科技股份有限公司网站制作方案，青岛雅奇灯光音响设备有限公司企业官网设计开发，苏州和枫源电子有限公司设计网站，上海犇途国际货运代理有限公司网站设计，江阴市华士中梅袜子整理厂品牌网站设计，徐州城玮物流有限公司企业官网设计，海南严选科技有限公司企业官网设计开发，海南省侣行文化创意有限公司网站制作方案，海南博大兰花科技有限公司企业网站建设，海南省侣行文化创意有限公司网站建设，苏州晗日硕电子科技有限公司网站设计，超德办公设备（苏州）有限公司SEO优化，四川崇州西南水泥有限公司网站制作，四川百益人力资源管理有限公司网站建设，四川悦车汇汽车服务有限公司网站制作，郑州首航企业管理咨询有限公司设计网站，扬州元辰汽车配件有限公司网站设计，枣庄海升商贸有限公司品牌网站设计，成都百都科技有限公司企业官网设计，西安首发汽车租赁有限公司企业官网设计开发，厦门奥特力体育文化有限公司网站制作方案，厦门众博诚人力资源服务有限公司企业网站建设，安徽协创物联网技术有限公司网站建设，武汉刘胖子家常菜有限公司网站设计，武汉大麦广告设计有限公司SEO优化，广东勇飞人力资源有限公司网站制作，安徽宽居电器有限公司网站建设，安徽邦越信息科技有限公司
						</p>
					</li>
				</ul>
			</div>
		</div>
	</div>
	<!--新增尾end-->

	<div class="ftyl">
		<div class="ftyl_center">
			<p>友情链接：</p>
			<?php foreach($friend as $v): ?>
			<a href="<?php echo htmlentities($v['url']); ?>" target="_blank"><?php echo htmlentities($v['title']); ?></a>
			<?php endforeach; ?>

		</div>
	</div>
	<div class="youhua">
		<div class="warp">
			<div class="zhanshi" id="zhanshi01">
				<p class="p1">为您推荐</p>
				<p class="p2">为您推荐</p>
			</div>
			<div class="zhanshi" id="zhanshi02">
				<p class="p1">优化案例推荐</p>
				<p class="p2">优化案例推荐</p>
			</div>
			<div class="zBox" id="zhanshi01Box">
				<?php foreach($tastile as $v): foreach($v['tag'] as $vv): ?>
				<a href="<?php echo htmlentities($v['url']); ?>.html" title="<?php echo htmlentities($vv); ?>"><?php echo htmlentities($vv); ?></a>
				<?php endforeach; endforeach; ?>

			</div>
			<div class="zBox" id="zhanshi02Box">
			<?php foreach($seocase as $v): ?>
				<a href="/zhuantiyelist/<?php echo htmlentities($v['id']); ?>.html" title="<?php echo htmlentities($v['title']); ?>"><?php echo htmlentities($v['title']); ?></a>
			<?php endforeach; ?>	
				
			</div>
		</div>
	</div>
	<div class="foot">
		<div class="foot_center" style="max-width:1440px;min-width:1200px; margin:0 auto;">
			<div class="foot_text">
				<p>
					copyright @ 2019 深圳市云天下信息技术有限公司&nbsp;&nbsp;
					<a href='http://www.miitbeian.gov.cn/' target="_blank" rel="nofollow"><?php echo htmlentities($config['record']); ?></a>
					<a href="/zhuantiye.html" style="padding-left:20px;">标签大全</a>
				</p>
			</div>
			<div class="foot_button">
				<ul>
					<!-- <li><a href="javascript:void(0)" id="qqonline_float2" title="qq客服" rel="nofollow"><img
								src="/public/static/home/images/foot_icon01.png" /></a></li> -->
					<!-- <li>
						<img src="/public/static/home/images/foot_icon02.png" class="wchat" />
						<div class="wem1"></div>
					</li>
					<li>
						<img src="/public/static/home/images/foot_icon04.png" class="weibo" />
						<div class="wem2"></div>
					</li> -->
					<!-- <li><a href="" target="_blank" rel="nofollow"><img
								src="/public/static/home/images/foot_icon03.png" /></a></li> -->
				</ul>
			</div>
		</div>
	</div>
</footer>


<!-- 右侧客服end -->
<script type="text/javascript" charset="utf-8">
	
</script>

<script>
	
</script>
<!-- 客服结束 -->



<!-- QQ客服 -->
<div id="online_qq_layer" class="online_qq_layer">
	<div id="online_qq_tab">
		<div class="online_icon">
			<a title="" id="floatShow" style="display:none" href="javascript:void(0);">&nbsp;</a>
			<a title="" id="floatHide" style="display:block" href="javascript:void(0);">&nbsp;</a>
		</div>
		<!--online_icon end-->
	</div>
	<div id="onlineService" style="display: block;margin-top:46px;">
		<div class="online_windows overz">
			<div class="online_w_top"></div>
			<!--online_w_top end-->
			<div class="online_w_c overz">
				<div class="online_bar expand" id="onlineSort1">
					<!-- <h2><a target="_blank" href="http://wpa.qq.com/msgrd?v=3&amp;uin=2881492370&amp;site=qq&amp;menu=yes">在线客服</a></h2>  -->
					<div class="h2" style="text-align: center;">在线客服</div>
					<div class="online_content overz" id="onlineType1">
						<ul class="overz">
							<li> <a target="_blank"
									href="http://wpa.qq.com/msgrd?v=3&amp;uin=2026293712&amp;site=qq&amp;menu=yes"
									class="qq_icon">时先生</a>
								<div class="xiangxi"
									style="border-radius:5px;display:none;position:absolute;right:140px;top:5px;background:#ffffff;width:240px;height:360px;padding:20px; box-shadow: 0px 0px 10px #ddd;">
									<div style="font-size: 14px;color: #464646;text-align: left;">
										<em style="font-size:18px;" class="icon iconfont"></em>&nbsp;&nbsp;时先生
									</div>
									<div style="margin-top:10px;font-size: 14px;color: #464646;text-align: left;">
										<em style="font-size:18px;"
											class="icon iconfont"></em>&nbsp;&nbsp;136-6262-3029
									</div>
									<div style="margin-top:10px;font-size: 14px;color: #464646;text-align: left;">
										<em style="font-size:18px;" class="icon iconfont"></em>&nbsp;&nbsp;
										<a style="font-size:15px;"
											href="tencent://message/?uin=2026293712&amp;Menu=yes&amp; Service=300&amp;sigT=42a1e5347953b64c5ff3980f8a6e644d4b31456cb0b6ac6b27663a3c4dd0f4aa14a543b1716f9d45">2019111137</a>
									</div>
									<div style="margin-top:10px;font-size: 14px;color: #464646;text-align: left;">
										<em style="font-size:18px;"
											class="icon iconfont"></em>&nbsp;&nbsp;shilei@yuntianxia.com
									</div>
									<div style="margin-top:10px;font-size: 14px;color: #464646;text-align: left;">
										<em style="font-size:18px;" class="icon iconfont"></em>&nbsp;&nbsp;13662623029
									</div>
									<div style="margin-top:10px;width:150px;height:150px;margin:auto;">
										<img style="width:100%;height:100%;" src="/public/static/home/images/shilei.jpg"
											alt="" />
									</div>
								</div>
							</li>
							<li>电话：<a>136-6262-3029</a></li>
							<li> <a target="_blank"
									href="http://wpa.qq.com/msgrd?v=3&amp;uin=2019111136&amp;site=qq&amp;menu=yes"
									class="qq_icon">陈女士</a>
								<div class="xiangxi"
									style="border-radius:5px;display:none;position:absolute;right:140px;top:5px;background:#ffffff;width:240px;height:360px;padding:20px; box-shadow: 0px 0px 10px #ddd;">
									<div style="font-size: 14px;color: #464646;text-align: left;">
										<em style="font-size:18px;" class="icon iconfont"></em>&nbsp;&nbsp;陈女士
									</div>
									<div style="margin-top:10px;font-size: 14px;color: #464646;text-align: left;">
										<em style="font-size:18px;"
											class="icon iconfont"></em>&nbsp;&nbsp;136-6262-1699
									</div>
									<div style="margin-top:10px;font-size: 14px;color: #464646;text-align: left;">
										<em style="font-size:18px;" class="icon iconfont"></em>&nbsp;&nbsp;
										<a style="font-size:15px;"
											href="tencent://message/?uin=2019111136&amp;Menu=yes&amp; Service=300&amp;sigT=42a1e5347953b64c5ff3980f8a6e644d4b31456cb0b6ac6b27663a3c4dd0f4aa14a543b1716f9d45">2019111136</a>
									</div>
									<div style="margin-top:10px;font-size: 14px;color: #464646;text-align: left;">
										<em style="font-size:18px;"
											class="icon iconfont"></em>&nbsp;&nbsp;chenyanhon@yuntianxia.com
									</div>
									<div style="margin-top:10px;font-size: 14px;color: #464646;text-align: left;">
										<em style="font-size:18px;" class="icon iconfont"></em>&nbsp;&nbsp;13662621699
									</div>
									<div style="margin-top:10px;width:150px;height:150px;margin:auto;">
										<img style="width:100%;height:100%;" src="/public/static/home/images/weixin_zwx.png"
											alt="" />
									</div>
								</div>
							</li>
							<li>电话：<a>136-6262-1699</a></li>

							<!-- <li> <a target="_blank"
									href="http://wpa.qq.com/msgrd?v=3&amp;uin=50289902&amp;site=qq&amp;menu=yes"
									class="qq_icon">吴先生</a>
								<div class="xiangxi"
									style="border-radius:5px;display:none;position:absolute;right:140px;top:5px;background:#ffffff;width:240px;height:360px;padding:20px; box-shadow: 0px 0px 10px #ddd;">
									<div style="font-size: 14px;color: #464646;text-align: left;">
										<em style="font-size:18px;" class="icon iconfont"></em>&nbsp;&nbsp;吴先生
									</div>
									<div style="margin-top:10px;font-size: 14px;color: #464646;text-align: left;">
										<em style="font-size:18px;"
											class="icon iconfont"></em>&nbsp;&nbsp;136-6262-8629
									</div>
									<div style="margin-top:10px;font-size: 14px;color: #464646;text-align: left;">
										<em style="font-size:18px;" class="icon iconfont"></em>&nbsp;&nbsp;
										<a style="font-size:15px;"
											href="tencent://message/?uin=396536594&amp;Menu=yes&amp; Service=300&amp;sigT=42a1e5347953b64c5ff3980f8a6e644d4b31456cb0b6ac6b27663a3c4dd0f4aa14a543b1716f9d45">396536594</a>
									</div>
									<div style="margin-top:10px;font-size: 14px;color: #464646;text-align: left;">
										<em style="font-size:18px;"
											class="icon iconfont"></em>&nbsp;&nbsp;web@yuntianxia.com
									</div>
									<div style="margin-top:10px;font-size: 14px;color: #464646;text-align: left;">
										<em style="font-size:18px;"
											class="icon iconfont"></em>&nbsp;&nbsp;136-6262-8629
									</div>
									<div style="margin-top:10px;width:150px;height:150px;margin:auto;">
										<img style="width:100%;height:100%;" src="/public/static/home/images/wanweixin.png"
											alt="" />
									</div>
								</div>
							</li>
							<li>电话：<a>136-6262-8629</a></li> -->
						</ul>
					</div>
					<div class="h2" style="text-align: center;">渠道合作</div>
					<div class="online_content overz" id="onlineType1">
						<ul class="overz">
							<li> <a target="_blank"
									href="http://wpa.qq.com/msgrd?v=3&amp;uin=50289902&amp;site=qq&amp;menu=yes"
									class="qq_icon">王经理</a>
								<div class="xiangxi"
									style="border-radius:5px;display:none;position:absolute;right:140px;top:5px;background:#ffffff;width:240px;height:360px;padding:20px; box-shadow: 0px 0px 10px #ddd;">
									<div style="font-size: 14px;color: #464646;text-align: left;">
										<em style="font-size:18px;" class="icon iconfont"></em>&nbsp;&nbsp;王经理
									</div>
									<div style="margin-top:10px;font-size: 14px;color: #464646;text-align: left;">
										<em style="font-size:18px;"
											class="icon iconfont"></em>&nbsp;&nbsp;139-2520-7887
									</div>
									<div style="margin-top:10px;font-size: 14px;color: #464646;text-align: left;">
										<em style="font-size:18px;" class="icon iconfont"></em>&nbsp;&nbsp;
										<a style="font-size:15px;"
											href="tencent://message/?uin=396536594&amp;Menu=yes&amp; Service=300&amp;sigT=42a1e5347953b64c5ff3980f8a6e644d4b31456cb0b6ac6b27663a3c4dd0f4aa14a543b1716f9d45">50289902</a>
									</div>
									<div style="margin-top:10px;font-size: 14px;color: #464646;text-align: left;">
										<em style="font-size:18px;"
											class="icon iconfont"></em>&nbsp;&nbsp;tiger@yuntianxia.com
									</div>
									<div style="margin-top:10px;font-size: 14px;color: #464646;text-align: left;">
										<em style="font-size:18px;"
											class="icon iconfont"></em>&nbsp;&nbsp;139-2520-7887
									</div>
									<div style="margin-top:10px;width:150px;height:150px;margin:auto;">
										<img style="width:100%;height:100%;" src="/public/static/home/images/wanweixin1.png"
											alt="" />
									</div>
								</div>
							</li>
							<li>电话：<a>139-2520-7887</a></li>
						</ul>
					</div>
				</div>
			</div>
			<!-- <div class="online_w_bottom"></div> -->
		</div>
	</div>
</div>
<!-- QQ客服 end -->
<script src="/public/static/home/js/global.js"></script>
<script>
var _hmt = _hmt || [];
(function() {
  var hm = document.createElement("script");
  hm.src = "https://hm.baidu.com/hm.js?4dc080827b680ecc954845ca4cd87c1b";
  var s = document.getElementsByTagName("script")[0]; 
  s.parentNode.insertBefore(hm, s);
})();
</script>

<script>
	var _hmt = _hmt || [];
	(function() {
	  var hm = document.createElement("script");
	  hm.src = "https://hm.baidu.com/hm.js?fd71ad1fe031d6c3a86bf5a3cb5e66e7";
	  var s = document.getElementsByTagName("script")[0]; 
	  s.parentNode.insertBefore(hm, s);
	})();
	</script>
<script>
(function(){
    var bp = document.createElement('script');
    var curProtocol = window.location.protocol.split(':')[0];
    if (curProtocol === 'https') {
        bp.src = 'https://zz.bdstatic.com/linksubmit/push.js';
    }
    else {
        bp.src = 'http://push.zhanzhang.baidu.com/push.js';
    }
    var s = document.getElementsByTagName("script")[0];
    s.parentNode.insertBefore(bp, s);
})();
</script>

		
			<!--end footer-->
		</div>
		<div class="frame">
			<div class="content">
				<div class="title">
					<div class="logo">
						<img src="/public/static/home/images/frame_logo.png" alt="">
					</div>
					<div class="text">
						<p>启动新征程</p>
					</div>
				</div>
				<div class="message">
					<div class="input">
						<input type="text" class="company" placeholder="公司名称" />
						<img src="/public/static/home/images/company.png" />
					</div>
					<div class="input">
						<input type="text" class="name" placeholder="联系人" />
						<img src="/public/static/home/images/person.png" />
					</div>
					<div class="input">
						<input type="text" class="telphone" placeholder="电话" />
						<img src="/public/static/home/images/telphone.png" />
					</div>
					<div class="input">
						<input type="text" class="email" placeholder="邮箱" />
						<img src="/public/static/home/images/email.png" />
					</div>
					<div class="input other">
						<input type="text" class="remark" placeholder="请输入您的需求，并尽可能的详细及方便联系您的时间段" />
					</div>
					<div class="input">
						<input type="text" class="verify_code" placeholder="验证码"/>
						<img src="/public/static/home/images/verify_code.png" />
						<img src="/public/static/home/images/verify.png" class="verify" />
					</div>
					<div class="input">
						<span>提交</span>
					</div>
				</div>
			</div>
		</div>
	</body>
	
	<script src="/public/static/home/js/index.js"></script>
	
</html>
<script>
	$(function(){
		$("#ttab li").mouseover(function(){
			$(this).addClass("active").siblings().removeClass("active");
			var index=$(this).index();
			$("#contt > div").eq(index).show().siblings().hide();
		});
	});

	$(function(){
		$("#playerUl li").mouseover(function(){
			$(this).addClass("active").siblings().removeClass("active");
			var index=$(this).index();
			// $("#playerDiv li").eq(index).show().siblings().hide();
			$("#playerDiv li").eq(index).addClass("active").siblings().removeClass("active");
		});
	});

	$(function(){
		$("#caseUl li").mouseover(function(){
			// alert(1);
			$(this).addClass("active").siblings().removeClass("active");
			var index=$(this).index();
			$('#caseDiv>div').eq(index).addClass("active").siblings().removeClass("active");
			// $("#caseDiv>div").eq(index).show().siblings().hide();
		});
	});
</script>
<script type="text/javascript">
$('.hovercol ul.col2 li').mouseover(function(event) {
    /* Act on the event */
    $(this).parent().find('.active1').removeClass('active1');
    $(this).addClass('active1');
});
$('ul.col2').each(function(index, el) {
    $(this).children('li').eq(0).addClass('active1');
});
</script>
