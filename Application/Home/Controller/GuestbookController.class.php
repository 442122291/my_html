<?php
namespace Home\Controller;
use Home\Model\CommentModel;
use Home\Model\MessageModel;
use Think\Controller;
use Think\Page;
class GuestbookController extends Controller {
    /*
     * 展示留言板页面
     */
    public function guestbook(){
        $this->display();
    }
    /*
     * 给博主留言
     */

    public function post_message()
    {
        //判断用户是否登录
        if($_SESSION['isLogin']==1)
        {
            $message = I('Guestbook');
            $mes = new MessageModel();
            $user = $_SESSION['user'];
            $time = date('Y-m-d H:i:s',time());
            $data['user'] = $user;
            $data['message'] = $message;
            $data['time'] = $time;
            $data['mes_id'] = md5($user.$time);
            $mes->save_message($data);
            $this->success('留言成功！', U('Guestbook/guestbook'));
        }
        else
        {
            echo '<script>alert("请你先登录")</script>';
            $this->redirect('Guestbook/guestbook', '',1,'页面跳转中....');
        }
    }

    public function del_message($id)
    {
        $mes = new MessageModel();
        $mes->where(array('mes_id'=>$id))->find();
        $mes->delete();
        $this->redirect('Guestbook/message');
    }

    /*
     * 为博主展示所有留言
     */
    public function message()
    {

        $mes = new MessageModel();
        $counts = $mes->count();
        $page = new Page($counts,5);
        $page->setConfig('first','首页');
        $page->setConfig('prev','上一页');
        $page->setConfig('next','下一页');
        $page->setConfig('last','末页');
        $page->setConfig('theme', ' 共 %TOTAL_ROW% 条数据 共%TOTAL_PAGE%页<br/> %FIRST% %UP_PAGE% %LINK_PAGE% %DOWN_PAGE% %END%');
        //分页
        $pages = $page->show();
        $messages = $mes->select();
        $this->assign('page',$pages);
        $this->assign('messages',$messages);
        $this->display();
    }

    public function post_comment($id)
    {
        $comment = I('msg');
        if(empty($comment))
        {
            echo "<script>alert('评论不能为空！')</script>";
            $this->redirect('Content/content?id',array('id'=>$id),1,'页面跳转中....');
        }
        else
        {
            $com = new CommentModel();
            if($_SESSION['isLogin']==1)
            {
                $data['user'] = $_SESSION['user'];
            }
            else
            {
                $data['user'] = '游客';
            }
            $data['blog_id'] = $id;
            $data['comment'] = $comment;
            $data['time'] = date('Y-m-d H:i:s',time());
            $data['id'] = md5($data['user'].$data['time']);
            $com->save_comment($data);
            $this->redirect('Content/content?id',array('id'=>$id));
        }


    }
    public function del_comment($blog_id,$id)
    {
        $com = new CommentModel();
        $com->where(array('id'=>$id))->find();
        $com->delete();
        $this->redirect('Content/content?id',array('id'=>$blog_id));
    }
}