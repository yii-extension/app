<?php

declare(strict_types=1);

namespace Config\Web;

use Yiisoft\Middleware\Dispatcher\MiddlewareStack;
use Yiisoft\Middleware\Dispatcher\MiddlewareStackInterface;
use Yiisoft\Middleware\Dispatcher\MiddlewareFactoryInterface;
use Yiisoft\Middleware\Dispatcher\MiddlewareFactory;

return [
    MiddlewareStackInterface::class => MiddlewareStack::class,
    MiddlewareFactoryInterface::class => MiddlewareFactory::class,
];
