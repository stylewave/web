<?php
// use think\Route;
//后台路由
Route::rule('manage','/admin/Index/index');

define('ISMOBILE', isMobile());

$a = isMobile();
Route::rule('sitemap','index/Index/sitemap');

 if($a){
//前台页面

Route::rule('/','mobile/index/index');

Route::rule('index','mobile/Index/index');
Route::rule('website','mobile/Index/website');
Route::rule('case','mobile/Index/case');
Route::rule('case_detail','mobile/Index/case_detail');
Route::rule('case/:id','mobile/Index/case_detail');
Route::rule('about','mobile/Index/about');
Route::rule('news','mobile/Index/news');
Route::rule('news/:id','mobile/Index/news_detail');
Route::rule('news_detail','mobile/Index/news_detail');

Route::rule('company','mobile/Index/company');
Route::rule('company/:id','mobile/Index/company_detail');
Route::rule('jianzhanzs','mobile/Index/jianzhanzs');
Route::rule('jianzhanzs/:id','mobile/Index/jianzhanzs_detail');



Route::rule('technology','mobile/Index/technology');
Route::rule('solutions','mobile/Index/solution');
Route::rule('solutions_detail','mobile/Index/solution_detail');
Route::rule('solutions/:id','mobile/Index/solution_detail');
Route::rule('contact','mobile/Index/contact');

Route::rule('seo_detail','mobile/Index/seo_detail');
Route::rule('seo/:id','mobile/Index/seo_detail');

Route::rule('promotion_detail','mobile/Index/promotion_detail');
Route::rule('promotion/:id','mobile/Index/promotion_detail');

Route::rule('marketing','mobile/Index/marketing');
Route::rule('marketing/:id','mobile/Index/marketing_detail');


Route::rule('remittance','mobile/Index/remittance');
Route::rule('company_team','mobile/Index/company_team');
Route::rule('development','mobile/Index/development');

 Route::rule('website02','mobile/Index/website02');
 Route::rule('website03','mobile/Index/website03');
 Route::rule('website04','mobile/Index/website04');



 Route::rule('seo','mobile/Index/seo');


 Route::rule('promotion','mobile/Index/promotion');

 Route::rule('zhuantiye','mobile/Index/zhuantiye');
 Route::rule('zhuantiye/:id','mobile/Index/zhuantiyedetail');

 Route::rule('network','mobile/Index/network');

 
 Route::rule('seoyouhua','mobile/Index/seoyouhua');
 Route::rule('seojz','mobile/Index/seojz');
 Route::rule('seopm','mobile/Index/seopm'); 
 Route::rule('seogjc','mobile/Index/seogjc');

 Route::rule('zhnewsseo01','mobile/Index/zhnewsseo01');

 Route::rule('zhuantiyelist','mobile/Index/zhuantiyelist');
 Route::rule('zhuantiyelist/:id','mobile/Index/zhuantiyelist_detail');
 Route::rule('/:id','mobile/Index/common');





   
}else{

//前台页面
Route::rule('index','index/Index/index');

Route::rule('website','index/Index/website');
Route::rule('case','index/Index/case');
Route::rule('case_detail','index/Index/case_detail');
Route::rule('case/:id','index/Index/case_detail');
Route::rule('about','index/Index/about');
Route::rule('news','index/Index/news');
Route::rule('news/:id','index/Index/news_detail');
Route::rule('news_detail','index/Index/news_detail');

Route::rule('company','index/Index/company');
Route::rule('company/:id','index/Index/company_detail');
Route::rule('jianzhanzs','index/Index/jianzhanzs');
Route::rule('jianzhanzs/:id','index/Index/jianzhanzs_detail');



Route::rule('technology','index/Index/technology');
Route::rule('solutions','index/Index/solution');
Route::rule('solutions_detail','index/Index/solution_detail');
Route::rule('solutions/:id','index/Index/solution_detail');
Route::rule('contact','index/Index/contact');

Route::rule('seo_detail','index/Index/seo_detail');
Route::rule('seo/:id','index/Index/seo_detail');

Route::rule('promotion_detail','index/Index/promotion_detail');
Route::rule('promotion/:id','index/Index/promotion_detail');



Route::rule('marketing','index/Index/marketing');
Route::rule('marketing/:id','index/Index/marketing_detail');


Route::rule('remittance','index/Index/remittance');
Route::rule('company_team','index/Index/company_team');
Route::rule('development','index/Index/development');

 Route::rule('website02','index/Index/website02');
 Route::rule('website03','index/Index/website03');
 Route::rule('website04','index/Index/website04');


 Route::rule('seo/seoyouhua','index/Index/seo?pid=68');
 Route::rule('seo/guanjianciyouhua','index/Index/seo?pid=84');
 Route::rule('seo/zhengzhanyouhua','index/Index/seo?pid=85');
 Route::rule('seo/seoyouhuajiaoc','index/Index/seo?pid=86');
 Route::rule('seo/tuiguangyouhua','index/Index/seo?pid=87');
 Route::rule('seo','index/Index/seo');


 Route::rule('promotion/wangzhanyouhua','index/Index/promotion?pid=47');
 Route::rule('promotion/wangzhantuiguang','index/Index/promotion?pid=71');
 Route::rule('promotion/wangluotuiguang','index/Index/promotion?pid=89');
 Route::rule('promotion/zhengzhantuiguang','index/Index/promotion?pid=90');
 Route::rule('promotion/wangluoyingxiao','index/Index/promotion?pid=91');
 Route::rule('promotion','index/Index/promotion');

 Route::rule('zhuantiye','index/Index/zhuantiye');
 Route::rule('zhuantiye/:id','index/Index/zhuantiyedetail');

 Route::rule('network','index/Index/network');

 
 Route::rule('seoyouhua','index/Index/seoyouhua');
 Route::rule('seojz','index/Index/seojz');
 Route::rule('seopm','index/Index/seopm'); 
 Route::rule('seogjc','index/Index/seogjc');

 Route::rule('zhnewsseo01','index/Index/zhnewsseo01');

 Route::rule('zhuantiyelist','index/Index/zhuantiyelist');
 Route::rule('zhuantiyelist/:id','index/Index/zhuantiyelist_detail');

 Route::rule('verify','index/Index/verify');


 Route::rule('web/:id/','index/Index/web');
 Route::rule('web/:id/','index/Index/web');

 Route::rule('/:id','index/Index/common');  
 Route::rule('/:id/','index/Index/common');  
// dump($request_uri);



}


 



 
 







