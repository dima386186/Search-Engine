<?php

/* :users:search.html.twig */
class __TwigTemplate_35203fc775c2d854735468c7df5faf082500a749e52dea1d596bcf5a83f011b4 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":users:search.html.twig", 1);
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
        $__internal_2175813c9f3e429e8d4ee8f5f511d372783ab4d905cecce44696b3d8311e91b7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2175813c9f3e429e8d4ee8f5f511d372783ab4d905cecce44696b3d8311e91b7->enter($__internal_2175813c9f3e429e8d4ee8f5f511d372783ab4d905cecce44696b3d8311e91b7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":users:search.html.twig"));

        $__internal_141ed19329f90748470efbc21a1c74fdd47e9e4edab0a1699b26f595316a6c7d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_141ed19329f90748470efbc21a1c74fdd47e9e4edab0a1699b26f595316a6c7d->enter($__internal_141ed19329f90748470efbc21a1c74fdd47e9e4edab0a1699b26f595316a6c7d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":users:search.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2175813c9f3e429e8d4ee8f5f511d372783ab4d905cecce44696b3d8311e91b7->leave($__internal_2175813c9f3e429e8d4ee8f5f511d372783ab4d905cecce44696b3d8311e91b7_prof);

        
        $__internal_141ed19329f90748470efbc21a1c74fdd47e9e4edab0a1699b26f595316a6c7d->leave($__internal_141ed19329f90748470efbc21a1c74fdd47e9e4edab0a1699b26f595316a6c7d_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_480cc34a84ac894f1bce637bf7859e48413c1f71d6c397e8f5042b7b22823a2f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_480cc34a84ac894f1bce637bf7859e48413c1f71d6c397e8f5042b7b22823a2f->enter($__internal_480cc34a84ac894f1bce637bf7859e48413c1f71d6c397e8f5042b7b22823a2f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_232a9b19632c4aaa1cd67730a374d0724c79cdc687ad08007f6bbcae5dba2b76 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_232a9b19632c4aaa1cd67730a374d0724c79cdc687ad08007f6bbcae5dba2b76->enter($__internal_232a9b19632c4aaa1cd67730a374d0724c79cdc687ad08007f6bbcae5dba2b76_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h2 class=\"page-header\">Search</h2>
    
    ";
        // line 6
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_start');
        echo "
    ";
        // line 7
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'widget');
        echo "
    ";
        // line 8
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_end');
        echo "

";
        
        $__internal_232a9b19632c4aaa1cd67730a374d0724c79cdc687ad08007f6bbcae5dba2b76->leave($__internal_232a9b19632c4aaa1cd67730a374d0724c79cdc687ad08007f6bbcae5dba2b76_prof);

        
        $__internal_480cc34a84ac894f1bce637bf7859e48413c1f71d6c397e8f5042b7b22823a2f->leave($__internal_480cc34a84ac894f1bce637bf7859e48413c1f71d6c397e8f5042b7b22823a2f_prof);

    }

    public function getTemplateName()
    {
        return ":users:search.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  61 => 8,  57 => 7,  53 => 6,  49 => 4,  40 => 3,  11 => 1,);
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
    <h2 class=\"page-header\">Search</h2>
    
    {{ form_start(form) }}
    {{ form_widget(form) }}
    {{ form_end(form) }}

{% endblock %}



", ":users:search.html.twig", "/home/upboostn/public_html/app/Resources/views/users/search.html.twig");
    }
}
