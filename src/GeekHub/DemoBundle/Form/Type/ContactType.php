<?php

namespace GeekHub\DemoBundle\Form\Type;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class ContactType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->add('message', 'textarea')
                ->add('email', 'email');
//                ->add('address', 'address');
    }

    public function getName()
    {
        return 'contact';
    }

//    public function setDefaultOptions(OptionsResolverInterface $resolver)
//    {
//        $resolver->setDefaults(array(
//            'data_class' => 'GeekHub\DemoBundle\Form\Model\Contact'
//        ));
//    }
}
