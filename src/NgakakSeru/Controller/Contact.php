<?php

namespace NgakakSeru\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Silex\Application;

class Contact
{
    public function dispatch(Request $request, Application $app)
    {
        // Render a template
        return new Response($app['view']->render('contact', ['name' => 'Jonathan']));
    }
}
