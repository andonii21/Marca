<?php

namespace Uni\Bundle\MarcaBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use Uni\Bundle\MarcaBundle\Entity\noticias;
use Uni\Bundle\MarcaBundle\Form\noticiasType;

/**
 * noticias controller.
 *
 */
class noticiasController extends Controller
{

    /**
     * Lists all noticias entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('uniMarcaBundle:noticias')->findAll();

        return $this->render('uniMarcaBundle:noticias:index.html.twig', array(
            'entities' => $entities,
        ));
    }
    /**
     * Creates a new noticias entity.
     *
     */
    public function createAction(Request $request)
    {
        $entity = new noticias();
        $form = $this->createCreateForm($entity);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('noticias_show', array('id' => $entity->getId())));
        }

        return $this->render('uniMarcaBundle:noticias:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
     * Creates a form to create a noticias entity.
     *
     * @param noticias $entity The entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createCreateForm(noticias $entity)
    {
        $form = $this->createForm(new noticiasType(), $entity, array(
            'action' => $this->generateUrl('noticias_create'),
            'method' => 'POST',
        ));

        $form->add('submit', 'submit', array('label' => 'Create'));

        return $form;
    }

    /**
     * Displays a form to create a new noticias entity.
     *
     */
    public function newAction()
    {
        $entity = new noticias();
        $form   = $this->createCreateForm($entity);

        return $this->render('uniMarcaBundle:noticias:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
     * Finds and displays a noticias entity.
     *
     */
    public function showAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('uniMarcaBundle:noticias')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find noticias entity.');
        }

        $deleteForm = $this->createDeleteForm($id);

        return $this->render('uniMarcaBundle:noticias:show.html.twig', array(
            'entity'      => $entity,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing noticias entity.
     *
     */
    public function editAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('uniMarcaBundle:noticias')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find noticias entity.');
        }

        $editForm = $this->createEditForm($entity);
        $deleteForm = $this->createDeleteForm($id);

        return $this->render('uniMarcaBundle:noticias:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
    * Creates a form to edit a noticias entity.
    *
    * @param noticias $entity The entity
    *
    * @return \Symfony\Component\Form\Form The form
    */
    private function createEditForm(noticias $entity)
    {
        $form = $this->createForm(new noticiasType(), $entity, array(
            'action' => $this->generateUrl('noticias_update', array('id' => $entity->getId())),
            'method' => 'PUT',
        ));

        $form->add('submit', 'submit', array('label' => 'Update'));

        return $form;
    }
    /**
     * Edits an existing noticias entity.
     *
     */
    public function updateAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('uniMarcaBundle:noticias')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find noticias entity.');
        }

        $deleteForm = $this->createDeleteForm($id);
        $editForm = $this->createEditForm($entity);
        $editForm->handleRequest($request);

        if ($editForm->isValid()) {
            $em->flush();

            return $this->redirect($this->generateUrl('noticias_edit', array('id' => $id)));
        }

        return $this->render('uniMarcaBundle:noticias:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }
    /**
     * Deletes a noticias entity.
     *
     */
    public function deleteAction(Request $request, $id)
    {
        $form = $this->createDeleteForm($id);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $entity = $em->getRepository('uniMarcaBundle:noticias')->find($id);

            if (!$entity) {
                throw $this->createNotFoundException('Unable to find noticias entity.');
            }

            $em->remove($entity);
            $em->flush();
        }

        return $this->redirect($this->generateUrl('noticias'));
    }

    /**
     * Creates a form to delete a noticias entity by id.
     *
     * @param mixed $id The entity id
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm($id)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('noticias_delete', array('id' => $id)))
            ->setMethod('DELETE')
            ->add('submit', 'submit', array('label' => 'Delete'))
            ->getForm()
        ;
    }
       public function buscarTituloAction()
    {
        

        return $this->render('uniMarcaBundle:noticias:buscarTitulo.html.twig');
    }
           public function responderTituloAction()
    {
          $titulo= $_POST['titulo']; // Coger variables usando php clásico.
         //   $nom= $request->request->get('autor'); // Modo symfony2       
               
        $em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('uniMarcaBundle:noticias')->findByTitulo($titulo);

        return $this->render('uniMarcaBundle:noticias:responderTitulo.html.twig', array(
            'entities' => $entities,
            'titulo' => $titulo,
        ));
            
    }
          public function buscarTitulolikeAction()
    {
        

        return $this->render('uniMarcaBundle:noticias:buscarTitulolike.html.twig');
    }
    
              public function responderTitulolikeAction(Request $res)
    {
          $tit=$res->request->get('titulo'); // Modo symfony2  
          
          
          $em = $this->getDoctrine()->getEntityManager();
    $dql = "select n from uniMarcaBundle:noticias n where n.titulo like :titulo";
    $respuesta = $em->createQuery($dql);
    $respuesta->setParameter('titulo',"%".$tit."%");
    $noticias = $respuesta->getResult();          
        return $this->render('uniMarcaBundle:noticias:responderTitulolike.html.twig', array(
            'tabla' => $noticias,
            'tit' => $tit,
        ));
            
    }
}
