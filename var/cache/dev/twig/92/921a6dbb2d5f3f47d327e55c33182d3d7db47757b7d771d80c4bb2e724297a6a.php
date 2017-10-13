<?php

/* @Framework/Form/widget_container_attributes.html.php */
class __TwigTemplate_bec29acf8d74a6dd80242478f22e91f8fa0f91aeda044f7610f706883edabdb5 extends Twig_Template
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
        $__internal_e646815809afd1f62a5a49c77b6e3760367b86d372b26cc2f298924ca5912190 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e646815809afd1f62a5a49c77b6e3760367b86d372b26cc2f298924ca5912190->enter($__internal_e646815809afd1f62a5a49c77b6e3760367b86d372b26cc2f298924ca5912190_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/widget_container_attributes.html.php"));

        $__internal_4e10196b2c8000b80e12ba378da0da5088aa6fda7cf5ad3133fcb99e5a1d3107 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4e10196b2c8000b80e12ba378da0da5088aa6fda7cf5ad3133fcb99e5a1d3107->enter($__internal_4e10196b2c8000b80e12ba378da0da5088aa6fda7cf5ad3133fcb99e5a1d3107_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/widget_container_attributes.html.php"));

        // line 1
        echo "<?php if (!empty(\$id)): ?>id=\"<?php echo \$view->escape(\$id) ?>\"<?php endif ?>
<?php echo \$attr ? ' '.\$view['form']->block(\$form, 'attributes') : '' ?>
";
        
        $__internal_e646815809afd1f62a5a49c77b6e3760367b86d372b26cc2f298924ca5912190->leave($__internal_e646815809afd1f62a5a49c77b6e3760367b86d372b26cc2f298924ca5912190_prof);

        
        $__internal_4e10196b2c8000b80e12ba378da0da5088aa6fda7cf5ad3133fcb99e5a1d3107->leave($__internal_4e10196b2c8000b80e12ba378da0da5088aa6fda7cf5ad3133fcb99e5a1d3107_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/widget_container_attributes.html.php";
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
        return new Twig_Source("<?php if (!empty(\$id)): ?>id=\"<?php echo \$view->escape(\$id) ?>\"<?php endif ?>
<?php echo \$attr ? ' '.\$view['form']->block(\$form, 'attributes') : '' ?>
", "@Framework/Form/widget_container_attributes.html.php", "/home/upboostn/public_html/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/widget_container_attributes.html.php");
    }
}
