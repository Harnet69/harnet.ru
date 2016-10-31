<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * appProdUrlMatcher.
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
        $context = $this->context;
        $request = $this->request;

        if (0 === strpos($pathinfo, '/admin')) {
            // create_index
            if (rtrim($pathinfo, '/') === '/admin') {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_create_index;
                }

                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'create_index');
                }

                return array (  '_controller' => 'BlogBundle\\Controller\\PostController::indexAction',  '_route' => 'create_index',);
            }
            not_create_index:

            // create_show
            if (preg_match('#^/admin/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_create_show;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'create_show')), array (  '_controller' => 'BlogBundle\\Controller\\PostController::showAction',));
            }
            not_create_show:

            // create_new
            if ($pathinfo === '/admin/new') {
                if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                    goto not_create_new;
                }

                return array (  '_controller' => 'BlogBundle\\Controller\\PostController::newAction',  '_route' => 'create_new',);
            }
            not_create_new:

            // create_edit
            if (preg_match('#^/admin/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                    goto not_create_edit;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'create_edit')), array (  '_controller' => 'BlogBundle\\Controller\\PostController::editAction',));
            }
            not_create_edit:

            // create_delete
            if (preg_match('#^/admin/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'DELETE') {
                    $allow[] = 'DELETE';
                    goto not_create_delete;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'create_delete')), array (  '_controller' => 'BlogBundle\\Controller\\PostController::deleteAction',));
            }
            not_create_delete:

        }

        // create_prod
        if (rtrim($pathinfo, '/') === '') {
            if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                $allow = array_merge($allow, array('GET', 'HEAD'));
                goto not_create_prod;
            }

            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'create_prod');
            }

            return array (  '_controller' => 'BlogBundle\\Controller\\PostController::ProdAction',  '_route' => 'create_prod',);
        }
        not_create_prod:

        // create_showPost
        if (0 === strpos($pathinfo, '/showme') && preg_match('#^/showme/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
            if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                $allow = array_merge($allow, array('GET', 'HEAD'));
                goto not_create_showPost;
            }

            return $this->mergeDefaults(array_replace($matches, array('_route' => 'create_showPost')), array (  '_controller' => 'BlogBundle\\Controller\\PostController::ShowPOstAction',));
        }
        not_create_showPost:

        // blog_homepage
        if ($pathinfo === '/blog') {
            return array (  '_controller' => 'BlogBundle\\Controller\\BlogController::IndexAction',  '_route' => 'blog_homepage',);
        }

        // blog_about
        if ($pathinfo === '/about') {
            return array (  '_controller' => 'BlogBundle\\Controller\\AboutController::AboutAction',  '_route' => 'blog_about',);
        }

        // homepage
        if (rtrim($pathinfo, '/') === '') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'homepage');
            }

            return array (  '_controller' => 'AppBundle\\Controller\\DefaultController::indexAction',  '_route' => 'homepage',);
        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
