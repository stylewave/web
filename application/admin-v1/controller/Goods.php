<?php
namespace app\admin\controller;
use think\Controller;
use app\admin\model\Good;
use think\Container;
use think\facade\Url;

class Goods extends controller
{

    //添加
    public function addGoods() {

        $id = $this->request->param('id',0,'intval');
        $article = Container::get('goods');
        $info = $article->getInfo($id);
        $cate = Container::get('cate');
        $cate->getCateCache('cate',1,false,'tree');
        $catelist  = $cate->getCateCache('cate',$article->getTid('tid'),false,'tree');//产品分类
        $unitlist  = $cate->getCateCache('cate',$article->getTid('uid'),false,'tree');//产品单位
        $brandlist = [];//产品品牌
        $arrlist   = [];//产品属性

        if($this->request->isPost()) {
            //kind编辑器上传
            if(isset($_GET['dir']) && !empty($_GET['dir'])) {
                return Container::get('upload')->uploads($this->request->file('imgFile'),false,false,$_GET['dir']);
            }
//            print_r($this->request->param(true));exit;
            $data = $this->request->only(['title','ms','id','stitle','orders'=>0,'cateid','ist','ms','__token__']);
            $cj = empty($info) ? 'add' : ($info['title'] != $data['title']) ? 'add' : '';//验证器场景
            $r = $this->validate($data,'app\admin\validate\Article.'.$cj);
            if(true !== $r) $this->error($r);
            $return = $article->setArticle($data,$info, $this->request->file('img'));
            $return['code'] == 1 ? $this->success('文章操作成功！') : $this->error($return['msg']);
        }
        $this->assign([
            'catelist' => $catelist,
            'brandlist' => $brandlist,
            'unitlist' => $unitlist,
            'arrlist' => $arrlist,
            'info'=>$info
            ]);
        return $this->fetch();
    }


    //添加品牌
    public function addAttr() {
        $id = $this->request->param('id',0,'intval');
        $cateid = $this->request->param('cateid',0,'intval');
        $article = Container::get('goods');
        $info = $article->getInfoAb($id, $cateid,'attr');
        $cate = Container::get('cate');
        $catelist  = $cate->getCateCache('cate',$article->getTid('tid'),false,'tree');//产品分类

        if($this->request->isPost()) {
            $data = $this->request->only(['title','id','orders','cateids','ist','type','attrvalue','attrorders','__token__']);
            $cj = 'addattr';//验证器场景
            $r = $this->validate($data,'app\admin\validate\Goods.'.$cj);
            if(true !== $r) $this->error($r);
            $return = $article->setAttr($data,$info, $this->request->file('img'));
            if($return['code'] == 1) {
                if(!empty($info)) {
                    $this->success('操作成功！', Url::build('admin/Goods/addAttr',['id'=>$id,'cateid'=>$return['msg']]));
                } else {
                    $this->success('操作成功！');
                }
            } else {
                $this->error($return['msg']);
            }
        }
        if(!empty($info)) {
            //读取图片
            $info['thumb'] = Container::get('basic')->thumbImg($info['img'],50,50);
            //读取分类
            $cateids = explode(',',$info['cateid']);
            $info['one'] = array_shift($cateids);
            $info['two'] = empty($cateids) ? "" :implode(',',$cateids);
            //读取属性
            $atrrs = $article->getGoodsCache('attrvalue', $info['id']);
            $info['attrone'] = array_shift($atrrs);
            $info['attrtwo'] = empty($atrrs) ? "" :json_encode($atrrs,JSON_UNESCAPED_UNICODE);
        }

        $this->assign([
            'catelist' => $catelist,
            'info'=>$info
        ]);
        return $this->fetch();
    }


    //属性列表
    public function attrList() {
        $goods = Container::get('goods');
        $goodsmodel = new Good;
        $catelist  = Container::get('cate')->getCateCache('cate',$goods->getTid('tid'),false,'tree');//产品分类
        $list = $goodsmodel->getAll($this->getSelectW(), 'goods_attr', $catelist);
        $this->assign([
            'list'     => $list,
            'catelist' => $catelist,
        ]);
        if($this->request->isPjax()) {
            Container::get('config')->set('default_ajax_return', 'html');
            return $this->fetch('attrList_pjax');
        } else {
            return $this->fetch();
        }
    }

    //品牌列表
    public function brandList() {
        $goods = Container::get('goods');
        $goodsmodel = new Good;
        $catelist  = Container::get('cate')->getCateCache('cate',$goods->getTid('tid'),false,'tree');//产品分类
        $list = $goodsmodel->getAll($this->getSelectW(), 'goods_brand', $catelist);
        $this->assign([
            'list'     => $list,
            'catelist' => $catelist,
        ]);
        if($this->request->isPjax()) {
            Container::get('config')->set('default_ajax_return', 'html');
            return $this->fetch('brandList_pjax');
        } else {
            return $this->fetch();
        }
    }

    //排序和推荐 attr
    public function ajaxAttr() {
        $id = $this->request->param('id',0,'intval');
        $do = $this->request->param('do','','trim');
        $cateid = $this->request->param('cateid',0,'intval');
        if(!in_array($do, ['tj','qxtj','order'])) exit('error');
        if($this->request->isAjax()) {
            $basic = Container::get('basic');
            try{
                $cate = Container::get('cate');
                $article = Container::get('goods');
                $info = $article->getInfoAb($id, $cateid,'attr');
                if(empty($info)) throw new \Exception('操作的属性不存在！');
                $r= [];
                switch ($do) {
                    case 'tj':
                        $r = $cate->ajaxCate($info,'ist', 1, 'goods_attr');
                        break;
                    case 'qxtj':
                        $r = $cate->ajaxCate($info,'ist', 0, 'goods_attr');
                        break;
                    case 'order':
                        $order = $this->request->param('order',0,'intval');
                        $r = $cate->ajaxCate($info,'orders', $order, 'goods_attr');
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


    //排序和推荐 brand
    public function ajaxBrand() {
        $id = $this->request->param('id',0,'intval');
        $do = $this->request->param('do','','trim');
        $cateid = $this->request->param('cateid',0,'intval');
        if(!in_array($do, ['tj','qxtj','order'])) exit('error');
        if($this->request->isAjax()) {
            $basic = Container::get('basic');
            try{
                $cate = Container::get('cate');
                $article = Container::get('goods');
                $info = $article->getInfoAb($id, $cateid);
                if(empty($info)) throw new \Exception('操作的品牌不存在！');
                $r= [];
                switch ($do) {
                    case 'tj':
                        $r = $cate->ajaxCate($info,'ist', 1, 'goods_brand');
                        break;
                    case 'qxtj':
                        $r = $cate->ajaxCate($info,'ist', 0, 'goods_brand');
                        break;
                    case 'order':
                        $order = $this->request->param('order',0,'intval');
                        $r = $cate->ajaxCate($info,'orders', $order, 'goods_brand');
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


    //删除 产品类别下分类要删除，要查询是否有品牌，产品，属性，下级分类，目前只有产品和下级分类
    //图片类别下面分类删除要判断是否有图片和下级分类
    //文章类别下面分类删除要判断是否有文章和下级分类
    public function delBrand() {
        $id = $this->request->get('id',0,'intval');
        $cateid = $this->request->get('cateid',0,'intval');
        $cate = Container::get('goods');
        $r = $cate->del($id, $cateid, 'goods', 'brand','商品');
        if(true !== $r) $this->error($r);
        $this->success('删除成功！');
    }

    //删除属性
    public function delAttr() {
        $id = $this->request->get('id',0,'intval');
        $cateid = $this->request->get('cateid',0,'intval');
        $cate = Container::get('goods');
        $r = $cate->del($id, $cateid, 'goods_attr_value', 'aid','商品', 'attr');
        if(true !== $r) $this->error($r);
        $this->success('删除成功！');
    }


    //添加品牌
    public function addBrand() {
        $id = $this->request->param('id',0,'intval');
        $cateid = $this->request->param('cateid',0,'intval');
        $article = Container::get('goods');
        $info = $article->getInfoAb($id, $cateid);
        $cate = Container::get('cate');
        $catelist  = $cate->getCateCache('cate',$article->getTid('tid'),false,'tree');//产品分类

        if($this->request->isPost()) {
            $data = $this->request->only(['title','id','orders','cateids','ist','__token__']);
            $cj = 'addbrand';//验证器场景
            $r = $this->validate($data,'app\admin\validate\Goods.'.$cj);
            if(true !== $r) $this->error($r);
            $return = $article->setBrand($data,$info, $this->request->file('img'));
            if($return['code'] == 1) {
                if(!empty($info)) {
                    $this->success('操作成功！', Url::build('admin/Goods/addBrand',['id'=>$id,'cateid'=>$return['msg']]));
                } else {
                    $this->success('操作成功！');
                }
            } else {
                $this->error($return['msg']);
            }
        }
        if(!empty($info)) {
            $info['thumb'] = Container::get('basic')->thumbImg($info['img'],50,50);
            $cateids = explode(',',$info['cateid']);
            $info['one'] = array_shift($cateids);
            $info['two'] = empty($cateids) ? "" :implode(',',$cateids);
        }

        $this->assign([
            'catelist' => $catelist,
            'info'=>$info
        ]);
        return $this->fetch();
    }


    //列表
    public function goodsList()
    {
        $usermodel = Container::get('goods');
        $list = $usermodel->getGoodsList($this->getSelectW());
        $catelist = Container::get('cate')->getCateCache('cate',Container::get('goods')->getTid('tid'),false,'tree');
        $this->assign([
            'list'     => $list,
            'catelist' => $catelist,
        ]);
        if($this->request->isPjax()) {
            Container::get('config')->set('default_ajax_return', 'html');
            return $this->fetch('aList_pjax');
        } else {
            return $this->fetch();
        }
    }



    //删除
    public function del() {
        $id = $this->request->get('id',0,'intval');
        $rbacmodel = new Articles;
        $r = $rbacmodel->delArticle($id);
        if(true !== $r) $this->error($r);
        $this->success('文章删除成功！');
    }




    //组合查询条件
    private function getSelectW() {
        $data = [
            'cateid' => [
                'keys' => 'cateid',
                'default' => 0,
                'exp' => 'find_in_set',
                'fun' => 'intval',
            ],
        ];
        return Container::get('basic')->getSelectWhere($this->request->param(), $data);
    }






}
