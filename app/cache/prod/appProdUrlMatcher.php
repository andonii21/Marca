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
        $context = $this->context;
        $request = $this->request;

        if (0 === strpos($pathinfo, '/c')) {
            if (0 === strpos($pathinfo, '/comentarios')) {
                // comentarios
                if (rtrim($pathinfo, '/') === '/comentarios') {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'comentarios');
                    }

                    return array (  '_controller' => 'Uni\\Bundle\\MarcaBundle\\Controller\\comentariosController::indexAction',  '_route' => 'comentarios',);
                }

                // comentarios_show
                if (preg_match('#^/comentarios/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'comentarios_show')), array (  '_controller' => 'Uni\\Bundle\\MarcaBundle\\Controller\\comentariosController::showAction',));
                }

                if (0 === strpos($pathinfo, '/comentarios/new')) {
                    // comentarios_new
                    if ($pathinfo === '/comentarios/new') {
                        return array (  '_controller' => 'Uni\\Bundle\\MarcaBundle\\Controller\\comentariosController::newAction',  '_route' => 'comentarios_new',);
                    }

                    // comentarios_new2
                    if ($pathinfo === '/comentarios/new') {
                        return array (  '_controller' => 'Uni\\Bundle\\MarcaBundle\\Controller\\comentariosController::newAction',  '_route' => 'comentarios_new2',);
                    }

                }

                // comentarios_create
                if ($pathinfo === '/comentarios/create') {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_comentarios_create;
                    }

                    return array (  '_controller' => 'Uni\\Bundle\\MarcaBundle\\Controller\\comentariosController::createAction',  '_route' => 'comentarios_create',);
                }
                not_comentarios_create:

                // comentarios_edit
                if (preg_match('#^/comentarios/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'comentarios_edit')), array (  '_controller' => 'Uni\\Bundle\\MarcaBundle\\Controller\\comentariosController::editAction',));
                }

                // comentarios_update
                if (preg_match('#^/comentarios/(?P<id>[^/]++)/update$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('POST', 'PUT'))) {
                        $allow = array_merge($allow, array('POST', 'PUT'));
                        goto not_comentarios_update;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'comentarios_update')), array (  '_controller' => 'Uni\\Bundle\\MarcaBundle\\Controller\\comentariosController::updateAction',));
                }
                not_comentarios_update:

                // comentarios_delete
                if (preg_match('#^/comentarios/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('POST', 'DELETE'))) {
                        $allow = array_merge($allow, array('POST', 'DELETE'));
                        goto not_comentarios_delete;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'comentarios_delete')), array (  '_controller' => 'Uni\\Bundle\\MarcaBundle\\Controller\\comentariosController::deleteAction',));
                }
                not_comentarios_delete:

            }

            if (0 === strpos($pathinfo, '/categorias')) {
                // categorias
                if (rtrim($pathinfo, '/') === '/categorias') {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'categorias');
                    }

                    return array (  '_controller' => 'Uni\\Bundle\\MarcaBundle\\Controller\\categoriasController::indexAction',  '_route' => 'categorias',);
                }

                // categorias_show
                if (preg_match('#^/categorias/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'categorias_show')), array (  '_controller' => 'Uni\\Bundle\\MarcaBundle\\Controller\\categoriasController::showAction',));
                }

                // categorias_new
                if ($pathinfo === '/categorias/new') {
                    return array (  '_controller' => 'Uni\\Bundle\\MarcaBundle\\Controller\\categoriasController::newAction',  '_route' => 'categorias_new',);
                }

                // categorias_create
                if ($pathinfo === '/categorias/create') {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_categorias_create;
                    }

                    return array (  '_controller' => 'Uni\\Bundle\\MarcaBundle\\Controller\\categoriasController::createAction',  '_route' => 'categorias_create',);
                }
                not_categorias_create:

                // categorias_edit
                if (preg_match('#^/categorias/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'categorias_edit')), array (  '_controller' => 'Uni\\Bundle\\MarcaBundle\\Controller\\categoriasController::editAction',));
                }

                // categorias_update
                if (preg_match('#^/categorias/(?P<id>[^/]++)/update$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('POST', 'PUT'))) {
                        $allow = array_merge($allow, array('POST', 'PUT'));
                        goto not_categorias_update;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'categorias_update')), array (  '_controller' => 'Uni\\Bundle\\MarcaBundle\\Controller\\categoriasController::updateAction',));
                }
                not_categorias_update:

                // categorias_delete
                if (preg_match('#^/categorias/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('POST', 'DELETE'))) {
                        $allow = array_merge($allow, array('POST', 'DELETE'));
                        goto not_categorias_delete;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'categorias_delete')), array (  '_controller' => 'Uni\\Bundle\\MarcaBundle\\Controller\\categoriasController::deleteAction',));
                }
                not_categorias_delete:

            }

        }

        if (0 === strpos($pathinfo, '/noticias')) {
            // noticias
            if (rtrim($pathinfo, '/') === '/noticias') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'noticias');
                }

                return array (  '_controller' => 'Uni\\Bundle\\MarcaBundle\\Controller\\noticiasController::indexAction',  '_route' => 'noticias',);
            }

            // noticias_show
            if (preg_match('#^/noticias/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'noticias_show')), array (  '_controller' => 'Uni\\Bundle\\MarcaBundle\\Controller\\noticiasController::showAction',));
            }

            // noticias_new
            if ($pathinfo === '/noticias/new') {
                return array (  '_controller' => 'Uni\\Bundle\\MarcaBundle\\Controller\\noticiasController::newAction',  '_route' => 'noticias_new',);
            }

            // noticias_create
            if ($pathinfo === '/noticias/create') {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_noticias_create;
                }

                return array (  '_controller' => 'Uni\\Bundle\\MarcaBundle\\Controller\\noticiasController::createAction',  '_route' => 'noticias_create',);
            }
            not_noticias_create:

            // noticias_edit
            if (preg_match('#^/noticias/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'noticias_edit')), array (  '_controller' => 'Uni\\Bundle\\MarcaBundle\\Controller\\noticiasController::editAction',));
            }

            // noticias_update
            if (preg_match('#^/noticias/(?P<id>[^/]++)/update$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('POST', 'PUT'))) {
                    $allow = array_merge($allow, array('POST', 'PUT'));
                    goto not_noticias_update;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'noticias_update')), array (  '_controller' => 'Uni\\Bundle\\MarcaBundle\\Controller\\noticiasController::updateAction',));
            }
            not_noticias_update:

            // noticias_delete
            if (preg_match('#^/noticias/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('POST', 'DELETE'))) {
                    $allow = array_merge($allow, array('POST', 'DELETE'));
                    goto not_noticias_delete;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'noticias_delete')), array (  '_controller' => 'Uni\\Bundle\\MarcaBundle\\Controller\\noticiasController::deleteAction',));
            }
            not_noticias_delete:

            // noticias_buscar_titulo
            if ($pathinfo === '/noticias/buscartitulo') {
                return array (  '_controller' => 'Uni\\Bundle\\MarcaBundle\\Controller\\noticiasController::buscarTituloAction',  '_route' => 'noticias_buscar_titulo',);
            }

            // noticias_responder_titulo
            if ($pathinfo === '/noticias/respondertitulo') {
                if (!in_array($this->context->getMethod(), array('POST', 'PUT'))) {
                    $allow = array_merge($allow, array('POST', 'PUT'));
                    goto not_noticias_responder_titulo;
                }

                return array (  '_controller' => 'Uni\\Bundle\\MarcaBundle\\Controller\\noticiasController::responderTituloAction',  '_route' => 'noticias_responder_titulo',);
            }
            not_noticias_responder_titulo:

            // noticias_buscar_titulo_like
            if ($pathinfo === '/noticias/buscartitulolike') {
                return array (  '_controller' => 'Uni\\Bundle\\MarcaBundle\\Controller\\noticiasController::buscarTitulolikeAction',  '_route' => 'noticias_buscar_titulo_like',);
            }

            // noticias_responder_titulo_like
            if ($pathinfo === '/noticias/respondertitulolike') {
                if (!in_array($this->context->getMethod(), array('POST', 'PUT'))) {
                    $allow = array_merge($allow, array('POST', 'PUT'));
                    goto not_noticias_responder_titulo_like;
                }

                return array (  '_controller' => 'Uni\\Bundle\\MarcaBundle\\Controller\\noticiasController::responderTitulolikeAction',  '_route' => 'noticias_responder_titulo_like',);
            }
            not_noticias_responder_titulo_like:

        }

        // uni_marca_homepage
        if (0 === strpos($pathinfo, '/hello') && preg_match('#^/hello/(?P<name>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'uni_marca_homepage')), array (  '_controller' => 'Uni\\Bundle\\MarcaBundle\\Controller\\DefaultController::indexAction',));
        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
