<?php

/* @Framework/Form/checkbox_widget.html.php */
class __TwigTemplate_a25dd99dd652a929ccb6049b4520b450579bc5851e692f638aaf91975c43bdc9 extends Twig_Template
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
        $__internal_7405077409a9d813b76a2eb0ac551d7672bab0fb116beefdbeecf4cf3179f194 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7405077409a9d813b76a2eb0ac551d7672bab0fb116beefdbeecf4cf3179f194->enter($__internal_7405077409a9d813b76a2eb0ac551d7672bab0fb116beefdbeecf4cf3179f194_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/checkbox_widget.html.php"));

        $__internal_7eed656c8c18200790c5c314424e2ccfb0fc578b3b79efd440e30fc3f053cbf1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7eed656c8c18200790c5c314424e2ccfb0fc578b3b79efd440e30fc3f053cbf1->enter($__internal_7eed656c8c18200790c5c314424e2ccfb0fc578b3b79efd440e30fc3f053cbf1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/checkbox_widget.html.php"));

        // line 1
        echo "<input type=\"checkbox\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    <?php if (strlen(\$value) > 0): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?>
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_7405077409a9d813b76a2eb0ac551d7672bab0fb116beefdbeecf4cf3179f194->leave($__internal_7405077409a9d813b76a2eb0ac551d7672bab0fb116beefdbeecf4cf3179f194_prof);

        
        $__internal_7eed656c8c18200790c5c314424e2ccfb0fc578b3b79efd440e30fc3f053cbf1->leave($__internal_7eed656c8c18200790c5c314424e2ccfb0fc578b3b79efd440e30fc3f053cbf1_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/checkbox_widget.html.php";
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
        return new Twig_Source("<input type=\"checkbox\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    <?php if (strlen(\$value) > 0): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?>
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
", "@Framework/Form/checkbox_widget.html.php", "/home/upboostn/public_html/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/checkbox_widget.html.php");
    }
}
