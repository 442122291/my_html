<?php
namespace Home\Controller;
use Think\Controller;
use \Home\Model\UserModel;
class UserController extends Controller{
    /*
     * 展示用户登录页面
     */
    public function login()
    {
        $this->display();
    }

    /*
     * 查询数据库检验用户登录信息
     */
    public function doLogin()
    {
        header("Content-Type:text/html; charset=utf-8");
        //登录
        $user = new UserModel();
        if(isset($_POST["dl"]))
        {
            $username = I("Username");
            $password = I("Password");
            $result=$user->login($username,$password);
            //判断是否能够登录
            if($result)
            {
                //登录成功,记录用户登录session值
                $_SESSION["user"]=$username;
                $_SESSION['isLogin'] = 1;
                //记录用户权限
                if($result['level'])
                {
                    $_SESSION["level"]=$result['level'];
                }
                else
                {
                    $_SESSION["level"]=0;
                }
                $this->redirect('/Blog/blog');
            }
            else
            {
                echo "<script>alert('用户名或密码错误！')</script>";
                $this->redirect('User/login');
            }
        }
        else
        {
            //非法访问方式，直接跳转到页面
            echo "<script>alert('非法操作，跳转到登录页面')</script>";
            $this->redirect('User/login', '',3,'页面跳转中....');
        }
    }

    //显示用户注册界面
    public function register(){
        $this->display();
    }

    /*
     * 用户注册逻辑
     */
    public function doRegister()
    {

        //创建模型对象
        $username = $_POST['st_name'];
        $user = new UserModel();
        //判断此用户是否已存在
        $result = $user->where(array('st_name'=>$username))->find();
        if ($result != null) {
            $this->error('当前的用户名已经被注册了！');
            return false;
        }
        //格式化数据
        $data['st_name'] = $_POST['st_name'];
        $data['email'] = $_POST['email'];
        $data['st_password'] = $_POST['st_password'];
        //存入数据表中
        $result = $user->add($data);
        if ($result) {
            //自动登录操作,并用session存储用户的相应信息
            $_SESSION['isLogin'] = 1;
            $_SESSION['user'] = $data['st_name'];
            $this->success('注册成功！', U('Blog/blog'));
        }
        else {
            $this->error('注册数据出现问题！');
        }
        return true;
    }

    // 注销用户的登录信息
    public function logout() {
        unset($_SESSION['isLogin']);
        unset($_SESSION['user']);
        unset($_SESSION['level']);
        $this->success('退出成功！', U('Blog/blog'));
    }
}
