<?php
namespace app\admin\controller;
use think\Controller;
use think\Container;
use think\Db;
use app\admin\model\Stats;
class Stat extends controller
{
    //系统设置
    public function statlist()
    {
        $model = new Stats;
        $list = $model->getAll($this->getSelectW());
        $this->assign([
            'list'    => $list,
        ]);
        if($this->request->isPjax()) {
            Container::get('config')->set('default_ajax_return', 'html');
            return $this->fetch('statlist_pjax');
        } else {
            return $this->fetch();
        }
        return $this->fetch();
    }
    //组合查询条件
    private function getSelectW() {
        $data = [
            'addtime' => [
                'keys' => ['starttime', 'endtime'],
                'default' => 'all',
                'exp' => 'between',
                'fun' => 'trim',
            ],
        ];
        return Container::get('basic')->getSelectWhere($this->request->param(), $data);
    }

    public function adminList(){
        $user = Db::name('admin_user')->select();
        $list = [];
        $start_time = strtotime(date('Y-m-d'));
        $st_time = strtotime(date('Y-m-d',strtotime('-1 day')));
        
        $to_en = time();
        foreach($user as $k=>$v){
          $where['addtime'] = ['addtime','between', [$start_time, $to_en]]; 
          $where['admin_id'] = $v['id'];
          $where2['addtime'] = ['addtime','between', [$st_time, $start_time]]; 
          $where2['admin_id'] = $v['id'];
    
          $user[$k]['today'] = Db::name('article')->where($where)->count();
          $user[$k]['yes'] = Db::name('article')->where($where2)->count();
        
        }
        // dump($user);
        $this->assign([
            'list'    => $user,
        ]);
        return $this->fetch();
    }
}
