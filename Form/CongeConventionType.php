<?php

namespace II\Bundle\CongeBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Validator\Constraints\NotBlank;
use Symfony\Component\Validator\Constraints\Range;

/**
 * Class CongeConventionType
 * @package II\Bundle\CongeBundle\Form
 */
class CongeConventionType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array                $options
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
            ->add('nbJoursConge', TextType::class, array(
                    'required'    => true,
                    'label'       => 'Nombre de jours de congé',
                    'constraints' => array(
                        new Range(array(
                                'min'            => 0, 'minMessage' => 'Le nombre de jours de congés doit être >= {{ limit }}.',
                                'max'            => 100, 'maxMessage' => 'Le nombre de jours de congés doit être <= {{ limit }}.',
                                'invalidMessage' => 'Merci de saisir un chiffre',
                            )
                        ),
                        new NotBlank(array('message' => 'Vous devez renseigner le nombre de jours de congé')),
                    ),
                )
            )
            ->add('nbJoursCongeSupplementaireParAnciennete', TextType::class, array(
                    'required'    => true,
                    'label'       => 'Nombre de jours de congé supplémentaire par ancienneté',
                    'constraints' => array(
                        new Range(array(
                                'min'            => 0, 'minMessage' => 'Le nombre de jours de congés doit être >= {{ limit }}.',
                                'max'            => 100, 'maxMessage' => 'Le nombre de jours de congés doit être <= {{ limit }}.',
                                'invalidMessage' => 'Merci de saisir un chiffre',
                            )
                        ),
                        new NotBlank(array('message' => 'Vous devez renseigner le nombre de jours de congé supplémentaire par ancienneté')),
                    ),
                )
            )
            ->add('nbJoursCongeParental', TextType::class, array(
                    'required'    => true,
                    'label'       => 'Nombre de jours de congé parental',
                    'constraints' => array(
                        new Range(array(
                                'min'            => 0, 'minMessage' => 'Le nombre de jours de congés doit être >= {{ limit }}.',
                                'max'            => 100, 'maxMessage' => 'Le nombre de jours de congés doit être <= {{ limit }}.',
                                'invalidMessage' => 'Merci de saisir un chiffre',
                            )
                        ),
                        new NotBlank(array('message' => 'Vous devez renseigner le nombre de jours de congé parental')),
                    ),
                )
            )
            ->add('nbJoursDeces', TextType::class, array(
                    'required'    => true,
                    'label'       => 'Nombre de jours pour décès',
                    'constraints' => array(
                        new Range(array(
                                'min'            => 0, 'minMessage' => 'Le nombre de jours de congés doit être >= {{ limit }}.',
                                'max'            => 100, 'maxMessage' => 'Le nombre de jours de congés doit être <= {{ limit }}.',
                                'invalidMessage' => 'Merci de saisir un chiffre',
                            )
                        ),
                        new NotBlank(array('message' => 'Vous devez renseigner le nombre de jours pour décès')),
                    ),
                )
            )
            ->add('nbJoursTravailles', TextType::class, array(
                    'required'    => true,
                    'label'       => 'Nombre de jours travaillés',
                    'constraints' => array(
                        new Range(array(
                                'min'            => 0, 'minMessage' => 'Le nombre de jours de congés doit être >= {{ limit }}.',
                                'invalidMessage' => 'Merci de saisir un chiffre',
                            )
                        ),
                        new NotBlank(array('message' => 'Vous devez renseigner le nombre de jours travaillés')),
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
                'data_class' => 'II\Bundle\CongeBundle\Entity\CongeConvention',
            )
        );
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'ii_bundle_congebundle_conge_convention';
    }
}
