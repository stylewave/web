<?php /*a:3:{s:55:"E:\data\newsyun/application/index/view\index\about.html";i:1561104915;s:57:"E:\data\newsyun/application/index/view\public\header.html";i:1561712735;s:57:"E:\data\newsyun/application/index/view\public\footer.html";i:1561713042;}*/ ?>
<!DOCTYPE html
	PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>

	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

	<title><?php echo htmlentities($seo['title']); ?></title>
	<meta name="baidu-site-verification" content="C6R2exmaNx" />
	<meta name="keywords" content="<?php echo htmlentities($seo['keywords']); ?>" />
	<meta name="description" content="<?php echo htmlentities($seo['description']); ?>" />
	<link href="/public/static/home/css/css2018.css" rel="stylesheet" type="text/css">
	<link href="/public/static/home/css/zsl.css" rel="stylesheet" type="text/css">
	<link rel="stylesheet" href="/public/static/home/css/global.css">
	<script src="/public/static/home/js/jquery.min.js" type="text/javascript"></script>
	<!-- <script src="/public/static/home/js/nav.js" type="text/javascript"></script> -->
	<script src="/public/static/home/js/zsl.js" type="text/javascript"></script>
</head>

<body class="neiye">
	<script type="text/javascript" src="/public/static/home/js/jquery.superslide.2.1.1.js"></script>
	<script src="/public/static/home/js/anim.js">
			//动画
	</script>
	<style>
		.nav li {
			position: relative;
		}
	</style>
	<!--  -->

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

	<!--  -->
	<!--banner begin-->
	<div class="solutions_banner" style="background-image:url(/public/static/home/images/columnbanner1.jpg);">
		<img src="/public/static/home/images/columnbanner1.jpg" alt="" />
		<div class="txts dw">
			<h1>关于我们</h1>
			<p>专业是基础，服务是信任，效果是保证</p>

		</div>

	</div>
	<!--banner end-->
	<div class="aboutPage">
		<div class="scheme">
			<div class="wrap">
				<div class="left">
					<div class="txt1" style="color: #000000;">深圳市<a href="http://www.yuntianxia.com/" style="color: #000;">云天下</a>信息技术有限公司</div>
					<div class="txt2">专注于提供<a href="http://www.yuntianxia.com/promotion.html" style="color: #000000;">网络推广</a>和<a href="http://www.yuntianxia.com/solutions.html" style="color: #000000;">网络营销</a><a href="http://www.yuntianxia.com/solutions.html" style="color: #000000;">解决方案</a></div>
					<a href="/contact.html" class="btn">联系云天下</a>
				</div>
				<div class="text">
					<?php echo $about['ms']; ?>

					<!-- <p>致力于互联网品牌建设与网络营销，专业领域包括网站建设、电子商务、移动互联网营销、系统平台开发，等服务范围，并且涵盖基础的域名服务、主机服务；企业邮箱、网络营销等应用服务；以先进完善的建站体系，及不断开拓创新的精神理念，以及高端的企业电子商务解决方案和顾问咨询服务，帮助企业客户真正实现电子商务应用，提高企业的竞争能力。</p>
						<br>
						<p>云天下研发中心拥有一支由多名网络安全专家、软件工程专家和项目管理专家、网络营销专家、网站建设策划专家组成的专业队伍。构建了365天不间断的稳定运行保障体系，其服务器群分布在深圳以及香港多个IDC机房，各个机房之间线路实现网络实时监控等，为客户提供高质量、高效率、高安全性的7x24小时专业运维保证。领先的技术实力和完善的运营服务体系是云天下高速信息化运营服务商理念的强大支撑。</p>
				 -->
				</div>
			</div>
		</div>
		<div class="contactPage">
			<div class="intention">
				<div class="wrap">
						<form id="submit_form" enctype="multipart/form-data">
						<div class="title">合作意向表</div>
						<div class="left">
							<div class="inpu"><input type="text" name="company" id="company" placeholder="公司名称"></div>
							<div class="inpu"><input type="text" name="tel" id="tel" placeholder="电话"></div>
							<div class="inpu"><input type="text" name="username" id="username"  placeholder="姓名"></div>
							<div class="inpu"><input type="text" name="email" id="email" placeholder="邮箱"></div>
						</div>
						<div class="right">
							<div class="inpu"><textarea placeholder="留言内容" name="content" id="content"></textarea></div>
							<div class="btn"><input type="button" name="" value="提交需求" id="submit" /></div>
						</div>
					</form>
				</div>
			</div>
			<div class="contact">
				<div class="wrap">
					<div class="list">
						<ul>
							<li>
								<div class="icon"><img src="/public/static/home/images/contact_icon1.gif"></div>
								<div class="text">
									<p>公司地址</p>
									<p><?php echo htmlentities($config['address']); ?></p>
								</div>
							</li>
							<li>
								<div class="icon"><img src="/public/static/home/images/contact_icon2.gif"></div>
								<div class="text">
									<p>咨询电话</p>
									<p><?php echo htmlentities($config['tel']); ?></p>
								</div>
							</li>
							<li>
								<div class="icon"><img src="/public/static/home/images/contact_icon3.gif"></div>
								<div class="text">
									<p>公司邮箱</p>
									<p><?php echo htmlentities($config['email']); ?></p>
								</div>
							</li>
							<li>
								<div class="icon"><img src="/public/static/home/images/contact_icon4.gif"></div>
								<div class="text">
									<p>传真</p>
									<p><?php echo htmlentities($config['fax']); ?></p>
								</div>
							</li>
						</ul>
					</div>
				</div>
			</div>
			<div class="traffic">
				<div class="wrap">
					<div class="title">欢迎光临<a href="http://www.yuntianxia.com/contact.html" style="color:#000">云天下</a>洽谈合作项目</div>
					<div class="list">
						<ul>
							<li>
								<div class="icon"><img src="/public/static/home/images/traffic1.gif"></div>
								<div class="tit">乘地铁到<a href="http://www.yuntianxia.com/contact.html" style="color:#000">云天下</a></div>
								<div class="text">可乘坐地铁一号线到坪洲地铁站，从B口出，往前走大概五十米，右转走到头，建润商务中心501（<a href="http://www.yuntianxia.com/contact.html" style="color:#000">云天下</a>）</div>
							</li>
							<li>
								<div class="icon"><img src="/public/static/home/images/traffic2.gif"></div>
								<div class="tit">乘公交到<a href="http://www.yuntianxia.com/contact.html" style="color:#000">云天下</a></div>
								<div class="text">可乘坐公交到西乡同仁妇科医院对面就是建润商务中心501（<a href="http://www.yuntianxia.com/contact.html" style="color:#000">云天下</a>）</div>
							</li>
							<li>
								<div class="icon"><img src="/public/static/home/images/traffic3.gif"></div>
								<div class="tit">出租车或者自驾到<a href="http://www.yuntianxia.com/contact.html" style="color:#000">云天下</a></div>
								<div class="text">打车认准建润商务中心501，司机师傅一般都知道，或者到同仁妇科医院对面，如果自驾车的话就GPS定位建润商务中心即可</div>
							</li>
						</ul>
					</div>
				</div>
			</div>
		</div>
		<!-- <div class="business">
			<div class="wrap">
				<div class="pic">
					<img src="/public/static/home/images/aboutpage_business.jpg">
					<div class="filter"></div>
					<div class="text">
						<div class="txt1">我们能做什么</div>
						<div class="txt2">
							一站式<a href="http://www.yuntianxia.com/website.html" style="color: #fff;">网站建设</a>服务平台，致力于互联网品牌建设与<a href="http://www.yuntianxia.com/promotion.html" style="color: #fff;">网络营销</a>，融合了<a href="http://www.yuntianxia.com/website.html" style="color: #fff;">网站建设</a>、<a href="http://www.yuntianxia.com/promotion.html" style="color: #fff;">网站推广</a>、移动H5设计、小程序、APP开发、企业邮箱等专业SAAS服务，为客户提供集“创意+整合+营销”于一身的互联网品牌整合方案！
						</div>
					</div>
				</div>
				<div class="list">
					<ul>
						<li>
							<div class="icon"><img src="/public/static/home/images/aboutpage_business_icon1.png"></div>
							<div class="tit">网站建设</div>
							<div class="txt">网站打开速度快，用户体验好，风格多样化，用户互动性高，增强用户黏着度。</div>
						</li>
						<li>
							<div class="icon"><img src="/public/static/home/images/aboutpage_business_icon2.png"></div>
							<div class="tit">SEO优化排名</div>
							<div class="txt">按天计费，不到首页不扣费，最快7天上词，360、搜狗、移动端排名效果赠送。</div>
						</li>
						<li>
							<div class="icon"><img src="/public/static/home/images/aboutpage_business_icon3.png"></div>
							<div class="tit">正规白帽优化</div>
							<div class="txt">拒绝黑帽，不作弊，白帽<a href="http://www.yuntianxia.com/seo.html" style="color: #666666;">SEO</a>+转化，无惧百度算法更迭，关键词长期稳定首页。</div>
						</li>
						<li>
							<div class="icon"><img src="/public/static/home/images/aboutpage_business_icon4.png"></div>
							<div class="tit">整站优化</div>
							<div class="txt">基于整站质量、整站流量、整站权重、整站排名、整站转化率的综合<a href="http://www.yuntianxia.com/seo.html" style="color: #666666;">SEO优化</a>。</div>
						</li>
					</ul>
				</div>
			</div>
		</div>
		<div class="service">
			<div class="wrap" style="margin-bottom:100px;">
				<div class="columnTitle">
					<div class="tit">服务流程</div>
					<div class="txt">走进<a href="http://www.yuntianxia.com/" style="color: #666666;">云天下</a>，看一个好网站是如何诞生的</div>
				</div>
				<div class="tab">
					<ul>
						<li class="on">
							<div class="icon1" style="background-image:url(/public/static/home/images/aboutpage_service_icon1.png)"><img
									src="/public/static/home/images/aboutpage_service_icon11.png"></div>
									<div class="icon2"><img src="/public/static/home/images/aboutpage_service_icon11.png"></div>
							<div class="number">01</div>
							<div class="text">需求收集</div>
						</li>
						<li>
							<div class="icon1" style="background-image:url(/public/static/home/images/aboutpage_service_icon2.png)"><img
									src="/public/static/home/images/aboutpage_service_icon22.png"></div>
							<div class="icon2"><img src="/public/static/home/images/aboutpage_service_icon22.png"></div>
							<div class="number">02</div>
							<div class="text">项目报价</div>
						</li>
						<li>
							<div class="icon1" style="background-image:url(/public/static/home/images/aboutpage_service_icon3.png)"><img
									src="/public/static/home/images/aboutpage_service_icon33.png"></div>
							<div class="icon2"><img src="/public/static/home/images/aboutpage_service_icon33.png"></div>
							<div class="number">03</div>
							<div class="text">项目立项</div>
						</li>
						<li>
							<div class="icon1" style="background-image:url(/public/static/home/images/aboutpage_service_icon4.png)"><img
									src="/public/static/home/images/aboutpage_service_icon44.png"></div>
							<div class="icon2"><img src="/public/static/home/images/aboutpage_service_icon44.png"></div>
							<div class="number">04</div>
							<div class="text">创意设计</div>
						</li>
						<li>
							<div class="icon1" style="background-image:url(/public/static/home/images/aboutpage_service_icon5.png)"><img
									src="/public/static/home/images/aboutpage_service_icon55.png"></div>
							<div class="icon2"><img src="/public/static/home/images/aboutpage_service_icon55.png"></div>
							<div class="number">08</div>
							<div class="text">后期维护</div>
						</li>
						<li>
							<div class="icon1" style="background-image:url(/public/static/home/images/aboutpage_service_icon6.png)"><img
									src="/public/static/home/images/aboutpage_service_icon66.png"></div>
							<div class="icon2"><img src="/public/static/home/images/aboutpage_service_icon66.png"></div>
							<div class="number">07</div>
							<div class="text">客户验收</div>
						</li>
						<li>
							<div class="icon1" style="background-image:url(/public/static/home/images/aboutpage_service_icon7.png)"><img
									src="/public/static/home/images/aboutpage_service_icon77.png"></div>
							<div class="icon2"><img src="/public/static/home/images/aboutpage_service_icon77.png"></div>
							<div class="number">06</div>
							<div class="text">客户审核</div>
						</li>
						<li>
							<div class="icon1" style="background-image:url(/public/static/home/images/aboutpage_service_icon8.png)"><img
									src="/public/static/home/images/aboutpage_service_icon88.png"></div>
							<div class="icon2"><img src="/public/static/home/images/aboutpage_service_icon88.png"></div>
							<div class="number">05</div>
							<div class="text">程序开发</div>
						</li>
					</ul>
				</div>
				<div class="tabBox">
					<div class="box" style="display:block;">
						<div class="anim anim-1">
							<div class="tit">需求收集</div>
							<div class="line"></div>
							<div class="txt">
								<p>竞争能力分析 </p>
								<p>SWOT分析</p>
								<p>可行性分析</p>
							</div>
						</div>
					</div>
					<div class="box">
						<div class="anim anim-1">
							<div class="tit">项目报价</div>
							<div class="line"></div>
							<div class="txt">
								<p>成立方案工作小组</p>
								<p>需求分析</p>
								<p>功能分析</p>
								<p>内容规划</p>
								<p>方案策划</p>
								<p>费用预算</p>
							</div>
						</div>
					</div>
					<div class="box">
						<div class="anim anim-1">
							<div class="tit">项目立项</div>
							<div class="line"></div>
							<div class="txt">
								<p>成立项目组</p>
								<p>项目启动</p>
								<p>项目调研</p>
								<p>项目WBS分解</p>
								<p>流程分析</p>
								<p>需求定义</p>
								<p>验收标准</p>
								<p>项目备案</p>
								<p>项目管理</p>
							</div>
						</div>
					</div>
					<div class="box">
						<div class="anim anim-1">
							<div class="tit">创意设计</div>
							<div class="line"></div>
							<div class="txt">
								<p>创意规划</p>
								<p>页面设计</p>
								<p>创意设计</p>
								<p>设计确认</p>
							</div>
						</div>
					</div>
					<div class="box">
						<div class="anim anim-1">
							<div class="tit">后期维护</div>
							<div class="line"></div>
							<div class="txt">
								<p>后期维护</p>
								<p>操作手册</p>
								<p>运营维护</p>
								<p>升级规划 </p>
								<p>未来发展研究</p>
							</div>
						</div>
					</div>
					<div class="box">
						<div class="anim anim-1">
							<div class="tit">客户验收</div>
							<div class="line"></div>
							<div class="txt">
								<p>验收合格</p>
								<p>网站上线</p>
								<p>用户支持</p>
							</div>
						</div>
					</div>
					<div class="box">
						<div class="anim anim-1">
							<div class="tit">客户审核</div>
							<div class="line"></div>
							<div class="txt">
								<p>客户意见</p>
								<p>拓展性规划</p>
								<p>应变管理</p>
								<p>系统测试</p>

							</div>
						</div>
					</div>
					<div class="box">
						<div class="anim anim-1">
							<div class="tit">程序开发</div>
							<div class="line"></div>
							<div class="txt">
								<p>前端切图</p>
								<p>用户体验</p>
								<p>系统结构设计</p>
								<p>功能开发</p>
								<p>功能确认</p>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div> -->
		<script language="javascript">
			$(".tab li").hover(function () {
				var linum = $(this).index();
				var CaseList = $(".tabBox .box");
				$(this).addClass('on').siblings().removeClass('on');

				//$("#bigimg").attr("src",$(this).attr("lang"));


				CaseList.eq(linum).show().siblings().hide();
				//CaseList.find(".anim").removeClass("anim-show");
				//			setTimeout(function(){
				//				CaseList.eq(linum).find(".anim").addClass("anim-show");
				//			},6)

			}, function () {

			})
		</script>
		<div class="qualification">
			<div class="wrap">
				<div class="columnTitle">
					<div class="tit">企业资质</div>
					<div class="txt">多项软件开发著作权&nbsp;&nbsp;企业品牌商标认证证书&nbsp;&nbsp;软件开发所有唯一权</div>
				</div>
				<div class="picScroll-left">
					<a class="next"></a>
					<a class="prev"></a>
					<div class="bd">
						<ul class="picList">
							<?php foreach($bannerqiye as $v): ?>
							<li><img src="<?php echo htmlentities($v['img']); ?>"></li>
							<?php endforeach; ?>

						</ul>
					</div>
				</div>
				<script type="text/javascript">
					jQuery(".picScroll-left").slide({
						titCell: ".hd ul",
						mainCell: ".bd ul",
						autoPage: true,
						effect: "left",
						autoPlay: true,
						vis: 4,
						scroll: 1,
						pnLoop: true,
						interTime: 3500,
						trigger: "click"
					});
				</script>
			</div>
		</div>
	</div>
	<!--新增尾begin-->

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


</body>

</html>
<script>

</script>