<?php

namespace Smurf\AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class HomeController extends Controller {

    public function indexAction() {
        return $this->render('SmurfAppBundle:Home:index.html.php');
    }

}
