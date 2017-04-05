<?php
namespace Home\Controller;
use Think\Controller;
use Home\Model\ContentModel;
use Think\Page;
class BlogController extends Controller {



    /*
     * 显示博客主页
     */
    public function blog($p = 1){
        // 获取博文总数量

        //普通用户
        if($_SESSION['level']==0)
        {
            //查询缓存
            if (!$pages = S('pages'.$p))
            {
                $content = new ContentModel();
                $counts = $content->count();
                $page = $this->getpage($counts);
                $pages = $page->show();
                S('pages'.$p, $pages, 300);
            }
            if (!$lists = S('lists'.$p))
            {
                $content = new ContentModel();
                $lists = $content->limit($page->firstRow.','.$page->listRows)->order('time desc')->select();
                S('lists'.$p, $lists, 300);
            }
        }
        //管理员不使用缓存
        else
        {
            $content = new ContentModel();
            $counts = $content->count();
            $page = $this->getpage($counts);
            $pages = $page->show();
            $lists = $content->limit($page->firstRow.','.$page->listRows)->order('time desc')->select();
        }
        //查询缓存
        $this->assign('page',$pages);
        $this->assign('lists',$lists);
        $this->display();
    }

    public function getpage($counts)
    {
        $page = new Page($counts,5);
        $page->setConfig('first','首页');
        $page->setConfig('prev','上一页');
        $page->setConfig('next','下一页');
        $page->setConfig('last','末页');
        $page->setConfig('theme', ' 共 %TOTAL_ROW% 条数据 共%TOTAL_PAGE%页<br/> %FIRST% %UP_PAGE% %LINK_PAGE% %DOWN_PAGE% %END%');
        //分页
        return $page;
    }

    /*
     * 显示发布博文页
     */
    public function write_blog(){
        $this->display();
    }
    /*
     * 存储新增博文逻辑
     */
    public function add_blog()
    {
        $title = I('title');
        $content = I('content');
        if(empty($title) or empty($content))
        {
            echo "<script>alert('标题或内容为空！')</script>";
            $this->redirect('Blog/blog','',1,'页面跳转中....');
        }
        else
        {
            $time = date('Y-m-d H:i:s',time());
            $data['title'] = $title;
            $data['writer'] = $_SESSION['user'];
            $data['content'] = $content;
            $data['description'] = mb_substr($data['content'],0,130,'utf-8').'...';
            $data['time'] = $time;
            //MD5加密技术，使用title和time生成唯一id
            $data['id'] = md5($title.$time);
            $content = new ContentModel();
            $content->save_blog($data);
            //清空缓存以便显示增加博客效果,不过会一定程度增加系统压力
            S('lists1',null);
            S('pages1',null);
            //后台处理完跳转回博客主页
            $this->success('发布成功！', U('Blog/blog'));
        }

    }

    /**
     * @param $id
     * 查询需要修改的博文并展示
     */
    public function modify_blog($id)
    {
        $co = new ContentModel();
        $result = $co->where(array('id'=>$id))->find();
        $this->assign('content',$result);
        $this->display();
    }

    /**
     * @param $content
     * 将修改好的博文信息提交
     */
    public function doModify($id)
    {
        $co = new ContentModel();
        $result = $co->where(array('id'=>$id))->find();
        $data['title'] = I('title');
        $data['content'] = I('content');
        $data['writer'] = $result['writer'];
        $data['time'] = $result['time'];
        $data['id'] = $result['id'];
        $data['description'] = mb_substr($data['content'],0,130,'utf-8').'...';
        $co->where(array('id'=>$data['id']))->save($data); // 根据条件保存修改的数据
        $this->success('修改成功！', U('Blog/blog'));
    }

    /**
     * @param $id
     * 删除该博文
     */
    public function del_blog($id)
    {
        $co = new ContentModel();
        $result = $co->where(array('id'=>$id))->find();
        if($result)
        {
            $co->delete();
            $this->redirect('Blog/blog');
        }
        //由于页面缓存，会出现该博文已删除还显示的现象
        else
        {
            echo "<script>alert('该博文不存在!')</script>";
            $this->redirect('Blog/blog');
        }

    }
}