<?php

namespace app\index\controller;
use think\Controller;
use think\View;
class Index extends Controller{
    public function index(){
        $this->assign('title','index');
        return $this->fetch();
    }
    public function page1(){
        $this->assign('title','page1');
        return $this->fetch('page1');
    }
    public function page2(){
        $this->assign('title','page2');
        return $this->fetch('page2');
    }
}
