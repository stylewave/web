<?php
// use think\Route;
//后台路由
Route::rule('manage','/admin/Index/index');

define('ISMOBILE', isMobile());
if(!ISMOBILE){
  echo 22222;
//前台页面
Route::rule('index','index/Index/index');

Route::rule('website','index/Index/website');
Route::rule('case','index/Index/case');
Route::rule('case_detail','index/Index/case_detail');
Route::get('case/:id','index/Index/case_detail');
Route::rule('about','index/Index/about');
Route::rule('news','index/Index/news');
Route::get('news/:id','index/Index/news_detail');
Route::rule('news_detail','index/Index/news_detail');

Route::rule('company','index/Index/company');
Route::get('company/:id','index/Index/company_detail');
Route::rule('jianzhanzs','index/Index/jianzhanzs');
Route::get('jianzhanzs/:id','index/Index/jianzhanzs_detail');



Route::rule('technology','index/Index/technology');
Route::rule('solutions','index/Index/solution');
Route::rule('solutions_detail','index/Index/solution_detail');
Route::get('solutions/:id','index/Index/solution_detail');
Route::rule('contact','index/Index/contact');

 //Route::rule('seo','index/Index/seo');
Route::rule('seo_detail','index/Index/seo_detail');
Route::get('seo/:id','index/Index/seo_detail');

//Route::rule('promotion','index/Index/promotion');
Route::rule('promotion_detail','index/Index/promotion_detail');
Route::get('promotion/:id','index/Index/promotion_detail');



Route::rule('marketing','index/Index/marketing');
Route::get('marketing/:id','index/Index/marketing_detail');


Route::rule('remittance','index/Index/remittance');
Route::rule('company_team','index/Index/company_team');
Route::rule('development','index/Index/development');

 Route::rule('website02','index/Index/website02');
 Route::rule('website03','index/Index/website03');
 Route::rule('website04','index/Index/website04');


 Route::get('seo/seoyouhua','index/Index/seo?pid=68');
 Route::get('seo/guanjianciyouhua','index/Index/seo?pid=84');
 Route::get('seo/zhengzhanyouhua','index/Index/seo?pid=85');
 Route::get('seo/seoyouhuajiaoc','index/Index/seo?pid=86');
 Route::get('seo/tuiguangyouhua','index/Index/seo?pid=87');
 Route::get('seo','index/Index/seo');


 Route::get('promotion/wangzhanyouhua','index/Index/promotion?pid=47');
 Route::get('promotion/wangzhantuiguang','index/Index/promotion?pid=71');
 Route::get('promotion/wangluotuiguang','index/Index/promotion?pid=89');
 Route::get('promotion/zhengzhantuiguang','index/Index/promotion?pid=90');
 Route::get('promotion/wangluoyingxiao','index/Index/promotion?pid=91');
 Route::get('promotion','index/Index/promotion');

 Route::get('zhuantiye','index/Index/zhuantiye');
 Route::get('zhuantiye/:id','index/Index/zhuantiyedetail');

 Route::rule('network','index/Index/network');

 
 Route::rule('seoyouhua','index/Index/seoyouhua');
 Route::rule('seojz','index/Index/seojz');
 Route::rule('seopm','index/Index/seopm'); 
 Route::rule('seogjc','index/Index/seogjc');

 Route::rule('zhnewsseo01','index/Index/zhnewsseo01');

 Route::get('zhuantiyelist','index/Index/zhuantiyelist');
 Route::get('zhuantiyelist/:id','index/Index/zhuantiyelist_detail');
 Route::get('/:id','index/Index/common');

}else{
  
	// Route::rule('news/:cateid','mobile/index/news');
	// Route::rule('news_detail/:id','mobile/index/news_detail');

	// Route::rule('strategy/:cateid','mobile/index/strategy');
	// Route::rule('strategy_detail/:id','mobile/index/strategy_detail');

	// Route::rule('jinianzhang/:cateid','mobile/index/cases');
	// Route::rule('jinianzhang_detail/:id','mobile/index/cases_detail');

	// Route::rule('huizhang/:cateid','mobile/index/product');
	// Route::rule('huizhang','mobile/index/product');
	// Route::rule('huizhang_detail/:id','mobile/index/product_detail');

	// Route::rule('/','mobile/index/index');
    // Route::get('index','mobile/index/index');
    // Route::rule('mobile/website','mobile/Index/website');
    
    // Route::rule('website','mobile/Index/website');

    // Route::rule('mobile/case','mobile/Index/case');
    // Route::get('mobile/case/:id','mobile/index/case_detail');

    // Route::rule('mobile/solutions','mobile/index/solution');
    // Route::rule('mobile/news','mobile/index/news');

	// Route::rule('mobile/about','mobile/index/about');
    // Route::rule('mobile/remittance','mobile/index/remittance');



//前台页面

// Route::rule('/','mobile/index/index');

// Route::rule('index','mobile/Index/index');
// Route::rule('website','mobile/Index/website');
// Route::rule('case','mobile/Index/case');
// Route::rule('case_detail','mobile/Index/case_detail');
// Route::get('case/:id','mobile/Index/case_detail');
// Route::rule('about','mobile/Index/about');
// Route::rule('news','mobile/Index/news');
// Route::get('news/:id','mobile/Index/news_detail');
// Route::rule('news_detail','mobile/Index/news_detail');

// Route::rule('company','mobile/Index/company');
// Route::get('company/:id','mobile/Index/company_detail');
// Route::rule('jianzhanzs','mobile/Index/jianzhanzs');
// Route::get('jianzhanzs/:id','mobile/Index/jianzhanzs_detail');



// Route::rule('technology','mobile/Index/technology');
// Route::rule('solutions','mobile/Index/solution');
// Route::rule('solutions_detail','mobile/Index/solution_detail');
// Route::get('solutions/:id','mobile/Index/solution_detail');
// Route::rule('contact','mobile/Index/contact');

// Route::rule('seo_detail','mobile/Index/seo_detail');
// Route::get('seo/:id','mobile/Index/seo_detail');

// Route::rule('promotion_detail','mobile/Index/promotion_detail');
// Route::get('promotion/:id','mobile/Index/promotion_detail');

// Route::rule('marketing','mobile/Index/marketing');
// Route::get('marketing/:id','mobile/Index/marketing_detail');


// Route::rule('remittance','mobile/Index/remittance');
// Route::rule('company_team','mobile/Index/company_team');
// Route::rule('development','mobile/Index/development');

//  Route::rule('website02','mobile/Index/website02');
//  Route::rule('website03','mobile/Index/website03');
//  Route::rule('website04','mobile/Index/website04');



//  Route::get('seo','mobile/Index/seo');


//  Route::get('promotion','mobile/Index/promotion');

//  Route::get('zhuantiye','mobile/Index/zhuantiye');
//  Route::get('zhuantiye/:id','mobile/Index/zhuantiyedetail');

//  Route::rule('network','mobile/Index/network');

 
//  Route::rule('seoyouhua','mobile/Index/seoyouhua');
//  Route::rule('seojz','mobile/Index/seojz');
//  Route::rule('seopm','mobile/Index/seopm'); 
//  Route::rule('seogjc','mobile/Index/seogjc');

//  Route::rule('zhnewsseo01','mobile/Index/zhnewsseo01');

//  Route::get('zhuantiyelist','mobile/Index/zhuantiyelist');
//  Route::get('zhuantiyelist/:id','mobile/Index/zhuantiyelist_detail');
//  Route::get('/:id','mobile/Index/common');




// echo 111;
Route::rule('/','mobile/index/index');
Route::rule('index','mobile/index/index');
Route::rule('mobile/index','mobile/Index/index');
Route::rule('mobile/website','mobile/Index/website');
Route::rule('mobile/case','mobile/Index/case');
Route::rule('mobile/case_detail','mobile/Index/case_detail');
Route::get('mobile/case/:id','mobile/Index/case_detail');
Route::rule('mobile/about','mobile/Index/about');
Route::rule('mobile/news','mobile/Index/news');
Route::get('mobile/news/:id','mobile/Index/news_detail');
Route::rule('mobile/news_detail','mobile/Index/news_detail');

Route::rule('mobile/company','mobile/Index/company');
Route::get('mobile/company/:id','mobile/Index/company_detail');
Route::rule('mobile/jianzhanzs','mobile/Index/jianzhanzs');
Route::get('mobile/jianzhanzs/:id','mobile/Index/jianzhanzs_detail');



Route::rule('mobile/technology','mobile/Index/technology');
Route::rule('mobile/solutions','mobile/Index/solution');
Route::rule('mobile/solutions_detail','mobile/Index/solution_detail');
Route::get('mobile/solutions/:id','mobile/Index/solution_detail');
Route::rule('mobile/contact','mobile/Index/contact');

Route::rule('mobile/seo_detail','mobile/Index/seo_detail');
Route::get('mobile/seo/:id','mobile/Index/seo_detail');

Route::rule('mobile/promotion_detail','mobile/Index/promotion_detail');
Route::get('mobile/promotion/:id','mobile/Index/promotion_detail');

Route::rule('mobile/marketing','mobile/Index/marketing');
Route::get('mobile/marketing/:id','mobile/Index/marketing_detail');


Route::rule('mobile/remittance','mobile/Index/remittance');
Route::rule('mobile/company_team','mobile/Index/company_team');
Route::rule('mobile/development','mobile/Index/development');

 Route::rule('mobile/website02','mobile/Index/website02');
 Route::rule('mobile/website03','mobile/Index/website03');
 Route::rule('mobile/website04','mobile/Index/website04');



 Route::get('mobile/seo','mobile/Index/seo');


 Route::get('mobile/promotion','mobile/Index/promotion');

 Route::get('mobile/zhuantiye','mobile/Index/zhuantiye');
 Route::get('zhuantiye/:id','mobile/Index/zhuantiyedetail');

 Route::rule('mobile/network','mobile/Index/network');

 
 Route::rule('mobile/seoyouhua','mobile/Index/seoyouhua');
 Route::rule('mobile/seojz','mobile/Index/seojz');
 Route::rule('mobile/seopm','mobile/Index/seopm'); 
 Route::rule('mobile/seogjc','mobile/Index/seogjc');

 Route::rule('mobile/zhnewsseo01','mobile/Index/zhnewsseo01');

 Route::get('mobile/zhuantiyelist','mobile/Index/zhuantiyelist');
 Route::get('mobile/zhuantiyelist/:id','mobile/Index/zhuantiyelist_detail');
//  Route::get('mobile/:id','mobile/Index/common');







   
    
}



 

 
 







