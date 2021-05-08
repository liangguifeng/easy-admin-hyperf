<?php

declare(strict_types=1);
/**
 * This file is part of Hyperf.
 *
 * @link     https://www.hyperf.io
 * @document https://hyperf.wiki
 * @contact  group@hyperf.io
 * @license  https://github.com/hyperf/hyperf/blob/master/LICENSE
 */
use Hyperf\View\Mode;
use Hyperf\ViewEngine\HyperfViewEngine;

return [
    // 使用的Blade模板引擎
    'engine' => HyperfViewEngine::class,
    // 不填写则默认为 Task 模式，推荐使用 Task 模式
    'mode' => Mode::TASK,
    // 配置
    'config' => [
        // 若下列文件夹不存在请自行创建
        // 视图文件存放位置
        'view_path' => BASE_PATH . '/resources/views/',
        // 缓存文件存放位置
        'cache_path' => BASE_PATH . '/runtime/view/',
    ],

    # 自定义组件注册
    'components' => [
        // 'alert' => \App\View\Components\Alert::class
    ],
    # 视图命名空间 (主要用于扩展包中)
    'namespaces' => [
        'web' => BASE_PATH . '/resources/views/web',
    ],
];
