<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * appProdProjectContainerUrlMatcher.
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appProdProjectContainerUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
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
        $trimmedPathinfo = rtrim($pathinfo, '/');
        $context = $this->context;
        $request = $this->request;
        $requestMethod = $canonicalMethod = $context->getMethod();
        $scheme = $context->getScheme();

        if ('HEAD' === $requestMethod) {
            $canonicalMethod = 'GET';
        }


        if (0 === strpos($pathinfo, '/soultana')) {
            // soultana_homepage
            if ('/soultana' === $trimmedPathinfo) {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'soultana_homepage');
                }

                return array (  '_controller' => 'SNT\\SoultanaBundle\\Controller\\ReservationController::indexAction',  '_route' => 'soultana_homepage',);
            }

            // reservation_index
            if ('/soultana/reservation' === $trimmedPathinfo) {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'reservation_index');
                }

                return array (  '_controller' => 'SNT\\SoultanaBundle\\Controller\\ReservationController::indexAction',  '_route' => 'reservation_index',);
            }

            if (0 === strpos($pathinfo, '/soultana/admin')) {
                // admin_login
                if ('/soultana/admin' === $trimmedPathinfo) {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'admin_login');
                    }

                    return array (  '_controller' => 'SNT\\SoultanaBundle\\Controller\\AdminController::loginAction',  '_route' => 'admin_login',);
                }

                // admin_index
                if ('/soultana/admin/index' === $pathinfo) {
                    return array (  '_controller' => 'SNT\\SoultanaBundle\\Controller\\AdminController::indexAction',  '_route' => 'admin_index',);
                }

                // admin_bien
                if (0 === strpos($pathinfo, '/soultana/admin/bien') && preg_match('#^/soultana/admin/bien/(?P<action>[^/]++)$#s', $pathinfo, $matches)) {
                    if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                        $allow = array_merge($allow, array('GET', 'POST'));
                        goto not_admin_bien;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_bien')), array (  '_controller' => 'SNT\\SoultanaBundle\\Controller\\AdminController::bienAction',));
                }
                not_admin_bien:

            }

        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
