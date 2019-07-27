<?php /*a:3:{s:53:"E:\data\newsyun/application/index/view\index\web.html";i:1563006419;s:57:"E:\data\newsyun/application/index/view\public\header.html";i:1561712735;s:57:"E:\data\newsyun/application/index/view\public\footer.html";i:1561713042;}*/ ?>
<!DOCTYPE html>
<html lang="zh">
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<title>seo</title>
		<meta name="Keywords" content="" />
		<meta name="description" content="" />
		<link href="/public/static/home/css/global.css" rel="stylesheet" type="text/css">
		<link href="/public/static/home/css/web.css" rel="stylesheet" type="text/css">
		<script src="/public/static/home/js/jquery.min.js"></script>
	</head>
	<body>
		<!-- 头部 -->
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
		<!-- 头部 end -->
		<!-- banner -->
		<div class="wwebBanner" style="background: url(/public/static/home/images/wweb02.png) no-repeat;"></div>
		<!-- banner end -->

		<div class="wwebNav">
			<div class="warp">
				<div class="wwebNavLeft">
					<p id="web01P"><?php echo htmlentities($city['title']); ?></p>
					<div class="box" id="web01Box">
						<dl class="tit">
							<dt>全部:</dt>
							<dd>
								<?php foreach($citydata as $v): ?>
								   <a href="/<?php echo htmlentities($v['cate']); ?>/" <?php if($v['id'] == $city['id']): ?>class="active" <?php endif; ?>><?php echo htmlentities($v['title']); ?></a>
								<?php endforeach; ?>
								<!-- <a href="">北京</a>
								<a href="">深圳</a>
								<a href="">广东</a>
								<a href="">东莞</a> -->
							</dd>
						</dl>
						<!-- <dl class="tbox">
							<dt>华北东北:</dt>
							<dd>
								<a href="">上海</a>
								<a href="">北京</a>
								<a href="">深圳</a>
								<a href="">广东</a>
								<a href="">东莞</a>
								<a href="">上海</a>
								<a href="">北京</a>
								<a href="">深圳</a>
								<a href="">广东</a>
								<a href="">东莞</a>
								<a href="">上海</a>
								<a href="">北京</a>
								<a href="">深圳</a>
								<a href="">广东</a>
								<a href="">东莞</a>
							</dd>
							<dt>华北东北:</dt>
							<dd>
								<a href="">上海</a>
								<a href="">北京</a>
								<a href="">深圳</a>
								<a href="">广东</a>
								<a href="">东莞</a>
								<a href="">上海</a>
								<a href="">北京</a>
								<a href="">深圳</a>
								<a href="">广东</a>
							</dd>
							<dt>华北东北:</dt>
							<dd>
								<a href="">上海</a>
								<a href="">北京</a>
								<a href="">深圳</a>
								<a href="">广东</a>
								<a href="">东莞</a>
								<a href="">上海</a>
								<a href="">北京</a>
								<a href="">深圳</a>
							</dd> -->
						</dl>
					</div>
				</div>
			</div>
		</div>
		<div class="wweb02">
			<div class="warp">
				<div class="wwebTit">
					WEBSITE
					<h3><?php echo htmlentities($city['title']); ?>网站建设</h3>
				</div>
				<p>网站是快速提升转化率的重要环节之一，也是企业展示自身实力并提高营销转化率的保障。城市+网站建设不仅注重网站制作的页面视觉效果，更注重网站开发后的运营效果和营销效果。我们的网站建设提供前期企业分析定位、整体网站建设策略方案以及网站制作后期维护等一系列专业服务，助力企业网站抢占营销先机，获取更多用户！</p>
				<div class="bq">
					<span><?php echo htmlentities($city['title']); ?>网站建设</span>
					<span><?php echo htmlentities($city['title']); ?>网站制作</span>
					<span><?php echo htmlentities($city['title']); ?>网站开发</span>
				</div>
			</div>
		</div>
		<div class="wweb03">
			<div class="warp">
				<ul id="wweb03">
					<li class="active">
						<img class="img1" src="/public/static/home/images/wweb03.png" alt="">
						<img class="img2" src="/public/static/home/images/wweb03active.png" alt="">
						<h3>品牌官网设计</h3>
						<p>结合美感创新与营销，运用响应式设计、H5等最新技术进行设计开发，用更具吸引力的内容多方位展现企业实力，塑造企业形象，让您的网站更有品牌感。</p>
					</li>
					<li>
						<img class="img1" src="/public/static/home/images/wweb04.png" alt="">
						<img class="img2" src="/public/static/home/images/wweb04active.png" alt="">
						<h3>购物商城网站设计</h3>
						<p>以产品设计和用户体验为导向，注重企业商城产品的特点展示，帮助企业搭建稳定快速的多功能平台，实现线上线下无缝对接，提升用户体验感，增加企业盈利点。</p>
					</li>
					<li>
						<img class="img1" src="/public/static/home/images/wweb05.png" alt="">
						<img class="img2" src="/public/static/home/images/wweb05active.png" alt="">
						<h3>营销型网站建设</h3>
						<p>通过成熟的建站技术和互联网营销思维，对网站页面进行战略性布局，多维度展现企业服务及产品特色，拓宽企业商业渠道，提升销售额，助力企业实现精准营销。</p>
					</li>
					<li>
						<img class="img1" src="/public/static/home/images/wweb06.png" alt="">
						<img class="img2" src="/public/static/home/images/wweb06active.png" alt="">
						<h3>SEO优化</h3>
						<p>对网站进行整站优化，提升关键词排名，增加网站曝光机会，吸引更多的目标客户，增加用户精准访问量，提高成交转换率，达到品牌知名度及流量变现的目的。</p>
					</li>
				</ul>
			</div>
		</div>
		
		<div class="wweb04">
			<div class="warp">
				<div class="wwebTit">
					CASE APPRECIATION
					<h3><?php echo htmlentities($city['title']); ?>高端网站建设案例欣赏</h3>
				</div>
			</div>
		</div>
		<div class="brand" style="float: left; width: 100%; height: 820px;">
			<div class="tabs" style="opacity: 1; margin: 20px auto 0 auto; height: auto;">
				<ul class="active">
					<?php foreach($casedata as $v): ?>
					<li><a href="/case/<?php echo htmlentities($v['id']); ?>.html">
							<div class="img">
								<img src="<?php echo htmlentities($v['img']); ?>">
								<div class="box"><?php echo htmlentities($v['stitle']); ?></div>
							</div>
							<div class="text">
								<span class="left"><?php echo htmlentities($v['title']); ?></span>
								<span class="right">
										<span><img src="/public/static/home/images/icon_7.png"></span>
										<span class=""><?php echo htmlentities($modelcase[$v['cateid']]); ?> </span>
								</span>
							</div>
						</a>
					</li>
					<?php endforeach; ?>
				
				</ul>
			</div>
		</div>
		<div class="wweb05">
			<div class="warp">
				<ul class="wwebLeft" id="wweb05Tit">
					<li class="active">
						<img src="/public/static/home/images/wweb08.png" alt="">
						<p>企业网站建设解决方案</p>
					</li>
					<li>
						<img src="/public/static/home/images/wweb09.png" alt="">
						<p>营销型网站建设解决方案</p>
					</li>
					<li>
						<img src="/public/static/home/images/wweb10.png" alt="">
						<p>行业门户网站建设解决方案</p>
					</li>
					<li>
						<img src="/public/static/home/images/wweb11.png" alt="">
						<p>外贸网站建设解决方案</p>
					</li>
				</ul>
				<div class="wwebRight" id="wweb05Box">
					<div style="display: block;">
						<h3>企业网站建设解决方案</h3>
						<p>企业网站作为公司的网络名片，最重要的是通过页面设计、后台管理系统、对搜索引擎友好等方面更好地展示公司形象和宣传服务产品，提升企业品牌知名度，获取更多精准流量云天下多年建站专业技术和经验，有效帮您打造个性化又具备营销力的好网站。</p>
					</div>
					<div>
						<h3>营销型网站建设解决方案</h3>
						<p>营销型网站建设解决方案</p>
					</div>
					<div>
						<h3>行业门户网站建设解决方案</h3>
						<p>行业门户网站建设解决方案</p>
					</div>
					<div>
						<h3>外贸网站建设解决方案</h3>
						<p>外贸网站建设解决方案</p>
					</div>
				</div>
			</div>
		</div>
		
		<div class="wweb06">
			<div class="warp">
				<div class="wwebTit">
					QUESTION
					<h3>网站制作开发常见问题</h3>
				</div>
				<ul>
					<li>
						<img src="/public/static/home/images/wweb12.png" alt="">
						<p>建立网站需要多长时间？</p>
						<img class="img2" src="/public/static/home/images/wweb13.png" alt="">
						<span>建站时间主要是根据网站项目来定的，一般来说，模版网站7-10个工作日即可开通，高端专属定制的网站需要一个月或以上，不包括网站备案时间。</span>
					</li>
					<li>
						<img src="/public/static/home/images/wweb12.png" alt="">
						<p>企业网站建设好后为什么要做SEO优化？</p>
						<img class="img2" src="/public/static/home/images/wweb13.png" alt="">
						<span>做网站的最终目的是为了营销，对于企业网站来说，SEO优化能够让企业网站的产品和服务更完善，带来大量精准流量，提升网站整体权重。</span>
					</li>
					<li>
						<img src="/public/static/home/images/wweb12.png" alt="">
						<p>为什么有些网站打开很慢？</p>
						<img class="img2" src="/public/static/home/images/wweb13.png" alt="">
						<span>这种情况影响因素有很多：a.您网站所在服务器太慢；b.您本身上网网速太慢；c.您的网页文件有问题；d.您的电脑有故障。</span>
					</li>
					<li>
						<img src="/public/static/home/images/wweb12.png" alt="">
						<p>企业网站建设需要多少钱？</p>
						<img class="img2" src="/public/static/home/images/wweb13.png" alt="">
						<span>一般来说，不同的需求、功能及类型的企业网站制作，价格也不一样，企业在网站建设前可以先了解企业最需要什么类型的网站。</span>
					</li>
				</ul>
			</div>
		</div>
		
		<div class="wweb07">
			<div class="warp">
				<div class="wwebTit">
					COMMENT
					<h3>网站开发点评</h3>
				</div>
				<div id="lun">
					<ul id="img">
						<li class="active">
							<h3>企业官方网站开发解决方案</h3>
							<p>“城市+网站开发的整套方案非常完美，服务也非常专业到位，帮我们的企业重新市场定位和分析，重新树立了我们的企业形象，更有利企业对外形象展示和服务产品的宣传，而且我们的企业排名也一下提升了！”</p>
						</li>
						<li>
							<h3>企业官方网站开发解决方案2</h3>
							<p>“城市+网站开发的整套方案非常完美，服务也非常专业到位，帮我们的企业重新市场定位和分析，重新树立了我们的企业形象，更有利企业对外形象展示和服务产品的宣传，而且我们的企业排名也一下提升了！”</p>
						</li>
						<li>
							<h3>企业官方网站开发解决方案3</h3>
							<p>“城市+网站开发的整套方案非常完美，服务也非常专业到位，帮我们的企业重新市场定位和分析，重新树立了我们的企业形象，更有利企业对外形象展示和服务产品的宣传，而且我们的企业排名也一下提升了！”</p>
						</li>
						<li>
							<h3>企业官方网站开发解决方案4</h3>
							<p>“城市+网站开发的整套方案非常完美，服务也非常专业到位，帮我们的企业重新市场定位和分析，重新树立了我们的企业形象，更有利企业对外形象展示和服务产品的宣传，而且我们的企业排名也一下提升了！”</p>
						</li>
					</ul>
					<ul id="num">
						<li>
							<span class="active_num">
								<img src="/public/static/home/images/wweb14.png" alt="">
							</span>
						</li>
						<li>
							<span>
								<img src="/public/static/home/images/wweb14.png" alt="">
							</span>
						</li>
						<li>
							<span>
								<img src="/public/static/home/images/wweb14.png" alt="">
							</span>
						</li>
						<li>
							<span>
								<img src="/public/static/home/images/wweb14.png" alt="">
							</span>
						</li>
					</ul>
					<div id="left"><img src="/public/static/home/images/wweb16.png" alt=""></div>
					<div id="right"><img src="/public/static/home/images/wweb17.png" alt=""></div>
				</div>
			</div>
		</div>
		
		<div class="wweb08">
			<div class="warp">
				<div class="wwebTit">
					COMMENT
					<h3>网站建设知识</h3>
				</div>
				<div class="wweb08Tit" id="wweb08Tit">
					<p class="active">最新资讯</p>
					<p>建设知识</p>
				</div>
				<div class="box" id="wweb08Box">
					<div style="display: block;">
						<ul>
							<?php foreach($newsdata as $v): ?>
							<li>
								<a href="/news/<?php echo htmlentities($v['id']); ?>.html">
									<h2><?php echo htmlentities($v['title']); ?></h2>
									<span><?php echo htmlentities($v['publishtime']); ?></span>
									<p><?php echo htmlentities(getSubstr($v['desc'],0,25)); ?></p>
								</a>
							</li>
							<?php endforeach; ?>
						
						</ul>
					</div>
					<div>
					
							<div style="display: block;">
									<ul>
										<?php foreach($newsdata2 as $v): ?>
										<li>
											<a href="/news/<?php echo htmlentities($v['id']); ?>.html">
												<h2><?php echo htmlentities($v['title']); ?></h2>
												<span><?php echo htmlentities($v['publishtime']); ?></span>
												<p><?php echo htmlentities(getSubstr($v['desc'],0,25)); ?></p>
											</a>
										</li>
										<?php endforeach; ?>
									
									</ul>
								</div>
					</div>
				</div>
			</div>
		</div>
		
		<div class="wweb09">
			<div class="warp">
				<div class="left">
					<h3>联系我们</h3>
					<h4>
						24小时服务热线：<br>
						<?php echo htmlentities($config['tel']); ?>
					</h4>
					<ul>
						<li>
							<a href="https://wpa.qq.com/msgrd?v=3&uin=<?php echo htmlentities($config['qq']); ?>&site=qq&menu=yes" target="_blak">><img src="/public/static/home/images/wweb19.png" alt=""></a>
						</li>
						<li>
							<img src="/public/static/home/images/wweb20.png" alt="">
							<div class="box">
								<img src="<?php echo htmlentities($config['img']); ?>" alt="">
							</div>
						</li>
						<li>
							<img src="/public/static/home/images/wweb21.png" alt="">
							<div class="box"><?php echo htmlentities($config['tel']); ?></div>
						</li>
					</ul>
					<div class="bot">
						<img src="/public/static/home/images/wweb22.png" alt="" class="leftimg">
						<h5>
							<?php echo htmlentities($config['address']); ?><br>
							联系电话：	<?php echo htmlentities($config['phone']); ?>
						</h5>
					</div>
				</div>
				<form id="submit_form" enctype="multipart/form-data">
				<div class="right">
					<h3>免费城市网站建设咨询服务</h3>
					<input type="text" placeholder="公司名称：" name="company" id="company">
					<input type="text" placeholder="您的姓名：" name="username" id="username" >
					<input class="input1" type="text" placeholder="联系电话：" name="tel" id="tel">
					<input class="input2" type="text" placeholder="QQ号码：" name="qq" id="qq">
					<a href="javascript:;" class="btn" id="submit">提交免费咨询</a>
				</div>
			</form>
			</div>
		</div>
		<!-- 底部 -->
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


		<script type="text/javascript">
			$("#submit").click(function(){
				if($('#username').val() == ''){
					alert('请填写您的名字!');
					return false;
				}
				if($('#tel').val() == ''){ 
					alert('请填写您的手机!');
					return false;
				}
				if(!checkMobile($('#tel').val())){
					alert('请输入正确的电话号码!');
					return false;
				}
			
				// 先接收表单中的数据，并拼成这样式格式的字符串： name=tom&age=231
				var form = $("#submit_form");
				var formData = form.serialize();
				console.log(formData);
				$.ajax({
					type : "post",
					url : "/contact.html",
					data : formData, // 表单中要提交的数据
					dataType : "json",  // 服务器返回的数据格式
					success : function(data)
					{
						console.log('data',data);
						if(data.code == 0)
						{
							alert(data.msg);
						}else{
							alert(data.msg);
							form.trigger('reset');
						}
					}
				});
			});
			// 手机号码格式判断
			function checkMobile(tel) {
				var reg = /^(1[3|4|5|7|8][0-9]{9})|(0\d{2,3}-\d{7,8})$/;
				if (reg.test(tel)) {
					return true;
				}else{
					return false;
				};
			}
		</script>
		<!-- 底部 end -->
	</body>
</html>

<script>
	$(function() {
		$('#web01P').click(function() {
			$('#web01Box').toggle(300);
		})
	})
</script>
<script>
	$(function() {
		$("#wweb03 li").mouseover(function() {
			$(this).addClass("active").siblings().removeClass("active");
		});
	});
    $(function(){
        $("#wweb05Tit li").mouseover(function(){
            $(this).addClass("active").siblings().removeClass("active");
            var index=$(this).index();
            $("#wweb05Box > div").eq(index).show().siblings().hide();
        });
    });
	$(function(){
	    $("#wweb08Tit p").mouseover(function(){
	        $(this).addClass("active").siblings().removeClass("active");
	        var index=$(this).index();
	        $("#wweb08Box > div").eq(index).show().siblings().hide();
	    });
	});
</script>
<script>
	var lis=document.getElementById('img').getElementsByTagName('li');
	var num=document.getElementById('num');
	var left=document.getElementById('left');
	var right=document.getElementById('right');
	var num_lis=document.getElementById('num').getElementsByTagName('li');
	var i=0;
	function autoRun(){
		run=setInterval(function(){
			lis[i].removeAttribute('class');
			num_lis[i].firstElementChild.removeAttribute('class');
			i++;
			if(i==lis.length){
				i=0;
			}
			lis[i].className='active';
			num_lis[i].firstElementChild.className='active_num';
			
		},3000);
	}
	autoRun();
	for(var j=0;j<lis.length;j++){
		lis[j].onmouseover=function(){
			clearInterval(run);
			// left.style.display='block';
			// right.style.display='block';
		}
		lis[j].onmouseout=function(){
			autoRun();
			// left.style.display='none';
			// right.style.display='none';
		}	
			
	}
	for(var k=0;k<num_lis.length;k++){
		num_lis[k].firstElementChild.setAttribute('num',k);
		num_lis[k].onmouseover=function(){
			clearInterval(run);
			lis[i].className='';
			num_lis[i].firstElementChild.className='';
			i=this.firstElementChild.getAttribute('num');
			lis[i].className='active';
			num_lis[i].firstElementChild.className='active_num';
		}
		num_lis[k].onmouseout=function(){
			autoRun();
		}
	}
	num.onmouseover=function(){
		clearInterval(run);
	}
	num.onmouseout=function(){
		clearInterval(run);
		autoRun();
	}

	right.onmouseover=function(){
		// left.style.display='block';
		// right.style.display='block';
		clearInterval(run);
	}
	right.onmouseout=function(){
		// left.style.display='none';
		// right.style.display='none';
		autoRun();
	}
	right.onclick=function(){
		lis[i].className='';
		num_lis[i].firstElementChild.className='';
		i++;
		if(i==lis.length){
			i=0;
		}
		lis[i].className='active';
		num_lis[i].firstElementChild.className='active_num';
	}
	left.onmouseover=function(){
		// left.style.display='block';
		// right.style.display='block';
		clearInterval(run);
	}
	left.onmouseout=function(){
		// left.style.display='none';
		// right.style.display='none';
		autoRun();
	}
	left.onclick=function(){
		lis[i].className='';
		num_lis[i].firstElementChild.className='';
		i--;
		if(i<0){
			// i=5;
			i=lis.length-1;
		}
		
		lis[i].className='active';
		num_lis[i].firstElementChild.className='active_num';	
	}
</script>
