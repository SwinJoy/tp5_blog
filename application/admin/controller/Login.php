<?php

namespace app\admin\controller;

use think\Controller;

class Login extends Controller
{
    //加载登录页面
    public function login(){
        return $this->fetch('index');
    }
}
