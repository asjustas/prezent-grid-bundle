<?php

namespace Prezent\GridBundle\Grid\Type;

use Prezent\Grid\BaseElementTypeExtension;
use Prezent\Grid\ElementView;
use Symfony\Component\OptionsResolver\OptionsResolver;

/**
 * Translate labels
 *
 * @see BaseElementTypeExtension
 * @author Sander Marechal
 */
class TranslatableLabelTypeExtension extends BaseElementTypeExtension
{
    /**
     * {@inheritDoc}
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'label_translation_domain' => 'messages',
        ]);
    }

    /**
     * {@inheritDoc}
     */
    public function buildView(ElementView $view, array $options)
    {
        $view->vars['label_translation_domain'] = $options['label_translation_domain'];
    }

    /**
     * {@inheritDoc}
     */
    public function getExtendedType()
    {
        return 'element';
    }
}
