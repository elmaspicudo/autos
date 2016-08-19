<?php

namespace protecno\adminBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use protecno\adminBundle\Entity\pagina;
use protecno\adminBundle\Form\paginaType;

/**
 * pagina controller.
 *
 * @Route("/admin/pagina")
 */
class paginaController extends Controller
{

    /**
     * Lists all pagina entities.
     *
     * @Route("/", name="admin_pagina")
     * @Method("GET")
     * @Template()
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('adminBundle:pagina')->findAll();

        return array(
            'entities' => $entities,
        );
    }
    /**
     * Creates a new pagina entity.
     *
     * @Route("/", name="admin_pagina_create")
     * @Method("POST")
     * @Template("adminBundle:pagina:new.html.twig")
     */
    public function createAction(Request $request)
    {
        $entity = new pagina();
        $form = $this->createCreateForm($entity);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('admin_pagina_show', array('id' => $entity->getId())));
        }

        return array(
            'entity' => $entity,
            'form'   => $form->createView(),
        );
    }

    /**
     * Creates a form to create a pagina entity.
     *
     * @param pagina $entity The entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createCreateForm(pagina $entity)
    {
        $form = $this->createForm(new paginaType(), $entity, array(
            'action' => $this->generateUrl('admin_pagina_create'),
            'method' => 'POST',
        ));

        //$form->add('submit', 'submit', array('label' => 'Create'));

        return $form;
    }

    /**
     * Displays a form to create a new pagina entity.
     *
     * @Route("/new", name="admin_pagina_new")
     * @Method("GET")
     * @Template()
     */
    public function newAction()
    {
        $entity = new pagina();
        $form   = $this->createCreateForm($entity);

        return array(
            'entity' => $entity,
            'form'   => $form->createView(),
        );
    }

    /**
     * Finds and displays a pagina entity.
     *
     * @Route("/{id}", name="admin_pagina_show")
     * @Method("GET")
     * @Template()
     */
    public function showAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('adminBundle:pagina')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find pagina entity.');
        }

        $deleteForm = $this->createDeleteForm($id);

        return array(
            'entity'      => $entity,
            'delete_form' => $deleteForm->createView(),
        );
    }

    /**
     * Displays a form to edit an existing pagina entity.
     *
     * @Route("/{id}/edit", name="admin_pagina_edit")
     * @Method("GET")
     * @Template()
     */
    public function editAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('adminBundle:pagina')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find pagina entity.');
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
    * Creates a form to edit a pagina entity.
    *
    * @param pagina $entity The entity
    *
    * @return \Symfony\Component\Form\Form The form
    */
    private function createEditForm(pagina $entity)
    {
        $form = $this->createForm(new paginaType(), $entity, array(
            'action' => $this->generateUrl('admin_pagina_update', array('id' => $entity->getId())),
            'method' => 'PUT',
        ));

        //$form->add('submit', 'submit', array('label' => 'Update'));

        return $form;
    }
    /**
     * Edits an existing pagina entity.
     *
     * @Route("/{id}", name="admin_pagina_update")
     * @Method("PUT")
     * @Template("adminBundle:pagina:edit.html.twig")
     */
    public function updateAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('adminBundle:pagina')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find pagina entity.');
        }

        $deleteForm = $this->createDeleteForm($id);
        $editForm = $this->createEditForm($entity);
        $editForm->handleRequest($request);

        if ($editForm->isValid()) {
            $em->flush();

            return $this->redirect($this->generateUrl('admin_pagina_edit', array('id' => $id)));
        }

        return array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        );
    }
    /**
     * Deletes a pagina entity.
     *
     * @Route("/{id}", name="admin_pagina_delete")
     * @Method("DELETE")
     */
    public function deleteAction(Request $request, $id)
    {
        $form = $this->createDeleteForm($id);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $entity = $em->getRepository('adminBundle:pagina')->find($id);

            if (!$entity) {
                throw $this->createNotFoundException('Unable to find pagina entity.');
            }

            $em->remove($entity);
            $em->flush();
        }

        return $this->redirect($this->generateUrl('admin_pagina'));
    }

    /**
     * Creates a form to delete a pagina entity by id.
     *
     * @param mixed $id The entity id
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm($id)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('admin_pagina_delete', array('id' => $id)))
            ->setMethod('DELETE')
            ->add('submit', 'submit', array('label' => 'Eliminar','attr'=>array('class'=>'btn btn btn-danger')))
            ->getForm()
        ;
    }
}
