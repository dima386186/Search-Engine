<?php

/* TwigBundle:Exception:error.js.twig */
class __TwigTemplate_0d8abffb3e1d3efd192310a1b7f42e10cfa13e23a3497d297477e3f9dc0e6546 extends Twig_Template
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
        $__internal_c253a4825623324f1d41f882d5cc7ed7a0641b0fdbb451c2e9da617b012837e4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c253a4825623324f1d41f882d5cc7ed7a0641b0fdbb451c2e9da617b012837e4->enter($__internal_c253a4825623324f1d41f882d5cc7ed7a0641b0fdbb451c2e9da617b012837e4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.js.twig"));

        $__internal_a35dd25b869fbd652239c8492e9710270e0723dde3d5ec365be2a409e861b615 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a35dd25b869fbd652239c8492e9710270e0723dde3d5ec365be2a409e861b615->enter($__internal_a35dd25b869fbd652239c8492e9710270e0723dde3d5ec365be2a409e861b615_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_escape_filter($this->env, ($context["status_code"] ?? $this->getContext($context, "status_code")), "js", null, true);
        echo " ";
        echo twig_escape_filter($this->env, ($context["status_text"] ?? $this->getContext($context, "status_text")), "js", null, true);
        echo "

*/
";
        
        $__internal_c253a4825623324f1d41f882d5cc7ed7a0641b0fdbb451c2e9da617b012837e4->leave($__internal_c253a4825623324f1d41f882d5cc7ed7a0641b0fdbb451c2e9da617b012837e4_prof);

        
        $__internal_a35dd25b869fbd652239c8492e9710270e0723dde3d5ec365be2a409e861b615->leave($__internal_a35dd25b869fbd652239c8492e9710270e0723dde3d5ec365be2a409e861b615_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.js.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  28 => 2,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("/*
{{ status_code }} {{ status_text }}

*/
", "TwigBundle:Exception:error.js.twig", "/home/upboostn/public_html/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/error.js.twig");
    }
}
