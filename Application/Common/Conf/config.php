<?php
return array(
	//'配置项'=>'配置值'
	//禁止模块访问
	//'MODULE_DENY_LIST' => array('Common', 'Runtime'),
    
    //允许模块访问
    //'MODULE_ALLOW_LIST' => array(''),
    
    //设置默认的加载模块
    //'DEFAULT_MODULE' = 'Admin',
    
    //只允许一个模块
    //'MULTI_MODULE' => false,
    
    //设置PATHINFO的URL分隔符
    //'URL_PATHINFO_DEPR' => '_',
    
    //修改键值对应名称
    //'VAR_MODULE' => 'mm',
    //'VAR_CONTROLLER' => ''cc,
    //'VAR_ACTION' => 'aa',
    
    //mysql全局定义
     /* 'DB_TYPE' => 'mysql',       //数据库类型
     'DB_HOST' => 'localhost',   //服务器地址
     'DB_NAME' => 'thinkphp',    //数据库名
     'DB_USER' => 'root',        //用户名
     'DB_PWD' => 'password',     //密码
     'DB_PORT' =>  3306,         //端口
     'DB_PREFIX' => 'think_',    //数据库前缀 */
     
    //PDO专用定义
    'DB_TYPE' => 'mysql',
    'DB_USER' => 'root',
    'DB_PWD' => 'password',
    'DB_PREFIX' => 'think_',
    'DB_DSN' => 'mysql:host=localhost;dbname=thinkphp;charset=UTF8',
    
    //页面调试
    'SHOW_PAGE_TRACE' =>true,
);