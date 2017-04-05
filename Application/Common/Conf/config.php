<?php
return array(
	//'配置项'=>'配置值'
    'LAYOUT_ON'=>true,
    'LAYOUT_NAME'=>'Public/layout',
    'URL_MODEL' => 2,
    'DB_TYPE'=>'mongo', //数据库类型
    'DB_HOST'=>'localhost', //服务器地址
    'DB_NAME'=>'my_blog', //数据库名
    'DB_USER'=>'', //用户名
    'DB_PWD'=>'', //密码
    'DB_PORT'=>27017, //端口
    'DB_PREFIX'=>'', //数据库表前缀
    'MODULE_ALLOW_LIST' => array('Home','Admin'), 'DEFAULT_MODULE' => 'Home', // 默认模块，可以省去模块名输入
    //设置多个伪静态的后缀
    'URL_HTML_SUFFIX'=>'html|shtml|xml',
    //开启静态缓存
    'HTML_CACHE_ON'=>true,
    //全局缓存的过期时间
    'HTML_CACHE_TIME'=>60,
    //缓存的后缀
    'HTML_CACHE_SUFFIX'=>'.html',
    'DATA_CACHE_TYPE' => 'Memcache',
    'MEMCACHE_HOST'   => 'tcp://127.0.0.1:11211',
    'DATA_CACHE_TIME' => '3600',

);