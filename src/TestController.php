<?php

declare(strict_types=1);

namespace BuzzingPixel\ExecutiveEnv;

use buzzingpixel\executive\ExecutiveDi;
use BuzzingPixel\Executive\services\TwigEnvironment;
use Psr\Http\Message\ResponseInterface;
use Zend\Diactoros\Response;

class TestController
{
    private $twig;

    public function __construct(TwigEnvironment $twig)
    {
        $this->twig = $twig;
    }

    public function __invoke() : ResponseInterface
    {
        $response = new Response();

        $response = $response->withStatus(200)->withHeader('Content-Type', 'text/html');

        $response->getBody()->write('Your HTML will go here');

        return $response;
    }
}
