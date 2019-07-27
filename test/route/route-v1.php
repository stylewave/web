<?php
// use think\Route;
//后台路由
Route::rule('manage','/admin/Index/index');
//前台页面
Route::rule('index','index/Index/index');
Route::rule('website','index/Index/website');
Route::rule('case','index/Index/case');
Route::rule('case_detail','index/Index/case_detail');
Route::rule('about','index/Index/about');
Route::rule('news','index/Index/news');

Route::rule('news_detail','index/Index/news_detail');
Route::rule('technology','index/Index/technology');
Route::rule('solutions','index/Index/solution');
Route::rule('solutions_detail','index/Index/solution_detail');
Route::rule('contact','index/Index/contact');

 //Route::rule('seo','index/Index/seo');
Route::rule('seo_detail','index/Index/seo_detail');

//Route::rule('promotion','index/Index/promotion');
Route::rule('promotion_detail','index/Index/promotion_detail');



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







