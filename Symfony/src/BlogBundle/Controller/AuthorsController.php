<?php

namespace BlogBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use BlogBundle\Entity\author;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\JsonResponse;


class AuthorsController extends Controller
{
    public function indexAction()
    {
        return $this->render('BlogBundle:Default:authors.html.twig');
    }

    public function listAuthorsAction()
    {
 
        $repo = $this->getDoctrine()->getRepository('BlogBundle:author'); //->findAll()
        
        $authors = $repo->createQueryBuilder('q')
           ->getQuery()
           ->getArrayResult();

        return new JsonResponse($authors);

    }

 public function createAuthorAction(Request $request)
 {
   
   $author = new author;

   $info = $request->getContent();
   $data = json_decode($info,true);

   var_dump($data);
   print("coucou");
   print($data['name']);

   $author->setName($data['name']);
   $author->setInfo($data['info']);

  $em = $this->getDoctrine()->getManager();
  $em->persist($author);
  $em->flush();

  return $this->redirect($this->generateUrl('blog_authors_list'));
 }


    public function addAuthorAction(Request $request)
    {
    	
    	$author = new author();
    	$form = $this->createFormBuilder($author)
    		->add('name','text')
    		->add('info','text')
            ->add('Add author','submit')
            ->getForm();
    	
		
        $form->handleRequest($request);
        

		if ($form->isValid() && $form->isSubmitted()) {
		                                                  // fait quelque chose comme sauvegarder la tâche dans la bdd
            $em = $this->getDoctrine()->getManager();     //zm = entity manager
            $em->persist($author);                        //persister = "commit"
            $em->flush();                                 // on met les requetes en file d'attente, on flush pour les 'pusher'
            
            return $this->redirect($this->generateUrl('blog_authors_list'));    
            //return new Response('Author id created : '.$author->getId());    
		}
        
        return $this->render('BlogBundle:Default:addAuthors.html.twig', array('form' => $form->createView()));
		
    }

    public function deleteAuthorsAction($authorId)
    {
        $em = $this->getDoctrine()->getManager();
        $author = $em->getRepository('BlogBundle:author')->find($authorId);
        $em->remove($author);
        $em->flush();   

        return $this->redirect($this->generateUrl('blog_authors_list'));

    }

    public function updateAuthorAction()
    {

    }
}
