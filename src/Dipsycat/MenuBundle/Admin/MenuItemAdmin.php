<?php

namespace Dipsycat\MenuBundle\Admin;

use Sonata\AdminBundle\Admin\AbstractAdmin;
use Sonata\AdminBundle\Datagrid\ListMapper;
use Sonata\AdminBundle\Datagrid\DatagridMapper;
use Sonata\AdminBundle\Form\FormMapper;

class MenuItemAdmin extends AbstractAdmin {

    protected function configureFormFields(FormMapper $formMapper) {
        $formMapper
                ->add('title', null, array())
                ->add('route', null, array())
                ->add('menu', 'sonata_type_model', array(
                    'class' => 'DipsycatMenuBundle:Menu',
                    'property' => 'title',
                    'required' => false
                        )
                )
        ;
    }

    protected function configureDatagridFilters(DatagridMapper $datagridMapper) {
        $datagridMapper
                ->add('title', null, array())
                ->add('id', null, array())
        ;
    }

    protected function configureListFields(ListMapper $listMapper) {
        $listMapper
                ->addIdentifier('title', null, array())
                ->add('id', null, array())
                ->add('menu', 'sonata_type_model', array(
                    'class' => 'DipsycatMenuBundle:Menu',
                    'property' => 'title',
                    'required' => false
                        )
                )
        ;
    }

}
