<?php

namespace AddressBookBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;

use Symfony\Component\HttpFoundation\Request;

use AddressBookBundle\Entity\Rank;
use AddressBookBundle\Repository\RankRepository;


/**
 * @Route("/rank")
 */

class RankController extends Controller
{
    private function getForm ($rank, $person_id, $actionUrl=false)
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
    
    private function getFormSelect ($rank, $person_id, $actionUrl=false)
    {
        $user = $this->container->get('security.context')->getToken()->getUser();
        
        if ($actionUrl==FALSE) {
            $actionUrl = $this->generateUrl('addressbook_rank_save',
            ['person_id' => $person_id]);
        }
                
        $form = $this->createFormBuilder($rank)
                ->setMethod('post')
                ->setAction($actionUrl)
                ->add('name', 'entity',[
                    'class' => 'AddressBookBundle:Rank',
                    'query_builder' => function (RankRepository $rr) use ($user) {
                        
                        $user_id = $user->getId();
                        return $rr->findAllRanksByUserId($user_id);
                    },
                    'choice_label' => 'name'
                    
                    ])
                ->add('submit', 'submit', ['label'=>'Save'])
                ->getForm();
        return $form;
    }
    
    /**
     * @Route("/")
     */
    public function indexAction()
    {
        $user = $this->container->get('security.context')->getToken()->getUser();
        $user_id = $user->getId();
        
        $ranks = $this->
                getDoctrine()->
                getManager()->
                getRepository('AddressBookBundle:Rank')->                
                findByUserId($user_id);
        return $this->render('AddressBookBundle:Rank:index.html.twig', array(
            'ranks' => $ranks
        ));
    }
    
    /**
     * @Route("/new/{person_id}")
     */
    public function newAction($person_id)
    {
        $rank = new Rank();
        $form = $this->getForm($rank, $person_id);
        return $this->render('AddressBookBundle:Rank:new.html.twig', array(
            'form'=>$form->createView(),
            'person_id' => $person_id
        ));
    }
    
    /**
     * @Route("/select/{person_id}")
     */
    public function selectAction($person_id)
    {
        $rank = new Rank();
        $form = $this->getFormSelect($rank, $person_id);
        $_SESSION['person_id'] = $person_id;
        return $this->render('AddressBookBundle:Rank:select.html.twig', array(
            'form'=>$form->createView(),
            'person_id' => $person_id
        ));
    }
    
    /**
     * @Route("/create/{person_id}")
     * @Method("POST")
     */
    public function createAction(Request $req, $person_id)
    {
        $user = $this->container->get('security.context')->getToken()->getUser();
        $user_id = $user->getId();
        
        $rank = new Rank();
        $form = $this->getForm($rank, $person_id);
        $form->handleRequest($req);
        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            
            $person = $em->getRepository('AddressBookBundle:Person')->find($person_id);
            
            $rank->setUserId($user_id);
            
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
     * @Route("/save/{person_id}")
     * @Method("POST")
     */
    public function saveAction(Request $req, $person_id)
    {   
        $form = $req->request->get('form');        
        $rank_id = $form['name'];

        $em = $this->getDoctrine()->getManager();
        $rank = $em->getRepository('AddressBookBundle:Rank')->find($rank_id);
        $person = $em->getRepository('AddressBookBundle:Person')->find($person_id);
        $ranks = $person->getRanks();
        
        $currentIdRankTable = [];
        foreach ($ranks as $r) {
            $id = $r->getId();
            $currentIdRankTable[] = $id;
        } var_dump($currentIdRankTable);
        
        if (in_array($rank_id, $currentIdRankTable)) {
            return $this->redirect(
            $this->generateUrl(
                    'addressbook_person_show',
                    [
                        'id'=>$person_id,
                        'error' => 'yes'
                    ]
                )
            );
        } else {
            $person->addRank($rank); 
            $rank->addPerson($person); 

            $em ->persist($person);
            $em ->persist($rank);

            return $this->redirect(
            $this->generateUrl(
                    'addressbook_person_show',
                    [
                        'id'=>$person_id
                    ]
                )
            );
        }
    }


    /**
     * @Route("/delete/{rank_id}")
     */
    public function deleteAction($rank_id)
    {
        $em = $this->getDoctrine()->getManager();
        $rank = $em->getRepository('AddressBookBundle:Rank')->find($rank_id);
        $em ->remove($rank);
        $em ->flush();
        
        return $this->redirect(
            $this->generateUrl(
                    'addressbook_rank_index'
                )
            );
    }
    
    /**
     * @Route("/remove/{rank_id}/{person_id}")
     */
    public function removeAction($rank_id, $person_id)
    {
        $em = $this->getDoctrine()->getManager();
        
        $person = $em->getRepository('AddressBookBundle:Person')->find($person_id);
        $rank = $em->getRepository('AddressBookBundle:Rank')->find($rank_id);
                
        $person->removeRank($rank);
        $rank->removePerson($person);

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
    
    /**
     * @Route("/edit/{rank_id}")
     */
    public function editAction(Request $req, $rank_id)
    {
        $rank = $this->
                getDoctrine()->
                getManager()->
                getRepository('AddressBookBundle:Rank')->
                find($rank_id);
        
        if (!$rank) {
            throw $this->createNotFoundException ('Group doesn\'t exist');
        }
        
        $form = $this->getForm($rank, 0 ,$this->generateUrl('addressbook_rank_edit', ['rank_id' => $rank_id]));
        $form -> handleRequest($req);
        
        if ($req->isMethod('POST')) {
            if ($form->isValid()) {
                $this->getDoctrine()->getManager()->flush();
                return $this->redirect($this->generateUrl('addressbook_rank_index'));
            }
        }
        
        return $this->render('AddressBookBundle:Rank:edit.html.twig', array(
            'rank' => $rank,
            'form' => $form->createView()
        ));
    }

}
