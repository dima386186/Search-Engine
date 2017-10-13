<?php

/* WebProfilerBundle:Profiler:ajax_layout.html.twig */
class __TwigTemplate_ff4f784de7d39968997fa0506a178387aa33ed71f46150c109828b7570d5a96a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_c62d0876090c8a0bc2103d976ec9a3f81f3d289b4a143f971339ee39c5b0fa02 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c62d0876090c8a0bc2103d976ec9a3f81f3d289b4a143f971339ee39c5b0fa02->enter($__internal_c62d0876090c8a0bc2103d976ec9a3f81f3d289b4a143f971339ee39c5b0fa02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        $__internal_b577b40485c55a4676948a133137156fa17442a625b2b737f2c240803e989457 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b577b40485c55a4676948a133137156fa17442a625b2b737f2c240803e989457->enter($__internal_b577b40485c55a4676948a133137156fa17442a625b2b737f2c240803e989457_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_c62d0876090c8a0bc2103d976ec9a3f81f3d289b4a143f971339ee39c5b0fa02->leave($__internal_c62d0876090c8a0bc2103d976ec9a3f81f3d289b4a143f971339ee39c5b0fa02_prof);

        
        $__internal_b577b40485c55a4676948a133137156fa17442a625b2b737f2c240803e989457->leave($__internal_b577b40485c55a4676948a133137156fa17442a625b2b737f2c240803e989457_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_c77efd667a7e9e181fab8003da1857642cd49732b5b63b23e4800dded4e1b0b1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c77efd667a7e9e181fab8003da1857642cd49732b5b63b23e4800dded4e1b0b1->enter($__internal_c77efd667a7e9e181fab8003da1857642cd49732b5b63b23e4800dded4e1b0b1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_9fed1618f362ccccffd716b6fe699b74cea0ad657d46a76f2f4aa626c6e45d54 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9fed1618f362ccccffd716b6fe699b74cea0ad657d46a76f2f4aa626c6e45d54->enter($__internal_9fed1618f362ccccffd716b6fe699b74cea0ad657d46a76f2f4aa626c6e45d54_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_9fed1618f362ccccffd716b6fe699b74cea0ad657d46a76f2f4aa626c6e45d54->leave($__internal_9fed1618f362ccccffd716b6fe699b74cea0ad657d46a76f2f4aa626c6e45d54_prof);

        
        $__internal_c77efd667a7e9e181fab8003da1857642cd49732b5b63b23e4800dded4e1b0b1->leave($__internal_c77efd667a7e9e181fab8003da1857642cd49732b5b63b23e4800dded4e1b0b1_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:ajax_layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  26 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% block panel '' %}
", "WebProfilerBundle:Profiler:ajax_layout.html.twig", "/home/upboostn/public_html/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Profiler/ajax_layout.html.twig");
    }
}
