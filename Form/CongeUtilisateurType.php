<?php

namespace II\Bundle\CongeBundle\Form;

use Doctrine\ORM\EntityRepository;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

/**
 * Class CongeUtilisateurType
 * @package II\Bundle\CongeBundle\Form
 */
class CongeUtilisateurType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('utilisateur', EntityType::class, array(
                'required'    => false,
                'label'       => "User",
                'class' => 'II\Bundle\SecurityBundle\Entity\User',
                'query_builder' => function (EntityRepository $er) {
                    return $er->createQueryBuilder('u')
                        ->where("u.username != ''")
                        ->andWhere("u.isActive = 1")
                        ->orderBy('u.username', 'ASC');
                },
                'choice_label' => 'username',
                'choice_attr' => function($val, $key, $index) {
                    return ['class' => 'selectpicker'];
                },
            ))
            ->add('hasRTT', ChoiceType::class, array(
                'required'    => false,
                'label'       => "RTT",
                'choices'  => array(
                    '' => 'Sélectionner',
                    0 => 'Non',
                    1 => 'Oui',
                ),
                'choice_attr' => function($val, $key, $index) {
                    return ['class' => 'selectpicker'];
                },
            ))
        ;
    }

    /**
     * @param OptionsResolver $resolver
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
                'data_class' => 'II\Bundle\CongeBundle\Entity\CongeUtilisateur',
            )
        );
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'ii_bundle_congebundle_conge_utilisateur';
    }
}
