<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * appProdUrlMatcher
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appProdUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
{
    /**
     * Constructor.
     */
    public function __construct(RequestContext $context)
    {
        $this->context = $context;
    }

    public function match($pathinfo)
    {
        $allow = array();
        $pathinfo = rawurldecode($pathinfo);

        if (0 === strpos($pathinfo, '/platform')) {
            // augustine_platform_home
            if (preg_match('#^/platform(?:/(?P<page>[^/]++))?$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'augustine_platform_home')), array (  '_controller' => 'Augustine\\PlatformBundle\\Controller\\AdvertController::indexAction',  'page' => 1,));
            }

            // augustine_platform_history
            if ($pathinfo === '/platform/historique') {
                return array (  '_controller' => 'Augustine\\PlatformBundle\\Controller\\AdvertController::historyAction',  'page' => 2,  '_route' => 'augustine_platform_history',);
            }

        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
