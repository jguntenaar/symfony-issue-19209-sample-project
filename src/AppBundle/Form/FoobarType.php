<?php

namespace AppBundle\Form;

use AppBundle\Form\DataTransformer\BeerTransformer;
use AppBundle\Form\DataTransformer\CakeTransformer;
use Doctrine\Common\Persistence\ObjectManager;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class FoobarType extends AbstractType
{
    private $manager;

    public function __construct(ObjectManager $manager)
    {
        $this->manager = $manager;
    }

    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('beer', TextType::class)
            ->add('cake', TextType::class)
        ;

        $builder->get('beer')->addModelTransformer(new BeerTransformer($this->manager));
        $builder->get('cake')->addModelTransformer(new CakeTransformer($this->manager));
    }
    
    /**
     * @param OptionsResolver $resolver
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'AppBundle\Entity\Foobar'
        ));
    }
}
