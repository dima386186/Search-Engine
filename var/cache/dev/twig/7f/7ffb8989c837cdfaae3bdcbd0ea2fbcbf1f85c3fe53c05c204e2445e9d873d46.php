<?php

/* @Framework/Form/radio_widget.html.php */
class __TwigTemplate_a4554165822b3d73746c1102627777a47c9f28ddf68e451dc2391d043c3f8544 extends Twig_Template
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
        $__internal_b8dfaf4208e8fdf5c66357ff9f1e5fc38c491d3c7ca93a006a176cb7ccfbfd35 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b8dfaf4208e8fdf5c66357ff9f1e5fc38c491d3c7ca93a006a176cb7ccfbfd35->enter($__internal_b8dfaf4208e8fdf5c66357ff9f1e5fc38c491d3c7ca93a006a176cb7ccfbfd35_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/radio_widget.html.php"));

        $__internal_44dca95ff14e041f607b6c94632560aaf4be7a6b5eec6795b449bdba2614e4b1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_44dca95ff14e041f607b6c94632560aaf4be7a6b5eec6795b449bdba2614e4b1->enter($__internal_44dca95ff14e041f607b6c94632560aaf4be7a6b5eec6795b449bdba2614e4b1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/radio_widget.html.php"));

        // line 1
        echo "<input type=\"radio\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    value=\"<?php echo \$view->escape(\$value) ?>\"
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_b8dfaf4208e8fdf5c66357ff9f1e5fc38c491d3c7ca93a006a176cb7ccfbfd35->leave($__internal_b8dfaf4208e8fdf5c66357ff9f1e5fc38c491d3c7ca93a006a176cb7ccfbfd35_prof);

        
        $__internal_44dca95ff14e041f607b6c94632560aaf4be7a6b5eec6795b449bdba2614e4b1->leave($__internal_44dca95ff14e041f607b6c94632560aaf4be7a6b5eec6795b449bdba2614e4b1_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/radio_widget.html.php";
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
        return new Twig_Source("<input type=\"radio\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    value=\"<?php echo \$view->escape(\$value) ?>\"
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
", "@Framework/Form/radio_widget.html.php", "/home/upboostn/public_html/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/radio_widget.html.php");
    }
}
