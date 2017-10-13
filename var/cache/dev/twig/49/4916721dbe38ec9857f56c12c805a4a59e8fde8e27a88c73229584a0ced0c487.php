<?php

/* :searches:edit.html.twig */
class __TwigTemplate_740c5f6b7349886f4d6b4ada66d1c48d5845dc2855ef148984c0960d6806b892 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":searches:edit.html.twig", 1);
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
        $__internal_030e71d38e371e1e1d2e1e3a1b51c6a778054250f10d44e69c8ff04ad47ce5f0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_030e71d38e371e1e1d2e1e3a1b51c6a778054250f10d44e69c8ff04ad47ce5f0->enter($__internal_030e71d38e371e1e1d2e1e3a1b51c6a778054250f10d44e69c8ff04ad47ce5f0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":searches:edit.html.twig"));

        $__internal_4e1d6cd17318d3c814e3644dd8137eaca1060b2ded0807bf744edbe43c776959 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4e1d6cd17318d3c814e3644dd8137eaca1060b2ded0807bf744edbe43c776959->enter($__internal_4e1d6cd17318d3c814e3644dd8137eaca1060b2ded0807bf744edbe43c776959_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":searches:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_030e71d38e371e1e1d2e1e3a1b51c6a778054250f10d44e69c8ff04ad47ce5f0->leave($__internal_030e71d38e371e1e1d2e1e3a1b51c6a778054250f10d44e69c8ff04ad47ce5f0_prof);

        
        $__internal_4e1d6cd17318d3c814e3644dd8137eaca1060b2ded0807bf744edbe43c776959->leave($__internal_4e1d6cd17318d3c814e3644dd8137eaca1060b2ded0807bf744edbe43c776959_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_a7774c3bc4365f5164fecba185c9618c9c1d89c9e0c3a08d9854b556ada8d35a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a7774c3bc4365f5164fecba185c9618c9c1d89c9e0c3a08d9854b556ada8d35a->enter($__internal_a7774c3bc4365f5164fecba185c9618c9c1d89c9e0c3a08d9854b556ada8d35a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_93b53dd12d13f85042dc830233785b6dfec079841b22eef7712130623235e85a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_93b53dd12d13f85042dc830233785b6dfec079841b22eef7712130623235e85a->enter($__internal_93b53dd12d13f85042dc830233785b6dfec079841b22eef7712130623235e85a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <a type=\"button\" class=\"btn btn-success\" href=\"/\">Back to searches</a>
    <hr>
    <h2 class=\"page-header\">Update search</h2>
    ";
        // line 7
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_start');
        echo "
    ";
        // line 8
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'widget');
        echo "
    ";
        // line 9
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_end');
        echo "
";
        
        $__internal_93b53dd12d13f85042dc830233785b6dfec079841b22eef7712130623235e85a->leave($__internal_93b53dd12d13f85042dc830233785b6dfec079841b22eef7712130623235e85a_prof);

        
        $__internal_a7774c3bc4365f5164fecba185c9618c9c1d89c9e0c3a08d9854b556ada8d35a->leave($__internal_a7774c3bc4365f5164fecba185c9618c9c1d89c9e0c3a08d9854b556ada8d35a_prof);

    }

    public function getTemplateName()
    {
        return ":searches:edit.html.twig";
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
    <a type=\"button\" class=\"btn btn-success\" href=\"/\">Back to searches</a>
    <hr>
    <h2 class=\"page-header\">Update search</h2>
    {{ form_start(form) }}
    {{ form_widget(form) }}
    {{ form_end(form) }}
{% endblock %}", ":searches:edit.html.twig", "/home/upboostn/public_html/app/Resources/views/searches/edit.html.twig");
    }
}
