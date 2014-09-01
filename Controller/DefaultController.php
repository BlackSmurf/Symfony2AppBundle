<?php

namespace Smurf\Symfony2AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;

/**
 * Default controller
 * @Route("/")

 */
class DefaultController extends Controller {

    /**
     * Index action.
     *
     * @Route("/", name="index")
     * @Method({"GET", "POST"})
     * @Template("Symfony2AppBundle:Default:index.html.php")
     */
    public function indexAction() {

        return array();
    }

}
