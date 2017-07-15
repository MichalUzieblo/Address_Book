<?php

namespace AddressBookBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;

use Symfony\Component\HttpFoundation\Request;

use AddressBookBundle\Entity\Person;

class PersonController extends Controller
{
    private function getForm ($person, $actionUrl=false) {
        if ($actionUrl==FALSE) {
            $actionUrl = $this->generateUrl('addressbook_person_create');
        }
        $form = $this->createFormBuilder($person)
                ->setMethod('post')
                ->setAction($actionUrl)
                ->add('name')
                ->add('surname')
                ->add('description')
                ->add('submit', 'submit', ['label'=>'Save'])
                ->getForm();
        return $form;
    }    
    /**
     * @Route("/")
     */
    public function indexAction()
    {
        $persons = $this->
                getDoctrine()->
                getManager()->
                getRepository('AddressBookBundle:Person')->
                findAll();
        return $this->render('AddressBookBundle:Person:index.html.twig', array(
            'persons' => $persons
        ));
    }
    /**
     * @Route("/new")
     */
    public function newAction()
    {
        $p = new Person();
        $form = $this->getForm($p);
        return $this->render('AddressBookBundle:Person:new.html.twig', array(
            'form'=>$form->createView()
        ));
    }
    /**
     * @Route("/create")
     * @Method("POST")
     */
    public function createAction(Request $req)
    {
        $p = new Person();
        $form = $this->getForm($p);
        $form->handleRequest($req);
        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em ->persist($p);
            $em ->flush();
            
            return $this->redirect(
            $this->generateUrl(
                    'addressbook_person_show',
                    [
                        'id'=>$p->getId()
                    ]
                )
            );
        }
        return $this->render('AddressBookBundle:Person:new.html.twig', array(
            'form' => $form
        ));
    }
    /**
     * @Route("{id}/modify")
     */
    public function editAction(Request $req, $id)
    {
        $person = $this->
                getDoctrine()->
                getManager()->
                getRepository('AddressBookBundle:Person')->
                find($id);
        
        if (!$person) {
            throw $this->createNotFoundException ('Taka osoba nie istnieje');
        }
        
        $form = $this->getForm($person, $this->generateUrl('addressbook_person_edit', ['id' => $id]));
        $form -> handleRequest($req);
        
        if ($req->isMethod('POST')) {
            if ($form->isValid()) {
                $this->getDoctrine()->getManager()->flush();
                return $this->redirect($this->generateUrl('addressbook_person_show', ['id'=>$id]));
            }
        }
        
        return $this->render('AddressBookBundle:Person:edit.html.twig', array(
            'person' => $person,
            'form' => $form->createView()
        ));
    }
    /**
     * @Route("{id}/delete")
     */
    public function deleteAction($id)
    {
        $person = $this->
                getDoctrine()->
                getManager()->
                getRepository('AddressBookBundle:Person')->
                find($id);
        
        if (!$person) {
            throw $this->createNotFoundException ('Taka osoba nie istnieje');
        }
        
        $em = $this->getDoctrine()->getManager();
        $em ->remove($person);
        $em ->flush();

        return $this->redirect($this->generateUrl('addressbook_person_index'));
    }
    /**
     * @Route("/{id}", requirements={"id"="\d+"})
     */
    public function showAction($id)
    {
        $person = $this->
                getDoctrine()->
                getManager()->
                getRepository('AddressBookBundle:Person')->
                find($id);
        
        if (!$person) {
            throw $this->createNotFoundException ('Taka osoba nie istnieje');
        }
            
        return $this->render('AddressBookBundle:Person:show.html.twig', array(
            'person' => $person
        ));
    }
}
