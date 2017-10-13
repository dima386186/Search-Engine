<?php

/* @Framework/Form/button_widget.html.php */
class __TwigTemplate_67d45408b050f433591e2d3bcefd17d2b6bb350a1bf95d45c2422c42f157705a extends Twig_Template
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
        $__internal_a489674a316b7fd7e1c5f88fe699dba4dc2dc1cd44fbad272740c2af6dea8eab = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a489674a316b7fd7e1c5f88fe699dba4dc2dc1cd44fbad272740c2af6dea8eab->enter($__internal_a489674a316b7fd7e1c5f88fe699dba4dc2dc1cd44fbad272740c2af6dea8eab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_widget.html.php"));

        $__internal_e7a19624643e7da8c22f341fa9b85e36fed4ac6a79da3227830a1b96ff880418 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e7a19624643e7da8c22f341fa9b85e36fed4ac6a79da3227830a1b96ff880418->enter($__internal_e7a19624643e7da8c22f341fa9b85e36fed4ac6a79da3227830a1b96ff880418_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_widget.html.php"));

        // line 1
        echo "<?php if (!\$label) { \$label = isset(\$label_format)
    ? strtr(\$label_format, array('%name%' => \$name, '%id%' => \$id))
    : \$view['form']->humanize(\$name); } ?>
<button type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'button' ?>\" <?php echo \$view['form']->block(\$form, 'button_attributes') ?>><?php echo \$view->escape(false !== \$translation_domain ? \$view['translator']->trans(\$label, array(), \$translation_domain) : \$label) ?></button>
";
        
        $__internal_a489674a316b7fd7e1c5f88fe699dba4dc2dc1cd44fbad272740c2af6dea8eab->leave($__internal_a489674a316b7fd7e1c5f88fe699dba4dc2dc1cd44fbad272740c2af6dea8eab_prof);

        
        $__internal_e7a19624643e7da8c22f341fa9b85e36fed4ac6a79da3227830a1b96ff880418->leave($__internal_e7a19624643e7da8c22f341fa9b85e36fed4ac6a79da3227830a1b96ff880418_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/button_widget.html.php";
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
        return new Twig_Source("<?php if (!\$label) { \$label = isset(\$label_format)
    ? strtr(\$label_format, array('%name%' => \$name, '%id%' => \$id))
    : \$view['form']->humanize(\$name); } ?>
<button type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'button' ?>\" <?php echo \$view['form']->block(\$form, 'button_attributes') ?>><?php echo \$view->escape(false !== \$translation_domain ? \$view['translator']->trans(\$label, array(), \$translation_domain) : \$label) ?></button>
", "@Framework/Form/button_widget.html.php", "/home/upboostn/public_html/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/button_widget.html.php");
    }
}
