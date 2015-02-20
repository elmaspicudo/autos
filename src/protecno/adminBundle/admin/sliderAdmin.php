<?php
namespace protecno\adminBundle\admin;

use Sonata\AdminBundle\Admin\Admin;
use Sonata\AdminBundle\Datagrid\ListMapper;
use Sonata\AdminBundle\Datagrid\DatagridMapper;
use Sonata\AdminBundle\Form\FormMapper;
class sliderAdmin extends Admin
{
    protected function configureFormFields(FormMapper $formMapper)
    {

         $image = $this->getSubject();

        // use $fileFieldOptions so we can add other options to the field
        $fileFieldOptions = array('required' => false);
        if ($image && ($webPath = $image->getWebPath())) {
            // get the container so the full path to the image can be set
            $container = $this->getConfigurationPool()->getContainer();
            $fullPath = $container->get('request')->getBasePath().'/'.$webPath;

            // add a 'help' option containing the preview's img tag
            $fileFieldOptions['help'] = '<img src="'.$fullPath.'" class="admin-preview" />';
        }

        $formMapper
            ->add('titulo', 'text', array('label' => 'Titulo'))
            ->add('subtitulo', 'text', array('label' => 'Subtitulo'))
            ->add('orden', 'text', array('label' => 'Orden'))
            ->add('imagen', 'file',$fileFieldOptions)
            // ... other fields can go here ...
        ;
    }
 // Fields to be shown on filter forms
    protected function configureDatagridFilters(DatagridMapper $datagridMapper)
    {
        $datagridMapper
            ->add('titulo')
            ->add('subtitulo')
        ;
    }

    // Fields to be shown on lists
    protected function configureListFields(ListMapper $listMapper)
    {
        $listMapper
            ->addIdentifier('titulo')
            ->addIdentifier('subtitulo')
        ;
    }
    public function prePersist($slider) {
        $this->manageFileUpload($slider);
    }

    public function preUpdate($slider) {
        $this->manageFileUpload($slider);
    }

    private function manageFileUpload($slider) {
        if ($slider->getImagen()) {
            $slider->refreshUpdated();
        }
    }

    // ...
}

?>