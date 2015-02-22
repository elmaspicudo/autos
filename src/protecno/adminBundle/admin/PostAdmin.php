<?php

namespace protecno\adminBundle\admin;

use Sonata\AdminBundle\Admin\Admin;
use Sonata\AdminBundle\Datagrid\ListMapper;
use Sonata\AdminBundle\Datagrid\DatagridMapper;
use Sonata\AdminBundle\Form\FormMapper;

class PostAdmin extends Admin
{
    // Fields to be shown on create/edit forms
    protected function configureFormFields(FormMapper $formMapper)
    {
        $formMapper
            ->add('modelo', 'text', array('label' => 'modelo'))
            ->add('anio', 'text', array('label' => 'Anio'))
            ->add('codigo', 'text', array('label' => 'Codigo'))
            ->add('motor', 'text', array('label' => 'Motor'))
            ->add('km', 'text', array('label' => 'Kilometraje')) 
            ->add('interior', 'text', array('label' => 'Interior'))
            ->add('exterior', 'text', array('label' => 'Exterior'))
            ->add('puertas', 'text', array('label' => 'Puertas'))
            ->add('llaves', 'text', array('label' => 'Llaves'))
            ->add('tenencia', 'text', array('label' => 'Tenencia')) 
            ->add('precio', 'text', array('label' => 'Precio'))
            ->add('precio_anterior', 'text', array('label' => 'Precio anterior'))
            ->add('rebaja', 'checkbox', array('label' => 'Rebaja'))
            ->add('gastosReparacion', 'text', array('label' => 'Gastos de Reparacion')) 
            ->add('observaciones', 'text', array('label' => 'Observaciones')) 
            //if no type is specified, SonataAdminBundle tries to guess it
            ->add('imagen_dos', 'sonata_type_collection',
                     array(
                         'required' => false,
                         'by_reference' => false
                     ),
                     array(
                         'edit' => 'inline',
                         'inline' => 'table',
                         'allow_delete' => true
                     ))
                        ;
    }

    // Fields to be shown on filter forms
    protected function configureDatagridFilters(DatagridMapper $datagridMapper)
    {
        $datagridMapper
            ->add('modelo')
            ->add('anio')
            ->add('codigo')
            ->add('motor')
        ;
    }

    // Fields to be shown on lists
    protected function configureListFields(ListMapper $listMapper)
    {
        $listMapper
            ->add('modelo')
            ->add('anio')
            ->addIdentifier('codigo')
            ->addIdentifier('motor')

        ;
    }
    public function prePersist($page) {
        $this->manageEmbeddedImageAdmins($page);
    }
    public function preUpdate($page) {
        $this->manageEmbeddedImageAdmins($page);
    }
    private function manageEmbeddedImageAdmins($page) {
        // Cycle through each field
        foreach ($this->getFormFieldDescriptions() as $fieldName => $fieldDescription) {
            // detect embedded Admins that manage Images
            if ($fieldDescription->getType() === 'sonata_type_admin' &&
                ($associationMapping = $fieldDescription->getAssociationMapping()) &&
                $associationMapping['targetEntity'] === 'YourNS\YourBundle\Entity\Image'
            ) {
                $getter = 'get' . $fieldName;
                $setter = 'set' . $fieldName;

                /** @var Image $image */
                $image = $page->$getter();
                if ($image) {
                    if ($image->getFile()) {
                        // update the Image to trigger file management
                        $image->refreshUpdated();
                    } elseif (!$image->getFile() && !$image->getFilename()) {
                        // prevent Sf/Sonata trying to create and persist an empty Image
                        $page->$setter(null);
                    }
                }
            }
        }
    }

}