<?php

namespace InterInvest\CongesBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Validator\Constraints\NotBlank;
use Symfony\Component\Validator\Constraints\Range;

/**
 * Class CongeSocieteType
 * @package InterInvest\CongesBundle\Form
 */
class CongeSocieteType extends AbstractType
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
            ->add('nbJoursRtt', TextType::class, array(
                    'required'    => true,
                    'label'       => 'Nombre de jours de RTT',
                    'constraints' => array(
                        new Range(array(
                                'min'            => 0, 'minMessage' => 'Le nombre de rtt de congés doit être >= {{ limit }}.',
                                'max'            => 100, 'maxMessage' => 'Le nombre de jours de rtt doit être <= {{ limit }}.',
                                'invalidMessage' => 'Merci de saisir un chiffre',
                            )
                        ),
                        new NotBlank(array('message' => 'Vous devez renseigner le nombre de jours de rtt')),
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
                'data_class' => 'InterInvest\CongesBundle\Entity\CongeSociete',
            )
        );
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'ii_bundle_congebundle_congeSociete';
    }
}
