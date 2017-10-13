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


        // homepage
        if ('/homepage' === $pathinfo) {
            return array (  '_controller' => 'AppBundle\\Controller\\DefaultController::indexAction',  '_route' => 'homepage',);
        }

        // login
        if ('/login' === $pathinfo) {
            return array (  '_controller' => 'AppBundle\\Controller\\LoginController::loginAction',  '_route' => 'login',);
        }

        // logout
        if ('/logout' === $pathinfo) {
            return array (  '_controller' => 'AppBundle\\Controller\\LoginController::logoutAction',  '_route' => 'logout',);
        }

        // searches_list
        if ('' === $trimmedPathinfo) {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'searches_list');
            }

            return array (  '_controller' => 'AppBundle\\Controller\\SearchController::listAction',  '_route' => 'searches_list',);
        }

        if (0 === strpos($pathinfo, '/users')) {
            // user_searches
            if ('/users/searches' === $pathinfo) {
                return array (  '_controller' => 'AppBundle\\Controller\\SearchController::searchAction',  '_route' => 'user_searches',);
            }

            // user_list
            if ('/users' === $pathinfo) {
                return array (  '_controller' => 'AppBundle\\Controller\\UserController::listAction',  '_route' => 'user_list',);
            }

            // user_create
            if ('/users/create' === $pathinfo) {
                return array (  '_controller' => 'AppBundle\\Controller\\UserController::createAction',  '_route' => 'user_create',);
            }

            // user_edit
            if (0 === strpos($pathinfo, '/users/edit') && preg_match('#^/users/edit/(?P<user>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'user_edit')), array (  '_controller' => 'AppBundle\\Controller\\UserController::editAction',));
            }

            // user_details
            if (0 === strpos($pathinfo, '/users/details') && preg_match('#^/users/details/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'user_details')), array (  '_controller' => 'AppBundle\\Controller\\UserController::detailsAction',));
            }

            // user_delete
            if (0 === strpos($pathinfo, '/users/delete') && preg_match('#^/users/delete/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'user_delete')), array (  '_controller' => 'AppBundle\\Controller\\UserController::deleteAction',));
            }

        }

        elseif (0 === strpos($pathinfo, '/searches')) {
            // search_edit
            if (0 === strpos($pathinfo, '/searches/edit') && preg_match('#^/searches/edit/(?P<search>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'search_edit')), array (  '_controller' => 'AppBundle\\Controller\\SearchController::editAction',));
            }

            if (0 === strpos($pathinfo, '/searches/d')) {
                // search_duplicateSettings
                if ('/searches/duplicate' === $pathinfo) {
                    return array (  '_controller' => 'AppBundle\\Controller\\SearchController::duplicateSettings',  '_route' => 'search_duplicateSettings',);
                }

                // search_details
                if (0 === strpos($pathinfo, '/searches/details') && preg_match('#^/searches/details/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'search_details')), array (  '_controller' => 'AppBundle\\Controller\\SearchController::detailsAction',));
                }

                // search_delete
                if (0 === strpos($pathinfo, '/searches/delete') && preg_match('#^/searches/delete/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'search_delete')), array (  '_controller' => 'AppBundle\\Controller\\SearchController::deleteAction',));
                }

            }

            elseif (0 === strpos($pathinfo, '/searches/st')) {
                // search_start
                if (0 === strpos($pathinfo, '/searches/start') && preg_match('#^/searches/start/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'search_start')), array (  '_controller' => 'AppBundle\\Controller\\SearchController::startAction',));
                }

                // search_statistics
                if (0 === strpos($pathinfo, '/searches/statistics') && preg_match('#^/searches/statistics/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'search_statistics')), array (  '_controller' => 'AppBundle\\Controller\\SearchController::statisticsAction',));
                }

                // search_stop
                if (0 === strpos($pathinfo, '/searches/stop') && preg_match('#^/searches/stop/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'search_stop')), array (  '_controller' => 'AppBundle\\Controller\\SearchController::stopAction',));
                }

            }

            // search_newResult
            if (0 === strpos($pathinfo, '/searches/newResult') && preg_match('#^/searches/newResult/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'search_newResult')), array (  '_controller' => 'AppBundle\\Controller\\SearchController::newResultAction',));
            }

        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
