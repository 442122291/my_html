<?php
namespace Home\Controller;
use Home\Model\ContentModel;
use Think\Controller;
class IndexController extends Controller {
    /*
     * 直接跳转到博客首页
     */
    public function index(){
        $this->redirect('Blog/blog');
    }
}