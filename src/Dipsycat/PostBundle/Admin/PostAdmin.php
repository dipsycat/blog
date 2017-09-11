<?php

namespace Dipsycat\PostBundle\Admin;

use Sonata\AdminBundle\Admin\AbstractAdmin;
use Sonata\AdminBundle\Datagrid\ListMapper;
use Sonata\AdminBundle\Datagrid\DatagridMapper;
use Sonata\AdminBundle\Form\FormMapper;

class PostAdmin extends AbstractAdmin {

    protected function configureFormFields(FormMapper $formMapper) {
        $formMapper
                ->add('title', 'text')
                ->add('body', 'textarea')
        ;
    }

    protected function configureDatagridFilters(DatagridMapper $datagridMapper) {
        $datagridMapper->add('title');
        $datagridMapper->add('created');
    }

    protected function configureListFields(ListMapper $listMapper) {
        $listMapper->addIdentifier('title');
        $listMapper->add('created');
        
    }

}
