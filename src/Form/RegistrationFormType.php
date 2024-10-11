<?php

namespace App\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\PasswordType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\TelType;
use Symfony\Component\Form\Extension\Core\Type\CheckboxType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use App\Entity\User;
use Symfony\Component\Validator\Constraints as Assert;
use Symfony\Component\Validator\Constraints\Callback;
use Symfony\Component\Validator\Context\ExecutionContextInterface;

class RegistrationFormType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('email', EmailType::class, [
                'label' => 'Adresse email',
            ])
            ->add('password', PasswordType::class, [
                'label' => 'Mot de passe',
            ])
            ->add('confirm_password', PasswordType::class, [
                'label' => 'Confirmation du mot de passe',
                'mapped' => false,
                'constraints' => [
                    new Assert\NotBlank(),
                    new Callback([$this, 'validatePasswordMatch'])
                ]
            ])
            ->add('firstname', TextType::class, [
                'label' => 'Prénom',
            ])
            ->add('lastname', TextType::class, [
                'label' => 'Nom de famille',
            ])
            ->add('social_security_number', TextType::class, [
                'label' => 'Numéro de sécurité sociale',
            ])
            ->add('phone_number', TelType::class, [
                'label' => 'Numéro de téléphone',
            ])
            ->add('cgu', CheckboxType::class, [
                'label' => false,
                'mapped' => false,
                'label_html' => true,
                'constraints' => [
                    new Assert\IsTrue([
                        'message' => 'Vous devez accepter les CGU et la Politique de Confidentialité.'
                    ])
                ]
            ]);
    }

    /**
     * Fonction de validation personnalisée pour vérifier si les mots de passe sont identiques.
     */
    public function validatePasswordMatch($value, ExecutionContextInterface $context): void
    {
        $form = $context->getRoot();
        $password = $form->get('password')->getData();
        $confirmPassword = $value;

        if ($password !== $confirmPassword) {
            $context->buildViolation('Les mots de passe ne correspondent pas.')
                ->atPath('confirm_password')
                ->addViolation();
        }
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => User::class,
        ]);
    }
}
