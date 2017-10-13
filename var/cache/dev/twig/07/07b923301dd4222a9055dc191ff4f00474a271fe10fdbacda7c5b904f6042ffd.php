<?php

/* @Framework/Form/password_widget.html.php */
class __TwigTemplate_1283476c222c9bbce51e385abe8ec02d6e18bd5579e3d3e847f10a5e63a38cb6 extends Twig_Template
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
        $__internal_e8d627737e968fd40d1b1ffb01897a1eb27de35a5c3e22f5ba9cb326a8b72c22 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e8d627737e968fd40d1b1ffb01897a1eb27de35a5c3e22f5ba9cb326a8b72c22->enter($__internal_e8d627737e968fd40d1b1ffb01897a1eb27de35a5c3e22f5ba9cb326a8b72c22_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/password_widget.html.php"));

        $__internal_4f4020d08da6b0e2e1b2d6e7a3c97d1ee8ca46e7c3f6983ed7b5d2454ad9a6e7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4f4020d08da6b0e2e1b2d6e7a3c97d1ee8ca46e7c3f6983ed7b5d2454ad9a6e7->enter($__internal_4f4020d08da6b0e2e1b2d6e7a3c97d1ee8ca46e7c3f6983ed7b5d2454ad9a6e7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/password_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'password')) ?>
";
        
        $__internal_e8d627737e968fd40d1b1ffb01897a1eb27de35a5c3e22f5ba9cb326a8b72c22->leave($__internal_e8d627737e968fd40d1b1ffb01897a1eb27de35a5c3e22f5ba9cb326a8b72c22_prof);

        
        $__internal_4f4020d08da6b0e2e1b2d6e7a3c97d1ee8ca46e7c3f6983ed7b5d2454ad9a6e7->leave($__internal_4f4020d08da6b0e2e1b2d6e7a3c97d1ee8ca46e7c3f6983ed7b5d2454ad9a6e7_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/password_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'password')) ?>
", "@Framework/Form/password_widget.html.php", "/home/upboostn/public_html/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/password_widget.html.php");
    }
}
