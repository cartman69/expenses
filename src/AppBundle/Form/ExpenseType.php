<?php

namespace AppBundle\Form;

use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use AppBundle\Form\Expense\TypeType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\CollectionType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class ExpenseType extends AbstractType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->add('merchant')->add('code')->add('amount')
            ->add('date','date', array('years' => range(date('Y') -50, date('Y'))))
                ->add('start_date','date', array('years' => range(date('Y') -50, date('Y'))))
                ->add('end_date', 'date', array('years' => range(date('Y') -50, date('Y'))))
                ->add('comment')
                ->add('type'/*, EntityType::class,
                [
                    'class' => 'AppBundle:Expense\Type',
                    /*'by_reference' => true,*/
                //]
                );
    }
    
    /**
     * {@inheritdoc}
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'AppBundle\Entity\Expense'
        ));
    }

    /**
     * {@inheritdoc}
     */
    public function getBlockPrefix()
    {
        return 'appbundle_expense';
    }


}
