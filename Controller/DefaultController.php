<?php

namespace InterInvest\CongesBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('CongesBundle:Default:index.html.twig');
    }
}
