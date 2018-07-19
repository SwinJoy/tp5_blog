<?php

namespace app\admin\controller;

use think\Controller;

/**
 * 栏目管理
 * Class Category
 * @package app\admin\controller
 */
class Category extends Controller
{
    //首页
    public function index()
    {
        return $this->fetch();
    }

    //添加栏目
    public function store()
    {
        return $this->fetch();
    }
}
