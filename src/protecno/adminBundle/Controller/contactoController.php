<?php

namespace protecno\adminBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use protecno\adminBundle\Entity\contacto;
use protecno\adminBundle\Form\contactoType;

/**
 * contacto controller.
 *
 * @Route("/admin/contacto")
 */
class contactoController extends Controller
{

    /**
     * Lists all contacto entities.
     *
     * @Route("/", name="admin_contacto")
     * @Method("GET")
     * @Template()
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('adminBundle:contacto')->findAll();

        return array(
            'entities' => $entities,
        );
    }
    /**
     * Creates a new contacto entity.
     *
     * @Route("/", name="admin_contacto_create")
     * @Method("POST")
     * @Template("adminBundle:contacto:new.html.twig")
     */
    public function createAction(Request $request)
    {
        $entity = new contacto();
        $form = $this->createCreateForm($entity);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('admin_contacto_show', array('id' => $entity->getId())));
        }

        return array(
            'entity' => $entity,
            'form'   => $form->createView(),
        );
    }

    /**
     * Creates a form to create a contacto entity.
     *
     * @param contacto $entity The entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createCreateForm(contacto $entity)
    {
        $form = $this->createForm(new contactoType(), $entity, array(
            'action' => $this->generateUrl('admin_contacto_create'),
            'method' => 'POST',
        ));

        //$form->add('submit', 'submit', array('label' => 'Create'));

        return $form;
    }

    /**
     * Displays a form to create a new contacto entity.
     *
     * @Route("/new", name="admin_contacto_new")
     * @Method("GET")
     * @Template()
     */
    public function newAction()
    {
        $entity = new contacto();
        $form   = $this->createCreateForm($entity);

        return array(
            'entity' => $entity,
            'form'   => $form->createView(),
        );
    }

    /**
     * Finds and displays a contacto entity.
     *
     * @Route("/{id}", name="admin_contacto_show")
     * @Method("GET")
     * @Template()
     */
    public function showAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('adminBundle:contacto')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find contacto entity.');
        }

        $deleteForm = $this->createDeleteForm($id);

        return array(
            'entity'      => $entity,
            'delete_form' => $deleteForm->createView(),
        );
    }

    /**
     * Displays a form to edit an existing contacto entity.
     *
     * @Route("/{id}/edit", name="admin_contacto_edit")
     * @Method("GET")
     * @Template()
     */
    public function editAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('adminBundle:contacto')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find contacto entity.');
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
    * Creates a form to edit a contacto entity.
    *
    * @param contacto $entity The entity
    *
    * @return \Symfony\Component\Form\Form The form
    */
    private function createEditForm(contacto $entity)
    {
        $form = $this->createForm(new contactoType(), $entity, array(
            'action' => $this->generateUrl('admin_contacto_update', array('id' => $entity->getId())),
            'method' => 'PUT',
        ));

        //$form->add('submit', 'submit', array('label' => 'Update'));

        return $form;
    }
    /**
     * Edits an existing contacto entity.
     *
     * @Route("/{id}", name="admin_contacto_update")
     * @Method("PUT")
     * @Template("adminBundle:contacto:edit.html.twig")
     */
    public function updateAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('adminBundle:contacto')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find contacto entity.');
        }

        $deleteForm = $this->createDeleteForm($id);
        $editForm = $this->createEditForm($entity);
        $editForm->handleRequest($request);

        if ($editForm->isValid()) {
            $em->flush();

            return $this->redirect($this->generateUrl('admin_contacto_edit', array('id' => $id)));
        }

        return array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        );
    }
    /**
     * Deletes a contacto entity.
     *
     * @Route("/{id}", name="admin_contacto_delete")
     * @Method("DELETE")
     */
    public function deleteAction(Request $request, $id)
    {
        $form = $this->createDeleteForm($id);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $entity = $em->getRepository('adminBundle:contacto')->find($id);

            if (!$entity) {
                throw $this->createNotFoundException('Unable to find contacto entity.');
            }

            $em->remove($entity);
            $em->flush();
        }

        return $this->redirect($this->generateUrl('admin_contacto'));
    }

    /**
     * Creates a form to delete a contacto entity by id.
     *
     * @param mixed $id The entity id
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm($id)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('admin_contacto_delete', array('id' => $id)))
            ->setMethod('DELETE')
            ->add('submit', 'submit', array('label' => 'Eliminar','attr'=>array('class'=>'btn btn btn-danger')))
            ->getForm()
        ;
    }
}
