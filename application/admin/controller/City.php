<?php
namespace app\admin\controller;
use think\Controller;
use think\Container;
use think\Db;
use app\admin\model\Citys;
class City extends controller
{
    //seo
    public function citylist()
    {
        $model = new Citys;
        $list = $model->getAll($this->getSelectW());
        $this->assign([
            'list'    => $list,
        ]);
        if($this->request->isPjax()) {
            Container::get('config')->set('default_ajax_return', 'html');
            return $this->fetch('seolist_pjax');
        } else {
            return $this->fetch();
        }
    }
    //添加seo
    public function add() {
        $id = $this->request->param('id',0,'intval');
        $info = Db::name('city')->where('id',$id)->find();
      
        
        $model = new Citys;
        if($this->request->isPost()) {
            $data = $this->request->only(['id','title','keywords','description','cate']);
            $return = $model->setSeo($data,$info, $this->request->file('img'));
            $return['code'] == 1 ? $this->success('操作成功！','city/citylist') : $this->error($return['msg']);
       
        }
        $this->assign(['info'=>$info]);
        return $this->fetch();
    }
    //删除
    public function del() {
        $id = $this->request->get('id',0,'intval');

        $ardata = Db::name('article')->where('cityid',$id)->find();
        if($ardata){
            $this->error('已经有关联文章，请先修改对应的文章');
        }
        $rbacmodel = new Citys;
        $r = $rbacmodel->delSeo($id);
        if(true !== $r) $this->error($r);
        $this->redirect('city/citylist');
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
}
