<?php

/* @Framework/Form/choice_widget_expanded.html.php */
class __TwigTemplate_e729876586e0fbb1d066ebc07f1e2ec0640a710fecde06887982dc0f87c3f45f extends Twig_Template
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
        $__internal_195ff46e4170f24d058a9bcdf0144c4876cc5101ea48ba9396252f256586a9d7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_195ff46e4170f24d058a9bcdf0144c4876cc5101ea48ba9396252f256586a9d7->enter($__internal_195ff46e4170f24d058a9bcdf0144c4876cc5101ea48ba9396252f256586a9d7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget_expanded.html.php"));

        $__internal_3f924b9eeb001d97cec4ad588e18900bc27cf65efa934081849d98c0ab964eb7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3f924b9eeb001d97cec4ad588e18900bc27cf65efa934081849d98c0ab964eb7->enter($__internal_3f924b9eeb001d97cec4ad588e18900bc27cf65efa934081849d98c0ab964eb7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget_expanded.html.php"));

        // line 1
        echo "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
<?php foreach (\$form as \$child): ?>
    <?php echo \$view['form']->widget(\$child) ?>
    <?php echo \$view['form']->label(\$child, null, array('translation_domain' => \$choice_translation_domain)) ?>
<?php endforeach ?>
</div>
";
        
        $__internal_195ff46e4170f24d058a9bcdf0144c4876cc5101ea48ba9396252f256586a9d7->leave($__internal_195ff46e4170f24d058a9bcdf0144c4876cc5101ea48ba9396252f256586a9d7_prof);

        
        $__internal_3f924b9eeb001d97cec4ad588e18900bc27cf65efa934081849d98c0ab964eb7->leave($__internal_3f924b9eeb001d97cec4ad588e18900bc27cf65efa934081849d98c0ab964eb7_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_widget_expanded.html.php";
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
<?php foreach (\$form as \$child): ?>
    <?php echo \$view['form']->widget(\$child) ?>
    <?php echo \$view['form']->label(\$child, null, array('translation_domain' => \$choice_translation_domain)) ?>
<?php endforeach ?>
</div>
", "@Framework/Form/choice_widget_expanded.html.php", "/home/upboostn/public_html/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/choice_widget_expanded.html.php");
    }
}
