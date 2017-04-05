<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
namespace Home\Model;
use Think\Model\MongoModel;
class ContentModel extends MongoModel{
    //put your code here
    public function content($id)
    {

        //使用thinkphp中CRUD
        $result = $this->where(array('id'=>$id))->find();

        return $result;
    }

    function save_blog($data)
    {
        $this->add($data);
    }
}
