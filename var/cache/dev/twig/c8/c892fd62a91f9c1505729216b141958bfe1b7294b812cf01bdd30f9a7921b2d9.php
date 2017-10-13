<?php

/* :users:edit.html.twig */
class __TwigTemplate_4d498a37ced43f69d0dc0e19e5406439bf9f86f9a2b3393f95942281c567c3ee extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":users:edit.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_4cbadb988bf2d0dd4c1c05d6135cf1158d03c6277236be37b37fddace2f80596 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4cbadb988bf2d0dd4c1c05d6135cf1158d03c6277236be37b37fddace2f80596->enter($__internal_4cbadb988bf2d0dd4c1c05d6135cf1158d03c6277236be37b37fddace2f80596_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":users:edit.html.twig"));

        $__internal_01b6d3334b0d6f24bd5563ca559b9699c9eabda14adbda5f4a521ced8ff12d01 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_01b6d3334b0d6f24bd5563ca559b9699c9eabda14adbda5f4a521ced8ff12d01->enter($__internal_01b6d3334b0d6f24bd5563ca559b9699c9eabda14adbda5f4a521ced8ff12d01_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":users:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4cbadb988bf2d0dd4c1c05d6135cf1158d03c6277236be37b37fddace2f80596->leave($__internal_4cbadb988bf2d0dd4c1c05d6135cf1158d03c6277236be37b37fddace2f80596_prof);

        
        $__internal_01b6d3334b0d6f24bd5563ca559b9699c9eabda14adbda5f4a521ced8ff12d01->leave($__internal_01b6d3334b0d6f24bd5563ca559b9699c9eabda14adbda5f4a521ced8ff12d01_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_17efff12a3e2c5255d0b97924ccfbb754e97655e8f84f48026a1bae7848b2936 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_17efff12a3e2c5255d0b97924ccfbb754e97655e8f84f48026a1bae7848b2936->enter($__internal_17efff12a3e2c5255d0b97924ccfbb754e97655e8f84f48026a1bae7848b2936_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_d38b3d2c80803f2294b5f7bc09da066df37baddaaa93c84db9ee7bd0aec48ff3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d38b3d2c80803f2294b5f7bc09da066df37baddaaa93c84db9ee7bd0aec48ff3->enter($__internal_d38b3d2c80803f2294b5f7bc09da066df37baddaaa93c84db9ee7bd0aec48ff3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "\t<a type=\"button\" class=\"btn btn-success\" href=\"/users\">Back to users</a>
\t<hr>
\t<h2 class=\"page-header\">Update user</h2>
\t";
        // line 7
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_start');
        echo "
\t";
        // line 8
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'widget');
        echo "
\t";
        // line 9
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_end');
        echo "
";
        
        $__internal_d38b3d2c80803f2294b5f7bc09da066df37baddaaa93c84db9ee7bd0aec48ff3->leave($__internal_d38b3d2c80803f2294b5f7bc09da066df37baddaaa93c84db9ee7bd0aec48ff3_prof);

        
        $__internal_17efff12a3e2c5255d0b97924ccfbb754e97655e8f84f48026a1bae7848b2936->leave($__internal_17efff12a3e2c5255d0b97924ccfbb754e97655e8f84f48026a1bae7848b2936_prof);

    }

    public function getTemplateName()
    {
        return ":users:edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  62 => 9,  58 => 8,  54 => 7,  49 => 4,  40 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'base.html.twig' %}

{% block body %}
\t<a type=\"button\" class=\"btn btn-success\" href=\"/users\">Back to users</a>
\t<hr>
\t<h2 class=\"page-header\">Update user</h2>
\t{{ form_start(form) }}
\t{{ form_widget(form) }}
\t{{ form_end(form) }}
{% endblock %}", ":users:edit.html.twig", "/home/upboostn/public_html/app/Resources/views/users/edit.html.twig");
    }
}
