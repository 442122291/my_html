<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
namespace Home\Widget;
use Think\Controller;
use \Home\Model\UserModel;

 class UserinfoWidget extends Controller {
     
     public function getUserInfo() {     
        //判断用户是否在线
          $isLogin = $_SESSION['isLogin'];

          if ($isLogin) {

             $this->assign('st_name',$_SESSION['user']);
              if($_SESSION['level']==1)
              {
                  $this->display('UserInfo:administrator');
              }
              else{
                  $this->display('UserInfo:getUserInfo');
              }
       } else {
           $this->display('UserInfo:unlogin');
        }
        
         
         
     }
        
        public function unlogin() {         
            $this->display();   
    }

}