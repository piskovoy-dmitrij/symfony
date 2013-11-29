<?php

namespace GeekHub\DemoBundle\Form\Type;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class AddressType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->add('street', 'text')
                ->add('building', 'text')
                ->add('apartment', 'text');
    }

    public function getName()
    {
        return 'address';
    }

    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'GeekHub\DemoBundle\Form\Model\Address'
        ));
    }
}
