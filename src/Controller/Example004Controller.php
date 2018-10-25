<?php

namespace App\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;

class Example004Controller extends AbstractController
{
  /**
   * @Route("/")
   */
    public function homepage()
    {
    return new Response('OMG! My first page already! WOOO!');
    }


    /**
     * @Route("/shows/{slug}")
     */
    public function show($slug)
    {

        $just_description = [
          'There is something about ~ that makes me ~',
          'would like to ~ about what ~',
          'that I happened to ~',
        ];

        return $this->render('temppage/show.html.twig', [
        'subject' => ucwords(str_replace('-',' ',$slug)),
        'j_description' => $just_description,
        ]);
    }

}
