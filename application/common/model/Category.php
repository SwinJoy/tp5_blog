<?php

namespace app\common\model;

use think\Model;

class Category extends Model
{
    protected $pk = 'cate_id';
    protected $table = 'blog_cate';

    public function store($data)
    {
        //执行验证
        //执行添加
        // 调用当前模型对应的store验证器类进行数据验证
        $result = $this->validate(true)->save($data);
        if(false === $result){
            // 验证失败 输出错误信息
            return ['valid'=>0,'msg'=>$this->getError()];
            //dump($this->getError());
        }else{
            return ['valid'=>1,'msg'=>'添加成功！'];
        }

    }
}
