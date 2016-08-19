<?php

namespace protecno\adminBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use protecno\adminBundle\Entity\tips;
use protecno\adminBundle\Form\tipsType;

/**
 * tips controller.
 *
 * @Route("/admin/tips")
 */
class tipsController extends Controller
{

    /**
     * Lists all tips entities.
     *
     * @Route("/", name="admin_tips")
     * @Method("GET")
     * @Template()
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('adminBundle:tips')->findAll();

        return array(
            'entities' => $entities,
        );
    }
    /**
     * Creates a new tips entity.
     *
     * @Route("/", name="admin_tips_create")
     * @Method("POST")
     * @Template("adminBundle:tips:new.html.twig")
     */
    public function createAction(Request $request)
    {
        $entity = new tips();
        $form = $this->createCreateForm($entity);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('admin_tips_show', array('id' => $entity->getId())));
        }

        return array(
            'entity' => $entity,
            'form'   => $form->createView(),
        );
    }

    /**
     * Creates a form to create a tips entity.
     *
     * @param tips $entity The entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createCreateForm(tips $entity)
    {
        $form = $this->createForm(new tipsType(), $entity, array(
            'action' => $this->generateUrl('admin_tips_create'),
            'method' => 'POST',
        ));

        //$form->add('submit', 'submit', array('label' => 'Create'));

        return $form;
    }

    /**
     * Displays a form to create a new tips entity.
     *
     * @Route("/new", name="admin_tips_new")
     * @Method("GET")
     * @Template()
     */
    public function newAction()
    {
        $entity = new tips();
        $form   = $this->createCreateForm($entity);

        return array(
            'entity' => $entity,
            'form'   => $form->createView(),
        );
    }

    /**
     * Finds and displays a tips entity.
     *
     * @Route("/{id}", name="admin_tips_show")
     * @Method("GET")
     * @Template()
     */
    public function showAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('adminBundle:tips')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find tips entity.');
        }

        $deleteForm = $this->createDeleteForm($id);

        return array(
            'entity'      => $entity,
            'delete_form' => $deleteForm->createView(),
        );
    }

    /**
     * Displays a form to edit an existing tips entity.
     *
     * @Route("/{id}/edit", name="admin_tips_edit")
     * @Method("GET")
     * @Template()
     */
    public function editAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('adminBundle:tips')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find tips entity.');
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
    * Creates a form to edit a tips entity.
    *
    * @param tips $entity The entity
    *
    * @return \Symfony\Component\Form\Form The form
    */
    private function createEditForm(tips $entity)
    {
        $form = $this->createForm(new tipsType(), $entity, array(
            'action' => $this->generateUrl('admin_tips_update', array('id' => $entity->getId())),
            'method' => 'PUT',
        ));

        //$form->add('submit', 'submit', array('label' => 'Update'));

        return $form;
    }
    /**
     * Edits an existing tips entity.
     *
     * @Route("/{id}", name="admin_tips_update")
     * @Method("PUT")
     * @Template("adminBundle:tips:edit.html.twig")
     */
    public function updateAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('adminBundle:tips')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find tips entity.');
        }

        $deleteForm = $this->createDeleteForm($id);
        $editForm = $this->createEditForm($entity);
        $editForm->handleRequest($request);

        if ($editForm->isValid()) {
            $em->flush();

            return $this->redirect($this->generateUrl('admin_tips_edit', array('id' => $id)));
        }

        return array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        );
    }
    /**
     * Deletes a tips entity.
     *
     * @Route("/{id}", name="admin_tips_delete")
     * @Method("DELETE")
     */
    public function deleteAction(Request $request, $id)
    {
        $form = $this->createDeleteForm($id);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $entity = $em->getRepository('adminBundle:tips')->find($id);

            if (!$entity) {
                throw $this->createNotFoundException('Unable to find tips entity.');
            }

            $em->remove($entity);
            $em->flush();
        }

        return $this->redirect($this->generateUrl('admin_tips'));
    }

    /**
     * Creates a form to delete a tips entity by id.
     *
     * @param mixed $id The entity id
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm($id)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('admin_tips_delete', array('id' => $id)))
            ->setMethod('DELETE')
            ->add('submit', 'submit', array('label' => 'Eliminar','class'=>''))
            ->getForm()
        ;
    }
}
