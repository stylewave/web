<?php
namespace app\index\controller;
use think\Controller;
use think\Container;
use think\Db;
class Base extends controller
{
    public function initialize(){
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
            'tastile'=>$tastile
        ]);
    }
}
