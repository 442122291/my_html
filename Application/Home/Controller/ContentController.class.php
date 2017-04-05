<?php
namespace Home\Controller;
use Think\Controller;
use \Home\Model\ContentModel;
use \Home\Model\CommentModel;
use Think\Page;
class ContentController extends Controller {
    /*
     根据用户点击的博文id查询对应的博文
     */
    public function content($id)
    {
        //新建实例
        $co = new ContentModel();
        //查询缓存
        if (!$result = S('result'.$id))
        {
            $result = $co->content($id);
            S('result'.$id, $result, 300);
        }
        $comment = new CommentModel();
        $counts = $comment->count();
        $page = new Page($counts,5);
        $page->setConfig('prev','上一页');
        $page->setConfig('next','下一页');
        $page->setConfig('theme', ' 共%TOTAL_PAGE%页<br/> %FIRST% %UP_PAGE% %LINK_PAGE% %DOWN_PAGE% %END%');
        $pages = $page->show();
        $lists = $comment->limit($page->firstRow.','.$page->listRows)->where(array('blog_id'=>$id))->select();
        $this->assign('page',$pages);
        $this->assign('lists',$lists);
        $this->assign('content',$result);
        $this->display();
    }

}