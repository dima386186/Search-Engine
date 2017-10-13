<?php

/* @Framework/Form/percent_widget.html.php */
class __TwigTemplate_ae46bd5dddff688f7b494b80533c7ba7c28ef4fb26fcf877ea43a006761f2805 extends Twig_Template
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
        $__internal_a785f7d3cec00b6977d7ac7bd877468b84b2775dd248f03c8434450cbc9c00d4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a785f7d3cec00b6977d7ac7bd877468b84b2775dd248f03c8434450cbc9c00d4->enter($__internal_a785f7d3cec00b6977d7ac7bd877468b84b2775dd248f03c8434450cbc9c00d4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/percent_widget.html.php"));

        $__internal_2e05400ec11ca0d7c3d825450262e124e4be555c750535bfbf62978375c3de0f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2e05400ec11ca0d7c3d825450262e124e4be555c750535bfbf62978375c3de0f->enter($__internal_2e05400ec11ca0d7c3d825450262e124e4be555c750535bfbf62978375c3de0f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/percent_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?> %
";
        
        $__internal_a785f7d3cec00b6977d7ac7bd877468b84b2775dd248f03c8434450cbc9c00d4->leave($__internal_a785f7d3cec00b6977d7ac7bd877468b84b2775dd248f03c8434450cbc9c00d4_prof);

        
        $__internal_2e05400ec11ca0d7c3d825450262e124e4be555c750535bfbf62978375c3de0f->leave($__internal_2e05400ec11ca0d7c3d825450262e124e4be555c750535bfbf62978375c3de0f_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/percent_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?> %
", "@Framework/Form/percent_widget.html.php", "/home/upboostn/public_html/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/percent_widget.html.php");
    }
}
