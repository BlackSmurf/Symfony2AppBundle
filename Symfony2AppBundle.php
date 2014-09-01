<?php

namespace Smurf\Symfony2AppBundle;

use Symfony\Component\HttpKernel\Bundle\Bundle;
use Smurf\Symfony2AppBundle\DependencyInjection\SmurfSymfony2AppExtension;

class Symfony2AppBundle extends Bundle {

    public function getContainerExtension() {
        return new SmurfSymfony2AppExtension();
    }

}
