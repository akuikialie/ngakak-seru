<?php

namespace NgakakSeru\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Silex\Application;

class About
{
    public function dispatch(Request $request, Application $app)
    {
        return new Response($app['view']->render('about', ['name' => 'Jonathan']));
    }
}
