<?php

namespace App\Form;

use App\Entity\Equipement;
use App\Entity\GiteSearch;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\IntegerType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\ChoiceList\ChoiceList;

class GiteSearchType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('minSurface', IntegerType::class,[
                "required" => false,
                "label" => false,
                "attr" => ["placeholder" =>"Surface minimum"]
            ])
            ->add('minChambre', IntegerType::class,[
                "required" => false,
                "label" => false,
                "attr" => ["placeholder" =>"nombre de chambre  minimum"]
            ])
            ->add('minCouchage', IntegerType::class,[
                "required" => false,
                "label" => false,
                "attr" => ["placeholder" =>"nombre de couchage minimum"]
            ])
            ->add('submit', SubmitType::class, [
                "label"=> "rechercher",
                'attr' =>['class'=>'btn-secondary'] 
            ])
            ->add('equipement', EntityType::class, [
                'required' => false,
                'label' => false,
                'class' => Equipement::class,
                'choice_label' =>'name',
                'multiple' => true,
                "expanded" => true,
            ])
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => GiteSearch::class,
        ]);
    }
}
