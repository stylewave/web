<?php
namespace app\index\controller;
use think\Controller;
use think\Container;
use think\Db;
use think\captcha\Captcha;
class Index extends Base
{
    public function index()
    {
        $seo = Db::name('seo')->where('cate','首页')->find();
        $this->assign(['seo'=>$seo]);
        $abouttop = Db::name('article')->where('cateid',65)->find();
        $banner = Db::name('banner')->where(['cateid'=>39,'ist'=>1])->order('orders','asc')->select();
        $about = Db::name('article')->where('cateid',57)->find();

        $where['cateid'] = ["cateid",'in',"41, 72, 73, 74,75,76,77"];
        $where['ist'] = 1;
        $case = Db::name('article')->where($where)->order(['orders'=>'asc','id'=>'desc'])->limit(9)->select();
        $team = Db::name('article')->where('cateid',58)->select();
        $banners = Db::name('banner')->where(['cateid'=>64,'ist'=>1])->order('orders','asc')->limit(36)->select();

        $news = Db::name('article')->where('ist',1)->where('cateid','in',[45, 46, 47, 48])->order(['orders'=>'asc','id'=>'desc'])->limit(4)->select();
        if($this->request->isPost()){
            $info = Db::name('config')->where('id',1)->find();
            $basic = Container::get('basic');
            $table = [
                'username' => input('username'),
                'tel' => input('tel'),
                'content' => input('content'),
                'addtime' => time(),
            ];
            $res = Db::name('online')->insert($table);
            if($res){
                try {
                    $user['username'] = input('post.username');
                    $user['title'] = '在线留言';
                    $name = implode('-', $user);
                    $data['username'] = '名字：' . input('username') . '<br />';
                    $data['tel'] = '电话：' . input('tel') . '<br />';
                    $data['content'] = '需求：' . input('content');
                    $body = implode(' ', $data);
                    //发送邮件 - 调用think_send_mail函数
                    if ($info['is_open'] == 1) {
                        think_send_mail($info['jieshou'], $info['smname'], $name, $body);
                    }
                }catch(Exception $e){
                    var_dump($e->getMessage());
                }
                return $basic->rmsg('提交成功！','1','json');
            }else{
                return $basic->rmsg('提交失败！','0','json');
            }
        }
        $newnav = Db::name('cate')->where(['ist'=>1,'pid'=>42])->order('orders','asc')->select();
        foreach($newnav as $k=>$v){
            $newnav[$k]['list'] = Db::name('article')->where('ist',1)->where('cateid',$v['id'])->order(['orders'=>'asc','id'=>'desc'])->limit(20)->select();
        }
// dump($newnav);
        $news1 = Db::name('article')->where('ist',1)->where('cateid',45)->order(['orders'=>'asc','id'=>'desc'])->limit(20)->select();
        $news2 = Db::name('article')->where('ist',1)->where('cateid',46)->order(['orders'=>'asc','id'=>'desc'])->limit(20)->select();
        // $news3 = Db::name('article')->where('ist',1)->where('cateid',47)->order(['orders'=>'asc','id'=>'desc'])->limit(20)->select();
        //后来使用的
        $news4 = Db::name('article')->where('ist',1)->where('cateid',47)->order(['orders'=>'asc','id'=>'desc'])->limit(20)->select();

        $news5 = Db::name('article')->where('ist',1)->where('cateid',83)->order(['orders'=>'asc','id'=>'desc'])->limit(20)->select();
        $news6 = Db::name('article')->where('ist',1)->where('cateid',88)->order(['orders'=>'asc','id'=>'desc'])->limit(20)->select();

        $casefour = Db::name('cate')->where(['pid'=>41])->order('id','desc')->limit('4')->select();

        $case1 = Db::name('article')->where(['cateid'=>77,'ist'=>1])->order(['orders'=>'asc','id'=>'desc'])->limit(9)->select();
        $case2 = Db::name('article')->where(['cateid'=>76,'ist'=>1])->order(['orders'=>'asc','id'=>'desc'])->limit(9)->select();
        $case3 = Db::name('article')->where(['cateid'=>75,'ist'=>1])->order(['orders'=>'asc','id'=>'desc'])->limit(9)->select();
        $case4 = Db::name('article')->where(['cateid'=>74,'ist'=>1])->order(['orders'=>'asc','id'=>'desc'])->limit(9)->select();
        // dump($news1);
       
        $this->assign(['nav'=>'index']);
        $this->assign([
            'banner'=>$banner,
            'news'=>$news,
            'banners'=>$banners,
            'about'=>$about,
            'case'=>$case,
            'team'=>$team,
            'abouttop'=>$abouttop,
            'news1'=>$news1,
            'news2'=>$news2,
            // 'news3'=>$news3,
            'news4'=>$news4,
            'news5'=>$news5,
            'news6'=>$news6,
            'casefour'=>$casefour,
            'case1'=>$case1,
            'case2'=>$case2,
            'case3'=>$case3,
            'case4'=>$case4,
            'newnav'=>$newnav,
            ]);
        return $this->fetch();
    }
    //关于我们
    public function about(){
        $seo = Db::name('seo')->where('cate','关于我们')->find();
        $this->assign(['seo'=>$seo]);
        $about = Db::name('article')->where('cateid',57)->find();
        $team = Db::name('article')->where(['cateid'=>58,'ist'=>1])->limit(4)->select();
        $hj = Db::name('article')->where('cateid',59)->find();
        $fazhan = Db::name('article')->where('cateid',53)->select();
        $linian = Db::name('article')->where('cateid',60)->find();
        $patner = Db::name('article')->where('cateid',61)->limit(10)->select();

       

        $bannerqiye = Db::name('banner')->where(['cateid'=>78,'ist'=>1])->order('orders','asc')->limit(36)->select();

        $this->assign(['about'=>$about,'team'=>$team,'hj'=>$hj,'fazhan'=>$fazhan,'linian'=>$linian,'patner'=>$patner,'bannerqiye'=>$bannerqiye]);
        $this->assign(['nav'=>'about']);
        return $this->fetch();
    }
//汇款方式
    public function remittance(){
        $seo = Db::name('seo')->where('cate','关于我们')->find();
        $this->assign(['seo'=>$seo]);
        $remittance = Db::name('article')->where('cateid',79)->order(['orders'=>'asc'])->select();
        $this->assign(['remittance'=>$remittance]);

        $this->assign(['nav'=>'about']);
        // dump($remittance);
        return $this->fetch();
    }
    public function company_team(){
        $seo = Db::name('seo')->where('cate','关于我们')->find();
        $this->assign(['seo'=>$seo]);

        $companyteam = Db::name('article')->where(['cateid'=>80,'company'=>1])->select();
        $companyteam2 = Db::name('article')->where(['cateid'=>80,'company'=>2])->select();
        $companyteam3 = Db::name('article')->where(['cateid'=>80,'company'=>3])->select();
        $companyteam4 = Db::name('article')->where(['cateid'=>80,'company'=>4])->select();


        $companyteam5 = Db::name('article')->where(['cateid'=>81])->select();

        $companyteam6 = Db::name('article')->where(['cateid'=>82])->select();

        $this->assign([
            'companyteam'=>$companyteam,
            'companyteam2'=>$companyteam2,
            'companyteam3'=>$companyteam3,
            'companyteam4'=>$companyteam4,
            'companyteam5'=>$companyteam5,
            'companyteam6'=>$companyteam6,
            ]);

        $this->assign(['nav'=>'about']);
        return $this->fetch();
    }
    public function development(){
        $seo = Db::name('seo')->where('cate','关于我们')->find();
        $this->assign(['seo'=>$seo]);
        $development = Db::name('article')->where('cateid',53)->order(['title'=>'desc','id'=>'desc'])->select();
        // dump($development);
        $this->assign(['development'=>$development]);
        $this->assign(['nav'=>'about']);
        return $this->fetch();
    }
    //案例中心
    public function case(){
       

        $pid = $this->request->param('pid');
        if(isset($pid)){
            $pid = $this->request->param('pid');
            $list = Db::name('article')->where('cateid',$pid)->order(['orders'=>'asc','id'=>'desc'])->paginate(15, false, ['query' => $this->request->param()]);
        }else{
           if(isset($title)) $where['titie'] = ['title','like','%'.$title.'%'];
            $where['cateid'] = ["cateid",'in',"41, 72, 73, 74,75,76,77"];
            $list = Db::name('article')->where($where)->order(['orders'=>'asc','id'=>'desc'])->paginate(15, false, ['query' => $this->request->param()]);
            // $list = Db::name('article')->where('cateid','in',[45, 46, 47, 48])->order('orders','desc')->paginate(8, false, ['query' => $this->request->param()]);
        }

        if($pid=='72'){
            $seotitle = '成功案例-企业营销';
        }elseif($pid=='73'){
            $seotitle = '成功案例-移动应用';
        }elseif($pid=='74'){
            $seotitle = '成功案例-购物商城';
        }elseif($pid=='75'){
            $seotitle = '成功案例-外贸网站';
        }elseif($pid=='76'){
            $seotitle = '成功案例-行业门户';
        }elseif($pid=='77'){
            $seotitle = '成功案例-创意品牌';
        }
        else{
            $seotitle = '成功案例';
        }

        // $seo = Db::name('seo')->where('cate','seo优化')->find();
        $seo = Db::name('seo')->where('cate',$seotitle)->find();
        $this->assign(['seo'=>$seo]);

        $this->assign(['nav'=>'case']);

        $this->assign(['list'=>$list,'pid'=>$pid]);
        return $this->fetch();
    }
    //案例详情
    public function case_detail(){
        $seo = Db::name('seo')->where('cate','成功案例')->find();
        $this->assign(['seo'=>$seo]);
        $id = $this->request->param('id');
        $data = Db::name('article')->find($id);

        $where['cateid'] = ["cateid",'in',"41, 72, 73, 74,75,76,77"];
        $casedata = Db::name('article')->where($where)->order('id','desc')->limit('3')->select();
        $this->assign(['nav'=>'case']);
        $this->assign(['data'=>$data,'casedata'=>$casedata]);
        return $this->fetch();
    }
    //网站建设
    public function website(){
        $seo = Db::name('seo')->where('cate','网站建设')->find();
        $this->assign(['seo'=>$seo]);
        $data = Db::name('cate')->where('pid',26)->order('orders','asc')->select();
        foreach($data as $key=>$val){
            $data[$key]['list'] = Db::name('article')->where('cateid',$val['id'])->order('orders','asc')->select();
        }
//        dump($data);die;
        $this->assign(['data'=>$data]);
        $this->assign(['nav'=>'website']);
        return $this->fetch();
    }

    public function website02(){
        $seo = Db::name('seo')->where('cate','网站建设')->find();
        $this->assign(['seo'=>$seo]);
        $this->assign(['nav'=>'website']);
        $where2['cateid'] = ["cateid",'in',"77"];
        $casedata = Db::name('article')->where($where2)->order(['orders'=>'asc','id'=>'desc'])->limit('3')->select();
       
        $this->assign(['casedata'=>$casedata]);
        return $this->fetch();
    }
    public function website03(){
        $seo = Db::name('seo')->where('cate','网站建设')->find();
        $this->assign(['seo'=>$seo]);
        $this->assign(['nav'=>'website']);
        $where2['cateid'] = ["cateid",'in',"74"];
        $casedata = Db::name('article')->where($where2)->order(['orders'=>'asc','id'=>'desc'])->limit('3')->select();
       
        $this->assign(['casedata'=>$casedata]);
        return $this->fetch();
    }
    public function website04(){
        $seo = Db::name('seo')->where('cate','网站建设')->find();
        $this->assign(['seo'=>$seo]);
        $this->assign(['nav'=>'website']);
        $where73['cateid'] = "76";
        $casedata73 = Db::name('article')->where($where73)->order(['orders'=>'asc','id'=>'desc'])->limit('2')->select();
       
        $where72['cateid'] = "72";
        $casedata72 = Db::name('article')->where($where72)->order(['orders'=>'asc','id'=>'desc'])->limit('2')->select();
        $where74['cateid'] = "74";
        $casedata74 = Db::name('article')->where($where74)->order(['orders'=>'asc','id'=>'desc'])->limit('2')->select();

        $where77['cateid'] = "77";
        $casedata77 = Db::name('article')->where($where77)->order(['orders'=>'asc','id'=>'desc'])->limit('2')->select();

        $this->assign([
            'casedata72'=>$casedata72,
            'casedata73'=>$casedata73,
            'casedata74'=>$casedata74,
            'casedata77'=>$casedata77,
            ]);
        return $this->fetch();
    }
    //新闻中心
    public function news()
    {
        $seo = Db::name('seo')->where('cate','新闻动态')->find();
        $this->assign(['seo'=>$seo]);
        $pid = $this->request->param('pid');
        $title = $this->request->param('keys');
        if(isset($pid)){
            $pid = $this->request->param('pid');
            $list = Db::name('article')->where('cateid',$pid)->order(['orders'=>'asc','id'=>'desc'])->paginate(15, false, ['query' => $this->request->param()]);
            $titledata = Db::name('cate')->where('id',$pid)->find()['title'];
        }else{
           if(isset($title)) $where['titie'] = ['title','like','%'.$title.'%'];
            $where['cateid'] = ["cateid",'in',"45, 47, 48,68"];
            $titledata = '全部分类';
            // $id = 45;
            $list = Db::name('article')->where($where)->order(['orders'=>'asc','id'=>'desc'])->paginate(15, false, ['query' => $this->request->param()]);
            // $list = Db::name('article')->where('cateid','in',[45, 46, 47, 48])->order('orders','desc')->paginate(8, false, ['query' => $this->request->param()]);
        }
        $newsnav = Db::name('cate')->where("pid",'in',[42,67,70])->select();//42,67,70
    
        // $newsnav = Db::name('cate')->where('pid',42)->select();
        $this->assign(['newsnav'=>$newsnav,'list'=>$list,'pid'=>$pid]);
        $this->assign(['nav'=>'news']);

        $hot1 = Db::name('article')->where('ist',1)->where('cateid',48)->order(['orders'=>'asc','id'=>'desc'])->limit(6)->select();
        $hot2 = Db::name('article')->where('ist',1)->where('cateid',47)->order(['orders'=>'asc','id'=>'desc'])->limit(6)->select();
        $this->assign(['hot1'=>$hot1,'hot2'=>$hot2,'titledata'=>$titledata]);

        return $this->fetch();
    }
    //新闻详情
    public function news_detail()
    {
        $seo = Db::name('seo')->where('cate','新闻动态')->find();
        $this->assign(['seo'=>$seo]);
        $id = $this->request->param('id');
        $newsnav = Db::name('cate')->where('pid',42)->select();
        $data = Db::name('article')->find($id);
        Db::name('article')->where('id',$id)->update(['click'=>$data['click']+1]);

        $detail = Db::name('article')->where('a.id',$id)->alias('a')->join('cate b','a.cateid = b.id')->find();
        //上一个
        $where['cateid'] = $detail['id'];
        $where['id']=['id','<',$id];
        $front = Db::name('article')->where($where)->order('id', 'desc')->limit('1')->find();;
        if (!$front){
            $front['title'] = '已经是最后一篇了';
        }

        $this->assign('front',$front);

        //下一个
        $map['cateid'] = $detail['id'];
        $map['id']=['id','>',$id];
        $after = Db::name('article')->where($map)->order('id', 'asc')->limit('1')->find();
        if (!$after){
            $after['title'] = '已经是最后一篇了';
        }

        $this->assign('after',$after);
        
        $tags = explode('，',$data['stitle']);
        $data['tag']  = $tags;
   
        $common = Db::name('article')->where(['cateid'=>$data['cateid']])->order('id','desc')->limit('5')->select();
        $alldata = Db::name('article')->where('cateid','in',[45, 46, 47, 48])->order('id','desc')->limit('10')->select();

        $where2['cateid'] = ["cateid",'in',"41, 72, 73, 74,75,76,77"];
        $casedata = Db::name('article')->where($where2)->order('id','desc')->limit('3')->select();
        $this->assign(['newsnav'=>$newsnav,'data'=>$data,'detail'=>$detail,'common'=>$common,'alldata'=>$alldata,'casedata'=>$casedata]);
        $this->assign(['nav'=>'news']);
        return $this->fetch();
    }


        //
        public function company()
        {
            $seo = Db::name('seo')->where('cate','新闻动态-公司新闻')->find();
            $this->assign(['seo'=>$seo]);
            $pid = $this->request->param('pid');
            $title = $this->request->param('keys');
          
            if(isset($title)) $where['titie'] = ['title','like','%'.$title.'%'];
            $where['cateid'] =45;
            $list = Db::name('article')->where($where)->order(['orders'=>'asc','id'=>'desc'])->paginate(15, false, ['query' => $this->request->param()]);
              
        
            $this->assign(['list'=>$list,'pid'=>$pid]);
            $this->assign(['nav'=>'news']);
    
            $hot1 = Db::name('article')->where('ist',1)->where('cateid',45)->order(['orders'=>'asc','id'=>'desc'])->limit(6)->select();
            $hot2 = Db::name('article')->where('ist',1)->where('cateid',45)->order(['orders'=>'asc','id'=>'desc'])->limit(6)->select();
            $this->assign(['hot1'=>$hot1,'hot2'=>$hot2]);
    
            return $this->fetch();
        }
        
        public function company_detail()
        {
            $seo = Db::name('seo')->where('cate','新闻动态-公司新闻')->find();
            $this->assign(['seo'=>$seo]);
            $id = $this->request->param('id');
            $newsnav = Db::name('cate')->where('pid',42)->select();
            $data = Db::name('article')->find($id);
            Db::name('article')->where('id',$id)->update(['click'=>$data['click']+1]);
    
            $detail = Db::name('article')->where('a.id',$id)->alias('a')->join('cate b','a.cateid = b.id')->find();
            //上一个
            $where['cateid'] = $detail['id'];
            $where['id']=['id','<',$id];
            $front = Db::name('article')->where($where)->order('id', 'desc')->limit('1')->find();;
            if (!$front){
                $front['title'] = '已经是最后一篇了';
            }
    
            $this->assign('front',$front);
    
            //下一个
            $map['cateid'] = $detail['id'];
            $map['id']=['id','>',$id];
            $after = Db::name('article')->where($map)->order('id', 'asc')->limit('1')->find();
            if (!$after){
                $after['title'] = '已经是最后一篇了';
            }
    
            $this->assign('after',$after);
    
            $tags = explode('，',$data['stitle']);
            $data['tag']  = $tags;

            $common = Db::name('article')->where(['cateid'=>$data['cateid']])->order('id','desc')->limit('5')->select();
            $alldata = Db::name('article')->where('cateid','in',[45])->order('id','desc')->limit('10')->select();
    
            $where2['cateid'] = ["cateid",'in',"41, 72, 73, 74,75,76,77"];
            $casedata = Db::name('article')->where($where2)->order('id','desc')->limit('3')->select();
            $this->assign(['newsnav'=>$newsnav,'data'=>$data,'detail'=>$detail,'common'=>$common,'alldata'=>$alldata,'casedata'=>$casedata]);
            $this->assign(['nav'=>'news']);
            return $this->fetch();
        }

          //
          public function jianzhanzs()
          {
              $seo = Db::name('seo')->where('cate','新闻动态-建站知识')->find();
              $this->assign(['seo'=>$seo]);
              $pid = $this->request->param('pid');
              $title = $this->request->param('keys');
            
              if(isset($title)) $where['titie'] = ['title','like','%'.$title.'%'];
              $where['cateid'] =48;
              $list = Db::name('article')->where($where)->order(['orders'=>'asc','id'=>'desc'])->paginate(15, false, ['query' => $this->request->param()]);
                
          
              $this->assign(['list'=>$list,'pid'=>$pid]);
              $this->assign(['nav'=>'news']);
      
              $hot1 = Db::name('article')->where('ist',1)->where('cateid',48)->order(['orders'=>'asc','id'=>'desc'])->limit(6)->select();
              $hot2 = Db::name('article')->where('ist',1)->where('cateid',48)->order(['orders'=>'asc','id'=>'desc'])->limit(6)->select();
              $this->assign(['hot1'=>$hot1,'hot2'=>$hot2]);
      
              return $this->fetch();
          }
          
          public function jianzhanzs_detail()
          {
              $seo = Db::name('seo')->where('cate','新闻动态')->find();
              $this->assign(['seo'=>$seo]);
              $id = $this->request->param('id');
              $newsnav = Db::name('cate')->where('pid',42)->select();
              $data = Db::name('article')->find($id);
              Db::name('article')->where('id',$id)->update(['click'=>$data['click']+1]);
      
              $detail = Db::name('article')->where('a.id',$id)->alias('a')->join('cate b','a.cateid = b.id')->find();
              //上一个
              $where['cateid'] = $detail['id'];
              $where['id']=['id','<',$id];
              $front = Db::name('article')->where($where)->order('id', 'desc')->limit('1')->find();;
              if (!$front){
                  $front['title'] = '已经是最后一篇了';
              }
      
              $this->assign('front',$front);
      
              //下一个
              $map['cateid'] = $detail['id'];
              $map['id']=['id','>',$id];
              $after = Db::name('article')->where($map)->order('id', 'asc')->limit('1')->find();
              if (!$after){
                  $after['title'] = '已经是最后一篇了';
              }
      
              $this->assign('after',$after);
      
              $tags = explode('，',$data['stitle']);
              $data['tag']  = $tags;
      
              $common = Db::name('article')->where(['cateid'=>$data['cateid']])->order('id','desc')->limit('5')->select();
              $alldata = Db::name('article')->where('cateid','in',[48])->order('id','desc')->limit('10')->select();
      
              $where2['cateid'] = ["cateid",'in',"41, 72, 73, 74,75,76,77"];
              $casedata = Db::name('article')->where($where2)->order('id','desc')->limit('3')->select();
              $this->assign(['newsnav'=>$newsnav,'data'=>$data,'detail'=>$detail,'common'=>$common,'alldata'=>$alldata,'casedata'=>$casedata]);
              $this->assign(['nav'=>'news']);
              return $this->fetch();
          }
    


    //seo
    public function seo()
    {
      
        $pid = $this->request->param('pid');
        
        $title = $this->request->param('keys');
        if(isset($pid)){
            $pid = $this->request->param('pid');
            $list = Db::name('article')->where('cateid',$pid)->order(['orders'=>'asc','id'=>'desc'])->paginate(15, false, ['query' => $this->request->param()]);
        }else{
           if(isset($title)) $where['titie'] = ['title','like','%'.$title.'%'];
            // $where['cateid'] = ["cateid",'in',"68,84,85,86,87"];
            $where['cateid'] =68;
            // $id = 45;
            $list = Db::name('article')->where($where)->order(['orders'=>'asc','id'=>'desc'])->paginate(15, false, ['query' => $this->request->param()]);
           
        }
    

        $seo = Db::name('seo')->where('cate','新闻动态-seo优化')->find();
     
        $this->assign(['seo'=>$seo]);

        // dump($pid);
        $newsnav = Db::name('cate')->where('pid',67)->select();
        $this->assign(['newsnav'=>$newsnav,'list'=>$list,'pid'=>$pid]);
        $this->assign(['nav'=>'news']);
        $hot1 = Db::name('article')->where('ist',1)->where('cateid',48)->order(['orders'=>'asc','id'=>'desc'])->limit(6)->select();
        $hot2 = Db::name('article')->where('ist',1)->where('cateid',47)->order(['orders'=>'asc','id'=>'desc'])->limit(6)->select();
        $this->assign(['hot1'=>$hot1,'hot2'=>$hot2]);
        return $this->fetch();
    }
    //seo详情
    public function seo_detail()
    {
        $seo = Db::name('seo')->where('cate','seo优化')->find();
        $this->assign(['seo'=>$seo]);
        $id = $this->request->param('id');
        $newsnav = Db::name('cate')->where('pid',67)->select();
        $data = Db::name('article')->find($id);
        Db::name('article')->where('id',$id)->update(['click'=>$data['click']+1]);

        $detail = Db::name('article')->where('a.id',$id)->alias('a')->join('cate b','a.cateid = b.id')->find();
        //上一个
        $where['cateid'] = $detail['id'];
        $where['id']=['id','<',$id];
        $front = Db::name('article')->where($where)->order('id', 'desc')->limit('1')->find();;
        if (!$front){
            $front['title'] = '已经是最后一篇了';
        }

        $this->assign('front',$front);

        //下一个
        $map['cateid'] = $detail['id'];
        $map['id']=['id','>',$id];
        $after = Db::name('article')->where($map)->order('id', 'asc')->limit('1')->find();
        if (!$after){
            $after['title'] = '已经是最后一篇了';
        }

        $this->assign('after',$after);

        $tags = explode('，',$data['stitle']);
        $data['tag']  = $tags;


        $common = Db::name('article')->where(['cateid'=>$data['cateid']])->order('id','desc')->limit('5')->select();
        $alldata = Db::name('article')->where('cateid','in',[68])->order('id','desc')->limit('10')->select();

        $where2['cateid'] = ["cateid",'in',"41, 72, 73, 74,75,76,77"];
        $casedata = Db::name('article')->where($where2)->order('id','desc')->limit('3')->select();
        $this->assign(['newsnav'=>$newsnav,'data'=>$data,'detail'=>$detail,'common'=>$common,'alldata'=>$alldata,'casedata'=>$casedata]);
        $this->assign(['nav'=>'news']);
        return $this->fetch();
    }



   //网站推广
   public function promotion()
   {
     
       $pid = $this->request->param('pid');
       $title = $this->request->param('keys');
       if(isset($pid)){
           $pid = $this->request->param('pid');
           $list = Db::name('article')->where('cateid',$pid)->order(['orders'=>'asc','id'=>'desc'])->paginate(15, false, ['query' => $this->request->param()]);
       }else{
          if(isset($title)) $where['titie'] = ['title','like','%'.$title.'%'];
          // $where['cateid'] = ["cateid",'in',"71, 47"];
           $where['cateid'] = 47;
           // $id = 45;
           $list = Db::name('article')->where($where)->order(['orders'=>'asc','id'=>'desc'])->paginate(15, false, ['query' => $this->request->param()]);
           // $list = Db::name('article')->where('cateid','in',[45, 46, 47, 48])->order('orders','desc')->paginate(8, false, ['query' => $this->request->param()]);
       }

    $seo = Db::name('seo')->where('cate','新闻动态-网络推广')->find();
    
    $this->assign(['seo'=>$seo]);

       $newsnav = Db::name('cate')->where('pid',70)->select();
       $this->assign(['newsnav'=>$newsnav,'list'=>$list,'pid'=>$pid]);
        $this->assign(['nav'=>'news']);
        $hot1 = Db::name('article')->where('ist',1)->where('cateid',48)->order(['orders'=>'asc','id'=>'desc'])->limit(6)->select();
        $hot2 = Db::name('article')->where('ist',1)->where('cateid',47)->order(['orders'=>'asc','id'=>'desc'])->limit(6)->select();
        $this->assign(['hot1'=>$hot1,'hot2'=>$hot2]);
       return $this->fetch();
   }
   //seo详情
   public function promotion_detail()
   {
       $seo = Db::name('seo')->where('cate','新闻动态-网络推广')->find();
       $this->assign(['seo'=>$seo]);
       $id = $this->request->param('id');
       $newsnav = Db::name('cate')->where('pid',70)->select();
       $data = Db::name('article')->find($id);
       Db::name('article')->where('id',$id)->update(['click'=>$data['click']+1]);

       $detail = Db::name('article')->where('a.id',$id)->alias('a')->join('cate b','a.cateid = b.id')->find();
       //上一个
       $where['cateid'] = $detail['id'];
       $where['id']=['id','<',$id];
       $front = Db::name('article')->where($where)->order('id', 'desc')->limit('1')->find();;
       if (!$front){
           $front['title'] = '已经是最后一篇了';
       }

       $this->assign('front',$front);

       //下一个
       $map['cateid'] = $detail['id'];
       $map['id']=['id','>',$id];
       $after = Db::name('article')->where($map)->order('id', 'asc')->limit('1')->find();
       if (!$after){
           $after['title'] = '已经是最后一篇了';
       }

       $this->assign('after',$after);

       $tags = explode('，',$data['stitle']);
       $data['tag']  = $tags;


       $common = Db::name('article')->where(['cateid'=>$data['cateid']])->order('id','desc')->limit('5')->select();
       $alldata = Db::name('article')->where('cateid','in',[47])->order('id','desc')->limit('10')->select();

       $where2['cateid'] = ["cateid",'in',"41, 72, 73, 74,75,76,77"];
       $casedata = Db::name('article')->where($where2)->order('id','desc')->limit('3')->select();
       $this->assign(['newsnav'=>$newsnav,'data'=>$data,'detail'=>$detail,'common'=>$common,'alldata'=>$alldata,'casedata'=>$casedata]);
       $this->assign(['nav'=>'news']);
       return $this->fetch();
   }  

   //网络营销
   public function marketing()
   {
     
       $pid = $this->request->param('pid');
       $title = $this->request->param('keys');
     
     if(isset($title)) $where['titie'] = ['title','like','%'.$title.'%'];
        
     $where['cateid'] = 95;
          
     $list = Db::name('article')->where($where)->order(['orders'=>'asc','id'=>'desc'])->paginate(15, false, ['query' => $this->request->param()]);
       

    $seo = Db::name('seo')->where('cate','新闻动态-网络营销')->find();
    $this->assign(['seo'=>$seo]);

       $newsnav = Db::name('cate')->where('pid',42)->select();
       $this->assign(['newsnav'=>$newsnav,'list'=>$list,'pid'=>$pid]);
        $this->assign(['nav'=>'news']);
        $hot1 = Db::name('article')->where('ist',1)->where('cateid',48)->order(['orders'=>'asc','id'=>'desc'])->limit(6)->select();
        $hot2 = Db::name('article')->where('ist',1)->where('cateid',47)->order(['orders'=>'asc','id'=>'desc'])->limit(6)->select();
        $this->assign(['hot1'=>$hot1,'hot2'=>$hot2]);
       return $this->fetch();
   }
   //网络营销详情
   public function marketing_detail()
   {
       $seo = Db::name('seo')->where('cate','新闻动态-网络营销')->find();
       $this->assign(['seo'=>$seo]);
       $id = $this->request->param('id');
       $newsnav = Db::name('cate')->where('pid',42)->select();
       $data = Db::name('article')->find($id);
       Db::name('article')->where('id',$id)->update(['click'=>$data['click']+1]);

       $detail = Db::name('article')->where('a.id',$id)->alias('a')->join('cate b','a.cateid = b.id')->find();
       //上一个
       $where['cateid'] = $detail['id'];
       $where['id']=['id','<',$id];
       $front = Db::name('article')->where($where)->order('id', 'desc')->limit('1')->find();;
       if (!$front){
           $front['title'] = '已经是最后一篇了';
       }

       $this->assign('front',$front);

       //下一个
       $map['cateid'] = $detail['id'];
       $map['id']=['id','>',$id];
       $after = Db::name('article')->where($map)->order('id', 'asc')->limit('1')->find();
       if (!$after){
           $after['title'] = '已经是最后一篇了';
       }

       $this->assign('after',$after);

       $tags = explode('，',$data['stitle']);
       $data['tag']  = $tags;


       $common = Db::name('article')->where(['cateid'=>$data['cateid']])->order('id','desc')->limit('5')->select();
       $alldata = Db::name('article')->where('cateid','in',[95])->order('id','desc')->limit('10')->select();

       $where2['cateid'] = ["cateid",'in',"41, 72, 73, 74,75,76,77"];
       $casedata = Db::name('article')->where($where2)->order('id','desc')->limit('3')->select();
       $this->assign(['newsnav'=>$newsnav,'data'=>$data,'detail'=>$detail,'common'=>$common,'alldata'=>$alldata,'casedata'=>$casedata]);
       $this->assign(['nav'=>'news']);
       return $this->fetch();
   }  

   

    //方案介绍
    public function solution()
    {
        $seo = Db::name('seo')->where('cate','解决方案')->find();
        $this->assign(['seo'=>$seo]);

        $title = $this->request->param('keys');
      
        if(isset($title)) $where['titie'] = ['title','like','%'.$title.'%'];
        $where['cateid'] = 40;
        $list = Db::name('article')->where($where)->order(['orders'=>'asc','id'=>'desc'])->paginate(9);
        // dump($list);
        $banners = Db::name('banner')->where(['cateid'=>64])->order('orders','asc')->select();
        $this->assign(['list'=>$list,'banners'=>$banners]);
        $this->assign(['nav'=>'solution']);
        return $this->fetch();
    }
    //方案介绍详情
    public function solution_detail()
    {
        $seo = Db::name('seo')->where('cate','解决方案')->find();
        $this->assign(['seo'=>$seo]);
        $id = $this->request->param('id');
        $fang = Db::name('article')->where('cateid',40)->field('id,title')->select();
        $data = Db::name('article')->find($id);
//        Db::name('article')->where('id',$id)->update(['click'=>$data['click']+1]);
        // $detail = Db::name('article')->where('id',$id)->find();




        $detail = Db::name('article')->where('a.id',$id)->alias('a')->join('cate b','a.cateid = b.id')->find();
        //上一个
        $where['cateid'] = $detail['id'];
        $where['id']=['id','<',$id];
        $front = Db::name('article')->where($where)->order('id', 'desc')->limit('1')->find();;
        if (!$front){
            $front['title'] = '已经是最后一篇了';
        }
 
        $this->assign('front',$front);
 
        //下一个
        $map['cateid'] = $detail['id'];
        $map['id']=['id','>',$id];
        $after = Db::name('article')->where($map)->order('id', 'asc')->limit('1')->find();
        if (!$after){
            $after['title'] = '已经是最后一篇了';
        }
 
        $this->assign('after',$after);

        $tags = explode('，',$data['stitle']);
        $data['tag']  = $tags;
 
 
        $common = Db::name('article')->where(['cateid'=>$data['cateid']])->order('id','desc')->limit('5')->select();
        $alldata = Db::name('article')->where('cateid','in',[47])->order('id','desc')->limit('10')->select();


        $this->assign(['common'=>$common,'alldata'=>$alldata]);



        $banners = Db::name('banner')->where(['cateid'=>64])->order('orders','asc')->select();

        $where2['cateid'] = ["cateid",'in',"41, 72, 73, 74,75,76,77"];
        $casedata = Db::name('article')->where($where2)->order('id','desc')->limit('3')->select();
        $this->assign(['fang'=>$fang,'data'=>$data,'detail'=>$detail,'banners'=>$banners,'casedata'=>$casedata]);
        $this->assign(['nav'=>'solution']);
        return $this->fetch();
    }
    //服务与支持
    public function technology(){
        $seo = Db::name('seo')->where('cate','服务及支持')->find();
        $this->assign(['seo'=>$seo]);
        $list = Db::name('article')->where('ist',1)->where('cateid','in',[45, 46, 47, 48])->limit(4)->select();
        $this->assign(['list'=>$list]);
        return $this->fetch();
    }
    //关于我们-联系我们
    public function contact()
    {
        if($this->request->isPost()){
            $info = Db::name('config')->where('id',1)->find();
            $basic = Container::get('basic');
            $table = [
                'username' => input('username'),
                'tel' => input('tel'),
                'email' => input('email'),
                'content' => input('content'),
                'company' => input('company'),
                'addtime' => time(),
 		'ip'=>getIP(),
            ];
            $res = Db::name('message')->insert($table);
            if($res){
                // try {
                //     $user['username'] = input('post.username');
                //     $user['title'] = '意见咨询';
                //     $name = implode('-', $user);
                //     $data['username'] = '名字：' . input('username') . '<br />';
                //     $data['tel'] = '电话：' . input('tel') . '<br />';
                //     $data['email'] = '邮箱：' . input('email') . '<br />';
                //     $data['content'] = '留言信息：' . input('content');
                //     $body = implode(' ', $data);
                //     //发送邮件 - 调用think_send_mail函数
                //     if ($info['is_open'] == 1) {
                //         think_send_mail($info['jieshou'], $info['smname'], $name, $body);
                //     }
                // }catch(Exception $e){
                //     var_dump($e->getMessage());
                // }
                return $basic->rmsg('提交成功！','1','json');
            }else{
                return $basic->rmsg('提交失败！','0','json');
            }
        }
        $seo = Db::name('seo')->where('cate','关于我们')->find();
        $this->assign(['seo'=>$seo]);
        $this->assign(['nav'=>'about']);
        return $this->fetch();
    }

    public function zhuantiye(){
        $seo = Db::name('seo')->where('cate','标签')->find();
        $this->assign(['seo'=>$seo]);

        $dataseo = Db::name('cate')->where(['pid'=>92])->select();
        $dataseo = array_column($dataseo,'id');
        $pids =implode(",",$dataseo);
        $where3['cateid'] = ["cateid",'in',$pids];
        $piaodata = Db::name('article')->where($where3)->order(['orders'=>'asc','id'=>'desc'])->select();

        foreach($piaodata as $k=>$v){
            $tags = explode('，',$v['title']);
            $piaodata[$k]['tag']  = $tags;
        }

        $this->assign(['nav'=>'index','piaodata'=>$piaodata]);
        return $this->fetch();
    }
    public function zhuantiyedetail(){
        $seo = Db::name('seo')->where('cate','标签')->find();
        $id = $this->request->param('id');
        $this->assign(['seo'=>$seo]);

        $where2['cateid'] = ["cateid",'in',"41, 72, 73, 74,75,76,77"];
        $casedata = Db::name('article')->where($where2)->order('id','desc')->limit('6')->select();

        $sou = Db::name('article')->where('cateid',40)->order(['orders'=>'asc','id'=>'desc'])->limit('3')->select();

        $where['cateid'] = ["cateid",'in',"45, 47, 48,68"];
        $newsdata = Db::name('article')->where($where)->order(['orders'=>'asc','id'=>'desc'])->limit('20')->select();

        $detail = Db::name('article')->where('stitle',$id)->find();
        

        $this->assign([
            'nav'=>'index',
            'casedata'=>$casedata,
            'sou'=>$sou,
            'newsdata'=>$newsdata,
           'detail'=>$detail,
            ]);
        return $this->fetch();
    }

    public function network(){
        $seo = Db::name('seo')->where('cate','网络推广')->find();
       
        $this->assign(['seo'=>$seo]);
        $this->assign([
            'nav'=>'network',
           
            ]);
        return $this->fetch();
    }
    public function seoyouhua(){
        $seo = Db::name('seo')->where('cate','seo优化')->find();

        $where['cateid'] =68;
        // $id = 45;
        $data = Db::name('article')->where($where)->order(['orders'=>'asc','id'=>'desc'])->limit(6)->select();


        $ztdata = Db::name('seozt')->order(['orders'=>'asc','id'=>'desc'])->limit(24)->select();
        foreach($ztdata as $k=>$v){
            $zhi = explode('，',$v['zhi']);
            $ztdata[$k]['zhis']  = $zhi;
            $tui = explode('，',$v['tui']);
            $ztdata[$k]['tuis']  = $tui;
        }
    
        
        $dian = Db::name('seozt')->count();
     
        $this->assign(['seo'=>$seo]);
        $this->assign([
            'nav'=>'seo',
           'data'=>$data,
           'ztdata'=>$ztdata,
           'dian'=>$dian,
            ]);
        return $this->fetch();
    }

//seo优化+网站建设
    public function seojz(){
        $seo = Db::name('seo')->where('cate','seo优化')->find();
        $where['cateid'] =48;
        $data = Db::name('article')->where($where)->order(['orders'=>'asc','id'=>'desc'])->limit(6)->select();

        $detail = Db::name('article')->where('cateid','96')->find();

        $this->assign(['seo'=>$seo]);
        $this->assign([
            'nav'=>'seo',
           'data'=>$data,
           'detail'=>$detail
            ]);
        return $this->fetch();
    }
    //seo快速排名
    public function seopm(){
        $seo = Db::name('seo')->where('cate','快排')->find();
        if(!$seo){
            $seo = Db::name('seo')->where('cate','seo优化')->find();
        }
      
        $where['cateid'] =95;
        $data = Db::name('article')->where($where)->order(['orders'=>'asc','id'=>'desc'])->limit(6)->select();

        $pingtai = Db::name('pingtai')->select();

        $youhuadata = Db::name('youhua')->select();
        foreach($youhuadata as $k=>$v){
            $youhuadata[$k]['url'] =  substr($v['url'],0,6)."******".substr($v['url'],-5,5);
        }

        $this->assign(['seo'=>$seo]);
        $this->assign([
            'nav'=>'seo',
           'data'=>$data,
           'pingtai'=>$pingtai,
           'youhuadata'=>$youhuadata,
            ]);
        return $this->fetch(); 
    }
    public function seogjc(){



        if($this->request->isPost()){
            $info = Db::name('config')->where('id',1)->find();
            $basic = Container::get('basic');
            $table = [
                'username' => input('username'),
                'tel' => input('tel'),
                'content' => input('content'),
                'qq'=>input('qq'),
                'type'=>input('type'),
                'company' => input('company'),
                'addtime' => time(),
 		        'ip'=>getIP(),
            ];
            $res = Db::name('online')->insert($table);
            if($res){
                // try {
                //     $user['username'] = input('post.username');
                //     $user['title'] = '意见咨询';
                //     $name = implode('-', $user);
                //     $data['username'] = '名字：' . input('username') . '<br />';
                //     $data['tel'] = '电话：' . input('tel') . '<br />';
                //     $data['email'] = '邮箱：' . input('email') . '<br />';
                //     $data['content'] = '留言信息：' . input('content');
                //     $body = implode(' ', $data);
                //     //发送邮件 - 调用think_send_mail函数
                //     if ($info['is_open'] == 1) {
                //         think_send_mail($info['jieshou'], $info['smname'], $name, $body);
                //     }
                // }catch(Exception $e){
                //     var_dump($e->getMessage());
                // }
                return $basic->rmsg('提交成功！','1','json');
            }else{
                return $basic->rmsg('提交失败！','0','json');
            }
        }


        $seo = Db::name('seo')->where('cate','seo优化')->find();
        $where['cateid'] =47;
        $data = Db::name('article')->where($where)->order(['orders'=>'asc','id'=>'desc'])->limit(6)->select();

        $pingtai = Db::name('pingtai')->select();

        $youhuadata = Db::name('youhua')->limit(10)->select();
        foreach($youhuadata as $k=>$v){
            $youhuadata[$k]['url'] =  substr($v['url'],0,6)."******".substr($v['url'],-5,5);
        }

        $this->assign(['seo'=>$seo]);
        $this->assign([
            'nav'=>'seo',
           'data'=>$data,
           'pingtai'=>$pingtai,
           'youhuadata'=>$youhuadata,
            ]);
        return $this->fetch(); 

    }

    public function common(){
        $id = $this->request->param('id');

        $seo = Db::name('seo')->where('cate','标签')->find();
       
        $this->assign(['seo'=>$seo]);

        $where2['cateid'] = ["cateid",'in',"41, 72, 73, 74,75,76,77"];
        $casedata = Db::name('article')->where($where2)->order('id','desc')->limit('6')->select();

        $sou = Db::name('article')->where('cateid',94)->order(['orders'=>'asc','id'=>'desc'])->limit('3')->select();

        $where['cateid'] = ["cateid",'in',"45,47,48,68,95"];
        $where['seourl'] = '/'.$id;
        $newsdata = Db::name('article')->where($where)->order(['orders'=>'asc','id'=>'desc'])->limit('10')->select();

        $map['url'] ='/'.$id;
        $map['cateid']=['cateid','>',92];
        $detail = Db::name('article')->where($map)->find();
        
        if(!$detail){
           // header("Location: /404.html");count()
        }
       

        $this->assign([
            'nav'=>'index',
            'casedata'=>$casedata,
            'sou'=>$sou,
            'newsdata'=>$newsdata,
           'detail'=>$detail,
            ]);
        
        return $this->fetch();
    }



     //seo优化案例
   public function zhuantiyelist()
   {
     
  
       $pid = $this->request->param('pid');
       $title = $this->request->param('keys');
       if(isset($pid)){
           $pid = $this->request->param('pid');
           $list = Db::name('article')->where('cateid',$pid)->order(['orders'=>'asc','id'=>'desc'])->paginate(15, false, ['query' => $this->request->param()]);
       }else{
          if(isset($title)) $where['titie'] = ['title','like','%'.$title.'%'];
          // $where['cateid'] = ["cateid",'in',"71, 47"];
           $where['cateid'] = 94;
        
           $list = Db::name('article')->where($where)->order(['orders'=>'asc','id'=>'desc'])->paginate(5, false, ['query' => $this->request->param()]);
          
       }

    $seo = Db::name('seo')->where('cate','seo优化案例')->find();
    
    $this->assign(['seo'=>$seo]);

       $newsnav = Db::name('cate')->where('pid',70)->select();
       $this->assign(['newsnav'=>$newsnav,'list'=>$list,'pid'=>$pid]);
        $this->assign(['nav'=>'news']);
        $hot1 = Db::name('article')->where('ist',1)->where('cateid',94)->order(['orders'=>'asc','id'=>'desc'])->limit(6)->select();
        $hot2 = Db::name('article')->where('cateid',94)->order(['orders'=>'asc','id'=>'desc'])->limit(6)->select();
        $this->assign(['hot1'=>$hot1,'hot2'=>$hot2]);
       return $this->fetch();
   }
   //详情
   public function zhuantiyelist_detail()
   {
       $seo = Db::name('seo')->where('cate','seo优化案例')->find();
       $this->assign(['seo'=>$seo]);
       $id = $this->request->param('id');
       $newsnav = Db::name('cate')->where('pid',70)->select();
       $data = Db::name('article')->find($id);
       Db::name('article')->where('id',$id)->update(['click'=>$data['click']+1]);

       $detail = Db::name('article')->where('a.id',$id)->alias('a')->join('cate b','a.cateid = b.id')->find();
       //上一个
       $where['cateid'] = $detail['id'];
       $where['id']=['id','<',$id];
       $front = Db::name('article')->where($where)->order('id', 'desc')->limit('1')->find();;
       if (!$front){
           $front['title'] = '已经是最后一篇了';
       }

       $this->assign('front',$front);

       //下一个
       $map['cateid'] = $detail['id'];
       $map['id']=['id','>',$id];
       $after = Db::name('article')->where($map)->order('id', 'asc')->limit('1')->find();
       if (!$after){
           $after['title'] = '已经是最后一篇了';
       }

       $this->assign('after',$after);

       $tags = explode('，',$data['stitle']);
       $data['tag']  = $tags;


       $common = Db::name('article')->where(['cateid'=>$data['cateid']])->order('id','desc')->limit('5')->select();
       $alldata = Db::name('article')->where('cateid','in',[94])->order('id','desc')->limit('10')->select();

       $where2['cateid'] = ["cateid",'in',"41, 72, 73, 74,75,76,77"];
       $casedata = Db::name('article')->where($where2)->order('id','desc')->limit('3')->select();
       $this->assign(['newsnav'=>$newsnav,'data'=>$data,'detail'=>$detail,'common'=>$common,'alldata'=>$alldata,'casedata'=>$casedata]);
       $this->assign(['nav'=>'news']);
       return $this->fetch();
   } 


   public function verify()
    {
        $captcha = new Captcha();
        return $captcha->entry();    
    }
 

}