<?php

declare (strict_types=1);
namespace VsWest\Framework\Action;

use Hyperf\Di\Annotation\Inject;
use Hyperf\HttpServer\Contract\RequestInterface;
use Hyperf\HttpServer\Contract\ResponseInterface;
use Psr\Container\ContainerInterface;

abstract class AbstractAction
{
    
    #[Inject]
    protected ContainerInterface $container;
    
    #[Inject]
    protected RequestInterface $request;
    
    #[Inject]
    protected ResponseInterface $response;
}