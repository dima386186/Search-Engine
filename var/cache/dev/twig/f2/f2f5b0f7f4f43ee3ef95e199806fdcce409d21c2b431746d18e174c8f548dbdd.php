<?php

/* @Framework/Form/hidden_row.html.php */
class __TwigTemplate_f3e7d9e4a1c5209e98f984ae0e5c9cf2985aeb2de61bfa73a835dc1bf9e80ae9 extends Twig_Template
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
        $__internal_40d537bac9d2a4ddab19e179d8c6648780b93cc5f72ac424395336ad5e9f94df = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_40d537bac9d2a4ddab19e179d8c6648780b93cc5f72ac424395336ad5e9f94df->enter($__internal_40d537bac9d2a4ddab19e179d8c6648780b93cc5f72ac424395336ad5e9f94df_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_row.html.php"));

        $__internal_7098c719f63902fe06e3589dfb35bd02c7970557236f8d49e8b85680dd1239f6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7098c719f63902fe06e3589dfb35bd02c7970557236f8d49e8b85680dd1239f6->enter($__internal_7098c719f63902fe06e3589dfb35bd02c7970557236f8d49e8b85680dd1239f6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_row.html.php"));

        // line 1
        echo "<?php echo \$view['form']->widget(\$form) ?>
";
        
        $__internal_40d537bac9d2a4ddab19e179d8c6648780b93cc5f72ac424395336ad5e9f94df->leave($__internal_40d537bac9d2a4ddab19e179d8c6648780b93cc5f72ac424395336ad5e9f94df_prof);

        
        $__internal_7098c719f63902fe06e3589dfb35bd02c7970557236f8d49e8b85680dd1239f6->leave($__internal_7098c719f63902fe06e3589dfb35bd02c7970557236f8d49e8b85680dd1239f6_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/hidden_row.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->widget(\$form) ?>
", "@Framework/Form/hidden_row.html.php", "/home/upboostn/public_html/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/hidden_row.html.php");
    }
}
