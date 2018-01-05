<?php
/**
 * Created by PhpStorm.
 * User: anne
 * Date: 1/4/18
 * Time: 6:27 PM
 */

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Response;

class GenusController
{
    /**
     * @Route("/genus/{sampleOnly}")
     */
    public function showAction($sampleOnly)
    {
        return new Response('Let us see: '.$sampleOnly);
    }
}