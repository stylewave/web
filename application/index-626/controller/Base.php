<?php
namespace app\index\controller;
use think\Controller;
use think\Container;
use think\Db;
class Base extends controller
{
    public function initialize(){

      
        $the_host = $_SERVER['HTTP_HOST'];
        $request_uri = isset($_SERVER['REQUEST_URI']) ? $_SERVER['REQUEST_URI'] : ''; 
        $id = $this->request->param('id');

        if(true == ISMOBILE && $_SERVER['HTTP_HOST']!='m.yuntianxia.com'){
          
            $this->redirect('https://m.yuntianxia.com'.$_SERVER['REQUEST_URI']);
           
           
        }elseif(false == ISMOBILE && $_SERVER['HTTP_HOST']!='www.yuntianxia.com'){
            
             $this->redirect('https://www.yuntianxia.com'.$_SERVER['REQUEST_URI']);
        }

      
        $find = 'news_detail';
        $pos = strpos($request_uri, $find);
        if($pos){
                header('HTTP/1.1 301 Moved Permanently');
                header('Location:https://www.yuntianxia.com/news/'.$id.'.html');
        }

        $find2 = 'case_detail';
        $pos2 = strpos($request_uri, $find2);
        if($pos2){
                header('HTTP/1.1 301 Moved Permanently');
                header('Location:https://www.yuntianxia.com/case/'.$id.'.html');
        }

        $find3 = 'seo_detail';
        $pos3 = strpos($request_uri, $find3);
        if($pos3){
                header('HTTP/1.1 301 Moved Permanently');
                header('Location:https://www.yuntianxia.com/seo/'.$id.'.html');
        }

        $find4 = 'promotion_detail';
        $pos4 = strpos($request_uri, $find4);
        if($pos4){
                header('HTTP/1.1 301 Moved Permanently');
                header('Location:https://www.yuntianxia.com/promotion/'.$id.'.html');
        }

      
        // if($the_host == 'yuntianxia.net')
        // {
        //     header('HTTP/1.1 301 Moved Permanently');
        //     header('Location: http://www.yuntianxia.net'.$request_uri);
         
        // }

        $this->public_assign();
    }

    public function public_assign(){
        $config = Db::name('config')->find();
        $cate = Db::name('cate')->where(['tid'=>1,'pid'=>0,'ist'=>1])->select();
        $friend = Db::name('friendlink')->where(['ist'=>1])->order('orders','asc')->select();
        foreach($cate as $key=>$value){
            $cate[$key]['nav'] = Db::name('cate')->where(['pid'=>$value['id'],'ist'=>1])->order('orders','asc')->select();
        }

        //新闻
        $mobilecase = Db::name('cate')->where(['pid'=>41])->select();
        $modelcase = change_array($mobilecase,'id','title');
        $modelcase['41'] = '成功案例';

        $mobilenews = Db::name('cate')->where(['ist'=>1,'pid'=>42])->order('orders','asc')->select();
        // $mobilenews = Db::name('cate')->where("pid",'in',[42,67,70])->select();//42,67,70
        $mobileabout = Db::name('cate')->where(['ist'=>1,'pid'=>44])->select();

        $promotion = Db::name('cate')->where(['pid'=>70])->select();
        $mobileseo = Db::name('cate')->where(['pid'=>67])->select();

        $solutiondata = Db::name('article')->where('cateid',40)->order('orders','asc')->limit(16)->select();

        $dataseo = Db::name('cate')->where(['pid'=>92])->select();
        $dataseo = array_column($dataseo,'id');
        $pids =implode(",",$dataseo);
        $where3['cateid'] = ["cateid",'in',$pids];
		
        
     
        $tastile = Db::name('article')->where($where3)->order(['orders'=>'asc','id'=>'desc'])->select();
        foreach($tastile as $k=>$v){
            $tags = explode('，',$v['title']);
            $tastile[$k]['tag']  = $tags;
        }
		
		 $seocase = Db::name('article')->where(['cateid'=>94])->order(['orders'=>'asc','id'=>'desc'])->select();
		 
        $this->assign([
            'config' => $config,
            'cate' => $cate,
            'friend' => $friend,
            'mobilenews' => $mobilenews,
            'mobileabout' => $mobileabout,
            'promotion'=>$promotion,
            'mobileseo'=>$mobileseo,
            'solutiondata'=>$solutiondata,
            'mobilecase'=>$mobilecase,
            'modelcase'=>$modelcase,
            'tastile'=>$tastile,
			'seocase'=>$seocase,
        ]);
    }
}
