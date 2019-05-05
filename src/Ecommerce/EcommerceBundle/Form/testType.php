<?php

    namespace Ecommerce\EcommerceBundle\Form;
    
    use Symfony\Component\Form\AbstractType;
    use Symfony\Component\Form\FormBuilderInterface;
    
    use Symfony\Component\Form\Extension\Core\Type\DateTimeType;
    use Symfony\Component\Form\Extension\Core\Type\EmailType;
    use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
    use Symfony\Component\Form\Extension\Core\Type\CountryType;
    use Symfony\Bridge\Doctrine\Form\Type\EntityType;
    
    use Symfony\Component\Form\Extension\Core\Type\SubmitType;

    use Symfony\Component\Form\Extension\Core\Type\TextareaType;

    

class testType extends AbstractType
{
    
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        //ici nous allons faire notre formulaire en php
        //le html c'est fini
        $builder                
            ->add('email',EmailType::class)
            ->add('nom',null,array('required' => false))
            ->add('prenom')
            ->add('sexe',ChoiceType::class,array('choices' => array('0' => 'homme',
                                                           '1' => 'femme',
                                                           '2' => 'autre'),'preferred_choices' => array('1','2'),'expanded' => false))
            ->add('contenu',TextareaType::class)
            ->add('date',DateTimeType::class)
            ->add('utilisateurs',EntityType::class, array('class' => 'Utilisateurs\UtilisateursBundle\Entity\Utilisateurs'))
            ->add('pays',CountryType::class)
            ->add('envoyer',SubmitType::class);
        
    }
    
    public function getName()
    {
        return "ecommerce_ecommercebundle_test";
    }
    
}