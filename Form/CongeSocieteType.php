<?php

namespace II\Bundle\CongeBundle\Form;

use Doctrine\ORM\EntityRepository;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Validator\Constraints\NotBlank;

/**
 * Class CongeSocieteType
 * @package II\Bundle\CongeBundle\Form
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
            ->add('gerant', EntityType::class, array(
                'required'    => false,
                'label'       => "Société",
                'class' => 'II\Bundle\MigrationBundle\Entity\Gerant',
                'query_builder' => function (EntityRepository $er) {
                    return $er->createQueryBuilder('u')
                        ->where("u.nom != ''")
                        ->orderBy('u.nom', 'ASC');
                },
                'choice_label' => 'nom',
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
                'data_class' => 'II\Bundle\CongeBundle\Entity\CongeSociete',
            )
        );
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'ii_bundle_congebundle_conge_societe';
    }
}
