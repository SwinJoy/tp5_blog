<?php

namespace app\admin\controller;

use think\Controller;

class Entry extends Controller
{
    //首页
    public function index()
    {
        //加载模板文件
        return $this->fetch();
    }
    public function base()
    {
        //加载模板文件
        return $this->fetch();
    }
}
