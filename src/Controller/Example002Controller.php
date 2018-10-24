<?php

namespace App\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Response;

class Example002Controller
{
    /**
     * @Route("/")
     */
    public function homepage()

    {
        return new Response('심포니4 Annotation Routes 이용');
    }
}
