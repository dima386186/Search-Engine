<?php

namespace AppBundle\Form;

use Symfony\Component\Form\AbstractType;

use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;

use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;


class SearchForm extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
            $builder
            ->add('name', TextType::class, array('attr' => array('autofocus' => true, 'placeholder' => 'name for search', 'style' => 'margin-bottom: 15px')))

            ->add('category', ChoiceType::class, array('required'=>false, 'choices' => array(
                'Web, Mobile & Software Dev' => 'Web, Mobile & Software Dev',
                'Design & Creative' => 'Design & Creative',
                'Admin Support' => 'Admin Support',
                'IT & Networking' => 'IT & Networking',
                'Writing' => 'Writing',
                'Customer Service' => 'Customer Service',
                'Sales & Marketing' => 'Sales & Marketing',
                'Data Science & Analytics' => 'Data Science & Analytics',
                'Translation' => 'Translation',
                'Accounting & Consulting' => 'Accounting & Consulting',
                'Engineering & Architecture' => 'Engineering & Architecture',
                'Legal' => 'Legal',
                'Accounting & Consulting' => 'Accounting & Consulting'
            )))
            ->add('subcategory', ChoiceType::class, array('required'=>false, 'expanded' => true,'multiple' => true, 'choices' => array(

                'Desktop Software Development' => 'Desktop Software Development',
                'Ecommerce Development' => 'Ecommerce Development',
                'Game Development' => 'Game Development',
                'Mobile Development' => 'Mobile Development',
                'Product Management' => 'Product Management',
                'QA & Testing' => 'QA & Testing',
                'Scripts & Utilities' => 'Scripts & Utilities',
                'Web Development' => 'Web Development',
                'Web & Mobile Design' => 'Web & Mobile Design',
                'Other - Software Development' => 'Other - Software Development',

                'Animation' => 'Animation',
                'Audio Production' => 'Audio Production',
                'Graphic Design' => 'Graphic Design',
                'Illustration' => 'Illustration',
                'Logo Design & Branding' => 'Logo Design & Branding',
                'Photography' => 'Photography',
                'Presentations' => 'Presentations',
                'Video Production' => 'Video Production',
                'Voice Talent' => 'Voice Talent',
                'Other - Design & Creative' => 'Other - Design & Creative',

                'Data Entry' => 'Data Entry',
                'Personal / Virtual Assistant' => 'Personal / Virtual Assistant',
                'Project Management' => 'Project Management',
                'Transcription' => 'Transcription',
                'Web Research' => 'Web Research',
                'Other - Admin Support' => 'Other - Admin Support',

                'Customer Service' => 'Customer Service',
                'Technical Support' => 'Technical Support',
                'Other - Customer Service' => 'Other - Customer Service',

                'Database Administration' => 'Database Administration',
                'ERP / CRM Software' => 'ERP / CRM Software',
                'Information Security' => 'Information Security',
                'Network & System Administration' => 'Network & System Administration',
                'Other - IT & Networking' => 'Other - IT & Networking',

                'Academic Writing & Research' => 'Academic Writing & Research',
                'Article & Blog Writing' => 'Article & Blog Writing',
                'Copywriting' => 'Copywriting',
                'Creative Writing' => 'Creative Writing',
                'Editing & Proofreading' => 'Editing & Proofreading',
                'Grant Writing' => 'Grant Writing',
                'Resumes & Cover Letters' => 'Resumes & Cover Letters',
                'Technical Writing' => 'Technical Writing',
                'Web Content' => 'Web Content',
                'Other - Writing' => 'Other - Writing',

                'Display Advertising' => 'Display Advertising',
                'Email & Marketing Automation' => 'Email & Marketing Automation',
                'Lead Generation' => 'Lead Generation',
                'Market & Customer Research' => 'Market & Customer Research',
                'Marketing Strategy' => 'Marketing Strategy',
                'Public Relations' => 'Public Relations',
                'SEM - Search Engine Marketing' => 'SEM - Search Engine Marketing',
                'SEO - Search Engine Optimization' => 'SEO - Search Engine Optimization',
                'SMM - Social Media Marketing' => 'SMM - Social Media Marketing',
                'Telemarketing & Telesales' => 'Telemarketing & Telesales',
                'Other - Sales & Marketing' => 'Other - Sales & Marketing',

                'A/B Testing' => 'A/B Testing',
                'Data Visualization' => 'Data Visualization',
                'Data Extraction / ETL' => 'Data Extraction / ETL',
                'Data Mining & Management' => 'Data Mining & Management',
                'Machine Learning' => 'Machine Learning',
                'Quantitative Analysis' => 'Quantitative Analysis',
                'Other - Data Science & Analytics' => 'Other - Data Science & Analytics',

                'General Translation' => 'General Translation',
                'Legal Translation' => 'Legal Translation',
                'Medical Translation' => 'Medical Translation',
                'Technical Translation' => 'Technical Translation',

                '3D Modeling & CAD' => '3D Modeling & CAD',
                'Architecture' => 'Architecture',
                'Chemical Engineering' => 'Chemical Engineering',
                'Civil & Structural Engineering' => 'Civil & Structural Engineering',
                'Contract Manufacturing' => 'Contract Manufacturing',
                'Electrical Engineering' => 'Electrical Engineering',
                'Interior Design' => 'Interior Design',
                'Mechanical Engineering' => 'Mechanical Engineering',
                'Product Design' => 'Product Design',
                'Other - Engineering & Architecture' => 'Other - Engineering & Architecture',

                'Contract Law' => 'Contract Law',
                'Corporate Law' => 'Corporate Law',
                'Criminal Law' => 'Criminal Law',
                'Family Law' => 'Family Law',
                'Intellectual Property Law' => 'Intellectual Property Law',
                'Paralegal Services' => 'Paralegal Services',
                'Other - Legal' => 'Other - Legal',

                'Accounting' => 'Accounting',
                'Financial Planning' => 'Financial Planning',
                'Human Resources' => 'Human Resources',
                'Management Consulting' => 'Management Consulting',
                'Other - Accounting & Consulting' => 'Other - Accounting & Consulting'
            )))
            ->add('jobType', ChoiceType::class, array('required'=>false,'placeholder' => 'Any', 'expanded' => true,'multiple' => false,'choices' => array('Hourly only' => 'hourly','Fixed only' => 'fixed')))
            ->add('budget', TextType::class, array('required'=>false, 'attr' => array('placeholder' => 'from', 'style' => 'margin-bottom: 15px')))
            ->add('location', TextType::class, array('required'=>false, 'attr' => array('placeholder' => 'countries separated by commas', 'style' => 'margin-bottom: 15px')))
            ->add('clientHistory', TextType::class, array('required'=>false, 'attr' => array('placeholder' => 'more', 'style' => 'margin-bottom: 15px')))
            ->add('keywordSearchInAny', TextType::class, array('required'=>false, 'attr' => array('placeholder' => 'words or combination of words separated by commas', 'style' => 'margin-bottom: 15px')))
            ->add('keywordSearchInTitle', TextType::class, array('required'=>false, 'attr' => array('placeholder' => 'words or combination of words separated by commas', 'style' => 'margin-bottom: 15px')))
            ->add('keywordSearchInDescription', TextType::class, array('required'=>false, 'attr' => array('placeholder' => 'words or combination of words separated by commas', 'style' => 'margin-bottom: 15px')))

            ->add('stopWordsInAny', TextType::class, array('required'=>false, 'attr' => array('placeholder' => 'words or combination of words separated by commas', 'style' => 'margin-bottom: 15px')))
            ->add('stopWordsInTitle', TextType::class, array('required'=>false, 'attr' => array('placeholder' => 'words or combination of words separated by commas', 'style' => 'margin-bottom: 15px')))
            ->add('stopWordsInDescription', TextType::class, array('required'=>false, 'attr' => array('placeholder' => 'words or combination of words separated by commas', 'style' => 'margin-bottom: 15px')))

            ->add('skills', TextType::class, array('required'=>false, 'attr' => array('placeholder' => 'words separated by commas', 'style' => 'margin-bottom: 15px')))
            ->add('verifiedPayment', ChoiceType::class, array('required'=>false, 'placeholder' => 'Any', 'expanded' => true,'multiple' => false,'choices' => array('Verified only' => 'verified')))

            ->add('moneySpent', TextType::class, array('required'=>false, 'attr' => array('placeholder' => 'more', 'style' => 'margin-bottom: 15px')))
            ->add('clientPreferredHoursOfExperience', TextType::class, array('required'=>false, 'attr' => array('placeholder' => 'not more then', 'style' => 'margin-bottom: 15px')))
            ->add('clientPreferredFreelancerLocation', TextType::class, array('required'=>false, 'attr' => array('placeholder' => 'not some locations, separated by commas', 'style' => 'margin-bottom: 15px')))
            ->add('clientEnglishLevelPreference', TextType::class, array('required'=>false, 'attr' => array('placeholder' => 'no or from and less', 'style' => 'margin-bottom: 15px')))
            ->add('clientTimezone', TextType::class, array('required'=>false, 'attr' => array('placeholder' => '+05:00 separated by commas', 'style' => 'margin-bottom: 15px')))
            ->add('charsInDescription', TextType::class, array('required'=>false, 'attr' => array('placeholder' => 'more', 'style' => 'margin-bottom: 15px')))
            ->add('clientFeedbackScore', TextType::class, array('required'=>false, 'attr' => array('placeholder' => 'from', 'style' => 'margin-bottom: 15px')))
            ->add('experienceLevel', TextType::class, array('required'=>false, 'attr' => array('placeholder' => 'separated by commas', 'style' => 'margin-bottom: 85px')))


            // Filter
            ->add('filterJobType', ChoiceType::class, array('required'=>false, 'expanded' => true,'multiple' => false,'choices' => array('Hourly only' => 'hourly','Fixed only' => 'fixed')))
            ->add('filterBudget', TextType::class, array('required'=>false, 'attr' => array('placeholder' => 'from', 'style' => 'margin-bottom: 15px')))
            ->add('filterExperienceLevel', TextType::class, array('required'=>false, 'attr' => array('placeholder' => 'number', 'style' => 'margin-bottom: 15px')))
            ->add('filterClientHistory', TextType::class, array('required'=>false, 'attr' => array('placeholder' => 'more', 'style' => 'margin-bottom: 15px')))
            ->add('filterSkills', TextType::class, array('required'=>false, 'attr' => array('placeholder' => 'separated by commas', 'style' => 'margin-bottom: 15px')))
            ->add('filterMoneySpent', TextType::class, array('required'=>false, 'attr' => array('placeholder' => 'more', 'style' => 'margin-bottom: 15px')))
            ->add('filterVerifiedPayment', ChoiceType::class, array('required'=>false, 'expanded' => true,'multiple' => false,'choices' => array('Verified only' => 'verified')))

            ->add('filterClientFeedbackScore', TextType::class, array('required'=>false, 'attr' => array('placeholder' => 'from', 'style' => 'margin-bottom: 15px')))
            ->add('filterAvgRate', TextType::class, array('required'=>false, 'attr' => array('placeholder' => 'from', 'style' => 'margin-bottom: 15px')))
            ->add('filterHoursBilled', TextType::class, array('required'=>false, 'attr' => array('placeholder' => 'more', 'style' => 'margin-bottom: 15px')))
            ->add('filterClientTimezone', TextType::class, array('required'=>false, 'attr' => array('placeholder' => '+05:00 separated by commas', 'style' => 'margin-bottom: 15px')))
            ->add('filterLocation', TextType::class, array('required'=>false, 'attr' => array('placeholder' => 'countries separated by commas', 'style' => 'margin-bottom: 15px')))
            ->add('filterStars', TextType::class, array('required'=>false, 'attr' => array('placeholder' => 'number', 'style' => 'margin-bottom: 15px')))

            ->add('save', SubmitType::class, array('label' => 'Create', 'attr' => array('class' => 'btn btn-primary', 'style' => 'margin-bottom: 15px')))
        ;
    }
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => 'AppBundle\Entity\Search'
        ]);
    }
}