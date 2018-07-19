<?php

namespace app\admin\controller;

use app\common\model\Admin;
use think\Controller;

class Entry extends Common
{
    //首页
    public function index()
    {
        //加载模板文件
        return $this->fetch();

    }
    public function pass()
    {
        //如果有post过来的数据，就实例化Admin控制器，并调用pass方法把post过来的数据当参数传过去
        if (request()->isPost()){
            $res = (new Admin())->pass(input('post.'));
            if ($res['valid']){
                //清除session中的登录信息
                session(null);
                //执行成功
                $this->success($res['msg'],'admin/entry/index');exit;
            }else{
                $this->error($res['msg']);exit;
            }
        }
        return $this->fetch();
    }
}
