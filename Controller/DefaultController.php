<?php

namespace Mocniak\PropagandaBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

class DefaultController extends Controller
{
    public function testAction(Request $request)
    {
        return new Response('test');
    }

    public function indexAction(Request $request)
    {
        return $this->render('default/index.html.twig', [
            'articles' => [],
            'featuredArticles' => [],
            'events' => [],
            'videos' => []
        ]);
    }
}