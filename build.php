<?php
// +----------------------------------------------------------------------
// | ThinkPHP [ WE CAN DO IT JUST THINK ]
// +----------------------------------------------------------------------
// | Copyright (c) 2006~2016 http://thinkphp.cn All rights reserved.
// +----------------------------------------------------------------------
// | Licensed ( http://www.apache.org/licenses/LICENSE-2.0 )
// +----------------------------------------------------------------------
// | Author: liu21st <liu21st@gmail.com>
// +----------------------------------------------------------------------
// $Id$

return [
    // 生成运行时目录
    '__dir__'  => ['runtime/cache', 'runtime/log', 'runtime/temp', 'runtime/template'],
    // 生成应用公共文件
    '__file__' => ['common.php', 'config.php', 'database.php'],

    // 定义api模块的自动生成 （按照实际定义的文件名生成）
    'api'     => [
        '__file__'   => ['common.php'],
        '__dir__'    => ['controller', 'model'],
        'controller' => ['Login', 'Profile'],
        'model'      => ['User', 'UserType'],
        'view'       => [],
    ],
    // 其他更多的模块定义
];
