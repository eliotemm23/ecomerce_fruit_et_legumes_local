<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appDevDebugProjectContainerUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
{
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


        if (0 === strpos($pathinfo, '/_')) {
            // _wdt
            if (0 === strpos($pathinfo, '/_wdt') && preg_match('#^/_wdt/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => '_wdt')), array (  '_controller' => 'web_profiler.controller.profiler:toolbarAction',));
            }

            if (0 === strpos($pathinfo, '/_profiler')) {
                // _profiler_home
                if ('/_profiler' === $trimmedPathinfo) {
                    $ret = array (  '_controller' => 'web_profiler.controller.profiler:homeAction',  '_route' => '_profiler_home',);
                    if (substr($pathinfo, -1) !== '/') {
                        return array_replace($ret, $this->redirect($pathinfo.'/', '_profiler_home'));
                    }

                    return $ret;
                }

                if (0 === strpos($pathinfo, '/_profiler/search')) {
                    // _profiler_search
                    if ('/_profiler/search' === $pathinfo) {
                        return array (  '_controller' => 'web_profiler.controller.profiler:searchAction',  '_route' => '_profiler_search',);
                    }

                    // _profiler_search_bar
                    if ('/_profiler/search_bar' === $pathinfo) {
                        return array (  '_controller' => 'web_profiler.controller.profiler:searchBarAction',  '_route' => '_profiler_search_bar',);
                    }

                }

                // _profiler_phpinfo
                if ('/_profiler/phpinfo' === $pathinfo) {
                    return array (  '_controller' => 'web_profiler.controller.profiler:phpinfoAction',  '_route' => '_profiler_phpinfo',);
                }

                // _profiler_search_results
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/search/results$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_search_results')), array (  '_controller' => 'web_profiler.controller.profiler:searchResultsAction',));
                }

                // _profiler_open_file
                if ('/_profiler/open' === $pathinfo) {
                    return array (  '_controller' => 'web_profiler.controller.profiler:openAction',  '_route' => '_profiler_open_file',);
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

            // _twig_error_test
            if (0 === strpos($pathinfo, '/_error') && preg_match('#^/_error/(?P<code>\\d+)(?:\\.(?P<_format>[^/]++))?$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => '_twig_error_test')), array (  '_controller' => 'twig.controller.preview_error:previewErrorPageAction',  '_format' => 'html',));
            }

        }

        elseif (0 === strpos($pathinfo, '/admin')) {
            if (0 === strpos($pathinfo, '/admin/utilisateurs')) {
                // adminUtilisateurs
                if ('/admin/utilisateurs' === $trimmedPathinfo) {
                    $ret = array (  '_controller' => 'Utilisateurs\\UtilisateursBundle\\Controller\\UtilisateursAdminController::indexAction',  '_route' => 'adminUtilisateurs',);
                    if (substr($pathinfo, -1) !== '/') {
                        return array_replace($ret, $this->redirect($pathinfo.'/', 'adminUtilisateurs'));
                    }

                    return $ret;
                }

                // adminAdressesUtilisateurs
                if (preg_match('#^/admin/utilisateurs/(?P<id>[^/]++)/adresses$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'adminAdressesUtilisateurs')), array (  '_controller' => 'Utilisateurs\\UtilisateursBundle\\Controller\\UtilisateursAdminController::utilisateurAction',));
                }

                // adminFacturesUtilisateurs
                if (preg_match('#^/admin/utilisateurs/(?P<id>[^/]++)/factures$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'adminFacturesUtilisateurs')), array (  '_controller' => 'Utilisateurs\\UtilisateursBundle\\Controller\\UtilisateursAdminController::utilisateurAction',));
                }

            }

            elseif (0 === strpos($pathinfo, '/admin/pages')) {
                // adminPages_index
                if ('/admin/pages' === $trimmedPathinfo) {
                    if ('GET' !== $canonicalMethod) {
                        $allow[] = 'GET';
                        goto not_adminPages_index;
                    }

                    $ret = array (  '_controller' => 'Pages\\PagesBundle\\Controller\\PagesAdminController::indexAction',  '_route' => 'adminPages_index',);
                    if (substr($pathinfo, -1) !== '/') {
                        return array_replace($ret, $this->redirect($pathinfo.'/', 'adminPages_index'));
                    }

                    return $ret;
                }
                not_adminPages_index:

                // adminPages_show
                if (preg_match('#^/admin/pages/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                    if ('GET' !== $canonicalMethod) {
                        $allow[] = 'GET';
                        goto not_adminPages_show;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'adminPages_show')), array (  '_controller' => 'Pages\\PagesBundle\\Controller\\PagesAdminController::showAction',));
                }
                not_adminPages_show:

                // adminPages_new
                if ('/admin/pages/new' === $pathinfo) {
                    if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                        $allow = array_merge($allow, array('GET', 'POST'));
                        goto not_adminPages_new;
                    }

                    return array (  '_controller' => 'Pages\\PagesBundle\\Controller\\PagesAdminController::newAction',  '_route' => 'adminPages_new',);
                }
                not_adminPages_new:

                // adminPages_edit
                if (preg_match('#^/admin/pages/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                    if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                        $allow = array_merge($allow, array('GET', 'POST'));
                        goto not_adminPages_edit;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'adminPages_edit')), array (  '_controller' => 'Pages\\PagesBundle\\Controller\\PagesAdminController::editAction',));
                }
                not_adminPages_edit:

                // adminPages_delete
                if (preg_match('#^/admin/pages/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                    if ('DELETE' !== $canonicalMethod) {
                        $allow[] = 'DELETE';
                        goto not_adminPages_delete;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'adminPages_delete')), array (  '_controller' => 'Pages\\PagesBundle\\Controller\\PagesAdminController::deleteAction',));
                }
                not_adminPages_delete:

            }

            // admin
            if ('/admin' === $trimmedPathinfo) {
                $ret = array (  '_controller' => 'Ecommerce\\EcommerceBundle\\Controller\\CommandesAdminController::commandesAction',  '_route' => 'admin',);
                if (substr($pathinfo, -1) !== '/') {
                    return array_replace($ret, $this->redirect($pathinfo.'/', 'admin'));
                }

                return $ret;
            }

            if (0 === strpos($pathinfo, '/admin/produits')) {
                // adminProduits_index
                if ('/admin/produits' === $trimmedPathinfo) {
                    if ('GET' !== $canonicalMethod) {
                        $allow[] = 'GET';
                        goto not_adminProduits_index;
                    }

                    $ret = array (  '_controller' => 'Ecommerce\\EcommerceBundle\\Controller\\ProduitsAdminController::indexAction',  '_route' => 'adminProduits_index',);
                    if (substr($pathinfo, -1) !== '/') {
                        return array_replace($ret, $this->redirect($pathinfo.'/', 'adminProduits_index'));
                    }

                    return $ret;
                }
                not_adminProduits_index:

                // adminProduits_show
                if (preg_match('#^/admin/produits/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                    if ('GET' !== $canonicalMethod) {
                        $allow[] = 'GET';
                        goto not_adminProduits_show;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'adminProduits_show')), array (  '_controller' => 'Ecommerce\\EcommerceBundle\\Controller\\ProduitsAdminController::showAction',));
                }
                not_adminProduits_show:

                // adminProduits_new
                if ('/admin/produits/new' === $pathinfo) {
                    if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                        $allow = array_merge($allow, array('GET', 'POST'));
                        goto not_adminProduits_new;
                    }

                    return array (  '_controller' => 'Ecommerce\\EcommerceBundle\\Controller\\ProduitsAdminController::newAction',  '_route' => 'adminProduits_new',);
                }
                not_adminProduits_new:

                // adminProduits_edit
                if (preg_match('#^/admin/produits/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                    if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                        $allow = array_merge($allow, array('GET', 'POST'));
                        goto not_adminProduits_edit;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'adminProduits_edit')), array (  '_controller' => 'Ecommerce\\EcommerceBundle\\Controller\\ProduitsAdminController::editAction',));
                }
                not_adminProduits_edit:

                // adminProduits_delete
                if (preg_match('#^/admin/produits/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                    if ('DELETE' !== $canonicalMethod) {
                        $allow[] = 'DELETE';
                        goto not_adminProduits_delete;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'adminProduits_delete')), array (  '_controller' => 'Ecommerce\\EcommerceBundle\\Controller\\ProduitsAdminController::deleteAction',));
                }
                not_adminProduits_delete:

            }

            elseif (0 === strpos($pathinfo, '/admin/categories')) {
                // adminCategories_index
                if ('/admin/categories' === $trimmedPathinfo) {
                    if ('GET' !== $canonicalMethod) {
                        $allow[] = 'GET';
                        goto not_adminCategories_index;
                    }

                    $ret = array (  '_controller' => 'Ecommerce\\EcommerceBundle\\Controller\\CategoriesAdminController::indexAction',  '_route' => 'adminCategories_index',);
                    if (substr($pathinfo, -1) !== '/') {
                        return array_replace($ret, $this->redirect($pathinfo.'/', 'adminCategories_index'));
                    }

                    return $ret;
                }
                not_adminCategories_index:

                // adminCategories_show
                if (preg_match('#^/admin/categories/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                    if ('GET' !== $canonicalMethod) {
                        $allow[] = 'GET';
                        goto not_adminCategories_show;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'adminCategories_show')), array (  '_controller' => 'Ecommerce\\EcommerceBundle\\Controller\\CategoriesAdminController::showAction',));
                }
                not_adminCategories_show:

                // adminCategories_new
                if ('/admin/categories/new' === $pathinfo) {
                    if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                        $allow = array_merge($allow, array('GET', 'POST'));
                        goto not_adminCategories_new;
                    }

                    return array (  '_controller' => 'Ecommerce\\EcommerceBundle\\Controller\\CategoriesAdminController::newAction',  '_route' => 'adminCategories_new',);
                }
                not_adminCategories_new:

                // adminCategories_edit
                if (preg_match('#^/admin/categories/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                    if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                        $allow = array_merge($allow, array('GET', 'POST'));
                        goto not_adminCategories_edit;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'adminCategories_edit')), array (  '_controller' => 'Ecommerce\\EcommerceBundle\\Controller\\CategoriesAdminController::editAction',));
                }
                not_adminCategories_edit:

                // adminCategories_delete
                if (preg_match('#^/admin/categories/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                    if ('DELETE' !== $canonicalMethod) {
                        $allow[] = 'DELETE';
                        goto not_adminCategories_delete;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'adminCategories_delete')), array (  '_controller' => 'Ecommerce\\EcommerceBundle\\Controller\\CategoriesAdminController::deleteAction',));
                }
                not_adminCategories_delete:

            }

            elseif (0 === strpos($pathinfo, '/admin/commandes')) {
                // adminCommande
                if ('/admin/commandes' === $trimmedPathinfo) {
                    $ret = array (  '_controller' => 'Ecommerce\\EcommerceBundle\\Controller\\CommandesAdminController::commandesAction',  '_route' => 'adminCommande',);
                    if (substr($pathinfo, -1) !== '/') {
                        return array_replace($ret, $this->redirect($pathinfo.'/', 'adminCommande'));
                    }

                    return $ret;
                }

                // adminShowFacture
                if (0 === strpos($pathinfo, '/admin/commandes/facture') && preg_match('#^/admin/commandes/facture/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'adminShowFacture')), array (  '_controller' => 'Ecommerce\\EcommerceBundle\\Controller\\CommandesAdminController::showFactureAction',));
                }

            }

        }

        // utilisateurs_utilisateurs_homepage
        if ('/kk' === $pathinfo) {
            return array (  '_controller' => 'UtilisateursUtilisateursBundle:Default:index',  '_route' => 'utilisateurs_utilisateurs_homepage',);
        }

        if (0 === strpos($pathinfo, '/p')) {
            if (0 === strpos($pathinfo, '/profile')) {
                if (0 === strpos($pathinfo, '/profile/factures')) {
                    // factures
                    if ('/profile/factures' === $pathinfo) {
                        return array (  '_controller' => 'Utilisateurs\\UtilisateursBundle\\Controller\\UtilisateursController::facturesAction',  '_route' => 'factures',);
                    }

                    // facturesPDF
                    if (0 === strpos($pathinfo, '/profile/factures/pdf') && preg_match('#^/profile/factures/pdf/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'facturesPDF')), array (  '_controller' => 'Utilisateurs\\UtilisateursBundle\\Controller\\UtilisateursController::facturesPDFAction',));
                    }

                }

                // fos_user_profile_show
                if ('/profile' === $trimmedPathinfo) {
                    if ('GET' !== $canonicalMethod) {
                        $allow[] = 'GET';
                        goto not_fos_user_profile_show;
                    }

                    $ret = array (  '_controller' => 'fos_user.profile.controller:showAction',  '_route' => 'fos_user_profile_show',);
                    if (substr($pathinfo, -1) !== '/') {
                        return array_replace($ret, $this->redirect($pathinfo.'/', 'fos_user_profile_show'));
                    }

                    return $ret;
                }
                not_fos_user_profile_show:

                // fos_user_profile_edit
                if ('/profile/edit' === $pathinfo) {
                    if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                        $allow = array_merge($allow, array('GET', 'POST'));
                        goto not_fos_user_profile_edit;
                    }

                    return array (  '_controller' => 'fos_user.profile.controller:editAction',  '_route' => 'fos_user_profile_edit',);
                }
                not_fos_user_profile_edit:

                // fos_user_change_password
                if ('/profile/change-password' === $pathinfo) {
                    if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                        $allow = array_merge($allow, array('GET', 'POST'));
                        goto not_fos_user_change_password;
                    }

                    return array (  '_controller' => 'fos_user.change_password.controller:changePasswordAction',  '_route' => 'fos_user_change_password',);
                }
                not_fos_user_change_password:

            }

            elseif (0 === strpos($pathinfo, '/produit')) {
                // produits
                if ('/produit' === $pathinfo) {
                    return array (  '_controller' => 'Ecommerce\\EcommerceBundle\\Controller\\ProduitsController::produitsAction',  '_route' => 'produits',);
                }

                // presentation
                if (preg_match('#^/produit/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'presentation')), array (  '_controller' => 'Ecommerce\\EcommerceBundle\\Controller\\ProduitsController::presentationAction',));
                }

            }

            elseif (0 === strpos($pathinfo, '/pa')) {
                // page
                if (0 === strpos($pathinfo, '/page') && preg_match('#^/page/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'page')), array (  '_controller' => 'Pages\\PagesBundle\\Controller\\PagesController::pageAction',));
                }

                if (0 === strpos($pathinfo, '/panier')) {
                    // supprimer
                    if (0 === strpos($pathinfo, '/panier/supprimer') && preg_match('#^/panier/supprimer/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'supprimer')), array (  '_controller' => 'Ecommerce\\EcommerceBundle\\Controller\\PanierController::supprimerAction',));
                    }

                    // ajouter
                    if (0 === strpos($pathinfo, '/panier/ajouter') && preg_match('#^/panier/ajouter/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'ajouter')), array (  '_controller' => 'Ecommerce\\EcommerceBundle\\Controller\\PanierController::ajouterAction',));
                    }

                    if (0 === strpos($pathinfo, '/panier/panier')) {
                        // panier
                        if ('/panier/panier' === $pathinfo) {
                            return array (  '_controller' => 'Ecommerce\\EcommerceBundle\\Controller\\PanierController::panierAction',  '_route' => 'panier',);
                        }

                        // livraison
                        if ('/panier/panier/livraison' === $pathinfo) {
                            return array (  '_controller' => 'Ecommerce\\EcommerceBundle\\Controller\\PanierController::livraisonAction',  '_route' => 'livraison',);
                        }

                        // validation
                        if ('/panier/panier/validation' === $pathinfo) {
                            return array (  '_controller' => 'Ecommerce\\EcommerceBundle\\Controller\\PanierController::validationAction',  '_route' => 'validation',);
                        }

                    }

                    // livraisonAdresseSuppression
                    if (0 === strpos($pathinfo, '/panier/livraison/adresse/suppression') && preg_match('#^/panier/livraison/adresse/suppression/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'livraisonAdresseSuppression')), array (  '_controller' => 'Ecommerce\\EcommerceBundle\\Controller\\PanierController::adresseSuppressionAction',));
                    }

                }

                // payement
                if (0 === strpos($pathinfo, '/payement') && preg_match('#^/payement/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'payement')), array (  '_controller' => 'Ecommerce\\EcommerceBundle\\Controller\\CommandesController::validationCommandeAction',));
                }

            }

        }

        // layoutAcceuil
        if ('' === $trimmedPathinfo) {
            $ret = array (  '_controller' => 'Ecommerce\\EcommerceBundle\\Controller\\ProduitsController::acceuilAction',  '_route' => 'layoutAcceuil',);
            if (substr($pathinfo, -1) !== '/') {
                return array_replace($ret, $this->redirect($pathinfo.'/', 'layoutAcceuil'));
            }

            return $ret;
        }

        // origineproduit
        if (0 === strpos($pathinfo, '/origineproduit') && preg_match('#^/origineproduit/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'origineproduit')), array (  '_controller' => 'Ecommerce\\EcommerceBundle\\Controller\\ProduitsController::origineproduitAction',));
        }

        // categorieProduits
        if (0 === strpos($pathinfo, '/categorie') && preg_match('#^/categorie/(?P<categorie>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'categorieProduits')), array (  '_controller' => 'Ecommerce\\EcommerceBundle\\Controller\\ProduitsController::produitsAction',));
        }

        if (0 === strpos($pathinfo, '/re')) {
            // rechercheProduits
            if ('/recherche' === $pathinfo) {
                return array (  '_controller' => 'Ecommerce\\EcommerceBundle\\Controller\\ProduitsController::rechercheTraitementAction',  '_route' => 'rechercheProduits',);
            }

            if (0 === strpos($pathinfo, '/register')) {
                // fos_user_registration_register
                if ('/register' === $trimmedPathinfo) {
                    if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                        $allow = array_merge($allow, array('GET', 'POST'));
                        goto not_fos_user_registration_register;
                    }

                    $ret = array (  '_controller' => 'fos_user.registration.controller:registerAction',  '_route' => 'fos_user_registration_register',);
                    if (substr($pathinfo, -1) !== '/') {
                        return array_replace($ret, $this->redirect($pathinfo.'/', 'fos_user_registration_register'));
                    }

                    return $ret;
                }
                not_fos_user_registration_register:

                // fos_user_registration_check_email
                if ('/register/check-email' === $pathinfo) {
                    if ('GET' !== $canonicalMethod) {
                        $allow[] = 'GET';
                        goto not_fos_user_registration_check_email;
                    }

                    return array (  '_controller' => 'fos_user.registration.controller:checkEmailAction',  '_route' => 'fos_user_registration_check_email',);
                }
                not_fos_user_registration_check_email:

                if (0 === strpos($pathinfo, '/register/confirm')) {
                    // fos_user_registration_confirm
                    if (preg_match('#^/register/confirm/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
                        if ('GET' !== $canonicalMethod) {
                            $allow[] = 'GET';
                            goto not_fos_user_registration_confirm;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'fos_user_registration_confirm')), array (  '_controller' => 'fos_user.registration.controller:confirmAction',));
                    }
                    not_fos_user_registration_confirm:

                    // fos_user_registration_confirmed
                    if ('/register/confirmed' === $pathinfo) {
                        if ('GET' !== $canonicalMethod) {
                            $allow[] = 'GET';
                            goto not_fos_user_registration_confirmed;
                        }

                        return array (  '_controller' => 'fos_user.registration.controller:confirmedAction',  '_route' => 'fos_user_registration_confirmed',);
                    }
                    not_fos_user_registration_confirmed:

                }

            }

            elseif (0 === strpos($pathinfo, '/resetting')) {
                // fos_user_resetting_request
                if ('/resetting/request' === $pathinfo) {
                    if ('GET' !== $canonicalMethod) {
                        $allow[] = 'GET';
                        goto not_fos_user_resetting_request;
                    }

                    return array (  '_controller' => 'fos_user.resetting.controller:requestAction',  '_route' => 'fos_user_resetting_request',);
                }
                not_fos_user_resetting_request:

                // fos_user_resetting_reset
                if (0 === strpos($pathinfo, '/resetting/reset') && preg_match('#^/resetting/reset/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
                    if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                        $allow = array_merge($allow, array('GET', 'POST'));
                        goto not_fos_user_resetting_reset;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'fos_user_resetting_reset')), array (  '_controller' => 'fos_user.resetting.controller:resetAction',));
                }
                not_fos_user_resetting_reset:

                // fos_user_resetting_send_email
                if ('/resetting/send-email' === $pathinfo) {
                    if ('POST' !== $canonicalMethod) {
                        $allow[] = 'POST';
                        goto not_fos_user_resetting_send_email;
                    }

                    return array (  '_controller' => 'fos_user.resetting.controller:sendEmailAction',  '_route' => 'fos_user_resetting_send_email',);
                }
                not_fos_user_resetting_send_email:

                // fos_user_resetting_check_email
                if ('/resetting/check-email' === $pathinfo) {
                    if ('GET' !== $canonicalMethod) {
                        $allow[] = 'GET';
                        goto not_fos_user_resetting_check_email;
                    }

                    return array (  '_controller' => 'fos_user.resetting.controller:checkEmailAction',  '_route' => 'fos_user_resetting_check_email',);
                }
                not_fos_user_resetting_check_email:

            }

        }

        // homepage
        if ('' === $trimmedPathinfo) {
            $ret = array (  '_controller' => 'AppBundle\\Controller\\DefaultController::indexAction',  '_route' => 'homepage',);
            if (substr($pathinfo, -1) !== '/') {
                return array_replace($ret, $this->redirect($pathinfo.'/', 'homepage'));
            }

            return $ret;
        }

        if (0 === strpos($pathinfo, '/login')) {
            // fos_user_security_login
            if ('/login' === $pathinfo) {
                if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                    $allow = array_merge($allow, array('GET', 'POST'));
                    goto not_fos_user_security_login;
                }

                return array (  '_controller' => 'fos_user.security.controller:loginAction',  '_route' => 'fos_user_security_login',);
            }
            not_fos_user_security_login:

            // fos_user_security_check
            if ('/login_check' === $pathinfo) {
                if ('POST' !== $canonicalMethod) {
                    $allow[] = 'POST';
                    goto not_fos_user_security_check;
                }

                return array (  '_controller' => 'fos_user.security.controller:checkAction',  '_route' => 'fos_user_security_check',);
            }
            not_fos_user_security_check:

        }

        // fos_user_security_logout
        if ('/logout' === $pathinfo) {
            if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                $allow = array_merge($allow, array('GET', 'POST'));
                goto not_fos_user_security_logout;
            }

            return array (  '_controller' => 'fos_user.security.controller:logoutAction',  '_route' => 'fos_user_security_logout',);
        }
        not_fos_user_security_logout:

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
