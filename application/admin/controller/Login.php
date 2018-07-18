<?php

namespace app\admin\controller;

use app\common\model\Admin;
use houdunwang\crypt\Crypt;
use think\Controller;

class Login extends Controller
{

    public function login(){
        //echo Crypt::encrypt("admin888");
        //echo Crypt::decrypt("h3vPU8JGuF3VS/uxIpjRSw==");
        //加载登录页面
        //测试连接数据库
        //$data = db('admin')->find(1);
        //dump($data);
        //处理登录请求数据
        if(request()->isPost()){

            //halt($_POST);
            $res = (new Admin())->login(input("post."));
            if ($res['valid']){
                //说明登录成功
                $this->success($res['msg'],'admin/entry/index');exit;
            }else{
                //说明登录失败
                $this->error($res['msg']);exit;
            }
        }
        return $this->fetch("index");
    }
}
