<?php
namespace Home\Controller;
use Think\Controller;
class UserController extends Controller {
    public function index(){
        echo 'User index';  
    }
    public function test($user, $pass) {
        echo 'user:' . $user . '<br />pass:' . $pass;
    }
    public function model() {
        //创建Model基类,传递User表, think_user
        
        //不需要导入 -- Think\Model;
        //user = M('User);
        
        //$user = new Model('User');
        //var_dump( $user->select());
       //$user = new UserModel();
       //var_dump( $user->select());
       
        //$user = D('User');
        //var_dump( $user->select());
        
        
        //var_dump($user->where('id=1')->select());
        /* $condtion['user'] = '蜡笔小新';
        $condtion['id'] = 1;
        $condtion['_logic'] = 'OR'; */
        /* $condtion = new \stdClass();
        $condtion->id = 1;
        $condtion->user = '蜡笔小新';
        $condtion->_logic = 'OR';
        var_dump($user->where($condtion)->select()); */
        
        //$user = M('User');
        //$map['id'] = array('neq', 1);
        //var_dump($user->where($map)->select());
        
       /*  $user = M('User');
        $map['user|email'] = '蜡笔小新'; */
        //var_dump($user->where()->select());
        /* $user = M('user');
        var_dump($user->where('id=1')->select()); */
        $user = D('User');
        var_dump($user->scope('sql1')->select());
    }
}






