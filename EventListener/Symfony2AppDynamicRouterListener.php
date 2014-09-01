<?php

namespace Smurf\Symfony2AppBundle\EventListener;

use Symfony\Component\HttpKernel\Event\GetResponseEvent;
use Symfony\Component\HttpKernel\EventListener\RouterListener;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;
use Symfony\Component\Routing\Matcher\UrlMatcher;
use Symfony\Component\Routing\RequestContext;
use Symfony\Component\Routing\RouteCollection;
use Symfony\Component\Routing\Route;
use Symfony\Component\Config\Loader\Loader;

class Symfony2AppDynamicRouterListener extends RouterListener {

    /**
     * @var RouteCollection
     */
    protected $routes;

    /**
     * @var bool
     */
    protected $routesLoaded = false;

    function __construct() {
        $this->routes = new RouteCollection();

        parent::__construct(
                new UrlMatcher($this->routes, new RequestContext())
        );

//        $this->loadRoutes();
    }

    protected function loadRoutes($request) {
//        $loader = new AdvancedLoader(null);
//        $this->routes = $loader->load('@SmurfSymfony2AppBundle/Resources/config/routing.yml', 'yaml');
        //$route = $loader->import();
        //$this->routes->addCollection($route);
        $route = new Route('/', $defaults = array('_controller' => 'Symfony2AppBundle:Default:index'), $requirements = array('resource' => '@SmurfSymfony2AppBundle/Controller', 'type' => 'annotation', 'prefix' => '/core'));
        $this->routes->add('dynamic_route_' . ($this->routes->count() + 1), $route);
        $this->routesLoaded = true;
        //*/
        //add another
        //or execute a db query and add multiple routes
        //etc.
    }

    public function onKernelRequest(GetResponseEvent $event) {
        try {
            if (false === $this->routesLoaded) {
                $this->loadRoutes($event->getRequest());
            }
            parent::onKernelRequest($event);
        } catch (NotFoundHttpException $e) {

        }
    }

}
