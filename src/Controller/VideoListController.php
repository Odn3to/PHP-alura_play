<?php

declare(strict_types=1);

namespace Alura\Mvc\Controller;

//use Alura\Mvc\Helper\HtmlRenderTrait;
use Alura\Mvc\Repository\VideoRepository;
use League\Plates\Engine;
use Nyholm\Psr7\Response;
use Psr\Http\Message\ResponseInterface;
use Psr\Http\Message\ServerRequestInterface;
use Psr\Http\Server\RequestHandlerInterface;

class VideoListController implements RequestHandlerInterface
{
    //use HtmlRenderTrait;
    public function __construct(
        private VideoRepository $videoRepository,
        private Engine $templates
    )
    {
    }

    public function handle(ServerRequestInterface $request): ResponseInterface
    {
        $videoList = $this->videoRepository->all();
        return new Response(302, body:
            //$this->renderTemplate(
            $this->templates->render(
                'video-list',
                ['videoList' => $videoList]
            )
        );
    }
}
