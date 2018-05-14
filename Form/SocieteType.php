<?php

namespace InterInvest\CongesBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Validator\Constraints\NotBlank;
use Symfony\Component\Validator\Constraints\Range;

/**
 * Class SocieteType
 * @package InterInvest\CongesBundle\Form
 */
class SocieteType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('nom', TextType::class, array(
                    'required'    => true,
                    'label'       => 'Nom',
                    'constraints' => array(
                        new NotBlank(array('message' => 'Vous devez renseigner le nom')),
                    ),
                )
            )
        ;
    }

    /**
     * @param OptionsResolver $resolver
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
                'data_class' => 'InterInvest\CongesBundle\Entity\Societe',
            )
        );
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'ii_bundle_congebundle_societe';
    }
}
