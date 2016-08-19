<?php

namespace protecno\adminBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use protecno\adminBundle\Entity\newsletter;
use protecno\adminBundle\Form\newsletterType;

/**
 * newsletter controller.
 *
 * @Route("/admin/newsletter")
 */
class newsletterController extends Controller
{

    /**
     * Lists all newsletter entities.
     *
     * @Route("/", name="admin_newsletter")
     * @Method("GET")
     * @Template()
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('adminBundle:newsletter')->findAll();

        return array(
            'entities' => $entities,
        );
    }
    /**
     * Creates a new newsletter entity.
     *
     * @Route("/", name="admin_newsletter_create")
     * @Method("POST")
     * @Template("adminBundle:newsletter:new.html.twig")
     */
    public function createAction(Request $request)
    {
        $entity = new newsletter();
        $form = $this->createCreateForm($entity);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('admin_newsletter_show', array('id' => $entity->getId())));
        }

        return array(
            'entity' => $entity,
            'form'   => $form->createView(),
        );
    }

    /**
     * Creates a form to create a newsletter entity.
     *
     * @param newsletter $entity The entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createCreateForm(newsletter $entity)
    {
        $form = $this->createForm(new newsletterType(), $entity, array(
            'action' => $this->generateUrl('admin_newsletter_create'),
            'method' => 'POST',
        ));

        //$form->add('submit', 'submit', array('label' => 'Create'));

        return $form;
    }

    /**
     * Displays a form to create a new newsletter entity.
     *
     * @Route("/new", name="admin_newsletter_new")
     * @Method("GET")
     * @Template()
     */
    public function newAction()
    {
        $entity = new newsletter();
        $form   = $this->createCreateForm($entity);

        return array(
            'entity' => $entity,
            'form'   => $form->createView(),
        );
    }

    /**
     * Finds and displays a newsletter entity.
     *
     * @Route("/{id}", name="admin_newsletter_show")
     * @Method("GET")
     * @Template()
     */
    public function showAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('adminBundle:newsletter')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find newsletter entity.');
        }

        $deleteForm = $this->createDeleteForm($id);

        return array(
            'entity'      => $entity,
            'delete_form' => $deleteForm->createView(),
        );
    }

    /**
     * Displays a form to edit an existing newsletter entity.
     *
     * @Route("/{id}/edit", name="admin_newsletter_edit")
     * @Method("GET")
     * @Template()
     */
    public function editAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('adminBundle:newsletter')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find newsletter entity.');
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
    * Creates a form to edit a newsletter entity.
    *
    * @param newsletter $entity The entity
    *
    * @return \Symfony\Component\Form\Form The form
    */
    private function createEditForm(newsletter $entity)
    {
        $form = $this->createForm(new newsletterType(), $entity, array(
            'action' => $this->generateUrl('admin_newsletter_update', array('id' => $entity->getId())),
            'method' => 'PUT',
        ));

        //$form->add('submit', 'submit', array('label' => 'Update'));

        return $form;
    }
    /**
     * Edits an existing newsletter entity.
     *
     * @Route("/{id}", name="admin_newsletter_update")
     * @Method("PUT")
     * @Template("adminBundle:newsletter:edit.html.twig")
     */
    public function updateAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('adminBundle:newsletter')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find newsletter entity.');
        }

        $deleteForm = $this->createDeleteForm($id);
        $editForm = $this->createEditForm($entity);
        $editForm->handleRequest($request);

        if ($editForm->isValid()) {
            $em->flush();

            return $this->redirect($this->generateUrl('admin_newsletter_edit', array('id' => $id)));
        }

        return array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        );
    }
    /**
     * Deletes a newsletter entity.
     *
     * @Route("/{id}", name="admin_newsletter_delete")
     * @Method("DELETE")
     */
    public function deleteAction(Request $request, $id)
    {
        $form = $this->createDeleteForm($id);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $entity = $em->getRepository('adminBundle:newsletter')->find($id);

            if (!$entity) {
                throw $this->createNotFoundException('Unable to find newsletter entity.');
            }

            $em->remove($entity);
            $em->flush();
        }

        return $this->redirect($this->generateUrl('admin_newsletter'));
    }

    /**
     * Creates a form to delete a newsletter entity by id.
     *
     * @param mixed $id The entity id
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm($id)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('admin_newsletter_delete', array('id' => $id)))
            ->setMethod('DELETE')
            ->add('submit', 'submit', array('label' => 'Eliminar','attr'=>array('class'=>'btn btn btn-danger')))
            ->getForm()
        ;
    }
}
