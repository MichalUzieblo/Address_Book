<?php

namespace AddressBookBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;



class RankController extends Controller
{
    /**
     * @Route("/new")
     */
    public function newAction()
    {
        return $this->render('AddressBookBundle:Rank:new.html.twig', array(
            // ...
        ));
    }

    /**
     * @Route("/create")
     */
    public function createAction()
    {
        return $this->render('AddressBookBundle:Rank:create.html.twig', array(
            // ...
        ));
    }

    /**
     * @Route("/delete")
     */
    public function deleteAction()
    {
        return $this->render('AddressBookBundle:Rank:delete.html.twig', array(
            // ...
        ));
    }

    /**
     * @Route("/change")
     */
    public function changeAction()
    {
        return $this->render('AddressBookBundle:Rank:change.html.twig', array(
            // ...
        ));
    }

}
