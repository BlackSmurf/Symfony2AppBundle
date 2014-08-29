<?php

namespace Smurf\Symfony2AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class HomeController extends Controller {

    public function indexAction() {
        return $this->render('Symfony2AppBundle:Home:index.html.php');
    }

}
