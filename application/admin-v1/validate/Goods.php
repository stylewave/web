<?php
namespace app\admin\validate;
use think\Validate;
use think\Container;

//产品类验证

class Goods extends Validate
{

    //共用验证器
    protected $rule =   [
//        '__token__'=>'token',
        'title'=>'require',
    ];


    //验证品牌名称是否重复
    protected function checkBrandTitle($value, $rule, $data=[]) {
        $count =  Container::get('goods')->checkBrandAttr($value, $data);
        return empty($count)?'所有分类下已经存在'.$data['title'].'，或者没有选择分类！':true;
    }

    //验证属性值类型getAttrType
    protected function checkType($value, $rule, $data=[]) {
        $types =  Container::get('goods')->getAttrType();
        return !in_array($value, $types)?'属性类型错误':true;
    }

    // 添加修改属性
    public function sceneAddAttr()
    {
        $this->append('cateids','checkBrandTitle')
            ->append('type','checkType');
    }

    // 添加品牌
    public function sceneAddBrand()
    {
        $this->append('cateids','checkBrandTitle');
    }



    protected $message  =   [
        'title.require' => '名称必须',
    ];



}
