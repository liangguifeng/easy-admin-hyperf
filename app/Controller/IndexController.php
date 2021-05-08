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
namespace App\Controller;

use Hyperf\View\RenderInterface;

/**
 * Class IndexController.
 */
class IndexController extends AbstractController
{
    /**
     * 首页.
     *
     * @return \Psr\Http\Message\ResponseInterface
     */
    public function index(RenderInterface $render)
    {
        return view('web.index', ['name' => 'Hyperf']);
    }
}
