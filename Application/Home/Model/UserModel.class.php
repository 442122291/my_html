<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
namespace Home\Model;
use Think\Model\MongoModel;
class UserModel extends MongoModel{

    public function login($username,$password)
    {

        //使用thinkphp中CRUD
//        $user = new MongoModel('user');
//        $result = $user->where("st_name='$username' and st_password ='$password'")->find();
        $result = $this->where(array('st_name'=>$username,'st_password'=>$password))->find();
        return $result;
    }
}
