<?php

/* @Framework/Form/form_widget_simple.html.php */
class __TwigTemplate_d5ceb9e5cf2e079cce5e70d6385e8bdb67cec88dcc3550c7ea4bb6fed1daeaf4 extends Twig_Template
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
        $__internal_33cfa0ef6d828fc38215e9cae738d556a654d976484b19e09d821ec7abe1a6a7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_33cfa0ef6d828fc38215e9cae738d556a654d976484b19e09d821ec7abe1a6a7->enter($__internal_33cfa0ef6d828fc38215e9cae738d556a654d976484b19e09d821ec7abe1a6a7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_simple.html.php"));

        $__internal_d0dd62f44e98fd27e652d8458ccf472ed73d1aec0a8bd7717aec61e080a606cf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d0dd62f44e98fd27e652d8458ccf472ed73d1aec0a8bd7717aec61e080a606cf->enter($__internal_d0dd62f44e98fd27e652d8458ccf472ed73d1aec0a8bd7717aec61e080a606cf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_simple.html.php"));

        // line 1
        echo "<input type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'text' ?>\" <?php echo \$view['form']->block(\$form, 'widget_attributes') ?><?php if (!empty(\$value) || is_numeric(\$value)): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?> />
";
        
        $__internal_33cfa0ef6d828fc38215e9cae738d556a654d976484b19e09d821ec7abe1a6a7->leave($__internal_33cfa0ef6d828fc38215e9cae738d556a654d976484b19e09d821ec7abe1a6a7_prof);

        
        $__internal_d0dd62f44e98fd27e652d8458ccf472ed73d1aec0a8bd7717aec61e080a606cf->leave($__internal_d0dd62f44e98fd27e652d8458ccf472ed73d1aec0a8bd7717aec61e080a606cf_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget_simple.html.php";
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
        return new Twig_Source("<input type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'text' ?>\" <?php echo \$view['form']->block(\$form, 'widget_attributes') ?><?php if (!empty(\$value) || is_numeric(\$value)): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?> />
", "@Framework/Form/form_widget_simple.html.php", "/home/upboostn/public_html/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_widget_simple.html.php");
    }
}
