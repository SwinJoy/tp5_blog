<?php

namespace app\admin\controller;

use think\Controller;

class Login extends Controller
{

    public function login(){
        //加载登录页面
        //测试连接数据库
        //$data = db('admin')->find(1);
        //dump($data);
        return $this->fetch('index');
    }
}
