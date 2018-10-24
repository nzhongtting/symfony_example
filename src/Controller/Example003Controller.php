<?php

namespace App\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Response;

class Example003Controller
{
    /**
     * @Route("/notes/{slug}")
     */
    public function show($slug)
    {
        return new Response(sprintf(
            'notes 뒤에 전달되는 값은 무엇인가요 ? : "%s"',
            $slug
        ));
    }
}
