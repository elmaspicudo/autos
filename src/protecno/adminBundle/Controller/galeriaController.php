<?php

namespace protecno\adminBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use protecno\adminBundle\Entity\galeria;
use protecno\adminBundle\Form\galeriaType;

/**
 * galeria controller.
 *
 * @Route("/admin/galeria")
 */
class galeriaController extends Controller
{

    /**
     * Lists all galeria entities.
     *
     * @Route("/", name="admin_galeria")
     * @Method("GET")
     * @Template()
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('adminBundle:galeria')->findAll();

        return array(
            'entities' => $entities,
        );
    }
    /**
     * Creates a new galeria entity.
     *
     * @Route("/", name="admin_galeria_create")
     * @Method("POST")
     * @Template("adminBundle:galeria:new.html.twig")
     */
    public function createAction(Request $request)
    {
        $entity = new galeria();
        $form = $this->createCreateForm($entity);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('admin_galeria_show', array('id' => $entity->getId())));
        }

        return array(
            'entity' => $entity,
            'form'   => $form->createView(),
        );
    }

    /**
     * Creates a form to create a galeria entity.
     *
     * @param galeria $entity The entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createCreateForm(galeria $entity)
    {
        $form = $this->createForm(new galeriaType(), $entity, array(
            'action' => $this->generateUrl('admin_galeria_create'),
            'method' => 'POST',
        ));

        //$form->add('submit', 'submit', array('label' => 'Create'));

        return $form;
    }

    /**
     * Displays a form to create a new galeria entity.
     *
     * @Route("/new", name="admin_galeria_new")
     * @Method("GET")
     * @Template()
     */
    public function newAction()
    {
        $entity = new galeria();
        $form   = $this->createCreateForm($entity);

        return array(
            'entity' => $entity,
            'form'   => $form->createView(),
        );
    }

    /**
     * Finds and displays a galeria entity.
     *
     * @Route("/{id}", name="admin_galeria_show")
     * @Method("GET")
     * @Template()
     */
    public function showAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('adminBundle:galeria')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find galeria entity.');
        }

        $deleteForm = $this->createDeleteForm($id);

        return array(
            'entity'      => $entity,
            'delete_form' => $deleteForm->createView(),
        );
    }

    /**
     * Displays a form to edit an existing galeria entity.
     *
     * @Route("/{id}/edit", name="admin_galeria_edit")
     * @Method("GET")
     * @Template()
     */
    public function editAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('adminBundle:galeria')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find galeria entity.');
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
    * Creates a form to edit a galeria entity.
    *
    * @param galeria $entity The entity
    *
    * @return \Symfony\Component\Form\Form The form
    */
    private function createEditForm(galeria $entity)
    {
        $form = $this->createForm(new galeriaType(), $entity, array(
            'action' => $this->generateUrl('admin_galeria_update', array('id' => $entity->getId())),
            'method' => 'PUT',
        ));

        //$form->add('submit', 'submit', array('label' => 'Update'));

        return $form;
    }
    /**
     * Edits an existing galeria entity.
     *
     * @Route("/{id}", name="admin_galeria_update")
     * @Method("PUT")
     * @Template("adminBundle:galeria:edit.html.twig")
     */
    public function updateAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('adminBundle:galeria')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find galeria entity.');
        }

        $deleteForm = $this->createDeleteForm($id);
        $editForm = $this->createEditForm($entity);
        $editForm->handleRequest($request);

        if ($editForm->isValid()) {
            $em->flush();

            return $this->redirect($this->generateUrl('admin_galeria_edit', array('id' => $id)));
        }

        return array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        );
    }
    /**
     * Deletes a galeria entity.
     *
     * @Route("/{id}", name="admin_galeria_delete")
     * @Method("DELETE")
     */
    public function deleteAction(Request $request, $id)
    {
        $form = $this->createDeleteForm($id);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $entity = $em->getRepository('adminBundle:galeria')->find($id);

            if (!$entity) {
                throw $this->createNotFoundException('Unable to find galeria entity.');
            }

            $em->remove($entity);
            $em->flush();
        }

        return $this->redirect($this->generateUrl('admin_galeria'));
    }

    /**
     * Creates a form to delete a galeria entity by id.
     *
     * @param mixed $id The entity id
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm($id)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('admin_galeria_delete', array('id' => $id)))
            ->setMethod('DELETE')
            ->add('submit', 'submit', array('label' => 'Eliminar','attr'=>array('class'=>'btn btn btn-danger')))
            ->getForm()
        ;
    }
}
