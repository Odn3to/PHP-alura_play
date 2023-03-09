<?php

namespace Alura\Mvc\Controller;
//use Alura\Mvc\Helper\HtmlRenderTrait;
use Psr\Http\Message\ResponseInterface;
use Psr\Http\Message\ServerRequestInterface;
use Nyholm\Psr7\Response;
use Psr\Http\Server\RequestHandlerInterface;
use League\Plates\Engine;

class LoginFormController implements RequestHandlerInterface
{
    //use HtmlRenderTrait;

    public function __construct(private Engine $templates)
    {
    } 
    
	/**
	 */
	public function handle(ServerRequestInterface $request): ResponseInterface {

        if(array_key_exists('logado', $_SESSION) && $_SESSION['logado'] === true){
            return new Response(302, [
                'Location' => '/'
            ]);
        }

        //return new Response(200, body: $this->renderTemplate('login-form'));
        return new Response(200, body: $this->templates->render('login-form'));
	}
}