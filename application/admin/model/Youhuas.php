<?php
namespace app\admin\model;
use think\Container;
use think\Model;

class Youhuas extends Model
{
    protected $pk = 'id';
    protected $table = 'youhua';
    //删除
    public function delRecruit($id) {
        if(!$info = Youhuas::get($id)) return '删除的不存在！';
        try{
            $user = Container::get('user')->init('admin');
            Youhuas::startTrans();
            $res = Youhuas::destroy($id);
            if(!$res) throw new \Exception('删除失败！');
            $res = $user->setUserLog(1,'删除了-'.$info['title']);
            if(!$res) throw new \Exception('写入用户权限日志失败！');
            Youhuas::commit();
            return true;
        }catch (\Exception $e) {
            Youhuas::rollback();
            return $e->getMessage();
        }
    }
   
    //列表
    public function getAll($arr)
    {
        $count = Youhuas::where($arr['w'])->count();
        $list = Youhuas::where($arr['w'])->order(['orders'=>'asc',$arr['order'][0]=>$arr['order'][1]])->paginate($arr['limit'], $count,['query'=>$arr['pagearr']]);
        if($list) {
            $baisc = Container::get('basic');
            foreach($list as $key=>$value) {
                $list[$key]['addtime']  = date('Y-m-d H:i:s',$value['addtime']);
            }
        }
        return $list;
    }
    //获取单个
    public function getInfo($id, $w=50, $h=50) {
        $info = Youhuas::get($id);
        if(!empty($info)) {
            !empty($info['img']) && $info['thumb']  = Container::get('basic')->thumbImg($info['img'],$w,$h);
        }
        return $info;
    }
}