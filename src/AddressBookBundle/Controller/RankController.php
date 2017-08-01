<?php

namespace AddressBookBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;

use Symfony\Component\HttpFoundation\Request;

use AddressBookBundle\Entity\Rank;


/**
 * @Route("/{person_id}/rank")
 */

class RankController extends Controller
{
    private function getForm ($person_id, $rank, $actionUrl=false)
    {
        if ($actionUrl==FALSE) {
            $actionUrl = $this->generateUrl('addressbook_rank_create',
                    ['person_id' => $person_id]);
        }
        $form = $this->createFormBuilder($rank)
                ->setMethod('post')
                ->setAction($actionUrl)
                ->add('name')
                ->add('submit', 'submit', ['label'=>'Save'])
                ->getForm();
        return $form;
    }  
    
    private function getFormSelect ($person_id, $rank, $actionUrl=false)
    {
        if ($actionUrl==FALSE) {
            $actionUrl = $this->generateUrl('addressbook_rank_save',
                    ['person_id' => $person_id]);
        }
        $form = $this->createFormBuilder($rank)
                ->setMethod('post')
                ->setAction($actionUrl)
                ->add('name', 'entity',[
                    'class' => 'AddressBookBundle:Rank',
                    //TO QUERY BUILDER - to take only groups of this 
//                    'query_builder' => function (EntityRepository $er) {
//                        return $er->createQueryBuilder('u')
//                            ->orderBy('u.username', 'ASC');
//                    },
                    'choice_label' => 'name'])
                ->add('submit', 'submit', ['label'=>'Save'])
                ->getForm();
        return $form;
    }
    
    /**
     * @Route("/new")
     */
    public function newAction($person_id)
    {
        $rank = new Rank();
        $form = $this->getForm($person_id, $rank);
        return $this->render('AddressBookBundle:Rank:new.html.twig', array(
            'form'=>$form->createView()
        ));
    }
    
    /**
     * @Route("/select")
     */
    public function selectAction($person_id)
    {
        $rank = new Rank();
        $form = $this->getFormSelect($person_id, $rank);
        return $this->render('AddressBookBundle:Rank:select.html.twig', array(
            'form'=>$form->createView(),
            'person_id' => $person_id
        ));
    }
    
    /**
     * @Route("/create")
     * @Method("POST")
     */
    public function createAction(Request $req, $person_id)
    {
        $rank = new Rank();
        $form = $this->getForm($person_id, $rank);
        $form->handleRequest($req);
        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            
            $person = $em->getRepository('AddressBookBundle:Person')->find($person_id);
            
            $person->addRank($rank);
            $rank->addPerson($person);
            
            $em ->persist($person);
            $em ->persist($rank);
            
            $em ->flush();
            
            return $this->redirect(
            $this->generateUrl(
                    'addressbook_person_show',
                    [
                        'id'=>$person_id
                    ]
                )
            );
        }
        return $this->render('AddressBookBundle:Rank:new.html.twig', array(
            'form' => $form
        ));
    }
    
     /**
     * @Route("/save")
     * @Method("POST")
     */
    public function saveAction(Request $req, $person_id)
    {
  

        return $this->render('AddressBookBundle:Rank:new.html.twig', array(
            //..
        ));
    }


    /**
     * @Route("/{rank_id}/delete")
     */
    public function deleteAction($person_id, $rank_id)
    {
        $em = $this->getDoctrine()->getManager();
        $rank = $em->getRepository('AddressBookBundle:Rank')->find($rank_id);
        $em ->remove($rank);
        $em ->flush();
        
        return $this->redirect(
            $this->generateUrl(
                    'addressbook_person_show',
                    [
                        'id'=>$person_id
                    ]
                )
            );
    }
    
    /**
     * @Route("/edit")
     */
    public function editAction()
    {
        return $this->render('AddressBookBundle:Rank:edit.html.twig', array(
            // ...
        ));
    }

}
