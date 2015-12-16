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
    private static $declaredRoutes = array(
        'comentarios' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Uni\\Bundle\\MarcaBundle\\Controller\\comentariosController::indexAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/comentarios/',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'comentarios_show' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'Uni\\Bundle\\MarcaBundle\\Controller\\comentariosController::showAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/show',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    2 =>     array (      0 => 'text',      1 => '/comentarios',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'comentarios_new' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Uni\\Bundle\\MarcaBundle\\Controller\\comentariosController::newAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/comentarios/new',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'comentarios_new2' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Uni\\Bundle\\MarcaBundle\\Controller\\comentariosController::newAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/comentarios/new',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'comentarios_create' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Uni\\Bundle\\MarcaBundle\\Controller\\comentariosController::createAction',  ),  2 =>   array (    '_method' => 'post',  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/comentarios/create',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'comentarios_edit' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'Uni\\Bundle\\MarcaBundle\\Controller\\comentariosController::editAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/edit',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    2 =>     array (      0 => 'text',      1 => '/comentarios',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'comentarios_update' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'Uni\\Bundle\\MarcaBundle\\Controller\\comentariosController::updateAction',  ),  2 =>   array (    '_method' => 'post|put',  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/update',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    2 =>     array (      0 => 'text',      1 => '/comentarios',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'comentarios_delete' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'Uni\\Bundle\\MarcaBundle\\Controller\\comentariosController::deleteAction',  ),  2 =>   array (    '_method' => 'post|delete',  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/delete',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    2 =>     array (      0 => 'text',      1 => '/comentarios',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'categorias' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Uni\\Bundle\\MarcaBundle\\Controller\\categoriasController::indexAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/categorias/',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'categorias_show' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'Uni\\Bundle\\MarcaBundle\\Controller\\categoriasController::showAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/show',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    2 =>     array (      0 => 'text',      1 => '/categorias',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'categorias_new' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Uni\\Bundle\\MarcaBundle\\Controller\\categoriasController::newAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/categorias/new',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'categorias_create' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Uni\\Bundle\\MarcaBundle\\Controller\\categoriasController::createAction',  ),  2 =>   array (    '_method' => 'post',  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/categorias/create',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'categorias_edit' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'Uni\\Bundle\\MarcaBundle\\Controller\\categoriasController::editAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/edit',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    2 =>     array (      0 => 'text',      1 => '/categorias',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'categorias_update' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'Uni\\Bundle\\MarcaBundle\\Controller\\categoriasController::updateAction',  ),  2 =>   array (    '_method' => 'post|put',  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/update',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    2 =>     array (      0 => 'text',      1 => '/categorias',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'categorias_delete' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'Uni\\Bundle\\MarcaBundle\\Controller\\categoriasController::deleteAction',  ),  2 =>   array (    '_method' => 'post|delete',  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/delete',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    2 =>     array (      0 => 'text',      1 => '/categorias',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'noticias' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Uni\\Bundle\\MarcaBundle\\Controller\\noticiasController::indexAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/noticias/',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'noticias_show' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'Uni\\Bundle\\MarcaBundle\\Controller\\noticiasController::showAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/show',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    2 =>     array (      0 => 'text',      1 => '/noticias',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'noticias_new' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Uni\\Bundle\\MarcaBundle\\Controller\\noticiasController::newAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/noticias/new',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'noticias_create' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Uni\\Bundle\\MarcaBundle\\Controller\\noticiasController::createAction',  ),  2 =>   array (    '_method' => 'post',  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/noticias/create',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'noticias_edit' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'Uni\\Bundle\\MarcaBundle\\Controller\\noticiasController::editAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/edit',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    2 =>     array (      0 => 'text',      1 => '/noticias',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'noticias_update' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'Uni\\Bundle\\MarcaBundle\\Controller\\noticiasController::updateAction',  ),  2 =>   array (    '_method' => 'post|put',  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/update',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    2 =>     array (      0 => 'text',      1 => '/noticias',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'noticias_delete' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'Uni\\Bundle\\MarcaBundle\\Controller\\noticiasController::deleteAction',  ),  2 =>   array (    '_method' => 'post|delete',  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/delete',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    2 =>     array (      0 => 'text',      1 => '/noticias',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'noticias_buscar_titulo' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Uni\\Bundle\\MarcaBundle\\Controller\\noticiasController::buscarTituloAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/noticias/buscartitulo',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'noticias_responder_titulo' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Uni\\Bundle\\MarcaBundle\\Controller\\noticiasController::responderTituloAction',  ),  2 =>   array (    '_method' => 'post|put',  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/noticias/respondertitulo',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'noticias_buscar_titulo_like' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Uni\\Bundle\\MarcaBundle\\Controller\\noticiasController::buscarTitulolikeAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/noticias/buscartitulolike',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'noticias_responder_titulo_like' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Uni\\Bundle\\MarcaBundle\\Controller\\noticiasController::responderTitulolikeAction',  ),  2 =>   array (    '_method' => 'post|put',  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/noticias/respondertitulolike',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'uni_marca_homepage' => array (  0 =>   array (    0 => 'name',  ),  1 =>   array (    '_controller' => 'Uni\\Bundle\\MarcaBundle\\Controller\\DefaultController::indexAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'name',    ),    1 =>     array (      0 => 'text',      1 => '/hello',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
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

        list($variables, $defaults, $requirements, $tokens, $hostTokens, $requiredSchemes) = self::$declaredRoutes[$name];

        return $this->doGenerate($variables, $defaults, $requirements, $tokens, $parameters, $name, $referenceType, $hostTokens, $requiredSchemes);
    }
}
