<?php
namespace app\admin\model;
use think\Container;
use think\Model;

class Stats extends Model
{
    protected $pk = 'id';
    protected $table = 'stat';
    //列表
    public function getAll($arr)
    {
        dump($arr['w']);
        $count = Stats::where($arr['w'])->count();
        $list = Stats::where($arr['w'])->order(['id'=>'desc'])->paginate($arr['limit'], $count,['query'=>$arr['pagearr']]);
        if($list) {
            foreach($list as $key=>$value) {
                $list[$key]['addtime']  = date('Y-m-d H:i:s',$value['addtime']);
            }
        }
        return $list;
    }
}