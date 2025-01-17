<?php


namespace App\Controllers;

use App\Schemas\TestSchema;
use Psr\Http\Message\ResponseInterface as Response;
use Psr\Http\Message\ServerRequestInterface as Request;

use App\Models\TestModel;
use Slim\Views\PhpRenderer;
use System\Core\Profiler;
use System\Core\Settings;
use System\Core\Modules;
use System\Core\Loggers;
use System\Core\System;
use System\Core\Session;

use App\Repositories\TestRepository;
use System\DB\Mysql;
use System\Files\Handlers\Image2;
use System\Loggers\FunctionLogger;
use System\Module\ModuleInterface;
use App\Responders\Responder;

use Psr\Http\Message\ResponseFactoryInterface;

class VueController {

    function __construct(System $system,Responder $responder) {
        $this->system = $system;
        $this->responder = $responder;
    }

    public function __invoke(Request $request, Response $response): Response {
        $GLOBALS['output'](get_class($this) . "");
        $data = array();

        $data['debug'] = $this->system->get("DEBUG");
        $data['session'] = $request->getAttribute("SESSION")->getId();











        return $this->responder->withTemplate($response,"index.html",$data);
    }


}

