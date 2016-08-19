<?php

namespace protecno\adminBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use protecno\adminBundle\Entity\slider;
use protecno\adminBundle\Form\sliderType;

/**
 * slider controller.
 *
 * @Route("/admin/slider")
 */
class sliderController extends Controller
{

    /**
     * Lists all slider entities.
     *
     * @Route("/", name="admin_slider")
     * @Method("GET")
     * @Template()
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('adminBundle:slider')->findAll();

        return array(
            'entities' => $entities,
        );
    }
    /**
     * Creates a new slider entity.
     *
     * @Route("/", name="admin_slider_create")
     * @Method("POST")
     * @Template("adminBundle:slider:new.html.twig")
     */
    public function createAction(Request $request)
    {
        $entity = new slider();
        $form = $this->createCreateForm($entity);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('admin_slider_show', array('id' => $entity->getId())));
        }

        return array(
            'entity' => $entity,
            'form'   => $form->createView(),
        );
    }

    /**
     * Creates a form to create a slider entity.
     *
     * @param slider $entity The entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createCreateForm(slider $entity)
    {
        $form = $this->createForm(new sliderType(), $entity, array(
            'action' => $this->generateUrl('admin_slider_create'),
            'method' => 'POST',
        ));

        //$form->add('submit', 'submit', array('label' => 'Create'));

        return $form;
    }

    /**
     * Displays a form to create a new slider entity.
     *
     * @Route("/new", name="admin_slider_new")
     * @Method("GET")
     * @Template()
     */
    public function newAction()
    {
        $entity = new slider();
        $form   = $this->createCreateForm($entity);

        return array(
            'entity' => $entity,
            'form'   => $form->createView(),
        );
    }

    /**
     * Finds and displays a slider entity.
     *
     * @Route("/{id}", name="admin_slider_show")
     * @Method("GET")
     * @Template()
     */
    public function showAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('adminBundle:slider')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find slider entity.');
        }

        $deleteForm = $this->createDeleteForm($id);

        return array(
            'entity'      => $entity,
            'delete_form' => $deleteForm->createView(),
        );
    }

    /**
     * Displays a form to edit an existing slider entity.
     *
     * @Route("/{id}/edit", name="admin_slider_edit")
     * @Method("GET")
     * @Template()
     */
    public function editAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('adminBundle:slider')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find slider entity.');
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
    * Creates a form to edit a slider entity.
    *
    * @param slider $entity The entity
    *
    * @return \Symfony\Component\Form\Form The form
    */
    private function createEditForm(slider $entity)
    {
        $form = $this->createForm(new sliderType(), $entity, array(
            'action' => $this->generateUrl('admin_slider_update', array('id' => $entity->getId())),
            'method' => 'PUT',
        ));

        //$form->add('submit', 'submit', array('label' => 'Update'));

        return $form;
    }
    /**
     * Edits an existing slider entity.
     *
     * @Route("/{id}", name="admin_slider_update")
     * @Method("PUT")
     * @Template("adminBundle:slider:edit.html.twig")
     */
    public function updateAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('adminBundle:slider')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find slider entity.');
        }

        $deleteForm = $this->createDeleteForm($id);
        $editForm = $this->createEditForm($entity);
        $editForm->handleRequest($request);

        if ($editForm->isValid()) {
            $em->flush();

            return $this->redirect($this->generateUrl('admin_slider_edit', array('id' => $id)));
        }

        return array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        );
    }
    /**
     * Deletes a slider entity.
     *
     * @Route("/delete", name="admin_slider_delete")
     * @Method("POST")
     */
    public function deleteAction(Request $request)
    {
            $id= $request->get('id',0);
            $em = $this->getDoctrine()->getManager();
            $entity = $em->getRepository('adminBundle:slider')->find($id);

            if (!$entity) {
                $response = new Response(json_encode(array('sino' => false)));
                $response->headers->set('Content-Type', 'application/json');
                return $response;
            }

            $em->remove($entity);
            $em->flush();
        

        $response = new Response(json_encode(array('sino' => true)));
        $response->headers->set('Content-Type', 'application/json');
        return $response;
    }

    /**
     * Creates a form to delete a slider entity by id.
     *
     * @param mixed $id The entity id
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm($id)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('admin_slider_delete', array('id' => $id)))
            ->setMethod('DELETE')
            ->add('submit', 'submit', array('label' => 'Eliminar','attr'=>array('class'=>'btn btn btn-danger')))
            ->getForm()
        ;
    }
}
