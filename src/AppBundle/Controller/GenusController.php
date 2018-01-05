<?php
/**
 * Created by PhpStorm.
 * User: anne
 * Date: 1/4/18
 * Time: 6:27 PM
 */

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;

class GenusController extends Controller
{
    /**
     * @Route("/genus/{genusName}")
     */
    public function showAction($genusName)
    {
        $templating = $this->container->get('templating'); 
        return $this->render('genus/show.html.twig', [
            'name' => $genusName
        ]);

    }
}