<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
namespace Home\Model;
use Think\Model\MongoModel;
class MessageModel extends MongoModel{
    //put your code here
function save_message($data)
{

    $this->add($data);
}


}
