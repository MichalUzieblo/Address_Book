<?php

namespace AddressBookBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

use AddressBookBundle\Entity\User;

class UserController extends Controller
{
    /**
     * @Route("/deleteUser")
     */
    public function deleteAction()
    {
        $user = $this->container->get('security.context')->getToken()->getUser();

        $em = $this->getDoctrine()->getManager();
        $em ->remove($user);
        $em ->flush();
        
        return $this->redirect(
            $this->generateUrl(
                    'fos_user_security_logout'
                )
            );
    }
}
