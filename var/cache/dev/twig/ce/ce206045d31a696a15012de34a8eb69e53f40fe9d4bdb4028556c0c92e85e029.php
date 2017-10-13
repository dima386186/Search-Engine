<?php

/* @Framework/Form/integer_widget.html.php */
class __TwigTemplate_853349d40b027b0742af72efcff8895fcb386b8841c4c61e8092d843840a2c26 extends Twig_Template
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
        $__internal_b40ce9581f7096bd98a86dca5054a8ad8858ca50a5b37f83f40181879bd71d1e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b40ce9581f7096bd98a86dca5054a8ad8858ca50a5b37f83f40181879bd71d1e->enter($__internal_b40ce9581f7096bd98a86dca5054a8ad8858ca50a5b37f83f40181879bd71d1e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/integer_widget.html.php"));

        $__internal_35200bc5bff4a9fba5b0df8bf521b444235cb6ea050a4b43fe9110f95a8d1851 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_35200bc5bff4a9fba5b0df8bf521b444235cb6ea050a4b43fe9110f95a8d1851->enter($__internal_35200bc5bff4a9fba5b0df8bf521b444235cb6ea050a4b43fe9110f95a8d1851_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/integer_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'number')) ?>
";
        
        $__internal_b40ce9581f7096bd98a86dca5054a8ad8858ca50a5b37f83f40181879bd71d1e->leave($__internal_b40ce9581f7096bd98a86dca5054a8ad8858ca50a5b37f83f40181879bd71d1e_prof);

        
        $__internal_35200bc5bff4a9fba5b0df8bf521b444235cb6ea050a4b43fe9110f95a8d1851->leave($__internal_35200bc5bff4a9fba5b0df8bf521b444235cb6ea050a4b43fe9110f95a8d1851_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/integer_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'number')) ?>
", "@Framework/Form/integer_widget.html.php", "/home/upboostn/public_html/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/integer_widget.html.php");
    }
}
