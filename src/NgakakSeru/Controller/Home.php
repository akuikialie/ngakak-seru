<?php

namespace NgakakSeru\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Silex\Application;

class Home
{

    public function index(Request $request, Application $app)
    {
        $data['base_url'] = $request->getBasePath();
        $data['config']  = $app['config'];
        $app['view']->layout('auth');
        return new Response($app['view']->render('home',$data));
    }
}
