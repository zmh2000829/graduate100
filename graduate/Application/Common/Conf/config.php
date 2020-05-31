<?php



return array(
    'SITE_NAME' => 'Cele', // 站点名
    'SYSTEM_VERSION' => '1.0',   // 系统版本
    // 添加数据库配置信息
    'DB_TYPE' => 'mysql', // 数据库类型
    'DB_HOST' => 'localhost', // 服务器地址
    'DB_NAME' => '', // 数据库名
    'DB_USER' => '', // 用户名
    'DB_PWD' => '', // 密码fdbxadmin123456
    'DB_PORT' => 3306, // 端口		
    'DB_CHARSET' => 'utf8', // 字符集
    'DB_DEBUG' => TRUE,
    'DB_PREFIX'=>'', // 数据库表前缀
    'DB_CHARSET'=>'utf8',       // 数据库字符集
    
    // 添加系统全局配置
    'URL_MODEL'     =>  2,          // 0 (普通模式); 1 (PATHINFO 模式); 2 (REWRITE  模式); 3 (兼容模式)  默认为PATHINFO 模式
    'URL_HTML_SUFFIX'       =>  '', // 默认为html
    'ACTION_SUFFIX' =>  'Action',   // 操作方法后缀
    'DEFAULT_FILTER'        =>  'strip_tags,stripslashes',
    
    // 添加表单相关配置
    'TOKEN_ON'      =>    false,    // 是否开启令牌验证 默认关闭
    'TOKEN_NAME'    =>    '__hash__',    // 令牌验证的表单隐藏字段名称，默认为__hash__
    'TOKEN_TYPE'    =>    'md5',  //令牌哈希验证规则 默认为MD5
    'TOKEN_RESET'   =>    true,  //令牌验证出错后是否重置令牌 默认为true
    
    // 添加Cache相关配置
    /*'DATA_CACHE_TYPE' => 'Memcache',
    'DATA_CACHE_PREFIX'=>'tool',
    'DATA_CACHE_TIME'=>'3600',
    'MEMCACHE_HOST'  => 'udp://127.0.0.1:11211',*/
    'SESSION_OPTIONS' => array(
        'expire'=> 12*3600,
        'prefix'=>'',
    ),

    // 文件上传配置
    'UPLOAD_CONFIG' => array(
        'rootPath' => './Public/',
        'savePath' => 'image',
        'autoSub' => fasle,
        'subName' => '',
        'saveName' => '',
        'exts' => array('jpg','gif', 'png'),
        'replace' => true,
    ),

    // 文件目录操作配置
    'DIR_OPERATOR' => 'Local',
    'DIR_CONFIG' => array(
        'rootPath' => './Public/',
        'subPath' => 'image',
        ),

    // // UIS认证配置
    // 'UIS' => array(
    //     'client_id' => '794569f5-b35d-4c37-9c0a-aeeb840806ff',
    //     'response_type' => 'code',
    //     'scope' => 'username',  
    //     'client_secret' => 'Qme_:(E~w5P"',
    //     'redirect_uri' => "http://www.bxs.fudan.edu.cn/weichashi/Home/Index", 
    //     'grant_type'  => "authorization_code",   
    //     ),


    // DES 相关配置
    'DES' => array(
        'key' => '@1357tuop1',        // 加密秘钥
        ),
);
