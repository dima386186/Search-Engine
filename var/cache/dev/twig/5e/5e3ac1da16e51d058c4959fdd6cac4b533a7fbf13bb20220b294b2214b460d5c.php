<?php

/* @Framework/Form/form_widget_compound.html.php */
class __TwigTemplate_87bc2ad0d92c39f89daf1ef15f5aa64fdf0c415627647850033f7d081f448a09 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_a9f64f29c02480587098fd90008f854d3dabe9116634a067f36c2fdc4f7ab8aa = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a9f64f29c02480587098fd90008f854d3dabe9116634a067f36c2fdc4f7ab8aa->enter($__internal_a9f64f29c02480587098fd90008f854d3dabe9116634a067f36c2fdc4f7ab8aa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_compound.html.php"));

        $__internal_afae0b38ac10bed9de0e23587b210b242ad45cae801ca8db111b06d9d8acf1da = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_afae0b38ac10bed9de0e23587b210b242ad45cae801ca8db111b06d9d8acf1da->enter($__internal_afae0b38ac10bed9de0e23587b210b242ad45cae801ca8db111b06d9d8acf1da_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_compound.html.php"));

        // line 1
        echo "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</div>
";
        
        $__internal_a9f64f29c02480587098fd90008f854d3dabe9116634a067f36c2fdc4f7ab8aa->leave($__internal_a9f64f29c02480587098fd90008f854d3dabe9116634a067f36c2fdc4f7ab8aa_prof);

        
        $__internal_afae0b38ac10bed9de0e23587b210b242ad45cae801ca8db111b06d9d8acf1da->leave($__internal_afae0b38ac10bed9de0e23587b210b242ad45cae801ca8db111b06d9d8acf1da_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget_compound.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</div>
", "@Framework/Form/form_widget_compound.html.php", "/home/upboostn/public_html/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_widget_compound.html.php");
    }
}
