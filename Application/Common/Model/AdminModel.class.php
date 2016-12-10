<?php
/**
 * Created by PhpStorm.
 * User: lee
 * Date: 2016/12/10
 * Time: 14:26
 */
namespace Common\Model;
use Think\Model;
class AdminModel extends Model{

    private $_db='';
    public function __construct(){
        $this->_db=M('Admin');
    }

    public function getAdminByUsername($username){
        //$ret=$this->_db->where('username="'.$username.'"')->find(); 这里有问题，返回不了数据,数据库里面没有root这个用户名，应该使用老师的admin
        $ret=$this->_db->where('username="'.$username.'"')->find();
        return $ret;
    }
}