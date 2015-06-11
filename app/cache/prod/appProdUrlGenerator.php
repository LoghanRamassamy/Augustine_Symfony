<?php

use Symfony\Component\Routing\RequestContext;
use Symfony\Component\Routing\Exception\RouteNotFoundException;
use Psr\Log\LoggerInterface;

/**
 * appProdUrlGenerator
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appProdUrlGenerator extends Symfony\Component\Routing\Generator\UrlGenerator
{
    static private $declaredRoutes = array(
        'augustine_platform_home' => array (  0 =>   array (    0 => 'page',  ),  1 =>   array (    '_controller' => 'Augustine\\PlatformBundle\\Controller\\AdvertController::indexAction',    'page' => 1,  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'page',    ),    1 =>     array (      0 => 'text',      1 => '/platform',    ),  ),  4 =>   array (  ),),
        'augustine_platform_history' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Augustine\\PlatformBundle\\Controller\\AdvertController::historyAction',    'page' => 2,  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/platform/historique',    ),  ),  4 =>   array (  ),),
    );

    /**
     * Constructor.
     */
    public function __construct(RequestContext $context, LoggerInterface $logger = null)
    {
        $this->context = $context;
        $this->logger = $logger;
    }

    public function generate($name, $parameters = array(), $referenceType = self::ABSOLUTE_PATH)
    {
        if (!isset(self::$declaredRoutes[$name])) {
            throw new RouteNotFoundException(sprintf('Unable to generate a URL for the named route "%s" as such route does not exist.', $name));
        }

        list($variables, $defaults, $requirements, $tokens, $hostTokens) = self::$declaredRoutes[$name];

        return $this->doGenerate($variables, $defaults, $requirements, $tokens, $parameters, $name, $referenceType, $hostTokens);
    }
}
