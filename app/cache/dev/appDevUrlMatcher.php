<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * appDevUrlMatcher
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appDevUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
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

        if (0 === strpos($pathinfo, '/_')) {
            // _wdt
            if (0 === strpos($pathinfo, '/_wdt') && preg_match('#^/_wdt/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => '_wdt')), array (  '_controller' => 'web_profiler.controller.profiler:toolbarAction',));
            }

            if (0 === strpos($pathinfo, '/_profiler')) {
                // _profiler_home
                if (rtrim($pathinfo, '/') === '/_profiler') {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', '_profiler_home');
                    }

                    return array (  '_controller' => 'web_profiler.controller.profiler:homeAction',  '_route' => '_profiler_home',);
                }

                if (0 === strpos($pathinfo, '/_profiler/search')) {
                    // _profiler_search
                    if ($pathinfo === '/_profiler/search') {
                        return array (  '_controller' => 'web_profiler.controller.profiler:searchAction',  '_route' => '_profiler_search',);
                    }

                    // _profiler_search_bar
                    if ($pathinfo === '/_profiler/search_bar') {
                        return array (  '_controller' => 'web_profiler.controller.profiler:searchBarAction',  '_route' => '_profiler_search_bar',);
                    }

                }

                // _profiler_purge
                if ($pathinfo === '/_profiler/purge') {
                    return array (  '_controller' => 'web_profiler.controller.profiler:purgeAction',  '_route' => '_profiler_purge',);
                }

                // _profiler_info
                if (0 === strpos($pathinfo, '/_profiler/info') && preg_match('#^/_profiler/info/(?P<about>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_info')), array (  '_controller' => 'web_profiler.controller.profiler:infoAction',));
                }

                // _profiler_phpinfo
                if ($pathinfo === '/_profiler/phpinfo') {
                    return array (  '_controller' => 'web_profiler.controller.profiler:phpinfoAction',  '_route' => '_profiler_phpinfo',);
                }

                // _profiler_search_results
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/search/results$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_search_results')), array (  '_controller' => 'web_profiler.controller.profiler:searchResultsAction',));
                }

                // _profiler
                if (preg_match('#^/_profiler/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler')), array (  '_controller' => 'web_profiler.controller.profiler:panelAction',));
                }

                // _profiler_router
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/router$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_router')), array (  '_controller' => 'web_profiler.controller.router:panelAction',));
                }

                // _profiler_exception
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/exception$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_exception')), array (  '_controller' => 'web_profiler.controller.exception:showAction',));
                }

                // _profiler_exception_css
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/exception\\.css$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_exception_css')), array (  '_controller' => 'web_profiler.controller.exception:cssAction',));
                }

            }

            if (0 === strpos($pathinfo, '/_configurator')) {
                // _configurator_home
                if (rtrim($pathinfo, '/') === '/_configurator') {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', '_configurator_home');
                    }

                    return array (  '_controller' => 'Sensio\\Bundle\\DistributionBundle\\Controller\\ConfiguratorController::checkAction',  '_route' => '_configurator_home',);
                }

                // _configurator_step
                if (0 === strpos($pathinfo, '/_configurator/step') && preg_match('#^/_configurator/step/(?P<index>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_configurator_step')), array (  '_controller' => 'Sensio\\Bundle\\DistributionBundle\\Controller\\ConfiguratorController::stepAction',));
                }

                // _configurator_final
                if ($pathinfo === '/_configurator/final') {
                    return array (  '_controller' => 'Sensio\\Bundle\\DistributionBundle\\Controller\\ConfiguratorController::finalAction',  '_route' => '_configurator_final',);
                }

            }

            // _twig_error_test
            if (0 === strpos($pathinfo, '/_error') && preg_match('#^/_error/(?P<code>\\d+)(?:\\.(?P<_format>[^/]++))?$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => '_twig_error_test')), array (  '_controller' => 'twig.controller.preview_error:previewErrorPageAction',  '_format' => 'html',));
            }

        }

        // homepage
        if (rtrim($pathinfo, '/') === '') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'homepage');
            }

            return array (  '_controller' => 'protecno\\adminBundle\\Controller\\DefaultController::indexAction',  '_route' => 'homepage',);
        }

        // producto
        if (0 === strpos($pathinfo, '/producto') && preg_match('#^/producto/(?P<id>[^/]++)/(?P<name>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'producto')), array (  '_controller' => 'protecno\\adminBundle\\Controller\\DefaultController::productoAction',));
        }

        // categoria
        if (0 === strpos($pathinfo, '/categoria') && preg_match('#^/categoria/(?P<id>[^/]++)/(?P<name>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'categoria')), array (  '_controller' => 'protecno\\adminBundle\\Controller\\DefaultController::categoriaAction',));
        }

        // buscar_rango
        if ($pathinfo === '/buscar/rango') {
            if ($this->context->getMethod() != 'POST') {
                $allow[] = 'POST';
                goto not_buscar_rango;
            }

            return array (  '_controller' => 'protecno\\adminBundle\\Controller\\DefaultController::rangoAction',  '_route' => 'buscar_rango',);
        }
        not_buscar_rango:

        // marca
        if (0 === strpos($pathinfo, '/marca') && preg_match('#^/marca/(?P<id>[^/]++)/(?P<name>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'marca')), array (  '_controller' => 'protecno\\adminBundle\\Controller\\DefaultController::marcaAction',));
        }

        // interior
        if (0 === strpos($pathinfo, '/interior') && preg_match('#^/interior/(?P<id>[^/]++)/(?P<nombre>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'interior')), array (  '_controller' => 'protecno\\adminBundle\\Controller\\DefaultController::interiorAction',));
        }

        // tips
        if ($pathinfo === '/tips') {
            return array (  '_controller' => 'protecno\\adminBundle\\Controller\\DefaultController::tipsAction',  '_route' => 'tips',);
        }

        // descargas
        if ($pathinfo === '/descargas') {
            return array (  '_controller' => 'protecno\\adminBundle\\Controller\\DefaultController::descargasAction',  '_route' => 'descargas',);
        }

        // contacto
        if ($pathinfo === '/contacto') {
            return array (  '_controller' => 'protecno\\adminBundle\\Controller\\DefaultController::contactoAction',  '_route' => 'contacto',);
        }

        // imagen
        if ($pathinfo === '/imagen') {
            return array (  '_controller' => 'protecno\\adminBundle\\Controller\\DefaultController::imagenAction',  '_route' => 'imagen',);
        }

        // guardarnews
        if ($pathinfo === '/guardarnews') {
            return array (  '_controller' => 'protecno\\adminBundle\\Controller\\DefaultController::guardarnewsAction',  '_route' => 'guardarnews',);
        }

        // contact
        if ($pathinfo === '/contact') {
            return array (  '_controller' => 'protecno\\adminBundle\\Controller\\DefaultController::contactAction',  '_route' => 'contact',);
        }

        if (0 === strpos($pathinfo, '/admin')) {
            if (0 === strpos($pathinfo, '/administrar/send')) {
                // campana_send
                if ($pathinfo === '/administrar/send') {
                    return array (  '_controller' => 'protecno\\adminBundle\\Controller\\DefaultController::sendAction',  '_route' => 'campana_send',);
                }

                // campana_sendajax
                if ($pathinfo === '/administrar/sendajax') {
                    return array (  '_controller' => 'protecno\\adminBundle\\Controller\\DefaultController::sendajaxAction',  '_route' => 'campana_sendajax',);
                }

            }

            if (0 === strpos($pathinfo, '/admin/auto')) {
                // admin_auto
                if (rtrim($pathinfo, '/') === '/admin/auto') {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_admin_auto;
                    }

                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'admin_auto');
                    }

                    return array (  '_controller' => 'protecno\\adminBundle\\Controller\\autoController::indexAction',  '_route' => 'admin_auto',);
                }
                not_admin_auto:

                // admin_auto_create
                if ($pathinfo === '/admin/auto/') {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_admin_auto_create;
                    }

                    return array (  '_controller' => 'protecno\\adminBundle\\Controller\\autoController::createAction',  '_route' => 'admin_auto_create',);
                }
                not_admin_auto_create:

                // admin_auto_new
                if ($pathinfo === '/admin/auto/new') {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_admin_auto_new;
                    }

                    return array (  '_controller' => 'protecno\\adminBundle\\Controller\\autoController::newAction',  '_route' => 'admin_auto_new',);
                }
                not_admin_auto_new:

                // admin_auto_show
                if (preg_match('#^/admin/auto/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_admin_auto_show;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_auto_show')), array (  '_controller' => 'protecno\\adminBundle\\Controller\\autoController::showAction',));
                }
                not_admin_auto_show:

                // admin_auto_edit
                if (preg_match('#^/admin/auto/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_admin_auto_edit;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_auto_edit')), array (  '_controller' => 'protecno\\adminBundle\\Controller\\autoController::editAction',));
                }
                not_admin_auto_edit:

                // admin_auto_update
                if (preg_match('#^/admin/auto/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'PUT') {
                        $allow[] = 'PUT';
                        goto not_admin_auto_update;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_auto_update')), array (  '_controller' => 'protecno\\adminBundle\\Controller\\autoController::updateAction',));
                }
                not_admin_auto_update:

                // admin_auto_delete
                if (preg_match('#^/admin/auto/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'DELETE') {
                        $allow[] = 'DELETE';
                        goto not_admin_auto_delete;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_auto_delete')), array (  '_controller' => 'protecno\\adminBundle\\Controller\\autoController::deleteAction',));
                }
                not_admin_auto_delete:

                // admin_slider_delete_auto
                if ($pathinfo === '/admin/auto/delete/imagen') {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_admin_slider_delete_auto;
                    }

                    return array (  '_controller' => 'protecno\\adminBundle\\Controller\\autoController::deleteautoAction',  '_route' => 'admin_slider_delete_auto',);
                }
                not_admin_slider_delete_auto:

            }

            if (0 === strpos($pathinfo, '/admin/c')) {
                if (0 === strpos($pathinfo, '/admin/categorias')) {
                    // admin_categorias
                    if (rtrim($pathinfo, '/') === '/admin/categorias') {
                        if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                            $allow = array_merge($allow, array('GET', 'HEAD'));
                            goto not_admin_categorias;
                        }

                        if (substr($pathinfo, -1) !== '/') {
                            return $this->redirect($pathinfo.'/', 'admin_categorias');
                        }

                        return array (  '_controller' => 'protecno\\adminBundle\\Controller\\categoriasController::indexAction',  '_route' => 'admin_categorias',);
                    }
                    not_admin_categorias:

                    // admin_categorias_create
                    if ($pathinfo === '/admin/categorias/') {
                        if ($this->context->getMethod() != 'POST') {
                            $allow[] = 'POST';
                            goto not_admin_categorias_create;
                        }

                        return array (  '_controller' => 'protecno\\adminBundle\\Controller\\categoriasController::createAction',  '_route' => 'admin_categorias_create',);
                    }
                    not_admin_categorias_create:

                    // admin_categorias_new
                    if ($pathinfo === '/admin/categorias/new') {
                        if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                            $allow = array_merge($allow, array('GET', 'HEAD'));
                            goto not_admin_categorias_new;
                        }

                        return array (  '_controller' => 'protecno\\adminBundle\\Controller\\categoriasController::newAction',  '_route' => 'admin_categorias_new',);
                    }
                    not_admin_categorias_new:

                    // admin_categorias_show
                    if (preg_match('#^/admin/categorias/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                        if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                            $allow = array_merge($allow, array('GET', 'HEAD'));
                            goto not_admin_categorias_show;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_categorias_show')), array (  '_controller' => 'protecno\\adminBundle\\Controller\\categoriasController::showAction',));
                    }
                    not_admin_categorias_show:

                    // admin_categorias_edit
                    if (preg_match('#^/admin/categorias/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                        if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                            $allow = array_merge($allow, array('GET', 'HEAD'));
                            goto not_admin_categorias_edit;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_categorias_edit')), array (  '_controller' => 'protecno\\adminBundle\\Controller\\categoriasController::editAction',));
                    }
                    not_admin_categorias_edit:

                    // admin_categorias_update
                    if (preg_match('#^/admin/categorias/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                        if ($this->context->getMethod() != 'PUT') {
                            $allow[] = 'PUT';
                            goto not_admin_categorias_update;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_categorias_update')), array (  '_controller' => 'protecno\\adminBundle\\Controller\\categoriasController::updateAction',));
                    }
                    not_admin_categorias_update:

                    // admin_categorias_delete
                    if (preg_match('#^/admin/categorias/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                        if ($this->context->getMethod() != 'DELETE') {
                            $allow[] = 'DELETE';
                            goto not_admin_categorias_delete;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_categorias_delete')), array (  '_controller' => 'protecno\\adminBundle\\Controller\\categoriasController::deleteAction',));
                    }
                    not_admin_categorias_delete:

                }

                if (0 === strpos($pathinfo, '/admin/con')) {
                    if (0 === strpos($pathinfo, '/admin/configuracion')) {
                        // admin_configuracion
                        if (rtrim($pathinfo, '/') === '/admin/configuracion') {
                            if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                                $allow = array_merge($allow, array('GET', 'HEAD'));
                                goto not_admin_configuracion;
                            }

                            if (substr($pathinfo, -1) !== '/') {
                                return $this->redirect($pathinfo.'/', 'admin_configuracion');
                            }

                            return array (  '_controller' => 'protecno\\adminBundle\\Controller\\configuracionController::indexAction',  '_route' => 'admin_configuracion',);
                        }
                        not_admin_configuracion:

                        // admin_configuracion_create
                        if ($pathinfo === '/admin/configuracion/') {
                            if ($this->context->getMethod() != 'POST') {
                                $allow[] = 'POST';
                                goto not_admin_configuracion_create;
                            }

                            return array (  '_controller' => 'protecno\\adminBundle\\Controller\\configuracionController::createAction',  '_route' => 'admin_configuracion_create',);
                        }
                        not_admin_configuracion_create:

                        // admin_configuracion_new
                        if ($pathinfo === '/admin/configuracion/new') {
                            if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                                $allow = array_merge($allow, array('GET', 'HEAD'));
                                goto not_admin_configuracion_new;
                            }

                            return array (  '_controller' => 'protecno\\adminBundle\\Controller\\configuracionController::newAction',  '_route' => 'admin_configuracion_new',);
                        }
                        not_admin_configuracion_new:

                        // admin_configuracion_show
                        if (preg_match('#^/admin/configuracion/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                            if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                                $allow = array_merge($allow, array('GET', 'HEAD'));
                                goto not_admin_configuracion_show;
                            }

                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_configuracion_show')), array (  '_controller' => 'protecno\\adminBundle\\Controller\\configuracionController::showAction',));
                        }
                        not_admin_configuracion_show:

                        // admin_configuracion_edit
                        if (preg_match('#^/admin/configuracion/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                            if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                                $allow = array_merge($allow, array('GET', 'HEAD'));
                                goto not_admin_configuracion_edit;
                            }

                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_configuracion_edit')), array (  '_controller' => 'protecno\\adminBundle\\Controller\\configuracionController::editAction',));
                        }
                        not_admin_configuracion_edit:

                        // admin_configuracion_update
                        if (preg_match('#^/admin/configuracion/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                            if ($this->context->getMethod() != 'PUT') {
                                $allow[] = 'PUT';
                                goto not_admin_configuracion_update;
                            }

                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_configuracion_update')), array (  '_controller' => 'protecno\\adminBundle\\Controller\\configuracionController::updateAction',));
                        }
                        not_admin_configuracion_update:

                        // admin_configuracion_delete
                        if (preg_match('#^/admin/configuracion/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                            if ($this->context->getMethod() != 'DELETE') {
                                $allow[] = 'DELETE';
                                goto not_admin_configuracion_delete;
                            }

                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_configuracion_delete')), array (  '_controller' => 'protecno\\adminBundle\\Controller\\configuracionController::deleteAction',));
                        }
                        not_admin_configuracion_delete:

                    }

                    if (0 === strpos($pathinfo, '/admin/contacto')) {
                        // admin_contacto
                        if (rtrim($pathinfo, '/') === '/admin/contacto') {
                            if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                                $allow = array_merge($allow, array('GET', 'HEAD'));
                                goto not_admin_contacto;
                            }

                            if (substr($pathinfo, -1) !== '/') {
                                return $this->redirect($pathinfo.'/', 'admin_contacto');
                            }

                            return array (  '_controller' => 'protecno\\adminBundle\\Controller\\contactoController::indexAction',  '_route' => 'admin_contacto',);
                        }
                        not_admin_contacto:

                        // admin_contacto_create
                        if ($pathinfo === '/admin/contacto/') {
                            if ($this->context->getMethod() != 'POST') {
                                $allow[] = 'POST';
                                goto not_admin_contacto_create;
                            }

                            return array (  '_controller' => 'protecno\\adminBundle\\Controller\\contactoController::createAction',  '_route' => 'admin_contacto_create',);
                        }
                        not_admin_contacto_create:

                        // admin_contacto_new
                        if ($pathinfo === '/admin/contacto/new') {
                            if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                                $allow = array_merge($allow, array('GET', 'HEAD'));
                                goto not_admin_contacto_new;
                            }

                            return array (  '_controller' => 'protecno\\adminBundle\\Controller\\contactoController::newAction',  '_route' => 'admin_contacto_new',);
                        }
                        not_admin_contacto_new:

                        // admin_contacto_show
                        if (preg_match('#^/admin/contacto/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                            if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                                $allow = array_merge($allow, array('GET', 'HEAD'));
                                goto not_admin_contacto_show;
                            }

                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_contacto_show')), array (  '_controller' => 'protecno\\adminBundle\\Controller\\contactoController::showAction',));
                        }
                        not_admin_contacto_show:

                        // admin_contacto_edit
                        if (preg_match('#^/admin/contacto/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                            if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                                $allow = array_merge($allow, array('GET', 'HEAD'));
                                goto not_admin_contacto_edit;
                            }

                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_contacto_edit')), array (  '_controller' => 'protecno\\adminBundle\\Controller\\contactoController::editAction',));
                        }
                        not_admin_contacto_edit:

                        // admin_contacto_update
                        if (preg_match('#^/admin/contacto/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                            if ($this->context->getMethod() != 'PUT') {
                                $allow[] = 'PUT';
                                goto not_admin_contacto_update;
                            }

                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_contacto_update')), array (  '_controller' => 'protecno\\adminBundle\\Controller\\contactoController::updateAction',));
                        }
                        not_admin_contacto_update:

                        // admin_contacto_delete
                        if (preg_match('#^/admin/contacto/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                            if ($this->context->getMethod() != 'DELETE') {
                                $allow[] = 'DELETE';
                                goto not_admin_contacto_delete;
                            }

                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_contacto_delete')), array (  '_controller' => 'protecno\\adminBundle\\Controller\\contactoController::deleteAction',));
                        }
                        not_admin_contacto_delete:

                    }

                }

            }

            if (0 === strpos($pathinfo, '/admin/descargas')) {
                // admin_descargas
                if (rtrim($pathinfo, '/') === '/admin/descargas') {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_admin_descargas;
                    }

                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'admin_descargas');
                    }

                    return array (  '_controller' => 'protecno\\adminBundle\\Controller\\descargasController::indexAction',  '_route' => 'admin_descargas',);
                }
                not_admin_descargas:

                // admin_descargas_create
                if ($pathinfo === '/admin/descargas/') {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_admin_descargas_create;
                    }

                    return array (  '_controller' => 'protecno\\adminBundle\\Controller\\descargasController::createAction',  '_route' => 'admin_descargas_create',);
                }
                not_admin_descargas_create:

                // admin_descargas_new
                if ($pathinfo === '/admin/descargas/new') {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_admin_descargas_new;
                    }

                    return array (  '_controller' => 'protecno\\adminBundle\\Controller\\descargasController::newAction',  '_route' => 'admin_descargas_new',);
                }
                not_admin_descargas_new:

                // admin_descargas_show
                if (preg_match('#^/admin/descargas/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_admin_descargas_show;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_descargas_show')), array (  '_controller' => 'protecno\\adminBundle\\Controller\\descargasController::showAction',));
                }
                not_admin_descargas_show:

                // admin_descargas_edit
                if (preg_match('#^/admin/descargas/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_admin_descargas_edit;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_descargas_edit')), array (  '_controller' => 'protecno\\adminBundle\\Controller\\descargasController::editAction',));
                }
                not_admin_descargas_edit:

                // admin_descargas_update
                if (preg_match('#^/admin/descargas/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'PUT') {
                        $allow[] = 'PUT';
                        goto not_admin_descargas_update;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_descargas_update')), array (  '_controller' => 'protecno\\adminBundle\\Controller\\descargasController::updateAction',));
                }
                not_admin_descargas_update:

                // admin_descargas_delete
                if (preg_match('#^/admin/descargas/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'DELETE') {
                        $allow[] = 'DELETE';
                        goto not_admin_descargas_delete;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_descargas_delete')), array (  '_controller' => 'protecno\\adminBundle\\Controller\\descargasController::deleteAction',));
                }
                not_admin_descargas_delete:

            }

            if (0 === strpos($pathinfo, '/admin/etiquetas')) {
                // admin_etiquetas
                if (rtrim($pathinfo, '/') === '/admin/etiquetas') {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_admin_etiquetas;
                    }

                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'admin_etiquetas');
                    }

                    return array (  '_controller' => 'protecno\\adminBundle\\Controller\\etiquetasDescargaController::indexAction',  '_route' => 'admin_etiquetas',);
                }
                not_admin_etiquetas:

                // admin_etiquetas_create
                if ($pathinfo === '/admin/etiquetas/') {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_admin_etiquetas_create;
                    }

                    return array (  '_controller' => 'protecno\\adminBundle\\Controller\\etiquetasDescargaController::createAction',  '_route' => 'admin_etiquetas_create',);
                }
                not_admin_etiquetas_create:

                // admin_etiquetas_new
                if ($pathinfo === '/admin/etiquetas/new') {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_admin_etiquetas_new;
                    }

                    return array (  '_controller' => 'protecno\\adminBundle\\Controller\\etiquetasDescargaController::newAction',  '_route' => 'admin_etiquetas_new',);
                }
                not_admin_etiquetas_new:

                // admin_etiquetas_show
                if (preg_match('#^/admin/etiquetas/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_admin_etiquetas_show;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_etiquetas_show')), array (  '_controller' => 'protecno\\adminBundle\\Controller\\etiquetasDescargaController::showAction',));
                }
                not_admin_etiquetas_show:

                // admin_etiquetas_edit
                if (preg_match('#^/admin/etiquetas/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_admin_etiquetas_edit;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_etiquetas_edit')), array (  '_controller' => 'protecno\\adminBundle\\Controller\\etiquetasDescargaController::editAction',));
                }
                not_admin_etiquetas_edit:

                // admin_etiquetas_update
                if (preg_match('#^/admin/etiquetas/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'PUT') {
                        $allow[] = 'PUT';
                        goto not_admin_etiquetas_update;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_etiquetas_update')), array (  '_controller' => 'protecno\\adminBundle\\Controller\\etiquetasDescargaController::updateAction',));
                }
                not_admin_etiquetas_update:

                // admin_etiquetas_delete
                if (preg_match('#^/admin/etiquetas/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'DELETE') {
                        $allow[] = 'DELETE';
                        goto not_admin_etiquetas_delete;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_etiquetas_delete')), array (  '_controller' => 'protecno\\adminBundle\\Controller\\etiquetasDescargaController::deleteAction',));
                }
                not_admin_etiquetas_delete:

            }

            if (0 === strpos($pathinfo, '/admin/galeria')) {
                // admin_galeria
                if (rtrim($pathinfo, '/') === '/admin/galeria') {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_admin_galeria;
                    }

                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'admin_galeria');
                    }

                    return array (  '_controller' => 'protecno\\adminBundle\\Controller\\galeriaController::indexAction',  '_route' => 'admin_galeria',);
                }
                not_admin_galeria:

                // admin_galeria_create
                if ($pathinfo === '/admin/galeria/') {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_admin_galeria_create;
                    }

                    return array (  '_controller' => 'protecno\\adminBundle\\Controller\\galeriaController::createAction',  '_route' => 'admin_galeria_create',);
                }
                not_admin_galeria_create:

                // admin_galeria_new
                if ($pathinfo === '/admin/galeria/new') {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_admin_galeria_new;
                    }

                    return array (  '_controller' => 'protecno\\adminBundle\\Controller\\galeriaController::newAction',  '_route' => 'admin_galeria_new',);
                }
                not_admin_galeria_new:

                // admin_galeria_show
                if (preg_match('#^/admin/galeria/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_admin_galeria_show;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_galeria_show')), array (  '_controller' => 'protecno\\adminBundle\\Controller\\galeriaController::showAction',));
                }
                not_admin_galeria_show:

                // admin_galeria_edit
                if (preg_match('#^/admin/galeria/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_admin_galeria_edit;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_galeria_edit')), array (  '_controller' => 'protecno\\adminBundle\\Controller\\galeriaController::editAction',));
                }
                not_admin_galeria_edit:

                // admin_galeria_update
                if (preg_match('#^/admin/galeria/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'PUT') {
                        $allow[] = 'PUT';
                        goto not_admin_galeria_update;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_galeria_update')), array (  '_controller' => 'protecno\\adminBundle\\Controller\\galeriaController::updateAction',));
                }
                not_admin_galeria_update:

                // admin_galeria_delete
                if (preg_match('#^/admin/galeria/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'DELETE') {
                        $allow[] = 'DELETE';
                        goto not_admin_galeria_delete;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_galeria_delete')), array (  '_controller' => 'protecno\\adminBundle\\Controller\\galeriaController::deleteAction',));
                }
                not_admin_galeria_delete:

            }

            if (0 === strpos($pathinfo, '/admin/logo')) {
                // admin_logo
                if (rtrim($pathinfo, '/') === '/admin/logo') {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_admin_logo;
                    }

                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'admin_logo');
                    }

                    return array (  '_controller' => 'protecno\\adminBundle\\Controller\\logoController::indexAction',  '_route' => 'admin_logo',);
                }
                not_admin_logo:

                // admin_logo_create
                if ($pathinfo === '/admin/logo/') {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_admin_logo_create;
                    }

                    return array (  '_controller' => 'protecno\\adminBundle\\Controller\\logoController::createAction',  '_route' => 'admin_logo_create',);
                }
                not_admin_logo_create:

                // admin_logo_new
                if ($pathinfo === '/admin/logo/new') {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_admin_logo_new;
                    }

                    return array (  '_controller' => 'protecno\\adminBundle\\Controller\\logoController::newAction',  '_route' => 'admin_logo_new',);
                }
                not_admin_logo_new:

                // admin_logo_show
                if (preg_match('#^/admin/logo/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_admin_logo_show;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_logo_show')), array (  '_controller' => 'protecno\\adminBundle\\Controller\\logoController::showAction',));
                }
                not_admin_logo_show:

                // admin_logo_edit
                if (preg_match('#^/admin/logo/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_admin_logo_edit;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_logo_edit')), array (  '_controller' => 'protecno\\adminBundle\\Controller\\logoController::editAction',));
                }
                not_admin_logo_edit:

                // admin_logo_update
                if (preg_match('#^/admin/logo/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'PUT') {
                        $allow[] = 'PUT';
                        goto not_admin_logo_update;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_logo_update')), array (  '_controller' => 'protecno\\adminBundle\\Controller\\logoController::updateAction',));
                }
                not_admin_logo_update:

                // admin_logo_delete
                if (preg_match('#^/admin/logo/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'DELETE') {
                        $allow[] = 'DELETE';
                        goto not_admin_logo_delete;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_logo_delete')), array (  '_controller' => 'protecno\\adminBundle\\Controller\\logoController::deleteAction',));
                }
                not_admin_logo_delete:

            }

            if (0 === strpos($pathinfo, '/admin/m')) {
                if (0 === strpos($pathinfo, '/admin/marca')) {
                    // admin_marca
                    if (rtrim($pathinfo, '/') === '/admin/marca') {
                        if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                            $allow = array_merge($allow, array('GET', 'HEAD'));
                            goto not_admin_marca;
                        }

                        if (substr($pathinfo, -1) !== '/') {
                            return $this->redirect($pathinfo.'/', 'admin_marca');
                        }

                        return array (  '_controller' => 'protecno\\adminBundle\\Controller\\marcaController::indexAction',  '_route' => 'admin_marca',);
                    }
                    not_admin_marca:

                    // admin_marca_create
                    if ($pathinfo === '/admin/marca/') {
                        if ($this->context->getMethod() != 'POST') {
                            $allow[] = 'POST';
                            goto not_admin_marca_create;
                        }

                        return array (  '_controller' => 'protecno\\adminBundle\\Controller\\marcaController::createAction',  '_route' => 'admin_marca_create',);
                    }
                    not_admin_marca_create:

                    // admin_marca_new
                    if ($pathinfo === '/admin/marca/new') {
                        if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                            $allow = array_merge($allow, array('GET', 'HEAD'));
                            goto not_admin_marca_new;
                        }

                        return array (  '_controller' => 'protecno\\adminBundle\\Controller\\marcaController::newAction',  '_route' => 'admin_marca_new',);
                    }
                    not_admin_marca_new:

                    // admin_marca_show
                    if (preg_match('#^/admin/marca/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                        if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                            $allow = array_merge($allow, array('GET', 'HEAD'));
                            goto not_admin_marca_show;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_marca_show')), array (  '_controller' => 'protecno\\adminBundle\\Controller\\marcaController::showAction',));
                    }
                    not_admin_marca_show:

                    // admin_marca_edit
                    if (preg_match('#^/admin/marca/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                        if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                            $allow = array_merge($allow, array('GET', 'HEAD'));
                            goto not_admin_marca_edit;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_marca_edit')), array (  '_controller' => 'protecno\\adminBundle\\Controller\\marcaController::editAction',));
                    }
                    not_admin_marca_edit:

                    // admin_marca_update
                    if (preg_match('#^/admin/marca/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                        if ($this->context->getMethod() != 'PUT') {
                            $allow[] = 'PUT';
                            goto not_admin_marca_update;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_marca_update')), array (  '_controller' => 'protecno\\adminBundle\\Controller\\marcaController::updateAction',));
                    }
                    not_admin_marca_update:

                    // admin_marca_delete
                    if (preg_match('#^/admin/marca/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                        if ($this->context->getMethod() != 'DELETE') {
                            $allow[] = 'DELETE';
                            goto not_admin_marca_delete;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_marca_delete')), array (  '_controller' => 'protecno\\adminBundle\\Controller\\marcaController::deleteAction',));
                    }
                    not_admin_marca_delete:

                }

                if (0 === strpos($pathinfo, '/admin/modelo')) {
                    // admin_modelo
                    if (rtrim($pathinfo, '/') === '/admin/modelo') {
                        if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                            $allow = array_merge($allow, array('GET', 'HEAD'));
                            goto not_admin_modelo;
                        }

                        if (substr($pathinfo, -1) !== '/') {
                            return $this->redirect($pathinfo.'/', 'admin_modelo');
                        }

                        return array (  '_controller' => 'protecno\\adminBundle\\Controller\\modeloController::indexAction',  '_route' => 'admin_modelo',);
                    }
                    not_admin_modelo:

                    // admin_modelo_create
                    if ($pathinfo === '/admin/modelo/') {
                        if ($this->context->getMethod() != 'POST') {
                            $allow[] = 'POST';
                            goto not_admin_modelo_create;
                        }

                        return array (  '_controller' => 'protecno\\adminBundle\\Controller\\modeloController::createAction',  '_route' => 'admin_modelo_create',);
                    }
                    not_admin_modelo_create:

                    // admin_modelo_new
                    if ($pathinfo === '/admin/modelo/new') {
                        if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                            $allow = array_merge($allow, array('GET', 'HEAD'));
                            goto not_admin_modelo_new;
                        }

                        return array (  '_controller' => 'protecno\\adminBundle\\Controller\\modeloController::newAction',  '_route' => 'admin_modelo_new',);
                    }
                    not_admin_modelo_new:

                    // admin_modelo_show
                    if (preg_match('#^/admin/modelo/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                        if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                            $allow = array_merge($allow, array('GET', 'HEAD'));
                            goto not_admin_modelo_show;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_modelo_show')), array (  '_controller' => 'protecno\\adminBundle\\Controller\\modeloController::showAction',));
                    }
                    not_admin_modelo_show:

                    // admin_modelo_edit
                    if (preg_match('#^/admin/modelo/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                        if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                            $allow = array_merge($allow, array('GET', 'HEAD'));
                            goto not_admin_modelo_edit;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_modelo_edit')), array (  '_controller' => 'protecno\\adminBundle\\Controller\\modeloController::editAction',));
                    }
                    not_admin_modelo_edit:

                    // admin_modelo_update
                    if (preg_match('#^/admin/modelo/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                        if ($this->context->getMethod() != 'PUT') {
                            $allow[] = 'PUT';
                            goto not_admin_modelo_update;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_modelo_update')), array (  '_controller' => 'protecno\\adminBundle\\Controller\\modeloController::updateAction',));
                    }
                    not_admin_modelo_update:

                    // admin_modelo_delete
                    if (preg_match('#^/admin/modelo/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                        if ($this->context->getMethod() != 'DELETE') {
                            $allow[] = 'DELETE';
                            goto not_admin_modelo_delete;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_modelo_delete')), array (  '_controller' => 'protecno\\adminBundle\\Controller\\modeloController::deleteAction',));
                    }
                    not_admin_modelo_delete:

                }

            }

            if (0 === strpos($pathinfo, '/admin/newsletter')) {
                // admin_newsletter
                if (rtrim($pathinfo, '/') === '/admin/newsletter') {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_admin_newsletter;
                    }

                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'admin_newsletter');
                    }

                    return array (  '_controller' => 'protecno\\adminBundle\\Controller\\newsletterController::indexAction',  '_route' => 'admin_newsletter',);
                }
                not_admin_newsletter:

                // admin_newsletter_create
                if ($pathinfo === '/admin/newsletter/') {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_admin_newsletter_create;
                    }

                    return array (  '_controller' => 'protecno\\adminBundle\\Controller\\newsletterController::createAction',  '_route' => 'admin_newsletter_create',);
                }
                not_admin_newsletter_create:

                // admin_newsletter_new
                if ($pathinfo === '/admin/newsletter/new') {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_admin_newsletter_new;
                    }

                    return array (  '_controller' => 'protecno\\adminBundle\\Controller\\newsletterController::newAction',  '_route' => 'admin_newsletter_new',);
                }
                not_admin_newsletter_new:

                // admin_newsletter_show
                if (preg_match('#^/admin/newsletter/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_admin_newsletter_show;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_newsletter_show')), array (  '_controller' => 'protecno\\adminBundle\\Controller\\newsletterController::showAction',));
                }
                not_admin_newsletter_show:

                // admin_newsletter_edit
                if (preg_match('#^/admin/newsletter/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_admin_newsletter_edit;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_newsletter_edit')), array (  '_controller' => 'protecno\\adminBundle\\Controller\\newsletterController::editAction',));
                }
                not_admin_newsletter_edit:

                // admin_newsletter_update
                if (preg_match('#^/admin/newsletter/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'PUT') {
                        $allow[] = 'PUT';
                        goto not_admin_newsletter_update;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_newsletter_update')), array (  '_controller' => 'protecno\\adminBundle\\Controller\\newsletterController::updateAction',));
                }
                not_admin_newsletter_update:

                // admin_newsletter_delete
                if (preg_match('#^/admin/newsletter/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'DELETE') {
                        $allow[] = 'DELETE';
                        goto not_admin_newsletter_delete;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_newsletter_delete')), array (  '_controller' => 'protecno\\adminBundle\\Controller\\newsletterController::deleteAction',));
                }
                not_admin_newsletter_delete:

            }

            if (0 === strpos($pathinfo, '/admin/pagina')) {
                // admin_pagina
                if (rtrim($pathinfo, '/') === '/admin/pagina') {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_admin_pagina;
                    }

                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'admin_pagina');
                    }

                    return array (  '_controller' => 'protecno\\adminBundle\\Controller\\paginaController::indexAction',  '_route' => 'admin_pagina',);
                }
                not_admin_pagina:

                // admin_pagina_create
                if ($pathinfo === '/admin/pagina/') {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_admin_pagina_create;
                    }

                    return array (  '_controller' => 'protecno\\adminBundle\\Controller\\paginaController::createAction',  '_route' => 'admin_pagina_create',);
                }
                not_admin_pagina_create:

                // admin_pagina_new
                if ($pathinfo === '/admin/pagina/new') {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_admin_pagina_new;
                    }

                    return array (  '_controller' => 'protecno\\adminBundle\\Controller\\paginaController::newAction',  '_route' => 'admin_pagina_new',);
                }
                not_admin_pagina_new:

                // admin_pagina_show
                if (preg_match('#^/admin/pagina/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_admin_pagina_show;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_pagina_show')), array (  '_controller' => 'protecno\\adminBundle\\Controller\\paginaController::showAction',));
                }
                not_admin_pagina_show:

                // admin_pagina_edit
                if (preg_match('#^/admin/pagina/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_admin_pagina_edit;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_pagina_edit')), array (  '_controller' => 'protecno\\adminBundle\\Controller\\paginaController::editAction',));
                }
                not_admin_pagina_edit:

                // admin_pagina_update
                if (preg_match('#^/admin/pagina/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'PUT') {
                        $allow[] = 'PUT';
                        goto not_admin_pagina_update;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_pagina_update')), array (  '_controller' => 'protecno\\adminBundle\\Controller\\paginaController::updateAction',));
                }
                not_admin_pagina_update:

                // admin_pagina_delete
                if (preg_match('#^/admin/pagina/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'DELETE') {
                        $allow[] = 'DELETE';
                        goto not_admin_pagina_delete;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_pagina_delete')), array (  '_controller' => 'protecno\\adminBundle\\Controller\\paginaController::deleteAction',));
                }
                not_admin_pagina_delete:

            }

            if (0 === strpos($pathinfo, '/admin/slider')) {
                // admin_slider
                if (rtrim($pathinfo, '/') === '/admin/slider') {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_admin_slider;
                    }

                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'admin_slider');
                    }

                    return array (  '_controller' => 'protecno\\adminBundle\\Controller\\sliderController::indexAction',  '_route' => 'admin_slider',);
                }
                not_admin_slider:

                // admin_slider_create
                if ($pathinfo === '/admin/slider/') {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_admin_slider_create;
                    }

                    return array (  '_controller' => 'protecno\\adminBundle\\Controller\\sliderController::createAction',  '_route' => 'admin_slider_create',);
                }
                not_admin_slider_create:

                // admin_slider_new
                if ($pathinfo === '/admin/slider/new') {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_admin_slider_new;
                    }

                    return array (  '_controller' => 'protecno\\adminBundle\\Controller\\sliderController::newAction',  '_route' => 'admin_slider_new',);
                }
                not_admin_slider_new:

                // admin_slider_show
                if (preg_match('#^/admin/slider/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_admin_slider_show;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_slider_show')), array (  '_controller' => 'protecno\\adminBundle\\Controller\\sliderController::showAction',));
                }
                not_admin_slider_show:

                // admin_slider_edit
                if (preg_match('#^/admin/slider/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_admin_slider_edit;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_slider_edit')), array (  '_controller' => 'protecno\\adminBundle\\Controller\\sliderController::editAction',));
                }
                not_admin_slider_edit:

                // admin_slider_update
                if (preg_match('#^/admin/slider/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'PUT') {
                        $allow[] = 'PUT';
                        goto not_admin_slider_update;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_slider_update')), array (  '_controller' => 'protecno\\adminBundle\\Controller\\sliderController::updateAction',));
                }
                not_admin_slider_update:

                // admin_slider_delete
                if ($pathinfo === '/admin/slider/delete') {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_admin_slider_delete;
                    }

                    return array (  '_controller' => 'protecno\\adminBundle\\Controller\\sliderController::deleteAction',  '_route' => 'admin_slider_delete',);
                }
                not_admin_slider_delete:

            }

            if (0 === strpos($pathinfo, '/admin/tips')) {
                // admin_tips
                if (rtrim($pathinfo, '/') === '/admin/tips') {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_admin_tips;
                    }

                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'admin_tips');
                    }

                    return array (  '_controller' => 'protecno\\adminBundle\\Controller\\tipsController::indexAction',  '_route' => 'admin_tips',);
                }
                not_admin_tips:

                // admin_tips_create
                if ($pathinfo === '/admin/tips/') {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_admin_tips_create;
                    }

                    return array (  '_controller' => 'protecno\\adminBundle\\Controller\\tipsController::createAction',  '_route' => 'admin_tips_create',);
                }
                not_admin_tips_create:

                // admin_tips_new
                if ($pathinfo === '/admin/tips/new') {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_admin_tips_new;
                    }

                    return array (  '_controller' => 'protecno\\adminBundle\\Controller\\tipsController::newAction',  '_route' => 'admin_tips_new',);
                }
                not_admin_tips_new:

                // admin_tips_show
                if (preg_match('#^/admin/tips/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_admin_tips_show;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_tips_show')), array (  '_controller' => 'protecno\\adminBundle\\Controller\\tipsController::showAction',));
                }
                not_admin_tips_show:

                // admin_tips_edit
                if (preg_match('#^/admin/tips/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_admin_tips_edit;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_tips_edit')), array (  '_controller' => 'protecno\\adminBundle\\Controller\\tipsController::editAction',));
                }
                not_admin_tips_edit:

                // admin_tips_update
                if (preg_match('#^/admin/tips/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'PUT') {
                        $allow[] = 'PUT';
                        goto not_admin_tips_update;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_tips_update')), array (  '_controller' => 'protecno\\adminBundle\\Controller\\tipsController::updateAction',));
                }
                not_admin_tips_update:

                // admin_tips_delete
                if (preg_match('#^/admin/tips/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'DELETE') {
                        $allow[] = 'DELETE';
                        goto not_admin_tips_delete;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_tips_delete')), array (  '_controller' => 'protecno\\adminBundle\\Controller\\tipsController::deleteAction',));
                }
                not_admin_tips_delete:

            }

        }

        if (0 === strpos($pathinfo, '/log')) {
            if (0 === strpos($pathinfo, '/login')) {
                // login
                if ($pathinfo === '/login') {
                    return array (  '_controller' => 'protecno\\UserBundle\\Controller\\SecurityController::loginAction',  '_route' => 'login',);
                }

                // login_check
                if ($pathinfo === '/login_check') {
                    return array('_route' => 'login_check');
                }

            }

            // logout
            if ($pathinfo === '/logout') {
                return array('_route' => 'logout');
            }

        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
