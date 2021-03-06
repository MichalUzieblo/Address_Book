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
        $context = $this->context;
        $request = $this->request;

        // addressbook_address_new
        if (preg_match('#^/(?P<person_id>[^/]++)/address/new$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'addressbook_address_new')), array (  '_controller' => 'AddressBookBundle\\Controller\\AddressController::newAction',));
        }

        // addressbook_address_create
        if (preg_match('#^/(?P<person_id>[^/]++)/address/create$#s', $pathinfo, $matches)) {
            if ($this->context->getMethod() != 'POST') {
                $allow[] = 'POST';
                goto not_addressbook_address_create;
            }

            return $this->mergeDefaults(array_replace($matches, array('_route' => 'addressbook_address_create')), array (  '_controller' => 'AddressBookBundle\\Controller\\AddressController::createAction',));
        }
        not_addressbook_address_create:

        // addressbook_address_delete
        if (preg_match('#^/(?P<person_id>[^/]++)/address/(?P<address_id>[^/]++)/delete$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'addressbook_address_delete')), array (  '_controller' => 'AddressBookBundle\\Controller\\AddressController::deleteAction',));
        }

        // addressbook_email_new
        if (preg_match('#^/(?P<person_id>[^/]++)/email/new$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'addressbook_email_new')), array (  '_controller' => 'AddressBookBundle\\Controller\\EmailController::newAction',));
        }

        // addressbook_email_create
        if (preg_match('#^/(?P<person_id>[^/]++)/email/create$#s', $pathinfo, $matches)) {
            if ($this->context->getMethod() != 'POST') {
                $allow[] = 'POST';
                goto not_addressbook_email_create;
            }

            return $this->mergeDefaults(array_replace($matches, array('_route' => 'addressbook_email_create')), array (  '_controller' => 'AddressBookBundle\\Controller\\EmailController::createAction',));
        }
        not_addressbook_email_create:

        // addressbook_email_delete
        if (preg_match('#^/(?P<person_id>[^/]++)/email/(?P<email_id>[^/]++)/delete$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'addressbook_email_delete')), array (  '_controller' => 'AddressBookBundle\\Controller\\EmailController::deleteAction',));
        }

        // addressbook_person_index
        if (rtrim($pathinfo, '/') === '') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'addressbook_person_index');
            }

            return array (  '_controller' => 'AddressBookBundle\\Controller\\PersonController::indexAction',  '_route' => 'addressbook_person_index',);
        }

        if (0 === strpos($pathinfo, '/index')) {
            // addressbook_person_indexrank
            if (0 === strpos($pathinfo, '/index/rank') && preg_match('#^/index/rank/(?P<rank_id>[^/]++)$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_addressbook_person_indexrank;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'addressbook_person_indexrank')), array (  '_controller' => 'AddressBookBundle\\Controller\\PersonController::indexRankAction',));
            }
            not_addressbook_person_indexrank:

            // addressbook_person_indexsearch
            if ($pathinfo === '/index/search') {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_addressbook_person_indexsearch;
                }

                return array (  '_controller' => 'AddressBookBundle\\Controller\\PersonController::indexSearchAction',  '_route' => 'addressbook_person_indexsearch',);
            }
            not_addressbook_person_indexsearch:

        }

        // addressbook_person_new
        if ($pathinfo === '/new') {
            return array (  '_controller' => 'AddressBookBundle\\Controller\\PersonController::newAction',  '_route' => 'addressbook_person_new',);
        }

        // addressbook_person_create
        if ($pathinfo === '/create') {
            if ($this->context->getMethod() != 'POST') {
                $allow[] = 'POST';
                goto not_addressbook_person_create;
            }

            return array (  '_controller' => 'AddressBookBundle\\Controller\\PersonController::createAction',  '_route' => 'addressbook_person_create',);
        }
        not_addressbook_person_create:

        // addressbook_person_edit
        if (preg_match('#^/(?P<id>[^/]++)/modify$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'addressbook_person_edit')), array (  '_controller' => 'AddressBookBundle\\Controller\\PersonController::editAction',));
        }

        // addressbook_person_delete
        if (preg_match('#^/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'addressbook_person_delete')), array (  '_controller' => 'AddressBookBundle\\Controller\\PersonController::deleteAction',));
        }

        // addressbook_person_show
        if (preg_match('#^/(?P<id>\\d+)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'addressbook_person_show')), array (  '_controller' => 'AddressBookBundle\\Controller\\PersonController::showAction',));
        }

        // addressbook_phone_new
        if (preg_match('#^/(?P<person_id>[^/]++)/phone/new$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'addressbook_phone_new')), array (  '_controller' => 'AddressBookBundle\\Controller\\PhoneController::newAction',));
        }

        // addressbook_phone_create
        if (preg_match('#^/(?P<person_id>[^/]++)/phone/create$#s', $pathinfo, $matches)) {
            if ($this->context->getMethod() != 'POST') {
                $allow[] = 'POST';
                goto not_addressbook_phone_create;
            }

            return $this->mergeDefaults(array_replace($matches, array('_route' => 'addressbook_phone_create')), array (  '_controller' => 'AddressBookBundle\\Controller\\PhoneController::createAction',));
        }
        not_addressbook_phone_create:

        // addressbook_phone_delete
        if (preg_match('#^/(?P<person_id>[^/]++)/phone/(?P<phone_id>[^/]++)/delete$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'addressbook_phone_delete')), array (  '_controller' => 'AddressBookBundle\\Controller\\PhoneController::deleteAction',));
        }

        if (0 === strpos($pathinfo, '/rank')) {
            // addressbook_rank_index
            if (rtrim($pathinfo, '/') === '/rank') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'addressbook_rank_index');
                }

                return array (  '_controller' => 'AddressBookBundle\\Controller\\RankController::indexAction',  '_route' => 'addressbook_rank_index',);
            }

            // addressbook_rank_new
            if (0 === strpos($pathinfo, '/rank/new') && preg_match('#^/rank/new/(?P<person_id>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'addressbook_rank_new')), array (  '_controller' => 'AddressBookBundle\\Controller\\RankController::newAction',));
            }

            // addressbook_rank_select
            if (0 === strpos($pathinfo, '/rank/select') && preg_match('#^/rank/select/(?P<person_id>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'addressbook_rank_select')), array (  '_controller' => 'AddressBookBundle\\Controller\\RankController::selectAction',));
            }

            // addressbook_rank_create
            if (0 === strpos($pathinfo, '/rank/create') && preg_match('#^/rank/create/(?P<person_id>[^/]++)$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_addressbook_rank_create;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'addressbook_rank_create')), array (  '_controller' => 'AddressBookBundle\\Controller\\RankController::createAction',));
            }
            not_addressbook_rank_create:

            // addressbook_rank_save
            if (0 === strpos($pathinfo, '/rank/save') && preg_match('#^/rank/save/(?P<person_id>[^/]++)$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_addressbook_rank_save;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'addressbook_rank_save')), array (  '_controller' => 'AddressBookBundle\\Controller\\RankController::saveAction',));
            }
            not_addressbook_rank_save:

            // addressbook_rank_delete
            if (0 === strpos($pathinfo, '/rank/delete') && preg_match('#^/rank/delete/(?P<rank_id>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'addressbook_rank_delete')), array (  '_controller' => 'AddressBookBundle\\Controller\\RankController::deleteAction',));
            }

            // addressbook_rank_remove
            if (0 === strpos($pathinfo, '/rank/remove') && preg_match('#^/rank/remove/(?P<rank_id>[^/]++)/(?P<person_id>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'addressbook_rank_remove')), array (  '_controller' => 'AddressBookBundle\\Controller\\RankController::removeAction',));
            }

            // addressbook_rank_edit
            if (0 === strpos($pathinfo, '/rank/edit') && preg_match('#^/rank/edit/(?P<rank_id>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'addressbook_rank_edit')), array (  '_controller' => 'AddressBookBundle\\Controller\\RankController::editAction',));
            }

        }

        // addressbook_user_delete
        if ($pathinfo === '/deleteUser') {
            return array (  '_controller' => 'AddressBookBundle\\Controller\\UserController::deleteAction',  '_route' => 'addressbook_user_delete',);
        }

        if (0 === strpos($pathinfo, '/log')) {
            if (0 === strpos($pathinfo, '/login')) {
                // fos_user_security_login
                if ($pathinfo === '/login') {
                    if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                        goto not_fos_user_security_login;
                    }

                    return array (  '_controller' => 'FOS\\UserBundle\\Controller\\SecurityController::loginAction',  '_route' => 'fos_user_security_login',);
                }
                not_fos_user_security_login:

                // fos_user_security_check
                if ($pathinfo === '/login_check') {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_fos_user_security_check;
                    }

                    return array (  '_controller' => 'FOS\\UserBundle\\Controller\\SecurityController::checkAction',  '_route' => 'fos_user_security_check',);
                }
                not_fos_user_security_check:

            }

            // fos_user_security_logout
            if ($pathinfo === '/logout') {
                if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                    goto not_fos_user_security_logout;
                }

                return array (  '_controller' => 'FOS\\UserBundle\\Controller\\SecurityController::logoutAction',  '_route' => 'fos_user_security_logout',);
            }
            not_fos_user_security_logout:

        }

        if (0 === strpos($pathinfo, '/profile')) {
            // fos_user_profile_show
            if (rtrim($pathinfo, '/') === '/profile') {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_fos_user_profile_show;
                }

                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'fos_user_profile_show');
                }

                return array (  '_controller' => 'FOS\\UserBundle\\Controller\\ProfileController::showAction',  '_route' => 'fos_user_profile_show',);
            }
            not_fos_user_profile_show:

            // fos_user_profile_edit
            if ($pathinfo === '/profile/edit') {
                if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                    goto not_fos_user_profile_edit;
                }

                return array (  '_controller' => 'FOS\\UserBundle\\Controller\\ProfileController::editAction',  '_route' => 'fos_user_profile_edit',);
            }
            not_fos_user_profile_edit:

        }

        if (0 === strpos($pathinfo, '/re')) {
            if (0 === strpos($pathinfo, '/register')) {
                // fos_user_registration_register
                if (rtrim($pathinfo, '/') === '/register') {
                    if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                        goto not_fos_user_registration_register;
                    }

                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'fos_user_registration_register');
                    }

                    return array (  '_controller' => 'FOS\\UserBundle\\Controller\\RegistrationController::registerAction',  '_route' => 'fos_user_registration_register',);
                }
                not_fos_user_registration_register:

                if (0 === strpos($pathinfo, '/register/c')) {
                    // fos_user_registration_check_email
                    if ($pathinfo === '/register/check-email') {
                        if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                            $allow = array_merge($allow, array('GET', 'HEAD'));
                            goto not_fos_user_registration_check_email;
                        }

                        return array (  '_controller' => 'FOS\\UserBundle\\Controller\\RegistrationController::checkEmailAction',  '_route' => 'fos_user_registration_check_email',);
                    }
                    not_fos_user_registration_check_email:

                    if (0 === strpos($pathinfo, '/register/confirm')) {
                        // fos_user_registration_confirm
                        if (preg_match('#^/register/confirm/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
                            if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                                $allow = array_merge($allow, array('GET', 'HEAD'));
                                goto not_fos_user_registration_confirm;
                            }

                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'fos_user_registration_confirm')), array (  '_controller' => 'FOS\\UserBundle\\Controller\\RegistrationController::confirmAction',));
                        }
                        not_fos_user_registration_confirm:

                        // fos_user_registration_confirmed
                        if ($pathinfo === '/register/confirmed') {
                            if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                                $allow = array_merge($allow, array('GET', 'HEAD'));
                                goto not_fos_user_registration_confirmed;
                            }

                            return array (  '_controller' => 'FOS\\UserBundle\\Controller\\RegistrationController::confirmedAction',  '_route' => 'fos_user_registration_confirmed',);
                        }
                        not_fos_user_registration_confirmed:

                    }

                }

            }

            if (0 === strpos($pathinfo, '/resetting')) {
                // fos_user_resetting_request
                if ($pathinfo === '/resetting/request') {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_fos_user_resetting_request;
                    }

                    return array (  '_controller' => 'FOS\\UserBundle\\Controller\\ResettingController::requestAction',  '_route' => 'fos_user_resetting_request',);
                }
                not_fos_user_resetting_request:

                // fos_user_resetting_send_email
                if ($pathinfo === '/resetting/send-email') {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_fos_user_resetting_send_email;
                    }

                    return array (  '_controller' => 'FOS\\UserBundle\\Controller\\ResettingController::sendEmailAction',  '_route' => 'fos_user_resetting_send_email',);
                }
                not_fos_user_resetting_send_email:

                // fos_user_resetting_check_email
                if ($pathinfo === '/resetting/check-email') {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_fos_user_resetting_check_email;
                    }

                    return array (  '_controller' => 'FOS\\UserBundle\\Controller\\ResettingController::checkEmailAction',  '_route' => 'fos_user_resetting_check_email',);
                }
                not_fos_user_resetting_check_email:

                // fos_user_resetting_reset
                if (0 === strpos($pathinfo, '/resetting/reset') && preg_match('#^/resetting/reset/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                        goto not_fos_user_resetting_reset;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'fos_user_resetting_reset')), array (  '_controller' => 'FOS\\UserBundle\\Controller\\ResettingController::resetAction',));
                }
                not_fos_user_resetting_reset:

            }

        }

        // fos_user_change_password
        if ($pathinfo === '/profile/change-password') {
            if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                goto not_fos_user_change_password;
            }

            return array (  '_controller' => 'FOS\\UserBundle\\Controller\\ChangePasswordController::changePasswordAction',  '_route' => 'fos_user_change_password',);
        }
        not_fos_user_change_password:

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
