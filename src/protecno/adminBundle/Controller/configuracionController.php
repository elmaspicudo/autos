<?php

namespace protecno\adminBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use protecno\adminBundle\Entity\configuracion;
use protecno\adminBundle\Form\configuracionType;

/**
 * configuracion controller.
 *
 * @Route("/admin/configuracion")
 */
class configuracionController extends Controller
{

    /**
     * Lists all configuracion entities.
     *
     * @Route("/", name="admin_configuracion")
     * @Method("GET")
     * @Template()
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('adminBundle:configuracion')->findAll();

        return array(
            'entities' => $entities,
        );
    }
    /**
     * Creates a new configuracion entity.
     *
     * @Route("/", name="admin_configuracion_create")
     * @Method("POST")
     * @Template("adminBundle:configuracion:new.html.twig")
     */
    public function createAction(Request $request)
    {
        $entity = new configuracion();
        $form = $this->createCreateForm($entity);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('admin_configuracion_show', array('id' => $entity->getId())));
        }

        return array(
            'entity' => $entity,
            'form'   => $form->createView(),
        );
    }

    /**
     * Creates a form to create a configuracion entity.
     *
     * @param configuracion $entity The entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createCreateForm(configuracion $entity)
    {
        $form = $this->createForm(new configuracionType(), $entity, array(
            'action' => $this->generateUrl('admin_configuracion_create'),
            'method' => 'POST',
        ));

        //$form->add('submit', 'submit', array('label' => 'Create'));

        return $form;
    }

    /**
     * Displays a form to create a new configuracion entity.
     *
     * @Route("/new", name="admin_configuracion_new")
     * @Method("GET")
     * @Template()
     */
    public function newAction()
    {
        $entity = new configuracion();
        $form   = $this->createCreateForm($entity);

        return array(
            'entity' => $entity,
            'form'   => $form->createView(),
        );
    }

    /**
     * Finds and displays a configuracion entity.
     *
     * @Route("/{id}", name="admin_configuracion_show")
     * @Method("GET")
     * @Template()
     */
    public function showAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('adminBundle:configuracion')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find configuracion entity.');
        }

        $deleteForm = $this->createDeleteForm($id);

        return array(
            'entity'      => $entity,
            'delete_form' => $deleteForm->createView(),
        );
    }

    /**
     * Displays a form to edit an existing configuracion entity.
     *
     * @Route("/{id}/edit", name="admin_configuracion_edit")
     * @Method("GET")
     * @Template()
     */
    public function editAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('adminBundle:configuracion')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find configuracion entity.');
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
    * Creates a form to edit a configuracion entity.
    *
    * @param configuracion $entity The entity
    *
    * @return \Symfony\Component\Form\Form The form
    */
    private function createEditForm(configuracion $entity)
    {
        $form = $this->createForm(new configuracionType(), $entity, array(
            'action' => $this->generateUrl('admin_configuracion_update', array('id' => $entity->getId())),
            'method' => 'PUT',
        ));

        //$form->add('submit', 'submit', array('label' => 'Update'));

        return $form;
    }
    /**
     * Edits an existing configuracion entity.
     *
     * @Route("/{id}", name="admin_configuracion_update")
     * @Method("PUT")
     * @Template("adminBundle:configuracion:edit.html.twig")
     */
    public function updateAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('adminBundle:configuracion')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find configuracion entity.');
        }

        $deleteForm = $this->createDeleteForm($id);
        $editForm = $this->createEditForm($entity);
        $editForm->handleRequest($request);

        if ($editForm->isValid()) {
            $em->flush();

            return $this->redirect($this->generateUrl('admin_configuracion_edit', array('id' => $id)));
        }

        return array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        );
    }
    /**
     * Deletes a configuracion entity.
     *
     * @Route("/{id}", name="admin_configuracion_delete")
     * @Method("DELETE")
     */
    public function deleteAction(Request $request, $id)
    {
        $form = $this->createDeleteForm($id);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $entity = $em->getRepository('adminBundle:configuracion')->find($id);

            if (!$entity) {
                throw $this->createNotFoundException('Unable to find configuracion entity.');
            }

            $em->remove($entity);
            $em->flush();
        }

        return $this->redirect($this->generateUrl('admin_configuracion'));
    }

    /**
     * Creates a form to delete a configuracion entity by id.
     *
     * @param mixed $id The entity id
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm($id)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('admin_configuracion_delete', array('id' => $id)))
            ->setMethod('DELETE')
            ->add('submit', 'submit', array('label' => 'Eliminar','attr'=>array('class'=>'btn btn btn-danger')))
            ->getForm()
        ;
    }
}
