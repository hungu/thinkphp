<?php
namespace Home\Model;
use Think\Model;

class UserModel extends Model {
    //protected $tablePrefix = 'tp_';           //更改表前缀
    //protected $tableName = 'abc';             //更换表名
    //protected $trueTableName = 'tp_abc';      //更换前缀和表名
    //protected $dbName = 'thinkphp';           //更换数据库
   /*  public function __construct() {
        parent :: __construct();
        echo '\home';
    } */
    protected $_scope = array(                  //必须是_scope
        'sql1'=>array(
            'where'=>array('id'=>1),
        ),
        'sql2'=>array(
            'order'=>array('date'=>'DESC'),
            'limit'=>2,
        )
    );
}