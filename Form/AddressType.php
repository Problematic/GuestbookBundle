<?php

namespace Problematic\GuestbookBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilder;

class AddressType extends AbstractType
{
    
    public function buildForm(FormBuilder $builder, array $options)
    {
        $builder->add('name');
        $builder->add('phone', 'text', array('required'=>false));
        $builder->add('email', 'text', array('required'=>false));
        $builder->add('line_1');
        $builder->add('line_2', 'text', array('required'=>false));
        $builder->add('city');
        $builder->add('state');
        $builder->add('zip');
    }
    
    public function getDefaultOptions(array $options)
    {
        return array(
            'data_class' => 'Problematic\GuestbookBundle\Model\Address',
        );
    }
    
}
