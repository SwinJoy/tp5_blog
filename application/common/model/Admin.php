<?php

namespace app\common\model;

use houdunwang\crypt\Crypt;
use think\Loader;
use think\Model;

class Admin extends Model
{
    protected $pk = 'admin_id';//主键
    //设置当前模型对应的完整数据表名称
    protected $table = "blog_admin";
    /***
     * 登录
     */
    public function login($data)
    {
        //1.执行登录验证
        $validate = Loader::validate('Admin');

        //如果验证不通过
        if(!$validate->check($data)){
            return ['valid'=>0,'msg'=>$validate->getError()];
            //dump($validate->getError());
        }
        //2.对比用户名和密码是否正确
        $userInfo = $this->where('admin_username',$data['admin_username'])->where('admin_password',Crypt::encrypt($data['admin_password']))->find();
        //halt($userInfo);
        if (!$userInfo){
            //说明在数据库中未匹配到相应的数据
            return ['valid'=>0,'msg'=>'用户名或密码不正确！'];
        }
        //3.将用户信息存入到session中
        session("admin.admin_id",$userInfo['admin_id']);
        session("admin.admin_username",$userInfo['admin_username']);
        return ['valid'=>1,'msg'=>'登录成功！'];
    }
}
