<?php

namespace Innovare\CoreBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;

/*
 * Class MacroareaController
 */
class MacroareaController extends Controller
{
    /**
     * Show the macroarea index
     *
     * @return array
     *
     * @Route("/")
     * @Template()
     */
    public function indexAction()
    {
        return array(
                // ...
            );
    }

}
