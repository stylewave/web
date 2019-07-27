<?php
namespace app\admin\model;
use think\Container;
use think\Model;
use think\Db;

class Citys extends Model
{
    protected $pk = 'id';
    protected $table = 'city';
    //删除
    public function delSeo($id) {
        if(!$info = Citys::get($id)) return '删除的城市不存在！';
        try{
            $user = Container::get('user')->init('admin');
            Citys::startTrans();
            $res = Citys::destroy($id);
            if(!$res) throw new \Exception('删除城市失败！');
            $res = $user->setUserLog(1,'删除了城市-'.$info['title']);
            if(!$res) throw new \Exception('写入用户权限日志失败！');
            Citys::commit();
            return true;
        }catch (\Exception $e) {
            Citys::rollback();
            return $e->getMessage();
        }
    }
    //列表
    public function getAll($arr)
    {
        $count = Citys::where($arr['w'])->count();
        $list = Citys::where($arr['w'])->order('id','asc')->paginate($arr['limit'], $count,['query'=>$arr['pagearr']]);
        if($list) {
            foreach($list as $key=>$value) {
                $list[$key]['addtime']  = date('Y-m-d H:i:s',$value['addtime']);
            }
        }
        return $list;
    }
    //获取单个文章
    public function getInfo($id) {
        $info = Articles::get($id);
        return $info;
    }
    //添加修改文章
    public function setSeo($data, $info, $file) {
        $basic = Container::get('basic');
        if($info) {
            $data['id'] = (int)$info['id'];
            $str = '更新';
        } else {
            $data['addtime'] = time();
            $str = '添加';
        }
        try{
            Db::startTrans();
            $res = $info ? Db::name($this->table)->update($data) :Db::name($this->table)->insert($data);
            if($res === false) throw new \Exception('数据库操作失败！');
            $res = Container::get('user')->init('admin')->setUserLog(1,$str.'了seo'.$data['title']);
            if(!$res) throw new \Exception('写入用户操作日志失败！');
            Db::commit();
            return $basic->rmsg('ok',1);
        }catch (\Exception $e) {
            Db::rollback();
            return $basic->rmsg($e->getMessage());
        }
    }
}