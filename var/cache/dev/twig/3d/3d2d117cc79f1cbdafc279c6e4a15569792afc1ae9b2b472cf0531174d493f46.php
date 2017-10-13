<?php

/* @Framework/Form/textarea_widget.html.php */
class __TwigTemplate_d3818089cde285d442db8e1f05de732c72b9ad894470a883fef3f244b7611127 extends Twig_Template
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
        $__internal_320b23011c8bc87e82cb085841d876e3f71e7bd19fef655d8d49ea31d3f67bb2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_320b23011c8bc87e82cb085841d876e3f71e7bd19fef655d8d49ea31d3f67bb2->enter($__internal_320b23011c8bc87e82cb085841d876e3f71e7bd19fef655d8d49ea31d3f67bb2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/textarea_widget.html.php"));

        $__internal_2e5f08a35685923a1f8c6e1059c85bcba846338dbba41263358e4542208dfa1d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2e5f08a35685923a1f8c6e1059c85bcba846338dbba41263358e4542208dfa1d->enter($__internal_2e5f08a35685923a1f8c6e1059c85bcba846338dbba41263358e4542208dfa1d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/textarea_widget.html.php"));

        // line 1
        echo "<textarea <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>><?php echo \$view->escape(\$value) ?></textarea>
";
        
        $__internal_320b23011c8bc87e82cb085841d876e3f71e7bd19fef655d8d49ea31d3f67bb2->leave($__internal_320b23011c8bc87e82cb085841d876e3f71e7bd19fef655d8d49ea31d3f67bb2_prof);

        
        $__internal_2e5f08a35685923a1f8c6e1059c85bcba846338dbba41263358e4542208dfa1d->leave($__internal_2e5f08a35685923a1f8c6e1059c85bcba846338dbba41263358e4542208dfa1d_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/textarea_widget.html.php";
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
        return new Twig_Source("<textarea <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>><?php echo \$view->escape(\$value) ?></textarea>
", "@Framework/Form/textarea_widget.html.php", "/home/upboostn/public_html/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/textarea_widget.html.php");
    }
}
