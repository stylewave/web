<?php
namespace app\admin\controller;
use think\Controller;
use think\Container;
use think\Db;
use app\admin\model\Youhuas;
use app\admin\model\Zts;
class Youhua extends controller
{
    //列表
    public function recruitlist()
    {
        $model = new Youhuas;
        $list = $model->getAll($this->getSelectW());
        $this->assign([
            'list'    => $list,
        ]);
        if($this->request->isPjax()) {
            Container::get('config')->set('default_ajax_return', 'html');
            return $this->fetch('recruitlist_pjax');
        } else {
            return $this->fetch();
        }
    }
    //招聘岗位操作，目前排序和推荐
    public function ajaxRecruit() {
        $id = $this->request->param('id',0,'intval');
        $do = $this->request->param('do','','trim');
        if(!in_array($do, ['tj','qxtj','order'])) exit('error');
        if($this->request->isAjax()) {
            $basic = Container::get('basic');
            try{
                $cate = Container::get('cate');
                $usermodel = new Recruits;
                $info = $usermodel->getInfo($id);
                if(empty($info)) throw new \Exception('操作的内容不存在！');
                $r = [];
                switch ($do) {
                    case 'tj':
                        $r = $cate->ajaxCate($info,'ist', 1, 'recruit');
                        break;
                    case 'qxtj':
                        $r = $cate->ajaxCate($info,'ist', 0, 'recruit');
                        break;
                    case 'order':
                        $order = $this->request->param('order',0,'intval');
                        $r = $cate->ajaxCate($info,'orders', $order, 'recruit');
                        break;
                }
                if($r['code'] != 1) throw new \Exception($r['msg']);
                return $basic->rmsg('ok',1,'json');
            }catch (\Exception $e) {
                return $basic->rmsg($e->getMessage(),0,'json');
            }
        } else {
            exit('erros');
        }
    }
    //添加
    public function recruit() {
        $id = $this->request->param('id',0,'intval');
        $info = Db::name('youhua')->where('id',$id)->find();
        if($this->request->isPost()) {
            if($info){
                $table = input('post.');
                $table['addtime'] = time();
                $result = Db::name('youhua')->where('id',$id)->update($table);
                $result ? $this->success('操作成功','youhua/recruitlist') : $this->error('操作失败');
            }else{
                $table = input('post.');
                $table['addtime'] = time();
                $result = Db::name('youhua')->insert($table);
                $result ? $this->success('操作成功','youhua/recruitlist') : $this->error('操作失败');
            }
        }
       
        $this->assign('info',$info);
        return $this->fetch();
    }
    //删除招聘岗位
    public function del() {
        $id = $this->request->param('id',0,'intval');
        $r = Db::table('youhua')->where('id',$id)->delete();
        if($r){
            $this->redirect('youhua/recruitlist');
        }
       
    }
    //组合查询条件
    private function getSelectW() {
        $data = [
            'cateid' => [
                'keys' => 'cateid',
                'default' => 0,
                'exp' => '=',
                'fun' => 'intval',
            ],
        ];
        return Container::get('basic')->getSelectWhere($this->request->param(), $data);
    }

    public function pingtai(){
        $list = Db::name('pingtai')->select();
        $catelist = array(
            '1'=>'后台管理',
            '2'=>'用户管理',
            '3'=>'添加关键词',
            '4'=>'订单管理',
            '5'=>'消费管理',
        );
        $this->assign([
            'list'    => $list,
            'catelist'=>$catelist
        ]);
        return $this->fetch();
    }

    public function addpt(){
     
        $catelist = array(
            '1'=>'后台管理',
            '2'=>'用户管理',
            '3'=>'添加关键词', 
            '4'=>'订单管理',
            '5'=>'消费管理',
        );
        $this->assign([
           
            'catelist'=>$catelist
        ]);
        if($this->request->isPost()) {
            $table = input('post.');
            $img = Container::get('upload')->uploads($this->request->file('img'),'banner','image',false,'');
            if($img['error'] == 0) $table['img'] = $img['url'];//上传图片
          
            $table['addtime'] = date('Y-m-d H:i:s');
            $result = Db::name('pingtai')->insert($table);
            $result ? $this->success('操作成功','Youhua/pingtai') : $this->error('操作失败');
        }


        return $this->fetch();
    }

    public function editpt(){

        $id = $this->request->param('id',0,'intval');
      
        $info = Db::name('pingtai')->where('id',$id)->find();
    
        $catelist = array(
            '1'=>'后台管理',
            '2'=>'用户管理',
            '3'=>'添加关键词', 
            '4'=>'订单管理',
            '5'=>'消费管理',
        );

        if($this->request->isPost()) {
           
            if($info){
                $table = input('post.');
                $img = Container::get('upload')->uploads($this->request->file('img'),'banner','image',false,'');
                if($img['error'] == 0) $table['img'] = $img['url'];//上传图片
                $thumb = Container::get('upload')->uploads($this->request->file('thumb'),'banner','image',false,'');
                if($thumb['error'] == 0) $table['thumb'] = $thumb['url'];//上传图片
                // $table['addtime'] = time();
                $result = Db::name('pingtai')->where('id',$id)->update($table);
                $result ? $this->success('操作成功','Youhua/pingtai') : $this->error('操作失败');
            }
        }
        $this->assign([
             'info'=>$info,
            'catelist'=>$catelist
        ]);
        return $this->fetch();
    }
    public function ptdel(){
        $id = $this->request->param('id',0,'intval');
       $r = Db::table('pingtai')->where('id',$id)->delete();
       if($r){
        $this->redirect('youhua/pingtai');
       }
    }

 

    //列表
    public function zt()
    {
        $model = new Zts;
        $list = $model->getAll($this->getSelectW());
        $this->assign([
            'list'    => $list,
        ]);
        if($this->request->isPjax()) {
            Container::get('config')->set('default_ajax_return', 'html');
            return $this->fetch('zt_pjax');
        } else {
            return $this->fetch();
        }
    }
    //招聘岗位操作，目前排序和推荐
    public function ajaxZt() {
        $id = $this->request->param('id',0,'intval');
        $do = $this->request->param('do','','trim');
        if(!in_array($do, ['tj','qxtj','order'])) exit('error');
        if($this->request->isAjax()) {
            $basic = Container::get('basic');
            try{
                $cate = Container::get('cate');
                $usermodel = new Zts;
                $info = $usermodel->getInfo($id);
                if(empty($info)) throw new \Exception('操作的内容不存在！');
                $r = [];
                switch ($do) {
                    case 'tj':
                        $r = $cate->ajaxCate($info,'ist', 1, 'seozt');
                        break;
                    case 'qxtj':
                        $r = $cate->ajaxCate($info,'ist', 0, 'seozt');
                        break;
                    case 'order':
                        $order = $this->request->param('order',0,'intval');
                        $r = $cate->ajaxCate($info,'orders', $order, 'seozt');
                        break;
                }
                if($r['code'] != 1) throw new \Exception($r['msg']);
                return $basic->rmsg('ok',1,'json');
            }catch (\Exception $e) {
                return $basic->rmsg($e->getMessage(),0,'json');
            }
        } else {
            exit('erros');
        }
    }
    //添加
    public function ztadd() {
        $id = $this->request->param('id',0,'intval');
        $info = Db::name('seozt')->where('id',$id)->find();
        if($this->request->isPost()) {
            if($info){
                $table = input('post.');
                $table['addtime'] = time();
                $result = Db::name('seozt')->where('id',$id)->update($table);
                $result ? $this->success('操作成功','youhua/zt') : $this->error('操作失败');
            }else{
                $table = input('post.');
                $table['addtime'] = time();
                $result = Db::name('seozt')->insert($table);
                $result ? $this->success('操作成功','youhua/zt') : $this->error('操作失败');
            }
        }
       
        $this->assign('info',$info);
        return $this->fetch();
    }
    //删除招聘岗位
    public function ztdel() {
        $id = $this->request->param('id',0,'intval');
        $r = Db::table('seozt')->where('id',$id)->delete();
        if($r){
            $this->redirect('youhua/zt');
        }
       
    }
    
}
