<?php

namespace protecno\adminBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use protecno\adminBundle\Entity\categorias;
use protecno\adminBundle\Form\categoriasType;

/**
 * categorias controller.
 *
 * @Route("/admin/categorias")
 */
class categoriasController extends Controller
{

    /**
     * Lists all categorias entities.
     *
     * @Route("/", name="admin_categorias")
     * @Method("GET")
     * @Template()
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('adminBundle:categorias')->findAll();

        return array(
            'entities' => $entities,
        );
    }
    /**
     * Creates a new categorias entity.
     *
     * @Route("/", name="admin_categorias_create")
     * @Method("POST")
     * @Template("adminBundle:categorias:new.html.twig")
     */
    public function createAction(Request $request)
    {
        $entity = new categorias();
        $form = $this->createCreateForm($entity);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('admin_categorias_show', array('id' => $entity->getId())));
        }

        return array(
            'entity' => $entity,
            'form'   => $form->createView(),
        );
    }

    /**
     * Creates a form to create a categorias entity.
     *
     * @param categorias $entity The entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createCreateForm(categorias $entity)
    {
        $form = $this->createForm(new categoriasType(), $entity, array(
            'action' => $this->generateUrl('admin_categorias_create'),
            'method' => 'POST',
        ));

        //$form->add('submit', 'submit', array('label' => 'Create'));

        return $form;
    }

    /**
     * Displays a form to create a new categorias entity.
     *
     * @Route("/new", name="admin_categorias_new")
     * @Method("GET")
     * @Template()
     */
    public function newAction()
    {
        $entity = new categorias();
        $form   = $this->createCreateForm($entity);

        return array(
            'entity' => $entity,
            'form'   => $form->createView(),
        );
    }

    /**
     * Finds and displays a categorias entity.
     *
     * @Route("/{id}", name="admin_categorias_show")
     * @Method("GET")
     * @Template()
     */
    public function showAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('adminBundle:categorias')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find categorias entity.');
        }

        $deleteForm = $this->createDeleteForm($id);

        return array(
            'entity'      => $entity,
            'delete_form' => $deleteForm->createView(),
        );
    }

    /**
     * Displays a form to edit an existing categorias entity.
     *
     * @Route("/{id}/edit", name="admin_categorias_edit")
     * @Method("GET")
     * @Template()
     */
    public function editAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('adminBundle:categorias')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find categorias entity.');
        }

        $editForm = $this->createEditForm($entity);
        $deleteForm = $this->createDeleteForm($id);

        return array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        );
    }

    /**
    * Creates a form to edit a categorias entity.
    *
    * @param categorias $entity The entity
    *
    * @return \Symfony\Component\Form\Form The form
    */
    private function createEditForm(categorias $entity)
    {
        $form = $this->createForm(new categoriasType(), $entity, array(
            'action' => $this->generateUrl('admin_categorias_update', array('id' => $entity->getId())),
            'method' => 'PUT',
        ));

        //$form->add('submit', 'submit', array('label' => 'Update'));

        return $form;
    }
    /**
     * Edits an existing categorias entity.
     *
     * @Route("/{id}", name="admin_categorias_update")
     * @Method("PUT")
     * @Template("adminBundle:categorias:edit.html.twig")
     */
    public function updateAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('adminBundle:categorias')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find categorias entity.');
        }

        $deleteForm = $this->createDeleteForm($id);
        $editForm = $this->createEditForm($entity);
        $editForm->handleRequest($request);

        if ($editForm->isValid()) {
            $em->flush();

            return $this->redirect($this->generateUrl('admin_categorias_edit', array('id' => $id)));
        }

        return array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        );
    }
    /**
     * Deletes a categorias entity.
     *
     * @Route("/{id}", name="admin_categorias_delete")
     * @Method("DELETE")
     */
    public function deleteAction(Request $request, $id)
    {
        $form = $this->createDeleteForm($id);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $entity = $em->getRepository('adminBundle:categorias')->find($id);

            if (!$entity) {
                throw $this->createNotFoundException('Unable to find categorias entity.');
            }

            $em->remove($entity);
            $em->flush();
        }

        return $this->redirect($this->generateUrl('admin_categorias'));
    }

    /**
     * Creates a form to delete a categorias entity by id.
     *
     * @param mixed $id The entity id
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm($id)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('admin_categorias_delete', array('id' => $id)))
            ->setMethod('DELETE')
            ->add('submit', 'submit', array('label' => 'Eliminar','attr'=>array('class'=>'btn btn btn-danger')))
            ->getForm()
        ;
    }
}
