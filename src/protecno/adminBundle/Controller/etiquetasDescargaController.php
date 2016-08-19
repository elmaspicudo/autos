<?php

namespace protecno\adminBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use protecno\adminBundle\Entity\etiquetasDescarga;
use protecno\adminBundle\Form\etiquetasDescargaType;

/**
 * etiquetasDescarga controller.
 *
 * @Route("/admin/etiquetas")
 */
class etiquetasDescargaController extends Controller
{

    /**
     * Lists all etiquetasDescarga entities.
     *
     * @Route("/", name="admin_etiquetas")
     * @Method("GET")
     * @Template()
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('adminBundle:etiquetasDescarga')->findAll();

        return array(
            'entities' => $entities,
        );
    }
    /**
     * Creates a new etiquetasDescarga entity.
     *
     * @Route("/", name="admin_etiquetas_create")
     * @Method("POST")
     * @Template("adminBundle:etiquetasDescarga:new.html.twig")
     */
    public function createAction(Request $request)
    {
        $entity = new etiquetasDescarga();
        $form = $this->createCreateForm($entity);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('admin_etiquetas_show', array('id' => $entity->getId())));
        }

        return array(
            'entity' => $entity,
            'form'   => $form->createView(),
        );
    }

    /**
     * Creates a form to create a etiquetasDescarga entity.
     *
     * @param etiquetasDescarga $entity The entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createCreateForm(etiquetasDescarga $entity)
    {
        $form = $this->createForm(new etiquetasDescargaType(), $entity, array(
            'action' => $this->generateUrl('admin_etiquetas_create'),
            'method' => 'POST',
        ));

        //$form->add('submit', 'submit', array('label' => 'Create'));

        return $form;
    }

    /**
     * Displays a form to create a new etiquetasDescarga entity.
     *
     * @Route("/new", name="admin_etiquetas_new")
     * @Method("GET")
     * @Template()
     */
    public function newAction()
    {
        $entity = new etiquetasDescarga();
        $form   = $this->createCreateForm($entity);

        return array(
            'entity' => $entity,
            'form'   => $form->createView(),
        );
    }

    /**
     * Finds and displays a etiquetasDescarga entity.
     *
     * @Route("/{id}", name="admin_etiquetas_show")
     * @Method("GET")
     * @Template()
     */
    public function showAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('adminBundle:etiquetasDescarga')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find etiquetasDescarga entity.');
        }

        $deleteForm = $this->createDeleteForm($id);

        return array(
            'entity'      => $entity,
            'delete_form' => $deleteForm->createView(),
        );
    }

    /**
     * Displays a form to edit an existing etiquetasDescarga entity.
     *
     * @Route("/{id}/edit", name="admin_etiquetas_edit")
     * @Method("GET")
     * @Template()
     */
    public function editAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('adminBundle:etiquetasDescarga')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find etiquetasDescarga entity.');
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
    * Creates a form to edit a etiquetasDescarga entity.
    *
    * @param etiquetasDescarga $entity The entity
    *
    * @return \Symfony\Component\Form\Form The form
    */
    private function createEditForm(etiquetasDescarga $entity)
    {
        $form = $this->createForm(new etiquetasDescargaType(), $entity, array(
            'action' => $this->generateUrl('admin_etiquetas_update', array('id' => $entity->getId())),
            'method' => 'PUT',
        ));

        //$form->add('submit', 'submit', array('label' => 'Update'));

        return $form;
    }
    /**
     * Edits an existing etiquetasDescarga entity.
     *
     * @Route("/{id}", name="admin_etiquetas_update")
     * @Method("PUT")
     * @Template("adminBundle:etiquetasDescarga:edit.html.twig")
     */
    public function updateAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('adminBundle:etiquetasDescarga')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find etiquetasDescarga entity.');
        }

        $deleteForm = $this->createDeleteForm($id);
        $editForm = $this->createEditForm($entity);
        $editForm->handleRequest($request);

        if ($editForm->isValid()) {
            $em->flush();

            return $this->redirect($this->generateUrl('admin_etiquetas_edit', array('id' => $id)));
        }

        return array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        );
    }
    /**
     * Deletes a etiquetasDescarga entity.
     *
     * @Route("/{id}", name="admin_etiquetas_delete")
     * @Method("DELETE")
     */
    public function deleteAction(Request $request, $id)
    {
        $form = $this->createDeleteForm($id);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $entity = $em->getRepository('adminBundle:etiquetasDescarga')->find($id);

            if (!$entity) {
                throw $this->createNotFoundException('Unable to find etiquetasDescarga entity.');
            }

            $em->remove($entity);
            $em->flush();
        }

        return $this->redirect($this->generateUrl('admin_etiquetas'));
    }

    /**
     * Creates a form to delete a etiquetasDescarga entity by id.
     *
     * @param mixed $id The entity id
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm($id)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('admin_etiquetas_delete', array('id' => $id)))
            ->setMethod('DELETE')
            ->add('submit', 'submit', array('label' => 'Eliminar','attr'=>array('class'=>'btn btn btn-danger')))
            ->getForm()
        ;
    }
}
