<?php
namespace app\admin\model;
use think\Container;
use think\Model;

class Recruits extends Model
{
    protected $pk = 'id';
    protected $table = 'recruit';
    //岗位删除
    public function delRecruit($id) {
        if(!$info = Recruits::get($id)) return '删除的岗位不存在！';
        try{
            $user = Container::get('user')->init('admin');
            Recruits::startTrans();
            $res = Recruits::destroy($id);
            if(!$res) throw new \Exception('删除岗位失败！');
            $res = $user->setUserLog(1,'删除了岗位-'.$info['title']);
            if(!$res) throw new \Exception('写入用户权限日志失败！');
            Recruits::commit();
            return true;
        }catch (\Exception $e) {
            Recruits::rollback();
            return $e->getMessage();
        }
    }
    //职位申请删除
    public function delComment($id) {
        if(!$info = Recruits::get($id)) return '删除的职位申请不存在！';
        try{
            $user = Container::get('user')->init('admin');
            Recruits::startTrans();
            $res = Recruits::destroy($id);
            if(!$res) throw new \Exception('删除职位申请失败！');
            $res = $user->setUserLog(1,'删除了职位申请-'.$info['title']);
            if(!$res) throw new \Exception('写入用户权限日志失败！');
            Recruits::commit();
            return true;
        }catch (\Exception $e) {
            Recruits::rollback();
            return $e->getMessage();
        }
    }
    //列表
    public function getAll($arr)
    {
        $count = Recruits::where($arr['w'])->count();
        $list = Recruits::where($arr['w'])->order(['orders'=>'asc',$arr['order'][0]=>$arr['order'][1]])->paginate($arr['limit'], $count,['query'=>$arr['pagearr']]);
        if($list) {
            $baisc = Container::get('basic');
            foreach($list as $key=>$value) {
                $list[$key]['addtime']  = date('Y-m-d H:i:s',$value['addtime']);
            }
        }
        return $list;
    }
    //获取单个文章
    public function getInfo($id, $w=50, $h=50) {
        $info = Recruits::get($id);
        if(!empty($info)) {
            !empty($info['img']) && $info['thumb']  = Container::get('basic')->thumbImg($info['img'],$w,$h);
        }
        return $info;
    }
}