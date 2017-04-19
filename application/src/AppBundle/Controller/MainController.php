<?php

namespace AppBundle\Controller;


use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Response;

class MainController
{
    /**
     * @Route("/home/{page}")
     */
    public function showAction($page)
    {
        return new Response('The page : ' .$page );
    }
}
