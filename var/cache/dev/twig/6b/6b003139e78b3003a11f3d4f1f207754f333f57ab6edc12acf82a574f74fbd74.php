<?php

/* :users:create.html.twig */
class __TwigTemplate_f374724752305329e2cd3918e42380c02783bb2a020e150435f4494f81aa5fba extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":users:create.html.twig", 1);
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
        $__internal_762c2f9ea24e585f4f6db696120c519b30b79c06b79406a0da682facc48ffd6b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_762c2f9ea24e585f4f6db696120c519b30b79c06b79406a0da682facc48ffd6b->enter($__internal_762c2f9ea24e585f4f6db696120c519b30b79c06b79406a0da682facc48ffd6b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":users:create.html.twig"));

        $__internal_14801acbbface0a3b6056605983bf40b086572e4ba7a453966c92fb85d77e925 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_14801acbbface0a3b6056605983bf40b086572e4ba7a453966c92fb85d77e925->enter($__internal_14801acbbface0a3b6056605983bf40b086572e4ba7a453966c92fb85d77e925_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":users:create.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_762c2f9ea24e585f4f6db696120c519b30b79c06b79406a0da682facc48ffd6b->leave($__internal_762c2f9ea24e585f4f6db696120c519b30b79c06b79406a0da682facc48ffd6b_prof);

        
        $__internal_14801acbbface0a3b6056605983bf40b086572e4ba7a453966c92fb85d77e925->leave($__internal_14801acbbface0a3b6056605983bf40b086572e4ba7a453966c92fb85d77e925_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_8fe1be888905ce480315704af44086a9f64f0832056d802e02cd6226af630def = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8fe1be888905ce480315704af44086a9f64f0832056d802e02cd6226af630def->enter($__internal_8fe1be888905ce480315704af44086a9f64f0832056d802e02cd6226af630def_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_0a1776939a774b1fc26ed4e839b46d909545b352f4dd76a111ff32407f9dd250 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0a1776939a774b1fc26ed4e839b46d909545b352f4dd76a111ff32407f9dd250->enter($__internal_0a1776939a774b1fc26ed4e839b46d909545b352f4dd76a111ff32407f9dd250_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "\t<h2 class=\"page-header\">Add user</h2>
\t";
        // line 5
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_start');
        echo "
\t";
        // line 6
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'widget');
        echo "
\t";
        // line 7
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_end');
        echo "
";
        
        $__internal_0a1776939a774b1fc26ed4e839b46d909545b352f4dd76a111ff32407f9dd250->leave($__internal_0a1776939a774b1fc26ed4e839b46d909545b352f4dd76a111ff32407f9dd250_prof);

        
        $__internal_8fe1be888905ce480315704af44086a9f64f0832056d802e02cd6226af630def->leave($__internal_8fe1be888905ce480315704af44086a9f64f0832056d802e02cd6226af630def_prof);

    }

    public function getTemplateName()
    {
        return ":users:create.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  60 => 7,  56 => 6,  52 => 5,  49 => 4,  40 => 3,  11 => 1,);
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
\t<h2 class=\"page-header\">Add user</h2>
\t{{ form_start(form) }}
\t{{ form_widget(form) }}
\t{{ form_end(form) }}
{% endblock %}", ":users:create.html.twig", "/home/upboostn/public_html/app/Resources/views/users/create.html.twig");
    }
}
