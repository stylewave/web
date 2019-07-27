<?php
namespace app\admin\model;
use think\Container;
use think\Model;
use think\Db;

class Good extends Model
{
    protected $pk = 'id';
    protected $table = 'goods';


    //列表 $arr['limit'],
    public function getAll($arr, $table, $catelist, $w=50, $h=50)
    {
        //组合OR查询条件
        if(!empty($arr['w'])) {
            foreach ($arr['w'] as $k=>$v) {
                if(in_array($v[1], ['find_in_set'])) {
                    $son = array_keys(Container::get('cate')->getSonCate($catelist,$v[2]));
                    !empty($son) ? array_push($son,$v[2]) : $son=[$v[2]];
                    unset($arr['w'][$k]);
                    $arr['w'][$k][0] = '';
                    foreach ($son as $cateid) {
                        $tmp = [];
                        $tmp[0] = 'exp';
                        $tmp[1] = ''.$v[1].'('.$cateid.',cateid)';
                        $arr['w'][$k][] = $tmp;
                    }
                    $arr['w'][$k][] ='or';
                }
            }
        }
        $count = Db::table($table)->where($arr['w'])->count();
        $list = Db::table($table)->where($arr['w'])->order(['orders'=>'asc',$arr['order'][0]=>$arr['order'][1]])->paginate($arr['limit'], $count,['query'=>$arr['pagearr']]);

        $lists = $list->items();
        if(!empty($lists)) {
            $baisc = Container::get('basic');
            foreach ($lists as $key=>$value) {
                $lists[$key]['addtime']  = date('Y-m-d H:i:s',$value['addtime']);
                if(!empty($value['img'])) {
                    $lists[$key]['thumb']  = $baisc->thumbImg($value['img'],$w,$h);
                } else {
                    $lists[$key]['thumb']  = '';
                }
                $cid = explode(',', $value['cateid']);
                $lists[$key]['catename']  = '';
                foreach($cid as $ccid) {
                    $lists[$key]['catename'] .= $catelist[$ccid]['title'].'，';
                }
                $lists[$key]['catename'] = mb_substr($lists[$key]['catename'],0,mb_strlen($lists[$key]['catename'],'utf-8')-1,'utf-8');
                if($table == 'goods_attr') {
                    $lists[$key]['typename'] = $value['type'] == 0 ? '单选' : ($value['type'] == 1 ? '多选' : '自己填写');
                    $values = Container::get('goods')->getGoodsCache('attrvalue', $value['id']);
                    $lists[$key]['value'] = !empty($values) ? implode(',', array_column($values,'value')) : '';
                }
            }
        }
        return ['page'=>$list->render(), 'data'=>$lists];
    }


    //删除
    public function delArticle($id) {
        if(!$info = Articles::get($id)) return '删除的文章不存在！';
        try{
            $user = Container::get('user')->init('admin');
            Articles::startTrans();
            $res = Articles::destroy($id);
            if(!$res) throw new \Exception('删除文章失败！');
            $res = $user->setUserLog(1,'删除了文章'.$info['title']);
            if(!$res) throw new \Exception('写入用户权限日志失败！');
            Articles::commit();
            return true;
        }catch (\Exception $e) {
            Articles::rollback();
            return $e->getMessage();
        }
    }








}