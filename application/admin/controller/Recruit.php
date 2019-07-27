<?php
namespace app\admin\controller;
use think\Controller;
use think\Container;
use think\Db;
use app\admin\model\Recruits;
class Recruit extends controller
{
    //招聘岗位列表
    public function recruitlist()
    {
        $model = new Recruits;
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
    //添加招聘岗位
    public function recruit() {
        $id = $this->request->param('id',0,'intval');
        $info = Db::name('recruit')->where('id',$id)->find();
        if($this->request->isPost()) {
            if($info){
                $table = input('post.');
                $table['addtime'] = time();
                $result = Db::name('recruit')->where('id',$id)->update($table);
                $result ? $this->success('操作成功','recruit/recruitlist') : $this->error('操作失败');
            }else{
                $table = input('post.');
                $table['addtime'] = time();
                $result = Db::name('recruit')->insert($table);
                $result ? $this->success('操作成功','recruit/recruitlist') : $this->error('操作失败');
            }
        }
        $this->assign('info',$info);
        return $this->fetch();
    }
    //删除招聘岗位
    public function del() {
        $id = $this->request->get('id',0,'intval');
        $rbacmodel = new Recruits;
        $r = $rbacmodel->delRecruit($id);
        if(true !== $r) $this->error($r);
        $this->redirect('recruit/recruitlist');
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
    //岗位申请列表
    public function commentlist()
    {
        $count = Db::name('comment')->count();
        $list = Db::name('comment')->order('addtime desc')->paginate(15);
        $this->assign([
            'list' => $list,
        ]);
        if($this->request->isPjax()) {
            Container::get('config')->set('default_ajax_return', 'html');
            return $this->fetch('commentlist_pjax');
        } else {
            return $this->fetch();
        }
    }
    //申请详细
    public function comment() {
        $id = $this->request->param('id',0,'intval');
        $info = Db::name('comment')->where('id',$id)->find();
        $this->assign('info',$info);
        return $this->fetch();
    }
    //删除申请
    public function delete() {
        $id = $this->request->get('id',0,'intval');
        $rbacmodel = new Recruits;
        $r = $rbacmodel->delComment($id);
        if(true !== $r) $this->error($r);
        $this->redirect('recruit/commentlist');
    }
}
